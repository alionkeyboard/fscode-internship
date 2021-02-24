-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 10:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fileupload`
--

-- --------------------------------------------------------

--
-- Table structure for table `imageupload`
--

CREATE TABLE `imageupload` (
  `id` int(11) NOT NULL,
  `imageurl` varchar(255) NOT NULL,
  `uploadtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imageupload`
--

INSERT INTO `imageupload` (`id`, `imageurl`, `uploadtime`) VALUES
(41, 'C:\\xampp\\htdocs\\interntask\\23.02.2021\\task1\\images\\60356da1292e4.jpg', '2021-02-24 01:03:29'),
(42, 'C:\\xampp\\htdocs\\interntask\\23.02.2021\\task1\\images\\60356da8b0d4d.jpg', '2021-02-24 01:03:36'),
(43, 'C:\\xampp\\htdocs\\interntask\\23.02.2021\\task1\\images\\60356daeb0f61.jpg', '2021-02-24 01:03:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imageupload`
--
ALTER TABLE `imageupload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imageupload`
--
ALTER TABLE `imageupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
