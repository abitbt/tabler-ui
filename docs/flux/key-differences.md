# Key Differences: Flux UI vs Tabler Blade

This document highlights important differences between Flux UI and Tabler Blade that developers should be aware of during migration.

---

## Component Syntax

### Flux UI
- Uses `flux:component` syntax
- Sub-components use dot notation: `flux:menu.item`
- Icons use dot notation: `flux:icon.check`

### Tabler Blade
- Uses `tabler:component` syntax (configurable prefix)
- Sub-components use dot notation: `tabler:modal.body`
- Icons use attribute syntax: `tabler:icon name="check"`

---

## Icon Systems

### Flux UI Icons
- **Icon Library:** Heroicons by Tailwind Labs
- **Syntax:** `<flux:icon.icon-name />`
- **Variants:** Outline (default), solid, mini
- **Examples:**
  - `flux:icon.check`
  - `flux:icon.user`
  - `flux:icon.arrow-right`

### Tabler Icons
- **Icon Library:** Tabler Icons
- **Syntax:** `<tabler:icon name="icon-name" />`
- **Variants:** Outline (default), filled
- **Examples:**
  - `tabler:icon name="check"`
  - `tabler:icon name="user"`
  - `tabler:icon name="arrow-right"`

### Icon Migration Notes
- Icon names are mostly similar but verify each one
- Some icons may have different names
- Browse available icons at: https://tabler.io/icons
- Tabler has 5000+ icons vs Heroicons ~300
- Consider creating icon mapping document if many icons used

---

## CSS Framework

### Flux UI
- **Framework:** Custom CSS built on Tailwind
- **Classes:** Flux-specific utility classes
- **Customization:** Limited to Flux configuration
- **Bundle:** Includes Flux CSS and JavaScript

### Tabler Blade
- **Framework:** Bootstrap 5 + Tabler design system
- **Classes:** Bootstrap classes + Tabler utilities
- **Customization:** Full SCSS customization available
- **Bundle:** Uses Tabler CSS (can use CDN or local)

### Class Naming Differences
- Flux uses Tailwind-like classes
- Tabler uses Bootstrap classes (`.btn`, `.form-control`, `.card`)
- Need to adapt to Bootstrap conventions for custom styling

---

## JavaScript Dependencies

### Flux UI
- **Includes:** Alpine.js (via Livewire), custom Flux JavaScript
- **Size:** Moderate bundle size
- **Directives:** `@fluxScripts`

### Tabler Blade
- **Includes:** Bootstrap JavaScript, Alpine.js (via Livewire), Tabler utilities
- **Size:** Larger but more feature-rich
- **Directives:** `@tablerScripts`, `@tablerStyles`, `@tablerSidebarScripts`

### Script Loading
Replace `@fluxScripts` with:
- `@tablerStyles` (in head)
- `@tablerScripts` (before closing body)
- `@tablerSidebarScripts` (if using sidebar)

---

## Form Components

### Flux UI
- **Availability:** Complete form component library
- **Components:** input, checkbox, radio, select, textarea, field
- **Validation:** Built-in error handling
- **Wire:model:** Full support

### Tabler Blade
- **Availability:** No form components included
- **Components:** Must build custom components
- **Validation:** Need to implement Laravel validation integration
- **Wire:model:** Must add support manually

### Migration Impact
- Highest effort area of migration
- Must create custom form components from scratch
- Follow Tabler CSS patterns for consistency
- Integrate with Laravel validation manually

---

## Layout Components

### Flux UI Sidebar
- Simpler structure
- Basic navigation support
- Limited customization

### Tabler Sidebar
- More features out of the box
- State persistence (remembers collapsed state)
- Collapsible groups
- Desktop collapse button
- Mobile responsive by default
- Configurable breakpoints

### Tabler Advantages
- `tabler:sidebar.collapse` - Desktop collapse button (not in Flux)
- `tabler:sidebar.profile` - Built-in profile card
- `tabler:sidebar.spacer` - Flexible spacing utility
- Better mobile responsiveness

---

## Dark Mode

### Flux UI
- Dark mode support via Tailwind dark: classes
- Requires custom implementation for toggle
- JavaScript needed to persist preference

