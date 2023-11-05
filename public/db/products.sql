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
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `price`, `sale_price`, `qty_left`, `qty_max`, `unit`, `photo`, `photo_thum_1`, `is_active`, `is_archived`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 21.00, NULL, 1000, 100, NULL, 'images/product/1/1699184663_exdRuiSTd7oEuTF_.webp', 'images/product/1/1699184663_jEGHCGTurMNhfZt_.webp', 1, 0, '2023-11-05 09:31:15', '2023-11-05 11:44:23', NULL),
(2, NULL, 21.00, NULL, 1000, 100, NULL, 'images/product/2/1699184794_Sy9YR3W3VcF32Q2_.webp', 'images/product/2/1699184794_FdlzBWsuDoBuM53_.webp', 1, 0, '2023-11-05 09:31:37', '2023-11-05 11:46:34', NULL),
(3, NULL, 40.00, NULL, 1000, 100, NULL, 'images/product/3/1699184883_3ZUEHlcG0rtydjQ_.webp', 'images/product/3/1699184884_ySqybM8a6GGUACo_.webp', 1, 0, '2023-11-05 09:32:24', '2023-11-05 11:49:45', NULL),
(4, NULL, 10.00, NULL, 1000, 100, NULL, 'images/product/4/1699183903_xcyUISFsYvK7K81_.webp', 'images/product/4/1699183903_2WKhVJ2Hz7v6unt_.webp', 1, 0, '2023-11-05 09:33:17', '2023-11-05 11:31:43', NULL),
(5, NULL, 10.00, NULL, 1000, 100, NULL, 'images/product/5/1699183212_a4NKwC7F925gAFk_.webp', 'images/product/5/1699183213_FqOikALhpwv9N6u_.webp', 1, 0, '2023-11-05 09:33:41', '2023-11-05 11:20:13', NULL),
(6, NULL, 10.00, NULL, 1000, 100, NULL, 'images/product/6/1699183247_Apb0t5ICBh2mV8G_.webp', 'images/product/6/1699183247_r6jG7C57EXTXJR3_.webp', 1, 0, '2023-11-05 09:33:59', '2023-11-05 11:20:47', NULL),
(7, NULL, 7.00, NULL, 1000, 100, NULL, 'images/product/7/1699184191_N5T1OQIY3mpT9SD_.webp', 'images/product/7/1699184191_36l0EQjdtPFLxGe_.webp', 1, 0, '2023-11-05 09:34:22', '2023-11-05 11:36:31', NULL),
(8, NULL, 7.00, NULL, 1000, 100, NULL, 'images/product/8/1699184402_kCuFUaj2b6CT2pI_.webp', 'images/product/8/1699184402_8QWyNy7iZTtaZe8_.webp', 1, 0, '2023-11-05 09:34:41', '2023-11-05 11:40:02', NULL),
(9, NULL, 7.00, NULL, 1000, 100, NULL, 'images/product/9/1699184598_YM8cnBHYbVVI3qz_.webp', 'images/product/9/1699184599_lpb6asV4glKX5Vo_.webp', 1, 0, '2023-11-05 09:34:56', '2023-11-05 11:43:19', NULL),
(10, NULL, 7.00, NULL, 1000, 100, NULL, 'images/product/10/1699182733_XmnCaXwRs6qMECy_.webp', 'images/product/10/1699182733_c8eooheaPM3BNW9_.webp', 1, 0, '2023-11-05 09:35:34', '2023-11-05 11:12:13', NULL),
(11, NULL, 7.00, NULL, 1000, 100, NULL, 'images/product/11/1699182874_E7z1yr0rzlmvmLP_.webp', 'images/product/11/1699182874_T4je9kfxwjrMXK9_.webp', 1, 0, '2023-11-05 09:35:55', '2023-11-05 11:14:34', NULL),
(12, NULL, 5.00, NULL, 1000, 100, NULL, 'images/product/12/1699183039_hRKirPA4wZbCmWF_.webp', 'images/product/12/1699183039_4PzmpwgX47qKAa7_.webp', 1, 0, '2023-11-05 09:36:17', '2023-11-05 11:17:19', NULL),
(13, NULL, 2.00, NULL, 1000, 100, NULL, 'images/product/13/1699185231_h7npIAe3J90ixVx_.webp', 'images/product/13/1699185232_inLncQDMGl6acXY_.webp', 1, 0, '2023-11-05 09:36:41', '2023-11-05 11:53:52', NULL),
(14, NULL, 3.00, NULL, 1000, 100, NULL, 'images/product/14/1699182664_ydCsR8QFLl4w8Bt_.webp', 'images/product/14/1699182664_wIOLNUFhA0BpedQ_.webp', 1, 0, '2023-11-05 09:37:06', '2023-11-05 11:11:04', NULL),
(15, NULL, 2.00, NULL, 1000, 100, NULL, 'images/product/15/1699182646_7c5oC9MTJeVXZVJ_.webp', 'images/product/15/1699182646_F0rjejTMqlM8fjq_.webp', 1, 0, '2023-11-05 09:37:39', '2023-11-05 11:10:46', NULL),
(16, NULL, 2.00, NULL, 1000, 100, NULL, 'images/product/16/1699182184_La68S2SDtcauZ8B_.webp', 'images/product/16/1699182185_dLQwVD1yEGZvK4J_.webp', 1, 0, '2023-11-05 09:40:42', '2023-11-05 11:03:05', NULL),
(17, NULL, 3.00, NULL, 1000, 100, NULL, 'images/product/17/1699182259_YtuFIKHUtxTg40h_.webp', 'images/product/17/1699182259_peTtdULofHOryJX_.webp', 1, 0, '2023-11-05 09:41:08', '2023-11-05 11:04:19', NULL),
(18, NULL, 3.00, NULL, 1000, 100, NULL, 'images/product/18/1699182310_VAWevM0BfgdZE8l_.webp', 'images/product/18/1699182310_LEUHThoCycbWhkn_.webp', 1, 0, '2023-11-05 09:41:23', '2023-11-05 11:05:10', NULL),
(19, NULL, 5.00, NULL, 1000, 100, NULL, 'images/product/19/1699183125_tQ8rOdZPRZaz9DC_.webp', 'images/product/19/1699183126_pZimDCVKr9Bo2Zo_.webp', 1, 0, '2023-11-05 09:41:57', '2023-11-05 11:18:46', NULL),
(20, NULL, 3.00, NULL, 1000, 100, NULL, 'images/product/20/1699182415_8UIw4s8Z10F3rZX_.webp', 'images/product/20/1699182416_xsGFfG4CI2Ko6t7_.webp', 1, 0, '2023-11-05 11:06:55', '2023-11-05 11:07:55', NULL),
(21, NULL, 3.00, NULL, 1000, 100, NULL, 'images/product/21/1699182432_Z5z8GlzvPfUmpB1_.webp', 'images/product/21/1699182433_R5njzdAtI4OBg2D_.webp', 1, 0, '2023-11-05 11:07:12', '2023-11-05 11:07:41', NULL),
(22, NULL, 7.00, NULL, 1000, 1000, NULL, 'images/product/22/1699184089_Ipy8Zksop6DAsoN_.webp', 'images/product/22/1699184089_VWePnLyPO7p9wKz_.webp', 1, 0, '2023-11-05 11:34:49', '2023-11-05 11:34:49', NULL),
(23, NULL, 7.00, NULL, 1000, 1000, NULL, 'images/product/23/1699184476_T5TRrn3Og5CE2pq_.webp', 'images/product/23/1699184476_Xn32vmLH1VGSYi4_.webp', 1, 0, '2023-11-05 11:41:16', '2023-11-05 11:41:17', NULL),
(24, NULL, 42.00, NULL, 1000, 1000, NULL, 'images/product/24/1699184944_WMIs3dm63Wx2DVV_.webp', 'images/product/24/1699184945_IDAb99ufuyE3ayf_.webp', 1, 0, '2023-11-05 11:49:04', '2023-11-05 11:49:05', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
