-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 09:47 PM
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
-- Database: `conso21`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventure`
--

CREATE TABLE `adventure` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `typeof_ad` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bizquiz`
--

CREATE TABLE `bizquiz` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `team_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ceo`
--

CREATE TABLE `ceo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `razor_payment_id` varchar(255) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ceo`
--

INSERT INTO `ceo` (`id`, `name`, `contact`, `email`, `college`, `order_id`, `razor_payment_id`, `payment_status`) VALUES
(1, '', 2147483647, 'lakshyashukla32@gmail.com', '', '', '', 0),
(2, '', 2147483647, 'lakshyashukla32@gmail.com', '', '', '', 0),
(3, '', 2147483647, 'lakshyashukla32@gmail.com', '', '', '', 0),
(4, 'Lakshya', 2147483647, 'lakshyashukla32@gmail.com', '', '', '', 0),
(5, 'Lakshya', 2147483647, 'lakshyashukla32@gmail.com', '', '', '', 0),
(6, 'Lakshya', 2147483647, 'lakshyashukla32@gmail.com', '', '', '', 0),
(7, 'Lakshya', 2147483647, 'lakshyashukla32@gmail.com', '', '', '', 0),
(8, 'Lakshya', 2147483647, 'lakshyashukla32@gmail.com', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `operation_research`
--

CREATE TABLE `operation_research` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pitch_mantra`
--

CREATE TABLE `pitch_mantra` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `round1` tinyint(1) NOT NULL DEFAULT 0,
  `round2` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `conso_id` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `BizQuiz` tinyint(1) NOT NULL DEFAULT 0,
  `swades` tinyint(1) NOT NULL DEFAULT 0,
  `ad-venture` tinyint(1) NOT NULL DEFAULT 0,
  `operational_research` tinyint(1) NOT NULL DEFAULT 0,
  `war_of_worlds` tinyint(1) NOT NULL DEFAULT 0,
  `render_ico` tinyint(1) NOT NULL DEFAULT 0,
  `pitchmantra` tinyint(1) NOT NULL DEFAULT 0,
  `ceo` tinyint(1) NOT NULL DEFAULT 0,
  `wallstreet` tinyint(1) NOT NULL DEFAULT 0,
  `epl` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `render_ico`
--

CREATE TABLE `render_ico` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `swades`
--

CREATE TABLE `swades` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `round1` tinyint(1) NOT NULL DEFAULT 0,
  `round2` tinyint(1) NOT NULL DEFAULT 0,
  `round3` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wallstreet`
--

CREATE TABLE `wallstreet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `war_of_worlds`
--

CREATE TABLE `war_of_worlds` (
  `id` int(11) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `round1` tinyint(1) NOT NULL DEFAULT 0,
  `round2` tinyint(1) NOT NULL DEFAULT 0,
  `round3` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adventure`
--
ALTER TABLE `adventure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bizquiz`
--
ALTER TABLE `bizquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ceo`
--
ALTER TABLE `ceo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation_research`
--
ALTER TABLE `operation_research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pitch_mantra`
--
ALTER TABLE `pitch_mantra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `render_ico`
--
ALTER TABLE `render_ico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallstreet`
--
ALTER TABLE `wallstreet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adventure`
--
ALTER TABLE `adventure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bizquiz`
--
ALTER TABLE `bizquiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ceo`
--
ALTER TABLE `ceo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `operation_research`
--
ALTER TABLE `operation_research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pitch_mantra`
--
ALTER TABLE `pitch_mantra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `render_ico`
--
ALTER TABLE `render_ico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallstreet`
--
ALTER TABLE `wallstreet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
