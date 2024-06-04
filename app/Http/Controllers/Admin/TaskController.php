<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Bagian;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        $data = [
            "page" => "Tugas",
            "data" => $tasks,
        ];
        return view('tasks.data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            "page" => "penilaian",
        ];
        return view('penilaians.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        Task::create($request->all());

        return redirect('/task')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $user = Auth::user();

        $bagian = Bagian::where('id', $user->id_bagian)->first();

        // Data string yang akan diubah menjadi array
        $stringData = $bagian->indikators;

        // Menggunakan json_decode untuk mengubah string JSON menjadi array
        $arrayData = json_decode($stringData, true);

        if(count($arrayData) > 0) {

            // Mengonversi array menjadi string yang dipisahkan oleh koma
            $commaSeparatedString = implode(", ", $arrayData);

            $indikators = DB::select(
                "SELECT i.*, d.id exist FROM indikators i LEFT JOIN 
                (SELECT * FROM detail_indikators d WHERE username = ?) 
                d ON i.id = d.id_indikator WHERE i.id IN ( $commaSeparatedString ) order by i.no asc",
                [
                    $user->username,
                ]
            );
        } else {

            $indikators = DB::select(
                "SELECT i.*, d.id exist FROM indikators i LEFT JOIN 
                (SELECT * FROM detail_indikators d WHERE username = ?) 
                d ON i.id = d.id_indikator order by i.no asc",
                [
                    $user->username,
                ]
            );
        }

        $task = Task::find($task->id);

        $data = [
            'indikator' => $indikators,
            "page" => "penilaian",
            'task' => $task,
            'username' => $user->username
        ];

        // dd($data);
        return view('indikators.indikator', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $data = [
            "page" => "penilaian",
            'data' => $task
        ];
        return view('penilaians.add', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->fill($request->all());
        $task->save();

        return redirect('/task')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/task')->with([
            'mess' => 'Data Berhasil Dihapus',
        ]);
    }
}