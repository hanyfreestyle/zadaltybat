-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 04:49 PM
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
-- Dumping data for table `data_cities`
--

INSERT INTO `data_cities` (`id`, `name`, `name_en`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'القاهرة', 'Cairo', 1, NULL, NULL, NULL),
(2, 'القاهرة الجديدة', 'New Cairo', 1, NULL, NULL, NULL),
(3, 'الاسكندرية', 'Alexandria', 1, NULL, NULL, NULL),
(4, 'الاسماعيلية', 'Ismailia', 1, NULL, NULL, NULL),
(5, 'اسوان', 'Aswan', 1, NULL, NULL, NULL),
(6, 'اسيوط', 'Asyut', 1, NULL, NULL, NULL),
(7, 'الاقصر', 'Luxor', 1, NULL, NULL, NULL),
(8, 'البحر الاحمر', 'Red Sea', 1, NULL, NULL, NULL),
(9, 'البحيرة', 'Beheira ', 1, NULL, NULL, NULL),
(10, 'بني سويف', 'Beni Suef', 1, NULL, NULL, NULL),
(11, 'بورسعيد', 'Port Said', 1, NULL, NULL, NULL),
(12, 'جنوب سيناء', 'South Sinai', 1, NULL, NULL, NULL),
(13, 'الجيزة', 'Giza', 1, NULL, NULL, NULL),
(14, 'الدقهلية', 'Dakahlia', 1, NULL, NULL, NULL),
(15, 'دمياط', 'Damietta', 1, NULL, NULL, NULL),
(16, 'سوهاج', 'Sohag', 1, NULL, NULL, NULL),
(17, 'السويس', 'Suez', 1, NULL, NULL, NULL),
(18, 'الشرقية', 'Sharqia', 1, NULL, NULL, NULL),
(19, 'شمال سيناء', 'North Sinai', 1, NULL, NULL, NULL),
(20, 'الغربية', 'Gharbia', 1, NULL, NULL, NULL),
(21, 'الفيوم', 'Faiyum', 1, NULL, NULL, NULL),
(22, 'القليوبية', 'Qalyubia', 1, NULL, NULL, NULL),
(23, 'قنا', 'Qena', 1, NULL, NULL, NULL),
(24, 'كفر الشيخ', 'Kafr El Sheikh', 1, NULL, NULL, NULL),
(25, 'مطروح', 'Matruh', 1, NULL, NULL, NULL),
(26, 'المنوفية', 'Monufia', 1, NULL, NULL, NULL),
(27, 'المنيا', 'Minya', 1, NULL, NULL, NULL),
(28, 'الوادى الجديد', 'New Valley', 1, NULL, NULL, NULL),
(29, 'غير محدد', 'undefined', 1, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
