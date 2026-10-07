-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_umkm
CREATE DATABASE IF NOT EXISTS `db_umkm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_umkm`;

-- Dumping structure for table db_umkm.data_bobot
CREATE TABLE IF NOT EXISTS `data_bobot` (
  `id_bobot` int NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(50) DEFAULT NULL,
  `nama_kriteria` varchar(50) DEFAULT NULL,
  `nama_bobot` varchar(50) DEFAULT NULL,
  `nilai_bobot` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_bobot`),
  KEY `FK_data_bobot_data_kriteria` (`kode_kriteria`),
  KEY `FK_data_bobot_data_kriteria_2` (`nama_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_umkm.data_bobot: ~14 rows (approximately)
INSERT INTO `data_bobot` (`id_bobot`, `kode_kriteria`, `nama_kriteria`, `nama_bobot`, `nilai_bobot`) VALUES
	(1, 'K1', 'Inisiatif', 'Cost', 5),
	(2, 'K2', 'Kepatuhan', 'Cost', 5),
	(3, 'K3', 'Pengetahuan dan Keterampilan', 'Cost', 5),
	(4, 'K4', 'Komunikasi dan Kerjasama', 'Benefit', 15),
	(5, 'K5', 'Kepemimpinan', 'Cost', 5),
	(6, 'K6', 'Tanggung Jawab', 'Cost', 10),
	(7, 'K7', 'Hasil Pekerjaan', 'Benefit', 15),
	(8, 'K8', 'Disiplin Kerja', 'Cost', 5),
	(9, 'K9', 'Pemecahan Masalah', 'Benefit', 15),
	(10, 'K10', 'Loyalitas', 'Cost', 5),
	(11, 'K11', 'Absensi', 'Benefit', 15),
	(14, 'C14', 'Jumlah Pekerja', 'Cost', 14),
	(23, 'C15', 'Kinerja akhir', 'Cost', 2);

-- Dumping structure for table db_umkm.data_karyawan
CREATE TABLE IF NOT EXISTS `data_karyawan` (
  `id_karyawan` int NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `devisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`) USING BTREE,
  KEY `devisi` (`devisi`),
  KEY `nama_karyawan` (`nama_karyawan`),
  CONSTRAINT `FK_data_karyawan_jenis_usaha` FOREIGN KEY (`devisi`) REFERENCES `jenis_usaha` (`devisi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_umkm.data_karyawan: ~3 rows (approximately)
INSERT INTO `data_karyawan` (`id_karyawan`, `nama_karyawan`, `devisi`, `kelamin`, `tanggal_lahir`, `alamat`, `agama`) VALUES
	(1, 'Sri Rosmawati', 'Keuangan', 'Perempuan', '1993-11-19', 'Jakarta', 'Islam'),
	(2, 'Agus', 'Keuangan', 'Laki-laki', '1995-09-23', 'Jakarta', 'Islam'),
	(3, 'Renaldi', 'Keuangan', 'Laki-laki', '1999-08-02', 'Jakarta', 'Islam');

-- Dumping structure for table db_umkm.data_kriteria
CREATE TABLE IF NOT EXISTS `data_kriteria` (
  `id_kriteria` int NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(50) NOT NULL DEFAULT '',
  `nama_kriteria` varchar(50) DEFAULT NULL,
  `nilai_kriteria` int DEFAULT NULL,
  `tipe_kriteria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`),
  KEY `kode_kriteria` (`kode_kriteria`),
  KEY `nama_kriteria` (`nama_kriteria`),
  KEY `FK_data_kriteria_skala` (`nilai_kriteria`),
  CONSTRAINT `FK_data_kriteria_data_bobot` FOREIGN KEY (`kode_kriteria`) REFERENCES `data_bobot` (`kode_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_kriteria_data_bobot_2` FOREIGN KEY (`nama_kriteria`) REFERENCES `data_bobot` (`nama_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_data_kriteria_skala` FOREIGN KEY (`nilai_kriteria`) REFERENCES `skala` (`id_skala`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_umkm.data_kriteria: ~25 rows (approximately)
INSERT INTO `data_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `nilai_kriteria`, `tipe_kriteria`) VALUES
	(1, 'K1', 'Inisiatif', 1, 'Kurang Sekali'),
	(2, 'K1', 'Inisiatif', 2, 'Kurang'),
	(3, 'K1', 'Inisiatif', 3, 'Cukup'),
	(4, 'K1', 'Inisiatif', 4, 'Baik'),
	(5, 'K1', 'Inisiatif', 5, 'Baik Sekali'),
	(6, 'K2', 'Kepatuhan', 1, 'Kurang Sekali'),
	(7, 'K2', 'Kepatuhan', 2, 'Kurang'),
	(8, 'K2', 'Kepatuhan', 3, 'Cukup'),
	(9, 'K2', 'Kepatuhan', 4, 'Baik'),
	(10, 'K2', 'Kepatuhan', 5, 'Baik Sekali'),
	(11, 'K3', 'Pengetahuan dan Keterampilan', 1, 'Kurang Sekali'),
	(12, 'K3', 'Pengetahuan dan Keterampilan', 2, 'Kurang'),
	(13, 'K3', 'Pengetahuan dan Keterampilan', 3, 'Cukup'),
	(14, 'K3', 'Pengetahuan dan Keterampilan', 4, 'Baik'),
	(15, 'K3', 'Pengetahuan dan Keterampilan', 5, 'Baik Sekali'),
	(16, 'K4', 'Komunikasi dan Kerjasama', 1, 'Kurang Sekali'),
	(17, 'K4', 'Komunikasi dan Kerjasama', 2, 'Kurang'),
	(18, 'K4', 'Komunikasi dan Kerjasama', 3, 'Cukup'),
	(19, 'K4', 'Komunikasi dan Kerjasama', 4, 'Baik'),
	(20, 'K4', 'Komunikasi dan Kerjasama', 5, 'Baik Sekali'),
	(21, 'K5', 'Kepemimpinan', 1, 'Kurang Sekali'),
	(22, 'K5', 'Kepemimpinan', 2, 'Kurang'),
	(23, 'K5', 'Kepemimpinan', 3, 'Cukup'),
	(24, 'K5', 'Kepemimpinan', 4, 'Baik'),
	(25, 'K5', 'Kepemimpinan', 5, 'Baik Sekali');

-- Dumping structure for table db_umkm.jenis_usaha
CREATE TABLE IF NOT EXISTS `jenis_usaha` (
  `id_usaha` int NOT NULL AUTO_INCREMENT,
  `devisi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_usaha`) USING BTREE,
  KEY `devisi` (`devisi`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_umkm.jenis_usaha: ~10 rows (approximately)
INSERT INTO `jenis_usaha` (`id_usaha`, `devisi`) VALUES
	(12, 'Administrasi'),
	(4, 'HRD'),
	(1, 'Keuangan'),
	(11, 'Manager'),
	(15, 'orangnya'),
	(2, 'Pengembangan'),
	(3, 'Periklanan'),
	(17, 'Perkembangan'),
	(18, 'Perkembangan'),
	(14, 'SDA karyawan'),
	(20, 'SDM');

-- Dumping structure for table db_umkm.matrik_keputusan
CREATE TABLE IF NOT EXISTS `matrik_keputusan` (
  `id_matriks` int NOT NULL AUTO_INCREMENT,
  `id_alternatif` int DEFAULT NULL,
  `id_bobot` int DEFAULT NULL,
  `id_skala` int DEFAULT NULL,
  PRIMARY KEY (`id_matriks`) USING BTREE,
  KEY `FK_matrik_keputusan_alternatif` (`id_alternatif`) USING BTREE,
  KEY `FK_matrik_keputusan_data_bobot` (`id_bobot`) USING BTREE,
  KEY `FK_matrik_keputusan_skala` (`id_skala`) USING BTREE,
  CONSTRAINT `FK_matrik_keputusan_bobot` FOREIGN KEY (`id_bobot`) REFERENCES `data_bobot` (`id_bobot`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_matrik_keputusan_karyawan` FOREIGN KEY (`id_alternatif`) REFERENCES `data_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_umkm.matrik_keputusan: ~34 rows (approximately)
INSERT INTO `matrik_keputusan` (`id_matriks`, `id_alternatif`, `id_bobot`, `id_skala`) VALUES
	(1, 1, 1, 2),
	(2, 1, 2, 1),
	(3, 1, 3, 2),
	(4, 1, 4, 2),
	(5, 1, 5, 4),
	(6, 1, 6, 5),
	(7, 1, 7, 2),
	(8, 1, 8, 3),
	(9, 1, 9, 4),
	(10, 1, 10, 1),
	(11, 1, 11, 1),
	(12, 2, 1, 3),
	(46, 2, 2, 5),
	(47, 2, 3, 4),
	(48, 2, 4, 1),
	(49, 2, 5, 2),
	(50, 2, 6, 3),
	(51, 2, 7, 4),
	(52, 2, 8, 5),
	(53, 2, 9, 2),
	(54, 2, 10, 1),
	(55, 2, 11, 1),
	(57, 3, 1, 1),
	(58, 3, 2, 3),
	(59, 3, 3, 1),
	(60, 3, 4, 2),
	(61, 3, 5, 3),
	(62, 3, 6, 4),
	(63, 3, 7, 5),
	(64, 3, 8, 2),
	(65, 3, 9, 1),
	(66, 3, 10, 2),
	(67, 3, 11, 2),
	(75, NULL, 23, 4);

-- Dumping structure for view db_umkm.nilai_min_max
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `nilai_min_max` (
	`id_bobot` INT NULL,
	`nama_bobot` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nama_kriteria` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nilai_min` INT NULL,
	`nilai_max` INT NULL
) ENGINE=MyISAM;

-- Dumping structure for view db_umkm.normalisasi_saw
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `normalisasi_saw` (
	`id_alternatif` INT NULL,
	`nama_karyawan` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`id_bobot` INT NULL,
	`nama_kriteria` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nama_bobot` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nilai_min` INT NULL,
	`nilai_max` INT NULL,
	`nilai_asli` INT NULL,
	`nilai_normalisasi` DECIMAL(13,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view db_umkm.praranking_saw
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `praranking_saw` (
	`id_alternatif` INT NULL,
	`nama_karyawan` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`id_bobot` INT NULL,
	`nama_bobot` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nama_kriteria` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nilai_min` INT NULL,
	`nilai_max` INT NULL,
	`nilai_asli` INT NULL,
	`nilai_normalisasi` DECIMAL(13,2) NULL,
	`nilai_praranking` DECIMAL(23,2) NULL
) ENGINE=MyISAM;

-- Dumping structure for view db_umkm.ranking_saw
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `ranking_saw` (
	`id_alternatif` INT NULL,
	`nama_karyawan` VARCHAR(1) NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nilai_preferensi` DECIMAL(45,2) NULL,
	`ranking` BIGINT UNSIGNED NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for table db_umkm.skala
CREATE TABLE IF NOT EXISTS `skala` (
  `id_skala` int NOT NULL AUTO_INCREMENT,
  `value` int DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_skala`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_umkm.skala: ~4 rows (approximately)
INSERT INTO `skala` (`id_skala`, `value`, `keterangan`) VALUES
	(1, 1, 'Kurang Baik'),
	(2, 2, 'Kurang'),
	(3, 3, 'Cukup'),
	(4, 4, 'Baik'),
	(5, 5, 'Baik Sekali');

-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `nilai_min_max`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `nilai_min_max` AS select `mk`.`id_bobot` AS `id_bobot`,`db`.`nama_bobot` AS `nama_bobot`,`db`.`nama_kriteria` AS `nama_kriteria`,min(`s`.`value`) AS `nilai_min`,max(`s`.`value`) AS `nilai_max` from ((`matrik_keputusan` `mk` join `skala` `s` on((`mk`.`id_skala` = `s`.`id_skala`))) join `data_bobot` `db` on((`mk`.`id_bobot` = `db`.`id_bobot`))) group by `mk`.`id_bobot`,`db`.`nama_bobot`,`db`.`nama_kriteria` order by `mk`.`id_bobot`;

-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `normalisasi_saw`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `normalisasi_saw` AS select `mk`.`id_alternatif` AS `id_alternatif`,`k`.`nama_karyawan` AS `nama_karyawan`,`mk`.`id_bobot` AS `id_bobot`,`b`.`nama_kriteria` AS `nama_kriteria`,`b`.`nama_bobot` AS `nama_bobot`,`mm`.`nilai_min` AS `nilai_min`,`mm`.`nilai_max` AS `nilai_max`,`s`.`value` AS `nilai_asli`,(case when (`b`.`nama_bobot` = 'Benefit') then round((`s`.`value` / `mm`.`nilai_max`),2) when (`b`.`nama_bobot` = 'Cost') then round((`mm`.`nilai_min` / `s`.`value`),2) else 0 end) AS `nilai_normalisasi` from ((((`matrik_keputusan` `mk` join `skala` `s` on((`mk`.`id_skala` = `s`.`id_skala`))) join `data_bobot` `b` on((`mk`.`id_bobot` = `b`.`id_bobot`))) join `data_karyawan` `k` on((`mk`.`id_alternatif` = `k`.`id_karyawan`))) join `nilai_min_max` `mm` on((`mk`.`id_bobot` = `mm`.`id_bobot`))) order by `mk`.`id_alternatif`,`mk`.`id_bobot`;

-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `praranking_saw`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `praranking_saw` AS select `mk`.`id_alternatif` AS `id_alternatif`,`k`.`nama_karyawan` AS `nama_karyawan`,`mk`.`id_bobot` AS `id_bobot`,`b`.`nama_bobot` AS `nama_bobot`,`b`.`nama_kriteria` AS `nama_kriteria`,`mm`.`nilai_min` AS `nilai_min`,`mm`.`nilai_max` AS `nilai_max`,`s`.`value` AS `nilai_asli`,(case when (`b`.`nama_bobot` = 'Benefit') then round((`s`.`value` / `mm`.`nilai_max`),2) when (`b`.`nama_bobot` = 'Cost') then round((`mm`.`nilai_min` / `s`.`value`),2) else 0 end) AS `nilai_normalisasi`,((case when (`b`.`nama_bobot` = 'Benefit') then round((`s`.`value` / `mm`.`nilai_max`),2) when (`b`.`nama_bobot` = 'Cost') then round((`mm`.`nilai_min` / `s`.`value`),2) else 0 end) * `b`.`nilai_bobot`) AS `nilai_praranking` from ((((`matrik_keputusan` `mk` join `skala` `s` on((`mk`.`id_skala` = `s`.`id_skala`))) join `data_bobot` `b` on((`mk`.`id_bobot` = `b`.`id_bobot`))) join `data_karyawan` `k` on((`mk`.`id_alternatif` = `k`.`id_karyawan`))) join `nilai_min_max` `mm` on((`mk`.`id_bobot` = `mm`.`id_bobot`))) order by `mk`.`id_alternatif`,`mk`.`id_bobot`;

-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `ranking_saw`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `ranking_saw` AS select `praranking`.`id_alternatif` AS `id_alternatif`,`praranking`.`nama_karyawan` AS `nama_karyawan`,sum(`praranking`.`nilai_praranking`) AS `nilai_preferensi`,rank() OVER (ORDER BY sum(`praranking`.`nilai_praranking`) desc )  AS `ranking` from `praranking_saw` `praranking` group by `praranking`.`id_alternatif`,`praranking`.`nama_karyawan` order by `ranking`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
