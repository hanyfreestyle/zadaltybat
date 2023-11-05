-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 03:58 PM
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
-- Dumping data for table `config_upload_filters`
--

INSERT INTO `config_upload_filters` (`id`, `name`, `type`, `convert_state`, `quality_val`, `new_w`, `new_h`, `canvas_back`, `greyscale`, `flip_state`, `flip_v`, `blur`, `blur_size`, `pixelate`, `pixelate_size`, `text_state`, `text_print`, `font_size`, `font_path`, `font_color`, `font_opacity`, `text_position`, `watermark_state`, `watermark_img`, `watermark_position`, `state`, `created_at`, `updated_at`) VALUES
(1, 'NoEdit', 1, 1, 85, 100, 100, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(2, 'DefPhoto', 4, 1, 85, 800, 420, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(3, 'FavIcon', 4, 1, 85, 40, 40, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(4, 'صورة المجموعة', 4, 1, 85, 700, 700, '#FFFFFF', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-18 05:33:44'),
(5, 'PhotoGallery', 4, 1, 85, 1024, 768, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(6, 'Icon', 4, 1, 85, 300, 300, '#FFFFFF', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-07 11:27:22', '2023-10-08 12:43:19'),
(7, 'بانر', 4, 1, 85, 840, 410, '#FFFFFF', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-11 09:36:55', '2023-09-11 10:03:12'),
(8, 'صورة المنتج', 5, 1, 85, 1000, 1000, '#FFFFFF', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-11 17:01:05', '2023-09-11 17:01:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
