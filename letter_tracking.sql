-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 05:43 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `letter_tracking`
--
CREATE DATABASE IF NOT EXISTS `letter_tracking` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `letter_tracking`;

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
  `name` varchar(50) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Lect_no` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`Lect_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `letter`
--

CREATE TABLE IF NOT EXISTS `letter` (
  `Letter_id` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `s` int(11) NOT NULL,
  `St_regno` varchar(20) NOT NULL,
  `lect_no` varchar(20) NOT NULL,
  KEY `St_regno` (`St_regno`),
  KEY `lect_no` (`lect_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `St_course` varchar(20) DEFAULT NULL,
  `St_email` varchar(20) DEFAULT NULL,
  `St_gender` char(1) DEFAULT NULL,
  `St_regno` varchar(20) NOT NULL,
  `St_age` int(10) NOT NULL,
  PRIMARY KEY (`St_regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Firstname`, `Lastname`, `Email`, `Role`, `id`) VALUES
('student01', '12345', 'farhia', 'hassan', 'far@gmail.com', 'Student', 2),
('admin', 'admin', 'Massoud', 'Mmanga', 'mmanga@gmail.com', 'admin', 3),
('student03', '12345', 'Zuhura', 'Abdullah', 'zuu@gmal.com', 'student', 8),
('hami', '12345', 'hamida', 'abdulla', 'hamida@gmail.com', 'Lecture', 9),
('sharis', '12345678', 'sharif', 'sharif', 'sharif@gmail.com', 'Student', 10),
('muu', '12345678', 'muzdalifat', 'ali', 'muu@gmail.com', 'Student', 11),
('zuhura', '12345678', 'zuhura', 'abdulla', 'zuhura@gmail.com', 'Student', 12),
('lecture01', '12345', 'raya', 'ahmad', 'raya@gmail.com', 'Lecture', 13),
('dfgh', '12345678', 'hn', 'fghjk', 'zuhura@gmail.com', 'Student', 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `letter`
--
ALTER TABLE `letter`
  ADD CONSTRAINT `letter_ibfk_1` FOREIGN KEY (`St_regno`) REFERENCES `students` (`St_regno`),
  ADD CONSTRAINT `letter_ibfk_2` FOREIGN KEY (`lect_no`) REFERENCES `lecture` (`Lect_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
