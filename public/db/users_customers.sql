-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 03:48 PM
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
-- Dumping data for table `users_customers`
--

INSERT INTO `users_customers` (`id`, `name`, `company_name`, `email`, `phone`, `whatsapp`, `land_phone`, `city_id`, `status`, `is_active`, `photo`, `photo_thum_1`, `email_verified_at`, `password`, `password_temp`, `last_login`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'احمد الشيخ', NULL, 'ahmed@gmail.com', '554064063', NULL, NULL, 3, 1, 1, NULL, NULL, NULL, '$2y$10$EdpwmFdQE7xn2NMV76qxje9tjL/7J4kDqTQ2qVMcQaB.kxgNuBnNu', NULL, '2023-11-05 16:44:08', NULL, '2023-11-05 14:44:08', '2023-11-05 14:45:53', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
