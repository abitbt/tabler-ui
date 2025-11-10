{{--
    Example: Vertical Layout as Component

    This demonstrates the vertical sidebar layout using component syntax
--}}

<x-tabler::layouts.vertical
    :sidebar-dark="true"
    sidebar-position="left"
    :nav-items="$navItems ?? []"
    title="Vertical Layout - Component Style"
>
    {{-- Page Header --}}
    <x-slot:page-header>Vertical Layout Example</x-slot:page-header>
    <x-slot:page-pretitle>Dashboard</x-slot:page-pretitle>

    {{-- Page Actions --}}
    <x-slot:page-actions>
        <x-tabler::button color="primary" icon="plus">
            Create New
        </x-tabler::button>
        <x-tabler::button color="secondary" icon="settings">
            Settings
        </x-tabler::button>
    </x-slot:page-actions>

    {{-- Main Content --}}
    <div class="row row-deck row-cards">
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <h3 class="card-title">Vertical Sidebar Layout</h3>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>This layout features:</p>
                    <ul>
                        <li>Fixed vertical sidebar on the left</li>
                        <li>Dark theme sidebar by default</li>
                        <li>Collapsible navigation menu</li>
                        <li>Full-height sidebar with scrollable content</li>
                        <li>Responsive design that collapses on mobile</li>
                    </ul>

                    <h4 class="mt-4">Configuration Options</h4>
                    <p>You can customize the sidebar with these props:</p>
                    <ul>
                        <li><code>:sidebar-dark="true"</code> - Dark sidebar theme</li>
                        <li><code>sidebar-position="left"</code> - Position (left/right)</li>
                        <li><code>:sidebar-transparent="true"</code> - Transparent sidebar</li>
                        <li><code>sidebar-breakpoint="lg"</code> - Collapse breakpoint</li>
                    </ul>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <h4>Sample Card 1</h4>
                    <p>This is a sample card in a two-column layout.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>

        <div class="col-md-6">
            <x-tabler::cards.card>
                <x-tabler::cards.body>
                    <h4>Sample Card 2</h4>
                    <p>Another sample card in the grid.</p>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>

    {{-- Optional Footer --}}
    <x-slot:footer>
        <p>&copy; {{ date('Y') }} Your Company</p>
    </x-slot:footer>

    <x-slot:footer-links>
        <ul class="list-inline list-inline-dots mb-0">
            <li class="list-inline-item"><a href="#" class="link-secondary">Documentation</a></li>
            <li class="list-inline-item"><a href="#" class="link-secondary">License</a></li>
            <li class="list-inline-item"><a href="#" class="link-secondary">Source code</a></li>
        </ul>
    </x-slot:footer-links>
</x-tabler::layouts.vertical>
