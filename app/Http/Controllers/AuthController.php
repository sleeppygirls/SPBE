<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Bagian;
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
        // dd([
        //     'Check' => Auth::check(),
        //     'username' => Auth::user()->username,
        //     'level' => Auth::user()->level,
        // ]);
        Auth::logout();

        return redirect('login');
    }

    function dashboard(Request $req)
    {
        // dd($req);
        $tahunini = @$req->input('tahun') ?? '';
        
        $user_id = @$req->input('user_id') ?? '';

        $task = Task::all();
        $users = User::where('level', '=', 'user')->get();
        $user = User::where('id', $user_id)->first();

        // query
        $indikators = collect();
        $bagian = Bagian::where('id_user', $user_id)->first();

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
            "page" => "dashboard",
            'users' => $users,
            'user' => $user,
            "data" => $task,
            'tahunini' => $tahunini,
            'user_id' => $user_id,
            'indikators' => $indikators,
            'bagian' => $bagian,
        ];

        // dd($data);
        return view("menu.dashboard", $data);
    }
    // function test(Request $req) {
    //     dd($req);
    // }
}
