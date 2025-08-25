<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-user', [UserController::class, 'create'])->name('users.create');

Route::post('/store-user', [UserController::class, 'store'])->name('users.store');
