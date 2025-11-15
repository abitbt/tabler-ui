---
description: Update demo navigation with new component link
argument-hint: [component-name] [icon-name]
---

Add **$1** component to the demo navigation system.

## Update Locations:

### 1. Demo Index Page (`resources/views/demo/index.blade.php`)

Add button in UI Components section:

```blade
<a href="{{ route('components.$1') }}" class="btn btn-outline-primary">
    <tabler:icon name="$2" class="me-1" />
    $1
</a>
```

### 2. Navigation Items Partial (`resources/views/demo/partials/demo-nav-items.blade.php`)

Add to Components dropdown menu (inside the `<div class="dropdown-menu-column">`):

```blade
<a class="dropdown-item" href="{{ route('components.$1') }}">
    <tabler:icon name="$2" class="dropdown-item-icon" />
    $1
</a>
```

**Note**: This partial is shared across all demo pages for consistent navigation with active state detection.

### 3. Routes (`routes/web.php`)

Add to components route group:

```php
Route::get('/$1', function () {
    return view('demo.$1');
})->name('$1');
```

## Icon Suggestions:

Common Tabler icons for components:
- **Modal/Dialog**: square, layout, window
- **Toast/Alert**: message-circle, bell, alert-circle
- **Card**: layout-cards, credit-card, id
- **Form**: forms, input, edit
- **Button**: click, pointer, hand
- **Table**: table, list, database
- **Navigation**: menu, compass, map
- **Badge**: award, star, flag
- **Avatar**: user, users, user-circle
- **Dropdown**: chevron-down, select, menu-2
- **Tabs**: layout-navbar, columns, sections

Use `$2` parameter or suggest appropriate icon based on component type.

## After Update:

1. **Format code**: Run `vendor/bin/pint`
2. **Test navigation**: Visit demo index and verify link works
3. **Test route**: Visit `/components/$1` and verify page loads
4. **Check mobile**: Verify dropdown works on mobile
5. **Verify icon**: Ensure icon displays correctly

This ensures the new component is discoverable in the demo application.
