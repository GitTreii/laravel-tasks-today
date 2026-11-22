<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;

Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'list']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
