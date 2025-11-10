@props([
    'value' => 0,
    'color' => 'primary',
    'size' => 'sm', // 'sm' is typical for card progress
])

@php
    $progressClasses = ['progress', 'card-progress'];

    if ($size) {
        $progressClasses[] = 'progress-' . $size;
    }

    $barClasses = ['progress-bar'];

    if ($color) {
        $barClasses[] = 'bg-' . $color;
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $progressClasses)]) }}>
    <div class="{{ implode(' ', $barClasses) }}" style="width: {{ $value }}%" role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="100">
        @if($slot->isNotEmpty())
            <span>{{ $slot }}</span>
        @endif
    </div>
</div>
