-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 09:28 AM
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
-- Database: `a_users`
--

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `phone`, `whatsapp`, `lat`, `long`, `direction`, `is_active`, `postion`) VALUES
(1, '059-923-0630', NULL, '24.7783135', '46.629138', 'https://www.google.com/maps/dir//%D9%85%D8%B7%D8%B9%D9%85+%D8%B2%D8%A7%D8%AF+%D8%A7%D9%84%D8%B7%D9%8A%D8%A8%D8%A7%D8%AA%E2%80%AD/data=!4m8!4m7!1m0!1m5!1m1!1s0x3e2ee304a73f330d:0x5c64da6668b4ab48!2m2!1d46.6291416!2d24.778314899999998', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
