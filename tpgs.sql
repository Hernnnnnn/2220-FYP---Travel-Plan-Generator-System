-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-06-22 17:10:16
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
-- 表的结构 `generator`
--

CREATE TABLE `generator` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `destination` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `states` text NOT NULL,
  `destinations` text NOT NULL,
  `createdtime` date NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `history`
--

INSERT INTO `history` (`id`, `states`, `destinations`, `createdtime`, `email`) VALUES
(1, 'Malacca', 'Hard Rock Cafe\nPak Putra Restaurant\nRestaurant Ming Huat\nShore Sky\n', '2023-06-19', 'dehui7051@gmail.com');

-- --------------------------------------------------------

--
-- 表的结构 `johorlocation`
--

CREATE TABLE `johorlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL,
  `locationlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 表的结构 `johorrestaurant`
--

CREATE TABLE `johorrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL,
  `restaurantlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `option` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `locations`
--

INSERT INTO `locations` (`id`, `name`, `description`, `image_url`, `video_url`, `direction_link`, `locationdetail_link`, `option`) VALUES
(1, 'Malacca', 'Malacca (Malay: Melaka) is a state in Malaysia located in the southern region of the Malay Peninsula, facing the Strait of Malacca.', 'melaka.jpg', 'malacca.mp4', 'https://goo.gl/maps/chXMuhti5NhDZK9D9', 'https://en.wikipedia.org/wiki/Malacca', '1'),
(2, 'Penang', 'Penang (Malay: Pulau Pinang) is a Malaysian state located on the northwest coast of Peninsular Malaysia, by the Malacca Strait.', 'penang.jpg', 'penang.mp4', 'https://goo.gl/maps/pAFp1YNmsmKJCHR47', 'https://en.wikipedia.org/wiki/Penang', '1'),
(3, 'Kuala Lumpur', 'Kuala Lumpur (Malay: Wilayah Persekutuan Kuala Lumpur) and colloquially referred to as KL, is a federal territory and the ceremonial, legislative, and judicial capital city of Malaysia.', 'klcc_55.jpg', 'Kuala Lumpur.mp4', 'https://goo.gl/maps/na1FsRVLjJVLZ9Hs5', 'https://en.wikipedia.org/wiki/Kuala_Lumpur', '0'),
(8, 'Johor', 'Johor also spelled as Johore, is a state of Malaysia in the south of the Malay Peninsula.', 'Johor.jpg', 'malacca.mp4', 'https://goo.gl/maps/aoLkmJWoLJT1betA6', 'https://en.wikipedia.org/wiki/Johor', '0');

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
(1, 'Jayden', 'jlim2468101@gmail.com', '$2y$10$Zkqdhbh/nwSFWWwvt6.0VOlkUUzZafCidcv6pe321ifmrB2Cuy1Au', 1, 'uploads/648460ee15cd2_3534146.png', '0178208893'),
(3, 'Hernnnnnn', 'allenleekheehern@gmail.com', '$2y$10$DX2Rv.NixTxHSSl0vPSkcesILhuoWjmpQwsFaUYs1m1vM/Zezw4bm', 0, 'uploads/64846357bcb4c_Hern.jpg', '0178208893'),
(4, 'Teng De Hui', 'dehui7051@gmail.com', '123456', 1, 'uploads/648492166371d_dehui.jpg', '0182027784');

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

--
-- 转存表中的数据 `malaccalocation`
--

INSERT INTO `malaccalocation` (`id`, `locationname`, `locationimage`, `locationlink`) VALUES
(1, 'Jonker Street', 'images/Malacca/PLACE/mlk_jonker street.jpg', 'https://goo.gl/maps/UJhFvdzMoh3TMFJd9'),
(2, 'Shore Sky', 'images/Malacca/PLACE/melaka_shore_sky.jpg', 'https://goo.gl/maps/V89MyaB8Ye4xUjbFA');

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

--
-- 转存表中的数据 `malaccarestaurant`
--

INSERT INTO `malaccarestaurant` (`id`, `restaurantname`, `restaurantimage`, `restaurantlink`) VALUES
(1, 'Hard Rock Cafe', 'images/Malacca/FOOD/food_melaka_Hard Rock Cafe.jpeg', 'https://goo.gl/maps/yDhbuXpGwzmRcrBbA'),
(2, 'Pak Putra Restaurant', 'images/Malacca/FOOD/food_melaka_Pak Putra Restaurant.jpg', 'https://goo.gl/maps/FGqrSp97dWCSfVBp8'),
(3, 'Restaurant Ming Huat', 'images/Malacca/FOOD/food_melaka_Restaurant Ming Huat.jpg', 'https://goo.gl/maps/BQh9184PBNg4wVhJA'),
(4, 'Wild Coriander', 'images/Malacca/FOOD/food_melaka_wild coriander.jpg', 'https://goo.gl/maps/QewR58htGNoaR7Xg7');

-- --------------------------------------------------------

--
-- 表的结构 `userdestination`
--

CREATE TABLE `userdestination` (
  `des_id` int(11) NOT NULL,
  `des_Name` varchar(255) NOT NULL,
  `des_img` varchar(255) NOT NULL,
  `des_day` int(255) NOT NULL,
  `des_duration` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `userdestination`
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
-- 表的结构 `userfeedback`
--

CREATE TABLE `userfeedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `feedback` text NOT NULL,
  `review` int(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `userfeedback`
--

INSERT INTO `userfeedback` (`id`, `email`, `type`, `feedback`, `review`, `status`) VALUES
(39, 'allenleekheehern@gmail.com', 'feedback', 'nice', 5, '1'),
(42, 'jlim2468101@gmail.com', 'feedback', 'It is nice😊', 5, '0'),
(44, 'dehui7051@gmail.com', 'inquiry', 'Nice website, friendly for that who don\'t know how to plan their travel.', 5, '1');

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
-- 表的索引 `generator`
--
ALTER TABLE `generator`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

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
-- 表的索引 `malaccalocation`
--
ALTER TABLE `malaccalocation`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `malaccarestaurant`
--
ALTER TABLE `malaccarestaurant`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `userdestination`
--
ALTER TABLE `userdestination`
  ADD PRIMARY KEY (`des_id`);

--
-- 表的索引 `userfeedback`
--
ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`id`);

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
-- 使用表AUTO_INCREMENT `generator`
--
ALTER TABLE `generator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `malaccalocation`
--
ALTER TABLE `malaccalocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `malaccarestaurant`
--
ALTER TABLE `malaccarestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `userdestination`
--
ALTER TABLE `userdestination`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用表AUTO_INCREMENT `userfeedback`
--
ALTER TABLE `userfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 使用表AUTO_INCREMENT `usergenerator`
--
ALTER TABLE `usergenerator`
  MODIFY `des_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
