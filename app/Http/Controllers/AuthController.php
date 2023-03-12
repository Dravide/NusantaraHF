<?php

namespace App\Http\Controllers;


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
}
