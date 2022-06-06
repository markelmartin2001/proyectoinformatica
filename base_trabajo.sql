-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 17:45:02
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id` int(11) NOT NULL,
  `ped_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'axpB6', 'Rafael', 'Perez', 'madird', '90342683', '2022-06-05 22:51:02');

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
(0, 'wmZVM', 'EcQOK', 'Falta de pago', 'Tarjeta bancaria', '290', '2022-06-05 22:39:39'),
(0, 'H7q8', 'gsm9O', 'Falta de pago', 'Tarjeta bancaria', '120', '2022-06-05 22:47:36'),
(0, '0i4Dh', 'axpB6', 'Falta de pago', 'Tarjeta bancaria', '105', '2022-06-05 22:51:02');

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
(8, '0i4Dh', '3', 'Camiseta Mujer', '35.00', '105', '2022-06-05 22:51:02');

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
(0, 'Camiseta Hombre', 'cam1.jpg', '30.00', 100),
(1, 'Camiseta Mujer', 'cam2.jpg', '35.00', 80),
(2, 'Chandal Equipo', 'chandal.jpg', '60.00', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(100) NOT NULL,
  `p_apellido` varchar(100) NOT NULL,
  `s_apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` enum('Hombre','Mujer','Otro') NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `p_apellido`, `s_apellido`, `email`, `password`, `fecha_nacimiento`, `genero`, `rol`) VALUES
('Daniel', 'Ortega', 'Robles', 'asdasda@gmail.com', '$2y$10$iPY4N.e2u0fPPPtNweVSIOZApku5BsCEsjpwa/7MEEj9QnlsnIWZe', '2000-07-22', 'Hombre', 0),
('Javier', 'Lopez', 'Sanchez', 'javier@hotmail.com', '$2y$10$qOyl/fpAJUtXdtqO3GSNYus5rR33KHm2iB1WyYFfLUo/uIsgqpPzi', '2022-06-06', 'Mujer', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido_cliente_cp`
--
ALTER TABLE `pedido_cliente_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedido_datos_cp`
--
ALTER TABLE `pedido_datos_cp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
