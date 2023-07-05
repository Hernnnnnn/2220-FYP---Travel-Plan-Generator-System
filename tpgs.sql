-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 09:07 PM
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
(1, 'Teng', '456', 'dehui7051@gmail.com', 'dehui.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `generator`
--

CREATE TABLE `generator` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `states` text NOT NULL,
  `destinations` text NOT NULL,
  `createdtime` date NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kedahlocation`
--

CREATE TABLE `kedahlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL,
  `locationlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kedahlocation`
--

INSERT INTO `kedahlocation` (`id`, `locationname`, `locationimage`, `locationlink`) VALUES
(3, 'Gunung Baling', 'images/Kedah/PLACE/baling-mountain-gunung-baling-min.jpg', 'https://goo.gl/maps/astGAQ8iFRxxgVWE8'),
(4, 'Air Terjun Junjong', 'images/Kedah/PLACE/junjong-waterfalls-air-terjun-junjong-min.jpg', 'https://goo.gl/maps/yr31BVHbbP4PUSsq7'),
(5, 'Lata Bayu', 'images/Kedah/PLACE/LATA BAYU.jpg', 'https://goo.gl/maps/ixTevCqKYPrDK84n9'),
(6, 'The Tree Top Walk Sungai Sedim', 'images/Kedah/PLACE/P_KEDAH_TREE TOP WALK SUNGAI SEDIM.jpg', 'https://goo.gl/maps/KJ8fmi6qXUR4fnBN7'),
(7, 'Pusat Rekreasi Air Panas Ulu Legong', 'images/Kedah/PLACE/ulu-legong-hot-spring-min.jpg', 'https://goo.gl/maps/pRbr44qKznWM64tQA');

-- --------------------------------------------------------

--
-- Table structure for table `kedahrestaurant`
--

CREATE TABLE `kedahrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL,
  `restaurantlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kedahrestaurant`
--

INSERT INTO `kedahrestaurant` (`id`, `restaurantname`, `restaurantimage`, `restaurantlink`) VALUES
(5, 'Iman Koeyteow Kerang', 'images/Kedah/FOOD/iman kuey teow.jfif', 'https://goo.gl/maps/g7K4nbmXDeeL5a1z9'),
(6, 'Kenyalang Kafe', 'images/Kedah/FOOD/kenyalang kafe.jpg', 'https://goo.gl/maps/R13fjax27aRLL1rf6'),
(7, 'Nasi Lemak Ong', 'images/Kedah/FOOD/Nasi lemak Ong.jpg', 'https://goo.gl/maps/7RAwSbXEgkr9woYN7'),
(8, 'Restoran Jin Shi', 'images/Kedah/FOOD/Restaurant Jin Shi.jpg', 'https://goo.gl/maps/4X5hXjeRc4c7CYGBA'),
(9, 'Restaurant Rasa Hochiak', 'images/Kedah/FOOD/Restaurant Rasa Hochiak.jpg', 'https://goo.gl/maps/4Q2Ad2T3dSBvskte8'),
(10, 'Restoran Lan Utara', 'images/Kedah/FOOD/restoran Lan Utara.jpg', 'https://goo.gl/maps/pEEFGnmuDg12zfFV7'),
(11, 'Restaurant Shafee', 'images/Kedah/FOOD/Shafee restaurant.jpg', 'https://goo.gl/maps/ZMHu42U57h1nKZzb6');

-- --------------------------------------------------------

--
-- Table structure for table `kuala lumpurlocation`
--

CREATE TABLE `kuala lumpurlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL,
  `locationlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuala lumpurlocation`
--

INSERT INTO `kuala lumpurlocation` (`id`, `locationname`, `locationimage`, `locationlink`) VALUES
(3, 'Thean Hou Temple', 'images/Kuala Lumpur/PLACE/thean-hou.jpg', 'https://goo.gl/maps/zKnn4jyxRZngVGw27'),
(4, 'Pavilion Kuala Lumpur', 'images/Kuala Lumpur/PLACE/pavilion.jpg', 'https://goo.gl/maps/snkYTsT4a8ZXbxX8A'),
(5, 'Aquaria KLCC', 'images/Kuala Lumpur/PLACE/kl-aquarium.jpg', 'https://goo.gl/maps/rHn9JesHiTKZwDer8'),
(6, 'Batu Caves', 'images/Kuala Lumpur/PLACE/batu-cave.jpg', 'https://goo.gl/maps/xQncHQ8mh9s9qz3C6'),
(7, 'Genting Highland', 'images/Kuala Lumpur/PLACE/genting-highland.jpg', 'https://goo.gl/maps/wERnaRyXvtgCfxz3A'),
(8, 'National Zoo of Malaysia', 'images/Kuala Lumpur/PLACE/KL ZOO.jpg', 'https://goo.gl/maps/zp2c6z1p7XB1h2sJ7'),
(9, 'Suria KLCC', 'images/Kuala Lumpur/PLACE/KLCCC.jpg', 'https://goo.gl/maps/prv7tBhEdMYtVCxo9');

-- --------------------------------------------------------

--
-- Table structure for table `kuala lumpurrestaurant`
--

CREATE TABLE `kuala lumpurrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL,
  `restaurantlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuala lumpurrestaurant`
--

INSERT INTO `kuala lumpurrestaurant` (`id`, `restaurantname`, `restaurantimage`, `restaurantlink`) VALUES
(5, 'Bunn Choon Restaurant', 'images/Kuala Lumpur/FOOD/food_Bunn_Choon_Egg.jpg', 'https://goo.gl/maps/hHM7vYVyZ1wMwP5w6'),
(6, 'GUI GUI BBQ', 'images/Kuala Lumpur/FOOD/food_guigui.jpeg', 'https://goo.gl/maps/d4mhSPPzvpPqnuCg8'),
(7, 'DayOne DayOne Noodles @ Solaris Mont Kiara', 'images/Kuala Lumpur/FOOD/food_xiaoshiguang.jpeg', 'https://goo.gl/maps/MotU6RA2GFATK7WG9'),
(8, 'Lai Foong Lala Noodles Kuala Lumpur', 'images/Kuala Lumpur/FOOD/LAI FOONG.jpeg', 'https://goo.gl/maps/64gw3DhxCaxDtX6n9'),
(9, 'TARMA Iraqi Street Food', 'images/Kuala Lumpur/FOOD/TARMA Iraqi Street Food.jpg', 'https://goo.gl/maps/MXP5r2ej2pUh2jbU9');

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
(1, 'Kedah', 'Kedah (Malay pronunciation: [kəˈdɑh]),[5] also known by its honorific Darul Aman and historically as Queda,[6] is a state of Malaysia, located in the northwestern part of Peninsular Malaysia.', 'kedah.jpg', NULL, 'https://goo.gl/maps/14Cy1heVjbJdmM6V9', 'https://en.wikipedia.org/wiki/Kedah', '0'),
(2, 'Kuala Lumpur', 'Kuala Lumpur (Malaysian pronunciation: [ˈkualə, -a ˈlumpo(r), -ʊ(r)]), officially the Federal Territory of Kuala Lumpur (Malay: Wilayah Persekutuan Kuala Lumpur; ) and colloquially referred to as KL, is a federal territory and the ceremonial, legislative and judicial capital city of Malaysia.', 'KLCCC.jpg', NULL, 'https://goo.gl/maps/RnqsneGSRbMAzNta8', 'https://en.wikipedia.org/wiki/Kuala_Lumpur', '1'),
(3, 'Malacca', 'Malacca (Malay: Melaka) is a state in Malaysia located in the southern region of the Malay Peninsula, facing the Strait of Malacca.', 'malacca.jpg', NULL, 'https://goo.gl/maps/wcb6QkS6pefihLe46', 'https://en.wikipedia.org/wiki/Malacca', '1'),
(4, 'Negeri Sembilan', 'Negeri Sembilan (Malay pronunciation: [ˈnəgəri səmbiˈlan], Negeri Sembilan Malay: Nogoghi Sombilan, Nismilan), historically spelled as Negri Sembilan, is a state in Malaysia which lies on the western coast of Peninsular Malaysia.', 'negeri sembilan.jpg', NULL, 'https://goo.gl/maps/5DK3UYM1BAZ8FtnM6', 'https://en.wikipedia.org/wiki/Negeri_Sembilan', '0'),
(5, 'Penang', 'Penang (Malay: Pulau Pinang, [pi.naŋ]) is a Malaysian state located on the northwest coast of Peninsular Malaysia, by the Malacca Strait. It has two parts: Penang Island, where the capital city, George Town, is located, and Seberang Perai on the Malay Peninsula.', 'penang.jpg', NULL, 'https://goo.gl/maps/wGeMU2qHhA7aFL1A6', 'https://en.wikipedia.org/wiki/Penang', '0');

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
  `image` text NOT NULL DEFAULT 'images/TPGS_Logo.png',
  `phone_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `email`, `password`, `status`, `image`, `phone_number`) VALUES
