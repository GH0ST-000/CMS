<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;


Route::controller(LandingController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/authentication_user', 'create')->name('authentication_user');
        Route::get('/login_user', 'login_user')->name('login_user');
    });


Route::get('/dashboard', function () {
    return view('Frontend.pages.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
