/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id_category`, `name`) VALUES
	(7, 'Cafetería'),
	(6, 'Comida italiana'),
	(1, 'Platos de Mar'),
	(3, 'Platos internacionales'),
	(2, 'Platos típicos');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

DELETE FROM `dish`;
/*!40000 ALTER TABLE `dish` DISABLE KEYS */;
INSERT INTO `dish` (`id_dish`, `id_restaurant`, `name`, `descripcion`, `ingredient`, `temp`, `img`, `id_category`, `id_type`) VALUES
	(1, 1, 'Bolón de verde', 'Rico bolón de verde bañado en salsa de queso', 'Verde, chicharrón, queso', 2, 'f2e76-bolon.jpg', 2, 1),
	(2, 1, 'Moros con pollo', 'Riquísimo moro con nuestra sazón secreta de la abuela acompañados de patacones y ensalada', 'Arroz, frijoles, pollo, verde, lechuga, tomate, ve', 2, 'abdf1-moro.jpg', 2, 2),
	(3, 1, 'Green chicken', 'Ensalada con pollo y patacones para los paladares más exigentes', 'Lechuga, tomate, queso, verde, pollo', 1, '529ea-greenchicken.jpg', 2, 2),
	(4, 2, 'Tarta de jamón y queso', 'Deliciosa tarta que puedes acompañar con un capuccino', 'Masa de harina blanca, huevos, jamón, queso', 1, 'dcbb7-tarta.jpg', 7, 5),
	(5, 2, 'Tartaleta de acelga', 'Querido Sweet & Coffee: Gracias por existir', 'Masa de harina blanca, queso, acelga', 2, '55f79-tartaleta.jpg', 7, 5),
	(6, 2, 'Frappelate', 'Frappelate directo al alma', 'Leche, café, crema, canela en polvo', 0, 'ccd14-frappe.png', 7, 4);
/*!40000 ALTER TABLE `dish` ENABLE KEYS */;

DELETE FROM `rbac_group`;
/*!40000 ALTER TABLE `rbac_group` DISABLE KEYS */;
INSERT INTO `rbac_group` (`id_group`, `name`) VALUES
	(1, 'Administrator'),
	(2, 'Asistente'),
	(3, 'Usuario');
/*!40000 ALTER TABLE `rbac_group` ENABLE KEYS */;

DELETE FROM `restaurant`;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
INSERT INTO `restaurant` (`id_restaurant`, `name`, `address`, `phone`, `owner`) VALUES
	(1, 'Pikeos de Neo', 'ESPOL. Patio de comidas de EDCOM', '099 130 5772', 'Chico TransESPOL'),
	(2, 'Sweet & Coffee', 'ESPOL. Diagonal al edificio de matemáticas', '046022900', 'Richard Peet');
/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;

DELETE FROM `restaurant_assistants`;
/*!40000 ALTER TABLE `restaurant_assistants` DISABLE KEYS */;
INSERT INTO `restaurant_assistants` (`id_restaurant`, `id_user`) VALUES
	(1, 2),
	(2, 2),
	(2, 6);
/*!40000 ALTER TABLE `restaurant_assistants` ENABLE KEYS */;

DELETE FROM `type`;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` (`id_type`, `name`) VALUES
	(1, 'Aperitivo'),
	(2, 'Plato Fuerte'),
	(4, 'Bebida'),
	(5, 'Postre');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;

DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `name`, `last_name`, `username`, `email`, `password`, `id_group`) VALUES
	(1, 'Leonardo', 'Kuffo', 'lkuffo', 'lkuffo@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 1),
	(2, 'Fabricio', 'Layedra', 'flayedra', 'flayedra@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 2),
	(3, 'Madelyne', 'Velasco', 'mvelasco', 'mvelasco@espol.edu.ec', '21232f297a57a5a743894a0e4a801fc3', 1),
	(4, 'Jhonny', 'Pincay', 'jvpincay', 'jvpincay@espol.edu.ec', 'a494bfd29b0333678e84861e0bd71c23', 3),
	(5, 'Juanma ', 'Victoria', 'jvictoria', 'juanmavictoria@gmail.com', '9f2c150cd9dae9ab851b187ccaedaa55', 3),
	(6, 'José Luis', 'Masson', 'jlmasson', 'jlmasson@espol.edu.ec', '926e27eecdbc7a18858b3798ba99bddd', 2),
	(7, 'Rodrigo', 'Castro', 'rfcastro', 'rfcastro@espol.edu.ec', '2e247e2eb505c42b362e80ed4d05b078', 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
