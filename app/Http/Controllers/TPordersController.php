<?php

namespace App\Http\Controllers;

use App\Models\TPorder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TPordersController extends Controller
{
    public function index() {


        $data = DB::table('t_porders')->latest()->get();
        // $order = TPorder::all();

        // dd($order)

        return view('driver.dashboard', compact('data' ));
    }

    public function updateStatus($id, $status, $driver_id)
    {
        $item = TPorder::find($id);
        $item->status = $status;
        // $item-> Auth
        $item->driver_id = $driver_id;
        $item->save();

        return redirect()->back();

    }
    public function salary()
    {
        $data = DB::table('t_porders')->latest()->get();
        // $order = TPorder::all();
        $data2 = DB::table('pesans')->latest()->get();
        // dd($order)

        return view('driver.salary.index', compact('data', 'data2' ));
    }
}
