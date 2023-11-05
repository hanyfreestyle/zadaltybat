-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 05:10 PM
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `photo`, `photo_thum_1`, `roles_name`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hany Darwish ', 'hany.freestyle4u@gmail.com', NULL, NULL, NULL, '[\"admin\"]', 1, NULL, '$2y$10$EStiO4vL.VXmDbSByRkMDuF5w5xMXfcTYl7CmXaLfFaM1HWpyFIjq', NULL, '2023-10-06 11:39:21', '2023-10-06 11:39:21'),
(2, 'ادارة الموقع', 'user1@etman-group.com', NULL, NULL, NULL, '[\"WebEditor\"]', 1, NULL, '$2y$10$h1u/qiUoz3ugsakqugSB4uTkFFjVHDTul/kuZFXc9eQq3xsJIiiW6', NULL, '2023-10-06 11:39:22', '2023-10-06 12:00:51'),
(3, 'ادارة المتجر', 'user2@etman-group.com', NULL, NULL, NULL, '[\"ShopEditor\",\"Orders\",\"CustomerEditor\"]', 1, NULL, '$2y$10$mHVaciHskWCa88oK6nPgR.FdAw/nCuYu8uO9KGmwWgntvM4.YfwL6', NULL, '2023-10-06 11:39:22', '2023-10-06 14:08:20'),
(4, 'ادارة الطلبات', 'user3@etman-group.com', NULL, NULL, NULL, '[\"Orders\",\"CustomerEditor\"]', 1, NULL, '$2y$10$0kN0y42eGh9NmczfzKy40OtmzNSA8xwnTYz3IVg1JJHy6jGfaVkxO', NULL, '2023-10-06 11:58:52', '2023-10-06 14:07:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
