<?php

it('displays the cards demo page without errors', function () {
    $page = $this->visit('http://tabler-demo.test/components/cards');

    $page->assertSee('Cards')
        ->assertSee('Basic Cards')
        ->assertNoJavascriptErrors();
});

it('renders basic card structures', function () {
    $page = $this->visit('http://tabler-demo.test/components/cards');

    $page->assertSee('Simple Card')
        ->assertSee('Card with Title in Body')
        ->assertSee('Light Header');
});

it('renders cards with different padding', function () {
    $page = $this->visit('http://tabler-demo.test/components/cards');

    $page->assertSee('Card Padding')
        ->assertSee('Small padding card')
        ->assertSee('Default padding card');
});

it('can navigate back to home from cards page', function () {
    $page = $this->visit('http://tabler-demo.test/components/cards');

    $page->click('Back to home')
        ->assertSee('Tabler Blade');
});
