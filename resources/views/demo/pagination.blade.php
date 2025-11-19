<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('demo.partials.head', ['title' => 'Pagination - Tabler Blade Components'])
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
                                <h2 class="page-title">Pagination</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            {{-- Basic Example --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Basic Pagination</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:pagination :currentPage="3" :lastPage="5" />
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="3" :lastPage="5" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With First/Last Links --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">With First and Last Links</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:pagination :currentPage="10" :lastPage="20"
                                            showFirstLast />
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="10" :lastPage="20" showFirstLast /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- With Text Labels --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">With Text Labels</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:pagination :currentPage="2" :lastPage="5" showText />
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="2" :lastPage="5" showText /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Many Pages (With Ellipsis) --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Many Pages with Ellipsis</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Current page: 10 of 50</p>
                                            <tabler:pagination :currentPage="10" :lastPage="50" />
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Current page: 1 of 50</p>
                                            <tabler:pagination :currentPage="1" :lastPage="50" />
                                        </div>
                                        <div>
                                            <p class="text-muted mb-2">Current page: 50 of 50</p>
                                            <tabler:pagination :currentPage="50" :lastPage="50" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="10" :lastPage="50" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Alignment Options --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alignment Options</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Left aligned (default):</p>
                                            <tabler:pagination :currentPage="3" :lastPage="10"
                                                alignment="start" />
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Center aligned:</p>
                                            <tabler:pagination :currentPage="3" :lastPage="10"
                                                alignment="center" />
                                        </div>
                                        <div>
                                            <p class="text-muted mb-2">Right aligned:</p>
                                            <tabler:pagination :currentPage="3" :lastPage="10"
                                                alignment="end" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="3" :lastPage="10" alignment="center" /&gt;
&lt;tabler:pagination :currentPage="3" :lastPage="10" alignment="end" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Size Variants --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Size Variants</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Small:</p>
                                            <tabler:pagination :currentPage="2" :lastPage="5"
                                                size="sm" />
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Default:</p>
                                            <tabler:pagination :currentPage="2" :lastPage="5" />
                                        </div>
                                        <div>
                                            <p class="text-muted mb-2">Large:</p>
                                            <tabler:pagination :currentPage="2" :lastPage="5"
                                                size="lg" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="2" :lastPage="5" size="sm" /&gt;
&lt;tabler:pagination :currentPage="2" :lastPage="5" size="lg" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Style Variants --}}
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Style Variants</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Default:</p>
                                            <tabler:pagination :currentPage="3" :lastPage="5" />
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Outline:</p>
                                            <tabler:pagination :currentPage="3" :lastPage="5"
                                                variant="outline" />
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Circle:</p>
                                            <tabler:pagination :currentPage="3" :lastPage="5"
                                                :variant="['circle']" />
                                        </div>
                                        <div>
                                            <p class="text-muted mb-2">Circle Outline:</p>
                                            <tabler:pagination :currentPage="3" :lastPage="5"
                                                :variant="['circle', 'outline']" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="3" :lastPage="5" variant="outline" /&gt;
&lt;tabler:pagination :currentPage="3" :lastPage="5" :variant="['circle']" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Edge Cases --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edge Cases</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">First page (Previous disabled):</p>
                                            <tabler:pagination :currentPage="1" :lastPage="10"
                                                showFirstLast />
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Last page (Next disabled):</p>
                                            <tabler:pagination :currentPage="10" :lastPage="10"
                                                showFirstLast />
                                        </div>
                                        <div class="mb-3">
                                            <p class="text-muted mb-2">Single page (no pagination shown):</p>
                                            <tabler:pagination :currentPage="1" :lastPage="1" />
                                            <p class="text-muted small">No pagination is rendered when there's only one
                                                page.</p>
                                        </div>
                                        <div>
                                            <p class="text-muted mb-2">Two pages:</p>
                                            <tabler:pagination :currentPage="1" :lastPage="2" />
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="1" :lastPage="10" showFirstLast /&gt;
&lt;tabler:pagination :currentPage="10" :lastPage="10" showFirstLast /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Without Page Numbers --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Without Page Numbers</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-3">Simple previous/next navigation without page
                                            numbers:
                                        </p>
                                        <tabler:pagination :currentPage="5" :lastPage="20"
                                            :showNumbers="false" />
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="5" :lastPage="20" :showNumbers="false" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Custom Labels --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Custom Labels</h3>
                                    </div>
                                    <div class="card-body">
                                        <tabler:pagination :currentPage="3" :lastPage="10" showText
                                            showFirstLast previousLabel="Prev" nextLabel="Next" firstLabel="First"
                                            lastLabel="Last" />
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="3" :lastPage="10" showText showFirstLast
    previousLabel="Prev" nextLabel="Next" firstLabel="First" lastLabel="Last" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Combining Features --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Combining Features</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-3">Large, circle outline, with text, centered:</p>
                                        <tabler:pagination :currentPage="15" :lastPage="50"
                                            size="lg" :variant="['circle', 'outline']" alignment="center"
                                            showText showFirstLast />
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :currentPage="15" :lastPage="50" size="lg"
    :variant="['circle', 'outline']" alignment="center" showText showFirstLast /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Laravel Paginator Integration --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Laravel Paginator Integration</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted">
                                            The pagination component seamlessly integrates with Laravel's built-in
                                            paginator. Simply pass the paginator object to the component:
                                        </p>
                                        <pre class="rounded p-3"><code>// In your controller
$users = User::paginate(15);

return view('users.index', compact('users'));

// In your Blade view
&lt;tabler:pagination :paginator="$users" /&gt;

