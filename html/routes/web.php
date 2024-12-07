<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', [ContactoController::class, 'index'])->name('contactos.index');
Route::get('/criarContacto', [ContactoController::class, 'criarContacto'])->name('contactos.create');
Route::post('/contactos', [ContactoController::class, 'store'])->name('contactos.store');
Route::get('/contactos/{id}/edit', [ContactoController::class, 'edit'])->name('contactos.edit');
Route::put('/contactos/{id}', [ContactoController::class, 'update'])->name('contactos.update');
Route::delete('/contactos/{id}', [ContactoController::class, 'destroy'])->name('contactos.destroy');
Route::get('/contactos/{id}', [ContactoController::class, 'show'])->name('contactos.show');