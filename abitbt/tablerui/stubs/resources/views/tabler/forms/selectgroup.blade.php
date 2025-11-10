@props([
    'pills' => false,
    'wrapper' => true,
])

@php
    $groupClasses = ['form-selectgroup'];

    if ($pills) {
        $groupClasses[] = 'form-selectgroup-pills';
    }
@endphp

@if($wrapper)
<div class="mb-3">
@endif
    <div {{ $attributes->merge(['class' => implode(' ', $groupClasses)]) }}>
        {{ $slot }}
    </div>
@if($wrapper)
</div>
@endif
