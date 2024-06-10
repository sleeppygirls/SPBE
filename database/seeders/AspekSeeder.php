<?php

namespace Database\Seeders;

use App\Models\Aspek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AspekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'aspek' => 'Kebijakan Internal Tata Kelola SPBE',
                'bobot_a' => 1.30,
                'bobot_aspeka' => 100.00,
            ],
            [
                'aspek' => 'Perencanaan Strategis SPBE',
                'bobot_a' => 10.00,
                'bobot_aspeka' => 40.00,
            ],
            [
                'aspek' => 'Teknologi Informasi dan Komunikasi',
                'bobot_a' => 10.00,
                'bobot_aspeka' => 40.00,
            ],
            [
                'aspek' => 'Penyelenggara SPBE',
                'bobot_a' => 5.00,
                'bobot_aspeka' => 20.00,
            ],
            [
                'aspek' => 'Penerapan Manajemen SPBE',
                'bobot_a' => 12.00,
                'bobot_aspeka' => 72.70,
            ],
            [
                'aspek' => 'Audit TIK',
                'bobot_a' => 4.50,
                'bobot_aspeka' => 27.30,
            ],
            [
                'aspek' => 'Layanan Pemerintahan Berbasis Elektronik',
                'bobot_a' => 27.50,
                'bobot_aspeka' => 60.40,
            ],
            [
                'aspek' => 'Layanan Publik Berbasis Elektronik',
                'bobot_a' => 18.00,
                'bobot_aspeka' => 39.60,
            ],
        ];

        foreach ($data as $val) {
            Aspek::create($val);
        }
    }
}
