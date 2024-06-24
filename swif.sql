-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for swif_warehouse
CREATE DATABASE IF NOT EXISTS `swif_warehouse` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `swif_warehouse`;

-- Dumping structure for table swif_warehouse.barangs
CREATE TABLE IF NOT EXISTS `barangs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kat_id` int NOT NULL,
  `merek` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok` int NOT NULL,
  `lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.barangs: ~16 rows (approximately)
INSERT INTO `barangs` (`id`, `kat_id`, `merek`, `supplier`, `stok`, `lokasi`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Piring Cantiks Sunlight', 'PT.Wings Indonesia', 15, 'A2', '2024-05-13 00:43:35', '2024-06-10 17:33:09'),
	(2, 1, 'Piring Kaca Melamin', 'PT.Keramikas', 140, 'A5', '2024-05-12 17:43:35', '2024-05-14 12:17:36'),
	(4, 1, 'Gelas Impor Jepang', 'PT.Keramikas', 250, 'A1', '2024-05-19 18:54:17', '2024-05-20 00:48:06'),
	(7, 2, 'Bear Brand', 'PT.Wings Indonesia', 475, 'B1', '2024-05-19 19:13:16', '2024-05-19 19:13:16'),
	(21, 1, 'Mangkok Jepang', 'PT Keramikas', 250, 'A3', '2024-05-20 00:31:43', '2024-05-20 00:31:43'),
	(22, 1, 'Monitor Aoqa', 'PT.Aoqa Digital', 10, 'A4', '2024-05-20 00:33:43', '2024-05-20 00:33:43'),
	(23, 1, 'Vas Bunga', 'PT.Keramikas', 250, 'A5', '2024-05-20 00:34:59', '2024-05-20 00:58:42'),
	(25, 3, 'Mie Instan SedapRasa', 'PT.SedapRasa', 250, 'B2', '2024-05-20 00:41:55', '2024-05-26 14:47:14'),
	(26, 3, 'Chiki Chetaas', 'PT.Wings Indonesia', 250, 'B3', '2024-05-20 00:43:51', '2024-05-20 01:07:14'),
	(27, 2, 'Fanta Anggur', 'PT.Wings Indonesia', 25, 'B5', '2024-05-20 00:49:09', '2024-05-20 00:51:19'),
	(28, 1, 'Gelas Panjang', 'PT Keramikas', 250, 'A7', '2024-05-20 01:15:11', '2024-05-20 01:15:11'),
	(29, 3, 'Topping Topas', 'PT.Wings Indonesia', 50, 'B3', '2024-05-20 01:17:17', '2024-05-20 01:17:17'),
	(31, 7, 'HP Printer Deskjet', 'PT.HoweelPowel Indonesia', 50, 'C1', '2024-05-21 19:24:14', '2024-05-21 19:24:14'),
	(32, 3, 'Pocky Wafers', 'PT.Indofood', 350, 'B4', '2024-05-21 19:33:52', '2024-05-26 14:50:32'),
	(39, 7, 'HP Vivo', 'PT.Vivo Indonesia', 250, 'C1', '2024-06-03 06:18:25', '2024-06-03 06:18:25'),
	(40, 8, 'Buku Tulis', 'Sinar Dunia', 350, 'D1', '2024-06-03 06:48:07', '2024-06-03 06:48:07');

-- Dumping structure for table swif_warehouse.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table swif_warehouse.gudang
CREATE TABLE IF NOT EXISTS `gudang` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.gudang: ~1 rows (approximately)
INSERT INTO `gudang` (`id`, `nama_gudang`, `tipe`, `alamat`, `nama_pemilik`, `luas`, `created_at`, `updated_at`) VALUES
	(1, 'SWIF Smart Warehouse', 'Gudang Pribadi', 'Jl.Merak No 241, Desa Sekarmulya, Kota Bandung', 'SWIF Team - Group 3', '10m x 15m', '2024-05-24 04:46:31', '2024-05-24 07:28:38');

-- Dumping structure for table swif_warehouse.kategoris
CREATE TABLE IF NOT EXISTS `kategoris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.kategoris: ~6 rows (approximately)
INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
	(1, 'Pecah Belah', '2024-05-12 22:19:31', '2024-05-12 22:19:31'),
	(2, 'Minuman', '2024-05-13 00:12:23', '2024-05-13 00:12:23'),
	(3, 'Makanan', '2024-05-18 23:23:10', '2024-05-18 23:23:10'),
	(4, 'Perkakas', '2024-05-12 15:19:31', '2024-05-12 15:19:31'),
	(7, 'Elektronik', '2024-05-21 19:23:18', '2024-05-21 19:23:18'),
	(8, 'Alat Tulis Kantor', '2024-06-03 06:30:37', '2024-06-03 06:30:37');

-- Dumping structure for table swif_warehouse.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.migrations: ~10 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2014_10_12_000000_create_users_table', 1),
	(14, '2014_10_12_100000_create_password_resets_table', 1),
	(15, '2019_08_19_000000_create_failed_jobs_table', 1),
	(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(19, '2024_05_05_081646_create_barangs_table', 2),
	(20, '2024_05_05_082559_create_kategoris_table', 2),
	(21, '2024_05_05_084545_create_records_table', 2),
	(22, '2024_05_22_095718_create_shipment_t_able', 3),
	(23, '2024_05_22_104851_create_shipmentdetails_table', 3),
	(24, '2024_05_23_191651_create_gudang_table', 4);

-- Dumping structure for table swif_warehouse.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.password_resets: ~0 rows (approximately)

-- Dumping structure for table swif_warehouse.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table swif_warehouse.records
CREATE TABLE IF NOT EXISTS `records` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brg_id` int NOT NULL DEFAULT '0',
  `kat_id` int DEFAULT NULL,
  `uname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proses` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.records: ~22 rows (approximately)
INSERT INTO `records` (`id`, `brg_id`, `kat_id`, `uname`, `supplier`, `stok`, `proses`, `created_at`, `updated_at`) VALUES
	(1, 23, 1, 'ridlo', 'PT.Keramikas', '-100', 'UPDATE STOK', '2024-05-20 00:36:11', '2024-05-20 00:36:11'),
	(2, 26, 3, 'ridlo', 'PT.Wings Indonesia', '+250', 'TAMBAH STOK', '2024-05-20 00:43:51', '2024-05-20 00:43:51'),
	(3, 4, 1, 'ridlo', 'PT.Keramikas', '-0', 'UPDATE SUPPLIER', '2024-05-20 00:46:51', '2024-05-20 00:46:51'),
	(4, 4, 1, 'ridlo', 'PT.Keramikas', '-0', 'UPDATE MEREK', '2024-05-20 00:48:06', '2024-05-20 00:48:06'),
	(5, 27, 2, 'ridlo', 'PT.Wings Indonesia', '+50', 'TAMBAH STOK', '2024-05-20 00:49:09', '2024-05-20 00:49:09'),
	(7, 23, 1, 'ridlo', 'PT.Keramikas', '-0', 'UPDATE MEREK', '2024-05-20 00:58:42', '2024-05-20 00:58:42'),
	(8, 25, 3, 'ridlo', 'PT.SedapRasa', '-0', 'UPDATE MEREK', '2024-05-20 01:06:29', '2024-05-20 01:06:29'),
	(9, 26, 3, 'ridlo', 'PT.Wings Indonesia', '-0', 'UPDATE MEREK', '2024-05-20 01:07:14', '2024-05-20 01:07:14'),
	(10, 28, 1, 'ridlo', 'PT Keramikas', '+250', 'TAMBAH STOK', '2024-05-20 01:15:11', '2024-05-20 01:15:11'),
	(11, 29, 3, 'ridlo', 'PT.Wings Indonesia', '+50', 'TAMBAH STOK', '2024-05-20 01:17:17', '2024-05-20 01:17:17'),
	(12, 30, 3, 'ridlo', 'PT.Indofood', '+50', 'TAMBAH STOK', '2024-05-20 01:50:09', '2024-05-20 01:50:09'),
	(13, 30, 3, 'ridlo', 'PT.Indofood', '-0', 'UPDATE MEREK', '2024-05-20 01:51:31', '2024-05-20 01:51:31'),
	(14, 31, 7, 'ridlo', 'PT.HoweelPowel Indonesia', '+50', 'TAMBAH STOK', '2024-05-21 19:24:14', '2024-05-21 19:24:14'),
	(15, 32, 3, 'ridlo', 'PT.Indofood', '+350', 'TAMBAH STOK', '2024-05-21 19:33:52', '2024-05-21 19:33:52'),
	(16, 32, 3, 'ridlo', 'PT.Indofood', '-0', 'UPDATE SUPPLIER', '2024-05-22 02:40:14', '2024-05-22 02:40:14'),
	(17, 25, 3, 'ridlo', 'PT.SedapRasa', '-0', 'UPDATE MEREK', '2024-05-26 14:47:14', '2024-05-26 14:47:14'),
	(18, 32, 3, 'ridlo', 'PT.Indofood', '-0', 'UPDATE MEREK', '2024-05-26 14:50:32', '2024-05-26 14:50:32'),
	(25, 39, 7, 'ridlo', 'PT.Vivo Indonesia', '+250', 'TAMBAH STOK', '2024-06-03 06:18:25', '2024-06-03 06:18:25'),
	(26, 40, 8, 'ridlo', 'Sinar Dunia', '+350', 'TAMBAH STOK', '2024-06-03 06:48:07', '2024-06-03 06:48:07'),
	(27, 4, 1, 'ridlo', 'PT.Keramikas', '-50', 'KIRIM BARANG', '2024-06-03 07:24:36', '2024-06-03 07:24:36'),
	(28, 1, 1, 'ridlo', 'PT.Wings Indonesia', '-0', 'UPDATE MEREK', '2024-06-10 17:33:09', '2024-06-10 17:33:09'),
	(29, 2, 1, 'ridlo', 'PT.Keramikas', '-150', 'HAPUS STOK', '2024-06-10 17:40:48', '2024-06-10 17:40:48');

-- Dumping structure for table swif_warehouse.shipment
CREATE TABLE IF NOT EXISTS `shipment` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `invoice_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gdg_id` int NOT NULL,
  `staff_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.shipment: ~6 rows (approximately)
INSERT INTO `shipment` (`id`, `invoice_id`, `gdg_id`, `staff_id`, `created_at`, `updated_at`) VALUES
	(1, 'INV000001', 1, 1, '2024-05-25 14:21:17', '2024-05-25 14:21:17'),
	(2, 'INV000002', 1, 1, '2024-05-26 10:18:58', '2024-05-26 10:18:58'),
	(3, 'INV000003', 1, 1, '2024-06-03 07:22:08', '2024-06-03 07:22:08'),
	(4, 'INV000004', 1, 1, '2024-06-03 07:24:36', '2024-06-03 07:24:36'),
	(6, 'INV000005', 1, 1, '2024-06-10 19:00:56', '2024-06-10 19:00:56'),
	(7, 'INV000007', 1, 1, '2024-06-21 09:01:32', '2024-06-21 09:01:32');

-- Dumping structure for table swif_warehouse.shipmentdetails
CREATE TABLE IF NOT EXISTS `shipmentdetails` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `shipor_id` int NOT NULL DEFAULT '0',
  `brg_id` int NOT NULL,
  `penerima` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp_penerima` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_kirim` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int NOT NULL,
  `status` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.shipmentdetails: ~6 rows (approximately)
INSERT INTO `shipmentdetails` (`id`, `shipor_id`, `brg_id`, `penerima`, `notelp_penerima`, `alamat_kirim`, `jumlah`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 22, 'Hudang Janesta', '084635462711', 'Rue des Goujons 152', 5, 'Dikirim', '2024-05-25 14:21:17', '2024-06-03 05:17:26'),
	(2, 2, 1, 'Tukul Arwana', '089463728124', 'Jln. Merpati No 03 Kota Sukajadi', 10, 'Selesai', '2024-05-26 10:18:58', '2024-06-03 05:17:44'),
	(3, 3, 7, 'Hilda Amalia', '082113485673', 'Perum. Jukiarti Tirtayasa No.12', 25, 'Dikirim', '2024-06-03 07:22:08', '2024-06-09 15:34:22'),
	(4, 4, 21, 'Hilda Amalia', '083175846372', 'Perum. Ageng Tirtayasa no 12', 50, 'Diproses', '2024-06-03 07:24:36', '2024-06-03 07:24:36'),
	(5, 6, 22, 'Yudha Adhistira', '082453762718', 'Perum Mataram Indah No 14 Sukasari', 15, 'Diproses', '2024-06-10 19:00:56', '2024-06-10 19:00:56'),
	(6, 7, 2, 'Azalia \'Jennie\' Supercool', '0821647382912', 'Kota Bandung', 10, 'Diproses', '2024-06-21 09:01:32', '2024-06-21 09:01:32');

-- Dumping structure for table swif_warehouse.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_uname_unique` (`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table swif_warehouse.users: ~6 rows (approximately)
INSERT INTO `users` (`id`, `uname`, `password`, `nama_lengkap`, `notelp`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'ridlo', '$2y$10$hSu3XOfAFWpban0h6L5K..9dkoI4iWwJdF.KAq8Ka1DzJOFaQzfQe', 'Akhmad Ridlo', '082122941060', 'SuperAdmin', '2024-05-05 04:40:56', '2024-05-05 04:40:56'),
	(2, 'reni', '$2y$10$kS/GeI9CidtQj7aLeUt6MOY9Nd/EGwRuCoS66Mipyn5SEeYGCpk96', 'Renita Aulia', '081257463829', 'Admin', '2024-05-05 05:29:36', '2024-05-05 05:29:36'),
	(3, 'ika', '$2y$10$e2s.xcspdcZK09Li405uruAwzL/l6CPHVDUwZXbAE6A9qQ7i7AH9W', 'Ika Sentosa', '081354627584', 'Admin', '2024-05-05 05:31:25', '2024-05-05 05:31:25'),
	(4, 'awa', '$2y$10$CCWWHvrT6L5Kl1VY.8g45u75qRjqKrZTPGVBJjm.co7czqRva65Rm', 'Awaaa', '081265743829', 'Admin', '2024-05-05 05:34:00', '2024-05-05 05:34:00'),
	(5, 'azel', '$2y$10$Gu2dzXw9a3w1fZIcBXOA7u1GOUbsA5ImJkOsQWwpOQ.1Q0ghhZATa', 'azalia', '083164753826', 'Admin', '2024-05-05 23:56:20', '2024-05-05 23:56:20'),
	(6, 'alhan', '$2y$10$rcFr9EO5CrBMtcb7xDipD.JytXeCWG1LVumUPtVP2w8PJp8KWj6Iy', 'Alhan Husein', '081276853946', 'Admin', '2024-05-06 02:17:38', '2024-06-21 14:23:14');

-- Dumping structure for trigger swif_warehouse.shipmentdetails_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='';
DELIMITER //
CREATE TRIGGER `shipmentdetails_after_insert` AFTER INSERT ON `shipmentdetails` FOR EACH ROW BEGIN
    UPDATE barangs 
	 SET stok = stok - NEW.jumlah 
	 WHERE id = NEW.brg_id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
