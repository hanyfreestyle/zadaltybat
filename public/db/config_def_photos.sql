-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 01:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_zadaltybat`
--

--
-- Dumping data for table `config_def_photos`
--

INSERT INTO `config_def_photos` (`id`, `cat_id`, `photo`, `photo_thum_1`, `photo_thum_2`, `postion`, `created_at`, `updated_at`) VALUES
(1, 'light-logo', 'images/def-photo/light-logo-DaZwh2g5b2.webp', NULL, NULL, 2, '2023-09-03 15:03:13', '2023-11-05 11:57:32'),
(2, 'dark-logo', 'images/def-photo/dark-logo-XiwbOBqDPH.webp', NULL, NULL, 1, '2023-09-03 15:04:17', '2023-11-05 11:57:05'),
(5, 'faq-icon', 'images/def-photo/faq-icon-R363TYGGlw.webp', 'images/def-photo/faq-icon-yhrkDB6Lqm.webp', NULL, 0, '2023-09-04 18:17:24', '2023-10-08 12:43:48'),
(6, 'contact-from', 'images/def-photo/contact-from-taOS5rT9SI.webp', NULL, NULL, 0, '2023-09-06 19:37:35', '2023-09-06 19:37:35'),
(8, 'categorie', 'images/def-photo/categorie-FZGQhZRS0I.webp', NULL, NULL, 0, '2023-09-07 16:54:20', '2023-11-05 10:25:12'),
(14, 'form_login', 'images/def-photo/cust-login-5vzy5IZjUZ.webp', NULL, NULL, 0, '2023-09-29 00:45:03', '2023-09-29 03:16:32'),
(15, 'form_sign_up', 'images/def-photo/form-sign-up-AlQFSq2P80.webp', NULL, NULL, 0, '2023-09-29 03:17:07', '2023-09-29 03:33:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
