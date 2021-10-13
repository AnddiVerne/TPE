-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 20:31:24
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `andel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(3) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Spiedo a las brasas'),
(2, 'Pastas'),
(3, 'Platos calientes'),
(4, 'Platos frios'),
(5, 'Minutas'),
(6, 'Sandwiches'),
(7, 'Tartas'),
(8, 'Minutas'),
(9, 'Pizzas'),
(10, 'Bebidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_plato` int(11) NOT NULL,
  `nombre_plato` varchar(60) NOT NULL,
  `precio` int(10) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `detalle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_plato`, `nombre_plato`, `precio`, `id_categoria`, `detalle`) VALUES
(1, '1/2 Pollo', 500, 1, NULL),
(2, 'Vacio', 2000, 1, NULL),
(3, 'Colita de cuadril', 2000, 1, NULL),
(4, 'Bondiola de cerdo', 2000, 1, NULL),
(5, 'Chorizo', 200, 1, NULL),
(6, 'Morcilla', 200, 1, NULL),
(7, 'Filet de Brotola', 350, 1, NULL),
(8, 'Ravioli', 300, 2, NULL),
(9, 'Ñoquis', 360, 2, NULL),
(10, 'Tortellini', 300, 2, NULL),
(11, 'Tortelloni', 360, 2, NULL),
(12, 'Lasagna', 600, 2, NULL),
(13, 'Cappelletti', 380, 2, NULL),
(14, 'Cannelloni', 450, 2, NULL),
(15, 'Milanesa de carne', 400, 3, NULL),
(16, 'Suprema de pollo', 400, 3, NULL),
(18, 'Milanesa Napolitana', 600, 3, 'Carne o pollo con jamon, queso y salsa de tomate - para compartir'),
(19, 'Arroz con pollo', 450, 3, 'Cebolla, morrón, azafrán con pollo desmenusado y desgrasado - Aporx. 600gr'),
(20, 'Guiso de lentejas', 450, 3, 'Cebolla, zanahoria, verduritas, panceta, chorizo colorado - Aprox. 600gr'),
(21, 'Guiso de mondongo', 450, 3, 'Cebolla, zanahoria, verduritas, panceta, chorizo colorado, cebolla, papas, garbanzo - Aprox.600gr'),
(22, 'Lechón', 2000, 4, NULL),
(23, 'Lechón', 2000, 4, NULL),
(24, 'Lengua a la vinagreta', 1700, 4, NULL),
(25, 'Matambre de carne', 2000, 4, NULL),
(26, 'Matambre de pollo', 1700, 4, NULL),
(27, 'Papas Fritas Chicas', 250, 5, 'Para 3 personas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_plato`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
