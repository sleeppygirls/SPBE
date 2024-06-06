<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Bagian;
use App\Models\Indikator;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBagianRequest;
use App\Http\Requests\UpdateBagianRequest;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $bagian = Bagian::where('id_user', $user->id)->get();
        $data = [
            'user' => $user,
            'indikators' => Indikator::all(),
            // 'bagians' => Bagian::with(['task', 'user'])->get(),
            "bagians" => $bagian,
            "page" => "user",
        ];

        return view('bagians.data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        // dd($user);
        $data = [
            'user' => $user,
            'indikators' => Indikator::all(),
            'task' => Task::all(),
            "page" => "user",
        ];
        return view('bagians.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBagianRequest $request, User $user)
    { 

        // dd($user);
        // Mengambil semua data indikator dari database
        $dbIndikators = Indikator::pluck('id')->toArray();

        // Mengambil data dari form
        $formData = $request->all();

        // Mengonversi data menjadi array angka tanpa kunci, hanya nilainya saja
        $indicatorsArray = [];
        foreach ($dbIndikators as $indikator) {
            if (isset($formData["indikator-{$indikator}"])) {
                $indicatorsArray[] = $formData["indikator-{$indikator}"];
            }
        }

        // Mengonversi array menjadi string angka yang dipisahkan oleh koma
        // $indicatorsString = implode(',', $indicatorsArray);

        // Mengonversi array menjadi string
        $indicatorsString = json_encode($indicatorsArray);

        $tahun = Task::where('id', $request->id_task)->first();
        $id_user = $user->id;

        Bagian::updateOrCreate([
            'id_user' => $id_user,
            'id_task' => $request->id_task,
        ], [
            'indikators' => $indicatorsString,
        ]);

        // User::where('id_bagian', $request->id_bagian)->update(['id_bagian'=> $request->input('id_bagian')]);

        return redirect("/users/{$id_user}/bagians")->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bagian $bagian)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, Bagian $bagian)
    {
        // dd($bagian);
        // Data string yang akan diubah menjadi array
        $stringData = $bagian->indikators;

        // Menggunakan json_decode untuk mengubah string JSON menjadi array
        $arrayData = json_decode($stringData, true);

        if (count($arrayData) > 0) {

            // Mengonversi array menjadi string yang dipisahkan oleh koma
            $commaSeparatedString = implode(", ", $arrayData);

            $indikators = DB::select("SELECT i.*, j.id checked FROM indikators i LEFT JOIN (SELECT id FROM indikators WHERE id IN ( $commaSeparatedString )) j ON i.id =  j.id");
        } else {
            $indikators = Indikator::all();
        }

        $task = Task::all();
        // $task = Bagian::with('task')->get();
        $data = [
            "page" => "user",
            'user' => $user,
            'bagian' => $bagian,
            'task' => $task,
            'indikators' => $indikators,
        ];
        return view('bagians.add', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBagianRequest $request, Bagian $bagian)
    {

        // // Mengambil semua data indikator dari database
        // $dbIndikators = Indikator::pluck('id')->toArray();

        // // Mengambil data dari form
        // $formData = $request->all();

        // // Mengonversi data menjadi array angka tanpa kunci, hanya nilainya saja
        // $indicatorsArray = [];
        // foreach ($dbIndikators as $indikator) {
        //     if (isset($formData["indikator-{$indikator}"])) {
        //         $indicatorsArray[] = $formData["indikator-{$indikator}"];
        //     }
        // }

        // // Mengonversi array menjadi string angka yang dipisahkan oleh koma
        // // $indicatorsString = implode(',', $indicatorsArray);

        // // Mengonversi array menjadi string
        // $indicatorsString = json_encode($indicatorsArray);

        // $bagian->fill($request->all());
        // $bagian['id'] = $request->input('id');
        // $bagian['indikators'] = $indicatorsString;
        // $bagian->save();

        // return redirect('/bagians')->with([
        //     'mess' => 'Data Berhasil Disimpan',
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_user, $id_bagian)
    {
        // dd($id_user);
        // $bagian->delete();

        // return redirect('/bagians')->with([
        //     'mess' => 'Data Berhasil Dihapus',
        // ]);
        $bagian = Bagian::find($id_bagian);
        if ($bagian) {
            $bagian->delete();
            return redirect("/users/{$id_user}/bagians")->with('success', 'Penjelasan berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Penjelasan tidak ditemukan.');
        }
    }
}
