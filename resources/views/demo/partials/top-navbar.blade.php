{{--
    Demo Partial: Top Navbar

    Top navbar with brand/logo, utilities (theme toggle, back button).

    Parameters:
    - $isSticky (boolean, optional, default: false): Add sticky-top class to header
--}}

@php
    $isSticky = $isSticky ?? false;
    $stickyClass = $isSticky ? ' sticky-top' : '';
@endphp

<header class="navbar navbar-expand-md{{ $stickyClass }} d-print-none">
    <div class="container-xl">
        {{-- Mobile toggle button --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Brand/Logo --}}
        @include('demo.partials.brand-logo', ['classes' => 'd-none-navbar-horizontal pe-md-3 pe-0'])

        {{-- Right side utilities --}}
        <div class="navbar-nav order-md-last flex-row">
            {{-- Theme toggle --}}
            <div class="d-none d-md-flex">
                <tabler:theme-toggle />
            </div>
        </div>
    </div>
</header>
