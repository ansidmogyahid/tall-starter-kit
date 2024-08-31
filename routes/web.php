<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {

    Route::view('dashboard', 'pages.dashboard')
        ->middleware(['verified'])
        ->name('dashboard');

    Route::view('profile', 'pages.profile')
        ->name('profile');

    Route::view('permissions', 'pages.permissions')
        ->name('permission');
});


require __DIR__.'/auth.php';
