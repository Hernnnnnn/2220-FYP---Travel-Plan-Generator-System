-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-06-06 14:16:44
-- 服务器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `tpgs`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `email`, `image`) VALUES
(1, 'Teng', '456', 'dehui7051@gmail.com', 'dehui.jpg'),
(2, 'Teng', '456', 'dehui7051@gmail.com', '');

-- --------------------------------------------------------

--
-- 表的结构 `kedahlocation`
--

CREATE TABLE `kedahlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `kedahrestaurant`
--

CREATE TABLE `kedahrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `kedahrestaurant`
--

INSERT INTO `kedahrestaurant` (`id`, `restaurantname`, `restaurantimage`) VALUES
(6, 'Kenyalang Cafe', 'images/Kedah/FOOD/kenyalang kafe.jpg'),
(7, 'Nasi Lemak Ong', 'images/Kedah/FOOD/Nasi lemak Ong.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `kuala lumpurlocation`
--

CREATE TABLE `kuala lumpurlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `kuala lumpurrestaurant`
--

CREATE TABLE `kuala lumpurrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `direction_link` varchar(255) DEFAULT NULL,
  `locationdetail_link` varchar(255) DEFAULT NULL,
  `option` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `locations`
--

INSERT INTO `locations` (`id`, `name`, `description`, `image_url`, `video_url`, `direction_link`, `locationdetail_link`, `option`) VALUES
(1, 'Malacca', 'Malacca is a good ', 'melaka.jpg', 'malacca.mp4', 'https://goo.gl/maps/chXMuhti5NhDZK9D9', 'https://en.wikipedia.org/wiki/Malacca', NULL),
(2, 'Penang', 'Penang is a good place.', 'penang.jpg', 'penang.mp4', NULL, NULL, NULL),
(3, 'Kuala Lumpur', 'Kuala Lumpur is a nice city.', 'Kuala Lumpur.jpg', 'Kuala Lumpur.mp4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL,
  `image` text NOT NULL,
  `phone_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`ID`, `username`, `email`, `password`, `status`, `image`, `phone_number`) VALUES
(1, 'Hernnnnnn', 'jlim2468101@gmail.com', '$2y$10$Zkqdhbh/nwSFWWwvt6.0VOlkUUzZafCidcv6pe321ifmrB2Cuy1Au', 1, 'user.png', '0178208893');

-- --------------------------------------------------------

--
-- 表的结构 `malaccalocation`
--

CREATE TABLE `malaccalocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL,
  `locationlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `malaccarestaurant`
--

CREATE TABLE `malaccarestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL,
  `restaurantlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `usergenerator`
--

CREATE TABLE `usergenerator` (
  `des_id` int(255) NOT NULL,
  `des_Name` varchar(255) NOT NULL,
  `des_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `usergenerator`
--

INSERT INTO `usergenerator` (`des_id`, `des_Name`, `des_img`) VALUES
(1, 'genting highland', 'images\\Kuala Lumpur\\PLACE\\genting-highland.jpg'),
(2, 'BATU CAVU', 'images\\Kuala Lumpur\\PLACE\\KL BATU CABUSr.jpg'),
(3, 'KL ZOO', 'images\\Kuala Lumpur\\PLACE\\KL ZOO.jpg'),
(4, 'KLCC', 'images\\Kuala Lumpur\\PLACE\\KLCCC.jpg'),
(5, 'KLL', 'images\\Kuala Lumpur\\PLACE\\KLL.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `usergenerator`
--
ALTER TABLE `usergenerator`
  ADD PRIMARY KEY (`des_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `usergenerator`
--
ALTER TABLE `usergenerator`
  MODIFY `des_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
