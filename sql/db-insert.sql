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

-- Dumping data for table ds2017.admin: ~0 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`, `name`, `last_name`, `username`, `email`, `password`) VALUES
	(1, 'Madelyne', 'Velasco', 'mvelasco', 'mvelasco@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping data for table ds2017.category: ~0 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id_category`, `name`) VALUES
	(1, 'Platos de Mar'),
	(3, 'Platos internacionales'),
	(2, 'Platos típicos');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping data for table ds2017.dish: ~0 rows (approximately)
DELETE FROM `dish`;
/*!40000 ALTER TABLE `dish` DISABLE KEYS */;
/*!40000 ALTER TABLE `dish` ENABLE KEYS */;

-- Dumping data for table ds2017.rbac_admin_group: ~1 rows (approximately)
DELETE FROM `rbac_admin_group`;
/*!40000 ALTER TABLE `rbac_admin_group` DISABLE KEYS */;
INSERT INTO `rbac_admin_group` (`id_admin`, `id_group`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `rbac_admin_group` ENABLE KEYS */;

-- Dumping data for table ds2017.rbac_group: ~1 rows (approximately)
DELETE FROM `rbac_group`;
/*!40000 ALTER TABLE `rbac_group` DISABLE KEYS */;
INSERT INTO `rbac_group` (`id_group`, `name`) VALUES
	(1, 'Administrator');
/*!40000 ALTER TABLE `rbac_group` ENABLE KEYS */;

-- Dumping data for table ds2017.restaurant: ~0 rows (approximately)
DELETE FROM `restaurant`;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;

-- Dumping data for table ds2017.type: ~0 rows (approximately)
DELETE FROM `type`;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` (`id_type`, `name`) VALUES
	(1, 'Aperitivo'),
	(2, 'Plato Fuerte'),
	(3, 'Postre');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;

-- Dumping data for table ds2017.user: ~0 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
