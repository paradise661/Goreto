@extends('layouts.app')

@section('content')
    <div class="container mt-5 col-md-7 p-5">
        <h4 class="text-center text-primary mb-4">Login to Goreto Pharmacy</h4>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="alert alert-danger py-2 px-3" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('customer.login.submit') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="email">Email address *</label>
                <input class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
                    type="email" name="email" value="{{ old('email') }}" required autofocus
                    placeholder="Enter your email" />
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">Password *</label>
                <input class="form-control form-control-lg @error('password') is-invalid @enderror" id="password"
                    type="password" name="password" required placeholder="Enter your password" />
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid mb-3">
                <button class="btn btn-primary btn-lg" type="submit">Login</button>
            </div>

            <div class="text-center mb-2">
                <a class="form-link" href="#">Forgot Password?</a>
            </div>

            <div class="text-center">
                <span>Don't have an account?</span>
                <a class="form-link fw-semibold" href="{{ route('customer.register') }}">Sign Up</a>
            </div>
        </form>
    </div>
@endsection
