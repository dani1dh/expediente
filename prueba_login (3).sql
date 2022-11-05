-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2022 a las 03:26:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_doc` int(11) NOT NULL,
  `id_hijo` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL,
  `nombre_doc` varchar(200) NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_pa`
--

CREATE TABLE `documentos_pa` (
  `id_docp` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL,
  `nombre_doc` varchar(200) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_g` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_g`, `nombre`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hijos`
--

CREATE TABLE `hijos` (
  `id_h` int(11) NOT NULL,
  `nombre_h` varchar(200) NOT NULL,
  `user_h` varchar(20) NOT NULL,
  `password_h` smallint(2) NOT NULL,
  `id_parentesco` int(11) NOT NULL,
  `genero` int(11) NOT NULL,
  `id_parentesco2` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hijos`
--

INSERT INTO `hijos` (`id_h`, `nombre_h`, `user_h`, `password_h`, `id_parentesco`, `genero`, `id_parentesco2`, `status`, `archivo`) VALUES
(3, 'Juan Gonzales Hernandez', 'jua', 123, 1, 1, 2, 1, '1666060687_prueba.jpg'),
(4, 'luis', 'lu', 123, 5, 1, 4, 1, '1666056151_SI.jpg'),
(5, 'Arlet', 'arlet', 123, 1, 2, 2, 1, '1666466552_ar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id_p` int(11) NOT NULL,
  `nombre_p` varchar(200) NOT NULL,
  `user_p` varchar(20) NOT NULL,
  `password_p` smallint(2) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `genero` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id_p`, `nombre_p`, `user_p`, `password_p`, `correo`, `status`, `genero`, `id_tipo`, `archivo`) VALUES
(1, 'Daniel Hernandez Abarca', 'dani1dh', 123, 'danielhernd03@gmail.com', 1, 1, 2, 'profile.png'),
(2, 'Sofia Gonzales Capote', 'sofi', 123, 'sofi@gmail.com', 1, 2, 2, 'mujer.jpg'),
(3, 'Administrador', 'admin', 123, 'danielhernd03@gmail.com', 1, 1, 1, '1665949070_admin.jpg'),
(4, 'Fernanda', 'fer', 123, 'fer@gmail.com', 1, 2, 2, '1666055760_fernanda.jpg'),
(5, 'Alexis', 'alex', 123, 'alex@gmail.com', 1, 1, 2, '1666055954_alex.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_tipo`
--

CREATE TABLE `user_tipo` (
  `id_u` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_tipo`
--

INSERT INTO `user_tipo` (`id_u`, `tipo`) VALUES
(1, 'administrador'),
(2, 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_doc`),
  ADD KEY `id_hijo` (`id_hijo`),
  ADD KEY `id_padre` (`id_padre`);

--
-- Indices de la tabla `documentos_pa`
--
ALTER TABLE `documentos_pa`
  ADD PRIMARY KEY (`id_docp`),
  ADD KEY `id_padre` (`id_padre`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_g`);

--
-- Indices de la tabla `hijos`
--
ALTER TABLE `hijos`
  ADD PRIMARY KEY (`id_h`),
  ADD KEY `id_parentesco` (`id_parentesco`),
  ADD KEY `id_parentesco2` (`id_parentesco2`),
  ADD KEY `genero` (`genero`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_p` (`id_p`),
  ADD KEY `genero` (`genero`);

--
-- Indices de la tabla `user_tipo`
--
ALTER TABLE `user_tipo`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos_pa`
--
ALTER TABLE `documentos_pa`
  MODIFY `id_docp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_g` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hijos`
--
ALTER TABLE `hijos`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user_tipo`
--
ALTER TABLE `user_tipo`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`id_padre`) REFERENCES `padres` (`id_p`),
  ADD CONSTRAINT `documentos_ibfk_2` FOREIGN KEY (`id_hijo`) REFERENCES `hijos` (`id_h`);

--
-- Filtros para la tabla `documentos_pa`
--
ALTER TABLE `documentos_pa`
  ADD CONSTRAINT `documentos_pa_ibfk_1` FOREIGN KEY (`id_padre`) REFERENCES `padres` (`id_p`);

--
-- Filtros para la tabla `hijos`
--
ALTER TABLE `hijos`
  ADD CONSTRAINT `hijos_ibfk_1` FOREIGN KEY (`id_parentesco`) REFERENCES `padres` (`id_p`),
  ADD CONSTRAINT `hijos_ibfk_2` FOREIGN KEY (`id_parentesco2`) REFERENCES `padres` (`id_p`),
  ADD CONSTRAINT `hijos_ibfk_3` FOREIGN KEY (`genero`) REFERENCES `generos` (`id_g`);

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `user_tipo` (`id_u`),
  ADD CONSTRAINT `padres_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `generos` (`id_g`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
