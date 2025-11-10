# Tabler UI Component Reference

> Comprehensive reference for Tabler UI components - extracted from Tabler v1.4.0

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
**Preview:** [`tabler/docs/dist/ui/getting-started/installation/index.html`](../tabler/docs/dist/ui/getting-started/installation/index.html)

### 2. Download

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/download.md`](../tabler/docs/content/ui/getting-started/download.md)
**Preview:** [`tabler/docs/dist/ui/getting-started/download/index.html`](../tabler/docs/dist/ui/getting-started/download/index.html)

### 3. Browser Support

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/browser-support.md`](../tabler/docs/content/ui/getting-started/browser-support.md)
**Preview:** [`tabler/docs/dist/ui/getting-started/browser-support/index.html`](../tabler/docs/dist/ui/getting-started/browser-support/index.html)

### 4. Customize

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/customize.md`](../tabler/docs/content/ui/getting-started/customize.md)
**Preview:** [`tabler/docs/dist/ui/getting-started/customize/index.html`](../tabler/docs/dist/ui/getting-started/customize/index.html)

### 5. License

**Template:** [`tabler/preview/pages/license.html`](../tabler/preview/pages/license.html)
**Documentation:** [`tabler/docs/content/ui/getting-started/license.md`](../tabler/docs/content/ui/getting-started/license.md)
**Preview:** [`tabler/docs/dist/ui/getting-started/license/index.html`](../tabler/docs/dist/ui/getting-started/license/index.html)

### 6. FAQ

**Template:** [`tabler/preview/pages/faq.html`](../tabler/preview/pages/faq.html)
**Documentation:** [`tabler/docs/content/ui/getting-started/faq.md`](../tabler/docs/content/ui/getting-started/faq.md)
**Preview:** [`tabler/docs/dist/ui/getting-started/faq/index.html`](../tabler/docs/dist/ui/getting-started/faq/index.html)

### 7. How to Contribute

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/how-to-contribute.md`](../tabler/docs/content/ui/getting-started/how-to-contribute.md)
**Preview:** [`tabler/docs/dist/ui/getting-started/how-to-contribute/index.html`](../tabler/docs/dist/ui/getting-started/how-to-contribute/index.html)

### 8. References

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/getting-started/references.md`](../tabler/docs/content/ui/getting-started/references.md)
**Preview:** [`tabler/docs/dist/ui/getting-started/references/index.html`](../tabler/docs/dist/ui/getting-started/references/index.html)

---

## Base Styles

### 9. Colors

**Template:** [`tabler/preview/pages/colors.html`](../tabler/preview/pages/colors.html)
**Documentation:** [`tabler/docs/content/ui/base/colors.md`](../tabler/docs/content/ui/base/colors.md)
**Preview:** [`tabler/docs/dist/ui/base/colors/index.html`](../tabler/docs/dist/ui/base/colors/index.html)

### 10. Typography

**Template:** [`tabler/preview/pages/typography.html`](../tabler/preview/pages/typography.html)
**Documentation:** [`tabler/docs/content/ui/base/typography.md`](../tabler/docs/content/ui/base/typography.md)
**Preview:** [`tabler/docs/dist/ui/base/typography/index.html`](../tabler/docs/dist/ui/base/typography/index.html)

---

## User Input Components

### 11. Buttons

**Template:** [`tabler/preview/pages/buttons.html`](../tabler/preview/pages/buttons.html)
**Documentation:** [`tabler/docs/content/ui/components/buttons.md`](../tabler/docs/content/ui/components/buttons.md)
**Preview:** [`tabler/docs/dist/ui/components/buttons/index.html`](../tabler/docs/dist/ui/components/buttons/index.html)

### 12. Form Elements

**Template:** [`tabler/preview/pages/form-elements.html`](../tabler/preview/pages/form-elements.html)
**Documentation:** [`tabler/docs/content/ui/forms/form-elements.md`](../tabler/docs/content/ui/forms/form-elements.md)
**Preview:** [`tabler/docs/dist/ui/forms/form-elements/index.html`](../tabler/docs/dist/ui/forms/form-elements/index.html)

### 13. Form Validation

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/forms/form-validation.md`](../tabler/docs/content/ui/forms/form-validation.md)
**Preview:** [`tabler/docs/dist/ui/forms/form-validation/index.html`](../tabler/docs/dist/ui/forms/form-validation/index.html)

