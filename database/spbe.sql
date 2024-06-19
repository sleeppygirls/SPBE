-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Jun 2024 pada 05.55
-- Versi server: 10.5.23-MariaDB-0+deb11u1
-- Versi PHP: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spbe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspeks`
--

CREATE TABLE `aspeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aspek` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aspeks`
--

INSERT INTO `aspeks` (`id`, `aspek`, `created_at`, `updated_at`) VALUES
(1, 'Kebijakan Internal Tata Kelola SPBE', '2024-06-11 19:56:52', '2024-06-11 19:56:52'),
(2, 'Perencanaan Strategis SPBE', '2024-06-11 19:56:52', '2024-06-11 19:56:52'),
(3, 'Teknologi Informasi dan Komunikasi', '2024-06-11 19:56:52', '2024-06-11 19:56:52'),
(4, 'Penyelenggara SPBE', '2024-06-11 19:56:52', '2024-06-11 19:56:52'),
(5, 'Penerapan Manajemen SPBE', '2024-06-11 19:56:52', '2024-06-11 19:56:52'),
(6, 'Audit TIK', '2024-06-11 19:56:52', '2024-06-11 19:56:52'),
(7, 'Layanan Pemerintahan Berbasis Elektronik', '2024-06-11 19:56:52', '2024-06-11 19:56:52'),
(8, 'Layanan Publik Berbasis Elektronik', '2024-06-11 19:56:53', '2024-06-11 19:56:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagians`
--

CREATE TABLE `bagians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_task` int(11) DEFAULT NULL,
  `indikators` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bagians`
--

INSERT INTO `bagians` (`id`, `id_user`, `id_task`, `indikators`, `created_at`, `updated_at`) VALUES
(2, 6, 1, '[\"1\",\"2\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"22\",\"23\",\"28\",\"30\",\"31\",\"42\",\"43\"]', '2024-05-22 18:14:02', '2024-05-22 18:14:55'),
(3, 12, 1, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"44\"]', '2024-05-22 18:16:16', '2024-05-22 18:16:16'),
(4, 3, 1, '[\"3\",\"13\",\"23\",\"32\"]', '2024-05-23 16:10:31', '2024-05-23 16:10:31'),
(5, 2, 1, '[\"9\",\"21\",\"29\",\"30\",\"31\",\"39\"]', '2024-05-23 16:11:21', '2024-06-05 17:32:17'),
(6, 11, 1, '[\"10\",\"14\",\"19\",\"20\",\"27\",\"40\"]', '2024-05-23 16:12:05', '2024-05-23 16:12:05'),
(7, 4, 1, '[\"13\",\"24\",\"33\",\"34\",\"38\"]', '2024-05-23 16:12:58', '2024-05-23 16:12:58'),
(8, 5, 1, '[\"25\",\"26\",\"36\",\"41\"]', '2024-05-23 16:13:51', '2024-05-23 16:13:51'),
(9, 26, 1, '[\"25\"]', '2024-05-23 16:15:07', '2024-05-23 16:15:08'),
(10, 9, 1, '[\"37\"]', '2024-05-23 16:21:48', '2024-05-23 16:21:48'),
(11, 10, 1, '[\"45\"]', '2024-05-23 16:22:58', '2024-05-26 14:18:18'),
(12, 7, 1, '[\"46\"]', '2024-05-26 14:18:56', '2024-05-26 14:18:56'),
(38, 8, 1, '[\"1\",\"2\"]', '2024-06-03 15:54:27', '2024-06-03 15:54:27'),
(51, 1, 1, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"38\",\"39\",\"40\",\"41\",\"42\",\"43\",\"44\",\"45\",\"46\",\"47\"]', '2024-06-04 19:21:35', '2024-06-04 19:30:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_indikators`
--

CREATE TABLE `detail_indikators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `id_task` int(11) DEFAULT NULL,
  `id_indikator` varchar(255) DEFAULT NULL,
  `capaian` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_indikators`
--

INSERT INTO `detail_indikators` (`id`, `file`, `username`, `id_task`, `id_indikator`, `capaian`, `note`, `created_at`, `updated_at`) VALUES
(23, NULL, 'user1', 1, '9', '5', 'tes', '2024-06-05 17:42:01', '2024-06-06 12:03:20'),
(24, NULL, 'user1', 1, '21', '5', NULL, '2024-06-12 19:38:05', '2024-06-12 19:38:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domains`
--

CREATE TABLE `domains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `domains`
--

INSERT INTO `domains` (`id`, `domain`, `created_at`, `updated_at`) VALUES
(1, 'Kebijakan Internal SPBE', NULL, NULL),
(2, 'Tata Kelola SPBE', NULL, NULL),
(3, 'Manajemen SPBE', NULL, NULL),
(4, 'Layanan SPBE', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_data`
--

CREATE TABLE `file_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_indikator` bigint(20) UNSIGNED NOT NULL,
  `id_task` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`files`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file_data`
--

INSERT INTO `file_data` (`id`, `id_indikator`, `id_task`, `id_user`, `name`, `files`, `created_at`, `updated_at`) VALUES
(1, 9, 1, 2, 'ini adalah dokumen contoh', '\"[{\\\"name\\\":\\\"ini adalah dokumen contoh\\\",\\\"path\\\":\\\"public\\\\\\/documents\\\\\\/phB04K9iLUA2jWOxhLL7mvWGa6y4nsHa5nRbcnAZ.pdf\\\"}]\"', '2024-06-12 04:59:02', '2024-06-12 04:59:02'),
(2, 21, 1, 2, 'test', '\"[{\\\"name\\\":\\\"test\\\",\\\"path\\\":\\\"public\\\\\\/documents\\\\\\/DH0PsRwez1M6lww5GCIElEYV5pKYGh7ZL1Bswy5j.pdf\\\"}]\"', '2024-06-12 19:37:39', '2024-06-12 19:37:39'),
(3, 29, 1, 2, 'perpres 95 2018', '\"[{\\\"name\\\":\\\"perpres 95 2018\\\",\\\"path\\\":\\\"public\\\\\\/documents\\\\\\/F4WyH1AB5GEXqR6NYHHRmZVJMXyFAG3ne7782DaO.pdf\\\"}]\"', '2024-06-12 19:42:28', '2024-06-12 19:42:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikators`
--

CREATE TABLE `indikators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `bobot` decimal(5,2) NOT NULL DEFAULT 0.00,
  `bobot_aspek` decimal(5,2) NOT NULL DEFAULT 0.00,
  `id_keterangan` int(11) DEFAULT NULL,
  `aspek` int(11) DEFAULT NULL,
  `domain` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `indikators`
--

INSERT INTO `indikators` (`id`, `no`, `name`, `bobot`, `bobot_aspek`, `id_keterangan`, `aspek`, `domain`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tingkat Kematangan Kebijakan Internal Arsitektur SPBE', 1.30, 10.00, 1, 1, 1, NULL, '2024-06-06 12:36:29'),
(2, 2, 'Tingkat Kematangan Kebijakan Internal Peta Rencana', 1.30, 10.00, 2, 1, 1, NULL, '2024-05-19 15:30:15'),
(3, 3, 'Tingkat Kematangan Kebijakan Internal Manajemen Data', 1.30, 10.00, 3, 1, 1, NULL, '2024-05-19 15:33:37'),
(4, 4, 'Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE', 1.30, 10.00, 4, 1, 1, NULL, '2024-05-19 15:39:17'),
(5, 5, 'Tingkat Kematangan Kebijakan Internal Layanan Pusat Data', 1.30, 10.00, 5, 1, 1, NULL, NULL),
(6, 6, 'Tingkat Kematangan Kebijakan Internal Layanan', 1.30, 10.00, 6, 1, 1, NULL, NULL),
(7, 7, 'Tingkat Kematangan Kebijakan Internal Penggunaan Sistem', 1.30, 10.00, 7, 1, 1, NULL, NULL),
(8, 8, 'Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi', 1.30, 10.00, 8, 1, 1, NULL, NULL),
(9, 9, 'Tingkat Kematangan Kebijakan Internal Audit TIK', 1.30, 10.00, 9, 1, 1, NULL, NULL),
(10, 10, 'Tingkat Kematangan Kebijakan Internal Tim Koordinasi', 1.30, 10.00, 10, 1, 1, NULL, NULL),
(11, 11, 'Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', 2.50, 25.00, 11, 2, 2, NULL, NULL),
(12, 12, 'Tingkat Kematangan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', 2.50, 25.00, 12, 2, 2, NULL, NULL),
(13, 13, 'Tingkat Kematangan Keterpaduan Rencana dan Anggaran SPBE', 2.50, 25.00, 13, 2, 2, NULL, NULL),
(14, 14, 'Tingkat Kematangan Inovasi Proses Bisnis SPBE', 2.50, 25.00, 14, 2, 2, NULL, NULL),
(15, 15, 'Tingkat Kematangan Pembangunan Aplikasi SPBE', 2.50, 25.00, 15, 3, 2, NULL, NULL),
(16, 16, 'Tingkat Kematangan Layanan Pusat Data', 2.50, 25.00, 16, 3, 2, NULL, NULL),
(17, 17, 'Tingkat Kematangan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah', 2.50, 25.00, 17, 3, 2, NULL, NULL),
(18, 18, 'Tingkat Kematangan Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah', 2.50, 25.00, 18, 3, 2, NULL, NULL),
(19, 19, 'Tingkat Kematangan Pelaksanaan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah', 2.50, 50.00, 19, 4, 2, NULL, NULL),
(20, 20, 'Tingkat Kematangan Kolaborasi Penerapan SPBE', 2.50, 50.00, 20, 4, 2, NULL, NULL),
(21, 21, 'Tingkat Kematangan Penerapan Manajemen Risiko SPBE', 1.50, 12.50, 21, 5, 3, NULL, NULL),
(22, 22, 'Tingkat Kematangan Penerapan Manajemen Keamanan Informasi', 1.50, 12.50, 22, 5, 3, NULL, NULL),
(23, 23, 'Tingkat Kematangan Penerapan Manajemen Data', 1.50, 12.50, 23, 5, 3, NULL, NULL),
(24, 24, 'Tingkat Kematangan Penerapan Manajemen Aset TIK', 1.50, 12.50, 24, 5, 3, NULL, NULL),
(25, 25, 'Tingkat Kematangan Penerapan Kompetensi Sumber Daya', 1.50, 12.50, 25, 5, 3, NULL, NULL),
(26, 26, 'Tingkat Kematangan Penerapan Manajemen Pengetahuan', 1.50, 12.50, 26, 5, 3, NULL, NULL),
(27, 27, 'Tingkat Kematangan Penerapan Manajemen Perubahan', 1.50, 12.50, 27, 5, 3, NULL, NULL),
(28, 28, 'Tingkat Kematangan Penerapan Manajemen Layanan SPBE', 1.50, 12.50, 28, 5, 3, NULL, NULL),
(29, 29, 'Tingkat Kematangan Pelaksanaan Audit Infrastruktur SPBE', 1.50, 33.30, 29, 6, 3, NULL, NULL),
(30, 30, 'Tingkat Kematangan Pelaksanaan Audit Aplikasi SPBE', 1.50, 33.30, 30, 6, 3, NULL, NULL),
(31, 31, 'Tingkat Kematangan Pelaksanaan Audit Keamanan SPBE', 1.50, 33.30, 31, 6, 3, NULL, NULL),
(32, 32, 'Tingkat Kematangan Layanan Perencanaan', 27.50, 10.00, 32, 7, 4, NULL, NULL),
(33, 33, 'Tingkat Kematangan Layanan Penganggaran', 27.50, 10.00, 33, 7, 4, NULL, NULL),
(34, 34, 'Tingkat Kematangan Layanan Keuangan', 27.50, 10.00, 34, 7, 4, NULL, NULL),
(35, 35, 'Tingkat Kematangan Layanan Pengadaan Barang dan Jasa', 27.50, 10.00, 35, 7, 4, NULL, NULL),
(36, 36, 'Tingkat Kematangan Layanan Kepegawaian', 27.50, 10.00, 36, 7, 4, NULL, NULL),
(37, 37, 'Tingkat Kematangan Layanan Kearsipan Dinamis', 27.50, 10.00, 37, 7, 4, NULL, NULL),
(38, 38, 'Tingkat Kematangan Layanan Pengelolaan Barang Milik', 27.50, 10.00, 38, 7, 4, NULL, NULL),
(39, 39, 'Tingkat Kematangan Layanan Pengawasan Internal', 27.50, 10.00, 39, 7, 4, NULL, NULL),
(40, 40, 'Tingkat Kematangan Layanan Akuntabilitas Kinerja Organisasi', 27.50, 10.00, 40, 7, 4, NULL, NULL),
(41, 41, 'Tingkat Kematangan Layanan Kinerja Pegawai', 27.50, 10.00, 41, 7, 4, NULL, NULL),
(42, 42, 'Tingkat Kematangan Layanan Pengaduan Pelayanan Publik', 3.00, 16.70, 42, 8, 4, NULL, NULL),
(43, 43, 'Tingkat Kematangan Layanan Data Terbuka', 3.00, 16.70, 43, 8, 4, NULL, '2024-05-30 18:15:37'),
(44, 44, 'Tingkat Kematangan Jaringan Dokumentasi dan Informasi', 3.00, 16.70, 44, 8, 4, NULL, NULL),
(45, 45, 'Tingkat Kematangan Layanan Publik Sektor 1', 3.00, 16.70, 45, 8, 4, NULL, NULL),
(46, 46, 'Tingkat Kematangan Layanan Publik Sektor 2', 3.00, 16.70, 46, 8, 4, NULL, NULL),
(47, 47, 'Tingkat Kematangan Layanan Publik Sektor 3', 3.00, 16.70, 47, 8, 4, NULL, '2024-06-02 14:14:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawabans`
--

CREATE TABLE `jawabans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `d_jawaban` varchar(255) NOT NULL,
  `id_penjelasan` int(11) NOT NULL,
  `id_task` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `id_indikator` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jawabans`
--

INSERT INTO `jawabans` (`id`, `d_jawaban`, `id_penjelasan`, `id_task`, `username`, `id_indikator`, `created_at`, `updated_at`) VALUES
(147, 'cdh', 41, 1, 'user1', '9', '2024-06-05 17:42:01', '2024-06-05 17:42:01'),
(148, 'fchnb', 42, 1, 'user1', '9', '2024-06-05 17:42:01', '2024-06-05 17:42:01'),
(149, 'fgh', 43, 1, 'user1', '9', '2024-06-05 17:42:01', '2024-06-05 17:42:01'),
(150, 'rfh', 44, 1, 'user1', '9', '2024-06-05 17:42:01', '2024-06-05 17:42:01'),
(151, 'rfgh', 45, 1, 'user1', '9', '2024-06-05 17:42:01', '2024-06-05 17:42:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangans`
--

CREATE TABLE `keterangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keterangans`
--

INSERT INTO `keterangans` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'a. Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses bisnis, data dan informasi, infrastruktur SPBE, aplikasi SPBE, dan keamanan SPBE untuk menghasilkan layanan SPBE yang terintegrasi. \n                b. Kebijakan internal Arsitektur SPBE merupakan pengaturan mengenal Arsitektur SPBE di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan integrasi Proses Bisnis, Data dan Informasi, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu.\n                c. Referensi Arsitektur dan Domain Arsitektur SPBE terdiri dari:\n                    1. Domain Arsitektur Proses Bisnis;\n                    2. Domain Arsitektur Data dan Informasi;\n                    3. Domain Arsitektur Layanan;\n                    4. Domain Arsitektur Aplikasi;\n                    5. Domain Arsitektur Infrastuktur SPBE; dan,\n                    6. Domain Arsitektur Keamanan SPBE.', NULL, NULL),
(2, 'a. Peta Rencana SPBE adalah dokumen yang mendeskripsikan arah dan langkah penyiapan dan pelaksanaan SPBE yang terintegrasi.\n                b. Kebijakan internal Peta Rencana SPBE merupakan pengaturan mengenai Peta Rencana SPBE di Instansi Pusat/ Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam penyiapan dan pelaksanaan SPBE di instansi Pusat/Pemerintah Daerah.\n                c.  Peta Rencana SPBE memuat:\n                    1.Tata Kelola SPBE;\n                    2.Manajemen SPBE;\n                    3.Layanan SPBE;\n                    4.Infrastuktur SPBE;\n                    5.Aplikasi SPBE;\n                    6.Keamanan SPBE; dan,\n                    7.Audit TIK.', NULL, NULL),
(3, 'a. Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat , mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.\n                b. Manajemen Data dilakukan melalui serangkaian proses pengelolaan Arsitektur Data, Data Induk, Data Referensi, Bisnis Data, Kualitas Data dan Interoperabilitas Data.\n                c. Kebijakan Internal Manajemen Data merupakan pengaturan mengenai Manajemen Data Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam pengelolaan data di Instansi Pusat dan Pemerintah Daerah.\n                d. Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal Manajemen Data mengacu pada pedoman Manajemen Data SPBE.', NULL, NULL),
(4, 'a. Aplikasi SPBE adalah satu atau sekumpulan program komputer dan prosedur yang dirancang untuk melakukan tugas atau fungsi Layanan SPBE.\n                b. Pembangunan Aplikasi SPBE merupakan suatu proses perancangan aplikasi melalui siklus pembangunan aplikasi.\n                c. Kebijakan internal Aplikasi SPBE merupakan pengaturan mengenai Pembangunan fAplikasi SPBE di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan pembangunan aplikasi SPBE untuk menghasilkan Layanan SPBE yang terpadu.\n                d. Siklus Pembangunan Aplikasi terdiri dari:\n                    1.Perencanaan;\n                    2. Analisis;\n                    3. Desain;\n                    4. Implementasi; dan,\n                    5. Pemeliharaan. \n                Siklus bisa menggunakan salah satu framework yang sudah ada seperti SDLC, RAD, Waterfall, Agile Development Cycle (SCRUM).', NULL, NULL),
(5, 'a. Layanan Pusat Data adalah penyediaan penyimpanan aplikasi dan data.\n                b. Layanan Pusat Data bertujuan untuk menjamin ketersediaan penyimpanan data bagi Instansi Pusat dan Pemerintah Daerah.\n                c. Layanan Pusat Data dilakukan melalui serangkaian proses pengelolaan Arsitektur Data, Data Induk, Data Referensi, Basis Data, dan Kualitas Data.\n                d. Pusat Data Nasional adalah sekumpulan pusat data yang digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah, dan saling terhubung yang terdiri atas pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah dengan memenuhi persyaratan pusat data atau pusat data yang dibangun khusus untuk digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah\n                e. Kebijakan Layanan Pusat Data merupakan pengaturan mengenai layanan pusat data di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan layanan pusat data untuk menghasilkan Layanan SPBE yang terpadu.\n                f. Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal layanan pusat data mengacu pada pedoman layanan pusat data.', NULL, NULL),
(6, 'a. Jaringan Intra adalah jaringan tertutup yang menghubungkan antar simpul jaringan dalam suatu organisasi.\n                b. Jaringan Intra Instansi Pusat dan Pemerintah Daerah merupakan Jaringan Intra yang diselenggarakan oleh Instansi Pusat dan Pemerintah Daerah untuk menghubungkan antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain, yang selanjutnya terhubung dengan jaringan intra pemerintah.\n                c. Penggunaan Jaringan Intra Instansi Pusat dan Pemerintah Daerah bertujuan untuk menjaga keamanan dalam melakukan pengiriman data dan informasi antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, yang selanjutnya terhubung dengan jaringan intra pemerintah.\n                d. Penyelenggaraan Jaringan Intra Instansi Pusat/Pemerintah Daerah sebagaimana dimaksud, dapat menggunakan jaringan fisik yang dibangun sendiri oleh Instansi  Pusat/Pemerintah Daerah dan/atau yang dibangun oleh penyedia jasa layanan jaringan, yang selanjutnya terhubung dengan jaringan intra pemerintah.\n                e. Kebijakan internal dalam hal ini mengatur pengoperasian jaringan intra Instansi Pusat/Pemerintah Daerah yang selanjutnya terhubung dengan jaringan intra pemerintah.   ', NULL, NULL),
(7, 'a. Sistem Penghubung Layanan adalah perangkat integrasi/penghubung untuk melakukan pertukaran Layanan SPBE.\n                b. Penggunaan Sistem Penghubung Layanan Pemerintah bertujuan untuk memudahkan dalam melakukan integrasi antar Layanan SPBE.\n                c. Syarat sebuah Sistem Penghubung Layanan:\n                    1. Tersedia jalur/bus (sistem koneksi bukan pointto-point); \n                    2. Tersedia metadata repository; dan\n                    3. Tersedia service directory.\n                d. Kebijakan internal dalam hal ini mengatur penerapan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerahyang selanjutnya terintegrasi dengan Sistem Penghubung Layanan Pemerintah.', NULL, NULL),
(8, 'a. Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap keamanan informasi dalam SPBE.\n                b. Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko keamanan informasi.\n                c. Kebijakan internal dalam hal ini mengatur terkait penerapan Manajemen Keamanan Informasi pada Instansi Pusat/Pemerintah Daerah.', NULL, NULL),
(9, 'a. Audit Teknologi Informasi dan Komunikasi (TIK) adalah proses yang sistematis untuk memperoleh dan mengevaluasi bukti secara objektif terhadap aset teknologi informasi dan komunikasi dengan tujuan untuk menetapkan tingkat kesesuaian antara teknologi informasi dan komunikasi dengan kriteria dan/atau standar yang telah ditetapkan.\n                b. Audit TIK terdiri atas:\n                    1. Audit Infrastruktur SPBE;\n                    2. Audit Aplikasi SPBE; dan,\n                    3. Audit Keamanan SPBE.\n                    c. Audit Teknologi Informasi dan Komunikasi meliputi pemeriksaan hal pokok teknis pada:\n                    1. Penerapan tata kelola dan manajemen teknologi informasi dan komunikasi; \n                    2. Fungsionalitas teknologi informasi dan komunikasi;\n                    3. Kinerja teknologi informasi dan komunikasi yang dihasilkan; dan,\n                    4. Aspek teknologi informasi dan komunikasi lainnya.\n                d. Kebijakan internal dalam hal ini mengatur terkait penerapan Audit TIK pada Instansi Pusat/Pemerintah Daerah.', NULL, NULL),
(10, 'a. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah adalah para pejabat dalam tim yang diberi tugas untuk mengendalikan, mengarahkan, dan mengevaluasi SPBE, termasuk didalamnya melaksanakan perumusan kebijakan dan penerapan SPBE di Instansi Pusat dan Pemerintah daerah masing-masing.\n                b. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dapat disejajarkan dengan Tim Pengarah TIK, Komite Pengarah TIK, ataupun Steering Committee yang mempunyai tugas seperti dimaksud pada huruf a.\n                c. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dipimpin oleh seorang koordinator yang ditetapkan oleh pimpinan Instansi Pusat/Kepala Daerah.\n                d. Kebijakan internal dalam hal ini mengatur terkait tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.', NULL, NULL),
(11, 'a. Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses bisnis, data dan informasi, infrastruktur SPBE, aplikasi SPBE, dan keamanan SPBE untuk menghasilkan layanan SPBE yang terintegrasi.\n                b. Arsitektur SPBE Instansi Pusat/Pemerintah Daerah merupakan Arsitektur SPBE yang diterapkan di Instansi Pusat/Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan integrasi Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu.\n                c. Referensi Arsitektur dan Domain Arsitektur SPBE terdiri dari: \n                    1) Domain arsitektur Proses Bisnis;\n                    2) Domain arsitektur Data dan Informasi;\n                    3) Domain arsitektur Layanan;\n                    4) Domain arsitektur Aplikasi;\n                    5) Domain arsitektur Infrastruktur SPBE; dan,\n                    6) Domain arsitektur Keamanan SPBE.', NULL, NULL),
(12, 'a. Peta Rencana SPBE adalah dokumen yang mendeskripsikan arah dan langkah penyiapan dan pelaksanaan SPBE yang terintegrasi.\n                b. Peta Rencana SPBE memuat:\n                    1. Tata Kelola SPBE;\n                    2. Manajemen SPBE;\n                    3. Layanan SPBE;\n                    4. Infrastruktur SPBE;\n                    5. Aplikasi SPBE;\n                    6. Keamanan SPBE; dan\n                    7. Audit TIK.', NULL, NULL),
(13, 'a. Rencana dan Anggaran SPBE adalah dokumen yang mendeskripsikan program, kegiatan dan pemanfaatan anggaran SPBE.\n                b. Rencana dan Anggaran SPBE disusun sesuai dengan proses perencanaan dan penganggaran tahunan pemerintah.\n                c. Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah berpedoman pada Arsitektur SPBE Instansi Pusat/Pemerintah Daerah dan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', NULL, NULL),
(14, 'a. Proses Bisnis adalah dokumen yang mendeskripsikan hubungan kerja yang efektif dan efisien antar unit organisasi untuk menghasilkan kinerja sesuai dengan tujuan pendirian organisasi agar menghasikan keluaran yang bernilai tambah bagi pemangku kepentingan (PermenPANRB No 19 Tahun 2018).\n                b.Penyusunan Proses Bisnis bertujuan untuk memberikan pedoman dalam penggunaan data dan informasi serta penerapan Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.\n                c. Instansi Pusat/Pemerintah Daerah menyusun Proses Bisnis yang selaras dengan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', NULL, NULL),
(15, 'a. Aplikasi SPBE adalah satu atau sekumpulan program komputer dan prosedur yang dirancang untuk melakukan tugas atau fungsi Layanan SPBE.\n                b. Pembangunan Aplikasi SPBE merupakan suatu proses perancangan aplikasi melalui siklus pembangunan aplikasi.\n                c. Siklus Pembangunan Aplikasi terdiri dari: \n                    1. Perencanaan;\n                    2. Analisis;\n                    3. Desain;\n                    4. Implementasi; dan,\n                    5. Pemeliharaan.\n                 Siklus bisa menggunakan salah satu framework yang sudah ada seperti SDLC, RAD, Waterfall, Agile Development Cycle (SCRUM).', NULL, NULL),
(16, 'a. Pusat Data adalah fasilitas yang digunakan untuk penempatan sistem elektronik dan komponen terkait lainnya untuk keperluan penempatan, penyimpanan dan pengolahan data, dan pemulihan data baik yang dimiliki secara fisik dan non-fisik (cloud).\n                b. Layanan Pusat Data adalah penyediaan penyimpanan aplikasi dan data.\n                c. Layanan Pusat Data bertujuan untuk menjamin ketersediaan penyimpanan data bagi Instansi Pusat dan Pemerintah Daerah.\n                d. Layanan Pusat Data dilakukan melalui serangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, dan kualitas data.\n                e. Pusat Data Nasional adalah sekumpulan pusat data yang digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah, dan saling terhubung yang terdiri atas pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah dengan memenuhi persyaratan pusat data atau pusat data yang dibangun khusus untuk digunakan secara bersama dan bagipakai oleh Instansi Pusat dan Pemerintah Daerah.', NULL, NULL),
(17, 'a. Jaringan Intra adalah jaringan tertutup yang menghubungkan antar simpul jaringan dalam suatu organisasi.\n                b. Jaringan Intra Instansi Pusat/Pemerintah Daerah merupakan Jaringan Intra yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah untuk menghubungkan antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain.\n                c. Penggunaan Jaringan Intra Instansi Pusat/Pemerintah Daerah bertujuan untuk menjaga keamanan dalam melakukan pengiriman data dan informasi antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah.\n                d. Penyelenggaraan Jaringan Intra Instansi Pusat/Pemerintah Daerah sebagaimana dimaksud, dapat menggunakan jaringan fisik yang dibangun sendiri oleh Instansi Pusat/Pemerintah Daerah dan/atau yang dibangun oleh penyedia jasa layanan jaringan.', NULL, NULL),
(18, 'a. Sistem Penghubung Layanan adalah perangkat integrasi/penghubung untuk melakukan pertukaran Layanan SPBE.\n                b. Penggunaan Sistem Penghubung Layanan Pemerintah bertujuan untuk memudahkan dalam melakukan integrasi antar Layanan SPBE	', NULL, NULL),
(19, 'a. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah adalah para pejabat dalam tim yang diberi tugas untuk mengendalikan, mengarahkan, dan mengevaluasi SPBE, termasuk didalamnya melaksanakan perumusan kebijakan dan penerapan SPBE di Instansi Pusat dan Pemerintah Daerah masing-masing.\n                b. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dapat disejajarkan dengan Tim Pengarah TIK, Komite Pengarah TIK, ataupun Steering Committeeyang mempunyai tugas seperti dimaksud pada huruf a.\n                c. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dipimpin oleh seorang koordinator yang ditetapkan oleh pimpinan Instansi Pusat/Kepala Daerah', NULL, NULL),
(20, 'a. Forum Kolaborasi SPBE merupakan wadah informal untuk pertukaran informasi dan peningkatan kapasitas pelaksanaan SPBE bagi Instansi Pusat, Pemerintah Daerah, perguruan tinggi, lembaga penelitian, pelaku usaha, dan masyarakat.\n                b. Forum Kolaborasi SPBE dapat dimanfaatkan untuk antara lain:\n                    1. penyampaian ide/gagasan SPBE;\n                    2. pengembangan infrastruktur dan Aplikasi SPBE dari kontribusi komunitas TIK;\n                    3. peningkatan kompetensi teknis;\n                    4. perbaikan kualitas Layanan SPBE;\n                    5. penelitian dan kajian pengembangan SPBE; dan\n                    6. penyelesaian masalah untuk kepentingan bersama.\n                c. Forum Kolaborasi SPBE dapat dilakukan dalam bentuk pertemuan informal dan pertemuan virtual', NULL, NULL),
(21, 'a. Manajemen Risiko SPBE adalah pendekatan sistematis yang meliputi proses, pengukuran, struktur, dan budaya untuk menentukan tindakan terbaik terkait Risiko SPBE.\n                b. Risiko SPBE adalah peluang terjadinya suatu peristiwa yang akan mempengaruhi keberhasilan terhadap pencapaian tujuan penerapan SPBE.\n                c. Manajemen Risiko bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko dalam SPBE.\n                d. Instansi Pusat dan Pemerintah Daerah menerapkan manajemen risiko SPBE berdasarkan pedoman Manajemen Risiko SPBE', NULL, NULL),
(22, 'a. Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi dalam SPBE.\n                b. Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan  SPBE dengan meminimalkan dampak risiko Keamanan Informasi.\n                c. Penerapan Keamanan Informasi berlandaskan penjaminan kerahasiaan, keutuhan, ketersediaan, keaslian, dan kenirsangkalan (non-repudiation) sumber daya terkait data dan informasi, Infrastruktur SPBE, dan aplikasi.', NULL, NULL),
(23, 'a. Manajemen Data dilakukan melalui serangkaian  proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.\n                b. Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat, mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.', NULL, NULL),
(24, 'a. Manajemen aset teknologi informasi dan komunikasi dilakukan melalui serangkaian proses perencanaan, pengadaan, pengelolaan, dan penghapusan perangkat keras dan perangkat lunak yang digunakan dalam SPBE.\n                b. Manajemen aset teknologi informasi dan komunikasi bertujuan untuk menjamin ketersediaan dan optimalisasi pemanfaatan aset teknologi informasi dan komunikasi dalam SPBE.\n                c. Aset TIK mencakup perangkat lunak, perangkat keras, data dan informasi, infrastruktur, SDM, lisensi, data, SOP, outsource services, dan IT asset register', NULL, NULL),
(25, 'a. Manajemen Sumber Daya Manusia dilakukan melalui serangkaian proses perencanaan, pengembangan, pembinaan, dan pendayagunaan Sumber Daya Manusia dalam SPBE.\n                b. Manajemen Sumber Daya Manusia bertujuan untuk menjamin keberlangsungan dan peningkatan mutu layanan dalam SPBE.\n                c. Manajemen Sumber Daya Manusia (SDM) SPBE termasuk didalamnya kegiatan peningkatan kompetensi Sumber Daya Manusia SPBE dan promosi literasi SPBE.', NULL, NULL),
(26, 'Manajemen Pengetahuan adalah proses yang dilakukan untuk mendokumentasi pengalaman dan pengetahuan dalam perencanaan, implementasi, dan evaluasi SPBE guna meningkatkan kualitas Layanan SPBE dan mendukung proses pengambilan keputusan dalam SPBE.', NULL, NULL),
(27, 'a. Manajemen Perubahan dilakukan melalui serangkaian proses perencanaan, analisis, pengembangan, implementasi, pemantauan dan evaluasi terhadap perubahan SPBE.\n                b.Manajemen Perubahan bertujuan untuk menjamin keberlangsungan dan meningkatkan kualitas Layanan SPBE melalui pengendalian perubahan yang terjadi dalam SPBE.\n                c. Lingkup Manajemen Perubahan SPBE: \n                    1. Perubahan Aplikasi;\n                    2. Perubahan Perangkat Keras;\n                    3. Perubahan Perangkat Lunak;\n                    4. Perubahan Infrastruktur;\n                    5. Perubahan Proses Bisnis;\n                    6. Perubahan Lingkungan Organisasi;\n                    7. Perubahan Layanan;\n                    8. Perubahan Data;\n                    9. Perubahan Keamanan;\n                    10. Perubahan Arsitektur.', NULL, NULL),
(28, 'a. Manajemen Layanan merupakan serangkaian proses pelayanan kepada pengguna, pengoperasian layanan, dan pengelolaan Aplikasi SPBE agar Layanan SPBE dapat berjalan berkesinambungan dan berkualitas.\n                b. Manajemen Layanan bertujuan untuk menjamin keberlangsungan dan meningkatkan kualitas Layanan SPBE kepada Pengguna SPBE.\n                c. Penyelenggaraan Manajemen Layanan SPBE ditujukan untuk memberikan dukungan terhadap layanan publik berbasis elektronik dan layanan administrasi pemerintahan berbasis elektronik agar Layanan SPBE tersebut dapat berjalan secara berkesinambungan, berkualitas,responsif, dan adaptif.\n                d. Penyelenggaraan Manajemen Layanan dapat diwujudkan dengan membangun portal pusat layanan untuk menjalankan proses:\n                    1. pengelolaan keluhan, gangguan, masalah, permintaan, dan perubahan Layanan  SPBE dari pengguna;\n                    2. pendayagunaan dan pemeliharaan Infrastruktur SPBE dan Aplikasi SPBE; dan\n                    3. pembangunan dan pengembangan aplikasi yang berpedoman pada metodologi pembangunan dan pengembangan aplikasi. ', NULL, NULL),
(29, 'a. Audit Infrastruktur SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Infrastruktur SPBE.\n                b. Audit Infrastruktur SPBE meliputi pemeriksaan hal pokok teknis antara lain: \n                    1. penerapan tata kelola dan manajemen infrastruktur SPBE;\n                    2. infrastruktur SPBE;\n                    3. kinerja infrastruktur SPBE yang dihasilkan; dan\n                    4. aspek infrastruktur SPBE lainnya.', NULL, NULL),
(30, 'a. Audit Aplikasi SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Aplikasi SPBE.\n                b. Audit Aplikasi SPBE terdiri atas: \n                    1. Audit Aplikasi Umum\n                    2. Audit Aplikasi Khusus\n                c. Standar/pedoman audit dapat berupa standar internal Instansi Pusat/Pemerintah Daerah, standar/pedoman nasional, atau standar/pedoman internasional.', NULL, NULL),
(31, 'a. Audit Keamanan SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Keamanan SPBE.\n                b. Audit Keamanan SPBE terdiri atas: 	\n                    1. Audit Keamanan Aplikasi; dan\n                    2. Audit Keamanan Infrastruktur.\n                c. Standar/pedoman audit dapat berupa standar internal Instansi Pusat/Pemerintah   Daerah, standar/pedoman nasional, atau standar/pedoman internasional.', NULL, NULL),
(32, 'a. Perencanaan adalah serangkaian proses untuk menghasilkan pengelolaan perencanaan yang efektif, efisien, dan akuntabel.\n                b. Layanan Perencanaan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan perencanaan Instansi Pusat dan/atau Pemerintah Daerah.', NULL, NULL),
(33, 'a. Penganggaran adalah serangkaian proses untuk menghasilkan pengelolaan penganggaran yang efektif, efisien, dan akuntabel.\n                b. Layanan Penganggaran Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan penganggaran Instansi Pusat dan/atau Pemerintah Daerah.', NULL, NULL),
(34, 'a. Keuangan adalah serangkaian proses untuk menghasilkan pengelolaan keuangan yang efektif, efisien, dan akuntabel.\n                b. Layanan Keuangan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan keuangan Instansi Pusat dan/atau Pemerintah Daerah.', NULL, NULL),
(35, 'a. Pengadaan Barang/Jasa adalah serangkaian proses untuk menghasilkan pengelolaan Pengadaan barang/jasa yang efektif, efisien, dan akuntabel.\n                b. Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan pengadaan barang/jasa Instansi Pusat dan/atau Pemerintah Daerah.\n                c. Katalog Elektronik Sektoral adalah Katalog Elektronik yang disusun dan dikelola oleh Kementerian/Lembaga.\n                d. Katalog Elektronik Lokal adalah Katalog Elektronik yang disusun dan dikelola oleh Pemerintah Daerah.', NULL, NULL),
(36, 'a. Kepegawaian adalah serangkaian proses untuk menghasilkan pengelolaan kepegawaian yang efektif, efisien, dan akuntabel.\n                b. Layanan Kepegawaian Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kepegawaian Instansi Pusat dan/atau Pemerintah Daerah.', NULL, NULL),
(37, 'a. Kearsipan adalah serangkaian proses untuk menghasilkan pengelolaan kearsipan yang efektif, efisien, dan akuntabel.\n                b. Arsip terbagi 2, yaitu Arsip Dinamis dan Arsip Statis.\n                c. Arsip dinamis merupakan dokumen/naskah dinas yang masih digunakan.\n                d. Arsip statis merupakan dokumen/naskah dinas yang telah melewati masa retensinya.\n                e. Layanan Kearsipan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kearsipan Instansi Pusat dan/atau Pemerintah Daerah', NULL, NULL),
(38, 'a. Pengelolaan Barang Milik Negara/Daerah (BMN/BMD) adalah serangkaian proses untuk menghasilkan pengelolaan BMN yang efektif, efisien, dan akuntabel.\n                b. Layanan Pengelolaan BMN/BMD Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan BMN Instansi Pusat dan/atau BMD Pemerintah Daerah.', NULL, NULL),
(39, 'a. Pengawasan Internal adalah serangkaian proses untuk menghasilkan pengelolaan pengawasan internal yang efektif, efisien, dan akuntabel.\n                b. Layanan Pengawasan Internal Berbasis Elektronik yang dimaksud merupakan  keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Pengawasan InternalInstansi Pusat dan/atau Pemerintah Daerah.', NULL, NULL),
(40, 'a. Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah adalah serangkaian proses untuk menghasilkan pengelolaan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.\n                 b. Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.', NULL, NULL),
(41, 'a. Kinerja Pegawai adalah serangkaian proses untuk menghasilkan pengelolaan kinerja pegawai Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.\n                b.Layanan Kinerja Pegawai Instansi Pusat/Pemerintah Daerah Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kinerja pegawai di Instansi Pusat dan/atau Pemerintah Daerah', NULL, NULL),
(42, 'a. Pengaduan Pelayanan Publik adalah serangkaian proses untuk menghasilkan pengelolaan pengaduan pelayanan publik Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.\n                b. Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan pengaduan pelayanan publik di Instansi Pusat dan/atau Pemerintah Daerah', NULL, NULL),
(43, 'a. Data Terbuka (Open Data) adalah serangkaian proses untuk menghasilkan pengelolaan data terbuka Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.\n                b. Data Terbuka merupakan sekumpulan data yang dikelola oleh Instansi Pusat/Pemerintah Daerah yang dapat di bagi pakai oleh Instansi Pusat/Pemerintah Daerah lain.\n                c. Layanan Data Terbuka Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan data terbuka Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.', NULL, NULL),
(44, 'a. Jaringan Dokumentasi dan Informasi Hukum adalah serangkaian proses untuk menghasilkan pengelolaanjaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.\n                b. Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan jaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.', NULL, NULL),
(45, 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.\n                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah.\n                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.\n                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 - 44	', NULL, NULL),
(46, 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.\n                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah.\n                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah.\n                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 - 44.', NULL, NULL),
(47, 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.\n                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah.\n                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah.\n                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 - 44.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_05_14_003210_create_indikators_table', 1),
(4, '2024_05_14_003242_create_penjelasans_table', 1),
(5, '2024_05_14_003311_create_jawabans_table', 1),
(6, '2024_05_16_015624_create_detail_indikators_table', 1),
(7, '2024_05_16_015651_create_tasks_table', 1),
(8, '2024_05_22_073244_create_bagians_table', 1),
(9, '2024_05_23_010010_create_aspeks_table', 1),
(10, '2024_05_27_024653_create_domains_table', 1),
(11, '2024_06_05_075233_create_file_data_table', 1),
(12, '2024_06_11_071611_create_keterangans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjelasans`
--

CREATE TABLE `penjelasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `id_indikator` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjelasans`
--

INSERT INTO `penjelasans` (`id`, `text`, `id_indikator`, `created_at`, `updated_at`) VALUES
(1, 'Konsep kebijakan internal terkait Arsitektur SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '1', NULL, NULL),
(2, 'Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tersebut belum memuat secara\\r\\nlengkap pengaturan mengenai referensi Arsitektur dan domain\\r\\nArsitektur SPBE (Proses Bisnis, Data dan Informasi,\\r\\nInfrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan\\r\\nLayanan SPBE).\\r\\n', '1', NULL, NULL),
(3, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).\\r\\n', '1', NULL, NULL),
(4, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah mengatur integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\\r\\n', '1', NULL, NULL),
(5, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviuw dan evaluasi kebijakan internal Arsitektur Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru dan terbaik.', '1', NULL, '2024-06-02 17:35:12'),
(6, 'Konsep kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '2', NULL, NULL),
(7, 'Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tersebut belum mengatur muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).\\r\\n', '2', NULL, NULL),
(8, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).\\r\\n', '2', NULL, NULL),
(9, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur keselarasan antara Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah dan Peta Rencana SPBE Nasional. Selain itu, Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\\r\\n', '2', NULL, NULL),
(10, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\\r\\n', '2', NULL, NULL),
(11, 'Konsep kebijakan internal terkait Manajemen Data di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '3', NULL, NULL),
(12, 'Kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah ditetapkan.', '3', NULL, NULL),
(13, 'Kondisi: Kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah tersebut hanya mengatur sebagian dari rangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.\\r\\n', '3', NULL, NULL),
(14, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah mengatur seluruh rangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.\\r\\n', '3', NULL, NULL),
(15, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\\r\\n', '3', NULL, NULL),
(16, 'Konsep kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '4', NULL, NULL),
(17, 'Kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Pembangunan Aplikasi SPBE telah mengatur siklus pembangunan aplikasi.\\r\\n', '4', NULL, NULL),
(18, 'Kriteria tingkat 2 telah terpenuhi dan Kebijakan internal terkait siklus Pembangunan Aplikasi SPBE telah mengatur proses konsultasi terkait siklus Pembangunan Aplikasi SPBE dengan unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah.\\r\\n', '4', NULL, NULL),
(19, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah mengatur keterpaduan dan pengendalian Pembangunan Aplikasi SPBE oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal Pembangunan Aplikasi SPBE direviu dan dievaluasi secara periodik.\\r\\n', '4', NULL, NULL),
(20, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.\\r\\n', '4', NULL, NULL),
(21, 'Konsep kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia\\r\\n', '5', NULL, NULL),
(22, 'Kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Layanan Pusat Data telah mengatur penggunaan Layanan Pusat Data untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '5', NULL, NULL),
(23, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Layanan Pusat Data telah mengatur penggunaan Layanan Pusat Data untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '5', NULL, NULL),
(24, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Pusat Data dengan Pusat Data Nasional dan/atau mengatur penggunaan Layanan Pusat Data Nasional. Selain itu, kebijakan internal terkait penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\\r\\n', '5', NULL, NULL),
(25, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.\\r\\n', '5', NULL, NULL),
(26, 'Konsep kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '6', NULL, NULL),
(27, 'Kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur Layanan Jaringan Intra untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '6', NULL, NULL),
(28, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur Layanan Jaringan Intra untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '6', NULL, NULL),
(29, 'Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik\\r\\n', '6', NULL, NULL),
(30, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\\r\\n', '6', NULL, NULL),
(31, 'Konsep kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '7', NULL, NULL),
(32, 'Kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '7', NULL, NULL),
(33, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur penggunaan Sistem Penghubung Layanan untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '7', NULL, NULL),
(34, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur keterhubungan dengan Sistem Penghubung Layanan Pemerintah. Selain itu, kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\\r\\n', '7', NULL, NULL),
(35, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\\r\\n', '7', NULL, NULL),
(36, 'Konsep kebijakan internal terkait Manajemen Keamanan Informasi belum atau telah tersedia.\\r\\n', '8', NULL, NULL),
(37, 'Kebijakan internal terkait Manajemen Keamanan Informasi telah ditetapkan. Kondisi: Kebijakan internal terkait Manajemen Keamanan Informasi belum mengatur secara lengkap mengenai cakupan Manajemen Keamanan Informasi (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).', '8', NULL, NULL),
(38, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Manajemen Keamanan Informasi mengatur seluruh cakupan Manajemen Keamanan Informasi secara lengkap (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).', '8', NULL, NULL),
(39, 'Kriteria tingkat 3 telah terpenuhi, dan kebijakan internal terkait Manajemen Keamanan Informasi telah mengatur penerapan untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal terkait Manajemen Keamanan Informasi telah direviu dan dievaluasi secara periodik.', '8', NULL, NULL),
(40, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Manajemen Keamanan Informasi telah ditindaklanjuti dengan kebijakan baru.', '8', NULL, NULL),
(41, 'Konsep kebijakan internal terkait Audit TIK belum atau telah tersedia.\\r\\n', '9', NULL, NULL),
(42, 'Kebijakan internal Audit TIK telah ditetapkan. Kondisi: Kebijakan internal terkait Audit TIK hanya mengatur pelaksanaan sebagian Audit TIK (Audit Infrastruktur SPBE, Audit Aplikasi SPBE, dan Audit Keamanan SPBE).\\r\\n', '9', NULL, NULL),
(43, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Audit TIK telah mengatur pelaksanaan seluruh Audit TIK (Audit Infrastruktur SPBE Audit Aplikasi SPBE, dan Audit Keamanan SPBE).\\r\\n', '9', NULL, NULL),
(44, 'Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Audit TIK telah direviu dan dievaluasi secara periodik.\\r\\n', '9', NULL, NULL),
(45, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Audit TIK telah ditindaklanjuti dengan kebijakan baru.\\r\\n', '9', NULL, NULL),
(46, 'Konsep kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '10', NULL, NULL),
(47, 'Kebijakan internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '10', NULL, NULL),
(48, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '10', NULL, NULL),
(49, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\\r\\n', '10', NULL, NULL),
(50, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\\r\\n', '10', NULL, NULL),
(51, 'Konsep dokumen Arsitektur SPBE belum atau telah tersedia.', '11', NULL, NULL),
(52, 'Dokumen Arsitektur SPBE telah tersedia. Kondisi: Dokumen Arsitektur SPBE tidak/belum mencakup referensi dan domain Arsitektur SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu referensi dan domain arsitektur Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.\\r\\n', '11', NULL, NULL),
(53, 'Kriteria tingkat 2 telah terpenuhi dan dokumen Arsitektur SPBE telah mencakup seluruh referensi dan domain Arsitektur SPBE Instansi Pusat/Pemerintah Daerah yaitu referensi dan domain arsitektur Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.\\r\\n', '11', NULL, NULL),
(54, 'Kriteria tingkat 3 telah terpenuhi dan dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah berpedoman pada Arsitektur SPBE Nasional. Selain itu, dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi secara periodik.\\r\\n', '11', NULL, NULL),
(55, 'Kriteria tingkat 4 telah terpenuhi dan dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut hasil reviu dan evaluasi.\\r\\n', '11', NULL, NULL),
(56, 'Konsep dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '12', NULL, NULL),
(57, 'Dokumen Peta Rencana SPBE telah tersedia. Kondisi: dokumen Peta Rencana SPBE tidak/belum mencakup muatan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu peta rencana Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, Audit Teknologi SPBE dan Audit TIK.\\r\\n', '12', NULL, NULL),
(58, 'Kriteria tingkat 2 telah terpenuhi dan dokumen Peta Rencana SPBE telah mencakup seluruh muatan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu peta rencana Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, Audit Teknologi SPBE dan Audit TIK.\\r\\n', '12', NULL, NULL),
(59, 'Kriteria tingkat 3 telah terpenuhi dan dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah diterapkan secara konsisten melalui rencana kerja dan anggaran 3 (tiga) tahun terakhir. Selain itu, dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi secara periodik.\\r\\n', '12', NULL, NULL),
(60, 'Kriteria tingkat 4 telah terpenuhi dan dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut hasil reviu dan evaluasi.\\r\\n', '12', NULL, NULL),
(61, 'Rencana dan Anggaran SPBE belum atau telah tertuang dalam rencana kerja dan anggaran tahunan.', '13', NULL, NULL),
(62, 'Kriteria tingkat 1 telah terpenuhi dan Rencana dan Anggaran SPBE pada unit kerja/perangkat daerah tidak seluruhnya dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.\\r\\n', '13', NULL, NULL),
(63, 'Kriteria tingkat 2 telah terpenuhi dan seluruh Rencana dan Anggaran SPBE unit kerja/perangkat daerah telah dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.', '13', NULL, NULL),
(64, 'Kriteria tingkat 3 telah terpenuhi. Seluruh Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah telah terpadu dan dapat dikendalikan oleh unit kerja/lembaga daerah yang menjalankan fungsi perencanaan dan penganggaran. Selain itu, Rencana dan Anggaran SPBE telah direviu dan dievaluasi secara periodik.', '13', NULL, NULL),
(65, 'Kriteria tingkat 4 telah terpenuhi serta Rencana dan Anggaran SPBE telah dilakukan perbaikan untuk tahun anggaran berikutnya sebagai tindak lanjut hasil reviu dan evaluasi.', '13', NULL, NULL),
(66, 'Dokumen Proses Bisnis Instansi Pusat/Pemerintah belum atau telah tersedia. Kondisi: Dokumen Proses Bisnis Instansi Pusat/Pemeritah Daerah belum memenuhi standar.', '14', NULL, NULL),
(67, 'Kriteria tingkat 1 telah terpenuhi dan dokumen Proses Bisnis Instansi Pusat/Pemeritah Daerah telah memenuhi standar.', '14', NULL, NULL),
(68, 'Kriteria tingkat 2 telah terpenuhi dan Proses Bisnis Instansi Pusat/Pemeritah Daerah telah dilakukan perbaikan sebagai bentuk inovasi Proses Bisnis untuk mewujudkan proses bisnis yang lebih efisien.', '14', NULL, NULL),
(69, 'Kriteria tingkat 3 telah terpenuhi, Inovasi Proses bisnis telah diterapkan ke dalam sistem elektronik/sistem aplikasi, serta telah dilakukan reviu dan evaluasi secara periodik.', '14', NULL, NULL),
(70, 'Kriteria tingkat 4 telah terpenuhi dan melakukan perbaikan Inovasi Proses Bisnis yang diterapkan ke dalam sistem elektronik/ sistem aplikasi sebagai tindak lanjut hasil reviu dan evaluasi.', '14', NULL, NULL),
(71, 'Proses pembangunan Aplikasi SPBE belum atau telah dilakukan secara adhoc (sewaktu-waktu, tidak terencana). Kondisi: Proses pembangunan Aplikasi SPBE belum memenuhi siklus pembangunan aplikasi.', '15', NULL, NULL),
(72, 'Kriteria tingkat 1 telah terpenuhi dan proses pembangunan Aplikasi SPBE telah dilakukan sesuai siklus pembangunan aplikasi.', '15', NULL, NULL),
(73, 'Kriteria tingkat 2 telah terpenuhi dan proses pembangunan aplikasi SPBE telah dikonsultasikan kepada unit kerja/perangkat daerah yang melaksanakan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah.', '15', NULL, NULL),
(74, 'Kriteria tingkat 3 telah terpenuhi dan Pembangunan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah telah terpadu dan dapat dikendalikan oleh unit kerja/lembaga daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. selain itu, Pembangunan Aplikasi SPBE direviu dan dievaluasi secara periodik.', '15', NULL, NULL),
(75, 'Kriteria tingkat 4 telah terpenuhi dan Aplikasi SPBE telah dikembangkan secara optimal untuk meningkatkan efektivitas dan efisiensi terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah sebagai tindak lanjut hasil reviu dan evaluasi.', '15', NULL, NULL),
(76, 'Layanan Pusat Data belum atau telah tersedia digunakan oleh Instansi Pusat/Pemerintah Daerah.', '16', NULL, NULL),
(77, 'Kriteria tingkat 1 telah terpenuhi. Kondisi: Layanan Pusat Data tidak/belum digunakan oleh seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.', '16', NULL, NULL),
(78, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pusat Data telah digunakan oleh seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, terdapat prosedur pengoperasian baku Layanan Pusat Data.', '16', NULL, NULL),
(79, 'Kriteria tingkat 3 telah terpenuhi dan terdapat interkoneksi Layanan Pusat Data dengan Pusat Data Nasional/Pusat Data Instansi Pusat/Pusat Data Pemerintah Daerah lain dan/atau penggunaan Layanan Pusat Data Nasional. Selain itu, penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.', '16', NULL, NULL),
(80, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan terhadap Layanan Pusat Data.', '16', NULL, NULL),
(81, 'Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\\r\\n', '17', NULL, NULL),
(82, 'Kriteria tingkat 1 telah terpenuhi. Kondisi: Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah tidak/belum diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '17', NULL, NULL),
(83, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '17', NULL, NULL),
(84, 'Kriteria tingkat 3 telah terpenuhi dan terdapat interkoneksi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\\r\\n', '17', NULL, NULL),
(85, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan terhadap Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah.\\r\\n', '17', NULL, NULL),
(86, 'Sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah belum atau telah tersedia.\\r\\n', '18', NULL, NULL),
(87, 'Kriteria tingkat 1 telah terpenuhi. Kondisi: Sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah tidak/belum diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '18', NULL, NULL),
(88, 'Kriteria tingkat 2 telah terpenuhi dan sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '18', NULL, NULL),
(89, 'Kriteria tingkat 3 telah terpenuhi, sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah terintegrasi dengan sistem penghubungan layanan pemerintah dan/atau sistem penghubung layanan Instansi Pusat/Pemerintah Daerah lain. Selain itu, sistem penghubung layanan Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\\r\\n', '18', NULL, NULL),
(90, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan.\\r\\n', '18', NULL, NULL),
(91, 'Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum atau telah terbentuk. Kondisi: Tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dilaksanakan sewaktu-waktu atau tanpa perencanaan.\\r\\n', '19', NULL, NULL),
(92, 'Kriteria tingkat 1 telah terpenuhi dan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilaksanakan sesuai perencanaan. Kondisi: tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah tidak/belum dilaksanakan seluruhnya.\\r\\n', '19', NULL, NULL),
(93, 'Kriteria tingkat 2 telah terpenuhi dan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilaksanakan seluruhnya. Kondisi: program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum dikomunikasikan/dikoordinasikan kepada semua unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah.\\r\\n', '19', NULL, NULL),
(94, 'Kriteria tingkat 3 telah terpenuhi dan program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dikomunikasikan/dikoordinasikan kepada semua unit kerja perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah. Selain itu, tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi.\\r\\n', '19', NULL, NULL),
(95, 'Kriteria tingkat 4 telah terpenuhi dan hasil reviu dan evaluasi tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti melalui perbaikan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan pelaksanaannya.\\r\\n', '19', NULL, NULL),
(96, 'Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE belum atau telah dilaksanakan. Kondisi: Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE dilaksanakan sewaktu-waktu atau tanpa perencanaan.\\r\\n', '20', NULL, NULL),
(97, 'Kriteria tingkat 1 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE telah dilaksanakan sesuai perencanaan. Kondisi: Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE tidak dibentuk secara formal.\\r\\n', '20', NULL, NULL),
(98, 'Kriteria tingkat 2 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE telah dilaksanakan oleh tim yang dibentuk secara formal. Kondisi: Kolaborasi antar unit kerja/perangkat daerah dalam penerapan SPBE tidak/belum dilaksanakan pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah (kolaborasi dibentuk berdasarkan adanya kegiatan bersama).\\r\\n', '20', NULL, NULL),
(99, 'Kriteria tingkat 3 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah dalam penerapan SPBE telah dilaksanakan secara terpadu pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah yang dikoordinasikan oleh menteri/kepala lembaga/kepala daerah atau sekretaris kementerian/lembaga/pemerintah daerah. Selain itu, kolaborasi dalam penerapan SPBE telah dilakukan reviu dan evaluasi.\\r\\n', '20', NULL, NULL),
(100, 'Kriteria tingkat 4 telah terpenuhi dan hasil reviu dan evaluasi kolaborasi dalam penerapan SPBE telah ditindaklanjuti melalui perbaikan pelaksanaan kolaborasi dalam penerapan SPBE.\\r\\n', '20', NULL, NULL),
(101, 'Kegiatan Manajemen Risiko SPBE belum atau telah diterapkan.Kondisi: Kegiatan Manajemen Risiko SPBE diterapkan tanpaprogram kegiatan yang terarah dan terencana.\\r\\n', '21', NULL, NULL),
(102, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Risiko SPBE diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Penerapan Manajemen Risiko SPBE dilaksanakan tanpa mengacu pada pedoman manajemen risiko SPBE.\\r\\n', '21', NULL, NULL),
(103, 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Risiko SPBE telah dilaksanakan dengan mengacu pada pedoman manajemen risiko SPBE.\\r\\n', '21', NULL, NULL),
(104, 'Kriteria tingkat 3 telah terpenuhi dan kebijakann strategis Manajemen Risiko SPBE telah ditetapkan oleh Komite Manajemen Risiko SPBE atau Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Risiko SPBE telah direviu dan dievaluasi secara periodik.\\r\\n', '21', NULL, NULL),
(105, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Risiko SPBE ditindaklanjuti melalui perbaikan penerapan Manajemen Risiko SPBE.\\r\\n', '21', NULL, NULL),
(106, 'Pengendalian Keamanan Informasi belum atau telah tersedia dalam tahap pembangunan.\\r\\n', '22', NULL, NULL),
(107, 'Pengendalian Keamanan Informasi telah tersedia. Kondisi: Pengendalian Keamanan Informasi telah dilaksanakan pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\\r\\n', '22', NULL, NULL),
(108, 'Kriteria tingkat 2 telah terpenuhi dan pengendalian Keamanan Informasi telah dilaksanakan pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah dengan berdasarkan Risiko SPBE.\\r\\n', '22', NULL, NULL),
(109, 'Kriteria tingkat 3 telah terpenuhi dan pengendalian Keamanan Informasi dilakukan melalui strategi Keamanan Informasi yang ditetapkan oleh Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah. Selain itu, pengendalian Keamanan Informasi telah dilakukan reviu dan evaluasi secara periodik\\r\\n', '22', NULL, NULL),
(110, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi pengendalian Keamanan Informasi ditindaklanjuti melalui perbaikan penerapan proses pengendalian Keamanan Informasi\\r\\n', '22', NULL, NULL),
(111, 'Kegiatan Manajemen Data belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Data diterapkan tanpa program kegiatan yang terarah dan terencana.\\r\\n', '23', NULL, NULL),
(112, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Data diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Manajemen Data dilaksanakan tanpa mengacu pada pedoman Manajemen Data\\r\\n', '23', NULL, NULL),
(113, 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Data telah dilaksanakan dengan mengacu pada pedoman Manajemen Data yang mencakup pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data, dan interoperabilitas data.\\r\\n', '23', NULL, NULL),
(114, 'Kriteria tingkat 3 telah terpenuhi dan Manajemen Data dilaksanakan melalui strategi pengelolaan data yang ditetapkan Forum Satu Data atau Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Data telah direviu dan dievaluasi secara periodik.\\r\\n', '23', NULL, NULL),
(115, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Data ditindaklanjuti melalui perbaikan penerapan Manajemen Data.\\r\\n', '23', NULL, NULL),
(116, 'Kegiatan Manajemen Aset TIK belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Aset TIK diterapkan tanpa program kegiatan yang terarah dan terencana.\\r\\n', '24', NULL, NULL),
(117, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Aset TIK diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Manajemen Aset TIK dilaksanakan tanpa mengacu pada pedoman Manajemen Aset TIK yang mencakup proses perencanaan, pengadaan, pemanfaatan/penggunaan, dan penghapusan aset TIK\\r\\n', '24', NULL, NULL),
(118, 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Aset TIK telah dilaksanakan dengan mengacu pada pedoman Manajemen Aset TIK yang mencakup proses perencanaan, pengadaan, pemanfaatan/penggunaan, dan penghapusan aset TIK.\\r\\n', '24', NULL, NULL),
(119, 'Kriteria tingkat 3 telah terpenuhi, Manajemen Aset TIK dilaksanakan melalui strategi pengelolaan aset TIK oleh unit kerja/ perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Aset TIK telah direviu dan dievaluasi secara periodik.\\r\\n', '24', NULL, NULL),
(120, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Aset TIK ditindaklanjuti melalui perbaikan penerapan Manajemen Aset TIK.\\r\\n', '24', NULL, NULL),
(121, 'Pemenuhan kompetensi Sumber Daya Manusia belum atau telah diupayakan. Kondisi: Pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan tanpa perencanaan Sumber Daya Manusia.\\r\\n', '25', NULL, NULL),
(122, 'Kriteria tingkat 1 telah terpenuhi dan pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan sesuai dengan perencanaan Sumber Daya Manusia. Kondisi: Kompetensi Sumber Daya Manusia SPBE tidak/belum terpenuhi seluruhnya yaitu kompetensi di bidang proses bisnis memerintahan, arsitektur SPBE, data dan informasi, keamanan SPBE, aplikasi SPBE, dan infrastruktur SPBE.\\r\\n', '25', NULL, NULL),
(123, 'Kriteria tingkat 2 telah terpenuhi dan kompetensi Sumber Daya Manusia SPBE telah terpenuhi seluruhnya yaitu kompetensi di bidang proses bisnis memerintahan, arsitektur SPBE, data dan informasi, keamanan SPBE, aplikasi SPBE, dan infrastruktur SPBE.\\r\\n', '25', NULL, NULL),
(124, 'Kriteria tingkat 3 telah terpenuhi, peningkatan dan penilaian kompetensi Sumber Daya Manusia SPBE telah dilakukan. Selain itu, pemenuhan kompetensi Sumber Daya Manusia SPBE telah dilakukan reviu dan evaluasi secara periodik.\\r\\n', '25', NULL, NULL),
(125, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan perencanaan dan pemenuhan kompetensi Sumber Daya Manusia SPBE.\\r\\n', '25', NULL, NULL),
(126, 'Manajemen Pengetahuan SPBE belum atau telah diterapkan. Kondisi: Manajemen Pengetahuan SPBE diterapkan tanpa perencanaan\\r\\n', '26', NULL, NULL),
(127, 'Kriteria tingkat 1 telah terpenuhi dan dilaksanakan dengan perencanaan. Kondisi: Manajemen Pengetahuan SPBE telah dilaksanakan tanpa pedoman di Instansi Pusat/Pemerintah Daerah.\\r\\n', '26', NULL, NULL),
(128, 'Kriteria tingkat 2 telah terpenuhi, Manajemen Pengetahuan SPBE dilaksanakan dengan mengacu pada pedoman di Instansi Pusat/Pemerintah Daerah dan Manajemen Pengetahuan SPBE diterapkan dengan menggunakan sistem aplikasi manajemen pengetahuan.\\r\\n', '26', NULL, NULL),
(129, 'Kriteria tingkat 3 telah terpenuhi, semua unit kerja/perangkat daerah telah menerapkan Manajemen Pengetahuan SPBE dengan menggunakan sistem aplikasi manajemen pengetahuan yang terintegrasi serta telah dilakukan reviu dan evaluasi terhadap penerapan Manajemen Pengetahuan SPBE.\\r\\n', '26', NULL, NULL),
(130, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi terhadap penerapan Manajemen Pengetahuan SPBE telah ditindaklanjuti melalui perbaikan Manajemen Pengetahuan SPBE.\\r\\n', '26', NULL, NULL),
(131, 'Kegiatan Manajemen Perubahan SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Manajemen Perubahan SPBE dilaksanakan tanpa perencanaan.', '27', NULL, NULL),
(132, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE dilaksanakan dengan perencanaan. Kondisi: Kegiatan Manajemen Perubahan SPBE tidak/belum dilaksanakan oleh seluruh unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah dengan caranya masingmasing.', '27', NULL, NULL),
(133, 'Kriteria tingkat 2 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE dilaksanakan oleh seluruh unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah sesuai pedoman Manajemen Perubahan.', '27', NULL, NULL),
(134, 'Kriteria tingkat 3 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE telah dilakukan reviu dan evaluasi.', '27', NULL, NULL),
(135, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan Manajemen Perubahan SPBE', '27', NULL, NULL),
(136, 'Manajemen Layanan SPBE belum atau telah dilaksanakan. Kondisi: Manajemen Layanan SPBE dilaksanakan tanpa perencanaan', '28', NULL, NULL),
(137, 'Kriteria tingkat 1 telah terpenuhi dan Manajemen Layanan SPBE dilaksanakan dengan perencanaan. Kondisi: Manajemen Layanan SPBE tidak/belum dilaksanakan pada seluruh proses Manajemen Layanan SPBE yaitu Pelayanan Pengguna SPBE dan Pengoperasian Layanan SPBE.', '28', NULL, NULL),
(138, 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Layanan SPBE dilaksanakan pada seluruh proses Manajemen Layanan SPBE yaitu Pelayanan Pengguna SPBE dan Pengoperasian Layanan SPBE', '28', NULL, NULL),
(139, 'Kriteria tingkat 3 telah terpenuhi, Manajemen Layanan SPBE telah diterapkan dengan menggunakan sistem aplikasi manajemen layanan, dan kegiatan Manajemen Layanan SPBE telah dilakukan reviu dan evaluasi.', '28', NULL, NULL),
(140, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan Manajemen Layanan SPBE.', '28', NULL, NULL),
(141, 'Kegiatan Audit Infrastruktur SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Audit Infrastruktur dilaksanakan tanpa perencanaan yang berkesinambungan.', '29', NULL, NULL),
(142, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan sesuai dengan perencanaan yang berkesinambungan. Kondisi: Kegiatan Audit Infrastruktur dilaksanakan tanpa pedoman Audit Infrastruktur.', '29', NULL, NULL),
(143, 'Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan sesuai dengan pedoman Audit Infrastruktur. Kondisi: kegiatan Audit Infrastruktur dilaksanakan oleh auditor TIK/Sistem Informasi internal Instansi Pusat/Pemerintah Daerah.', '29', NULL, NULL),
(144, 'Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan oleh auditor TIK/Sistem Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Informasi.', '29', NULL, NULL),
(145, 'Kriteria tingkat 4 telah terpenuhi dan hasil audit Infrastruktur SPBE telah ditindaklanjuti melalui perbaikan penerapan Infrastruktur SPBE', '29', NULL, NULL),
(146, 'Kegiatan Audit Aplikasi SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Audit Aplikasi dilaksanakan tanpa perencanaan yang berkesinambungan.', '30', NULL, NULL),
(147, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan sesuai dengan perencanaan yang berkesinambungan. Kondisi: Kegiatan Audit Aplikasi dilaksanakan tanpa pedoman Audit Aplikasi SPBE.', '30', NULL, NULL),
(148, 'Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan sesuai dengan pedoman Audit Aplikasi SPBE. Kondisi: kegiatan Audit Aplikasi dilaksanakan oleh auditor TIK/Sistem Informasi internal Instansi Pusat/Pemerintah Daerah.', '30', NULL, NULL),
(149, 'Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan oleh auditor TIK/Sistem Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Informasi.', '30', NULL, NULL),
(150, 'Kriteria tingkat 4 telah terpenuhi dan hasil audit Aplikasi SPBE telah ditindaklanjuti melalui perbaikan penerapan Aplikasi SPBE.', '30', NULL, NULL),
(151, 'Kegiatan Audit Keamanan SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Audit Keamanan dilaksanakan tanpa perencanaan yang berkesinambungan.', '31', NULL, NULL),
(152, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan sesuai dengan perencanaan yang berkesinambungan. Kondisi: Kegiatan Audit Keamanan dilaksanakan tanpa pedoman Audit Keamanan.', '31', NULL, NULL),
(153, 'Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan sesuai dengan pedoman Audit Keamanan. Kondisi: kegiatan Audit Keamanan dilaksanakan oleh auditor TIK/Sistem Keamanan Informasi internal Instansi Pusat/Pemerintah Daerah.', '31', NULL, NULL),
(154, 'Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan oleh auditor TIK/Sistem Keamanan Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Keamanan Informasi.', '31', NULL, NULL),
(155, 'Kriteria tingkat 4 telah terpenuhi dan hasil audit Keamanan SPBE telah ditindaklanjuti melalui perbaikan penerapan Keamanan SPBE.', '31', NULL, NULL),
(156, 'Layanan Perencanan Berbasis Elektronik hanya memberikan layanan informasi terkait perencanaan kegiatan pemerintah', '32', NULL, NULL),
(157, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Perencanan Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '32', NULL, NULL),
(158, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Perencanan Berbasis Elektronik memberikan layanan transaksi elektronik perencanaan kegiatan pemerintah.', '32', NULL, NULL),
(159, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Perencanan Berbasis Elektronik memberikan layanan perencanaan kegiatan pemerintah berbasis elektronik yang terintegrasi.', '32', NULL, NULL),
(160, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Perencanan Berbasis Elektronik memberikan layanan satu data perencanaan kegiatan pemerintah berbasis elektronik.', '32', NULL, NULL),
(161, 'Layanan Penganggaran Berbasis Elektronik hanya memberikan layanan informasi terkait penganggaran kegiatan pemerintah', '33', NULL, NULL),
(162, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '33', NULL, NULL),
(163, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan transaksi elektronik penganggaran kegiatan pemerintah.', '33', NULL, NULL),
(164, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan penganggaran kegiatan pemerintah berbasis elektronik yang terintegrasi.', '33', NULL, NULL),
(165, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Penganggaran Berbasis Elektronik memberikan layanan satu data penganggaran kegiatan pemerintah berbasis elektronik.', '33', NULL, NULL),
(166, 'Layanan Keuangan Berbasis Elektronik hanya memberikan layanan informasi terkait keuangan pemerintah', '34', NULL, NULL),
(167, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '34', NULL, NULL),
(168, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan transaksi elektronik keuangan pemerintah.', '34', NULL, NULL),
(169, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan keuangan pemerintah berbasis elektronik yang terintegrasi.', '34', NULL, NULL),
(170, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Keuangan Berbasis Elektronik memberikan layanan satu data keuangan pemerintah berbasis elektronik.', '34', NULL, NULL),
(171, 'Layanan Pengadaan Barang/Jasa Berbasis Elektronik hanya memberikan layanan informasi terkait pengadaan barang/jasa pemerintah', '35', NULL, NULL),
(172, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengadaan Barang/Jasa Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '35', NULL, NULL),
(173, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengadaan Barang/Jasa Berbasis Elektronik memberikan layanan transaksi elektronik pengadaan barang/jasa pemerintah.', '35', NULL, NULL),
(174, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengadaan Barang/Jasa Berbasis Elektronik memberikan layanan pengadaan barang/jasa pemerintah berbasis elektronik yang terintegrasi.', '35', NULL, NULL),
(175, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Pengadaan Barang/Jasa Berbasis Elektronik memberikan layanan satu data pengadaan barang/jasa pemerintah berbasis elektronik.', '35', NULL, NULL),
(176, 'Layanan Kearsipan Dinamis Berbasis Elektronik hanya memberikan layanan informasi terkait kearsipan pemerintah', '36', NULL, NULL),
(177, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '36', NULL, NULL),
(178, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan transaksi elektronik kearsipan dinamis pemerintah.', '36', NULL, NULL),
(179, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan kearsipan dinamis pemerintah berbasis elektronik yang terintegrasi.', '36', NULL, NULL),
(180, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan satu data kearsipan dinamis pemerintah berbasis elektronik.', '36', NULL, NULL),
(181, 'Layanan Pengawasan Berbasis Elektronik hanya memberikan layanan informasi terkait pengawasan kegiatan pemerintah', '37', NULL, NULL),
(182, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengawasan Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '37', NULL, NULL),
(183, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengawasan Berbasis Elektronik memberikan layanan transaksi elektronik pengawasan kegiatan pemerintah.', '37', NULL, NULL),
(184, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengawasan Berbasis Elektronik memberikan layanan pengawasan kegiatan pemerintah berbasis elektronik yang terintegrasi.', '37', NULL, NULL),
(185, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Pengawasan Berbasis Elektronik memberikan layanan satu data pengawasan kegiatan pemerintah berbasis elektronik.', '37', NULL, NULL),
(186, 'Layanan Kearsipan Statis Berbasis Elektronik hanya memberikan layanan informasi terkait kearsipan pemerintah', '38', NULL, NULL),
(187, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kearsipan Statis Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '38', NULL, NULL),
(188, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kearsipan Statis Berbasis Elektronik memberikan layanan transaksi elektronik kearsipan statis pemerintah.', '38', NULL, NULL),
(189, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kearsipan Statis Berbasis Elektronik memberikan layanan kearsipan statis pemerintah berbasis elektronik yang terintegrasi.', '38', NULL, NULL),
(190, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Kearsipan Statis Berbasis Elektronik memberikan layanan satu data kearsipan statis pemerintah berbasis elektronik.', '38', NULL, NULL),
(191, 'Layanan Pengaduan Berbasis Elektronik hanya memberikan layanan informasi terkait pengaduan kepada pemerintah', '39', NULL, NULL),
(192, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengaduan Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '39', NULL, NULL),
(193, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengaduan Berbasis Elektronik memberikan layanan transaksi elektronik pengaduan kepada pemerintah.', '39', NULL, NULL),
(194, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengaduan Berbasis Elektronik memberikan layanan pengaduan kepada pemerintah berbasis elektronik yang terintegrasi.', '39', NULL, NULL),
(195, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Pengaduan Berbasis Elektronik memberikan layanan satu data pengaduan kepada pemerintah berbasis elektronik.', '39', NULL, NULL),
(196, 'Layanan Informasi Publik Berbasis Elektronik hanya memberikan layanan informasi terkait informasi publik pemerintah', '40', NULL, NULL),
(197, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Informasi Publik Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '40', NULL, NULL),
(198, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Informasi Publik Berbasis Elektronik memberikan layanan transaksi elektronik terkait informasi publik pemerintah.', '40', NULL, NULL),
(199, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Informasi Publik Berbasis Elektronik memberikan layanan informasi publik pemerintah berbasis elektronik yang terintegrasi.', '40', NULL, NULL),
(200, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Informasi Publik Berbasis Elektronik memberikan layanan satu data informasi publik pemerintah berbasis elektronik.', '40', NULL, NULL),
(201, 'Layanan Administrasi Pemerintahan Berbasis Elektronik hanya memberikan layanan informasi terkait administrasi pemerintahan', '41', NULL, NULL),
(202, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Administrasi Pemerintahan Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '41', NULL, NULL),
(203, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Administrasi Pemerintahan Berbasis Elektronik memberikan layanan transaksi elektronik terkait administrasi pemerintahan.', '41', NULL, NULL),
(204, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Administrasi Pemerintahan Berbasis Elektronik memberikan layanan administrasi pemerintahan berbasis elektronik yang terintegrasi.', '41', NULL, NULL),
(205, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Administrasi Pemerintahan Berbasis Elektronik memberikan layanan satu data administrasi pemerintahan berbasis elektronik.', '41', NULL, NULL),
(206, 'Layanan Pengelolaan Kinerja Berbasis Elektronik hanya memberikan layanan informasi terkait pengelolaan kinerja pemerintah', '42', NULL, NULL),
(207, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengelolaan Kinerja Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '42', NULL, NULL),
(208, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengelolaan Kinerja Berbasis Elektronik memberikan layanan transaksi elektronik terkait pengelolaan kinerja pemerintah.', '42', NULL, NULL),
(209, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengelolaan Kinerja Berbasis Elektronik memberikan layanan pengelolaan kinerja pemerintah berbasis elektronik yang terintegrasi.', '42', NULL, NULL),
(210, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Pengelolaan Kinerja Berbasis Elektronik memberikan layanan satu data pengelolaan kinerja pemerintah berbasis elektronik.', '42', NULL, NULL),
(211, 'Layanan Kepegawaian Berbasis Elektronik hanya memberikan layanan informasi terkait kepegawaian pemerintah', '43', NULL, NULL),
(212, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '43', NULL, NULL),
(213, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan transaksi elektronik terkait kepegawaian pemerintah.', '43', NULL, NULL),
(214, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan kepegawaian pemerintah berbasis elektronik yang terintegrasi.', '43', NULL, NULL),
(215, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Kepegawaian Berbasis Elektronik memberikan layanan satu data kepegawaian pemerintah berbasis elektronik.', '43', NULL, NULL),
(216, 'Layanan Administrasi Keuangan Berbasis Elektronik hanya memberikan layanan informasi terkait administrasi keuangan pemerintah', '44', NULL, NULL);
INSERT INTO `penjelasans` (`id`, `text`, `id_indikator`, `created_at`, `updated_at`) VALUES
(217, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Administrasi Keuangan Berbasis Elektronik memberikan layanan informasi yang dilengkapi dengan fitur-fitur interaktif.', '44', NULL, NULL),
(218, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Administrasi Keuangan Berbasis Elektronik memberikan layanan transaksi elektronik terkait administrasi keuangan pemerintah.', '44', NULL, NULL),
(219, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Administrasi Keuangan Berbasis Elektronik memberikan layanan administrasi keuangan pemerintah berbasis elektronik yang terintegrasi.', '44', NULL, NULL),
(220, 'Kriteria tingkat 4 telah terpenuhi serta Layanan Administrasi Keuangan Berbasis Elektronik memberikan layanan satu data administrasi keuangan pemerintah berbasis elektronik.', '44', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tahap` varchar(255) DEFAULT NULL,
  `batas` date DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `tahap`, `batas`, `tahun`, `status`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'penilaian mandiri', '2024-04-30', '2024', 'pemantauan', 'testing', NULL, '2024-05-30 18:22:31'),
(2, 'Coba', 'Pemantauan', '2024-06-06', '2025', 'Pantau', 'coba', '2024-06-05 17:33:43', '2024-06-05 17:33:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(190) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('superadmin','admin','user') NOT NULL,
  `nama_instansi` varchar(255) DEFAULT NULL,
  `pass_view` varchar(255) DEFAULT NULL,
  `id_bagian` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `nama_instansi`, `pass_view`, `id_bagian`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '$2y$12$dslC.jPtJmnBuc.JGrj4.OjkVUet9qo222HHUlt.XX.rlE4FOZ59i', 'admin', 'Admin', 'admin', NULL, 'l3XsviAzMDOolYBoIp5R4WvRhYZxDCICvkFjgQTRqfrq9mXpxKuG1wTn9Bhb', '2024-05-16 17:48:08', '2024-05-23 18:11:59'),
(2, 'user1', '$2y$12$oGgLJPaHngwols.p8eYFme4hKjZTSqwyys1DjzjMRRwdZHkJO9/n.', 'user', 'Inspektorat', 'user1', NULL, 'abLtg1Or3yz9AHWr4prfKzV0mtPSEKcjDRhTVz0dLcBv1EWXSqNJ0tnb0BOf', '2024-05-16 17:48:08', '2024-05-29 10:47:01'),
(3, 'user2', '$2y$12$qg5m3GJ5QUPNT/rlY9PCtuuci2IpytA6xWo41Xt6SkEr52WK26ozu', 'user', 'Badan Perencanaan dan Pembangunan, Riset dan Inovasi Daerah', 'user', NULL, 'jXLzdVQWdAFkpAWfEBmbVqVejncdc7QvJG8ajzgUjnRE0eIRiJkqTZ5dJjCA', '2024-05-16 17:48:09', '2024-05-16 17:48:09'),
(4, 'user3', '$2y$12$oSC/qxXt6jpPkIo4bqXfqORg0wBXCdunLLSgrs8NnxOSFKlbuS5z2', 'user', 'Badan Pengelolaan Keuangan dan Aset Daerah', 'user', NULL, 'VjGpSGH8EQXQFdSEBCNMohV4Bp0yuLQj9B0NqRvlO2IbpmjEnNZSoW8ZTLm4', '2024-05-16 17:48:09', '2024-05-16 17:48:09'),
(5, 'user4', '$2y$12$x87n5QNSVWyw1Zq4JKm39eVioqQO212GPwrAwMNC2IAnXt.eFuZIC', 'user', 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia', 'user', NULL, 'tH1kKe8d9D2xP5Px', '2024-05-16 17:48:09', '2024-05-16 17:48:09'),
(6, 'user5', '$2y$12$aTk6FZCQTWo6/KuWzrUiWuIPfivSSOt4S9XzxRVkFQ9qNoB4Ropw.', 'user', 'Dinas Komunikasi dan Informatika', 'user', NULL, 'a2HT8D34lb1vsBIv', '2024-05-16 17:48:10', '2024-05-16 17:48:10'),
(7, 'user6', '$2y$12$4VNZhxnGOKWV/QRmstU4JO0SQTnWEIf35gN9Etb4opJfRfbUsRszS', 'user', 'Dinas Kesehatan', 'user', NULL, 'NVMDUXJyoOjnbAVncEFrw1BIC7QjUGFhtxs345IT6TBF5U2LpJ6Yj9nw5lXn', '2024-05-16 17:48:10', '2024-05-16 17:48:10'),
(8, 'user7', '$2y$12$0tqT5khxAHa61b5e6e38ruCmc.Q14OVvPaQWbq22UbceiXHSgWZw6', 'user', 'Dinas Pengendalian Penduduk, KB dan PPPA', 'user', NULL, 'PQloRE2Xkjd1aZ12', '2024-05-16 17:48:11', '2024-05-16 17:48:11'),
(9, 'user8', '$2y$12$mj1g2JFnopK9JuYJ0D5b6O3Qe4TNS0dEVD6AN/596oo2WtHtM0smq', 'user', 'Dinas Perpustakaan dan Kearsipan', 'user', NULL, 'qlFfJeXPIGMNVoWB', '2024-05-16 17:48:11', '2024-05-16 17:48:11'),
(10, 'user9', '$2y$12$CMU.MnL.AV1aaTa4rVJZeOctBIMihUOIL.wCDK08TMbjX1Jz9U/Ye', 'user', 'Rumah Sakit Umum Daerah Dolopo', 'user', NULL, '99RWLoPcIH9j4Xkn', '2024-05-16 17:48:11', '2024-05-16 17:48:11'),
(11, 'user10', '$2y$12$vIcQavX0EUhCxtRK4hKkJuoBcoNnkpOzbiRNinZpnGDyqiXFNgtES', 'user', 'Bagian Organisasi Sekretariat Daerah', 'user', NULL, 'iPQIRYpQ7XLxNXVO', '2024-05-16 17:48:11', '2024-05-16 17:48:11'),
(12, 'user11', '$2y$12$9qyNcDBlBlv26Z/wc0AqC.vI.DysCAP/nQ2a.EoCltt.JI78MQixC', 'user', 'Bagian Hukum Sekretariat Daerah', 'user', NULL, '6rogojNlRSiTRCUE', '2024-05-16 17:48:12', '2024-05-16 17:48:12'),
(26, 'user12', '$2y$12$D6Dw7LbbEzBxkdJt2lljT.MYbxUSFvnLl57mOE.zYYJdJFoqMsSFG', 'user', 'Bagian Pengadaan Barang dan Jasa Sekretariat Daerah', 'user', NULL, '9bOZQMPtUePPt4uk', '2024-05-16 17:48:12', '2024-05-16 17:48:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aspeks`
--
ALTER TABLE `aspeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bagians`
--
ALTER TABLE `bagians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_indikators`
--
ALTER TABLE `detail_indikators`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `file_data`
--
ALTER TABLE `file_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_data_id_indikator_foreign` (`id_indikator`),
  ADD KEY `file_data_id_task_foreign` (`id_task`),
  ADD KEY `file_data_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `indikators`
--
ALTER TABLE `indikators`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawabans`
--
ALTER TABLE `jawabans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keterangans`
--
ALTER TABLE `keterangans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjelasans`
--
ALTER TABLE `penjelasans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aspeks`
--
ALTER TABLE `aspeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `bagians`
--
ALTER TABLE `bagians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `detail_indikators`
--
ALTER TABLE `detail_indikators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `domains`
--
ALTER TABLE `domains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `file_data`
--
ALTER TABLE `file_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `indikators`
--
ALTER TABLE `indikators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `jawabans`
--
ALTER TABLE `jawabans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT untuk tabel `keterangans`
--
ALTER TABLE `keterangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penjelasans`
--
ALTER TABLE `penjelasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `file_data`
--
ALTER TABLE `file_data`
  ADD CONSTRAINT `file_data_id_indikator_foreign` FOREIGN KEY (`id_indikator`) REFERENCES `indikators` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `file_data_id_task_foreign` FOREIGN KEY (`id_task`) REFERENCES `tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `file_data_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
