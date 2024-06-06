<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'Admin',
                'level' => 'admin',
                'password' => 'admin',
                'nama_instansi' => 'admin',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user1',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Inspektorat',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user2',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Badan Perencanaan dan Pembangunan, Riset dan Inovasi Daerah',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user3',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user4',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user5',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Dinas Komunikasi dan Informatika',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user6',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Dinas Kesehatan',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user7',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Dinas Pengendalian Penduduk, KB dan PPPA',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user8',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Dinas Perpustakaan dan Kearsipan',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user9',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Rumah Sakit Umum Daerah',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user10',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Bagian Organisasi Sekretariat Daerah',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user11',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Bagian Hukum Sekretariat Daerah',
                'remember_token' => Str::random(16),
            ],
            [
                'username' => 'user12',
                'level' => 'user',
                'password' => 'user',
                'nama_instansi' => 'Bagian Pengadaan Barang dan Jasa Sekretariat Daerah',
                'remember_token' => Str::random(16),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }

    }
}
