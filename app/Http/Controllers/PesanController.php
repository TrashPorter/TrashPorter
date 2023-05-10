<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Regency;
use App\Models\TPorder;
use App\Models\Village;

use App\Models\District;
use App\Models\Province;
use App\Services\Midtrans\CreateSnapTokenService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PesanController extends Controller
{
    public function index()
    {
        // Get semua data
        $provinces = Province::all();
        return view('layouts.pesan', compact('provinces'), [
            "title" => "Pesan"
        ]);
    }

    public function getKota(request $request)
    {
        $id_provinsi = $request->id_prov;
        $kotas = Regency::where('province_id', $id_provinsi)->get();

        $opt = "<option selected disabled>Pilih Kabupaten/Kota</option>";
        foreach ($kotas as $kota) {
            $opt .= "<option value='$kota->id'>$kota->name</option>";
        }

        echo $opt;
    }

    public function getKecamatan(request $request)
    {
        $id_kota = $request->id_kota;
        $kecamatans = District::where('regency_id', $id_kota)->get();

        $opt = "<option selected disabled>Pilih Kecamatan</option>";
        foreach ($kecamatans as $kecamatan) {
            $opt .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $opt;
    }

    public function getDesa(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;
        $desas = Village::where('district_id', $id_kecamatan)->get();

        $opt = "<option selected disabled>Pilih Desa</option>";
        foreach ($desas as $desa) {
            $opt .= "<option value='$desa->id'>$desa->name</option>";
        }
        echo $opt;
    }

    public function store(Request $request)
    {
        $botol =  ($request->botol == true) ? 1 : 0;
        $kaleng =  ($request->kaleng == true) ? 1 : 0;
        $kardus =  ($request->kardus == true) ? 1 : 0;
        $organik =  ($request->organik == true) ? 1 : 0;

        $harga_botol = 0;
        if ($botol == 1) {
            $harga_botol = $request->harga_botol * $request->jumlah_botol;
        }
        $harga_kaleng = 0;
        if ($kaleng == 1) {
            $harga_kaleng = $request->harga_kaleng * $request->jumlah_kaleng;
        }
        $harga_kardus = 0;
        if ($kardus == 1) {
            $harga_kardus = $request->harga_kardus * $request->jumlah_kardus;
        }
        $harga_so = 0;
        if ($organik == 1) {
            $harga_so = $request->harga_so * $request->jumlah_so;
        }
        $total_harga = $harga_botol + $harga_kaleng + $harga_kardus + $harga_so;

        $provinsi = Province::where('id', $request->provinsi)->first();
        $kota = Regency::where('id', $request->kota)->first();
        $kecamatan = District::where('id', $request->kecamatan)->first();
        $desa = Village::where('id', $request->desa)->first();

        $pesanan_baru = Pesan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (empty($pesanan_baru)) {
            Pesan::create([
                'name' => $request->nama,
                'user_id' => Auth::user()->id,
                'status' => 0,
                'nomor' => $request->nomor,
                'datetime' => $request->datetime,
                'harga_botol' => $request->harga_botol,
                'jumlah_botol' => $request->jumlah_botol,
                'harga_kaleng' => $request->harga_kaleng,
                'jumlah_kaleng' => $request->jumlah_kaleng,
                'harga_kardus' => $request->harga_kardus,
                'jumlah_kardus' => $request->jumlah_kardus,
                'harga_so' => $request->harga_so,
                'jumlah_so' => $request->jumlah_so,
                'botol' => $botol,
                'kaleng' => $kaleng,
                'kardus' => $kardus,
                'organik' => $organik,
                'provinsi' => $provinsi->name,
                'kota' => $kota->name,
                'kecamatan' => $kecamatan->name,
                'desa' => $desa->name,
                'pos' => $request->pos,
                'message' => $request->message,
                'ongkir' => $request->ongkir,
                'harga_total' => $total_harga,

            ]);

            $pesanan = ($botol) ? 'Botol' : ''; // $pesanan = str_rep
            $pesanan .= ($kaleng) ? ' Kaleng' : '';
            $pesanan .= ($kardus) ? ' Kardus' : '';
            $pesanan .= ($organik) ? ' Organik' : '';

            // $pesanan = str_replace(' ', ', ', $pesanan);
            $alamat = $desa->name . ', ' . $kecamatan->name . ', ' . $kota->name . ', ' . $provinsi->name . ', ' . $request->pos;


            TPorder::create([
                'nama'=> $request->nama,
                'email'=>Auth::user()->email,
                'alamat'=> $alamat,
                'pesanan'=> $pesanan,
                'tanggal'=> $request->datetime,
                'status'=>0,
                'status_pembayaran'=>'Belum Bayar',

            ]);
        } else {
            Alert::warning('Warning', 'Pesanan Anda sebelumnya belum selesai');
            $title = 'detail';
            return to_route('layouts.detail.pesan', compact('title'));
        }



        // $request->save();
        $title = 'detail';
        return to_route('layouts.detail.pesan', compact('title'));
    }

    public function invoice()
    {
        $pesanan = Pesan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $provinsi = Str::ucfirst($pesanan->provinsi);
        $kota = Str::ucfirst($pesanan->kota);
        $kecamatan = Str::ucfirst($pesanan->kecamatan);
        $desa = Str::ucfirst($pesanan->desa);

        $snapToken = $pesanan->snap_token;
        if (empty($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database

            $midtrans = new CreateSnapTokenService($pesanan);
            $snapToken = $midtrans->getSnapToken();

            $pesanan->snap_token = $snapToken;
            $pesanan->save();
        }

        $title = 'invoice';
        return view('layouts.detail', compact('title', 'pesanan', 'provinsi', 'kota', 'kecamatan', 'desa', 'snapToken'));
    }

    public function remove($id)
    {
        $pesanan = Pesan::where('id', $id)->first();
        $pesanan->delete();
        Alert::success('Deleted', 'Item berhasil dihapus');
        // Get semua data
        return redirect('/pesan');
    }

    public function show(Pesan $order)
    {


        return view('orders.show', compact('order', 'snapToken'));
    }

    public function receive(Request $request, $id)
    {
        $json = json_decode($request->get('json'));
        dd($json);
        if ($json->transaction_status == 'settlement') {
            $pesanan = Pesan::where('id', $id)->first();
            dd($pesanan);
            $pesanan->status = 1;
            $pesanan->update();
            Alert::success('Pesan Settled', 'Pesan Settled');
            return to_route('pesan');
        } else {
            $pesanan = Pesan::where('id', $id)->first();
            $pesanan->status = 2;
            $pesanan->update();
            Alert::success('Pesan Settled', 'Pesan Settled');
            return to_route('pesan');
        }
        Alert::error('Error', 'salah');
        return back();
    }
}
