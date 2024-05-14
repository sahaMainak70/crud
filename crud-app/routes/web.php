<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/', [CrudController::class, 'index'])->name('home');
Route::get('/create', [CrudController::class, 'create'])->name('create');