### Tabler Blade
- Built-in dark mode support
- `tabler:theme-toggle` component included
- Automatic persistence via localStorage
- Bootstrap-based theme switching

### Migration Benefit
- Easier dark mode implementation with Tabler
- Use provided theme toggle component
- Consistent dark mode across all Tabler components

---

## Modal System

### Flux UI
- Alpine.js based modals
- Livewire-aware
- Simple API

### Tabler Blade
- Bootstrap modal system
- Requires Bootstrap JavaScript
- More configuration options
- Different opening mechanism

### Modal Opening

**Flux:**
Typically uses Alpine.js `x-data` and `x-show`

**Tabler:**
Uses Bootstrap data attributes: `data-bs-toggle="modal" data-bs-target="#modalId"`

---

## Dropdown/Menu System

### Flux UI
- Complete dropdown system
- `flux:dropdown` and `flux:menu` components
- Alpine.js powered
- Keyboard navigation included

### Tabler Blade
- No built-in dropdown component
- Must use Bootstrap dropdowns
- Requires manual integration
- Need to build wrapper components

### Migration Requirement
- Build custom dropdown/menu components
- Use Bootstrap dropdown JavaScript
- Or implement with Alpine.js
- More manual work than Flux

---

## Component Prop Differences

### Button Component

**Flux Props:**
- variant (primary, secondary, danger, etc.)
- size (sm, lg, xl)
- href (for links)
- icon (Heroicon name)

**Tabler Props:**
- variant (primary, secondary, success, danger, warning, info, dark, light)
- size (xs, sm, lg, xl)
- href (for links)
- icon (Tabler icon name)
- outline (boolean)
- ghost (boolean)
- pill (boolean)
- animate (rotate, shake, pulse, tada, move-start)

**Tabler Extras:**
- More size options (xs)
- Outline and ghost variants
- Pill shape option
- Animation options

### Badge Component

**Flux Props:**
- color
- size
- icon

**Tabler Props:**
- color (red, green, blue, yellow, purple, pink, orange, gray, dark, light)
- variant (default, outline, light, pill)
- icon (leading)
- iconTrailing (trailing icon)
- notification (boolean for dot badge)
- blink (boolean for blinking animation)

**Tabler Extras:**
- More color options
- Explicit variants
- Trailing icon support
- Notification dot variant
- Blink animation

---

## State Management

### Flux UI
- Primarily Livewire-based
- Alpine.js for client-side interactivity
- Simple state management

### Tabler Blade
- Livewire-compatible
- Bootstrap JavaScript for some components
- Alpine.js for enhanced features
- localStorage for sidebar state
- More complex state management options

---

## Responsive Design

### Flux UI
- Mobile-first approach
- Tailwind breakpoints
- Simple responsive utilities

### Tabler Blade
- Mobile-first approach
- Bootstrap breakpoints (sm, md, lg, xl, xxl)
- More comprehensive responsive system
- Built-in responsive navigation

### Breakpoint Differences
- Different breakpoint values
- Different responsive class syntax
- May need to adjust layouts for Bootstrap grid

---

## Customization

### Flux UI
- Limited customization options
- Configuration file for basic options
- Hard to override component styles
- Proprietary component structure

### Tabler Blade
- Extensive customization via config
- Can override any component view
- SCSS variables for styling
- Open component structure
- Can publish and modify components

### Publishing Components

**Tabler allows:**
- Publishing configuration
- Publishing views for customization
- Publishing example layouts
- Full control over component implementation

---

## Performance Considerations

### Bundle Size

**Flux UI:**
- Smaller overall bundle
- Optimized for Livewire
- Minimal JavaScript

**Tabler Blade:**
- Larger bundle due to Bootstrap
- More features included
- Can use CDN to reduce impact

### Optimization Tips
- Use CDN for Tabler assets if possible
- Tree-shake unused Bootstrap JavaScript
- Lazy load sidebar scripts if not needed
- Consider code splitting for large applications

---

## Accessibility

### Flux UI
- Good baseline accessibility
- ARIA attributes on interactive components
- Keyboard navigation support

### Tabler Blade
- Bootstrap accessibility standards
- ARIA attributes required on custom components
- Must ensure custom components are accessible
- More manual implementation needed

