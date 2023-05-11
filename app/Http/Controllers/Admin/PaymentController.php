<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesan;
use App\Models\TPorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        // $produks = Produk::all();
        $order = TPorder::all();
        $harga = Pesan::all();
        // $branches = DB::table('t_porders')
        //     ->join('pesans', 'pesans.id', '=', 't_porders.pesan_id')
        //     ->where('users.type', '=', 'BranchAdmin')
        //     ->get();
        return view('admin.payment.index', compact('order', 'harga'));
    }
}
