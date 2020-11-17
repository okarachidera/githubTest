-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 04:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `memid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`memid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memid`, `firstname`, `lastname`, `gender`, `email`, `password`, `created`) VALUES
(1, 'Adebayo', 'Michael', 'Male', 'mcgamma04@yahoo.com', '1234', '2020-10-14 04:10:00'),
(2, 'Sukanmi', 'Akinlaja', 'Female', 'okara.chidera@gmail.com', 'chider11', '2020-10-15 05:10:00'),
(3, 'Adebayo', 'Michael', 'Male', 'sesan@gmail.com', '1234', '2020-10-18 21:32:00'),
(4, 'Olu', 'Jacob', 'Female', 'olu@gmail.com', '12345', '2020-10-19 07:02:00'),
(5, 'John', 'Obi', 'Male', 'obi@gmail.com', 'obi', '2020-10-19 11:57:00'),
(6, 'Owen', 'Everest', 'Female', 'owen@yahoo.com', '1234', '2020-10-19 12:10:00'),
(7, 'Bola', 'Adeshina', 'Female', 'bola@gmail.com', '1234', '2020-10-20 05:45:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
