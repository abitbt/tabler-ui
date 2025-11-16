# Components to Build

This document lists all custom components that need to be created for the Flux to Tabler migration.

## Overview

**Total Components to Build:** 12
**Completed:** 7 ✅
**Remaining:** 5
- **High Priority:** 4 of 4 ✅ COMPLETE
- **Medium Priority:** 0 of 5
- **Low Priority:** 3 of 3 ✅ COMPLETE

---

## High Priority Components ✅ COMPLETE

These components are essential for the migration as they're used extensively throughout authentication and settings.

### 1. Input Component ✅ COMPLETE
- **Location:** `tabler-blade/stubs/resources/views/tabler/input.blade.php`
- **Status:** ✅ Built and tested
- **Purpose:** Text, email, password, and other input types
- **Usage Count:** ~15-20 instances
- **Used In:** Login, Register, Password Reset, Settings
- **Required Props:**
  - label (optional)
  - type (default: text)
  - name
  - id (optional, defaults to name)
  - placeholder (optional)
  - error (optional, integrates with Laravel validation)
  - Livewire wire:model support
- **Features Needed:**
  - Label rendering
  - Error message display
  - Invalid state styling
  - Icon support (leading/trailing - optional)
  - Size variants (sm, lg - optional)

### 2. Checkbox Component ✅ COMPLETE
- **Location:** `tabler-blade/stubs/resources/views/tabler/checkbox.blade.php`
- **Status:** ✅ Built and tested
- **Purpose:** Checkbox inputs with labels
- **Usage Count:** ~2-3 instances
- **Used In:** Login (remember me), Settings
- **Features Implemented:**
  - ✅ Label association
  - ✅ Description text support
  - ✅ Inline variant
  - ✅ Livewire wire:model support
  - ✅ Laravel validation integration
  - ✅ Help text support

### 3. Radio Component ✅ COMPLETE
- **Location:** `tabler-blade/stubs/resources/views/tabler/radio.blade.php`
- **Status:** ✅ Built and tested
- **Purpose:** Radio button inputs
- **Usage Count:** ~3-5 instances
- **Used In:** Appearance settings
- **Features Implemented:**
  - ✅ Label association
  - ✅ Description text support
  - ✅ Inline variant
  - ✅ Livewire wire:model support
  - ✅ Laravel validation integration
  - ✅ Help text support

### 4. Radio Group Component ✅ COMPLETE
- **Location:** `tabler-blade/stubs/resources/views/tabler/radio-group.blade.php`
- **Status:** ✅ Built and tested
- **Purpose:** Wrapper for radio buttons with shared name
- **Usage Count:** 1 instance
- **Used In:** Appearance settings
- **Features Implemented:**
  - ✅ Group label
  - ✅ Error display for group
  - ✅ Vertical/horizontal layout options (inline prop)
  - ✅ Integration with individual radio components
  - ✅ Help text support
  - ✅ Required field indicator

---

## Medium Priority Components

These components enhance functionality but may have temporary workarounds.

### 5. Field Component
- **Location:** `resources/views/components/tabler/field.blade.php`
- **Purpose:** Form field wrapper with label, input, and error display
- **Usage Count:** Could replace individual input implementations
- **Used In:** All forms (optional refactor)
- **Required Props:**
  - label
  - name
  - error (optional)
  - description (optional)
- **Features Needed:**
  - Consistent field spacing
  - Label rendering
  - Error message display
  - Help text support
  - Required indicator

### 6. Dropdown Component
- **Location:** `resources/views/components/tabler/dropdown.blade.php`
- **Purpose:** Dropdown menu trigger and content
- **Usage Count:** ~3-5 instances
- **Used In:** Profile menu, navigation
- **Required Props:**
  - trigger (slot)
  - position (optional: bottom, top, left, right)
  - align (optional: start, end)
- **Features Needed:**
  - Click to open/close
  - Click outside to close
  - Keyboard navigation
  - Alpine.js or Bootstrap implementation

### 7. Menu Component
- **Location:** `resources/views/components/tabler/menu.blade.php`
- **Purpose:** Dropdown menu container
- **Usage Count:** ~3-5 instances
- **Used In:** Profile dropdown, navigation menus
- **Required Props:**
  - None (container only)
- **Features Needed:**
  - Works with dropdown
  - Supports menu items
  - Supports separators
  - Supports menu groups

### 8. Menu Item Component
- **Location:** `resources/views/components/tabler/menu-item.blade.php`
- **Purpose:** Individual menu item
- **Usage Count:** ~10-15 instances
- **Used In:** All dropdown menus
- **Required Props:**
  - href (optional)
  - icon (optional)
  - active (optional)
- **Features Needed:**
  - Link or button rendering
  - Icon support
  - Active state
  - Danger variant for destructive actions

### 9. Tooltip Component
- **Location:** `resources/views/components/tabler/tooltip.blade.php`
- **Purpose:** Tooltip wrapper for elements
- **Usage Count:** 1-2 instances
- **Used In:** Navigation items
- **Required Props:**
  - content
  - position (optional: top, bottom, left, right)
