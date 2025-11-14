<?php

describe('Badge Component', function () {
    it('renders basic badge with default props', function () {
        $view = $this->blade(
            '<x-tabler::badge>New</x-tabler::badge>'
        );

        $view->assertSee('New');
        $view->assertSee('badge', false);
        $view->assertSee('<span', false);
    });

    it('renders badge with different color variants', function (string $color) {
        $view = $this->blade(
            "<x-tabler::badge color=\"{$color}\">Badge</x-tabler::badge>"
        );

        $view->assertSee("bg-{$color}", false);
        $view->assertSee("text-{$color}-fg", false);
        $view->assertSee('Badge');
    })->with(['primary', 'secondary', 'success', 'warning', 'danger', 'info', 'dark', 'light', 'blue', 'red', 'green']);

    it('renders light variant badge', function () {
        $view = $this->blade(
            '<x-tabler::badge color="primary" light>Light Badge</x-tabler::badge>'
        );

        $view->assertSee('bg-primary-lt', false);
        $view->assertSee('text-primary-lt-fg', false);
        $view->assertSee('Light Badge');
    });

    it('renders light variant badge with all colors', function (string $color) {
        $view = $this->blade(
            "<x-tabler::badge color=\"{$color}\" light>Light</x-tabler::badge>"
        );

        $view->assertSee("bg-{$color}-lt", false);
        $view->assertSee("text-{$color}-lt-fg", false);
    })->with(['blue', 'azure', 'indigo', 'purple', 'pink', 'red', 'orange', 'yellow', 'lime', 'green', 'teal', 'cyan']);

    it('renders badge with start icon', function () {
        $view = $this->blade(
            '<x-tabler::badge color="warning" icon="alert-triangle">Warning</x-tabler::badge>'
        );

        $view->assertSee('icon-tabler-alert-triangle', false);
        $view->assertSee('Warning');
    });

    it('renders badge with end icon', function () {
        $view = $this->blade(
            '<x-tabler::badge color="primary" iconEnd="arrow-right">Next</x-tabler::badge>'
        );

        $view->assertSee('icon-tabler-arrow-right', false);
        $view->assertSee('Next');
    });

    it('renders badge with both start and end icons', function () {
        $view = $this->blade(
            '<x-tabler::badge color="success" icon="check" iconEnd="arrow-right">Complete</x-tabler::badge>'
        );

        $view->assertSee('icon-tabler-check', false);
        $view->assertSee('icon-tabler-arrow-right', false);
        $view->assertSee('Complete');
    });

    it('renders icon-only badge', function () {
        $view = $this->blade(
            '<x-tabler::badge color="danger" icon="trash" iconOnly></x-tabler::badge>'
        );

        $view->assertSee('icon-tabler-trash', false);
        $view->assertSee('badge-icononly', false);
        $view->assertDontSee('trash'); // Text should not be rendered
    });

    it('renders badge as link when href is provided', function () {
        $view = $this->blade(
            '<x-tabler::badge href="/profile" color="blue">Profile</x-tabler::badge>'
        );

        $view->assertSee('<a', false);
        $view->assertSee('href="/profile"', false);
        $view->assertSee('Profile');
        $view->assertDontSee('<span', false);
    });

    it('renders badge as span when no href provided', function () {
        $view = $this->blade(
            '<x-tabler::badge color="primary">Badge</x-tabler::badge>'
        );

        $view->assertSee('<span', false);
        $view->assertDontSee('<a', false);
    });

    it('merges custom CSS classes correctly', function () {
        $view = $this->blade(
            '<x-tabler::badge color="success" class="badge-pill ms-2">Pill</x-tabler::badge>'
        );

        $view->assertSee('badge');
        $view->assertSee('bg-success');
        $view->assertSee('badge-pill');
        $view->assertSee('ms-2');
    });

    it('renders pill badge with class', function () {
        $view = $this->blade(
            '<x-tabler::badge color="info" class="badge-pill">5</x-tabler::badge>'
        );

        $view->assertSee('badge-pill', false);
        $view->assertSee('5');
    });

    it('renders outline badge with class', function () {
        $view = $this->blade(
            '<x-tabler::badge class="badge-outline text-danger">Outlined</x-tabler::badge>'
        );

        $view->assertSee('badge-outline', false);
        $view->assertSee('text-danger', false);
        $view->assertSee('Outlined');
    });

    it('renders small badge with class', function () {
        $view = $this->blade(
            '<x-tabler::badge color="primary" class="badge-sm">Small</x-tabler::badge>'
        );

        $view->assertSee('badge-sm', false);
        $view->assertSee('Small');
    });

    it('renders large badge with class', function () {
        $view = $this->blade(
            '<x-tabler::badge color="primary" class="badge-lg">Large</x-tabler::badge>'
        );

        $view->assertSee('badge-lg', false);
        $view->assertSee('Large');
    });

    it('renders notification badge with class', function () {
        $view = $this->blade(
            '<x-tabler::badge color="red" class="badge-notification badge-pill">9+</x-tabler::badge>'
        );

        $view->assertSee('badge-notification', false);
        $view->assertSee('badge-pill', false);
        $view->assertSee('9+');
    });

    it('renders dot badge with class', function () {
        $view = $this->blade(
            '<x-tabler::badge color="red" class="badge-notification badge-dot"></x-tabler::badge>'
        );

        $view->assertSee('badge-notification', false);
        $view->assertSee('badge-dot', false);
    });

    it('renders blinking badge with class', function () {
        $view = $this->blade(
            '<x-tabler::badge color="red" class="badge-notification badge-blink"></x-tabler::badge>'
        );

        $view->assertSee('badge-notification', false);
        $view->assertSee('badge-blink', false);
    });

    it('passes through custom attributes', function () {
        $view = $this->blade(
            '<x-tabler::badge color="info" id="my-badge" data-test="value">Badge</x-tabler::badge>'
        );

        $view->assertSee('id="my-badge"', false);
        $view->assertSee('data-test="value"', false);
    });

    it('handles empty content gracefully', function () {
        $view = $this->blade(
            '<x-tabler::badge color="info"></x-tabler::badge>'
        );

        $view->assertSee('badge', false);
        $view->assertSee('bg-info', false);
    });

    it('handles numeric content', function () {
        $view = $this->blade(
            '<x-tabler::badge color="red" class="badge-pill">42</x-tabler::badge>'
        );

        $view->assertSee('42');
        $view->assertSee('badge-pill', false);
    });

    it('handles very long content', function () {
        $longText = str_repeat('A', 50);

        $view = $this->blade(
            "<x-tabler::badge color=\"primary\">{$longText}</x-tabler::badge>"
        );

        $view->assertSee($longText);
        $view->assertSee('bg-primary', false);
    });

    it('handles special characters in content', function () {
        $view = $this->blade(
            '<x-tabler::badge color="success">Save & Continue</x-tabler::badge>'
        );

        $view->assertSee('Save');
        $view->assertSee('Continue');
    });

    it('supports Livewire wire attributes', function () {
        $view = $this->blade(
            '<x-tabler::badge wire:click="action" wire:loading.class="opacity-50" color="primary">Click me</x-tabler::badge>'
        );

        $view->assertSee('wire:click="action"', false);
        $view->assertSee('wire:loading.class="opacity-50"', false);
    });

    it('renders multiple badge variations correctly', function () {
        $view = $this->blade('
            <div>
                <x-tabler::badge color="success">Success</x-tabler::badge>
                <x-tabler::badge color="danger" class="badge-pill">5</x-tabler::badge>
                <x-tabler::badge color="warning" icon="alert-triangle">Warning</x-tabler::badge>
            </div>
        ');

        $view->assertSee('Success');
        $view->assertSee('5');
        $view->assertSee('Warning');
        $view->assertSee('bg-success', false);
        $view->assertSee('bg-danger', false);
        $view->assertSee('bg-warning', false);
        $view->assertSee('badge-pill', false);
        $view->assertSee('icon-tabler-alert-triangle', false);
    });

    it('properly combines all modifiers', function () {
        $view = $this->blade(
            '<x-tabler::badge color="primary" icon="star" class="badge-lg badge-pill ms-2">Featured</x-tabler::badge>'
        );

        $view->assertSee('bg-primary', false);
        $view->assertSee('text-primary-fg', false);
        $view->assertSee('badge-lg', false);
        $view->assertSee('badge-pill', false);
        $view->assertSee('ms-2', false);
        $view->assertSee('icon-tabler-star', false);
        $view->assertSee('Featured');
    });

    it('renders badge with link and light variant', function () {
        $view = $this->blade(
            '<x-tabler::badge href="/notifications" color="blue" light class="badge-pill">3</x-tabler::badge>'
        );

        $view->assertSee('<a', false);
        $view->assertSee('href="/notifications"', false);
        $view->assertSee('bg-blue-lt', false);
        $view->assertSee('text-blue-lt-fg', false);
        $view->assertSee('badge-pill', false);
        $view->assertSee('3');
    });

    it('renders badge without color prop', function () {
        $view = $this->blade(
            '<x-tabler::badge>Default</x-tabler::badge>'
        );

        $view->assertSee('badge', false);
        $view->assertSee('Default');
        $view->assertDontSee('bg-', false);
    });

    it('renders badge with only icon prop but not iconOnly', function () {
        $view = $this->blade(
            '<x-tabler::badge color="success" icon="check">Success</x-tabler::badge>'
        );

        $view->assertSee('icon-tabler-check', false);
        $view->assertSee('Success');
        $view->assertDontSee('badge-icononly', false);
    });

    it('renders icon-only badge with light variant', function () {
        $view = $this->blade(
            '<x-tabler::badge color="primary" light icon="star" iconOnly></x-tabler::badge>'
        );

        $view->assertSee('icon-tabler-star', false);
        $view->assertSee('bg-primary-lt', false);
        $view->assertSee('badge-icononly', false);
    });

    it('handles badge in button context', function () {
        $view = $this->blade('
            <button class="btn">
                Notifications
                <x-tabler::badge color="red" class="ms-2">4</x-tabler::badge>
            </button>
        ');

        $view->assertSee('Notifications');
        $view->assertSee('4');
        $view->assertSee('bg-red', false);
        $view->assertSee('ms-2', false);
    });

    it('handles badge in heading context', function () {
        $view = $this->blade('
            <h3>
                Example heading
                <x-tabler::badge>New</x-tabler::badge>
            </h3>
        ');

        $view->assertSee('Example heading');
        $view->assertSee('New');
        $view->assertSee('<h3', false);
    });

    it('renders badge with custom element as link', function () {
        $view = $this->blade(
            '<x-tabler::badge href="#section" color="info" light>Jump to section</x-tabler::badge>'
        );

        $view->assertSee('<a', false);
        $view->assertSee('href="#section"', false);
        $view->assertSee('Jump to section');
    });

    it('renders badge with various icon types', function (string $icon) {
        $view = $this->blade(
            "<x-tabler::badge color=\"primary\" icon=\"{$icon}\">Text</x-tabler::badge>"
        );

        $view->assertSee("icon-tabler-{$icon}", false);
        $view->assertSee('Text');
    })->with(['check', 'x', 'star', 'heart', 'plus', 'minus', 'arrow-right', 'alert-circle']);

    it('properly escapes HTML in content', function () {
        $view = $this->blade(
            '<x-tabler::badge color="danger"><script>alert("xss")</script></x-tabler::badge>'
        );

        $view->assertSee('&lt;script&gt;', false);
        $view->assertDontSee('<script>', false);
    });

    it('handles badge with multiple CSS utility classes', function () {
        $view = $this->blade(
            '<x-tabler::badge color="success" class="badge-pill badge-lg ms-2 me-2 mt-1">Badge</x-tabler::badge>'
        );

        $view->assertSee('badge-pill', false);
        $view->assertSee('badge-lg', false);
        $view->assertSee('ms-2', false);
        $view->assertSee('me-2', false);
        $view->assertSee('mt-1', false);
    });
});
