<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\transaksi;
use App\Models\whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class cartController extends Controller
{
    public function index(){
        $cookie = Cookie::get('Cart');
        $uniq = Str::random(5);
        $hitungUniq = transaksi::count();
        $valUniq = $hitungUniq+1;
        $val = $valUniq. $uniq;
//        dd($cookie);
        if($cookie == null){
            return view('main.cart-empty',['cart' => null, 'uniq' => $val, 'total'=>0]);
        }
        $cart = Jsonq($cookie);
        $data = $cart->get();
        $array = array();

        foreach($data as $hasil){

            $array['data'][] = array_merge(Produk::find($hasil->id_produk)->toArray(), array('qty' => $hasil->qty, 'subtotal' => $hasil->qty * $hasil->harga));

        }

        $dta = [];
        foreach ($array as $item) {
            foreach ($item as $data){
                $dta[] = $data['subtotal'];
            }

        }
//        dd(array_sum($dta));
        $subtotal = array_sum($dta);


        //Pajak
        $pajak = 8/100 * $subtotal;

        //total
        $total = $subtotal + $pajak;

        return view('main.cart',['cart' => $array, 'total'=>$total, 'uniq' => $val, 'pajak' => $pajak]);


    }

    public function checkout(Request $request){


        $request->validate([
            'nama'  => 'required',
            'wa'    => 'required',
            'alamat'    => 'required'
        ],
        [
            'nama' => 'Nama Wajib di isi'
        ]);

        $kode = $request->kode;
        $nama = $request->nama;
        $wa = $request->wa;
        $alamat = $request->alamat;

        $cookie = Cookie::get('Cart');
        $cart = Jsonq($cookie);
        $data = $cart->get();
        $array = array();
        foreach($data as $hasil){
            $array['data'][] = array_merge(Produk::find($hasil->id_produk)->toArray(), array('qty' => $hasil->qty, 'subtotal' => $hasil->qty * $hasil->harga));

        }

        $sub = [];
        foreach ($array as $sub1) {
            foreach ($sub1 as $item) {
                if(session()->get('wa') == null) {
                    $harga = $item['harga'];
                } else {
                    $harga = $item['harga_reseller'];
                }
                $sub[] = $harga;

            }
        }
//        dd(count($cart));
        foreach ($cart as $item) {
            $keranjang[] = $item['id_produk'];
        }
//        dd($keranjang);
        $ttl = [];
        foreach ($array as $item) {
            foreach ($item as $item2) {
                $ttl[] = $item2['subtotal'];

            }


        }

        $subtotal = array_sum($ttl);
        $tax = 8/100 * $subtotal;
        $total = $subtotal + $tax;

        if(session()->get('wa') == null) {
            $sesi = "";
        } else {
            $sesi = "Reseller";
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
                if (session()->get('wa') == null ) {
                    $hrg = $data1['harga'];
                } else {
                    $hrg = $data1['harga_reseller'];
                }
$hsl .= "-".$data1['nama_produk']." @ ".$data1['qty']." x ¥".$hrg." = ".$data1['qty'] * $hrg."
";
            }
        };$hsl .= "

Subtotal = ¥".$subtotal."
Tax 8% = ¥". $tax ."
Total = ¥". $total ."
".$sesi."  ";

        $pesanWA = urlencode($hsl);
        $waAdmin = whatsapp::where('status', '=', '1')->first();
        $getWA = $waAdmin->whatsapp;
        $keWA = "https://api.whatsapp.com/send?phone=$getWA&text=$pesanWA";
        Cookie::queue(Cookie::forget('Cart'));
        return redirect($keWA);





    }
}
