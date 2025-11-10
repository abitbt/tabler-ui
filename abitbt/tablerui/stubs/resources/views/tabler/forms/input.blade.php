@props([
    'type' => 'text',
    'name' => null,
    'id' => null,
    'value' => null,
    'placeholder' => null,
    'label' => null,
    'help' => null,
    'error' => null,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'size' => null, // 'sm', 'lg'
    'rounded' => false,
    'flush' => false,
    'icon' => null,
    'iconPosition' => 'end', // 'start', 'end'
    'loading' => false,
    'group' => null, // array of group elements
    'wrapper' => true, // wrap in mb-3 div
])

@php
    // Generate ID from name if not provided
    $inputId = $id ?? ($name ? str_replace(['[', ']'], ['-', ''], $name) : 'input-' . uniqid());

    // Build input classes
    $inputClasses = ['form-control'];

    if ($size) {
        $inputClasses[] = 'form-control-' . $size;
    }

    if ($rounded) {
        $inputClasses[] = 'form-control-rounded';
    }

    if ($flush) {
        $inputClasses[] = 'form-control-flush';
    }

    // Add validation classes
    if ($error || $errors->has($name)) {
        $inputClasses[] = 'is-invalid';
    }

    // Determine if we need input-icon wrapper
    $hasIcon = $icon || $loading;

    // Get error message
    $errorMessage = $error ?? ($name ? $errors->first($name) : null);
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    {{-- Label --}}
    @if($label)
        <label for="{{ $inputId }}" class="form-label">
            {{ $label }}
            @if($required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif

    {{-- Help Text (above input) --}}
    @if($help)
        <small class="form-hint">{{ $help }}</small>
    @endif

    {{-- Input with optional icon wrapper --}}
    @if($hasIcon)
        <div class="input-icon @if($iconPosition === 'start') input-icon-start @endif">
    @endif

    {{-- Icon (start position) --}}
    @if($hasIcon && $iconPosition === 'start')
        <span class="input-icon-addon">
            @if($loading)
                <div class="spinner-border spinner-border-sm text-secondary" role="status"></div>
            @elseif($icon)
                <x-dynamic-component :component="'tabler-' . $icon" class="icon" />
            @endif
        </span>
    @endif

    {{-- The actual input element --}}
    <input
        type="{{ $type }}"
        id="{{ $inputId }}"
        @if($name) name="{{ $name }}" @endif
        @if($value !== null) value="{{ $value }}" @endif
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required @endif
        @if($disabled) disabled @endif
        @if($readonly) readonly @endif
        {{ $attributes->merge(['class' => implode(' ', $inputClasses)]) }}
    >

    {{-- Icon (end position) --}}
    @if($hasIcon && $iconPosition === 'end')
        <span class="input-icon-addon">
            @if($loading)
                <div class="spinner-border spinner-border-sm text-secondary" role="status"></div>
            @elseif($icon)
                <x-dynamic-component :component="'tabler-' . $icon" class="icon" />
            @endif
        </span>
    @endif

    @if($hasIcon)
        </div>
    @endif

    {{-- Error Message --}}
    @if($errorMessage)
        <div class="invalid-feedback d-block">{{ $errorMessage }}</div>
    @endif
@if($wrapper)
</div>
@endif
