<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required',
            'stok' => 'required|numeric',
            'kategori_id' => 'required',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'nama_produk.required' => 'Nama produk harus diisi',
            'nama_produk.string' => 'Nama produk harus berupa string',
            'nama_produk.max' => 'Nama produk maksimal 255 karakter',
            'harga.required' => 'Harga produk harus diisi',
            'stok.required' => 'Stok produk harus diisi',
            'stok.numeric' => 'Stok produk harus berupa angka',
            'kategori_id.required' => 'Kategori produk harus diisi',
            'deskripsi.required' => 'Deskripsi produk harus diisi',
            'deskripsi.string' => 'Deskripsi produk harus berupa string',
            'gambar.required' => 'Gambar produk harus diisi',
            'gambar.image' => 'Gambar produk harus berupa gambar',
            'gambar.mimes' => 'Gambar produk harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
            'gambar.max' => 'Gambar produk maksimal 2048 kilobyte'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
