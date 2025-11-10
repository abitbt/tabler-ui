@props([
    'name' => null,
    'id' => null,
    'label' => null,
    'help' => null,
    'error' => null,
    'accept' => null,
    'multiple' => false,
    'required' => false,
    'disabled' => false,
    'wrapper' => true,
])

@php
    $fileId = $id ?? ($name ? str_replace(['[', ']'], ['-', ''], $name) : 'file-' . uniqid());

    // Build file input classes
    $fileClasses = ['form-control'];

    // Add validation classes
    if ($error || $errors->has($name)) {
        $fileClasses[] = 'is-invalid';
    }

    // Get error message
    $errorMessage = $error ?? ($name ? $errors->first($name) : null);
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    @if($label)
        <label for="{{ $fileId }}" class="form-label">
            {{ $label }}
            @if($required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif

    @if($help)
        <small class="form-hint">{{ $help }}</small>
    @endif

    <input
        type="file"
        id="{{ $fileId }}"
        @if($name) name="{{ $name }}{{ $multiple ? '[]' : '' }}" @endif
        @if($accept) accept="{{ $accept }}" @endif
        @if($multiple) multiple @endif
        @if($required) required @endif
        @if($disabled) disabled @endif
        {{ $attributes->merge(['class' => implode(' ', $fileClasses)]) }}
    />

    @if($errorMessage)
        <div class="invalid-feedback d-block">{{ $errorMessage }}</div>
    @endif
@if($wrapper)
</div>
@endif
