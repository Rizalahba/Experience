<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExperienceController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('users', UserController::class);
Route::resource('experiences', ExperienceController::class);
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/experiences/{id}', [ExperienceController::class, 'show'])->name('experiences.show');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/experiences/{id}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
Route::put('/experiences/{id}', [ExperienceController::class, 'update'])->name('experiences.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
