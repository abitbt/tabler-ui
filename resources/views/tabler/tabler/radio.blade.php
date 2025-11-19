@props([
    // Core attributes
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'id' => null,
    'value' => null,
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

    // Wrapper
    'containerClass' => null,
])

@php
    use Abitbt\TablerBlade\Tabler;

    // Generate ID from name and value if not provided
    $id = $id ?? ($name && $value ? "{$name}-{$value}" : uniqid('radio-'));

    // Detect validation errors
    $hasError = $error !== null ? (bool) $error : $name && $errors->has($name);
    $errorMessage = $hasError ? ($error ?: $errors->first($name)) : null;

    // Build wrapper classes
    $wrapperClasses = Tabler::classes()
        ->add('form-check')
        ->add($inline ? 'form-check-inline' : '');

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

<div @if ($finalContainerClass) class="{{ $finalContainerClass }}" @endif data-tabler-radio>
    <label class="{{ $wrapperClasses }}">
        <input type="radio" id="{{ $id }}" @if ($name) name="{{ $name }}" @endif
            @if ($value !== null) value="{{ $value }}" @endif
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