(1, 'Hernnnnnn', 'jlim2468101@gmail.com', '$2y$10$dsZHhehS4ykEO0i/TQRpguKesPN80i8VDLq8mPkGLJcwN2b8sV.bO', 1, 'uploads/64a5be2659a1f_Hern.jpg', '017-8208893'),
(2, 'Hern', 'allenleekheehern@gmail.com', '$2y$10$dsZHhehS4ykEO0i/TQRpguKesPN80i8VDLq8mPkGLJcwN2b8sV.bO', 0, 'uploads/64a5be82c35d5_profile.jpg', '017-8208893');

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
(3, 'The Shore Sky Tower', 'images/Malacca/PLACE/melaka_shore_sky.jpg', 'https://goo.gl/maps/vpwhpczYAA4j4ZBJ9'),
(4, 'Melaka Sultanate Palace Museum', 'images/Malacca/PLACE/melaka_sultanate.jpg', 'https://goo.gl/maps/t8LKusbwR2RvnaNHA'),
(5, 'Jonker Walk Melaka', 'images/Malacca/PLACE/mlk_jonker street.jpg', 'https://goo.gl/maps/Q99aLTBsToWVQAKP7'),
(6, 'Church of Saint Paul', 'images/Malacca/PLACE/St PaulChurch.jpg', 'https://goo.gl/maps/ghcjHegCrBX8wPxm8');

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
(5, 'Hard Rock Cafe', 'images/Malacca/FOOD/food_melaka_Hard Rock Cafe.jpeg', 'https://goo.gl/maps/YjzYQs8peRspY7dK6'),
(6, 'Pak Putra Restaurant', 'images/Malacca/FOOD/food_melaka_Pak Putra Restaurant.jpg', 'https://goo.gl/maps/zMd3T2R5GTbt4PrH6'),
(7, ' Restaurant Ming Huat', 'images/Malacca/FOOD/food_melaka_Restaurant Ming Huat.jpg', 'https://goo.gl/maps/cwG9AX7tvRnxejFo9'),
(8, 'Wild Coriander Melaka', 'images/Malacca/FOOD/food_melaka_wild coriander.jpg', 'https://goo.gl/maps/epkBo4mAJhzknK4v6'),
(9, 'Mori Cafe ', 'images/Malacca/FOOD/mori.jpg', 'https://goo.gl/maps/aS7fLFQRVUbpckQD7');

