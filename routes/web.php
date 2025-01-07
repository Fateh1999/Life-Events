<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseCotroller;

// PAGE FOR FORM SIGNUP
Route::get('/', function () {
    return view('welcome');
});

