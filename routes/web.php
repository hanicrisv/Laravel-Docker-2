<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
#Route::get('/profiles/{user}', [ProfileController::class, 'show'])->name('profiles.show');

#Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
#Route::get('/roles', [RoleController::class, 'index']);


Route::get('/admin', [AuthController::class, 'admin'])->middleware('auth');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth');

// Rutas de autenticación

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';