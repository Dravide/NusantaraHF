<?php

namespace App\Http\Controllers;

use App\Models\whatsapp;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('nara.home');
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
    public function whatsapp(){
        $wa = whatsapp::get();
        $data = ['data' => $wa];
        return view('nara.other.whatsapp')->with($data);
    }

    public function aktifkanwa(Request $request ){
        $wa = $request->wa;
        $nonaktifkan = whatsapp::where('status', '=', 1)->update(['status' => '0']);
        $aktifkan = whatsapp::where('whatsapp', '=', $wa)->update(['status'=>'1']);
        return redirect('nara/whatsapp-admin');
    }

    public function tambahwa(Request $request){
        $nama = $request->nama;
        $wa = $request->whatsapp;
        $data = [
            'nama_admin' => $nama,
            'whatsapp' => $wa,
            'status' => '0'
        ];

        $insert = whatsapp::insert($data);
        return redirect('nara/whatsapp-admin');
//        dd($request);

    }


}
