<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Personne\PersonnesController;

Route::prefix('client')->group(function () {
    Route::get('/', [PersonnesController::class, 'index'])->name('client.index');
    Route::get('/form-ajouter', [PersonnesController::class, 'create'])->name('client.create');
    Route::post('/ajouter', [PersonnesController::class, 'store'])->name('client.store');
    Route::get('/{id}', [PersonnesController::class, 'show'])->name('client.show');
    Route::get('/{id}/edit', [PersonnesController::class, 'edit'])->name('client.edit');
    Route::post('/{id}/update', [PersonnesController::class, 'update'])->name('client.update');
    Route::delete('/{id}/delete', [PersonnesController::class, 'delete'])->name('client.delete');
});
