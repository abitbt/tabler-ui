<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Cards - Tabler Blade Components'])
    </head>

    <body>
        <div class="page">
            {{-- Demo Navbar --}}
            @include('demo.partials.demo-navbar')

            <div class="page-wrapper">
                {{-- Page Header --}}
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <div class="page-pretitle">
                                    Tabler Blade Components
                                </div>
                                <h2 class="page-title">
                                    Cards
                                </h2>
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

                {{-- Page Body --}}
                <main id="content" class="page-body">
                    <div class="container-xl">
                        {{-- Basic Cards --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Basic Cards</h2>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.header title="Simple Card" />
                                    <tabler:card.body>
                                        This is a simple card with a header and body.
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.body>
                                        <tabler:card.title>Card with Title in Body</tabler:card.title>
                                        <p class="text-secondary">A card with the title inside the body instead of the
                                            header.</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.header light>
                                        <tabler:card.title>Light Header</tabler:card.title>
                                    </tabler:card.header>
                                    <tabler:card.body>
                                        Card with a light background header.
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card Padding --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Padding</h2>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <tabler:card padding="sm">
                                    <tabler:card.body>
                                        Small padding card
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <tabler:card>
                                    <tabler:card.body>
                                        Default padding card
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <tabler:card padding="md">
                                    <tabler:card.body>
                                        Medium padding card
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <tabler:card padding="lg">
                                    <tabler:card.body>
                                        Large padding card
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card States --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card States</h2>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card active>
                                    <tabler:card.body>
                                        <p>Active card state</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card inactive>
                                    <tabler:card.body>
                                        <p>Inactive card state</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card borderless>
                                    <tabler:card.body>
                                        <tabler:card.title>Borderless Card</tabler:card.title>
                                        <p>Card without border</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card Links --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Links</h2>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card link href="#">
                                    <tabler:card.body>
                                        Default hover effect
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card link linkRotate href="#">
                                    <tabler:card.body>
                                        Rotate hover effect
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card link linkPop href="#">
                                    <tabler:card.body>
                                        Pop hover effect
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card Status --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Status</h2>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <tabler:card>
                                    <tabler:card.status color="primary" position="top" />
                                    <tabler:card.body>
                                        <tabler:card.title>Status Top</tabler:card.title>
                                        <p class="text-secondary">Card with status bar on top</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <tabler:card>
                                    <tabler:card.status color="success" position="bottom" />
                                    <tabler:card.body>
                                        <tabler:card.title>Status Bottom</tabler:card.title>
                                        <p class="text-secondary">Card with status bar on bottom</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <tabler:card>
                                    <tabler:card.status color="danger" position="start" />
                                    <tabler:card.body>
                                        <tabler:card.title>Status Start</tabler:card.title>
                                        <p class="text-secondary">Card with status bar on start</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <tabler:card>
                                    <tabler:card.status color="warning" />
                                    <tabler:card.body>
                                        <tabler:card.title>Multiple Status</tabler:card.title>
                                        <p class="text-secondary">Card with colored status indicator</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card with Stamp --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Stamp</h2>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.stamp icon="bell" color="yellow" />
                                    <tabler:card.body>
                                        <tabler:card.title>Card with Stamp Icon</tabler:card.title>
                                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.stamp icon="star" color="blue" />
                                    <tabler:card.body>
                                        <tabler:card.title>Featured Content</tabler:card.title>
                                        <p class="text-secondary">Card with a star stamp indicating featured content.
                                        </p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.stamp icon="check" color="green" />
                                    <tabler:card.body>
                                        <tabler:card.title>Verified Content</tabler:card.title>
                                        <p class="text-secondary">Card with a check stamp for verified information.</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card with Footer --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Footer</h2>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.header title="Card with Footer" />
                                    <tabler:card.body>
                                        <p class="text-secondary">Card body content goes here.</p>
                                    </tabler:card.body>
                                    <tabler:card.footer>
                                        <button class="btn btn-primary">Action</button>
                                    </tabler:card.footer>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.header title="Multiple Actions" />
                                    <tabler:card.body>
                                        <p class="text-secondary">Footer with multiple buttons.</p>
                                    </tabler:card.body>
                                    <tabler:card.footer>
                                        <div class="d-flex">
                                            <button class="btn btn-link">Cancel</button>
                                            <button class="btn btn-primary ms-auto">Save</button>
                                        </div>
                                    </tabler:card.footer>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.header title="Custom Footer" />
                                    <tabler:card.body>
                                        <p class="text-secondary">Footer can contain any content.</p>
                                    </tabler:card.body>
                                    <tabler:card.footer>
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <small class="text-secondary">Last updated: 5 mins ago</small>
                                            </div>
                                            <div class="col-auto ms-auto">
                                                <button class="btn btn-sm btn-primary">Refresh</button>
                                            </div>
                                        </div>
                                    </tabler:card.footer>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card with Title and Subtitle --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Title & Subtitle</h2>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <tabler:card>
                                    <tabler:card.header>
                                        <tabler:card.title subtitle="This is a subtitle">
                                            Card Title with Subtitle
                                        </tabler:card.title>
                                    </tabler:card.header>
                                    <tabler:card.body>
                                        <p class="text-secondary">The subtitle appears inline with the title.</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <tabler:card>
                                    <tabler:card.body>
                                        <tabler:card.title>Main Title</tabler:card.title>
                                        <tabler:card.subtitle>Separate subtitle component</tabler:card.subtitle>
                                        <p class="text-secondary mt-2">The subtitle can also be a separate component.
                                        </p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card with Images --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Images</h2>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.img src="https://placehold.co/400x200/3b82f6/ffffff?text=Top+Image"
                                        position="top" alt="Card image top" />
                                    <tabler:card.body>
                                        <tabler:card.title>Image at Top</tabler:card.title>
                                        <p class="text-secondary">Card with image positioned at the top.</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.body>
                                        <tabler:card.title>Image at Bottom</tabler:card.title>
                                        <p class="text-secondary">Card with image positioned at the bottom.</p>
                                    </tabler:card.body>
                                    <tabler:card.img src="https://placehold.co/400x200/10b981/ffffff?text=Bottom+Image"
                                        position="bottom" alt="Card image bottom" />
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card>
                                    <tabler:card.img src="https://placehold.co/400x150/8b5cf6/ffffff?text=21x9+Ratio"
                                        ratio="21x9" alt="Wide ratio image">
                                    </tabler:card.img>
                                    <tabler:card.body>
                                        <tabler:card.title>Custom Ratio (21x9)</tabler:card.title>
                                        <p class="text-secondary">Card with custom aspect ratio background image.</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card with Table --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Tables</h2>
                            </div>

                            <div class="col-12">
                                <tabler:card>
                                    <tabler:card.header title="Recent Orders" />
                                    <tabler:card.table>
                                        <table class="table-vcenter table">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Customer</th>
                                                    <th>Status</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-secondary">#1001</td>
                                                    <td>John Doe</td>
                                                    <td><span class="badge bg-success text-light">Completed</span></td>
                                                    <td>$125.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-secondary">#1002</td>
                                                    <td>Jane Smith</td>
                                                    <td><span class="badge bg-warning text-light">Pending</span></td>
                                                    <td>$89.50</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-secondary">#1003</td>
                                                    <td>Bob Johnson</td>
                                                    <td><span class="badge bg-danger text-light">Cancelled</span></td>
                                                    <td>$250.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-secondary">#1004</td>
                                                    <td>Alice Williams</td>
                                                    <td><span class="badge bg-info text-light">Processing</span></td>
                                                    <td>$175.25</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </tabler:card.table>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Stacked Cards --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Stacked Cards</h2>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card stacked>
                                    <tabler:card.body>
                                        <tabler:card.title>Stacked Effect</tabler:card.title>
                                        <p class="text-secondary">Card with stacked visual effect, creating a layered
                                            appearance.</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card stacked>
                                    <tabler:card.stamp icon="layers" color="blue" />
                                    <tabler:card.body>
                                        <tabler:card.title>Stacked with Stamp</tabler:card.title>
                                        <p class="text-secondary">Stacked card combined with a decorative stamp.</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <tabler:card stacked>
                                    <tabler:card.header title="Header on Stacked" />
                                    <tabler:card.body>
                                        <p class="text-secondary">Stacked cards work with all other card features.</p>
                                    </tabler:card.body>
                                    <tabler:card.footer>
                                        <button class="btn btn-primary btn-sm">Action</button>
                                    </tabler:card.footer>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Card Rotation --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Rotation</h2>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <tabler:card rotateStart>
                                    <tabler:card.body>
                                        <tabler:card.title>Rotate Start</tabler:card.title>
                                        <p class="text-secondary">Card with rotation effect at the start (left in LTR,
                                            right in RTL).</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <tabler:card rotateEnd>
                                    <tabler:card.body>
                                        <tabler:card.title>Rotate End</tabler:card.title>
                                        <p class="text-secondary">Card with rotation effect at the end (right in LTR,
                                            left in RTL).</p>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>

                        {{-- Aside Cards --}}
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <h2 class="mb-3">Card Aside</h2>
                            </div>

                            <div class="col-md-6">
                                <tabler:card aside>
                                    <tabler:card.img src="https://placehold.co/200x150/3b82f6/ffffff?text=Product"
                                        alt="Product image" />
                                    <tabler:card.body>
                                        <tabler:card.title>Product Card</tabler:card.title>
                                        <p class="text-secondary">Horizontal layout perfect for product listings.</p>
                                        <button class="btn btn-primary btn-sm">View Details</button>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-md-6">
                                <tabler:card aside>
                                    <tabler:card.img src="https://placehold.co/200x150/10b981/ffffff?text=Article"
                                        alt="Article image" />
                                    <tabler:card.body>
                                        <tabler:card.title>Blog Post Preview</tabler:card.title>
                                        <p class="text-secondary">Great for blog listings and article previews.</p>
                                        <button class="btn btn-outline-primary btn-sm">Read More</button>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>

                            <div class="col-12">
                                <tabler:card aside>
                                    <tabler:card.img src="https://placehold.co/250x180/8b5cf6/ffffff?text=Feature"
                                        alt="Feature image" />
                                    <tabler:card.body>
                                        <tabler:card.title>Featured Content</tabler:card.title>
                                        <p class="text-secondary">The aside layout provides a horizontal card
                                            structure,
                                            perfect for displaying content side-by-side with an image. This full-width
                                            example shows how it scales across the page.</p>
                                        <div class="mt-3">
                                            <button class="btn btn-primary">Learn More</button>
                                            <button class="btn btn-outline-secondary ms-2">Save</button>
                                        </div>
                                    </tabler:card.body>
                                </tabler:card>
                            </div>
                        </div>
                    </div>
                </main>

                @include('demo.partials.footer')
            </div>
        </div>
    </body>

</html>
