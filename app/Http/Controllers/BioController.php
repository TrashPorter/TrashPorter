<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Bio;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request): View
    {
        $bio = Bio::where('user_id', Auth::user()->id)->first();
        $profil = Bio::where('user_id', Auth::user()->id)->first();

        if (empty($bio)) {
            Bio::create([
                'user_id' => Auth::user()->id,
            ]);
        }

        return view('profile.profile', [
            'user' => $request->user(),
            'title' => 'Bio',
            'biodata' => $bio,
            'gambar' => $profil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, $id): RedirectResponse
    {
        $bio = Bio::where('id', $id)->where('user_id', Auth::user()->id)->first();

        $profil = ' ';
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('assets/img/', $request->file('gambar')->getClientOriginalName());
            $profil = $request->file('gambar')->getClientOriginalName();
        }

        $request->validate([
            'gambar' => ['string', 'max:50'],
            'biodata' => ['text', 'max:255'],
        ]);

        $bio->gambar = $profil;
        $bio->biodata = isset($request->biodata) ? $request->biodata : $bio->biodata;
        $bio->update();

        Alert::success('Bio Updated', 'Success');

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        return redirect()->route('bio.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