### 14. Form Helpers

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/forms/form-helpers.md`](../tabler/docs/content/ui/forms/form-helpers.md)
**Preview:** [`tabler/docs/dist/ui/forms/form-helpers/index.html`](../tabler/docs/dist/ui/forms/form-helpers/index.html)

### 15. Form Fieldset

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/forms/form-fieldset.md`](../tabler/docs/content/ui/forms/form-fieldset.md)
**Preview:** [`tabler/docs/dist/ui/forms/form-fieldset/index.html`](../tabler/docs/dist/ui/forms/form-fieldset/index.html)

### 16. Form Color Check

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/forms/form-color-check.md`](../tabler/docs/content/ui/forms/form-color-check.md)
**Preview:** [`tabler/docs/dist/ui/forms/form-color-check/index.html`](../tabler/docs/dist/ui/forms/form-color-check/index.html)

### 17. Form Image Check

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/forms/form-image-check.md`](../tabler/docs/content/ui/forms/form-image-check.md)
**Preview:** [`tabler/docs/dist/ui/forms/form-image-check/index.html`](../tabler/docs/dist/ui/forms/form-image-check/index.html)

### 18. Form Input Mask

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/forms/form-input-mask.md`](../tabler/docs/content/ui/forms/form-input-mask.md)
**Preview:** [`tabler/docs/dist/ui/forms/form-input-mask/index.html`](../tabler/docs/dist/ui/forms/form-input-mask/index.html)

### 19. Form Selectboxes

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/forms/form-selectboxes.md`](../tabler/docs/content/ui/forms/form-selectboxes.md)
**Preview:** [`tabler/docs/dist/ui/forms/form-selectboxes/index.html`](../tabler/docs/dist/ui/forms/form-selectboxes/index.html)

### 20. Autosize

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/autosize.md`](../tabler/docs/content/ui/components/autosize.md)
**Preview:** [`tabler/docs/dist/ui/components/autosize/index.html`](../tabler/docs/dist/ui/components/autosize/index.html)

### 21. Dropzone

**Template:** [`tabler/preview/pages/dropzone.html`](../tabler/preview/pages/dropzone.html)
**Documentation:** [`tabler/docs/content/ui/components/dropzone.md`](../tabler/docs/content/ui/components/dropzone.md)
**Preview:** [`tabler/docs/dist/ui/components/dropzone/index.html`](../tabler/docs/dist/ui/components/dropzone/index.html)

### 22. Range Slider

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/range-slider.md`](../tabler/docs/content/ui/components/range-slider.md)
**Preview:** [`tabler/docs/dist/ui/components/range-slider/index.html`](../tabler/docs/dist/ui/components/range-slider/index.html)

### 23. Segmented Control

**Template:** [`tabler/preview/pages/segmented-control.html`](../tabler/preview/pages/segmented-control.html)
**Documentation:** [`tabler/docs/content/ui/components/segmented-control.md`](../tabler/docs/content/ui/components/segmented-control.md)
**Preview:** [`tabler/docs/dist/ui/components/segmented-control/index.html`](../tabler/docs/dist/ui/components/segmented-control/index.html)

