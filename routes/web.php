<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DetailPesananController;

Route::resource('pelanggan', PelangganController::class);
Route::resource('produk', ProdukController::class);
Route::resource('pesanan', PesananController::class);
Route::resource('detailpesanan', DetailPesananController::class);


Route::get('/', function () {
    return view('welcome');
});

