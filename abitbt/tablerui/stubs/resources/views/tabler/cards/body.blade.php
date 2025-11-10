@props([
    'scrollable' => false,
])

@php
    $bodyClasses = ['card-body'];

    if ($scrollable) {
        $bodyClasses[] = 'card-body-scrollable';
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $bodyClasses)]) }}>
    {{ $slot }}
</div>
