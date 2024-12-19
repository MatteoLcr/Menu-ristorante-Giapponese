<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('welcome');
// creazione del piatto
Route::get('/dish/create', [DishController::class, 'create'])->name('dish.create');
Route::post('/dish/create', [DishController::class, 'store'])->name('dish.store');
Route::get('/dish/index', [DishController::class, 'create'])->name('dish.index');
Route::get('/dish/search', [DishController::class, 'dishSearch'])->name('dish.search');

