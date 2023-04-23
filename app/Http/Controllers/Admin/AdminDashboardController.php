<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = DB::table('users')->get();

        $driver = DB::table('users')->where('role', 'driver')->count();

        $user = DB::table('users')->where('role', 'user')->count();

        return view('admin.dashboard', [
            'driver' => $driver,
            'user' => $user,
        ]);
    }

    public function redirectAdmin()
    {
        return redirect()->intended(RouteServiceProvider::redirectTo());
    }
}
