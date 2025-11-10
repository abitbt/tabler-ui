@props([
    'padding' => null, // 'sm', 'md', 'lg'
    'stacked' => false,
    'borderless' => false,
    'active' => false,
    'inactive' => false,
    'link' => false,
    'linkEffect' => null, // 'rotate', 'pop'
    'rotateStart' => false,
    'rotateEnd' => false,
    'bgColor' => null, // 'primary', 'primary-lt', etc.
    'textColor' => null, // 'primary-fg', etc.
])

@php
    $cardClasses = ['card'];

    // Padding variations
    if ($padding === 'sm') {
        $cardClasses[] = 'card-sm';
    } elseif ($padding === 'md') {
        $cardClasses[] = 'card-md';
    } elseif ($padding === 'lg') {
        $cardClasses[] = 'card-lg';
    }

    // Stacked effect
    if ($stacked) {
        $cardClasses[] = 'card-stacked';
    }

    // Borderless
    if ($borderless) {
        $cardClasses[] = 'card-borderless';
    }

    // States
    if ($active) {
        $cardClasses[] = 'card-active';
    }

    if ($inactive) {
        $cardClasses[] = 'card-inactive';
    }

    // Link effects
    if ($link) {
        $cardClasses[] = 'card-link';

        if ($linkEffect === 'rotate') {
            $cardClasses[] = 'card-link-rotate';
        } elseif ($linkEffect === 'pop') {
            $cardClasses[] = 'card-link-pop';
        }
    }

    // Rotate effects
    if ($rotateStart) {
        $cardClasses[] = 'card-rotate-start';
    }

    if ($rotateEnd) {
        $cardClasses[] = 'card-rotate-end';
    }

    // Background color
    if ($bgColor) {
        $cardClasses[] = 'bg-' . $bgColor;
    }

    // Text color
    if ($textColor) {
        $cardClasses[] = 'text-' . $textColor;
    }
@endphp

@if($link)
<a {{ $attributes->merge(['class' => implode(' ', $cardClasses)]) }}>
    {{ $slot }}
</a>
@else
<div {{ $attributes->merge(['class' => implode(' ', $cardClasses)]) }}>
    {{ $slot }}
</div>
@endif
