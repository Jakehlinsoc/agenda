-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2021 a las 00:23:01
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID` int(3) NOT NULL,
  `TELEFONO` varchar(20) NOT NULL,
  `NOMBRES` varchar(128) NOT NULL,
  `APELLIDOS` varchar(128) NOT NULL,
  `TIPO_TELEFONO_ID` int(3) NOT NULL,
  `OBSERVACIONES` varchar(60) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT 1,
  `CREATE_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `UPDATE_DATE` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`ID`, `TELEFONO`, `NOMBRES`, `APELLIDOS`, `TIPO_TELEFONO_ID`, `OBSERVACIONES`, `STATUS`, `CREATE_DATE`, `UPDATE_DATE`) VALUES
(1, '52365874', 'Jakehlin', 'Soc', 0, '', 1, '2021-09-27 01:48:51', NULL),
(2, '59658227', 'Rhaquel', 'Lopez', 0, 'prueba 2', 1, '2021-09-27 01:52:06', NULL),
(3, '12345635', 'Rhaquel', 'Soc', 0, 'prueba 3', 1, '2021-09-27 01:55:31', NULL),
(4, '12345635', 'Rhaquel', 'Soc', 0, 'prueba 3', 1, '2021-09-27 02:14:56', NULL),
(5, '12345678', 'll', 'ss', 0, 'prueba 4', 1, '2021-09-27 13:04:23', NULL),
(6, '12345678', 'Jakehlin', 'Lopez', 0, 'Prueba 5', 1, '2021-09-27 15:08:43', NULL),
(7, '87654321', 'Dhayensy', 'Palacios', 0, 'Prueba 6', 1, '2021-09-27 15:50:31', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_telefono`
--

CREATE TABLE `tipo_telefono` (
  `ID` int(3) NOT NULL,
  `TIPO` varchar(64) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT 1,
  `CREATE_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `UPDATE_DATE` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_telefono`
--

INSERT INTO `tipo_telefono` (`ID`, `TIPO`, `STATUS`, `CREATE_DATE`, `UPDATE_DATE`) VALUES
(1, 'Personal', 1, '2021-09-26 19:51:57', NULL),
(2, 'Referencia Laboral', 1, '2021-09-26 19:51:57', NULL),
(5, 'Referencia Familiar', 1, '2021-09-26 19:54:41', '2021-09-27 15:46:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo_telefono`
--
ALTER TABLE `tipo_telefono`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_telefono`
--
ALTER TABLE `tipo_telefono`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
