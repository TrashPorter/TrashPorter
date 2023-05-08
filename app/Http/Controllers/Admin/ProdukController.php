<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

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

    // public function store(Request $request){
    //     $validated = $request->validate(['name'=> ['required', 'min:3']]);
    //     ::create($validated);
    //     return to_route('admin.roles.index')->with('message', 'Role Created Successfully');
    // }
}
