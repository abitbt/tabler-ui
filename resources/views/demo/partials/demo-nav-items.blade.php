{{--
    Demo Navigation Items

    Shared navigation menu items used across all demo pages.
    Includes dynamic active state detection.
--}}

@php
    $currentRoute = Request::route()?->getName();
    $isActive = fn($route) => $currentRoute === $route ? 'active' : '';
@endphp

{{-- Home --}}
<li class="nav-item {{ $isActive('demo.index') }}">
    <a class="nav-link" href="{{ route('demo.index') }}">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <tabler:icon name="home" />
        </span>
        <span class="nav-link-title">Home</span>
    </a>
</li>

{{-- Layouts Dropdown --}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-layouts" data-bs-toggle="dropdown" data-bs-auto-close="outside"
        role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <tabler:icon name="layout" />
        </span>
        <span class="nav-link-title">Layouts</span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <a class="dropdown-item" href="{{ route('layouts.horizontal') }}">
                    <tabler:icon name="layout-navbar" class="dropdown-item-icon" />
                    Horizontal
                </a>
                <a class="dropdown-item" href="{{ route('layouts.vertical') }}">
                    <tabler:icon name="layout-sidebar" class="dropdown-item-icon" />
                    Vertical
                </a>
                <a class="dropdown-item" href="{{ route('layouts.combo') }}">
                    <tabler:icon name="layout-columns" class="dropdown-item-icon" />
                    Combo
                </a>
                <a class="dropdown-item" href="{{ route('layouts.boxed') }}">
                    <tabler:icon name="layout-distribute-horizontal" class="dropdown-item-icon" />
                    Boxed
                </a>
                <a class="dropdown-item" href="{{ route('layouts.fluid') }}">
                    <tabler:icon name="arrows-maximize" class="dropdown-item-icon" />
                    Fluid
                </a>
                <a class="dropdown-item" href="{{ route('layouts.sticky') }}">
                    <tabler:icon name="pin" class="dropdown-item-icon" />
                    Navbar Sticky
                </a>
            </div>
        </div>
    </div>
</li>

{{-- Components Dropdown --}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-components" data-bs-toggle="dropdown" data-bs-auto-close="outside"
        role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <tabler:icon name="components" />
        </span>
        <span class="nav-link-title">Components</span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <a class="dropdown-item" href="{{ route('components.badge') }}">
                    <tabler:icon name="badge" class="dropdown-item-icon" />
                    Badge
                </a>
                <a class="dropdown-item" href="{{ route('components.button') }}">
                    <tabler:icon name="hand-click" class="dropdown-item-icon" />
                    Button
                </a>
                <a class="dropdown-item" href="{{ route('components.cards') }}">
                    <tabler:icon name="layout-cards" class="dropdown-item-icon" />
                    Cards
                </a>
                <a class="dropdown-item" href="{{ route('components.icons') }}">
                    <tabler:icon name="icons" class="dropdown-item-icon" />
                    Icons
                </a>
                <a class="dropdown-item" href="{{ route('components.modals') }}">
                    <tabler:icon name="square" class="dropdown-item-icon" />
                    Modals
                </a>
                <a class="dropdown-item" href="{{ route('components.toasts') }}">
                    <tabler:icon name="message-circle" class="dropdown-item-icon" />
                    Toasts
                </a>
            </div>
        </div>
    </div>
</li>
