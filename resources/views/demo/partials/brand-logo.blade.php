{{--
    Demo Partial: Brand Logo

    Logo/brand component with link to demo index.

    Parameters:
    - $classes (string, optional, default: ''): Additional CSS classes for navbar-brand div
--}}

@php
    $classes = $classes ?? '';
@endphp

<div class="navbar-brand navbar-brand-autodark {{ $classes }}">
    <a href="{{ route('demo.index') }}">
        <img src="{{ asset(config('tabler.logo.full') ?? 'logo.svg') }}" width="110" height="32"
            alt="{{ config('app.name') }}" class="navbar-brand-image">
    </a>
</div>
