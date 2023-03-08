<?php

namespace App\Http\Controllers\main;
use App\Models\Main\Kategoris;


use App\Http\Controllers\Controller;
use App\Models\Main\Produks;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $getKategori = Kategoris::skip(0)->take(7)->get();
        $moreKategori = Kategoris::skip(7)->take(10)->get();

        $sayuran = Produks::where('kategori_id', 1)->get();
        $buah = Produks::where('kategori_id', 2)->get();
        $rempah = Produks::where('kategori_id', 4)->orWhere('kategori_id', 10)->get();
        $daging = Produks::where('kategori_id', 5)->orWhere('kategori_id', 6)->orWhere('kategori_id', 7)->orWhere('kategori_id', 8)->get();
        $makanan = Produks::where('kategori_id', 3)->orWhere('kategori_id', 10)->get();


        $data = [
            'cat' => $getKategori,
            'moreCat' => $moreKategori,
            'sayuran'=> $sayuran,
            'buah' => $buah,
            'rempah' => $rempah,
            'daging' => $daging,
            'makanan' => $makanan,
            'makanan2' => $makanan
        ];
        return view('main.homepage')->with($data);

    }
}
