<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Main\Kategoris;
use App\Models\Main\Produks;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $getProduk =  Produks::paginate(18);
        $eachPaginate = $getProduk->lastPage();
        $kategoris = Kategoris::get();
        $featuredProduk = Produks::inRandomOrder()->limit(5)->get();
        $data = [
            'produk' => $getProduk,
            'tPage' => $eachPaginate,
            'cat' => $kategoris,
            'featured' =>$featuredProduk
        ];
//            dd($getProduk);
        return view('main/product-list')->with($data);
    }

    public function kategori($slug) {
        $kategori = Kategoris::where('slug', $slug)->first();
        $kategoris = Kategoris::get();
        $hitungKategori = Kategoris::where('slug', $slug)->count();
        if($hitungKategori == 0) {
            return view('main.404');
        } else {
            $getProduk = Produks::where('kategori_id', $kategori->id)->paginate(18);
            $eachPaginate = $getProduk->lastPage();
            $featuredProduk = Produks::inRandomOrder()->limit(5)->get();
            $data = [
                'produk' => $getProduk,
                'tPage' => $eachPaginate,
                'cat' => $kategoris,
                'featured' =>$featuredProduk
            ];
            return view('main.product-list')->with($data);
        }

    }
}
