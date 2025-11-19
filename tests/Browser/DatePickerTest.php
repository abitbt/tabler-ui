<?php

describe('Date Picker Component', function () {
    beforeEach(function () {
        $this->demoUrl = '/components/date-picker';
    });

    it('renders the demo page without errors', function () {
        visit($this->demoUrl)
            ->assertSee('Date Picker Component')
            ->assertSee('Basic Examples')
            ->assertNoJavascriptErrors();
    });

    it('loads Litepicker library', function () {
        $page = visit($this->demoUrl);

        $page->assertNoConsoleLogs()
            ->assertScript('typeof Litepicker !== "undefined"', true);
    });

    it('initializes all date picker instances', function () {
        $page = visit($this->demoUrl);

        // Should have 25 instances based on our Tinker tests
        $instanceCount = $page->script('document.querySelectorAll("[data-tabler-date-picker]").length');

        expect($instanceCount)->toBeGreaterThanOrEqual(25);
    });

    it('opens calendar popup on click for basic date picker', function () {
        $page = visit($this->demoUrl);

        // Find first date picker input with icon layout
        $page->click('input[id*="datepicker"]')
            ->pause(500) // Wait for calendar to open
            ->assertVisible('.litepicker');
    });

    it('selects a single date', function () {
        $page = visit($this->demoUrl);

        $page->click('input[id*="datepicker"]')
            ->pause(500)
            ->click('.litepicker .day-item:not(.is-locked):not(.is-start-date)')
            ->pause(300);

        // Verify input has a value
        $inputValue = $page->script('document.querySelector("input[id*=\"datepicker\"]").value');
        expect($inputValue)->not->toBeEmpty();
    });

    it('displays inline calendar', function () {
        $page = visit($this->demoUrl);

        // Scroll to inline calendar section
        $page->scrollTo('.datepicker-inline')
            ->assertVisible('.datepicker-inline .litepicker');
    });

    it('renders different input sizes', function () {
        $page = visit($this->demoUrl);

        // Check for small, default, and large inputs
        $page->assertVisible('.form-control-sm[id*="datepicker"]')
            ->assertVisible('.form-control-lg[id*="datepicker"]');
    });

    it('shows validation error state', function () {
        $page = visit($this->demoUrl);

        // Find input with error state
        $page->assertVisible('.is-invalid[id*="datepicker"]')
            ->assertSee('This field is required');
    });

    it('displays help text', function () {
        $page = visit($this->demoUrl);

        $page->assertSee('Select your preferred date')
            ->assertVisible('.form-hint');
    });

    it('renders calendar icon in icon layout', function () {
        $page = visit($this->demoUrl);

        $page->assertVisible('.input-icon svg.icon');
    });

    it('works with icon prepend layout', function () {
        $page = visit($this->demoUrl);

        // Find icon-prepend layout instance
        $hasIconPrepend = $page->script(
            'document.querySelector(".input-icon .input-icon-addon:first-child") !== null'
        );

        expect($hasIconPrepend)->toBeTrue();
    });

    it('handles disabled state', function () {
        $page = visit($this->demoUrl);

        // Find disabled input
        $page->assertVisible('input[disabled][id*="datepicker"]');

        // Verify it cannot be clicked
        $isDisabled = $page->script(
            'document.querySelector("input[disabled][id*=\"datepicker\"]").disabled'
        );

        expect($isDisabled)->toBeTrue();
    });

    it('handles readonly state', function () {
        $page = visit($this->demoUrl);

        // Find readonly input
        $page->assertVisible('input[readonly][id*="datepicker"]');

        $isReadonly = $page->script(
            'document.querySelector("input[readonly][id*=\"datepicker\"]").readOnly'
        );

        expect($isReadonly)->toBeTrue();
    });

    it('has proper ARIA attributes for accessibility', function () {
        $page = visit($this->demoUrl);

        // Check for required input with aria-required
        $hasAriaRequired = $page->script(
            'document.querySelector("input[required][id*=\"datepicker\"]").getAttribute("aria-required") === "true"'
        );

        expect($hasAriaRequired)->toBeTrue();

        // Check for error input with aria-invalid
        $hasAriaInvalid = $page->script(
            'document.querySelector("input.is-invalid[id*=\"datepicker\"]").getAttribute("aria-invalid") === "true"'
        );

        expect($hasAriaInvalid)->toBeTrue();
    });

    it('displays props reference table', function () {
        $page = visit($this->demoUrl);

        $page->assertSee('Props Reference')
            ->assertSee('label')
            ->assertSee('mode')
            ->assertSee('format')
            ->assertSee('minDate')
            ->assertSee('maxDate');
    });

    it('shows code examples', function () {
        $page = visit($this->demoUrl);

        $page->assertSee('Code Examples')
            ->assertSee('Basic Usage')
            ->assertSee('wire:model')
            ->assertSee('Date Range');
    });
});

