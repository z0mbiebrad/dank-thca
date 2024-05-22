<?php

use App\Http\Controllers\ProfileController;
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
    Route::get('/add-item', function () { return view('add-item'); })->name('add-item');;
    Route::post('/add-strain', [StrainController::class, 'store'])->name('strain.store');
});

require __DIR__.'/auth.php';
