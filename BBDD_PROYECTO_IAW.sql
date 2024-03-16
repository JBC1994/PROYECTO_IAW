-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         11.3.1-MariaDB-1:11.3.1+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para TiendaProyecto
CREATE DATABASE IF NOT EXISTS `TiendaProyecto` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `TiendaProyecto`;

-- Volcando estructura para tabla TiendaProyecto.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla TiendaProyecto.pedido: ~0 rows (aproximadamente)

-- Volcando estructura para tabla TiendaProyecto.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `descripcion2` varchar(2000) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla TiendaProyecto.producto: ~7 rows (aproximadamente)
INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `stock`, `categoria`, `descripcion2`) VALUES
	(27, 'ALFA ROMEO GIULIA', '', 0, 0, '', ''),
	(28, 'ALFA ROMEO STELVIO', '', 0, 0, '', ''),
	(29, 'BMW SERIE 3', '', 0, 0, '', ''),
	(32, 'FIAT 500', '', 0, 0, '', ''),
	(33, 'BMW E90', '', 0, 0, '', ''),
	(35, 'ALFA ROMEO GIULIETTA', 'ALFA ROMEO GIULIETTA 1.6 105cv', 130000, 2, 'COCHE RENTING', 'Esta última generación del Alfa Romeo Giulietta fue presentada oficialmente en el Salón de Ginebra del 2010, aunque algunos ya habían estado presentes en su presentación a los medios a finales del 2009. Durante su presencia en el mercado han ido apareciendo versiones como el Alfa Romeo 1.4 TB de 105 CV que nació en 2012 o el 2.0 JTDM de 140 CV que hizo lo propio en el 2010.   Los 4,35 metros del Alfa Romeo Giulietta lo sitúan como competidor del segmento de los compactos y sustituyó en la oferta de la marca al exitoso Alfa Romeo 147. Dentro de su oferta actual todas las motorizaciones recurren a la sobrealimentación por turbo, tanto en diésel como en gasolina. Las versiones de gasolina recurren siempre al mismo bloque de cuatro cilindros 1.4 TB en versiones de 105, 120, 150, 170 e incluso 240 CV en la versión más deportiva. Las posibilidades en diésel empiezan con el 1.6 JDTM de 105 CV y culminan con un 2.0 JTDM y 175 CV de potencia máxima'),
	(36, 'FIAT PUNTO', 'FIAT PUNTO ', 16000, 2, 'COCHE SEMINUEVO', 'MAGINICO FIAT PUNTO 1.4 ');

-- Volcando estructura para tabla TiendaProyecto.producto_pedido
CREATE TABLE IF NOT EXISTS `producto_pedido` (
  `id_producto` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  KEY `id_producto` (`id_producto`),
  KEY `id_pedido` (`id_pedido`),
  CONSTRAINT `producto_pedido_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  CONSTRAINT `producto_pedido_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla TiendaProyecto.producto_pedido: ~0 rows (aproximadamente)

-- Volcando estructura para tabla TiendaProyecto.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `rol` varchar(50) DEFAULT 'usuario',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla TiendaProyecto.usuario: ~1 rows (aproximadamente)
INSERT INTO `usuario` (`id_usuario`, `nombre`, `email`, `contrasena`, `rol`) VALUES
	(1, 'joaquin', 'joaquin14081994@gmail.com', '1234', '1'),
	(29, 'joaquinuser', 'joaquin19941408@gmail.com', '1234', '2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
