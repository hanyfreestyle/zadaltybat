-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 05:12 PM
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
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `name_ar`, `name_en`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ادمن كامل الصلاحيات', 'Full Admin Permission ', 'web', '2023-10-06 11:39:21', '2023-10-06 11:39:21'),
(2, 'WebEditor', 'محرر  الموقع', 'محرر  الموقع', 'web', '2023-10-06 11:39:22', '2023-10-06 11:41:04'),
(3, 'ShopEditor', 'محرر المتجر', 'محرر المتجر', 'web', '2023-10-06 11:41:34', '2023-10-06 11:41:34'),
(4, 'Orders', 'ادارة الطلبات', 'ادارة الطلبات', 'web', '2023-10-06 11:42:04', '2023-10-06 11:42:04'),
(5, 'WebConfig', 'ادارة اعدادت الموقع', 'ادارة اعدادت الموقع', 'web', '2023-10-06 11:43:12', '2023-10-06 11:43:12'),
(6, 'UsersEditor', 'ادارة المستخدمين', 'ادارة المستخدمين', 'web', '2023-10-06 11:44:17', '2023-10-06 11:44:17'),
(7, 'CustomerEditor', 'ادارة العملاء', 'ادارة العملاء', 'web', '2023-10-06 11:45:12', '2023-10-06 11:45:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
