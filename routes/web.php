<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [HelloController::class, 'about']);

Route::get('/home', [HelloController::class, 'index']);
