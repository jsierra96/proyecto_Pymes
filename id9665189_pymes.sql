-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-12-2019 a las 17:55:00
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id9665189_pymes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apartado4`
--

CREATE TABLE `Apartado4` (
  `id_m_4` int(255) NOT NULL,
  `4_op1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `4_op2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `4_op3` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `4_op4` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `4_op5` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_manual` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apartado5`
--

CREATE TABLE `Apartado5` (
  `id_m_5` bigint(255) NOT NULL,
  `5_op1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `5_op2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `5_op3` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `5_op4` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `5_op5` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_manual` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apartado6`
--

CREATE TABLE `Apartado6` (
  `id_m_6` bigint(255) NOT NULL,
  `6_op1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `6_op2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `6_op3` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_manual` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apartado7`
--

CREATE TABLE `Apartado7` (
  `id_m_7` bigint(255) NOT NULL,
  `7_op1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op3` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op4` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op5` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op6` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op7` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op8` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op9` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op10` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op11` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `7_op12` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_manual` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apartado8`
--

CREATE TABLE `Apartado8` (
  `id_m_8` bigint(255) NOT NULL,
  `8_op1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op3` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op4` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op5` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op6` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op7` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op8` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op9` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op10` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op11` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op12` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op13` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op14` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op15` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op16` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op17` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op18` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op19` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op20` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op21` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `8_op22` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_manual` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apartado9`
--

CREATE TABLE `Apartado9` (
  `id_m_9` bigint(255) NOT NULL,
  `9_op1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `9_op2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `9_op3` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `9_op4` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `9_op5` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `9_op6` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `9_op7` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_manual` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Apartado10`
--

CREATE TABLE `Apartado10` (
  `id_m_10` bigint(255) NOT NULL,
  `10_op1` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `10_op2` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `10_op3` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_manual` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DatosUsuario`
--

CREATE TABLE `DatosUsuario` (
  `id_datos` bigint(255) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ape_pa` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ape_ma` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `puesto` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `nacido` date DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_user` bigint(255) NOT NULL,
  `id_dir` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Direcciones`
--

CREATE TABLE `Direcciones` (
  `id_dir` bigint(255) NOT NULL,
  `calle` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `colonia` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `municipio` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresas`
--

