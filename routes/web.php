<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\ProjectController;

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Блоки
Route::resource('/blocks', BlockController::class);

// Проекты
Route::resource('/projects', ProjectController::class);