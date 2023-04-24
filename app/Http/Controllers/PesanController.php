<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

use Illuminate\Http\Request;

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
}
