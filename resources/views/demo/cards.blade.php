@extends('tabler::layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page header -->
        <div class="page-header d-print-none mb-4">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Component Demo</div>
                    <h2 class="page-title">Card Components</h2>
                    <p class="text-muted">A comprehensive showcase of all Tabler UI card components with examples and variations.</p>
                </div>
            </div>
        </div>

        <div class="row row-cards">
            <!-- Basic Card -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Basic Card</x-tabler::cards.title>
                        <p>This is a simple card with just a body and title.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Card with Header and Footer -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Card with Header</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <p class="text-secondary">This card has a separate header section with the title.</p>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer>
                        Card footer text
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Card with Actions -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Card with Actions</x-tabler::cards.title>
                        <x-tabler::cards.actions>
                            <x-tabler::button color="primary" icon="plus" size="sm">Add New</x-tabler::button>
                        </x-tabler::cards.actions>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <p class="text-secondary">This card has action buttons in the header.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Card with Icon Actions -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Icon Actions</x-tabler::cards.title>
                        <x-tabler::cards.actions btnActions>
                            <a href="#" class="btn-action"><x-dynamic-component component="tabler-refresh" /></a>
                            <a href="#" class="btn-action"><x-dynamic-component component="tabler-dots-vertical" /></a>
                        </x-tabler::cards.actions>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <p class="text-secondary">Minimal icon-only actions using btn-actions class.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Card with Status Indicators -->
            <div class="col-md-4">
                <x-tabler::cards.card>
                    <x-tabler::cards.status position="top" color="danger" />
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Top Status</x-tabler::cards.title>
                        <p class="text-secondary">Card with a colored status bar at the top.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-4">
                <x-tabler::cards.card>
                    <x-tabler::cards.status position="start" color="success" />
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Side Status</x-tabler::cards.title>
                        <p class="text-secondary">Card with a colored status bar on the side.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-4">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Bottom Status</x-tabler::cards.title>
                        <p class="text-secondary">Card with a colored status bar at the bottom.</p>
                    </x-tabler::cards.body>
                    <x-tabler::cards.status position="bottom" color="primary" />
                </x-tabler::cards.card>
            </div>

            <!-- Card with Stamp -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.stamp icon="bell" color="yellow" />
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Card with Stamp</x-tabler::cards.title>
                        <p class="text-secondary">Decorative icon stamp in the corner adds visual interest.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-6">
                <x-tabler::cards.card bgColor="primary" textColor="primary-fg">
                    <x-tabler::cards.stamp icon="star" color="white" large />
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Large Stamp</x-tabler::cards.title>
                        <p>Colored background with a large white stamp icon.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Card with Images -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.img
                        src="https://ui-avatars.com/api/?name=Card+Image&size=800&background=066fd1&color=fff"
                        alt="Card image"
                        position="top"
                    />
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Card with Top Image</x-tabler::cards.title>
                        <p class="text-secondary">Regular image at the top of the card.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.img
                        src="https://ui-avatars.com/api/?name=Responsive&size=1600&background=10b981&color=fff"
                        position="top"
                        responsive
                        ratio="21x9"
                    />
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Responsive Image</x-tabler::cards.title>
                        <p class="text-secondary">Background image with 21:9 aspect ratio.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Card with Progress -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Upload Progress</x-tabler::cards.title>
                        <p class="text-secondary">Your file is being uploaded...</p>
                    </x-tabler::cards.body>
                    <x-tabler::cards.progress value="75" color="primary" />
                </x-tabler::cards.card>
            </div>

            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Task Completion</x-tabler::cards.title>
                        <p class="text-secondary">Almost there!</p>
                    </x-tabler::cards.body>
                    <x-tabler::cards.progress value="90" color="success">
                        90%
                    </x-tabler::cards.progress>
                </x-tabler::cards.card>
            </div>

            <!-- Card Padding Variations -->
            <div class="col-md-4">
                <x-tabler::cards.card padding="sm">
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Small Padding</x-tabler::cards.title>
                        <p class="text-secondary">Compact card with small padding.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-4">
                <x-tabler::cards.card padding="md">
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Medium Padding</x-tabler::cards.title>
                        <p class="text-secondary">Card with medium padding.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-4">
                <x-tabler::cards.card padding="lg">
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Large Padding</x-tabler::cards.title>
                        <p class="text-secondary">Spacious card with large padding.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Card States -->
            <div class="col-md-4">
                <x-tabler::cards.card stacked>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Stacked Card</x-tabler::cards.title>
                        <p class="text-secondary">Visual stacking effect.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-4">
                <x-tabler::cards.card borderless>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Borderless Card</x-tabler::cards.title>
                        <p class="text-secondary">No border styling.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-4">
                <x-tabler::cards.card active>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Active Card</x-tabler::cards.title>
                        <p class="text-secondary">Highlighted active state.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Clickable Cards -->
            <div class="col-md-4">
                <x-tabler::cards.card link href="#">
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Default Hover</x-tabler::cards.title>
                        <p class="text-secondary">Click to navigate.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-4">
                <x-tabler::cards.card link linkEffect="rotate" href="#">
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Rotate Effect</x-tabler::cards.title>
                        <p class="text-secondary">Hover for rotation.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-4">
                <x-tabler::cards.card link linkEffect="pop" href="#">
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Pop Effect</x-tabler::cards.title>
                        <p class="text-secondary">Hover for pop effect.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Colored Cards -->
            <div class="col-md-6">
                <x-tabler::cards.card bgColor="primary-lt">
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Light Background</x-tabler::cards.title>
                        <p class="text-secondary">Card with light primary background color.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-6">
                <x-tabler::cards.card bgColor="success" textColor="primary-fg">
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Full Color Background</x-tabler::cards.title>
                        <p>White text on colored background for emphasis.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Card with Subtitle -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title subtitle="Descriptive subtitle">Card Title</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <p class="text-secondary">Title with inline subtitle using the subtitle prop.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <div>
                            <x-tabler::cards.title>Card Title</x-tabler::cards.title>
                            <x-tabler::cards.subtitle>
                                This is a longer subtitle as a separate component with more detailed description.
                            </x-tabler::cards.subtitle>
                        </div>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <p class="text-secondary">Using the subtitle component for longer descriptions.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Footer Variations -->
            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Transparent Footer</x-tabler::cards.title>
                        <p class="text-secondary">Footer without background.</p>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer transparent>
                        Last updated 3 mins ago
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <div class="col-md-6">
                <x-tabler::cards.card>
                    <x-tabler::cards.body>
                        <x-tabler::cards.title>Borderless Footer</x-tabler::cards.title>
                        <p class="text-secondary">Footer without top border.</p>
                    </x-tabler::cards.body>
                    <x-tabler::cards.footer borderless>
                        <div class="d-flex">
                            <x-tabler::button link>Cancel</x-tabler::button>
                            <x-tabler::button color="primary" class="ms-auto">Save</x-tabler::button>
                        </div>
                    </x-tabler::cards.footer>
                </x-tabler::cards.card>
            </div>

            <!-- Scrollable Body -->
            <div class="col-md-12">
                <x-tabler::cards.card>
                    <x-tabler::cards.header>
                        <x-tabler::cards.title>Scrollable Card Body</x-tabler::cards.title>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body scrollable style="max-height: 200px;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </x-tabler::cards.body>
                </x-tabler::cards.card>
            </div>

            <!-- Complex Example -->
            <div class="col-12">
                <x-tabler::cards.card bgColor="primary-lt">
                    <x-tabler::cards.status position="top" color="danger" />
                    <x-tabler::cards.stamp icon="bell" color="yellow" />
                    <x-tabler::cards.header light>
                        <x-tabler::cards.title subtitle="This is important">Alert Card</x-tabler::cards.title>
                        <x-tabler::cards.actions>
                            <x-tabler::button icon="x" size="sm" variant="ghost">Dismiss</x-tabler::button>
                        </x-tabler::cards.actions>
                    </x-tabler::cards.header>
                    <x-tabler::cards.body>
                        <p class="text-secondary">
                            This card combines multiple features: status indicator, stamp icon, actions, subtitle, colored background, and light header.
                        </p>
                    </x-tabler::cards.body>
                    <x-tabler::cards.progress value="60" color="danger" />
                </x-tabler::cards.card>
            </div>

            <!-- Component Props Reference -->
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
                                        <th>Props</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>cards.card</code></td>
                                        <td>padding, stacked, borderless, active, inactive, link, linkEffect, rotateStart, rotateEnd, bgColor, textColor</td>
                                        <td>Main card wrapper with various styling options</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.header</code></td>
                                        <td>light</td>
                                        <td>Card header section</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.body</code></td>
                                        <td>scrollable</td>
                                        <td>Card content area</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.footer</code></td>
                                        <td>transparent, borderless</td>
                                        <td>Card footer section</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.title</code></td>
                                        <td>subtitle</td>
                                        <td>Card title with optional inline subtitle</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.subtitle</code></td>
                                        <td>-</td>
                                        <td>Standalone subtitle component</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.actions</code></td>
                                        <td>btnActions</td>
                                        <td>Action buttons area in header</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.status</code></td>
                                        <td>position (top/start/bottom), color</td>
                                        <td>Colored status indicator</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.stamp</code></td>
                                        <td>icon, color, large</td>
                                        <td>Decorative corner stamp</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.img</code></td>
                                        <td>src, alt, position, responsive, ratio</td>
                                        <td>Card images with responsive options</td>
                                    </tr>
                                    <tr>
                                        <td><code>cards.progress</code></td>
                                        <td>value, color, size</td>
                                        <td>Progress bar for cards</td>
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
