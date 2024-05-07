<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::view('/', 'index')->name('get.index');
    Route::view('/profile', 'profile')->name('get.profile');

    Route::resource('wallets', WalletController::class);
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'getLogin')->name('get.login');
    Route::post('/login', 'postLogin')->name('post.login');
    Route::post('/logout', 'postLogout')->name('post.logout');

    Route::get('/register', 'getRegister')->name('get.register');
    Route::post('/register', 'postRegister')->name('post.register');
});
