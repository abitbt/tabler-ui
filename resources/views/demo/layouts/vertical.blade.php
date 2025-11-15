{{--
    Demo: Vertical Layout

    Official Tabler UI vertical layout with left sidebar navigation.
--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Vertical Layout'])
    </head>

    <body>
        <div class="page">
            {{-- Vertical Sidebar: Left navigation --}}
            @include('demo.partials.sidebar-nav', ['showMobileUtilities' => true])

            {{-- Page Wrapper: Header + Body + Footer --}}
            <div class="page-wrapper">
                {{-- Page Header: Title and actions --}}
                @include('demo.partials.page-header', [
                    'title' => 'Vertical Layout',
                    'showThemeToggle' => true,
                ])

                {{-- Page Body: Main content --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Vertical Layout</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>This is the official Tabler vertical layout with left sidebar navigation.
                                        </p>
                                        <h4 class="mt-4">Key Features:</h4>
                                        <ul>
                                            <li>Dark-themed sidebar (<code>data-bs-theme="dark"</code>)</li>
                                            <li>Container-fluid inside sidebar</li>
                                            <li>Responsive collapse on mobile</li>
                                            <li>No top navbar (hidden with layout-hide-topbar class in official)</li>
                                            <li>Page header with title and actions</li>
                                        </ul>
                                        <h4 class="mt-4">Structure:</h4>
                                        <ul>
                                            <li>Sidebar: <code>navbar navbar-vertical navbar-expand-lg</code></li>
                                            <li>Container: <code>container-fluid</code> in sidebar</li>
                                            <li>Menu: <code>navbar-nav pt-lg-3</code> with padding-top</li>
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
