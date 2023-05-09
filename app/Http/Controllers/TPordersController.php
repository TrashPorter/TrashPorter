<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TPordersController extends Controller
{
    public function index() {
        $data = DB::table('pesans')->get();
        return view('driver.dashboard', compact('data'));
    }

    public function updateStatus()
    {
        $data = DB::table('pesans');
                
    }
    public function take()
    {

    }
}
