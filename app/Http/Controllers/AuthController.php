<?php

namespace App\Http\Controllers;

use App\Models\Aspek;
use App\Models\Task;
use App\Models\User;
use App\Models\Bagian;
use App\Models\Domain;
use App\Models\Indikator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function actionLogin(Request $req)
    {
        $dataLogin = [
            'username' => $req->input('username'),
            'password' => $req->input('password'),
        ];

        if (Auth::attempt($dataLogin)) {
            // dd(Auth::user()->level);
            return redirect('/');
        } else {
            // dd("error");
            return back();
        }
    }

    function actionLogout()
    {
        Auth::logout();

        return redirect('login');
    }

    function dashboard2(Request $req)
    {
        $tahunini = @$req->input('tahun') ?? '';

        $user_id = @$req->input('user_id') ?? '';

        $task = Task::all();
        $users = User::where('level', '=', 'user')->get();
        $user = User::where('id', $user_id)->first();

        // query
        $indikators = collect();
        $bagian = Bagian::where('id_user', $user_id)->first();
        $domains = Domain::with(['aspek'])->get();


        $hasil_hitung_per_domain = collect([]);
        $hasil_hitung_per_aspek = collect([]);

        $hasil = collect([
            'index_aspek' => 0,
            'index_domain' => 0,
            'index_SPBE' => 0,
            'hasil_hitung_per_domain' => collect([]),
            'hasil_hitung_per_aspek' => collect([]),
        ]);


        if (Auth::user()->level == 'admin') {
            // -- Admin: Data User dan Pertahun Terpilih
            if ($bagian) {
                $username = $user->username;
                $indikatorIds = json_decode($bagian->indikators, true);
                $indikators = Indikator::with([
                    'domainR',
                    'aspekR',
                    'detailIndikator' => function ($query) use ($username) {
                        $query->where('username', $username);
                    },
                ])
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
                    $total_bobot_aspek = $indikators->sum('bobot_aspek');
                    $total_index_akhir = $indikators->sum('index_akhir') * $total_bobot_aspek;
                }

                // Tambahkan total ke koleksi
                $hasil = collect([
                    'index_SPBE' => $total_index_akhir,
                ]);
            } else {
                // -- Admin: Data Semua User Pertahun
                // Inisialisasi total
                $total_index_akhir = 0;
                $total_bobot = 0;
                $total_tk_final = 0;
                $total_bobot_aspek = 0;

                $ni_bi = collect(
                    DB::select("SELECT COALESCE(((bobot / 100) * capaian),0) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id")
                );
                $na = $ni_bi->sum('nilai');

                $na_ba = collect(
                    DB::select("SELECT $na * bobot_aspek AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id ")
                );
                $nd = $na_ba->sum('nilai');

                $nd_bd = collect(
                    DB::select("SELECT $nd * bobot AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id")
                );

                $index_aspek = $ni_bi->sum('nilai');
                $index_domain = $na_ba->sum('nilai');
                $index_SPBE = $nd_bd->sum('nilai');

                $hasil_hitung_per_domain = collect(
                    DB::select("
                    SELECT * FROM domains d LEFT JOIN
                    ( SELECT domain id_domain, SUM(bobot) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id GROUP BY domain ) h
                    ON d.id = h.id_domain;
                    ")
                );

                $hasil_hitung_per_aspek = collect(
                    DB::select("
                SELECT * FROM aspeks a LEFT JOIN
                ( SELECT aspek id_aspek, SUM(bobot) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id GROUP BY aspek ) h
                ON a.id = h.id_aspek;")
                );

                foreach ($hasil_hitung_per_domain as $key => $domain) {
                    $domain->aspeks = $hasil_hitung_per_aspek->filter(function ($d) use ($domain) {
                        return $d->id_domain == $domain->id;
                    });
                }

                // Tambahkan total ke koleksi
                $hasil = collect([
                    'index_aspek' => $index_aspek,
                    'index_domain' => $index_domain,
                    'index_SPBE' => $index_SPBE,
                    'hasil_hitung_per_domain' => $hasil_hitung_per_domain,
                    'hasil_hitung_per_aspek' => $hasil_hitung_per_aspek,
                ]);
            }
        } else {
            // -- User: Data Pertahun User Logged
            $user = Auth::user();
            $indikators = collect();
            $bagian = Bagian::where('id_user', $user->id)->first();
            $username = $user->username;
            if ($bagian) {
                $indikatorIds = json_decode($bagian->indikators, true);
                $indikators = Indikator::with([
                    'domainR',
                    'aspekR',
                    'detailIndikator' => function ($query) use ($username) {
                        $query->where('username', $username);
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
                    $indikator->index_akhir = ($indikator->bobot_aspek / 100) * $capaian;
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
            }
        }

        // if ($bagian) {
        //     $username = $user->username;
        //     $indikatorIds = json_decode($bagian->indikators, true);
        //     $indikators = Indikator::with([
        //         'domainR',
        //         'aspekR',
        //         'detailIndikator' => function ($query) use ($username) {
        //             $query->where('username', $username);
        //         },
        //     ])
        //         ->whereIn('id', $indikatorIds)
        //         ->get();

        //     // Inisialisasi total
        //     $total_index_akhir = 0;
        //     $total_bobot = 0;
        //     $total_tk_final = 0;
        //     $total_bobot_aspek = 0;


        //     $ni_bi = collect(
        //         DB::select("SELECT (bobot / 100) * capaian AS nilai FROM indikators i INNER JOIN detail_indikators di ON di.id_indikator = i.id WHERE username = ? AND di.id_task = ?;", [$user->username, $tahunini])
        //     );
        //     $na = $ni_bi->sum('nilai');

        //     $na_ba = collect(
        //         DB::select("SELECT $na * bobot_aspek AS nilai FROM indikators i INNER JOIN detail_indikators di ON di.id_indikator = i.id WHERE username = ? AND di.id_task = ?;", [$user->username, $tahunini])
        //     );
        //     $nd = $na_ba->sum('nilai');

        //     $nd_bd = collect(
        //         DB::select("SELECT $nd * bobot AS nilai FROM indikators i INNER JOIN detail_indikators di ON di.id_indikator = i.id WHERE username = ? AND di.id_task = ?;", [$user->username, $tahunini])
        //     );

        //     $index_aspek = $ni_bi->sum('nilai');
        //     $index_domain = $na_ba->sum('nilai');
        //     $index_SPBE = $nd_bd->sum('nilai');

        //     $hasil_hitung_per_domain = collect(
        //         DB::select("
        //             SELECT * FROM domains d LEFT JOIN
        //             ( SELECT domain id_domain, 1 / SUM(bobot) * $nd AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id WHERE username = ? AND di.id_task = ? GROUP BY domain ) h
        //             ON d.id = h.id_domain;
        //             ", [$user->username, $tahunini])
        //     );

        //     $hasil_hitung_per_aspek = collect(
        //         DB::select("
        //         SELECT * FROM aspeks a LEFT JOIN
        //         ( SELECT aspek id_aspek, 1 / SUM(bobot_aspek) * $na AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id WHERE username = ? AND di.id_task = ? GROUP BY aspek ) h
        //         ON a.id = h.id_aspek;", [$user->username, $tahunini])
        //     );

        //     foreach ($hasil_hitung_per_domain as $key => $domain) {
        //         $domain->aspeks = $hasil_hitung_per_aspek->filter(function ($d) use ($domain) {
        //             return $d->id_domain == $domain->id;
        //         });
        //     }

        //     // Tambahkan total ke koleksi
        //     $hasil = collect([
        //         'index_aspek' => $index_aspek,
        //         'index_domain' => $index_domain,
        //         'index_SPBE' => $index_SPBE,
        //         'hasil_hitung_per_domain' => $hasil_hitung_per_domain,
        //         'hasil_hitung_per_aspek' => $hasil_hitung_per_aspek,
        //     ]);
        //     dd([
        //         "ni_bi" => $ni_bi,
        //         "na" => $na,
        //         "na_ba" => $na_ba,
        //         "nd" => $nd,
        //         "nd_bd" => $nd_bd,
        //         "hasil_hitung_per_domain" => $hasil_hitung_per_domain,
        //         "hasil_hitung_per_aspek" => $hasil_hitung_per_aspek,
        //     ]);
        // }

        $data = [
            "page" => "dashboard",
            'users' => $users,
            'user' => $user,
            "data" => $task,
            'tahunini' => $tahunini,
            'user_id' => $user_id,
            'indikators' => $indikators,
            'bagian' => $bagian,
            'hasil' => $hasil,
            'domains' => $domains,
            'hasil_hitung_per_domain' => $hasil_hitung_per_domain,
            'hasil_hitung_per_aspek' => $hasil_hitung_per_aspek,
        ];

        return view("menu.dashboard", $data);
    }

    function dashboard(Request $req)
    {
        // get input form
        $tahunini = @$req->input('tahun') ?? '';
        $user_id = @$req->input('user_id') ?? '';

        $task = Task::all();
        $users = User::where('level', '=', 'user')->get();
        $user = User::where('id', $user_id)->first();

        // query
        $bagian = Bagian::where('id_user', $user_id)->first();
        $domains = Domain::with(['aspek'])->get();

        // default data
        $indikators = collect();
        $index_aspek = collect([]);
        $index_domain = collect([]);
        $index_SPBE = collect([]);
        $hasil = collect([
            'index_aspek' => collect([]),
            'index_domain' => collect([]),
            'index_SPBE' => collect([]),
        ]);


        if (Auth::user()->level == 'admin') {
            if ($bagian) {
                // -- Admin: Data User dan Pertahun Terpilih

                $username = $user->username;

                $index_aspek_collect = collect(
                    DB::select(
                        "SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE username = ? AND di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek",
                        [$username, $tahunini]
                    )
                );

                $index_domain_collect = collect(
                    DB::select(
                        "SELECT id_domain, domain, SUM(bobot) bobot, sum(bobot * nilai) AS jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) AS nilai FROM (
                        SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE username = ? AND di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek
                        ) index_aspek GROUP BY id_domain, domain",
                        [$username, $tahunini]
                    )
                );

                $index_SPBE_collect = collect(
                    DB::select(
                        "SELECT sum(bobot) bobot, sum(bobot * nilai) jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) nilai FROM (
                        SELECT id_domain, domain, SUM(bobot) bobot, sum(bobot * nilai) AS jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) AS nilai FROM (
                        SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE username = ? AND di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek
                        ) index_aspek GROUP BY id_domain, domain
                        ) index_domain",
                        [$username, $tahunini]
                    )
                );

                foreach ($index_domain_collect as $domain) {
                    $domain->aspeks = $index_aspek_collect->filter(function ($a) use ($domain) {
                        return $a->id_domain == $domain->id_domain;
                    });
                }

                // Tambahkan total ke koleksi
                $hasil = collect([
                    'index_aspek' => $index_aspek_collect,
                    'index_domain' => $index_domain_collect,
                    'index_SPBE' => $index_SPBE_collect,
                ]);
                // dd("Admin pilih Bagian");
            } else {
                // -- Admin: Data Semua User Pertahun
                // Inisialisasi total

                $index_aspek_collect = collect(
                    DB::select(
                        "SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek",
                        [$tahunini]
                    )
                );

                $index_domain_collect = collect(
                    DB::select(
                        "SELECT id_domain, domain, SUM(bobot) bobot, sum(bobot * nilai) AS jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) AS nilai FROM (
                        SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek
                        ) index_aspek GROUP BY id_domain, domain",
                        [$tahunini]
                    )
                );

                $index_SPBE_collect = collect(
                    DB::select(
                        "SELECT sum(bobot) bobot, sum(bobot * nilai) jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) nilai FROM (
                        SELECT id_domain, domain, SUM(bobot) bobot, sum(bobot * nilai) AS jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) AS nilai FROM (
                        SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek
                        ) index_aspek GROUP BY id_domain, domain
                        ) index_domain",
                        [$tahunini]
                    )
                );

                foreach ($index_domain_collect as $domain) {
                    $domain->aspeks = $index_aspek_collect->filter(function ($a) use ($domain) {
                        return $a->id_domain == $domain->id_domain;
                    });
                }

                // Tambahkan total ke koleksi
                $hasil = collect([
                    'index_aspek' => $index_aspek_collect,
                    'index_domain' => $index_domain_collect,
                    'index_SPBE' => $index_SPBE_collect,
                ]);
                // dd($hasil);
                // dd("Admin pilih Tahun");
            }
        } else {
            // -- User: Data Pertahun User Logged
            $username = Auth::user()->username;

            $index_aspek_collect = collect(
                DB::select(
                    "SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE username = ? AND di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek",
                    [$username, $tahunini]
                )
            );

            $index_domain_collect = collect(
                DB::select(
                    "SELECT id_domain, domain, SUM(bobot) bobot, sum(bobot * nilai) AS jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) AS nilai FROM (
                    SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE username = ? AND di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek
                    ) index_aspek GROUP BY id_domain, domain",
                    [$username, $tahunini]
                )
            );

            $index_SPBE_collect = collect(
                DB::select(
                    "SELECT sum(bobot) bobot, sum(bobot * nilai) jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) nilai FROM (
                    SELECT id_domain, domain, SUM(bobot) bobot, sum(bobot * nilai) AS jumlah, 1 / SUM(bobot) * SUM(bobot * nilai) AS nilai FROM (
                    SELECT i.domain id_domain, d.domain, i.aspek id_aspek, a.aspek, SUM(bobot) bobot, sum(i.bobot * di.capaian) jumlah, 1 / SUM(bobot) * sum(i.bobot * di.capaian) AS nilai FROM indikators i LEFT JOIN detail_indikators di ON di.id_indikator = i.id INNER JOIN aspeks a ON a.id = i.aspek INNER JOIN domains d ON d.id = i.domain WHERE username = ? AND di.id_task = ? GROUP BY i.aspek, i.domain, d.domain, a.aspek
                    ) index_aspek GROUP BY id_domain, domain
                    ) index_domain",
                    [$username, $tahunini]
                )
            );

            foreach ($index_domain_collect as $domain) {
                $domain->aspeks = $index_aspek_collect->filter(function ($a) use ($domain) {
                    return $a->id_domain == $domain->id_domain;
                });
            }

            // Tambahkan total ke koleksi
            $hasil = collect([
                'index_aspek' => $index_aspek_collect,
                'index_domain' => $index_domain_collect,
                'index_SPBE' => $index_SPBE_collect,
            ]);
            // dd("ini User");
        }

        // dd($hasil);
        $data = [
            "page" => "dashboard",
            'users' => $users,
            'user' => $user,
            "data" => $task,
            'tahunini' => $tahunini,
            'user_id' => $user_id,
            'indikators' => $indikators,
            'bagian' => $bagian,
            'hasil' => $hasil,
            'domains' => $domains,
            'index_aspek' => $hasil['index_aspek'],
            'index_domain' => $hasil['index_domain'],
            'index_SPBE' => $index_SPBE,
            'nilai_index_SPBE' => @$hasil['index_SPBE'][0]->nilai ?? 0,
        ];

        return view("menu.dashboard", $data);
    }
}
