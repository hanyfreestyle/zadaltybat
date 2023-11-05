-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 10:30 PM
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
-- Dumping data for table `users_customers_addresses`
--

INSERT INTO `users_customers_addresses` (`id`, `uuid`, `customer_id`, `name`, `city_id`, `address`, `recipient_name`, `phone`, `phone_option`, `is_default`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '6907412f-6b65-43a1-a358-c8a53116b9b5', 1, 'بحرى الجمرك', 3, '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'احمد عتمان', '01223129660', '4867311', 0, NULL, '2023-09-29 16:19:38', '2023-09-29 18:07:50'),
(2, 'eee698b6-3c8b-4ca4-9194-86b9df96bed8', 1, 'المنزل', 3, '598 طريق الحرية لوران الاسكندرية \r\nبرج الجوهرة \r\nالدرو الثامن', 'زين احمد عتمان', '01222279182', NULL, 1, NULL, '2023-09-29 17:11:13', '2023-09-29 18:07:50'),
(3, '72c9671b-ea2e-4a5b-8912-1cff8e8ab9c0', 1, 'سابا باشا', 3, '336 طريق الجيش امام نادي التجاريين\r\nعمارات رويال بلازا - سابا باشا\r\nالاسكندرية - مصر', 'احمد عتمان', '01223129660', '5868324', 0, NULL, '2023-09-29 17:12:37', '2023-09-29 18:07:50'),
(4, '797a3e9a-257d-4af7-9184-3a20a1099bab', 2, 'العنوان الافتراضى', 3, '29 شارع الشيخ محمد عبده \r\nالجمرك - خلف جيلاتى عزة', 'هانى درويش', '01221563252', NULL, 1, NULL, '2023-10-05 04:21:30', '2023-10-05 04:21:30'),
(5, 'faa7ee79-a6a5-40ee-8b75-a619e33f1216', 3, 'العنوان الافتراضى', 3, '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'محمد أنور', '01117777093', NULL, 1, NULL, '2023-10-05 04:22:44', '2023-10-05 04:22:44'),
(6, 'e452d9a3-ceee-4df5-9819-2e39061d3130', 4, 'العنوان الافتراضى', 3, '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'أحمد جمعة', '01096693772', NULL, 1, NULL, '2023-10-05 04:24:01', '2023-10-05 04:24:01'),
(7, '1dce971a-b446-45e0-8560-b2c4c0b05b96', 5, 'العنوان الافتراضى', 3, '14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر', 'ايمن بكر', '01032977744', NULL, 1, NULL, '2023-10-05 04:25:10', '2023-10-05 04:25:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
