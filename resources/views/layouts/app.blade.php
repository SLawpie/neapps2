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

        @if (isset($style))
            {{ $style }}
        @endif

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

        <script type="text/javascript">
            if (localStorage.toggled === 'dark' || (!('toggled' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                localStorage.toggled = 'dark';
            } else {
                localStorage.toggled = '';
            }
        </script>

        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="antialiased bg-gray-100 dark:bg-slate-800">
        <div class="min-h-screen">
            @include('layouts.navigation-app')

            <!-- Page Heading -->
            <header class="bg-white dark:bg-slate-700 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/nea.js') }}"></script>
    </body>
</html>
