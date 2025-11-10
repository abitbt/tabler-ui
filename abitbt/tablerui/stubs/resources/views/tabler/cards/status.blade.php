@props([
    'position' => 'top', // 'top', 'start', 'bottom'
    'color' => 'primary',
])

@php
    $statusClasses = ['card-status-' . $position, 'bg-' . $color];
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $statusClasses)]) }}></div>
