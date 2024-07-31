<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;
use App\Http\Requests\StorePenilaianRequest;
use App\Http\Requests\UpdatePenilaianRequest;
use App\Models\Bagian;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $status = null;

        if ($tahunini) {



            $selected_task = Task::where('tahun', $tahunini)->first();
            $bagian = Bagian::where('id_user', Auth::user()->id)->where('id_task', $selected_task->id)->first();

            $idIndikatorsArray = json_decode($bagian->indikators, true); // Mengonversi array menjadi string yang dipisahkan oleh koma
            $commaSeparatedString = implode(", ", $idIndikatorsArray);

            $status = DB::select(
                "SELECT if(SUM(STATUS) > 0, 1, 0) value FROM (
                SELECT a.*, IF(b.id IS NOT NULL, 0, 1) status FROM
                (SELECT * FROM indikators WHERE id IN ($commaSeparatedString)) a LEFT JOIN
                (SELECT * FROM detail_indikators WHERE id_task = ? AND username = ?) b
                ON a.id = b.id_indikator ) c",
                [
                    $selected_task->id,
                    Auth::user()->username,
                ]
            );
            // dd($status);
        }

        $data = [
            'user' => $user,
            "page" => "penilaian",
            "data" => $task,
            'tahunini' => $tahunini,
            'status' => $status,
        ];
        // dd($data);
        return view("penilaians.penilaianS", $data);
    }

    public function indikator()
    {
        $data = [
            "page" => "penilaian"
        ];

        return view("indikator", $data);
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
