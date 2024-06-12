<?php

namespace App\Http\Controllers\Admin;

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
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreIndikatorRequest;
use App\Http\Requests\UpdateIndikatorRequest;
use App\Models\Keterangan;

class IndikatorController extends Controller
{
    public function index()
    {
        $indikator = Indikator::all();
        $task = Task::all();
        $aspek = Aspek::all();
        $domain = Domain::all();
        $ket = Keterangan::all();


        $data = [
            'indikator' => $indikator,
            "page" => "indikator",
            'task' => $task,
            'domain' => $domain,
            'ket' => $ket,
            'aspek' => $aspek
        ];

        return view('adminindikators.data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'task' => Task::all(),
            'ket' => Keterangan::all(),
            'aspek' => Aspek::all(),
            'domain' => Domain::all(),
            "page" => "indikator",
        ];
        return view('adminindikators.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndikatorRequest $request)
    {
        // dd($request);
        // Indikator::create($request->all());
        // Task::create($request->all());
        // Penjelasan::create($request->all());

        Keterangan::updateOrCreate([
            'id' => $request->input('id_keterangan')
        ], [
            'name' => $request->input('nama_keterangan')
        ]);

        if ($request->input('id_keterangan') == null) {
            $keterangan = Keterangan::all()->last();
        } else {
            $keterangan = Keterangan::where('id', '=', $request->input('id_keterangan'))->first();
        }
        // dd($keterangan);

        Indikator::updateOrCreate([
            'id' => $request->input('id'),
        ], [
            'name' => $request->input('name'),
            'bobot' => $request->input('bobot'),
            'bobot_aspek' => $request->input('bobot_aspek'),
            'id_keterangan' => $keterangan->id,
            'aspek' => $request->input('aspek'),
            'domain' => $request->input('domain'),
        ]);

        return redirect('/adm/indikator')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Indikator $indikator)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Indikator $indikator)
    {
        // if ($indikator->id_keterangan == NULL) {
        //     $indikator->id_keterangan = 1;
        // }
        // dd($indikator);
        $indikators[0] = $indikator;
        $task = Task::all();
        $ket = Keterangan::where('id', '=', @$indikator->id_keterangan)->first();
        $aspek = Aspek::all();
        $domain = Domain::all();

        $data = [
            'indikator' => $indikators[0],
            "page" => "indikator",
            'task' => $task,
            'domain' => $domain,
            'ket' => $ket,
            'aspek' => $aspek,
            'edit' => true
        ];

        return view('adminindikators.add', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndikatorRequest $request, Indikator $indikator)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Indikator $indikator)
    {
        $indikator->delete();

        return redirect('/adm/indikator')->with([
            'mess' => 'Data Berhasil Dihapus',
        ]);
    }
}
