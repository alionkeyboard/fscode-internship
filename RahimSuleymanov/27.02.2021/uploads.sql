-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Hazırlanma Vaxtı: 28 Fev, 2021 saat 11:40
-- Server versiyası: 10.4.10-MariaDB
-- PHP Versiyası: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `uploads`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sxemi çıxarılan cedvel `images`
--

INSERT INTO `images` (`id`, `image_url`, `created_at`, `uploaded_at`) VALUES
(21, '1614512287-testimonials-1.jpg', '2021-02-28 11:38:07', '2021-02-28 11:38:07'),
(22, '1614512291-testimonials-3.jpg', '2021-02-28 11:38:11', '2021-02-28 11:38:11'),
(23, '1614512295-testimonials-4.jpg', '2021-02-28 11:38:15', '2021-02-28 11:38:15'),
(24, '1614512302-testimonials-5.jpg', '2021-02-28 11:38:22', '2021-02-28 11:38:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
