<?php

namespace App\Http\Controllers\Admin;

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
use App\Models\Aspek;
use App\Http\Controllers\Controller;

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


        $data = [
            'indikator' => $indikators,
            "page" => "penilaian",
            'task' => $task,
            'username' => $req->username
        ];

        // dd($data);
        return view('indikators.indikator', $data);
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
        return view('indikators.indikator', $data);
    }

    
    public function index()
    {
        $indikator = Indikator::all();
        $task = Task::all();
        $aspek = Aspek::all();


        $data = [
            'indikator' => $indikator,
            "page" => "penilaian",
            'task' => $task,
            'aspek' => $aspek
        ];

        return view('indikators.indikator', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('indikators.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndikatorRequest $request)
    {
        Indikator::create($request->all());
        Task::create($request->all());
        Penjelasan::create($request->all());

        return redirect('/indikator/task')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Indikator $indikator)
    {
        $user = Auth::user();

            $jawabans = DB::select("SELECT p.id, p.text, p.id_indikator, j.d_jawaban FROM penjelasans p LEFT JOIN (SELECT * FROM jawabans i WHERE i.username = ?) j ON j.id_penjelasan = p.id WHERE p.id_indikator = ?", [
                $user->username,
                // Auth::user()->level == 'admin',
                $indikator->id,
            ]);

            $detail_indikator = DetailIndikator::where('username', $user->username)->where('id_indikator', $indikator->id)->first();
            // $id = Aspek::all();
            // $aspek = DB::table('indikators')
            // ->join('aspeks', 'indikators.aspek', '=', 'aspeks.id')
            // ->where('indikators.aspek', $indikator->aspek)
            // ->select('aspeks.aspek as aspek')
            // ->get();

            $ket = DB::table('indikators')
            ->join('aspeks', 'indikators.domain', '=', 'aspeks.id')
            ->where('indikators.domain', $indikator->domain)
            ->select('indikators.*', 'aspeks.domain as domain', 'aspeks.aspek as aspek')
            ->get();

            $domain = Aspek::where('id', $indikator->domain)->first();
            $aspek = Aspek::where('id', $indikator->aspek)->first();

            $data = [
                'indikator' => $indikator,
                "page" => "penilaian",
                "data" => $jawabans,
                "detail_indikator" => $detail_indikator,
                'username' => $user->username,
                // 'ket' => $ket,
                'aspek' => $aspek,
                'domain' => $domain,
            ];
            // dd([$domain, $aspek]); 
            // dd($domain, $aspek);
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
