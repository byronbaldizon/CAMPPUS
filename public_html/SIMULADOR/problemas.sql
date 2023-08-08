-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2020 a las 22:20:44
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simulador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problemas`
--

CREATE TABLE `problemas` (
  `id` int(3) NOT NULL,
  `ruta_enunciado` text COLLATE utf8_spanish2_ci,
  `opcion_correcta` int(2) DEFAULT NULL,
  `ruta_imagen` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `problemas`
--

INSERT INTO `problemas` (`id`, `ruta_enunciado`, `opcion_correcta`, `ruta_imagen`) VALUES
(1, 'enunciados/problema1.txt', 2, 'images/'),
(2, 'enunciados/problema2.txt', 2, 'images/'),
(3, 'enunciados/problema3.txt', 4, 'images/'),
(4, 'enunciados/problema4.txt', 3, 'images/'),
(5, 'enunciados/problema5.txt', 6, 'images/dibujo5.jpg'),
(6, 'enunciados/problema6.txt', 2, 'images/dibujo6.jpg'),
(7, 'enunciados/problema7.txt', 3, 'images/dibujo7.jpg'),
(8, 'enunciados/problema8.txt', 5, 'images/dibujo8.jpg'),
(9, 'enunciados/problema9.txt', 1, 'images/dibujo9.jpg'),
(10, 'enunciados/problema10.txt', 3, 'images/dibujo10.jpg'),
(11, 'enunciados/problema11.txt', 6, 'images/'),
(12, 'enunciados/problema12.txt', 6, 'images/'),
(13, 'enunciados/problema13.txt', 3, 'images/'),
(14, 'enunciados/problema14.txt', 3, 'images/'),
(15, 'enunciados/problema15.txt', 1, 'images/dibujo15.jpg'),
(16, 'enunciados/problema16.txt', 2, 'images/dibujo16.jpg'),
(17, 'enunciados/problema17.txt', 1, 'images/'),
(18, 'enunciados/problema18.txt', 3, 'images/dibujo18.jpg'),
(19, 'enunciados/problema19.txt', 4, 'images/dibujo19.jpg'),
(20, 'enunciados/problema20.txt', 6, 'images/'),
(21, 'enunciados/problema21.txt', 2, 'images/'),
(22, 'enunciados/problema22.txt', 4, 'images/'),
(23, 'enunciados/problema23.txt', 1, 'images/'),
(24, 'enunciados/problema24.txt', 3, 'images/dibujo24.jpg'),
(25, 'enunciados/problema25.txt', 1, 'images/'),
(26, 'enunciados/problema26.txt', 2, 'images/'),
(27, 'enunciados/problema27.txt', 3, 'images/'),
(28, 'enunciados/problema28.txt', 2, 'images/'),
(29, 'enunciados/problema29.txt', 4, 'images/'),
(30, 'enunciados/problema30.txt', 2, 'images/'),
(31, 'enunciados/problema31.txt', 3, 'images/dibujo31.jpg'),
(32, 'enunciados/problema32.txt', 5, 'images/'),
(33, 'enunciados/problema33.txt', 1, 'images/dibujo33.jpg'),
(34, 'enunciados/problema34.txt', 2, 'images/dibujo34.jpg'),
(35, 'enunciados/problema35.txt', 4, 'images/dibujo35.jpg'),
(36, 'enunciados/problema36.txt', 5, 'images/'),
(37, 'enunciados/problema37.txt', 2, 'images/dibujo37.jpg'),
(38, 'enunciados/problema38.txt', 6, 'images/dibujo38.jpg'),
(39, 'enunciados/problema39.txt', 4, 'images/'),
(40, 'enunciados/problema40.txt', 3, 'images/'),
(41, 'enunciados/problema41.txt', 4, 'images/'),
(42, 'enunciados/problema42.txt', 1, 'images/dibujo42.jpg'),
(43, 'enunciados/problema43.txt', 3, 'images/'),
(44, 'enunciados/problema44.txt', 4, 'images/dibujo44.jpg'),
(45, 'enunciados/problema45.txt', 3, 'images/dibujo45.jpg'),
(46, 'enunciados/problema46.txt', 2, 'images/'),
(47, 'enunciados/problema47.txt', 2, 'images/dibujo47.jpg'),
(48, 'enunciados/problema48.txt', 1, 'images/'),
(49, 'enunciados/problema49.txt', 5, 'images/dibujo49.jpg'),
(50, 'enunciados/problema50.txt', 4, 'images/'),
(51, 'enunciados/problema51.txt', 5, 'images/'),
(52, 'enunciados/problema52.txt', 2, 'images/'),
(53, 'enunciados/problema53.txt', 1, 'images/'),
(54, 'enunciados/problema54.txt', 1, 'images/'),
(55, 'enunciados/problema55.txt', 5, 'images/'),
(56, 'enunciados/problema56.txt', 6, 'images/'),
(57, 'enunciados/problema57.txt', 4, 'images/'),
(58, 'enunciados/problema58.txt', 2, 'images/'),
(59, 'enunciados/problema59.txt', 3, 'images/dibujo59.jpg'),
(60, 'enunciados/problema60.txt', 1, 'images/dibujo60.jpg'),
(61, 'enunciados/problema61.txt', 1, 'images/'),
(62, 'enunciados/problema62.txt', 2, 'images/'),
(63, 'enunciados/problema63.txt', 4, 'images/dibujo63.jpg'),
(64, 'enunciados/problema64.txt', 6, 'images/dibujo64.JPG'),
(65, 'enunciados/problema65.txt', 3, 'images/dibujo65.JPG'),
(66, 'enunciados/problema66.txt', 1, 'images/dibujo66.JPG'),
(67, 'enunciados/problema67.txt', 6, 'images/'),
(68, 'enunciados/problema68.txt', 3, 'images/dibujo68.JPG'),
(69, 'enunciados/problema69.txt', 1, 'images/dibujo69.JPG'),
(70, 'enunciados/problema70.txt', 4, 'images/'),
(71, 'enunciados/problema71.txt', 3, 'images/'),
(72, 'enunciados/problema72.txt', 2, 'images/'),
(73, 'enunciados/problema73.txt', 5, 'images/'),
(74, 'enunciados/problema74.txt', 4, 'images/dibujo74.jpg'),
(75, 'enunciados/problema75.txt', 4, 'images/'),
(76, 'enunciados/problema76.txt', 4, 'images/'),
(77, 'enunciados/problema77.txt', 4, 'images/'),
(78, 'enunciados/problema78.txt', 3, 'images/'),
(79, 'enunciados/problema79.txt', 1, 'images/'),
(80, 'enunciados/problema80.txt', 2, 'images/'),
(81, 'enunciados/problema81.txt', 6, 'images/'),
(82, 'enunciados/problema82.txt', 6, 'images/'),
(83, 'enunciados/problema83.txt', 1, 'images/'),
(84, 'enunciados/problema84.txt', 3, 'images/');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `problemas`
--
ALTER TABLE `problemas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `problemas`
--
ALTER TABLE `problemas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
