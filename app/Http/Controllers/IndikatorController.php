<?php

namespace App\Http\Controllers;

use Monolog\Level;
use App\Models\Task;
use App\Models\User;
use App\Models\Jawaban;
use App\Models\Indikator;
use App\Models\Penjelasan;
use Illuminate\Http\Request;
use App\Models\DetailIndikator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreIndikatorRequest;
use App\Http\Requests\UpdateIndikatorRequest;

class IndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function task(Request $req)
    {
        // dd($req);
        $task = Task::find($req->id_task);
        // $indikator = DB::table('indikators')->where('id_task', '=', $task->id)->get();
        $indikators = DB::select(
            "SELECT i.*, d.id exist FROM indikators i LEFT JOIN 
            (SELECT * FROM detail_indikators d WHERE username = ?) 
            d ON i.id = d.id_indikator order by i.no asc",
            [
                $req->username,
                // Auth::user()->level == 'admin',
            ]
        );

        // dd($indikators);

        // dd($indikator);

        $data = [
            'indikator' => $indikators,
            "page" => "penilaian",
            'task' => $task,
            'username' => $req->username
        ];

        // dd($data);
        return view('indikator', $data);
    }

    public function test($id_task,$username)
    {
        // dd(Session()->get('username'));
        $task = Task::find($id_task);
        // $indikator = DB::table('indikators')->where('id_task', '=', $task->id)->get();
        $indikators = DB::select(
            "SELECT i.*, d.id exist FROM indikators i LEFT JOIN 
            (SELECT * FROM detail_indikators d WHERE username = ?) 
            d ON i.id = d.id_indikator order by i.no asc",
            [
                $username,
                // Auth::user()->level == 'admin',
            ]
        );

        // dd($indikators);

        // dd($indikator);

        $data = [
            'indikator' => $indikators,
            "page" => "penilaian",
            'task' => $task,
            'username' => $username
        ];

        // dd($data);
        return view('indikator', $data);
    }

    
    public function index()
    {
        $indikator = Indikator::all();
        $task = Task::all();


        $data = [
            'indikator' => $indikator,
            "page" => "penilaian",
            'task' => $task
        ];

        return view('indikator', $data);
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
    public function store(StoreIndikatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Indikator $indikator, $username)
    {
        // if ([Auth::user()->username, Auth::user()->level == 'admin']) {
            # code...
            $jawabans = DB::select("SELECT p.id, p.text, p.id_indikator, j.d_jawaban FROM penjelasans p LEFT JOIN (SELECT * FROM jawabans i WHERE i.username = ?) j ON j.id_penjelasan = p.id WHERE p.id_indikator = ?", [
                $username,
                // Auth::user()->level == 'admin',
                $indikator->id,
            ]);

            $detail_indikator = DetailIndikator::where('username', $username)->where('id_indikator', $indikator->id)->first();

            $data = [
                'indikator' => $indikator,
                "page" => "penilaian",
                "data" => $jawabans,
                "detail_indikator" => $detail_indikator,
                'username' => $username
            ];
            return view("penjelasanjawaban", $data);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indikator $indikator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndikatorRequest $request, Indikator $indikator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indikator $indikator)
    {
        //
    }
}
