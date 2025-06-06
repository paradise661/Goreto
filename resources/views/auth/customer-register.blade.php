@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Customer Registration</h2>
        <form method="POST" action="{{ route('customer.register.submit') }}">
            @csrf
            <div class="form-group mb-3">
                <label>Name</label>
                <input class="form-control" type="text" name="name" required>
            </div>

            <div class="form-group mb-3">
                <label>Email Address</label>
                <input class="form-control" type="email" name="email" required>
            </div>

            <div class="form-group mb-3">
                <label>Password</label>
                <input class="form-control" type="password" name="password" required>
            </div>

            <div class="form-group mb-4">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation" required>
            </div>

            <button class="btn btn-success">Register</button>
        </form>
    </div>
@endsection
