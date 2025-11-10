@props([
    'name' => null,
    'id' => null,
    'value' => '#066fd1',
    'label' => null,
    'wrapper' => true,
])

@php
    $pickerId = $id ?? ($name ? str_replace(['[', ']'], ['-', ''], $name) : 'color-picker-' . uniqid());
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    @if($label)
        <label for="{{ $pickerId }}" class="form-label">{{ $label }}</label>
    @endif

    <input
        type="color"
        id="{{ $pickerId }}"
        @if($name) name="{{ $name }}" @endif
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => 'form-control form-control-color']) }}
    />
@if($wrapper)
</div>
@endif
