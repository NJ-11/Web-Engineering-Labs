-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2015 at 01:01 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_data`
--

CREATE TABLE IF NOT EXISTS `account_data` (
  `login` varchar(30) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Middle Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Degree/ Grade` varchar(50) NOT NULL,
  `School` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE IF NOT EXISTS `credentials` (
  `login` varchar(30) NOT NULL,
  `password` varchar(14) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`login`, `password`, `id`) VALUES
('nayab', '123', 11);

-- --------------------------------------------------------

--
-- Table structure for table `sch_request`
--

CREATE TABLE IF NOT EXISTS `sch_request` (
  `login` varchar(30) NOT NULL,
  `period` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `fee` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
