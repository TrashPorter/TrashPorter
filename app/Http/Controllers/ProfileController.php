<?php

namespace App\Http\Controllers;

// use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Alamat;
use App\Models\Bio;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use RealRashid\SweetAlert\Facades\Alert;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $alamat = Alamat::where('user_id', Auth::user()->id)->first();
        if(empty($alamat)){
            Alamat::create([
                'user_id'=> Auth::user()->id,
            ]);
        }
        $bio = Bio::where('user_id', Auth::user()->id)->first();
        if(empty($bio)){
            Bio::create([
                'user_id'=> Auth::user()->id,
            ]);
        }

        $provinces = Province::all();
        $kotas=null;
        if($alamat->province_id != null){
            $kotas = Regency::where('province_id', $alamat->province_id)->get();
        }

        $kecamatans=null;
        if ($alamat->regency_id) {
            $kecamatans = District::where('regency_id', $alamat->regency_id)->get();
        }
        $desas=null;
        if ($alamat->district_id) {
            $desas = Village::where('district_id', $alamat->district_id)->get();
        }
        
        
        return view('profile.profile', [
            'user' => $request->user(),
            'title' => 'Profile',
            'alamat' => $alamat,
            'bio' => $bio,
            'provinces' => $provinces,
            'kotas' => $kotas,
            'kecamatans' => $kecamatans,
            'desas' => $desas,
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

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request, $id): RedirectResponse
    {
        $alamat = Alamat::where('id', $id)->where('user_id', Auth::user()->id)->first();
        $request->validate([
            'name' => ['string', 'max:255'],
            'username' => [ 'string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'address' => ['string', 'max:255'],
            'province' => ['string', 'max:255'],
            'regency'=> ['string', 'max:255'],
            'district' => ['string', 'max:255'],
            'village' => ['string', 'max:255'],
            'postalcode' => ['string', 'max:255'],
        ]);

        // $request->user()->fill($request->validated());
        // $validation = $request->validate(['name' => 'required', 'min:3']);

        $provinsi = Province::where('id', $request->provinsi)->first();
        $kota = Regency::where('id', $request->kota)->first();
        $kecamatan = District::where('id', $request->kecamatan)->first();
        $desa = Village::where('id', $request->desa)->first();

        $user = User::where('id',Auth::user()->id)->first();
        $user->name = isset($request->name) ? $request->name: $user->name;
        $user->username = isset($request->username) ? $request->username: $user->username;
        $user->phone = isset($request->phone) ? $request->phone: $user->phone;
        $user->email = isset($request->email) ? $request->email: $user->email;
        $user->update();
        
        $alamat->address = isset($request->address) ? $request->address: $alamat->address;

        $alamat->province = isset($provinsi->name) ? $provinsi->name: $alamat->province;
        $alamat->province_id = isset($request->provinsi) ? $request->provinsi: $alamat->province_id;

        $alamat->regency = isset($kota->name) ? $kota->name: $alamat->regency;
        $alamat->regency_id = isset($request->kota) ? $request->kota: $alamat->regency_id;

        $alamat->district = isset($kecamatan->name) ? $kecamatan->name: $alamat->district;
        $alamat->district_id = isset($request->kecamatan) ? $request->kecamatan: $alamat->district_id;

        $alamat->village = isset($desa->name) ? $desa->name: $alamat->village;
        $alamat->village_id = isset($request->desa) ? $request->desa: $alamat->village_id;

        $alamat->postalcode = isset($request->postalcode) ? $request->postalcode: $alamat->postalcode;
        $alamat->update();

        Alert::success('Profile Updated', 'Success');

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // $request->user()->save();
        return Redirect::route('profile.edit');
    }

    public function updateBio(Request $request,$id){
        $bio = Bio::where('id', $id)->where('user_id', Auth::user()->id)->first();

    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
