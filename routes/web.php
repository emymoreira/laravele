<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/paginainicial', function () {
    return view('paginainicial');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/contato', function () {
    return view('contato');
});



echo '<a href="/paginainicial">Página Inicial</a>';






require __DIR__.'/auth.php';
