<?php

use App\Config\Route;
use App\Controllers\BookController;
use App\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/details', [HomeController::class, 'details']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/category', [HomeController::class, 'category']);

Route::get('/dashboard',[HomeController::class, 'dashboard']);

///////// Book Routes /////////
Route::get('/dashboard-books', [BookController::class, 'index']);
Route::get('/dashboard-books-create', [BookController::class, 'create']);
Route::post('/dashboard-books-store', [BookController::class, 'store']);
Route::get('/dashboard-books-edit', [BookController::class, 'edit']);
Route::post('/dashboard-books-update', [BookController::class, 'update']);
//Route::post('/dashboard-books-delete', [BookController::class, 'delete']);