<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('domains')->insert([
            ['id' => 1, 'domain' => 'Kebijakan Internal SPBE', 'bobot_domain' => 13.00, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 2, 'domain' => 'Tata Kelola SPBE', 'bobot_domain' => 25.00, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 3, 'domain' => 'Manajemen SPBE', 'bobot_domain' => 16.50, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 4, 'domain' => 'Layanan SPBE', 'bobot_domain' => 47.50, 'created_at' => NULL, 'updated_at' => NULL],
        ]);
    }
}
