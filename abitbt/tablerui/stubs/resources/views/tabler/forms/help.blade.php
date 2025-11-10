@props([
    'content' => null,
    'placement' => 'top',
])

<span
    {{ $attributes->merge(['class' => 'form-help']) }}
    data-bs-toggle="popover"
    data-bs-placement="{{ $placement }}"
    data-bs-html="true"
    data-bs-content="{{ $content ?? $slot }}"
>?</span>
