-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 01:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `car_id` int(11) NOT NULL,
  `carname` varchar(30) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `numplate` varchar(10) DEFAULT NULL,
  `driver` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `ppd` int(11) DEFAULT NULL,
  `ppkm` int(11) DEFAULT NULL,
  `loc` varchar(20) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_id`, `carname`, `image`, `numplate`, `driver`, `phone`, `ppd`, `ppkm`, `loc`, `size`) VALUES
(1, 'xDA', 'file-20200508-49546-dx6y3a.jpg', 'ASDF', '1234', '123', 12, 12, 'guindy', 'micro'),
(11, 'Dzire', 'C:\\fakepath\\car2.jpg', 'AZXC', 'Ram', '9874563258', 1000, 100, 'guindy', 'micro'),
(12, 'Swift', 'C:\\fakepath\\car.png', 'AZSS', 'Raghu', '897456965', 1500, 200, 'ashoknagar', 'suv'),
(13, 'Baleno', 'C:\\fakepath\\car2.jpg', 'AQWE', 'Sekhar', '998877445', 1200, 33, 'chepauk', 'micro'),
(14, 'Dzire', 'C:\\fakepath\\car3.jpg', 'AWER', 'Mani', '8895966874', 1400, 300, 'tambaram', 'mini'),
(15, 'Grandi10', 'C:\\fakepath\\car4.jpg', 'AQQW', 'John', '9874569874', 1500, 300, 'ashoknagar', 'suv');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `email` varchar(50) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`email`, `name`, `age`, `phone`, `pwd`) VALUES
('bmspr1502@gmail.com', 'PRANAVA RAMAN B M S', 12, '9443501317', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
