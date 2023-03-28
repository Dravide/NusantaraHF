<?php

namespace App\Http\Controllers;

use App\Models\transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = transaksi::orderBy('created_at', 'DESC')->paginate(5);
        dd($transaksi);
    }
}
