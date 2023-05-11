<?php

use App\Http\Controllers\ProdukOrder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProdukViewController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Driver\DashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\TPordersController;

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




// Route::get('/pesan', function () {
//     return view('layouts.pesan', [
//         "title" => "Pesan",
//     ]);
// });



Route::get('/', function () {
    return view('landingPage', [
        "title" => "Home",
    ]);
})->name('landingPage');

Route::get('/product', [ProdukViewController::class, 'index'])->name('produk.view');



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

Route::get('/invoice', function () {
    return view('layouts.invoice', [
        "title" => "Invoice"
    ]);
})->name('Invoice');


// Route::get('/pembayaran', function () {
//     return view('layouts.pembayaran', [
//         "title" => "pembayaran"
//     ]);
// })->name('pembayaran');

// Route::get('/admin_dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');


Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/profil', function () {
    //     return view('layouts.profil', [
    //         "title" => "Profil"
    //     ]);
    // })->name('profil');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/tambah', function () {
        return view('products.tambah', [
            "title" => "keranjang",
        ]);
    });

    Route::get('/produk-order/{produk}', [ProdukOrder::class, 'index'])->name('produk.order');
    Route::post('/produk-order/{produk}', [ProdukOrder::class, 'pesan'])->name('produk.pesan');
    Route::get('/checkout', [ProdukOrder::class, 'checkout'])->name('produk.checkout');
    Route::delete('/checkout/{id}', [ProdukOrder::class, 'delete'])->name('produk.checkout.delete');
    // Route::delete('/checkout/{id}', [ProdukOrder::class, 'update'])->name('produk.checkout.update');
    Route::get('/checkout/confirm', [ProdukOrder::class, 'confirm'])->name('produk.checkout.confirm');

    Route::get('/pesan', [PesanController::class, 'index'])->name('pesan');
    Route::post('/kota', [PesanController::class, 'getKota'])->name('kota');
    Route::post('/kecamatan', [PesanController::class, 'getKecamatan'])->name('kecamatan');
    Route::post('/desa', [PesanController::class, 'getDesa'])->name('desa');
    Route::post('/detail', [PesanController::class, 'store'])->name('layouts.detail');
    Route::get('/detailPesan', [PesanController::class, 'invoice'])->name('layouts.detail.pesan');
    Route::delete('/detailPesan/{id}', [PesanController::class, 'remove'])->name('remove.order');
    // Route::post('/detailPesan', [PaymentCallbackController::class, 'receive'])->name('receive.payment');
    Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);

    Route::resource('detail/bayar', PesanController::class)->only(['show']);
    Route::post('/payment', [WebController::class, 'payment_post']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:driver'])->group(function () {
    Route::get('/driver', function () {
        return view('driver.dashboard');
    })->name('driver.dashboard');

    Route::get('/driver', [TPordersController::class, 'index'])->name('driver.dashboard');

    Route::get('/salary', function () {
        return view('driver.salary.index');
    })->name('driver.salary.index');

    Route::get('/driver/update/{id}/{status}', [TPordersController::class, 'updateStatus'] )->name('updateStatus');
});

Route::middleware(['auth', 'verified', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    // Route::get('/role',[RoleController::class,'index'])->name('role');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    Route::resource('/produks', ProdukController::class);
    // Route::post('/produks', [ProdukController::class, 'store']);
    Route::resource('/payments', PaymentController::class);
});

require __DIR__ . '/auth.php';
