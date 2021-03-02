-- phpMyAdmin SQL Dump
-- version 5.1.0-rc2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2021 at 11:38 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `picture_link_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `image_url` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `image_url`, `upload_time`) VALUES
(14, 'uploads/871064.jpg', '2021-02-24 09:27:52'),
(15, 'uploads/152838759_1598601687196511_3203507681537068526_n.jpg', '2021-02-24 09:28:00'),
(16, 'uploads/152838759_1598601687196511_3203507681537068526_n.jpg', '2021-02-24 09:29:21'),
(17, 'uploads/152838759_1598601687196511_3203507681537068526_n.jpg', '2021-02-24 09:31:12'),
(18, 'uploads/152838759_1598601687196511_3203507681537068526_n.jpg', '2021-02-24 09:31:40'),
(19, 'uploads/152838759_1598601687196511_3203507681537068526_n.jpg', '2021-02-24 09:43:45'),
(20, 'uploads/ashley-mackenzie.jpg', '2021-02-24 09:44:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
