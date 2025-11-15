{{--
    Demo: Navbar Sticky Layout

    Official Tabler UI layout with sticky navbar that stays at top on scroll.
--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Navbar Sticky Layout'])
    </head>

    <body>
        <div class="page">
            {{-- Sticky Wrapper for Navbar --}}
            <div class="sticky-top">
                {{-- Top Navbar: Brand + Utilities --}}
                @include('demo.partials.top-navbar', ['isSticky' => true])

                {{-- Secondary Navbar: Horizontal Menu --}}
                @include('demo.partials.horizontal-nav')
            </div>

            {{-- Page Wrapper: Header + Body + Footer --}}
            <div class="page-wrapper">
                {{-- Page Header: Title and actions --}}
                @include('demo.partials.page-header', ['title' => 'Sticky Navbar Layout'])

                {{-- Page Body: Main content --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Sticky Navbar Layout</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>This is the official Tabler layout with sticky navbar that stays at top on
                                            scroll.</p>
                                        <h4 class="mt-4">Key Features:</h4>
                                        <ul>
                                            <li>Navbar wrapped in <code>&lt;div class="sticky-top"&gt;</code></li>
                                            <li>Header has <code>sticky-top</code> class</li>
                                            <li>Navbar stays visible when scrolling down</li>
                                            <li>Perfect for long pages with frequent navigation</li>
                                            <li>Both navbar rows stay sticky together</li>
                                        </ul>
                                        <h4 class="mt-4">Structure:</h4>
                                        <ul>
                                            <li>Wrapper: <code>&lt;div class="sticky-top"&gt;</code></li>
                                            <li>Header: <code>navbar navbar-expand-md sticky-top</code></li>
                                            <li>Secondary menu also wrapped in sticky-top</li>
                                        </ul>
                                        <p class="mt-4"><strong>Try scrolling down to see the sticky navbar in
                                                action!</strong></p>
                                    </div>
                                </div>
                            </div>

                            {{-- Add more content to demonstrate scrolling --}}
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Example Card {{ $i }}</h3>
                                            <p>This is example content to demonstrate the sticky navbar. Scroll down to
                                                see the navbar stay at the top of the viewport.</p>
                                            <p class="text-secondary mb-0">The navbar will remain visible as you scroll
                                                through this content, making navigation always accessible.</p>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </main>

                {{-- Footer --}}
                @include('demo.partials.footer')
            </div>
        </div>
    </body>

</html>
