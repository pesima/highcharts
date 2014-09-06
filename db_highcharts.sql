-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2014 at 04:38 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_highcharts`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_marketing`
--

CREATE TABLE IF NOT EXISTS `web_marketing` (
  `name` varchar(50) DEFAULT NULL,
  `val` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_marketing`
--

INSERT INTO `web_marketing` (`name`, `val`) VALUES
('Direct Sales', '20.00'),
('Search Engine Marketing', '15.00'),
('PPC Advertising', '15.00'),
('Website Marketing', '10.00'),
('Blog Marketing', '10.00'),
('Social Media Marketing', '10.00'),
('Email Marketing', '10.00'),
('Online PR', '2.50'),
('Multimedia Marketing', '2.50'),
('Mobile Marketing', '2.50'),
('Display Advertising', '2.50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
