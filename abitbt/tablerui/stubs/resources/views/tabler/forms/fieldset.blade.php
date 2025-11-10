@props([
    'legend' => null,
])

<fieldset {{ $attributes->merge(['class' => 'form-fieldset']) }}>
    @if($legend)
        <legend>{{ $legend }}</legend>
    @endif

    {{ $slot }}
</fieldset>