// With additional options
&lt;tabler:pagination :paginator="$users" alignment="center" /&gt;
&lt;tabler:pagination :paginator="$users" showFirstLast variant="outline" /&gt;</code></pre>

                                        <div class="alert alert-info mb-0 mt-3">
                                            <h4 class="alert-title">Auto-detection</h4>
                                            When you pass a paginator, the component automatically extracts:
                                            <ul class="mb-0 mt-2">
                                                <li>Current page number</li>
                                                <li>Total number of pages</li>
                                                <li>Base URL with proper query parameters</li>
                                                <li>Total items count</li>
                                                <li>Items per page</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-footer p-0">
                                        <pre class="mb-0"><code>&lt;tabler:pagination :paginator="$users" /&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Code Examples --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Complete Code Examples</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4>Basic Usage</h4>
                                        <pre class="rounded p-3"><code>{{-- Manual configuration --}}
&lt;tabler:pagination :currentPage="3" :lastPage="10" /&gt;

{{-- With Laravel paginator --}}
&lt;tabler:pagination :paginator="$users" /&gt;

{{-- All features --}}
&lt;tabler:pagination
    :paginator="$users"
    showFirstLast
    showText
    alignment="center"
    :variant="['circle', 'outline']"
    size="lg"
/&gt;</code></pre>

                                        <h4 class="mt-4">Livewire Integration</h4>
                                        <pre class="rounded p-3"><code>@verbatim// Livewire component
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user-list', [
            'users' => User::paginate(15),
        ]);
    }
}

// In your Livewire view
<div>
    <!-- User list -->
    @foreach ($users as $user)
<div>{{ $user->name }}</div>
@endforeach

    <!-- Pagination -->
    <tabler:pagination :paginator="$users" alignment="center" />
</div>@endverbatim
</code></pre>

                                        <h4 class="mt-4">Custom URL and Query Parameters</h4>
                                        <pre class="rounded p-3"><code>{{-- Manual URL configuration --}}
&lt;tabler:pagination
    :currentPage="5"
    :lastPage="20"
    url="/search/results"
    :queryString="['q' => 'laravel', 'sort' => 'date']"
/&gt;</code></pre>
                                    </div>
                                </div>
                            </div>

                            {{-- Accessibility --}}
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Accessibility Features</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted mb-3">
                                            The pagination component is built with accessibility in mind:
                                        </p>
                                        <ul>
                                            <li><strong>Keyboard Navigation:</strong> All links are keyboard accessible
                                                using Tab/Shift+Tab</li>
                                            <li><strong>Disabled State:</strong> Disabled links use
                                                <code>aria-disabled="true"</code> and <code>tabindex="-1"</code></li>
                                            <li><strong>ARIA Labels:</strong> Navigation links include proper
                                                <code>aria-label</code> attributes
                                            </li>
                                            <li><strong>Active State:</strong> Current page is marked with the
                                                <code>active</code> class
                                            </li>
                                            <li><strong>Screen Readers:</strong> Semantic HTML with proper link
                                                structure
                                            </li>
                                        </ul>
                                        <div class="alert alert-info mb-0">
                                            <strong>Tip:</strong> You can wrap the pagination in a
                                            <code>&lt;nav aria-label="Page navigation"&gt;</code> element for
                                            additional
                                            context to screen readers.
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
                                                        <td><code>paginator</code></td>
                                                        <td>LengthAwarePaginator</td>
                                                        <td>null</td>
                                                        <td>Laravel paginator instance (auto-extracts all pagination
                                                            data)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>currentPage</code></td>
                                                        <td>integer</td>
                                                        <td>1</td>
                                                        <td>Current page number (manual mode)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>lastPage</code></td>
                                                        <td>integer</td>
                                                        <td>1</td>
                                                        <td>Total number of pages (manual mode)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>total</code></td>
                                                        <td>integer</td>
                                                        <td>0</td>
                                                        <td>Total number of items (manual mode)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>perPage</code></td>
                                                        <td>integer</td>
                                                        <td>15</td>
                                                        <td>Items per page (manual mode)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>onEachSide</code></td>
                                                        <td>integer</td>
                                                        <td>3</td>
                                                        <td>Number of pages to show on each side of current page</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>url</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Base URL for pagination links (manual mode)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>queryString</code></td>
                                                        <td>array</td>
                                                        <td>[]</td>
                                                        <td>Additional query parameters (manual mode)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>showFirstLast</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Show first/last page links</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>showText</code></td>
                                                        <td>boolean</td>
                                                        <td>false</td>
                                                        <td>Use text labels instead of icons</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>showNumbers</code></td>
                                                        <td>boolean</td>
                                                        <td>true</td>
                                                        <td>Show page numbers</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>alignment</code></td>
                                                        <td>string</td>
                                                        <td>'start'</td>
                                                        <td>Horizontal alignment: 'start', 'center', 'end'</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>variant</code></td>
                                                        <td>string|array</td>
                                                        <td>null</td>
                                                        <td>Style variant: 'outline', 'circle', or ['circle', 'outline']
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>size</code></td>
                                                        <td>string</td>
                                                        <td>null</td>
                                                        <td>Size variant: 'sm', 'lg'</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>previousLabel</code></td>
                                                        <td>string</td>
                                                        <td>'Previous'</td>
                                                        <td>Text label for previous button</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>nextLabel</code></td>
                                                        <td>string</td>
                                                        <td>'Next'</td>
                                                        <td>Text label for next button</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>firstLabel</code></td>
                                                        <td>string</td>
                                                        <td>'First'</td>
                                                        <td>Text label for first button</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>lastLabel</code></td>
                                                        <td>string</td>
                                                        <td>'Last'</td>
                                                        <td>Text label for last button</td>
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
