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

-- Dumping data for table ds2017.category: ~5 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id_category`, `name`) VALUES
	(8, 'Almuerzos'),
	(7, 'Cafetería'),
	(6, 'Comida italiana'),
	(1, 'Platos de Mar'),
	(3, 'Platos internacionales'),
	(2, 'Platos típicos');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping data for table ds2017.dish: ~5 rows (approximately)
DELETE FROM `dish`;
/*!40000 ALTER TABLE `dish` DISABLE KEYS */;
INSERT INTO `dish` (`id_dish`, `id_restaurant`, `name`, `descripcion`, `ingredient`, `temp`, `img`, `id_category`, `id_type`) VALUES
	(1, 1, 'Bolón de verde', 'Rico bolón de verde bañado en salsa de queso', 'Verde, chicharrón, queso', 2, 'f2e76-bolon.jpg', 2, 1),
	(2, 1, 'Moros con pollo', 'Riquísimo moro con nuestra sazón secreta de la abuela acompañados de patacones y ensalada', 'Arroz, frijoles, pollo, verde, lechuga, tomate, ve', 2, 'abdf1-moro.jpg', 2, 2),
	(3, 1, 'Green chicken', 'Ensalada con pollo y patacones para los paladares más exigentes', 'Lechuga, tomate, queso, verde, pollo', 1, '529ea-greenchicken.jpg', 2, 2),
	(4, 2, 'Tarta de jamón y queso', 'Deliciosa tarta que puedes acompañar con un capuccino', 'Masa de harina blanca, huevos, jamón, queso', 0, 'dcbb7-tarta.jpg', 7, 5),
	(6, 2, 'Frappelate', 'Frappelate directo al alma', 'Leche, café, crema, canela en polvo', 0, 'ccd14-frappe.png', 7, 4);
/*!40000 ALTER TABLE `dish` ENABLE KEYS */;

-- Dumping data for table ds2017.lunch: ~0 rows (approximately)
DELETE FROM `lunch`;
/*!40000 ALTER TABLE `lunch` DISABLE KEYS */;
INSERT INTO `lunch` (`id_lunch`, `id_restaurant`, `date`) VALUES
	(1, 3, '2017-08-16'),
	(2, 3, '2017-08-20'),
	(3, 1, '2017-08-20');
/*!40000 ALTER TABLE `lunch` ENABLE KEYS */;

-- Dumping data for table ds2017.lunch_plates: ~3 rows (approximately)
DELETE FROM `lunch_plates`;
/*!40000 ALTER TABLE `lunch_plates` DISABLE KEYS */;
INSERT INTO `lunch_plates` (`id_lunch`, `id_plate`, `is_executive`) VALUES
	(1, 1, 0),
	(1, 2, 0),
	(1, 3, 0),
	(1, 4, 0),
	(2, 2, 0),
	(2, 5, 0),
	(2, 6, 1),
	(2, 15, 1),
	(3, 1, 1),
	(3, 4, 1),
	(3, 8, 0),
	(3, 9, 1),
	(3, 10, 0),
	(3, 13, 1);
/*!40000 ALTER TABLE `lunch_plates` ENABLE KEYS */;

-- Dumping data for table ds2017.lunch_price: ~4 rows (approximately)
DELETE FROM `lunch_price`;
/*!40000 ALTER TABLE `lunch_price` DISABLE KEYS */;
INSERT INTO `lunch_price` (`id_price`, `name`, `value`) VALUES
	(1, 'Estudiantil', 2.5),
	(2, 'Ejecutivo', 3),
	(3, 'Bebida ejecutivo', 0.5),
	(4, 'Postre', 0.75);
/*!40000 ALTER TABLE `lunch_price` ENABLE KEYS */;

-- Dumping data for table ds2017.order: ~0 rows (approximately)
DELETE FROM `order`;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping data for table ds2017.order_items: ~0 rows (approximately)
DELETE FROM `order_items`;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

-- Dumping data for table ds2017.plates: ~4 rows (approximately)
DELETE FROM `plates`;
/*!40000 ALTER TABLE `plates` DISABLE KEYS */;
INSERT INTO `plates` (`id_plate`, `name`, `type`) VALUES
	(1, 'Sopa de fideo', 0),
	(2, 'Arroz con menestra y carne asad', 1),
	(3, 'Quaker', 2),
	(4, 'Gelatina', 3),
	(5, 'Menestron de carne', 0),
	(6, 'Caldo de bola', 0),
	(7, 'Sopa de lenteja', 0),
	(8, 'Sopa de acelga', 0),
	(9, 'Arroz con pure y pollo apanado', 1),
	(10, 'Lomito saltado', 1),
	(11, 'Yapingacho', 1),
	(12, 'Lasana de carne', 1),
	(13, 'Jugo de naranja', 2),
	(14, 'Colada', 2),
	(15, 'Arroz con leche', 3),
	(16, 'Ensalada de frutas', 3);
/*!40000 ALTER TABLE `plates` ENABLE KEYS */;

-- Dumping data for table ds2017.rbac_group: ~3 rows (approximately)
DELETE FROM `rbac_group`;
/*!40000 ALTER TABLE `rbac_group` DISABLE KEYS */;
INSERT INTO `rbac_group` (`id_group`, `name`) VALUES
	(1, 'Administrator'),
	(2, 'Asistente'),
	(3, 'Usuario');
/*!40000 ALTER TABLE `rbac_group` ENABLE KEYS */;

-- Dumping data for table ds2017.restaurant: ~3 rows (approximately)
DELETE FROM `restaurant`;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
INSERT INTO `restaurant` (`id_restaurant`, `name`, `address`, `phone`, `owner`, `has_lunch`, `has_online`, `color`) VALUES
	(1, 'Pikeos de Neo', 'ESPOL. Patio de comidas de EDCOM', '099 130 5772', 'Chico TransESPOL', 1, 0, ''),
	(2, 'Sweet & Coffee', 'ESPOL. Diagonal al edificio de matemáticas', '046022900', 'Richard Peet', 0, 0, ''),
	(3, 'La Malicia', 'ESPOL. FSCH', '0986020515', 'Sanchez', 1, 1, '');
/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;

-- Dumping data for table ds2017.restaurant_assistants: ~5 rows (approximately)
DELETE FROM `restaurant_assistants`;
/*!40000 ALTER TABLE `restaurant_assistants` DISABLE KEYS */;
INSERT INTO `restaurant_assistants` (`id_restaurant`, `id_user`) VALUES
	(1, 2),
	(1, 4),
	(2, 2),
	(2, 6),
	(2, 7),
	(3, 2);
/*!40000 ALTER TABLE `restaurant_assistants` ENABLE KEYS */;

-- Dumping data for table ds2017.type: ~4 rows (approximately)
DELETE FROM `type`;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` (`id_type`, `name`) VALUES
	(1, 'Aperitivo'),
	(2, 'Plato Fuerte'),
	(4, 'Bebida'),
	(5, 'Postre');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;

