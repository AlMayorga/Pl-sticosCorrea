-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 17:00:36
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miproyecto_pc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id_colab` int(11) NOT NULL,
  `nom_colab` text COLLATE utf8_spanish_ci NOT NULL,
  `colaborador` text COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `colaboradores`
--

INSERT INTO `colaboradores` (`id_colab`, `nom_colab`, `colaborador`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'colaborador Administrador', 'admin', 'admin123', 'Administrador', '', 1, '0000-00-00 00:00:00', '2022-05-11 13:19:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradoresxproceso`
--

CREATE TABLE `colaboradoresxproceso` (
  `cod_proces_colabproces` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_colab_colabproces` int(11) NOT NULL,
  `nom_colab_colabproces` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `colaborador` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `cod_proces` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nom_proces` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id_colab`);

--
-- Indices de la tabla `colaboradoresxproceso`
--
ALTER TABLE `colaboradoresxproceso`
  ADD KEY `FK_cod_proces_colabproces` (`cod_proces_colabproces`),
  ADD KEY `FK_id_colab_colabproces` (`id_colab_colabproces`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`cod_proces`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colaboradoresxproceso`
--
ALTER TABLE `colaboradoresxproceso`
  ADD CONSTRAINT `FK_cod_proces_colabproces` FOREIGN KEY (`cod_proces_colabproces`) REFERENCES `proceso` (`cod_proces`),
  ADD CONSTRAINT `FK_id_colab_colabproces` FOREIGN KEY (`id_colab_colabproces`) REFERENCES `colaboradores` (`id_colab`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
