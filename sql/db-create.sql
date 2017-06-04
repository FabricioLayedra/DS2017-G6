-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.23-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ds2017
DROP DATABASE IF EXISTS `ds2017`;
CREATE DATABASE IF NOT EXISTS `ds2017` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ds2017`;

-- Dumping structure for table ds2017.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `mail` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.category
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_category`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.dish
CREATE TABLE IF NOT EXISTS `dish` (
  `id_dish` int(11) NOT NULL AUTO_INCREMENT,
  `id_restaurant` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `temp` tinyint(4) DEFAULT NULL COMMENT '0: Frio, 1: Templado, 2:Frio',
  `type` tinyint(4) DEFAULT NULL COMMENT '0: Aperitito, 1:Plato Fuerte, 2:Postre',
  `published` date NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id_dish`),
  KEY `FK_dish_restaurant` (`id_restaurant`),
  KEY `FK_dish_category` (`id_category`),
  KEY `FK_dish_type` (`id_type`),
  CONSTRAINT `FK_dish_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  CONSTRAINT `FK_dish_restaurant` FOREIGN KEY (`id_restaurant`) REFERENCES `restaurant` (`id_restaurant`),
  CONSTRAINT `FK_dish_type` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.rbac_admin_group
CREATE TABLE IF NOT EXISTS `rbac_admin_group` (
  `id_admin` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`,`id_group`),
  KEY `FK_rbac_admin_grupo_rbac_grupo` (`id_group`),
  CONSTRAINT `FK_rbac_admin_grupo_admins` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  CONSTRAINT `FK_rbac_admin_grupo_rbac_grupo` FOREIGN KEY (`id_group`) REFERENCES `rbac_group` (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='rbac control for admins';

-- Data exporting was unselected.
-- Dumping structure for table ds2017.rbac_group
CREATE TABLE IF NOT EXISTS `rbac_group` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='rbac control for admins';

-- Data exporting was unselected.
-- Dumping structure for table ds2017.restaurant
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id_restaurant` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  PRIMARY KEY (`id_restaurant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.type
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
