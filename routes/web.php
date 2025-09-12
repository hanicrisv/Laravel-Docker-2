<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profiles/{user}', [ProfileController::class, 'show'])->name('profiles.show');

Route::get('/dashboard', function () {
    return view('dashboard');

    Route::get('/admin', function () {
    return 'Área de admin';
    })->middleware('role:admin');

     Route::get('/user', function () {
    return 'Área de usuario';
    })->middleware('role:user');

})
->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
require __DIR__.'/auth.php';

Route::get('/profiles/{user}', [ProfileController::class, 'show'])->name('profiles.show');
