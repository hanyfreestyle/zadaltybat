-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 05:01 PM
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
-- Dumping data for table `branch_translations`
--

INSERT INTO `branch_translations` (`id`, `branch_id`, `locale`, `title`, `address`, `work_hours`) VALUES
(1, 1, 'ar', 'المقر الرئيسي', '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'طول ايام الاسبوع\r\nمن 9 صباحا وحتى 9 مساءا'),
(2, 2, 'ar', 'المقر الادارى', '336 طريق الجيش امام نادي التجاريين\r\nعمارات رويال بلازا - سابا باشا\r\nالاسكندرية - مصر', 'من السبت الى الخميس\r\n9 صباحا وحتى 5 مساءا');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
