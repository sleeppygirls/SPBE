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

class IndikatorController extends Controller
{
    public function index()
    {
        $indikator = Indikator::all();
        $task = Task::all();
        $aspek = Aspek::all();
        $domain = Domain::all();


        $data = [
            'indikator' => $indikator,
            "page" => "indikator",
            'task' => $task,
            'domain' => $domain,
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
            // 'indikator' => Indikator::all(),
            'task' => Task::all(),
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
        // Indikator::create($request->all());
        // Task::create($request->all());
        // Penjelasan::create($request->all());

        Indikator::updateOrCreate([
            'id' => $request->input('id'),
        ], [
            'name' => $request->input('name'),
            'bobot' => $request->input('bobot'),
            'bobot_aspek' => $request->input('bobot_aspek'),
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
        $indikators[0] = $indikator;
        $indikator = Indikator::all();
        $task = Task::all();
        $aspek = Aspek::all();
        $domain = Domain::all();

        $data = [
            'indikator' => $indikators[0],
            "page" => "indikator",
            'task' => $task,
            'domain' => $domain,
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
        $indikator = Indikator::all();
        $task = Task::all();
        $aspek = Aspek::all();
        $domain = Domain::all();

        $data = [
            'indikator' => $indikator,
            "page" => "indikator",
            'task' => $task,
            'domain' => $domain,
            'aspek' => $aspek
        ];

        return view('adminindikators.add', $data);
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
