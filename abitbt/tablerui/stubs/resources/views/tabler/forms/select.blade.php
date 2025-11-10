@props([
    'name' => null,
    'id' => null,
    'value' => null,
    'options' => [],
    'placeholder' => null,
    'label' => null,
    'help' => null,
    'error' => null,
    'required' => false,
    'disabled' => false,
    'multiple' => false,
    'size' => null,
    'wrapper' => true,
])

@php
    // Generate ID from name if not provided
    $selectId = $id ?? ($name ? str_replace(['[', ']'], ['-', ''], $name) : 'select-' . uniqid());

    // Build select classes
    $selectClasses = ['form-select'];

    // Add validation classes
    if ($error || $errors->has($name)) {
        $selectClasses[] = 'is-invalid';
    }

    // Get error message
    $errorMessage = $error ?? ($name ? $errors->first($name) : null);

    // Get old/current value
    $currentValue = old($name, $value);
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    {{-- Label --}}
    @if($label)
        <label for="{{ $selectId }}" class="form-label">
            {{ $label }}
            @if($required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif

    {{-- Help Text (above select) --}}
    @if($help)
        <small class="form-hint">{{ $help }}</small>
    @endif

    {{-- Select Element --}}
    <select
        id="{{ $selectId }}"
        @if($name) name="{{ $name }}{{ $multiple ? '[]' : '' }}" @endif
        @if($required) required @endif
        @if($disabled) disabled @endif
        @if($multiple) multiple @endif
        @if($size) size="{{ $size }}" @endif
        {{ $attributes->merge(['class' => implode(' ', $selectClasses)]) }}
    >
        {{-- Placeholder option --}}
        @if($placeholder && !$multiple)
            <option value="">{{ $placeholder }}</option>
        @endif

        {{-- Options from array --}}
        @if(!empty($options))
            @foreach($options as $optionValue => $optionLabel)
                @if(is_array($optionLabel))
                    {{-- Optgroup --}}
                    <optgroup label="{{ $optionValue }}">
                        @foreach($optionLabel as $subValue => $subLabel)
                            <option
                                value="{{ $subValue }}"
                                @if($multiple && is_array($currentValue) && in_array($subValue, $currentValue)) selected
                                @elseif(!$multiple && $subValue == $currentValue) selected
                                @endif
                            >{{ $subLabel }}</option>
                        @endforeach
                    </optgroup>
                @else
                    {{-- Regular option --}}
                    <option
                        value="{{ $optionValue }}"
                        @if($multiple && is_array($currentValue) && in_array($optionValue, $currentValue)) selected
                        @elseif(!$multiple && $optionValue == $currentValue) selected
                        @endif
                    >{{ $optionLabel }}</option>
                @endif
            @endforeach
        @endif

        {{-- Slot for custom options --}}
        {{ $slot }}
    </select>

    {{-- Error Message --}}
    @if($errorMessage)
        <div class="invalid-feedback d-block">{{ $errorMessage }}</div>
    @endif
@if($wrapper)
</div>
@endif
