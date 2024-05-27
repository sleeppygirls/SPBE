<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Http\Requests\StoreProfilRequest;
use App\Http\Requests\UpdateProfilRequest;
use App\Models\User;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();

        return view('profile.profil', [
            'data' => $user
        ]);
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
    public function store(StoreProfilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $profil)
    {
        $data = [
            'data' => $profil,
        ];
        return view("profile.editpass",$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $profil)
    {
        $data = [
            'data' => $profil,
        ];
        return view("profile.editpass",$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfilRequest $request, User $profil)
    {
        $data = $request->all();
        $data['pass_view'] = $request->password;
        $profil->fill($data);
        $profil->save();

        return redirect('/profil')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
