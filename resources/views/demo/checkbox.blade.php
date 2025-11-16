<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Checkbox - Tabler Blade Components'])
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
                                <h2 class="page-title">Checkbox</h2>
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
                                        <h3 class="card-title">Basic Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:checkbox name="basic" label="Basic checkbox" />
                                        <tabler:checkbox name="checked" label="Checked checkbox" checked />
                                        <tabler:checkbox name="disabled" label="Disabled checkbox" disabled />
                                        <tabler:checkbox name="disabled-checked" label="Disabled checked checkbox"
                                            checked disabled />
                                    </div>
                                </div>
                            </div>

                            {{-- With Descriptions --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Checkboxes with Descriptions</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:checkbox name="desc1" label="Receive notifications"
                                            description="Get email notifications about new messages and updates" />
                                        <tabler:checkbox name="desc2" label="Enable dark mode"
                                            description="Switch to a dark color scheme for better viewing at night"
                                            checked />
                                        <tabler:checkbox name="desc3" label="Subscribe to newsletter"
                                            description="Receive weekly updates about product features and promotions" />
                                    </div>
                                </div>
                            </div>

                            {{-- Inline Checkboxes --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Inline Checkboxes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Select your preferences:</label>
                                            <div>
                                                <tabler:checkbox name="inline1" label="Option 1" inline checked />
                                                <tabler:checkbox name="inline2" label="Option 2" inline />
                                                <tabler:checkbox name="inline3" label="Option 3" inline checked />
                                                <tabler:checkbox name="inline4" label="Option 4" inline disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Required Field --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Required Checkboxes</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:checkbox name="terms" label="I agree to the Terms & Conditions"
                                            required />
                                        <tabler:checkbox name="privacy"
                                            label="I have read and accept the Privacy Policy" required />
                                        <tabler:checkbox name="age" label="I confirm that I am 18 years or older"
                                            description="This is required to create an account" required />
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
                                        <tabler:checkbox name="error1" label="Checkbox with error"
                                            error="You must accept this to continue" />
                                        <tabler:checkbox name="error2" label="Terms and conditions"
                                            description="Please read carefully before accepting"
                                            error="This field is required" required />
                                        <tabler:checkbox name="error3" label="Invalid checkbox"
                                            error="This selection is invalid. Please try again." checked />
                                    </div>
                                </div>
                            </div>

                            {{-- With Help Text --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Checkboxes with Help Text</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:checkbox name="help1" label="Enable two-factor authentication"
                                            description="Add an extra layer of security to your account"
                                            help="This will require a code from your phone when logging in" />
                                        <tabler:checkbox name="help2" label="Save my preferences"
                                            help="Your selections will be remembered for your next visit" />
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
                                            <h4 class="mb-3">Notification Preferences</h4>
                                            <tabler:checkbox name="email_notifications" label="Email notifications"
                                                description="Receive email updates about your account activity"
                                                checked />
                                            <tabler:checkbox name="sms_notifications" label="SMS notifications"
                                                description="Get text messages for important alerts" />
                                            <tabler:checkbox name="push_notifications" label="Push notifications"
                                                description="Allow browser push notifications" checked />
                                            <hr class="my-4">
                                            <h4 class="mb-3">Marketing Preferences</h4>
                                            <tabler:checkbox name="newsletter" label="Weekly newsletter"
                                                description="Receive our weekly digest of updates and tips" />
                                            <tabler:checkbox name="promotions" label="Special promotions"
                                                description="Get notified about exclusive deals and offers" />
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
                                            The checkbox component is fully compatible with Livewire's wire:model
                                            directive:
                                        </p>
                                        <pre class="rounded p-3"><code>&lt;tabler:checkbox
    label="Remember me"
    wire:model="rememberMe"
/&gt;

&lt;tabler:checkbox
    label="I agree to the terms"
    wire:model.live="agreedToTerms"
    required
/&gt;

&lt;tabler:checkbox
    label="Send notifications"
    wire:model="sendNotifications"
    description="Receive email updates"
/&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Accessibility --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Accessibility Features</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:checkbox name="a11y-required" label="Required field"
                                                    description="aria-required is automatically added" required />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:checkbox name="a11y-error" label="With error"
                                                    error="aria-invalid and aria-describedby are automatically added" />
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted mb-0">
                                                <strong>Keyboard Navigation:</strong> Space to toggle, Tab/Shift+Tab to
                                                navigate<br>
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
                                                        <td>Input name attribute (auto-detected from wire:model)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>id</code></td>
                                                        <td>string</td>
                                                        <td>auto-generated</td>
                                                        <td>Input ID (auto-generated from name if not provided)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>value</code></td>
                                                        <td>string</td>
                                                        <td>'1'</td>
                                                        <td>Value when checked</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>checked</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Initially checked state</td>
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
                                                        <td>Help text displayed below checkbox</td>
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
                                                        <td><code>variant</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Style variant: 'single' for standalone checkboxes</td>
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
