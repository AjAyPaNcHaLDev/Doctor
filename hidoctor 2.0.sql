-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 01:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hidoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `type` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(255) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `type`, `name`, `phone`, `email`, `password`, `status`, `date`) VALUES
(25, 'Admin', 'admin', '', 'admin@gmail.com', 'admin', 0, '2022-09-08'),
(54, 'REGIONAL MA', '', '', 'fdgdf@ffdg', '', 1, '2022-09-08'),
(60, 'REGIONAL MA', '', '', 'fcf@cfg', '', 1, '2022-09-08'),
(61, 'REGIONAL MA', '', '', 'dsf@dgdf', '', 1, '2022-09-08'),
(65, 'ASM', 'rajat', '1234567890', 'rajat@gmail.com', '123', 0, '2022-09-08'),
(66, 'REGIONAL MA', 'ajay123', '342', 'admin@themesbra344nd.com', '234', 1, '2022-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `eid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `dob` int(11) NOT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `type`, `eid`, `name`, `phone`, `dob`, `specialization`, `address`, `state`, `city`, `qualification`) VALUES
(4, 'chemeisty', 4, 'ram chander', '3432', 2022, NULL, 'jain dharmatma nager', 'punjab', 'abohar', NULL),
(5, 'chemeisty', 4, 'sonu', '1234', 2022, NULL, 'davi nager jind', 'haryana', 'jind', NULL),
(6, 'doctor', 4, 'ajay', '324', 2022, 'sdfsdbrain', 'durga nager hissar', 'haryana', 'vxv', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sale_executive`
--

CREATE TABLE `sale_executive` (
  `eid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `under_rsm` varchar(255) DEFAULT NULL,
  `under_asm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_executive`
--

INSERT INTO `sale_executive` (`eid`, `name`, `phone`, `email`, `password`, `status`, `date`, `state`, `city`, `under_rsm`, `under_asm`) VALUES
(4, 'ajay', '3423432423', 'admin@themesbrand.com', '12', 1, NULL, 'haryana', 'jind', '12', '22'),
(5, 'rajat', '3423432423', 'sales@gmail.com', 'sales', 1, NULL, 'haryana', 'jind', '12', '22');

-- --------------------------------------------------------

--
-- Table structure for table `tour_plan`
--

CREATE TABLE `tour_plan` (
  `id` int(11) NOT NULL,
  `eid` varchar(255) DEFAULT NULL,
  `id_doctor` varchar(255) NOT NULL,
  `date_of_visit` varchar(255) DEFAULT NULL,
  `place_from` varchar(255) DEFAULT NULL,
  `place_to` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  `doctor_remark` varchar(500) DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_executive`
--
ALTER TABLE `sale_executive`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tour_plan`
--
ALTER TABLE `tour_plan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sale_executive`
--
ALTER TABLE `sale_executive`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_plan`
--
ALTER TABLE `tour_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
