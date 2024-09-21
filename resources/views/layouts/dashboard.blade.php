<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Vite imports -->
    </head>

    <body>
        <div class="wrapper d-flex">
            @include('dashboard.components.sidebar')

            <div class="main-content">
                @include('dashboard.components.header')

                <main class="content">
                    <div class="support-count badge bg-warning">0</div> <!-- Example for support count -->
                    <div id="earnings-chart"></div> <!-- Element for ApexCharts -->
                    @yield('content')
                </main>
            </div>
        </div>
    </body>

</html>
