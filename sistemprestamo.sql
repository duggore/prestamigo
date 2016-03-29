-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2016 a las 18:26:33
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemprestamo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cataage`
--

CREATE TABLE `cataage` (
  `NUM_AGE` int(2) NOT NULL,
  `NOM_AGE` varchar(40) NOT NULL,
  `VTA_AGE` bigint(10) NOT NULL,
  `NUM_ZON` varchar(2) NOT NULL,
  `POR_COM` int(5) NOT NULL,
  `FEC_HA` date NOT NULL,
  `HOR_A` varchar(8) NOT NULL,
  `CLA_USR` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catacli`
--

CREATE TABLE `catacli` (
  `NUM_CLI` int(4) NOT NULL,
  `NOM_CLI` varchar(40) NOT NULL,
  `DIR_NUM` varchar(60) NOT NULL,
  `DIR_COL` varchar(60) NOT NULL,
  `DIR_CIU` varchar(20) NOT NULL,
  `RFC_CLI` varchar(15) NOT NULL,
  `TEL_CLI` varchar(15) NOT NULL,
  `NUM_AGE` int(2) NOT NULL,
  `SAL_CLI` bigint(11) NOT NULL,
  `DES_CLI` bigint(2) NOT NULL,
  `IMP_PRE` bigint(11) NOT NULL,
  `IMP_PAGD` bigint(11) NOT NULL,
  `NUM_ZON` int(2) NOT NULL,
  `TIP_PRE` int(1) NOT NULL,
  `ULT_PAG` date NOT NULL,
  `ULT_COM` date NOT NULL,
  `NUM_FACS` int(5) NOT NULL,
  `IMP_FACS` bigint(10) NOT NULL,
  `SUC_URS` varchar(20) NOT NULL,
  `TIP_CLI` varchar(1) NOT NULL,
  `BLO_QUEO` varchar(1) NOT NULL,
  `FEC_ALT` date NOT NULL,
  `NUM_FAC` int(6) NOT NULL,
  `NUM_CTA` int(4) NOT NULL,
  `FEC_HA` date NOT NULL,
  `HOR_A` varchar(8) NOT NULL,
  `CLA_USR` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catazon`
--

CREATE TABLE `catazon` (
  `NUM_ZON` int(2) NOT NULL,
  `DES_ZON` varchar(30) NOT NULL,
  `FEC_HA` date NOT NULL,
  `HOR_A` varchar(8) NOT NULL,
  `CLA_USR` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecope`
--

CREATE TABLE `fecope` (
  `FE_CHA` date NOT NULL,
  `PERI_ODO` int(2) NOT NULL,
  `NUM_FAC` varchar(6) NOT NULL,
  `NUM_PAG` varchar(6) NOT NULL,
  `NUM_FACI` varchar(6) NOT NULL,
  `NUM_REP` varchar(6) NOT NULL,
  `ANI_O` varchar(4) NOT NULL,
  `POR_INT` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movpag`
--

CREATE TABLE `movpag` (
  `NUM_PAG` int(4) NOT NULL,
  `NUM_CLI` int(4) NOT NULL,
  `REF_ERE` varchar(15) NOT NULL,
  `TIP_PAG` varchar(1) NOT NULL,
  `FEC_PAG` date NOT NULL,
  `IMP_PAG` bigint(11) NOT NULL,
  `NUM_FAC` int(6) NOT NULL,
  `NUM_AGE` varchar(2) NOT NULL,
  `FEC_HA` date NOT NULL,
  `HOR_A` varchar(8) NOT NULL,
  `CLA_USR` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totfac`
--

CREATE TABLE `totfac` (
  `NUM_FAC` int(6) NOT NULL,
  `NUM_CLI` int(4) NOT NULL,
  `TOT_FAC` bigint(12) NOT NULL,
  `POR_INT` int(5) NOT NULL,
  `FEC_FAC` date NOT NULL,
  `NUM_AGE` int(2) NOT NULL,
  `NUM_ZON` int(2) NOT NULL,
  `STA_TUS` varchar(1) NOT NULL,
  `TIP_PAG` varchar(1) NOT NULL,
  `REF_ERE` varchar(12) NOT NULL,
  `FEC_PAG` date NOT NULL,
  `FEC_FIN` date NOT NULL,
  `TOT_PAG` bigint(12) NOT NULL,
  `SAL_DOF` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(255) NOT NULL,
  `users` varchar(17) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `permisos` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `users`, `pass`, `email`, `permisos`) VALUES
(1, 'prinick', 'c0784027b45aa11e848a38e890f8416c', 'prinick@hotmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
