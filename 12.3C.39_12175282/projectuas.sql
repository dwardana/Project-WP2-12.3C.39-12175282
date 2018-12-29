-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for projectuas
CREATE DATABASE IF NOT EXISTS `projectuas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projectuas`;

-- Dumping structure for table projectuas.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table projectuas.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT IGNORE INTO `admin` (`adminid`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table projectuas.memberin
CREATE TABLE IF NOT EXISTS `memberin` (
  `memberid` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL DEFAULT '0',
  `lastname` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `contactno` varchar(20) NOT NULL DEFAULT '0',
  `address` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table projectuas.memberin: ~0 rows (approximately)
/*!40000 ALTER TABLE `memberin` DISABLE KEYS */;
INSERT IGNORE INTO `memberin` (`memberid`, `firstname`, `lastname`, `email`, `contactno`, `address`) VALUES
	(1, 'Dirga', 'Wardana', 'dirgawardana@wardtec.com', '087771701275', 'Jakarta, ID');
/*!40000 ALTER TABLE `memberin` ENABLE KEYS */;

-- Dumping structure for table projectuas.memberout
CREATE TABLE IF NOT EXISTS `memberout` (
  `memberid` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL DEFAULT '0',
  `lastname` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `contactno` varchar(20) NOT NULL DEFAULT '0',
  `address` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table projectuas.memberout: ~0 rows (approximately)
/*!40000 ALTER TABLE `memberout` DISABLE KEYS */;
INSERT IGNORE INTO `memberout` (`memberid`, `firstname`, `lastname`, `email`, `contactno`, `address`) VALUES
	(11, 'Dirga', 'Wardana', 'dirgawardana@wardtec.com', '087701179273', 'Jakarta, ID');
/*!40000 ALTER TABLE `memberout` ENABLE KEYS */;

-- Dumping structure for view projectuas.memberviewin
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `memberviewin` (
	`memberid` INT(5) NOT NULL,
	`firstname` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`lastname` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`email` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`contactno` VARCHAR(20) NOT NULL COLLATE 'latin1_swedish_ci',
	`address` VARCHAR(100) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view projectuas.memberviewout
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `memberviewout` (
	`memberid` INT(5) NOT NULL,
	`firstname` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`lastname` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`email` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`contactno` VARCHAR(20) NOT NULL COLLATE 'latin1_swedish_ci',
	`address` VARCHAR(100) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view projectuas.memberviewin
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `memberviewin`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `memberviewin` AS SELECT memberid, firstname, lastname, email, contactno, address from memberin ;

-- Dumping structure for view projectuas.memberviewout
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `memberviewout`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `memberviewout` AS SELECT memberid, firstname, lastname, email, contactno, address from memberout ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
