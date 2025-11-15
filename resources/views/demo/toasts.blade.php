<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Toasts - Tabler Blade Components'])
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
                                    Tabler Blade Components
                                </div>
                                <h2 class="page-title">
                                    Toasts
                                </h2>
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

                {{-- Page Body --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Toast Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-primary"
                                                onclick="showToast('toast-simple')">
                                                Simple Toast
                                            </button>
                                            <button type="button" class="btn btn-success"
                                                onclick="showToast('toast-success')">
                                                Success Toast
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                onclick="showToast('toast-warning')">
                                                Warning Toast
                                            </button>
                                            <button type="button" class="btn btn-info"
                                                onclick="showToast('toast-info')">
                                                Info Toast
                                            </button>
                                            <button type="button" class="btn btn-secondary"
                                                onclick="showToast('toast-no-header')">
                                                Toast Without Header
                                            </button>
                                            <button type="button" class="btn btn-dark"
                                                onclick="showToast('toast-autohide')">
                                                Auto-hide Toast
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Position Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-secondary mb-3">Toasts can be positioned in different corners of
                                            the
                                            screen:</p>
                                        <div class="btn-list">
                                            <button type="button" class="btn btn-outline-primary"
                                                onclick="showToast('toast-top-start')">
                                                Top Start
                                            </button>
                                            <button type="button" class="btn btn-outline-primary"
                                                onclick="showToast('toast-top-end')">
                                                Top End
                                            </button>
                                            <button type="button" class="btn btn-outline-primary"
                                                onclick="showToast('toast-bottom-start')">
                                                Bottom Start
                                            </button>
                                            <button type="button" class="btn btn-outline-primary"
                                                onclick="showToast('toast-bottom-end')">
                                                Bottom End (Default)
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                @include('demo.partials.footer')
            </div>
        </div>

        {{-- Toast Containers --}}

        {{-- Bottom-End Container (Default) --}}
        <tabler:toast.container position="bottom-end">
            <tabler:toast id="toast-simple" title="Tabler Blade" subtitle="Just now">
                Hello, world! This is a toast message.
            </tabler:toast>

            <tabler:toast id="toast-success" title="Success" subtitle="Just now">
                <div class="d-flex align-items-center">
                    <tabler:icon name="circle-check" class="text-success me-2" />
                    <div>Your changes have been saved successfully!</div>
                </div>
            </tabler:toast>

            <tabler:toast id="toast-warning" title="Warning" subtitle="2 mins ago">
                <div class="d-flex align-items-center">
                    <tabler:icon name="alert-triangle" class="text-warning me-2" />
                    <div>Please review your settings before continuing.</div>
                </div>
            </tabler:toast>

            <tabler:toast id="toast-info" title="Information" subtitle="5 mins ago">
                <div class="d-flex align-items-center">
                    <tabler:icon name="info-circle" class="text-info me-2" />
                    <div>New updates are available for your application.</div>
                </div>
            </tabler:toast>

            <tabler:toast id="toast-no-header" hideHeader>
                This toast has no header, only a body content.
            </tabler:toast>

            <tabler:toast id="toast-autohide" title="Auto-hide" subtitle="Now" autohide :delay="3000">
                This toast will automatically hide after 3 seconds.
            </tabler:toast>

            <tabler:toast id="toast-bottom-end" title="Bottom End" subtitle="Now">
                This toast appears at the bottom-end corner (default position).
            </tabler:toast>
        </tabler:toast.container>

        {{-- Top-Start Container --}}
        <tabler:toast.container position="top-start">
            <tabler:toast id="toast-top-start" title="Top Start" subtitle="Now">
                This toast appears at the top-start corner.
            </tabler:toast>
        </tabler:toast.container>

        {{-- Top-End Container --}}
        <tabler:toast.container position="top-end">
            <tabler:toast id="toast-top-end" title="Top End" subtitle="Now">
                This toast appears at the top-end corner.
            </tabler:toast>
        </tabler:toast.container>

        {{-- Bottom-Start Container --}}
        <tabler:toast.container position="bottom-start">
            <tabler:toast id="toast-bottom-start" title="Bottom Start" subtitle="Now">
                This toast appears at the bottom-start corner.
            </tabler:toast>
        </tabler:toast.container>

        <script>
            function showToast(toastId) {
                const toastElement = document.getElementById(toastId);
                if (toastElement && window.bootstrap) {
                    const toast = new bootstrap.Toast(toastElement);
                    toast.show();
                }
            }
        </script>
    </body>

</html>
