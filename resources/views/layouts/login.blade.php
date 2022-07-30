<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Judul & CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />

    <!-- Addon Stylesheet -->
    @yield('addon-style')
    
    <!-- Custom Stylesheet -->
    @yield('style')
    
    <!-- Pace Script -->
    <link rel="stylesheet" href="{{ asset('vendor/pace-js/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/pace-js/pace-theme-corner-indicator.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>
    <main id="app">
        @yield('content')
    </main>

    <!-- Pace Javascript -->
    <script src="{{ asset('vendor/pace-js/pace.min.js') }}"></script>

    <!-- Main Script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Addon Script -->
    @yield('addon-script')
    
    <!-- Custom Script -->
    @yield('script')
</body>
</html>
