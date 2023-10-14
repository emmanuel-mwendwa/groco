-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 01:38 PM
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(128) NOT NULL,
  `adminUsername` varchar(45) NOT NULL,
  `adminEmail` varchar(128) NOT NULL,
  `adminNumber` int(13) NOT NULL,
  `adminPassword` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminUsername`, `adminEmail`, `adminNumber`, `adminPassword`) VALUES
(0, 'Admin', 'admin', 'admin@admin.com', 1234, '$2y$10$WYP9lVVbROyeytJFx8HaiOWlnwUCDKBbCJuKLYTB9WCht9N8GXsz6');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerId` int(11) NOT NULL,
  `customerName` varchar(128) NOT NULL,
  `customerUsername` varchar(45) NOT NULL,
  `customerEmail` varchar(128) NOT NULL,
  `customerNumber` int(13) NOT NULL,
  `customerPassword` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `customerName`, `customerUsername`, `customerEmail`, `customerNumber`, `customerPassword`) VALUES
(0, 'John Doe', 'johndoe', 'johndoe@gmail.com', 1234, '$2y$10$ZJyUGWs3PEXK2qANNL/NEOq.FA4S6BVwC2xdCTal3teyUaYrSzgfq');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Malenge', 1000, '../image/products/652a2a5358e739.80988925.png'),
(2, 'Malenge', 1000, '../image/products/652a2aac8fa254.59146521.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
