<?php

use App\Livewire\Users\UserShow;
use App\Livewire\Users\UserUpdate;
use App\Livewire\Users\UserTable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/admin')->group(function () {
    Route::get('/users', UserTable::class)->name('admin.users');
    Route::get('/users/{user}/edit', UserUpdate::class)->name('admin.users.update');
    Route::get('/users/{user}', UserShow::class)->name('admin.users.show');
});

if (file_exists(base_path('routes/examples.php'))) {
    require base_path('routes/examples.php');
}
