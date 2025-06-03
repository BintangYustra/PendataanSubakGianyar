/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.32-MariaDB : Database - db_subak_abian_kab_gianyar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_subak_abian_kab_gianyar` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_subak_abian_kab_gianyar`;

/*Table structure for table `tb_aci_aci` */

DROP TABLE IF EXISTS `tb_aci_aci`;

CREATE TABLE `tb_aci_aci` (
  `id_aci_aci` int(5) NOT NULL AUTO_INCREMENT,
  `id_perahyangan` int(5) DEFAULT NULL,
  `aci_aci_subak` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_aci_aci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_alamat_subak` */

DROP TABLE IF EXISTS `tb_alamat_subak`;

CREATE TABLE `tb_alamat_subak` (
  `id_alamat` int(5) NOT NULL AUTO_INCREMENT,
  `id_subak` int(5) DEFAULT NULL,
  `br_lingkungan_subak` varchar(50) DEFAULT NULL,
  `desa_subak` varchar(50) DEFAULT NULL,
  `kecamatan_subak` varchar(50) DEFAULT NULL,
  `kabupaten_subak` varchar(50) DEFAULT NULL,
  `kode_pos` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_alamat`),
  KEY `fk_alamat` (`id_subak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_bantuan_pemerintah` */

DROP TABLE IF EXISTS `tb_bantuan_pemerintah`;

CREATE TABLE `tb_bantuan_pemerintah` (
  `id_bantuan_pemerintah` int(5) NOT NULL AUTO_INCREMENT,
  `id_palemahan` int(5) DEFAULT NULL,
  `nama_bantuan` varchar(100) DEFAULT NULL,
  `tahun_bantuan` date DEFAULT NULL,
  `nilai_rp_bantuan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_bantuan_pemerintah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_hama` */

DROP TABLE IF EXISTS `tb_hama`;

CREATE TABLE `tb_hama` (
  `id_hama` int(5) NOT NULL AUTO_INCREMENT,
  `id_palemahan` int(5) DEFAULT NULL,
  `nama_hama` text DEFAULT NULL,
  PRIMARY KEY (`id_hama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_inventaris` */

DROP TABLE IF EXISTS `tb_inventaris`;

CREATE TABLE `tb_inventaris` (
  `id_inventaris` int(5) NOT NULL AUTO_INCREMENT,
  `id_perahyangan_ada` int(5) DEFAULT NULL,
  `inventaris` text DEFAULT NULL,
  PRIMARY KEY (`id_inventaris`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_jenis_tanaman_pokok` */

DROP TABLE IF EXISTS `tb_jenis_tanaman_pokok`;

CREATE TABLE `tb_jenis_tanaman_pokok` (
  `id_jenis_tanaman_pokok` int(5) NOT NULL AUTO_INCREMENT,
  `id_palemahan` int(5) DEFAULT NULL,
  `jenis_tanaman_pokok` text DEFAULT NULL,
  PRIMARY KEY (`id_jenis_tanaman_pokok`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_palemahan` */

DROP TABLE IF EXISTS `tb_palemahan`;

CREATE TABLE `tb_palemahan` (
  `id_palemahan` int(5) NOT NULL AUTO_INCREMENT,
  `id_subak` int(5) DEFAULT NULL,
  `luas_lahan_awal_ha` int(11) DEFAULT NULL,
  `luas_lahan_sekarang_ha` int(11) DEFAULT NULL,
  `panjang_saluran_irigasi_tersier_ml` int(11) DEFAULT NULL,
  `panjang_jalan_usaha_tani_ml` int(11) DEFAULT NULL,
  `bale_timbang` enum('Ada','Tidak Ada') DEFAULT NULL,
  `batas_wilayah_subak_utara` varchar(100) DEFAULT NULL,
  `batas_wilayah_subak_timur` varchar(100) DEFAULT NULL,
  `batas_wilayah_subak_selatan` varbinary(100) DEFAULT NULL,
  `batas_wilayah_subak_barat` varchar(100) DEFAULT NULL,
  `sumber_aliran_air_das` varchar(100) DEFAULT NULL,
  `jumlah_dam` int(2) DEFAULT NULL,
  `lokasi_dam` varchar(100) DEFAULT NULL,
  `jumlah_temukuaya` int(2) DEFAULT NULL,
  `lokasi_temukuaya` varchar(100) DEFAULT NULL,
  `id_tanaman_pokok` int(5) DEFAULT NULL,
  `id_jenis_tanaman_pokok` int(5) DEFAULT NULL,
  `masa_musim_tanam_pertahun` int(2) DEFAULT NULL,
  `tanaman_penyela` text DEFAULT NULL,
  `id_hama` int(5) DEFAULT NULL,
  `id_bantuan_pemerintah` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_palemahan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_pawongan` */

DROP TABLE IF EXISTS `tb_pawongan`;

CREATE TABLE `tb_pawongan` (
  `id_pawongan` int(5) NOT NULL AUTO_INCREMENT,
  `id_subak` int(5) DEFAULT NULL,
  `jumlah_krama_pemilik_lahan` int(2) DEFAULT NULL,
  `jumlah_krama_penyakap` int(2) DEFAULT NULL,
  `nama_penyakap` varchar(50) DEFAULT NULL,
  `tingkat_pendidikan_penyakap` enum('Tidak Sekolah','SD','SMP','SMA/Sederajat','S1','S2','S3') DEFAULT NULL,
  `awig_awig` enum('Ada','Tidak Ada') DEFAULT NULL,
  `perarem` enum('Ada','Tidak Ada') DEFAULT NULL,
  `perarem_alih_fungsi` enum('Ada','Tidak Ada') DEFAULT NULL,
  `nama_perarem` text DEFAULT NULL,
  PRIMARY KEY (`id_pawongan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_perahyangan` */

DROP TABLE IF EXISTS `tb_perahyangan`;

CREATE TABLE `tb_perahyangan` (
  `id_perahyangan` int(5) NOT NULL AUTO_INCREMENT,
  `ketersediaan_pura_bedugul` enum('Ada','Tidak Ada') DEFAULT NULL,
  PRIMARY KEY (`id_perahyangan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_perahyangan_pura_bedugul_ada` */

DROP TABLE IF EXISTS `tb_perahyangan_pura_bedugul_ada`;

CREATE TABLE `tb_perahyangan_pura_bedugul_ada` (
  `id_pura_bedugul_ada` int(5) unsigned NOT NULL,
  `id_perahyangan` int(5) DEFAULT NULL,
  `nama_pura` varchar(100) DEFAULT NULL,
  `pura_bedugul_disungsung` enum('Satu Subak','Lebih dari Satu Subak') DEFAULT NULL,
  `pura_bedugul_disungsung_lain` varchar(100) DEFAULT NULL,
  `alamat_pura_bedugul` varchar(100) DEFAULT NULL,
  `piodalan_wali_pertahun` int(2) DEFAULT NULL,
  `hari_piodalan_wali` varchar(100) DEFAULT NULL,
  `jumlah_pelinggih` int(2) DEFAULT NULL,
  `id_inventaris` int(5) DEFAULT NULL,
  `foto_pura` text DEFAULT NULL,
  `id_aci_aci` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_pura_bedugul_ada`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_perahyangan_pura_bedugul_tidakada` */

DROP TABLE IF EXISTS `tb_perahyangan_pura_bedugul_tidakada`;

CREATE TABLE `tb_perahyangan_pura_bedugul_tidakada` (
  `id_perahyangan_pura_bedugul_tidakada` int(5) NOT NULL AUTO_INCREMENT,
  `id_perahyangan` int(5) DEFAULT NULL,
  `pura_bedugul_disungsung2` varchar(100) DEFAULT NULL,
  `pura_bedugul_disungsung_lain2` varchar(100) DEFAULT NULL,
  `alamat_pura_bedugul2` varchar(100) DEFAULT NULL,
  `piodalan_wali_pertahun2` int(2) DEFAULT NULL,
  `foto_pura2` text DEFAULT NULL,
  PRIMARY KEY (`id_perahyangan_pura_bedugul_tidakada`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_prajuru` */

DROP TABLE IF EXISTS `tb_prajuru`;

CREATE TABLE `tb_prajuru` (
  `id_prajuru` int(5) NOT NULL AUTO_INCREMENT,
  `id_subak` int(5) DEFAULT NULL,
  `masa_bhakti_ayahan_start` date DEFAULT NULL,
  `masa_bhakti_ayahan_end` date DEFAULT NULL,
  `pekaseh_nama` varchar(50) DEFAULT NULL,
  `pekaseh_npwp` int(11) DEFAULT NULL,
  `pekaseh_hp_wa` int(11) DEFAULT NULL,
  `petajuh_nama` varchar(50) DEFAULT NULL,
  `petajuh_npwp` int(11) DEFAULT NULL,
  `petajuh_hp_wa` int(11) DEFAULT NULL,
  `penyarikan_nama` varchar(50) DEFAULT NULL,
  `penyarikan_npwp` int(11) DEFAULT NULL,
  `penyarikan_wa_hp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prajuru`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_subak` */

DROP TABLE IF EXISTS `tb_subak`;

CREATE TABLE `tb_subak` (
  `id_subak` int(5) NOT NULL AUTO_INCREMENT,
  `nama_subak` varchar(50) DEFAULT NULL,
  `kriteria_subak` enum('Subak Basah','Subak Abian') DEFAULT NULL,
  `nomor_akte_notaris` int(11) DEFAULT NULL,
  `npwp` int(11) DEFAULT NULL,
  `verifikasi` enum('Terverifikasi','Belum Terverifikasi','Data Ditolak') DEFAULT 'Belum Terverifikasi',
  PRIMARY KEY (`id_subak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_tanaman_pokok` */

DROP TABLE IF EXISTS `tb_tanaman_pokok`;

CREATE TABLE `tb_tanaman_pokok` (
  `id_tanaman_pokok` int(5) NOT NULL AUTO_INCREMENT,
  `tanaman_pokok` text DEFAULT NULL,
  PRIMARY KEY (`id_tanaman_pokok`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('InputData','VerifikasiData') DEFAULT NULL,
  `nama_username` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
