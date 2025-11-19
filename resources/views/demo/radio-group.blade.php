<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Radio Group - Tabler Blade Components'])
    </head>

    <body>
        <div class="page">
            @include('demo.partials.demo-navbar')

            <div class="page-wrapper">
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <div class="page-pretitle">Tabler Blade Components</div>
                                <h2 class="page-title">Radio Group</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Radio Group --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Radio Group</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:radio-group label="Select your plan:" name="plan">
                                            <tabler:radio name="plan" value="free" checked>Free</tabler:radio>
                                            <tabler:radio name="plan" value="pro">Pro</tabler:radio>
                                            <tabler:radio name="plan" value="enterprise">Enterprise</tabler:radio>
                                        </tabler:radio-group>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio-group label="Select your plan:" name="plan"&gt;
    &lt;tabler:radio name="plan" value="free" checked&gt;Free&lt;/tabler:radio&gt;
    &lt;tabler:radio name="plan" value="pro"&gt;Pro&lt;/tabler:radio&gt;
&lt;/tabler:radio-group&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Inline Radio Group --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Inline Radio Group</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:radio-group label="Size:" name="size" inline>
                                            <tabler:radio name="size" value="s" inline>S</tabler:radio>
                                            <tabler:radio name="size" value="m" inline checked>M</tabler:radio>
                                            <tabler:radio name="size" value="l" inline>L</tabler:radio>
                                            <tabler:radio name="size" value="xl" inline>XL</tabler:radio>
                                        </tabler:radio-group>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio-group label="Size:" name="size" inline&gt;
    &lt;tabler:radio name="size" value="s" inline&gt;S&lt;/tabler:radio&gt;
    &lt;tabler:radio name="size" value="m" inline checked&gt;M&lt;/tabler:radio&gt;
&lt;/tabler:radio-group&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Required Radio Group --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Required Radio Group</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:radio-group label="Gender:" name="gender" required>
                                            <tabler:radio name="gender" value="male" required>Male</tabler:radio>
                                            <tabler:radio name="gender" value="female" required>Female</tabler:radio>
                                            <tabler:radio name="gender" value="other" required>Other</tabler:radio>
                                        </tabler:radio-group>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio-group label="Gender:" name="gender" required&gt;
    &lt;tabler:radio name="gender" value="male" required&gt;Male&lt;/tabler:radio&gt;
    &lt;tabler:radio name="gender" value="female" required&gt;Female&lt;/tabler:radio&gt;
&lt;/tabler:radio-group&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Error --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">With Validation Error</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:radio-group label="Payment method:" name="payment"
                                            error="Please select a payment method">
                                            <tabler:radio name="payment" value="credit">Credit Card</tabler:radio>
                                            <tabler:radio name="payment" value="debit">Debit Card</tabler:radio>
                                            <tabler:radio name="payment" value="paypal">PayPal</tabler:radio>
                                        </tabler:radio-group>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio-group label="Payment method:" name="payment"
    error="Please select a payment method"&gt;
    &lt;tabler:radio name="payment" value="credit"&gt;Credit Card&lt;/tabler:radio&gt;
&lt;/tabler:radio-group&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Help Text --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">With Help Text</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:radio-group label="Theme preference:" name="theme"
                                            help="This will affect how the application looks">
                                            <tabler:field description="Light color scheme">
                                                <tabler:radio name="theme" value="light">Light</tabler:radio>
                                            </tabler:field>
                                            <tabler:field description="Dark color scheme">
                                                <tabler:radio name="theme" value="dark" checked>Dark
                                                </tabler:radio>
                                            </tabler:field>
                                            <tabler:field description="Match system settings">
                                                <tabler:radio name="theme" value="auto">Auto</tabler:radio>
                                            </tabler:field>
                                        </tabler:radio-group>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio-group label="Theme:" name="theme" help="This affects appearance"&gt;
    &lt;tabler:field description="Light scheme"&gt;
        &lt;tabler:radio name="theme" value="light"&gt;Light&lt;/tabler:radio&gt;
    &lt;/tabler:field&gt;
    &lt;tabler:field description="Dark scheme"&gt;
        &lt;tabler:radio name="theme" value="dark" checked&gt;Dark&lt;/tabler:radio&gt;
    &lt;/tabler:field&gt;
&lt;/tabler:radio-group&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Usage Example --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Usage Example</h3>
                                    </div>
                                    <div class="card-body">
                                        <pre class="rounded p-3"><code>&lt;tabler:radio-group label="Select option:" name="option"&gt;
    &lt;tabler:radio name="option" value="1"&gt;Option 1&lt;/tabler:radio&gt;
    &lt;tabler:radio name="option" value="2" checked&gt;Option 2&lt;/tabler:radio&gt;
    &lt;tabler:radio name="option" value="3"&gt;Option 3&lt;/tabler:radio&gt;
&lt;/tabler:radio-group&gt;</code></pre>
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
                                                        <td><code>name</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Shared name for all radio buttons in the group</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>label</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Group label text</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>help</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Help text displayed below the radio group</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>error</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Error message for the entire group (auto-detected from
                                                            Laravel validation)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>inline</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Display radio buttons horizontally with flexbox</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>required</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Mark group label as required (adds asterisk)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>containerClass</code></td>
                                                        <td>string</td>
                                                        <td>'mb-3'</td>
                                                        <td>CSS class for wrapper div</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="alert alert-info mt-3">
                                            <strong>Note:</strong> The radio-group component is a wrapper that provides
                                            a label and error handling for a group of radio buttons. Place individual
                                            <code>&lt;tabler:radio&gt;</code> components inside the default slot.
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

    </body>

</html>