### 24. Switch Icon

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/switch-icon.md`](../tabler/docs/content/ui/components/switch-icon.md)
**Preview:** [`tabler/docs/dist/ui/components/switch-icon/index.html`](../tabler/docs/dist/ui/components/switch-icon/index.html)

---

## Feedback & Notifications

### 25. Alerts

**Template:** [`tabler/preview/pages/alerts.html`](../tabler/preview/pages/alerts.html)
**Documentation:** [`tabler/docs/content/ui/components/alerts.md`](../tabler/docs/content/ui/components/alerts.md)
**Preview:** [`tabler/docs/dist/ui/components/alerts/index.html`](../tabler/docs/dist/ui/components/alerts/index.html)

### 26. Modals

**Template:** [`tabler/preview/pages/modals.html`](../tabler/preview/pages/modals.html)
**Documentation:** [`tabler/docs/content/ui/components/modals.md`](../tabler/docs/content/ui/components/modals.md)
**Preview:** [`tabler/docs/dist/ui/components/modals/index.html`](../tabler/docs/dist/ui/components/modals/index.html)

### 27. Toasts

**Template:** [`tabler/preview/pages/toasts.html`](../tabler/preview/pages/toasts.html)
**Documentation:** [`tabler/docs/content/ui/components/toasts.md`](../tabler/docs/content/ui/components/toasts.md)
**Preview:** [`tabler/docs/dist/ui/components/toasts/index.html`](../tabler/docs/dist/ui/components/toasts/index.html)

### 28. Progress

**Template:** [`tabler/preview/pages/progress.html`](../tabler/preview/pages/progress.html)
**Documentation:** [`tabler/docs/content/ui/components/progress.md`](../tabler/docs/content/ui/components/progress.md)
**Preview:** [`tabler/docs/dist/ui/components/progress/index.html`](../tabler/docs/dist/ui/components/progress/index.html)

### 29. Spinners

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/spinners.md`](../tabler/docs/content/ui/components/spinners.md)
**Preview:** [`tabler/docs/dist/ui/components/spinners/index.html`](../tabler/docs/dist/ui/components/spinners/index.html)

### 30. Placeholder

**Template:** [`tabler/preview/pages/placeholder.html`](../tabler/preview/pages/placeholder.html)
**Documentation:** [`tabler/docs/content/ui/components/placeholder.md`](../tabler/docs/content/ui/components/placeholder.md)
**Preview:** [`tabler/docs/dist/ui/components/placeholder/index.html`](../tabler/docs/dist/ui/components/placeholder/index.html)

---

## Layout & Navigation

### 31. Page Headers

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/layout/page-headers.md`](../tabler/docs/content/ui/layout/page-headers.md)
**Preview:** [`tabler/docs/dist/ui/layout/page-headers/index.html`](../tabler/docs/dist/ui/layout/page-headers/index.html)

### 32. Page Layouts

**Template:** [`tabler/preview/pages/layout-boxed.html`](../tabler/preview/pages/layout-boxed.html)
**Documentation:** [`tabler/docs/content/ui/layout/page-layouts.md`](../tabler/docs/content/ui/layout/page-layouts.md)
**Preview:** [`tabler/docs/dist/ui/layout/page-layouts/index.html`](../tabler/docs/dist/ui/layout/page-layouts/index.html)

### 33. Navbars

**Template:** [`tabler/preview/pages/layout-navbar-dark.html`](../tabler/preview/pages/layout-navbar-dark.html)
**Documentation:** [`tabler/docs/content/ui/layout/navbars.md`](../tabler/docs/content/ui/layout/navbars.md)
**Preview:** [`tabler/docs/dist/ui/layout/navbars/index.html`](../tabler/docs/dist/ui/layout/navbars/index.html)

### 34. Navs & Tabs (Navigation)

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/layout/navs-tabs.md`](../tabler/docs/content/ui/layout/navs-tabs.md)
**Preview:** [`tabler/docs/dist/ui/layout/navs-tabs/index.html`](../tabler/docs/dist/ui/layout/navs-tabs/index.html)

### 35. Breadcrumb

**Template:** [`tabler/preview/pages/navigation.html`](../tabler/preview/pages/navigation.html)
**Documentation:** [`tabler/docs/content/ui/components/breadcrumb.md`](../tabler/docs/content/ui/components/breadcrumb.md)
**Preview:** [`tabler/docs/dist/ui/components/breadcrumb/index.html`](../tabler/docs/dist/ui/components/breadcrumb/index.html)

