@props([
    'name' => null,
    'value' => null,
    'checked' => false,
    'type' => 'checkbox', // 'checkbox' or 'radio'
    'image' => null,
    'alt' => '',
])

<label {{ $attributes->merge(['class' => 'form-imagecheck']) }}>
    <input
        @if($name) name="{{ $name }}" @endif
        type="{{ $type }}"
        @if($value !== null) value="{{ $value }}" @endif
        class="form-imagecheck-input"
        @if($checked) checked @endif
    />
    <span class="form-imagecheck-figure">
        @if($image)
            <img src="{{ $image }}" alt="{{ $alt }}" class="form-imagecheck-image" />
        @else
            <span class="form-imagecheck-image">
                {{ $slot }}
            </span>
        @endif
    </span>
</label>
