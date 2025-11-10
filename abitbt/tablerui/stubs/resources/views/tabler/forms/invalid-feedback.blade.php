@props([
    'message' => null,
])

<div {{ $attributes->merge(['class' => 'invalid-feedback']) }}>
    @if($message)
        {{ $message }}
    @else
        {{ $slot }}
    @endif
</div>
