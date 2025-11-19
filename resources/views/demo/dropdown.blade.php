<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Dropdown - Tabler Blade Components'])
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
                                <h2 class="page-title">Dropdown</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Dropdown --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Dropdown</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:dropdown buttonText="Open dropdown">
                                            <tabler:dropdown.item>Action</tabler:dropdown.item>
                                            <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                        </tabler:dropdown>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Open dropdown"&gt;
    &lt;tabler:dropdown.item&gt;Action&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item&gt;Another action&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item&gt;Third action&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Button Variants --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button Variants</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:dropdown buttonText="Primary" buttonVariant="primary">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Secondary" buttonVariant="secondary">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Success" buttonVariant="success">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Danger" buttonVariant="danger">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Warning" buttonVariant="warning">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Primary" buttonVariant="primary"&gt;
    &lt;tabler:dropdown.item&gt;Action&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item&gt;Another action&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Button Sizes --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Button Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:dropdown buttonText="Large" buttonVariant="primary" buttonSize="lg">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Default" buttonVariant="primary">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Small" buttonVariant="primary" buttonSize="sm">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Large" buttonVariant="primary" buttonSize="lg"&gt;
    &lt;tabler:dropdown.item&gt;Action&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Alignments --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Menu Alignment</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:dropdown buttonText="Left aligned (default)"
                                                buttonVariant="primary">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Right aligned" buttonVariant="primary"
                                                align="end">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                            </tabler:dropdown>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Right aligned" align="end"&gt;
    &lt;tabler:dropdown.item&gt;Action&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Directions --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dropdown Directions</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:dropdown buttonText="Dropdown (default)" buttonVariant="primary">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Dropup" buttonVariant="primary" direction="up">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Dropend" buttonVariant="primary"
                                                direction="end">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Dropstart" buttonVariant="primary"
                                                direction="start">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                            </tabler:dropdown>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Dropup" direction="up"&gt;
    &lt;tabler:dropdown.item&gt;Action&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;

