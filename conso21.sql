-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 10:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conso21`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `conso_id` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `bizquiz` tinyint(1) NOT NULL DEFAULT 0,
  `swades` tinyint(1) NOT NULL DEFAULT 0,
  `adventure` tinyint(1) NOT NULL DEFAULT 0,
  `operational_research` tinyint(1) NOT NULL DEFAULT 0,
  `war_of_worlds` tinyint(1) NOT NULL DEFAULT 0,
  `render_ico` tinyint(1) NOT NULL DEFAULT 0,
  `pitchmantra` tinyint(1) NOT NULL DEFAULT 0,
  `ceo` tinyint(1) NOT NULL DEFAULT 0,
  `wallstreet` tinyint(1) NOT NULL DEFAULT 0,
  `epl` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `email`, `name`, `contact`, `conso_id`, `college`, `otp`, `bizquiz`, `swades`, `adventure`, `operational_research`, `war_of_worlds`, `render_ico`, `pitchmantra`, `ceo`, `wallstreet`, `epl`) VALUES
(20, 'lakshyashukla32@gmail.com', 'Lakshya', '7738446941', 'Lak5718', 'VNIT ', 'Confirmed', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(21, 'anil@gmail.com', 'Anil', '7738446941', '', '', NULL, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(22, 'sunil@gmail.com', 'Sunil', '12121', '', '', NULL, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(23, 'munil@gmail.com', 'munil', '787878', '', '', NULL, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
