<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Main\Produks;
use Illuminate\Http\Request;

class singleProduk extends Controller
{
    public function index($produk){
        $getProduct = Produks::where('id', $produk)->first();
        $count = Produks::where('id', $produk)->count();
        $featuredProduk = Produks::inRandomOrder()->limit(5)->get();
        $catID = $getProduct->kategori_id;
        $relatedProduk = Produks::where('kategori_id', $catID)->get();
        if ($count == 0) {
            return view('main.404');
        } else {
            $data = [
                'produk' => $getProduct,
                'featured' => $featuredProduk,
                'related' => $relatedProduk
            ];
            return view('main.single-product')->with($data);
        }


    }
}
