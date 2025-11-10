{{--
    Tabler UI Vertical Sidebar Layout

    Usage:
    @extends('tabler::layouts.vertical')

    @section('content')
        Your content here
    @endsection

    Optional sections:
    - @section('topbar') - Override topbar
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
    {{-- BEGIN SIDEBAR --}}
    @include('tabler::layouts.partials.sidebar', [
        'dark' => $sidebarDark ?? true,
        'position' => $sidebarPosition ?? 'left',
        'transparent' => $sidebarTransparent ?? false,
        'background' => $sidebarBackground ?? null,
        'breakpoint' => $sidebarBreakpoint ?? 'lg',
        'hideBrand' => $hideSidebarBrand ?? false,
        'customClass' => $sidebarCustomClass ?? '',
        'navItems' => $navItems ?? [],
        'sidebarItems' => $sidebarItems ?? null,
    ])
    {{-- END SIDEBAR --}}

    {{-- Optional Top Navbar (hidden by default in vertical layout) --}}
    @unless($hideTopbar ?? true)
        @hasSection('topbar')
            @yield('topbar')
        @endif
    @endunless

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
