<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProdukRequest;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProduksController extends Controller
{
    public function index(): View
    {
        $produks = Produk::orderBy('created_at', 'DESC')->paginate(10);
        foreach ($produks as $produk) {
            $produk->namakategori = Kategori::whereIn('id', json_decode($produk->kategori_id))->get('nama_kategori');
        }
//        return $produks;
        return view('nara.produk.index')->with(compact('produks'));
    }


    public function store(ProdukRequest $request)
    {

        $imageName = time() . '.' . $request->file('gambar')->getClientOriginalName();

        $request->file('gambar')->move(public_path('images'), $imageName);
//        dd($request);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => str_replace(array("¥", "."), "", $request->harga),
            'harga_reseller' => str_replace(array("¥", "."), "", $request->harga_reseller),
            'stok' => $request->stok,
            'kategori_id' => json_encode($request->kategori_id),
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function create()
    {
        $kategori = Kategori::select(['id', 'nama_kategori'])->get();

        return view('nara.produk.create', ['kategoris' => Kategori::all()]);
    }

    public function show(Produk $produk)
    {
    }

    public function edit(Produk $produk)
    {


        $kategoris = Kategori::select(['id', 'nama_kategori'])->get();

        return view('nara.produk.edit', compact('produk', 'kategoris'));
    }

    public function update(Request $request, Produk $produk)
    {

        if ($request->file('gambar') == null) {
            $request->validate([
                'nama_produk' => 'required|string|max:255',
                'harga' => 'required',
                'stok' => 'required|numeric',
                'kategori_id' => 'required',
                'deskripsi' => 'required|string',
            ]);
            $produk->update([
                'nama_produk' => $request->nama_produk,
                'harga' => str_replace(array("¥", "."), "", $request->harga),
                'harga_reseller' => str_replace(array("¥", "."), "", $request->harga_reseller),
                'stok' => $request->stok,
                'kategori_id' => json_encode($request->kategori_id),
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->route('produk.index')->with('success', 'Produk berhasil diubah');
        }
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required',
            'stok' => 'required|numeric',
            'kategori_id' => 'required',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $imageName = time() . '.' . $request->file('gambar')->getClientOriginalName();
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga' => str_replace(array("¥", "."), "", $request->harga),
            'harga_reseller' => str_replace(array("¥", "."), "", $request->harga_reseller),
            'stok' => $request->stok,
            'kategori_id' => json_encode($request->kategori_id),
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName,
        ]);
        $request->file('gambar')->move(public_path('images'), $imageName);
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diubah');

    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->back()->with('success', 'Produk telah dihapus!');
    }
}
