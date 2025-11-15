<div>
    {{-- Custom Styles --}}
    <style>
        .icon-grid {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        }

        .icon-grid-sm {
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
        }

        .icon-grid-lg {
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        }

        .icon-grid-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem;
            border: 1px solid var(--tblr-border-color);
            border-radius: var(--tblr-border-radius);
            transition: all 0.2s;
        }

        .icon-grid-item:hover {
            border-color: var(--tblr-primary);
            background: var(--tblr-bg-surface-secondary);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .icon-preview {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: var(--tblr-border-radius);
            transition: all 0.2s;
        }

        .icon-preview:hover {
            background: var(--tblr-bg-surface);
            transform: scale(1.1);
        }

        .icon-preview-filled {
            opacity: 0.6;
        }

        .icon-preview-filled:hover {
            opacity: 1;
        }

        .icon-name {
            font-size: 0.75rem;
            text-align: center;
            word-break: break-word;
            color: var(--tblr-secondary);
            font-family: var(--tblr-font-monospace);
        }

        .icon-grid-sm .icon-preview svg {
            width: 20px;
            height: 20px;
        }

        .icon-grid-md .icon-preview svg {
            width: 24px;
            height: 24px;
        }

        .icon-grid-lg .icon-preview svg {
            width: 32px;
            height: 32px;
        }
    </style>

    {{-- Search and Filters Section --}}
    <div class="card mb-3">
        <div class="card-body">
            <div class="row g-3">
                {{-- Search Bar --}}
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">
                            <tabler:icon name="search" />
                        </span>
                        <input wire:model.live.debounce.300ms="search" type="search" class="form-control"
                            placeholder="Search {{ count($this->allIcons()) }}+ icons by name or tag...">
                        @if ($search)
                            <button wire:click="$set('search', '')" class="btn" type="button">
                                <tabler:icon name="x" />
                            </button>
                        @endif
                    </div>
                    @if ($search)
                        <small class="text-secondary">
                            Found {{ $this->totalIcons }} icon{{ $this->totalIcons !== 1 ? 's' : '' }}
                        </small>
                    @endif
                </div>

                {{-- Size Toggle --}}
                <div class="col-md-3">
                    <div class="btn-group w-100" role="group">
                        <button wire:click="setSize('sm')" type="button"
                            class="btn {{ $iconSize === 'sm' ? 'btn-primary' : 'btn-outline-primary' }}">
                            Small
                        </button>
                        <button wire:click="setSize('md')" type="button"
                            class="btn {{ $iconSize === 'md' ? 'btn-primary' : 'btn-outline-primary' }}">
                            Medium
                        </button>
                        <button wire:click="setSize('lg')" type="button"
                            class="btn {{ $iconSize === 'lg' ? 'btn-primary' : 'btn-outline-primary' }}">
                            Large
                        </button>
                    </div>
                </div>

                {{-- Total Count --}}
                <div class="col-md-3 text-end">
                    <div class="text-secondary">
                        <strong>{{ number_format(count($this->allIcons())) }}</strong> total icons<br>
                        <small>{{ count($this->categories()) }} categories</small>
                    </div>
                </div>
            </div>

            {{-- Category Filter Pills --}}
            @if (count($this->categories()) > 0)
                <div class="mt-3">
                    <label class="form-label">Filter by category:</label>
                    <div class="d-flex flex-wrap gap-2">
                        <button wire:click="setCategory('')" type="button"
                            class="btn btn-sm {{ empty($selectedCategory) ? 'btn-primary' : 'btn-outline-secondary' }}">
                            All
                        </button>
                        @foreach ($this->categories() as $category)
                            <button wire:click="setCategory('{{ $category }}')" type="button"
                                class="btn btn-sm {{ $selectedCategory === $category ? 'btn-primary' : 'btn-outline-secondary' }}">
                                {{ $category }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>

    {{-- Popular Icons Section --}}
    @if ($this->showPopular)
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="card-title">
                    <tabler:icon name="star" class="text-yellow" />
                    Popular Icons
                </h3>
            </div>
            <div class="card-body">
                <div class="icon-grid icon-grid-{{ $iconSize }}">
                    @foreach ($this->popularIconsData as $icon)
                        <div class="icon-grid-item" wire:key="popular-{{ $icon['name'] }}">
                            <div class="icon-preview" wire:click="selectIcon('{{ $icon['name'] }}', 'outline')"
                                role="button" tabindex="0">
                                <tabler:icon :name="$icon['name']" variant="outline" />
                            </div>
                            @if (isset($icon['styles']['filled']))
                                <div class="icon-preview icon-preview-filled"
                                    wire:click="selectIcon('{{ $icon['name'] }}', 'filled')" role="button"
                                    tabindex="0">
                                    <tabler:icon :name="$icon['name']" variant="filled" />
                                </div>
                            @endif
                            <div class="icon-name">{{ $icon['name'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{-- All Icons Grid --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                @if ($this->showPopular)
                    All Icons
                @else
                    {{ $search ? 'Search Results' : 'Icons in ' . $selectedCategory }}
                @endif
            </h3>
        </div>
        <div class="card-body">
            @if (count($this->filteredIcons()) > 0)
                <div class="icon-grid icon-grid-{{ $iconSize }}" wire:loading.class="opacity-50">
                    @foreach ($this->filteredIcons() as $icon)
                        <div class="icon-grid-item" wire:key="icon-{{ $icon['name'] }}">
                            <div class="icon-preview" wire:click="selectIcon('{{ $icon['name'] }}', 'outline')"
                                role="button" tabindex="0">
                                <tabler:icon :name="$icon['name']" variant="outline" />
                            </div>
                            @if (isset($icon['styles']['filled']))
                                <div class="icon-preview icon-preview-filled"
                                    wire:click="selectIcon('{{ $icon['name'] }}', 'filled')" role="button"
                                    tabindex="0">
                                    <tabler:icon :name="$icon['name']" variant="filled" />
                                </div>
                            @endif
                            <div class="icon-name">{{ $icon['name'] }}</div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty">
                    <div class="empty-icon">
                        <tabler:icon name="search" :size="48" />
                    </div>
                    <p class="empty-title">No icons found</p>
                    <p class="empty-subtitle text-secondary">
                        Try adjusting your search or filters
                    </p>
                    <div class="empty-action">
                        <button wire:click="$set('search', '')" class="btn btn-primary">
                            <tabler:icon name="refresh" />
                            Clear search
                        </button>
                    </div>
                </div>
            @endif

            {{-- Loading Indicator --}}
            <div wire:loading class="mt-3 text-center">
                <div class="spinner-border spinner-border-sm text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <span class="text-secondary ms-2">Searching...</span>
            </div>
        </div>
    </div>

    {{-- Icon Details Modal --}}
    @if ($selectedIconName && $this->selectedIconData)
        <tabler:modal id="icon-detail-modal" size="lg">
            <tabler:modal.header :title="'Icon: '.$selectedIconName">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </tabler:modal.header>

            <tabler:modal.body>
                {{-- Icon Preview --}}
                <div class="mb-4 text-center">
                    <div class="d-inline-flex align-items-center gap-4">
                        <div class="text-center">
                            <tabler:icon :name="$selectedIconName" variant="outline" :size="64" />
                            <div class="small text-secondary mt-2">Outline</div>
                        </div>
                        @if (isset($this->selectedIconData['styles']['filled']))
                            <div class="text-center">
                                <tabler:icon :name="$selectedIconName" variant="filled" :size="64" />
                                <div class="small text-secondary mt-2">Filled</div>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Blade Code --}}
                <div class="mb-4">
                    <h4 class="mb-3">Blade Code</h4>

                    <div class="mb-3">
                        <label class="form-label">Default usage:</label>
                        <div class="input-group">
                            <input type="text" class="form-control font-monospace"
                                id="code-default-{{ $selectedIconName }}"
                                value='&lt;tabler:icon name="{{ $selectedIconName }}" /&gt;' readonly>
                            <button class="btn btn-primary" type="button"
                                onclick="copyCode('code-default-{{ $selectedIconName }}')">
                                <tabler:icon name="copy" /> Copy
                            </button>
                        </div>
                    </div>

                    @if (isset($this->selectedIconData['styles']['filled']))
                        <div class="mb-3">
                            <label class="form-label">Filled variant:</label>
                            <div class="input-group">
                                <input type="text" class="form-control font-monospace"
                                    id="code-filled-{{ $selectedIconName }}"
                                    value='&lt;tabler:icon name="{{ $selectedIconName }}" variant="filled" /&gt;'
                                    readonly>
                                <button class="btn btn-primary" type="button"
                                    onclick="copyCode('code-filled-{{ $selectedIconName }}')">
                                    <tabler:icon name="copy" /> Copy
                                </button>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Usage Examples --}}
                <div class="mb-4">
                    <h4 class="mb-3">Usage Examples</h4>
                    <div class="table-responsive">
                        <table class="table-sm table">
                            <thead>
                                <tr>
                                    <th>Example</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <tabler:icon :name="$selectedIconName" />
                                    </td>
                                    <td><code>&lt;tabler:icon name="{{ $selectedIconName }}" /&gt;</code></td>
                                </tr>
                                <tr>
                                    <td>
                                        <tabler:icon :name="$selectedIconName" size="sm" />
                                    </td>
                                    <td><code>&lt;tabler:icon name="{{ $selectedIconName }}" size="sm"
                                            /&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <tabler:icon :name="$selectedIconName" size="lg" />
                                    </td>
                                    <td><code>&lt;tabler:icon name="{{ $selectedIconName }}" size="lg"
                                            /&gt;</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <tabler:icon :name="$selectedIconName" class="text-red" />
                                    </td>
                                    <td><code>&lt;tabler:icon name="{{ $selectedIconName }}"
                                            class="text-red" /&gt;</code></td>
                                </tr>
                                <tr>
                                    <td>
                                        <tabler:icon :name="$selectedIconName" :size="48" />
                                    </td>
                                    <td><code>&lt;tabler:icon name="{{ $selectedIconName }}" :size="48"
                                            /&gt;</code>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Icon Metadata --}}
                <div>
                    <h4 class="mb-3">Icon Information</h4>
                    <dl class="row mb-0">
                        <dt class="col-sm-3">Name:</dt>
                        <dd class="col-sm-9"><code>{{ $selectedIconName }}</code></dd>

                        @if (isset($this->selectedIconData['category']))
                            <dt class="col-sm-3">Category:</dt>
                            <dd class="col-sm-9">
                                <tabler:badge color="blue" variant="light">
                                    {{ $this->selectedIconData['category'] }}
                                </tabler:badge>
                            </dd>
                        @endif

                        <dt class="col-sm-3">Variants:</dt>
                        <dd class="col-sm-9">
                            <tabler:badge color="green" variant="light">Outline</tabler:badge>
                            @if (isset($this->selectedIconData['styles']['filled']))
                                <tabler:badge color="purple" variant="light">Filled</tabler:badge>
                            @endif
                        </dd>

                        @if (isset($this->selectedIconData['tags']) && count($this->selectedIconData['tags']) > 0)
                            <dt class="col-sm-3">Tags:</dt>
                            <dd class="col-sm-9">
                                @foreach (array_slice($this->selectedIconData['tags'], 0, 10) as $tag)
                                    <tabler:badge variant="light" class="mb-1 me-1">{{ $tag }}
                                    </tabler:badge>
                                @endforeach
                            </dd>
                        @endif

                        @if (isset($this->selectedIconData['styles']['outline']['unicode']))
                            <dt class="col-sm-3">Unicode:</dt>
                            <dd class="col-sm-9">
                                <code>{{ $this->selectedIconData['styles']['outline']['unicode'] }}</code></dd>
                        @endif
                    </dl>
                </div>
            </tabler:modal.body>

            <tabler:modal.footer>
                <button type="button" class="btn" data-bs-dismiss="modal" wire:click="closeModal">
                    Close
                </button>
            </tabler:modal.footer>
        </tabler:modal>
    @endif

    {{-- Alpine.js for Modal Control --}}
    @script
        <script>
            // Copy code function
            window.copyCode = function(inputId) {
                const input = document.getElementById(inputId);
                if (input) {
                    // Get the value and decode HTML entities
                    const text = input.value.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"');

                    navigator.clipboard.writeText(text).then(() => {
                        showToast('Code copied!');
                    }).catch(err => {
                        console.error('Failed to copy:', err);
                        showToast('Failed to copy code');
                    });
                }
            };

            // Show toast notification
            window.showToast = function(message) {
                const toast = document.createElement('div');
                toast.className = 'toast-notification';
                toast.textContent = message || 'Copied!';
                toast.style.cssText =
                    'position: fixed; top: 20px; right: 20px; background: var(--tblr-success); color: white; padding: 1rem 1.5rem; border-radius: var(--tblr-border-radius); z-index: 9999; box-shadow: 0 4px 6px rgba(0,0,0,0.1);';
                document.body.appendChild(toast);

                setTimeout(() => {
                    toast.style.opacity = '0';
                    toast.style.transition = 'opacity 0.3s';
                    setTimeout(() => toast.remove(), 300);
                }, 2000);
            };

            // Listen for open modal event
            Livewire.on('open-icon-modal', () => {
                const modal = new bootstrap.Modal(document.getElementById('icon-detail-modal'));
                modal.show();
            });

            // Listen for toast notifications
            window.addEventListener('show-toast', (event) => {
                showToast(event.detail.message);
            });
        </script>
    @endscript
</div>
