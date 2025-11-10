@props([
    'prepend' => null,
    'append' => null,
    'flat' => false,
])

@php
    $groupClasses = ['input-group'];

    if ($flat) {
        $groupClasses[] = 'input-group-flat';
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $groupClasses)]) }}>
    @if($prepend)
        <span class="input-group-text">{{ $prepend }}</span>
    @endif

    {{ $slot }}

    @if($append)
        <span class="input-group-text">{{ $append }}</span>
    @endif
</div>
