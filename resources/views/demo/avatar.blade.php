<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Avatar - Tabler Blade Components'])
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
                                <h2 class="page-title">Avatar</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Avatars --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Avatars</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=John+Doe&background=random" />
                                            <tabler:avatar initials="JL" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Jane+Smith&background=random" />
                                            <tabler:avatar initials="AB" />
                                            <tabler:avatar icon="user" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:avatar src="https://ui-avatars.com/api/?name=John+Doe" /&gt;
&lt;tabler:avatar initials="JL" /&gt;
&lt;tabler:avatar icon="user" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Avatar Sizes --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar Sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=XS&background=206bc4&color=fff"
                                                size="xs" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=SM&background=206bc4&color=fff"
                                                size="sm" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=MD&background=206bc4&color=fff"
                                                size="md" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=LG&background=206bc4&color=fff"
                                                size="lg" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=XL&background=206bc4&color=fff"
                                                size="xl" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:avatar size="xs" /&gt;
&lt;tabler:avatar size="sm" /&gt;
&lt;tabler:avatar size="md" /&gt; &lt;!-- default --&gt;
&lt;tabler:avatar size="lg" /&gt;
&lt;tabler:avatar size="xl" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Avatar Shapes --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar Shapes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Default&background=206bc4&color=fff" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Circle&background=4299e1&color=fff"
                                                rounded="circle" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Square&background=d69e2e&color=fff"
                                                rounded="square" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Rounded+1&background=38a169&color=fff"
                                                rounded="1" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Rounded+2&background=805ad5&color=fff"
                                                rounded="2" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Rounded+3&background=e53e3e&color=fff"
                                                rounded="3" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:avatar /&gt; &lt;!-- default border-radius --&gt;
&lt;tabler:avatar rounded="circle" /&gt;
&lt;tabler:avatar rounded="square" /&gt;
&lt;tabler:avatar rounded="1" /&gt;
&lt;tabler:avatar rounded="2" /&gt;
&lt;tabler:avatar rounded="3" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Avatar with Initials --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar with Initials</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar initials="AB" />
                                            <tabler:avatar initials="CD" />
                                            <tabler:avatar initials="EF" />
                                            <tabler:avatar initials="GH" />
                                            <tabler:avatar initials="IJ" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:avatar initials="AB" /&gt;
&lt;tabler:avatar initials="CD" /&gt;
&lt;tabler:avatar initials="EF" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Colored Initials --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Colored Initials</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar initials="AB" color="green" />
                                            <tabler:avatar initials="CD" color="red" />
                                            <tabler:avatar initials="EF" color="yellow" />
                                            <tabler:avatar initials="GH" color="primary" />
                                            <tabler:avatar initials="IJ" color="purple" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:avatar initials="AB" color="green" /&gt;
&lt;tabler:avatar initials="CD" color="red" /&gt;
&lt;tabler:avatar initials="EF" color="yellow" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Avatar with Icons --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar with Icons</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar icon="user" />
                                            <tabler:avatar icon="plus" />
                                            <tabler:avatar icon="settings" />
                                            <tabler:avatar icon="heart" />
                                            <tabler:avatar icon="star" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:avatar icon="user" /&gt;
&lt;tabler:avatar icon="plus" /&gt;
&lt;tabler:avatar icon="settings" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Status Indicators --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar with Status Indicators</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mb-3">Status Colors</h4>
                                        <div class="avatar-list">
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Online&background=206bc4&color=fff" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Online&background=206bc4&color=fff"
                                                status="online" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Offline&background=d63939&color=fff"
                                                status="offline" />
                                            <tabler:avatar initials="SA" status="busy" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=Away&background=f59f00&color=fff"
                                                status="warning" />
                                        </div>

                                        <h4 class="mb-3 mt-4">Status with Text</h4>
                                        <div class="avatar-list">
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User&background=206bc4&color=fff"
                                                status="gray" statusText="5" />
                                        </div>

                                        <h4 class="mb-3 mt-4">Status with Icon</h4>
                                        <div class="avatar-list">
                                            <tabler:avatar initials="AB" status="success" statusIcon="check" />
                                            <tabler:avatar initials="CD" status="danger" statusIcon="x" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:avatar status="online" /&gt;
