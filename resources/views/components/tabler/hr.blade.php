@props([
    'position' => null,
    'color' => null,
    'class' => null,
    'text' => 'Label',
])

{{-- hr component --}}
@php
    $classes = 'hr-text';
    if ($position) {
        $classes .= ' hr-text-' . Str::lower($position);
    }
    if ($color) {
        $classes .= ' text-' . $color;
    }
    if ($class) {
        $classes .= ' ' . $class;
    }
@endphp
<div class="{{ $classes }}">{{ $text ?? 'Label' }}</div>
