@extends('layouts.app')

@section('content')
    <div class="kyc-page">
        <div class="kyc-card">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Denexa Logo" class="logo">
            </div>

            <div class="description">
                <h2 class="kyc-title">Complete Your KYC</h2>
                <p class="kyc-text">Please fill in your details below:</p>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('kyc.submit') }}">
                @csrf

                <div class="form-group">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-input"
                        value="{{ old('first_name') }}" required>
                    @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-input" value="{{ old('last_name') }}"
                        required>
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-input" value="{{ old('phone') }}"
                        required>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-input" value="{{ old('address') }}"
                        required>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" name="birthday" id="birthday" class="form-input" value="{{ old('birthday') }}"
                        required>
                    @error('birthday')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" id="country" class="form-input" value="{{ old('country') }}"
                        required>
                    @error('country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="kyc-btn">Submit KYC</button>
            </form>
        </div>
    </div>
@endsection
