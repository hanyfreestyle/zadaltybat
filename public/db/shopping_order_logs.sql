-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 10:37 PM
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
-- Dumping data for table `shopping_order_logs`
--

INSERT INTO `shopping_order_logs` (`id`, `order_id`, `user_id`, `add_date`, `notes`) VALUES
(1, 1, 1, '2023-10-05 14:20:26', NULL),
(2, 7, 1, '2023-10-05 14:20:36', NULL),
(3, 2, 1, '2023-10-05 14:20:58', 'لا يوجد مخزون'),
(4, 3, 1, '2023-10-05 14:21:13', 'رصيد العميل لا يسمح'),
(5, 6, 1, '2023-10-05 14:21:37', NULL),
(6, 7, 1, '2023-10-05 14:23:18', NULL),
(7, 6, 1, '2023-10-05 14:27:54', NULL),
(8, 12, 4, '2023-10-06 19:43:25', NULL),
(9, 11, 4, '2023-10-06 19:43:34', NULL),
(10, 10, 4, '2023-10-06 19:43:41', NULL),
(11, 12, 1, '2023-10-06 22:35:51', NULL),
(12, 9, 1, '2023-10-06 22:36:17', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
