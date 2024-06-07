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
        $this->call([
            UserSeeder::class,
            AspekSeeder::class,
            TaskSeeder::class,
            IndikatorSeeder::class,
            DetailIndikatorSeeder::class,
            PenjelasanSeeder::class,
            BantuanSeeder::class,
            JawabanSeeder::class,
            DomainSeeder::class,
            BagianSeeder::class,
        ]);

    }
}
