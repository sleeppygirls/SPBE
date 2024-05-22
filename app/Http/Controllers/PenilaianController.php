<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Http\Requests\StorePenilaianRequest;
use App\Http\Requests\UpdatePenilaianRequest;
use App\Models\Task;
use App\Models\User;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = Task::all();
        $user = User::where('level','=','user')->get();

        $data = [
            'user' => $user,
            "page" => "penilaian",
            "data" => $task
        ];
        // dd($data);
        return view("penilaianS",$data);
    }

    public function indikator()
    {
        $data = [
            "page" => "penilaian"
        ];
        
        return view("indikator",$data);
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
    public function store(StorePenilaianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Penilaian $penilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penilaian $penilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenilaianRequest $request, Penilaian $penilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penilaian $penilaian)
    {
        //
    }
}
