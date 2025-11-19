@props([
    // Core attributes
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'id' => null,
    'value' => '1',
    'checked' => false,

    // UI elements
    'label' => null,
    'description' => null,
    'help' => null,

    // State
    'required' => false,
    'disabled' => false,
    'error' => null,

    // Styling
    'inline' => false,
    'variant' => null, // 'single' for standalone checkboxes

    // Wrapper
    'containerClass' => null,
])

@php
    use Abitbt\TablerBlade\Tabler;

    // Generate ID from name if not provided
    $id = $id ?? ($name ? $name : uniqid('checkbox-'));

    // Detect validation errors
    $hasError = $error !== null ? (bool) $error : $name && $errors->has($name);
    $errorMessage = $hasError ? ($error ?: $errors->first($name)) : null;

    // Build wrapper classes
    $wrapperClasses = Tabler::classes()
        ->add('form-check')
        ->add($inline ? 'form-check-inline' : '')
        ->add($variant === 'single' ? 'form-check-single' : '');

    // Build input classes
    $inputClasses = Tabler::classes()
        ->add('form-check-input')
        ->add($hasError ? 'is-invalid' : '')
        ->add($attributes->pluck('class:input'));

    // Build label classes
    $labelClasses = Tabler::classes()
        ->add('form-check-label')
        ->add($required ? 'required' : '');

    // Determine container class
    $finalContainerClass = $containerClass ?? ($inline ? '' : 'mb-3');
@endphp

<div @if ($finalContainerClass) class="{{ $finalContainerClass }}" @endif data-tabler-checkbox>
    <label class="{{ $wrapperClasses }}">
        <input type="checkbox" id="{{ $id }}"
            @if ($name) name="{{ $name }}" @endif value="{{ $value }}"
            @if ($checked) checked @endif @if ($required) required @endif
            @if ($disabled) disabled @endif
            @if ($hasError) aria-invalid="true" @endif
            @if ($required) aria-required="true" @endif
            @if ($errorMessage) aria-describedby="{{ $id }}-error" @endif
            {{ $attributes->except(['class', 'class:input', 'label', 'description', 'error', 'help', 'containerClass', 'inline'])->class($inputClasses) }}>

        @if ($label)
            <span class="{{ $labelClasses }}">
                {{ $label }}
            </span>
        @endif

        @if ($description)
            <span class="form-check-description">
                {{ $description }}
            </span>
        @endif
    </label>

    @if ($hasError && $errorMessage)
        <div id="{{ $id }}-error" class="invalid-feedback d-block">
            {{ $errorMessage }}
        </div>
    @endif

    @if ($help)
        <small class="form-hint">{{ $help }}</small>
    @endif
</div>
