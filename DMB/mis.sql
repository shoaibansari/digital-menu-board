-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2016 at 07:03 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `animate`
--

CREATE TABLE IF NOT EXISTS `animate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marquee` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `animate`
--

INSERT INTO `animate` (`id`, `marquee`) VALUES
(1, ' Scrolling text Scrolling text Scrolling Scrolling text Scrolling text Scrolling Scrolling text Scrolling text Scrolling ');

-- --------------------------------------------------------

--
-- Table structure for table `pray_time`
--

CREATE TABLE IF NOT EXISTS `pray_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time1` varchar(50) NOT NULL,
  `time2` varchar(50) NOT NULL,
  `time3` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pray_time`
--

INSERT INTO `pray_time` (`id`, `time1`, `time2`, `time3`) VALUES
(1, 'Friday 1st: 00:00 pm', 'Friday 2nd: 00:00 pm', 'Weekend Duhur: 00:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE IF NOT EXISTS `tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `txt1` varchar(50) NOT NULL,
  `txt2` varchar(50) NOT NULL,
  `txt3` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tab`
--

INSERT INTO `tab` (`id`, `heading`, `txt1`, `txt2`, `txt3`) VALUES
(1, 'Heading 1', 'Dummy Text 1', 'Dummy Text 2', 'Dummy Text 3'),
(2, 'Heading 2', 'Dummy Text 1', 'Dummy Text 2', 'Dummy Text 3'),
(3, 'Heading 3', 'Dummy Text 1', 'Dummy Text 2', 'Dummy Text 3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
