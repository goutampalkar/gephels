-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 06:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE IF NOT EXISTS `cost` (
`cost_id` int(11) NOT NULL,
  `Days` varchar(50) NOT NULL,
  `Rate` varchar(50) NOT NULL,
  `packate_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`cost_id`, `Days`, `Rate`, `packate_id`) VALUES
(1, '1 DAY', '3000', 2),
(2, '2 DAY', '8000', 2),
(3, '3 DAY', '15000', 1),
(4, '1 NIGHT', '8000', 2),
(5, '2 NIGHT', '15000', 1),
(6, '3 NIGHT', '20000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packate`
--

CREATE TABLE IF NOT EXISTS `packate` (
`packate_id` int(11) NOT NULL,
  `packate_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packate`
--

INSERT INTO `packate` (`packate_id`, `packate_name`) VALUES
(1, 'Residential'),
(2, 'Non-Residential');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(14) NOT NULL,
  `age` int(4) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `package` int(2) NOT NULL,
  `days` int(2) NOT NULL,
  `workshop` varchar(10) NOT NULL,
  `cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
 ADD PRIMARY KEY (`cost_id`), ADD KEY `packate_id` (`packate_id`);

--
-- Indexes for table `packate`
--
ALTER TABLE `packate`
 ADD PRIMARY KEY (`packate_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
MODIFY `cost_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `packate`
--
ALTER TABLE `packate`
MODIFY `packate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cost`
--
ALTER TABLE `cost`
ADD CONSTRAINT `cost_ibfk_1` FOREIGN KEY (`packate_id`) REFERENCES `packate` (`packate_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