-- --------------------------------------------------------

--
-- Table structure for table `negeri sembilanlocation`
--

CREATE TABLE `negeri sembilanlocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL,
  `locationlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `negeri sembilanlocation`
--

INSERT INTO `negeri sembilanlocation` (`id`, `locationname`, `locationimage`, `locationlink`) VALUES
(3, 'Alive 3D Art Gallery', 'images/Negeri Sembilan/PLACE/Galeri Alive 3D Art.jpg', 'https://goo.gl/maps/Qg2tniG6AWCbBRPo8'),
(4, 'Gua Batu Maloi', 'images/Negeri Sembilan/PLACE/GUA BATU MALOI.jpg', 'https://goo.gl/maps/9NDNa6FsMGFWn2gM9'),
(5, 'Pasir Panjang Amenity Forest', 'images/Negeri Sembilan/PLACE/Hutan Lipur Pasir Panjang.jpg', 'https://goo.gl/maps/G6ThCW4oLscTVKVo7'),
(6, ' Muzium Diraja Istana Lama Seri Menanti', 'images/Negeri Sembilan/PLACE/MUZIUM BIRAJA MENANTI.jpg', 'https://goo.gl/maps/VbSaZytGDBMePQ3TA');

-- --------------------------------------------------------

--
-- Table structure for table `negeri sembilanrestaurant`
--

CREATE TABLE `negeri sembilanrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL,
  `restaurantlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `negeri sembilanrestaurant`
--

INSERT INTO `negeri sembilanrestaurant` (`id`, `restaurantname`, `restaurantimage`, `restaurantlink`) VALUES
(5, 'Kafe Kampung Kaw', 'images/Negeri Sembilan/FOOD/cafe kampung kaw.png', 'https://goo.gl/maps/3ukF3p7ULdByUV7w8'),
(6, 'Hayyan Huda Opah`s Kitchen', 'images/Negeri Sembilan/FOOD/Hayyan Huda Opah Kitchen.jpg', 'https://goo.gl/maps/ipYR5kFPvhBD39ty9'),
(7, 'N9 Container Cafe', 'images/Negeri Sembilan/FOOD/N9 Container Cafe.jpg', 'https://goo.gl/maps/QE71MWJXue11G45J6'),
(8, 'Restoran DPantai & DPedas', 'images/Negeri Sembilan/FOOD/restaurant Dpantai and Dpedas.jpg', 'https://goo.gl/maps/6jBSZ35sCgsWeRJS7'),
(9, 'Restoren Kemangi', 'images/Negeri Sembilan/FOOD/restaurant kemangi.jpg', 'https://goo.gl/maps/2rv2GtxsWAgDXZvr6');

