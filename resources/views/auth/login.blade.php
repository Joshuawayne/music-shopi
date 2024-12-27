@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="auth-box">
        <div class="auth-header">
            <i class="fas fa-music auth-icon"></i>
            <h3>Welcome Back</h3>
            <p class="auth-subtitle">Sign in to continue to Muzio</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="auth-form">
            @csrf

            <div class="form-floating mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                <label for="email">Email address</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="auth-forgot-link" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                    @endif
                </div>
            </div>

            <div class="d-grid gap-2 mb-4">
                <button type="submit" class="btn btn-primary btn-lg auth-submit">
                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                </button>
            </div>

            <div class="auth-separator">
                <span>or continue with</span>
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
                Don't have an account? 
                <a href="{{ route('register') }}" class="auth-link">Sign up now</a>
            </div>
        </form>
    </div>
</div>
@endsection