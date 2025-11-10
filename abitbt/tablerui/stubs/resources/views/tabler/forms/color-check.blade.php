@props([
    'name' => null,
    'value' => null,
    'color' => 'primary',
    'checked' => false,
    'type' => 'radio', // 'radio' or 'checkbox'
    'rounded' => false,
])

@php
    $colorClass = 'bg-' . $color;
@endphp

<label {{ $attributes->merge(['class' => 'form-colorinput' . ($rounded ? ' form-colorinput-rounded' : '')]) }}>
    <input
        @if($name) name="{{ $name }}" @endif
        type="{{ $type }}"
        @if($value !== null) value="{{ $value }}" @endif
        class="form-colorinput-input"
        @if($checked) checked @endif
    />
    <span class="form-colorinput-color {{ $colorClass }}"></span>
</label>
