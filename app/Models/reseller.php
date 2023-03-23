<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reseller extends Model
{
    protected $fillable = [
        'wa', 'kode_akses', 'nama', 'alamat'
    ];
}
