{{--
    Demo Partial: Vertical Sidebar Navigation

    Dark-themed vertical sidebar with navigation menu.
    Dynamically sets active states based on current route.

    Parameters:
    - $showMobileUtilities (boolean, optional, default: false): Show mobile-only utilities section
--}}

@php
    $currentRoute = Request::route()?->getName();
    $isActive = fn($route) => $currentRoute === $route ? 'active' : '';
    $showMobileUtilities = $showMobileUtilities ?? false;
@endphp

<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        {{-- Mobile toggle button --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Brand/Logo --}}
        @include('demo.partials.brand-logo')

        @if ($showMobileUtilities)
            {{-- Mobile-only utilities --}}
            <div class="navbar-nav d-lg-none flex-row">
                <div class="d-none d-lg-flex">
                    <tabler:theme-toggle />
                </div>
            </div>
        @endif

        {{-- Sidebar Menu --}}
        <div class="navbar-collapse collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                @include('demo.partials.demo-nav-items')
            </ul>
        </div>
    </div>
</aside>
