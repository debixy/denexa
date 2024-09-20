@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manager Dashboard</h1>

    <h2>Your Projects</h2>
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }} - {{ $project->status }}</li>
        @endforeach
    </ul>

    <h2>Recent Services</h2>
    <ul>
        @foreach($recentServices as $service)
            <li>{{ $service->name }} - ${{ $service->price }}</li>
        @endforeach
    </ul>
</div>
@endsection
