<?php

namespace App\Http\Controllers;

use Monolog\Level;
use App\Models\Task;
use App\Models\User;
use App\Models\Aspek;
use App\Models\Domain;
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
use App\Models\Bagian;
use App\Models\FileData;
use App\Models\Keterangan;
use Termwind\Components\Dd;

class IndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function task(Request $req)
    {
        // dd($req);
        $task = $req->id_task;
        $username = $req->input('username');
        if (!$username) {
            return redirect()->back();
        }
        $user = User::where('username', $username)->first();

        $bagian = Bagian::where('id_user', $user->id)->first();

        $arrayData = [];
        if ($bagian) {
            if ($bagian->indikators) {
                $stringData = $bagian->indikators;
                $arrayData = json_decode($stringData, true);
            }
        }

        if (count($arrayData) > 0) {
            $commaSeparatedString = implode(', ', $arrayData);

            $indikators = DB::select(
                "SELECT i.*, d.id exist FROM indikators i LEFT JOIN
                (SELECT * FROM detail_indikators d WHERE username = ? AND id_task = ?)
                d ON i.id = d.id_indikator WHERE i.id IN ( $commaSeparatedString ) order by i.no asc",
                 [
                    $user->username,
                    $task,
                ],
            );
        } else {
            $indikators = DB::select(
                "SELECT i.*, d.id exist FROM indikators i LEFT JOIN
                (SELECT * FROM detail_indikators d WHERE username = ? AND id_task = ? )
                d ON i.id = d.id_indikator order by i.no asc",
                [
                    $user->username,
                    $task,
                ],
            );
        }
        // dd($indikators);

        $task = Task::find($req->id_task);

        $data = [
            'indikator' => $indikators,
            'page' => 'penilaian',
            'task' => $task,
            'username' => $user->username,
        ];

        return view('indikators.indikator', $data);
    }

    public function index()
    {
        $indikator = Indikator::all();
        $task = Task::all();
        $aspek = Aspek::all();

        $data = [
            'indikator' => $indikator,
            'page' => 'penilaian',
            'task' => $task,
            'aspek' => $aspek,
        ];

        return view('indikators.indikator', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $data = [
        //     'task' => Task::all(),
        //     'aspek' => Aspek::all(),
        //     'domain' => Domain::all(),
        //     "page" => "penilaian",
        // ];
        // return view('indikators.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndikatorRequest $request)
    {
        Indikator::create($request->all());
        Task::create($request->all());
        Aspek::create($request->all());
        Domain::create($request->all());
        Penjelasan::create($request->all());

        return redirect('/indikator/task')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task, Indikator $indikator, $username)
    {
        // dd($task);

        if (Auth::user()->level == 'admin') {
            $user = User::where('username', '=', $username)->first();
        } else {
            $user = Auth::user();
        }
        $keterangan = Keterangan::where('id', '=', $indikator->id_keterangan);

        $jawabans = DB::select('SELECT p.id, p.text, p.id_indikator, j.d_jawaban FROM penjelasans p LEFT JOIN (SELECT * FROM jawabans i WHERE i.username = ? AND id_task = ?) j ON j.id_penjelasan = p.id WHERE p.id_indikator = ? ', [$user->username, $task->id, $indikator->id]);

        $detail_indikator = DetailIndikator::where('username', $user->username)
            ->where('id_indikator', $indikator->id)
            ->where('id_task', $task->id)
            ->first();

        $domain = Domain::where('id', $indikator->domain)->first();
        $aspek = Aspek::where('id', $indikator->aspek)->first();

        $documents = FileData::where('id_indikator', $indikator->id)
            ->where('id_task', $task->id)
            ->where('id_user', $user->id)
            ->get()
            ->toArray();

        // dd($jawabans);
        $data = [
            'indikator' => $indikator,
            'page' => 'penilaian',
            'data' => $jawabans,
            'detail_indikator' => $detail_indikator,
            'username' => $user->username,
            'aspek' => $aspek,
            'domain' => $domain,
            'task' => $task,
            'keterangan' => $keterangan,
            'documents' => $documents,
        ];

        return view('penjelasanjawaban', $data);
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
