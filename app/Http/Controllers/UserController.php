<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();

        return view('profil', [
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
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $data = [
            'data' => $user,
        ];
        return view("editpass",$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $profil)
    {
        // dd($profil->id); 
        $data = [
            'data' => $profil,
        ];
        return view("editpass",$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $profil)
    {
        // dd([
        //     'request' => $request->all(),
        //     'profil' => $profil
        // ]);
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
    public function destroy(User $user)
    {
        //
    }
}
