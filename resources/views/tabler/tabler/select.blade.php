@props([
    // Core attributes
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'id' => null,
    'value' => null,

    // UI elements
    'label' => null,
    'placeholder' => null,
    'help' => null,

    // Options
    'options' => [],

    // State
    'required' => false,
    'disabled' => false,
    'error' => null,

    // Select specific
    'multiple' => false,
    'size' => null,

    // Wrapper
    'containerClass' => 'mb-3',
])

@php
    use Abitbt\TablerBlade\Tabler;

    // Generate ID from name if not provided
    $id = $id ?? ($name ? $name : uniqid('select-'));

    // Detect validation errors
    $hasError = $error !== null ? (bool) $error : $name && $errors->has($name);
    $errorMessage = $hasError ? ($error ?: $errors->first($name)) : null;

    // Build select classes
    $selectClasses = Tabler::classes()
        ->add('form-select')
        ->add($hasError ? 'is-invalid' : '')
        ->add($attributes->pluck('class:select'));

    // Build label classes
    $labelClasses = Tabler::classes()
        ->add('form-label')
        ->add($required ? 'required' : '');
@endphp

<div class="{{ $containerClass }}" data-tabler-select>
    @if ($label)
        <label for="{{ $id }}" class="{{ $labelClasses }}">
            {{ $label }}
        </label>
    @endif

    <select id="{{ $id }}" @if ($name) name="{{ $name }}" @endif
        @if ($required) required @endif @if ($disabled) disabled @endif
        @if ($multiple) multiple @endif
        @if ($size) size="{{ $size }}" @endif
        @if ($hasError) aria-invalid="true" @endif
        @if ($required) aria-required="true" @endif
        @if ($errorMessage) aria-describedby="{{ $id }}-error" @endif
        {{ $attributes->except(['class', 'class:select', 'label', 'error', 'help', 'containerClass', 'options'])->class($selectClasses) }}>
        @if ($placeholder)
            <option value="">{{ $placeholder }}</option>
        @endif

        @if ($slot->isNotEmpty())
            {{ $slot }}
        @else
            @foreach ($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" @if ($value == $optionValue) selected @endif>
                    {{ $optionLabel }}
                </option>
            @endforeach
        @endif
    </select>

    @if ($hasError && $errorMessage)
        <div id="{{ $id }}-error" class="invalid-feedback">
            {{ $errorMessage }}
        </div>
    @endif

    @if ($help)
        <small class="form-hint">{{ $help }}</small>
    @endif
</div>
