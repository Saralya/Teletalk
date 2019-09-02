-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 08:34 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginsystem`
--

CREATE TABLE `loginsystem` (
  `Org_name` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Ministry` varchar(200) NOT NULL,
  `Contact` varchar(200) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Confirm` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Start_date` varchar(200) NOT NULL,
  `Last_date` varchar(200) NOT NULL,
  `Age_limit` varchar(200) NOT NULL,
  `No_of_post` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginsystem`
--

INSERT INTO `loginsystem` (`Org_name`, `Department`, `Ministry`, `Contact`, `Designation`, `Mobile`, `Confirm`, `Email`, `Start_date`, `Last_date`, `Age_limit`, `No_of_post`) VALUES
('GHG', 'GGG', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
