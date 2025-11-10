@extends('tabler::layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page header -->
        <div class="page-header d-print-none mb-4">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Component Demo</div>
                    <h2 class="page-title">Form Components</h2>
                    <p class="text-muted">A comprehensive showcase of all 20 Tabler UI form components with examples and variations.</p>
                </div>
            </div>
        </div>

        <div class="row row-cards">
            {{-- 1. Input Component --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>1. Input Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Text input with icon support, validation, and various sizes</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="row">
                            <div class="col-md-6">
                                <x-tabler::forms.input
                                    name="basic_input"
                                    label="Basic Input"
                                    placeholder="Enter text here"
                                />
                            </div>
                            <div class="col-md-6">
                                <x-tabler::forms.input
                                    name="email"
                                    type="email"
                                    label="Email with Icon"
                                    icon="mail"
                                    placeholder="email@example.com"
                                />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <x-tabler::forms.input
                                    name="small"
                                    label="Small Input"
                                    size="sm"
                                    placeholder="Small size"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-tabler::forms.input
                                    name="normal"
                                    label="Normal Input"
                                    placeholder="Normal size"
                                />
                            </div>
                            <div class="col-md-4">
                                <x-tabler::forms.input
                                    name="large"
                                    label="Large Input"
                                    size="lg"
                                    placeholder="Large size"
                                />
                            </div>
                        </div>

                        <x-tabler::forms.input
                            name="loading_input"
                            label="Loading State"
                            loading
                            placeholder="Loading..."
                        />
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.input name="email" type="email" label="Email" icon="mail" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 2. Textarea Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>2. Textarea Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Multi-line text input</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::forms.textarea
                            name="description"
                            label="Description"
                            placeholder="Enter your description here..."
                            rows="4"
                        />

                        <x-tabler::forms.textarea
                            name="bio"
                            label="Bio with Help Text"
                            help="Tell us about yourself"
                            placeholder="Your bio..."
                            rows="3"
                        />
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.textarea name="description" label="Description" rows="4" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 3. Select Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>3. Select Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Dropdown selection with optgroups support</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::forms.select
                            name="country"
                            label="Select Country"
                            :options="[
                                'us' => 'United States',
                                'uk' => 'United Kingdom',
                                'ca' => 'Canada',
                                'au' => 'Australia',
                            ]"
                        />

                        <x-tabler::forms.select
                            name="status"
                            label="Status"
                            placeholder="Choose status..."
                            :options="[
                                'active' => 'Active',
                                'inactive' => 'Inactive',
                                'pending' => 'Pending',
                            ]"
                        />
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.select name="country" label="Select Country" :options="$countries" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 4. Checkbox Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>4. Checkbox Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Single or inline checkboxes</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::forms.checkbox
                            name="terms"
                            label="I agree to the terms and conditions"
                        />

                        <x-tabler::forms.checkbox
                            name="newsletter"
                            label="Subscribe to newsletter"
                            help="We'll send you weekly updates"
                            checked
                        />

                        <div class="mb-3">
                            <label class="form-label">Inline Checkboxes</label>
                            <div>
                                <x-tabler::forms.checkbox name="option1" label="Option 1" inline :wrapper="false" />
                                <x-tabler::forms.checkbox name="option2" label="Option 2" inline :wrapper="false" />
                                <x-tabler::forms.checkbox name="option3" label="Option 3" inline :wrapper="false" />
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.checkbox name="terms" label="I agree" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 5. Radio Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>5. Radio Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Radio button groups</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="mb-3">
                            <label class="form-label">Payment Method</label>
                            <x-tabler::forms.radio name="payment" value="card" label="Credit Card" checked :wrapper="false" />
                            <x-tabler::forms.radio name="payment" value="paypal" label="PayPal" :wrapper="false" />
                            <x-tabler::forms.radio name="payment" value="bank" label="Bank Transfer" :wrapper="false" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Inline Radio Buttons</label>
                            <div>
                                <x-tabler::forms.radio name="size" value="s" label="Small" inline :wrapper="false" />
                                <x-tabler::forms.radio name="size" value="m" label="Medium" inline checked :wrapper="false" />
                                <x-tabler::forms.radio name="size" value="l" label="Large" inline :wrapper="false" />
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.radio name="payment" value="card" label="Credit Card" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 6. Switch Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>6. Switch Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Toggle switches</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::forms.switch name="notifications" label="Enable Notifications" />
                        <x-tabler::forms.switch name="dark_mode" label="Dark Mode" checked />
                        <x-tabler::forms.switch name="auto_save" label="Auto Save" help="Automatically save your work" />
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.switch name="notifications" label="Enable Notifications" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 7. Label Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>7. Label Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Form labels with required indicator</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="mb-3">
                            <x-tabler::forms.label for="username">Username</x-tabler::forms.label>
                            <input type="text" class="form-control" id="username" />
                        </div>

                        <div class="mb-3">
                            <x-tabler::forms.label for="password" required>Password</x-tabler::forms.label>
                            <input type="password" class="form-control" id="password" />
                        </div>

                        <div class="mb-3">
                            <x-tabler::forms.label for="api_key" required description="Found in settings">API Key</x-tabler::forms.label>
                            <input type="text" class="form-control" id="api_key" />
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.label for="username" required&gt;Username&lt;/x-tabler::forms.label&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 8. Hint Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>8. Hint Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Help text below form controls</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" />
                        <x-tabler::forms.hint>Must be at least 8 characters long</x-tabler::forms.hint>

                        <label class="form-label mt-3">Username</label>
                        <input type="text" class="form-control" />
                        <x-tabler::forms.hint class="text-primary">Only lowercase letters and numbers allowed</x-tabler::forms.hint>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.hint&gt;Must be at least 8 characters long&lt;/x-tabler::forms.hint&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 9. Help Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>9. Help Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Popover help icons (requires Bootstrap JS)</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="mb-3">
                            <label class="form-label">
                                API Key
                                <x-tabler::forms.help content="Your API key can be found in your account settings" />
                            </label>
                            <input type="text" class="form-control" placeholder="Enter your API key" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Webhook URL
                                <x-tabler::forms.help content="The URL where we'll send POST requests with event data" placement="right" />
                            </label>
                            <input type="url" class="form-control" placeholder="https://example.com/webhook" />
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.help content="Your API key can be found in settings" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 10. Color Check Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>10. Color Check Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Visual color selectors</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="mb-3">
                            <label class="form-label">Choose Color</label>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <x-tabler::forms.color-check name="color" value="blue" color="blue" checked />
                                </div>
                                <div class="col-auto">
                                    <x-tabler::forms.color-check name="color" value="red" color="red" />
                                </div>
                                <div class="col-auto">
                                    <x-tabler::forms.color-check name="color" value="green" color="green" />
                                </div>
                                <div class="col-auto">
                                    <x-tabler::forms.color-check name="color" value="yellow" color="yellow" />
                                </div>
                                <div class="col-auto">
                                    <x-tabler::forms.color-check name="color" value="purple" color="purple" />
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.color-check name="color" value="blue" color="blue" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 11. Color Picker Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>11. Color Picker Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>HTML5 color picker</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::forms.color-picker
                            name="brand_color"
                            label="Brand Color"
                            value="#066fd1"
                        />

                        <x-tabler::forms.color-picker
                            name="accent_color"
                            label="Accent Color"
                            value="#10b981"
                        />
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.color-picker name="brand_color" label="Brand Color" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 12. Image Check Component --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>12. Image Check Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Image selection inputs</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="mb-3">
                            <label class="form-label">Choose Avatar</label>
                            <div class="row g-2">
                                <div class="col-auto">
                                    <x-tabler::forms.image-check
                                        name="avatar"
                                        value="1"
                                        image="https://ui-avatars.com/api/?name=User+1&size=128&background=066fd1&color=fff"
                                        checked
                                    />
                                </div>
                                <div class="col-auto">
                                    <x-tabler::forms.image-check
                                        name="avatar"
                                        value="2"
                                        image="https://ui-avatars.com/api/?name=User+2&size=128&background=10b981&color=fff"
                                    />
                                </div>
                                <div class="col-auto">
                                    <x-tabler::forms.image-check
                                        name="avatar"
                                        value="3"
                                        image="https://ui-avatars.com/api/?name=User+3&size=128&background=f59e0b&color=fff"
                                    />
                                </div>
                                <div class="col-auto">
                                    <x-tabler::forms.image-check
                                        name="avatar"
                                        value="4"
                                        image="https://ui-avatars.com/api/?name=User+4&size=128&background=ef4444&color=fff"
                                    />
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.image-check name="avatar" value="1" image="path/to/image.jpg" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 13. Range Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>13. Range Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Range slider inputs</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::forms.range
                            name="volume"
                            label="Volume"
                            value="75"
                            min="0"
                            max="100"
                        />

                        <x-tabler::forms.range
                            name="price"
                            label="Price Range"
                            value="500"
                            min="0"
                            max="1000"
                            step="50"
                        />
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.range name="volume" label="Volume" value="75" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 14. File Component --}}
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>14. File Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>File upload inputs</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::forms.file
                            name="document"
                            label="Upload Document"
                            accept=".pdf,.doc,.docx"
                        />

                        <x-tabler::forms.file
                            name="images"
                            label="Upload Images"
                            accept="image/*"
                            multiple
                            help="You can select multiple images"
                        />
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.file name="document" label="Upload Document" accept=".pdf" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 15. Input Group Component --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>15. Input Group Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Input groups with prepend/append</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Website URL</label>
                                    <x-tabler::forms.input-group prepend="https://">
                                        <input type="text" class="form-control" placeholder="example.com" />
                                    </x-tabler::forms.input-group>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <x-tabler::forms.input-group prepend="$" append=".00">
                                        <input type="number" class="form-control" placeholder="0" />
                                    </x-tabler::forms.input-group>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Username (Flat)</label>
                                    <x-tabler::forms.input-group prepend="@" flat>
                                        <input type="text" class="form-control" placeholder="username" />
                                    </x-tabler::forms.input-group>
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.input-group prepend="$"&gt;...&lt;/x-tabler::forms.input-group&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 16. Fieldset Component --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>16. Fieldset Component</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Group related form elements</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <x-tabler::forms.fieldset legend="Personal Information">
                            <div class="row">
                                <div class="col-md-6">
                                    <x-tabler::forms.input name="first_name" label="First Name" placeholder="John" />
                                </div>
                                <div class="col-md-6">
                                    <x-tabler::forms.input name="last_name" label="Last Name" placeholder="Doe" />
                                </div>
                            </div>
                            <x-tabler::forms.input name="email" type="email" label="Email" placeholder="john@example.com" />
                        </x-tabler::forms.fieldset>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.fieldset legend="Personal Information"&gt;...&lt;/x-tabler::forms.fieldset&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 17 & 18. Selectgroup Components --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>17 & 18. Selectgroup Components</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Button-like selection groups</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="mb-3">
                            <label class="form-label">Choose Plan (with Icons)</label>
                            <x-tabler::forms.selectgroup>
                                <x-tabler::forms.selectgroup-item
                                    name="plan"
                                    value="basic"
                                    text="Basic"
                                    icon="home"
                                />
                                <x-tabler::forms.selectgroup-item
                                    name="plan"
                                    value="pro"
                                    text="Pro"
                                    icon="star"
                                    checked
                                />
                                <x-tabler::forms.selectgroup-item
                                    name="plan"
                                    value="enterprise"
                                    text="Enterprise"
                                    icon="building"
                                />
                            </x-tabler::forms.selectgroup>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Size (Pills Style)</label>
                            <x-tabler::forms.selectgroup pills>
                                <x-tabler::forms.selectgroup-item name="size" value="xs" text="XS" />
                                <x-tabler::forms.selectgroup-item name="size" value="s" text="S" />
                                <x-tabler::forms.selectgroup-item name="size" value="m" text="M" checked />
                                <x-tabler::forms.selectgroup-item name="size" value="l" text="L" />
                                <x-tabler::forms.selectgroup-item name="size" value="xl" text="XL" />
                            </x-tabler::forms.selectgroup>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Features (Multiple Selection with Checkboxes)</label>
                            <x-tabler::forms.selectgroup>
                                <x-tabler::forms.selectgroup-item
                                    type="checkbox"
                                    name="features[]"
                                    value="api"
                                    text="API Access"
                                    icon="cloud"
                                />
                                <x-tabler::forms.selectgroup-item
                                    type="checkbox"
                                    name="features[]"
                                    value="support"
                                    text="24/7 Support"
                                    icon="phone"
                                    checked
                                />
                                <x-tabler::forms.selectgroup-item
                                    type="checkbox"
                                    name="features[]"
                                    value="analytics"
                                    text="Analytics"
                                    icon="chart-bar"
                                />
                            </x-tabler::forms.selectgroup>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.selectgroup&gt;&lt;x-tabler::forms.selectgroup-item ... /&gt;&lt;/x-tabler::forms.selectgroup&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- 19 & 20. Validation Feedback Components --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>19 & 20. Validation Feedback Components</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>Success and error feedback messages</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Username (Valid)</label>
                                    <input type="text" class="form-control is-valid" value="johndoe" />
                                    <x-tabler::forms.valid-feedback message="Username is available!" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Email (Invalid)</label>
                                    <input type="email" class="form-control is-invalid" value="invalid-email" />
                                    <x-tabler::forms.invalid-feedback message="Please provide a valid email address." />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Password (Invalid with slot)</label>
                                    <input type="password" class="form-control is-invalid" />
                                    <x-tabler::forms.invalid-feedback>
                                        <strong>Error:</strong> Password must be at least 8 characters long.
                                    </x-tabler::forms.invalid-feedback>
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        <code>&lt;x-tabler::forms.valid-feedback message="Success!" /&gt;</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            {{-- Complete Form Example --}}
            <div class="col-12">
                <x-tabler::cards.card bgColor="primary-lt">
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Complete Form Example</x-tabler::cards.title>
                        <x-tabler::cards.subtitle>All components working together</x-tabler::cards.subtitle>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <form>
                            <x-tabler::forms.fieldset legend="Account Information">
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-tabler::forms.input
                                            name="username"
                                            label="Username"
                                            icon="user"
                                            placeholder="johndoe"
                                            required
                                        />
                                    </div>
                                    <div class="col-md-6">
                                        <x-tabler::forms.input
                                            name="email"
                                            type="email"
                                            label="Email"
                                            icon="mail"
                                            placeholder="john@example.com"
                                            required
                                        />
                                    </div>
                                </div>

                                <x-tabler::forms.input
                                    name="password"
                                    type="password"
                                    label="Password"
                                    help="Must be at least 8 characters"
                                    required
                                />
                            </x-tabler::forms.fieldset>

                            <x-tabler::forms.fieldset legend="Profile Details">
                                <x-tabler::forms.textarea
                                    name="bio"
                                    label="Bio"
                                    placeholder="Tell us about yourself..."
                                    rows="3"
                                />

                                <x-tabler::forms.select
                                    name="country"
                                    label="Country"
                                    :options="[
                                        'us' => 'United States',
                                        'uk' => 'United Kingdom',
                                        'ca' => 'Canada',
                                    ]"
                                />

                                <div class="mb-3">
                                    <label class="form-label">Choose Plan</label>
                                    <x-tabler::forms.selectgroup>
                                        <x-tabler::forms.selectgroup-item
                                            name="plan"
                                            value="free"
                                            text="Free"
                                            checked
                                        />
                                        <x-tabler::forms.selectgroup-item
                                            name="plan"
                                            value="pro"
                                            text="Pro"
                                        />
                                    </x-tabler::forms.selectgroup>
                                </div>
                            </x-tabler::forms.fieldset>

                            <x-tabler::forms.fieldset legend="Preferences">
                                <x-tabler::forms.switch
                                    name="notifications"
                                    label="Enable Notifications"
                                    checked
                                />
                                <x-tabler::forms.switch
                                    name="newsletter"
                                    label="Subscribe to Newsletter"
                                />
                            </x-tabler::forms.fieldset>

                            <x-tabler::forms.checkbox
                                name="terms"
                                label="I agree to the terms and conditions"
                                required
                            />

                            <div class="mt-3">
                                <x-tabler::button type="submit" color="primary" icon="check">
                                    Create Account
                                </x-tabler::button>
                                <x-tabler::button type="button" variant="ghost" class="ms-2">
                                    Cancel
                                </x-tabler::button>
                            </div>
                        </form>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            {{-- Component Props Reference --}}
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Component Props Reference</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="table-responsive">
                            <table class="table table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Component</th>
                                        <th>Key Props</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>forms.input</code></td>
                                        <td>type, name, label, icon, size (sm/lg), loading, required</td>
                                        <td>Text inputs with icons and validation</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.textarea</code></td>
                                        <td>name, label, rows, autosize</td>
                                        <td>Multi-line text input</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.select</code></td>
                                        <td>name, label, options, placeholder, multiple</td>
                                        <td>Dropdown with optgroups support</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.checkbox</code></td>
                                        <td>name, value, label, checked, inline</td>
                                        <td>Checkbox inputs</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.radio</code></td>
                                        <td>name, value, label, checked, inline</td>
                                        <td>Radio button inputs</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.switch</code></td>
                                        <td>name, value, label, checked</td>
                                        <td>Toggle switches</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.label</code></td>
                                        <td>for, required, description</td>
                                        <td>Form labels with required indicator</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.hint</code></td>
                                        <td>-</td>
                                        <td>Help text below controls</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.help</code></td>
                                        <td>content, placement</td>
                                        <td>Popover help icons</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.color-check</code></td>
                                        <td>name, value, color, checked</td>
                                        <td>Visual color selectors</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.color-picker</code></td>
                                        <td>name, label, value</td>
                                        <td>HTML5 color picker</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.image-check</code></td>
                                        <td>name, value, image, checked</td>
                                        <td>Image selection inputs</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.range</code></td>
                                        <td>name, label, value, min, max, step</td>
                                        <td>Range sliders</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.file</code></td>
                                        <td>name, label, accept, multiple</td>
                                        <td>File upload inputs</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.input-group</code></td>
                                        <td>prepend, append, flat</td>
                                        <td>Input groups with addons</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.fieldset</code></td>
                                        <td>legend</td>
                                        <td>Group related form elements</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.selectgroup</code></td>
                                        <td>pills</td>
                                        <td>Container for selectgroup items</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.selectgroup-item</code></td>
                                        <td>type (radio/checkbox), name, value, text, icon, checked</td>
                                        <td>Button-like selection items</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.valid-feedback</code></td>
                                        <td>message</td>
                                        <td>Success validation message</td>
                                    </tr>
                                    <tr>
                                        <td><code>forms.invalid-feedback</code></td>
                                        <td>message</td>
                                        <td>Error validation message</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>
        </div>
    </div>
@endsection
