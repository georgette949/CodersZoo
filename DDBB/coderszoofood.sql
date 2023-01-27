-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2023 a las 09:50:59
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coderszoo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coderszoofood`
--

CREATE TABLE `coderszoofood` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Status` enum('Alimentado','No Alimentado') NOT NULL DEFAULT 'No Alimentado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `coderszoofood`
--

INSERT INTO `coderszoofood` (`id`, `Nombre`, `Status`) VALUES
(1, 'Oso panda', 'Alimentado'),
(2, 'Mono', 'No Alimentado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coderszoofood`
--
ALTER TABLE `coderszoofood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coderszoofood`
--
ALTER TABLE `coderszoofood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
