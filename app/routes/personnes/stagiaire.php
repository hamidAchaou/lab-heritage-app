<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personnes\PersonnesController;

Route::prefix('stagiaire')->group(function () {
    Route::get('/', [PersonnesController::class, 'index'])->name('stagiaire.index');
    Route::get('/form-ajouter', [PersonnesController::class, 'create'])->name('stagiaire.create');
    Route::post('/ajouter', [PersonnesController::class, 'store'])->name('stagiaire.store');
    Route::get('/{id}', [PersonnesController::class, 'show'])->name('stagiaire.show');
    Route::get('/{id}/edit', [PersonnesController::class, 'edit'])->name('stagiaire.edit');
    Route::post('/{id}/update', [PersonnesController::class, 'update'])->name('stagiaire.update');
    Route::delete('/{id}/delete', [PersonnesController::class, 'delete'])->name('stagiaire.delete');
});
