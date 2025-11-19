<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Badge - Tabler Blade Components'])
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
                                <h2 class="page-title">Badge</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Badges --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="badges-list">
                                            <tabler:badge>Default</tabler:badge>
                                            <tabler:badge color="primary">Primary</tabler:badge>
                                            <tabler:badge color="secondary">Secondary</tabler:badge>
                                            <tabler:badge color="success">Success</tabler:badge>
                                            <tabler:badge color="warning">Warning</tabler:badge>
                                            <tabler:badge color="danger">Danger</tabler:badge>
                                            <tabler:badge color="info">Info</tabler:badge>
                                            <tabler:badge color="dark">Dark</tabler:badge>
                                            <tabler:badge color="light">Light</tabler:badge>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge&gt;Default&lt;/tabler:badge&gt;
&lt;tabler:badge color="primary"&gt;Primary&lt;/tabler:badge&gt;
&lt;tabler:badge color="secondary"&gt;Secondary&lt;/tabler:badge&gt;
&lt;tabler:badge color="success"&gt;Success&lt;/tabler:badge&gt;
&lt;tabler:badge color="warning"&gt;Warning&lt;/tabler:badge&gt;
&lt;tabler:badge color="danger"&gt;Danger&lt;/tabler:badge&gt;
&lt;tabler:badge color="info"&gt;Info&lt;/tabler:badge&gt;
&lt;tabler:badge color="dark"&gt;Dark&lt;/tabler:badge&gt;
&lt;tabler:badge color="light"&gt;Light&lt;/tabler:badge&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- All Tabler Colors --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">All Tabler Colors</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="badges-list">
                                            <tabler:badge color="blue">Blue</tabler:badge>
                                            <tabler:badge color="azure">Azure</tabler:badge>
                                            <tabler:badge color="indigo">Indigo</tabler:badge>
                                            <tabler:badge color="purple">Purple</tabler:badge>
                                            <tabler:badge color="pink">Pink</tabler:badge>
                                            <tabler:badge color="red">Red</tabler:badge>
                                            <tabler:badge color="orange">Orange</tabler:badge>
                                            <tabler:badge color="yellow">Yellow</tabler:badge>
                                            <tabler:badge color="lime">Lime</tabler:badge>
                                            <tabler:badge color="green">Green</tabler:badge>
                                            <tabler:badge color="teal">Teal</tabler:badge>
                                            <tabler:badge color="cyan">Cyan</tabler:badge>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge color="blue"&gt;Blue&lt;/tabler:badge&gt;
&lt;tabler:badge color="azure"&gt;Azure&lt;/tabler:badge&gt;
&lt;tabler:badge color="indigo"&gt;Indigo&lt;/tabler:badge&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Light Variants --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Light Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="badges-list">
                                            <tabler:badge color="blue" variant="light">Blue</tabler:badge>
                                            <tabler:badge color="azure" variant="light">Azure</tabler:badge>
                                            <tabler:badge color="indigo" variant="light">Indigo</tabler:badge>
                                            <tabler:badge color="purple" variant="light">Purple</tabler:badge>
                                            <tabler:badge color="pink" variant="light">Pink</tabler:badge>
                                            <tabler:badge color="red" variant="light">Red</tabler:badge>
                                            <tabler:badge color="orange" variant="light">Orange</tabler:badge>
                                            <tabler:badge color="yellow" variant="light">Yellow</tabler:badge>
                                            <tabler:badge color="lime" variant="light">Lime</tabler:badge>
                                            <tabler:badge color="green" variant="light">Green</tabler:badge>
                                            <tabler:badge color="teal" variant="light">Teal</tabler:badge>
                                            <tabler:badge color="cyan" variant="light">Cyan</tabler:badge>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge color="blue" variant="light"&gt;Blue&lt;/tabler:badge&gt;
