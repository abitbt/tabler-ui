{{--
    Demo: Horizontal Layout

    Official Tabler UI horizontal layout with top navbar navigation.
--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Horizontal Layout'])
    </head>

    <body>
        <div class="page">
            {{-- Top Navbar: Brand + Utilities --}}
            @include('demo.partials.top-navbar')

            {{-- Secondary Navbar: Horizontal Menu --}}
            @include('demo.partials.horizontal-nav')

            {{-- Page Wrapper: Header + Body + Footer --}}
            <div class="page-wrapper">
                {{-- Page Header: Title and actions --}}
                @include('demo.partials.page-header', ['title' => 'Horizontal Layout'])

                {{-- Page Body: Main content --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Horizontal Layout</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>This is the official Tabler horizontal layout with top navbar navigation.
                                        </p>
                                        <h4 class="mt-4">Key Features:</h4>
                                        <ul>
                                            <li>Two-row navbar structure (brand/utilities + menu)</li>
                                            <li>Responsive collapse on mobile</li>
                                            <li>Container-xl width constraint (5× in total)</li>
                                            <li>Page header with title and actions</li>
                                        </ul>
                                        <h4 class="mt-4">Structure:</h4>
                                        <ul>
                                            <li>Top navbar: <code>navbar navbar-expand-md</code></li>
                                            <li>Secondary menu: <code>navbar-expand-md</code> with collapse</li>
                                            <li>Page wrapper with header, body, and footer</li>
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
