-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2022 a las 18:16:38
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_trabajo`
--
CREATE DATABASE IF NOT EXISTS base_trabajo;
USE base_trabajo; 
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `ide` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`ide`, `tipo`, `precio`, `fecha`, `cantidad`) VALUES
(0, 'Fondo Norte', '40.00', '2022-05-15', 150),
(1, 'Fondo Sur', '40.00', '2022-05-15', 150),
(2, 'Lateral', '30.00', '2022-05-15', 400),
(3, 'Palco', '100.00', '2022-05-15', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_cliente_cp`
--

CREATE TABLE `pedido_cliente_cp` (
  `id` int(11) NOT NULL,
  `ref` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `localidad` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `telefono` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido_cliente_cp`
--

INSERT INTO `pedido_cliente_cp` (`id`, `ref`, `nombre`, `apellidos`, `localidad`, `telefono`, `fecha`) VALUES
(1, 'EcQOK', 'Daniel', 'Ortega', 'madird', '1211121212', '2022-06-05 22:39:39'),
(2, 'gsm9O', 'Daniel', 'Ortega', 'madird', '1211121212', '2022-06-05 22:47:36'),
(3, 'axpB6', 'Rafael', 'Perez', 'madird', '90342683', '2022-06-05 22:51:02'),
(4, 'dThl8', '', '', '', '', '2022-06-06 22:07:46'),
(5, 'ATYyb', '', '', '', '', '2022-06-07 11:13:50'),
(6, 'NfTP', 'antonio', 'perez oliva', 'murcia', '654323112', '2022-06-07 12:56:14'),
(13, 'P8Ob', 'Isable', 'MuÃ±oz', 'Alcorcon', '1233142123', '2022-06-07 13:07:29'),
(14, 'ElSCe', 'Isable', 'MuÃ±oz', 'Alcorcon', '1233142123', '2022-06-07 13:07:56'),
(15, 'mY0RG', 'Isable', 'MuÃ±oz', 'Alcorcon', '1233142123', '2022-06-07 13:08:33'),
(16, 'VWKak', 'Alfonso', 'Perez', 'Albacete', '797927123', '2022-06-07 16:15:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_cp`
--

CREATE TABLE `pedido_cp` (
  `id` int(11) NOT NULL,
  `ref` varchar(20) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `medio` varchar(50) NOT NULL,
  `total` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido_cp`
--

INSERT INTO `pedido_cp` (`id`, `ref`, `cliente`, `estado`, `medio`, `total`, `fecha`) VALUES
(1, 'wmZVM', 'EcQOK', 'Pagado', 'Tarjeta bancaria', '290', '2022-06-05 22:39:39'),
(2, 'H7q8', 'gsm9O', 'Pagado', 'Tarjeta bancaria', '120', '2022-06-05 22:47:36'),
(3, '0i4Dh', 'axpB6', 'Falta de pago', 'Tarjeta bancaria', '105', '2022-06-05 22:51:02'),
(6, 'hfBl', 'NfTP', 'Pagado', 'Tarjeta bancaria', '30', '2022-06-07 12:56:14'),
(13, 'W6fMy', 'P8Ob', 'Falta de pago', 'Tarjeta bancaria', '35', '2022-06-07 13:07:29'),
(14, 'SUSeK', 'ElSCe', 'Falta de pago', 'Tarjeta bancaria', '35', '2022-06-07 13:07:56'),
(15, '3IMF', 'mY0RG', 'Falta de pago', 'Tarjeta bancaria', '35', '2022-06-07 13:08:33'),
(16, 'SGrBA', 'VWKak', 'Falta de pago', 'Tarjeta bancaria', '170', '2022-06-07 16:15:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_datos_cp`
--

CREATE TABLE `pedido_datos_cp` (
  `id` int(20) NOT NULL,
  `ref` varchar(20) NOT NULL,
  `cantidad` varchar(20) NOT NULL,
  `articulo` varchar(100) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido_datos_cp`
--

INSERT INTO `pedido_datos_cp` (`id`, `ref`, `cantidad`, `articulo`, `precio`, `total`, `fecha`) VALUES
(1, 'wmZVM', '4', 'Camiseta Mujer', '35.00', '140', '2022-06-05 22:39:39'),
(2, 'wmZVM', '1', 'Camiseta Hombre', '30.00', '30', '2022-06-05 22:39:39'),
(3, 'wmZVM', '1', 'Chandal Equipo', '60.00', '60', '2022-06-05 22:39:39'),
(4, 'wmZVM', '1', 'Camiseta Hombre', '30.00', '30', '2022-06-05 22:39:39'),
(5, 'wmZVM', '1', 'Camiseta Hombre', '30.00', '30', '2022-06-05 22:39:39'),
(6, 'H7q8', '1', 'Chandal Equipo', '60.00', '60', '2022-06-05 22:47:36'),
(7, 'H7q8', '2', 'Camiseta Hombre', '30.00', '60', '2022-06-05 22:47:36'),
(8, '0i4Dh', '3', 'Camiseta Mujer', '35.00', '105', '2022-06-05 22:51:02'),
(9, 'q7qKo', '1', 'Camiseta Hombre', '30.00', '30', '2022-06-06 22:07:46'),
(10, 'q7qKo', '1', 'Fondo Norte', '40.00', '40', '2022-06-06 22:07:46'),
(11, 'hfBl', '1', 'Camiseta Hombre', '30.00', '30', '2022-06-07 12:56:14'),
(12, 'JMFTU', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:00:28'),
(13, '59eQG', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:01:33'),
(14, 'krsTt', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:01:43'),
(15, 'Oa4JP', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:03:13'),
(16, 'lNhhb', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:05:17'),
(17, 'iQm05', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:07:13'),
(18, 'W6fMy', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:07:29'),
(19, 'SUSeK', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:07:56'),
(20, '3IMF', '1', 'Camiseta Mujer', '35.00', '35', '2022-06-07 13:08:33'),
(21, 'SGrBA', '1', 'Fondo Sur', '40.00', '40', '2022-06-07 16:15:30'),
(22, 'SGrBA', '1', 'Fondo Norte', '40.00', '40', '2022-06-07 16:15:30'),
(23, 'SGrBA', '1', 'Camiseta Hombre', '30.00', '30', '2022-06-07 16:15:30'),
(24, 'SGrBA', '1', 'Chandal Equipo', '60.00', '60', '2022-06-07 16:15:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idp` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idp`, `nombre`, `foto`, `precio`, `cantidad`) VALUES
(1, 'Camiseta Hombre', 'cam1.jpg', '30.00', 99),
(2, 'Camiseta Mujer', 'cam2.jpg', '35.00', 50),
(3, 'Chandal Equipo', 'chandal.jpg', '60.00', 49),
(5, 'Polo', 'polo.png', '50.00', 30),
(6, 'Sudadera', 'sudadera.webp', '30.00', 50),
(7, 'Segunda EquipaciÃ³n', 'Segunda equipacion.webp', '40.00', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `p_apellido` varchar(100) NOT NULL,
  `s_apellido` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` enum('Hombre','Mujer','Otro') NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `nombre`, `p_apellido`, `s_apellido`, `password`, `fecha_nacimiento`, `genero`, `rol`) VALUES
(1, 'asdasda@gmail.com', 'Daniel', 'Ortega', 'Pereza', '$2y$10$iPY4N.e2u0fPPPtNweVSIOZApku5BsCEsjpwa/7MEEj9QnlsnIWZe', '2022-06-21', 'Otro', 0),
(3, 'usuario@gmail.com', 'Usuario', 'Usu', 'arioda', '$2y$10$cwpaYhMCdYzJJngjY3KmSO/iGUw6a2CVRIjiWrOe5qTHs/vWAO.B.', '2022-06-22', 'Mujer', 1),
(4, 'antonio@gmail.com', 'antonio', 'Lopez', 'as', '$2y$10$YWwTdUn0SwcDXeXzi9a.KuXgdAfy74uCqySqcUUUIQ2DS0rv.gMsG', '2013-10-30', 'Hombre', 1),
(5, 'rafa@fgmail.com', 'Rafael', 'pru', 'eba', '$2y$10$G1Zjdivb.xmU6CCoIB8Is.6jnzPcF94HhTkny.m5VO9yafAR4qFLK', '2008-05-15', 'Hombre', 1),
(6, 'pablo@gmail.com', 'pablo', 'pa', 'blo', '$2y$10$Iwy2AWsARXy/O7//.pd2.OWdhuHBeQf1O8xr83gUVWTDODwOG.Wlq', '2001-08-31', 'Hombre', 0),
(7, 'admin@gmial.com', 'admin', 'admin', 'admin', '$2y$10$53I7m3cTg.3l0.kJ965aCeG1mPj.W89lbOTdLkcPhFMVEJB.Kzr0C', '1993-10-13', 'Hombre', 0),
(8, 'manolo@gmail.com', 'Manolo', 'Sanchez', 'Lopez', '$2y$10$6oPffPtMsiPd1wn4SlCSYuo./81A3V4j4dg9J1iqSNsnvKrvR8VhO', '2001-06-16', 'Hombre', 1),
(9, 'anne@gmail.com', 'Anne', 'Martin ', 'Benito', '$2y$10$MboLOuQLTlj8CB2lw809c.kIDi7qmoqq3yGmWWi9lqICt7qmmejCO', '2003-06-09', 'Mujer', 1),
(10, 'marco@gmail.com', 'Marco', 'MartÃ­n', 'Gomez', '$2y$10$F7ATVRELXrNzSwpo5iCubupUcLlyI5mRfQjqOoCT35ibr1eaGf1XO', '2007-06-07', 'Otro', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`ide`);

--
-- Indices de la tabla `pedido_cliente_cp`
--
ALTER TABLE `pedido_cliente_cp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido_cp`
--
ALTER TABLE `pedido_cp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido_datos_cp`
--
ALTER TABLE `pedido_datos_cp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idp`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido_cliente_cp`
--
ALTER TABLE `pedido_cliente_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pedido_cp`
--
ALTER TABLE `pedido_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pedido_datos_cp`
--
ALTER TABLE `pedido_datos_cp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
