<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('indikators')->insert([
            ['id' => 1, 'no' => 1, 'name' => 'Tingkat Kematangan Kebijakan Internal Arsitektur SPBE', 'aspek' => 1, 'bobot' => 1.30, 'bobot_aspek' => 0.999, 'domain' => 1, 'created_at' => NULL, 'updated_at' => '2024-06-06 19:36:29'],
            ['id' => 2, 'no' => 2, 'name' => 'Tingkat Kematangan Kebijakan Internal Peta Rencana', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => '2024-05-19 22:30:15'],
            ['id' => 3, 'no' => 3, 'name' => 'Tingkat Kematangan Kebijakan Internal Manajemen Data', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => '2024-05-19 22:33:37'],
            ['id' => 4, 'no' => 4, 'name' => 'Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => '2024-05-19 22:39:17'],
            ['id' => 5, 'no' => 5, 'name' => 'Tingkat Kematangan Kebijakan Internal Layanan Pusat Data', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 6, 'no' => 6, 'name' => 'Tingkat Kematangan Kebijakan Internal Layanan', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 7, 'no' => 7, 'name' => 'Tingkat Kematangan Kebijakan Internal Penggunaan Sistem', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 8, 'no' => 8, 'name' => 'Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 9, 'no' => 9, 'name' => 'Tingkat Kematangan Kebijakan Internal Audit TIK', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 10, 'no' => 10, 'name' => 'Tingkat Kematangan Kebijakan Internal Tim Koordinasi', 'aspek' => 1, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 1, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 11, 'no' => 11, 'name' => 'Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', 'aspek' => 2, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 12, 'no' => 12, 'name' => 'Tingkat Kematangan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', 'aspek' => 2, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 13, 'no' => 13, 'name' => 'Tingkat Kematangan Keterpaduan Rencana dan Anggaran SPBE', 'aspek' => 2, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 14, 'no' => 14, 'name' => 'Tingkat Kematangan Inovasi Proses Bisnis SPBE', 'aspek' => 2, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 15, 'no' => 15, 'name' => 'Tingkat Kematangan Pembangunan Aplikasi SPBE', 'aspek' => 3, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 16, 'no' => 16, 'name' => 'Tingkat Kematangan Layanan Pusat Data', 'aspek' => 3, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 17, 'no' => 17, 'name' => 'Tingkat Kematangan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah', 'aspek' => 3, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 18, 'no' => 18, 'name' => 'Tingkat Kematangan Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah', 'aspek' => 3, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 19, 'no' => 19, 'name' => 'Tingkat Kematangan Pelaksanaan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah', 'aspek' => 4, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 20, 'no' => 20, 'name' => 'Tingkat Kematangan Kolaborasi Penerapan SPBE', 'aspek' => 4, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 2, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 21, 'no' => 21, 'name' => 'Tingkat Kematangan Penerapan Manajemen Risiko SPBE', 'aspek' => 5, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 22, 'no' => 22, 'name' => 'Tingkat Kematangan Penerapan Manajemen Keamanan Informasi', 'aspek' => 5, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 23, 'no' => 23, 'name' => 'Tingkat Kematangan Penerapan Manajemen Data', 'aspek' => 5, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 24, 'no' => 24, 'name' => 'Tingkat Kematangan Penerapan Manajemen Aset TIK', 'aspek' => 5, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 25, 'no' => 25, 'name' => 'Tingkat Kematangan Penerapan Kompetensi Sumber Daya', 'aspek' => 5, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 26, 'no' => 26, 'name' => 'Tingkat Kematangan Penerapan Manajemen Pengetahuan', 'aspek' => 5, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 27, 'no' => 27, 'name' => 'Tingkat Kematangan Penerapan Manajemen Perubahan', 'aspek' => 5, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 28, 'no' => 28, 'name' => 'Tingkat Kematangan Penerapan Manajemen Layanan SPBE', 'aspek' => 5, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 29, 'no' => 29, 'name' => 'Tingkat Kematangan Pelaksanaan Audit Infrastruktur SPBE', 'aspek' => 6, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 30, 'no' => 30, 'name' => 'Tingkat Kematangan Pelaksanaan Audit Aplikasi SPBE', 'aspek' => 6, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 31, 'no' => 31, 'name' => 'Tingkat Kematangan Pelaksanaan Audit Keamanan SPBE', 'aspek' => 6, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 3, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 32, 'no' => 32, 'name' => 'Tingkat Kematangan Layanan Perencanaan', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 33, 'no' => 33, 'name' => 'Tingkat Kematangan Layanan Penganggaran', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 34, 'no' => 34, 'name' => 'Tingkat Kematangan Layanan Keuangan', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 35, 'no' => 35, 'name' => 'Tingkat Kematangan Layanan Pengadaan Barang dan Jasa', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 36, 'no' => 36, 'name' => 'Tingkat Kematangan Layanan Kepegawaian', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 37, 'no' => 37, 'name' => 'Tingkat Kematangan Layanan Kearsipan Dinamis', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 38, 'no' => 38, 'name' => 'Tingkat Kematangan Layanan Pengelolaan Barang Milik', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 39, 'no' => 39, 'name' => 'Tingkat Kematangan Layanan Pengawasan Internal', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 40, 'no' => 40, 'name' => 'Tingkat Kematangan Layanan Akuntabilitas Kinerja Organisasi', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 41, 'no' => 41, 'name' => 'Tingkat Kematangan Layanan Kinerja Pegawai', 'aspek' => 7, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 42, 'no' => 42, 'name' => 'Tingkat Kematangan Layanan Pengaduan Pelayanan Publik', 'aspek' => 8, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 43, 'no' => 43, 'name' => 'Tingkat Kematangan Layanan Data Terbuka', 'aspek' => 8, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => '2024-05-31 01:15:37'],
            ['id' => 44, 'no' => 44, 'name' => 'Tingkat Kematangan Jaringan Dokumentasi dan Informasi', 'aspek' => 8, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 45, 'no' => 45, 'name' => 'Tingkat Kematangan Layanan Publik Sektor 1', 'aspek' => 8, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 46, 'no' => 46, 'name' => 'Tingkat Kematangan Layanan Publik Sektor 2', 'aspek' => 8, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 47, 'no' => 47, 'name' => 'Tingkat Kematangan Layanan Publik Sektor 3', 'aspek' => 8, 'bobot' => 0, 'bobot_aspek' => 0, 'domain' => 4, 'created_at' => NULL, 'updated_at' => '2024-06-02 21:14:05'],
        ]);
    }
}
