-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 03:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `txnid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `foodid` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`txnid`, `userid`, `foodid`, `name`, `price`, `paid`) VALUES
(1, 1, 3, 'Ghee Roast', 70, 1),
(3, 1, 3, 'Ghee Roast', 70, 1),
(4, 1, 2, 'Masala Dosa', 60, 1),
(6, 1, 4, 'Poori', 50, 1),
(7, 1, 3, 'Ghee Roast', 70, 1),
(8, 1, 2, 'Masala Dosa', 60, 1),
(9, 2, 3, 'Ghee Roast', 70, 1),
(10, 2, 1, 'Idli (2)', 30, 1),
(11, 2, 4, 'Poori', 50, 1),
(12, 1, 2, 'Masala Dosa', 60, 1),
(14, 3, 4, 'Poori', 50, 1),
(15, 3, 4, 'Poori', 50, 1),
(16, 3, 3, 'Ghee Roast', 70, 1),
(17, 3, 4, 'Poori', 50, 1),
(18, 3, 3, 'Ghee Roast', 70, 1),
(19, 3, 1, 'Idli (2)', 30, 1),
(20, 3, 1, 'Idli (2)', 30, 1),
(21, 6, 4, 'Poori', 50, 1),
(22, 2, 9, 'Pongal', 40, 1),
(23, 2, 3, 'Ghee Roast', 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`) VALUES
(1, 'Idli (2)', 30),
(2, 'Masala Dosa', 60),
(3, 'Ghee Roast', 70),
(4, 'Poori', 50),
(8, 'Chappati', 50),
(9, 'Pongal', 40);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phoneno` bigint(25) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phoneno`, `password`) VALUES
(1, 'Test', 1234, '1234'),
(2, 'Raman', 9345, '9345'),
(3, 'Preet', 3560, '3560'),
(6, 'Hamsa', 9443501317, '9443501317');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`txnid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `txnid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
