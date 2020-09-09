-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2020 at 01:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `myComment`
--

CREATE TABLE `myComment` (
  `id` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `textComment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myComment`
--

INSERT INTO `myComment` (`id`, `Name`, `textComment`, `date`) VALUES
(1, 'Вася', 'Хорошо', '2020-09-08 13:44:59'),
(2, 'Вася', 'Хорошо', '2020-09-07 13:45:14'),
(3, 'Вася', 'Хорошо', '2020-09-08 13:45:26'),
(4, 'Вася', 'Хорошо все ок', '2020-09-06 13:45:47'),
(9, 'Camara', 'Ok kjkfdsj gfdsgjl kjlgsdfjkg lksgdnfjkgsfgs\r\n  sbfdbdf\r\nsdfg\r\nsdf\r\nhgsdf\r\nh\r\nf', '2020-09-06 13:46:00'),
(10, 'fo', 'fasdfgds', '2020-09-08 22:15:01'),
(11, 'fo', 'fasdfgds', '2020-09-08 22:36:47'),
(12, 'fo', 'fasdfgds', '2020-09-08 22:39:40'),
(13, 'fo', 'fasdfgds', '2020-09-08 22:40:42'),
(14, 'fo', 'fasdfgds', '2020-09-08 22:42:35'),
(15, 'fo', 'fasdfgds', '2020-09-08 22:44:08'),
(16, 'fo', 'fasdfgds', '2020-09-08 22:46:15'),
(17, 'fo', 'fasdfgds', '2020-09-08 22:47:49'),
(18, 'fo', 'fasdfgds', '2020-09-08 22:51:51'),
(19, 'fo', 'fasdfgds', '2020-09-08 22:54:58'),
(20, 'cxz', 'cxz', '2020-09-08 23:52:55'),
(21, 'cxz', 'cxz', '2020-09-09 00:25:37'),
(22, 'cxvxc', 'cXZvxc', '2020-09-09 02:21:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myComment`
--
ALTER TABLE `myComment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myComment`
--
ALTER TABLE `myComment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
