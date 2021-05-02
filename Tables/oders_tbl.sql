-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql308.epizy.com
-- Generation Time: May 02, 2021 at 02:05 AM
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
-- Table structure for table `oders_tbl`
--

CREATE TABLE `oders_tbl` (
  `orderID` int(11) NOT NULL,
  `costumerId` int(100) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `AmtPaid` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oders_tbl`
--

INSERT INTO `oders_tbl` (`orderID`, `costumerId`, `UserName`, `AmtPaid`) VALUES
(44, 42, 'sudeep.sayon@gmail.com', 28.11036),
(21, 0, 'Thor1234', 14.05518),
(22, 0, 'Thor1234', 14.05518),
(23, 0, 'Thor1234', 14.05518),
(24, 0, 'Thor1234', 14.05518),
(25, 0, 'Thor1234', 14.05518),
(26, 0, 'Thor1234', 14.05518),
(27, 0, 'Thor1234', 14.05518),
(28, 0, 'Thor1234', 189.15524),
(29, 0, 'Thor1234', 102.70344),
(30, 20, 'Thor1234', 102.70344),
(31, 20, 'Thor1234', 32.42754),
(32, 20, 'Thor1234', 32.42754),
(33, 20, 'Thor1234', 55.1279),
(34, 0, 'nabeenaa', 112.38734),
(35, 0, 'nabeenaa', 112.38734),
(36, 0, 'nabeenaa', 112.38734),
(37, 20, 'Thor1234', 160.00616),
(38, 20, 'Thor1234', 160.00616),
(39, 0, 'nabeenaa', 112.38734),
(40, 0, 'nabeenaa', 30.26354),
(41, 0, 'nabeenaa', 30.26354),
(42, 20, 'Thor1234', 8.64518),
(43, 20, 'Thor1234', 8.64518);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oders_tbl`
--
ALTER TABLE `oders_tbl`
  ADD PRIMARY KEY (`orderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oders_tbl`
--
ALTER TABLE `oders_tbl`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
