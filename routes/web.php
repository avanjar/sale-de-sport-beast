<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\TarifsController;
use App\Http\Controllers\MentionsLegalesController;

Route::get('/', [AccueilController::class, 'index'])->name('accueil.index');
Route::get('/cours', [CoursController::class, 'index'])->name('cours.index');
Route::get('/tarifs', [TarifsController::class,'index'])->name('tarifs.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('mentions-legales.index');