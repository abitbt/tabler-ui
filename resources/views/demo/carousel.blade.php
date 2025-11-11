{{--
    Carousel Component Demo
    Component: <x-tabler::carousel>
--}}
@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Carousel" subtitle="Image slideshow component" />
@endsection

@section('content')
    <div class="row row-cards">
        {{-- Basic Carousel --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Basic Carousel</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::carousel id="basic-carousel">
                        <div class="carousel-item active">
                            <img src="https://placehold.co/800x400/3b82f6/ffffff?text=Slide+1" class="d-block w-100"
                                alt="Slide 1" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/10b981/ffffff?text=Slide+2" class="d-block w-100"
                                alt="Slide 2" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/f59e0b/ffffff?text=Slide+3" class="d-block w-100"
                                alt="Slide 3" />
                        </div>
                    </x-tabler::carousel>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Carousel with Indicators --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Carousel with Indicators</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::carousel id="indicators-carousel">
                        <x-slot:indicators>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#indicators-carousel" data-bs-slide-to="0"
                                    class="active"></button>
                                <button type="button" data-bs-target="#indicators-carousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#indicators-carousel" data-bs-slide-to="2"></button>
                            </div>
                        </x-slot:indicators>

                        <div class="carousel-item active">
                            <img src="https://placehold.co/800x400/6366f1/ffffff?text=Slide+1" class="d-block w-100"
                                alt="Slide 1" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/ec4899/ffffff?text=Slide+2" class="d-block w-100"
                                alt="Slide 2" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/8b5cf6/ffffff?text=Slide+3" class="d-block w-100"
                                alt="Slide 3" />
                        </div>
                    </x-tabler::carousel>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Fade Carousel --}}
        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Fade Transition</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::carousel id="fade-carousel" fade>
                        <div class="carousel-item active">
                            <img src="https://placehold.co/800x400/06b6d4/ffffff?text=Photo+1" class="d-block w-100"
                                alt="Photo 1" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/f97316/ffffff?text=Photo+2" class="d-block w-100"
                                alt="Photo 2" />
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/14b8a6/ffffff?text=Photo+3" class="d-block w-100"
                                alt="Photo 3" />
                        </div>
                    </x-tabler::carousel>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Carousel with Captions --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Carousel with Captions</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <x-tabler::carousel id="captions-carousel">
                        <div class="carousel-item active">
                            <img src="https://placehold.co/800x400/dc2626/ffffff?text=Slide+1" class="d-block w-100"
                                alt="First slide" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First Slide Label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/2563eb/ffffff?text=Slide+2" class="d-block w-100"
                                alt="Second slide" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second Slide Label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/800x400/059669/ffffff?text=Slide+3" class="d-block w-100"
                                alt="Third slide" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third Slide Label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </x-tabler::carousel>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Code Examples --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Code Examples</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <h4>Basic Carousel</h4>
                    <pre><code>&lt;x-tabler::carousel id="basic-carousel"&gt;
    &lt;div class="carousel-item active"&gt;
        &lt;img src="/img/slide1.jpg" class="d-block w-100" alt="Slide 1" /&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        &lt;img src="/img/slide2.jpg" class="d-block w-100" alt="Slide 2" /&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        &lt;img src="/img/slide3.jpg" class="d-block w-100" alt="Slide 3" /&gt;
    &lt;/div&gt;
&lt;/x-tabler::carousel&gt;</code></pre>

                    <h4 class="mt-4">Carousel with Indicators</h4>
                    <pre><code>&lt;x-tabler::carousel id="indicators-carousel"&gt;
    &lt;x-slot:indicators&gt;
        &lt;div class="carousel-indicators"&gt;
            &lt;button type="button" data-bs-target="#indicators-carousel" data-bs-slide-to="0" class="active"&gt;&lt;/button&gt;
            &lt;button type="button" data-bs-target="#indicators-carousel" data-bs-slide-to="1"&gt;&lt;/button&gt;
            &lt;button type="button" data-bs-target="#indicators-carousel" data-bs-slide-to="2"&gt;&lt;/button&gt;
        &lt;/div&gt;
    &lt;/x-slot:indicators&gt;

    &lt;div class="carousel-item active"&gt;
        &lt;img src="/img/slide1.jpg" class="d-block w-100" alt="Slide 1" /&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        &lt;img src="/img/slide2.jpg" class="d-block w-100" alt="Slide 2" /&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        &lt;img src="/img/slide3.jpg" class="d-block w-100" alt="Slide 3" /&gt;
    &lt;/div&gt;
