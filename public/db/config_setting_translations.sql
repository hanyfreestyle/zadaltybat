-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 12:51 PM
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
-- Dumping data for table `config_setting_translations`
--

INSERT INTO `config_setting_translations` (`id`, `setting_id`, `locale`, `name`, `g_title`, `g_des`, `closed_mass`, `offer`) VALUES
(1, 1, 'ar', 'عتمان جروب', 'عنوان الصفحة يكتب هنا', 'وصف الصفحة يكتب هنا', 'زوار موقعنا الكرام ... تلبية لرغبتكم الكريمة فى تطوير الموقع \r\nوليرتقى للمستوى العالمى فى تقديم كل ما يهمكم \r\nنحن بصدد تطوير الموقع كليا ليتناسب معكم\r\nادارة الموقع', 'شحن مجانى للطلبات اكثر من 2500 جنية داخل الاسكندرية'),
(2, 1, 'en', 'Etman Group', 'The title of the site is written here', 'The description of the site is written here', 'Dear visitors ... In response to your generous desire to develop the site ... and to rise to the international level in providing everything that interests you ... \r\nWe are in the process of developing the website completely to suit you ..\r\nSite Administration', 'Free Ground Shipping Over  2500 LE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
