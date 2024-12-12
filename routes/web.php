<?php

use App\Http\Controllers\KeluarController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\UangController;
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

    Route::resource('masuk', MasukController::class);
    Route::resource('keluar', KeluarController::class);

    Route::get('/santri',[SantriController::class, 'index'])->name('admin.santri.index');
});

require __DIR__.'/auth.php';

Route::view('tampilan','template.template');
Route::get('/santri',[UangController::class,'santri'])->name('santri.index');
Route::get('/buat/santri',[UangController::class,'create'])->name('santri.buat');
Route::post('/santri/store',[UangController::class,'store'])->name('santri.store');
Route::PUT('/santri/{id}',[UangController::class,'update'])->name('santri.update');
Route::get('/edit/{id}/santri',[UangController::class,'edit'])->name('santri.edit');
Route::delete('/santri/{id}',[UangController::class,'destroy'])->name('santri.destroy');