@extends('layouts.dashboard')

@section('content')
    <div class="profile-page">
        <h1>Your Profile</h1>

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ Auth::user()->phone }}" required>
            </div>

            <!-- Add more fields as needed -->

            <button type="submit" class="btn-primary">Update Profile</button>
        </form>
    </div>
@endsection
