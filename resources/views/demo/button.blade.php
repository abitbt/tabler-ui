<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Button - Tabler Blade Components'])
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
                                <h2 class="page-title">Button</h2>
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

                            {{-- Standard Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Standard Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary">Primary</tabler:button>
                                            <tabler:button variant="secondary">Secondary</tabler:button>
                                            <tabler:button variant="success">Success</tabler:button>
                                            <tabler:button variant="warning">Warning</tabler:button>
                                            <tabler:button variant="danger">Danger</tabler:button>
                                            <tabler:button variant="info">Info</tabler:button>
                                            <tabler:button variant="dark">Dark</tabler:button>
                                            <tabler:button variant="light">Light</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Outline Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Outline Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary" outline>Primary</tabler:button>
                                            <tabler:button variant="secondary" outline>Secondary</tabler:button>
                                            <tabler:button variant="success" outline>Success</tabler:button>
                                            <tabler:button variant="warning" outline>Warning</tabler:button>
                                            <tabler:button variant="danger" outline>Danger</tabler:button>
                                            <tabler:button variant="info" outline>Info</tabler:button>
                                            <tabler:button variant="dark" outline>Dark</tabler:button>
                                            <tabler:button variant="light" outline>Light</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Ghost Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Ghost Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary" ghost>Primary</tabler:button>
                                            <tabler:button variant="secondary" ghost>Secondary</tabler:button>
                                            <tabler:button variant="success" ghost>Success</tabler:button>
                                            <tabler:button variant="warning" ghost>Warning</tabler:button>
                                            <tabler:button variant="danger" ghost>Danger</tabler:button>
                                            <tabler:button variant="info" ghost>Info</tabler:button>
                                            <tabler:button variant="dark" ghost>Dark</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Button Sizes --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="space-y">
                                            <div class="btn-list">
                                                <tabler:button variant="primary" size="sm">Small</tabler:button>
                                                <tabler:button variant="primary">Default</tabler:button>
                                                <tabler:button variant="primary" size="lg">Large</tabler:button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Pill & Square Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pill & Square Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary" pill>Pill Button</tabler:button>
                                            <tabler:button variant="primary" square>Square</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Buttons with Icons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Buttons with Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary" icon="upload">Upload</tabler:button>
                                            <tabler:button variant="warning" icon="heart">I like</tabler:button>
                                            <tabler:button variant="success" icon="check">I agree</tabler:button>
                                            <tabler:button variant="primary" icon="plus">More</tabler:button>
                                            <tabler:button variant="danger" icon="link">Link</tabler:button>
                                            <tabler:button variant="info" icon="message">Comment</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Icon-Only Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Icon-Only Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary" icon="activity" icon-only />
                                            <tabler:button variant="success" icon="bell" icon-only />
                                            <tabler:button variant="warning" icon="star" icon-only />
                                            <tabler:button variant="danger" icon="trash" icon-only />
                                            <tabler:button icon="git-merge" icon-only />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Loading Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Loading Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary" loading>Loading</tabler:button>
                                            <tabler:button variant="success" loading>Processing...</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Disabled Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Disabled Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary" disabled>Primary</tabler:button>
                                            <tabler:button variant="secondary" disabled>Secondary</tabler:button>
                                            <tabler:button variant="success" disabled>Success</tabler:button>
                                            <tabler:button variant="danger" disabled>Danger</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Social Media Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Social Media Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button social="facebook" icon="brand-facebook">Facebook
                                            </tabler:button>
                                            <tabler:button social="twitter" icon="brand-twitter">Twitter
                                            </tabler:button>
                                            <tabler:button social="google" icon="brand-google">Google</tabler:button>
                                            <tabler:button social="github" icon="brand-github">GitHub</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Social Icon-Only --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Social Icon Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button social="facebook" icon="brand-facebook" icon-only />
                                            <tabler:button social="twitter" icon="brand-x" icon-only />
                                            <tabler:button social="google" icon="brand-google" icon-only />
                                            <tabler:button social="github" icon="brand-github" icon-only />
                                            <tabler:button social="instagram" icon="brand-instagram" icon-only />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Animated Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Animated Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button animate icon="arrow-right" icon-trailing>Save
                                            </tabler:button>
                                            <tabler:button animate="rotate" icon="plus">Add</tabler:button>
                                            <tabler:button animate="shake" icon="bell">Notifications
                                            </tabler:button>
                                            <tabler:button animate="pulse" icon="heart">Love</tabler:button>
                                            <tabler:button animate="tada" icon="check">Confirm</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Action Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Action Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-actions">
                                            <tabler:button action icon="edit" icon-only />
                                            <tabler:button action icon="copy" icon-only />
                                            <tabler:button action icon="settings" icon-only />
                                            <tabler:button action icon="trash" icon-only />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Link Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Link Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button href="{{ route('demo.index') }}">Go Home</tabler:button>
                                            <tabler:button href="#" variant="primary">Primary Link
                                            </tabler:button>
                                            <tabler:button link>Link Style</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Full Width Buttons --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Full Width Buttons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="space-y">
                                            <tabler:button variant="primary" full-width>Full Width Button
                                            </tabler:button>
                                            <tabler:button variant="secondary" block>Block Button</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Button Groups --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button Groups</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="space-y">
                                            <tabler:button.group>
                                                <tabler:button>Left</tabler:button>
                                                <tabler:button>Middle</tabler:button>
                                                <tabler:button>Right</tabler:button>
                                            </tabler:button.group>

                                            <tabler:button.group vertical>
                                                <tabler:button>Top</tabler:button>
                                                <tabler:button>Middle</tabler:button>
                                                <tabler:button>Bottom</tabler:button>
                                            </tabler:button.group>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Button List --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="success">Save changes</tabler:button>
                                            <tabler:button>Save and continue</tabler:button>
                                            <tabler:button variant="danger">Cancel</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Keyboard Shortcuts --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Keyboard Shortcuts</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:button variant="primary" kbd="⌘K">Quick Search
                                            </tabler:button>
                                            <tabler:button kbd="Ctrl+S">Save</tabler:button>
                                            <tabler:button kbd="Esc">Close</tabler:button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Complex Examples --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Complex Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Form Actions</h4>
                                                        <div class="btn-list justify-content-end">
                                                            <tabler:button>Cancel</tabler:button>
                                                            <tabler:button variant="primary" icon="save"
                                                                type="submit">
                                                                Save Changes
                                                            </tabler:button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Delete Confirmation</h4>
                                                        <div class="btn-list">
                                                            <tabler:button variant="danger" icon="trash"
                                                                class="me-auto">
                                                                Delete
                                                            </tabler:button>
                                                            <tabler:button>Save and continue</tabler:button>
                                                            <tabler:button variant="primary">Save</tabler:button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Sign In Options</h4>
                                                        <div class="space-y">
                                                            <tabler:button social="google" icon="brand-google"
                                                                full-width>
                                                                Continue with Google
                                                            </tabler:button>
                                                            <tabler:button social="github" icon="brand-github"
                                                                full-width>
                                                                Continue with GitHub
                                                            </tabler:button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

        @vite('resources/js/demo.js')
    </body>

</html>
