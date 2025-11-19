@props([
    // Core attributes
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'id' => null,
    'value' => null,

    // UI elements
    'label' => null,
    'placeholder' => null,
    'help' => null,

    // State
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'error' => null,

    // Textarea specific
    'rows' => 3,
    'cols' => null,

    // Wrapper
    'containerClass' => 'mb-3',
])

@php
    use Abitbt\TablerBlade\Tabler;

    // Generate ID from name if not provided
    $id = $id ?? ($name ? $name : uniqid('textarea-'));

    // Detect validation errors
    $hasError = $error !== null ? (bool) $error : $name && $errors->has($name);
    $errorMessage = $hasError ? ($error ?: $errors->first($name)) : null;

    // Build textarea classes
    $textareaClasses = Tabler::classes()
        ->add('form-control')
        ->add($hasError ? 'is-invalid' : '')
        ->add($attributes->pluck('class:textarea'));

    // Build label classes
    $labelClasses = Tabler::classes()
        ->add('form-label')
        ->add($required ? 'required' : '');
@endphp

<div class="{{ $containerClass }}" data-tabler-textarea>
    @if ($label)
        <label for="{{ $id }}" class="{{ $labelClasses }}">
            {{ $label }}
        </label>
    @endif

    <textarea id="{{ $id }}" @if ($name) name="{{ $name }}" @endif
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($rows) rows="{{ $rows }}" @endif
        @if ($cols) cols="{{ $cols }}" @endif
        @if ($required) required @endif @if ($disabled) disabled @endif
        @if ($readonly) readonly @endif @if ($hasError) aria-invalid="true" @endif
        @if ($required) aria-required="true" @endif
        @if ($errorMessage) aria-describedby="{{ $id }}-error" @endif
        {{ $attributes->except(['class', 'class:textarea', 'label', 'error', 'help', 'containerClass'])->class($textareaClasses) }}>{{ $value ?? $slot }}</textarea>

    @if ($hasError && $errorMessage)
        <div id="{{ $id }}-error" class="invalid-feedback">
            {{ $errorMessage }}
        </div>
    @endif

    @if ($help)
        <small class="form-hint">{{ $help }}</small>
    @endif
</div>
