@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="auth-box register">
        <div class="auth-header">
            <i class="fas fa-user-plus auth-icon"></i>
            <h3>Create Account</h3>
            <p class="auth-subtitle">Join Muzio's music community today</p>
        </div>

        <form action="{{ route('register') }}" method="POST" class="auth-form">
            @csrf

            <div class="form-floating mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="John Doe">
                <label for="name">Full Name</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                <label for="email">Email Address</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                    value="{{ old('address') }}" required autocomplete="address" placeholder="Your Address">
                <label for="address">Address</label>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                    value="{{ old('phone') }}" required autocomplete="tel" placeholder="+254 XXX XXX XXX">
                <label for="phone">Phone Number</label>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-4">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Confirm Password">
                <label for="password-confirm">Confirm Password</label>
            </div>

            <div class="d-grid gap-2 mb-4">
                <button type="submit" class="btn btn-primary btn-lg auth-submit">
                    <i class="fas fa-user-plus me-2"></i>Create Account
                </button>
            </div>

            <div class="auth-separator">
                <span>or sign up with</span>
            </div>

            <div class="auth-social">
                <a href="#" class="auth-social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="auth-social-btn google">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="auth-social-btn twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>

            <div class="auth-footer">
                Already have an account? 
                <a href="{{ route('login') }}" class="auth-link">Sign in here</a>
            </div>
        </form>
    </div>
</div>
@endsection