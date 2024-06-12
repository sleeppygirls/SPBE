<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KeteranganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keterangans')->insert([
            [
                'id' => 1, 
                'name' => 'a. Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses bisnis, data dan informasi, infrastruktur SPBE, aplikasi SPBE, dan keamanan SPBE untuk menghasilkan layanan SPBE yang terintegrasi. 
                b. Kebijakan internal Arsitektur SPBE merupakan pengaturan mengenal Arsitektur SPBE di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan integrasi Proses Bisnis, Data dan Informasi, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu.
                c. Referensi Arsitektur dan Domain Arsitektur SPBE terdiri dari:
                    1. Domain Arsitektur Proses Bisnis;
                    2. Domain Arsitektur Data dan Informasi;
                    3. Domain Arsitektur Layanan;
                    4. Domain Arsitektur Aplikasi;
                    5. Domain Arsitektur Infrastuktur SPBE; dan,
                    6. Domain Arsitektur Keamanan SPBE.', 
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 2,
                'name' => 'a. Peta Rencana SPBE adalah dokumen yang mendeskripsikan arah dan langkah penyiapan dan pelaksanaan SPBE yang terintegrasi.
                b. Kebijakan internal Peta Rencana SPBE merupakan pengaturan mengenai Peta Rencana SPBE di Instansi Pusat/ Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam penyiapan dan pelaksanaan SPBE di instansi Pusat/Pemerintah Daerah.
                c.  Peta Rencana SPBE memuat:
                    1.Tata Kelola SPBE;
                    2.Manajemen SPBE;
                    3.Layanan SPBE;
                    4.Infrastuktur SPBE;
                    5.Aplikasi SPBE;
                    6.Keamanan SPBE; dan,
                    7.Audit TIK.',
                 'created_at' => NULL,
                'updated_at' => NULL
            ],

            [  
                'id' => 3, 
                'name' => 'a. Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat , mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.
                b. Manajemen Data dilakukan melalui serangkaian proses pengelolaan Arsitektur Data, Data Induk, Data Referensi, Bisnis Data, Kualitas Data dan Interoperabilitas Data.
                c. Kebijakan Internal Manajemen Data merupakan pengaturan mengenai Manajemen Data Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam pengelolaan data di Instansi Pusat dan Pemerintah Daerah.
                d. Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal Manajemen Data mengacu pada pedoman Manajemen Data SPBE.',
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            
            [
                'id' => 4,
                'name' => 'a. Aplikasi SPBE adalah satu atau sekumpulan program komputer dan prosedur yang dirancang untuk melakukan tugas atau fungsi Layanan SPBE.
                b. Pembangunan Aplikasi SPBE merupakan suatu proses perancangan aplikasi melalui siklus pembangunan aplikasi.
                c. Kebijakan internal Aplikasi SPBE merupakan pengaturan mengenai Pembangunan fAplikasi SPBE di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan pembangunan aplikasi SPBE untuk menghasilkan Layanan SPBE yang terpadu.
                d. Siklus Pembangunan Aplikasi terdiri dari:
                    1.Perencanaan;
                    2. Analisis;
                    3. Desain;
                    4. Implementasi; dan,
                    5. Pemeliharaan. 
                Siklus bisa menggunakan salah satu framework yang sudah ada seperti SDLC, RAD, Waterfall, Agile Development Cycle (SCRUM).',
                'created_at' => NULL, 
                'updated_at' => NULL
            ],

            [
                'id' => 5, 
                'name' => 'a. Layanan Pusat Data adalah penyediaan penyimpanan aplikasi dan data.
                b. Layanan Pusat Data bertujuan untuk menjamin ketersediaan penyimpanan data bagi Instansi Pusat dan Pemerintah Daerah.
                c. Layanan Pusat Data dilakukan melalui serangkaian proses pengelolaan Arsitektur Data, Data Induk, Data Referensi, Basis Data, dan Kualitas Data.
                d. Pusat Data Nasional adalah sekumpulan pusat data yang digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah, dan saling terhubung yang terdiri atas pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah dengan memenuhi persyaratan pusat data atau pusat data yang dibangun khusus untuk digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah
                e. Kebijakan Layanan Pusat Data merupakan pengaturan mengenai layanan pusat data di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan layanan pusat data untuk menghasilkan Layanan SPBE yang terpadu.
                f. Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal layanan pusat data mengacu pada pedoman layanan pusat data.',
                'created_at' => NULL, 
                'updated_at' => NULL
            ],
            
            [
                'id' => 6, 
                'name' => 'a. Jaringan Intra adalah jaringan tertutup yang menghubungkan antar simpul jaringan dalam suatu organisasi.
                b. Jaringan Intra Instansi Pusat dan Pemerintah Daerah merupakan Jaringan Intra yang diselenggarakan oleh Instansi Pusat dan Pemerintah Daerah untuk menghubungkan antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain, yang selanjutnya terhubung dengan jaringan intra pemerintah.
                c. Penggunaan Jaringan Intra Instansi Pusat dan Pemerintah Daerah bertujuan untuk menjaga keamanan dalam melakukan pengiriman data dan informasi antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, yang selanjutnya terhubung dengan jaringan intra pemerintah.
                d. Penyelenggaraan Jaringan Intra Instansi Pusat/Pemerintah Daerah sebagaimana dimaksud, dapat menggunakan jaringan fisik yang dibangun sendiri oleh Instansi  Pusat/Pemerintah Daerah dan/atau yang dibangun oleh penyedia jasa layanan jaringan, yang selanjutnya terhubung dengan jaringan intra pemerintah.
                e. Kebijakan internal dalam hal ini mengatur pengoperasian jaringan intra Instansi Pusat/Pemerintah Daerah yang selanjutnya terhubung dengan jaringan intra pemerintah.   ',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
  
            [
                'id' => 7, 
                'name' => 'a. Sistem Penghubung Layanan adalah perangkat integrasi/penghubung untuk melakukan pertukaran Layanan SPBE.
                b. Penggunaan Sistem Penghubung Layanan Pemerintah bertujuan untuk memudahkan dalam melakukan integrasi antar Layanan SPBE.
                c. Syarat sebuah Sistem Penghubung Layanan:
                    1. Tersedia jalur/bus (sistem koneksi bukan pointto-point); 
                    2. Tersedia metadata repository; dan
                    3. Tersedia service directory.
                d. Kebijakan internal dalam hal ini mengatur penerapan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerahyang selanjutnya terintegrasi dengan Sistem Penghubung Layanan Pemerintah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 8, 
                'name' => 'a. Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap keamanan informasi dalam SPBE.
                b. Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko keamanan informasi.
                c. Kebijakan internal dalam hal ini mengatur terkait penerapan Manajemen Keamanan Informasi pada Instansi Pusat/Pemerintah Daerah.',
                'created_at' => NULL, 
                'updated_at' => NULL
            ],

            [
                'id' => 9, 
                'name' => 'a. Audit Teknologi Informasi dan Komunikasi (TIK) adalah proses yang sistematis untuk memperoleh dan mengevaluasi bukti secara objektif terhadap aset teknologi informasi dan komunikasi dengan tujuan untuk menetapkan tingkat kesesuaian antara teknologi informasi dan komunikasi dengan kriteria dan/atau standar yang telah ditetapkan.
                b. Audit TIK terdiri atas:
                    1. Audit Infrastruktur SPBE;
                    2. Audit Aplikasi SPBE; dan,
                    3. Audit Keamanan SPBE.
                    c. Audit Teknologi Informasi dan Komunikasi meliputi pemeriksaan hal pokok teknis pada:
                    1. Penerapan tata kelola dan manajemen teknologi informasi dan komunikasi; 
                    2. Fungsionalitas teknologi informasi dan komunikasi;
                    3. Kinerja teknologi informasi dan komunikasi yang dihasilkan; dan,
                    4. Aspek teknologi informasi dan komunikasi lainnya.
                d. Kebijakan internal dalam hal ini mengatur terkait penerapan Audit TIK pada Instansi Pusat/Pemerintah Daerah.', 
                'created_at' => NULL,
                'updated_at' => NULL
                ],

            [
                'id' => 10, 
                'name' => 'a. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah adalah para pejabat dalam tim yang diberi tugas untuk mengendalikan, mengarahkan, dan mengevaluasi SPBE, termasuk didalamnya melaksanakan perumusan kebijakan dan penerapan SPBE di Instansi Pusat dan Pemerintah daerah masing-masing.
                b. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dapat disejajarkan dengan Tim Pengarah TIK, Komite Pengarah TIK, ataupun Steering Committee yang mempunyai tugas seperti dimaksud pada huruf a.
                c. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dipimpin oleh seorang koordinator yang ditetapkan oleh pimpinan Instansi Pusat/Kepala Daerah.
                d. Kebijakan internal dalam hal ini mengatur terkait tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.', 
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 11, 
                'name' => 'a. Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses bisnis, data dan informasi, infrastruktur SPBE, aplikasi SPBE, dan keamanan SPBE untuk menghasilkan layanan SPBE yang terintegrasi.
                b. Arsitektur SPBE Instansi Pusat/Pemerintah Daerah merupakan Arsitektur SPBE yang diterapkan di Instansi Pusat/Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan integrasi Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu.
                c. Referensi Arsitektur dan Domain Arsitektur SPBE terdiri dari: 
                    1) Domain arsitektur Proses Bisnis;
                    2) Domain arsitektur Data dan Informasi;
                    3) Domain arsitektur Layanan;
                    4) Domain arsitektur Aplikasi;
                    5) Domain arsitektur Infrastruktur SPBE; dan,
                    6) Domain arsitektur Keamanan SPBE.', 
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 12, 
                'name' => 'a. Peta Rencana SPBE adalah dokumen yang mendeskripsikan arah dan langkah penyiapan dan pelaksanaan SPBE yang terintegrasi.
                b. Peta Rencana SPBE memuat:
                    1. Tata Kelola SPBE;
                    2. Manajemen SPBE;
                    3. Layanan SPBE;
                    4. Infrastruktur SPBE;
                    5. Aplikasi SPBE;
                    6. Keamanan SPBE; dan
                    7. Audit TIK.', 
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 13, 
                'name' => 'a. Rencana dan Anggaran SPBE adalah dokumen yang mendeskripsikan program, kegiatan dan pemanfaatan anggaran SPBE.
                b. Rencana dan Anggaran SPBE disusun sesuai dengan proses perencanaan dan penganggaran tahunan pemerintah.
                c. Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah berpedoman pada Arsitektur SPBE Instansi Pusat/Pemerintah Daerah dan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', 
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 14, 
                'name' => 'a. Proses Bisnis adalah dokumen yang mendeskripsikan hubungan kerja yang efektif dan efisien antar unit organisasi untuk menghasilkan kinerja sesuai dengan tujuan pendirian organisasi agar menghasikan keluaran yang bernilai tambah bagi pemangku kepentingan (PermenPANRB No 19 Tahun 2018).
                b.Penyusunan Proses Bisnis bertujuan untuk memberikan pedoman dalam penggunaan data dan informasi serta penerapan Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.
                c. Instansi Pusat/Pemerintah Daerah menyusun Proses Bisnis yang selaras dengan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', 
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 15, 
                'name' => 'a. Aplikasi SPBE adalah satu atau sekumpulan program komputer dan prosedur yang dirancang untuk melakukan tugas atau fungsi Layanan SPBE.
                b. Pembangunan Aplikasi SPBE merupakan suatu proses perancangan aplikasi melalui siklus pembangunan aplikasi.
                c. Siklus Pembangunan Aplikasi terdiri dari: 
                    1. Perencanaan;
                    2. Analisis;
                    3. Desain;
                    4. Implementasi; dan,
                    5. Pemeliharaan.
                 Siklus bisa menggunakan salah satu framework yang sudah ada seperti SDLC, RAD, Waterfall, Agile Development Cycle (SCRUM).', 
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 16, 
                'name' => 'a. Pusat Data adalah fasilitas yang digunakan untuk penempatan sistem elektronik dan komponen terkait lainnya untuk keperluan penempatan, penyimpanan dan pengolahan data, dan pemulihan data baik yang dimiliki secara fisik dan non-fisik (cloud).
                b. Layanan Pusat Data adalah penyediaan penyimpanan aplikasi dan data.
                c. Layanan Pusat Data bertujuan untuk menjamin ketersediaan penyimpanan data bagi Instansi Pusat dan Pemerintah Daerah.
                d. Layanan Pusat Data dilakukan melalui serangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, dan kualitas data.
                e. Pusat Data Nasional adalah sekumpulan pusat data yang digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah, dan saling terhubung yang terdiri atas pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah dengan memenuhi persyaratan pusat data atau pusat data yang dibangun khusus untuk digunakan secara bersama dan bagipakai oleh Instansi Pusat dan Pemerintah Daerah.', 
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 17, 
                'name' => 'a. Jaringan Intra adalah jaringan tertutup yang menghubungkan antar simpul jaringan dalam suatu organisasi.
                b. Jaringan Intra Instansi Pusat/Pemerintah Daerah merupakan Jaringan Intra yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah untuk menghubungkan antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain.
                c. Penggunaan Jaringan Intra Instansi Pusat/Pemerintah Daerah bertujuan untuk menjaga keamanan dalam melakukan pengiriman data dan informasi antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah.
                d. Penyelenggaraan Jaringan Intra Instansi Pusat/Pemerintah Daerah sebagaimana dimaksud, dapat menggunakan jaringan fisik yang dibangun sendiri oleh Instansi Pusat/Pemerintah Daerah dan/atau yang dibangun oleh penyedia jasa layanan jaringan.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 18, 
                'name' => 'a. Sistem Penghubung Layanan adalah perangkat integrasi/penghubung untuk melakukan pertukaran Layanan SPBE.
                b. Penggunaan Sistem Penghubung Layanan Pemerintah bertujuan untuk memudahkan dalam melakukan integrasi antar Layanan SPBE	',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 19, 
                'name' => 'a. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah adalah para pejabat dalam tim yang diberi tugas untuk mengendalikan, mengarahkan, dan mengevaluasi SPBE, termasuk didalamnya melaksanakan perumusan kebijakan dan penerapan SPBE di Instansi Pusat dan Pemerintah Daerah masing-masing.
                b. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dapat disejajarkan dengan Tim Pengarah TIK, Komite Pengarah TIK, ataupun Steering Committeeyang mempunyai tugas seperti dimaksud pada huruf a.
                c. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dipimpin oleh seorang koordinator yang ditetapkan oleh pimpinan Instansi Pusat/Kepala Daerah',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 20, 
                'name' => 'a. Forum Kolaborasi SPBE merupakan wadah informal untuk pertukaran informasi dan peningkatan kapasitas pelaksanaan SPBE bagi Instansi Pusat, Pemerintah Daerah, perguruan tinggi, lembaga penelitian, pelaku usaha, dan masyarakat.
                b. Forum Kolaborasi SPBE dapat dimanfaatkan untuk antara lain:
                    1. penyampaian ide/gagasan SPBE;
                    2. pengembangan infrastruktur dan Aplikasi SPBE dari kontribusi komunitas TIK;
                    3. peningkatan kompetensi teknis;
                    4. perbaikan kualitas Layanan SPBE;
                    5. penelitian dan kajian pengembangan SPBE; dan
                    6. penyelesaian masalah untuk kepentingan bersama.
                c. Forum Kolaborasi SPBE dapat dilakukan dalam bentuk pertemuan informal dan pertemuan virtual',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 21, 
                'name' => 'a. Manajemen Risiko SPBE adalah pendekatan sistematis yang meliputi proses, pengukuran, struktur, dan budaya untuk menentukan tindakan terbaik terkait Risiko SPBE.
                b. Risiko SPBE adalah peluang terjadinya suatu peristiwa yang akan mempengaruhi keberhasilan terhadap pencapaian tujuan penerapan SPBE.
                c. Manajemen Risiko bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko dalam SPBE.
                d. Instansi Pusat dan Pemerintah Daerah menerapkan manajemen risiko SPBE berdasarkan pedoman Manajemen Risiko SPBE',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 22, 
                'name' => 'a. Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi dalam SPBE.
                b. Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan  SPBE dengan meminimalkan dampak risiko Keamanan Informasi.
                c. Penerapan Keamanan Informasi berlandaskan penjaminan kerahasiaan, keutuhan, ketersediaan, keaslian, dan kenirsangkalan (non-repudiation) sumber daya terkait data dan informasi, Infrastruktur SPBE, dan aplikasi.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 23, 
                'name' => 'a. Manajemen Data dilakukan melalui serangkaian  proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.
                b. Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat, mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 24, 
                'name' => 'a. Manajemen aset teknologi informasi dan komunikasi dilakukan melalui serangkaian proses perencanaan, pengadaan, pengelolaan, dan penghapusan perangkat keras dan perangkat lunak yang digunakan dalam SPBE.
                b. Manajemen aset teknologi informasi dan komunikasi bertujuan untuk menjamin ketersediaan dan optimalisasi pemanfaatan aset teknologi informasi dan komunikasi dalam SPBE.
                c. Aset TIK mencakup perangkat lunak, perangkat keras, data dan informasi, infrastruktur, SDM, lisensi, data, SOP, outsource services, dan IT asset register',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 25, 
                'name' => 'a. Manajemen Sumber Daya Manusia dilakukan melalui serangkaian proses perencanaan, pengembangan, pembinaan, dan pendayagunaan Sumber Daya Manusia dalam SPBE.
                b. Manajemen Sumber Daya Manusia bertujuan untuk menjamin keberlangsungan dan peningkatan mutu layanan dalam SPBE.
                c. Manajemen Sumber Daya Manusia (SDM) SPBE termasuk didalamnya kegiatan peningkatan kompetensi Sumber Daya Manusia SPBE dan promosi literasi SPBE.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 26, 
                'name' => 'Manajemen Pengetahuan adalah proses yang dilakukan untuk mendokumentasi pengalaman dan pengetahuan dalam perencanaan, implementasi, dan evaluasi SPBE guna meningkatkan kualitas Layanan SPBE dan mendukung proses pengambilan keputusan dalam SPBE.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 27, 
                'name' => 'a. Manajemen Perubahan dilakukan melalui serangkaian proses perencanaan, analisis, pengembangan, implementasi, pemantauan dan evaluasi terhadap perubahan SPBE.
                b.Manajemen Perubahan bertujuan untuk menjamin keberlangsungan dan meningkatkan kualitas Layanan SPBE melalui pengendalian perubahan yang terjadi dalam SPBE.
                c. Lingkup Manajemen Perubahan SPBE: 
                    1. Perubahan Aplikasi;
                    2. Perubahan Perangkat Keras;
                    3. Perubahan Perangkat Lunak;
                    4. Perubahan Infrastruktur;
                    5. Perubahan Proses Bisnis;
                    6. Perubahan Lingkungan Organisasi;
                    7. Perubahan Layanan;
                    8. Perubahan Data;
                    9. Perubahan Keamanan;
                    10. Perubahan Arsitektur.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 28, 
                'name' => 'a. Manajemen Layanan merupakan serangkaian proses pelayanan kepada pengguna, pengoperasian layanan, dan pengelolaan Aplikasi SPBE agar Layanan SPBE dapat berjalan berkesinambungan dan berkualitas.
                b. Manajemen Layanan bertujuan untuk menjamin keberlangsungan dan meningkatkan kualitas Layanan SPBE kepada Pengguna SPBE.
                c. Penyelenggaraan Manajemen Layanan SPBE ditujukan untuk memberikan dukungan terhadap layanan publik berbasis elektronik dan layanan administrasi pemerintahan berbasis elektronik agar Layanan SPBE tersebut dapat berjalan secara berkesinambungan, berkualitas,responsif, dan adaptif.
                d. Penyelenggaraan Manajemen Layanan dapat diwujudkan dengan membangun portal pusat layanan untuk menjalankan proses:
                    1. pengelolaan keluhan, gangguan, masalah, permintaan, dan perubahan Layanan  SPBE dari pengguna;
                    2. pendayagunaan dan pemeliharaan Infrastruktur SPBE dan Aplikasi SPBE; dan
                    3. pembangunan dan pengembangan aplikasi yang berpedoman pada metodologi pembangunan dan pengembangan aplikasi. ',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 29, 
                'name' => 'a. Audit Infrastruktur SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Infrastruktur SPBE.
                b. Audit Infrastruktur SPBE meliputi pemeriksaan hal pokok teknis antara lain: 
                    1. penerapan tata kelola dan manajemen infrastruktur SPBE;
                    2. infrastruktur SPBE;
                    3. kinerja infrastruktur SPBE yang dihasilkan; dan
                    4. aspek infrastruktur SPBE lainnya.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 30, 
                'name' => 'a. Audit Aplikasi SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Aplikasi SPBE.
                b. Audit Aplikasi SPBE terdiri atas: 
                    1. Audit Aplikasi Umum
                    2. Audit Aplikasi Khusus
                c. Standar/pedoman audit dapat berupa standar internal Instansi Pusat/Pemerintah Daerah, standar/pedoman nasional, atau standar/pedoman internasional.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 31, 
                'name' => 'a. Audit Keamanan SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Keamanan SPBE.
                b. Audit Keamanan SPBE terdiri atas: 	
                    1. Audit Keamanan Aplikasi; dan
                    2. Audit Keamanan Infrastruktur.
                c. Standar/pedoman audit dapat berupa standar internal Instansi Pusat/Pemerintah   Daerah, standar/pedoman nasional, atau standar/pedoman internasional.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 32, 
                'name' => 'a. Perencanaan adalah serangkaian proses untuk menghasilkan pengelolaan perencanaan yang efektif, efisien, dan akuntabel.
                b. Layanan Perencanaan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan perencanaan Instansi Pusat dan/atau Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 33, 
                'name' => 'a. Penganggaran adalah serangkaian proses untuk menghasilkan pengelolaan penganggaran yang efektif, efisien, dan akuntabel.
                b. Layanan Penganggaran Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan penganggaran Instansi Pusat dan/atau Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 34, 
                'name' => 'a. Keuangan adalah serangkaian proses untuk menghasilkan pengelolaan keuangan yang efektif, efisien, dan akuntabel.
                b. Layanan Keuangan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan keuangan Instansi Pusat dan/atau Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 35, 
                'name' => 'a. Pengadaan Barang/Jasa adalah serangkaian proses untuk menghasilkan pengelolaan Pengadaan barang/jasa yang efektif, efisien, dan akuntabel.
                b. Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan pengadaan barang/jasa Instansi Pusat dan/atau Pemerintah Daerah.
                c. Katalog Elektronik Sektoral adalah Katalog Elektronik yang disusun dan dikelola oleh Kementerian/Lembaga.
                d. Katalog Elektronik Lokal adalah Katalog Elektronik yang disusun dan dikelola oleh Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 36, 
                'name' => 'a. Kepegawaian adalah serangkaian proses untuk menghasilkan pengelolaan kepegawaian yang efektif, efisien, dan akuntabel.
                b. Layanan Kepegawaian Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kepegawaian Instansi Pusat dan/atau Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            
            [
                'id' => 37, 
                'name' => 'a. Kearsipan adalah serangkaian proses untuk menghasilkan pengelolaan kearsipan yang efektif, efisien, dan akuntabel.
                b. Arsip terbagi 2, yaitu Arsip Dinamis dan Arsip Statis.
                c. Arsip dinamis merupakan dokumen/naskah dinas yang masih digunakan.
                d. Arsip statis merupakan dokumen/naskah dinas yang telah melewati masa retensinya.
                e. Layanan Kearsipan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kearsipan Instansi Pusat dan/atau Pemerintah Daerah',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 38, 
                'name' => 'a. Pengelolaan Barang Milik Negara/Daerah (BMN/BMD) adalah serangkaian proses untuk menghasilkan pengelolaan BMN yang efektif, efisien, dan akuntabel.
                b. Layanan Pengelolaan BMN/BMD Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan BMN Instansi Pusat dan/atau BMD Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 39, 
                'name' => 'a. Pengawasan Internal adalah serangkaian proses untuk menghasilkan pengelolaan pengawasan internal yang efektif, efisien, dan akuntabel.
                b. Layanan Pengawasan Internal Berbasis Elektronik yang dimaksud merupakan  keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Pengawasan InternalInstansi Pusat dan/atau Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 40, 
                'name' => 'a. Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah adalah serangkaian proses untuk menghasilkan pengelolaan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                 b. Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 41, 
                'name' => 'a. Kinerja Pegawai adalah serangkaian proses untuk menghasilkan pengelolaan kinerja pegawai Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b.Layanan Kinerja Pegawai Instansi Pusat/Pemerintah Daerah Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kinerja pegawai di Instansi Pusat dan/atau Pemerintah Daerah',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 42, 
                'name' => 'a. Pengaduan Pelayanan Publik adalah serangkaian proses untuk menghasilkan pengelolaan pengaduan pelayanan publik Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b. Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan pengaduan pelayanan publik di Instansi Pusat dan/atau Pemerintah Daerah',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 43, 
                'name' => 'a. Data Terbuka (Open Data) adalah serangkaian proses untuk menghasilkan pengelolaan data terbuka Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b. Data Terbuka merupakan sekumpulan data yang dikelola oleh Instansi Pusat/Pemerintah Daerah yang dapat di bagi pakai oleh Instansi Pusat/Pemerintah Daerah lain.
                c. Layanan Data Terbuka Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan data terbuka Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 44, 
                'name' => 'a. Jaringan Dokumentasi dan Informasi Hukum adalah serangkaian proses untuk menghasilkan pengelolaanjaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b. Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan jaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 45, 
                'name' => 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah.
                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.
                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 - 44	',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 46, 
                'name' => 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah.
                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah.
                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 - 44.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],

            [
                'id' => 47, 
                'name' => 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah.
                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah.
                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 - 44.',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
        ]);
    }
}
