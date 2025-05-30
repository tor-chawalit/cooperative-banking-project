-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 04:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bank_atm`
--

CREATE TABLE `bank_atm` (
  `bank_atm_id` int(10) NOT NULL,
  `bank_1000` int(50) NOT NULL,
  `bank_500` int(50) NOT NULL,
  `bank_100` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_atm`
--

INSERT INTO `bank_atm` (`bank_atm_id`, `bank_1000`, `bank_500`, `bank_100`) VALUES
(1, 8, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `dividend`
--

CREATE TABLE `dividend` (
  `dividend_id` int(11) NOT NULL,
  `acc_num` varchar(5) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `datetime` date NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `bank_atm_id` int(10) NOT NULL,
  `acc_num` varchar(5) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp(),
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`bank_atm_id`, `acc_num`, `amount`, `datetime`, `type`) VALUES
(1, '00002', 2600, '2023-08-16', 'ฝากเงิน');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `card_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(4) NOT NULL,
  `acc_num` varchar(5) NOT NULL,
  `balance` decimal(10,0) NOT NULL,
  `status` int(1) NOT NULL,
  `usr_img` varchar(150) NOT NULL,
  `date` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `card_id`, `first_name`, `last_name`, `password`, `acc_num`, `balance`, `status`, `usr_img`, `date`) VALUES
(25, 'tor.chawalit@hotmail.com', '1119701128874', 'Chawalit', 'Chomchatchawan', '1111', '00001', 5000, 0, '8988.jpg', 0),
(45, 'taetor@gmail.com', '5443534534534', 'chawalit', 'qqq', '1231', '00002', 0, 0, '54297.jpg', 0),
(49, 'tor.cwl@hotmail.com', '4852135966666', 'Tor', 'Chawalit', '1233', '00003', 0, 0, '', 0),
(50, 'chawalit1@hotmail.com', '8797987987987', 'Chawalit', 'Cwl', '1111', '00004', 0, 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bank_atm`
--
ALTER TABLE `bank_atm`
  ADD PRIMARY KEY (`bank_atm_id`);

--
-- Indexes for table `dividend`
--
ALTER TABLE `dividend`
  ADD PRIMARY KEY (`dividend_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`bank_atm_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_atm`
--
ALTER TABLE `bank_atm`
  MODIFY `bank_atm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dividend`
--
ALTER TABLE `dividend`
  MODIFY `dividend_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `bank_atm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
