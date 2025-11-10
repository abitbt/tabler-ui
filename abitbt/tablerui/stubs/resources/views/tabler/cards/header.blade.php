@props([
    'light' => false,
])

@php
    $headerClasses = ['card-header'];

    if ($light) {
        $headerClasses[] = 'card-header-light';
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $headerClasses)]) }}>
    {{ $slot }}
</div>
