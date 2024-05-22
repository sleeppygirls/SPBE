<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Http\Requests\StoreBantuanRequest;
use App\Http\Requests\UpdateBantuanRequest;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "page" => "bantuan"
        ];
        return view("bantuan",$data);
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
    public function store(StoreBantuanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bantuan $bantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bantuan $bantuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBantuanRequest $request, Bantuan $bantuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bantuan $bantuan)
    {
        //
    }
}
