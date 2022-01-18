-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 03:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(11) NOT NULL,
  `fname` int(25) NOT NULL,
  `lname` int(25) NOT NULL,
  `email` int(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `fname`, `lname`, `email`, `message`) VALUES
(1, 0, 0, 0, 'Kutzooi'),
(2, 0, 0, 0, 'dsasfasfa'),
(3, 0, 0, 0, 'dsasfasfa'),
(4, 0, 0, 0, 'dsasfasfa'),
(5, 0, 0, 0, 'dsasfasfa'),
(6, 0, 0, 0, 'dsasfasfa'),
(7, 0, 0, 0, 'dsasfasfa'),
(8, 0, 0, 0, 'dsasfasfa'),
(9, 0, 0, 0, 'dsasfasfa'),
(10, 0, 0, 0, 'dsasfasfa'),
(11, 0, 0, 0, 'dsasfasfa'),
(12, 0, 0, 0, 'dsasfasfa'),
(13, 0, 0, 0, 'dsasfasfa'),
(14, 0, 0, 0, 'dsasfasfa'),
(15, 0, 0, 0, 'dsasfasfa'),
(16, 0, 0, 0, 'dsasfasfa'),
(17, 0, 0, 0, 'dsasfasfa'),
(18, 0, 0, 0, 'dsasfasfa'),
(19, 0, 0, 0, 'dsasfasfa'),
(20, 0, 0, 0, 'dsasfasfa'),
(21, 0, 0, 0, 'dsasfasfa'),
(22, 0, 0, 0, 'dsasfasfa'),
(23, 0, 0, 0, 'dsasfasfa'),
(24, 0, 0, 0, 'dsasfasfa'),
(25, 0, 0, 0, 'dsasfasfa'),
(26, 0, 0, 0, 'dsasfasfa'),
(27, 0, 0, 0, 'dsasfasfa'),
(28, 0, 0, 0, 'dsasfasfa'),
(29, 0, 0, 0, 'dsasfasfa'),
(30, 0, 0, 0, 'dsasfasfa'),
(31, 0, 0, 0, 'dsasfasfa'),
(32, 0, 0, 0, 'dsasfasfa'),
(33, 0, 0, 0, 'dsasfasfa'),
(34, 0, 0, 0, 'dsasfasfa'),
(35, 0, 0, 0, 'dsasfasfa'),
(36, 0, 0, 0, 'dsasfasfa'),
(37, 0, 0, 0, 'dsasfasfa'),
(38, 0, 0, 0, 'dsasfasfa'),
(39, 0, 0, 0, 'dsasfasfa'),
(40, 0, 0, 0, 'dsasfasfa'),
(41, 0, 0, 0, 'dsasfasfa'),
(42, 0, 0, 0, 'dsasfasfa'),
(43, 0, 0, 0, 'dsasfasfa'),
(44, 0, 0, 0, 'dsasfasfa'),
(45, 0, 0, 0, 'dsasfasfa'),
(46, 0, 0, 0, 'dsasfasfa'),
(47, 0, 0, 0, 'dsasfasfa'),
(48, 0, 0, 0, 'dsasfasfa'),
(49, 0, 0, 0, 'dsasfasfa');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `class` varchar(25) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `img`, `class`, `link`) VALUES
(1, 'Escape Room', 'assets/images/escaperoom.png', 'escape', ''),
(2, 'IceField', 'assets/images/icefield.png', 'icefield', ''),
(3, 'ZuZu', 'assets/images/zuzu.png', 'zuzu', 'zuzu.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
