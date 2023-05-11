<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        $driver = DB::table('users')->where('role', 'driver')->count();

        $user = DB::table('users')->where('role', 'user')->count();

        $produk = Produk::all()->count();
        $tp_order = Pesan::all()->count();

        return view('admin.dashboard', [
            'driver' => $driver,
            'user' => $user,
            'produk' => $produk,
            'tp_order' => $tp_order,
        ]);
    }
}
