<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Input - Tabler Blade Components'])
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
                                <h2 class="page-title">Input</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Examples --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:field label="Text Input">
                                                    <tabler:input name="text" placeholder="Enter text..." />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Email Input">
                                                    <tabler:input type="email" name="email"
                                                        placeholder="your-email@example.com" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Password Input">
                                                    <tabler:input type="password" name="password"
                                                        placeholder="Enter password..." />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Number Input">
                                                    <tabler:input type="number" name="number" placeholder="0" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Date Input">
                                                    <tabler:input type="date" name="date" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="URL Input">
                                                    <tabler:input type="url" name="url"
                                                        placeholder="https://example.com" />
                                                </tabler:field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field label="Text Input"&gt;
    &lt;tabler:input name="text" placeholder="Enter text..." /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Email Input"&gt;
    &lt;tabler:input type="email" name="email" placeholder="your-email@example.com" /&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Labels & Required --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Labels & Required Fields</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:field label="Standard Label">
                                                    <tabler:input name="standard" placeholder="Optional field" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Required Field" required>
                                                    <tabler:input name="required" placeholder="This field is required"
                                                        required />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="With Help Text"
                                                    description="This is helpful information about this field.">
                                                    <tabler:input name="help" placeholder="Enter value..." />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input name="no-label" placeholder="Input without label" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field label="Standard Label"&gt;
    &lt;tabler:input name="standard" placeholder="Optional field" /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Required Field" required&gt;
    &lt;tabler:input name="required" placeholder="Required" required /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="With Help" description="Helpful information"&gt;
    &lt;tabler:input name="help" /&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Validation States --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Validation States</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:field label="Valid Input">
                                                    <tabler:input name="valid" value="Valid value" class="is-valid" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Invalid Input"
                                                    error="This field has an error. Please correct it.">
                                                    <tabler:input name="invalid" value="Invalid value" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Required with Error" required
                                                    error="This field is required.">
                                                    <tabler:input name="required-error" required />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="With Help & Error"
                                                    description="Enter a valid email address"
                                                    error="Please provide a valid email format.">
                                                    <tabler:input name="help-error" />
                                                </tabler:field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field label="Valid Input"&gt;
    &lt;tabler:input name="valid" value="Valid" class="is-valid" /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Invalid" error="This field has an error"&gt;
    &lt;tabler:input name="invalid" /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Required" required error="Required"&gt;
    &lt;tabler:input name="required" required /&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Size Variants --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Size Variants</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <tabler:field label="Small Input">
                                                    <tabler:input name="small" size="sm"
                                                        placeholder="Small size" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-4">
                                                <tabler:field label="Default Input">
                                                    <tabler:input name="default" placeholder="Default size" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-4">
                                                <tabler:field label="Large Input">
                                                    <tabler:input name="large" size="lg"
                                                        placeholder="Large size" />
                                                </tabler:field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field label="Small Input"&gt;
    &lt;tabler:input name="small" size="sm" placeholder="Small" /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Default Input"&gt;
    &lt;tabler:input name="default" placeholder="Default" /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Large Input"&gt;
    &lt;tabler:input name="large" size="lg" placeholder="Large" /&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Style Variants --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Style Variants</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:field label="Rounded Input">
                                                    <tabler:input name="rounded" variant="rounded"
                                                        placeholder="Rounded corners" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Flush Input">
                                                    <tabler:input name="flush" variant="flush"
                                                        placeholder="No borders" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Light Input">
                                                    <tabler:input name="light" variant="light"
                                                        placeholder="Light background" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-dark rounded p-3">
                                                    <tabler:field label="Dark Input">
                                                        <tabler:input name="dark" variant="dark"
                                                            placeholder="For dark backgrounds" />
                                                    </tabler:field>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field label="Rounded"&gt;
    &lt;tabler:input name="rounded" variant="rounded" placeholder="Rounded" /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Flush"&gt;
    &lt;tabler:input name="flush" variant="flush" placeholder="No borders" /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Light"&gt;
    &lt;tabler:input name="light" variant="light" placeholder="Light bg" /&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Icon Support --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Icon Support</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:field label="Leading Icon">
                                                    <tabler:input name="icon-leading" icon="search"
                                                        placeholder="Search..." />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Trailing Icon">
                                                    <tabler:input name="icon-trailing" icon="calendar"
                                                        iconPosition="trailing" placeholder="Select date..." />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="User Icon">
                                                    <tabler:input name="icon-user" icon="user"
                                                        placeholder="Username" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Mail Icon">
                                                    <tabler:input name="icon-mail" icon="mail"
                                                        placeholder="Email address" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Lock Icon (Password)">
                                                    <tabler:input type="password" name="icon-lock" icon="lock"
                                                        placeholder="Password" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Phone Icon">
                                                    <tabler:input name="icon-phone" icon="phone" type="tel"
                                                        placeholder="+1 (555) 000-0000" />
                                                </tabler:field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field label="Leading Icon"&gt;
    &lt;tabler:input name="search" icon="search" placeholder="Search..." /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Trailing Icon"&gt;
    &lt;tabler:input name="date" icon="calendar" iconPosition="trailing" /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="User Icon"&gt;
    &lt;tabler:input name="username" icon="user" placeholder="Username" /&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- State Examples --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Input States</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:field label="Disabled Input">
                                                    <tabler:input name="disabled" value="This input is disabled"
                                                        disabled />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Readonly Input">
                                                    <tabler:input name="readonly" value="This value is readonly"
                                                        readonly />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="With Value">
                                                    <tabler:input name="with-value" value="Pre-filled value" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="Disabled with Icon">
                                                    <tabler:input name="disabled-icon" icon="lock"
                                                        value="Locked field" disabled />
                                                </tabler:field>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field label="Disabled"&gt;
    &lt;tabler:input name="disabled" value="Disabled" disabled /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Readonly"&gt;
    &lt;tabler:input name="readonly" value="Readonly" readonly /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="With Value"&gt;
    &lt;tabler:input name="value" value="Pre-filled" /&gt;
