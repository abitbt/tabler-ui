@props([
    'name' => null,
    'value' => null,
    'checked' => false,
    'type' => 'radio', // 'radio' or 'checkbox'
    'text' => null,
    'icon' => null,
])

@php
    $iconComponent = $icon ? 'tabler-' . $icon : null;
@endphp

<label {{ $attributes->merge(['class' => 'form-selectgroup-item']) }}>
    <input
        type="{{ $type }}"
        @if($name) name="{{ $name }}" @endif
        @if($value !== null) value="{{ $value }}" @endif
        class="form-selectgroup-input"
        @if($checked) checked @endif
    />
    <span class="form-selectgroup-label">
        @if($iconComponent)
            <x-dynamic-component :component="$iconComponent" class="me-1" />
        @endif
        @if($text)
            {{ $text }}
        @else
            {{ $slot }}
        @endif
    </span>
</label>
