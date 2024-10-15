-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2024 a las 23:52:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tabla categoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablacategoria`
--

CREATE TABLE `tablacategoria` (
  `ID_Categoria` int(200) NOT NULL,
  `Nombre_Categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tablacategoria`
--

INSERT INTO `tablacategoria` (`ID_Categoria`, `Nombre_Categoria`) VALUES
(1, 'Velas'),
(2, 'Aromatizadores de Au'),
(3, 'Aromatizadores de Am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaproductos`
--

CREATE TABLE `tablaproductos` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre_producto` varchar(20) NOT NULL,
  `Precio` varchar(20) NOT NULL,
  `ID_Categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tablaproductos`
--

INSERT INTO `tablaproductos` (`ID_Producto`, `Nombre_producto`, `Precio`, `ID_Categoria`) VALUES
(1, 'Coco y Vanilla', '2.000', 1),
(2, 'Lavanda', '2.000', 1),
(3, 'Lemongrass', '2.200', 1),
(4, 'Sandalo', '2.100', 1),
(5, 'Naranja', '2.200', 1),
(6, 'Wanama', '2.000', 1),
(7, 'Sandalo', '3.000', 2),
(8, 'Coco y Vainilla', '3.100', 2),
(9, 'Lavanda', '3.200', 2),
(10, 'Lemongrass', '4.500', 3),
(11, 'Lavanda', '4.500', 3),
(12, 'Coco y Vainilla', '4.500', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tablacategoria`
--
ALTER TABLE `tablacategoria`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `tablaproductos`
--
ALTER TABLE `tablaproductos`
  ADD PRIMARY KEY (`ID_Producto`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tablacategoria`
--
ALTER TABLE `tablacategoria`
  MODIFY `ID_Categoria` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tablaproductos`
--
ALTER TABLE `tablaproductos`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tablaproductos`
--
ALTER TABLE `tablaproductos`
  ADD CONSTRAINT `tablaproductos_ibfk_1` FOREIGN KEY (`ID_Categoria`) REFERENCES `tablacategoria` (`ID_Categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
