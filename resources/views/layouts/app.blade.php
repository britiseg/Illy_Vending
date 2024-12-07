<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Illy_Vending') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles: Vite compilará y servirá estos archivos CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('build/assets/app-dFS_VlMR.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-ZkQWdoG2.css') }}">
    <script src="{{ asset('build/assets/app-BteSoK7m.js') }}" defer></script>

    @stack('styles')

</head>
<body class=" font-sans antialiased {{ Route::is('get-in-touch') ? ' bg-mirrored' : 'bg-beige'  }}">
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

</html>
