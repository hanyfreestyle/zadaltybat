-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 05:00 PM
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
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `phone`, `whatsapp`, `lat`, `long`, `direction`, `is_active`, `postion`) VALUES
(1, '+2 0100 618 0117\r\n +203 48 67 311\r\n +203 48 15 941', '01006180117', '31.202236', '29.882242', 'https://goo.gl/maps/GTWAx3WN26qAXofy7', 1, 0),
(2, '+203 58 68 324\r\n +203 58 68 325', NULL, '31.238890', '29.956199', 'https://goo.gl/maps/hjDuzdSQEWuu4tpd8', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
