-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 02:31:20
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectotibetdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `idPagina` int(11) NOT NULL,
  `archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`idPagina`, `archivo`) VALUES
(1, 'about.txt'),
(2, 'habitat.txt'),
(3, 'yak.txt'),
(4, 'manul.txt'),
(5, 'buitre.txt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileFoto` varchar(255) NOT NULL,
  `creationDate` datetime NOT NULL DEFAULT current_timestamp(),
  `newsletter` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`username`, `mail`, `password`, `profileFoto`, `creationDate`, `newsletter`) VALUES
('felix985', 'fichilin2005@gmail.com', 'asoterico20', 'https://cdn.discordapp.com/attachments/812533261116637207/1041544572314079282/cover-MANWOLVES_Roses.png', '2022-11-13 23:47:01', 1),
('lapo33', 'fern@ming.com', 'adiosOhio11', 'upload/songa.jpeg', '2022-11-14 21:00:16', 1),
('SupraLing1', 'linga@gmail.com', 'hahatres22', 'upload/WhatsApp Image 2022-08-14 at 5.55.21 PM.jpeg', '2022-11-14 18:29:38', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`idPagina`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
