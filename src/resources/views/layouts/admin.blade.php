<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-body font-normal bg-light">
<head>
    {{ Vite::useBuildDirectory("/adminAssets") }}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    @vite("resources/css/{$cssFile}")
</head>
<body>
<div>
    {{ $slot }}
</div>

<!-- Scripts -->
@vite('resources/js/admin.js')
</body>
</html>
