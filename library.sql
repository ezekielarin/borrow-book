-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2020 at 03:26 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `copies` int(22) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `book_title`, `author`, `copies`) VALUES
(1, 'chike and the river', 'cyprian ikwensi', 6),
(2, 'women of owu', 'malam iliya', 22);

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

DROP TABLE IF EXISTS `borrowed`;
CREATE TABLE IF NOT EXISTS `borrowed` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(22) NOT NULL,
  `book_id` int(22) NOT NULL,
  `status` varchar(22) NOT NULL,
  `date_borrowed` varchar(30) NOT NULL,
  `return_date` varchar(30) NOT NULL,
  `date_returned` varchar(30) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowed`
--

INSERT INTO `borrowed` (`_id`, `user_id`, `book_id`, `status`, `date_borrowed`, `return_date`, `date_returned`) VALUES
(1, 1, 1, 'returned', '03-03-2020 23:17:45', '09-03-2020', '05-03-2020 07:31:29'),
(2, 1, 1, 'returned', '03-03-2020 23:22:41', '09-03-2020', '05-03-2020 07:31:29'),
(3, 1, 1, 'returned', '03-03-2020 23:26:40', '09-03-2020', '05-03-2020 07:31:29'),
(4, 1, 1, 'returned', '03-03-2020 23:29:16', '09-03-2020', '05-03-2020 07:31:29'),
(5, 1, 1, 'returned', '05-03-2020 00:44:28', '09-03-2020', '05-03-2020 07:31:29'),
(6, 1, 1, 'returned', '05-03-2020 00:48:10', '09-03-2020', '05-03-2020 07:31:29'),
(7, 1, 1, 'returned', '05-03-2020 00:49:01', '09-03-2020', '05-03-2020 07:31:29'),
(8, 1, 1, 'returned', '05-03-2020 00:53:33', '09-03-2020', '05-03-2020 07:31:29'),
(9, 1, 2, 'returned', '05-03-2020 00:54:11', '09-03-2020', '05-03-2020 07:16:22'),
(10, 1, 2, 'returned', '05-03-2020 07:06:28', '09-03-2020', '05-03-2020 07:16:22'),
(11, 1, 2, 'returned', '05-03-2020 07:06:31', '09-03-2020', '05-03-2020 07:16:22'),
(12, 1, 2, 'returned', '05-03-2020 07:06:38', '09-03-2020', '05-03-2020 07:16:22'),
(13, 1, 2, 'returned', '05-03-2020 07:08:06', '09-03-2020', '05-03-2020 07:16:22'),
(14, 1, 2, 'pending', '05-03-2020 07:16:22', '09-03-2020', '000000'),
(15, 1, 2, 'pending', '05-03-2020 07:16:23', '09-03-2020', '000000'),
(16, 1, 2, 'pending', '05-03-2020 07:16:23', '09-03-2020', '000000'),
(17, 1, 2, 'pending', '05-03-2020 07:16:24', '09-03-2020', '000000'),
(18, 1, 1, 'returned', '05-03-2020 07:24:05', '09-03-2020', '05-03-2020 07:31:29'),
(19, 2, 1, 'returned', '05-03-2020 07:24:28', '09-03-2020', '05-03-2020 07:31:46'),
(20, 1, 2, 'pending', '05-03-2020 07:27:26', '2020-03-25', '000000'),
(21, 2, 1, 'returned', '05-03-2020 07:27:41', '2020-03-18', '05-03-2020 07:31:46'),
(22, 1, 1, 'returned', '05-03-2020 07:29:55', '', '05-03-2020 07:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(22) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `user_id`, `full_name`, `role`, `class`) VALUES
(1, '1002', 'james maduka', 'teacher', ''),
(2, '23001', 'kunle segun', 'student', 'junior'),
(3, '25030', 'john doe', 'student', 'senior');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
