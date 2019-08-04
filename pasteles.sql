
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
 
--
-- Base de datos: `pasteles`
--
 
-- --------------------------------------------------------
 
--
-- Estructura de tabla para la tabla `productos`
--
 
CREATE TABLE IF NOT EXISTS `productos` (
 `id` int(11) NOT NULL,
 `name` varchar(255) NOT NULL,
 `image` varchar(255) NOT NULL,
 `price` double(10,2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
 
--
-- Volcado de datos para la tabla `productos`
--
 
INSERT INTO `productos` (`id`, `name`, `image`, `price`) VALUES
(1, 'Monitor LED UHD 24&amp;amp;quot; U24E590D', 'http://images.samsung.com/is/image/samsung/es_LU24E590DS-EN_001_Front_black?$DT-Gallery$', 200.00),
(2, 'Monitor LED Curvo 27&amp;amp;quot; C27F591FDU', 'http://images.samsung.com/is/image/samsung/es_LC27F591FDUXEN_001_Front_white?$DT-Gallery$', 588.00),
(3, 'Galaxi note 7', 'http://www.samsung.com/es/consumer/mobile-devices/smartphones/galaxy-note/galaxy-note7/smart-switch/images/apps_smart-switch_banner_img.png', 499.00);
 
--
-- Índices para tablas volcadas
--
 
--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT de las tablas volcadas
--
 
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
 MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;