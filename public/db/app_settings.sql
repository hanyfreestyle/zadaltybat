-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 09:14 AM
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
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `status`, `baseUrl`, `mobilePrefix`, `prefix`, `logo`, `SideLogo`, `AppName`, `ColorDark`, `ColorLight`, `AppBarIconColor`, `BackGroundColor`, `SplashColor`, `PreloadingColor`, `StatueBArColor`, `AppBarColor`, `AppBarColorText`, `sideMenuText`, `sideMenuColor`, `mainScreenScale`, `sideMenuAngle`, `sideMenuStyle`, `AppTheme`, `facebook`, `twitter`, `youtube`, `instagram`, `linkedin`, `whatsAppNumber`, `whatsAppMessage`, `whatsAppKey`, `telegram_key`, `telegram_group`, `telegram_phone`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://freestyle4u.net/et8/public/', 'EtmanShop/', '?mobile=1', NULL, NULL, 'عتمان جروب', 4292621637, 4293283920, 4278190080, 4294967295, 4278190080, 4293283920, 4293283920, 4278190080, 4278190080, 4278190080, 4293283920, '-0.1', '0', 'style3', 'home', 'https://www.facebook.com/Etman.Group', NULL, 'https://www.youtube.com/channel/UC8GkiBf6L9bogsUtx0PEgTg', 'https://www.instagram.com/etmangroup.eg/', 'https://www.linkedin.com/company/etman-group/', '201154905424', 'السلاموا عليكم', NULL, NULL, NULL, NULL, NULL, '2023-10-10 06:13:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
