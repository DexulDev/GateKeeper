<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::post('/register', [LoginController::class, 'register'])->name('login.register');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/error', function () {
    return view('error');
})->name('error');

Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');