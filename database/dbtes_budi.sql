/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.21-MariaDB : Database - dbtes_budi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbtes_budi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbtes_budi`;

/*Table structure for table `tbguru` */

DROP TABLE IF EXISTS `tbguru`;

CREATE TABLE `tbguru` (
  `kode_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`kode_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tbguru` */

insert  into `tbguru`(`kode_guru`,`nama_guru`,`alamat`,`telepon`) values 
(1,'Budi Setiawan','Cikupa - Tangerang','082298177066'),
(11,'Idham Mubarok','Curug -Tangerang','081234567890'),
(12,'Eko Aulian','Cirewet - Tangerang','081212123456'),
(15,'Serlina Utami','Curug - Tangerang','082222333444');

/*Table structure for table `tbkelas` */

DROP TABLE IF EXISTS `tbkelas`;

CREATE TABLE `tbkelas` (
  `kode_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(10) NOT NULL,
  `ruang` varchar(5) NOT NULL,
  PRIMARY KEY (`kode_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbkelas` */

insert  into `tbkelas`(`kode_kelas`,`nama_kelas`,`ruang`) values 
(1,'X IA','201'),
(2,'XI IA','202'),
(3,'XII IA','203'),
(5,'X IS','301'),
(6,'XI IS','302'),
(7,'XII IS','303');

/*Table structure for table `tbwalikelas` */

DROP TABLE IF EXISTS `tbwalikelas`;

CREATE TABLE `tbwalikelas` (
  `kode_walikelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(30) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `tahun_ajaran` int(4) NOT NULL,
  PRIMARY KEY (`kode_walikelas`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbwalikelas` */

insert  into `tbwalikelas`(`kode_walikelas`,`nama_guru`,`nama_kelas`,`tahun_ajaran`) values 
(4,'Budi Setiawan','XII IA',2019),
(5,'Idham Mubarok','XII IS',2019);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
