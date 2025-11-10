@props([
    'type' => 'button',
    'href' => null,
    'color' => null,
    'variant' => null, // 'outline', 'ghost'
    'size' => null, // 'sm', 'lg', 'xl'
    'shape' => null, // 'square', 'pill'
    'icon' => null,
    'iconEnd' => null,
    'iconOnly' => false,
    'loading' => false,
    'disabled' => false,
    'animate' => null, // 'rotate', 'shake', 'pulse', 'tada', 'move-start'
    'fullWidth' => false,
    'link' => false, // btn-link style
    'action' => false, // btn-action style
])

@php
    // Determine the HTML element to use
    $element = $href ? 'a' : 'button';

    // Build classes array
    $classes = ['btn'];

    // Add color class
    if ($color) {
        if ($variant === 'outline') {
            $classes[] = 'btn-outline-' . $color;
        } elseif ($variant === 'ghost') {
            $classes[] = 'btn-ghost-' . $color;
        } else {
            $classes[] = 'btn-' . $color;
        }
    } elseif ($variant === 'outline') {
        $classes[] = 'btn-outline';
    } elseif ($variant === 'ghost') {
        $classes[] = 'btn-ghost';
    }

    // Add size class
    if ($size && $size !== 'md') {
        $classes[] = 'btn-' . $size;
    }

    // Add shape class
    if ($shape) {
        $classes[] = 'btn-' . $shape;
    }

    // Add icon-only class
    if ($iconOnly) {
        $classes[] = 'btn-icon';
    }

    // Add loading class
    if ($loading) {
        $classes[] = 'btn-loading';
    }

    // Add disabled class for anchor tags
    if ($disabled && $href) {
        $classes[] = 'disabled';
    }

    // Add animation class
    if ($animate) {
        $classes[] = 'btn-animate-icon';
        if ($animate !== true) {
            $classes[] = 'btn-animate-icon-' . $animate;
        }
    }

    // Add full width class
    if ($fullWidth) {
        $classes[] = 'w-100';
    }

    // Add link style
    if ($link) {
        $classes[] = 'btn-link';
    }

    // Add action style
    if ($action) {
        $classes[] = 'btn-action';
    }

    // Build element attributes
    $elementAttributes = [];

    if ($element === 'a') {
        $elementAttributes['href'] = $href;
        $elementAttributes['role'] = 'button';
        if ($disabled) {
            $elementAttributes['aria-disabled'] = 'true';
            $elementAttributes['tabindex'] = '-1';
        }
    } else {
        $elementAttributes['type'] = $type;
        if ($disabled) {
            $elementAttributes['disabled'] = 'disabled';
        }
    }

    // Add ARIA label for icon-only buttons
    if ($iconOnly && !$attributes->has('aria-label')) {
        $iconName = $icon ?? $iconEnd ?? 'button';
        $elementAttributes['aria-label'] = ucfirst(str_replace('-', ' ', $iconName));
    }

    // Prepare icon names for blade-icons package
    $leadingIcon = $icon ? 'tabler-' . $icon : null;
    $trailingIcon = $iconEnd ? 'tabler-' . $iconEnd : null;
@endphp

<{{ $element }}
    {{ $attributes->merge(['class' => implode(' ', $classes)]) }}
    @foreach($elementAttributes as $attr => $value)
        @if(is_bool($value))
            {{ $attr }}
        @else
            {{ $attr }}="{{ $value }}"
        @endif
    @endforeach
>
    {{-- Leading icon or icon-only --}}
    @if($iconOnly)
        @if($leadingIcon || $trailingIcon)
            <x-dynamic-component :component="$leadingIcon ?: $trailingIcon" class="icon" />
        @endif
    @else
        {{-- Leading icon for regular buttons --}}
        @if($leadingIcon)
            <x-dynamic-component :component="$leadingIcon" class="icon" />
        @endif

        {{-- Button text/content --}}
        {{ $slot }}

        {{-- Trailing icon --}}
        @if($trailingIcon)
            <x-dynamic-component :component="$trailingIcon" class="icon" />
        @endif
    @endif
</{{ $element }}>
