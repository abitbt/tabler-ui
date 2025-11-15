---
description: Create complete Tabler Blade component with demo
argument-hint: [component-name] [sub-components?]
---

Create a comprehensive Tabler Blade component for **$1** following Flux-inspired patterns.

## Component Creation Steps:

### 1. Research & Analysis
- Read Tabler documentation for **$1** from `@docs/tabler.md`
- Check Quick Component Finder for complexity, JS requirements, and dependencies
- Read all relevant Tabler files:
  - Preview: `tabler/preview/dist/$1.html` or `tabler/preview/pages/$1.html`
  - Documentation: `tabler/docs/content/ui/components/$1.md`
  - Templates: `tabler/shared/includes/ui/$1*.html`
  - SCSS: `tabler/core/scss/ui/_$1.scss`
  - JS (if needed): `tabler/core/js/src/$1.js`

### 2. Component Architecture

**Main Component** (`tabler-blade/stubs/resources/views/tabler/$1/index.blade.php`):

```blade
@php
    // Extract namespaced attributes BEFORE @props
    $iconTrailing ??= $attributes->pluck('icon:trailing');
    $iconLeading ??= $attributes->pluck('icon:leading');
@endphp

@props([
    // Define props with sensible defaults
    'variant' => 'default',
    'size' => null,
    // Add component-specific props
])

@php
    use Abitbt\TablerBlade\Tabler;

    // Build classes using Tabler::classes()
    $classes = Tabler::classes()
        ->add('component-base-class')
        ->add(match ($variant) {
            'primary' => 'variant-primary',
            'secondary' => 'variant-secondary',
            default => '',
        })
        ->add(match ($size) {
            'sm' => 'size-sm',
            'lg' => 'size-lg',
            default => '',
        });
@endphp

<div {{ $attributes->class($classes) }} data-tabler-$1>
    {{ $slot }}
</div>
```

**Sub-components** (if $2 is provided):
- Create in `tabler-blade/stubs/resources/views/tabler/$1/` directory
- Examples: header.blade.php, body.blade.php, footer.blade.php, etc.
- Each should follow the same pattern with @props and proper attribute handling

### 3. Demo Page

Create `resources/views/demo/$1.blade.php`:

```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('demo.partials.head', ['title' => '$1 - Tabler Blade Components'])
    </head>
    <body>
        <div class="page">
            {{-- Demo Navbar --}}
            @include('demo.partials.demo-navbar')

            <div class="page-wrapper">
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <div class="page-pretitle">Tabler Blade Components</div>
                                <h2 class="page-title">$1</h2>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('demo.index') }}" class="btn">
                                    <tabler:icon name="arrow-left" />
                                    Back to home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <main id="content" class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            <!-- Component examples here -->
                        </div>
                    </div>
                </main>

                @include('demo.partials.footer')
            </div>
        </div>
    </body>
</html>
```

### 4. Routes

Add to `routes/web.php`:

```php
Route::prefix('components')->name('components.')->group(function () {
    // ... existing routes
    Route::get('/$1', function () {
        return view('demo.$1');
    })->name('$1');
});
```

### 5. Update Demo Index

Add link in `resources/views/demo/index.blade.php`:

```blade
<a href="{{ route('components.$1') }}" class="btn btn-outline-primary">
    <tabler:icon name="appropriate-icon" class="me-1" />
    $1
</a>
```

And add to navigation dropdown in Components menu.

## Key Patterns to Follow:

### ✅ Flux-Inspired Design
- Use custom tag syntax: `<tabler:$1>`
- Composable sub-components: `<tabler:$1.header>`, `<tabler:$1.body>`
- ClassBuilder for dynamic classes
- Attribute manipulation with pluck()

### ✅ Proper Structure
- Extract namespaced attributes BEFORE @props
- Use Tabler::classes() for class building
- Always merge attributes: `{{ $attributes->class($classes) }}`
- Import Tabler in PHP blocks: `use Abitbt\TablerBlade\Tabler;`

### ✅ Bootstrap Integration
- Use data-bs-* attributes for JavaScript features
- Document Bootstrap JS requirements
- Support dark mode via Tabler classes
- Include proper ARIA attributes

### ✅ Props Philosophy
- Only create props for complex logic or common patterns
- Let users use `class=""` for simple CSS additions
- Provide sensible defaults
- Use match() expressions for variants

## Sub-Components (if $2 provided):

Create these common sub-components:
- **header**: Component header section
- **body**: Main content area
- **footer**: Footer section
- **title**: Title element
- **subtitle**: Subtitle element
- **status**: Status indicator
- **actions**: Action buttons area

## Final Steps:

1. **Format code**: Run `vendor/bin/pint`
2. **Test rendering**: Use Laravel Tinker to verify component renders correctly
3. **Build assets**: Run `npm run build` if needed
4. **Test in browser**: Visit demo page and verify all variations work

## Notes:
- Follow existing patterns from button, modal, toast, and card components
- Include comprehensive examples in demo page
- Document all available props and CSS classes
- Test edge cases (empty slots, long content, missing props)
- Ensure accessibility (semantic HTML, ARIA labels, keyboard navigation)
