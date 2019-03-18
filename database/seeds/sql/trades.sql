-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 18, 2019 at 04:40 AM
-- Server version: 5.6.35-log
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystorecorner`
--

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `title`, `slug`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Automotive', 'automotive', NULL, NULL, NULL),
(2, 'Books', 'books', NULL, NULL, NULL),
(3, 'Beauty', 'beauty', 'makeup', NULL, NULL),
(5, 'Fashion', 'fashion', 'clothes', NULL, NULL),
(6, 'Cafe', 'cafe', 'hotdrink', NULL, NULL),
(7, 'Bar', 'bar', NULL, NULL, NULL),
(8, 'Confectionery', 'confectionery', NULL, NULL, NULL),
(9, 'Communication', 'communication', NULL, NULL, NULL),
(10, 'Entertainment', 'entertainment', NULL, NULL, NULL),
(11, 'Electrical', 'electrical', NULL, NULL, NULL),
(12, 'Food', 'food', 'shopping', NULL, NULL),
(13, 'Finance', 'finance', 'coin', NULL, NULL),
(14, 'Haircare', 'haircare', 'scissors', NULL, NULL),
(15, 'Florist', 'florist', NULL, NULL, NULL),
(16, 'Health', 'health', 'makeup', NULL, NULL),
(17, 'Giftware', 'giftware', NULL, NULL, NULL),
(18, 'Jewellery', 'jewellery', NULL, NULL, NULL),
(19, 'Homeware', 'homeware', 'home', NULL, NULL),
(20, 'Web Design', 'web-design', 'computer', NULL, NULL),
(21, 'Music', 'music', NULL, NULL, NULL),
(22, 'Pet Supplies', 'pet-supplies', NULL, NULL, NULL),
(23, 'Restaurant', 'restaurant', 'menu', NULL, NULL),
(24, 'Optical', 'optical', NULL, NULL, NULL),
(25, 'Web Development', 'web-development', 'computer', NULL, NULL),
(26, 'Accommodation', 'accommodation', NULL, NULL, NULL),
(27, 'Real Estate', 'real-estate', 'home', NULL, NULL),
(28, 'Waste Management', 'waste-management', NULL, NULL, NULL),
(29, 'Tourism', 'tourism', NULL, NULL, NULL),
(30, 'Legal', 'legal', 'suitcase', NULL, NULL),
(31, 'Bakery', 'bakery', NULL, NULL, NULL),
(32, 'Dental', 'dental', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
