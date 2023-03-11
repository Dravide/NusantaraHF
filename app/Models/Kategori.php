<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama_kategori',
        'icon',
        'slug',
    ];

    protected $casts = [
        'created_at'
    ];

    public function produk()
    {
        return $this->belongsToMany(Produk::class);
    }
}
