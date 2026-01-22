<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $htmlClasses }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Meta --}}
    @if (empty($rawMeta))
        @if(! empty($rawTitle))
            <title>{{ $rawTitle }}</title>
            <meta content="{{ $rawTitle }}" property="og:title">
        @else
            <title>{{ config('app.name', 'Laravel') }}@isset($title) - {{ $title }} @endisset</title>
            <meta content="{{ config('app.name', 'Laravel') }}@isset($title) - {{ $title }} @endisset" property="og:title">
        @endif
        @isset($pageDescription)
            <meta name="description" content="{{ $pageDescription }}">
            <meta  property="og:description" content="{{ $pageDescription }}">
        @endisset
    @else
        {{ $rawMeta }}
    @endif

    {{-- Favico --}}
    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">
    @stack("js-lib")
    @include("tt::layouts.includes.over-css")
    <!-- CSS -->
    @livewireStyles
    @vite("resources/css/{$cssFile}")
    @stack("styles")
    @include("tt::layouts.includes.under-css")
</head>
<body class="app">

@include("tt::layouts.includes.before-content")
@include("tt::layouts.includes.main-content")
@include("tt::layouts.includes.after-content")

@includeIf("pp::web.cookies.component")
@stack("modals")
<!-- Scripts -->
@livewireScripts
@vite("resources/js/{$jsFile}")
@stack("scripts")
@include("tt::layouts.includes.after-scripts")
</body>
</html>
