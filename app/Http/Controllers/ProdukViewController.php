<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukViewController extends Controller
{
    public function index()
    {
        // Get semua data
        $produks = Produk::paginate(20);
        $title = "Product";
        return view('products.product', compact('produks', 'title'));
    }
}
