-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql308.epizy.com
-- Generation Time: May 02, 2021 at 02:04 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27873369_RMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Early_booking`
--

CREATE TABLE `Early_booking` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Early_booking`
--

INSERT INTO `Early_booking` (`id`, `name`, `phone`) VALUES
(1, 'Biswa Chaudhary', 1112233344),
(2, 'sudeep bhatta', 2147483647),
(3, 'sam stevens', 11223344),
(4, 'Steven Wilson', 2147483647),
(5, 'Sudeep Bhatta', 2147483647),
(6, 'Ryan', 555555),
(7, 'Sudeep Bhatta1', 5555555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Early_booking`
--
ALTER TABLE `Early_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Early_booking`
--
ALTER TABLE `Early_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
