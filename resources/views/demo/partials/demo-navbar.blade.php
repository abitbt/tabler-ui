{{--
    Demo Navbar Partial

    Condensed single-row navbar with brand, utilities, and navigation menu.
    Used across demo pages for consistent navigation.
--}}

<header class="navbar navbar-expand-md d-print-none">
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
            <div class="d-none d-md-flex me-3">
                <tabler:theme-toggle />
            </div>
        </div>

        {{-- Collapsed navigation menu --}}
        <div class="navbar-collapse collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                <nav aria-label="Primary">
                    <ul class="navbar-nav">
                        @include('demo.partials.demo-nav-items')
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
