-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 01:13 PM
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
-- Database: `onfire_new`
--

--
-- Dumping data for table `app_menus`
--

INSERT INTO `app_menus` (`id`, `type`, `postion`, `created_at`, `updated_at`) VALUES
(1, 'user', 0, '2023-10-10 10:01:45', '2023-10-10 10:01:45'),
(2, 'cart', 0, '2023-10-10 10:01:45', '2023-10-10 10:01:45'),
(3, 'side', 3, '2023-10-10 10:10:42', '2023-10-10 10:13:09'),
(4, 'side', 2, '2023-10-10 10:11:16', '2023-10-10 10:13:09'),
(5, 'side', 1, '2023-10-10 10:12:11', '2023-10-10 10:13:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
