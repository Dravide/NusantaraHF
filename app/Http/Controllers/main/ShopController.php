<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Main\Produks;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $getProduk =  Produks::paginate(18);
        $eachPaginate = $getProduk->lastPage();
        $data = [
            'produk' => $getProduk,
            'tPage' => $eachPaginate
        ];
//            dd($getProduk);
        return view('main/product-list')->with($data);
    }
}
