<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Dashboard as ControllersDashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ManagementsController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RatingController;


use App\Http\Controllers\StokController;
use App\Http\Controllers\ProfileController;
use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome2');
});
Route::resource('kategori',KategoriController::class);
Route::resource('menu',MenuController::class);
Route::resource('reservasi',ReservasiController::class);
Route::resource('meja', MejaController::class);
Route::resource('pembayaran',PembayaranController::class);
Route::resource('kasir', KasirController::class);
Route::get('dashboard', [DashboardController::class, 'index'])->name
('dashboard')->middleware(['auth', 'verified']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