&lt;/x-tabler::carousel&gt;</code></pre>

                    <h4 class="mt-4">Carousel with Captions</h4>
                    <pre><code>&lt;x-tabler::carousel id="captions-carousel"&gt;
    &lt;div class="carousel-item active"&gt;
        &lt;img src="/img/slide1.jpg" class="d-block w-100" alt="First slide" /&gt;
        &lt;div class="carousel-caption d-none d-md-block"&gt;
            &lt;h5&gt;First Slide Label&lt;/h5&gt;
            &lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        &lt;img src="/img/slide2.jpg" class="d-block w-100" alt="Second slide" /&gt;
        &lt;div class="carousel-caption d-none d-md-block"&gt;
            &lt;h5&gt;Second Slide Label&lt;/h5&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-tabler::carousel&gt;</code></pre>

                    <h4 class="mt-4">Fade Transition</h4>
                    <pre><code>&lt;x-tabler::carousel id="fade-carousel" fade&gt;
    &lt;div class="carousel-item active"&gt;
        &lt;img src="/img/photo1.jpg" class="d-block w-100" alt="Photo 1" /&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        &lt;img src="/img/photo2.jpg" class="d-block w-100" alt="Photo 2" /&gt;
    &lt;/div&gt;
&lt;/x-tabler::carousel&gt;</code></pre>

                    <h4 class="mt-4">Without Controls</h4>
                    <pre><code>&lt;x-tabler::carousel id="auto-carousel" :controls="false"&gt;
    &lt;div class="carousel-item active"&gt;
        &lt;img src="/img/banner1.jpg" class="d-block w-100" alt="Banner 1" /&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
        &lt;img src="/img/banner2.jpg" class="d-block w-100" alt="Banner 2" /&gt;
    &lt;/div&gt;
&lt;/x-tabler::carousel&gt;</code></pre>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        {{-- Props Reference --}}
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <x-slot:title>Props Reference</x-slot>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <div class="table-responsive">
                        <table class="table-vcenter table">
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
                                    <td><code>id</code></td>
                                    <td><span class="badge bg-azure-lt">string</span></td>
                                    <td><code>''</code></td>
                                    <td>Unique carousel ID (required)</td>
                                </tr>
                                <tr>
                                    <td><code>controls</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>true</code></td>
                                    <td>Show prev/next controls</td>
                                </tr>
                                <tr>
                                    <td><code>fade</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use fade transition instead of slide</td>
                                </tr>
                                <tr>
                                    <td><code>dark</code></td>
                                    <td><span class="badge bg-purple-lt">bool</span></td>
                                    <td><code>false</code></td>
                                    <td>Use dark variant controls</td>
                                </tr>
                                <tr>
                                    <td><code>interval</code></td>
                                    <td><span class="badge bg-green-lt">int</span></td>
                                    <td><code>5000</code></td>
                                    <td>Auto-play interval in milliseconds</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Available Slots</h4>
                    <ul class="text-secondary">
                        <li><code>default</code> - Carousel items (slides)</li>
                        <li><code>indicators</code> - Optional carousel indicators (must match number of slides)</li>
                    </ul>

                    <h4 class="mt-4">Available CSS Classes</h4>
                    <div class="table-responsive">
                        <table class="table-vcenter table">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>carousel</code></td>
                                    <td>Base carousel class (applied automatically)</td>
                                </tr>
                                <tr>
                                    <td><code>carousel-fade</code></td>
                                    <td>Fade transition (also via fade prop)</td>
                                </tr>
                                <tr>
                                    <td><code>carousel-dark</code></td>
                                    <td>Dark variant controls (also via dark prop)</td>
                                </tr>
                                <tr>
                                    <td><code>carousel-item</code></td>
                                    <td>Individual slide</td>
                                </tr>
                                <tr>
                                    <td><code>active</code></td>
                                    <td>Active/current slide (required on first item)</td>
                                </tr>
                                <tr>
                                    <td><code>carousel-caption</code></td>
                                    <td>Caption overlay for slides</td>
                                </tr>
                                <tr>
                                    <td><code>carousel-indicators</code></td>
                                    <td>Container for indicator buttons</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 class="mt-4">Usage Notes</h4>
                    <ul class="text-secondary">
                        <li>The first carousel item must have the <code>active</code> class</li>
                        <li>Each carousel must have a unique <code>id</code> for Bootstrap functionality</li>
                        <li>Indicators must be manually created with matching <code>data-bs-target</code> and
                            <code>data-bs-slide-to</code> attributes
                        </li>
                        <li>Use <code>d-none d-md-block</code> on captions to hide them on mobile devices</li>
                        <li>Set <code>:interval="false"</code> to disable auto-play</li>
                    </ul>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>
@endsection
