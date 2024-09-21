<?php

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tambah-produk', function () {
    return view('tambah-produk');
});

Route::post('/tambah-produk', function (Request $request) {
    Produk::create([
      'nama' => $request->nama,
      'warna' => $request->warna,
      'spesifikasi' => $request->spesifikasi,
      'tahun' => $request->tahun,
      'madein' => $request->madein,
      'toko' => $request->toko,
      'harga' => $request->harga,
    ]);
    
    return redirect('/tambah-produk');
});

Route::get('/list-produk', function () {
    $dataProduk = Produk::get();
    
    return view('list-produk', [
      'produk' => $dataProduk,
    ]);
});
