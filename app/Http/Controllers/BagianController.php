<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Http\Requests\StoreBagianRequest;
use App\Http\Requests\UpdateBagianRequest;
use App\Models\Indikator;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'bagians' => Bagian::all(),
        ];

        return view('bagians.data', $data);
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
    public function store(StoreBagianRequest $request)
    {
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

        Bagian::updateOrCreate(
            [
                'id' => $request->input('id'),
            ],
            [
                'name' => $request->input('name'),
                'indikators' => $indicatorsString,
            ]
        );

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Bagian $bagian)
    {
        // Data string yang akan diubah menjadi array
        $stringData = $bagian->indikators;

        // Menggunakan json_decode untuk mengubah string JSON menjadi array
        $arrayData = json_decode($stringData, true);

        if(count($arrayData) > 0) {

            // Mengonversi array menjadi string yang dipisahkan oleh koma
            $commaSeparatedString = implode(", ", $arrayData);
    
            $indikators = DB::select("SELECT i.*, j.id checked FROM indikators i LEFT JOIN (SELECT id FROM indikators WHERE id IN ( $commaSeparatedString )) j ON i.id =  j.id");
        } else {
            $indikators = Indikator::all();
        }


        $data = [
            'bagian' => $bagian,
            'indikators' => $indikators,
        ];
        return view('bagians.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bagian $bagian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBagianRequest $request, Bagian $bagian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bagian $bagian)
    {
        //
    }
}
