@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Dashboard</h1>
        <p>Welcome, {{ $user->first_name }} {{ $user->last_name }}. You are logged in as a {{ $userRole }}.</p>

        <h2>Your Projects</h2>
        <ul>
            @foreach ($userProjects as $project)
                <li>{{ $project->title }} - {{ $project->status }}</li>
            @endforeach
        </ul>
    </div>
@endsection
