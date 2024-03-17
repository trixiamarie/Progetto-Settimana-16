<?php

use App\Http\Controllers\AttivitaController;
use App\Http\Controllers\ProgettoController;
use Illuminate\Support\Facades\Route;

Route::get('/progetti/{id}', [ProgettoController::class, 'show'])->name('dettaglioprogetto');
Route::get('/nuovoprogetto',[ProgettoController::class, 'nuovoprogetto'])->name('nuovoprogetto');
Route::post('/nuovoprogetto',[ProgettoController::class, 'store'])->name('salvaprogetto');
Route::delete('/progetti/{progetto}', [ProgettoController::class, 'destroy'])->name('progetto.destroy');
Route::get('/modificaprogetto/{progetto}',[ProgettoController::class, 'edit'])->name('modificaprogetto');
Route::put('/progetti/{progetto}', [ProgettoController::class, 'update'])->name('progetto.update');



Route::delete('/attivita/{attivita}', [AttivitaController::class, 'destroy'])->name('attivita.destroy');
Route::get('/attivita/{attivita}', [AttivitaController::class, 'show'])->name('dettaglioattivita');
Route::get('/nuovaattivita/{id}',[AttivitaController::class, 'nuovaattivita'])->name('nuovaattivita');
Route::post('/salvaattivita',[AttivitaController::class, 'store'])->name('salvaattivita');
Route::get('/modificaattivita/{attivita}',[AttivitaController::class, 'edit'])->name('modificaattivita');
Route::put('/attivita/{attivita}', [AttivitaController::class, 'update'])->name('attivita.update');