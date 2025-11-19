<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Table - Tabler Blade Components'])
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
                                <h2 class="page-title">Table</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Table --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:table responsive vcenter>
                                            <tabler:table.header>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col">Name</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Title</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Email</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Role</tabler:table.cell>
                                                    <tabler:table.cell header scope="col" width="1">
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                <tabler:table.row>
                                                    <tabler:table.cell>Paweł Kuna</tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">UI Designer, Training
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">
                                                        <a href="#"
                                                            class="text-reset">paweluna@howstuffworks.com</a>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">User</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <a href="#">Edit</a>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>Jeffie Lewzey</tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">Chemical Engineer, Support
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">
                                                        <a href="#" class="text-reset">jlewzey1@seesaa.net</a>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">Admin</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <a href="#">Edit</a>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>Mallory Hulme</tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">Geologist IV, Support
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">
                                                        <a href="#"
                                                            class="text-reset">mhulme2@domainmarket.com</a>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">User</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <a href="#">Edit</a>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>Dunn Slane</tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">Research Nurse, Sales
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">
                                                        <a href="#" class="text-reset">dslane3@epa.gov</a>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">Owner</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <a href="#">Edit</a>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>Emmy Levet</tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">VP Product Management,
                                                        Accounting</tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">
                                                        <a href="#" class="text-reset">elevet4@senate.gov</a>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell class="text-secondary">Admin</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <a href="#">Edit</a>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.body>
                                        </tabler:table>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:table responsive vcenter&gt;
    &lt;tabler:table.header&gt;
        &lt;tabler:table.row&gt;
            &lt;tabler:table.cell header scope="col"&gt;Name&lt;/tabler:table.cell&gt;
            &lt;tabler:table.cell header scope="col"&gt;Title&lt;/tabler:table.cell&gt;
        &lt;/tabler:table.row&gt;
    &lt;/tabler:table.header&gt;
    &lt;tabler:table.body&gt;
        &lt;tabler:table.row&gt;
            &lt;tabler:table.cell&gt;Paweł Kuna&lt;/tabler:table.cell&gt;
            &lt;tabler:table.cell&gt;UI Designer&lt;/tabler:table.cell&gt;
        &lt;/tabler:table.row&gt;
    &lt;/tabler:table.body&gt;
&lt;/tabler:table&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Striped Tables --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Striped Tables</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:table responsive striped vcenter>
                                            <tabler:table.header>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col">ID</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Product</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Price</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Status</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#001</tabler:table.cell>
                                                    <tabler:table.cell>MacBook Pro 16"</tabler:table.cell>
                                                    <tabler:table.cell>$2,499</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="green">Available</tabler:badge>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#002</tabler:table.cell>
                                                    <tabler:table.cell>iPhone 15 Pro</tabler:table.cell>
                                                    <tabler:table.cell>$999</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="yellow">Low Stock</tabler:badge>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#003</tabler:table.cell>
                                                    <tabler:table.cell>iPad Air</tabler:table.cell>
                                                    <tabler:table.cell>$599</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="red">Out of Stock</tabler:badge>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#004</tabler:table.cell>
                                                    <tabler:table.cell>AirPods Pro</tabler:table.cell>
                                                    <tabler:table.cell>$249</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="green">Available</tabler:badge>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#005</tabler:table.cell>
                                                    <tabler:table.cell>Apple Watch Series 9</tabler:table.cell>
                                                    <tabler:table.cell>$399</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="green">Available</tabler:badge>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.body>
                                        </tabler:table>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:table responsive striped vcenter&gt;
    ...
&lt;/tabler:table&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Bordered Tables --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Bordered Tables</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:table responsive bordered vcenter>
                                            <tabler:table.header>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col">Date</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Description
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Amount</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Type</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                <tabler:table.row>
                                                    <tabler:table.cell>2025-01-15</tabler:table.cell>
                                                    <tabler:table.cell>Monthly Subscription</tabler:table.cell>
                                                    <tabler:table.cell>$49.00</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="red" variant="light">Expense
                                                        </tabler:badge>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>2025-01-14</tabler:table.cell>
                                                    <tabler:table.cell>Client Payment</tabler:table.cell>
                                                    <tabler:table.cell>$1,200.00</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="green" variant="light">Income
                                                        </tabler:badge>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>2025-01-12</tabler:table.cell>
                                                    <tabler:table.cell>Office Supplies</tabler:table.cell>
                                                    <tabler:table.cell>$87.50</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="red" variant="light">Expense
                                                        </tabler:badge>
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.body>
                                        </tabler:table>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:table responsive bordered vcenter&gt;
    ...
