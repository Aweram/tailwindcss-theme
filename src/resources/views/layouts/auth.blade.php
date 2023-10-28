<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-body font-normal bg-body-bg">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}@isset($title) - {{ $title }} @endisset</title>

    <!-- CSS -->
    @vite("resources/css/{$cssFile}")
</head>
<body>
<div class="flex flex-wrap w-full min-h-screen">
    <div class="absolute top-4 left-14 right-14 h-auto row items-end">
        <div class="col w-1/3 xs:w-1/2">
            <img src="{{ asset("imgs/aweram/logo.png") }}" alt="Aweram" class="h-auto w-32 hidden xs:inline-block">
            <img src="{{ asset("imgs/aweram/logo-short.png") }}" alt="Aweram" class="h-auto w-6 xs:hidden">
        </div>
        <div class="col w-2/3 xs:w-1/2 text-right lg:text-left">
            @isset($route)
                <a class="text-sm font-light hover:text-primary lowercase" href="{{ route($route) }}">
                    < {{ $routeText }}
                </a>
            @endisset
        </div>
    </div>

    <div class="p-16 bg-light w-1/2 hidden lg:flex items-center justify-center">
        @isset($img)
            <img class="img-fluid" src="{{ asset($img) }}"@isset($imgText) alt={{ $imgText }} @endisset>
        @endisset
    </div>
    <div class="p-16 w-full lg:w-1/2 flex items-center justify-center">
        <div class="w-auth-form">
            {{  $slot }}
        </div>
    </div>
</div>

<!-- Scripts -->
@vite('resources/js/admin.js')
</body>
</html>
