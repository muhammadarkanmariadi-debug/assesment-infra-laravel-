<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdukController::class)->group(function () {
    Route::get('/', 'index')->name('products.index');
    Route::get('/create', 'create')->name('products.create');
    Route::post('/', 'store')->name('products.store');
    Route::get('/{Produk}/edit', 'edit')->name('products.edit');
    Route::put('/{Produk}', 'update')->name('products.update');
    Route::delete('/{Produk}', 'destroy')->name('products.destroy');
});
