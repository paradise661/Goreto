@extends('layouts.frontend.master')

@section('content')
    <div class="container mt-4">
        <h4>Change Password</h4>

        @if (session('status') === 'password-updated')
            <div class="alert alert-success">Password updated successfully!</div>
        @endif

        <form method="POST" action="{{ route('profile.password.update') }}">
            @csrf

            {{-- Current Password --}}
            <div class="mb-3 position-relative">
                <label class="form-label" for="current_password">Current Password</label>
                <div class="input-group">
                    <input class="form-control @error('current_password') is-invalid @enderror" id="current_password"
                        type="password" name="current_password" required>
                    <button class="btn btn-outline-secondary toggle-password" data-target="current_password" type="button">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>
                @error('current_password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- New Password --}}
            <div class="mb-3 position-relative">
                <label class="form-label" for="new_password">New Password</label>
                <div class="input-group">
                    <input class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                        type="password" name="new_password" required>
                    <button class="btn btn-outline-secondary toggle-password" data-target="new_password" type="button">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>
                @error('new_password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- Confirm New Password --}}
            <div class="mb-3 position-relative">
                <label class="form-label" for="new_password_confirmation">Confirm New Password</label>
                <div class="input-group">
                    <input class="form-control" id="new_password_confirmation" type="password"
                        name="new_password_confirmation" required>
                    <button class="btn btn-outline-secondary toggle-password" data-target="new_password_confirmation"
                        type="button">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Update Password</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const icon = this.querySelector('i');

                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                } else {
                    input.type = "password";
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                }
            });
        });
    </script>
@endsection
