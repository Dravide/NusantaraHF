<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class whatsapp extends Model
{
    protected $fillable = [
        'whatsapp', 'nama_admin', 'status'
    ];
}
