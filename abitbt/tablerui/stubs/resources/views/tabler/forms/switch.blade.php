@props([
    'name' => null,
    'id' => null,
    'value' => '1',
    'checked' => false,
    'label' => null,
    'help' => null,
    'disabled' => false,
    'wrapper' => true,
])

@php
    // Generate ID from name if not provided
    $switchId = $id ?? ($name ? str_replace(['[', ']'], ['-', ''], $name) . '-' . uniqid() : 'switch-' . uniqid());

    // Determine if checked
    $isChecked = old($name) !== null ? old($name) == $value : $checked;
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    <label {{ $attributes->merge(['class' => 'form-check form-switch']) }}>
        <input
            type="checkbox"
            class="form-check-input"
            id="{{ $switchId }}"
            @if($name) name="{{ $name }}" @endif
            value="{{ $value }}"
            @if($isChecked) checked @endif
            @if($disabled) disabled @endif
        >
        @if($label)
            <span class="form-check-label">{{ $label }}</span>
        @else
            <span class="form-check-label">{{ $slot }}</span>
        @endif
    </label>

    {{-- Help Text --}}
    @if($help)
        <small class="form-hint d-block">{{ $help }}</small>
    @endif
@if($wrapper)
</div>
@endif
