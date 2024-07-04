<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\StokController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.main');
});
Route::resource('menu',MenuController::class);
    
Route::resource('reservasi',ReservasiController::class);

Route::resource('about',AboutController::class);

Route::resource('promo',PromoController::class);

Route::resource('table',phpTableController::class);

Route::resource('stok',StokController::class);

Route::resource('rating',RatingController::class);