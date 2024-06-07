<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'Admin',
                'password' => '$2y$12$dslC.jPtJmnBuc.JGrj4.OjkVUet9qo222HHUlt.XX.rlE4FOZ59i',
                'level' => 'admin',
                'nama_instansi' => 'Admin',
                'pass_view' => 'admin',
                'remember_token' => 'AMAxnyvjYXucCUg2B6VPRLjet1OwnzS02Mmap3pg92993e7rpccW54rGOrr1',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 8),
                'updated_at' => Carbon::create(2024, 5, 24, 1, 11, 59),
            ],
            [
                'id' => 2,
                'username' => 'user1',
                'password' => '$2y$12$oGgLJPaHngwols.p8eYFme4hKjZTSqwyys1DjzjMRRwdZHkJO9/n.',
                'level' => 'user',
                'nama_instansi' => 'Inspektorat',
                'pass_view' => 'user1',
                'remember_token' => 'M8rftztMbfo4ZbjdDkI92jVMmgxGwtoRv3ciBLOlUI0Uqw9FRBN8HH0Yv4LK',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 8),
                'updated_at' => Carbon::create(2024, 5, 29, 17, 47, 1),
            ],
            [
                'id' => 3,
                'username' => 'user2',
                'password' => '$2y$12$qg5m3GJ5QUPNT/rlY9PCtuuci2IpytA6xWo41Xt6SkEr52WK26ozu',
                'level' => 'user',
                'nama_instansi' => 'Badan Perencanaan dan Pembangunan, Riset dan Inovasi Daerah',
                'pass_view' => 'user',
                'remember_token' => 'jXLzdVQWdAFkpAWfEBmbVqVejncdc7QvJG8ajzgUjnRE0eIRiJkqTZ5dJjCA',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 9),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 9),
            ],
            [
                'id' => 4,
                'username' => 'user3',
                'password' => '$2y$12$oSC/qxXt6jpPkIo4bqXfqORg0wBXCdunLLSgrs8NnxOSFKlbuS5z2',
                'level' => 'user',
                'nama_instansi' => 'Badan Pengelolaan Keuangan dan Aset Daerah',
                'pass_view' => 'user',
                'remember_token' => 'VjGpSGH8EQXQFdSEBCNMohV4Bp0yuLQj9B0NqRvlO2IbpmjEnNZSoW8ZTLm4',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 9),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 9),
            ],
            [
                'id' => 5,
                'username' => 'user4',
                'password' => '$2y$12$x87n5QNSVWyw1Zq4JKm39eVioqQO212GPwrAwMNC2IAnXt.eFuZIC',
                'level' => 'user',
                'nama_instansi' => 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia',
                'pass_view' => 'user',
                'remember_token' => 'tH1kKe8d9D2xP5Px',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 9),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 9),
            ],
            [
                'id' => 6,
                'username' => 'user5',
                'password' => '$2y$12$aTk6FZCQTWo6/KuWzrUiWuIPfivSSOt4S9XzxRVkFQ9qNoB4Ropw.',
                'level' => 'user',
                'nama_instansi' => 'Dinas Komunikasi dan Informatika',
                'pass_view' => 'user',
                'remember_token' => 'a2HT8D34lb1vsBIv',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 10),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 10),
            ],
            [
                'id' => 7,
                'username' => 'user6',
                'password' => '$2y$12$4VNZhxnGOKWV/QRmstU4JO0SQTnWEIf35gN9Etb4opJfRfbUsRszS',
                'level' => 'user',
                'nama_instansi' => 'Dinas Kesehatan',
                'pass_view' => 'user',
                'remember_token' => 'NVMDUXJyoOjnbAVncEFrw1BIC7QjUGFhtxs345IT6TBF5U2LpJ6Yj9nw5lXn',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 10),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 10),
            ],
            [
                'id' => 8,
                'username' => 'user7',
                'password' => '$2y$12$0tqT5khxAHa61b5e6e38ruCmc.Q14OVvPaQWbq22UbceiXHSgWZw6',
                'level' => 'user',
                'nama_instansi' => 'Dinas Pengendalian Penduduk, KB dan PPPA',
                'pass_view' => 'user',
                'remember_token' => 'PQloRE2Xkjd1aZ12',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 11),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 11),
            ],
            [
                'id' => 9,
                'username' => 'user8',
                'password' => '$2y$12$mj1g2JFnopK9JuYJ0D5b6O3Qe4TNS0dEVD6AN/596oo2WtHtM0smq',
                'level' => 'user',
                'nama_instansi' => 'Dinas Perpustakaan dan Kearsipan',
                'pass_view' => 'user',
                'remember_token' => 'qlFfJeXPIGMNVoWB',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 11),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 11),
            ],
            [
                'id' => 10,
                'username' => 'user9',
                'password' => '$2y$12$CMU.MnL.AV1aaTa4rVJZeOctBIMihUOIL.wCDK08TMbjX1Jz9U/Ye',
                'level' => 'user',
                'nama_instansi' => 'Rumah Sakit Umum Daerah Dolopo',
                'pass_view' => 'user',
                'remember_token' => '99RWLoPcIH9j4Xkn',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 11),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 11),
            ],
            [
                'id' => 11,
                'username' => 'user10',
                'password' => '$2y$12$vIcQavX0EUhCxtRK4hKkJuoBcoNnkpOzbiRNinZpnGDyqiXFNgtES',
                'level' => 'user',
                'nama_instansi' => 'Bagian Organisasi Sekretariat Daerah',
                'pass_view' => 'user',
                'remember_token' => 'iPQIRYpQ7XLxNXVO',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 11),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 11),
            ],
            [
                'id' => 12,
                'username' => 'user11',
                'password' => '$2y$12$9qyNcDBlBlv26Z/wc0AqC.vI.DysCAP/nQ2a.EoCltt.JI78MQixC',
                'level' => 'user',
                'nama_instansi' => 'Bagian Hukum Sekretariat Daerah',
                'pass_view' => 'user',
                'remember_token' => '6rogojNlRSiTRCUE',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 12),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 12),
            ],
            [
                'id' => 26,
                'username' => 'user12',
                'password' => '$2y$12$D6Dw7LbbEzBxkdJt2lljT.MYbxUSFvnLl57mOE.zYYJdJFoqMsSFG',
                'level' => 'user',
                'nama_instansi' => 'Bagian Pengadaan Barang dan Jasa Sekretariat Daerah',
                'pass_view' => 'user',
                'remember_token' => '9bOZQMPtUePPt4uk',
                'created_at' => Carbon::create(2024, 5, 17, 0, 48, 12),
                'updated_at' => Carbon::create(2024, 5, 17, 0, 48, 12),
            ],
        ]);
    }
}
