<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; // Ensure other controllers are also imported if not already
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;

Route::get('/', function () {
    return view('welcome');
});

// Add the dashboard route here
Route::middleware(['auth', 'verified'])->group(function () { // 'verified' is optional if you use email verification
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/barang', BarangController::class);
Route::resource('/barangmasuk', BarangMasukController ::class);
Route::resource('/barangkeluar', BarangKeluarController::class);
Route::get('/tambahbarang', [BarangController::class, 'create'])->name('barang.create');
