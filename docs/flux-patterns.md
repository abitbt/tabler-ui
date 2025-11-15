# Flux-Like Design Patterns in tabler-blade

> Modern component architecture inspired by Livewire Flux

## Table of Contents

- [Overview](#overview)
- [Quick Start](#quick-start)
- [Core Concepts](#core-concepts)
- [Custom Tag Syntax](#custom-tag-syntax)
- [ClassBuilder Pattern](#classbuilder-pattern)
- [Attribute Manipulation](#attribute-manipulation)
- [TablerManager](#tablermanager)
- [AssetManager](#assetmanager)
- [Building Components](#building-components)
- [Layouts](#layouts)
- [Examples](#examples)

---

## Overview

tabler-blade implements Flux-inspired design patterns that provide a powerful and flexible component system for building modern Laravel applications.

### Key Features

- **Custom tag syntax** - Clean `<tabler:button>` component syntax
- **Dynamic class building** - Powerful `Tabler::classes()` builder for conditional CSS
- **Enhanced attribute handling** - Extract, split, and forward attributes with ease
- **Automatic asset management** - Simple `@tablerStyles` and `@tablerScripts` directives
- **Extensible architecture** - Macros and helper methods for customization

---

## Quick Start

### Installation

The Flux patterns are built-in to tabler-blade. No additional installation required.

### Basic Usage

```blade
<tabler:button variant="primary">Click Me</tabler:button>
```

### Include Assets

```blade
<!DOCTYPE html>
<html>
<head>
    @tablerStyles {{-- Automatically includes Tabler CSS --}}
</head>
<body>
    <tabler:button variant="primary">Click Me</tabler:button>

    @tablerScripts {{-- Automatically includes Tabler JS --}}
</body>
</html>
```

---

## Core Concepts

### 1. Custom Tag Compiler

The `TablerTagCompiler` extends Laravel's Blade compiler to recognize `<tabler:*>` tags and compile them into proper component calls.

**What it does:**
- Transforms `<tabler:button>` into component rendering code
- Handles self-closing and opening/closing tags
- Supports namespaced attributes like `icon:leading="heart"`
- Maintains full compatibility with Blade features

### 2. ClassBuilder Pattern

Build complex CSS class strings dynamically:

```php
$classes = Tabler::classes()
    ->add('btn')
    ->add($pill ? 'btn-pill' : '')
    ->add(match ($variant) {
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        default => ''
    });

// Result: "btn btn-pill btn-primary"
```

### 3. TablerManager

Central manager providing helper methods:

```php
Tabler::classes()              // Create ClassBuilder
Tabler::splitAttributes()      // Split attributes by criteria
Tabler::forwardedAttributes()  // Extract props for forwarding
Tabler::applyInset()          // Apply inset spacing
Tabler::componentExists()      // Check if component exists
```

### 4. Attribute Macros

Enhanced ComponentAttributeBag with custom macros:

```blade
@php
$iconLeading = $attributes->pluck('icon:leading'); // Extract and remove
@endphp
```

---

## Custom Tag Syntax

### Basic Syntax

```blade
{{-- Self-closing --}}
<tabler:button variant="primary" />

{{-- With content --}}
<tabler:button variant="primary">
    Click Me
</tabler:button>

{{-- With namespaced attributes --}}
<tabler:button icon:leading="heart" icon:trailing="arrow-right">
    Like
</tabler:button>
```

### How It Works

```blade
<tabler:button variant="primary">Click</tabler:button>
```

Compiles to:

```php
@component('tabler::button', ['variant' => 'primary'])
    Click
@endcomponent
```

### Supported Features

- ✅ Self-closing tags
- ✅ Opening/closing tags
- ✅ Attribute binding with `:$variable`
- ✅ Namespaced attributes (`icon:leading`)
- ✅ `@class()` and `@style()` directives
- ✅ `{{ $attributes }}` spreading
- ✅ Named slots

---

## ClassBuilder Pattern

### Basic Usage

```blade
@php
$classes = Tabler::classes()
    ->add('btn')                      // Add static class
    ->add('btn-primary');              // Chain multiple adds

// Result: "btn btn-primary"
@endphp

<button {{ $attributes->class($classes) }}>
    {{ $slot }}
</button>
```

### Conditional Classes

```blade
@php
$classes = Tabler::classes()
    ->add('btn')
    ->add($pill ? 'btn-pill' : '')     // Conditional
    ->add($disabled ? 'disabled' : ''); // Another conditional
@endphp
```

### Match Expressions

```blade
@php
$classes = Tabler::classes()
    ->add('btn')
    ->add(match ($variant) {
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'success' => 'btn-success',
        default => ''
    })
    ->add(match ($size) {
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
        default => ''
    });
@endphp
```

### Array of Classes

```blade
@php
$classes = Tabler::classes()
    ->add(['btn', 'btn-primary', 'shadow-sm'])
    ->add($loading ? [
        '*:transition-opacity',
        '[&[disabled]>:not([data-loading-indicator])]:opacity-0',
    ] : []);
@endphp
```

---

## Attribute Manipulation

### The `pluck()` Macro

Extract and remove an attribute:

```blade
@php
// Before
$attributes = ['icon:leading' => 'heart', 'class' => 'btn', 'id' => 'my-btn'];

// Extract icon:leading (also removes it from $attributes)
$iconLeading = $attributes->pluck('icon:leading');

// After
// $iconLeading = 'heart'
// $attributes = ['class' => 'btn', 'id' => 'my-btn']
@endphp
```

**In components:**

```blade
@php
$iconTrailing ??= $attributes->pluck('icon:trailing');
$iconLeading ??= $attributes->pluck('icon:leading');
@endphp

@props([
    'variant' => 'default',
    'iconTrailing' => null,
    'iconLeading' => null,
])

{{-- $attributes no longer contains icon:* --}}
<button {{ $attributes }}>
    @if($iconLeading)
        <i class="ti ti-{{ $iconLeading }}"></i>
    @endif

    {{ $slot }}

    @if($iconTrailing)
        <i class="ti ti-{{ $iconTrailing }}"></i>
    @endif
</button>
```

### Split Attributes

Separate attributes by prefix or specific keys:

```php
// By prefix
[$styleAttrs, $otherAttrs] = Tabler::splitAttributes($attributes, ['class', 'style']);

// Style attrs: class, style
// Other attrs: everything else

// Usage
<div {{ $styleAttrs }}>
    <button {{ $otherAttrs }}>
        {{ $slot }}
    </button>
</div>
```

### Forward Attributes

Extract props while handling kebab-case to camelCase conversion:

```php
$props = Tabler::forwardedAttributes($attributes, ['variant', 'size', 'color']);

// Extracts: variant, size, color (and their kebab-case equivalents)
// Returns: ['variant' => 'primary', 'size' => 'lg', 'color' => 'blue']
```

### Attributes After Prefix

Extract all attributes after a prefix:

```php
$iconAttrs = Tabler::attributesAfter('icon:', $attributes);

// From: ['icon:class' => 'text-lg', 'icon:color' => 'red', 'class' => 'btn']
// Returns: new ComponentAttributeBag(['class' => 'text-lg', 'color' => 'red'])
// Removes from original $attributes
```

---

## TablerManager

The `TablerManager` class provides utility methods for component development.

### Accessing the Manager

```php
// Via facade
use Abitbt\TablerBlade\Tabler;

Tabler::classes();

// Via container
app('tabler')->classes();

// Via helper
tabler()->classes();
```

### Available Methods

#### `classes(?string|array $styles = null): ClassBuilder`

Create a new ClassBuilder instance:

```php
$builder = Tabler::classes();
$builder = Tabler::classes('btn btn-primary'); // With initial classes
```

#### `splitAttributes($attributes, array $by, bool $strict = false): array`

Split attributes into two bags:

```php
[$styleAttrs, $otherAttrs] = Tabler::splitAttributes($attributes, ['class', 'style']);

// $strict = false (default): prefix match (class, class-md, etc.)
// $strict = true: exact match only
```

#### `forwardedAttributes($attributes, array $propKeys): array`

Extract props for component forwarding:

```php
$props = Tabler::forwardedAttributes($attributes, ['variant', 'size']);
```

#### `applyInset($inset, string $top, string $right, string $bottom, string $left): string`

Apply inset spacing:

```php
$spacing = Tabler::applyInset('top right', '-mt-2', '-mr-2', '-mb-2', '-ml-2');
// Returns: "-mt-2 -mr-2"

$spacing = Tabler::applyInset(true, '-mt-2', '-mr-2', '-mb-2', '-ml-2');
// Returns: "-mt-2 -mr-2 -mb-2 -ml-2" (all sides)
```

---

## AssetManager

Automatically manage Tabler CSS and JavaScript assets.

### Blade Directives

```blade
<!DOCTYPE html>
<html>
<head>
    @tablerStyles
    {{-- Outputs: <link rel="stylesheet" href="CDN or local"> --}}
</head>
<body>
    {{-- Your content --}}

    @tablerScripts
    {{-- Outputs: <script src="CDN or local"></script> --}}
</body>
</html>
```

### Configuration

```php
// config/tabler.php
return [
    'version' => '1.0.0-beta21',  // Tabler version
    'use_cdn' => true,             // Use CDN (true) or local assets (false)
];
```

### Programmatic Access

```php
// Get styles HTML
$stylesHtml = Tabler::styles();

// Get scripts HTML
$scriptsHtml = Tabler::scripts();

// With options
$stylesHtml = Tabler::styles(['cdn' => false]);
```

---

## Building Components

### Component Structure

```blade
{{-- tabler/button/index.blade.php --}}

@php
// Step 1: Extract namespaced attributes BEFORE @props
$iconTrailing ??= $attributes->pluck('icon:trailing');
$iconLeading ??= $attributes->pluck('icon:leading');
@endphp

@props([
    // Step 2: Define props with defaults
    'variant' => 'default',
    'size' => null,
    'icon' => null,
    'iconTrailing' => null,
    'iconLeading' => null,
    'type' => 'button',
    'loading' => null,
])

@php
// Step 3: Process props and build classes
use Abitbt\TablerBlade\Tabler;

$iconLeading = $icon ?? $iconLeading;

$classes = Tabler::classes()
    ->add('btn')
    ->add(match ($variant) {
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        default => ''
    })
    ->add(match ($size) {
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
        default => ''
    });
@endphp

{{-- Step 4: Render with merged attributes --}}
<button {{ $attributes->class($classes)->merge(['type' => $type]) }}>
    @if($iconLeading)
        <i class="ti ti-{{ $iconLeading }}"></i>
    @endif

    {{ $slot }}

    @if($iconTrailing)
        <i class="ti ti-{{ $iconTrailing }}"></i>
    @endif
</button>
```

### Best Practices

1. **Extract namespaced attributes before @props**
```blade
@php
$iconLeading = $attributes->pluck('icon:leading');
@endphp

@props([...])
```

2. **Use Tabler::classes() for dynamic classes**
```blade
@php
$classes = Tabler::classes()
    ->add('btn')
    ->add($variant ? "btn-{$variant}" : '');
@endphp
```

3. **Always merge attributes**
```blade
<button {{ $attributes->class($classes) }}>
```

4. **Import Tabler in PHP blocks**
```blade
@php
use Abitbt\TablerBlade\Tabler;
@endphp
```

---

## Layouts

tabler-blade provides component-based layouts for building modern application UIs. Instead of traditional `@extends` directives, you compose layouts using reusable components.

### Available Layout Types

- **Sidebar Layout** - Vertical navigation with collapsible sidebar
- **Header Layout** - Horizontal top navigation bar
- **Combined Layout** - Sidebar + header for maximum flexibility

### Quick Example

```blade
<tabler:sidebar collapsible>
    <tabler:sidebar.nav>
        <tabler:sidebar.item icon="home" href="/" current>Dashboard</tabler:sidebar.item>
        <tabler:sidebar.item icon="users" href="/users">Users</tabler:sidebar.item>
    </tabler:sidebar.nav>
</tabler:sidebar>

<tabler:main container="container-xl">
    {{ $slot }}
</tabler:main>
```

### Learn More

For complete layout documentation including:
- Full layout examples and templates
- Component API reference
- Sidebar state management with Alpine.js
- Responsive design patterns
- Creating reusable layout components

See **[layout-templates.md](../.ai-docs/layout-templates.md)** for comprehensive documentation.

---

## Examples

### Button Component

See the full button component implementation in `tabler-blade/stubs/resources/views/tabler/button/index.blade.php`.

### Test Page

Visit `/test/button` to see all button variants and features in action.

### Creating New Components

Follow the button component pattern when creating new components:

1. Extract namespaced attributes before `@props`
2. Use `Tabler::classes()` for dynamic class building
3. Merge attributes with `$attributes->class($classes)`
4. Import `Tabler` in PHP blocks
5. Handle empty slots, loading states, and edge cases

---

## Additional Resources

- **layout-templates.md** - Complete layout documentation and templates
- **blade-components.md** - Standard Blade component patterns
- **package-development.md** - Package development guide

For questions or issues, visit the [GitHub repository](https://github.com/abitbt/tabler-blade).
