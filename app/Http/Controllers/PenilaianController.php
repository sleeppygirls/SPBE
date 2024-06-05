<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;
use App\Http\Requests\StorePenilaianRequest;
use App\Http\Requests\UpdatePenilaianRequest;
use App\Models\Task;
use App\Models\User;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $task = Task::all();
        $user = User::all();
        
        $tahunini = '';
        $tahunini = @$req->input('tahun');

        $data = [
            'user' => $user,
            "page" => "penilaian",
            "data" => $task,
            'tahunini' => $tahunini,
        ];
        // dd($data);
        return view("penilaians.penilaianS",$data);
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
