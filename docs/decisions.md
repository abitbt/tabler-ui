# Architectural Decisions

> Key design decisions for the Tabler UI Laravel Blade components

## 1. Minimal Props Philosophy

**Decision:** Remove props that are just direct CSS class mappings.

**Rationale:**
- Reduces maintenance burden (no need to update components when Tabler adds new classes)
- Increases flexibility (users can use any Tabler class via `class=""` attribute)
- Better learning curve (users learn Tabler CSS directly)
- Less abstraction overhead

**Keep Props For:**
- ✅ Behavioral changes (e.g., `link` changes `<div>` to `<a>`)
- ✅ Complex logic (e.g., `variant` + `color` = multiple class patterns)
- ✅ Common patterns with validation (e.g., `padding` limited to sm/md/lg)
- ✅ Frequently used states (e.g., `active`, `disabled`, `loading`)

**Remove Props For:**
- ❌ Direct CSS mappings (e.g., `bgColor` → `bg-{color}`)
- ❌ Rarely used features (e.g., `rotateStart`, `rotateEnd`)
- ❌ Open-ended values (e.g., all color variants)

**Examples:**

```blade
<!-- Before (over-abstracted) -->
<x-tabler::cards.card bgColor="primary" textColor="white" stacked>

<!-- After (clean & flexible) -->
<x-tabler::cards.card class="bg-primary text-white card-stacked">
```

## 2. Component Consolidation

**Decision:** Merge tiny single-purpose components into parent components via named slots.

**Examples:**
- ❌ Deleted: `cards/title.blade.php`, `cards/subtitle.blade.php`
- ✅ Merged into: `cards/header.blade.php` with `<x-slot:title>` and `<x-slot:subtitle>`

**Rationale:**
- Reduces component count
- Simplifies API (one component instead of three)
- Maintains flexibility through slots
- Still backward compatible with raw content

## 3. Comprehensive CSS Class Documentation

**Decision:** Document all available Tabler CSS classes directly in component comments.

**Structure:**
```blade
{{--
    Component Name

    @prop definitions...

    Available CSS Classes (use via class="" attribute):

    Category:
    - class-name         - Description

    Usage Examples:
    <x-tabler::component class="...">
--}}
```

**Rationale:**
- Self-documenting components
- IDE autocomplete/hover support
- No need for external documentation
- Teaches Tabler CSS patterns
- Provides quick reference

## 4. Component Documentation Standards

**Every component includes:**
1. Component description
2. `@prop` definitions with types and defaults
3. `@slot` definitions
4. Available CSS classes section (organized by category)
5. Multiple usage examples (basic → advanced)

**Benefits:**
- Consistent developer experience
- Easy onboarding
- Reduced support questions
- Better IDE integration

## 5. Props Kept in Final Components

### Card Component (4 props):
- `padding` - Common pattern with validation
- `active` / `inactive` - Frequently used states
- `link` - Changes element type

### Button Component (13 props):
- `type`, `href` - Behavioral
- `color`, `variant` - Complex logic (combines multiple classes)
- `size`, `shape` - Common patterns
- `icon`, `iconEnd`, `iconOnly` - Complex rendering logic
- `loading` - Complex state (spinner + disabled)
- `disabled` - Common state
- `animate` - Adds multiple classes dynamically
- `fullWidth` - Very common pattern

### Form Components:
- `name`, `id`, `value`, `label`, `help`, `error` - Core form functionality
- `required`, `disabled`, `readonly` - Standard HTML attributes
- `size` - Common pattern with validation
- `wrapper` - Layout control
- Component-specific props (e.g., `icon` for input, `options` for select)

## 6. File Organization

**Kept:**
- All utility components (hint, help, label, feedback) - useful standalone
- All specialized components until usage review

**Deleted:**
- Redundant components merged into parents

## 7. Code Quality Standards

**Applied:**
- Laravel Pint formatting
- Consistent PHP comment style
- Clear variable names
- Section headers in PHP blocks
- Comprehensive inline documentation

## Summary

These decisions create a **lean, flexible, and maintainable** component library that:
- Respects Tabler's CSS-first approach
- Reduces maintenance overhead
- Provides excellent developer experience
- Scales with Tabler updates
- Balances abstraction with flexibility