&lt;/tabler:table&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Hover Tables --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Hover Tables</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:table responsive hover vcenter>
                                            <tabler:table.header>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col">Server</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Status</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">CPU</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Memory</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Uptime</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                <tabler:table.row>
                                                    <tabler:table.cell>web-01.example.com</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="green" dot />
                                                        Online
                                                    </tabler:table.cell>
                                                    <tabler:table.cell>24%</tabler:table.cell>
                                                    <tabler:table.cell>48%</tabler:table.cell>
                                                    <tabler:table.cell>45d 12h</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>web-02.example.com</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="green" dot />
                                                        Online
                                                    </tabler:table.cell>
                                                    <tabler:table.cell>18%</tabler:table.cell>
                                                    <tabler:table.cell>52%</tabler:table.cell>
                                                    <tabler:table.cell>23d 8h</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>db-01.example.com</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="yellow" dot />
                                                        Warning
                                                    </tabler:table.cell>
                                                    <tabler:table.cell>87%</tabler:table.cell>
                                                    <tabler:table.cell>91%</tabler:table.cell>
                                                    <tabler:table.cell>12d 3h</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>cache-01.example.com</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="red" dot />
                                                        Offline
                                                    </tabler:table.cell>
                                                    <tabler:table.cell>-</tabler:table.cell>
                                                    <tabler:table.cell>-</tabler:table.cell>
                                                    <tabler:table.cell>-</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.body>
                                        </tabler:table>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:table responsive hover vcenter&gt;
    ...
&lt;/tabler:table&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Small Tables --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Small Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:table responsive size="sm" vcenter>
                                            <tabler:table.header>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col">File</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Size</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Modified
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                <tabler:table.row>
                                                    <tabler:table.cell>readme.md</tabler:table.cell>
                                                    <tabler:table.cell>2.4 KB</tabler:table.cell>
                                                    <tabler:table.cell>2 hours ago</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>package.json</tabler:table.cell>
                                                    <tabler:table.cell>1.8 KB</tabler:table.cell>
                                                    <tabler:table.cell>5 hours ago</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>index.php</tabler:table.cell>
                                                    <tabler:table.cell>3.2 KB</tabler:table.cell>
                                                    <tabler:table.cell>1 day ago</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.body>
                                        </tabler:table>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:table responsive size="sm" vcenter&gt;
    ...
&lt;/tabler:table&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Responsive Tables --}}
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Responsive Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:table responsive vcenter nowrap>
                                            <tabler:table.header>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col" nowrap>Column 1
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col" nowrap>Column 2
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col" nowrap>Column 3
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col" nowrap>Column 4
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col" nowrap>Column 5
                                                    </tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                <tabler:table.row>
                                                    <tabler:table.cell>Data 1</tabler:table.cell>
                                                    <tabler:table.cell>Data 2</tabler:table.cell>
                                                    <tabler:table.cell>Data 3</tabler:table.cell>
                                                    <tabler:table.cell>Data 4</tabler:table.cell>
                                                    <tabler:table.cell>Data 5</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>Data 1</tabler:table.cell>
                                                    <tabler:table.cell>Data 2</tabler:table.cell>
                                                    <tabler:table.cell>Data 3</tabler:table.cell>
                                                    <tabler:table.cell>Data 4</tabler:table.cell>
                                                    <tabler:table.cell>Data 5</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.body>
                                        </tabler:table>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:table responsive vcenter nowrap&gt;
    ...
