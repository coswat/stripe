@extends('layouts.main')
@section('content')
@if(Session::has('alert'))
<h5><b>
{{ Session::get('alert') }}
</b></h5>
@endif
                <form action="{{ route('proccess') }}" method="POST" id="paymentForm" class="payment-form">
                      @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                            <x-input name="name" label="First Name" />
                            <div class="col-md-6">   
                    <x-input name="lastName" label="Last Name" />   
                       </div>
                        <div class="form-group">
                            <x-input name="email" label="Email" />
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="element-label"><span>Currency</span></div>
                                    <select class="form-control" disabled="true">
                                            <option value="INR">INR</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <x-input name="amount" label="Amount to charge" type="number" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Pay Now</button>
                        </div>
                    </form>
@endsection