# Tabler UI Component Reference

> Comprehensive reference for Tabler UI components - extracted from Tabler v1.4.0

## IMPORTANT
- If you cant find the component you are looking for, please grep search `tabler/` folder

## Component Design Principles

Each component should:
- Accept Laravel-friendly props (color, size, variant)
- Support slots for flexible content
- Include dark mode support via Tabler's classes
- Use `$attributes->merge()` for class merging
- Follow Tabler's CSS class naming conventions
- Be accessibility-friendly (ARIA attributes)
- Include sensible defaults

## Table of Contents

### Getting Started
1. [Installation](#1-installation)
2. [Download](#2-download)
3. [Browser Support](#3-browser-support)
4. [Customize](#4-customize)
5. [License](#5-license)
6. [FAQ](#6-faq)
7. [How to Contribute](#7-how-to-contribute)
8. [References](#8-references)

### Base Styles
9. [Colors](#9-colors)
10. [Typography](#10-typography)

### User Input Components
11. [Buttons](#11-buttons)
12. [Form Elements](#12-form-elements)
13. [Form Validation](#13-form-validation)
14. [Form Helpers](#14-form-helpers)
15. [Form Fieldset](#15-form-fieldset)
16. [Form Color Check](#16-form-color-check)
17. [Form Image Check](#17-form-image-check)
18. [Form Input Mask](#18-form-input-mask)
19. [Form Selectboxes](#19-form-selectboxes)
20. [Autosize](#20-autosize)
21. [Dropzone](#21-dropzone)
22. [Range Slider](#22-range-slider)
23. [Segmented Control](#23-segmented-control)
24. [Switch Icon](#24-switch-icon)

### Feedback & Notifications
25. [Alerts](#25-alerts)
26. [Modals](#26-modals)
27. [Toasts](#27-toasts)
28. [Progress](#28-progress)
29. [Spinners](#29-spinners)
30. [Placeholder](#30-placeholder)

### Layout & Navigation
31. [Page Headers](#31-page-headers)
32. [Page Layouts](#32-page-layouts)
33. [Navbars](#33-navbars)
34. [Navs & Tabs (Navigation)](#34-navs--tabs-navigation)
35. [Breadcrumb](#35-breadcrumb)
36. [Pagination](#36-pagination)
37. [Steps](#37-steps)

### Content Display
38. [Cards](#38-cards)
39. [Tables](#39-tables)
40. [Empty States](#40-empty-states)
41. [Divider](#41-divider)
42. [Timelines](#42-timelines)

### Data Visualization
43. [Charts](#43-charts)
44. [Datagrid](#44-datagrid)
45. [Vector Maps](#45-vector-maps)
46. [Countup](#46-countup)
47. [Tracking](#47-tracking)

### Visual Elements
48. [Avatars](#48-avatars)
49. [Badges](#49-badges)
50. [Icons](#50-icons)
51. [Statuses](#51-statuses)
52. [Ribbons](#52-ribbons)

### Interactive Components
53. [Dropdowns](#53-dropdowns)
54. [Tabs](#54-tabs)
55. [Offcanvas](#55-offcanvas)
56. [Carousel](#56-carousel)
57. [Popover](#57-popover)
58. [Tooltips](#58-tooltips)

### Advanced Components
59. [WYSIWYG](#59-wysiwyg)
60. [Inline Player](#60-inline-player)

### Plugins
61. [Flags](#61-flags)
62. [Payment Icons](#62-payment-icons)
63. [Social Icons](#63-social-icons)

### Utilities
64. [Borders](#64-borders)
65. [Cursors](#65-cursors)
66. [Interactions](#66-interactions)
67. [Margins](#67-margins)
68. [Vertical Align](#68-vertical-align)
69. [Visually Hidden](#69-visually-hidden)

---

## Getting Started

### 1. Installation

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/installation.md`](../tabler/docs/content/ui/getting-started/installation.md)
**Preview:** N/A

### 2. Download

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/download.md`](../tabler/docs/content/ui/getting-started/download.md)
**Preview:** N/A

### 3. Browser Support

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/browser-support.md`](../tabler/docs/content/ui/getting-started/browser-support.md)
**Preview:** N/A

### 4. Customize

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/customize.md`](../tabler/docs/content/ui/getting-started/customize.md)
**Preview:** N/A

### 5. License

**Template:** [`tabler/preview/pages/license.html`](../tabler/preview/pages/license.html)
**Documentation:** [`tabler/docs/content/ui/getting-started/license.md`](../tabler/docs/content/ui/getting-started/license.md)
**Preview:** [`tabler/preview/dist/license.html`](../tabler/preview/dist/license.html)

### 6. FAQ

**Template:** [`tabler/preview/pages/faq.html`](../tabler/preview/pages/faq.html)
**Documentation:** [`tabler/docs/content/ui/getting-started/faq.md`](../tabler/docs/content/ui/getting-started/faq.md)
**Preview:** [`tabler/preview/dist/faq.html`](../tabler/preview/dist/faq.html)

### 7. How to Contribute

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/how-to-contribute.md`](../tabler/docs/content/ui/getting-started/how-to-contribute.md)
**Preview:** N/A

### 8. References

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/references.md`](../tabler/docs/content/ui/getting-started/references.md)
**Preview:** N/A

---


## Base Styles
### 9. Colors

**Template:** [`tabler/shared/includes/docs/colors.html`](../tabler/shared/includes/docs/colors.html)
**Documentation:** [`tabler/docs/content/ui/base/colors.md`](../tabler/docs/content/ui/base/colors.md)
**Preview:** [`tabler/preview/dist/colors.html`](../tabler/preview/dist/colors.html)

### 10. Typography

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/base/typography.md`](../tabler/docs/content/ui/base/typography.md)
**Preview:** [`tabler/preview/dist/typography.html`](../tabler/preview/dist/typography.html)

---

## User Input Components

### 11. Buttons

**Template:** [`tabler/shared/includes/ui/button.html`](../tabler/shared/includes/ui/button.html), [`button-group.html`](../tabler/shared/includes/ui/button-group.html)
**Documentation:** [`tabler/docs/content/ui/components/buttons.md`](../tabler/docs/content/ui/components/buttons.md)
**Preview:** [`tabler/preview/dist/buttons.html`](../tabler/preview/dist/buttons.html)

### 12. Form Elements

**Template:** [`tabler/shared/includes/forms/form-elements-1.html`](../tabler/shared/includes/forms/form-elements-1.html), [`form-elements-2.html`](../tabler/shared/includes/forms/form-elements-2.html), [`form-elements-3.html`](../tabler/shared/includes/forms/form-elements-3.html), [`form-elements-4.html`](../tabler/shared/includes/forms/form-elements-4.html), [`form-elements-5.html`](../tabler/shared/includes/forms/form-elements-5.html), [`form-elements-6.html`](../tabler/shared/includes/forms/form-elements-6.html), [`tabler/shared/includes/ui/form/`](../tabler/shared/includes/ui/form/) (check, input-file, input-group, input-icon, input-selectgroup), [`tabler/shared/includes/parts/form/`](../tabler/shared/includes/parts/form/) (input, checkboxes, radios, toggle, file, icon, datalist, sizes)
**Documentation:** [`tabler/docs/content/ui/forms/form-elements.md`](../tabler/docs/content/ui/forms/form-elements.md)
**Preview:** [`tabler/preview/dist/form-elements.html`](../tabler/preview/dist/form-elements.html)

### 13. Form Validation

**Template:** [`tabler/shared/includes/parts/form/validation-states.html`](../tabler/shared/includes/parts/form/validation-states.html)
**Documentation:** [`tabler/docs/content/ui/forms/form-validation.md`](../tabler/docs/content/ui/forms/form-validation.md)
**Preview:** N/A

### 14. Form Helpers

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/forms/form-helpers.md`](../tabler/docs/content/ui/forms/form-helpers.md)
**Preview:** N/A

### 15. Form Fieldset

**Template:** [`tabler/shared/includes/parts/form/fieldset.html`](../tabler/shared/includes/parts/form/fieldset.html)
**Documentation:** [`tabler/docs/content/ui/forms/form-fieldset.md`](../tabler/docs/content/ui/forms/form-fieldset.md)
**Preview:** N/A

### 16. Form Color Check

**Template:** [`tabler/shared/includes/parts/form/input-color.html`](../tabler/shared/includes/parts/form/input-color.html), [`input-colorpicker.html`](../tabler/shared/includes/parts/form/input-colorpicker.html), [`tabler/shared/includes/ui/colorpicker.html`](../tabler/shared/includes/ui/colorpicker.html), [`datepicker.html`](../tabler/shared/includes/ui/datepicker.html)
**Documentation:** [`tabler/docs/content/ui/forms/form-color-check.md`](../tabler/docs/content/ui/forms/form-color-check.md)
**Preview:** N/A

### 17. Form Image Check

**Template:** [`tabler/shared/includes/parts/form/input-image.html`](../tabler/shared/includes/parts/form/input-image.html), [`input-image-people.html`](../tabler/shared/includes/parts/form/input-image-people.html), [`input-image-radio.html`](../tabler/shared/includes/parts/form/input-image-radio.html)
**Documentation:** [`tabler/docs/content/ui/forms/form-image-check.md`](../tabler/docs/content/ui/forms/form-image-check.md)
**Preview:** N/A

### 18. Form Input Mask

**Template:** [`tabler/shared/includes/ui/form/input-mask.html`](../tabler/shared/includes/ui/form/input-mask.html)
**Documentation:** [`tabler/docs/content/ui/forms/form-input-mask.md`](../tabler/docs/content/ui/forms/form-input-mask.md)
**Preview:** N/A

### 19. Form Selectboxes

**Template:** [`tabler/shared/includes/parts/form/select.html`](../tabler/shared/includes/parts/form/select.html), [`tabler/shared/includes/ui/select.html`](../tabler/shared/includes/ui/select.html)
**Documentation:** [`tabler/docs/content/ui/forms/form-selectboxes.md`](../tabler/docs/content/ui/forms/form-selectboxes.md)
**Preview:** N/A

### 20. Autosize

**Template:** [`tabler/shared/includes/ui/form/textarea-autosize.html`](../tabler/shared/includes/ui/form/textarea-autosize.html)
**Documentation:** [`tabler/docs/content/ui/components/autosize.md`](../tabler/docs/content/ui/components/autosize.md)
**Preview:** N/A

### 21. Dropzone

**Template:** [`tabler/shared/includes/ui/dropzone.html`](../tabler/shared/includes/ui/dropzone.html)
**Documentation:** [`tabler/docs/content/ui/components/dropzone.md`](../tabler/docs/content/ui/components/dropzone.md)
**Preview:** [`tabler/preview/dist/dropzone.html`](../tabler/preview/dist/dropzone.html)

### 22. Range Slider

**Template:** [`tabler/shared/includes/ui/range.html`](../tabler/shared/includes/ui/range.html), [`tabler/shared/includes/parts/form/input-range.html`](../tabler/shared/includes/parts/form/input-range.html)
**Documentation:** [`tabler/docs/content/ui/components/range-slider.md`](../tabler/docs/content/ui/components/range-slider.md)
**Preview:** N/A

### 23. Segmented Control

**Template:** [`tabler/shared/includes/ui/nav-segmented.html`](../tabler/shared/includes/ui/nav-segmented.html)
**Documentation:** [`tabler/docs/content/ui/components/segmented-control.md`](../tabler/docs/content/ui/components/segmented-control.md)
**Preview:** [`tabler/preview/dist/segmented-control.html`](../tabler/preview/dist/segmented-control.html)

### 24. Switch Icon

**Template:** [`tabler/shared/includes/ui/switch-icon.html`](../tabler/shared/includes/ui/switch-icon.html)
**Documentation:** [`tabler/docs/content/ui/components/switch-icon.md`](../tabler/docs/content/ui/components/switch-icon.md)
**Preview:** N/A

---

## Feedback & Notifications

### 25. Alerts

**Template:** [`tabler/shared/includes/ui/alert.html`](../tabler/shared/includes/ui/alert.html)
**Documentation:** [`tabler/docs/content/ui/components/alerts.md`](../tabler/docs/content/ui/components/alerts.md)
**Preview:** [`tabler/preview/dist/alerts.html`](../tabler/preview/dist/alerts.html)

### 26. Modals

**Template:** [`tabler/shared/includes/ui/modal.html`](../tabler/shared/includes/ui/modal.html), [`tabler/shared/includes/parts/modals/`](../tabler/shared/includes/parts/modals/) (simple, danger, success, team, scrollable, large, small, full-width, deactivate, report, new-email, signature)
**Documentation:** [`tabler/docs/content/ui/components/modals.md`](../tabler/docs/content/ui/components/modals.md)
**Preview:** [`tabler/preview/dist/modals.html`](../tabler/preview/dist/modals.html)

### 27. Toasts

**Template:** [`tabler/shared/includes/ui/toast.html`](../tabler/shared/includes/ui/toast.html)
**Documentation:** [`tabler/docs/content/ui/components/toasts.md`](../tabler/docs/content/ui/components/toasts.md)
**Preview:** [`tabler/preview/dist/toasts.html`](../tabler/preview/dist/toasts.html)

### 28. Progress

**Template:** [`tabler/shared/includes/ui/progress.html`](../tabler/shared/includes/ui/progress.html), [`progress-description.html`](../tabler/shared/includes/ui/progress-description.html), [`progress-steps.html`](../tabler/shared/includes/ui/progress-steps.html), [`progressbg.html`](../tabler/shared/includes/ui/progressbg.html)
**Documentation:** [`tabler/docs/content/ui/components/progress.md`](../tabler/docs/content/ui/components/progress.md)
**Preview:** [`tabler/preview/dist/progress.html`](../tabler/preview/dist/progress.html)

### 29. Spinners

**Template:** [`tabler/shared/includes/ui/spinner.html`](../tabler/shared/includes/ui/spinner.html)
**Documentation:** [`tabler/docs/content/ui/components/spinners.md`](../tabler/docs/content/ui/components/spinners.md)
**Preview:** N/A

### 30. Placeholder

**Template:** [`tabler/shared/includes/cards/placeholder/`](../tabler/shared/includes/cards/placeholder/) (card-1 through card-6)
**Documentation:** [`tabler/docs/content/ui/components/placeholder.md`](../tabler/docs/content/ui/components/placeholder.md)
**Preview:** [`tabler/preview/dist/placeholder.html`](../tabler/preview/dist/placeholder.html)

---

## Layout & Navigation

### 31. Page Headers

**Template:** [`tabler/shared/includes/layout/page-header.html`](../tabler/shared/includes/layout/page-header.html), [`tabler/shared/includes/layout/headers/`](../tabler/shared/includes/layout/headers/) (page-header-1 through page-header-5, profile, uptime)
**Documentation:** [`tabler/docs/content/ui/layout/page-headers.md`](../tabler/docs/content/ui/layout/page-headers.md)
**Preview:** N/A

### 32. Page Layouts

**Template:** [`tabler/shared/includes/layout/layouts.html`](../tabler/shared/includes/layout/layouts.html), [`tabler/shared/includes/layout/layouts-list.html`](../tabler/shared/includes/layout/layouts-list.html)
**Documentation:** [`tabler/docs/content/ui/layout/page-layouts.md`](../tabler/docs/content/ui/layout/page-layouts.md)
**Preview:** [`tabler/preview/dist/layout-boxed.html`](../tabler/preview/dist/layout-boxed.html)

### 33. Navbars

**Template:** [`tabler/shared/includes/layout/navbar.html`](../tabler/shared/includes/layout/navbar.html), [`navbar-logo.html`](../tabler/shared/includes/layout/navbar-logo.html), [`navbar-menu.html`](../tabler/shared/includes/layout/navbar-menu.html), [`navbar-search.html`](../tabler/shared/includes/layout/navbar-search.html), [`navbar-side.html`](../tabler/shared/includes/layout/navbar-side.html), [`navbar-side-apps.html`](../tabler/shared/includes/layout/navbar-side-apps.html), [`navbar-side-language.html`](../tabler/shared/includes/layout/navbar-side-language.html), [`navbar-side-notifications.html`](../tabler/shared/includes/layout/navbar-side-notifications.html), [`navbar-side-theme.html`](../tabler/shared/includes/layout/navbar-side-theme.html), [`navbar-side-user.html`](../tabler/shared/includes/layout/navbar-side-user.html), [`navbar-toggler.html`](../tabler/shared/includes/layout/navbar-toggler.html), [`sidebar.html`](../tabler/shared/includes/layout/sidebar.html)
**Documentation:** [`tabler/docs/content/ui/layout/navbars.md`](../tabler/docs/content/ui/layout/navbars.md)
**Preview:** [`tabler/preview/dist/layout-navbar-dark.html`](../tabler/preview/dist/layout-navbar-dark.html)

### 34. Navs & Tabs (Navigation)

**Template:** [`tabler/shared/includes/ui/nav.html`](../tabler/shared/includes/ui/nav.html), [`tabler/shared/includes/parts/nav/nav-aside.html`](../tabler/shared/includes/parts/nav/nav-aside.html)
**Documentation:** [`tabler/docs/content/ui/layout/navs-tabs.md`](../tabler/docs/content/ui/layout/navs-tabs.md)
**Preview:** N/A

### 35. Breadcrumb

**Template:** [`tabler/shared/includes/ui/breadcrumb.html`](../tabler/shared/includes/ui/breadcrumb.html)
**Documentation:** [`tabler/docs/content/ui/components/breadcrumb.md`](../tabler/docs/content/ui/components/breadcrumb.md)
**Preview:** [`tabler/preview/dist/navigation.html`](../tabler/preview/dist/navigation.html)

### 36. Pagination

**Template:** [`tabler/shared/includes/ui/pagination.html`](../tabler/shared/includes/ui/pagination.html), [`tabler/shared/includes/docs/pagination.html`](../tabler/shared/includes/docs/pagination.html)
**Documentation:** [`tabler/docs/content/ui/components/pagination.md`](../tabler/docs/content/ui/components/pagination.md)
**Preview:** [`tabler/preview/dist/pagination.html`](../tabler/preview/dist/pagination.html)

### 37. Steps

**Template:** [`tabler/shared/includes/ui/steps.html`](../tabler/shared/includes/ui/steps.html)
**Documentation:** [`tabler/docs/content/ui/components/steps.md`](../tabler/docs/content/ui/components/steps.md)
**Preview:** [`tabler/preview/dist/steps.html`](../tabler/preview/dist/steps.html)

---

## Content Display

### 38. Cards

**Template:** [`tabler/shared/includes/cards/card.html`](../tabler/shared/includes/cards/card.html), [`tabler/shared/includes/cards/`](../tabler/shared/includes/cards/) (50+ card variations including: activity, auth-lock, blog-single, carousel, code, comments, company, credit-card, gallery, invoice, profile, pricing, ribbon, stats, tables, tabs, tasks, user cards, etc.)
**Documentation:** [`tabler/docs/content/ui/components/cards.md`](../tabler/docs/content/ui/components/cards.md)
**Preview:** [`tabler/preview/dist/cards.html`](../tabler/preview/dist/cards.html)

### 39. Tables

**Template:** [`tabler/shared/includes/ui/table.html`](../tabler/shared/includes/ui/table.html), [`tabler/shared/includes/ui/advanced-table.html`](../tabler/shared/includes/ui/advanced-table.html)
**Documentation:** [`tabler/docs/content/ui/components/tables.md`](../tabler/docs/content/ui/components/tables.md)
**Preview:** [`tabler/preview/dist/tables.html`](../tabler/preview/dist/tables.html)

### 40. Empty States

**Template:** [`tabler/shared/includes/ui/empty.html`](../tabler/shared/includes/ui/empty.html)
**Documentation:** [`tabler/docs/content/ui/components/empty.md`](../tabler/docs/content/ui/components/empty.md)
**Preview:** [`tabler/preview/dist/empty.html`](../tabler/preview/dist/empty.html)

### 41. Divider

**Template:** [`tabler/shared/includes/ui/hr.html`](../tabler/shared/includes/ui/hr.html)
**Documentation:** [`tabler/docs/content/ui/components/divider.md`](../tabler/docs/content/ui/components/divider.md)
**Preview:** N/A

### 42. Timelines

**Template:** [`tabler/shared/includes/ui/timeline.html`](../tabler/shared/includes/ui/timeline.html)
**Documentation:** [`tabler/docs/content/ui/components/timelines.md`](../tabler/docs/content/ui/components/timelines.md)
**Preview:** N/A

---

## Data Visualization

### 43. Charts

**Template:** [`tabler/shared/includes/ui/chart.html`](../tabler/shared/includes/ui/chart.html), [`chart-sparkline.html`](../tabler/shared/includes/ui/chart-sparkline.html), [`chart-heatmap.html`](../tabler/shared/includes/ui/chart-heatmap.html), [`tabler/shared/includes/parts/charts/activity.html`](../tabler/shared/includes/parts/charts/activity.html)
**Documentation:** [`tabler/docs/content/ui/components/charts.md`](../tabler/docs/content/ui/components/charts.md)
**Preview:** [`tabler/preview/dist/charts.html`](../tabler/preview/dist/charts.html)

### 44. Datagrid

**Template:** [`tabler/shared/includes/parts/datagrid.html`](../tabler/shared/includes/parts/datagrid.html)
**Documentation:** [`tabler/docs/content/ui/components/datagrid.md`](../tabler/docs/content/ui/components/datagrid.md)
**Preview:** [`tabler/preview/dist/datagrid.html`](../tabler/preview/dist/datagrid.html)

### 45. Vector Maps

**Template:** [`tabler/shared/includes/ui/map-vector.html`](../tabler/shared/includes/ui/map-vector.html), [`tabler/shared/includes/ui/map.html`](../tabler/shared/includes/ui/map.html)
**Documentation:** [`tabler/docs/content/ui/components/vector-maps.md`](../tabler/docs/content/ui/components/vector-maps.md)
**Preview:** [`tabler/preview/dist/maps-vector.html`](../tabler/preview/dist/maps-vector.html)

### 46. Countup

**Template:** [`tabler/shared/includes/js/countup.html`](../tabler/shared/includes/js/countup.html)
**Documentation:** [`tabler/docs/content/ui/components/countup.md`](../tabler/docs/content/ui/components/countup.md)
**Preview:** N/A

### 47. Tracking

**Template:** [`tabler/shared/includes/ui/tracking.html`](../tabler/shared/includes/ui/tracking.html)
**Documentation:** [`tabler/docs/content/ui/components/tracking.md`](../tabler/docs/content/ui/components/tracking.md)
**Preview:** N/A

**Additional Data Visualization:**
- **Calendar:** [`tabler/shared/includes/ui/fullcalendar.html`](../tabler/shared/includes/ui/fullcalendar.html), [`tabler/shared/includes/parts/calendar.html`](../tabler/shared/includes/parts/calendar.html)
- **Trending:** [`tabler/shared/includes/ui/trending.html`](../tabler/shared/includes/ui/trending.html)

---

## Visual Elements

### 48. Avatars

**Template:** [`tabler/shared/includes/ui/avatar.html`](../tabler/shared/includes/ui/avatar.html), [`avatar-list.html`](../tabler/shared/includes/ui/avatar-list.html), [`avatar-upload.html`](../tabler/shared/includes/ui/avatar-upload.html)
**Documentation:** [`tabler/docs/content/ui/components/avatars.md`](../tabler/docs/content/ui/components/avatars.md)
**Preview:** [`tabler/preview/dist/avatars.html`](../tabler/preview/dist/avatars.html)

### 49. Badges

**Template:** [`tabler/shared/includes/ui/badge.html`](../tabler/shared/includes/ui/badge.html), [`tag.html`](../tabler/shared/includes/ui/tag.html)
**Documentation:** [`tabler/docs/content/ui/components/badges.md`](../tabler/docs/content/ui/components/badges.md)
**Preview:** [`tabler/preview/dist/badges.html`](../tabler/preview/dist/badges.html)

### 50. Icons

**Template:** [`tabler/shared/includes/ui/icon.html`](../tabler/shared/includes/ui/icon.html), [`svg.html`](../tabler/shared/includes/ui/svg.html), [`illustration.html`](../tabler/shared/includes/ui/illustration.html), [`shape.html`](../tabler/shared/includes/ui/shape.html), [`photo.html`](../tabler/shared/includes/ui/photo.html), [`responsive-image.html`](../tabler/shared/includes/ui/responsive-image.html), [`tabler/shared/includes/docs/ui/icon.html`](../tabler/shared/includes/docs/ui/icon.html)
**Documentation:** [`tabler/docs/content/ui/components/icons.md`](../tabler/docs/content/ui/components/icons.md)
**Preview:** [`tabler/preview/dist/icons.html`](../tabler/preview/dist/icons.html)

### 51. Statuses

**Template:** [`tabler/shared/includes/ui/status.html`](../tabler/shared/includes/ui/status.html), [`status-dot.html`](../tabler/shared/includes/ui/status-dot.html), [`status-indicator.html`](../tabler/shared/includes/ui/status-indicator.html)
**Documentation:** [`tabler/docs/content/ui/components/statuses.md`](../tabler/docs/content/ui/components/statuses.md)
**Preview:** N/A

### 52. Ribbons

**Template:** [`tabler/shared/includes/ui/ribbon.html`](../tabler/shared/includes/ui/ribbon.html)
**Documentation:** [`tabler/docs/content/ui/components/ribbons.md`](../tabler/docs/content/ui/components/ribbons.md)
**Preview:** N/A

**Additional Visual Elements:**
- **Rating/Stars:** [`tabler/shared/includes/ui/rating.html`](../tabler/shared/includes/ui/rating.html), [`stars.html`](../tabler/shared/includes/ui/stars.html)

---

## Interactive Components

### 53. Dropdowns

**Template:** [`tabler/shared/includes/ui/dropdown.html`](../tabler/shared/includes/ui/dropdown.html), [`dropdown-menu.html`](../tabler/shared/includes/ui/dropdown-menu.html), [`dropdown-menu-all.html`](../tabler/shared/includes/ui/dropdown-menu-all.html), [`card-dropdown.html`](../tabler/shared/includes/ui/card-dropdown.html), [`tabler/shared/includes/parts/dropdown/`](../tabler/shared/includes/parts/dropdown/) (days, months)
**Documentation:** [`tabler/docs/content/ui/components/dropdowns.md`](../tabler/docs/content/ui/components/dropdowns.md)
**Preview:** [`tabler/preview/dist/dropdowns.html`](../tabler/preview/dist/dropdowns.html)

### 54. Tabs

**Template:** [`tabler/shared/includes/ui/nav.html`](../tabler/shared/includes/ui/nav.html) (also used for tabs), [`accordion.html`](../tabler/shared/includes/ui/accordion.html), [`tabler/shared/includes/docs/tabs-package.html`](../tabler/shared/includes/docs/tabs-package.html)
**Documentation:** [`tabler/docs/content/ui/components/tabs.md`](../tabler/docs/content/ui/components/tabs.md)
**Preview:** [`tabler/preview/dist/tabs.html`](../tabler/preview/dist/tabs.html)

### 55. Offcanvas

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/offcanvas.md`](../tabler/docs/content/ui/components/offcanvas.md)
**Preview:** [`tabler/preview/dist/offcanvas.html`](../tabler/preview/dist/offcanvas.html)

### 56. Carousel

**Template:** [`tabler/shared/includes/ui/carousel.html`](../tabler/shared/includes/ui/carousel.html)
**Documentation:** [`tabler/docs/content/ui/components/carousel.md`](../tabler/docs/content/ui/components/carousel.md)
**Preview:** [`tabler/preview/dist/carousel.html`](../tabler/preview/dist/carousel.html)

### 57. Popover

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/popover.md`](../tabler/docs/content/ui/components/popover.md)
**Preview:** N/A

### 58. Tooltips

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/tooltips.md`](../tabler/docs/content/ui/components/tooltips.md)
**Preview:** N/A

---

## Advanced Components

### 59. WYSIWYG

**Template:** [`tabler/shared/includes/ui/wysiwyg.html`](../tabler/shared/includes/ui/wysiwyg.html)
**Documentation:** [`tabler/docs/content/ui/components/wysiwyg.md`](../tabler/docs/content/ui/components/wysiwyg.md)
**Preview:** [`tabler/preview/dist/wysiwyg.html`](../tabler/preview/dist/wysiwyg.html)

### 60. Inline Player

**Template:** [`tabler/shared/includes/ui/inline-player.html`](../tabler/shared/includes/ui/inline-player.html)
**Documentation:** [`tabler/docs/content/ui/components/inline-player.md`](../tabler/docs/content/ui/components/inline-player.md)
**Preview:** [`tabler/preview/dist/inline-player.html`](../tabler/preview/dist/inline-player.html)

**Additional Advanced Components:**
- **Chat:** [`tabler/shared/includes/ui/chat.html`](../tabler/shared/includes/ui/chat.html)
- **Signature:** [`tabler/shared/includes/ui/signature.html`](../tabler/shared/includes/ui/signature.html)
- **Typed Animation:** [`tabler/shared/includes/ui/typed.html`](../tabler/shared/includes/ui/typed.html)

---

## Plugins

### 61. Flags

**Template:** [`tabler/shared/includes/ui/flag.html`](../tabler/shared/includes/ui/flag.html), [`tabler/shared/includes/docs/flags.html`](../tabler/shared/includes/docs/flags.html)
**Documentation:** [`tabler/docs/content/ui/plugins/flags.md`](../tabler/docs/content/ui/plugins/flags.md)
**Preview:** [`tabler/preview/dist/flags.html`](../tabler/preview/dist/flags.html)

### 62. Payment Icons

**Template:** [`tabler/shared/includes/ui/payment.html`](../tabler/shared/includes/ui/payment.html), [`tabler/shared/includes/docs/payments.html`](../tabler/shared/includes/docs/payments.html)
**Documentation:** [`tabler/docs/content/ui/plugins/payments.md`](../tabler/docs/content/ui/plugins/payments.md)
**Preview:** [`tabler/preview/dist/payment-providers.html`](../tabler/preview/dist/payment-providers.html)

### 63. Social Icons

**Template:** [`tabler/shared/includes/docs/socials.html`](../tabler/shared/includes/docs/socials.html)
**Documentation:** [`tabler/docs/content/ui/plugins/social-icons.md`](../tabler/docs/content/ui/plugins/social-icons.md)
**Preview:** [`tabler/preview/dist/social-icons.html`](../tabler/preview/dist/social-icons.html)

---

## Utilities

### 64. Borders

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/borders.md`](../tabler/docs/content/ui/utilities/borders.md)
**Preview:** N/A

### 65. Cursors

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/cursors.md`](../tabler/docs/content/ui/utilities/cursors.md)
**Preview:** N/A

### 66. Interactions

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/interactions.md`](../tabler/docs/content/ui/utilities/interactions.md)
**Preview:** N/A

### 67. Margins

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/margins.md`](../tabler/docs/content/ui/utilities/margins.md)
**Preview:** N/A

### 68. Vertical Align

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/vertical-align.md`](../tabler/docs/content/ui/utilities/vertical-align.md)
**Preview:** N/A

### 69. Visually Hidden

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/visually-hidden.md`](../tabler/docs/content/ui/utilities/visually-hidden.md)
**Preview:** N/A

---

## Additional Resources

### Marketing Components
**Location:** [`tabler/shared/includes/marketing/`](../tabler/shared/includes/marketing/)
- **Navbar:** [`navbar.html`](../tabler/shared/includes/marketing/navbar.html)
- **Section Divider:** [`section-divider.html`](../tabler/shared/includes/marketing/section-divider.html)
- **Hero Sections:** [`hero/browser.html`](../tabler/shared/includes/marketing/hero/browser.html), [`hero/side.html`](../tabler/shared/includes/marketing/hero/side.html)
- **Marketing Sections:** [`sections/`](../tabler/shared/includes/marketing/sections/) (companies, counters, cta, faq, features, pricing, subscribe, testimonials)

### Layout Utilities
**Location:** [`tabler/shared/includes/layout/`](../tabler/shared/includes/layout/)
- **Analytics:** [`analytics.html`](../tabler/shared/includes/layout/analytics.html)
- **Banner:** [`banner.html`](../tabler/shared/includes/layout/banner.html)
- **Footer:** [`footer.html`](../tabler/shared/includes/layout/footer.html)
- **Homepage:** [`homepage.html`](../tabler/shared/includes/layout/homepage.html)
- **Skip Link:** [`skip-link.html`](../tabler/shared/includes/layout/skip-link.html)
- **CSS/JS:** [`css.html`](../tabler/shared/includes/layout/css.html), [`js.html`](../tabler/shared/includes/layout/js.html), [`js-libs.html`](../tabler/shared/includes/layout/js-libs.html)
- **Header Actions:** [`header-actions/`](../tabler/shared/includes/layout/header-actions/) (add-board, add-job, breadcrumb, buttons, calendar, new-project, photos, print, users)

### JavaScript Utilities
**Location:** [`tabler/shared/includes/js/`](../tabler/shared/includes/js/)
- **Countup:** [`countup.html`](../tabler/shared/includes/js/countup.html)
- **NoUiSlider:** [`nouislider.html`](../tabler/shared/includes/js/nouislider.html)
- **Tabler List:** [`tabler-list.html`](../tabler/shared/includes/js/tabler-list.html)

### Documentation Components
**Location:** [`tabler/shared/includes/docs/`](../tabler/shared/includes/docs/)
- **Docs Card:** [`docs-card.html`](../tabler/shared/includes/docs/docs-card.html)
- **Logo:** [`logo.html`](../tabler/shared/includes/docs/logo.html)
- **Menu:** [`menu.html`](../tabler/shared/includes/docs/menu.html)
- **Navbar:** [`navbar.html`](../tabler/shared/includes/docs/navbar.html)
- **TOC:** [`toc.html`](../tabler/shared/includes/docs/toc.html)
- **Download Button:** [`download-button.html`](../tabler/shared/includes/docs/download-button.html)
- **Open Source Resources:** [`open-source-resources.html`](../tabler/shared/includes/docs/open-source-resources.html)
