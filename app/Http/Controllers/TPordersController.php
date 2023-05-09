<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TPordersController extends Controller
{
    public function index() {
        $data = DB::table('t_porders')->get();
        return view('driver.dashboard', compact('data'));
    }

    public function updateStatus()
    {
        

    }
    public function take()
    {

    }
}
