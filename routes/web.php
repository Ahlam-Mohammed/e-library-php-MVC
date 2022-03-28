<?php

use App\Config\Route;
use App\Controllers\BookController;
use App\Controllers\CategoryController;
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
Route::get('/dashboard-books-show', [BookController::class, 'show']);
Route::get('/dashboard-books-edit', [BookController::class, 'edit']);
Route::post('/dashboard-books-update', [BookController::class, 'update']);
Route::get('/dashboard-books-delete', [BookController::class, 'delete']);
Route::get('/dashboard-books-active', [BookController::class, 'updateIsActive']);

///////// Category Routes /////////
Route::get('/dashboard-categories', [CategoryController::class, 'index']);
Route::get('/dashboard-categories-create', [CategoryController::class, 'create']);
//Route::post('/dashboard-books-store', [CategoryController::class, 'store']);
Route::get('/dashboard-categories-edit', [CategoryController::class, 'edit']);
//Route::post('/dashboard-books-update', [CategoryController::class, 'update']);
//Route::post('/dashboard-books-delete', [BookController::class, 'delete']);