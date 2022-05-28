-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 06:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yummy_cakes`
--
CREATE DATABASE IF NOT EXISTS `yummy_cakes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `yummy_cakes`;

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

DROP TABLE IF EXISTS `cakes`;
CREATE TABLE `cakes` (
  `id` int(5) NOT NULL,
  `type` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` float(6,2) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`id`, `type`, `img`, `price`, `quantity`) VALUES
(1, 'Chocolate Cake', 'cake1.jpg', 18.75, 6),
(2, 'Cheese Cake', 'cheese_cake.jpg', 3.00, 11),
(4, 'Red Velvet Cake', 'red_velvet.jpg', 24.45, 2),
(5, 'Cake Pops', 'cake-pops.jpg', 3.50, 37),
(6, 'Blueberry Tart', 'blueberries_tart.jpg', 23.00, 8),
(7, 'Wild Roses Cake', 'roses-cake.jpg', 22.75, 4),
(8, 'Christmas Cake', 'xmas-cake.jpg', 18.00, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
