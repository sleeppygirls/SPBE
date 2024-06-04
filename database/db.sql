-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for spbe
CREATE DATABASE IF NOT EXISTS `spbe` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `spbe`;

-- Dumping structure for table spbe.aspeks
CREATE TABLE IF NOT EXISTS `aspeks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aspek` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table spbe.aspeks: ~8 rows (approximately)
DELETE FROM `aspeks`;
INSERT INTO `aspeks` (`id`, `aspek`, `created_at`, `updated_at`) VALUES
	(1, 'Kebijakan Internal Tata Kelola SPBE', NULL, NULL),
	(2, 'Perencanaan Strategis SPBE', NULL, NULL),
	(3, 'Teknologi Informasi dan Komunikasi', NULL, NULL),
	(4, 'Penyelenggara SPBE', NULL, NULL),
	(5, 'Penerapan Manajemen SPBE', NULL, NULL),
	(6, 'Audit TIK', NULL, NULL),
	(7, 'Layanan Pemerintahan Berbasis Elektronik\r\n', NULL, NULL),
	(8, 'Layanan Publik Berbasis Elektronik', NULL, NULL);

-- Dumping structure for table spbe.bagians
CREATE TABLE IF NOT EXISTS `bagians` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_task` int(11) DEFAULT NULL,
  `indikators` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table spbe.bagians: ~13 rows (approximately)
DELETE FROM `bagians`;
INSERT INTO `bagians` (`id`, `id_user`, `id_task`, `indikators`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47"]', NULL, '2024-06-02 21:07:51'),
	(2, 2, 1, '["1","2","4","5","6","7","8","11","12","15","16","17","18","19","20","22","23","28","30","31","42","43"]', '2024-05-23 01:14:02', '2024-05-23 01:14:55'),
	(3, 3, 1, '["1","2","3","4","5","6","7","8","9","10","44"]', '2024-05-23 01:16:16', '2024-05-23 01:16:16'),
	(4, 4, 1, '["3","13","23","32"]', '2024-05-23 23:10:31', '2024-05-23 23:10:31'),
	(5, 5, 1, '["9","21","29","30","31","39"]', '2024-05-23 23:11:21', '2024-05-23 23:11:21'),
	(6, 6, 1, '["10","14","19","20","27","40"]', '2024-05-23 23:12:05', '2024-05-23 23:12:05'),
	(7, 7, 1, '["13","24","33","34","38"]', '2024-05-23 23:12:58', '2024-05-23 23:12:58'),
	(8, 8, 1, '["25","26","36","41"]', '2024-05-23 23:13:51', '2024-05-23 23:13:51'),
	(9, 9, 1, '["25"]', '2024-05-23 23:15:07', '2024-05-23 23:15:08'),
	(10, 10, 1, '["37"]', '2024-05-23 23:21:48', '2024-05-23 23:21:48'),
	(11, 11, 1, '["45"]', '2024-05-23 23:22:58', '2024-05-26 21:18:18'),
	(12, 12, 1, '["46"]', '2024-05-26 21:18:56', '2024-05-26 21:18:56'),
	(38, 26, 1, '["1","2"]', '2024-06-03 22:54:27', '2024-06-03 22:54:27');

-- Dumping structure for table spbe.detail_indikators
CREATE TABLE IF NOT EXISTS `detail_indikators` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `file` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `id_indikator` varchar(255) NOT NULL,
  `capaian` int(11) NOT NULL DEFAULT 0,
  `note` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spbe.detail_indikators: ~0 rows (approximately)
DELETE FROM `detail_indikators`;
INSERT INTO `detail_indikators` (`id`, `file`, `username`, `id_indikator`, `capaian`, `note`, `created_at`, `updated_at`) VALUES
	(18, '', 'user1', '9', 4, NULL, '2024-05-30 20:47:23', '2024-05-30 20:47:23');

-- Dumping structure for table spbe.domains
CREATE TABLE IF NOT EXISTS `domains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table spbe.domains: ~4 rows (approximately)
DELETE FROM `domains`;
INSERT INTO `domains` (`id`, `domain`, `created_at`, `updated_at`) VALUES
	(1, 'Kebijakan Internal SPBE', NULL, NULL),
	(2, 'Tata Kelola SPBE', NULL, NULL),
	(3, 'Manajemen SPBE', NULL, NULL),
	(4, 'Layanan SPBE', NULL, NULL);

-- Dumping structure for table spbe.indikators
CREATE TABLE IF NOT EXISTS `indikators` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `aspek` int(11) DEFAULT NULL,
  `domain` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1186 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spbe.indikators: ~47 rows (approximately)