&lt;tabler:badge color="azure" variant="light"&gt;Azure&lt;/tabler:badge&gt;
&lt;tabler:badge color="indigo" variant="light"&gt;Indigo&lt;/tabler:badge&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Outline Badges --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Outline Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="badges-list">
                                            <tabler:badge color="blue" variant="outline">Blue</tabler:badge>
                                            <tabler:badge color="azure" variant="outline">Azure</tabler:badge>
                                            <tabler:badge color="indigo" variant="outline">Indigo</tabler:badge>
                                            <tabler:badge color="purple" variant="outline">Purple</tabler:badge>
                                            <tabler:badge color="pink" variant="outline">Pink</tabler:badge>
                                            <tabler:badge color="red" variant="outline">Red</tabler:badge>
                                            <tabler:badge color="orange" variant="outline">Orange</tabler:badge>
                                            <tabler:badge color="yellow" variant="outline">Yellow</tabler:badge>
                                            <tabler:badge color="lime" variant="outline">Lime</tabler:badge>
                                            <tabler:badge color="green" variant="outline">Green</tabler:badge>
                                            <tabler:badge color="teal" variant="outline">Teal</tabler:badge>
                                            <tabler:badge color="cyan" variant="outline">Cyan</tabler:badge>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge color="blue" variant="outline"&gt;Blue&lt;/tabler:badge&gt;
&lt;tabler:badge color="azure" variant="outline"&gt;Azure&lt;/tabler:badge&gt;
&lt;tabler:badge color="indigo" variant="outline"&gt;Indigo&lt;/tabler:badge&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Size Variants --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Badge Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="space-y">
                                            <div class="badges-list">
                                                <tabler:badge color="primary" size="sm">Small</tabler:badge>
                                                <tabler:badge color="primary" size="sm" icon="check">Small
                                                    Icon</tabler:badge>
                                                <tabler:badge color="primary" size="sm"
                                                    icon:trailing="arrow-right">Small Trailing</tabler:badge>
                                            </div>
                                            <div class="badges-list">
                                                <tabler:badge color="primary">Default</tabler:badge>
                                                <tabler:badge color="primary" icon="check">Default Icon
                                                </tabler:badge>
                                                <tabler:badge color="primary" icon:trailing="arrow-right">Default
                                                    Trailing</tabler:badge>
                                            </div>
                                            <div class="badges-list">
                                                <tabler:badge color="primary" size="lg">Large</tabler:badge>
                                                <tabler:badge color="primary" size="lg" icon="check">Large
                                                    Icon</tabler:badge>
                                                <tabler:badge color="primary" size="lg"
                                                    icon:trailing="arrow-right">Large Trailing</tabler:badge>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge color="primary" size="sm"&gt;Small&lt;/tabler:badge&gt;
&lt;tabler:badge color="primary"&gt;Default&lt;/tabler:badge&gt;
&lt;tabler:badge color="primary" size="lg"&gt;Large&lt;/tabler:badge&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Pill Badges --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Pill Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="badges-list">
                                            <tabler:badge color="blue" variant="pill">Blue</tabler:badge>
                                            <tabler:badge color="azure" variant="pill">Azure</tabler:badge>
                                            <tabler:badge color="indigo" variant="pill">Indigo</tabler:badge>
                                            <tabler:badge color="purple" variant="pill">Purple</tabler:badge>
                                            <tabler:badge color="pink" variant="pill">Pink</tabler:badge>
                                            <tabler:badge color="red" variant="pill">Red</tabler:badge>
                                        </div>
                                        <div class="badges-list mt-3">
                                            <tabler:badge color="blue" variant="pill">1</tabler:badge>
                                            <tabler:badge color="azure" variant="pill">2</tabler:badge>
                                            <tabler:badge color="indigo" variant="pill">3</tabler:badge>
                                            <tabler:badge color="purple" variant="pill">99+</tabler:badge>
                                            <tabler:badge color="pink" variant="pill">1.2k</tabler:badge>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge color="blue" variant="pill"&gt;Blue&lt;/tabler:badge&gt;
