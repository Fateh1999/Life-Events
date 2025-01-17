<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// PAGE FOR FORM SIGNUP
Route::get('/', [UserController::class, 'home'])
        ->name('home.page');

Route::post('/add_event', [UserController::class, 'addEvent'])
        ->name('add_event.page');

Route::get('/login', [UserController::class, 'login'])
        ->name('login.page');

Route::get('/signup', [UserController::class, 'signup'])
        ->name('signup.page');
