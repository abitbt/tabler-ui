# Migration Plan: Flux UI to Tabler Blade

This document outlines the step-by-step plan for migrating from Flux UI to Tabler Blade.

## Pre-Migration Checklist

### Prerequisites
- [ ] Tabler Blade package installed and confirmed working
- [ ] All tests currently passing
- [ ] Git branch created for migration work
- [ ] Component mapping document reviewed
- [ ] Components to build list reviewed
- [ ] Team alignment on migration approach

### Recommended Setup
- [ ] Backup current database
- [ ] Create feature branch: `feature/migrate-to-tabler`
- [ ] Run full test suite to establish baseline
- [ ] Document any existing visual bugs or issues

---

## Phase 1: Build Custom Form Components

**Estimated Time:** 2-3 hours
**Goal:** Create all necessary form components following Tabler patterns

### Step 1.1: Create Input Component
- [ ] Create `resources/views/components/tabler/input.blade.php`
- [ ] Implement props: label, type, name, id, placeholder, error
- [ ] Add Livewire wire:model support
- [ ] Style with Tabler form classes
- [ ] Test with validation errors
- [ ] Test with Livewire binding

### Step 1.2: Create Checkbox Component
- [ ] Create `resources/views/components/tabler/checkbox.blade.php`
- [ ] Implement props: label, name, id, value, checked
- [ ] Add Livewire wire:model support
- [ ] Style with Tabler form-check classes
- [ ] Test checked/unchecked states
- [ ] Test with Livewire binding

### Step 1.3: Create Radio Component
- [ ] Create `resources/views/components/tabler/radio.blade.php`
- [ ] Implement props: label, name, id, value, checked
- [ ] Add Livewire wire:model support
- [ ] Style with Tabler form-check classes
- [ ] Test radio button groups
- [ ] Test with Livewire binding

### Step 1.4: Create Radio Group Component
- [ ] Create `resources/views/components/tabler/radio-group.blade.php`
- [ ] Implement props: label, name, error
- [ ] Add slot for radio buttons
- [ ] Style with Tabler classes
- [ ] Test with multiple radio buttons
- [ ] Test error display

### Step 1.5: Create Callout Component
- [ ] Create `resources/views/components/tabler/callout.blade.php`
- [ ] Implement props: variant, title, icon
- [ ] Wrap Tabler alert classes
- [ ] Test all variants (info, warning, danger, success)
- [ ] Test with and without icons

### Step 1.6: Test All Form Components
- [ ] Create test page with all form components
- [ ] Verify visual appearance
- [ ] Test validation errors
- [ ] Test Livewire reactivity
- [ ] Test dark mode
- [ ] Test responsive layouts
- [ ] Run Laravel Pint for code formatting

---

## Phase 2: Migrate Layout Components

**Estimated Time:** 2-3 hours
**Goal:** Replace Flux layouts with Tabler equivalents

### Step 2.1: Migrate Main App Layout
- [ ] Open `resources/views/components/layouts/app.blade.php`
- [ ] Replace `@fluxScripts` with `@tablerStyles` and `@tablerScripts`
- [ ] Map Flux components to Tabler equivalents
- [ ] Test layout rendering
- [ ] Verify responsive behavior
- [ ] Check dark mode toggle

### Step 2.2: Migrate App Header
- [ ] Open `resources/views/components/layouts/app/header.blade.php`
- [ ] Replace `flux:header` with `tabler:header`
- [ ] Replace `flux:navbar` with `tabler:header.nav`
- [ ] Replace profile dropdown components
- [ ] Test header navigation
- [ ] Test mobile responsive menu
- [ ] Verify theme toggle works

### Step 2.3: Migrate App Sidebar
- [ ] Open `resources/views/components/layouts/app/sidebar.blade.php`
- [ ] Replace `flux:sidebar` with `tabler:sidebar`
- [ ] Replace `flux:navlist` with `tabler:sidebar.nav`
- [ ] Replace `flux:navlist.item` with `tabler:sidebar.item`
- [ ] Replace `flux:navlist.group` with `tabler:sidebar.group`
- [ ] Add `@tablerSidebarScripts` directive
- [ ] Test navigation items
- [ ] Test collapsible groups
- [ ] Test sidebar toggle on mobile
- [ ] Test sidebar collapse on desktop
- [ ] Verify active state highlighting

