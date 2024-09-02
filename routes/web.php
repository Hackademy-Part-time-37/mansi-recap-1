<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
//Rotta Statica
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/ciao', [PageController::class, 'ciao'])->name('ciao');

//Rotte Dinamiche
Route::get('/utente/{id}', [PageController::class, 'user'])->name('user');
