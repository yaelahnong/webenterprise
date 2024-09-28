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
      if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
    } else {
        return back()->withErrors(['image' => 'Image upload failed.']);
    }

    Produk::create([
      'nama' => $request->nama,
      'warna' => $request->warna,
      'spesifikasi' => $request->spesifikasi,
      'tahun' => $request->tahun,
      'madein' => $request->madein,
      'toko' => $request->toko,
      'image' => $imagePath,
      'harga' => $request->harga,
    ]);

    return redirect('/list-produk')->with('success', 'Produk berhasil ditambahkan!');
});

Route::get('/list-produk', function () {
    $dataProduk = Produk::get();
    
    return view('list-produk', [
      'produk' => $dataProduk,
    ]);
});
