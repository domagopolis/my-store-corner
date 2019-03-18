-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 18, 2019 at 04:12 AM
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
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `country_id`, `name`, `code`, `symbol`) VALUES
(1, NULL, 'Albania, Leke', 'ALL', 'Lek'),
(2, NULL, 'America (United States of America), Dollars', 'USD', '$'),
(3, NULL, 'Afghanistan, Afghanis', 'AFN', '?'),
(4, NULL, 'Argentina, Pesos', 'ARS', '$'),
(5, NULL, 'Aruba, Guilders (also called Florins)', 'AWG', 'ƒ'),
(6, 13, 'Australia, Dollars', 'AUD', '$'),
(7, NULL, 'Azerbaijan, New Manats', 'AZN', '???'),
(8, NULL, 'Bahamas, Dollars', 'BSD', '$'),
(9, NULL, 'Barbados, Dollars', 'BBD', '$'),
(10, NULL, 'Belarus, Rubles', 'BYR', 'p.'),
(11, NULL, 'Belgium, Euro', 'EUR', '€'),
(12, NULL, 'Belize, Dollars', 'BZD', 'BZ$'),
(13, NULL, 'Bermuda, Dollars', 'BMD', '$'),
(14, NULL, 'Bolivia, Bolivianos', 'BOB', '$b'),
(15, NULL, 'Bosnia and Herzegovina, Convertible Marka', 'BAM', 'KM'),
(16, NULL, 'Botswana, Pulas', 'BWP', 'P'),
(17, NULL, 'Bulgaria, Leva', 'BGN', '??'),
(18, NULL, 'Brazil, Reais', 'BRL', 'R$'),
(19, NULL, 'Britain (United Kingdom), Pounds', 'GBP', '£'),
(20, NULL, 'Brunei Darussalam, Dollars', 'BND', '$'),
(21, NULL, 'Cambodia, Riels', 'KHR', '?'),
(22, NULL, 'Canada, Dollars', 'CAD', '$'),
(23, NULL, 'Cayman Islands, Dollars', 'KYD', '$'),
(24, NULL, 'Chile, Pesos', 'CLP', '$'),
(25, NULL, 'China, Yuan Renminbi', 'CNY', '¥'),
(26, NULL, 'Colombia, Pesos', 'COP', '$'),
(27, NULL, 'Costa Rica, Colón', 'CRC', '?'),
(28, NULL, 'Croatia, Kuna', 'HRK', 'kn'),
(29, NULL, 'Cuba, Pesos', 'CUP', '?'),
(30, NULL, 'Cyprus, Euro', 'EUR', '€'),
(31, NULL, 'Czech Republic, Koruny', 'CZK', 'K?'),
(32, NULL, 'Denmark, Kroner', 'DKK', 'kr'),
(33, NULL, 'Dominican Republic, Pesos', 'DOP', 'RD$'),
(34, NULL, 'East Caribbean, Dollars', 'XCD', '$'),
(35, NULL, 'Egypt, Pounds', 'EGP', '£'),
(36, NULL, 'El Salvador, Colones', 'SVC', '$'),
(37, NULL, 'England (United Kingdom), Pounds', 'GBP', '£'),
(38, NULL, 'Estonia, Krooni', 'EEK', 'kr'),
(39, NULL, 'Euro', 'EUR', '€'),
(40, NULL, 'Falkland Islands, Pounds', 'FKP', '£'),
(41, NULL, 'Fiji, Dollars', 'FJD', '$'),
(42, NULL, 'France, Euro', 'EUR', '€'),
(43, NULL, 'Ghana, Cedis', 'GHC', '¢'),
(44, NULL, 'Gibraltar, Pounds', 'GIP', '£'),
(45, NULL, 'Greece, Euro', 'EUR', '€'),
(46, NULL, 'Guatemala, Quetzales', 'GTQ', 'Q'),
(47, NULL, 'Guernsey, Pounds', 'GGP', '£'),
(48, NULL, 'Guyana, Dollars', 'GYD', '$'),
(49, NULL, 'Holland (Netherlands), Euro', 'EUR', '€'),
(50, NULL, 'Honduras, Lempiras', 'HNL', 'L'),
(51, NULL, 'Hong Kong, Dollars', 'HKD', '$'),
(52, NULL, 'Hungary, Forint', 'HUF', 'Ft'),
(53, NULL, 'Iceland, Kronur', 'ISK', 'kr'),
(54, NULL, 'India, Rupees', 'INR', '?'),
(55, NULL, 'Indonesia, Rupiahs', 'IDR', 'Rp'),
(56, NULL, 'Iran, Rials', 'IRR', '?'),
(57, NULL, 'Ireland, Euro', 'EUR', '€'),
(58, NULL, 'Isle of Man, Pounds', 'IMP', '£'),
(59, NULL, 'Israel, New Shekels', 'ILS', '?'),
(60, NULL, 'Italy, Euro', 'EUR', '€'),
(61, NULL, 'Jamaica, Dollars', 'JMD', 'J$'),
(62, NULL, 'Japan, Yen', 'JPY', '¥'),
(63, NULL, 'Jersey, Pounds', 'JEP', '£'),
(64, NULL, 'Kazakhstan, Tenge', 'KZT', '??'),
(65, NULL, 'Korea (North), Won', 'KPW', '?'),
(66, NULL, 'Korea (South), Won', 'KRW', '?'),
(67, NULL, 'Kyrgyzstan, Soms', 'KGS', '??'),
(68, NULL, 'Laos, Kips', 'LAK', '?'),
(69, NULL, 'Latvia, Lati', 'LVL', 'Ls'),
(70, NULL, 'Lebanon, Pounds', 'LBP', '£'),
(71, NULL, 'Liberia, Dollars', 'LRD', '$'),
(72, NULL, 'Liechtenstein, Switzerland Francs', 'CHF', 'CHF'),
(73, NULL, 'Lithuania, Litai', 'LTL', 'Lt'),
(74, NULL, 'Luxembourg, Euro', 'EUR', '€'),
(75, NULL, 'Macedonia, Denars', 'MKD', '???'),
(76, NULL, 'Malaysia, Ringgits', 'MYR', 'RM'),
(77, NULL, 'Malta, Euro', 'EUR', '€'),
(78, NULL, 'Mauritius, Rupees', 'MUR', '?'),
(79, NULL, 'Mexico, Pesos', 'MXN', '$'),
(80, NULL, 'Mongolia, Tugriks', 'MNT', '?'),
(81, NULL, 'Mozambique, Meticais', 'MZN', 'MT'),
(82, NULL, 'Namibia, Dollars', 'NAD', '$'),
(83, NULL, 'Nepal, Rupees', 'NPR', '?'),
(84, NULL, 'Netherlands Antilles, Guilders', 'ANG', 'ƒ'),
(85, NULL, 'Netherlands, Euro', 'EUR', '€'),
(86, NULL, 'New Zealand, Dollars', 'NZD', '$'),
(87, NULL, 'Nicaragua, Cordobas', 'NIO', 'C$'),
(88, NULL, 'Nigeria, Nairas', 'NGN', '?'),
(89, NULL, 'North Korea, Won', 'KPW', '?'),
(90, NULL, 'Norway, Krone', 'NOK', 'kr'),
(91, NULL, 'Oman, Rials', 'OMR', '?'),
(92, NULL, 'Pakistan, Rupees', 'PKR', '?'),
(93, NULL, 'Panama, Balboa', 'PAB', 'B/.'),
(94, NULL, 'Paraguay, Guarani', 'PYG', 'Gs'),
(95, NULL, 'Peru, Nuevos Soles', 'PEN', 'S/.'),
(96, NULL, 'Philippines, Pesos', 'PHP', 'Php'),
(97, NULL, 'Poland, Zlotych', 'PLN', 'z?'),
(98, NULL, 'Qatar, Rials', 'QAR', '?'),
(99, NULL, 'Romania, New Lei', 'RON', 'lei'),
(100, NULL, 'Russia, Rubles', 'RUB', '???'),
(101, NULL, 'Saint Helena, Pounds', 'SHP', '£'),
(102, NULL, 'Saudi Arabia, Riyals', 'SAR', '?'),
(103, NULL, 'Serbia, Dinars', 'RSD', '???.'),
(104, NULL, 'Seychelles, Rupees', 'SCR', '?'),
(105, NULL, 'Singapore, Dollars', 'SGD', '$'),
(106, NULL, 'Slovenia, Euro', 'EUR', '€'),
(107, NULL, 'Solomon Islands, Dollars', 'SBD', '$'),
(108, NULL, 'Somalia, Shillings', 'SOS', 'S'),
(109, NULL, 'South Africa, Rand', 'ZAR', 'R'),
(110, NULL, 'South Korea, Won', 'KRW', '?'),
(111, NULL, 'Spain, Euro', 'EUR', '€'),
(112, NULL, 'Sri Lanka, Rupees', 'LKR', '?'),
(113, NULL, 'Sweden, Kronor', 'SEK', 'kr'),
(114, NULL, 'Switzerland, Francs', 'CHF', 'CHF'),
(115, NULL, 'Suriname, Dollars', 'SRD', '$'),
(116, NULL, 'Syria, Pounds', 'SYP', '£'),
(117, NULL, 'Taiwan, New Dollars', 'TWD', 'NT$'),
(118, NULL, 'Thailand, Baht', 'THB', '?'),
(119, NULL, 'Trinidad and Tobago, Dollars', 'TTD', 'TT$'),
(120, NULL, 'Turkey, Lira', 'TRY', 'TL'),
(121, NULL, 'Turkey, Liras', 'TRL', '?'),
(122, NULL, 'Tuvalu, Dollars', 'TVD', '$'),
(123, NULL, 'Ukraine, Hryvnia', 'UAH', '?'),
(124, NULL, 'United Kingdom, Pounds', 'GBP', '£'),
(125, NULL, 'United States of America, Dollars', 'USD', '$'),
(126, NULL, 'Uruguay, Pesos', 'UYU', '$U'),
(127, NULL, 'Uzbekistan, Sums', 'UZS', '??'),
(128, NULL, 'Vatican City, Euro', 'EUR', '€'),
(129, NULL, 'Venezuela, Bolivares Fuertes', 'VEF', 'Bs'),
(130, NULL, 'Vietnam, Dong', 'VND', '?'),
(131, NULL, 'Yemen, Rials', 'YER', '?'),
(132, NULL, 'Zimbabwe, Zimbabwe Dollars', 'ZWD', 'Z$');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
