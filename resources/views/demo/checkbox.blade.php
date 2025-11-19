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
                                        <tabler:checkbox name="basic">Basic checkbox</tabler:checkbox>
                                        <tabler:checkbox name="checked" checked>Checked checkbox</tabler:checkbox>
                                        <tabler:checkbox name="disabled" disabled>Disabled checkbox</tabler:checkbox>
                                        <tabler:checkbox name="disabled-checked" checked disabled>Disabled checked
                                            checkbox</tabler:checkbox>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:checkbox name="basic"&gt;Basic checkbox&lt;/tabler:checkbox&gt;
&lt;tabler:checkbox name="checked" checked&gt;Checked checkbox&lt;/tabler:checkbox&gt;
&lt;tabler:checkbox name="disabled" disabled&gt;Disabled checkbox&lt;/tabler:checkbox&gt;</code></pre>
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
                                        <tabler:field
                                            description="Get email notifications about new messages and updates">
                                            <tabler:checkbox name="desc1">Receive notifications</tabler:checkbox>
                                        </tabler:field>
                                        <tabler:field
                                            description="Switch to a dark color scheme for better viewing at night">
                                            <tabler:checkbox name="desc2" checked>Enable dark mode</tabler:checkbox>
                                        </tabler:field>
                                        <tabler:field
                                            description="Receive weekly updates about product features and promotions">
                                            <tabler:checkbox name="desc3">Subscribe to newsletter</tabler:checkbox>
                                        </tabler:field>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field description="Get email notifications about new messages"&gt;
    &lt;tabler:checkbox name="desc1"&gt;Receive notifications&lt;/tabler:checkbox&gt;
&lt;/tabler:field&gt;</code></pre>
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
                                                <tabler:checkbox name="inline1" inline checked>Option 1
                                                </tabler:checkbox>
                                                <tabler:checkbox name="inline2" inline>Option 2</tabler:checkbox>
                                                <tabler:checkbox name="inline3" inline checked>Option 3
                                                </tabler:checkbox>
                                                <tabler:checkbox name="inline4" inline disabled>Option 4
                                                </tabler:checkbox>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:checkbox name="inline1" inline checked&gt;Option 1&lt;/tabler:checkbox&gt;
&lt;tabler:checkbox name="inline2" inline&gt;Option 2&lt;/tabler:checkbox&gt;
&lt;tabler:checkbox name="inline3" inline checked&gt;Option 3&lt;/tabler:checkbox&gt;</code></pre>
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
                                        <tabler:checkbox name="terms" required>I agree to the Terms &
                                            Conditions</tabler:checkbox>
                                        <tabler:checkbox name="privacy" required>I have read and accept the Privacy
                                            Policy</tabler:checkbox>
                                        <tabler:field description="This is required to create an account">
                                            <tabler:checkbox name="age" required>I confirm that I am 18 years or
                                                older</tabler:checkbox>
                                        </tabler:field>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:checkbox name="terms" required&gt;I agree to the Terms &amp; Conditions&lt;/tabler:checkbox&gt;

&lt;tabler:field description="This is required to create an account"&gt;
    &lt;tabler:checkbox name="age" required&gt;I confirm I am 18 or older&lt;/tabler:checkbox&gt;
&lt;/tabler:field&gt;</code></pre>
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
                                        <tabler:field error="You must accept this to continue">
                                            <tabler:checkbox name="error1">Checkbox with error</tabler:checkbox>
                                        </tabler:field>
                                        <tabler:field description="Please read carefully before accepting"
                                            error="This field is required">
                                            <tabler:checkbox name="error2" required>Terms and conditions
                                            </tabler:checkbox>
                                        </tabler:field>
                                        <tabler:field error="This selection is invalid. Please try again.">
                                            <tabler:checkbox name="error3" checked>Invalid checkbox</tabler:checkbox>
                                        </tabler:field>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field error="You must accept this to continue"&gt;
    &lt;tabler:checkbox name="error1"&gt;Checkbox with error&lt;/tabler:checkbox&gt;
&lt;/tabler:field&gt;</code></pre>
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
                                        <tabler:field description="Add an extra layer of security to your account"
                                            descriptionTrailing="This will require a code from your phone when logging in">
                                            <tabler:checkbox name="help1">Enable two-factor authentication
                                            </tabler:checkbox>
                                        </tabler:field>
                                        <tabler:field
                                            descriptionTrailing="Your selections will be remembered for your next visit">
                                            <tabler:checkbox name="help2">Save my preferences</tabler:checkbox>
                                        </tabler:field>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field descriptionTrailing="This will require a code from your phone"&gt;
    &lt;tabler:checkbox name="help1"&gt;Enable two-factor authentication&lt;/tabler:checkbox&gt;
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
                                            <h4 class="mb-3">Notification Preferences</h4>
                                            <tabler:field
                                                description="Receive email updates about your account activity">
                                                <tabler:checkbox name="email_notifications" checked>Email
                                                    notifications</tabler:checkbox>
                                            </tabler:field>
                                            <tabler:field description="Get text messages for important alerts">
                                                <tabler:checkbox name="sms_notifications">SMS notifications
                                                </tabler:checkbox>
                                            </tabler:field>
                                            <tabler:field description="Allow browser push notifications">
                                                <tabler:checkbox name="push_notifications" checked>Push
                                                    notifications</tabler:checkbox>
                                            </tabler:field>
                                            <hr class="my-4">
                                            <h4 class="mb-3">Marketing Preferences</h4>
                                            <tabler:field description="Receive our weekly digest of updates and tips">
                                                <tabler:checkbox name="newsletter">Weekly newsletter</tabler:checkbox>
                                            </tabler:field>
                                            <tabler:field description="Get notified about exclusive deals and offers">
                                                <tabler:checkbox name="promotions">Special promotions</tabler:checkbox>
                                            </tabler:field>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary">Save
                                                    Preferences</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;form&gt;
    &lt;tabler:field description="Receive email updates"&gt;
        &lt;tabler:checkbox name="email_notifications" checked&gt;Email notifications&lt;/tabler:checkbox&gt;
    &lt;/tabler:field&gt;
    &lt;tabler:field description="Get text messages for important alerts"&gt;
        &lt;tabler:checkbox name="sms_notifications"&gt;SMS notifications&lt;/tabler:checkbox&gt;
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
                                            The checkbox component is fully compatible with Livewire's wire:model
                                            directive:
                                        </p>
                                        <pre class="rounded p-3"><code>&lt;tabler:checkbox wire:model="rememberMe"&gt;Remember me&lt;/tabler:checkbox&gt;

&lt;tabler:checkbox wire:model.live="agreedToTerms" required&gt;
    I agree to the terms
&lt;/tabler:checkbox&gt;

&lt;tabler:field description="Receive email updates"&gt;
    &lt;tabler:checkbox wire:model="sendNotifications"&gt;Send notifications&lt;/tabler:checkbox&gt;
&lt;/tabler:field&gt;</code></pre>
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
                                                <tabler:field description="aria-required is automatically added">
                                                    <tabler:checkbox name="a11y-required" required>Required
                                                        field</tabler:checkbox>
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field
                                                    error="aria-invalid and aria-describedby are automatically added">
                                                    <tabler:checkbox name="a11y-error">With error</tabler:checkbox>
                                                </tabler:field>
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
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field description="aria-required is automatically added"&gt;
    &lt;tabler:checkbox name="a11y-required" required&gt;Required field&lt;/tabler:checkbox&gt;
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
                                                    <tr>
                                                        <td><code>variant</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Style variant: 'single' for standalone checkboxes</td>
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
