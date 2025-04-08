<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSessionCookie;


Route::middleware(['check.session'])->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.login');
    Route::post('/register', [LoginController::class, 'register'])->name('login.register');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
    Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
});

Route::get('/error', function () {
    return view('error');
})->name('error');


Route::get('/registered', function () {
    return view('registered');
})->name('registered');
