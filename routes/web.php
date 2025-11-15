<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Demo Layout Showcase Routes
|--------------------------------------------------------------------------
|
| These routes showcase all 6 priority Tabler UI layouts:
| - Horizontal (default navbar)
| - Vertical (sidebar)
| - Combo (sidebar + header)
| - Boxed (centered content)
| - Fluid (full-width)
| - Navbar Sticky (sticky navbar)
|
*/

Route::get('/example', function () {
    return view('tabler::examples.layout-combo');
})->name('demo.example');

Route::get('/', function () {
    return view('demo.index');
})->name('demo.index');

Route::prefix('layouts')->name('layouts.')->group(function () {
    Route::get('/horizontal', function () {
        return view('demo.layouts.horizontal');
    })->name('horizontal');

    Route::get('/vertical', function () {
        return view('demo.layouts.vertical');
    })->name('vertical');

    Route::get('/combo', function () {
        return view('demo.layouts.combo');
    })->name('combo');

    Route::get('/boxed', function () {
        return view('demo.layouts.boxed');
    })->name('boxed');

    Route::get('/fluid', function () {
        return view('demo.layouts.fluid');
    })->name('fluid');

    Route::get('/sticky', function () {
        return view('demo.layouts.sticky');
    })->name('sticky');
});

Route::prefix('components')->name('components.')->group(function () {
    Route::get('/badge', function () {
        return view('demo.badge');
    })->name('badge');

    Route::get('/button', function () {
        return view('demo.button');
    })->name('button');

    Route::get('/cards', function () {
        return view('demo.cards');
    })->name('cards');

    Route::get('/icons', function () {
        return view('demo.icons');
    })->name('icons');

    Route::get('/modals', function () {
        return view('demo.modals');
    })->name('modals');

    Route::get('/toasts', function () {
        return view('demo.toasts');
    })->name('toasts');
});
