<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
//Rotta Statica

Route::get('/', [PageController::class, 'welcome'])->name('welcome')->middleware(['verified']);
Route::get('/ciao', [PageController::class, 'ciao'])->name('ciao');

//Rotte Dinamiche
Route::get('/utente/{id}', [PageController::class, 'user'])->name('user');

Route::resource('product', ProductController::class)->middleware('auth');
