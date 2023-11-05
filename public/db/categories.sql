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
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `photo`, `photo_thum_1`, `icon`, `is_active`, `postion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'images/category/1/1699180238_KBzB6dEO9xw07YO_.webp', 'images/category/1/1699180238_6cSvnkt436Gz6gg_.webp', NULL, 1, 1, '2023-11-05 09:25:39', '2023-11-05 10:51:30', NULL),
(2, NULL, 'images/category/2/1699180988_t96f3qDKZl9Gepc_.webp', 'images/category/2/1699180988_6e04B5hwZRnxsRp_.webp', NULL, 1, 2, '2023-11-05 09:27:41', '2023-11-05 10:51:30', NULL),
(3, NULL, 'images/category/3/1699180447_Wg75UCNl4DsnYzR_.webp', 'images/category/3/1699180447_PntZKQywOqQNJqt_.webp', NULL, 1, 3, '2023-11-05 09:28:12', '2023-11-05 10:51:30', NULL),
(4, NULL, 'images/category/4/1699180882_AUcDorP5cPzegNB_.webp', 'images/category/4/1699180882_2S6fZx1rc1Fbj9I_.webp', NULL, 1, 4, '2023-11-05 09:28:40', '2023-11-05 10:51:30', NULL),
(5, NULL, 'images/category/5/1699181332_CvltMeLBWQAWTeu_.webp', 'images/category/5/1699181332_hyQuSKUlwV4XMQS_.webp', NULL, 1, 6, '2023-11-05 09:28:50', '2023-11-05 10:51:30', NULL),
(6, NULL, 'images/category/6/1699180727_bIiYvsdnYSsX9YE_.webp', 'images/category/6/1699180727_wDJTLvbakLvQ76K_.webp', NULL, 1, 5, '2023-11-05 09:28:59', '2023-11-05 10:51:30', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
