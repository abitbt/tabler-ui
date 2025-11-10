@props([
    'transparent' => false,
    'borderless' => false,
])

@php
    $footerClasses = ['card-footer'];

    if ($transparent) {
        $footerClasses[] = 'card-footer-transparent';
    }

    if ($borderless) {
        $footerClasses[] = 'card-footer-borderless';
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $footerClasses)]) }}>
    {{ $slot }}
</div>
