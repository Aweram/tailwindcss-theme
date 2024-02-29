<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $htmlClasses }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(! empty($rawTitle))
        <title>{{ $rawTitle }}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}@isset($title) - {{ $title }} @endisset</title>
    @endif

    <!-- CSS -->
    @livewireStyles
    @vite("resources/css/{$cssFile}")
    @stack("styles")
</head>
<body class="app">
<div class="{{ $baseClasses }}">
    {{ $slot }}
</div>

<!-- Scripts -->
@livewireScripts
@vite('resources/js/app.js')
@stack("scripts")
</body>
</html>
