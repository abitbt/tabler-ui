<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Alert - Tabler Blade Components'])
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
                                <h2 class="page-title">Alert</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Alerts --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:alert type="success" title="Wow! Everything worked!">
                                            Your account has been saved!
                                        </tabler:alert>

                                        <tabler:alert type="info" title="Did you know?">
                                            Here is something that you might like to know.
                                        </tabler:alert>

                                        <tabler:alert type="warning" title="Uh oh, something went wrong">
                                            Sorry! There was a problem with your request.
                                        </tabler:alert>

                                        <tabler:alert type="danger" title="I'm so sorry...">
                                            Your account has been deleted and can't be restored.
                                        </tabler:alert>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:alert type="success" title="Wow! Everything worked!"&gt;
    Your account has been saved!
&lt;/tabler:alert&gt;

&lt;tabler:alert type="info" title="Did you know?"&gt;
    Here is something that you might like to know.
&lt;/tabler:alert&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Alerts with Icons --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alerts with Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:alert type="success" title="Wow! Everything worked!" icon="check">
                                            Your account has been saved!
                                        </tabler:alert>

                                        <tabler:alert type="info" title="Did you know?" icon="info-circle">
                                            Here is something that you might like to know.
                                        </tabler:alert>

                                        <tabler:alert type="warning" title="Uh oh, something went wrong"
                                            icon="alert-triangle">
                                            Sorry! There was a problem with your request.
                                        </tabler:alert>

                                        <tabler:alert type="danger" title="I'm so sorry..." icon="alert-circle">
                                            Your account has been deleted and can't be restored.
                                        </tabler:alert>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:alert type="success" title="Wow! Everything worked!" icon="check"&gt;
    Your account has been saved!
&lt;/tabler:alert&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Dismissible Alerts --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Dismissible Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:alert type="success" title="Success!" dismissible>
                                            This alert can be closed by clicking the X button.
                                        </tabler:alert>

                                        <tabler:alert type="info" title="Information" icon="info-circle" dismissible>
                                            This alert has an icon and can be dismissed.
                                        </tabler:alert>

                                        <tabler:alert type="warning" title="Warning" icon="alert-triangle" dismissible>
                                            This is a dismissible warning alert.
                                        </tabler:alert>

                                        <tabler:alert type="danger" title="Error" icon="alert-circle" dismissible>
                                            This is a dismissible danger alert.
                                        </tabler:alert>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:alert type="success" title="Success!" dismissible&gt;
    This alert can be closed by clicking the X button.
&lt;/tabler:alert&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Important Alerts --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Important Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:alert type="success" icon="check" important>
                                            Wow! Everything worked!
                                        </tabler:alert>

                                        <tabler:alert type="info" icon="info-circle" important>
                                            This is an important information alert.
                                        </tabler:alert>

                                        <tabler:alert type="warning" icon="alert-triangle" important>
                                            This is an important warning alert.
                                        </tabler:alert>

                                        <tabler:alert type="danger" icon="alert-circle" important>
                                            Your account has been deleted and can't be restored.
                                        </tabler:alert>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:alert type="success" icon="check" important&gt;
    Wow! Everything worked!
&lt;/tabler:alert&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Important Dismissible Alerts --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Important Dismissible Alerts</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:alert type="success" icon="check" important dismissible>
                                            Wow! Everything worked!
                                        </tabler:alert>

                                        <tabler:alert type="danger" icon="alert-circle" important dismissible>
                                            Your account has been deleted and can't be restored.
                                        </tabler:alert>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:alert type="success" icon="check" important dismissible&gt;
    Wow! Everything worked!
&lt;/tabler:alert&gt;</code></pre>
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
                                        <tabler:alert type="blue" title="Blue Alert">
                                            This is a blue alert.
                                        </tabler:alert>

                                        <tabler:alert type="azure" title="Azure Alert">
                                            This is an azure alert.
                                        </tabler:alert>

                                        <tabler:alert type="indigo" title="Indigo Alert">
                                            This is an indigo alert.
                                        </tabler:alert>

                                        <tabler:alert type="purple" title="Purple Alert">
                                            This is a purple alert.
                                        </tabler:alert>

                                        <tabler:alert type="pink" title="Pink Alert">
                                            This is a pink alert.
                                        </tabler:alert>

                                        <tabler:alert type="red" title="Red Alert">
                                            This is a red alert.
                                        </tabler:alert>

                                        <tabler:alert type="orange" title="Orange Alert">
                                            This is an orange alert.
                                        </tabler:alert>

                                        <tabler:alert type="yellow" title="Yellow Alert">
                                            This is a yellow alert.
                                        </tabler:alert>

                                        <tabler:alert type="lime" title="Lime Alert">
                                            This is a lime alert.
                                        </tabler:alert>

                                        <tabler:alert type="green" title="Green Alert">
                                            This is a green alert.
                                        </tabler:alert>

                                        <tabler:alert type="teal" title="Teal Alert">
                                            This is a teal alert.
                                        </tabler:alert>

                                        <tabler:alert type="cyan" title="Cyan Alert">
                                            This is a cyan alert.
                                        </tabler:alert>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:alert type="blue" title="Blue Alert"&gt;
    This is a blue alert.
