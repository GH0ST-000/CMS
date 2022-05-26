<?php
use App\Http\Controllers\BackEndController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MarketplaceController;
use Illuminate\Support\Facades\Route;


Route::controller(LandingController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/authentication_user', 'create')->name('authentication_user');
    Route::get('/login_user', 'login_user')->name('login_user');
});

Route::controller(BackEndController::class)->middleware(['auth'])->group(function (){
    Route::get('/dashboard','index')->name('dashboard');
    Route::get('/task','Task')->name('task');
});


Route::controller(MarketplaceController::class)->middleware(['auth'])->group(function (){
    Route::get('/marketplace','index')->name('marketplace');;
    Route::post('/add_new_subscription','store')->name('add_new_subscription');;
});



require __DIR__.'/auth.php';
