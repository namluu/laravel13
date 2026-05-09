<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('home_page');

Route::get('/about', function () {
    return view('about');
})->name('about_page');

Route::prefix('/backend')->group(function() {
    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [BackendController::class, 'index'])->name('backend');
    });

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
