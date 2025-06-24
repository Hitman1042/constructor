<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Блоки
Route::resource('/blocks', BlockController::class);

// Проекты
Route::resource('/projects', ProjectController::class);

// Форма регистрации
Route::get('/register', function () {
    return view('auth.login', ['tab' => 'register']);
})->name('register');

// Страница входа (GET)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Обработка входа (POST)
Route::post('/login_store', 
[LoginController::class, 'store']   
)->name('login.store');

// Страница регистрации (GET)
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Обработка регистрации (POST)
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');

// Подтверждение Email
Route::get('/verify-email/{userId}/{token}', [App\Http\Controllers\Auth\RegisterController::class, 'verifyEmail'])
    ->name('verify.email');

// Повторная отправка письма
Route::post('/resend-verification', [App\Http\Controllers\Auth\RegisterController::class, 'resendVerification'])
    ->name('resend.verification');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    // Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('/pricing', function () {
        return view('dashboard.pricing');
    })->name('pricing');
    Route::get('/help', function () {
        return view('dashboard.help');
    })->name('help');
});