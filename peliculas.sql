-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2019 a las 06:04:04
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_fab` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_compra`, `id_cliente`, `id_fab`, `Cantidad`, `Precio`) VALUES
(9, 9, 1, 2, 9000),
(10, 9, 1, 9, 40500),
(11, 2, 2, 500, 1451500),
(12, 2, 1, 2, 9000),
(13, 2, 6, 21, 183162),
(14, 2, 6, 600, 5233200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabricacion`
--

CREATE TABLE `fabricacion` (
  `id_fab` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fabricacion`
--

INSERT INTO `fabricacion` (`id_fab`, `id_prod`, `cantidad`, `precio`, `fecha`) VALUES
(1, 24, 400, 4500, '2019-08-02'),
(2, 25, 500, 2903, '2019-08-02'),
(3, 26, 700, 4983, '2019-08-31'),
(4, 25, 200, 2388, '2019-08-31'),
(6, 24, 621, 8722, '2019-08-31'),
(7, 24, 300, 4845, '2019-08-31'),
(8, 27, 500, 10000, '2019-09-04'),
(9, 26, 2503, 0, '2019-09-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'Administrador', '', 'admin@gmail.com', '1111', 1),
(2, 'camilo', '12345', 'camilo10@gmail.com', '', 2),
(4, 'daniel', '6789', 'dani@gmail.com', '', 2),
(5, 'paul', '1234', 'paulito@gmail.com', '', 2),
(6, 'german', '123', 'german@hotmail.com', '', 2),
(7, 'juan jose', '9999', 'juanjose@gmail.com', '', 2),
(9, 'Milton Londoño', '111', 'cliente@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiaprima`
--

CREATE TABLE `materiaprima` (
  `id_materia_prima` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `nombre_m_p` varchar(255) NOT NULL,
  `cantidad_pedir` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiaprima`
--

INSERT INTO `materiaprima` (`id_materia_prima`, `id_proveedor`, `nombre_m_p`, `cantidad_pedir`, `descripcion`) VALUES
(1, 7790123, 'Carton', 4999, 'carton del bueno'),
(1456, 54455, 'Plastico', 4000, 'Plastico Fino'),
(1515, 4830, 'Carton', 4000, 'Carton Fino'),
(2020, 97382, 'Plastico', 5000, 'Plastico del bueno'),
(2121, 54455, 'Plastico', 4900, 'Plastico Fino'),
(4041, 54455, 'Plastico', 3000, 'El mejor platico'),
(5050, 3030, 'Carton', 1000, 'Carton Fino'),
(7521, 74934, 'Plastico', 15000, 'Lo mejor en plasticos'),
(31421, 7700, 'Plastico', 6000, 'Plastico Fino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `id_materia_prima_1` int(11) NOT NULL,
  `id_materia_prima_2` int(11) NOT NULL,
  `requisito_1` int(11) NOT NULL,
  `requisito_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `Nombre`, `id_materia_prima_1`, `id_materia_prima_2`, `requisito_1`, `requisito_2`) VALUES
(23, 'pelicula plastica', 1515, 1456, 1, 1),
(24, 'PELICULA', 1, 2020, 1, 1),
(25, 'Pelicula Grande', 5050, 2121, 100, 100),
(26, 'Pelicula Pequeña', 1515, 7521, 2000, 2000),
(27, 'Roja', 5050, 2020, 1000, 1000),
(28, 'pelicula', 1515, 1456, 1000, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_empresa` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_empresa`, `material`, `email`, `direccion`) VALUES
(3030, 'RoldaCar', 'Carton', 'car@gmail.com', 'Carrera 3 # 11a - 13'),
(4830, 'CartonMedellin', 'Carton', 'CartonMed@gmail.com', 'calle 32#100-123'),
(7700, 'PelisPlas', 'Plastico', 'pelisplas@gmail.com', 'Calle 11 # 13 - 13'),
(23455, 'Carton la india', 'Carton', 'india@gmail.com', 'carrera 90 sur con sureste # 13 -44'),
(45456, 'RoldaPlas', 'Plastico', 'roldaplas@plastico.co', 'avenida el rio con carrera 12 esquina'),
(54455, 'Platicos Cali', 'Plastico', 'Plasticocali@gmail.com', 'Paso ancho'),
(74934, 'PlasticoMercedez', 'Plastico', 'merecedez@gmail.com', 'carrera 5# 12-67'),
(97382, 'Plastico Normal', 'Plastico', 'plasticonor@gmail.com', 'carrea 56 # 18-23'),
(789373, 'Carton La Nueva Esperanza', 'Carton', 'esperanzacarton@esperanzacar.co', 'avenida 50 con intercesiÃ³n 40'),
(984938, 'Plasticos El Coste', 'Plastico', 'CostePasticos@gmail.com', 'carerra 90 # 200-134'),
(7790123, 'Carton Colombia', 'Carton', 'cartoncol@cartoncolombia.co', 'Carrera 50 norte # 140-80');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id` (`id_cliente`),
  ADD KEY `id_fab` (`id_fab`);

--
-- Indices de la tabla `fabricacion`
--
ALTER TABLE `fabricacion`
  ADD PRIMARY KEY (`id_fab`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiaprima`
--
ALTER TABLE `materiaprima`
  ADD PRIMARY KEY (`id_materia_prima`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_materia_prima_1` (`id_materia_prima_1`),
  ADD KEY `id_materia_prima_2` (`id_materia_prima_2`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `fabricacion`
--
ALTER TABLE `fabricacion`
  MODIFY `id_fab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `login` (`id`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_fab`) REFERENCES `fabricacion` (`id_fab`);

--
-- Filtros para la tabla `fabricacion`
--
ALTER TABLE `fabricacion`
  ADD CONSTRAINT `fabricacion_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `producto` (`id_prod`);

--
-- Filtros para la tabla `materiaprima`
--
ALTER TABLE `materiaprima`
  ADD CONSTRAINT `materiaprima_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_materia_prima_1`) REFERENCES `materiaprima` (`id_materia_prima`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_materia_prima_2`) REFERENCES `materiaprima` (`id_materia_prima`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
