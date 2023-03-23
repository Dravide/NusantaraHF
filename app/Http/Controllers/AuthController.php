<?php

namespace App\Http\Controllers;


use App\Models\reseller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login(Request $request)
    {
        $credentials = request()->only('username', 'password');

        if (auth()->attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->intended('nara/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        dd($request->all());
    }

    public function loginReseller(Request $request){
        $wa = $request->wa;
        $kode = $request->code;
        $cek = reseller::where('wa', '=', $wa)->where('kode_akses', '=', $kode)->count();

        if ($cek == 1){
            $session = session()->put('wa', $wa);
            return redirect(route('shopRoute'));
        } else {
            return back()->withErrors([
                'wa' => 'Data tidak ditemukan',
            ]);
        }

    }

    public function cekSession(){
        $sesi = session()->get('wa');
        $hsl = 22/7;
        return $hsl;
    }
}
