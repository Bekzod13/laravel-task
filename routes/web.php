<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MainnController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/',  [MainnController::class, 'main'])->name('main');
    Route::get('/dashboard', [MainnController::class, 'dashboard'])->name('dashboard');
    Route::resource('/applications', ApplicationController::class);
});


require __DIR__.'/auth.php';
