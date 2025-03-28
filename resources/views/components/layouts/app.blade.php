<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ESCAPI') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
    <link href="{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="h-full bg-gray-50 dark:bg-gray-950">
    <div class="min-h-full">
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>
