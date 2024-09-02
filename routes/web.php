<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
//Rotta Statica
Route::get('/', [PageController::class, 'welcome'])->name('welcome');

//Rotte Dinamiche
Route::get('/utente/{id}', [PageController::class, 'user'])->name('user');
