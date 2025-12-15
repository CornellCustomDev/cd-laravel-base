<?php

use CornellCustomDev\LaravelStarterKit\CUAuth\Middleware\CUAuth;

Route::group(['middleware' => [CUAuth::class]], function () {
    Route::get('/login', function () {
        return redirect()->route('home');
    })->name('login');

    Route::get('/examples/cds', function () {
        return view('examples/cds');
    })->name('examples/cds');
    Route::get('/examples/form', function () {
        return view('examples/form');
    })->name('examples/form');
    Route::get('/examples/errors', function () {
        return view('examples/errors');
    })->name('examples/errors');
    Route::get('/examples/table', \App\Livewire\Users\UserTable::class)->name('examples/table');
    Route::get('/examples/user-examples', \App\Livewire\Users\UserExamples::class)->name('examples/user-examples');

});
