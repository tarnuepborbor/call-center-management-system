-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 05:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `callcntdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `call_log`
--

CREATE TABLE `call_log` (
  `id` int(11) NOT NULL,
  `callerName` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `_date` date NOT NULL,
  `_time` time(6) NOT NULL,
  `address` varchar(225) NOT NULL,
  `county` varchar(50) NOT NULL,
  `landMark` varchar(225) NOT NULL,
  `case_cat` varchar(50) NOT NULL,
  `call_cat` varchar(50) NOT NULL,
  `shift` varchar(11) NOT NULL,
  `recordBy` varchar(50) NOT NULL,
  `caseDescription` longtext NOT NULL,
  `supervisor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `call_log`
--

INSERT INTO `call_log` (`id`, `callerName`, `phone`, `_date`, `_time`, `address`, `county`, `landMark`, `case_cat`, `call_cat`, `shift`, `recordBy`, `caseDescription`, `supervisor`) VALUES
(11, 'Prince Tulay', 775544465, '2021-09-04', '06:37:00.000000', 'chicken sou', 'Montserrado', 'Near st. Pe', 'Child Abuse', 'Unsuccessfu', '1', 'Hon. Mamina', 'The caller did not explain well untail the pone went off. He was sounding very much hurt', 'Mr. Sylvest');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phoneNo` int(15) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(50) NOT NULL,
  `shift` varchar(22) NOT NULL,
  `userType` varchar(22) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phoneNo`, `email`, `password`, `shift`, `userType`, `pic`, `address`, `sex`) VALUES
(11, 'Test User', 775577746, 'test@gmail.com', 'test', 'One', 'Call Center Agent', 'uploads/3087x 010.jpg', 'Plank field community, New Georgia ', 'Male'),
(12, 'Prince Manjoe', 776677736, 'admin@gmail.com', 'admin', 'Two', 'Administrator', 'uploads/68734.png', 'Broad Street, Monrovia Liberia', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `call_log`
--
ALTER TABLE `call_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `call_log`
--
ALTER TABLE `call_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
