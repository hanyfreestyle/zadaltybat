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
-- Dumping data for table `users_customers_addresses`
--

INSERT INTO `users_customers_addresses` (`id`, `uuid`, `customer_id`, `name`, `city_id`, `address`, `recipient_name`, `phone`, `phone_option`, `is_default`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '97af70df-3647-4365-95bf-6f1595b16a21', 1, 'العنوان الافتراضى', 3, '6945 البحر المتوسط، العقيق\r\nالرياض 13515‎', 'احمد الشيخ', '554064063', NULL, 1, NULL, '2023-11-05 14:46:40', '2023-11-05 14:46:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
