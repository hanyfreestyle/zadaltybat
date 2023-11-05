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
-- Dumping data for table `shopping_order_addresses`
--

INSERT INTO `shopping_order_addresses` (`id`, `name`, `city`, `address`, `recipient_name`, `phone`, `phone_option`, `notes`) VALUES
(1, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(2, 'بحرى الجمرك', 'الاسكندرية', '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'احمد عتمان', '01223129660', '4867311', NULL),
(3, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(4, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(5, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(6, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(7, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(8, 'العنوان الافتراضى', 'الاسكندرية', '29 شارع الشيخ محمد عبده \r\nالجمرك - خلف جيلاتى عزة', 'هانى درويش', '01221563252', NULL, NULL),
(9, 'العنوان الافتراضى', 'الاسكندرية', '29 شارع الشيخ محمد عبده \r\nالجمرك - خلف جيلاتى عزة', 'هانى درويش', '01221563252', NULL, 'برجاء التاكيد على توفر الاصناف'),
(10, 'العنوان الافتراضى', 'الاسكندرية', '29 شارع الشيخ محمد عبده \r\nالجمرك - خلف جيلاتى عزة', 'هانى درويش', '01221563252', NULL, NULL),
(11, 'المنزل', 'الاسكندرية', '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, NULL),
(12, 'العنوان الافتراضى', 'الاسكندرية', '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'محمد أنور', '01117777093', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;