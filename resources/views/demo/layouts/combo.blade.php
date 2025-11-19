{{--
    Demo: Combo Layout

    Official Tabler UI combo layout combining vertical sidebar + condensed top header.
--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Combo Layout'])
    </head>

    <body>
        <div class="page">
            {{-- Vertical Sidebar: Left navigation --}}
            @include('demo.partials.sidebar-nav')

            {{-- Condensed Top Header: Utilities only (hidden on mobile) --}}
            <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none" data-bs-theme="dark">
                <div class="container-xl justify-content-end">
                    <div class="navbar-nav order-md-last flex-row">
                        {{-- Theme toggle --}}
                        <div class="d-none d-md-flex">
                            <tabler:theme-toggle />
                        </div>
                    </div>
                </div>
            </header>

            {{-- Page Wrapper: Header + Body + Footer --}}
            <div class="page-wrapper">
                {{-- Page Header: Title and actions --}}
                @include('demo.partials.page-header', ['title' => 'Combo Layout'])

                {{-- Page Body: Main content --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Combo Layout</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>This is the official Tabler combo layout combining vertical sidebar with
                                            condensed top header.</p>
                                        <h4 class="mt-4">Key Features:</h4>
                                        <ul>
                                            <li>Dark-themed vertical sidebar (<code>data-bs-theme="dark"</code>)</li>
                                            <li>Condensed dark top header (<code>data-bs-theme="dark"</code>)</li>
                                            <li>Header hidden on mobile (<code>d-none d-lg-flex</code>)</li>
                                            <li>Unified dark appearance for both navbar elements</li>
                                            <li>Responsive collapse on mobile</li>
                                        </ul>
                                        <h4 class="mt-4">Structure:</h4>
                                        <ul>
                                            <li>Sidebar: <code>navbar navbar-vertical navbar-expand-lg</code></li>
                                            <li>Header: <code>navbar navbar-expand-md d-none d-lg-flex</code></li>
                                            <li>Both use: <code>data-bs-theme="dark"</code></li>
                                        </ul>
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
