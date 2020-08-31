-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 05:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddelivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'fooditem'),
(2, 'foodvariant');

-- --------------------------------------------------------

--
-- Table structure for table `foodimages`
--

CREATE TABLE `foodimages` (
  `id` bigint(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodimages`
--

INSERT INTO `foodimages` (`id`, `image`) VALUES
(1, 'hero.png'),
(2, 'food1.png');

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `id` bigint(255) NOT NULL,
  `name` varchar(65) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'hamburger', 'delicious hamburger', '25.00', 'food1_1.png'),
(2, 'ham sandwich', 'ham from London sandwich', '20.00', 'food2_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `foodoptions`
--

CREATE TABLE `foodoptions` (
  `itemID` int(255) NOT NULL,
  `variantID` int(255) NOT NULL,
  `optionID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodoptions`
--

INSERT INTO `foodoptions` (`itemID`, `variantID`, `optionID`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 2),
(1, 4, 2),
(2, 1, 1),
(2, 2, 1),
(2, 3, 2),
(2, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `foodtype`
--

CREATE TABLE `foodtype` (
  `id` bigint(255) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodtype`
--

INSERT INTO `foodtype` (`id`, `name`, `image`) VALUES
(1, 'chinese', 'pexels-photo-842571.png'),
(2, 'malay', 'pexels-photo-3026805.png'),
(3, 'indian', 'pexels-photo-1624487.png'),
(4, 'korean', 'pexels-photo-2313686.png'),
(5, 'japanese', 'pexels-photo-359993.png'),
(6, 'western', 'pexels-photo-769969.png'),
(7, 'fusion', 'pexels-photo-2641886.png'),
(8, 'bento', 'pexels-photo-1640775.png');

-- --------------------------------------------------------

--
-- Table structure for table `foodvariants`
--

CREATE TABLE `foodvariants` (
  `id` bigint(255) NOT NULL,
  `name` varchar(65) NOT NULL,
  `price` decimal(65,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodvariants`
--

INSERT INTO `foodvariants` (`id`, `name`, `price`) VALUES
(1, 'meat', '10.00'),
(2, 'chicken', '5.00'),
(3, 'cola', '5.00'),
(4, 'tea', '7.00');

-- --------------------------------------------------------

--
-- Table structure for table `optionnames`
--

CREATE TABLE `optionnames` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `optionnames`
--

INSERT INTO `optionnames` (`id`, `name`) VALUES
(1, 'option value 1'),
(2, 'option value 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodtype`
--
ALTER TABLE `foodtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodvariants`
--
ALTER TABLE `foodvariants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optionnames`
--
ALTER TABLE `optionnames`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodtype`
--
ALTER TABLE `foodtype`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `foodvariants`
--
ALTER TABLE `foodvariants`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `optionnames`
--
ALTER TABLE `optionnames`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