### 36. Pagination

**Template:** [`tabler/preview/pages/pagination.html`](../tabler/preview/pages/pagination.html)
**Documentation:** [`tabler/docs/content/ui/components/pagination.md`](../tabler/docs/content/ui/components/pagination.md)
**Preview:** [`tabler/docs/dist/ui/components/pagination/index.html`](../tabler/docs/dist/ui/components/pagination/index.html)

### 37. Steps

**Template:** [`tabler/preview/pages/steps.html`](../tabler/preview/pages/steps.html)
**Documentation:** [`tabler/docs/content/ui/components/steps.md`](../tabler/docs/content/ui/components/steps.md)
**Preview:** [`tabler/docs/dist/ui/components/steps/index.html`](../tabler/docs/dist/ui/components/steps/index.html)

---

## Content Display

### 38. Cards

**Template:** [`tabler/preview/pages/cards.html`](../tabler/preview/pages/cards.html)
**Documentation:** [`tabler/docs/content/ui/components/cards.md`](../tabler/docs/content/ui/components/cards.md)
**Preview:** [`tabler/docs/dist/ui/components/cards/index.html`](../tabler/docs/dist/ui/components/cards/index.html)

### 39. Tables

**Template:** [`tabler/preview/pages/tables.html`](../tabler/preview/pages/tables.html)
**Documentation:** [`tabler/docs/content/ui/components/tables.md`](../tabler/docs/content/ui/components/tables.md)
**Preview:** [`tabler/docs/dist/ui/components/tables/index.html`](../tabler/docs/dist/ui/components/tables/index.html)

### 40. Empty States

**Template:** [`tabler/preview/pages/empty.html`](../tabler/preview/pages/empty.html)
**Documentation:** [`tabler/docs/content/ui/components/empty.md`](../tabler/docs/content/ui/components/empty.md)
**Preview:** [`tabler/docs/dist/ui/components/empty/index.html`](../tabler/docs/dist/ui/components/empty/index.html)

### 41. Divider

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/divider.md`](../tabler/docs/content/ui/components/divider.md)
**Preview:** [`tabler/docs/dist/ui/components/divider/index.html`](../tabler/docs/dist/ui/components/divider/index.html)

### 42. Timelines

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/timelines.md`](../tabler/docs/content/ui/components/timelines.md)
**Preview:** [`tabler/docs/dist/ui/components/timelines/index.html`](../tabler/docs/dist/ui/components/timelines/index.html)

---

## Data Visualization

### 43. Charts

**Template:** [`tabler/preview/pages/charts.html`](../tabler/preview/pages/charts.html)
**Documentation:** [`tabler/docs/content/ui/components/charts.md`](../tabler/docs/content/ui/components/charts.md)
**Preview:** [`tabler/docs/dist/ui/components/charts/index.html`](../tabler/docs/dist/ui/components/charts/index.html)

### 44. Datagrid

**Template:** [`tabler/preview/pages/datagrid.html`](../tabler/preview/pages/datagrid.html)
**Documentation:** [`tabler/docs/content/ui/components/datagrid.md`](../tabler/docs/content/ui/components/datagrid.md)
**Preview:** [`tabler/docs/dist/ui/components/datagrid/index.html`](../tabler/docs/dist/ui/components/datagrid/index.html)

### 45. Vector Maps

**Template:** [`tabler/preview/pages/maps-vector.html`](../tabler/preview/pages/maps-vector.html)
**Documentation:** [`tabler/docs/content/ui/components/vector-maps.md`](../tabler/docs/content/ui/components/vector-maps.md)
**Preview:** [`tabler/docs/dist/ui/components/vector-maps/index.html`](../tabler/docs/dist/ui/components/vector-maps/index.html)

### 46. Countup

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/countup.md`](../tabler/docs/content/ui/components/countup.md)
**Preview:** [`tabler/docs/dist/ui/components/countup/index.html`](../tabler/docs/dist/ui/components/countup/index.html)

### 47. Tracking

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/tracking.md`](../tabler/docs/content/ui/components/tracking.md)
**Preview:** [`tabler/docs/dist/ui/components/tracking/index.html`](../tabler/docs/dist/ui/components/tracking/index.html)