&lt;/tabler:field&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Livewire Integration (Example) --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Livewire Integration (Code Examples)</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted">
                                            The input component is fully compatible with Livewire's wire:model
                                            directive:
                                        </p>
                                        <pre class="rounded p-3"><code>&lt;tabler:field label="Name"&gt;
    &lt;tabler:input
        wire:model="name"
        placeholder="Enter your name..."
    /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Email"&gt;
    &lt;tabler:input
        wire:model.live="email"
        type="email"
        placeholder="your@email.com"
    /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="Search"&gt;
    &lt;tabler:input
        wire:model.blur="searchTerm"
        icon="search"
        placeholder="Search..."
    /&gt;
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
                                                <tabler:field label="Required Field" required>
                                                    <tabler:input name="a11y-required" required
                                                        placeholder="aria-required automatically added" />
                                                </tabler:field>
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:field label="With Error"
                                                    error="aria-invalid and aria-describedby automatically added">
                                                    <tabler:input name="a11y-error" />
                                                </tabler:field>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted mb-0">
                                                <strong>Keyboard Navigation:</strong> All inputs support Tab, Shift+Tab
                                                navigation<br>
                                                <strong>Screen Readers:</strong> Labels are properly associated via
                                                for/id attributes<br>
                                                <strong>ARIA:</strong> aria-invalid, aria-required, and aria-describedby
                                                are automatically added when appropriate
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:field label="Required" required&gt;
    &lt;tabler:input name="required" required /&gt;
&lt;/tabler:field&gt;

&lt;tabler:field label="With error" error="Error message"&gt;
    &lt;tabler:input name="error" /&gt;
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
                                            <strong>Note:</strong> For labels, help text, and error messages, use the
                                            <code>&lt;tabler:field&gt;</code> wrapper component. See examples above for
                                            usage.
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
                                                        <td><code>type</code></td>
                                                        <td>string</td>
                                                        <td>'text'</td>
                                                        <td>Input type (text, email, password, number, date, etc.)</td>
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
                                                        <td>null</td>
                                                        <td>Initial value</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>placeholder</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Placeholder text</td>
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
                                                        <td><code>readonly</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Readonly state</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>size</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Size variant: 'sm', 'lg', or null for default</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>variant</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Style variant: 'rounded', 'flush', 'light', 'dark'</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>icon</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Icon name (position determined by iconPosition)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>iconTrailing</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Trailing icon name</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>iconPosition</code></td>
                                                        <td>string</td>
                                                        <td>'leading'</td>
                                                        <td>Icon position: 'leading' or 'trailing'</td>
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
