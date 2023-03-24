<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class cartController extends Controller
{
    public function index(){
        $cookie = Cookie::get('Cart');
        $uniq = Str::random(4);
        $hitungUniq = transaksi::count();
        $valUniq = $hitungUniq+1;
        $val = $valUniq. $uniq;
//        dd($cookie);
        if($cookie == null){
            return view('main.cart',['cart' => null, 'uniq' => $val, 'total'=>0]);
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

        return view('main.cart',['cart' => $array, 'total'=>$subtotal, 'uniq' => $val]);

    }

    public function checkout(Request $request){
        $kode = $request->kode;
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
//        dd(count($cart));
        foreach ($cart as $item) {
            $keranjang[] = $item['id_produk'];
        }
//        dd($keranjang);

        $insert = transaksi::insert([
           'kode_unik'=>$kode,
           'nama'=>$nama,
           'alamat'=>$alamat,
           'wa'=>$wa,
            'product_id' => json_encode($keranjang),
            'status' => 0

        ]);



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
        $pesanWA = urlencode($hsl);
        $keWA = "https://api.whatsapp.com/send?phone=6282128363525&text=$pesanWA";
        Cookie::queue(Cookie::forget('Cart'));
        return redirect($keWA);





    }
}
