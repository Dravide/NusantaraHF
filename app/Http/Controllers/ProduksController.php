<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProduksController extends Controller
{
    public function index()
    {
        return view('nara.produk.index');
    }

    public function create()
    {
        return view('nara.produk.create');
    }

    public function store(Request $request)
    {
    }

    public function show(Produk $produk)
    {
    }

    public function edit(Produk $produk)
    {
    }

    public function update(Request $request, Produk $produk)
    {
    }

    public function destroy(Produk $produk)
    {
    }
}
