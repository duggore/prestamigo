-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2014 a las 11:56:22
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `digitales`
--

CREATE TABLE IF NOT EXISTS `digitales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(55) NOT NULL,
  `categoria` varchar(55) NOT NULL,
  `etiqueta` varchar(55) NOT NULL,
  `estado` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `digitales`
--

INSERT INTO `digitales` (`id`, `nombre`, `categoria`, `etiqueta`, `estado`) VALUES
(1, 'Certificado de preparatoria', 'DocumentaciÃ³n oficial', 'e0002', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `microfilms`
--

CREATE TABLE IF NOT EXISTS `microfilms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(55) NOT NULL,
  `categoria` varchar(55) NOT NULL,
  `etiqueta` varchar(55) NOT NULL,
  `estado` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `microfilms`
--

INSERT INTO `microfilms` (`id`, `nombre`, `categoria`, `etiqueta`, `estado`) VALUES
(1, 'Credencial de elector', 'DocumentaciÃ³n oficial', 'e0003', 'No disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `originales`
--

CREATE TABLE IF NOT EXISTS `originales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(55) NOT NULL,
  `categoria` varchar(55) NOT NULL,
  `etiqueta` varchar(55) NOT NULL,
  `estado` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `originales`
--

INSERT INTO `originales` (`id`, `nombre`, `categoria`, `etiqueta`, `estado`) VALUES
(1, 'Acta de nacimiento', 'DocumentaciÃ³n oficial', 'e0001', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE IF NOT EXISTS `privilegios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Consultor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(55) NOT NULL,
  `estado` varchar(55) NOT NULL,
  `tipo` varchar(55) NOT NULL,
  `expositor` varchar(55) NOT NULL,
  `empresa` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `estado`, `tipo`, `expositor`, `empresa`) VALUES
(1, 'Asistencia Tecnica de software', 'Pendiente de revisiÃ³n', 'Platica', 'Alfonso Espinoza', 'Cheapsfot');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(55) NOT NULL,
  `usuario` varchar(55) NOT NULL,
  `password` varchar(30) NOT NULL,
  `privilegios` int(11) NOT NULL,
  `estado` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `privilegios`, `estado`) VALUES
(1, 'admin', 'admin', 'password', 1, 'a'),
(2, 'consultor', 'consultor', 'password', 2, 'a'),
(3, 'consultord', 'consultord', 'password', 2, 'd'),
(4, 'Ejemplo', 'borrar', 'password', 2, 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
