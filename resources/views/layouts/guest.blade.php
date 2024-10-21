<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CartagenaXplore') }}</title>
        <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
        <link rel="icon" href="{{ asset('img/4.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        @livewireScripts

    </head>
    <body>
        <div class="font-satoshi text-gray-900 antialiased">

            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
