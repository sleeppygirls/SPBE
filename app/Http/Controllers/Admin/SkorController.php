<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use App\Models\User;
use App\Http\Requests\StoreSkorRequest;
use App\Http\Requests\UpdateSkorRequest;
use App\Models\Bagian;
use App\Models\Indikator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SkorController extends Controller
{
    /**
     * Display a listing of the resource.
     */ public function index(User $user, Task $task)
    {
        $indikators = collect();
        $bagian = Bagian::where('id_user', $user->id)->first();

        if ($bagian) {
            $username = $user->username;
            $indikatorIds = json_decode($bagian->indikators, true);
            $indikators = Indikator::with([
                'domainR',
                'aspekR',
                'detailIndikator' => function ($query) use ($username, $task) {
                        $query->where('username', $username)->where('id_task', $task->id);
                    },
            ])
                ->whereIn('id', $indikatorIds)
                ->get();


            // dd($indikators);
            // Inisialisasi total
            $total_index_akhir = 0;
            $total_bobot = 0;
            $total_tk_final = 0;
            $total_bobot_aspek = 0;

            // Loop melalui indikator dan lakukan perhitungan
            foreach ($indikators as $indikator) {
                $capaian = $indikator->detailIndikator->capaian ?? 0;
                $indikator->capaian = $capaian;
                $indikator->index_akhir = ($indikator->bobot_aspek / 100) * $capaian;
                $indikator->nibi = $capaian * $indikator->bobot;
                $total_bobot_aspek = $indikators->sum('bobot_aspek');
                $total_index_akhir = $indikators->sum('index_akhir') * $total_bobot_aspek;
                $total_bobot = $indikators->sum('bobot');
                $total_tk_final = $indikators->sum('index_akhir');
            }
            

            // Tambahkan total ke koleksi
            $indikators->total_index_akhir = $total_index_akhir;
            $indikators->total_bobot = $total_bobot;
            $indikators->total_tk_final = $total_tk_final;
            $indikators->total_bobot_aspek = $total_bobot_aspek;

            $indikators->nibi = $indikators->sum('nibi');
            $indikators->nilai = 1/$total_bobot * $indikators->nibi;
            // dd($indikators); 
        }
        
        $data = [
            'user' => $user,
            'page' => 'penilaian',
            'indikators' => $indikators,
            'bagian' => $bagian,
        ];

        return view('skorindex.user', $data);
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
    public function show( $skor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $skor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkorRequest $request,  $skor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $skor)
    {
        //
    }
}
