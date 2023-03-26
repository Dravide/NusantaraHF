<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Main\Kategoris;
use App\Models\Main\Produks;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
//use http\Cookie;


class ShopController extends Controller
{
    public function index()
    {
        $getProduk = Produks::paginate(18);
        $eachPaginate = $getProduk->lastPage();
        $kategoris = Kategoris::get();
        $featuredProduk = Produks::inRandomOrder()->limit(5)->get();
        $data = [
            'produk' => $getProduk,
            'tPage' => $eachPaginate,
            'cat' => $kategoris,
            'featured' => $featuredProduk
        ];
//            dd($getProduk);
        return view('main/product-list')->with($data);
    }

    public function kategori($slug)
    {
        $kategori = Kategoris::where('slug', $slug)->first();
        $kategoris = Kategoris::get();
        $hitungKategori = Kategoris::where('slug', $slug)->count();
        if ($hitungKategori == 0) {
            return view('main.404');
        } else {
            $idProduk = $kategori->id;
            $getProduk = Produks::where('kategori_id', 'like', '%'.$idProduk.'%')->paginate(18);
            $eachPaginate = $getProduk->lastPage();
            $featuredProduk = Produks::inRandomOrder()->limit(5)->get();
            $data = [
                'produk' => $getProduk,
                'tPage' => $eachPaginate,
                'cat' => $kategoris,
                'featured' => $featuredProduk
            ];
//            dd($getProduk);
            return view('main.product-list')->with($data);
        }

    }

    public function atc(Request $request)
    {
//        dd($request);
        $getDetail = Produk::find($request->idProduk);
        $id = $request->idProduk;
        $qty = $request->qty;


        if(session()->get('wa') == null) {
            $hrg = $getDetail->harga;
        } else {
            $hrg = $getDetail->harga_reseller;
        }


//        dd($id);
        $data = array([
            'id_produk' => $id,
            'qty' => $qty,
            'harga' => $hrg]
        );
        $minute = 60; //48 jam
        //Cek Cookie yang tersedia
        $cookie = Cookie::get('Cart');
//        dd($cookie);

        if ($cookie == null) {
            $item = json_encode($data);
            Cookie::queue(Cookie::make("Cart", $item, $minute));
            return redirect('shop');

        } else {
            $get = jsonq($cookie);
            $get2 = jsonq($cookie);
            //cek apakah barang tersebut sudah ada
            $cek = $get->where('id_produk', '==', $id)->count();

            if ($cek == 0){
                $item = json_decode($cookie, true);
                $hasil = array_merge($item, $data);
                $datas = json_encode($hasil);
                Cookie::queue(Cookie::make("Cart", $datas, $minute));
                return redirect('shop');
            } else {
//                Memilih data yang isinya merupakan request baru
                $select = $get2->where('id_produk', '!=', $id)->get();

                $hasil = array_merge(json_decode($select, true), $data);
                $datas = json_encode($hasil);
                Cookie::queue(Cookie::make("Cart", $datas, $minute));
                return redirect('shop');

            }




        }

    }


}
