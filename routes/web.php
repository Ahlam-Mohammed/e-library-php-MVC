<?php

use App\Config\Route;
use App\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/details', [HomeController::class, 'details']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/category', [HomeController::class, 'category']);

Route::get('/dashboard',[HomeController::class, 'dashboard']);
