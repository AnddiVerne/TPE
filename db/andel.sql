-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 11:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(3) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
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
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_plato` int(11) NOT NULL,
  `nombre_plato` varchar(60) NOT NULL,
  `precio` int(10) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `detalle` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
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
(27, 'Papas Fritas Chicas', 250, 5, 'Para 3 personas'),
(28, 'Papas Fritas Chicas', 250, 5, 'Para 3 personas'),
(29, 'Papas Fritas Grandes', 300, 5, 'Para 4 o 5 personas'),
(30, 'Papas al horno Chicas', 250, 5, 'Para 3 personas'),
(31, 'Papas al horno Grandes', 350, 5, 'Para 4 o 5 personas'),
(32, 'Verduras grilladas Chicas', 250, 5, 'Tomate, cbebolla, calabaza, zapallito y berejena'),
(33, 'Verduras grilladas Grandes', 350, 5, 'Tomate, cbebolla, calabaza, zapallito y berejena'),
(34, 'Tortilla Chica', 400, 5, 'Papas, Acelga o Zapallito'),
(35, 'Tortilla Grande', 500, 5, 'Papas, Acelga o Zapallito'),
(36, 'Ensalada Rusa chica', 250, 5, 'papas, arbejas y mayonesa (aprox 700gr)'),
(37, 'Ensalada Rusa mediana', 300, 5, 'papas, arbejas y mayonesa (aprox 900gr)'),
(38, 'Ensalada Rusa grande', 400, 5, 'papas, arbejas y mayonesa (aprox 1,2 kg.)'),
(39, 'Puré', 400, 5, 'papa, calabaza o mixto. Aprox 500 gr'),
(40, 'Croquetas', 130, 5, 'papas o verduras, rellenas de muzzarella y queso rallado'),
(41, 'Empanadas', 70, 5, 'Cada una. De carne cortada a cuchillo, Pollo y Jamon Queso'),
(43, 'Supremo completo', 300, 6, 'Tomate, lechuga y mayonesa'),
(44, 'Supremo Super', 360, 6, 'Tomate, lechuga, jamon, queso y mayonesa'),
(45, 'Milanesa Carne Completa', 300, 6, 'Tomate, lechuga y mayonesa'),
(46, 'Milanesa Carne Super', 360, 6, 'Tomate, lechuga, jamon, queso y mayonesa'),
(47, 'Lomito', 380, 6, 'Tomate, lechuga y mayonesa'),
(48, 'Pollo a las brasas', 300, 6, 'Tomate, lechuga y mayonesa');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `clave` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `clave`) VALUES
(1, 'andrea.verne@hotmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_plato`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `mail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_plato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;