{{--
    Tabler UI Layout

    Usage:
    @extends('tabler::layouts.app')

    @section('content')
        Your content here
    @endsection

    Optional sections:
    - @section('navbar') - Override entire navbar
    - @section('pageHeader') - Custom page header
    - @section('footer') - Custom footer
--}}

<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    data-bs-theme-base="{{ $bsThemeBase ?? 'gray' }}"
    data-bs-theme-font="{{ $bsThemeFont ?? 'sans-serif' }}"
    data-bs-theme-primary="{{ $bsThemePrimary ?? 'blue' }}"
    data-bs-theme-radius="{{ $bsThemeRadius ?? '1' }}"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>

<div class="page">
    {{-- Navbar Section --}}
    @if(View::hasSection('navbar'))
        @yield('navbar')
    @else
        @include('tabler::layouts.navbar.condensed', [
            'dark' => $navbarDark ?? false,
            'sticky' => $navbarSticky ?? false,
            'navItems' => $navItems ?? [],
        ])
    @endif

    <div class="page-wrapper">
        {{-- Page Header (optional) --}}
        @hasSection('pageHeader')
            @yield('pageHeader')
        @endif

        {{-- Page Content --}}
        <main id="content" class="page-body">
            <div class="container-xl">
                @yield('content')
            </div>
        </main>

        {{-- Footer (optional) --}}
        @hasSection('footer')
            @yield('footer')
        @endif
    </div>
</div>

@stack('scripts')
</body>
</html>
