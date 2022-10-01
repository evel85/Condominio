-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2022 a las 03:56:51
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `condominio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_condominio`
--

CREATE TABLE `datos_condominio` (
  `id` int(11) NOT NULL,
  `nombre_cond` varchar(100) NOT NULL,
  `rif` varchar(10) NOT NULL,
  `direccion_cond` varchar(250) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `num_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_condominio`
--

INSERT INTO `datos_condominio` (`id`, `nombre_cond`, `rif`, `direccion_cond`, `pais`, `estado`, `municipio`, `num_usuarios`) VALUES
(1, 'Junta de Condominio La Churuata Torre 4', 'J123456789', 'Alta Vista, Puerto Ordaz', 'VE', 'Bolivar', 'Caroni', 8050);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_inmueble`
--

CREATE TABLE `datos_inmueble` (
  `ID` int(255) NOT NULL,
  `Apartamento` varchar(5) NOT NULL,
  `Apellido-Propietario` varchar(30) NOT NULL,
  `Nombre-Propietario` varchar(20) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_inmueble`
--

INSERT INTO `datos_inmueble` (`ID`, `Apartamento`, `Apellido-Propietario`, `Nombre-Propietario`, `Telefono`, `Email`) VALUES
(46, '55', 'Perez Flores', 'Pedro Luis', '0424-123456', 'pedro@gmail.com'),
(50, '24', 'Sanchez', 'Carmen', '0414-1234567', 'carmens24@gmail.com'),
(51, '123', 'Vargas', 'Elias', '0412-9876543', 'eliaselias123@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deudas`
--

CREATE TABLE `deudas` (
  `id` int(255) NOT NULL,
  `razon_deuda` varchar(255) NOT NULL,
  `monto_deuda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deudas`
--

INSERT INTO `deudas` (`id`, `razon_deuda`, `monto_deuda`) VALUES
(1, 'Cuota especial ascensor', 10),
(2, 'Gas', 2.5),
(5, 'Recibo agosto 2022', 6.2),
(6, 'Recibo Julio 2022', 7.4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `fecha` date NOT NULL,
  `factura` varchar(50) NOT NULL,
  `monto` float NOT NULL,
  `sub-tipo` text NOT NULL,
  `motivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `tipo`, `fecha`, `factura`, `monto`, `sub-tipo`, `motivo`) VALUES
(4, 'fijos', '2022-09-05', 'RFGF585', 20, 'servicios', 'Mantenimiento de Ascensores'),
(5, 'fijos', '2022-09-15', 'SF', 10, 'salarios', 'Adelanto Quincenal Conserje'),
(6, 'variables', '2022-09-20', '7854KT78', 25.5, 'Otros', 'Compra de suiche bomba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble_deudas`
--

CREATE TABLE `inmueble_deudas` (
  `id` int(11) NOT NULL,
  `id_inmueble` int(255) NOT NULL,
  `id_deuda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inmueble_deudas`
--

INSERT INTO `inmueble_deudas` (`id`, `id_inmueble`, `id_deuda`) VALUES
(1, 50, 1),
(2, 50, 5),
(3, 46, 1),
(4, 46, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_app`
--

CREATE TABLE `usuarios_app` (
  `id` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contrasenia` varchar(256) NOT NULL,
  `acceso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_app`
--

INSERT INTO `usuarios_app` (`id`, `usuario`, `contrasenia`, `acceso`) VALUES
(12, 'kile', '$2y$10$rGeiFYDbe8U7JOVsIDaBTuCZ1VcD8TIo9Gt.pk.y08RlvBcz3IThK', 'prop'),
(13, 'kile', '$2y$10$oCtsH6DK0v/uC3ZepvuIGugEwJGa1xCCtkgwV2RwMNUKD9aR.iAHW', 'prop');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_condominio`
--
ALTER TABLE `datos_condominio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_inmueble`
--
ALTER TABLE `datos_inmueble`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `deudas`
--
ALTER TABLE `deudas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inmueble_deudas`
--
ALTER TABLE `inmueble_deudas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_inmueble` (`id_inmueble`),
  ADD KEY `id_deuda` (`id_deuda`);

--
-- Indices de la tabla `usuarios_app`
--
ALTER TABLE `usuarios_app`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_condominio`
--
ALTER TABLE `datos_condominio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `datos_inmueble`
--
ALTER TABLE `datos_inmueble`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `deudas`
--
ALTER TABLE `deudas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inmueble_deudas`
--
ALTER TABLE `inmueble_deudas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios_app`
--
ALTER TABLE `usuarios_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inmueble_deudas`
--
ALTER TABLE `inmueble_deudas`
  ADD CONSTRAINT `inmueble_deudas_ibfk_1` FOREIGN KEY (`id_inmueble`) REFERENCES `datos_inmueble` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inmueble_deudas_ibfk_2` FOREIGN KEY (`id_deuda`) REFERENCES `deudas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
