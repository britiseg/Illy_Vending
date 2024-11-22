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

    @stack('styles') <!-- Si necesitas agregar más estilos específicos en otras vistas -->
    @include('layouts.header')
</head>
<body class="bg-beige font-sans antialiased">

    <div id="prepango-program" class="min-h-screen">
        @include('program.main')
    </div>
    <div id="prepango-experience" class="min-h-screen">
        @include('experience.main')
    </div>
    <div id="prepango-machine" class="min-h-screen">
        @include('machine.main')
    </div>
    <div id="prepango-new" class="min-h-screen">
        @include('new.main')
    </div>


</body>
</html>
