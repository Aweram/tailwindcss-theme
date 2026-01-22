<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="text-body font-normal bg-body-bg">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}@isset($title) - {{ $title }} @endisset</title>

    {{-- Favico --}}
    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
    @stack("js-lib")
    <!-- CSS -->
    @livewireStyles
    @vite("resources/css/{$cssFile}")
    @stack("styles")
</head>
<body>
<main x-data="{ menuIsOpen: false, isInit: false }" x-init="isInit = true">
    <x-tt::admin.navigation />
    <x-tt::admin.aside-menu />
    <div class="transition-all duration-500 w-full px-indent-half xl:px-indent xl:ml-menu xl:w-outer-menu mt-24">
        <div class="max-w-[1440px] mx-auto mb-indent">
            @isset($pageTitle)
                <div class="mb-indent">
                    <h1 class="text-2xl text-dark">{{ $pageTitle }}</h1>
                </div>
            @endisset

            @isset($pageTitleRaw)
                {{ $pageTitleRaw }}
            @endisset

            {{ $slot }}
        </div>
    </div>
</main>

@stack("modals")
<!-- Scripts -->
@livewireScripts
@vite("resources/js/{$jsFile}")
@stack("scripts")
</body>
</html>
