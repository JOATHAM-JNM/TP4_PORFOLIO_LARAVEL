<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ContactController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');

Route::resource('projets', ProjetController::class);

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');
Route::put('/messages/{id}', [ContactController::class, 'update'])->name('messages.update');
Route::delete('/messages/{id}', [ContactController::class, 'destroy'])->name('messages.destroy');
