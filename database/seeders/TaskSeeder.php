<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::insert([
            [
                'name' => 'testing',
                'tahap' => 'penilaian mandiri',
                'batas' => '2024-04-30',
                'tahun' => '2024',
                'status' => 'pemantauan',
                'desc' => 'testing',
                'created_at' => NULL,
                'updated_at' => '2024-05-31 01:22:31'
            ],
            [
                'name' => 'Coba',
                'tahap' => 'Pemantauan',
                'batas' => '2024-06-06',
                'tahun' => '2025',
                'status' => 'Pantau',
                'desc' => 'coba',
                'created_at' => '2024-06-06 00:33:43',
                'updated_at' => '2024-06-06 00:33:43'
            ]
        ]);


    }
}