-- Dumping data for table ds2017.user: ~9 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `name`, `last_name`, `username`, `email`, `password`, `id_group`) VALUES
	(1, 'Leonardo', 'Kuffo', 'lkuffo', 'lkuffo@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 1),
	(2, 'Fabricio', 'Layedra', 'flayedra', 'flayedra@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 2),
	(3, 'Madelyne', 'Velasco', 'mvelasco', 'mvelasco@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 1),
	(4, 'Jhonny', 'Pincay', 'jvpincay', 'jvpincay@espol.edu.ec', 'a494bfd29b0333678e84861e0bd71c23', 2),
	(5, 'Juanma ', 'Victoria', 'jvictoria', 'juanmavictoria@gmail.com', '9f2c150cd9dae9ab851b187ccaedaa55', 3),
	(6, 'José Luis', 'Masson', 'jlmasson', 'jlmasson@espol.edu.ec', '926e27eecdbc7a18858b3798ba99bddd', 2),
	(7, 'Rodrigo', 'Castro', 'rfcastro', 'rfcastro@espol.edu.ec', '2e247e2eb505c42b362e80ed4d05b078', 2),
	(8, 'Galo', 'Castillo', 'gadacast', 'gadacast@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 3),
	(9, 'Carmen', 'Vaca', 'cvaca', 'cvaca@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 3),
	(11, 'Rafael', 'Bonilla', 'rabonilla', 'rabonilla@fiec.espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 3);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
