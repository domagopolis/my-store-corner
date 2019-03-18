-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 18, 2019 at 03:23 AM
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
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`, `latitude`, `longitude`, `zoom`, `measurement`, `display_enabled`) VALUES
(1, 'Afghanistan', 'afghanistan', '0.000000', '0.000000', 0, 'metric', 0),
(2, 'Albania', 'albania', '0.000000', '0.000000', 0, 'metric', 0),
(3, 'Algeria', 'algeria', '0.000000', '0.000000', 0, 'metric', 0),
(4, 'American Samoa', 'american-samoa', '0.000000', '0.000000', 0, 'metric', 0),
(5, 'Andorra', 'andorra', '0.000000', '0.000000', 0, 'metric', 0),
(6, 'Angola', 'angola', '0.000000', '0.000000', 0, 'metric', 0),
(7, 'Anguilla', 'anguilla', '0.000000', '0.000000', 0, 'metric', 0),
(8, 'Antarctica', 'antarctica', '0.000000', '0.000000', 0, 'metric', 0),
(9, 'Antigua and Barbuda', 'antigua-and-barbuda', '0.000000', '0.000000', 0, 'metric', 0),
(10, 'Argentina', 'argentina', '0.000000', '0.000000', 0, 'metric', 0),
(11, 'Armenia', 'armenia', '0.000000', '0.000000', 0, 'metric', 0),
(12, 'Aruba', 'aruba', '0.000000', '0.000000', 0, 'metric', 0),
(13, 'Australia', 'australia', '-28.274398', '133.775136', 4, 'metric', 1),
(14, 'Austria', 'austria', '0.000000', '0.000000', 0, 'metric', 0),
(15, 'Azerbaijan', 'azerbaijan', '0.000000', '0.000000', 0, 'metric', 0),
(16, 'Bahamas', 'bahamas', '0.000000', '0.000000', 0, 'metric', 0),
(17, 'Bahrain', 'bahrain', '0.000000', '0.000000', 0, 'metric', 0),
(18, 'Bangladesh', 'bangladesh', '0.000000', '0.000000', 0, 'metric', 0),
(19, 'Barbados', 'barbados', '0.000000', '0.000000', 0, 'metric', 0),
(20, 'Belarus', 'belarus', '0.000000', '0.000000', 0, 'metric', 0),
(21, 'Belgium', 'belgium', '0.000000', '0.000000', 0, 'metric', 0),
(22, 'Belize', 'belize', '0.000000', '0.000000', 0, 'metric', 0),
(23, 'Benin', 'benin', '0.000000', '0.000000', 0, 'metric', 0),
(24, 'Bermuda', 'bermuda', '0.000000', '0.000000', 0, 'metric', 0),
(25, 'Bhutan', 'bhutan', '0.000000', '0.000000', 0, 'metric', 0),
(26, 'Bolivia', 'bolivia', '0.000000', '0.000000', 0, 'metric', 0),
(27, 'Bosnia and Herzegowina', 'bosnia-and-herzegowina', '0.000000', '0.000000', 0, 'metric', 0),
(28, 'Botswana', 'botswana', '0.000000', '0.000000', 0, 'metric', 0),
(29, 'Bouvet Island', 'bouvet-island', '0.000000', '0.000000', 0, 'metric', 0),
(30, 'Brazil', 'brazil', '0.000000', '0.000000', 0, 'metric', 0),
(31, 'British Indian Ocean Territory', 'british-indian-ocean-territory', '0.000000', '0.000000', 0, 'metric', 0),
(32, 'Brunei Darussalam', 'brunei-darussalam', '0.000000', '0.000000', 0, 'metric', 0),
(33, 'Bulgaria', 'bulgaria', '0.000000', '0.000000', 0, 'metric', 0),
(34, 'Burkina Faso', 'burkina-faso', '0.000000', '0.000000', 0, 'metric', 0),
(35, 'Burundi', 'burundi', '0.000000', '0.000000', 0, 'metric', 0),
(36, 'Cambodia', 'cambodia', '0.000000', '0.000000', 0, 'metric', 0),
(37, 'Cameroon', 'cameroon', '0.000000', '0.000000', 0, 'metric', 0),
(38, 'Canada', 'canada', '0.000000', '0.000000', 0, 'metric', 0),
(39, 'Cape Verde', 'cape-verde', '0.000000', '0.000000', 0, 'metric', 0),
(40, 'Cayman Islands', 'cayman-islands', '0.000000', '0.000000', 0, 'metric', 0),
(41, 'Central African Republic', 'central-african-republic', '0.000000', '0.000000', 0, 'metric', 0),
(42, 'Chad', 'chad', '0.000000', '0.000000', 0, 'metric', 0),
(43, 'Chile', 'chile', '0.000000', '0.000000', 0, 'metric', 0),
(44, 'China', 'china', '0.000000', '0.000000', 0, 'metric', 0),
(45, 'Christmas Island', 'christmas-island', '0.000000', '0.000000', 0, 'metric', 0),
(46, 'Cocos (Keeling) Islands', 'cocos-(keeling)-islands', '0.000000', '0.000000', 0, 'metric', 0),
(47, 'Colombia', 'colombia', '0.000000', '0.000000', 0, 'metric', 0),
(48, 'Comoros', 'comoros', '0.000000', '0.000000', 0, 'metric', 0),
(49, 'Congo', 'congo', '0.000000', '0.000000', 0, 'metric', 0),
(50, 'Cook Islands', 'cook-islands', '0.000000', '0.000000', 0, 'metric', 0),
(51, 'Costa Rica', 'costa-rica', '0.000000', '0.000000', 0, 'metric', 0),
(52, 'Cote D`Ivoire', 'cote-d`ivoire', '0.000000', '0.000000', 0, 'metric', 0),
(53, 'Croatia', 'croatia', '0.000000', '0.000000', 0, 'metric', 0),
(54, 'Cuba', 'cuba', '0.000000', '0.000000', 0, 'metric', 0),
(55, 'Cyprus', 'cyprus', '0.000000', '0.000000', 0, 'metric', 0),
(56, 'Czech Republic', 'czech-republic', '0.000000', '0.000000', 0, 'metric', 0),
(57, 'Denmark', 'denmark', '0.000000', '0.000000', 0, 'metric', 0),
(58, 'Djibouti', 'djibouti', '0.000000', '0.000000', 0, 'metric', 0),
(59, 'Dominica', 'dominica', '0.000000', '0.000000', 0, 'metric', 0),
(60, 'Dominican Republic', 'dominican-republic', '0.000000', '0.000000', 0, 'metric', 0),
(61, 'East Timor', 'east-timor', '0.000000', '0.000000', 0, 'metric', 0),
(62, 'Ecuador', 'ecuador', '0.000000', '0.000000', 0, 'metric', 0),
(63, 'Egypt', 'egypt', '0.000000', '0.000000', 0, 'metric', 0),
(64, 'El Salvador', 'el-salvador', '0.000000', '0.000000', 0, 'metric', 0),
(65, 'Equatorial Guinea', 'equatorial-guinea', '0.000000', '0.000000', 0, 'metric', 0),
(66, 'Eritrea', 'eritrea', '0.000000', '0.000000', 0, 'metric', 0),
(67, 'Estonia', 'estonia', '0.000000', '0.000000', 0, 'metric', 0),
(68, 'Ethiopia', 'ethiopia', '0.000000', '0.000000', 0, 'metric', 0),
(69, 'Falkland Islands (Malvinas)', 'falkland-islands-(malvinas)', '0.000000', '0.000000', 0, 'metric', 0),
(70, 'Faroe Islands', 'faroe-islands', '0.000000', '0.000000', 0, 'metric', 0),
(71, 'Fiji', 'fiji', '0.000000', '0.000000', 0, 'metric', 0),
(72, 'Finland', 'finland', '0.000000', '0.000000', 0, 'metric', 0),
(73, 'France', 'france', '0.000000', '0.000000', 0, 'metric', 0),
(74, 'France, Metropolitan', 'france,-metropolitan', '0.000000', '0.000000', 0, 'metric', 0),
(75, 'French Guiana', 'french-guiana', '0.000000', '0.000000', 0, 'metric', 0),
(76, 'French Polynesia', 'french-polynesia', '0.000000', '0.000000', 0, 'metric', 0),
(77, 'French Southern Territories', 'french-southern-territories', '0.000000', '0.000000', 0, 'metric', 0),
(78, 'Gabon', 'gabon', '0.000000', '0.000000', 0, 'metric', 0),
(79, 'Gambia', 'gambia', '0.000000', '0.000000', 0, 'metric', 0),
(80, 'Georgia', 'georgia', '0.000000', '0.000000', 0, 'metric', 0),
(81, 'Germany', 'germany', '0.000000', '0.000000', 0, 'metric', 0),
(82, 'Ghana', 'ghana', '0.000000', '0.000000', 0, 'metric', 0),
(83, 'Gibraltar', 'gibraltar', '0.000000', '0.000000', 0, 'metric', 0),
(84, 'Greece', 'greece', '0.000000', '0.000000', 0, 'metric', 0),
(85, 'Greenland', 'greenland', '0.000000', '0.000000', 0, 'metric', 0),
(86, 'Grenada', 'grenada', '0.000000', '0.000000', 0, 'metric', 0),
(87, 'Guadeloupe', 'guadeloupe', '0.000000', '0.000000', 0, 'metric', 0),
(88, 'Guam', 'guam', '0.000000', '0.000000', 0, 'metric', 0),
(89, 'Guatemala', 'guatemala', '0.000000', '0.000000', 0, 'metric', 0),
(90, 'Guinea', 'guinea', '0.000000', '0.000000', 0, 'metric', 0),
(91, 'Guinea-bissau', 'guinea-bissau', '0.000000', '0.000000', 0, 'metric', 0),
(92, 'Guyana', 'guyana', '0.000000', '0.000000', 0, 'metric', 0),
(93, 'Haiti', 'haiti', '0.000000', '0.000000', 0, 'metric', 0),
(94, 'Heard and Mc Donald Islands', 'heard-and-mc-donald-islands', '0.000000', '0.000000', 0, 'metric', 0),
(95, 'Honduras', 'honduras', '0.000000', '0.000000', 0, 'metric', 0),
(96, 'Hong Kong', 'hong-kong', '0.000000', '0.000000', 0, 'metric', 0),
(97, 'Hungary', 'hungary', '0.000000', '0.000000', 0, 'metric', 0),
(98, 'Iceland', 'iceland', '0.000000', '0.000000', 0, 'metric', 0),
(99, 'India', 'india', '0.000000', '0.000000', 0, 'metric', 0),
(100, 'Indonesia', 'indonesia', '0.000000', '0.000000', 0, 'metric', 0),
(101, 'Iran (Islamic Republic of)', 'iran-(islamic-republic-of)', '0.000000', '0.000000', 0, 'metric', 0),
(102, 'Iraq', 'iraq', '0.000000', '0.000000', 0, 'metric', 0),
(103, 'Ireland', 'ireland', '53.409532', '-8.239746', 6, 'metric', 1),
(104, 'Israel', 'israel', '0.000000', '0.000000', 0, 'metric', 0),
(105, 'Italy', 'italy', '0.000000', '0.000000', 0, 'metric', 0),
(106, 'Jamaica', 'jamaica', '0.000000', '0.000000', 0, 'metric', 0),
(107, 'Japan', 'japan', '0.000000', '0.000000', 0, 'metric', 0),
(108, 'Jordan', 'jordan', '0.000000', '0.000000', 0, 'metric', 0),
(109, 'Kazakhstan', 'kazakhstan', '0.000000', '0.000000', 0, 'metric', 0),
(110, 'Kenya', 'kenya', '0.000000', '0.000000', 0, 'metric', 0),
(111, 'Kiribati', 'kiribati', '0.000000', '0.000000', 0, 'metric', 0),
(112, 'Korea, DPR of', 'korea,-dpr-of', '0.000000', '0.000000', 0, 'metric', 0),
(113, 'Korea, Republic of', 'korea,-republic-of', '0.000000', '0.000000', 0, 'metric', 0),
(114, 'Kuwait', 'kuwait', '0.000000', '0.000000', 0, 'metric', 0),
(115, 'Kyrgyzstan', 'kyrgyzstan', '0.000000', '0.000000', 0, 'metric', 0),
(116, 'Lao PDR', 'lao-pdr', '0.000000', '0.000000', 0, 'metric', 0),
(117, 'Latvia', 'latvia', '0.000000', '0.000000', 0, 'metric', 0),
(118, 'Lebanon', 'lebanon', '0.000000', '0.000000', 0, 'metric', 0),
(119, 'Lesotho', 'lesotho', '0.000000', '0.000000', 0, 'metric', 0),
(120, 'Liberia', 'liberia', '0.000000', '0.000000', 0, 'metric', 0),
(121, 'Libyan Arab Jamahiriya', 'libyan-arab-jamahiriya', '0.000000', '0.000000', 0, 'metric', 0),
(122, 'Liechtenstein', 'liechtenstein', '0.000000', '0.000000', 0, 'metric', 0),
(123, 'Lithuania', 'lithuania', '0.000000', '0.000000', 0, 'metric', 0),
(124, 'Luxembourg', 'luxembourg', '0.000000', '0.000000', 0, 'metric', 0),
(125, 'Macau', 'macau', '0.000000', '0.000000', 0, 'metric', 0),
(126, 'Macedonia', 'macedonia', '0.000000', '0.000000', 0, 'metric', 0),
(127, 'Madagascar', 'madagascar', '0.000000', '0.000000', 0, 'metric', 0),
(128, 'Malawi', 'malawi', '0.000000', '0.000000', 0, 'metric', 0),
(129, 'Malaysia', 'malaysia', '0.000000', '0.000000', 0, 'metric', 0),
(130, 'Maldives', 'maldives', '0.000000', '0.000000', 0, 'metric', 0),
(131, 'Mali', 'mali', '0.000000', '0.000000', 0, 'metric', 0),
(132, 'Malta', 'malta', '0.000000', '0.000000', 0, 'metric', 0),
(133, 'Marshall Islands', 'marshall-islands', '0.000000', '0.000000', 0, 'metric', 0),
(134, 'Martinique', 'martinique', '0.000000', '0.000000', 0, 'metric', 0),
(135, 'Mauritania', 'mauritania', '0.000000', '0.000000', 0, 'metric', 0),
(136, 'Mauritius', 'mauritius', '0.000000', '0.000000', 0, 'metric', 0),
(137, 'Mayotte', 'mayotte', '0.000000', '0.000000', 0, 'metric', 0),
(138, 'Mexico', 'mexico', '0.000000', '0.000000', 0, 'metric', 0),
(139, 'Micronesia, Federated States of', 'micronesia,-federated-states-of', '0.000000', '0.000000', 0, 'metric', 0),
(140, 'Moldova, Republic of', 'moldova,-republic-of', '0.000000', '0.000000', 0, 'metric', 0),
(141, 'Monaco', 'monaco', '0.000000', '0.000000', 0, 'metric', 0),
(142, 'Mongolia', 'mongolia', '0.000000', '0.000000', 0, 'metric', 0),
(143, 'Montserrat', 'montserrat', '0.000000', '0.000000', 0, 'metric', 0),
(144, 'Morocco', 'morocco', '0.000000', '0.000000', 0, 'metric', 0),
(145, 'Mozambique', 'mozambique', '0.000000', '0.000000', 0, 'metric', 0),
(146, 'Myanmar', 'myanmar', '0.000000', '0.000000', 0, 'metric', 0),
(147, 'Namibia', 'namibia', '0.000000', '0.000000', 0, 'metric', 0),
(148, 'Nauru', 'nauru', '0.000000', '0.000000', 0, 'metric', 0),
(149, 'Nepal', 'nepal', '0.000000', '0.000000', 0, 'metric', 0),
(150, 'Netherlands', 'netherlands', '0.000000', '0.000000', 0, 'metric', 0),
(151, 'Netherlands Antilles', 'netherlands-antilles', '0.000000', '0.000000', 0, 'metric', 0),
(152, 'New Caledonia', 'new-caledonia', '0.000000', '0.000000', 0, 'metric', 0),
(153, 'New Zealand', 'new-zealand', '0.000000', '0.000000', 0, 'metric', 0),
(154, 'Nicaragua', 'nicaragua', '0.000000', '0.000000', 0, 'metric', 0),
(155, 'Niger', 'niger', '0.000000', '0.000000', 0, 'metric', 0),
(156, 'Nigeria', 'nigeria', '0.000000', '0.000000', 0, 'metric', 0),
(157, 'Niue', 'niue', '0.000000', '0.000000', 0, 'metric', 0),
(158, 'Norfolk Island', 'norfolk-island', '0.000000', '0.000000', 0, 'metric', 0),
(159, 'Northern Mariana Islands', 'northern-mariana-islands', '0.000000', '0.000000', 0, 'metric', 0),
(160, 'Norway', 'norway', '0.000000', '0.000000', 0, 'metric', 0),
(161, 'Oman', 'oman', '0.000000', '0.000000', 0, 'metric', 0),
(162, 'Pakistan', 'pakistan', '0.000000', '0.000000', 0, 'metric', 0),
(163, 'Palau', 'palau', '0.000000', '0.000000', 0, 'metric', 0),
(164, 'Panama', 'panama', '0.000000', '0.000000', 0, 'metric', 0),
(165, 'Papua New Guinea', 'papua-new-guinea', '0.000000', '0.000000', 0, 'metric', 0),
(166, 'Paraguay', 'paraguay', '0.000000', '0.000000', 0, 'metric', 0),
(167, 'Peru', 'peru', '0.000000', '0.000000', 0, 'metric', 0),
(168, 'Philippines', 'philippines', '0.000000', '0.000000', 0, 'metric', 0),
(169, 'Pitcairn', 'pitcairn', '0.000000', '0.000000', 0, 'metric', 0),
(170, 'Poland', 'poland', '0.000000', '0.000000', 0, 'metric', 0),
(171, 'Portugal', 'portugal', '0.000000', '0.000000', 0, 'metric', 0),
(172, 'Puerto Rico', 'puerto-rico', '0.000000', '0.000000', 0, 'metric', 0),
(173, 'Qatar', 'qatar', '0.000000', '0.000000', 0, 'metric', 0),
(174, 'Reunion', 'reunion', '0.000000', '0.000000', 0, 'metric', 0),
(175, 'Romania', 'romania', '0.000000', '0.000000', 0, 'metric', 0),
(176, 'Russian Federation', 'russian-federation', '0.000000', '0.000000', 0, 'metric', 0),
(177, 'Rwanda', 'rwanda', '0.000000', '0.000000', 0, 'metric', 0),
(178, 'Saint Kitts and Nevis', 'saint-kitts-and-nevis', '0.000000', '0.000000', 0, 'metric', 0),
(179, 'Saint Lucia', 'saint-lucia', '0.000000', '0.000000', 0, 'metric', 0),
(180, 'Saint Vincent and the Grenadines', 'saint-vincent-and-the-grenadines', '0.000000', '0.000000', 0, 'metric', 0),
(181, 'Samoa', 'samoa', '0.000000', '0.000000', 0, 'metric', 0),
(182, 'San Marino', 'san-marino', '0.000000', '0.000000', 0, 'metric', 0),
(183, 'Sao Tome and Principe', 'sao-tome-and-principe', '0.000000', '0.000000', 0, 'metric', 0),
(184, 'Saudi Arabia', 'saudi-arabia', '0.000000', '0.000000', 0, 'metric', 0),
(185, 'Senegal', 'senegal', '0.000000', '0.000000', 0, 'metric', 0),
(186, 'Seychelles', 'seychelles', '0.000000', '0.000000', 0, 'metric', 0),
(187, 'Sierra Leone', 'sierra-leone', '0.000000', '0.000000', 0, 'metric', 0),
(188, 'Singapore', 'singapore', '0.000000', '0.000000', 0, 'metric', 0),
(189, 'Slovakia (Slovak Republic)', 'slovakia-(slovak-republic)', '0.000000', '0.000000', 0, 'metric', 0),
(190, 'Slovenia', 'slovenia', '0.000000', '0.000000', 0, 'metric', 0),
(191, 'Solomon Islands', 'solomon-islands', '0.000000', '0.000000', 0, 'metric', 0),
(192, 'Somalia', 'somalia', '0.000000', '0.000000', 0, 'metric', 0),
(193, 'South Africa', 'south-africa', '0.000000', '0.000000', 0, 'metric', 0),
(194, 'South Georgia', 'south-georgia', '0.000000', '0.000000', 0, 'metric', 0),
(195, 'Spain', 'spain', '0.000000', '0.000000', 0, 'metric', 0),
(196, 'Sri Lanka', 'sri-lanka', '0.000000', '0.000000', 0, 'metric', 0),
(197, 'St. Helena', 'st.-helena', '0.000000', '0.000000', 0, 'metric', 0),
(198, 'St. Pierre and Miquelon', 'st.-pierre-and-miquelon', '0.000000', '0.000000', 0, 'metric', 0),
(199, 'Sudan', 'sudan', '0.000000', '0.000000', 0, 'metric', 0),
(200, 'Suriname', 'suriname', '0.000000', '0.000000', 0, 'metric', 0),
(201, 'Svalbard and Jan Mayen Islands', 'svalbard-and-jan-mayen-islands', '0.000000', '0.000000', 0, 'metric', 0),
(202, 'Swaziland', 'swaziland', '0.000000', '0.000000', 0, 'metric', 0),
(203, 'Sweden', 'sweden', '0.000000', '0.000000', 0, 'metric', 0),
(204, 'Switzerland', 'switzerland', '0.000000', '0.000000', 0, 'metric', 0),
(205, 'Syrian Arab Republic', 'syrian-arab-republic', '0.000000', '0.000000', 0, 'metric', 0),
(206, 'Taiwan', 'taiwan', '0.000000', '0.000000', 0, 'metric', 0),
(207, 'Tajikistan', 'tajikistan', '0.000000', '0.000000', 0, 'metric', 0),
(208, 'Tanzania, United Republic of', 'tanzania,-united-republic-of', '0.000000', '0.000000', 0, 'metric', 0),
(209, 'Thailand', 'thailand', '0.000000', '0.000000', 0, 'metric', 0),
(210, 'Togo', 'togo', '0.000000', '0.000000', 0, 'metric', 0),
(211, 'Tokelau', 'tokelau', '0.000000', '0.000000', 0, 'metric', 0),
(212, 'Tonga', 'tonga', '0.000000', '0.000000', 0, 'metric', 0),
(213, 'Trinidad and Tobago', 'trinidad-and-tobago', '0.000000', '0.000000', 0, 'metric', 0),
(214, 'Tunisia', 'tunisia', '0.000000', '0.000000', 0, 'metric', 0),
(215, 'Turkey', 'turkey', '0.000000', '0.000000', 0, 'metric', 0),
(216, 'Turkmenistan', 'turkmenistan', '0.000000', '0.000000', 0, 'metric', 0),
(217, 'Turks and Caicos Islands', 'turks-and-caicos-islands', '0.000000', '0.000000', 0, 'metric', 0),
(218, 'Tuvalu', 'tuvalu', '0.000000', '0.000000', 0, 'metric', 0),
(219, 'Uganda', 'uganda', '0.000000', '0.000000', 0, 'metric', 0),
(220, 'Ukraine', 'ukraine', '0.000000', '0.000000', 0, 'metric', 0),
(221, 'United Arab Emirates', 'united-arab-emirates', '0.000000', '0.000000', 0, 'metric', 0),
(222, 'United Kingdom', 'united-kingdom', '55.379110', '-3.427734', 5, 'imperial', 1),
(223, 'United States', 'united-states', '37.160317', '-95.800781', 3, 'imperial', 1),
(225, 'Uruguay', 'uruguay', '0.000000', '0.000000', 0, 'metric', 0),
(226, 'Uzbekistan', 'uzbekistan', '0.000000', '0.000000', 0, 'metric', 0),
(227, 'Vanuatu', 'vanuatu', '0.000000', '0.000000', 0, 'metric', 0),
(228, 'Vatican City State (Holy See)', 'vatican-city-state-(holy-see)', '0.000000', '0.000000', 0, 'metric', 0),
(229, 'Venezuela', 'venezuela', '0.000000', '0.000000', 0, 'metric', 0),
(230, 'Viet Nam', 'viet-nam', '0.000000', '0.000000', 0, 'metric', 0),
(231, 'Virgin Islands (British)', 'virgin-islands-(british)', '0.000000', '0.000000', 0, 'metric', 0),
(232, 'Virgin Islands (U.S.)', 'virgin-islands-(u.s.)', '0.000000', '0.000000', 0, 'metric', 0),
(233, 'Wallis and Futuna Islands', 'wallis-and-futuna-islands', '0.000000', '0.000000', 0, 'metric', 0),
(234, 'Western Sahara', 'western-sahara', '0.000000', '0.000000', 0, 'metric', 0),
(235, 'Yemen', 'yemen', '0.000000', '0.000000', 0, 'metric', 0),
(236, 'Yugoslavia', 'yugoslavia', '0.000000', '0.000000', 0, 'metric', 0),
(237, 'Zaire', 'zaire', '0.000000', '0.000000', 0, 'metric', 0),
(238, 'Zambia', 'zambia', '0.000000', '0.000000', 0, 'metric', 0),
(239, 'Zimbabwe', 'zimbabwe', '0.000000', '0.000000', 0, 'metric', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;