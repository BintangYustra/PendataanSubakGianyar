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

/*Table structure for table `ref_kabupaten` */

DROP TABLE IF EXISTS `ref_kabupaten`;

CREATE TABLE `ref_kabupaten` (
  `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kabupaten` varchar(50) NOT NULL,
  `kode_kabupaten` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_kabupaten`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_alamat_subak` */

DROP TABLE IF EXISTS `tb_alamat_subak`;

CREATE TABLE `tb_alamat_subak` (
  `id_alamat` int(5) NOT NULL AUTO_INCREMENT,
  `id_subak` int(5) DEFAULT NULL,
  `br_lingkungan_subak` varchar(50) DEFAULT NULL,
  `desa_subak` varchar(50) DEFAULT NULL,
  `kecamatan_subak` varchar(50) DEFAULT NULL,
  `kode_pos` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_alamat`),
  KEY `fk_alamat_subak` (`id_subak`),
  CONSTRAINT `fk_alamat_subak` FOREIGN KEY (`id_subak`) REFERENCES `tb_subak` (`id_subak`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_bantuan_pemerintah` */

DROP TABLE IF EXISTS `tb_bantuan_pemerintah`;

CREATE TABLE `tb_bantuan_pemerintah` (
  `id_bantuan_pemerintah` int(5) NOT NULL AUTO_INCREMENT,
  `id_palemahan` int(5) DEFAULT NULL,
  `nama_bantuan` varchar(100) DEFAULT NULL,
  `tahun_bantuan` date DEFAULT NULL,
  `nilai_rp_bantuan` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_bantuan_pemerintah`),
  KEY `fk_id_palemahan_bantuan_pemerintah` (`id_palemahan`),
  CONSTRAINT `fk_id_palemahan_bantuan_pemerintah` FOREIGN KEY (`id_palemahan`) REFERENCES `tb_palemahan` (`id_palemahan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_hama` */

DROP TABLE IF EXISTS `tb_hama`;

CREATE TABLE `tb_hama` (
  `id_hama` int(5) NOT NULL AUTO_INCREMENT,
  `id_palemahan` int(5) DEFAULT NULL,
  `nama_hama` text DEFAULT NULL,
  PRIMARY KEY (`id_hama`),
  KEY `fk_id_palemahan_hama` (`id_palemahan`),
  CONSTRAINT `fk_id_palemahan_hama` FOREIGN KEY (`id_palemahan`) REFERENCES `tb_palemahan` (`id_palemahan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_jenis_tanaman_pokok` */

DROP TABLE IF EXISTS `tb_jenis_tanaman_pokok`;

CREATE TABLE `tb_jenis_tanaman_pokok` (
  `id_jenis_tanaman_pokok` int(5) NOT NULL AUTO_INCREMENT,
  `id_palemahan` int(5) DEFAULT NULL,
  `jenis_tanaman_pokok` text DEFAULT NULL,
  PRIMARY KEY (`id_jenis_tanaman_pokok`),
  KEY `fk_id_palemahan_jenis_tanaman_pokok` (`id_palemahan`),
  CONSTRAINT `fk_id_palemahan_jenis_tanaman_pokok` FOREIGN KEY (`id_palemahan`) REFERENCES `tb_palemahan` (`id_palemahan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `batas_wilayah_subak_selatan` varchar(100) DEFAULT NULL,
  `batas_wilayah_subak_barat` varchar(100) DEFAULT NULL,
  `sumber_aliran_air_das` varchar(100) DEFAULT NULL,
  `jumlah_dam` int(2) DEFAULT NULL,
  `lokasi_dam` varchar(100) DEFAULT NULL,
  `jumlah_temukuaya` int(2) DEFAULT NULL,
  `lokasi_temukuaya` varchar(100) DEFAULT NULL,
  `masa_musim_tanam_pertahun` int(2) DEFAULT NULL,
  `tanaman_penyela` text DEFAULT NULL,
  `nama_hama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_palemahan`),
  KEY `fk_id_subak` (`id_subak`),
  CONSTRAINT `fk_id_subak` FOREIGN KEY (`id_subak`) REFERENCES `tb_subak` (`id_subak`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_pawongan` */

DROP TABLE IF EXISTS `tb_pawongan`;

CREATE TABLE `tb_pawongan` (
  `id_pawongan` int(5) NOT NULL AUTO_INCREMENT,
  `id_subak` int(5) DEFAULT NULL,
  `jumlah_krama_pemilik_lahan` int(2) DEFAULT NULL,
  `jumlah_krama_penyakap` int(2) DEFAULT NULL,
  `awig_awig` enum('Ada','Tidak Ada') DEFAULT NULL,
  `perarem` enum('Ada','Tidak Ada') DEFAULT NULL,
  `perarem_alih_fungsi` enum('Ada','Tidak Ada') DEFAULT NULL,
  PRIMARY KEY (`id_pawongan`),
  KEY `fk_pawongan_subak` (`id_subak`),
  CONSTRAINT `fk_pawongan_subak` FOREIGN KEY (`id_subak`) REFERENCES `tb_subak` (`id_subak`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_pawongan_nama_penyakap` */

DROP TABLE IF EXISTS `tb_pawongan_nama_penyakap`;

CREATE TABLE `tb_pawongan_nama_penyakap` (
  `id_pawongan_nama_penyakap` int(5) NOT NULL AUTO_INCREMENT,
  `id_pawongan` int(5) DEFAULT NULL,
  `nama_penyakap` varchar(100) DEFAULT NULL,
  `tingkat_pendidikan_penyakap` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pawongan_nama_penyakap`),
  KEY `fk_id_pawongan_pawongan_nama_penyakap` (`id_pawongan`),
  CONSTRAINT `fk_id_pawongan_pawongan_nama_penyakap` FOREIGN KEY (`id_pawongan`) REFERENCES `tb_pawongan` (`id_pawongan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_pawongan_nama_perarem` */

DROP TABLE IF EXISTS `tb_pawongan_nama_perarem`;

CREATE TABLE `tb_pawongan_nama_perarem` (
  `id_nama_perarem` int(5) NOT NULL AUTO_INCREMENT,
  `id_pawongan` int(5) DEFAULT NULL,
  `nama_perarem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_nama_perarem`),
  KEY `fk_id_pawongan_nama_perarem` (`id_pawongan`),
  CONSTRAINT `fk_id_pawongan_nama_perarem` FOREIGN KEY (`id_pawongan`) REFERENCES `tb_pawongan` (`id_pawongan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_perahyangan` */

DROP TABLE IF EXISTS `tb_perahyangan`;

CREATE TABLE `tb_perahyangan` (
  `id_perahyangan` int(5) NOT NULL AUTO_INCREMENT,
  `id_subak` int(5) DEFAULT NULL,
  `ketersediaan_pura_bedugul` enum('Ada','Tidak Ada') DEFAULT NULL,
  `pura_disungsung_oleh` enum('Satu Subak','Lebih Dari Satu Subak') DEFAULT NULL,
  `subak_penyungsung_lain` varchar(100) DEFAULT NULL,
  `alamat_pura_bedugul` varchar(100) DEFAULT NULL,
  `piodalan_wali_kali` int(2) DEFAULT NULL,
  `hari_piodalan` varchar(100) DEFAULT NULL,
  `jumlah_pelinggih` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_perahyangan`),
  KEY `fk_perahyangan_subak` (`id_subak`),
  CONSTRAINT `fk_perahyangan_subak` FOREIGN KEY (`id_subak`) REFERENCES `tb_subak` (`id_subak`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_perahyangan_aci` */

DROP TABLE IF EXISTS `tb_perahyangan_aci`;

CREATE TABLE `tb_perahyangan_aci` (
  `id_aci_aci` int(5) NOT NULL AUTO_INCREMENT,
  `id_perahyangan` int(5) DEFAULT NULL,
  `aci_aci` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_aci_aci`),
  KEY `fk_perahyangan_aci` (`id_perahyangan`),
  CONSTRAINT `fk_perahyangan_aci` FOREIGN KEY (`id_perahyangan`) REFERENCES `tb_perahyangan` (`id_perahyangan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_perahyangan_foto` */

DROP TABLE IF EXISTS `tb_perahyangan_foto`;

CREATE TABLE `tb_perahyangan_foto` (
  `id_foto` int(5) NOT NULL AUTO_INCREMENT,
  `id_perahyangan` int(5) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `fk_perahyangan_foto` (`id_perahyangan`),
  CONSTRAINT `fk_perahyangan_foto` FOREIGN KEY (`id_perahyangan`) REFERENCES `tb_perahyangan` (`id_perahyangan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_perahyangan_inventaris` */

DROP TABLE IF EXISTS `tb_perahyangan_inventaris`;

CREATE TABLE `tb_perahyangan_inventaris` (
  `id_inventaris` int(5) NOT NULL AUTO_INCREMENT,
  `id_perahyangan` int(5) DEFAULT NULL,
  `inventaris` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_inventaris`),
  KEY `fk_perahyangan` (`id_perahyangan`),
  CONSTRAINT `fk_perahyangan` FOREIGN KEY (`id_perahyangan`) REFERENCES `tb_perahyangan` (`id_perahyangan`) ON DELETE CASCADE ON UPDATE CASCADE
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
  `penyarikan_hp_wa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prajuru`),
  KEY `fk_prajuru_subak` (`id_subak`),
  CONSTRAINT `fk_prajuru_subak` FOREIGN KEY (`id_subak`) REFERENCES `tb_subak` (`id_subak`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_subak` */

DROP TABLE IF EXISTS `tb_subak`;

CREATE TABLE `tb_subak` (
  `id_subak` int(5) NOT NULL AUTO_INCREMENT,
  `nama_subak` varchar(50) DEFAULT NULL,
  `kriteria_subak` enum('Subak Basah','Subak Abian') DEFAULT NULL,
  `nomor_akte_notaris` int(11) DEFAULT NULL,
  `npwp` int(11) DEFAULT NULL,
  `verifikasi` enum('Belum Terverifikasi','Terverifikasi','Data Ditolak','Data Tidak Valid','Data Diperbarui') NOT NULL DEFAULT 'Belum Terverifikasi',
  `usul_saran_komentar` varchar(100) DEFAULT NULL,
  `komentar_verifikator` varchar(100) DEFAULT NULL,
  `dibuat_oleh` varchar(100) DEFAULT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT current_timestamp(),
  `diperbaharui_oleh` varchar(100) DEFAULT NULL,
  `diperbaharui_pada` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `diverifikasi_oleh` varchar(100) DEFAULT NULL,
  `diverifikasi_pada` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_subak`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `tb_tanaman_pokok` */

DROP TABLE IF EXISTS `tb_tanaman_pokok`;

CREATE TABLE `tb_tanaman_pokok` (
  `id_tanaman_pokok` int(5) NOT NULL AUTO_INCREMENT,
  `id_palemahan` int(5) DEFAULT NULL,
  `tanaman_pokok` text DEFAULT NULL,
  PRIMARY KEY (`id_tanaman_pokok`),
  KEY `fk_id_palemahan_tanaman_pokok` (`id_palemahan`),
  CONSTRAINT `fk_id_palemahan_tanaman_pokok` FOREIGN KEY (`id_palemahan`) REFERENCES `tb_palemahan` (`id_palemahan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('Operator Input Update','Operator Verifikasi','Admin','Tester') DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `no_telp` int(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `foto_profil` text DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
