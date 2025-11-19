<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Radio - Tabler Blade Components'])
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
                                <h2 class="page-title">Radio</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Examples --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Radio Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Select an option:</label>
                                            <tabler:radio name="basic_options" value="option1" checked>Option
                                                1</tabler:radio>
                                            <tabler:radio name="basic_options" value="option2">Option 2</tabler:radio>
                                            <tabler:radio name="basic_options" value="option3">Option 3</tabler:radio>
                                            <tabler:radio name="basic_options" value="option4" disabled>Option 4
                                                (Disabled)</tabler:radio>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio name="basic_options" value="option1" checked&gt;Option 1&lt;/tabler:radio&gt;
&lt;tabler:radio name="basic_options" value="option2"&gt;Option 2&lt;/tabler:radio&gt;
&lt;tabler:radio name="basic_options" value="option3"&gt;Option 3&lt;/tabler:radio&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Descriptions --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Radio Buttons with Descriptions</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Choose your plan:</label>
                                            <tabler:field description="Perfect for personal use with basic features">
                                                <tabler:radio name="plan" value="free" checked>Free Plan
                                                </tabler:radio>
                                            </tabler:field>
                                            <tabler:field
                                                description="Advanced features for professionals - $9.99/month">
                                                <tabler:radio name="plan" value="pro">Pro Plan</tabler:radio>
                                            </tabler:field>
                                            <tabler:field
                                                description="Full-featured solution for teams - Contact sales">
                                                <tabler:radio name="plan" value="enterprise">Enterprise
                                                    Plan</tabler:radio>
                                            </tabler:field>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field description="Perfect for personal use with basic features"&gt;
    &lt;tabler:radio name="plan" value="free" checked&gt;Free Plan&lt;/tabler:radio&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Inline Radio Buttons --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Inline Radio Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Select your size:</label>
                                            <div>
                                                <tabler:radio name="size" value="small" inline>Small</tabler:radio>
                                                <tabler:radio name="size" value="medium" inline checked>Medium
                                                </tabler:radio>
                                                <tabler:radio name="size" value="large" inline>Large</tabler:radio>
                                                <tabler:radio name="size" value="xlarge" inline>X-Large
                                                </tabler:radio>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Rating:</label>
                                            <div>
                                                <tabler:radio name="rating" value="1" inline>1</tabler:radio>
                                                <tabler:radio name="rating" value="2" inline>2</tabler:radio>
                                                <tabler:radio name="rating" value="3" inline>3</tabler:radio>
                                                <tabler:radio name="rating" value="4" inline checked>4
                                                </tabler:radio>
                                                <tabler:radio name="rating" value="5" inline>5</tabler:radio>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio name="size" value="small" inline&gt;Small&lt;/tabler:radio&gt;
&lt;tabler:radio name="size" value="medium" inline checked&gt;Medium&lt;/tabler:radio&gt;
&lt;tabler:radio name="size" value="large" inline&gt;Large&lt;/tabler:radio&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Required Field --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Required Radio Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Gender:</label>
                                            <tabler:radio name="gender" value="male" required>Male</tabler:radio>
                                            <tabler:radio name="gender" value="female" required>Female</tabler:radio>
                                            <tabler:radio name="gender" value="other" required>Other</tabler:radio>
                                            <tabler:radio name="gender" value="prefer-not-to-say" required>Prefer not
                                                to
                                                say</tabler:radio>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio name="gender" value="male" required&gt;Male&lt;/tabler:radio&gt;
&lt;tabler:radio name="gender" value="female" required&gt;Female&lt;/tabler:radio&gt;
&lt;tabler:radio name="gender" value="other" required&gt;Other&lt;/tabler:radio&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Validation States --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Validation States</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Payment method:</label>
                                            <tabler:field error="Please select a valid payment method">
                                                <tabler:radio name="payment_error" value="credit">Credit
                                                    Card</tabler:radio>
                                            </tabler:field>
                                            <tabler:field error="Please select a valid payment method">
                                                <tabler:radio name="payment_error" value="debit">Debit
                                                    Card</tabler:radio>
                                            </tabler:field>
                                            <tabler:field error="Please select a valid payment method">
                                                <tabler:radio name="payment_error" value="paypal">PayPal
                                                </tabler:radio>
                                            </tabler:field>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field error="Please select a valid payment method"&gt;
    &lt;tabler:radio name="payment" value="credit"&gt;Credit Card&lt;/tabler:radio&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Disabled States --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Disabled States</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Shipping method:</label>
                                            <tabler:radio name="shipping" value="standard" checked>Standard (3-5
                                                days)</tabler:radio>
                                            <tabler:radio name="shipping" value="express">Express (1-2
                                                days)</tabler:radio>
                                            <tabler:radio name="shipping" value="overnight" disabled>Overnight (Not
                                                available)</tabler:radio>
                                            <tabler:radio name="shipping" value="international" disabled>International
                                                (Not
                                                available)</tabler:radio>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:radio name="shipping" value="standard" checked&gt;Standard (3-5 days)&lt;/tabler:radio&gt;
