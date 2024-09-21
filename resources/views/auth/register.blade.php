@extends('layouts.app')

@section('content')
    <div class="register-page">
        <div class="register-card">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Denexa Logo" class="logo">
            </div>

            <div class="description">
                <h2 class="register-title">Create Your Account</h2>
                <p class="register-text">Join us to enjoy our services!</p>
            </div>

            {{-- Success alert --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Error alerts --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-input" value="{{ old('username') }}"
                        required>
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

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

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-input"
                        required>
                </div>

                <button type="submit" class="register-btn">Register</button>
            </form>

            <div class="login-link">
                <p>Already have an account? <a href="{{ route('login') }}" class="login-link-text">Login</a></p>
            </div>
        </div>
    </div>
@endsection
