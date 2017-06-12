/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP DATABASE IF EXISTS `ds2017`;
CREATE DATABASE IF NOT EXISTS `ds2017` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ds2017`;

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_category`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `dish` (
  `id_dish` int(11) NOT NULL AUTO_INCREMENT,
  `id_restaurant` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `ingredient` varchar(50) DEFAULT NULL,
  `temp` tinyint(4) DEFAULT NULL COMMENT '0: Frio, 1: Templado, 2:Frio',
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `rbac_group` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='rbac control for admins';

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id_restaurant` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  PRIMARY KEY (`id_restaurant`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `restaurant_assistants` (
  `id_restaurant` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_restaurant`,`id_user`),
  KEY `FK_restaurant_assistants_user` (`id_user`),
  CONSTRAINT `FK_restaurant_assistants_restaurant` FOREIGN KEY (`id_restaurant`) REFERENCES `restaurant` (`id_restaurant`),
  CONSTRAINT `FK_restaurant_assistants_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_group` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `mail` (`email`),
  KEY `FK_user_rbac_group` (`id_group`),
  CONSTRAINT `FK_user_rbac_group` FOREIGN KEY (`id_group`) REFERENCES `rbac_group` (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE `user_assistants` (
  `id_user` INT(11) NOT NULL,
  `full_name` VARCHAR(101) NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

DROP TABLE IF EXISTS `user_assistants`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_assistants` AS SELECT user.id_user, CONCAT(user.name, ' ', user.last_name) AS 'full_name' FROM user WHERE user.id_group = 2 ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
