<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-body font-normal bg-body-bg">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    @vite("resources/css/{$cssFile}")
</head>
<body class="app">
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>

<!-- Scripts -->
@vite('resources/js/app.js')
</body>
</html>
