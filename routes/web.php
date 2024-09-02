<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
