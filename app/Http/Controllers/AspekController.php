<?php

namespace App\Http\Controllers;

use App\Models\Aspek;
use App\Http\Requests\StoreAspekRequest;
use App\Http\Requests\UpdateAspekRequest;

class AspekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aspek = Aspek::all();

        $data = [
            'aspek' => $aspek,
            "page" => "aspek",
        ];
        return view('aspek.data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            "page" => "aspek",
        ];
        return view('aspek.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAspekRequest $request)
    {
        Aspek::updateOrCreate([
            'id' => $request->input('id'),
        ], [
            'aspek' => $request->input('aspek'),
            'bobot_a' => $request->input('bobot_a'),
            'bobot_aspeka' => $request->input('bobot_aspeka'),
        ]);

        return redirect('/aspek')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Aspek $aspek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aspek $aspek)
    {
        $data = [
            "aspek" => $aspek,
            "page" => "aspek",
        ];

        return view('aspek.add', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAspekRequest $request, Aspek $aspek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aspek $aspek)
    {
        $aspek->delete();

        return redirect('/aspek')->with([
            'mess' => 'Data Berhasil Dihapus',
        ]);
    }
}
