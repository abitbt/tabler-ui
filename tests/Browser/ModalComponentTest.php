<?php

it('displays the modals demo page without errors', function () {
    $page = $this->visit('http://tabler-demo.test/components/modals');

    $page->assertSee('Modals')
        ->assertSee('Simple Modal')
        ->assertNoJavascriptErrors();
});

it('renders different modal sizes', function () {
    $page = $this->visit('http://tabler-demo.test/components/modals');

    $page->assertSee('Large Modal')
        ->assertSee('Small Modal')
        ->assertSee('Launch Modal');
});

it('renders scrollable modal option', function () {
    $page = $this->visit('http://tabler-demo.test/components/modals');

    $page->assertSee('Scrollable Modal')
        ->assertSee('Launch Scrollable Modal');
});

it('can launch and close a modal', function () {
    $page = $this->visit('http://tabler-demo.test/components/modals');

    // Open the simple modal
    $page->click('Launch Modal');

    // Click the close button in the simple modal
    $page->click('#modal-simple .btn-close');

    // Verify we're back to the main page
    $page->assertSee('Simple Modal');
});

it('can navigate back to home from modals page', function () {
    $page = $this->visit('http://tabler-demo.test/components/modals');

    $page->click('Back to home')
        ->assertSee('Tabler Blade');
});
