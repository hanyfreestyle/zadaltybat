-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 05:33 PM
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
-- Dumping data for table `config_settings`
--

INSERT INTO `config_settings` (`id`, `web_url`, `web_status`, `logo`, `favicon`, `phone_num`, `whatsapp_num`, `phone_text`, `whatsapp_text`, `facebook`, `youtube`, `twitter`, `instagram`, `linkedin`, `def_url`, `google_api`, `download_app`, `top_offer`, `apple`, `android`, `windows`, `telegram_key`, `telegram_group`, `telegram_phone`, `whatsapp_key`, `whatsapp_send_to`, `notes`, `created_at`, `updated_at`) VALUES
(1, '#', 1, '', '', '01006180117', '201006180117', '0100-6180-117', '0100-6180-117', 'https://www.facebook.com/Etman.Group', 'https://www.youtube.com/channel/UC8GkiBf6L9bogsUtx0PEgTg', '#', 'https://www.instagram.com/etmangroup.eg/', 'https://www.linkedin.com/company/etman-group/', 'https://etman-group.com', 'AIzaSyDWuKOMM4hm_uBnQjqQufaLlHSN2QS_4Qo', 1, 1, 'https://www.apple.com/store', 'https://play.google.com/store/apps?hl=en&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gl=US', 'https://www.microsoft.com/en-eg/store/', '6313317483:AAEooBTEFel1ej1uaDpXcZzCrbX_ID3aYEw', '-4091280818', '200119925', '8592e88ef28ba32bd5e5b59c11a59f864a898e53b94cbacb04a87dc1f0c377c1887491212d364739', '01555456909', '8592e88ef28ba32bd5e5b59c11a59f864a898e53b94cbacb04a87dc1f0c377c1887491212d364739\r\n01010881921\r\n\r\n6313317483:AAEooBTEFel1ej1uaDpXcZzCrbX_ID3aYEw\r\n-1001989217795\r\n200119925\r\n\r\nsss', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
