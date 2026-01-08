<?php

use App\Livewire\Users\UserExamples;
use App\Livewire\Users\UserShow;
use App\Livewire\Users\UserTable;
use App\Livewire\Users\UserEdit;
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
    Route::get('/examples/table', UserTable::class)->name('examples/table');
    Route::get('/examples/user-examples', UserExamples::class)->name('examples/user-examples');

    Route::get('/examples/users/{user}/edit', UserEdit::class)->name('examples/users/edit');
    Route::get('/examples/users/{user}', UserShow::class)->name('examples/users/show');

});
