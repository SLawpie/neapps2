<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="main">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('layouts.favicons')
        <meta name="theme-color" content="#f3f4f6">

        <title>{{ config('app.name', 'NEApps') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nea.css') }}">

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    <body class="antialiased bg-gray-100 dark:bg-slate-800">

        @include('layouts.navigation')

        <!-- Container -->
        <main class="container mx-auto">
            {{ $slot }}
        </main>
        
        <!-- Scripts -->
        <script src="{{ asset('js/nea.js') }}"></script>
    </body>
</html>
