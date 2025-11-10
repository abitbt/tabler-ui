@props([
    'message' => null,
])

<div {{ $attributes->merge(['class' => 'valid-feedback']) }}>
    @if($message)
        {{ $message }}
    @else
        {{ $slot }}
    @endif
</div>
