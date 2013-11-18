-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2013 at 01:21 PM
-- Server version: 5.5.27-log
-- PHP Version: 5.3.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `benz_landingpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `count` int(10) NOT NULL DEFAULT '0',
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `name`, `count`, `create_at`, `update_at`) VALUES
(1, 'Facebook Ads', 0, '2013-11-11 00:00:00', '2013-11-18 11:23:30'),
(2, 'GDN', 0, '2013-11-11 00:00:00', '2013-11-15 08:11:30'),
(3, 'Adwords', 0, '2013-11-11 00:00:00', '2013-11-15 03:23:26'),
(4, 'Mobile Ads', 0, '2013-11-11 00:00:00', '2013-11-15 03:24:16'),
(5, 'Benz Tab', 0, '2013-11-11 00:00:00', '2013-11-18 11:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `car_type` int(3) NOT NULL,
  `ads` int(2) NOT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
