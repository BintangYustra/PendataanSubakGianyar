/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.32-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `user` (
	`id_user` int (5),
	`username` varchar (300),
	`password` varchar (300),
	`role` char (63),
	`nama_lengkap` varchar (300),
	`no_telp` int (15),
	`email` varchar (300)
); 
insert into `user` (`id_user`, `username`, `password`, `role`, `nama_lengkap`, `no_telp`, `email`) values('1','user1','123','Operator Input Update',NULL,NULL,NULL);
insert into `user` (`id_user`, `username`, `password`, `role`, `nama_lengkap`, `no_telp`, `email`) values('2','user2','123','Operator Verifikasi',NULL,NULL,NULL);
insert into `user` (`id_user`, `username`, `password`, `role`, `nama_lengkap`, `no_telp`, `email`) values('3','user3','123','Admin',NULL,NULL,NULL);
