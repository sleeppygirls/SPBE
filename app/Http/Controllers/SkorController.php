<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use App\Models\User;
use App\Http\Requests\StoreSkorRequest;
use App\Http\Requests\UpdateSkorRequest;
use App\Models\Bagian;
use App\Models\DetailIndikator;
use App\Models\Indikator;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\select;

class SkorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->level == 'admin') {
            $users = User::where('level', '=', 'user')->get();
            $userIds = $users->pluck('id')->toArray();

            $bagians = Bagian::whereIn('id_user', $userIds)->get()->keyBy('id_user');
            $indikatorIds = $bagians
                ->flatMap(function ($bagian) {
                    return json_decode($bagian->indikators, true);
                })
                ->unique()
                ->toArray();

            $indikators = Indikator::with(['detailIndikator'])
                ->whereIn('id', $indikatorIds)
                ->get()
                ->keyBy('id');
            $users = $users->map(function ($user) use ($bagians, $indikators) {
                if (isset($bagians[$user->id])) {
                    $bagian = $bagians[$user->id];
                    $userIndikatorIds = json_decode($bagian->indikators, true);
                    $userIndikators = $indikators->only($userIndikatorIds);

                    $total_index_akhir = 0;
                    $total_bobot = 0;
                    $total_tk_final = 0;
                    $total_bobot_aspek = 0;

                    foreach ($userIndikators as $indikator) {
                        $capaian = $indikator->detailIndikator->capaian ?? 0;
                        $index_akhir = ($indikator->bobot_aspek / 100) * $capaian;
                        $indikator->index_akhir = $index_akhir;
                        $total_bobot += $indikator->bobot;
                        $total_tk_final += $index_akhir;
                        $total_bobot_aspek += $indikator->bobot_aspek;
                    }

                    $user->total_index_akhir = $total_tk_final * $total_bobot_aspek;
                }

                return $user;
            });

            $data = [
                'user' => $users,
                'indikator' => $indikators,
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
