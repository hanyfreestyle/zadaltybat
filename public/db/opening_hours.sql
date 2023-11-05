-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 10:17 PM
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
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`id`, `day`, `postion`, `name_ar`, `name_en`, `open_from`, `open_to`, `delivery_from`, `delivery_to`) VALUES
(1, 0, 2, 'الاحد', 'Sunday', '09:00', '17:00', '09:00', '17:00'),
(2, 1, 3, 'الاثنين', 'Monday', '09:00', '17:00', '09:00', '17:00'),
(3, 2, 4, 'الثلاثاء', 'Tuesday', '09:00', '17:00', '09:00', '17:00'),
(4, 3, 5, 'الاربعاء', 'Wednesday', '09:00', '17:00', '09:00', '17:00'),
(5, 4, 6, 'الخميس', 'Thursday', '09:00', '17:00', '09:00', '17:00'),
(6, 5, 7, 'الجمعه', 'Friday', '09:00', '17:00', '09:00', '17:00'),
(7, 6, 1, 'السبت', 'Saturday', '09:00', '17:00', '09:00', '17:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
