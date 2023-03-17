<?php

namespace App\View\Components;

use App\Models\Produk;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\Component;


class Cart extends Component
{
    public function render(): View
    {
        $cookie = Cookie::get('Cart');
//        dd($cookie);
        if($cookie == null){
            return view('components.cart',['cart' => null]);
        }
        $cart = Jsonq($cookie);
        $data = $cart->get();
        $array = array();
        foreach($data as $hasil){
            $array['data'][] = Produk::find($hasil->id_produk);
        }
//        dd($array);
        return view('components.cart',['cart' => $array]);
    }
}
