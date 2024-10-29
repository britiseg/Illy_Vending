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
</head>
<body class="bg-beige font-sans antialiased">
    <div class="min-h-screen">




        @include('layouts.header')

        <div
  class="container mx-auto mt-4 text-center dark:text-white"
  style="height: 2000px">
  <p class="mb-4">
    Start scrolling the page and a strong
    <strong>"Back to top" button </strong> will appear in the
    <strong>bottom right corner</strong> of the screen.
  </p>
  <p>Click this button and you will be taken to the top of the page.</p>
</div>

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        <!-- Page Content -->
        {{-- <main>
            {{ $slot }}
        </main> --}}

        <!-- Include Footer -->
    </div>

    {{-- Scripts adicionales que puedas necesitar --}}
    {{-- @stack('scripts') --}}
</body>
</html>
