-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2017 at 04:01 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_mst`
--

CREATE TABLE `emp_mst` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `emp_password` varchar(250) NOT NULL,
  `privilege_type` int(11) NOT NULL,
  `flag_dele` smallint(6) DEFAULT '0',
  `flag_active` smallint(6) NOT NULL DEFAULT '1',
  `last_litime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_mst`
--

INSERT INTO `emp_mst` (`emp_id`, `emp_name`, `emp_password`, `privilege_type`, `flag_dele`, `flag_active`, `last_litime`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 1, '2017-12-20 18:28:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_mst`
--
ALTER TABLE `emp_mst`
  ADD PRIMARY KEY (`emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
