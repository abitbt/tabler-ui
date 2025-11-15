# Tabler Blade Slash Commands

Comprehensive slash commands for automating Tabler Blade component development in Claude Code.

## Available Commands

### `/create-component [name] [sub-components?]`
**Create a complete Tabler Blade component with demo page**

Creates a full component following Flux-inspired patterns including:
- Main component file with proper structure
- Optional sub-components (header, body, footer, etc.)
- Demo page with examples
- Route configuration
- Navigation updates

**Examples:**
```
/create-component accordion
/create-component dropdown header,menu,item
/create-component progress
```

**What it creates:**
- `tabler-blade/stubs/resources/views/tabler/[name]/index.blade.php`
- Sub-component files if specified
- `resources/views/demo/[name].blade.php`
- Route in `routes/web.php`
- Navigation link in demo index

---

### `/analyze-component [name]`
**Analyze Tabler component structure and patterns**

Provides comprehensive analysis of a Tabler UI component:
- HTML structure breakdown
- CSS class mapping
- Props vs. CSS strategy
- Sub-component recommendations
- JavaScript requirements
- Implementation roadmap

**Examples:**
```
/analyze-component dropdown
/analyze-component pagination
/analyze-component tabs
```

**Use this before creating a component** to understand:
- Component complexity and requirements
- Best architectural approach
- Potential edge cases
- Testing strategy

---

### `/update-demo-nav [name] [icon]`
**Update demo navigation with new component link**

Adds component to demo navigation:
- Button in UI Components section
- Dropdown menu item
- Route configuration

**Examples:**
```
/update-demo-nav dropdown chevron-down
/update-demo-nav pagination list
/update-demo-nav tabs layout-navbar
```

---

### `/abi:component [name]`
**Original component creation command** (in abi/ subdirectory)

Comprehensive component creation following detailed architectural decisions and patterns from `@docs/` directory.

**Example:**
```
/abi:component alert
```

## Workflow

### Creating a New Component

1. **Analyze first** (optional but recommended):
   ```
   /analyze-component tabs
   ```

2. **Create component**:
   ```
   /create-component tabs header,nav,content
   ```

3. **Update navigation**:
   ```
   /update-demo-nav tabs layout-navbar
   ```

4. **Format and test**:
   - Run `vendor/bin/pint`
   - Run `npm run build` if needed
   - Visit demo page in browser

### Quick Component Creation

For simple components without sub-components:
```
/create-component badge
```

For complex components with multiple parts:
```
/create-component table header,body,footer,row,cell
```

## Command Features

### Flux-Inspired Patterns
All commands follow established patterns:
- ✅ Custom tag syntax: `<tabler:component>`
- ✅ Composable sub-components: `<tabler:component.part>`
- ✅ ClassBuilder for dynamic CSS
- ✅ Proper attribute manipulation
- ✅ Bootstrap integration
- ✅ Accessibility features

### Generated Code Includes
- @props directive with sensible defaults
- Tabler::classes() for class building
- Proper attribute merging
- Data attributes for JavaScript
- ARIA labels for accessibility
- Dark mode support
- Mobile responsiveness

### Demo Page Includes
- Clean layout with navigation
- Multiple example variations
- Interactive features
- Proper documentation
- Back to home link

## Best Practices

1. **Always analyze complex components first** - Understanding structure before coding saves time

2. **Use descriptive sub-component names** - header, body, footer, title, actions, etc.

3. **Follow established patterns** - Check existing components (button, modal, card) for consistency

4. **Test thoroughly** - Use demo page to verify all variations work

5. **Keep props minimal** - Only create props for complex logic, let users use `class=""` for simple CSS

6. **Document everything** - Include helpful comments in component code

## File Structure

After creating a component with sub-components:

```
tabler-blade/stubs/resources/views/tabler/
└── component-name/
    ├── index.blade.php       # Main wrapper
    ├── header.blade.php      # Header section
    ├── body.blade.php        # Content area
    ├── footer.blade.php      # Footer section
    └── [other-parts].blade.php

resources/views/demo/
└── component-name.blade.php  # Demo page

routes/
└── web.php                   # Route added
```

## Troubleshooting

**Command not found:**
- Check file exists in `.claude/commands/`
- Restart Claude Code
- Type `/help` to see available commands

**Component not rendering:**
- Run `php artisan view:clear`
- Check file naming (kebab-case)
- Verify component syntax

**Demo page 404:**
- Check route added to `routes/web.php`
- Verify view file exists in `resources/views/demo/`
- Clear route cache: `php artisan route:clear`

## Examples from This Project

Components already created with these patterns:
- **Modal** - `/create-component modal header,body,footer,close,status`
- **Toast** - `/create-component toast container`
- **Card** - `/create-component card header,body,footer,title,subtitle,status,stamp,img,table`

Study these for reference when creating new components.
