<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdukController::class)->group(function () {
    Route::get('/', 'index')->name('products.index');
    Route::get('/create', 'create')->name('products.create');
    Route::post('/', 'store')->name('products.store');
    Route::get('/{products}/edit', 'edit')->name('products.update');
    Route::put('/{products}', 'update')->name('products.update');
    Route::delete('/{products}', 'destroy')->name('products.destroy');
});