DELETE FROM `indikators`;
INSERT INTO `indikators` (`id`, `no`, `name`, `username`, `aspek`, `domain`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Tingkat Kematangan Kebijakan Internal Arsitektur SPBE', NULL, 1, 1, NULL, '2024-05-20 01:40:44'),
	(2, 2, 'Tingkat Kematangan Kebijakan Internal Peta Rencana', NULL, 1, 1, NULL, '2024-05-19 22:30:15'),
	(3, 3, 'Tingkat Kematangan Kebijakan Internal Manajemen Data', NULL, 1, 1, NULL, '2024-05-19 22:33:37'),
	(4, 4, 'Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE', NULL, 1, 1, NULL, '2024-05-19 22:39:17'),
	(5, 5, 'Tingkat Kematangan Kebijakan Internal Layanan Pusat Data', NULL, 1, 1, NULL, NULL),
	(6, 6, 'Tingkat Kematangan Kebijakan Internal Layanan', NULL, 1, 1, NULL, NULL),
	(7, 7, 'Tingkat Kematangan Kebijakan Internal Penggunaan Sistem', NULL, 1, 1, NULL, NULL),
	(8, 8, 'Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi', NULL, 1, 1, NULL, NULL),
	(9, 9, 'Tingkat Kematangan Kebijakan Internal Audit TIK', NULL, 1, 1, NULL, NULL),
	(10, 10, 'Tingkat Kematangan Kebijakan Internal Tim Koordinasi', NULL, 1, 1, NULL, NULL),
	(11, 11, 'Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah', NULL, 2, 2, NULL, NULL),
	(12, 12, 'Tingkat Kematangan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah', NULL, 2, 2, NULL, NULL),
	(13, 13, 'Tingkat Kematangan Keterpaduan Rencana dan Anggaran SPBE', NULL, 2, 2, NULL, NULL),
	(14, 14, 'Tingkat Kematangan Inovasi Proses Bisnis SPBE', NULL, 2, 2, NULL, NULL),
	(15, 15, 'Tingkat Kematangan Pembangunan Aplikasi SPBE', NULL, 3, 2, NULL, NULL),
	(16, 16, 'Tingkat Kematangan Layanan Pusat Data', NULL, 3, 2, NULL, NULL),
	(17, 17, 'Tingkat Kematangan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah', NULL, 3, 2, NULL, NULL),
	(18, 18, 'Tingkat Kematangan Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah', NULL, 3, 2, NULL, NULL),
	(19, 19, 'Tingkat Kematangan Pelaksanaan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah', NULL, 4, 2, NULL, NULL),
	(20, 20, 'Tingkat Kematangan Kolaborasi Penerapan SPBE', NULL, 4, 2, NULL, NULL),
	(21, 21, 'Tingkat Kematangan Penerapan Manajemen Risiko SPBE', NULL, 5, 3, NULL, NULL),
	(22, 22, 'Tingkat Kematangan Penerapan Manajemen Keamanan Informasi', NULL, 5, 3, NULL, NULL),
	(23, 23, 'Tingkat Kematangan Penerapan Manajemen Data', NULL, 5, 3, NULL, NULL),
	(24, 24, 'Tingkat Kematangan Penerapan Manajemen Aset TIK', NULL, 5, 3, NULL, NULL),
	(25, 25, 'Tingkat Kematangan Penerapan Kompetensi Sumber Daya', NULL, 5, 3, NULL, NULL),
	(26, 26, 'Tingkat Kematangan Penerapan Manajemen Pengetahuan', NULL, 5, 3, NULL, NULL),
	(27, 27, 'Tingkat Kematangan Penerapan Manajemen Perubahan', NULL, 5, 3, NULL, NULL),
	(28, 28, 'Tingkat Kematangan Penerapan Manajemen Layanan SPBE', NULL, 5, 3, NULL, NULL),
	(29, 29, 'Tingkat Kematangan Pelaksanaan Audit Infrastruktur SPBE', NULL, 6, 3, NULL, NULL),
	(30, 30, 'Tingkat Kematangan Pelaksanaan Audit Aplikasi SPBE', NULL, 6, 3, NULL, NULL),
	(31, 31, 'Tingkat Kematangan Pelaksanaan Audit Keamanan SPBE', NULL, 6, 3, NULL, NULL),
	(32, 32, 'Tingkat Kematangan Layanan Perencanaan', NULL, 7, 4, NULL, NULL),
	(33, 33, 'Tingkat Kematangan Layanan Penganggaran', NULL, 7, 4, NULL, NULL),
	(34, 34, 'Tingkat Kematangan Layanan Keuangan', NULL, 7, 4, NULL, NULL),
	(35, 35, 'Tingkat Kematangan Layanan Pengadaan Barang dan Jasa', NULL, 7, 4, NULL, NULL),
	(36, 36, 'Tingkat Kematangan Layanan Kepegawaian', NULL, 7, 4, NULL, NULL),
	(37, 37, 'Tingkat Kematangan Layanan Kearsipan Dinamis', NULL, 7, 4, NULL, NULL),
	(38, 38, 'Tingkat Kematangan Layanan Pengelolaan Barang Milik', NULL, 7, 4, NULL, NULL),
	(39, 39, 'Tingkat Kematangan Layanan Pengawasan Internal', NULL, 7, 4, NULL, NULL),
	(40, 40, 'Tingkat Kematangan Layanan Akuntabilitas Kinerja Organisasi', NULL, 7, 4, NULL, NULL),
	(41, 41, 'Tingkat Kematangan Layanan Kinerja Pegawai', NULL, 7, 4, NULL, NULL),
	(42, 42, 'Tingkat Kematangan Layanan Pengaduan Pelayanan Publik', NULL, 8, 4, NULL, NULL),
	(43, 43, 'Tingkat Kematangan Layanan Data Terbuka', NULL, 8, 4, NULL, '2024-05-31 01:15:37'),
	(44, 44, 'Tingkat Kematangan Jaringan Dokumentasi dan Informasi', NULL, 8, 4, NULL, NULL),
	(45, 45, 'Tingkat Kematangan Layanan Publik Sektor 1', NULL, 8, 4, NULL, NULL),
	(46, 46, 'Tingkat Kematangan Layanan Publik Sektor 2', NULL, 8, 4, NULL, NULL),
	(47, 47, 'Tingkat Kematangan Layanan Publik Sektor 3', NULL, 8, 4, NULL, '2024-06-02 21:14:05');

-- Dumping structure for table spbe.jawabans
CREATE TABLE IF NOT EXISTS `jawabans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `d_jawaban` varchar(255) DEFAULT NULL,
  `id_penjelasan` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_indikator` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spbe.jawabans: ~5 rows (approximately)
DELETE FROM `jawabans`;
INSERT INTO `jawabans` (`id`, `d_jawaban`, `id_penjelasan`, `username`, `id_indikator`, `created_at`, `updated_at`) VALUES
	(107, 'fdsf', 41, 'user1', '9', '2024-05-30 20:47:23', '2024-05-30 20:47:23'),
	(108, 'fsdf', 42, 'user1', '9', '2024-05-30 20:47:23', '2024-05-30 20:47:23'),
	(109, 'fsdf', 43, 'user1', '9', '2024-05-30 20:47:23', '2024-05-30 20:47:23'),
	(110, 'fsdfs', 44, 'user1', '9', '2024-05-30 20:47:23', '2024-05-30 20:47:23'),
	(111, 'fsfdfds', 45, 'user1', '9', '2024-05-30 20:47:23', '2024-05-30 20:47:23');

-- Dumping structure for table spbe.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spbe.migrations: ~7 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(3, '2024_05_14_003210_create_indikators_table', 1),
	(4, '2024_05_14_003242_create_penjelasans_table', 1),
	(5, '2024_05_14_003311_create_jawabans_table', 1),
	(6, '2024_05_16_015624_create_detail_indikators_table', 1),
	(7, '2024_05_16_015651_create_tasks_table', 1);

-- Dumping structure for table spbe.penjelasans
CREATE TABLE IF NOT EXISTS `penjelasans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `text` longtext NOT NULL,
  `id_indikator` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=327 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spbe.penjelasans: ~235 rows (approximately)
DELETE FROM `penjelasans`;
INSERT INTO `penjelasans` (`id`, `text`, `id_indikator`, `created_at`, `updated_at`) VALUES
	(1, 'Konsep kebijakan internal terkait Arsitektur SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n ', '1', NULL, NULL),
	(2, 'Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tersebut belum memuat secara\r\nlengkap pengaturan mengenai referensi Arsitektur dan domain\r\nArsitektur SPBE (Proses Bisnis, Data dan Informasi,\r\nInfrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan\r\nLayanan SPBE).\r\n', '1', NULL, NULL),
	(3, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).\r\n', '1', NULL, NULL),
	(4, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah mengatur integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\r\n', '1', NULL, NULL),
	(5, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviuw dan evaluasi kebijakan internal Arsitektur Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru dan terbaik.', '1', NULL, '2024-06-03 00:35:12'),
	(6, 'Konsep kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n', '2', NULL, NULL),
	(7, 'Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tersebut belum mengatur muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).\r\n', '2', NULL, NULL),
	(8, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).\r\n', '2', NULL, NULL),
	(9, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur keselarasan antara Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah dan Peta Rencana SPBE Nasional. Selain itu, Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\r\n', '2', NULL, NULL),
	(10, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\r\n', '2', NULL, NULL),
	(11, 'Konsep kebijakan internal terkait Manajemen Data di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n', '3', NULL, NULL),
	(12, 'Kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah ditetapkan.', '3', NULL, NULL),
	(13, 'Kondisi: Kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah tersebut hanya mengatur sebagian dari rangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.\r\n', '3', NULL, NULL),
	(14, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah mengatur seluruh rangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.\r\n', '3', NULL, NULL),
	(15, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\r\n', '3', NULL, NULL),
	(16, 'Konsep kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n', '4', NULL, NULL),
	(17, 'Kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Pembangunan Aplikasi SPBE telah mengatur siklus pembangunan aplikasi.\r\n', '4', NULL, NULL),
	(18, 'Kriteria tingkat 2 telah terpenuhi dan Kebijakan internal terkait siklus Pembangunan Aplikasi SPBE telah mengatur proses konsultasi terkait siklus Pembangunan Aplikasi SPBE dengan unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah.\r\n', '4', NULL, NULL),
	(19, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah mengatur keterpaduan dan pengendalian Pembangunan Aplikasi SPBE oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal Pembangunan Aplikasi SPBE direviu dan dievaluasi secara periodik.\r\n', '4', NULL, NULL),
	(20, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.\r\n', '4', NULL, NULL),
	(21, 'Konsep kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia\r\n', '5', NULL, NULL),
	(22, 'Kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Layanan Pusat Data telah mengatur penggunaan Layanan Pusat Data untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '5', NULL, NULL),
	(23, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Layanan Pusat Data telah mengatur penggunaan Layanan Pusat Data untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '5', NULL, NULL),
	(24, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Pusat Data dengan Pusat Data Nasional dan/atau mengatur penggunaan Layanan Pusat Data Nasional. Selain itu, kebijakan internal terkait penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\r\n', '5', NULL, NULL),
	(25, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.\r\n', '5', NULL, NULL),
	(26, 'Konsep kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n', '6', NULL, NULL),
	(27, 'Kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur Layanan Jaringan Intra untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '6', NULL, NULL),
	(28, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur Layanan Jaringan Intra untuk seluruhunit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '6', NULL, NULL),
	(29, 'Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik\r\n', '6', NULL, NULL),
	(30, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\r\n', '6', NULL, NULL),
	(31, 'Konsep kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n', '7', NULL, NULL),
	(32, 'Kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '7', NULL, NULL),
	(33, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur penggunaan Sistem Penghubung Layanan untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '7', NULL, NULL),
	(34, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur keterhubungan dengan Sistem Penghubung Layanan Pemerintah. Selain itu, kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\r\n', '7', NULL, NULL),
	(35, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\r\n', '7', NULL, NULL),
	(36, 'Konsep kebijakan internal terkait Manajemen Keamanan Informasi belum atau telah tersedia.\r\n', '8', NULL, NULL),
	(37, 'Kebijakan internal terkait Manajemen Keamanan Informasi telah ditetapkan. Kondisi: Kebijakan internal terkait Manajemen Keamanan Informasi belum mengatur secara lengkap mengenai cakupan Manajemen Keamanan Informasi (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).', '8', NULL, NULL),
	(38, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Manajemen Keamanan Informasi mengatur seluruh cakupan Manajemen Keamanan Informasi secara lengkap (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).', '8', NULL, NULL),
	(39, 'Kriteria tingkat 3 telah terpenuhi, dan kebijakan internal terkait Manajemen Keamanan Informasi telah mengatur penerapan untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal terkait Manajemen Keamanan Informasi telah direviu dan dievaluasi secara periodik.', '8', NULL, NULL),
	(40, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Manajemen Keamanan Informasi telah ditindaklanjuti dengan kebijakan baru.', '8', NULL, NULL),
	(41, 'Konsep kebijakan internal terkait Audit TIK belum atau telah tersedia.\r\n', '9', NULL, NULL),
	(42, 'Kebijakan internal Audit TIK telah ditetapkan. Kondisi: Kebijakan internal terkait Audit TIK hanya mengatur pelaksanaan sebagian Audit TIK (Audit Infrastruktur SPBE, Audit Aplikasi SPBE, dan Audit Keamanan SPBE).\r\n', '9', NULL, NULL),
	(43, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Audit TIK telah mengatur pelaksanaan seluruh Audit TIK (Audit Infrastruktur SPBE Audit Aplikasi SPBE, dan Audit Keamanan SPBE).\r\n', '9', NULL, NULL),
	(44, 'Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Audit TIK telah direviu dan dievaluasi secara periodik.\r\n', '9', NULL, NULL),
	(45, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Audit TIK telah ditindaklanjuti dengan kebijakan baru.\r\n', '9', NULL, NULL),
	(46, 'Konsep kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n', '10', NULL, NULL),
	(47, 'Kebijakan internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '10', NULL, NULL),
	(48, 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '10', NULL, NULL),
	(49, 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\r\n', '10', NULL, NULL),
	(50, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.\r\n', '10', NULL, NULL),
	(51, 'Konsep dokumen Arsitektur SPBE belum atau telah tersedia.', '11', NULL, NULL),
	(52, 'Dokumen Arsitektur SPBE telah tersedia. Kondisi: Dokumen Arsitektur SPBE tidak/belum mencakup referensi dan domain Arsitektur SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu referensi dan domain arsitektur Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.\r\n', '11', NULL, NULL),
	(53, 'Kriteria tingkat 2 telah terpenuhi dan dokumen Arsitektur SPBE telah mencakup seluruh referensi dan domain Arsitektur SPBE Instansi Pusat/Pemerintah Daerah yaitu referensi dan domain arsitektur Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.\r\n', '11', NULL, NULL),
	(54, 'Kriteria tingkat 3 telah terpenuhi dan dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah berpedoman pada Arsitektur SPBE Nasional. Selain itu, dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi secara periodik.\r\n', '11', NULL, NULL),
	(55, 'Kriteria tingkat 4 telah terpenuhi dan dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut hasil reviu dan evaluasi.\r\n', '11', NULL, NULL),
	(56, 'Konsep dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n', '12', NULL, NULL),
	(57, 'Dokumen Peta Rencana SPBE telah tersedia. Kondisi: dokumen Peta Rencana SPBE tidak/belum mencakup muatan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu peta rencana Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, Audit Teknologi SPBE dan Audit TIK.\r\n', '12', NULL, NULL),
	(58, 'Kriteria tingkat 2 telah terpenuhi dan dokumen Peta Rencana SPBE telah mencakup seluruh muatan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah secara lengkap yaitu peta rencana Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, Audit Teknologi SPBE dan Audit TIK.\r\n', '12', NULL, NULL),
	(59, 'Kriteria tingkat 3 telah terpenuhi dan dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah diterapkan secara konsisten melalui rencana kerja dan anggaran 3 (tiga) tahun terakhir. Selain itu, dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi secara periodik.\r\n', '12', NULL, NULL),
	(60, 'Kriteria tingkat 4 telah terpenuhi dan dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut hasil reviu dan evaluasi.\r\n', '12', NULL, NULL),
	(61, 'Rencana dan Anggaran SPBE belum atau telah tertuang dalam rencana kerja dan anggaran tahunan.', '13', NULL, NULL),
	(62, 'Kriteria tingkat 1 telah terpenuhi dan Rencana dan Anggaran SPBE pada unit kerja/perangkat daerah tidak seluruhnya dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.\r\n', '13', NULL, NULL),
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
	(81, 'Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.\r\n', '17', NULL, NULL),
	(82, 'Kriteria tingkat 1 telah terpenuhi. Kondisi: Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah tidak/belum diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '17', NULL, NULL),
	(83, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Jaringan IntravInstansi Pusat/Pemerintah Daerah telah diterapkan di seluruhvunit kerja/perangkat daerah di Instansi Pusat/PemerintahvDaerah.\r\n', '17', NULL, NULL),
	(84, 'Kriteria tingkat 3 telah terpenuhi dan terdapat interkoneksi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\r\n', '17', NULL, NULL),
	(85, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan terhadap Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah.\r\n', '17', NULL, NULL),
	(86, 'Sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah belum atau telah tersedia.\r\n', '18', NULL, NULL),
	(87, 'Kriteria tingkat 1 telah terpenuhi. Kondisi: Sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah tidak/belum diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '18', NULL, NULL),
	(88, 'Kriteria tingkat 2 telah terpenuhi dan sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '18', NULL, NULL),
	(89, 'Kriteria tingkat 3 telah terpenuhi, sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah terintegrasi dengan sistem penghubungan layanan pemerintah dan/atau sistem penghubung layanan Instansi Pusat/Pemerintah Daerah lain. Selain itu, sistem penghubung layanan Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.\r\n', '18', NULL, NULL),
	(90, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi sistem penghubung layanan Instansi Pusat dan Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan.\r\n', '18', NULL, NULL),
	(91, 'Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum atau telah terbentuk. Kondisi: Tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dilaksanakan sewaktu-waktu atau tanpa perencanaan.\r\n', '19', NULL, NULL),
	(92, 'Kriteria tingkat 1 telah terpenuhi dan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilaksanakan sesuai perencanaan. Kondisi: tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah tidak/belum dilaksanakan seluruhnya.\r\n', '19', NULL, NULL),
	(93, 'Kriteria tingkat 2 telah terpenuhi dan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilaksanakan seluruhnya. Kondisi: program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum dikomunikasikan/dikoordinasikan kepada semua unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah.\r\n', '19', NULL, NULL),
	(94, 'Kriteria tingkat 3 telah terpenuhi dan program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dikomunikasikan/dikoordinasikan kepada semua unit kerja perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah. Selain itu, tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi.\r\n', '19', NULL, NULL),
	(95, 'Kriteria tingkat 4 telah terpenuhi dan hasil reviu dan evaluasi tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti melalui perbaikan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan pelaksanaannya.\r\n', '19', NULL, NULL),
	(96, 'Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE belum atau telah dilaksanakan. Kondisi: Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE dilaksanakan sewaktu-waktu atau tanpa perencanaan.\r\n', '20', NULL, NULL),
	(97, 'Kriteria tingkat 1 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE telah dilaksanakan sesuai perencanaan. Kondisi: Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE tidak dibentuk secara formal.\r\n', '20', NULL, NULL),
	(98, 'Kriteria tingkat 2 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah dalam penerapan SPBE telah dilaksanakan oleh tim yang dibentuk secara formal. Kondisi: Kolaborasi antar unit kerja/perangkat daerah dalam penerapan SPBE tidak/belum dilaksanakan pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Perangkat Daerah (kolaborasi dibentuk berdasarkan adanya kegiatan bersama).\r\n', '20', NULL, NULL),
	(99, 'Kriteria tingkat 3 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah dalam penerapan SPBE telah dilaksanakan secara terpadu pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah yang dikoordinasikan oleh menteri/kepala lembaga/kepala daerah atau sekretaris kementerian/lembaga/pemerintah daerah. Selain itu, kolaborasi dalam penerapan SPBE telah dilakukan reviu dan evaluasi.\r\n', '20', NULL, NULL),
	(100, 'Kriteria tingkat 4 telah terpenuhi dan hasil reviu dan evaluasi kolaborasi dalam penerapan SPBE telah ditindaklanjuti melalui perbaikan pelaksanaan kolaborasi dalam penerapan SPBE.\r\n', '20', NULL, NULL),
	(101, 'Kegiatan Manajemen Risiko SPBE belum atau telah diterapkan.Kondisi: Kegiatan Manajemen Risiko SPBE diterapkan tanpaprogram kegiatan yang terarah dan terencana.\r\n', '21', NULL, NULL),
	(102, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Risiko SPBE diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Penerapan Manajemen Risiko SPBE dilaksanakan tanpa mengacu pada pedoman manajemen risiko SPBE.\r\n', '21', NULL, NULL),
	(103, 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Risiko SPBE telah dilaksanakan dengan mengacu pada pedoman manajemen risiko SPBE.\r\n', '21', NULL, NULL),
	(104, 'Kriteria tingkat 3 telah terpenuhi dan kebijakann strategis Manajemen Risiko SPBE telah ditetapkan oleh Komite Manajemen Risiko SPBE atau Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Risiko SPBE telah direviu dan dievaluasi secara periodik.\r\n', '21', NULL, NULL),
	(105, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Risiko SPBE ditindaklanjuti melalui perbaikan penerapan Manajemen Risiko SPBE.\r\n', '21', NULL, NULL),
	(106, 'Pengendalian Keamanan Informasi belum atau telah tersedia dalam tahap pembangunan.\r\n', '22', NULL, NULL),
	(107, 'Pengendalian Keamanan Informasi telah tersedia. Kondisi: Pengendalian Keamanan Informasi telah dilaksanakan pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.\r\n', '22', NULL, NULL),
	(108, 'Kriteria tingkat 2 telah terpenuhi dan pengendalian Keamanan Informasi telah dilaksanakan pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah dengan berdasarkan Risiko SPBE.\r\n', '22', NULL, NULL),
	(109, 'Kriteria tingkat 3 telah terpenuhi dan pengendalian Keamanan Informasi dilakukan melalui strategi Keamanan Informasi yang ditetapkan oleh Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah. Selain itu, pengendalian Keamanan Informasi telah dilakukan reviu dan evaluasi secara periodik\r\n', '22', NULL, NULL),
	(110, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi pengendalian Keamanan Informasi ditindaklanjuti melalui perbaikan penerapan proses pengendalian Keamanan Informasi\r\n', '22', NULL, NULL),
	(111, 'Kegiatan Manajemen Data belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Data diterapkan tanpa program kegiatan yang terarah dan terencana.\r\n', '23', NULL, NULL),
	(112, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Data diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Manajemen Data dilaksanakan tanpa mengacu pada pedoman Manajemen Data\r\n', '23', NULL, NULL),
	(113, 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Data telah dilaksanakan dengan mengacu pada pedoman Manajemen Data yang mencakup pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data, dan interoperabilitas data.\r\n', '23', NULL, NULL),
	(114, 'Kriteria tingkat 3 telah terpenuhi dan Manajemen Data dilaksanakan melalui strategi pengelolaan data yang ditetapkan Forum Satu Data atau Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Data telah direviu dan dievaluasi secara periodik.\r\n', '23', NULL, NULL),
	(115, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Data ditindaklanjuti melalui perbaikan penerapan Manajemen Data.\r\n', '23', NULL, NULL),
	(116, 'Kegiatan Manajemen Aset TIK belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Aset TIK diterapkan tanpa program kegiatan yang terarah dan terencana.\r\n', '24', NULL, NULL),
	(117, 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Aset TIK diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Manajemen Aset TIK dilaksanakan tanpa mengacu pada pedoman Manajemen Aset TIK yang mencakup proses perencanaan, pengadaan, pemanfaatan/penggunaan, dan penghapusan aset TIK\r\n', '24', NULL, NULL),
	(118, 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Aset TIK telah dilaksanakan dengan mengacu pada pedoman Manajemen Aset TIK yang mencakup proses perencanaan, pengadaan, pemanfaatan/penggunaan, dan penghapusan aset TIK.\r\n', '24', NULL, NULL),
	(119, 'Kriteria tingkat 3 telah terpenuhi, Manajemen Aset TIK dilaksanakan melalui strategi pengelolaan aset TIK oleh unit kerja/ perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Aset TIK telah direviu dan dievaluasi secara periodik.\r\n', '24', NULL, NULL),
	(120, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Aset TIK ditindaklanjuti melalui perbaikan penerapan Manajemen Aset TIK.\r\n', '24', NULL, NULL),
	(121, 'Pemenuhan kompetensi Sumber Daya Manusia belum atau telah diupayakan. Kondisi: Pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan tanpa perencanaan Sumber Daya Manusia.\r\n', '25', NULL, NULL),
	(122, 'Kriteria tingkat 1 telah terpenuhi dan pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan sesuai dengan perencanaan Sumber Daya Manusia. Kondisi: Kompetensi Sumber Daya Manusia SPBE tidak/belum terpenuhi seluruhnya yaitu kompetensi di bidang proses bisnis memerintahan, arsitektur SPBE, data dan informasi, keamanan SPBE, aplikasi SPBE, dan infrastruktur SPBE.\r\n', '25', NULL, NULL),
	(123, 'Kriteria tingkat 2 telah terpenuhi dan kompetensi Sumber Daya Manusia SPBE telah terpenuhi seluruhnya yaitu kompetensi di bidang proses bisnis memerintahan, arsitektur SPBE, data dan informasi, keamanan SPBE, aplikasi SPBE, dan infrastruktur SPBE.\r\n', '25', NULL, NULL),
	(124, 'Kriteria tingkat 3 telah terpenuhi, peningkatan dan penilaian kompetensi Sumber Daya Manusia SPBE telah dilakukan. Selain itu, pemenuhan kompetensi Sumber Daya Manusia SPBE telah dilakukan reviu dan evaluasi secara periodik.\r\n', '25', NULL, NULL),
	(125, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan perencanaan dan pemenuhan kompetensi Sumber Daya Manusia SPBE.\r\n', '25', NULL, NULL),
	(126, 'Manajemen Pengetahuan SPBE belum atau telah diterapkan. Kondisi: Manajemen Pengetahuan SPBE diterapkan tanpa perencanaan\r\n', '26', NULL, NULL),
	(127, 'Kriteria tingkat 1 telah terpenuhi dan dilaksanakan dengan perencanaan. Kondisi: Manajemen Pengetahuan SPBE telah dilaksanakan tanpa pedoman di Instansi Pusat/Pemerintah Daerah.\r\n', '26', NULL, NULL),
	(128, 'Kriteria tingkat 2 telah terpenuhi, Manajemen Pengetahuan SPBE dilaksanakan dengan mengacu pada pedoman di Instansi Pusat/Pemerintah Daerah dan Manajemen Pengetahuan SPBE diterapkan dengan menggunakan sistem aplikasi manajemen pengetahuan.\r\n', '26', NULL, NULL),
	(129, 'Kriteria tingkat 3 telah terpenuhi, semua unit kerja/perangkat daerah telah menerapkan Manajemen Pengetahuan SPBE dengan menggunakan sistem aplikasi manajemen pengetahuan yang terintegrasi serta telah dilakukan reviu dan evaluasi terhadap penerapan Manajemen Pengetahuan SPBE.\r\n', '26', NULL, NULL),
	(130, 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi terhadap penerapan Manajemen Pengetahuan SPBE telah ditindaklanjuti melalui perbaikan Manajemen Pengetahuan SPBE.\r\n', '26', NULL, NULL),
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
	(157, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Perencanan Berbasis Elektronik memberikan layanan interaksi terkait perencanaan kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen perencanaan.', '32', NULL, NULL),
	(158, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait perencanaan kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '32', NULL, NULL),
	(159, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya layanan penganggaran berbasis elektronik, layanan keuangan berbasis elektronik, layanan pengadaan berbasis elektronik, layanan perencanaan berbasis elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.', '32', NULL, NULL),
	(160, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.\r\n', '32', NULL, NULL),
	(161, 'Layanan Penganggaran Berbasis Elektronik hanya memberikan layanan informasi terkait penganggaran kegiatan pemerintah.', '33', NULL, NULL),
	(162, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan interaksi terkait penganggaran kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen penganggaran.', '33', NULL, NULL),
	(163, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait penganggaran kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '33', NULL, NULL),
	(164, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya layanan perencanaan berbasis elektronik, layanan keuangan berbasis elektronik, layanan pengadaan berbasis elektronik, layanan penganggaran berbasis elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.', '33', NULL, NULL),
	(165, 'Kriteria tingkat 4 telah terpenuhi dan Layanan PenganggaranmBerbasis Elektronik telah dilakukan perbaikan berdasarkan hasilmreviu dan evaluasi terhadap perubahan lingkungan, peraturanmperundang-undangan, teknologi atau kebutuhan InstansimPusat/Pemerintah Daerah.', '33', NULL, NULL),
	(166, 'Layanan Keuangan Berbasis Elektronik hanya memberikan layanan informasi terkait keuangan di Instansi Pusat/Pemerintah.', '34', NULL, NULL),
	(167, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan interaksi terkait keuangan seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.', '34', NULL, NULL),
	(168, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait keuangan seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '34', NULL, NULL),
	(169, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain', '34', NULL, NULL),
	(170, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.', '34', NULL, NULL),
	(171, 'Layanan Pengadaan Barang dan Jasa Berbasis Elektronik hanya memberikan layanan informasi terkait pengadaan barang dan jasa di Instansi Pusat/Pemerintah.', '35', NULL, NULL),
	(172, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan interaksi terkait pengadaan barang dan jasa seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.', '35', NULL, NULL),
	(173, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengadaan barang dan jasa seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '35', NULL, NULL),
	(174, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Pengadaan Barang dan Jasa Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.', '35', NULL, NULL),
	(175, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.', '35', NULL, NULL),
	(176, 'Layanan Kepegawaian Berbasis Elektronik hanya memberikan layanan informasi terkait kepegawaian.', '36', NULL, NULL),
	(177, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan interaksi terkait kepegawaian seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.', '36', NULL, NULL),
	(178, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kepegawaian seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '36', NULL, NULL),
	(179, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Kinerja Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Kepegawaian Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.', '36', NULL, NULL),
	(180, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah', '36', NULL, NULL),
	(181, 'Layanan Kearsipan Dinamis Berbasis Elektronik hanya memberikan layanan informasi terkait kearsipan dinamis.\r\n', '37', NULL, NULL),
	(182, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan interaksi terkait kearsipan dinamis seperti pencarian informasi, pengunggahan dan pengunduhan dokumen\r\n', '37', NULL, NULL),
	(183, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kearsipan dinamis seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.\r\n', '37', NULL, NULL),
	(184, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Pengadaan Barang dan Jasa Berbasis Elektronik, Layanan Kepegawaian Berbasis Elektronik, Layanan Kearsipan Dinamis Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.\r\n', '37', NULL, NULL),
	(185, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Kearsipan Dinamis Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil review dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.\r\n', '37', NULL, NULL),
	(186, 'Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik hanya memberikan layanan informasi terkait pengelolaan barang milik negara.\r\n', '38', NULL, NULL),
	(187, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan interaksi terkait pengelolaan barang milik negara/daerah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.\r\n', '38', NULL, NULL),
	(188, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengelolaan barang milik negara/daerah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.\r\n', '38', NULL, NULL),
	(189, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Barang dan Jasa Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.\r\n', '38', NULL, NULL),
	(190, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.\r\n', '38', NULL, NULL),
	(191, 'Layanan Pengawasan Internal Pemerintah Berbasis Elektronik hanya memberikan layanan informasi terkait pengawasan internal pemerintah\r\n', '39', NULL, NULL),
	(192, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan interaksi terkait pengawasan internal pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen\r\n', '39', NULL, NULL),
	(193, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengawasan internal pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.\r\n', '39', NULL, NULL),
	(194, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Kepegawaian Berbasis Elektronik, Layanan Akuntabilitas Kinerja Berbasis Elektronik, Layanan Pengawasan Internal Pemerintah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain\r\n', '39', NULL, NULL),
	(195, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Pengawasan Internal Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil review dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.\r\n', '39', NULL, NULL),
	(196, 'Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik hanya memberikan layanan informasi terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah.\r\n', '40', NULL, NULL),
	(197, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan interaksi terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.\r\n', '40', NULL, NULL),
	(198, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.\r\n', '40', NULL, NULL),
	(199, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain\r\n', '40', NULL, NULL),
	(200, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.\r\n', '40', NULL, NULL),
	(201, 'Layanan Kinerja Pegawai Berbasis Elektronik hanya memberikan layanan informasi terkait kinerja pegawai.\r\n', '41', NULL, NULL),
	(202, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan interaksi terkait kinerja pegawai seperti pencarian informasi, pengunggahan dan pengunduhan dokumen\r\n', '41', NULL, NULL),
	(203, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kinerja pegawai seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.\r\n', '41', NULL, NULL),
	(204, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Perencanaan Berbasis Elektronik, Layanan Akuntabilitas Berbasis Elektronik, Layanan Kinerja Pegawai Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.\r\n', '41', NULL, NULL),
	(205, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil review dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.\r\n', '41', NULL, NULL),
	(206, 'Layanan Pengaduan Pelayanan Publik Berbasis Elektronik hanya memberikan layanan informasi terkait pengaduan pelayanan publik.\r\n', '42', NULL, NULL),
	(207, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan interaksi terkait pengaduan pelayanan publik seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.\r\n', '42', NULL, NULL),
	(208, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengaduan pelayanan publik seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.\r\n', '42', NULL, NULL),
	(209, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Kepegawaian Berbasis Elektronik, Layanan Pengaduan Pelayanan Publik Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain\r\n', '42', NULL, NULL),
	(210, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.\r\n', '42', NULL, NULL),
	(211, 'Layanan Data Terbuka Berbasis Elektronik hanya memberikan layanan informasi terkait data terbuka.\r\n', '43', NULL, NULL),
	(212, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan interaksi terkait data terbuka seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.\r\n', '43', NULL, NULL),
	(213, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait data terbuka seperti otomasi pertukaran data, otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.\r\n', '43', NULL, NULL),
	(214, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Data Terbuka Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.\r\n', '43', NULL, NULL),
	(215, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.\r\n', '43', NULL, NULL),
	(216, 'Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik hanya memberikan layanan informasi terkait jaringan dokumentasi dan informasi hukum.', '44', NULL, NULL),
	(217, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan interaksi terkait jaringan dokumentasi dan informasi hukum seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.', '44', NULL, NULL),
	(218, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait jaringan dokumentasi dan informasi hukum seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '44', NULL, NULL),
	(219, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait jaringan dokumentasi dan informasi hukum seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '44', NULL, NULL),
	(220, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.', '44', NULL, NULL),
	(221, 'Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah.', '45', NULL, NULL),
	(222, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen Layanan Publik Sektoral.', '45', NULL, NULL),
	(223, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '45', NULL, NULL),
	(224, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.', '45', NULL, NULL),
	(225, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil review dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.', '45', NULL, NULL),
	(226, 'Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah', '46', NULL, NULL),
	(227, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen Layanan Publik Sektoral', '46', NULL, NULL),
	(228, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.', '46', NULL, NULL),
	(229, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain', '46', NULL, NULL),
	(230, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.', '46', NULL, NULL),
	(231, 'Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah', '47', NULL, NULL),
	(232, 'Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen Layanan Publik Sektoral', '47', NULL, NULL),
	(233, 'Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti otomasi alur kerja, transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data', '47', NULL, NULL),
	(234, 'Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.', '47', NULL, NULL),
	(235, 'Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.', '47', NULL, NULL);

-- Dumping structure for table spbe.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spbe.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table spbe.tasks
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `tahap` varchar(255) DEFAULT NULL,
  `batas` date DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spbe.tasks: ~2 rows (approximately)
DELETE FROM `tasks`;
INSERT INTO `tasks` (`id`, `name`, `tahap`, `batas`, `tahun`, `status`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'testing', 'penilaian mandiri', '2024-04-30', '2024', 'pemantauan', 'testing', NULL, '2024-05-31 01:22:31'),
	(2, 'test', NULL, NULL, '2023', NULL, NULL, NULL, NULL);

-- Dumping structure for table spbe.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pass_view` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table spbe.users: ~13 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `username`, `password`, `level`, `nama_instansi`, `pass_view`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', '$2y$12$dslC.jPtJmnBuc.JGrj4.OjkVUet9qo222HHUlt.XX.rlE4FOZ59i', 'admin', 'Admin', 'admin', 'X18SJh3NN5DxsEYPfTRwZGMDddvo1PA7Oij6Do2cvSBJF9eqipZQtJOEBnxh', '2024-05-17 00:48:08', '2024-05-24 01:11:59'),
	(2, 'user1', '$2y$12$oGgLJPaHngwols.p8eYFme4hKjZTSqwyys1DjzjMRRwdZHkJO9/n.', 'user', 'Inspektorat', 'user1', 'GuWiCriXGNS7vD1WtYt3jRKbESk2taBTi5ivG74C3pAs0WZIvbj1kMFc7Fd9', '2024-05-17 00:48:08', '2024-05-29 17:47:01'),
	(3, 'user2', '$2y$12$qg5m3GJ5QUPNT/rlY9PCtuuci2IpytA6xWo41Xt6SkEr52WK26ozu', 'user', 'Badan Perencanaan dan Pembangunan, Riset dan Inovasi Daerah', 'user', 'jXLzdVQWdAFkpAWfEBmbVqVejncdc7QvJG8ajzgUjnRE0eIRiJkqTZ5dJjCA', '2024-05-17 00:48:09', '2024-05-17 00:48:09'),
	(4, 'user3', '$2y$12$oSC/qxXt6jpPkIo4bqXfqORg0wBXCdunLLSgrs8NnxOSFKlbuS5z2', 'user', 'Badan Pengelolaan Keuangan dan Aset Daerah', 'user', 'VjGpSGH8EQXQFdSEBCNMohV4Bp0yuLQj9B0NqRvlO2IbpmjEnNZSoW8ZTLm4', '2024-05-17 00:48:09', '2024-05-17 00:48:09'),
	(5, 'user4', '$2y$12$x87n5QNSVWyw1Zq4JKm39eVioqQO212GPwrAwMNC2IAnXt.eFuZIC', 'user', 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia', 'user', 'tH1kKe8d9D2xP5Px', '2024-05-17 00:48:09', '2024-05-17 00:48:09'),
	(6, 'user5', '$2y$12$aTk6FZCQTWo6/KuWzrUiWuIPfivSSOt4S9XzxRVkFQ9qNoB4Ropw.', 'user', 'Dinas Komunikasi dan Informatika', 'user', 'a2HT8D34lb1vsBIv', '2024-05-17 00:48:10', '2024-05-17 00:48:10'),
	(7, 'user6', '$2y$12$4VNZhxnGOKWV/QRmstU4JO0SQTnWEIf35gN9Etb4opJfRfbUsRszS', 'user', 'Dinas Kesehatan', 'user', 'NVMDUXJyoOjnbAVncEFrw1BIC7QjUGFhtxs345IT6TBF5U2LpJ6Yj9nw5lXn', '2024-05-17 00:48:10', '2024-05-17 00:48:10'),
	(8, 'user7', '$2y$12$0tqT5khxAHa61b5e6e38ruCmc.Q14OVvPaQWbq22UbceiXHSgWZw6', 'user', 'Dinas Pengendalian Penduduk, KB dan PPPA', 'user', 'PQloRE2Xkjd1aZ12', '2024-05-17 00:48:11', '2024-05-17 00:48:11'),
	(9, 'user8', '$2y$12$mj1g2JFnopK9JuYJ0D5b6O3Qe4TNS0dEVD6AN/596oo2WtHtM0smq', 'user', 'Dinas Perpustakaan dan Kearsipan', 'user', 'qlFfJeXPIGMNVoWB', '2024-05-17 00:48:11', '2024-05-17 00:48:11'),
	(10, 'user9', '$2y$12$CMU.MnL.AV1aaTa4rVJZeOctBIMihUOIL.wCDK08TMbjX1Jz9U/Ye', 'user', 'Rumah Sakit Umum Daerah Dolopo', 'user', '99RWLoPcIH9j4Xkn', '2024-05-17 00:48:11', '2024-05-17 00:48:11'),
	(11, 'user10', '$2y$12$vIcQavX0EUhCxtRK4hKkJuoBcoNnkpOzbiRNinZpnGDyqiXFNgtES', 'user', 'Bagian Organisasi Sekretariat Daerah', 'user', 'iPQIRYpQ7XLxNXVO', '2024-05-17 00:48:11', '2024-05-17 00:48:11'),
	(12, 'user11', '$2y$12$9qyNcDBlBlv26Z/wc0AqC.vI.DysCAP/nQ2a.EoCltt.JI78MQixC', 'user', 'Bagian Hukum Sekretariat Daerah', 'user', '6rogojNlRSiTRCUE', '2024-05-17 00:48:12', '2024-05-17 00:48:12'),
	(26, 'user12', '$2y$12$D6Dw7LbbEzBxkdJt2lljT.MYbxUSFvnLl57mOE.zYYJdJFoqMsSFG', 'user', 'Bagian Pengadaan Barang dan Jasa Sekretariat Daerah', 'user', '9bOZQMPtUePPt4uk', '2024-05-17 00:48:12', '2024-05-17 00:48:12'),
	(33, 'polisi', '$2y$12$immxgqiEBIchFlMsKITVBOJWvMi/jqE.xjSVO75CJbPtJRzpJcrYK', 'user', 'Kepolisian', 'user', NULL, '2024-06-03 21:01:56', '2024-06-03 22:54:27');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
