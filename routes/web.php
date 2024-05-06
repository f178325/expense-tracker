<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::view('/', 'index')->name('get.index');
});

Route::controller(AuthController::class)->group(function (){
    Route::get('/login', 'getLogin')->name('get.login');
    Route::post('/login', 'postLogin')->name('post.login');
});
