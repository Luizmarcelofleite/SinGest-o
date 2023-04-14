<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/login','login.form')->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/auth',[LoginController::class, 'auth'])->name('login.auth');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'save'])->name('register.save');