### Migration Note
- Ensure custom components maintain accessibility
- Add ARIA labels where appropriate
- Test keyboard navigation after migration
- Use semantic HTML

---

## Documentation

### Flux UI
- Official Flux documentation
- Livewire-focused examples
- Limited customization docs

### Tabler Blade
- Tabler documentation for CSS/design
- Component documentation in code comments
- Example layouts in stubs folder
- Less centralized documentation

### Learning Resources
- Tabler UI Kit: https://tabler.io
- Tabler Icons: https://tabler.io/icons
- Bootstrap 5: https://getbootstrap.com
- Component examples in published layouts

---

## Testing Differences

### Component Testing

**Flux:**
- Test Flux components as-is
- Standard Livewire testing

**Tabler:**
- Test custom components thoroughly
- More edge cases due to custom implementation
- Test Bootstrap JavaScript integration
- Test state persistence for sidebar

### Areas Requiring More Testing
- Form validation error display
- Modal open/close functionality
- Dropdown interactions
- Sidebar state persistence
- Dark mode switching
- Responsive layouts

---

## Migration Gotchas

### Common Issues to Watch For

1. **Icon Names**
   - Heroicons vs Tabler icons may differ
   - Check each icon name during migration

2. **Modal Triggers**
   - Different opening mechanism
   - Update all modal trigger buttons

3. **Form Validation**
   - Must manually integrate validation errors
   - Test all form error states

4. **Dropdown Positioning**
   - Bootstrap dropdowns may position differently
   - Test all dropdown locations

5. **Dark Mode Classes**
   - Different dark mode implementation
   - Verify all custom dark mode styles

6. **Responsive Breakpoints**
   - Bootstrap uses different breakpoint values
   - May need layout adjustments

7. **CSS Class Conflicts**
   - Tailwind vs Bootstrap class naming
   - Watch for class name conflicts

8. **JavaScript Dependencies**
   - Bootstrap requires popper.js
   - Ensure proper script loading order

---

## Advantages of Tabler Blade

### What You Gain
1. **More Components:** 45+ components vs Flux's component set
2. **Better Sidebar:** State persistence, collapse button, better mobile
3. **Theme Toggle:** Built-in dark mode toggle component
4. **Icon Library:** 5000+ icons vs 300
5. **Customization:** Full control, can override any component
6. **Design System:** Complete Tabler design system
7. **Layout Examples:** Ready-to-use layout templates
8. **No License:** Free and open source

### What You Lose
1. **Form Components:** Must build from scratch
2. **Simpler API:** Tabler requires more setup
3. **Flux Integration:** Optimized Livewire integration
4. **Smaller Bundle:** Bootstrap increases size
5. **Dropdown System:** Must build custom dropdowns

---

## Advantages of Keeping Flux

### If You Choose Not to Migrate
1. **Form Components:** Complete form library included
2. **Simpler:** Less setup, works out of the box
3. **Smaller Bundle:** Lighter JavaScript
4. **Livewire Optimized:** Built specifically for Livewire
5. **Dropdown System:** Complete dropdown/menu system
6. **Less Work:** No migration effort needed

### When to Keep Flux
- Project timeline is tight
- Form-heavy application
- Small team without resources for migration
- Satisfied with current design
- No need for Tabler-specific features

---

## Hybrid Approach (Not Recommended)

### Theoretically Possible
- Keep Flux for forms
- Use Tabler for layouts
- Results in larger bundle
- Inconsistent design system
- More dependencies to maintain

### Why Not Recommended
- Mixed component APIs
- Larger bundle size
- Potential style conflicts
- Harder to maintain
- Confusing for developers

---

## Conclusion

### Primary Differences Summary
1. **Icons:** Heroicons vs Tabler Icons
2. **CSS:** Tailwind-based vs Bootstrap-based
3. **Forms:** Complete vs Must build
4. **Dropdowns:** Built-in vs Must build
5. **Customization:** Limited vs Extensive
6. **Bundle Size:** Smaller vs Larger
7. **Features:** Focused vs Comprehensive

### Migration Decision Factors
- **Choose Migration If:** Want full control, need Tabler features, okay with initial investment
- **Keep Flux If:** Short timeline, form-heavy app, satisfied with current state
- **Consider Carefully:** Form components are significant effort to rebuild
