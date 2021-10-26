-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2021 a las 23:49:45
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `ID_MARCA` int(11) NOT NULL,
  `NOMBRE_MARCA` varchar(50) DEFAULT NULL,
  `ORIGEN_MARCA` varchar(50) DEFAULT NULL,
  `CANTIDAD_MARCA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`ID_MARCA`, `NOMBRE_MARCA`, `ORIGEN_MARCA`, `CANTIDAD_MARCA`) VALUES
(113, 'Abarth', 'Italia', 4),
(114, 'Alfa Romeo', 'Italia', 0),
(115, 'Alfa Romeo (FIAT)', 'Italia', 0),
(116, 'Aston Martin', 'Inglaterra', 0),
(117, 'Audi', 'Alemania', 0),
(118, 'Bentley', 'Inglaterra', 0),
(119, 'BMW', 'Alemania', 0),
(120, 'BYD', 'China', 0),
(121, 'Chevrolet', 'Estados Unidos', 0),
(122, 'Citroen', 'Francia', 0),
(123, 'Dacia', 'Rumania', 0),
(124, 'DFSK', 'China', 0),
(125, 'DS', 'Francia', 0),
(126, 'Ferrari', 'Italia', 0),
(127, 'Ferrari (FCA)', 'Italia', 0),
(128, 'FIAT', 'Italia', 0),
(129, 'FIAT (FIAT)', 'Italia', 0),
(130, 'Ford', 'Estados Unidos', 0),
(131, 'Honda', 'Japón', 0),
(132, 'Hyundai', 'Corea del Sur', 0),
(133, 'Infiniti', 'Japón', 0),
(134, 'Isuzu', 'Japón', 0),
(135, 'Jaguar', 'Inglaterra', 0),
(136, 'Jeep', 'Estados Unidos', 0),
(137, 'Jeep (FIAT)', 'Estados Unidos', 0),
(138, 'KIA', 'Corea del Sur', 0),
(139, 'LADA', 'Rusia', 0),
(140, 'Lamborghini', 'Italia', 0),
(141, 'Lancia', 'Italia', 0),
(142, 'Lancia (FIAT)', 'Italia', 0),
(143, 'Land Rover', 'Inglaterra', 0),
(144, 'Lexus', 'Japón', 0),
(145, 'Mahindra', 'India', 0),
(146, 'Maserati', 'Italia', 0),
(147, 'Mazda', 'Japón', 0),
(148, 'Mercedes', 'Alemania', 0),
(149, 'Mini', 'Estados Unidos', 0),
(150, 'Mitsubishi', 'Japón', 0),
(151, 'Morgan', 'Inglaterra', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `ID_MODELO` int(11) NOT NULL,
  `ID_MARCA` int(11) DEFAULT NULL,
  `NOMBRE_MODELO` varchar(50) DEFAULT NULL,
  `PRECIO_MODELO` decimal(10,3) DEFAULT NULL,
  `ANIO_MODELO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`ID_MODELO`, `ID_MARCA`, `NOMBRE_MODELO`, `PRECIO_MODELO`, `ANIO_MODELO`) VALUES
(18, 113, 'Abarth rojo', '22.500', 2013),
(19, 113, 'Abarth negro', '13.500', 2021),
(20, 113, 'Abarth verde oscuro', '13.500', 2010),
(21, 113, 'Zabtah', '15.500', 2015);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID_MARCA`),
  ADD UNIQUE KEY `NOMBRE_MARCA` (`NOMBRE_MARCA`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`ID_MODELO`),
  ADD KEY `ID_MARCA` (`ID_MARCA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `ID_MARCA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `ID_MODELO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`ID_MARCA`) REFERENCES `marca` (`ID_MARCA`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
