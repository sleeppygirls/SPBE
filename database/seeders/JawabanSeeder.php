<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jawabans')->insert([
            [
                'id' => 147,
                'd_jawaban' => 'cdh',
                'id_penjelasan' => 41,
                'username' => 'user1',
                'id_task' => 1,
                'id_indikator' => 9,
                'created_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
                'updated_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
            ],
            [
                'id' => 148,
                'd_jawaban' => 'fchnb',
                'id_penjelasan' => 42,
                'username' => 'user1',
                'id_task' => 1,
                'id_indikator' => 9,
                'created_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
                'updated_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
            ],
            [
                'id' => 149,
                'd_jawaban' => 'fgh',
                'id_penjelasan' => 43,
                'username' => 'user1',
                'id_task' => 1,
                'id_indikator' => 9,
                'created_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
                'updated_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
            ],
            [
                'id' => 150,
                'd_jawaban' => 'rfh',
                'id_penjelasan' => 44,
                'username' => 'user1',
                'id_task' => 1,
                'id_indikator' => 9,
                'created_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
                'updated_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
            ],
            [
                'id' => 151,
                'd_jawaban' => 'rfgh',
                'id_penjelasan' => 45,
                'username' => 'user1',
                'id_task' => 1,
                'id_indikator' => 9,
                'created_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
                'updated_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
            ],
        ]);
    }
}
