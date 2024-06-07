<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailIndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_indikators')->insert([
            [
                'id' => 23,
                'username' => 'user1',
                'id_indikator' => 9,
                'capaian' => 5,
                'note' => 'tes',
                'id_task' => 1,
                'created_at' => Carbon::create(2024, 6, 6, 0, 42, 1),
                'updated_at' => Carbon::create(2024, 6, 6, 19, 3, 20),
            ],
        ]);
    }
}
