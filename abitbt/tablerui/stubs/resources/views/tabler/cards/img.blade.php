@props([
    'src' => null,
    'alt' => '',
    'position' => 'top', // 'top', 'bottom', 'start', 'end'
    'responsive' => false,
    'ratio' => null, // '21x9', '16x9', '4x3', '1x1', etc.
])

@php
    $imgClasses = [];

    if ($responsive && $ratio) {
        $imgClasses[] = 'img-responsive';
        $imgClasses[] = 'img-responsive-' . $ratio;
    }

    // Position-specific classes
    if ($position === 'top') {
        $imgClasses[] = 'card-img-top';
    } elseif ($position === 'bottom') {
        $imgClasses[] = 'card-img-bottom';
    } elseif ($position === 'start') {
        $imgClasses[] = 'card-img-start';
    } elseif ($position === 'end') {
        $imgClasses[] = 'card-img-end';
    }
@endphp

@if($src)
    @if($responsive && $ratio)
<div {{ $attributes->merge(['class' => implode(' ', $imgClasses)]) }} style="background-image: url('{{ $src }}')"></div>
    @else
<img src="{{ $src }}" alt="{{ $alt }}" {{ $attributes->merge(['class' => implode(' ', $imgClasses)]) }} />
    @endif
@endif
