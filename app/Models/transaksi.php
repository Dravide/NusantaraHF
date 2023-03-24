<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model {
    protected $fillable = [
        'kode_unik', 'nama', 'alamat', 'wa', 'product_id', 'status'
    ];
}
