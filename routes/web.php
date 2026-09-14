<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/articles', [PublicController::class, 'articles'])->name('articles');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');


// Rotta per mostrare il form (GET)
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

// Rotta per salvare i dati nel database (POST)
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');