<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Str;

class KategorisController extends Controller
{
    public function index()
    {
        return view('nara.kategori.index', [
            'kategoris' => Kategori::Paginate(5),
        ]);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'nama_kategori' => 'required',
            'icon' => 'required',
        ],
            [
                'nama_kategori.required' => 'Nama kategori harus diisi',
                'icon.required' => 'Icon harus diisi',
            ]
        );
        Kategori::create([
            'nama_kategori' => $credentials['nama_kategori'],
            'slug' => Str::slug($credentials['nama_kategori']),
            'icon' => $credentials['icon'],

        ]);
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function create()
    {
    }

    public function show(Kategori $kategori)
    {
    }

    public function edit(Kategori $kategori)
    {
    }

    public function update(Request $request, Kategori $kategori)
    {
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus');
    }
}
