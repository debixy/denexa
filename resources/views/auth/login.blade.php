@extends('layouts.app')

@section('content')
    <div class="login-page">
        <div class="login-card">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Denexa Logo" class="logo">
            </div>

            <div class="description">
                <h2 class="login-title">Welcome Back!</h2>
                <p class="login-text">Please login to your account to continue.</p>
            </div>

            <!-- Display success message -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Display error messages -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-input" value="{{ old('email') }}"
                        required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-input" required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="register-btn">Login</button>
            </form>

            <div class="login-link">
                <p>Don't have an account? <a href="{{ route('register') }}" class="login-link-text">Sign Up</a></p>
            </div>

            <div class="social-links">
                <p>Or login with</p>
                <div class="social-buttons">
                    <a href="#" class="social-btn facebook">Facebook</a>
                    <a href="#" class="social-btn google">Google</a>
                </div>
            </div>
        </div>
    </div>
@endsection
