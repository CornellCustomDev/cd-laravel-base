<?php

Route::get('/examples/testing/form', function () {
    return view('examples/testing/form');
})->name('examples/testing/form');
Route::get('/examples/testing/cds', function () {
    return view('examples/testing/cds');
})->name('examples/testing/cds');

Route::get('/examples/form', function () {
    return view('examples/form');
})->name('examples/form');
