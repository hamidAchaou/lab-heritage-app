<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personnes\PersonnesController;

Route::prefix('formateur')->group(function () {
    Route::get('/', [PersonnesController::class, 'index'])->name('formateur.index');
    Route::get('/form-ajouter', [PersonnesController::class, 'create'])->name('formateur.create');
    Route::post('/ajouter', [PersonnesController::class, 'store'])->name('formateur.store');
    Route::get('/{id}', [PersonnesController::class, 'show'])->name('formateur.show');
    Route::get('/{id}/edit', [PersonnesController::class, 'edit'])->name('formateur.edit');
    Route::post('/{id}/update', [PersonnesController::class, 'update'])->name('formateur.update');
    Route::delete('/{id}/delete', [PersonnesController::class, 'delete'])->name('formateur.delete');
});
