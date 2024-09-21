@extends('layouts.dashboard')

@section('content')
    <div class="activities-page">
        <h1>Recent Activities</h1>

        <ul class="activities-list">
            @forelse($activities as $activity)
                <li>
                    <strong>{{ $activity->description }}</strong><br>
                    <small>{{ $activity->created_at->format('d M, Y H:i') }}</small>
                </li>
            @empty
                <li>No recent activities found.</li>
            @endforelse
        </ul>
    </div>
@endsection
