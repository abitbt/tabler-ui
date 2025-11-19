@blaze

@php
    use Abitbt\TablerBlade\Tabler;

    // Extract all props with defaults
    $type = $attributes->get('type', 'info');
    $title = $attributes->get('title') ?? $attributes->get('alert:title');
    $icon = $attributes->get('icon') ?? $attributes->get('alert:icon');
    $dismissible = $attributes->get('dismissible', false);
    $important = $attributes->get('important', false);
    $as = $attributes->get('as', 'div');

    // Auto-select default icon based on type if no icon specified
    $iconName = $icon;
    if (!$iconName) {
        $iconName = match ($type) {
            'success' => 'check',
            'warning' => 'alert-triangle',
            'danger' => 'alert-circle',
            'info' => 'info-circle',
            default => null,
        };
    }

    // Remove props from attributes to avoid duplication
    $attributes = $attributes->except([
        'type',
        'title',
        'icon',
        'dismissible',
        'important',
        'as',
        'alert:title',
        'alert:icon',
    ]);

    // Build CSS classes
    $classes = Tabler::classes()
        ->add('alert')
        ->add("alert-{$type}")
        ->add($important ? 'alert-important' : '')
        ->add($dismissible ? 'alert-dismissible' : '');

    $attributes = $attributes->class($classes);
    $attributes = $attributes->merge(['role' => 'alert']);

    // Determine if we have complex content (title + description)
    $hasTitle = !empty($title);
    $hasIcon = !empty($iconName);
@endphp

<{{ $as }} {{ $attributes }} data-tabler-alert>
    @if ($hasIcon)
        <div class="alert-icon">
            <tabler:icon :name="$iconName" class="alert-icon" />
        </div>
    @endif

    @if ($hasTitle)
        <div>
            <h4 class="alert-heading">{{ $title }}</h4>
            @if ($slot->isNotEmpty())
                <div class="alert-description">
                    {{ $slot }}
                </div>
            @endif
        </div>
    @else
        {{ $slot }}
    @endif

    @if ($dismissible)
        <a class="btn-close{{ $important ? ' btn-close-white' : '' }}" data-bs-dismiss="alert" aria-label="close"></a>
    @endif
    </{{ $as }}>