CREATE TABLE `Empresas` (
  `id_empresa` bigint(255) NOT NULL,
  `empresa` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `vision` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `mision` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_dir` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Evidencias`
--

CREATE TABLE `Evidencias` (
  `id_evi` bigint(255) NOT NULL,
  `archivo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_empresa` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Manual`
--

CREATE TABLE `Manual` (
  `id_manual` bigint(255) NOT NULL,
  `id_empresa` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Riesgos`
--

CREATE TABLE `Riesgos` (
  `id_riesgo` bigint(255) NOT NULL,
  `Actividad` varchar(100) NOT NULL,
  `ModoFallo` varchar(200) NOT NULL,
  `Efecto` varchar(100) NOT NULL,
  `Severidad` double NOT NULL,
  `Causa` varchar(200) NOT NULL,
  `Ocurrencia` double NOT NULL,
  `Control` varchar(100) NOT NULL,
  `Detecta` double NOT NULL,
  `Prioritario` double NOT NULL,
  `Acciones` varchar(200) NOT NULL,
  `Responsable` varchar(70) NOT NULL,
  `Fecha` varchar(255) NOT NULL,
  `AccionesT` varchar(200) NOT NULL,
  `Severidad1` int(11) NOT NULL,
  `Ocurrencia2` int(11) NOT NULL,
  `Detectab` int(11) NOT NULL,
  `Prioritario1` int(11) NOT NULL,
  `id_empresa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id_user` bigint(255) NOT NULL,
  `email` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_empresa` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Apartado4`
--
ALTER TABLE `Apartado4`
  ADD PRIMARY KEY (`id_m_4`),
  ADD KEY `id_m_4` (`id_m_4`),
  ADD KEY `FKApartado4846167` (`id_manual`);

--
-- Indices de la tabla `Apartado5`
--
ALTER TABLE `Apartado5`
  ADD PRIMARY KEY (`id_m_5`),
  ADD KEY `id_m_5` (`id_m_5`),
  ADD KEY `FKApartado5846166` (`id_manual`);

--
-- Indices de la tabla `Apartado6`
--
ALTER TABLE `Apartado6`
  ADD PRIMARY KEY (`id_m_6`),
  ADD KEY `id_m_6` (`id_m_6`),
  ADD KEY `FKApartado6846165` (`id_manual`);

--
-- Indices de la tabla `Apartado7`
--
ALTER TABLE `Apartado7`
  ADD PRIMARY KEY (`id_m_7`),
  ADD KEY `id_m_7` (`id_m_7`),
  ADD KEY `FKApartado7846164` (`id_manual`);

--
-- Indices de la tabla `Apartado8`
--
ALTER TABLE `Apartado8`
  ADD PRIMARY KEY (`id_m_8`),
  ADD KEY `id_m_8` (`id_m_8`),
  ADD KEY `FKApartado8846163` (`id_manual`);

--
-- Indices de la tabla `Apartado9`
--
ALTER TABLE `Apartado9`
  ADD PRIMARY KEY (`id_m_9`),
  ADD KEY `id_m_9` (`id_m_9`),
  ADD KEY `FKApartado9846162` (`id_manual`);

--
-- Indices de la tabla `Apartado10`
--
ALTER TABLE `Apartado10`
  ADD PRIMARY KEY (`id_m_10`),
  ADD KEY `id_m_10` (`id_m_10`),
  ADD KEY `FKApartado10185745` (`id_manual`);

--
-- Indices de la tabla `DatosUsuario`
--
ALTER TABLE `DatosUsuario`
  ADD PRIMARY KEY (`id_datos`),
  ADD KEY `id_datos` (`id_datos`),
  ADD KEY `FKDatosUsuar22067` (`id_dir`),
  ADD KEY `FKDatosUsuar57066` (`id_user`);

--
-- Indices de la tabla `Direcciones`
--
ALTER TABLE `Direcciones`
  ADD PRIMARY KEY (`id_dir`),
  ADD KEY `id_dir` (`id_dir`);

--
-- Indices de la tabla `Empresas`
--
ALTER TABLE `Empresas`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `FKEmpresas560876` (`id_dir`);

--
-- Indices de la tabla `Evidencias`
--
ALTER TABLE `Evidencias`
  ADD PRIMARY KEY (`id_evi`),
  ADD KEY `id_evi` (`id_evi`),
  ADD KEY `FKEvidencias169568` (`id_empresa`);

--
-- Indices de la tabla `Manual`
--
ALTER TABLE `Manual`
  ADD PRIMARY KEY (`id_manual`),
  ADD KEY `id_manual` (`id_manual`),
  ADD KEY `FKManual650496` (`id_empresa`);

--
-- Indices de la tabla `Riesgos`
--
ALTER TABLE `Riesgos`
  ADD PRIMARY KEY (`id_riesgo`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `FKUsuarios346120` (`id_empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Apartado4`
--
ALTER TABLE `Apartado4`
  MODIFY `id_m_4` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Apartado5`
--
ALTER TABLE `Apartado5`
  MODIFY `id_m_5` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Apartado6`
--
ALTER TABLE `Apartado6`
  MODIFY `id_m_6` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Apartado7`
--
ALTER TABLE `Apartado7`
  MODIFY `id_m_7` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Apartado8`
--
ALTER TABLE `Apartado8`
  MODIFY `id_m_8` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Apartado9`
--
ALTER TABLE `Apartado9`
  MODIFY `id_m_9` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Apartado10`
--
ALTER TABLE `Apartado10`
  MODIFY `id_m_10` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `DatosUsuario`
--
ALTER TABLE `DatosUsuario`
  MODIFY `id_datos` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Direcciones`
--
ALTER TABLE `Direcciones`
  MODIFY `id_dir` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `Empresas`
--
ALTER TABLE `Empresas`
  MODIFY `id_empresa` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `Evidencias`
--
ALTER TABLE `Evidencias`
  MODIFY `id_evi` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Manual`
--
ALTER TABLE `Manual`
  MODIFY `id_manual` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `Riesgos`
--
ALTER TABLE `Riesgos`
  MODIFY `id_riesgo` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id_user` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Apartado4`
--
ALTER TABLE `Apartado4`
  ADD CONSTRAINT `FKApartado4846167` FOREIGN KEY (`id_manual`) REFERENCES `Manual` (`id_manual`);

--
-- Filtros para la tabla `Apartado5`
--
ALTER TABLE `Apartado5`
  ADD CONSTRAINT `FKApartado5846166` FOREIGN KEY (`id_manual`) REFERENCES `Manual` (`id_manual`);

--
-- Filtros para la tabla `Apartado6`
--
ALTER TABLE `Apartado6`
  ADD CONSTRAINT `FKApartado6846165` FOREIGN KEY (`id_manual`) REFERENCES `Manual` (`id_manual`);

--
-- Filtros para la tabla `Apartado7`
--
ALTER TABLE `Apartado7`
  ADD CONSTRAINT `FKApartado7846164` FOREIGN KEY (`id_manual`) REFERENCES `Manual` (`id_manual`);

--
-- Filtros para la tabla `Apartado8`
--
ALTER TABLE `Apartado8`
  ADD CONSTRAINT `FKApartado8846163` FOREIGN KEY (`id_manual`) REFERENCES `Manual` (`id_manual`);

--
-- Filtros para la tabla `Apartado9`
--
ALTER TABLE `Apartado9`
  ADD CONSTRAINT `FKApartado9846162` FOREIGN KEY (`id_manual`) REFERENCES `Manual` (`id_manual`);

--
-- Filtros para la tabla `Apartado10`
--
ALTER TABLE `Apartado10`
  ADD CONSTRAINT `FKApartado10185745` FOREIGN KEY (`id_manual`) REFERENCES `Manual` (`id_manual`);

--
-- Filtros para la tabla `DatosUsuario`
--
ALTER TABLE `DatosUsuario`
  ADD CONSTRAINT `FKDatosUsuar22067` FOREIGN KEY (`id_dir`) REFERENCES `Direcciones` (`id_dir`),
  ADD CONSTRAINT `FKDatosUsuar57066` FOREIGN KEY (`id_user`) REFERENCES `Usuarios` (`id_user`);

--
-- Filtros para la tabla `Empresas`
--
ALTER TABLE `Empresas`
  ADD CONSTRAINT `FKEmpresas560876` FOREIGN KEY (`id_dir`) REFERENCES `Direcciones` (`id_dir`);

--
-- Filtros para la tabla `Evidencias`
--
ALTER TABLE `Evidencias`
  ADD CONSTRAINT `FKEvidencias169568` FOREIGN KEY (`id_empresa`) REFERENCES `Empresas` (`id_empresa`);

--
-- Filtros para la tabla `Manual`
--
ALTER TABLE `Manual`
  ADD CONSTRAINT `FKManual650496` FOREIGN KEY (`id_empresa`) REFERENCES `Empresas` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
