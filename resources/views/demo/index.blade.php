<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Tabler Blade Layout Showcase'])
    </head>

    <body>
        <div class="page">
            {{-- Demo Navbar --}}
            @include('demo.partials.demo-navbar')

            <div class="page-wrapper">
                {{-- Page Header --}}
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <div class="page-pretitle">
                                    Tabler Blade Package
                                </div>
                                <h2 class="page-title">
                                    Layout Showcase
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Page Body --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Official Tabler UI Layouts</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>This demo showcases all 6 priority Tabler UI layouts implemented with 100%
                                            structural compatibility with official Tabler UI.</p>
                                        <p>Each layout matches the official HTML structure exactly, including CSS
                                            classes, Bootstrap theming, container strategies, and responsive behavior.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Horizontal Layout --}}
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <tabler:icon name="layout-navbar" class="text-blue"
                                                    :size="48" />
                                            </div>
                                            <div>
                                                <h3 class="mb-1">Horizontal</h3>
                                                <p class="text-secondary mb-0">Top navbar navigation</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-secondary small">Two-row navbar structure with brand,
                                                utilities, and horizontal menu. Responsive collapse on mobile.</p>
                                            <a href="{{ route('layouts.horizontal') }}" class="btn btn-primary w-100">
                                                View Demo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Vertical Layout --}}
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <tabler:icon name="layout-sidebar" class="text-purple"
                                                    :size="48" />
                                            </div>
                                            <div>
                                                <h3 class="mb-1">Vertical</h3>
                                                <p class="text-secondary mb-0">Left sidebar navigation</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-secondary small">Dark-themed vertical sidebar with
                                                container-fluid. Collapsible on mobile with navbar-vertical class.</p>
                                            <a href="{{ route('layouts.vertical') }}" class="btn btn-primary w-100">
                                                View Demo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Combo Layout --}}
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <tabler:icon name="layout-columns" class="text-green"
                                                    :size="48" />
                                            </div>
                                            <div>
                                                <h3 class="mb-1">Combo</h3>
                                                <p class="text-secondary mb-0">Sidebar + header</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-secondary small">Combines vertical sidebar with condensed top
                                                header. Both dark-themed for unified appearance.</p>
                                            <a href="{{ route('layouts.combo') }}" class="btn btn-primary w-100">
                                                View Demo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Boxed Layout --}}
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <tabler:icon name="layout-distribute-horizontal" class="text-orange"
                                                    :size="48" />
                                            </div>
                                            <div>
                                                <h3 class="mb-1">Boxed</h3>
                                                <p class="text-secondary mb-0">Centered content</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-secondary small">Horizontal layout with layout-boxed body
                                                class. Centers content with max-width constraint.</p>
                                            <a href="{{ route('layouts.boxed') }}" class="btn btn-primary w-100">
                                                View Demo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Fluid Layout --}}
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <tabler:icon name="arrows-maximize" class="text-red"
                                                    :size="48" />
                                            </div>
                                            <div>
                                                <h3 class="mb-1">Fluid</h3>
                                                <p class="text-secondary mb-0">Full-width content</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-secondary small">Horizontal layout with layout-fluid body
                                                class. Content uses full viewport width.</p>
                                            <a href="{{ route('layouts.fluid') }}" class="btn btn-primary w-100">
                                                View Demo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Sticky Navbar Layout --}}
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <tabler:icon name="pin" class="text-cyan" :size="48" />
                                            </div>
                                            <div>
                                                <h3 class="mb-1">Navbar Sticky</h3>
                                                <p class="text-secondary mb-0">Sticky top navbar</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-secondary small">Navbar wrapped in sticky-top div. Stays
                                                visible when scrolling down long pages.</p>
                                            <a href="{{ route('layouts.sticky') }}" class="btn btn-primary w-100">
                                                View Demo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- UI Components --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">UI Components</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Explore Tabler Blade UI components with interactive examples:</p>
                                        <div class="btn-list">
                                            <a href="{{ route('components.badge') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="badge" class="me-1" />
                                                Badge
                                            </a>
                                            <a href="{{ route('components.button') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="hand-click" class="me-1" />
                                                Button
                                            </a>
                                            <a href="{{ route('components.cards') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="layout-cards" class="me-1" />
                                                Cards
                                            </a>
                                            <a href="{{ route('components.icons') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="icons" class="me-1" />
                                                Icons
                                            </a>
                                            <a href="{{ route('components.modals') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="square" class="me-1" />
                                                Modals
                                            </a>
                                            <a href="{{ route('components.toasts') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="message-circle" class="me-1" />
                                                Toasts
                                            </a>
                                            <a href="{{ route('components.input') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="forms" class="me-1" />
                                                Input
                                            </a>
                                            <a href="{{ route('components.checkbox') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="square-check" class="me-1" />
                                                Checkbox
                                            </a>
                                            <a href="{{ route('components.radio') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="circle-dot" class="me-1" />
                                                Radio
                                            </a>
                                            <a href="{{ route('components.radio-group') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="circles" class="me-1" />
                                                Radio Group
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Technical Details --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Technical Implementation</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="mb-3">Package Details</h4>
                                                <ul>
                                                    <li><strong>Package:</strong> abitbt/tabler-blade</li>
                                                    <li><strong>Tabler UI:</strong> v1.4.0</li>
                                                    <li><strong>Bootstrap:</strong> v5.3</li>
                                                    <li><strong>Components:</strong> Flux-like syntax
                                                        (<code>&lt;tabler:*&gt;</code>)</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="mb-3">Compatibility</h4>
                                                <ul>
                                                    <li><strong>Structure Match:</strong> 100%</li>
                                                    <li><strong>Container Strategy:</strong> container-xl (5×) in
                                                        horizontal layouts</li>
                                                    <li><strong>Theming:</strong> data-bs-theme="dark" for sidebars
                                                    </li>
                                                    <li><strong>Responsive:</strong> Bootstrap 5 breakpoints</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                {{-- Footer --}}
                @include('demo.partials.footer')
            </div>
        </div>
    </body>

</html>
