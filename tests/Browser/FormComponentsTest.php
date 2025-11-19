<?php

describe('Input Component', function () {
    it('displays the input demo page without errors', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Input')
            ->assertSee('Basic Examples')
            ->assertNoJavascriptErrors();
    });

    it('renders basic input types', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Text Input')
            ->assertSee('Email Input')
            ->assertSee('Password Input')
            ->assertSee('Number Input')
            ->assertSee('Date Input')
            ->assertSee('URL Input');
    });

    it('renders inputs with labels and help text', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Labels & Required Fields')
            ->assertSee('Standard Label')
            ->assertSee('Required Field')
            ->assertSee('With Help Text');
    });

    it('renders validation states', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Validation States')
            ->assertSee('Valid Input')
            ->assertSee('Invalid Input');
    });

    it('renders different input sizes', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Size Variants')
            ->assertSee('Small Input')
            ->assertSee('Default Input')
            ->assertSee('Large Input');
    });

    it('renders style variants', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Style Variants')
            ->assertSee('Rounded Input')
            ->assertSee('Flush Input')
            ->assertSee('Light Input')
            ->assertSee('Dark Input');
    });

    it('renders inputs with icons', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Icon Support')
            ->assertSee('Leading Icon')
            ->assertSee('Trailing Icon')
            ->assertSee('User Icon')
            ->assertSee('Mail Icon');
    });

    it('renders input states', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Input States')
            ->assertSee('Disabled Input')
            ->assertSee('Readonly Input')
            ->assertSee('With Value');
    });

    it('shows livewire integration examples', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Livewire Integration')
            ->assertSee('wire:model');
    });

    it('shows accessibility features', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Accessibility Features')
            ->assertSee('Keyboard Navigation')
            ->assertSee('Screen Readers');
    });

    it('shows props reference table', function () {
        $page = $this->visit('http://tabler-demo.test/components/input');

        $page->assertSee('Props Reference')
            ->assertSee('name')
            ->assertSee('type')
            ->assertSee('placeholder');
    });
});

describe('Checkbox Component', function () {
    it('displays the checkbox demo page without errors', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Checkbox')
            ->assertSee('Basic Examples')
            ->assertNoJavascriptErrors();
    });

    it('renders basic checkbox states', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Basic checkbox')
            ->assertSee('Checked checkbox')
            ->assertSee('Disabled checkbox')
            ->assertSee('Disabled checked checkbox');
    });

    it('renders checkboxes with descriptions', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Checkboxes with Descriptions')
            ->assertSee('Receive notifications')
            ->assertSee('Enable dark mode')
            ->assertSee('Subscribe to newsletter');
    });

    it('renders inline checkboxes', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Inline Checkboxes')
            ->assertSee('Select your preferences');
    });

    it('renders required checkboxes', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Required Checkboxes')
            ->assertSee('Terms & Conditions')
            ->assertSee('Privacy Policy');
    });

    it('renders validation states', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Validation States')
            ->assertSee('Checkbox with error')
            ->assertSee('You must accept this to continue');
    });

    it('renders checkboxes with help text', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Checkboxes with Help Text')
            ->assertSee('Enable two-factor authentication');
    });

    it('shows form integration example', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Form Integration Example')
            ->assertSee('Notification Preferences')
            ->assertSee('Email notifications')
            ->assertSee('Marketing Preferences');
    });

    it('shows livewire integration examples', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Livewire Integration')
            ->assertSee('wire:model');
    });

    it('shows accessibility features', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Accessibility Features')
            ->assertSee('Space to toggle');
    });

    it('shows props reference table', function () {
        $page = $this->visit('http://tabler-demo.test/components/checkbox');

        $page->assertSee('Props Reference')
            ->assertSee('checked')
            ->assertSee('description')
            ->assertSee('inline');
    });
});

describe('Radio Component', function () {
    it('displays the radio demo page without errors', function () {
        $page = $this->visit('http://tabler-demo.test/components/radio');

        $page->assertSee('Radio')
            ->assertNoJavascriptErrors();
    });

    it('displays the radio group demo page without errors', function () {
        $page = $this->visit('http://tabler-demo.test/components/radio-group');

        $page->assertSee('Radio Group')
            ->assertNoJavascriptErrors();
    });
});