&lt;tabler:avatar status="offline" /&gt;
&lt;tabler:avatar status="busy" /&gt;
&lt;tabler:avatar status="gray" statusText="5" /&gt;
&lt;tabler:avatar status="success" statusIcon="check" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Avatar List --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Avatar List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User+1&background=206bc4&color=fff"
                                                rounded="circle" />
                                            <tabler:avatar initials="JL" rounded="circle" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User+3&background=38a169&color=fff"
                                                rounded="circle" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User+4&background=805ad5&color=fff"
                                                rounded="circle" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User+5&background=e53e3e&color=fff"
                                                rounded="circle" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;div class="avatar-list"&gt;
    &lt;tabler:avatar src="..." rounded="circle" /&gt;
    &lt;tabler:avatar initials="JL" rounded="circle" /&gt;
    &lt;tabler:avatar src="..." rounded="circle" /&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Stacked Avatar List --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Stacked Avatar List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list avatar-list-stacked">
                                            <tabler:avatar initials="EB" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User+2&background=4299e1&color=fff" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User+3&background=38a169&color=fff" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User+4&background=805ad5&color=fff" />
                                            <tabler:avatar
                                                src="https://ui-avatars.com/api/?name=User+5&background=e53e3e&color=fff" />
                                            <tabler:avatar initials="+8" />
                                        </div>

                                        <div class="avatar-list avatar-list-stacked mt-3">
                                            <tabler:avatar size="sm"
                                                src="https://ui-avatars.com/api/?name=User+1&background=206bc4&color=fff"
                                                rounded="circle" />
                                            <tabler:avatar size="sm"
                                                src="https://ui-avatars.com/api/?name=User+2&background=4299e1&color=fff"
                                                rounded="circle" />
                                            <tabler:avatar size="sm"
                                                src="https://ui-avatars.com/api/?name=User+3&background=38a169&color=fff"
                                                rounded="circle" />
                                            <tabler:avatar size="sm" initials="SA" rounded="circle" />
                                            <tabler:avatar size="sm"
                                                src="https://ui-avatars.com/api/?name=User+5&background=805ad5&color=fff"
                                                rounded="circle" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;div class="avatar-list avatar-list-stacked"&gt;
    &lt;tabler:avatar initials="EB" /&gt;
    &lt;tabler:avatar src="..." /&gt;
    &lt;tabler:avatar initials="+8" /&gt;
&lt;/div&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Link Avatars --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Link Avatars</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar href="#"
                                                src="https://ui-avatars.com/api/?name=User+1&background=206bc4&color=fff" />
                                            <tabler:avatar href="#" initials="JL" />
                                            <tabler:avatar href="#"
                                                src="https://ui-avatars.com/api/?name=User+3&background=38a169&color=fff" />
                                            <tabler:avatar href="#" icon="plus" />
                                        </div>
                                        <small class="text-secondary">Hover to see the hover effect</small>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:avatar href="#" src="..." /&gt;
&lt;tabler:avatar href="#" initials="JL" /&gt;
&lt;tabler:avatar href="#" icon="plus" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Mixed Sizes in List --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Mixed Sizes in List</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="avatar-list">
                                            <tabler:avatar size="xs" initials="XS" color="blue" />
                                            <tabler:avatar size="sm" initials="SM" color="azure" />
                                            <tabler:avatar size="md" initials="MD" color="indigo" />
                                            <tabler:avatar size="lg" initials="LG" color="purple" />
                                            <tabler:avatar size="xl" initials="XL" color="pink" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;div class="avatar-list"&gt;
    &lt;tabler:avatar size="xs" initials="XS" /&gt;
    &lt;tabler:avatar size="sm" initials="SM" /&gt;
    &lt;tabler:avatar size="md" initials="MD" /&gt;
&lt;/div&gt;</code></pre>
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
                                                        <td><code>src</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Image URL for avatar background</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>alt</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Alt text / title attribute for avatar</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>initials</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Initials to display (2 characters, auto-uppercased)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>icon</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Icon name to display (falls back to 'user' if no content)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>size</code></td>
                                                        <td>string</td>
                                                        <td>'md'</td>
                                                        <td>Avatar size: xs, sm, md, lg, xl</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>rounded</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Shape: circle, square, pill, 0, 1, 2, 3 (default uses
                                                            Tabler's
                                                            border-radius)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>color</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Background color for initials/icons (applies bg-{color}-lt
                                                            class)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>status</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Status indicator: online (success), offline (danger), busy
                                                            (warning), or any color</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>statusText</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Text to display in status badge</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>statusIcon</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Icon name to display in status badge</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>href</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>URL to link to (renders avatar as &lt;a&gt; tag)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>as</code></td>
                                                        <td>string</td>
                                                        <td>'span'</td>
                                                        <td>HTML element tag to render (span, div, a, etc.)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Additional Notes --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Usage Notes</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4>Content Priority</h4>
                                        <p>The avatar displays content in this order of priority:</p>
                                        <ol>
                                            <li><strong>Image</strong> - If <code>src</code> is provided, shows image as
                                                background</li>
                                            <li><strong>Initials</strong> - If <code>initials</code> is provided,
                                                displays
                                                uppercased (max 2 chars)</li>
                                            <li><strong>Icon</strong> - If <code>icon</code> is provided, shows the
                                                specified
                                                icon</li>
                                            <li><strong>Slot</strong> - If slot content is provided, displays it</li>
                                            <li><strong>Default</strong> - Falls back to user icon if nothing else is
                                                provided</li>
                                        </ol>

                                        <h4 class="mt-4">Avatar Lists</h4>
                                        <p>Wrap avatars in containers for special layouts:</p>
                                        <ul>
                                            <li><code>.avatar-list</code> - Horizontal list with spacing</li>
                                            <li><code>.avatar-list.avatar-list-stacked</code> - Overlapping avatars</li>
                                        </ul>

                                        <h4 class="mt-4">Status Shortcuts</h4>
                                        <p>Status prop accepts shortcuts:</p>
                                        <ul>
                                            <li><code>online</code> → green badge</li>
                                            <li><code>offline</code> → red badge</li>
                                            <li><code>busy</code> → yellow/warning badge</li>
                                            <li>Any color name → <code>bg-{color}</code> badge</li>
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