describe('Date Picker - Range Mode', function () {
    beforeEach(function () {
        $this->demoUrl = '/components/date-picker';
    });

    it('opens calendar for range selection', function () {
        $page = visit($this->demoUrl);

        // Scroll to range mode section
        $page->scrollTo('#date-modes')
            ->pause(500);

        // Find range mode input (should be in Date Modes section)
        $rangePickers = $page->script(
            'Array.from(document.querySelectorAll("input[id*=\"datepicker\"]")).filter(input => {
                const container = input.closest("[data-tabler-date-picker]");
                const label = container?.querySelector("label");
                return label?.textContent.includes("Range");
            }).length'
        );

        expect($rangePickers)->toBeGreaterThan(0);
    });
});

describe('Date Picker - Date Restrictions', function () {
    beforeEach(function () {
        $this->demoUrl = '/components/date-picker';
    });

    it('displays min date restriction examples', function () {
        $page = visit($this->demoUrl);

        $page->scrollTo('#date-restrictions')
            ->assertSee('Future Dates Only')
            ->assertSee('minDate');
    });

    it('displays max date restriction examples', function () {
        $page = visit($this->demoUrl);

        $page->scrollTo('#date-restrictions')
            ->assertSee('Past Dates Only')
            ->assertSee('maxDate');
    });

    it('shows weekends disabled example', function () {
        $page = visit($this->demoUrl);

        $page->scrollTo('#date-restrictions')
            ->assertSee('No Weekends')
            ->assertSee('disableWeekends');
    });
});

describe('Date Picker - Advanced Features', function () {
    beforeEach(function () {
        $this->demoUrl = '/components/date-picker';
    });

    it('displays multiple months example', function () {
        $page = visit($this->demoUrl);

        $page->scrollTo('#advanced-features')
            ->assertSee('Multiple Months')
            ->assertSee('numberOfMonths');
    });

    it('shows month and year dropdowns example', function () {
        $page = visit($this->demoUrl);

        $page->scrollTo('#advanced-features')
            ->assertSee('Month & Year Dropdowns')
            ->assertSee('monthDropdown')
            ->assertSee('yearDropdown');
    });

    it('displays week numbers example', function () {
        $page = visit($this->demoUrl);

        $page->scrollTo('#advanced-features')
            ->assertSee('Week Numbers')
            ->assertSee('showWeekNumbers');
    });
});

describe('Date Picker - Dark Mode', function () {
    it('works in dark mode', function () {
        $page = visit('/components/date-picker');

        // Switch to dark mode if supported
        $hasDarkMode = $page->script(
            'document.documentElement.classList.contains("dark") || '.
            'document.documentElement.setAttribute("data-bs-theme", "dark") !== null'
        );

        // Click a date picker to open calendar
        $page->click('input[id*="datepicker"]')
            ->pause(500)
            ->assertVisible('.litepicker');

        // Verify calendar is visible in dark mode
        $calendarVisible = $page->script(
            'document.querySelector(".litepicker").offsetParent !== null'
        );

        expect($calendarVisible)->toBeTrue();
    });
});
