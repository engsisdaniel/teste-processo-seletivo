<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/admin.png') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="font-sans antialiased bg-light">
    @include('layouts.navigation')

    <!-- Page Heading -->
    <header class="d-flex py-3 bg-white shadow-sm border-bottom">
        <div class="container">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main class="container my-5">
        {{ $slot }}
    </main>
</body>

</html>
