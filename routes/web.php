<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
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
})->name('profil');

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

Route::get('/tambah', function () {
    return view('products.tambah', [
        "title" => "keranjang",
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

// Route::get('/admin_dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    // Route::get('/role',[RoleController::class,'index'])->name('role');
    Route::resource('/roles',RoleController::class);
    Route::post('/roles/{role}/permissions',[RoleController::class,'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}',[RoleController::class,'revokePermission'])->name('roles.permissions.revoke');

    Route::resource('/permissions',PermissionController::class);
    Route::post('/permissions/{permission}/roles',[PermissionController::class,'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}',[PermissionController::class,'removeRole'])->name('permissions.roles.remove');

    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
    Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles',[UserController::class,'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}',[UserController::class,'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions',[UserController::class,'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}',[UserController::class,'revokePermission'])->name('users.permissions.revoke');
});

require __DIR__ . '/auth.php';
