<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('home');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas de perfil (solo usuarios autenticados)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Mostrar perfil de cualquier usuario
Route::get('/profiles/{user}', [ProfileController::class, 'show'])->name('profiles.show');

// Rutas de roles
Route::get('/admin', function () {
    return 'Área de admin';
})->middleware(['auth', 'role:admin']);

Route::get('/user', function () {
    return 'Área de usuario';
})->middleware(['auth', 'role:user']);

// Rutas de autenticación
require __DIR__.'/auth.php';