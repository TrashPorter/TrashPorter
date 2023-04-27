<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Driver\DashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\PesanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/pesan', [PesanController::class, 'index']);
Route::post('/kota', [PesanController::class, 'getKota'])->name('kota');
Route::post('/kecamatan', [PesanController::class, 'getKecamatan'])->name('kecamatan');
Route::post('/desa', [PesanController::class, 'getDesa'])->name('desa');


// Route::get('/pesan', function () {
//     return view('layouts.pesan', [
//         "title" => "Pesan",
//     ]);
// });

Route::get('/profil', function () {
    return view('layouts.profil' , [
        "title" => "Profil"
    ]);
});

Route::get('/', function () {
    return view('landingPage', [
        "title" => "Home",
    ]);
});

Route::get('/product', function () {
    return view('products.product', [
        "title" => "Product",
    ]);
});

Route::get('/catalog', function () {
    return view('catalogs.catalog', [
        "title" => "Catalog",
    ]);
});

Route::get('/about', function () {
    return view('aboutUs.about', [
        "title" => "About Us",
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/admin_dashboard', [AdminDashboardController::class, 'index'])->middleware('role:admin');
// Route::get('/driver_dashboard', [DashboardController::class, 'index'])->middleware('role:driver');

Route::middleware('role:admin')->group(function () {
    Route::get('/admin_dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware('role:driver')->group(function () {
    Route::get('/driver_dashboard', [DashboardController::class, 'index'])->name('driver.dashboard');
});

require __DIR__ . '/auth.php';
