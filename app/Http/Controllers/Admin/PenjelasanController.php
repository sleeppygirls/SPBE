<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use App\Models\Aspek;
use App\Models\Domain;

use App\Models\Indikator;
use App\Models\Penjelasan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePenjelasanRequest;
use App\Http\Requests\UpdatePenjelasanRequest;

class PenjelasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Indikator $indikator)
    {
        // $indikator = Indikator::all();
        $penjelasan = Penjelasan::where('id_indikator', $indikator->id)->get();
        
        $data = [
            'indikator' => $indikator,
            'penjelasan' => $penjelasan,
            "page" => "indikator",
        ];
        return view('penjelasan.data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Indikator $indikator)
    {
        $indikators[0] = $indikator;
        
        $data = [
            'indikator' => $indikators[0],
            "page" => "indikator",
        ];
        return view('penjelasan.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjelasanRequest $request, Indikator $indikator)
    {

        $id_indikator = $indikator->id;

        // Buat Penjelasan baru
        $penjelasan = Penjelasan::create([
            'text' => $request->text,
            'id_indikator' => $id_indikator
        ]);
    
        return redirect('/adm/indikator/'. $id_indikator .'/penjelasan')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Indikator $indikator, Penjelasan $penjelasan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_indikator, $id_penjelasan)
    {
        $penjelasan = Penjelasan::findorfail($id_penjelasan);
        $indikator = Indikator::findOrFail($id_indikator);
        $data = [
            "page" => "indikator",
            'penjelasan' => $penjelasan,
            'indikator' => $indikator
        ];
        return view('penjelasan.add', compact('data','penjelasan','indikator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjelasanRequest $request, Indikator $indikator, Penjelasan $penjelasan)
    {
        $id_indikator = $indikator->id;
        $penjelasan->update([
            'text'=>$request->text
        ]);

        return redirect('/adm/indikator/'. $id_indikator .'/penjelasan')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_indikator, $id_penjelasan)
    {
        // dd($id_indikator);
        $penjelasan = Penjelasan::find($id_penjelasan);
        if ($penjelasan) {
            $penjelasan->delete();
            return redirect("/adm/indikator/{$id_indikator}/penjelasan")->with('success', 'Penjelasan berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Penjelasan tidak ditemukan.');
        }
    }
}
