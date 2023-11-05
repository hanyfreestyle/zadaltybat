-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 10:38 PM
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
-- Dumping data for table `users_customers`
--

INSERT INTO `users_customers` (`id`, `name`, `company_name`, `email`, `phone`, `whatsapp`, `land_phone`, `city_id`, `status`, `is_active`, `photo`, `photo_thum_1`, `email_verified_at`, `password`, `password_temp`, `last_login`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'احمد عتمان', 'عتمان جروب', 'etmano@hotmail.com', '01223129660', '01223129660', '4867311', 3, 1, 1, NULL, NULL, NULL, '$2y$10$sLfSr0tHo64x7IZKKpngeeaFOx21kJPqxZSRKRe6xKPD1y5kKGb7.', NULL, '2023-10-05 22:02:19', NULL, '2023-09-29 12:06:43', '2023-10-05 19:02:19', NULL),
(2, 'هانى درويش', 'فري ستايل', NULL, '01221563252', '01221563252', NULL, 3, 1, 1, NULL, NULL, NULL, '$2y$10$MHBY2M/C3svXIUBJLh2mQOXTisysi0KtukM8CTPKORjEzDq5gUDWy', '01221563252@5604', NULL, NULL, '2023-10-05 04:21:30', '2023-10-05 16:21:07', NULL),
(3, 'محمد أنور', 'عتمان جروب', NULL, '01117777093', NULL, NULL, 3, 1, 1, NULL, NULL, NULL, '$2y$10$Iz3a3.vJliK..EAPlQeY/OIVLXTwC21EhBbG03SF4Z3vmO5MoD2Ou', '01117777093@6067', NULL, NULL, '2023-10-05 04:22:44', '2023-10-05 17:01:33', NULL),
(4, 'أحمد جمعة', 'عتمان جروب', NULL, '01096693772', NULL, NULL, 3, 1, 1, NULL, NULL, NULL, '$2y$10$vSYuKgMW2KaDbGrS4bxcIu1sY8dyZddJo4aDENOPk2g2S5d73o44i', '01096693772@6481', NULL, NULL, '2023-10-05 04:24:01', '2023-10-05 04:24:01', NULL),
(5, 'ايمن بكر', 'عتمان جروب', NULL, '01032977744', NULL, NULL, 3, 1, 1, NULL, NULL, NULL, '$2y$10$/xOxaTH0s3BW7ZoITRXWUOso8/632JWOB7eI0koTxklSSTJa5s/4q', '01032977744@6528', NULL, NULL, '2023-10-05 04:25:10', '2023-10-05 04:25:10', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
