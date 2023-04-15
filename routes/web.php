<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Driver\DashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;

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

Route::get('/', function () {
    return view('landingPage', [
        "title" => "TrashPorter",
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin_dashboard', [AdminDashboardController::class, 'index'])->middleware('role:admin');
Route::get('/driver_dashboard', [DashboardController::class, 'index'])->middleware('role:driver');

require __DIR__ . '/auth.php';
