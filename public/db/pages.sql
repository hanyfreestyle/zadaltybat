-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 05:50 PM
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
-- Database: `a_etman`
--

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `cat_id`, `view_name`, `banner_id`, `photo`, `photo_thum_1`, `is_active`, `menu_main`, `menu_footer`, `postion`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'HomePage', NULL, 4, NULL, NULL, 1, 1, 1, 1, NULL, '2023-08-29 06:41:34', '2023-09-11 09:39:37'),
(2, 'OurClient', NULL, NULL, NULL, NULL, 1, 1, 1, 3, NULL, '2023-08-29 06:41:34', '2023-09-08 12:56:32'),
(3, 'LatestNews', NULL, NULL, NULL, NULL, 1, 1, 1, 4, NULL, '2023-08-29 06:41:34', '2023-09-03 09:21:59'),
(4, 'ErrorPage', NULL, NULL, NULL, NULL, 1, 0, 0, 8, NULL, '2023-08-29 06:41:34', '2023-09-03 07:25:20'),
(5, 'FaqList', NULL, NULL, NULL, NULL, 1, 1, 1, 5, NULL, '2023-08-29 06:41:34', '2023-09-03 07:44:55'),
(6, 'TermsConditions', NULL, NULL, NULL, NULL, 1, 0, 1, 6, NULL, '2023-08-29 06:41:34', '2023-09-03 07:45:03'),
(7, 'ContactUs', NULL, NULL, NULL, NULL, 1, 1, 1, 7, NULL, '2023-08-29 06:41:34', '2023-09-03 07:45:14'),
(8, 'AboutUs', NULL, NULL, NULL, NULL, 1, 1, 1, 2, NULL, '2023-08-29 06:41:34', '2023-09-03 07:44:30'),
(9, 'MainCategory', NULL, NULL, NULL, NULL, 1, 1, 1, 0, NULL, '2023-09-08 13:19:30', '2023-09-08 13:19:51'),
(10, 'Shop_HomePage', NULL, 1, NULL, NULL, 1, 1, 1, 0, NULL, '2023-09-11 12:37:49', '2023-09-11 12:37:49'),
(11, 'Shop_BestDeals', NULL, NULL, NULL, NULL, 1, 1, 1, 0, NULL, '2023-09-11 21:09:15', '2023-09-11 21:09:15'),
(12, 'Shop_WeekOffers', NULL, NULL, NULL, NULL, 1, 1, 1, 0, NULL, '2023-09-22 10:26:01', '2023-09-22 10:26:01'),
(13, 'Shop_Recently', NULL, NULL, NULL, NULL, 1, 1, 1, 0, NULL, '2023-09-22 10:26:55', '2023-09-22 10:26:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