&lt;tabler:dropdown buttonText="Dropend" direction="end"&gt;
    &lt;tabler:dropdown.item&gt;Action&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Dropdown with Arrow --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dropdown with Arrow</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:dropdown buttonText="With Arrow" buttonVariant="primary" arrow>
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Arrow Right" buttonVariant="primary" arrow
                                                align="end">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Third action</tabler:dropdown.item>
                                            </tabler:dropdown>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="With Arrow" arrow&gt;
    &lt;tabler:dropdown.item&gt;Action&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Icons --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dropdown Items with Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:dropdown buttonText="Menu with icons" buttonVariant="primary">
                                            <tabler:dropdown.header>Dropdown header</tabler:dropdown.header>
                                            <tabler:dropdown.item icon="settings">Settings</tabler:dropdown.item>
                                            <tabler:dropdown.item icon="pencil">Edit</tabler:dropdown.item>
                                            <tabler:dropdown.item icon="user">Profile</tabler:dropdown.item>
                                            <tabler:dropdown.divider />
                                            <tabler:dropdown.item icon="logout">Logout</tabler:dropdown.item>
                                        </tabler:dropdown>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Menu with icons"&gt;
    &lt;tabler:dropdown.header&gt;Dropdown header&lt;/tabler:dropdown.header&gt;
    &lt;tabler:dropdown.item icon="settings"&gt;Settings&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item icon="pencil"&gt;Edit&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.divider /&gt;
    &lt;tabler:dropdown.item icon="logout"&gt;Logout&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Dividers & Headers --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dividers & Headers</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:dropdown buttonText="Open menu" buttonVariant="primary">
                                            <tabler:dropdown.header>Account</tabler:dropdown.header>
                                            <tabler:dropdown.item icon="user">Profile</tabler:dropdown.item>
                                            <tabler:dropdown.item icon="settings">Settings</tabler:dropdown.item>
                                            <tabler:dropdown.divider />
                                            <tabler:dropdown.header>Content</tabler:dropdown.header>
                                            <tabler:dropdown.item icon="file">Documents</tabler:dropdown.item>
                                            <tabler:dropdown.item icon="photo">Photos</tabler:dropdown.item>
                                            <tabler:dropdown.divider />
                                            <tabler:dropdown.item icon="logout">Logout</tabler:dropdown.item>
                                        </tabler:dropdown>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Open menu"&gt;
    &lt;tabler:dropdown.header&gt;Account&lt;/tabler:dropdown.header&gt;
    &lt;tabler:dropdown.item icon="user"&gt;Profile&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item icon="settings"&gt;Settings&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.divider /&gt;
    &lt;tabler:dropdown.header&gt;Content&lt;/tabler:dropdown.header&gt;
    &lt;tabler:dropdown.item icon="file"&gt;Documents&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Active & Disabled Items --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Active & Disabled States</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:dropdown buttonText="States example" buttonVariant="primary">
                                            <tabler:dropdown.item>Regular item</tabler:dropdown.item>
                                            <tabler:dropdown.item active>Active item</tabler:dropdown.item>
                                            <tabler:dropdown.item>Another item</tabler:dropdown.item>
                                            <tabler:dropdown.divider />
                                            <tabler:dropdown.item disabled>Disabled item</tabler:dropdown.item>
                                        </tabler:dropdown>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="States example"&gt;
    &lt;tabler:dropdown.item&gt;Regular item&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item active&gt;Active item&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item disabled&gt;Disabled item&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Badges --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dropdown with Badges</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:dropdown buttonText="Notifications" buttonVariant="primary">
                                            <tabler:dropdown.item icon="inbox" badge="12" badgeColor="primary">
                                                Inbox</tabler:dropdown.item>
                                            <tabler:dropdown.item icon="message" badge="5" badgeColor="danger">
                                                Messages</tabler:dropdown.item>
                                            <tabler:dropdown.item icon="bell">Notifications</tabler:dropdown.item>
                                        </tabler:dropdown>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Notifications"&gt;
    &lt;tabler:dropdown.item icon="inbox" badge="12" badgeColor="primary"&gt;Inbox&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item icon="message" badge="5" badgeColor="danger"&gt;Messages&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Split Dropdown --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Split Button Dropdown</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="btn-list">
                                            <tabler:dropdown buttonText="Primary Action" buttonVariant="primary" split
                                                splitAction="#">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                                <tabler:dropdown.divider />
                                                <tabler:dropdown.item>Separated link</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Secondary Action" buttonVariant="secondary"
                                                split splitAction="#">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>

                                            <tabler:dropdown buttonText="Success Action" buttonVariant="success" split
                                                splitAction="#">
                                                <tabler:dropdown.item>Action</tabler:dropdown.item>
                                                <tabler:dropdown.item>Another action</tabler:dropdown.item>
                                            </tabler:dropdown>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Primary Action" buttonVariant="primary"
                split splitAction="#"&gt;
    &lt;tabler:dropdown.item&gt;Action&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item&gt;Another action&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Dark Dropdown --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dark Dropdown</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:dropdown buttonText="Dark Menu" buttonVariant="dark" dark>
                                            <tabler:dropdown.header>Dropdown header</tabler:dropdown.header>
                                            <tabler:dropdown.item icon="settings">Settings</tabler:dropdown.item>
                                            <tabler:dropdown.item icon="pencil">Edit</tabler:dropdown.item>
                                            <tabler:dropdown.divider />
                                            <tabler:dropdown.item icon="logout">Logout</tabler:dropdown.item>
                                        </tabler:dropdown>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Dark Menu" dark&gt;
    &lt;tabler:dropdown.header&gt;Dropdown header&lt;/tabler:dropdown.header&gt;
    &lt;tabler:dropdown.item icon="settings"&gt;Settings&lt;/tabler:dropdown.item&gt;
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Scrollable Dropdown --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Scrollable Dropdown</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:dropdown buttonText="Long menu" buttonVariant="primary" scrollable>
                                            <tabler:dropdown.header>Countries</tabler:dropdown.header>
                                            @for ($i = 1; $i <= 20; $i++)
                                                <tabler:dropdown.item>Country {{ $i }}</tabler:dropdown.item>
                                            @endfor
                                        </tabler:dropdown>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:dropdown buttonText="Long menu" scrollable&gt;
    &lt;tabler:dropdown.item&gt;Item 1&lt;/tabler:dropdown.item&gt;
    &lt;tabler:dropdown.item&gt;Item 2&lt;/tabler:dropdown.item&gt;
    ...
&lt;/tabler:dropdown&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Props Reference --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Props Reference - Main Component</h3>
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
                                                        <td><code>buttonText</code></td>
                                                        <td>string</td>
                                                        <td>'Dropdown'</td>
                                                        <td>Text displayed on the dropdown button</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>buttonVariant</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Button color variant: primary, secondary, success, warning,
                                                            danger, info, dark, light</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>buttonSize</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Button size: xs, sm, lg, xl</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>buttonClass</code></td>
                                                        <td>string</td>
                                                        <td>''</td>
                                                        <td>Additional CSS classes for the button</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>align</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Menu alignment: start (default), end</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>direction</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Dropdown direction: down (default), up, start, end</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>arrow</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Show arrow pointing to button</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>card</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Card-style dropdown menu</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>dark</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Dark theme for dropdown menu</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>scrollable</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Make dropdown menu scrollable</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>split</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Enable split button dropdown</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>splitAction</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>URL for main split button action</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>menuClass</code></td>
                                                        <td>string</td>
                                                        <td>''</td>
                                                        <td>Additional CSS classes for dropdown menu</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>autoClose</code></td>
                                                        <td>bool|string</td>
                                                        <td>true</td>
                                                        <td>Auto-close behavior: true, false, 'inside', 'outside'</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Item Props Reference --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Props Reference - Dropdown.Item</h3>
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
                                                        <td><code>href</code></td>
                                                        <td>string</td>
                                                        <td>'#'</td>
                                                        <td>URL for the dropdown item link</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>icon</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Leading icon name</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>active</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Active state</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>disabled</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Disabled state</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>badge</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Badge text shown on the right</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>badgeColor</code></td>
                                                        <td>string</td>
                                                        <td>'primary'</td>
                                                        <td>Badge background color</td>
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