&lt;/tabler:alert&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Simple Alerts (No Title) --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Simple Alerts (No Title)</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:alert type="success">
                                            This is a simple success alert without a title.
                                        </tabler:alert>

                                        <tabler:alert type="info">
                                            This is a simple info alert without a title.
                                        </tabler:alert>

                                        <tabler:alert type="warning">
                                            This is a simple warning alert without a title.
                                        </tabler:alert>

                                        <tabler:alert type="danger">
                                            This is a simple danger alert without a title.
                                        </tabler:alert>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:alert type="success"&gt;
    This is a simple success alert without a title.
&lt;/tabler:alert&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Custom Icons --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Custom Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:alert type="success" title="Email Sent" icon="mail">
                                            Your email has been sent successfully.
                                        </tabler:alert>

                                        <tabler:alert type="info" title="Update Available" icon="download">
                                            A new version is available for download.
                                        </tabler:alert>

                                        <tabler:alert type="warning" title="Low Storage" icon="database">
                                            Your storage is running low.
                                        </tabler:alert>

                                        <tabler:alert type="danger" title="Connection Lost" icon="wifi-off">
                                            Unable to connect to the server.
                                        </tabler:alert>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:alert type="success" title="Email Sent" icon="mail"&gt;
    Your email has been sent successfully.
&lt;/tabler:alert&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Real-World Examples --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Real-World Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mb-3">Form Validation Success</h4>
                                        <tabler:alert type="success" icon="check" dismissible>
                                            Your profile has been updated successfully.
                                        </tabler:alert>

                                        <h4 class="mb-3 mt-4">API Error</h4>
                                        <tabler:alert type="danger" title="API Error" icon="alert-circle"
                                            dismissible>
                                            Failed to fetch data from the server. Please try again later.
                                        </tabler:alert>

                                        <h4 class="mb-3 mt-4">Session Expiry Warning</h4>
                                        <tabler:alert type="warning" title="Session Expiring Soon" icon="clock"
                                            dismissible>
                                            Your session will expire in 5 minutes. Please save your work.
                                        </tabler:alert>

                                        <h4 class="mb-3 mt-4">Beta Feature Announcement</h4>
                                        <tabler:alert type="info" title="New Beta Feature" icon="sparkles"
                                            dismissible>
                                            Try our new AI-powered search feature! Click here to enable it.
                                        </tabler:alert>

                                        <h4 class="mb-3 mt-4">Critical System Alert</h4>
                                        <tabler:alert type="danger" title="System Maintenance" icon="tool"
                                            important dismissible>
                                            The system will be down for maintenance from 2:00 AM to 4:00 AM UTC.
                                        </tabler:alert>
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
                                                        <td>'info'</td>
                                                        <td>Alert type: info, success, warning, danger, or any Tabler
                                                            color
                                                            (blue, azure, indigo, purple, pink, red, orange, yellow,
                                                            lime,
                                                            green, teal, cyan)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>title</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Alert title/heading (use alert:title attribute)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>icon</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Icon name to display. Auto-selects based on variant if not
                                                            provided</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>dismissible</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Show close button to dismiss alert</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>important</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Use filled background style (white text on colored
                                                            background)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>as</code></td>
                                                        <td>string</td>
                                                        <td>'div'</td>
                                                        <td>HTML element tag to render</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h4 class="mb-3 mt-4">Namespaced Attributes</h4>
                                        <p>The following attributes use namespacing for better clarity:</p>
                                        <ul>
                                            <li><code>alert:title</code> - Alternative way to set the title</li>
                                            <li><code>alert:icon</code> - Alternative way to set the icon</li>
                                        </ul>

                                        <h4 class="mb-3 mt-4">Auto Icon Selection</h4>
                                        <p>If no icon is specified, the component automatically selects an appropriate
                                            icon based on the variant:</p>
                                        <ul>
                                            <li><strong>success:</strong> check</li>
                                            <li><strong>warning:</strong> alert-triangle</li>
                                            <li><strong>danger:</strong> alert-circle</li>
                                            <li><strong>info:</strong> info-circle</li>
                                        </ul>
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
