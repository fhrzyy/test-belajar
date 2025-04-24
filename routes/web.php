<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('layouts.app'); // Tambahkan 'layouts.' sebelum 'dashboard'
})->name('dashboard');



Route::get('register', function () {
    return view('auth.register');
});
Route::get('login', function () {
    return view('auth.login');
});

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/home', [HomeController::class, 'show'])->name('home');



Route::post('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');      
Route::post('regis', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');      

