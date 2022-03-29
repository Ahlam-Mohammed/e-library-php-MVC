<?php

use App\Config\Route;
use App\Controllers\AuthorController;
use App\Controllers\BookController;
use App\Controllers\CategoryController;
use App\Controllers\CityController;
use App\Controllers\HomeController;
use App\Controllers\PublisherController;
use App\Controllers\UserController;


Route::get('/', [HomeController::class, 'index']);

///////// Book Routes /////////
Route::get('/dashboard-users', [UserController::class, 'index']);
Route::get('/dashboard-users-create', [UserController::class, 'create']);
Route::post('/dashboard-users-store', [UserController::class, 'store']);
Route::get('/dashboard-users-show', [UserController::class, 'show']);
Route::get('/dashboard-users-edit', [UserController::class, 'edit']);
Route::post('/dashboard-users-update', [UserController::class, 'update']);
Route::get('/dashboard-users-delete', [UserController::class, 'delete']);
Route::get('/dashboard-users-active', [UserController::class, 'updateIsActive']);

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
Route::post('/dashboard-categories-store', [CategoryController::class, 'store']);
Route::get('/dashboard-categories-show', [CategoryController::class, 'show']);
Route::get('/dashboard-categories-edit', [CategoryController::class, 'edit']);
Route::post('/dashboard-categories-update', [CategoryController::class, 'update']);
Route::get('/dashboard-categories-delete', [CategoryController::class, 'delete']);
Route::get('/dashboard-categories-active', [CategoryController::class, 'updateIsActive']);

///////// Author Routes /////////
Route::get('/dashboard-authors', [AuthorController::class, 'index']);
Route::get('/dashboard-authors-create', [AuthorController::class, 'create']);
Route::post('/dashboard-authors-store', [AuthorController::class, 'store']);
Route::get('/dashboard-authors-show', [AuthorController::class, 'show']);
Route::get('/dashboard-authors-edit', [AuthorController::class, 'edit']);
Route::post('/dashboard-authors-update', [AuthorController::class, 'update']);
Route::get('/dashboard-authors-delete', [AuthorController::class, 'delete']);
Route::get('/dashboard-authors-active', [AuthorController::class, 'updateIsActive']);

///////// Publisher Routes /////////
Route::get('/dashboard-publishers', [PublisherController::class, 'index']);
Route::get('/dashboard-publishers-create', [PublisherController::class, 'create']);
Route::post('/dashboard-publishers-store', [PublisherController::class, 'store']);
Route::get('/dashboard-publishers-show', [PublisherController::class, 'show']);
Route::get('/dashboard-publishers-edit', [PublisherController::class, 'edit']);
Route::post('/dashboard-publishers-update', [PublisherController::class, 'update']);
Route::get('/dashboard-publishers-delete', [PublisherController::class, 'delete']);
Route::get('/dashboard-publishers-active', [PublisherController::class, 'updateIsActive']);

///////// City Routes /////////
Route::get('/dashboard-cities', [CityController::class, 'index']);
Route::get('/dashboard-cities-create', [CityController::class, 'create']);
Route::post('/dashboard-cities-store', [CityController::class, 'store']);
Route::get('/dashboard-cities-show', [CityController::class, 'show']);
Route::get('/dashboard-cities-edit', [CityController::class, 'edit']);
Route::post('/dashboard-cities-update', [CityController::class, 'update']);
Route::get('/dashboard-cities-delete', [CityController::class, 'delete']);
Route::get('/dashboard-cities-active', [CityController::class, 'updateIsActive']);