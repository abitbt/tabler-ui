@props([
    'for' => null,
    'required' => false,
    'description' => null,
])

<label {{ $attributes->merge(['class' => 'form-label' . ($required ? ' required' : '')]) }} @if($for) for="{{ $for }}" @endif>
    {{ $slot }}
    @if($required && (!$attributes->has('class') || !str_contains($attributes->get('class', ''), 'required')))
        <span class="text-danger">*</span>
    @endif
    @if($description)
        <span class="form-label-description">{{ $description }}</span>
    @endif
</label>
