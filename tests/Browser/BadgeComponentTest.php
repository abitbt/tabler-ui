<?php

it('displays the badge demo page without errors', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Badge')
        ->assertSee('Basic Badges')
        ->assertNoJavascriptErrors();
});

it('renders basic badge colors', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Default')
        ->assertSee('Primary')
        ->assertSee('Secondary')
        ->assertSee('Success')
        ->assertSee('Warning')
        ->assertSee('Danger')
        ->assertSee('Info')
        ->assertSee('Dark')
        ->assertSee('Light');
});

it('renders all tabler color badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('All Tabler Colors')
        ->assertSee('Blue')
        ->assertSee('Azure')
        ->assertSee('Indigo')
        ->assertSee('Purple')
        ->assertSee('Pink')
        ->assertSee('Red')
        ->assertSee('Orange')
        ->assertSee('Yellow')
        ->assertSee('Lime')
        ->assertSee('Green')
        ->assertSee('Teal')
        ->assertSee('Cyan');
});

it('renders light variant badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Light Badges')
        ->assertNoJavascriptErrors();
});

it('renders outline badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Outline Badges')
        ->assertNoJavascriptErrors();
});

it('renders different badge sizes', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Badge Sizes')
        ->assertSee('Small')
        ->assertSee('Default')
        ->assertSee('Large');
});

it('renders pill badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Pill Badges')
        ->assertNoJavascriptErrors();
});

it('renders badges with icons', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Badges with Icons')
        ->assertSee('Featured')
        ->assertSee('Favorite')
        ->assertSee('Verified')
        ->assertSee('Rejected')
        ->assertSee('New')
        ->assertSee('Removed');
});

it('renders badges with trailing icons', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Trailing Icons')
        ->assertSee('Next')
        ->assertSee('Previous')
        ->assertSee('External')
        ->assertSee('Download');
});

it('renders icon-only badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Icon Only')
        ->assertNoJavascriptErrors();
});

it('renders badges in headings', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Badges in Headings')
        ->assertSee('Example heading');
});

it('renders link badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Link Badges')
        ->assertSee('Click me');
});

it('renders positioned badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Positioned Badges')
        ->assertSee('Notifications')
        ->assertSee('Messages')
        ->assertSee('Alerts');
});

it('renders dot badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Empty/Dot Badges')
        ->assertNoJavascriptErrors();
});

it('renders addon badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Addon Badges')
        ->assertSee('Unread')
        ->assertSee('Messages')
        ->assertSee('Tasks')
        ->assertSee('Alerts');
});

it('renders real-world use case badges', function () {
    $page = $this->visit('http://tabler-demo.test/components/badge');

    $page->assertSee('Real-World Use Cases')
        ->assertSee('Status Badges')
        ->assertSee('Draft')
        ->assertSee('Pending')
        ->assertSee('Published')
        ->assertSee('Priority Badges')
        ->assertSee('High')
        ->assertSee('Medium')
        ->assertSee('Low')
        ->assertSee('Category Tags')
        ->assertSee('Laravel')
        ->assertSee('PHP')
        ->assertSee('Version Tags');
});
