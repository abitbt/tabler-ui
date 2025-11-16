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
                                            <tabler:radio name="basic_options" value="option1" label="Option 1"
                                                checked />
                                            <tabler:radio name="basic_options" value="option2" label="Option 2" />
                                            <tabler:radio name="basic_options" value="option3" label="Option 3" />
                                            <tabler:radio name="basic_options" value="option4"
                                                label="Option 4 (Disabled)" disabled />
                                        </div>
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
                                            <tabler:radio name="plan" value="free" label="Free Plan"
                                                description="Perfect for personal use with basic features" checked />
                                            <tabler:radio name="plan" value="pro" label="Pro Plan"
                                                description="Advanced features for professionals - $9.99/month" />
                                            <tabler:radio name="plan" value="enterprise" label="Enterprise Plan"
                                                description="Full-featured solution for teams - Contact sales" />
                                        </div>
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
                                                <tabler:radio name="size" value="small" label="Small" inline />
                                                <tabler:radio name="size" value="medium" label="Medium" inline
                                                    checked />
                                                <tabler:radio name="size" value="large" label="Large" inline />
                                                <tabler:radio name="size" value="xlarge" label="X-Large" inline />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Rating:</label>
                                            <div>
                                                <tabler:radio name="rating" value="1" label="1" inline />
                                                <tabler:radio name="rating" value="2" label="2" inline />
                                                <tabler:radio name="rating" value="3" label="3" inline />
                                                <tabler:radio name="rating" value="4" label="4" inline
                                                    checked />
                                                <tabler:radio name="rating" value="5" label="5" inline />
                                            </div>
                                        </div>
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
                                            <tabler:radio name="gender" value="male" label="Male" required />
                                            <tabler:radio name="gender" value="female" label="Female" required />
                                            <tabler:radio name="gender" value="other" label="Other" required />
                                            <tabler:radio name="gender" value="prefer-not-to-say"
                                                label="Prefer not to say" required />
                                        </div>
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
                                            <tabler:radio name="payment_error" value="credit" label="Credit Card"
                                                error="Please select a valid payment method" />
                                            <tabler:radio name="payment_error" value="debit" label="Debit Card"
                                                error="Please select a valid payment method" />
                                            <tabler:radio name="payment_error" value="paypal" label="PayPal"
                                                error="Please select a valid payment method" />
                                        </div>
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
                                            <tabler:radio name="shipping" value="standard"
                                                label="Standard (3-5 days)" checked />
                                            <tabler:radio name="shipping" value="express"
                                                label="Express (1-2 days)" />
                                            <tabler:radio name="shipping" value="overnight"
                                                label="Overnight (Not available)" disabled />
                                            <tabler:radio name="shipping" value="international"
                                                label="International (Not available)" disabled />
                                        </div>
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
                                            <tabler:radio name="frequency" value="realtime" label="Real-time"
                                                description="Get notified instantly"
                                                help="Recommended for urgent updates" checked />
                                            <tabler:radio name="frequency" value="daily" label="Daily digest"
                                                description="Once per day summary"
                                                help="Best for non-urgent notifications" />
                                            <tabler:radio name="frequency" value="weekly" label="Weekly summary"
                                                description="Once per week roundup" help="Minimal interruptions" />
                                        </div>
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
                                                <tabler:radio name="theme" value="light" label="Light"
                                                    description="Light color scheme" />
                                                <tabler:radio name="theme" value="dark" label="Dark"
                                                    description="Dark color scheme" checked />
                                                <tabler:radio name="theme" value="auto" label="Auto"
                                                    description="Match system settings" />
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Language:</label>
                                                <tabler:radio name="language" value="en" label="English"
                                                    checked />
                                                <tabler:radio name="language" value="es" label="Spanish" />
                                                <tabler:radio name="language" value="fr" label="French" />
                                                <tabler:radio name="language" value="de" label="German" />
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label">Date format:</label>
                                                <div>
                                                    <tabler:radio name="date_format" value="mdy"
                                                        label="MM/DD/YYYY" inline checked />
                                                    <tabler:radio name="date_format" value="dmy"
                                                        label="DD/MM/YYYY" inline />
                                                    <tabler:radio name="date_format" value="ymd"
                                                        label="YYYY-MM-DD" inline />
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary">Save
                                                    Preferences</button>
                                            </div>
                                        </form>
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
                                        <pre class="rounded p-3"><code>&lt;tabler:radio
    name="theme"
    value="light"
    label="Light"
    wire:model="selectedTheme"
/&gt;

&lt;tabler:radio
    name="theme"
    value="dark"
    label="Dark"
    wire:model.live="selectedTheme"
/&gt;

&lt;tabler:radio
    name="plan"
    value="pro"
    label="Pro Plan"
    description="Advanced features"
    wire:model="selectedPlan"
/&gt;</code></pre>
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
                                                <tabler:radio name="a11y-required" value="yes" label="Yes"
                                                    description="aria-required is automatically added" required />
                                                <tabler:radio name="a11y-required" value="no" label="No"
                                                    required />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">With error:</label>
                                                <tabler:radio name="a11y-error" value="option1" label="Option 1"
                                                    error="aria-invalid and aria-describedby are automatically added" />
                                                <tabler:radio name="a11y-error" value="option2" label="Option 2"
                                                    error="aria-invalid and aria-describedby are automatically added" />
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
                                                        <td>Input name attribute (auto-detected from wire:model).
                                                            <strong>Required</strong> for radio groups.</td>
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
                                                        <td><code>label</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Label text</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>description</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Description text displayed below label</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>help</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Help text displayed below radio button</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>required</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Mark as required (adds asterisk to label)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>disabled</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Disabled state</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>error</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Error message (auto-detected from Laravel validation)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>inline</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Display inline (horizontally)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>containerClass</code></td>
                                                        <td>string</td>
                                                        <td>'mb-3' (or empty if inline)</td>
                                                        <td>CSS class for wrapper div</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="alert alert-info mt-3">
                                            <strong>Note:</strong> Radio buttons with the same <code>name</code>
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
