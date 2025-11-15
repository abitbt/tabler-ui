{{--
    Demo Partial: Footer

    Standard footer with documentation links and copyright notice.
--}}

<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row align-items-center flex-row-reverse text-center">
            <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank"
                            class="link-secondary">Documentation</a></li>
                    <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                            class="link-secondary">Source code</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-auto mt-lg-0 mt-3">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        Copyright &copy; {{ date('Y') }}
                        <a href="{{ route('demo.index') }}" class="link-secondary">{{ config('app.name') }}</a>.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
