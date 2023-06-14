-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 05:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `email`, `image`) VALUES
(1, 'Teng', '456', 'dehui7051@gmail.com', 'dehui.jpg'),
(2, 'Teng', '456', 'dehui7051@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `generator`
--

CREATE TABLE `generator` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generator`
--

INSERT INTO `generator` (`id`, `day`, `destination`) VALUES
(1, 1, ''),
(2, 2, ''),
(3, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `states` text NOT NULL,
  `destinations` text NOT NULL,
  `createdtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `states`, `destinations`, `createdtime`) VALUES
(1, 'Malacca', '777\n', '2023-06-09'),
(2, 'Malacca', 'Shore Sky\nWild Coriander\nJonker Street\n', '2023-06-10'),
(3, 'Malacca', 'Shore Sky\nWild Coriander\nJonker Street\n', '2023-06-10'),
(4, 'Malacca', 'Shore Sky\nWild Coriander\nJonker Street\n', '2023-06-10'),
(5, 'Malacca', 'Shore Sky\nWild Coriander\nJonker Street\n', '2023-06-10'),
(6, 'Malacca', 'Shore Sky\nWild Coriander\nJonker Street\n', '2023-06-10'),
(7, 'Malacca', 'Shore Sky\nWild Coriander\nJonker Street\n', '2023-06-10'),
(8, 'Malacca', 'Shore Sky\nWild Coriander\nJonker Street\n', '2023-06-10'),
(9, 'Malacca', 'Shore Sky\nWild Coriander\nJonker Street\n', '2023-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `johorlocation`
--

CREATE TABLE `johorlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL,
  `locationlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `johorrestaurant`
--

CREATE TABLE `johorrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL,
  `restaurantlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kedahlocation`
--

CREATE TABLE `kedahlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kedahrestaurant`
--

CREATE TABLE `kedahrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kedahrestaurant`
--

INSERT INTO `kedahrestaurant` (`id`, `restaurantname`, `restaurantimage`) VALUES
(6, 'Kenyalang Cafe', 'images/Kedah/FOOD/kenyalang kafe.jpg'),
(7, 'Nasi Lemak Ong', 'images/Kedah/FOOD/Nasi lemak Ong.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kuala lumpurlocation`
--

CREATE TABLE `kuala lumpurlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kuala lumpurrestaurant`
--

CREATE TABLE `kuala lumpurrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `direction_link` varchar(255) DEFAULT NULL,
  `locationdetail_link` varchar(255) DEFAULT NULL,
  `option` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `description`, `image_url`, `video_url`, `direction_link`, `locationdetail_link`, `option`) VALUES
(1, 'Malacca', 'Malacca is a good ', 'melaka.jpg', 'malacca.mp4', 'https://goo.gl/maps/chXMuhti5NhDZK9D9', 'https://en.wikipedia.org/wiki/Malacca', '1'),
(2, 'Penang', 'Penang is a good place.', 'penang.jpg', 'penang.mp4', NULL, NULL, '1'),
(3, 'Kuala Lumpur', 'Kuala Lumpur is a nice city.', 'Kuala Lumpur.jpg', 'Kuala Lumpur.mp4', NULL, NULL, '0'),
(8, 'Johor', 'Johor is best', 'penang.mp4', 'malacca.mp4', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  `image` text NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `email`, `password`, `status`, `image`, `phone_number`) VALUES
(1, 'Jayden', 'jlim2468101@gmail.com', '$2y$10$Zkqdhbh/nwSFWWwvt6.0VOlkUUzZafCidcv6pe321ifmrB2Cuy1Au', 1, 'uploads/648460ee15cd2_3534146.png', '0178208893'),
(3, 'Hernnnnnn', 'allenleekheehern@gmail.com', '$2y$10$DX2Rv.NixTxHSSl0vPSkcesILhuoWjmpQwsFaUYs1m1vM/Zezw4bm', 1, 'uploads/64846357bcb4c_Hern.jpg', '0178208893');

-- --------------------------------------------------------

--
-- Table structure for table `malaccalocation`
--

CREATE TABLE `malaccalocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL,
  `locationlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `malaccalocation`
--

INSERT INTO `malaccalocation` (`id`, `locationname`, `locationimage`, `locationlink`) VALUES
(0, 'Jonker Street', 'images/Malacca/PLACE/mlk_jonker street.jpg', ''),
(0, 'Shore Sky', 'images/Malacca/PLACE/melaka_shore_sky.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `malaccarestaurant`
--

CREATE TABLE `malaccarestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL,
  `restaurantlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `malaccarestaurant`
--

INSERT INTO `malaccarestaurant` (`id`, `restaurantname`, `restaurantimage`, `restaurantlink`) VALUES
(0, 'Hard Rock Cafe', 'images/Malacca/FOOD/food_melaka_Hard Rock Cafe.jpeg', ''),
(0, 'Pak Putra Restaurant', 'images/Malacca/FOOD/food_melaka_Pak Putra Restaurant.jpg', ''),
(0, 'Restaurant Ming Huat', 'images/Malacca/FOOD/food_melaka_Restaurant Ming Huat.jpg', ''),
(0, 'Wild Coriander', 'images/Malacca/FOOD/food_melaka_wild coriander.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdestination`
--

CREATE TABLE `userdestination` (
  `des_id` int(11) NOT NULL,
  `des_Name` varchar(255) NOT NULL,
  `des_img` varchar(255) NOT NULL,
  `des_day` int(255) NOT NULL,
  `des_duration` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdestination`
--

INSERT INTO `userdestination` (`des_id`, `des_Name`, `des_img`, `des_day`, `des_duration`) VALUES
(11, '', 'images\\Kuala Lumpur\\PLACE\\KL BATU CABUSr.jpg', 1, 0),
(12, 'genting highland', 'images\\Kuala Lumpur\\PLACE\\genting-highland.jpg', 3, 0),
(13, 'genting highland', 'images\\Kuala Lumpur\\PLACE\\genting-highland.jpg', 2, 0),
(14, 'KL ZOO', 'images\\Kuala Lumpur\\PLACE\\KL ZOO.jpg', 5, 0),
(15, 'KLCC', 'images\\Kuala Lumpur\\PLACE\\KLCCC.jpg', 10, 0),
(16, 'KLCC', 'images\\Kuala Lumpur\\PLACE\\KLCCC.jpg', 10, 0),
(17, 'KLCC', 'images\\Kuala Lumpur\\PLACE\\KLCCC.jpg', 10, 0),
(18, 'KLCC', 'images\\Kuala Lumpur\\PLACE\\KLCCC.jpg', 10, 0),
(19, 'BATU CAVU', 'images\\Kuala Lumpur\\PLACE\\KL BATU CABUSr.jpg', 0, 0),
(20, 'BATU CAVU', 'images\\Kuala Lumpur\\PLACE\\KL BATU CABUSr.jpg', 1, 0),
(21, 'KLCC', 'images\\Kuala Lumpur\\PLACE\\KLCCC.jpg', 1, 0),
(22, 'genting highland', 'images\\Kuala Lumpur\\PLACE\\genting-highland.jpg', 1, 0),
(23, 'genting highland', 'images\\Kuala Lumpur\\PLACE\\genting-highland.jpg', 3, 0),
(24, 'genting highland', 'images\\Kuala Lumpur\\PLACE\\genting-highland.jpg', 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userfeedback`
--

CREATE TABLE `userfeedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `feedback` text NOT NULL,
  `review` int(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usergenerator`
--

CREATE TABLE `usergenerator` (
  `des_id` int(255) NOT NULL,
  `des_Name` varchar(255) NOT NULL,
  `des_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usergenerator`
--

INSERT INTO `usergenerator` (`des_id`, `des_Name`, `des_img`) VALUES
(1, 'genting highland', 'images\\Kuala Lumpur\\PLACE\\genting-highland.jpg'),
(2, 'BATU CAVU', 'images\\Kuala Lumpur\\PLACE\\KL BATU CABUSr.jpg'),
(3, 'KL ZOO', 'images\\Kuala Lumpur\\PLACE\\KL ZOO.jpg'),
(4, 'KLCC', 'images\\Kuala Lumpur\\PLACE\\KLCCC.jpg'),
(5, 'KLL', 'images\\Kuala Lumpur\\PLACE\\KLL.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `generator`
--
ALTER TABLE `generator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userdestination`
--
ALTER TABLE `userdestination`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `userfeedback`
--
ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usergenerator`
--
ALTER TABLE `usergenerator`
  ADD PRIMARY KEY (`des_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generator`
--
ALTER TABLE `generator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userdestination`
--
ALTER TABLE `userdestination`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `userfeedback`
--
ALTER TABLE `userfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usergenerator`
--
ALTER TABLE `usergenerator`
  MODIFY `des_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
