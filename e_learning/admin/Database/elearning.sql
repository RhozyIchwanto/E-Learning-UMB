/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.3.15-MariaDB : Database - elearning
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`elearning` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `elearning`;

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mata_kuliah` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dosen` */

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id`,`nim`,`nama`,`alamat`,`age`,`email`,`prodi`) values 
(3,'123','Rhozy Ichwanto','ngawi','23','rhozy12@gmail.com','Sistem Informasi'),
(5,'1235','anggun','tangeran','24','asfae','asdffl');

/*Table structure for table `matakuliah` */

DROP TABLE IF EXISTS `matakuliah`;

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kodemk` varchar(11) DEFAULT NULL,
  `namamk` varchar(100) DEFAULT NULL,
  `sks` varchar(20) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matakuliah` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password`) values 
(1,'user',NULL,'$2y$10$muy9vJrbEFbtTDidoiZZw.azcZKx.3f2Ga7bp5r.qIL5iR.TTAIJe'),
(2,'admin',NULL,'$2y$10$C6cYn9bvD4TVSQNhnYeAJ.wabcuntKzRf3k2vSLRfAkYqqtK19CRG'),
(5,'rhozy','rhozy12@gmail.com','$2y$10$WxsrqCx3lztM3XVVYtdnxeKHGceiRL2CvSX8eFIYZsPwkjJcX3SEi'),
(6,'admin1','admin1@gmail.com','$2y$10$lJo/2oxFuJ/W3kEmY8o6euJevc9F2NHdzj/M8RtIZD8fQF.2EMlPS');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