&lt;/tabler:table&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Table in Card --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Recent Orders</h3>
                                        <div class="card-actions">
                                            <a href="#" class="btn btn-primary">
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                    <tabler:card.table>
                                        <tabler:table card vcenter>
                                            <tabler:table.header>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col">Order ID
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Customer
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Total</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Status</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Date</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#10234</tabler:table.cell>
                                                    <tabler:table.cell>John Doe</tabler:table.cell>
                                                    <tabler:table.cell>$2,349.00</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="green">Completed</tabler:badge>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell>Jan 15, 2025</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#10233</tabler:table.cell>
                                                    <tabler:table.cell>Jane Smith</tabler:table.cell>
                                                    <tabler:table.cell>$899.00</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="yellow">Processing</tabler:badge>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell>Jan 14, 2025</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#10232</tabler:table.cell>
                                                    <tabler:table.cell>Bob Johnson</tabler:table.cell>
                                                    <tabler:table.cell>$1,499.00</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="blue">Shipped</tabler:badge>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell>Jan 13, 2025</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row>
                                                    <tabler:table.cell>#10231</tabler:table.cell>
                                                    <tabler:table.cell>Sarah Williams</tabler:table.cell>
                                                    <tabler:table.cell>$599.00</tabler:table.cell>
                                                    <tabler:table.cell>
                                                        <tabler:badge color="red">Cancelled</tabler:badge>
                                                    </tabler:table.cell>
                                                    <tabler:table.cell>Jan 12, 2025</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.body>
                                        </tabler:table>
                                    </tabler:card.table>
                                </div>
                            </div>

                            {{-- Table Variants (Row Colors) --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Row Variants</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:table responsive vcenter>
                                            <tabler:table.header>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col">Class</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Description
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Status</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                <tabler:table.row>
                                                    <tabler:table.cell>Default</tabler:table.cell>
                                                    <tabler:table.cell>Default row style</tabler:table.cell>
                                                    <tabler:table.cell>Normal</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row variant="primary">
                                                    <tabler:table.cell>Primary</tabler:table.cell>
                                                    <tabler:table.cell>Primary variant</tabler:table.cell>
                                                    <tabler:table.cell>Active</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row variant="secondary">
                                                    <tabler:table.cell>Secondary</tabler:table.cell>
                                                    <tabler:table.cell>Secondary variant</tabler:table.cell>
                                                    <tabler:table.cell>Inactive</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row variant="success">
                                                    <tabler:table.cell>Success</tabler:table.cell>
                                                    <tabler:table.cell>Success variant</tabler:table.cell>
                                                    <tabler:table.cell>Completed</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row variant="danger">
                                                    <tabler:table.cell>Danger</tabler:table.cell>
                                                    <tabler:table.cell>Danger variant</tabler:table.cell>
                                                    <tabler:table.cell>Failed</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row variant="warning">
                                                    <tabler:table.cell>Warning</tabler:table.cell>
                                                    <tabler:table.cell>Warning variant</tabler:table.cell>
                                                    <tabler:table.cell>Pending</tabler:table.cell>
                                                </tabler:table.row>
                                                <tabler:table.row variant="info">
                                                    <tabler:table.cell>Info</tabler:table.cell>
                                                    <tabler:table.cell>Info variant</tabler:table.cell>
                                                    <tabler:table.cell>Information</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.body>
                                        </tabler:table>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:table.row variant="primary"&gt;...&lt;/tabler:table.row&gt;
&lt;tabler:table.row variant="success"&gt;...&lt;/tabler:table.row&gt;
&lt;tabler:table.row variant="danger"&gt;...&lt;/tabler:table.row&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Table with Sticky Header --}}
                            <div class="col-12">
                                <div class="card" style="height: 400px; overflow-y: auto;">
                                    <div class="card-header">
                                        <h3 class="card-title">Table with Sticky Header</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:table vcenter>
                                            <tabler:table.header sticky>
                                                <tabler:table.row>
                                                    <tabler:table.cell header scope="col">Item</tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Category
                                                    </tabler:table.cell>
                                                    <tabler:table.cell header scope="col">Price</tabler:table.cell>
                                                </tabler:table.row>
                                            </tabler:table.header>
                                            <tabler:table.body>
                                                @for ($i = 1; $i <= 50; $i++)
                                                    <tabler:table.row>
                                                        <tabler:table.cell>Item {{ $i }}</tabler:table.cell>
                                                        <tabler:table.cell>Category {{ ($i % 5) + 1 }}
                                                        </tabler:table.cell>
                                                        <tabler:table.cell>${{ number_format(rand(10, 999), 2) }}
                                                        </tabler:table.cell>
                                                    </tabler:table.row>
                                                @endfor
                                            </tabler:table.body>
                                        </tabler:table>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:table.header sticky&gt;
    ...
