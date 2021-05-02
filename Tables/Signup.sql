-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql308.epizy.com
-- Generation Time: May 02, 2021 at 02:06 AM
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
-- Table structure for table `Signup`
--

CREATE TABLE `Signup` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `phone_number` bigint(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Signup`
--

INSERT INTO `Signup` (`id`, `name`, `email`, `password`, `usertype`, `phone_number`) VALUES
(37, 'Nabina', 'Nabina05@live.com', 'd8684a82b074678d203a3dd50e840d98cdeb4d11', 'user', 6823606925),
(11, 'Prizza Chaudhary', 'pchaudhary@gmail.com', 'abcde', '', 11222345567),
(14, 'Biswa Chy', 'Biswa123', '7a034186cf777c94906e3865232edf22', 'costumer', 2133244554),
(33, 'Achoo Nie', 'Acho01234', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'admin', 37491283794),
(31, 'Biswa', 'Chaudhary', '8cb2237d0679ca88db6464eac60da96345513964', 'user', 12345),
(18, 'toto', 'toto123', 'biswa', 'user', 176388633),
(32, 'Robert Dwaney Johnson', 'robert12345', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'admin', 1273988213),
(20, 'Thor Ragnarok', 'Thor1234', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'user', 3243),
(21, 'Captain America', 'cap123', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'user', 324),
(22, 'Biswa Chaudhary', 'biswa12345', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'admin', 493588735),
(23, 'Sam Hilton', 'Sam1234', 'ef2e0467d18c5f8fb4c07654cc08fac3141f4b79', 'admin', 783495734985),
(24, 'nabina sanjel', 'nabina05@live.com', '7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1', 'user', 1234567890),
(25, 'Om_nama_shivaye', 'sudeep.sayon@gmail.com', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'user', 5073516861),
(29, 'sam cult', 'sam1234', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'admin', 3534345),
(28, 'Steve Rogers', 'steve1234', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'employee', 3434555656534),
(30, 'Captain America', 'cap1234', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'employee', 20398424),
(34, 'Toto Wang', 'Toto1234', '0b9c2625dc21ef05f6ad4ddf47c5f203837aa32c', 'employee', 2435254354),
(36, 'Robert Gray', 'Robert123', '12e9293ec6b30c7fa8a0926af42807e929c1684f', 'employee', 878888),
(38, 'Nabina sanjel', 'Nabeenaa', 'd8684a82b074678d203a3dd50e840d98cdeb4d11', 'user', 6823606925),
(39, 'Sudeep Bhatta', 'Sudeep.sayon@gmail.com', 'dbce705929c7dc1924ea1173f37652bb00f96d6d', 'user', 123456789),
(40, 'Sudeep', 'Sudeep', 'dbce705929c7dc1924ea1173f37652bb00f96d6d', 'user', 123456789),
(41, 'sudeep', 'sudeep', '35c501f2687d09155b75237c672a7ca88cec4167', 'user', 1234567890),
(42, 'Sudeep Bhatta', 'sudeep.sayon@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'user', 5073516861),
(43, 'steven', 'dsajkads', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'user', 947394),
(44, 'sam', 'sam1234', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'admin', 543524),
(45, 'Ruby', 'djkds', 'c556c89454238137c35fc189cbcd6e36af9ec7aa', 'employee', 79879);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Signup`
--
ALTER TABLE `Signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Signup`
--
ALTER TABLE `Signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
