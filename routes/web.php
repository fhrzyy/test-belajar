<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('register', function () {
    return view('auth.register');
});
Route::get('login', function () {
    return view('auth.login');
});




Route::post('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');      
Route::post('regis', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');      

