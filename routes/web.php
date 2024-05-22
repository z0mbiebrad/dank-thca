<?php

use App\Http\Controllers\StrainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/menu', [StrainController::class, 'index'])->name('menu');

Route::get('/order-now', function () {
    return view('order');
})->name('order');

Route::middleware('auth')->group(function () {
    Route::get('/add-strain', function () { return view('add-strain'); })->name('add-strain');;
    Route::post('/add-strain', [StrainController::class, 'store'])->name('strain.store');
    Route::delete('/menu/{strain}', [StrainController::class, 'destroy'])->name('strain.destroy');
});

require __DIR__.'/auth.php';
