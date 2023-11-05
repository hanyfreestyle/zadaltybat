-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 08:43 AM
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
-- Dumping data for table `opening_hours`
--

INSERT INTO `opening_hours` (`id`, `day`, `postion`, `name_ar`, `name_en`, `open_from`, `open_to`, `delivery_from`, `delivery_to`) VALUES
(1, 0, 2, 'الاحد', 'Sunday', '10:30', '02:00', '10:30', '02:00'),
(2, 1, 3, 'الاثنين', 'Monday', '10:30', '02:00', '10:30', '02:00'),
(3, 2, 4, 'الثلاثاء', 'Tuesday', '10:30', '02:00', '10:30', '02:00'),
(4, 3, 5, 'الاربعاء', 'Wednesday', '10:30', '02:00', '10:30', '02:00'),
(5, 4, 6, 'الخميس', 'Thursday', '10:30', '02:00', '10:30', '02:00'),
(6, 5, 7, 'الجمعه', 'Friday', '12:30', '02:00', '00:30', '02:00'),
(7, 6, 1, 'السبت', 'Saturday', '10:30', '02:00', '10:30', '02:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
