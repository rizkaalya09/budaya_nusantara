<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Province;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('items', ItemController::class)->except('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PageController::class)->group(function () {
    Route::get('/rumah_adat', 'rumahAdat')->name('rumah_adat');
    Route::get('/pakaian_adat', 'pakaianAdat')->name('pakaian_adat');
    Route::get('/tarian_adat', 'tarianAdat')->name('tarian_adat');
    Route::get('/alat_musik', 'alatMusik')->name('alat_musik');
    Route::get('/makanan_tradisional', 'makananTradisional')->name('makanan_tradisional');
    Route::get('/senjata_tradisional', 'senjataTradisional')->name('senjata_tradisional');
});


require __DIR__ . '/auth.php';
