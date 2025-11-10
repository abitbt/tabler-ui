@props([])

<div {{ $attributes->merge(['class' => 'card-subtitle']) }}>
    {{ $slot }}
</div>