---

## Visual Elements

### 48. Avatars

**Template:** [`tabler/preview/pages/avatars.html`](../tabler/preview/pages/avatars.html)
**Documentation:** [`tabler/docs/content/ui/components/avatars.md`](../tabler/docs/content/ui/components/avatars.md)
**Preview:** [`tabler/docs/dist/ui/components/avatars/index.html`](../tabler/docs/dist/ui/components/avatars/index.html)

### 49. Badges

**Template:** [`tabler/preview/pages/badges.html`](../tabler/preview/pages/badges.html)
**Documentation:** [`tabler/docs/content/ui/components/badges.md`](../tabler/docs/content/ui/components/badges.md)
**Preview:** [`tabler/docs/dist/ui/components/badges/index.html`](../tabler/docs/dist/ui/components/badges/index.html)

### 50. Icons

**Template:** [`tabler/preview/pages/icons.html`](../tabler/preview/pages/icons.html)
**Documentation:** [`tabler/docs/content/ui/components/icons.md`](../tabler/docs/content/ui/components/icons.md)
**Preview:** [`tabler/docs/dist/ui/components/icons/index.html`](../tabler/docs/dist/ui/components/icons/index.html)

### 51. Statuses

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/statuses.md`](../tabler/docs/content/ui/components/statuses.md)
**Preview:** [`tabler/docs/dist/ui/components/statuses/index.html`](../tabler/docs/dist/ui/components/statuses/index.html)

### 52. Ribbons

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/ribbons.md`](../tabler/docs/content/ui/components/ribbons.md)
**Preview:** [`tabler/docs/dist/ui/components/ribbons/index.html`](../tabler/docs/dist/ui/components/ribbons/index.html)

---

## Interactive Components

### 53. Dropdowns

**Template:** [`tabler/preview/pages/dropdowns.html`](../tabler/preview/pages/dropdowns.html)
**Documentation:** [`tabler/docs/content/ui/components/dropdowns.md`](../tabler/docs/content/ui/components/dropdowns.md)
**Preview:** [`tabler/docs/dist/ui/components/dropdowns/index.html`](../tabler/docs/dist/ui/components/dropdowns/index.html)

### 54. Tabs

**Template:** [`tabler/preview/pages/tabs.html`](../tabler/preview/pages/tabs.html)
**Documentation:** [`tabler/docs/content/ui/components/tabs.md`](../tabler/docs/content/ui/components/tabs.md)
**Preview:** [`tabler/docs/dist/ui/components/tabs/index.html`](../tabler/docs/dist/ui/components/tabs/index.html)

### 55. Offcanvas

**Template:** [`tabler/preview/pages/offcanvas.html`](../tabler/preview/pages/offcanvas.html)
**Documentation:** [`tabler/docs/content/ui/components/offcanvas.md`](../tabler/docs/content/ui/components/offcanvas.md)
**Preview:** [`tabler/docs/dist/ui/components/offcanvas/index.html`](../tabler/docs/dist/ui/components/offcanvas/index.html)

### 56. Carousel

**Template:** [`tabler/preview/pages/carousel.html`](../tabler/preview/pages/carousel.html)
**Documentation:** [`tabler/docs/content/ui/components/carousel.md`](../tabler/docs/content/ui/components/carousel.md)
**Preview:** [`tabler/docs/dist/ui/components/carousel/index.html`](../tabler/docs/dist/ui/components/carousel/index.html)

### 57. Popover

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/popover.md`](../tabler/docs/content/ui/components/popover.md)
**Preview:** [`tabler/docs/dist/ui/components/popover/index.html`](../tabler/docs/dist/ui/components/popover/index.html)

### 58. Tooltips

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/components/tooltips.md`](../tabler/docs/content/ui/components/tooltips.md)
**Preview:** [`tabler/docs/dist/ui/components/tooltips/index.html`](../tabler/docs/dist/ui/components/tooltips/index.html)

