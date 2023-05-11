<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::success('Added', 'Produk berhasil ditambahkan');
        return to_route('admin.produks.index');
    }

    public function destroy($id)
    {
        $produks = Produk::where('id', $id)->first();
        $produks->delete();
        Alert::error('Deleted', 'Item deleted');
        return back();
    }

    public function edit(Produk $produk)
    {
        // $permissions = Permission::all();
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produks = Produk::where('id', $id)->first();
        $data = '';
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('assets/img/', $request->file('gambar')->getClientOriginalName());
            $data = $request->file('gambar')->getClientOriginalName();
        }

        // $validation = $request->validate(['name' => 'required', 'min:3']);
        // $produks->update($validation);
        if (isset($request->nama)) {
            $produks->nama = $request->nama;
            $produks->slug =  Str::slug($request->nama, '-');
        }
        if (isset($request->deskripsi)) {
            $produks->deskripsi = $request->deskripsi;
        }
        if (isset($request->kategori)) {
            $produks->kategori = $request->kategori;
        }
        if (isset($request->harga)) {
            $produks->harga = $request->harga;
        }
        if (isset($request->stok)) {
            $produks->stok = $request->stok;
        }
        if ($data != '') {
            $produks->gambar = $data;
        }


        $produks->update();
        Alert::success('Updated', 'Berhasil diUpdate');
        return to_route('admin.produks.index');
    }
}
