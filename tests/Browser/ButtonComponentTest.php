<?php

it('displays the button demo page without errors', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Button')
        ->assertSee('Standard Buttons')
        ->assertSee('Outline Buttons')
        ->assertNoJavascriptErrors();
});

it('renders standard button variants', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Primary')
        ->assertSee('Secondary')
        ->assertSee('Success')
        ->assertSee('Warning')
        ->assertSee('Danger')
        ->assertSee('Info')
        ->assertSee('Dark')
        ->assertSee('Light');
});

it('renders outline button variants', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Outline Buttons')
        ->assertNoJavascriptErrors();
});

it('renders ghost button variants', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Ghost Buttons')
        ->assertNoJavascriptErrors();
});

it('renders different button sizes', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Button Sizes')
        ->assertSee('Small')
        ->assertSee('Default')
        ->assertSee('Large');
});

it('renders pill and square buttons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Pill & Square Buttons')
        ->assertSee('Pill Button')
        ->assertSee('Square');
});

it('renders buttons with icons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Buttons with Icons')
        ->assertSee('Upload')
        ->assertSee('I like')
        ->assertSee('I agree')
        ->assertSee('More');
});

it('renders icon-only buttons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Icon-Only Buttons')
        ->assertNoJavascriptErrors();
});

it('renders loading buttons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Loading Buttons')
        ->assertSee('Loading')
        ->assertSee('Processing...');
});

it('renders disabled buttons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Disabled Buttons')
        ->assertNoJavascriptErrors();
});

it('renders social media buttons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Social Media Buttons')
        ->assertSee('Facebook')
        ->assertSee('Twitter')
        ->assertSee('Google')
        ->assertSee('GitHub');
});

it('renders animated buttons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Animated Buttons')
        ->assertSee('Save')
        ->assertSee('Add')
        ->assertSee('Notifications')
        ->assertSee('Love')
        ->assertSee('Confirm');
});

it('renders button groups', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Button Groups')
        ->assertSee('Left')
        ->assertSee('Middle')
        ->assertSee('Right')
        ->assertSee('Top')
        ->assertSee('Bottom');
});

it('renders keyboard shortcut buttons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Keyboard Shortcuts')
        ->assertSee('Quick Search')
        ->assertSee('Save')
        ->assertSee('Close');
});

it('renders full width buttons', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->assertSee('Full Width Buttons')
        ->assertSee('Full Width Button')
        ->assertSee('Block Button');
});

it('can navigate back to home from button page', function () {
    $page = $this->visit('http://tabler-demo.test/components/button');

    $page->click('Back to home')
        ->assertSee('Tabler Blade');
});