### Step 2.4: Migrate Auth Layout
- [ ] Open `resources/views/components/layouts/auth.blade.php`
- [ ] Replace Flux components with Tabler/native equivalents
- [ ] Test all auth layout variants (split, card, simple)
- [ ] Verify responsive design
- [ ] Check dark mode

### Step 2.5: Migrate Settings Layout
- [ ] Open `resources/views/components/settings/layout.blade.php`
- [ ] Replace `flux:navlist` with appropriate Tabler component
- [ ] Replace `flux:heading` with native heading
- [ ] Replace `flux:subheading` with native paragraph
- [ ] Replace `flux:separator` with native hr
- [ ] Test settings navigation
- [ ] Verify active state

### Step 2.6: Test All Layouts
- [ ] View dashboard page
- [ ] Navigate through all main sections
- [ ] Test mobile responsive layouts
- [ ] Test sidebar collapse/expand
- [ ] Test dark mode toggle
- [ ] Verify no console errors

---

## Phase 3: Migrate Authentication Pages

**Estimated Time:** 1-2 hours
**Goal:** Update all auth pages to use new components

### Step 3.1: Migrate Login Page
- [ ] Open `resources/views/livewire/auth/login.blade.php`
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:checkbox` with `tabler:checkbox`
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Replace `flux:link` with native anchor tag
- [ ] Test login functionality
- [ ] Test remember me checkbox
- [ ] Test validation errors
- [ ] Test forgot password link

### Step 3.2: Migrate Register Page
- [ ] Open `resources/views/livewire/auth/register.blade.php`
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Replace `flux:link` with native anchor tag
- [ ] Test registration
- [ ] Test validation errors
- [ ] Test already registered link

### Step 3.3: Migrate Forgot Password Page
- [ ] Open `resources/views/livewire/auth/forgot-password.blade.php`
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Replace `flux:link` with native anchor tag
- [ ] Test password reset request
- [ ] Test validation

### Step 3.4: Migrate Reset Password Page
- [ ] Open `resources/views/livewire/auth/reset-password.blade.php`
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Test password reset
- [ ] Test validation

### Step 3.5: Migrate Confirm Password Page
- [ ] Open `resources/views/livewire/auth/confirm-password.blade.php`
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Test password confirmation
- [ ] Test validation

### Step 3.6: Migrate Two-Factor Challenge Page
- [ ] Open `resources/views/livewire/auth/two-factor-challenge.blade.php`
- [ ] Replace `flux:text` with native paragraph
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Test 2FA code input
- [ ] Test recovery code option

### Step 3.7: Migrate Verify Email Page
- [ ] Open `resources/views/livewire/auth/verify-email.blade.php`
- [ ] Replace `flux:text` with native paragraph
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Replace `flux:link` with native anchor tag
- [ ] Test verification email resend

### Step 3.8: Update Auth Header Component
- [ ] Open `resources/views/components/auth-header.blade.php`
- [ ] Replace `flux:heading` with native heading
- [ ] Replace `flux:subheading` with native paragraph
- [ ] Add appropriate Tabler classes

### Step 3.9: Test All Auth Flows
- [ ] Complete registration flow
- [ ] Complete login flow
- [ ] Test password reset flow
- [ ] Test email verification
- [ ] Test 2FA flow
- [ ] Verify all validation errors display
- [ ] Check responsive design
- [ ] Test dark mode

---

## Phase 4: Migrate Settings Pages

**Estimated Time:** 1-2 hours
**Goal:** Update all settings pages to use new components

### Step 4.1: Migrate Profile Settings
- [ ] Open `resources/views/livewire/settings/profile.blade.php`
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Replace `flux:text` with native paragraph
- [ ] Replace `flux:link` with native anchor tag
- [ ] Test profile update
- [ ] Test validation

### Step 4.2: Migrate Password Settings
- [ ] Open `resources/views/livewire/settings/password.blade.php`
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Test password update
- [ ] Test validation

### Step 4.3: Migrate Appearance Settings
- [ ] Open `resources/views/livewire/settings/appearance.blade.php`
- [ ] Replace `flux:radio.group` with `tabler:radio-group`
- [ ] Replace `flux:radio` with `tabler:radio`
- [ ] Test appearance selection
- [ ] Verify theme changes apply

### Step 4.4: Migrate Two-Factor Settings
- [ ] Open `resources/views/livewire/settings/two-factor.blade.php`
- [ ] Replace `flux:badge` with `tabler:badge`
- [ ] Replace `flux:text` with native paragraph
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Replace `flux:modal` with `tabler:modal`
- [ ] Replace `flux:heading` with native heading
- [ ] Replace `flux:subheading` with native paragraph
- [ ] Replace `flux:icon.*` with `tabler:icon`
- [ ] Replace `flux:callout` with `tabler:callout`
- [ ] Test enabling 2FA
- [ ] Test QR code display
- [ ] Test recovery codes
- [ ] Test disabling 2FA

### Step 4.5: Migrate Recovery Codes Component
- [ ] Open `resources/views/livewire/settings/two-factor/recovery-codes.blade.php`
- [ ] Replace all Flux icons with `tabler:icon`
- [ ] Replace `flux:heading` with native heading
- [ ] Replace `flux:text` with native paragraph
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Replace `flux:callout` with `tabler:callout`
- [ ] Test recovery codes display
- [ ] Test show/hide functionality
- [ ] Test regenerate

### Step 4.6: Migrate Delete User Form
- [ ] Open `resources/views/livewire/settings/delete-user-form.blade.php`
- [ ] Replace `flux:heading` with native heading
- [ ] Replace `flux:subheading` with native paragraph
- [ ] Replace `flux:modal.trigger` with button with data attributes
- [ ] Replace `flux:button` with `tabler:button`
- [ ] Replace `flux:modal` with `tabler:modal`
- [ ] Replace `flux:input` with `tabler:input`
- [ ] Replace `flux:modal.close` with `tabler:modal.close`
- [ ] Test account deletion flow

### Step 4.7: Update Settings Heading Partial
- [ ] Open `resources/views/partials/settings-heading.blade.php`
- [ ] Replace `flux:heading` with native heading
- [ ] Replace `flux:subheading` with native paragraph
- [ ] Replace `flux:separator` with native hr

### Step 4.8: Test All Settings
- [ ] Navigate through all settings pages
- [ ] Test profile updates
- [ ] Test password changes
- [ ] Test appearance changes
- [ ] Test 2FA enable/disable
- [ ] Test recovery codes
- [ ] Verify validation errors
- [ ] Check responsive design
- [ ] Test dark mode

---

## Phase 5: Icon Migration

**Estimated Time:** 30 minutes
**Goal:** Update all icon references from Heroicons to Tabler Icons

### Step 5.1: Identify All Icon Usage
- [ ] Search codebase for `flux:icon.`
- [ ] Create mapping of Heroicons to Tabler icons
- [ ] Document any icons that need alternatives

### Step 5.2: Replace Icons
- [ ] Update all icon references to use `tabler:icon name="icon-name"`
- [ ] Verify icon names exist in Tabler icon set
- [ ] Test icon rendering
- [ ] Check icon sizes are appropriate

### Step 5.3: Update Custom Flux Icons
- [ ] Review custom Flux icon components in `resources/views/flux/icon/`
- [ ] Determine if still needed or can be replaced
- [ ] Remove or migrate as appropriate

---

## Phase 6: Build Additional Components (Optional)

**Estimated Time:** 1-2 hours
**Goal:** Create enhanced components for better UX

### Step 6.1: Build Dropdown Component (if needed)
- [ ] Create dropdown component using Bootstrap or Alpine.js
- [ ] Test dropdown functionality
- [ ] Integrate into layouts

### Step 6.2: Build Menu Components (if needed)
- [ ] Create menu container component
- [ ] Create menu item component
- [ ] Test menu functionality
- [ ] Integrate into dropdowns

### Step 6.3: Build Tooltip Component (if needed)
- [ ] Create tooltip component
- [ ] Test tooltip positioning
- [ ] Integrate into navigation

---

## Phase 7: Testing and Quality Assurance

**Estimated Time:** 1 hour
**Goal:** Ensure all functionality works correctly

### Step 7.1: Visual Testing
- [ ] Review every page visually
- [ ] Check responsive design on mobile, tablet, desktop
- [ ] Verify dark mode works everywhere
- [ ] Check all interactive states (hover, focus, active)
- [ ] Compare with original design to ensure consistency

### Step 7.2: Functional Testing
- [ ] Test all forms submit correctly
- [ ] Test all validation errors display
- [ ] Test all Livewire interactions work
- [ ] Test all navigation works
- [ ] Test all modals open/close correctly
- [ ] Test sidebar collapse/expand
- [ ] Test theme toggle

### Step 7.3: Automated Testing
- [ ] Run full Pest test suite: `php artisan test`
- [ ] Fix any failing tests
- [ ] Add new tests if needed
- [ ] Run code formatter: `vendor/bin/pint`

### Step 7.4: Browser Testing
- [ ] Test in Chrome
- [ ] Test in Firefox
- [ ] Test in Safari
- [ ] Check for console errors
- [ ] Check for accessibility issues

### Step 7.5: Performance Check
- [ ] Check page load times
- [ ] Verify no JavaScript errors
- [ ] Check network requests
- [ ] Ensure no duplicate asset loading

---

## Phase 8: Cleanup and Finalization

**Estimated Time:** 30 minutes
**Goal:** Remove Flux dependency and clean up code

### Step 8.1: Remove Flux Components
- [ ] Search for any remaining `flux:` references
- [ ] Remove or replace any found
- [ ] Remove custom Flux components if no longer needed
- [ ] Clean up any Flux-specific CSS or JavaScript

### Step 8.2: Update Dependencies
- [ ] Remove `livewire/flux` from `composer.json`
- [ ] Run `composer update`
- [ ] Clear all caches: `php artisan optimize:clear`
- [ ] Rebuild assets: `npm run build`

### Step 8.3: Documentation
- [ ] Update README if needed
- [ ] Document any custom components created
- [ ] Update component usage guide
- [ ] Mark migration as complete

### Step 8.4: Code Review
- [ ] Review all changed files
- [ ] Check for code quality
- [ ] Ensure consistent formatting
- [ ] Run Pint one final time

---

## Phase 9: Deployment Preparation

**Estimated Time:** 30 minutes
**Goal:** Prepare for production deployment

### Step 9.1: Pre-Deployment Checklist
- [ ] All tests passing
- [ ] No console errors
- [ ] Visual review complete
- [ ] Performance acceptable
- [ ] Code reviewed

### Step 9.2: Create Pull Request
- [ ] Commit all changes
- [ ] Push to remote branch
- [ ] Create pull request
- [ ] Add description of changes
- [ ] Request team review

### Step 9.3: Final Testing
- [ ] Test on staging environment
- [ ] Perform final visual check
- [ ] Verify all features work
- [ ] Get stakeholder approval

### Step 9.4: Deploy
- [ ] Merge pull request
- [ ] Deploy to production
- [ ] Monitor for errors
- [ ] Verify production functionality

---

## Rollback Plan

If critical issues arise during or after migration:

### Immediate Rollback Steps
1. Revert merge commit or deploy previous version
2. Clear all caches
3. Rebuild assets
4. Verify application functionality restored
5. Document issues encountered
6. Create plan to address issues
7. Reattempt migration when ready

### Partial Rollback
If only specific pages have issues:
1. Revert specific file changes
2. Keep working components migrated
3. Fix problematic components
4. Re-migrate when ready

---

## Post-Migration Tasks

### Monitoring
- [ ] Monitor error logs for 48 hours
- [ ] Track user feedback
- [ ] Watch for performance issues
- [ ] Monitor browser console errors

### Optimization
- [ ] Review bundle size savings
- [ ] Optimize any slow pages
- [ ] Refactor components if needed
- [ ] Document lessons learned

### Documentation
- [ ] Update team documentation
- [ ] Create component usage guide
- [ ] Document any custom components
- [ ] Share migration experience with team
