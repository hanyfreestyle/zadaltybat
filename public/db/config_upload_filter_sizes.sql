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
-- Dumping data for table `config_upload_filter_sizes`
--

INSERT INTO `config_upload_filter_sizes` (`id`, `filter_id`, `type`, `new_w`, `new_h`, `canvas_back`, `get_more_option`, `get_add_text`, `get_watermark`) VALUES
(1, 2, 4, 500, 335, NULL, 0, 0, 0),
(2, 4, 4, 350, 350, '#FFFFFF', 0, 0, 0),
(3, 5, 4, 800, 600, '#ffffff', 0, 0, 0),
(4, 5, 4, 320, 240, '#ffffff', 0, 0, 0),
(5, 6, 4, 100, 100, '#FFFFFF', 0, 0, 0),
(6, 7, 4, 420, 205, '#FFFFFF', 0, 0, 0),
(7, 8, 5, 350, 350, '#FFFFFF', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
