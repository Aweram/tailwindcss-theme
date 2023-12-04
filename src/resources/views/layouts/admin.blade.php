<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-body font-normal bg-body-bg">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    @livewireStyles
    @vite("resources/css/{$cssFile}")
</head>
<body>
<main x-data="{ menuIsOpen: false, isInit: false }" x-init="isInit = true">
    <x-tt::admin.navigation />
    <x-tt::admin.menu />
    <div class="transition-all duration-500 w-full px-indent-half xl:px-indent xl:ml-menu xl:w-outer-menu mt-24">
        <div class="max-w-[1440px] mx-auto">
            {{ $slot }}
        </div>
    </div>
</main>

<!-- Scripts -->
@livewireScripts
@vite('resources/js/admin.js')
</body>
</html>
