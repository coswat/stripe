<?php

use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StripeController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [StripeController::class, 'session'])->name('proccess');
Route::get('/status', [StripeController::class, 'paymentStatus'])->name('status');
