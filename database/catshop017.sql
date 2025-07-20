-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 01:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catshop017`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories017`
--

CREATE TABLE `categories017` (
  `cate_id_017` int(11) NOT NULL,
  `cate_name_017` varchar(50) NOT NULL,
  `description_017` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories017`
--

INSERT INTO `categories017` (`cate_id_017`, `cate_name_017`, `description_017`) VALUES
(1, 'Persia', 'The Persian cat, also known as the Persian longhair, is a long-haired breed of cat characterized by '),
(2, 'Angora', 'The Turkish Angora is generally a medium sized cat. She has a long, slender body with fine boning.'),
(3, 'Domestic', 'The domestic cat originated from Near-Eastern and Egyptian populations of the African wildcat'),
(4, 'Sphynx', 'The Sphynx cat also known as the Canadian Sphynx, is a breed of cat known for its lack of fur. '),
(5, 'Russian Blue', 'The Russian Blue Cat commonly referred to as just Russian Blue.'),
(6, 'Maine Coon', 'The Maine Coon is one of the largest domesticated cats.');

-- --------------------------------------------------------

--
-- Table structure for table `cats017`
--

CREATE TABLE `cats017` (
  `id_017` int(11) NOT NULL,
  `name_017` varchar(100) NOT NULL,
  `type_017` varchar(100) NOT NULL,
  `gender_017` varchar(10) NOT NULL,
  `age_017` int(11) NOT NULL,
  `price_017` int(11) NOT NULL,
  `photo_017` varchar(50) NOT NULL DEFAULT 'default.png',
  `sold_017` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cats017`
--

INSERT INTO `cats017` (`id_017`, `name_017`, `type_017`, `gender_017`, `age_017`, `price_017`, `photo_017`, `sold_017`) VALUES
(2, 'Jack', 'Angora', 'Male', 6, 30, 'default.png', 1),
(3, 'Nero', 'Sphynx', 'Female', 5, 50, 'default.png', 0),
(4, 'Kitty', 'Domestic', 'Female', 4, 20, 'default.png', 1),
(5, 'Zappo', 'Persia', 'Male', 7, 30, 'default.png', 0),
(6, 'Robin', 'Russian Blue', 'Male', 2, 10, 'default.png', 1),
(7, 'Hobbes', 'Persia', 'Male', 3, 30, 'default.png', 0),
(8, 'tes', 'Sphynx', 'Female', 2, 20, 'default.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catsales017`
--

CREATE TABLE `catsales017` (
  `sale_id_017` int(11) NOT NULL,
  `sale_date_017` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cat_id_017` int(11) NOT NULL,
  `customer_name_017` varchar(100) NOT NULL,
  `customer_address_017` varchar(200) NOT NULL,
  `customer_phone_017` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catsales017`
--

INSERT INTO `catsales017` (`sale_id_017`, `sale_date_017`, `cat_id_017`, `customer_name_017`, `customer_address_017`, `customer_phone_017`) VALUES
(1, '2023-03-25 06:48:42', 2, 'Deni', 'Bandung', '089218319124'),
(2, '2023-03-25 06:48:54', 4, 'Denii', 'Bandung', '082918471912'),
(3, '2023-03-25 06:49:17', 6, 'Tes', 'Jakarta', '086314981414');

-- --------------------------------------------------------

--
-- Table structure for table `users017`
--

CREATE TABLE `users017` (
  `userid_017` int(11) NOT NULL,
  `username_017` varchar(200) NOT NULL,
  `password_017` varchar(200) NOT NULL,
  `usertype_017` varchar(200) NOT NULL,
  `fullname_017` varchar(200) NOT NULL,
  `photo_017` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users017`
--

INSERT INTO `users017` (`userid_017`, `username_017`, `password_017`, `usertype_017`, `fullname_017`, `photo_017`) VALUES
(5, 'Deni', '$2y$10$GNX3cPVqKI5A6mVu3GC15uvUnktz1cGw2h8XU9T7zX7gNVjH1Xblq', 'Manager', 'Deni Purwanto', 'default1.png'),
(11, 'Tes', '$2y$10$DQJFix82cc4/gdYc0B8mZOInHcS5mjR3xVfLXWR/GlvmfwgmExucO', 'Cashier', 'Tes 1', 'man(2).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories017`
--
ALTER TABLE `categories017`
  ADD PRIMARY KEY (`cate_id_017`);

--
-- Indexes for table `cats017`
--
ALTER TABLE `cats017`
  ADD PRIMARY KEY (`id_017`);

--
-- Indexes for table `catsales017`
--
ALTER TABLE `catsales017`
  ADD PRIMARY KEY (`sale_id_017`);

--
-- Indexes for table `users017`
--
ALTER TABLE `users017`
  ADD PRIMARY KEY (`userid_017`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories017`
--
ALTER TABLE `categories017`
  MODIFY `cate_id_017` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cats017`
--
ALTER TABLE `cats017`
  MODIFY `id_017` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `catsales017`
--
ALTER TABLE `catsales017`
  MODIFY `sale_id_017` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users017`
--
ALTER TABLE `users017`
  MODIFY `userid_017` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
