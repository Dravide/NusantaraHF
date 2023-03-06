<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produks extends Model
{
    use HasFactory;
    protected $fillable = [
      'nama_produk', 'harga', 'stok', 'kategori_id', 'gambar', 'deskripsi'
    ];
}
