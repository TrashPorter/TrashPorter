<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        // $data = Produk::create($request->all());

        $data = ' ';
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('assets/img/', $request->file('gambar')->getClientOriginalName());
            $data = $request->file('gambar')->getClientOriginalName();
        }

        Produk::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'gambar' => $data,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return to_route('admin.produks.index')->with('message', 'Product Added Successfully');
    }

    public function destroy(Produk $produks)
    {
        $nama = $produks->nama;
        $produks->delete();
        return back()->with('message', 'Product ' . $nama . ' Deleted');
    }

    public function edit(Produk $produk)
    {
        // $permissions = Permission::all();
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produks)
    {

        $data = ' ';
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('assets/img/', $request->file('gambar')->getClientOriginalName());
            $data = $request->file('gambar')->getClientOriginalName();
        }

        // $validation = $request->validate(['name' => 'required', 'min:3']);
        // $produks->update($validation);
        $produks->nama = $request->nama;
        $produks->deskripsi = $request->deskripsi;
        $produks->slug =  Str::slug($request->nama, '-');
        $produks->kategori = $request->kategori;
        $produks->harga = $request->harga;
        $produks->stok = $request->stok;
        $produks->gambar = $data;

        $produks->update();
        return to_route('admin.produks.index')->with('message', 'Product Updated Successfully');
    }
}
