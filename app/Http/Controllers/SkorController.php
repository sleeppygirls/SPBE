<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\User;
use App\Http\Requests\StoreSkorRequest;
use App\Http\Requests\UpdateSkorRequest;
use App\Models\Bagian;
use App\Models\Indikator;
use Illuminate\Support\Facades\Auth;

class SkorController extends Controller
{
    /**
     * Display a listing of the resource.
     */public function index()
{
    if (Auth::user()->level == 'admin') {
        $user = User::where('level', '=', 'user')->get();
        $data = [
            'user' => $user,
            'page' => 'penilaian',
        ];
        return view('skorindex.admin', $data);
    } else {
        $user = Auth::user();
        $indikators = collect();
        $bagian = Bagian::where('id_user', $user->id)->first();

        if ($bagian) {
            $indikatorIds = json_decode($bagian->indikators, true);
            $indikators = Indikator::with(['domainR', 'aspekR', 'detailIndikator'])
                ->whereIn('id', $indikatorIds)
                ->get();

            // Inisialisasi total
            $total_index_akhir = 0;
            $total_bobot = 0;

            // Loop melalui indikator dan lakukan perhitungan
            foreach ($indikators as $indikator) {
                $capaian = $indikator->detailIndikator->capaian ?? 0;
                $indikator->index_akhir = ($indikator->bobot_aspek / 100) * $capaian;
                $total_index_akhir += $indikator->index_akhir;
                $total_bobot += $indikator->bobot;
            }

            // Tambahkan total ke koleksi
            $indikators->total_index_akhir = $total_index_akhir;
            $indikators->total_bobot = $total_bobot;
        }

        $data = [
            'user' => $user,
            'page' => 'penilaian',
            'indikators' => $indikators,
            'bagian' => $bagian,
        ];

        return view('skorindex.user', $data);
    }
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
    public function store(StoreSkorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Skor $skor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skor $skor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkorRequest $request, Skor $skor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skor $skor)
    {
        //
    }
}
