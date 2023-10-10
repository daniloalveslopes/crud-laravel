<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'getAll']);
Route::get('/users/{id}', [UserController::class, 'getById']);
Route::get('/users/update/{id}', [UserController::class, 'update']);
