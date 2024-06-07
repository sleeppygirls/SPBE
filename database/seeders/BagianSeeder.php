<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bagians')->insert([
            [
                'id' => 2,
                'id_user' => 6,
                'id_task' => 1,
                'indikators' => json_encode(["1", "2", "4", "5", "6", "7", "8", "11", "12", "15", "16", "17", "18", "19", "20", "22", "23", "28", "30", "31", "42", "43"]),
                'created_at' => Carbon::create(2024, 5, 23, 1, 14, 2),
                'updated_at' => Carbon::create(2024, 5, 23, 1, 14, 55),
            ],
            [
                'id' => 3,
                'id_user' => 12,
                'id_task' => 1,
                'indikators' => json_encode(["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "44"]),
                'created_at' => Carbon::create(2024, 5, 23, 1, 16, 16),
                'updated_at' => Carbon::create(2024, 5, 23, 1, 16, 16),
            ],
            [
                'id' => 4,
                'id_user' => 3,
                'id_task' => 1,
                'indikators' => json_encode(["3", "13", "23", "32"]),
                'created_at' => Carbon::create(2024, 5, 23, 23, 10, 31),
                'updated_at' => Carbon::create(2024, 5, 23, 23, 10, 31),
            ],
            [
                'id' => 5,
                'id_user' => 2,
                'id_task' => 1,
                'indikators' => json_encode(["9", "21", "29", "30", "31", "39"]),
                'created_at' => Carbon::create(2024, 5, 23, 23, 11, 21),
                'updated_at' => Carbon::create(2024, 6, 6, 0, 32, 17),
            ],
            [
                'id' => 6,
                'id_user' => 11,
                'id_task' => 1,
                'indikators' => json_encode(["10", "14", "19", "20", "27", "40"]),
                'created_at' => Carbon::create(2024, 5, 23, 23, 12, 5),
                'updated_at' => Carbon::create(2024, 5, 23, 23, 12, 5),
            ],
            [
                'id' => 7,
                'id_user' => 4,
                'id_task' => 1,
                'indikators' => json_encode(["13", "24", "33", "34", "38"]),
                'created_at' => Carbon::create(2024, 5, 23, 23, 12, 58),
                'updated_at' => Carbon::create(2024, 5, 23, 23, 12, 58),
            ],
            [
                'id' => 8,
                'id_user' => 5,
                'id_task' => 1,
                'indikators' => json_encode(["25", "26", "36", "41"]),
                'created_at' => Carbon::create(2024, 5, 23, 23, 13, 51),
                'updated_at' => Carbon::create(2024, 5, 23, 23, 13, 51),
            ],
            [
                'id' => 9,
                'id_user' => 26,
                'id_task' => 1,
                'indikators' => json_encode(["25"]),
                'created_at' => Carbon::create(2024, 5, 23, 23, 15, 7),
                'updated_at' => Carbon::create(2024, 5, 23, 23, 15, 8),
            ],
            [
                'id' => 10,
                'id_user' => 9,
                'id_task' => 1,
                'indikators' => json_encode(["37"]),
                'created_at' => Carbon::create(2024, 5, 23, 23, 21, 48),
                'updated_at' => Carbon::create(2024, 5, 23, 23, 21, 48),
            ],
            [
                'id' => 11,
                'id_user' => 10,
                'id_task' => 1,
                'indikators' => json_encode(["45"]),
                'created_at' => Carbon::create(2024, 5, 23, 23, 22, 58),
                'updated_at' => Carbon::create(2024, 5, 26, 21, 18, 18),
            ],
            [
                'id' => 12,
                'id_user' => 7,
                'id_task' => 1,
                'indikators' => json_encode(["46"]),
                'created_at' => Carbon::create(2024, 5, 26, 21, 18, 56),
                'updated_at' => Carbon::create(2024, 5, 26, 21, 18, 56),
            ],
            [
                'id' => 38,
                'id_user' => 8,
                'id_task' => 1,
                'indikators' => json_encode(["1", "2"]),
                'created_at' => Carbon::create(2024, 6, 3, 22, 54, 27),
                'updated_at' => Carbon::create(2024, 6, 3, 22, 54, 27),
            ],
            [
                'id' => 51,
                'id_user' => 1,
                'id_task' => 1,
                'indikators' => json_encode(["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31", "32", "33", "34", "35", "36", "37", "38", "39", "40", "41", "42", "43", "44", "45", "46", "47"]),
                'created_at' => Carbon::create(2024, 6, 5, 2, 21, 35),
                'updated_at' => Carbon::create(2024, 6, 5, 2, 30, 57),
            ],
        ]);
    }
}