&lt;tabler:badge color="azure" variant="pill"&gt;Azure&lt;/tabler:badge&gt;
&lt;tabler:badge color="indigo" variant="pill"&gt;Indigo&lt;/tabler:badge&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Badges with Icons --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Badges with Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mb-3">Leading Icons</h4>
                                        <div class="badges-list">
                                            <tabler:badge icon="star" color="yellow">Featured</tabler:badge>
                                            <tabler:badge icon="heart" color="red">Favorite</tabler:badge>
                                            <tabler:badge icon="check" color="green">Verified</tabler:badge>
                                            <tabler:badge icon="x" color="red">Rejected</tabler:badge>
                                            <tabler:badge icon="plus" color="blue">New</tabler:badge>
                                            <tabler:badge icon="minus" color="orange">Removed</tabler:badge>
                                        </div>

                                        <h4 class="mb-3 mt-4">Trailing Icons</h4>
                                        <div class="badges-list">
                                            <tabler:badge icon:trailing="arrow-right" color="blue">Next
                                            </tabler:badge>
                                            <tabler:badge icon:trailing="arrow-left" color="blue">Previous
                                            </tabler:badge>
                                            <tabler:badge icon:trailing="external-link" color="indigo">External
                                            </tabler:badge>
                                            <tabler:badge icon:trailing="download" color="green">Download
                                            </tabler:badge>
                                        </div>

                                        <h4 class="mb-3 mt-4">Icon Only</h4>
                                        <div class="badges-list">
                                            <tabler:badge icon="star" color="yellow" iconOnly />
                                            <tabler:badge icon="heart" color="red" iconOnly />
                                            <tabler:badge icon="check" color="green" iconOnly />
                                            <tabler:badge icon="x" color="red" iconOnly />
                                            <tabler:badge icon="bell" color="blue" iconOnly />
                                            <tabler:badge icon="mail" color="azure" iconOnly />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge icon="star" color="yellow"&gt;Featured&lt;/tabler:badge&gt;
