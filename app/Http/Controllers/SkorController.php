<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\User;
use App\Http\Requests\StoreSkorRequest;
use App\Http\Requests\UpdateSkorRequest;
use App\Models\Bagian;
use App\Models\Indikator;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\select;

class SkorController extends Controller
{
    /**
     * Display a listing of the resource.
     */ public function index()
    {
        if (Auth::user()->level == 'admin') {
            $users = User::where('level', '=', 'user')->get();
            $indikators = collect();
            
            // Mengumpulkan semua bagian dari user yang terkait
            foreach ($users as $user) {
                $bagian = Bagian::where('id_user', $user->id)->select('id')->get();
                $indikators = $indikators->merge($bagian);
            }
            
            // Ambil semua ID dari Bagian yang terkumpul
            $indikatorIds = $indikators->pluck('id')->toArray();
            
            if (!empty($indikatorIds)) {
                // Ambil semua Indikator yang terkait dengan ID Bagian yang terkumpul
                $indikatorCollection = Indikator::with(['domainR', 'aspekR', 'detailIndikator'])
                    ->whereIn('id', $indikatorIds)
                    ->get();
            
                // Inisialisasi total
                $total_index_akhir = 0;
                $total_bobot_aspek = 0;
            
                // Loop melalui indikator dan lakukan perhitungan
                foreach ($indikatorCollection as $item) {
                    $capaian = $item->detailIndikator->capaian ?? 0;
                    $item->index_akhir = ($item->bobot_aspek / 100) * $capaian;
                    $total_bobot_aspek += $item->bobot_aspek;
                    $total_index_akhir += $item->index_akhir * ($item->bobot_aspek / 100);
                }
            
                // Memastikan total bobot aspek lebih besar dari nol sebelum melakukan pembagian
                if ($total_bobot_aspek > 0) {
                    $total_index_akhir /= ($total_bobot_aspek / 100);
                }
            
                // Tambahkan total ke koleksi terakhir
                $indikatorCollection->total_index_akhir = $total_index_akhir;
                $indikatorCollection->total_bobot_aspek = $total_bobot_aspek;
            }
            
            // return $indikators; // Kembalikan hasil jika diperlukan
            

            $data = [
                'user' => $users,
                'indikator' => $indikators,
                'page' => 'penilaian',
                'total_index_akhir'=>$total_index_akhir,
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
                $total_tk_final = 0;
                $total_bobot_aspek = 0;

                // Loop melalui indikator dan lakukan perhitungan
                foreach ($indikators as $indikator) {
                    $capaian = $indikator->detailIndikator->capaian ?? 0;
                    $indikator->index_akhir = ($indikator->bobot_aspek / 100) * $capaian;
                    $total_index_akhir = $indikators->sum('index_akhir') * $total_bobot_aspek;
                    $total_bobot = $indikators->sum('bobot');
                    $total_tk_final = $indikators->sum('index_akhir');
                    $total_bobot_aspek = $indikators->sum('bobot_aspek');
                }

                // Tambahkan total ke koleksi
                $indikators->total_index_akhir = $total_index_akhir;
                $indikators->total_bobot = $total_bobot;
                $indikators->total_tk_final = $total_tk_final;
                $indikators->total_bobot_aspek = $total_bobot_aspek;
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
