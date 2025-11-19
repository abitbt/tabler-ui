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
    Route::get('/alert', function () {
        return view('demo.alert');
    })->name('alert');

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

    Route::get('/input', function () {
        return view('demo.input');
    })->name('input');

    Route::get('/checkbox', function () {
        return view('demo.checkbox');
    })->name('checkbox');

    Route::get('/radio', function () {
        return view('demo.radio');
    })->name('radio');

    Route::get('/radio-group', function () {
        return view('demo.radio-group');
    })->name('radio-group');

    Route::get('/date-picker', function () {
        return view('demo.date-picker');
    })->name('date-picker');

    Route::get('/pagination', function () {
        return view('demo.pagination');
    })->name('pagination');

    Route::get('/avatar', function () {
        return view('demo.avatar');
    })->name('avatar');

    Route::get('/dropdown', function () {
        return view('demo.dropdown');
    })->name('dropdown');

    Route::get('/table', function () {
        return view('demo.table');
    })->name('table');
});
