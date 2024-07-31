<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Bagian;
use App\Models\Jawaban;
use App\Models\Indikator;
use Illuminate\Http\Request;
use App\Models\LihatIndikator;
use App\Models\DetailIndikator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLihatIndikatorRequest;
use App\Http\Requests\UpdateLihatIndikatorRequest;

class LihatIndikatorController extends Controller
{
    public function task(Request $req)
    {
        // dd($req);

        $id_task = $req->input('id_task');

        $user = Auth::user();
        if(@$req->validasi != 0){
            return back();
        }

        if(@$req->submitall == 1){
            DB::table('users')
              ->where('id', Auth::user()->id)
              ->update(['submit' => 1]);
        };

        $bagian = Bagian::where('id_user', $user->id)->first();

        // Data string yang akan diubah menjadi array
        $stringData = $bagian->indikators;

        // Menggunakan json_decode untuk mengubah string JSON menjadi array
        $arrayData = json_decode($stringData, true);

        if (count($arrayData) > 0) {

            // Mengonversi array menjadi string yang dipisahkan oleh koma
            $commaSeparatedString = implode(", ", $arrayData);

            $indikators = DB::select(
                "SELECT i.*, d.id exist FROM indikators i LEFT JOIN 
                (SELECT * FROM detail_indikators d WHERE username = ? AND id_task = ?) 
                d ON i.id = d.id_indikator WHERE i.id IN ( $commaSeparatedString ) order by i.no asc",
                [
                    $user->username,
                    $id_task,
                ]
            );
        } else {

            $indikators = DB::select(
                "SELECT i.*, d.id exist FROM indikators i LEFT JOIN 
                (SELECT * FROM detail_indikators d WHERE username = ? AND id_task = ?) 
                d ON i.id = d.id_indikator order by i.no asc",
                [
                    $user->username,
                    $id_task,
                ]
            );
        }

        $task = Task::find($req->id_task);
        $data = [
            'indikator' => $indikators,
            "page" => "penilaian",
            'task' => $task,
            'username' => $user->username
        ];

        // dd($data);
        return view('indikators.lihatuser', $data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(StoreLihatIndikatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LihatIndikator $lihatIndikator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLihatIndikatorRequest $request, LihatIndikator $lihatIndikator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LihatIndikator $lihatIndikator)
    {
        //
    }
}