---

## Advanced Components

### 59. WYSIWYG

**Template:** [`tabler/preview/pages/wysiwyg.html`](../tabler/preview/pages/wysiwyg.html)
**Documentation:** [`tabler/docs/content/ui/components/wysiwyg.md`](../tabler/docs/content/ui/components/wysiwyg.md)
**Preview:** [`tabler/docs/dist/ui/components/wysiwyg/index.html`](../tabler/docs/dist/ui/components/wysiwyg/index.html)

### 60. Inline Player

**Template:** [`tabler/preview/pages/inline-player.html`](../tabler/preview/pages/inline-player.html)
**Documentation:** [`tabler/docs/content/ui/components/inline-player.md`](../tabler/docs/content/ui/components/inline-player.md)
**Preview:** [`tabler/docs/dist/ui/components/inline-player/index.html`](../tabler/docs/dist/ui/components/inline-player/index.html)

---

## Plugins

### 61. Flags

**Template:** [`tabler/preview/pages/flags.html`](../tabler/preview/pages/flags.html)
**Documentation:** [`tabler/docs/content/ui/plugins/flags.md`](../tabler/docs/content/ui/plugins/flags.md)
**Preview:** [`tabler/docs/dist/ui/plugins/flags/index.html`](../tabler/docs/dist/ui/plugins/flags/index.html)

### 62. Payment Icons

**Template:** [`tabler/preview/pages/payment-providers.html`](../tabler/preview/pages/payment-providers.html)
**Documentation:** [`tabler/docs/content/ui/plugins/payments.md`](../tabler/docs/content/ui/plugins/payments.md)
**Preview:** [`tabler/docs/dist/ui/plugins/payments/index.html`](../tabler/docs/dist/ui/plugins/payments/index.html)

### 63. Social Icons

**Template:** [`tabler/preview/pages/social-icons.html`](../tabler/preview/pages/social-icons.html)
**Documentation:** [`tabler/docs/content/ui/plugins/social-icons.md`](../tabler/docs/content/ui/plugins/social-icons.md)
**Preview:** [`tabler/docs/dist/ui/plugins/social-icons/index.html`](../tabler/docs/dist/ui/plugins/social-icons/index.html)

---

## Utilities

### 64. Borders

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/borders.md`](../tabler/docs/content/ui/utilities/borders.md)
**Preview:** [`tabler/docs/dist/ui/utilities/borders/index.html`](../tabler/docs/dist/ui/utilities/borders/index.html)

### 65. Cursors

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/cursors.md`](../tabler/docs/content/ui/utilities/cursors.md)
**Preview:** [`tabler/docs/dist/ui/utilities/cursors/index.html`](../tabler/docs/dist/ui/utilities/cursors/index.html)

### 66. Interactions

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/interactions.md`](../tabler/docs/content/ui/utilities/interactions.md)
**Preview:** [`tabler/docs/dist/ui/utilities/interactions/index.html`](../tabler/docs/dist/ui/utilities/interactions/index.html)

### 67. Margins

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/margins.md`](../tabler/docs/content/ui/utilities/margins.md)
**Preview:** [`tabler/docs/dist/ui/utilities/margins/index.html`](../tabler/docs/dist/ui/utilities/margins/index.html)

### 68. Vertical Align

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/vertical-align.md`](../tabler/docs/content/ui/utilities/vertical-align.md)
**Preview:** [`tabler/docs/dist/ui/utilities/vertical-align/index.html`](../tabler/docs/dist/ui/utilities/vertical-align/index.html)

### 69. Visually Hidden

**Template:** N/A
**Documentation:** [`tabler/docs/content/ui/utilities/visually-hidden.md`](../tabler/docs/content/ui/utilities/visually-hidden.md)
**Preview:** [`tabler/docs/dist/ui/utilities/visually-hidden/index.html`](../tabler/docs/dist/ui/utilities/visually-hidden/index.html)
