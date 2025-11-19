<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Modals - Tabler Blade Components'])
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
                                    Modals
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Page Body --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            {{-- Simple Modal --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Simple Modal</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Basic modal with header, body, and footer.</p>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modal-simple">
                                            Launch Modal
                                        </button>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:modal id="modal-simple"&gt;
    &lt;tabler:modal.header title="Modal Title" /&gt;
    &lt;tabler:modal.body&gt;
        &lt;p&gt;Modal content here...&lt;/p&gt;
    &lt;/tabler:modal.body&gt;
    &lt;tabler:modal.footer&gt;
        &lt;button class="btn" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
        &lt;button class="btn btn-primary"&gt;Save&lt;/button&gt;
    &lt;/tabler:modal.footer&gt;
&lt;/tabler:modal&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Large Modal --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Large Modal</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Larger modal with size="lg" prop.</p>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modal-large">
                                            Launch Large Modal
                                        </button>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:modal id="modal-large" size="lg"&gt;
    &lt;tabler:modal.header title="Large Modal" /&gt;
    &lt;tabler:modal.body&gt;
        &lt;p&gt;Content for larger modal...&lt;/p&gt;
    &lt;/tabler:modal.body&gt;
&lt;/tabler:modal&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Small Modal --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Small Modal</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Compact modal with size="sm" prop.</p>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modal-small">
                                            Launch Small Modal
                                        </button>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:modal id="modal-small" size="sm"&gt;
    &lt;tabler:modal.header title="Small Modal" /&gt;
    &lt;tabler:modal.body&gt;
        &lt;p&gt;Compact content...&lt;/p&gt;
    &lt;/tabler:modal.body&gt;
&lt;/tabler:modal&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Scrollable Modal --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Scrollable Modal</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Modal with scrollable content using scrollable prop.</p>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modal-scrollable">
                                            Launch Scrollable Modal
                                        </button>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:modal id="modal-scrollable" scrollable&gt;
    &lt;tabler:modal.header title="Scrollable Modal" /&gt;
    &lt;tabler:modal.body&gt;
        &lt;p&gt;Long content that scrolls...&lt;/p&gt;
    &lt;/tabler:modal.body&gt;
&lt;/tabler:modal&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Success Modal --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Success Modal</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Status modal with green indicator.</p>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#modal-success">
                                            Show Success
                                        </button>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:modal id="modal-success" size="sm"&gt;
    &lt;tabler:modal.status color="success" /&gt;
    &lt;tabler:modal.body class="text-center"&gt;
        &lt;tabler:icon name="circle-check" class="text-success" :size="48" /&gt;
        &lt;h3&gt;Success!&lt;/h3&gt;
    &lt;/tabler:modal.body&gt;
&lt;/tabler:modal&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Danger Modal --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Danger Modal</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Confirmation modal with red indicator.</p>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modal-danger">
                                            Show Warning
                                        </button>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:modal id="modal-danger" size="sm"&gt;
    &lt;tabler:modal.status color="danger" /&gt;
    &lt;tabler:modal.body class="text-center"&gt;
        &lt;tabler:icon name="alert-triangle" class="text-danger" :size="48" /&gt;
        &lt;h3&gt;Are you sure?&lt;/h3&gt;
    &lt;/tabler:modal.body&gt;
&lt;/tabler:modal&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Props Reference --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Props Reference</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table-bordered table">
                                                <thead>
                                                    <tr>
                                                        <th>Prop</th>
                                                        <th>Type</th>
                                                        <th>Default</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><code>id</code></td>
                                                        <td>string</td>
                                                        <td>auto-generated</td>
                                                        <td>Modal ID for targeting with data-bs-target</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>size</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Modal size: sm, lg, xl, full-width</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>scrollable</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Enable scrollable modal body</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>centered</code></td>
                                                        <td>boolean</td>
                                                        <td>true</td>
                                                        <td>Center modal vertically on screen</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>blur</code></td>
                                                        <td>boolean</td>
                                                        <td>true</td>
                                                        <td>Apply blur effect to backdrop</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>top</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Position modal at top (overrides centered)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>fullscreen</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Make modal fullscreen</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="alert alert-info mt-3">
                                            <strong>Note:</strong> Modals use child components for structure:
                                            <code>&lt;tabler:modal.header&gt;</code>,
                                            <code>&lt;tabler:modal.body&gt;</code>,
                                            <code>&lt;tabler:modal.footer&gt;</code>, and
                                            <code>&lt;tabler:modal.status&gt;</code> for status modals.
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

        {{-- Modal Definitions --}}

        {{-- Simple Modal --}}
        <tabler:modal id="modal-simple">
            <tabler:modal.header title="Modal Title" />
            <tabler:modal.body>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti
                    dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit
                    tempora totam unde.</p>
            </tabler:modal.body>
            <tabler:modal.footer>
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </tabler:modal.footer>
        </tabler:modal>

        {{-- Large Modal --}}
        <tabler:modal id="modal-large" size="lg">
            <tabler:modal.header title="Large Modal" />
            <tabler:modal.body>
                <p>This is a larger modal that provides more space for content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga iste nemo
                    nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.</p>
                <p>You can include more detailed information or complex forms in large modals.</p>
            </tabler:modal.body>
            <tabler:modal.footer>
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </tabler:modal.footer>
        </tabler:modal>

        {{-- Small Modal --}}
        <tabler:modal id="modal-small" size="sm">
            <tabler:modal.header title="Small Modal" />
            <tabler:modal.body>
                <p>Compact modal for simple confirmations.</p>
            </tabler:modal.body>
            <tabler:modal.footer>
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </tabler:modal.footer>
        </tabler:modal>

        {{-- Scrollable Modal --}}
        <tabler:modal id="modal-scrollable" scrollable>
            <tabler:modal.header title="Scrollable Modal" />
            <tabler:modal.body>
                @for ($i = 1; $i <= 20; $i++)
                    <p>This is paragraph {{ $i }}. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                @endfor
            </tabler:modal.body>
            <tabler:modal.footer>
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </tabler:modal.footer>
        </tabler:modal>

        {{-- Success Modal --}}
        <tabler:modal id="modal-success" size="sm">
            <tabler:modal.status color="success" />
            <tabler:modal.body class="py-4 text-center">
                <tabler:icon name="circle-check" class="text-success mb-2" :size="48" />
                <h3>Payment succeeded</h3>
                <div class="text-secondary">Your payment of $290 has been successfully submitted. Your invoice has been
                    sent to your email.</div>
            </tabler:modal.body>
            <tabler:modal.footer>
                <div class="w-100">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn w-100" data-bs-dismiss="modal">Go to dashboard</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-success w-100" data-bs-dismiss="modal">View
                                invoice</button>
                        </div>
                    </div>
                </div>
            </tabler:modal.footer>
        </tabler:modal>

        {{-- Danger Modal --}}
        <tabler:modal id="modal-danger" size="sm">
            <tabler:modal.status color="danger" />
            <tabler:modal.body class="py-4 text-center">
                <tabler:icon name="alert-triangle" class="text-danger mb-2" :size="48" />
                <h3>Are you sure?</h3>
                <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be undone.
                </div>
            </tabler:modal.body>
            <tabler:modal.footer>
                <div class="w-100">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn w-100" data-bs-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete 84
                                items</button>
                        </div>
                    </div>
                </div>
            </tabler:modal.footer>
        </tabler:modal>
    </body>

</html>
