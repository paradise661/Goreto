@extends('layouts.frontend.master')

@section('content')
    <div class="container mt-5">
        <div class="alert alert-success">
            Welcome, {{ Auth::guard('customer')->user()->name }}! You are logged in as a customer.
        </div>
    </div>
@endsection
