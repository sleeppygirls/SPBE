<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Bagian;
use Livewire\Component;
use App\Models\Indikator;
use Illuminate\Support\Facades\Auth;

class CartDashboard extends Component
{
    public $data = [];

    public function mount()
    {
        $labels = [];
        $nilais = [];
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
                        $capaian = 0;
                        if ($indikator->detailIndikator) {
                            if ($indikator->detailIndikator->username == $user->username) {
                                $capaian = $indikator->detailIndikator->capaian;
                            }
                        }

                        $index_akhir = ($indikator->bobot_aspek / 100) * $capaian;
                        $indikator->index_akhir = $index_akhir;
                        $total_bobot += $indikator->bobot;
                        $total_tk_final += $index_akhir;
                        $total_bobot_aspek += $indikator->bobot_aspek;
                    }

                    $total_index_akhir = $total_tk_final * $total_bobot_aspek;
                    $user->total_index_akhir = $total_index_akhir;
                }

                return $user;
            });

            foreach ($users as $value) {
                $labels[] = $value->nama_instansi;
                $nilais[] = $value->total_index_akhir;
            }
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
                    'detailIndikator' => function ($query) use ($username) {
                        $query->where('username', $username);
                    },
                ])
                    ->whereIn('id', $indikatorIds)
                    ->get();

                $total_index_akhir = 0;
                $total_bobot = 0;
                $total_tk_final = 0;
                $total_bobot_aspek = 0;

                foreach ($indikators as $indikator) {
                    $capaian = $indikator->detailIndikator->capaian ?? 0;
                    $indikator->index_akhir = ($indikator->bobot_aspek / 100) * $capaian;
                    $total_index_akhir = $indikators->sum('index_akhir') * $total_bobot_aspek;
                    $total_bobot = $indikators->sum('bobot');
                    $total_tk_final = $indikators->sum('index_akhir');
                    $total_bobot_aspek = $indikators->sum('bobot_aspek');
                }

                $indikators->total_index_akhir = $total_index_akhir;
                $indikators->total_bobot = $total_bobot;
                $indikators->total_tk_final = $total_tk_final;
                $indikators->total_bobot_aspek = $total_bobot_aspek;
            }

            foreach ($indikators as $value) {
                $labels[] = $value->name;
                $nilais[] = $value->index_akhir;
            }
        }

        $this->data = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Grafik',
                    'data' => $nilais,
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'borderWidth' => 1,
                ],
            ],
        ];
    }
    public function render()
    {
        return view('livewire.cart-dashboard');
    }
}
