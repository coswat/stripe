<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentFormRequest;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session(PaymentFormRequest $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'customer_email' => $request->email,
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'inr',
                        'product_data' => [
                            'name' => 'Test Payment',
                        ],
                        'unit_amount' => $request->amount * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('status'),
            'cancel_url' => route('status'),
        ]);
        Session::put('pkey', $session->id);

        return redirect()->away($session->url);
    }

    public function paymentStatus()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        if (Session::has('pkey')) {
            $session = \Stripe\Checkout\Session::retrieve(Session::get('pkey'));
            $status = $session->payment_status;
            if ($status == 'paid') {
                Session::forget('pkey');

                return redirect('/')->with('alert', 'payment success');
            } else {
                Session::forget('pkey');

                return redirect('/')->with('alert', 'payment failed');
            }
        }
        Session::forget('pkey');

        return redirect('/')->with('alert', 'no payment id found');
    }
}