&lt;/tabler:table.header&gt;</code></pre>
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
                                        <h4 class="mb-3">Table Component Props</h4>
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
                                                        <td><code>striped</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Adds zebra-striping to table rows</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>bordered</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Adds borders on all sides of table and cells</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>borderless</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Removes all borders from the table</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>hover</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Enables hover state on table rows</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>size</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Table size: sm, small</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>responsive</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Makes table responsive (horizontal scroll on small screens)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>responsiveBreakpoint</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Responsive breakpoint: sm, md, lg, xl, xxl</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>vcenter</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Vertically centers cell content</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>nowrap</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Prevents text wrapping in table cells</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>mobile</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Enables mobile-friendly table layout</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>card</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Applies card-table styling (use inside card)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>selectable</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Enables selectable rows with checkboxes</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h4 class="mb-3 mt-4">Table Header Props</h4>
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
                                                        <td><code>sticky</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Makes header sticky on scroll</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>light</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Applies light background to header</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h4 class="mb-3 mt-4">Table Row Props</h4>
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
                                                        <td>null</td>
                                                        <td>Row color variant: primary, secondary, success, danger,
                                                            warning, info, light, dark</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>active</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Highlights row as active</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h4 class="mb-3 mt-4">Table Cell Props</h4>
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
                                                        <td><code>header</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Renders as &lt;th&gt; instead of &lt;td&gt;</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>scope</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Scope attribute for header cells (col, row)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>nowrap</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Prevents text wrapping in cell</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>truncate</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Truncates cell content with ellipsis</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>width</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Width preset: 1 (minimal), auto</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>dataLabel</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Data label for mobile responsive tables</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Code Examples --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Code Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="mb-3">Basic Usage</h4>
                                        <pre class="mb-4"><code>&lt;tabler:table responsive vcenter&gt;
    &lt;tabler:table.header&gt;
        &lt;tabler:table.row&gt;
            &lt;tabler:table.cell header scope="col"&gt;Name&lt;/tabler:table.cell&gt;
            &lt;tabler:table.cell header scope="col"&gt;Email&lt;/tabler:table.cell&gt;
        &lt;/tabler:table.row&gt;
    &lt;/tabler:table.header&gt;
    &lt;tabler:table.body&gt;
        &lt;tabler:table.row&gt;
            &lt;tabler:table.cell&gt;John Doe&lt;/tabler:table.cell&gt;
            &lt;tabler:table.cell&gt;john@example.com&lt;/tabler:table.cell&gt;
        &lt;/tabler:table.row&gt;
    &lt;/tabler:table.body&gt;
&lt;/tabler:table&gt;</code></pre>

                                        <h4 class="mb-3">Striped & Bordered Table</h4>
                                        <pre class="mb-4"><code>&lt;tabler:table responsive striped bordered vcenter&gt;
    ...
&lt;/tabler:table&gt;</code></pre>

                                        <h4 class="mb-3">Table in Card</h4>
                                        <pre class="mb-4"><code>&lt;div class="card"&gt;
    &lt;div class="card-header"&gt;
        &lt;h3 class="card-title"&gt;Recent Orders&lt;/h3&gt;
    &lt;/div&gt;
    &lt;tabler:card.table&gt;
        &lt;tabler:table card vcenter&gt;
            ...
        &lt;/tabler:table&gt;
    &lt;/tabler:card.table&gt;
&lt;/div&gt;</code></pre>

                                        <h4 class="mb-3">Colored Rows</h4>
                                        <pre class="mb-4"><code>&lt;tabler:table.row variant="success"&gt;
    &lt;tabler:table.cell&gt;Success row&lt;/tabler:table.cell&gt;
&lt;/tabler:table.row&gt;

&lt;tabler:table.row variant="danger"&gt;
    &lt;tabler:table.cell&gt;Danger row&lt;/tabler:table.cell&gt;
&lt;/tabler:table.row&gt;</code></pre>

                                        <h4 class="mb-3">Sticky Header</h4>
                                        <pre class="mb-4"><code>&lt;tabler:table vcenter&gt;
    &lt;tabler:table.header sticky&gt;
        ...
    &lt;/tabler:table.header&gt;
    &lt;tabler:table.body&gt;
        ...
    &lt;/tabler:table.body&gt;
&lt;/tabler:table&gt;</code></pre>
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