&lt;tabler:badge icon:trailing="arrow-right" color="blue"&gt;Next&lt;/tabler:badge&gt;
&lt;tabler:badge icon="heart" color="red" iconOnly /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Badges in Headings --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Badges in Headings</h3>
                                    </div>
                                    <div class="card-body">
                                        <h1>Example heading <tabler:badge>New</tabler:badge>
                                        </h1>
                                        <h2>Example heading <tabler:badge>New</tabler:badge>
                                        </h2>
                                        <h3>Example heading <tabler:badge>New</tabler:badge>
                                        </h3>
                                        <h4>Example heading <tabler:badge>New</tabler:badge>
                                        </h4>
                                        <h5>Example heading <tabler:badge>New</tabler:badge>
                                        </h5>
                                        <h6>Example heading <tabler:badge>New</tabler:badge>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            {{-- Link Badges --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Link Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="badges-list">
                                            <tabler:badge href="#" color="blue" variant="light">Click me
                                            </tabler:badge>
                                            <tabler:badge href="#" color="azure" variant="light">Azure
                                            </tabler:badge>
                                            <tabler:badge href="#" color="indigo" variant="light">Indigo
                                            </tabler:badge>
                                            <tabler:badge href="#" color="purple" variant="light">Purple
                                            </tabler:badge>
                                            <tabler:badge href="#" color="pink" variant="light">Pink
                                            </tabler:badge>
                                            <tabler:badge href="#" color="red" variant="light">Red
                                            </tabler:badge>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge href="#" color="blue" variant="light"&gt;Click me&lt;/tabler:badge&gt;
&lt;tabler:badge href="#" color="azure" variant="light"&gt;Azure&lt;/tabler:badge&gt;
&lt;tabler:badge href="#" color="indigo" variant="light"&gt;Indigo&lt;/tabler:badge&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Positioned Badges --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Positioned Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mb-3">Inline Badges</h4>
                                        <div class="btn-list">
                                            <button type="button" class="btn">
                                                Notifications
                                                <tabler:badge color="red" class="ms-2">4</tabler:badge>
                                            </button>
                                            <button type="button" class="btn">
                                                Messages
                                                <tabler:badge color="blue" class="ms-2">12</tabler:badge>
                                            </button>
                                            <button type="button" class="btn">
                                                Alerts
                                                <tabler:badge color="yellow" class="ms-2">2</tabler:badge>
                                            </button>
                                        </div>

                                        <h4 class="mb-3 mt-4">Notification Badges</h4>
                                        <div class="btn-list">
                                            <button type="button" class="btn position-relative">
                                                Inbox
                                                <tabler:badge color="red" notification>9+</tabler:badge>
                                            </button>
                                            <button type="button" class="btn position-relative">
                                                Profile
                                                <tabler:badge color="red" notification dot />
                                            </button>
                                            <button type="button" class="btn position-relative">
                                                Settings
                                                <tabler:badge color="red" notification dot blink />
                                            </button>
                                            <button type="button" class="btn btn-icon position-relative">
                                                <tabler:icon name="bell" />
                                                <tabler:badge color="red" notification dot blink />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Empty/Dot Badges --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Empty/Dot Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="badges-list">
                                            <tabler:badge color="blue" dot />
                                            <tabler:badge color="azure" dot />
                                            <tabler:badge color="indigo" dot />
                                            <tabler:badge color="purple" dot />
                                            <tabler:badge color="pink" dot />
                                            <tabler:badge color="red" dot />
                                            <tabler:badge color="orange" dot />
                                            <tabler:badge color="yellow" dot />
                                            <tabler:badge color="lime" dot />
                                            <tabler:badge color="green" dot />
                                            <tabler:badge color="teal" dot />
                                            <tabler:badge color="cyan" dot />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge color="blue" dot /&gt;
&lt;tabler:badge color="azure" dot /&gt;
&lt;tabler:badge color="indigo" dot /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Addon Badges --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Addon Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="badges-list">
                                            <tabler:badge addon="2">Unread</tabler:badge>
                                            <tabler:badge addon="99+" addonColor="green">Messages</tabler:badge>
                                            <tabler:badge color="blue" addon="5">Tasks</tabler:badge>
                                            <tabler:badge color="red" variant="light" addon="3"
                                                addonColor="red">Alerts</tabler:badge>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:badge addon="2"&gt;Unread&lt;/tabler:badge&gt;
&lt;tabler:badge addon="99+" addonColor="green"&gt;Messages&lt;/tabler:badge&gt;
&lt;tabler:badge color="blue" addon="5"&gt;Tasks&lt;/tabler:badge&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Use Cases --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Real-World Use Cases</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mb-3">Status Badges</h4>
                                        <div class="badges-list">
                                            <tabler:badge color="blue">Draft</tabler:badge>
                                            <tabler:badge color="yellow">Pending</tabler:badge>
                                            <tabler:badge color="green">Published</tabler:badge>
                                            <tabler:badge color="red">Rejected</tabler:badge>
                                            <tabler:badge color="gray">Archived</tabler:badge>
                                        </div>

                                        <h4 class="mb-3 mt-4">Priority Badges</h4>
                                        <div class="badges-list">
                                            <tabler:badge color="red" icon="flag">High</tabler:badge>
                                            <tabler:badge color="orange" icon="flag">Medium</tabler:badge>
                                            <tabler:badge color="blue" icon="flag">Low</tabler:badge>
                                        </div>

                                        <h4 class="mb-3 mt-4">Category Tags</h4>
                                        <div class="badges-list">
                                            <tabler:badge color="purple" variant="light">Laravel</tabler:badge>
                                            <tabler:badge color="blue" variant="light">PHP</tabler:badge>
                                            <tabler:badge color="cyan" variant="light">Tailwind</tabler:badge>
                                            <tabler:badge color="green" variant="light">Vue.js</tabler:badge>
                                            <tabler:badge color="orange" variant="light">Livewire</tabler:badge>
                                        </div>

                                        <h4 class="mb-3 mt-4">Version Tags</h4>
                                        <div class="badges-list">
                                            <tabler:badge variant="pill" color="green">v3.2.1</tabler:badge>
                                            <tabler:badge variant="pill" color="blue">Beta</tabler:badge>
                                            <tabler:badge variant="pill" color="red">Deprecated</tabler:badge>
                                            <tabler:badge variant="pill" color="yellow">Alpha</tabler:badge>
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
                                                        <td><code>variant</code></td>
                                                        <td>string</td>
                                                        <td>'default'</td>
                                                        <td>Badge style variant: default, light, outline, pill</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>color</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Badge color: blue, red, green, azure, indigo, purple, pink,
                                                            orange,
                                                            yellow, lime, teal, cyan, primary, secondary, success,
                                                            warning,
                                                            danger, info, dark, light</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>size</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Badge size: sm, lg</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>icon</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Leading icon name</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>iconTrailing</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Trailing icon name (use icon:trailing attribute)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>iconOnly</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Show icon only, hide text content</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>notification</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Position badge absolutely (top-right notification style)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>blink</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Add blinking animation to badge</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>dot</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Force dot badge style (empty circle)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>addon</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Addon badge text (shown as small badge inside)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>addonColor</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Addon badge background color</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>href</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Renders badge as &lt;a&gt; tag with this URL</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>as</code></td>
                                                        <td>string</td>
                                                        <td>'span'</td>
                                                        <td>HTML element tag to render (span, div, etc.)</td>
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
