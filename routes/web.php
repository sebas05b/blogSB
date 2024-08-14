<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\CuriosidadesController;
use App\Http\Controllers\ContactosController;

Route::get('/',[InicioController::class,'index']);
Route::get('/nosotros',[NosotrosController::class,'nosotros']);
Route::get('/noticias',[NoticiasController::class,'noticias']);
Route::get('/curiosidades',[CuriosidadesController::class,'curiosidades']);
Route::get('/contactos',[ContactosController::class,'contactos']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





