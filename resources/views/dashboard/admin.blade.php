@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $userCount }}</h3>
                        <p>Total Users</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $projectCount }}</h3>
                        <p>Total Projects</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $serviceCount }}</h3>
                        <p>Total Services</p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Recent Users</h2>
        <ul>
            @foreach ($recentUsers as $user)
                <li>{{ $user->name }} - {{ $user->email }}</li>
            @endforeach
        </ul>

        <h2>Recent Projects</h2>
        <ul>
            @foreach ($recentProjects as $project)
                <li>{{ $project->title }} - {{ $project->status }}</li>
            @endforeach
        </ul>
    </div>
@endsection
