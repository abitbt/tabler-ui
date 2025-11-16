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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <tabler:input label="Text Input" name="text"
                                                    placeholder="Enter text..." />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Email Input" type="email" name="email"
                                                    placeholder="your-email@example.com" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Password Input" type="password" name="password"
                                                    placeholder="Enter password..." />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Number Input" type="number" name="number"
                                                    placeholder="0" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Date Input" type="date" name="date" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="URL Input" type="url" name="url"
                                                    placeholder="https://example.com" />
                                            </div>
                                        </div>
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
                                                <tabler:input label="Standard Label" name="standard"
                                                    placeholder="Optional field" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Required Field" name="required"
                                                    placeholder="This field is required" required />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="With Help Text" name="help"
                                                    placeholder="Enter value..."
                                                    help="This is helpful information about this field." />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input name="no-label" placeholder="Input without label" />
                                            </div>
                                        </div>
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
                                                <tabler:input label="Valid Input" name="valid" value="Valid value"
                                                    class="is-valid" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Invalid Input" name="invalid" value="Invalid value"
                                                    error="This field has an error. Please correct it." />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Required with Error" name="required-error" required
                                                    error="This field is required." />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="With Help & Error" name="help-error"
                                                    help="Enter a valid email address"
                                                    error="Please provide a valid email format." />
                                            </div>
                                        </div>
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
                                                <tabler:input label="Small Input" name="small" size="sm"
                                                    placeholder="Small size" />
                                            </div>
                                            <div class="col-md-4">
                                                <tabler:input label="Default Input" name="default"
                                                    placeholder="Default size" />
                                            </div>
                                            <div class="col-md-4">
                                                <tabler:input label="Large Input" name="large" size="lg"
                                                    placeholder="Large size" />
                                            </div>
                                        </div>
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
                                                <tabler:input label="Rounded Input" name="rounded" variant="rounded"
                                                    placeholder="Rounded corners" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Flush Input" name="flush" variant="flush"
                                                    placeholder="No borders" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Light Input" name="light" variant="light"
                                                    placeholder="Light background" />
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bg-dark rounded p-3">
                                                    <tabler:input label="Dark Input" name="dark" variant="dark"
                                                        placeholder="For dark backgrounds" />
                                                </div>
                                            </div>
                                        </div>
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
                                                <tabler:input label="Leading Icon" name="icon-leading" icon="search"
                                                    placeholder="Search..." />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Trailing Icon" name="icon-trailing"
                                                    icon="calendar" iconPosition="trailing"
                                                    placeholder="Select date..." />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="User Icon" name="icon-user" icon="user"
                                                    placeholder="Username" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Mail Icon" name="icon-mail" icon="mail"
                                                    placeholder="Email address" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Lock Icon (Password)" type="password"
                                                    name="icon-lock" icon="lock" placeholder="Password" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Phone Icon" name="icon-phone" icon="phone"
                                                    type="tel" placeholder="+1 (555) 000-0000" />
                                            </div>
                                        </div>
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
                                                <tabler:input label="Disabled Input" name="disabled"
                                                    value="This input is disabled" disabled />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Readonly Input" name="readonly"
                                                    value="This value is readonly" readonly />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="With Value" name="with-value"
                                                    value="Pre-filled value" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="Disabled with Icon" name="disabled-icon"
                                                    icon="lock" value="Locked field" disabled />
                                            </div>
                                        </div>
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
                                        <pre class="rounded p-3"><code>&lt;tabler:input
    label="Name"
    wire:model="name"
    placeholder="Enter your name..."
/&gt;

&lt;tabler:input
    label="Email"
    wire:model.live="email"
    type="email"
    placeholder="your@email.com"
/&gt;

&lt;tabler:input
    label="Search"
    wire:model.blur="searchTerm"
    icon="search"
    placeholder="Search..."
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
                                                <tabler:input label="Required Field" name="a11y-required" required
                                                    placeholder="aria-required automatically added" />
                                            </div>
                                            <div class="col-md-6">
                                                <tabler:input label="With Error" name="a11y-error"
                                                    error="aria-invalid and aria-describedby automatically added" />
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
                                                        <td><code>label</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Label text</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>placeholder</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Placeholder text</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>help</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Help text displayed below input</td>
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
                                                        <td><code>readonly</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Readonly state</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>error</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Error message (auto-detected from Laravel validation)</td>
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
                                                    <tr>
                                                        <td><code>containerClass</code></td>
                                                        <td>string</td>
                                                        <td>'mb-3'</td>
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
