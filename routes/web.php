<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdukController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('/', 'store');
    Route::get('/{Produk}/edit', 'edit');
    Route::put('/{Produk}', 'update');
    Route::delete('/{Produk}', 'destroy');
});
