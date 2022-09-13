-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 01:04 PM
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
(25, '', 'ajay', '', 'ajay@gmail.com', 'ajay', 0, '2022-09-08'),
(26, '', 'sdf', '3343', 'fsd@fgsdf', '2323', 1, '2022-09-08'),
(27, NULL, '', '', 'sdfd@dfgf', '', 1, '2022-09-08'),
(28, NULL, 'dsfs', '3243', 'sdfd@dfgfdf', '234', 1, '2022-09-08'),
(29, NULL, 'dsfs', '3243', 'sdfd@dfgfdffd', '234', 1, '2022-09-08'),
(30, NULL, '', '', 'dfds@dg', '', 1, '2022-09-08'),
(31, NULL, '', '', 'sdfs@dfgd', '', 1, '2022-09-08'),
(32, NULL, '', '', 'sdfs@dfgdsdf', '', 1, '2022-09-08'),
(33, NULL, '', '', 'sdfs@dfgdsdfsdf', '', 1, '2022-09-08'),
(34, NULL, '', '', 'sdfs@dfgdsdfsdfsd', '', 1, '2022-09-08'),
(35, NULL, '', '', 'sdfsd@dgv', '', 1, '2022-09-08'),
(36, NULL, '', '', 'sdfsd@dgvsdfs', '', 1, '2022-09-08'),
(37, NULL, '', '', 'sdfsd@dgvsdfsdf', '', 1, '2022-09-08'),
(38, NULL, '', '', 'sdfsd@dgvsdfsdfdf', '', 1, '2022-09-08'),
(39, NULL, '', '', 'sdfsd@dgvsdfsdfdfdvdf', '', 1, '2022-09-08'),
(40, NULL, '', '', 'sdfsd@dgvsdfsdfdfdvdffdg', '', 1, '2022-09-08'),
(41, NULL, '', '', 'sdfsd@dgvsdfsdfdfdvdffdgdf', '', 1, '2022-09-08'),
(42, NULL, '', '', 'sdfsd@dfgdfg', '', 1, '2022-09-08'),
(43, NULL, '', '', 'admin@themesbrand.comdfgfvdg', '', 1, '2022-09-08'),
(44, ' ', 'sdfds@dfgf', '', 'fggdf@sdgfd', '', 1, '2022-09-08'),
(45, ' ', 'sdfds@dfgf', '', 'fggdf@sdgfdsdf', '', 1, '2022-09-08'),
(46, ' ', 'dgvd', '3543', 'vcbcv@cfcf', 'vvc', 1, '2022-09-08'),
(47, ' ', '', '2324', 'dfsd@dgd', '', 1, '2022-09-08'),
(48, 'REGIONAL MA', '', '', 'ddfffsd@dfgfd', '', 1, '2022-09-08'),
(49, 'REGIONAL MA', 'dsfd', '23423', 'ddfffsd@dfgfd32', '23432', 1, '2022-09-08'),
(50, 'ASM', 'sf', '233', 'sdfd@dfgfdfdsf', '', 1, '2022-09-08'),
(51, 'ASM', 'sf', '233', 'sdfd@dfgfdfdsfcfd', '', 1, '2022-09-08'),
(52, 'ASM', 'sf', '233', 'sdfd@dfgfdfdsfcfdfv', '', 1, '2022-09-08'),
(53, 'ASM', 'sf', '233', 'sdfd@dfgfdfdsfcfdfvdf', '', 1, '2022-09-08'),
(54, 'REGIONAL MA', '', '', 'fdgdf@ffdg', '', 1, '2022-09-08'),
(55, NULL, '', '', 'admin@themesbrand.comdfgfvdgcvd', '', 1, '2022-09-08'),
(56, NULL, '', '', 'dffd@dfg', '', 1, '2022-09-08'),
(57, NULL, '', '', 'dfds@dgvdf', '', 1, '2022-09-08'),
(58, NULL, '', '', 'sdfd@dfgfdfsdf', '', 1, '2022-09-08'),
(59, NULL, '', '', 'sdfs@dgvdf', '', 1, '2022-09-08'),
(60, 'REGIONAL MA', '', '', 'fcf@cfg', '', 1, '2022-09-08'),
(61, 'REGIONAL MA', '', '', 'dsf@dgdf', '', 1, '2022-09-08'),
(62, 'REGIONAL MA', '', '', 'sdfsd@rw', '', 1, '2022-09-08'),
(63, 'REGIONAL MA', '', '', 'dfsd@dgfd', '', 1, '2022-09-08'),
(64, NULL, 'ajay', '0123456788', 'ajay@gmail.com', 'ajay', 0, '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
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

INSERT INTO `doctors` (`id`, `eid`, `name`, `phone`, `dob`, `specialization`, `address`, `state`, `city`, `qualification`) VALUES
(1, 32, '', '', 0, '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sale_executive`
--

CREATE TABLE `sale_executive` (
  `eid` int(11) NOT NULL,
  `type` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(255) DEFAULT NULL,
  `date` date DEFAULT NULL
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sale_executive`
--
ALTER TABLE `sale_executive`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
