-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 19:47:15
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_walmartgomez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sucursal`
--

CREATE TABLE `tbl_sucursal` (
  `num_sucursal` int(4) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `codigo_postal` varchar(6) NOT NULL,
  `empleados` int(4) NOT NULL,
  `sector` int(4) NOT NULL,
  `num_telefono` varchar(10) NOT NULL,
  `departamentos` int(4) NOT NULL,
  `nombre_encargado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_sucursal`
--

INSERT INTO `tbl_sucursal` (`num_sucursal`, `direccion`, `codigo_postal`, `empleados`, `sector`, `num_telefono`, `departamentos`, `nombre_encargado`) VALUES
(2, 'Pisos Picados', '32167', 12, 12, '6562562624', 11, 'Leonardo'),
(3, 'Calle Portal de Commodo', '12353', 2, 2, '6565318931', 32, 'Angel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_sucursal`
--
ALTER TABLE `tbl_sucursal`
  ADD PRIMARY KEY (`num_sucursal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_sucursal`
--
ALTER TABLE `tbl_sucursal`
  MODIFY `num_sucursal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
