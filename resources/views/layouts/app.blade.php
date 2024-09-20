<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Denexa') }}</title>

        <!-- Vite CSS -->
        @vite('resources/css/app.css')
    </head>

    <body>
        <!-- Header with Navigation -->
        @include('components.header')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('components.footer')

        <!-- Vite JS -->
        @vite('resources/js/app.js')
    </body>

</html>
