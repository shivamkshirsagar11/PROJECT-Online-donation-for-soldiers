-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 11:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_p`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_donor`
--

CREATE TABLE `info_donor` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `t_number` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_donor`
--

INSERT INTO `info_donor` (`id`, `name`, `email`, `mobile`, `t_number`, `time`, `amount`, `address`, `city`, `code`, `state`, `country`) VALUES
(1, 'Vivek Rashmikant Patel', 'vivekpatel201102', 9016051012, 'null', 'null', 0, 'null', 'null', 0, 'null', 'null'),
(2, 'Shivam Pareshbhai Kshirsagar', 'shivamkshirsagar2002', 8200971628, 'null', 'null', 0, 'null', 'null', 0, 'null', 'null'),
(3, 'Vedant Jasminkumar Parikh', 'parikhvedant2003', 9428637251, 'null', 'null', 0, 'null', 'null', 0, 'null', 'null'),
(4, 'Yash S Patel', 'yashpatel1492002@gmail.com', 8320954171, '@bvngci3pkq4l3xp', 'July 03, 2021 10:44:58 AM', 50000, '4/B Arpan society, Pij road', 'Nadiad', 387002, 'Gujarat', 'India'),
(5, 'Tejas', 'tdchauhan07@gmail.com', 8200916588, '1cqvhvmn691itwej', 'July 03, 2021 04:04:31 PM', 100000, 'Unknown', 'Nadiad', 387002, 'Gujarat', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_donor`
--
ALTER TABLE `info_donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_donor`
--
ALTER TABLE `info_donor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
