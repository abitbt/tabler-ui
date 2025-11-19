<?php

describe('Icons Component', function () {
    it('displays the icons demo page without errors', function () {
        $page = $this->visit('http://tabler-demo.test/components/icons');

        $page->assertSee('Icons')
            ->assertNoJavascriptErrors();
    });
});

describe('Toasts Component', function () {
    it('displays the toasts demo page without errors', function () {
        $page = $this->visit('http://tabler-demo.test/components/toasts');

        $page->assertSee('Toasts')
            ->assertNoJavascriptErrors();
    });
});

describe('Home Page', function () {
    it('displays the demo home page without errors', function () {
        $page = $this->visit('http://tabler-demo.test/');

        $page->assertSee('Tabler Blade')
            ->assertNoJavascriptErrors();
    });

    it('has navigation links to all component pages', function () {
        $page = $this->visit('http://tabler-demo.test/');

        $page->assertSee('Button')
            ->assertSee('Badge')
            ->assertSee('Card')
            ->assertSee('Modal');
    });
});
