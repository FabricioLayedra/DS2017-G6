-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.2.6-MariaDB - mariadb.org binary distribution
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

-- Dumping structure for table ds2017.category
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_category`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.dish
CREATE TABLE IF NOT EXISTS `dish` (
  `id_dish` int(11) NOT NULL AUTO_INCREMENT,
  `id_restaurant` int(11) NOT NULL DEFAULT 0,
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.lunch
CREATE TABLE IF NOT EXISTS `lunch` (
  `id_lunch` int(11) NOT NULL AUTO_INCREMENT,
  `id_restaurant` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id_lunch`),
  KEY `FK_lunch_restaurant` (`id_restaurant`),
  CONSTRAINT `FK_lunch_restaurant` FOREIGN KEY (`id_restaurant`) REFERENCES `restaurant` (`id_restaurant`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.lunch_plates
CREATE TABLE IF NOT EXISTS `lunch_plates` (
  `id_lunch` int(11) NOT NULL,
  `id_plate` int(11) NOT NULL,
  `is_executive` int(11) NOT NULL DEFAULT 0 COMMENT '0: No, 1: SI',
  PRIMARY KEY (`id_lunch`,`id_plate`),
  KEY `FK__plates` (`id_plate`),
  CONSTRAINT `FK__lunch` FOREIGN KEY (`id_lunch`) REFERENCES `lunch` (`id_lunch`),
  CONSTRAINT `FK__plates` FOREIGN KEY (`id_plate`) REFERENCES `plates` (`id_plate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.lunch_price
CREATE TABLE IF NOT EXISTS `lunch_price` (
  `id_price` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `value` double DEFAULT NULL,
  PRIMARY KEY (`id_price`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.order
CREATE TABLE IF NOT EXISTS `order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pickup_init` time DEFAULT NULL,
  `pickup_expire` time DEFAULT NULL,
  `payment_type` tinyint(4) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `FK_order_user` (`user_id`),
  CONSTRAINT `FK_order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.order_items
CREATE TABLE IF NOT EXISTS `order_items` (
  `id_order` int(11) NOT NULL,
  `id_lunch` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_soup` int(11) DEFAULT NULL,
  `id_second` int(11) DEFAULT NULL,
  `id_dessert` int(11) DEFAULT NULL,
  `id_drink` int(11) DEFAULT NULL,
  `is_executive` tinyint(4) DEFAULT 0 COMMENT '0: No, 1: Si',
  PRIMARY KEY (`id_order`,`id_lunch`,`date`),
  KEY `FK_order_items_lunch` (`id_lunch`),
  KEY `FK_order_items_plates` (`id_soup`),
  KEY `FK_order_items_plates_2` (`id_second`),
  KEY `FK_order_items_plates_3` (`id_dessert`),
  KEY `FK_order_items_plates_4` (`id_drink`),
  CONSTRAINT `FK_order_items_lunch` FOREIGN KEY (`id_lunch`) REFERENCES `lunch` (`id_lunch`),
  CONSTRAINT `FK_order_items_order` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  CONSTRAINT `FK_order_items_plates` FOREIGN KEY (`id_soup`) REFERENCES `plates` (`id_plate`),
  CONSTRAINT `FK_order_items_plates_2` FOREIGN KEY (`id_second`) REFERENCES `plates` (`id_plate`),
  CONSTRAINT `FK_order_items_plates_3` FOREIGN KEY (`id_dessert`) REFERENCES `plates` (`id_plate`),
  CONSTRAINT `FK_order_items_plates_4` FOREIGN KEY (`id_drink`) REFERENCES `plates` (`id_plate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.plates
CREATE TABLE IF NOT EXISTS `plates` (
  `id_plate` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '0: soup, 1: plate, 2:drink, 3:dessert',
  PRIMARY KEY (`id_plate`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.rbac_group
CREATE TABLE IF NOT EXISTS `rbac_group` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='rbac control for admins';

-- Data exporting was unselected.
-- Dumping structure for table ds2017.restaurant
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id_restaurant` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `has_lunch` tinyint(4) NOT NULL DEFAULT 0,
  `has_online` tinyint(4) NOT NULL DEFAULT 0,
  `color` varchar(7) NOT NULL DEFAULT '' COMMENT 'Hex format. Include # ',
  PRIMARY KEY (`id_restaurant`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.restaurant_assistants
CREATE TABLE IF NOT EXISTS `restaurant_assistants` (
  `id_restaurant` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_restaurant`,`id_user`),
  KEY `FK_restaurant_assistants_user` (`id_user`),
  CONSTRAINT `FK_restaurant_assistants_restaurant` FOREIGN KEY (`id_restaurant`) REFERENCES `restaurant` (`id_restaurant`),
  CONSTRAINT `FK_restaurant_assistants_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.type
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table ds2017.user
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for view ds2017.user_assistants
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `user_assistants` (
  `id_user` INT(11) NOT NULL,
  `full_name` VARCHAR(101) NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view ds2017.user_assistants
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `user_assistants`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `user_assistants` AS SELECT user.id_user, CONCAT(user.name, ' ', user.last_name) AS 'full_name' FROM user WHERE user.id_group = 2 ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