&lt;tabler:radio name="shipping" value="express"&gt;Express (1-2 days)&lt;/tabler:radio&gt;
&lt;tabler:radio name="shipping" value="overnight" disabled&gt;Overnight&lt;/tabler:radio&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Help Text --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Radio Buttons with Help Text</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Notification frequency:</label>
                                            <tabler:field description="Get notified instantly"
                                                descriptionTrailing="Recommended for urgent updates">
                                                <tabler:radio name="frequency" value="realtime" checked>Real-time
                                                </tabler:radio>
                                            </tabler:field>
                                            <tabler:field description="Once per day summary"
                                                descriptionTrailing="Best for non-urgent notifications">
                                                <tabler:radio name="frequency" value="daily">Daily digest
                                                </tabler:radio>
                                            </tabler:field>
                                            <tabler:field description="Once per week roundup"
                                                descriptionTrailing="Minimal interruptions">
                                                <tabler:radio name="frequency" value="weekly">Weekly
                                                    summary</tabler:radio>
                                            </tabler:field>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field description="Get notified instantly" descriptionTrailing="Recommended"&gt;
    &lt;tabler:radio name="frequency" value="realtime" checked&gt;Real-time&lt;/tabler:radio&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Form Integration --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Form Integration Example</h3>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <h4 class="mb-3">User Preferences</h4>

                                            <div class="mb-4">
                                                <label class="form-label">Theme:</label>
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
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Language:</label>
                                                <tabler:radio name="language" value="en" checked>English
                                                </tabler:radio>
                                                <tabler:radio name="language" value="es">Spanish</tabler:radio>
                                                <tabler:radio name="language" value="fr">French</tabler:radio>
                                                <tabler:radio name="language" value="de">German</tabler:radio>
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Date format:</label>
                                                <div>
                                                    <tabler:radio name="date_format" value="mdy" inline checked>
                                                        MM/DD/YYYY</tabler:radio>
                                                    <tabler:radio name="date_format" value="dmy" inline>DD/MM/YYYY
                                                    </tabler:radio>
                                                    <tabler:radio name="date_format" value="ymd" inline>YYYY-MM-DD
                                                    </tabler:radio>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary">Save
                                                    Preferences</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;form&gt;
    &lt;tabler:field description="Light color scheme"&gt;
        &lt;tabler:radio name="theme" value="light"&gt;Light&lt;/tabler:radio&gt;
    &lt;/tabler:field&gt;
    &lt;tabler:field description="Dark color scheme"&gt;
        &lt;tabler:radio name="theme" value="dark" checked&gt;Dark&lt;/tabler:radio&gt;
    &lt;/tabler:field&gt;
&lt;/form&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Livewire Integration (Example) --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Livewire Integration (Code Examples)</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted">
                                            The radio component is fully compatible with Livewire's wire:model
                                            directive:
                                        </p>
                                        <pre class="rounded p-3"><code>&lt;tabler:radio name="theme" value="light" wire:model="selectedTheme"&gt;
    Light
&lt;/tabler:radio&gt;

&lt;tabler:radio name="theme" value="dark" wire:model.live="selectedTheme"&gt;
    Dark
&lt;/tabler:radio&gt;

&lt;tabler:field description="Advanced features"&gt;
    &lt;tabler:radio name="plan" value="pro" wire:model="selectedPlan"&gt;Pro Plan&lt;/tabler:radio&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Accessibility --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Accessibility Features</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Required field:</label>
                                                <tabler:field description="aria-required is automatically added">
                                                    <tabler:radio name="a11y-required" value="yes" required>Yes
                                                    </tabler:radio>
                                                </tabler:field>
                                                <tabler:radio name="a11y-required" value="no" required>No
                                                </tabler:radio>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">With error:</label>
                                                <tabler:field
                                                    error="aria-invalid and aria-describedby are automatically added">
                                                    <tabler:radio name="a11y-error" value="option1">Option
                                                        1</tabler:radio>
                                                </tabler:field>
                                                <tabler:field
                                                    error="aria-invalid and aria-describedby are automatically added">
                                                    <tabler:radio name="a11y-error" value="option2">Option
                                                        2</tabler:radio>
                                                </tabler:field>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted mb-0">
                                                <strong>Keyboard Navigation:</strong> Arrow keys to navigate within
                                                group, Space to select, Tab/Shift+Tab to navigate between groups<br>
                                                <strong>Screen Readers:</strong> Labels are properly associated via
                                                label wrapping<br>
                                                <strong>ARIA:</strong> aria-invalid, aria-required, and aria-describedby
                                                are automatically added when appropriate
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field description="aria-required is automatically added"&gt;
    &lt;tabler:radio name="a11y-required" value="yes" required&gt;Yes&lt;/tabler:radio&gt;
&lt;/tabler:field&gt;</code></pre>
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
                                        <div class="alert alert-info mb-3">
                                            <strong>Note:</strong> Labels are now passed as slot content. For
                                            descriptions,
                                            help text, and error messages, use the <code>&lt;tabler:field&gt;</code>
                                            wrapper
                                            component. See examples above for usage.
                                        </div>
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
                                                        <td>Input name attribute (auto-detected from wire:model).
                                                            <strong>Required</strong> for radio groups.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>id</code></td>
                                                        <td>string</td>
                                                        <td>auto-generated</td>
                                                        <td>Input ID (auto-generated from name+value if not provided)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>value</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Value when selected. <strong>Required</strong> for each
                                                            radio button.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>checked</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Initially selected state</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>required</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Mark as required</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>disabled</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Disabled state</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>inline</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Display inline (horizontally)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="alert alert-info mt-3">
                                            <strong>Radio Groups:</strong> Radio buttons with the same <code>name</code>
                                            attribute form a group where only one option can be selected at a time. Each
                                            radio button in a group must have a unique <code>value</code>.
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
