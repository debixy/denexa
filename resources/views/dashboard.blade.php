@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-center">Dashboard</h1>

    <p>Welcome, {{ auth()->user()->username }}!</p>
@endsection
