<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoris extends Model
{
    protected $fillable = [
        'nama_kategori', 'slug','icon'
    ];
    use HasFactory;
}
