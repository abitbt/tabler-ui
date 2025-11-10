{{--
    Example: Component-based Layout Usage

    This demonstrates how to use the new @props-based layouts as components
--}}

{{-- Method 1: As a Component with Props --}}
<x-tabler::layouts.app
    :navbar-dark="true"
    :navbar-sticky="true"
    :nav-items="$navItems ?? []"
    title="Layout Example - Component Style"
>
    {{-- Page Header with Actions --}}
    <x-slot:page-header>Layout Component Example</x-slot:page-header>
    <x-slot:page-pretitle>Demo</x-slot:page-pretitle>
    <x-slot:page-actions>
        <x-tabler::button color="primary" icon="plus">
            New Item
        </x-tabler::button>
    </x-slot:page-actions>

    {{-- Main Content --}}
    <div class="row row-cards">
        <div class="col-12">
            <x-tabler::cards.card>
                <x-tabler::cards.header>
                    <h3 class="card-title">Component-Based Layout</h3>
                </x-tabler::cards.header>
                <x-tabler::cards.body>
                    <p>This page uses the new component-based layout approach with <code>@props</code>.</p>
                    <p>Benefits:</p>
                    <ul>
                        <li>Type-safe props with defaults</li>
                        <li>Named slots for flexible content</li>
                        <li>IDE autocomplete support</li>
                        <li>Cleaner, more readable syntax</li>
                    </ul>
                </x-tabler::cards.body>
            </x-tabler::cards.card>
        </div>
    </div>

    {{-- Optional Footer --}}
    <x-slot:footer>
        <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
    </x-slot:footer>
</x-tabler::layouts.app>
