@props([
    'name' => null,
    'id' => null,
    'value' => 50,
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'label' => null,
    'wrapper' => true,
])

@php
    $rangeId = $id ?? ($name ? str_replace(['[', ']'], ['-', ''], $name) : 'range-' . uniqid());
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    @if($label)
        <label for="{{ $rangeId }}" class="form-label">{{ $label }}</label>
    @endif

    <input
        type="range"
        id="{{ $rangeId }}"
        @if($name) name="{{ $name }}" @endif
        value="{{ old($name, $value) }}"
        min="{{ $min }}"
        max="{{ $max }}"
        step="{{ $step }}"
        {{ $attributes->merge(['class' => 'form-range']) }}
    />
@if($wrapper)
</div>
@endif
