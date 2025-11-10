@props([
    'icon' => null,
    'color' => 'primary',
    'large' => false,
])

@php
    $stampClasses = ['card-stamp'];

    if ($large) {
        $stampClasses[] = 'card-stamp-lg';
    }

    $iconComponent = $icon ? 'tabler-' . $icon : null;
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $stampClasses)]) }}>
    <div class="card-stamp-icon bg-{{ $color }}">
        @if($iconComponent)
            <x-dynamic-component :component="$iconComponent" />
        @else
            {{ $slot }}
        @endif
    </div>
</div>
