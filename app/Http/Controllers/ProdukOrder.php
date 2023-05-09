<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukOrder as ModelsProdukOrder;
use App\Models\ProdukOrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukOrder extends Controller
{
    public function index(Produk $produk)
    {
        $title = "Product Order";
        return view('products.order.index', compact('produk', 'title'));
    }

    public function pesan(Request $request, Produk $produk)
    {
        $jumlah_harga = $produk->harga * $request->Quantity;

        //validasi stok
        if ($request->Quantity > $produk->stok) {
            return back();
        }

        $pesanan_baru = ModelsProdukOrder::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (empty($pesanan_baru)) {
            ModelsProdukOrder::create(
                [
                    'user_id' => Auth::user()->id,
                    'tanggal' => Carbon::now(),
                    'jumlah_harga' => 0,
                    'status' => 0,
                ]
            );
        }

        $cek_pesanan_detail = ProdukOrderDetail::where('produk_id', $produk->id)->where('produkorder_id', $pesanan_baru->id)->first();

        if (empty($cek_pesanan_detail)) {
            ProdukOrderDetail::create([
                'produk_id' => $produk->id,
                'produkorder_id' => $pesanan_baru->id,
                'jumlah' => $request->Quantity,
                'jumlah_harga' => $jumlah_harga,
                'gambar' => $produk->gambar,
            ]);
        } else {
            $pesanan_detail = ProdukOrderDetail::where('produk_id', $produk->id)->where('produkorder_id', $pesanan_baru->id)->first();

            $pesanan_detail->jumlah = $pesanan_detail->jumlah + $request->Quantity;
            $pesanan_detail_baru = $produk->harga * $request->Quantity;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga + $pesanan_detail_baru;
            $pesanan_detail->update();
        }

        $pesanan = ModelsProdukOrder::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $pesanan->jumlah_harga = $pesanan->jumlah_harga + $produk->harga * $request->Quantity;
        $pesanan->update();

        Alert::success('Produk berhasil masuk keranjang', 'Success');
        return to_route('produk.view')->with('message', 'Produk berhasil ditambahkan');
    }

    public function checkout()
    {
        $pesanan = ModelsProdukOrder::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if (empty($pesanan)) {
            Alert::info('Keranjang Kosong', 'Mohon isi terlebih dahulu');
            return to_route('produk.view');
        }

        $pesanan_detail = ProdukOrderDetail::where('produkorder_id', $pesanan->id)->get();

        // dd($pesanan_detail);
        $title = "Checkout";
        return view('products.order.checkout', compact('pesanan', 'pesanan_detail', 'title'));
    }

    public function delete($id)
    {

        $pesanan_detail = ProdukOrderDetail::where('id', $id)->first();
        $pesanan = ModelsProdukOrder::where('id', $pesanan_detail->produkorder_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga - $pesanan_detail->jumlah_harga;

        $pesanan->update();

        $pesanan_detail->delete();
        Alert::success('Deleted', 'Item berhasil dihapus');

        return back();
    }
}