-- --------------------------------------------------------

--
-- Table structure for table `penanglocation`
--

CREATE TABLE `penanglocation` (
  `id` int(11) NOT NULL,
  `locationname` text NOT NULL,
  `locationimage` text NOT NULL,
  `locationlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penanglocation`
--

INSERT INTO `penanglocation` (`id`, `locationname`, `locationimage`, `locationlink`) VALUES
(3, ' Kek Lok Si Temple', 'images/Penang/PLACE/penang_Kek Lok Si Temple.jpg', 'https://goo.gl/maps/JyyUjr1V8JrCjgrYA'),
(4, ' Entopia by Penang Butterfly Farm', 'images/Penang/PLACE/penang_Penang Butterfly Farm.jpg', 'https://goo.gl/maps/vH2ywhSVvBKWtsFFA'),
(5, 'The Habitat Penang Hill', 'images/Penang/PLACE/penang_The Habitat Penang Hill.jpg', 'https://goo.gl/maps/gWiTGbZbusKeRXKZ8'),
(6, 'The TOP Penang, Theme Park Penang', 'images/Penang/PLACE/penang_The TOP Penang, Theme Park Penang.JPG', 'https://goo.gl/maps/f55AT4j9ehYvFPNa6'),
(7, 'ESCAPE Penang', 'images/Penang/PLACE/escape.jpg', 'https://goo.gl/maps/cYZQUkZF7fC4UTbF8');

-- --------------------------------------------------------

--
-- Table structure for table `penangrestaurant`
--

CREATE TABLE `penangrestaurant` (
  `id` int(11) NOT NULL,
  `restaurantname` text NOT NULL,
  `restaurantimage` text NOT NULL,
  `restaurantlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penangrestaurant`
--

INSERT INTO `penangrestaurant` (`id`, `restaurantname`, `restaurantimage`, `restaurantlink`) VALUES
(5, 'Ivy`s Nyonya Cuisin', 'images/Penang/FOOD/food_penang_Ivy`s Nyonya Cuisine.jpg', 'https://goo.gl/maps/XXm3bmW96J7VMfim8'),
(6, ' Penang Famous LOR BAK', 'images/Penang/FOOD/food_penang_Penang Famous LOR BAK.jpg', 'https://goo.gl/maps/ALNn2fpJxf6NWtcj7'),
(7, 'Richard Rivalee Nyonya Cuisine Restaurant', 'images/Penang/FOOD/food_penang_Richard Rivalee Nyonya Cuisine Restaurant.jpg', 'https://goo.gl/maps/y8w3GY52tgC2E6Lx8'),
(8, 'Medan Selera (Halal) Padang Brown', 'images/Penang/FOOD/penang_food_Medan Selera (Halal) Padang Brown.jpg', 'https://goo.gl/maps/LY2x7LFRJDXoNPis6'),
(9, 'Restaurant First Famous Federal', 'images/Penang/FOOD/penang_food_Restaurant First Famous Federal.jpg', 'https://goo.gl/maps/111cA5bQ51qHqi3s6');

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
-- Indexes for table `kedahlocation`
--
ALTER TABLE `kedahlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kedahrestaurant`
--
ALTER TABLE `kedahrestaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuala lumpurlocation`
--
ALTER TABLE `kuala lumpurlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuala lumpurrestaurant`
--
ALTER TABLE `kuala lumpurrestaurant`
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
-- Indexes for table `malaccalocation`
--
ALTER TABLE `malaccalocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malaccarestaurant`
--
ALTER TABLE `malaccarestaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `negeri sembilanlocation`
--
ALTER TABLE `negeri sembilanlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `negeri sembilanrestaurant`
--
ALTER TABLE `negeri sembilanrestaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanglocation`
--
ALTER TABLE `penanglocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penangrestaurant`
--
ALTER TABLE `penangrestaurant`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kedahlocation`
--
ALTER TABLE `kedahlocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kedahrestaurant`
--
ALTER TABLE `kedahrestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kuala lumpurlocation`
--
ALTER TABLE `kuala lumpurlocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kuala lumpurrestaurant`
--
ALTER TABLE `kuala lumpurrestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `malaccalocation`
--
ALTER TABLE `malaccalocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `malaccarestaurant`
--
ALTER TABLE `malaccarestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `negeri sembilanlocation`
--
ALTER TABLE `negeri sembilanlocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `negeri sembilanrestaurant`
--
ALTER TABLE `negeri sembilanrestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penanglocation`
--
ALTER TABLE `penanglocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penangrestaurant`
--
ALTER TABLE `penangrestaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
