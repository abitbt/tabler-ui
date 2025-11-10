@props([
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
    'rows' => 3,
    'autosize' => false,
    'wrapper' => true,
])

@php
    // Generate ID from name if not provided
    $textareaId = $id ?? ($name ? str_replace(['[', ']'], ['-', ''], $name) : 'textarea-' . uniqid());

    // Build textarea classes
    $textareaClasses = ['form-control'];

    // Add autosize class if enabled
    if ($autosize) {
        $textareaClasses[] = 'autosize';
    }

    // Add validation classes
    if ($error || $errors->has($name)) {
        $textareaClasses[] = 'is-invalid';
    }

    // Get error message
    $errorMessage = $error ?? ($name ? $errors->first($name) : null);
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    {{-- Label --}}
    @if($label)
        <label for="{{ $textareaId }}" class="form-label">
            {{ $label }}
            @if($required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif

    {{-- Help Text (above textarea) --}}
    @if($help)
        <small class="form-hint">{{ $help }}</small>
    @endif

    {{-- Textarea Element --}}
    <textarea
        id="{{ $textareaId }}"
        @if($name) name="{{ $name }}" @endif
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required @endif
        @if($disabled) disabled @endif
        @if($readonly) readonly @endif
        rows="{{ $rows }}"
        {{ $attributes->merge(['class' => implode(' ', $textareaClasses)]) }}
    >{{ old($name, $value ?? $slot) }}</textarea>

    {{-- Error Message --}}
    @if($errorMessage)
        <div class="invalid-feedback d-block">{{ $errorMessage }}</div>
    @endif
@if($wrapper)
</div>
@endif
