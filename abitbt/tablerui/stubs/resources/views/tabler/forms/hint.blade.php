@props([])

<small {{ $attributes->merge(['class' => 'form-hint']) }}>
    {{ $slot }}
</small>
