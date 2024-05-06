<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');


Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
