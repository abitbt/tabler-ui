<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Icons - Tabler Blade Components'])
        @livewireStyles
    </head>

    <body>
        <div class="page">
            {{-- Demo Navbar --}}
            @include('demo.partials.demo-navbar')

            <div class="page-wrapper">
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <div class="page-pretitle">Tabler Blade Components</div>
                                <h2 class="page-title">Icons</h2>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('demo.index') }}" class="btn">
                                    <tabler:icon name="arrow-left" />
                                    Back to home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        {{-- Livewire Icon Browser --}}
                        <livewire:icon-browser />
                    </div>
                </main>

                @include('demo.partials.footer')
            </div>
        </div>

        @livewireScripts
    </body>

</html>
