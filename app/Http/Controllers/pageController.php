<?php

namespace App\Http\Controllers;

use App\Models\whatsapp;

class pageController extends Controller
{

    public function index()
    {
        $wa = whatsapp::where('status', '=', 1)->first();
        $redirect = $wa->whatsapp;
        $pesan = "Hallo! Saya ingin daftar menjadi Reseller!";
        $keWA = "https://api.whatsapp.com/send?phone=$redirect&text=$pesan";
        return redirect($keWA);

    }

    public function about(){
        $wa = whatsapp::where('status', '=', 1)->first();
        $redirect = $wa->whatsapp;
        $pesan = "Hallo! Saya ingin mendapatkan informasi berbelanja dan promo terbaru dari Nusantara Halal Shop!";
        $keWA = "https://api.whatsapp.com/send?phone=$redirect&text=$pesan";
        return redirect($keWA);

    }
    public function contact(){
        $wa = whatsapp::where('status', '=', 1)->first();
        $redirect = $wa->whatsapp;
        $pesan = "Hallo! Saya bermaksud untuk menawarkan kerjasama bersama Nusantara Halal Shop!";
        $keWA = "https://api.whatsapp.com/send?phone=$redirect&text=$pesan";
        return redirect($keWA);

    }

}
