<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\User;
use App\Http\Requests\StoreSkorRequest;
use App\Http\Requests\UpdateSkorRequest;
use Illuminate\Support\Facades\Auth;

class SkorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->level == 'admin') {
            $user = User::all();
            $data = [
                'user' => $user,
                "page" => "penilaian",
            ];
            return view('skorindex.admin', $data);
        } else {
            $user = User::where('level', '=', 'user')->get();
            $data = [
                'user' => $user,
                "page" => "penilaian",
            ];
            return view('skorindex.user', $data);
        }
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
    public function store(StoreSkorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Skor $skor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skor $skor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkorRequest $request, Skor $skor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skor $skor)
    {
        //
    }
}
