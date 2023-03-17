<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class cartController extends Controller
{
    public function index(){
        $cookie = Cookie::get('Cart');
//        dd($cookie);
        if($cookie == null){
            return view('main.cart',['cart' => null]);
        }
        $cart = Jsonq($cookie);
        $data = $cart->get();
        $array = array();
        foreach($data as $hasil){
            $array['data'][] = array_merge(Produk::find($hasil->id_produk)->toArray(), array('qty' => $hasil->qty, 'subtotal' => $hasil->harga));

        }
        $sub = [];
        foreach ($array as $sub1) {
            foreach ($sub1 as $item) {
                $sub[] = $item['harga'];

            }
        }
        $subtotal = array_sum($sub);

        return view('main.cart',['cart' => $array, 'total'=>$subtotal]);

    }

    public function checkout(Request $request){
        $nama = $request->nama;
        $wa = $request->wa;
        $alamat = $request->alamat;

        $cookie = Cookie::get('Cart');
        $cart = Jsonq($cookie);
        $data = $cart->get();
        $array = array();
        foreach($data as $hasil){
            $array['data'][] = array_merge(Produk::find($hasil->id_produk)->toArray(), array('qty' => $hasil->qty, 'subtotal' => $hasil->harga));

        }
        $sub = [];
        foreach ($array as $sub1) {
            foreach ($sub1 as $item) {
                $sub[] = $item['harga'];

            }
        }



        $hsl =  "
Pesanan Baru dari :

Nama : ".$nama."
No. Whatsapp : ".$wa."
Alamat : ".$alamat."

Rincian Pesanan :

";foreach ($array as $data){
            foreach ($data as $data1) {
$hsl .= "-".$data1['nama_produk']." @ ".$data1['qty']." = ".$data1['harga']."
";
            }
        };$hsl .= "
Reseller";
        echo $hsl;

//        $gantiEnter = str_replace($hsl, '<br>', '%0A');
        $pesanWA = urlencode($hsl);
//        dd($pesanWA);

        $keWA = "https://api.whatsapp.com/send?phone=6282128363525&text=$pesanWA";

        return redirect($keWA);





    }
}
