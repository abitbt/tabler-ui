<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('demo.forms');
});

Route::group(['prefix' => 'demo'],function() {
    Route::get('/button', function () {
        return view('demo.button');
    });

    Route::get('/forms', function () {
        return view('demo.forms');
    });

    Route::get('/cards', function () {
        return view('demo.cards');
    });
});
