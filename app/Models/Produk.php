<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{

    protected $fillable = [
        'nama_produk', 'harga', 'harga_reseller', 'stok', 'kategori_id', 'deskripsi', 'gambar',
    ];


    public function kategori()
    {
        return $this->belongsToMany(Kategori::class);
    }

}
