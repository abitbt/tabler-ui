@php
    // Extract namespaced attributes BEFORE @props
    $iconTrailing ??= $attributes->pluck('icon:trailing');
    $iconLeading ??= $attributes->pluck('icon:leading');
@endphp

@props([
    // Core attributes
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'type' => 'text',
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

    // Styling
    'size' => null, // 'sm', 'lg', null
    'variant' => null, // 'rounded', 'flush', 'light', 'dark', null

    // Icons
    'icon' => null,
    'iconTrailing' => null,
    'iconPosition' => 'leading',

    // Wrapper
    'containerClass' => 'mb-3',
])

@php
    use Abitbt\TablerBlade\Tabler;

    // Generate ID from name if not provided
    $id = $id ?? ($name ? $name : uniqid('input-'));

    // Detect validation errors
    $hasError = $error !== null ? (bool) $error : $name && $errors->has($name);
    $errorMessage = $hasError ? ($error ?: $errors->first($name)) : null;

    // Build input classes
    $inputClasses = Tabler::classes()
        ->add('form-control')
        ->add(
            match ($size) {
                'sm' => 'form-control-sm',
                'lg' => 'form-control-lg',
                default => '',
            },
        )
        ->add(
            match ($variant) {
                'rounded' => 'form-control-rounded',
                'flush' => 'form-control-flush',
                'light' => 'form-control-light',
                'dark' => 'form-control-dark',
                default => '',
            },
        )
        ->add($hasError ? 'is-invalid' : '')
        ->add($attributes->pluck('class:input'));

    // Build label classes
    $labelClasses = Tabler::classes()
        ->add('form-label')
        ->add($required ? 'required' : '');

    // Determine if we need icon wrapper
    $hasIcon = $icon || $iconLeading || $iconTrailing;
    $leadingIcon = $iconLeading ?? ($iconPosition === 'leading' ? $icon : null);
    $trailingIcon = $iconTrailing ?? ($iconPosition === 'trailing' ? $icon : null);
@endphp

<div class="{{ $containerClass }}" data-tabler-input>
    @if ($label)
        <label for="{{ $id }}" class="{{ $labelClasses }}">
            {{ $label }}
        </label>
    @endif

    @if ($hasIcon)
        <div class="input-icon">
            @if ($leadingIcon)
                <span class="input-icon-addon">
                    @if (is_string($leadingIcon))
                        <tabler:icon :name="$leadingIcon" />
                    @else
                        {{ $leadingIcon }}
                    @endif
                </span>
            @endif

            <input type="{{ $type }}" id="{{ $id }}"
                @if ($name) name="{{ $name }}" @endif
                @if ($value !== null) value="{{ $value }}" @endif
                @if ($placeholder) placeholder="{{ $placeholder }}" @endif
                @if ($required) required @endif @if ($disabled) disabled @endif
                @if ($readonly) readonly @endif
                @if ($hasError) aria-invalid="true" @endif
                @if ($required) aria-required="true" @endif
                @if ($errorMessage) aria-describedby="{{ $id }}-error" @endif
                {{ $attributes->except(['class', 'class:input', 'icon:leading', 'icon:trailing', 'label', 'error', 'help', 'containerClass'])->class($inputClasses) }}>

            @if ($trailingIcon)
                <span class="input-icon-addon">
                    @if (is_string($trailingIcon))
                        <tabler:icon :name="$trailingIcon" />
                    @else
                        {{ $trailingIcon }}
                    @endif
                </span>
            @endif
        </div>
    @else
        <input type="{{ $type }}" id="{{ $id }}"
            @if ($name) name="{{ $name }}" @endif
            @if ($value !== null) value="{{ $value }}" @endif
            @if ($placeholder) placeholder="{{ $placeholder }}" @endif
            @if ($required) required @endif @if ($disabled) disabled @endif
            @if ($readonly) readonly @endif
            @if ($hasError) aria-invalid="true" @endif
            @if ($required) aria-required="true" @endif
            @if ($errorMessage) aria-describedby="{{ $id }}-error" @endif
            {{ $attributes->except(['class', 'class:input', 'icon:leading', 'icon:trailing', 'label', 'error', 'help', 'containerClass'])->class($inputClasses) }}>
    @endif

    @if ($hasError && $errorMessage)
        <div id="{{ $id }}-error" class="invalid-feedback">
            {{ $errorMessage }}
        </div>
    @endif

    @if ($help)
        <small class="form-hint">{{ $help }}</small>
    @endif
</div>
