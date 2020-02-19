-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 04:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfred`
--

-- --------------------------------------------------------

--
-- Table structure for table `humidiy_sensor`
--

CREATE TABLE `humidiy_sensor` (
  `nodo_id` float NOT NULL,
  `value` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `light_sensor`
--

CREATE TABLE `light_sensor` (
  `nodo_id` float NOT NULL,
  `value` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nodes`
--

CREATE TABLE `nodes` (
  `nodo_id` float NOT NULL,
  `Room` varchar(100) NOT NULL,
  `Alias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nodes`
--

INSERT INTO `nodes` (`nodo_id`, `Room`, `Alias`) VALUES
(10, 'Cocina', 'Refi'),
(11, 'Cocina', 'entrada'),
(12, 'Cocina', 'tarja'),
(13, 'Cocina', 'cafetera'),
(14, 'Cuarto1', 'uno'),
(15, 'Cuarto1', 'dos'),
(16, 'Cuarto1', 'tres'),
(17, 'Cuarto1', 'cuarto'),
(24, 'Sala', 'entrada'),
(26, 'Cuarto1', 'otro mas'),
(28, 'Cuarto1', 'Entrada'),
(29, 'Sala', 'Lampara'),
(30, 'Prueba', 'primero'),
(31, 'Prueba', 'entrada'),
(32, 'cochera', 'cxzxvx');

-- --------------------------------------------------------

--
-- Table structure for table `presence_sensor`
--

CREATE TABLE `presence_sensor` (
  `nodo_id` float NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `relays`
--

CREATE TABLE `relays` (
  `nodo_id` float NOT NULL,
  `status` int(11) NOT NULL,
  `relay_id` int(11) NOT NULL DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relays`
--

INSERT INTO `relays` (`nodo_id`, `status`, `relay_id`, `date`) VALUES
(10, 1, 1, '2020-02-18 18:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `temperature_sensor`
--

CREATE TABLE `temperature_sensor` (
  `nodo_id` float NOT NULL,
  `value` float NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nodes`
--
ALTER TABLE `nodes`
  ADD PRIMARY KEY (`nodo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nodes`
--
ALTER TABLE `nodes`
  MODIFY `nodo_id` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
