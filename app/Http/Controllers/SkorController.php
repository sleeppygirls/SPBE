<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Http\Requests\StoreSkorRequest;
use App\Http\Requests\UpdateSkorRequest;
use App\Models\Bagian;
use App\Models\DetailIndikator;
use App\Models\Indikator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class SkorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Task $task)
    {
        // dd($task);
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

            $indikators = Indikator::with([
                'detailIndikator' => function ($query) use ($task) {
                    $query->where('id_task', $task->id);
                },
            ])
                ->whereIn('id', $indikatorIds)
                ->get()
                ->keyBy('id');

            // dd($indikators);

            $users = DB::select(
            "SELECT u.*, spbe.bobot, spbe.jumlah, spbe.nilai FROM users u LEFT JOIN 
            ( SELECT username, SUM(bobot) bobot, SUM(bobot * nilai) jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) nilai FROM (
            SELECT username, id_domain, domain, SUM(bobot) bobot, SUM(bobot * nilai) AS jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) AS nilai FROM (
            SELECT di.username, i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, SUM(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * SUM(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek, di.username
            ) index_aspek GROUP BY id_domain, domain, username
            ) index_domain GROUP BY username
            ) spbe ON u.username = spbe.username", [
                $task->id,
            ]);
            
            $data = [
                'task' => $task,
                'user' => $users,
                'indikator' => $indikators,
                'page' => 'penilaian',
            ];
            // dd($data);

            return view('skorindex.admin', $data);
        } else {
            $user = Auth::user();
            $indikators = collect();
            $bagian = Bagian::where('id_user', $user->id)->first();
            $username = $user->username;

            if ($bagian) {
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
                $indikators->nilai = 1 / $total_bobot * $indikators->nibi;
                // dd($indikators); 
            }

            $data = [
                'task' => $task,
                'user' => $user,
                'page' => 'penilaian',
                'indikators' => $indikators,
                'bagian' => $bagian,
            ];
            // dd($data);
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
    public function show($skor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($skor)
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
    public function destroy($skor)
    {
        //
    }
}
