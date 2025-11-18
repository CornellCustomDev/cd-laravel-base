<?php

use CornellCustomDev\LaravelStarterKit\CUAuth\Middleware\CUAuth;

Route::group(['middleware' => [CUAuth::class]], function () {
    Route::get('/examples/cds', function () {
        return view('examples/cds');
    })->name('examples/cds');
    Route::get('/examples/form', function () {
        return view('examples/form');
    })->name('examples/form');
});
