<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Penjelasan;
use App\Http\Requests\StoreJawabanRequest;
use App\Http\Requests\UpdateJawabanRequest;
use App\Models\Indikator;
use App\Models\DetailIndikator;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jawaban = Jawaban::all();
        $data = [
            "page" => "penilaian",
            "data" => $jawaban
        ];
        return view("penjelasanjawaban", $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJawabanRequest $req)
    {
        $username = $req->username;

        DetailIndikator::updateOrCreate(
            [
                'id_indikator' => $req->input('id_indikator'),
                'username' => $username,
            ],
            [
                'file' => '',
                'capaian' => $req->pencapaian,
                'note' => @$req->catatan,
            ],
        );

        $penjelasans = Penjelasan::where('id_indikator', '=', $req->id_indikator)->get();

        // dd($penjelasans->all());

        foreach ($penjelasans as $key => $penjelasan) {
            Jawaban::updateOrCreate(
                [
                    'id_penjelasan' => $penjelasan->id,
                    'username' => $username,
                    'id_indikator' => $req->id_indikator,
                ],
                [
                    'd_jawaban' => $req->input('jawab-' . $penjelasan->id),
                ],
            );
        }

        return redirect('/task/'.$req->id_task);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jawaban $jawaban)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJawabanRequest $request, Jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jawaban $jawaban)
    {
        //
    }
}
