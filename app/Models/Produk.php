<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    
    protected $fillable = [
      'nama',
      'warna',
      'spesifikasi',
      'tahun',
      'madein',
      'toko',
      'harga',
      'image',
      'created_at',
      'updated_at',
    ];
}
