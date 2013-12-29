-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.34 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-12-29 20:22:58
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for dboptic
CREATE DATABASE IF NOT EXISTS `dboptic` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dboptic`;


-- Dumping structure for table dboptic.tstaff
CREATE TABLE IF NOT EXISTS `tstaff` (
  `idStaff` int(11) NOT NULL AUTO_INCREMENT,
  `namaStaff` varchar(100) DEFAULT NULL,
  `username` varchar(18) DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `email_code` varchar(100) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `confirmed` int(11) DEFAULT NULL,
  `ip` varchar(32) DEFAULT NULL,
  `noKTP` varchar(100) DEFAULT NULL,
  `noTelepon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idStaff`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table dboptic.tstaff: ~0 rows (approximately)
/*!40000 ALTER TABLE `tstaff` DISABLE KEYS */;
INSERT INTO `tstaff` (`idStaff`, `namaStaff`, `username`, `password`, `email`, `email_code`, `time`, `confirmed`, `ip`, `noKTP`, `noTelepon`) VALUES
	(1, 'Adang Supriatna', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'adang.supriatna@gmail.com', '9871fd6f0fc710452717d5ec0443190171bc3b32', 1388165403, 1, '::1', '', '');
/*!40000 ALTER TABLE `tstaff` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
