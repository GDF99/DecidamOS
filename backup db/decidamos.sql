-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 06:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decidamos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdr`
--

CREATE TABLE `cdr` (
  `id` int(255) NOT NULL,
  `total_electores` int(255) DEFAULT NULL,
  `circunscripcion` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `circunscripcion`
--

CREATE TABLE `circunscripcion` (
  `id` int(11) NOT NULL,
  `circunscripcion` int(255) DEFAULT NULL,
  `municipio` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `electores`
--

CREATE TABLE `electores` (
  `id` int(255) NOT NULL,
  `edad` int(255) DEFAULT NULL,
  `centro` varchar(255) DEFAULT NULL,
  `cdr` int(255) DEFAULT NULL,
  `voto` bit(1) DEFAULT NULL,
  `causa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nominado`
--

CREATE TABLE `nominado` (
  `id` int(255) NOT NULL,
  `integracion_revolucionaria` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `ocupacion` varchar(255) DEFAULT NULL,
  `total_votos` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nominado_vuelta`
--

CREATE TABLE `nominado_vuelta` (
  `id_vuelta` int(255) NOT NULL,
  `id_nominado` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `n_municipio`
--

CREATE TABLE `n_municipio` (
  `id` int(11) NOT NULL,
  `municipio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_municipio`
--

INSERT INTO `n_municipio` (`id`, `municipio`) VALUES
(1, 'Plaza de la Revolución'),
(2, 'Habana Vieja'),
(3, 'Centro Habana'),
(4, 'Diez de Octubre'),
(5, 'Cerro'),
(6, 'Arroyo Naranjo'),
(7, 'Boyeros'),
(8, 'Playa'),
(9, 'Marianao'),
(10, 'La Lisa'),
(11, 'Guanabacoa'),
(12, 'Regla'),
(13, 'Habana del Este'),
(14, 'San Miguel del Padrón'),
(15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `ID` int(255) NOT NULL,
  `1er_Nombre` varchar(100) NOT NULL,
  `2do_Nombre` varchar(100) NOT NULL,
  `1er_Apellido` varchar(255) NOT NULL,
  `2do_Apellido` varchar(255) NOT NULL,
  `CI` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`ID`, `1er_Nombre`, `2do_Nombre`, `1er_Apellido`, `2do_Apellido`, `CI`) VALUES
(9, 'Laura', '', 'Victoria', 'Mendoza', 0),
(14, 'Jorge', 'Luis', 'Chacon', 'Mena', 23),
(15, 'Gabriel', '', 'Diaz', 'Fernandez de Landa', 333),
(17, 'Alexey', '', 'Torres', '', 123),
(18, '', '', '', '', -18);

-- --------------------------------------------------------

--
-- Table structure for table `vuelta`
--

CREATE TABLE `vuelta` (
  `id` int(11) NOT NULL,
  `cdr` int(255) DEFAULT NULL,
  `no_vuelta` int(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `total_no _voto` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cdr`
--
ALTER TABLE `cdr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `circunscripcion` (`circunscripcion`);

--
-- Indexes for table `circunscripcion`
--
ALTER TABLE `circunscripcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipio` (`municipio`);

--
-- Indexes for table `electores`
--
ALTER TABLE `electores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cdr` (`cdr`);

--
-- Indexes for table `nominado`
--
ALTER TABLE `nominado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominado_vuelta`
--
ALTER TABLE `nominado_vuelta`
  ADD PRIMARY KEY (`id_vuelta`,`id_nominado`),
  ADD KEY `id_nominado` (`id_nominado`);

--
-- Indexes for table `n_municipio`
--
ALTER TABLE `n_municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CI` (`CI`);

--
-- Indexes for table `vuelta`
--
ALTER TABLE `vuelta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cdr_vuelta` (`cdr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cdr`
--
ALTER TABLE `cdr`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `circunscripcion`
--
ALTER TABLE `circunscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `n_municipio`
--
ALTER TABLE `n_municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cdr`
--
ALTER TABLE `cdr`
  ADD CONSTRAINT `circunscripcion` FOREIGN KEY (`circunscripcion`) REFERENCES `circunscripcion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `circunscripcion`
--
ALTER TABLE `circunscripcion`
  ADD CONSTRAINT `municipio` FOREIGN KEY (`municipio`) REFERENCES `n_municipio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `electores`
--
ALTER TABLE `electores`
  ADD CONSTRAINT `cdr` FOREIGN KEY (`cdr`) REFERENCES `cdr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_persona` FOREIGN KEY (`id`) REFERENCES `persona` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nominado`
--
ALTER TABLE `nominado`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `persona` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nominado_vuelta`
--
ALTER TABLE `nominado_vuelta`
  ADD CONSTRAINT `id_nominado` FOREIGN KEY (`id_nominado`) REFERENCES `nominado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_vuelta` FOREIGN KEY (`id_vuelta`) REFERENCES `vuelta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vuelta`
--
ALTER TABLE `vuelta`
  ADD CONSTRAINT `cdr_vuelta` FOREIGN KEY (`cdr`) REFERENCES `cdr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
