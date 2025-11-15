---
description: Analyze Tabler component structure and patterns
argument-hint: [component-name]
---

Analyze the **$1** component from Tabler UI to understand its structure, patterns, and implementation details.

## Analysis Process:

### 1. Component Discovery
- Search for **$1** in `@docs/tabler.md` Quick Component Finder
- Note complexity level (⭐ Easy, ⭐⭐ Medium, ⭐⭐⭐ Hard)
- Check JavaScript requirements and dependencies
- Verify Tabler status (✓ Available or ⚠️ SCSS Only)

### 2. Read All Reference Files

**Documentation:**
- Read `tabler/docs/content/ui/components/$1.md`
- Extract key features, variations, and usage patterns
- Note any special requirements or considerations

**Preview Pages:**
- Read `tabler/preview/pages/$1.html`
- Understand real-world usage examples
- Identify all variations shown

**Templates & Includes:**
- Read `tabler/shared/includes/ui/$1*.html`
- Check `tabler/shared/includes/parts/$1/` for sub-components
- Use Glob to find all related files: `tabler/shared/includes/**/*$1*.html`
- Note reusable patterns and component composition

**Styling:**
- Read `tabler/core/scss/ui/_$1.scss`
- Extract CSS class structure
- Understand theming and customization options

**JavaScript (if applicable):**
- Read `tabler/core/js/src/$1.js`
- Understand initialization and event handling
- Note Bootstrap dependencies

**FluxUI Patterns:**
- Read `vendor/livewire/flux/stubs/resources/views/$1`
- Identify common patterns and features

### 3. Structural Analysis

Provide detailed analysis including:

**HTML Structure:**
```html
<!-- Base structure with all wrapper elements -->
<!-- Note required classes and data attributes -->
<!-- Identify optional elements and variations -->
```

**CSS Classes:**
- Base classes (always required)
- Modifier classes (variants, sizes, states)
- Utility classes (spacing, colors, etc.)
- Responsive classes (breakpoint-specific)

**Props Mapping:**
Suggest which features should become component props vs. CSS classes:
- ✅ Props: Complex logic, common patterns, state management
- ❌ Direct CSS: Simple styling, rarely used, open-ended values

**Sub-components:**
List potential sub-components:
- Component parts that appear frequently
- Sections that benefit from composition
- Reusable patterns across variations

**JavaScript Requirements:**
- Bootstrap JS features (data-bs-* attributes)
- Custom Tabler JS initialization
- Third-party library dependencies
- Alpine.js opportunities

### 4. Implementation Recommendations

**Component Architecture:**
```
$1/
  ├── index.blade.php          # Main wrapper
  ├── header.blade.php         # Header section (if applicable)
  ├── body.blade.php           # Content area
  ├── footer.blade.php         # Footer section (if applicable)
  └── [additional-parts].blade.php
```

**Suggested Props:**
```php
@props([
    'variant' => 'default',    // Based on common variations
    'size' => null,            // If size variations exist
    'color' => null,           // If color variations exist
    // Component-specific props
])
```

**CSS Class Strategy:**
Document all available CSS classes users can apply directly:
- Sizing classes
- Color variants
- State modifiers
- Layout options

### 5. Comparison with Existing Components

Compare with similar components we've created:
- **Button**: For action elements
- **Modal**: For overlay patterns
- **Toast**: For notification patterns
- **Card**: For container patterns

Identify shared patterns and reusable approaches.

### 6. Demo Page Planning

Suggest demo page sections:
1. **Basic Examples**: Simple usage
2. **Variants**: All variations (sizes, colors, styles)
3. **States**: Active, inactive, disabled, etc.
4. **Compositions**: Complex arrangements
5. **Interactive**: JavaScript features
6. **Accessibility**: ARIA examples

### 7. Edge Cases & Considerations

List potential issues and solutions:
- Empty content handling
- Very long content overflow
- Missing optional props
- Invalid prop combinations
- Browser compatibility
- Mobile responsiveness

## Output Format:

Provide a comprehensive markdown report with:
- Executive summary
- Detailed structural breakdown
- Implementation roadmap
- Code examples
- Testing checklist
- Accessibility notes

This analysis will serve as the blueprint for component creation.
