@extends('tabler::layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page header -->
        <div class="page-header d-print-none mb-4">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Component Demo</div>
                    <h2 class="page-title">Button Component</h2>
                    <p class="text-muted">Comprehensive showcase of all button variations, styles, and features.</p>
                </div>
            </div>
        </div>

        <div class="row row-cards">
            <!-- Standard Colors -->
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Standard Colors</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="btn-list">
                            <x-tabler::button>Default</x-tabler::button>
                            <x-tabler::button color="primary">Primary</x-tabler::button>
                            <x-tabler::button color="secondary">Secondary</x-tabler::button>
                            <x-tabler::button color="success">Success</x-tabler::button>
                            <x-tabler::button color="info">Info</x-tabler::button>
                            <x-tabler::button color="warning">Warning</x-tabler::button>
                            <x-tabler::button color="danger">Danger</x-tabler::button>
                            <x-tabler::button color="light">Light</x-tabler::button>
                            <x-tabler::button color="dark">Dark</x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>color: primary | secondary | success | info | warning | danger | light | dark</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Extended Colors -->
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Extended Color Palette</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="btn-list">
                            <x-tabler::button color="blue">Blue</x-tabler::button>
                            <x-tabler::button color="azure">Azure</x-tabler::button>
                            <x-tabler::button color="indigo">Indigo</x-tabler::button>
                            <x-tabler::button color="purple">Purple</x-tabler::button>
                            <x-tabler::button color="pink">Pink</x-tabler::button>
                            <x-tabler::button color="red">Red</x-tabler::button>
                            <x-tabler::button color="orange">Orange</x-tabler::button>
                            <x-tabler::button color="yellow">Yellow</x-tabler::button>
                            <x-tabler::button color="lime">Lime</x-tabler::button>
                            <x-tabler::button color="green">Green</x-tabler::button>
                            <x-tabler::button color="teal">Teal</x-tabler::button>
                            <x-tabler::button color="cyan">Cyan</x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>color: blue | azure | indigo | purple | pink | red | orange | yellow | lime | green | teal | cyan</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Variants -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Outline Buttons</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="btn-list">
                            <x-tabler::button variant="outline" color="primary">Primary</x-tabler::button>
                            <x-tabler::button variant="outline" color="secondary">Secondary</x-tabler::button>
                            <x-tabler::button variant="outline" color="success">Success</x-tabler::button>
                            <x-tabler::button variant="outline" color="warning">Warning</x-tabler::button>
                            <x-tabler::button variant="outline" color="danger">Danger</x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>variant="outline"</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Ghost Buttons</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="btn-list">
                            <x-tabler::button variant="ghost" color="primary">Primary</x-tabler::button>
                            <x-tabler::button variant="ghost" color="secondary">Secondary</x-tabler::button>
                            <x-tabler::button variant="ghost" color="success">Success</x-tabler::button>
                            <x-tabler::button variant="ghost" color="warning">Warning</x-tabler::button>
                            <x-tabler::button variant="ghost" color="danger">Danger</x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>variant="ghost"</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Sizes -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Button Sizes</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="btn-list">
                            <x-tabler::button size="sm" color="primary">Small</x-tabler::button>
                            <x-tabler::button color="primary">Default</x-tabler::button>
                            <x-tabler::button size="lg" color="primary">Large</x-tabler::button>
                            <x-tabler::button size="xl" color="primary">Extra Large</x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>size: sm | lg | xl</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Button Shapes</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="btn-list">
                            <x-tabler::button color="primary">Default</x-tabler::button>
                            <x-tabler::button color="primary" shape="square">Square</x-tabler::button>
                            <x-tabler::button color="primary" shape="pill">Pill</x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>shape: square | pill</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Icons -->
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Buttons with Icons</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <div>
                                <h4 class="subheader mb-2">Leading Icons</h4>
                                <div class="btn-list">
                                    <x-tabler::button icon="upload" color="primary">Upload</x-tabler::button>
                                    <x-tabler::button icon="download" color="success">Download</x-tabler::button>
                                    <x-tabler::button icon="plus" color="info">Add New</x-tabler::button>
                                    <x-tabler::button icon="trash" color="danger">Delete</x-tabler::button>
                                </div>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">Trailing Icons</h4>
                                <div class="btn-list">
                                    <x-tabler::button iconEnd="arrow-right" color="primary">Next</x-tabler::button>
                                    <x-tabler::button iconEnd="external-link" color="info">Open</x-tabler::button>
                                    <x-tabler::button iconEnd="chevron-down" color="secondary">More</x-tabler::button>
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>icon="icon-name" | iconEnd="icon-name"</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Icon Only -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Icon-Only Buttons</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="btn-list">
                            <x-tabler::button icon="star" iconOnly color="primary" aria-label="Favorite" />
                            <x-tabler::button icon="heart" iconOnly color="danger" aria-label="Like" />
                            <x-tabler::button icon="settings" iconOnly color="secondary" aria-label="Settings" />
                            <x-tabler::button icon="bell" iconOnly color="warning" aria-label="Notifications" />
                            <x-tabler::button icon="trash" iconOnly color="danger" aria-label="Delete" />
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>iconOnly aria-label="Label"</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Animated Icons -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Animated Icons</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="btn-list">
                            <x-tabler::button icon="arrow-right" animate color="primary">Slide</x-tabler::button>
                            <x-tabler::button icon="plus" animate="rotate" color="success">Rotate</x-tabler::button>
                            <x-tabler::button icon="bell" animate="shake" color="warning">Shake</x-tabler::button>
                            <x-tabler::button icon="heart" animate="pulse" color="danger">Pulse</x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>animate: rotate | shake | pulse | tada</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- States -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Button States</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <div>
                                <h4 class="subheader mb-2">Normal</h4>
                                <x-tabler::button color="primary">Normal Button</x-tabler::button>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">Loading</h4>
                                <div class="btn-list">
                                    <x-tabler::button color="primary" loading>Loading...</x-tabler::button>
                                    <x-tabler::button color="success" loading>Saving</x-tabler::button>
                                </div>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">Disabled</h4>
                                <div class="btn-list">
                                    <x-tabler::button color="primary" disabled>Disabled</x-tabler::button>
                                    <x-tabler::button color="secondary" disabled>Can't Click</x-tabler::button>
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>loading | disabled</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Full Width -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Full Width</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <x-tabler::button color="primary" fullWidth>Primary Button</x-tabler::button>
                            <x-tabler::button variant="outline" color="secondary" fullWidth>Outline Button</x-tabler::button>
                            <x-tabler::button color="success" fullWidth icon="check">With Icon</x-tabler::button>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>fullWidth</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Links -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Link Buttons</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <div>
                                <h4 class="subheader mb-2">As Link (href)</h4>
                                <div class="btn-list">
                                    <x-tabler::button href="#" color="primary">Link Button</x-tabler::button>
                                    <x-tabler::button href="#" variant="outline" color="success">Outline Link</x-tabler::button>
                                </div>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">Link Style</h4>
                                <div class="btn-list">
                                    <x-tabler::button link>Default Link</x-tabler::button>
                                    <x-tabler::button link color="primary">Primary Link</x-tabler::button>
                                    <x-tabler::button link color="danger">Danger Link</x-tabler::button>
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>href="#" | link</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Action Buttons -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Action Buttons</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <div>
                                <h4 class="subheader mb-2">Single Actions</h4>
                                <div class="btn-list">
                                    <x-tabler::button action icon="edit" iconOnly aria-label="Edit" />
                                    <x-tabler::button action icon="copy" iconOnly aria-label="Copy" />
                                    <x-tabler::button action icon="trash" iconOnly aria-label="Delete" />
                                </div>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">Action Group</h4>
                                <div class="btn-actions">
                                    <x-tabler::button action icon="refresh" iconOnly aria-label="Refresh" />
                                    <x-tabler::button action icon="chevron-up" iconOnly aria-label="Expand" />
                                    <x-tabler::button action icon="dots-vertical" iconOnly aria-label="More" />
                                    <x-tabler::button action icon="x" iconOnly aria-label="Close" />
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>action | .btn-actions wrapper</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Social Buttons -->
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Social Media Buttons</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <div>
                                <h4 class="subheader mb-2">With Text</h4>
                                <div class="btn-list">
                                    <x-tabler::button color="facebook" icon="brand-facebook">Facebook</x-tabler::button>
                                    <x-tabler::button color="twitter" icon="brand-twitter">Twitter</x-tabler::button>
                                    <x-tabler::button color="github" icon="brand-github">GitHub</x-tabler::button>
                                    <x-tabler::button color="google" icon="brand-google">Google</x-tabler::button>
                                    <x-tabler::button color="instagram" icon="brand-instagram">Instagram</x-tabler::button>
                                </div>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">Icon Only</h4>
                                <div class="btn-list">
                                    <x-tabler::button color="facebook" icon="brand-facebook" iconOnly aria-label="Facebook" />
                                    <x-tabler::button color="twitter" icon="brand-twitter" iconOnly aria-label="Twitter" />
                                    <x-tabler::button color="github" icon="brand-github" iconOnly aria-label="GitHub" />
                                    <x-tabler::button color="google" icon="brand-google" iconOnly aria-label="Google" />
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>color: facebook | twitter | github | google | instagram</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Button Groups -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Button Groups</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <div>
                                <h4 class="subheader mb-2">Horizontal</h4>
                                <div class="btn-group" role="group">
                                    <x-tabler::button>Left</x-tabler::button>
                                    <x-tabler::button>Middle</x-tabler::button>
                                    <x-tabler::button>Right</x-tabler::button>
                                </div>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">Vertical</h4>
                                <div class="btn-group-vertical" role="group">
                                    <x-tabler::button>Top</x-tabler::button>
                                    <x-tabler::button>Middle</x-tabler::button>
                                    <x-tabler::button>Bottom</x-tabler::button>
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>.btn-group | .btn-group-vertical</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Button Lists -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Button Lists</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <div>
                                <h4 class="subheader mb-2">Standard</h4>
                                <div class="btn-list">
                                    <x-tabler::button color="success">Save</x-tabler::button>
                                    <x-tabler::button>Continue</x-tabler::button>
                                    <x-tabler::button color="danger">Cancel</x-tabler::button>
                                </div>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">Right Aligned</h4>
                                <div class="btn-list justify-content-end">
                                    <x-tabler::button>Cancel</x-tabler::button>
                                    <x-tabler::button color="primary">Save</x-tabler::button>
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>.btn-list | .justify-content-end</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Custom Content -->
            <div class="col-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Custom Attributes & Badges</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <div class="space-y">
                            <div>
                                <h4 class="subheader mb-2">With Badges</h4>
                                <div class="btn-list">
                                    <x-tabler::button color="primary">
                                        Notifications
                                        <span class="badge bg-red ms-2">14</span>
                                    </x-tabler::button>
                                    <x-tabler::button color="success">
                                        Messages
                                        <span class="badge bg-green ms-2">3</span>
                                    </x-tabler::button>
                                </div>
                            </div>
                            <div>
                                <h4 class="subheader mb-2">With Custom Attributes</h4>
                                <div class="btn-list">
                                    <x-tabler::button color="danger" data-confirm="Are you sure?" id="delete-btn">
                                        Delete Record
                                    </x-tabler::button>
                                    <x-tabler::button color="info" data-action="export" class="shadow-lg">
                                        Export Data
                                    </x-tabler::button>
                                </div>
                            </div>
                        </div>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        <code>Custom classes, data-* attributes, and slot content</code>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Props Reference -->
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
                                        <th>Prop</th>
                                        <th>Type</th>
                                        <th>Default</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>type</code></td>
                                        <td>string</td>
                                        <td>button</td>
                                        <td>button, submit, reset</td>
                                    </tr>
                                    <tr>
                                        <td><code>href</code></td>
                                        <td>string</td>
                                        <td>null</td>
                                        <td>URL (renders as &lt;a&gt;)</td>
                                    </tr>
                                    <tr>
                                        <td><code>color</code></td>
                                        <td>string</td>
                                        <td>null</td>
                                        <td>primary, secondary, success, danger, blue, red, etc.</td>
                                    </tr>
                                    <tr>
                                        <td><code>variant</code></td>
                                        <td>string</td>
                                        <td>null</td>
                                        <td>outline, ghost</td>
                                    </tr>
                                    <tr>
                                        <td><code>size</code></td>
                                        <td>string</td>
                                        <td>null</td>
                                        <td>sm, lg, xl</td>
                                    </tr>
                                    <tr>
                                        <td><code>shape</code></td>
                                        <td>string</td>
                                        <td>null</td>
                                        <td>square, pill</td>
                                    </tr>
                                    <tr>
                                        <td><code>icon</code></td>
                                        <td>string</td>
                                        <td>null</td>
                                        <td>Tabler icon name (leading)</td>
                                    </tr>
                                    <tr>
                                        <td><code>iconEnd</code></td>
                                        <td>string</td>
                                        <td>null</td>
                                        <td>Tabler icon name (trailing)</td>
                                    </tr>
                                    <tr>
                                        <td><code>iconOnly</code></td>
                                        <td>boolean</td>
                                        <td>false</td>
                                        <td>Removes text padding</td>
                                    </tr>
                                    <tr>
                                        <td><code>loading</code></td>
                                        <td>boolean</td>
                                        <td>false</td>
                                        <td>Shows spinner</td>
                                    </tr>
                                    <tr>
                                        <td><code>disabled</code></td>
                                        <td>boolean</td>
                                        <td>false</td>
                                        <td>Disables interaction</td>
                                    </tr>
                                    <tr>
                                        <td><code>animate</code></td>
                                        <td>string</td>
                                        <td>null</td>
                                        <td>true, rotate, shake, pulse, tada</td>
                                    </tr>
                                    <tr>
                                        <td><code>fullWidth</code></td>
                                        <td>boolean</td>
                                        <td>false</td>
                                        <td>100% width</td>
                                    </tr>
                                    <tr>
                                        <td><code>link</code></td>
                                        <td>boolean</td>
                                        <td>false</td>
                                        <td>Link style button</td>
                                    </tr>
                                    <tr>
                                        <td><code>action</code></td>
                                        <td>boolean</td>
                                        <td>false</td>
                                        <td>Minimal action button</td>
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
