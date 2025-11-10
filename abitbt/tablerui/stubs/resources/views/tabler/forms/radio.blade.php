@props([
    'name' => null,
    'id' => null,
    'value' => null,
    'checked' => false,
    'label' => null,
    'help' => null,
    'disabled' => false,
    'inline' => false,
    'wrapper' => true,
])

@php
    // Generate ID from name and value if not provided
    $radioId = $id ?? ($name && $value ? str_replace(['[', ']'], ['-', ''], $name) . '-' . $value : 'radio-' . uniqid());

    // Build wrapper classes
    $wrapperClasses = ['form-check'];

    if ($inline) {
        $wrapperClasses[] = 'form-check-inline';
    }

    // Determine if checked
    $isChecked = old($name) !== null ? old($name) == $value : $checked;
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    <label {{ $attributes->merge(['class' => implode(' ', $wrapperClasses)]) }}>
        <input
            type="radio"
            class="form-check-input"
            id="{{ $radioId }}"
            @if($name) name="{{ $name }}" @endif
            @if($value !== null) value="{{ $value }}" @endif
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
