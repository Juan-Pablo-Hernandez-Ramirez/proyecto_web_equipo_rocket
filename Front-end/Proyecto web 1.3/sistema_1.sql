-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2023 a las 02:51:06
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_edo`
--

CREATE TABLE IF NOT EXISTS `cat_edo` (
`ID_edo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_menu`
--

CREATE TABLE IF NOT EXISTS `cat_menu` (
`ID_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_municipios`
--

CREATE TABLE IF NOT EXISTS `cat_municipios` (
`ID_municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE IF NOT EXISTS `precios` (
`ID_menu` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`ID_users` int(11) NOT NULL,
  `A_paterno` varchar(100) NOT NULL,
  `A_materno` varchar(100) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Psw` varchar(255) NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_edo`
--
ALTER TABLE `cat_edo`
 ADD PRIMARY KEY (`ID_edo`);

--
-- Indices de la tabla `cat_menu`
--
ALTER TABLE `cat_menu`
 ADD PRIMARY KEY (`ID_menu`);

--
-- Indices de la tabla `cat_municipios`
--
ALTER TABLE `cat_municipios`
 ADD PRIMARY KEY (`ID_municipio`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
 ADD PRIMARY KEY (`ID_menu`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_edo`
--
ALTER TABLE `cat_edo`
MODIFY `ID_edo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cat_menu`
--
ALTER TABLE `cat_menu`
MODIFY `ID_menu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cat_municipios`
--
ALTER TABLE `cat_municipios`
MODIFY `ID_municipio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
MODIFY `ID_menu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `ID_users` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
