-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2015 at 03:11 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trial_hostgroup`
--
CREATE DATABASE IF NOT EXISTS `trial_hostgroup` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trial_hostgroup`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `group` varchar(50) NOT NULL DEFAULT 'default',
  `role` varchar(50) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `role`) VALUES
(15, 'akhfa', '1b8ecafda6be41799698012eadf3f5f8', 'admin', 'admin'),
(20, 'akhfa1', '1b8ecafda6be41799698012eadf3f5f8', 'grup1', 'user'),
(21, 'akhfa2', '1b8ecafda6be41799698012eadf3f5f8', 'grup1', 'user'),
(22, 'akhfa3', '1b8ecafda6be41799698012eadf3f5f8', 'grup2', 'user'),
(23, 'akhfa4', '1b8ecafda6be41799698012eadf3f5f8', 'grup2', 'user'),
(24, 'akhfa5', '1b8ecafda6be41799698012eadf3f5f8', 'default', 'user'),
(26, 'akhfa5', '1b8ecafda6be41799698012eadf3f5f8', 'default', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
