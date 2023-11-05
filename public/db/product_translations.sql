-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 01:13 PM
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
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `slug`, `name`, `des`, `g_title`, `g_des`) VALUES
(1, 1, 'ar', 'نصف-دجاجة-شواية', 'نصف دجاجة شواية', NULL, NULL, NULL),
(2, 2, 'ar', 'نصف-دجاجة-على-الفحم', 'نصف دجاجة على الفحم', NULL, NULL, NULL),
(3, 3, 'ar', 'حبة-دجاج-عالشواية-مع-الرز', 'حبة دجاج عالشواية مع الرز', NULL, NULL, NULL),
(4, 4, 'ar', 'خضار-مدخن', 'خضار مدخن', NULL, NULL, NULL),
(5, 5, 'ar', 'بامية', 'بامية', NULL, NULL, NULL),
(6, 6, 'ar', 'ملوخية', 'ملوخية', NULL, NULL, NULL),
(7, 7, 'ar', 'أرز-بخارى', 'أرز بخارى', NULL, NULL, NULL),
(8, 8, 'ar', 'أرز-ابيض', 'أرز ابيض', NULL, NULL, NULL),
(9, 9, 'ar', 'أرز-أحمر', 'أرز أحمر', NULL, NULL, NULL),
(10, 10, 'ar', 'سلطة-خضراء', 'سلطة خضراء', NULL, NULL, NULL),
(11, 11, 'ar', 'سلطة-جرجير', 'سلطة جرجير', NULL, NULL, NULL),
(12, 12, 'ar', 'سلطة-لبن-بالخيار', 'سلطة لبن بالخيار', NULL, NULL, NULL),
(13, 13, 'ar', 'سطلة-حارة', 'سطلة حارة', NULL, NULL, NULL),
(14, 14, 'ar', 'سطلة-طحينة', 'سطلة طحينة', NULL, NULL, NULL),
(15, 15, 'ar', 'سطلة-زبادى', 'سطلة زبادى', 'سطلة زبادى', NULL, NULL),
(16, 16, 'ar', 'لبن', 'لبن', NULL, NULL, NULL),
(17, 17, 'ar', 'مشروبات-غازية', 'سفن اب دايت', NULL, NULL, NULL),
(18, 18, 'ar', 'سفن-اب', 'سفن اب', NULL, NULL, NULL),
(19, 19, 'ar', 'مهلبية', 'مهلبية', NULL, NULL, NULL),
(20, 20, 'ar', 'بيبسي', 'بيبسي', NULL, NULL, NULL),
(21, 21, 'ar', 'ديو', 'ديو', NULL, NULL, NULL),
(22, 22, 'ar', 'مكرونة-باشميل', 'مكرونة باشميل', NULL, NULL, NULL),
(23, 23, 'ar', 'أرز-مصري', 'أرز مصري', NULL, NULL, NULL),
(24, 24, 'ar', 'حبة-دجاج-على-الفحم-مع-الرز', 'حبة دجاج على الفحم مع الرز', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
