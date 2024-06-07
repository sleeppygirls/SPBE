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
            ],
            [
                'aspek' => 'Perencanaan Strategis SPBE',
            ],
            [
                'aspek' => 'Teknologi Informasi dan Komunikasi',
            ],
            [
                'aspek' => 'Penyelenggara SPBE',
            ],
            [
                'aspek' => 'Penerapan Manajemen SPBE',
            ],
            [
                'aspek' => 'Audit TIK',
            ],
            [
                'aspek' => 'Layanan Pemerintahan Berbasis Elektronik',
            ],
            [
                'aspek' => 'Layanan Publik Berbasis Elektronik',
            ],
        ];

        foreach ($data as $val) {
            Aspek::create($val);
        }
    }
}
