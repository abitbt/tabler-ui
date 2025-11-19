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
                                    Component & Layout Showcase
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Page Body --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            {{-- Layouts --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Layouts</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Explore all 6 official Tabler UI layouts with 100% structural compatibility:
                                        </p>
                                        <div class="btn-list">
                                            <a href="{{ route('layouts.horizontal') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="layout-navbar" class="me-1" />
                                                Horizontal
                                            </a>
                                            <a href="{{ route('layouts.vertical') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="layout-sidebar" class="me-1" />
                                                Vertical
                                            </a>
                                            <a href="{{ route('layouts.combo') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="layout-columns" class="me-1" />
                                                Combo
                                            </a>
                                            <a href="{{ route('layouts.boxed') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="layout-distribute-horizontal" class="me-1" />
                                                Boxed
                                            </a>
                                            <a href="{{ route('layouts.fluid') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="arrows-maximize" class="me-1" />
                                                Fluid
                                            </a>
                                            <a href="{{ route('layouts.sticky') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="pin" class="me-1" />
                                                Sticky Navbar
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
                                            <a href="{{ route('components.alert') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="alert-circle" class="me-1" />
                                                Alert
                                            </a>
                                            <a href="{{ route('components.badge') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="badge" class="me-1" />
                                                Badge
                                            </a>
                                            <a href="{{ route('components.button') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="hand-click" class="me-1" />
                                                Button
                                            </a>
                                            <a href="{{ route('components.cards') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="layout-cards" class="me-1" />
                                                Cards
                                            </a>
                                            <a href="{{ route('components.icons') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="icons" class="me-1" />
                                                Icons
                                            </a>
                                            <a href="{{ route('components.modals') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="square" class="me-1" />
                                                Modals
                                            </a>
                                            <a href="{{ route('components.toasts') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="message-circle" class="me-1" />
                                                Toasts
                                            </a>
                                            <a href="{{ route('components.input') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="forms" class="me-1" />
                                                Input
                                            </a>
                                            <a href="{{ route('components.checkbox') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="square-check" class="me-1" />
                                                Checkbox
                                            </a>
                                            <a href="{{ route('components.radio') }}" class="btn btn-outline-primary">
                                                <tabler:icon name="circle-dot" class="me-1" />
                                                Radio
                                            </a>
                                            <a href="{{ route('components.radio-group') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="circles" class="me-1" />
                                                Radio Group
                                            </a>
                                            <a href="{{ route('components.date-picker') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="calendar" class="me-1" />
                                                Date Picker
                                            </a>
                                            <a href="{{ route('components.dropdown') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="chevron-down" class="me-1" />
                                                Dropdown
                                            </a>
                                            <a href="{{ route('components.table') }}"
                                                class="btn btn-outline-primary">
                                                <tabler:icon name="table" class="me-1" />
                                                Table
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
