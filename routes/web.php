<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Homepage
Route::get('/', [ArticleController::class, 'welcome'])->name('welcome');

// Pagina Indice (tutti gli articoli)
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');

// Pagina Dettaglio
Route::get('/articolo/dettaglio/{id}', [ArticleController::class, 'show'])->name('articles.show');