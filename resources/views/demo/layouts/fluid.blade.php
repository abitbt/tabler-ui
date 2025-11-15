{{--
    Demo: Fluid Layout

    Official Tabler UI fluid layout with full-width content.
--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Fluid Layout'])
    </head>

    <body class="layout-fluid">
        <div class="page">
            {{-- Top Navbar: Brand + Utilities --}}
            @include('demo.partials.top-navbar')

            {{-- Secondary Navbar: Horizontal Menu --}}
            @include('demo.partials.horizontal-nav')

            {{-- Page Wrapper: Header + Body + Footer --}}
            <div class="page-wrapper">
                {{-- Page Header: Title and actions --}}
                @include('demo.partials.page-header', ['title' => 'Fluid Layout'])

                {{-- Page Body: Main content --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Fluid Layout</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>This is the official Tabler fluid layout with full-width content.</p>
                                        <h4 class="mt-4">Key Features:</h4>
                                        <ul>
                                            <li>Same structure as horizontal layout</li>
                                            <li>Body class: <code>layout-fluid</code></li>
                                            <li>Content uses full viewport width (no max-width)</li>
                                            <li>Perfect for dashboards, data tables, and wide interfaces</li>
                                            <li>Responsive behavior maintained</li>
                                        </ul>
                                        <h4 class="mt-4">Structure:</h4>
                                        <ul>
                                            <li>Body: <code>&lt;body class="layout-fluid"&gt;</code></li>
                                            <li>Navbar: Same as horizontal layout</li>
                                            <li>Full-width applied via CSS</li>
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
