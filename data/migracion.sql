-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2021 a las 16:25:04
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32
CREATE DATABASE calidatos;
USE calidatos;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calidatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosnodo`
--

CREATE TABLE `datosnodo` (
  `id` int(11) NOT NULL,
  `date_submit` varchar(20) NOT NULL,
  `id_nodo` int(11) DEFAULT NULL,
  `lluvia` varchar(30) DEFAULT NULL,
  `cant_basura` int(11) DEFAULT NULL,
  `residuos` varchar(30) DEFAULT NULL,
  `porcentaje_agua` int(11) DEFAULT NULL,
  `nivel_agua` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosnodo`
--

INSERT INTO `datosnodo` (`id`, `date_submit`, `id_nodo`, `lluvia`, `cant_basura`, `residuos`, `porcentaje_agua`, `nivel_agua`) VALUES
(3, '', 7, 'No esta lloviendo', 281, 'Saturado', 84, 'Saturado'),
(4, '', 1, 'Lloviendo', 282, 'Saturado', 88, 'Saturado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosnodo`
--
ALTER TABLE `datosnodo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosnodo`
--
ALTER TABLE `datosnodo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