- **Features Needed:**
  - Hover trigger
  - Configurable position
  - Can use Bootstrap tooltips
  - Alpine.js alternative

---

## Low Priority Components ✅ COMPLETE

These components are not currently used but have been built for future use.

### 10. Select Component ✅ COMPLETE
- **Location:** `tabler-blade/stubs/resources/views/tabler/select.blade.php`
- **Status:** ✅ Built
- **Purpose:** Select dropdown for forms
- **Usage Count:** 0 (not currently used)
- **Used In:** Future forms
- **Features Implemented:**
  - ✅ Label rendering
  - ✅ Options rendering (array or slot)
  - ✅ Selected state
  - ✅ Error display
  - ✅ Multiple select support
  - ✅ Livewire wire:model support
  - ✅ Placeholder support

### 11. Textarea Component ✅ COMPLETE
- **Location:** `tabler-blade/stubs/resources/views/tabler/textarea.blade.php`
- **Status:** ✅ Built
- **Purpose:** Multi-line text input
- **Usage Count:** 0 (not currently used)
- **Used In:** Future forms
- **Features Implemented:**
  - ✅ Label rendering
  - ✅ Error display
  - ✅ Rows/cols support
  - ✅ Livewire wire:model support
  - ✅ Help text support
  - ✅ Value or slot content

### 12. Callout Component ✅ COMPLETE
- **Location:** `tabler-blade/stubs/resources/views/tabler/callout.blade.php`
- **Status:** ✅ Built
- **Purpose:** Alert/notification callout boxes
- **Usage Count:** 2-3 instances
- **Used In:** Two-factor settings, recovery codes
- **Features Implemented:**
  - ✅ Color variants (info, warning, danger, success)
  - ✅ Icon support
  - ✅ Title and body content
  - ✅ Dismissible support
  - ✅ Bootstrap alert integration

---

## Component Dependencies

### Required for All Form Components
- Tabler CSS framework (already included)
- Laravel Blade component system
- Integration with Laravel validation errors
- Livewire wire:model support

### Required for Interactive Components
- Alpine.js (included with Livewire)
- Bootstrap JavaScript (included with Tabler)
- Tabler JavaScript utilities

### Optional Enhancements
- Custom JavaScript for advanced interactions
- Icons from @tabler/icons
- Animation utilities

---

## Build Order Recommendation

### Phase 1: Critical Form Components ✅ COMPLETE
1. ✅ Input
2. ✅ Checkbox
3. ✅ Radio
4. ✅ Radio Group

**Status:** ✅ All critical form components built and tested

### Phase 2: Layout Enhancement Components ⏳ OPTIONAL
5. ❌ Dropdown (can use Bootstrap dropdowns)
6. ❌ Menu (can use Bootstrap dropdowns)
7. ❌ Menu Item (can use Bootstrap dropdowns)

**Status:** Not needed for migration - Bootstrap provides these

### Phase 3: Polish Components 🔨 PARTIAL
8. ❌ Tooltip (can use Bootstrap tooltips)
9. ✅ Callout
10. ❌ Field (optional - individual components work fine)

**Status:** Callout complete, others optional

### Phase 4: Future-Proofing ✅ COMPLETE
11. ✅ Select
12. ✅ Textarea

**Status:** ✅ Built for future use

---

## Migration Readiness: 100% ✅

All critical components for the Flux to Tabler migration are now complete:
- ✅ **4/4 High Priority** components (Input, Checkbox, Radio, Radio Group)
- ✅ **3/3 Low Priority** components (Select, Textarea, Callout)
- ⏸️ **0/5 Medium Priority** components (Optional - can use Bootstrap or build later)

**You can now proceed with Phase 3 & 4 of the migration plan!**

---

## Component Architecture Guidelines

### All Components Should:
1. Follow Tabler Blade naming conventions
2. Use `@props` directive for type hints
3. Support attribute merging with `$attributes`
4. Integrate with Laravel validation errors
5. Support Livewire wire:model when applicable
6. Use Tabler CSS classes consistently
7. Be accessible (ARIA attributes)
8. Have sensible defaults

### Form Components Should:
1. Auto-generate IDs from name if not provided
2. Display validation errors automatically
3. Support `wire:model` attribute
4. Use Tabler form classes (`.form-control`, `.form-check`, etc.)
5. Support label association
6. Handle disabled and readonly states

### Interactive Components Should:
1. Use Alpine.js for client-side interactivity
2. Support keyboard navigation
3. Handle focus management
4. Support ARIA attributes for accessibility
5. Clean up event listeners on destroy

---

## Testing Checklist

Each component should be tested for:
- Visual appearance matches Tabler design
- Props work as expected
- Validation errors display correctly
- Livewire wire:model works
- Accessible via keyboard
- Works in light and dark modes
- Responsive on mobile devices
- No console errors or warnings
