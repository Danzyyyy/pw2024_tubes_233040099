-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2024 at 07:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040099`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Rony talukdar', 'rontal', '$2y$10$i3F2GK0c9/yRhyf1MvyrHeWm9WoRbr1Ub/5tTucoVIS85LGCDlVFe'),
(3, 'faraz rofu', 'faro', '$2y$10$sZ4fFK9JMp/KLiU3Xaw7y..OyP2.edLVkfziwhDvNu.NzH21Da.re'),
(6, 'tubagus', 'danz', '$2y$10$z1lY3MT00CI1kkaDKrRnWO4JATlhGEOl2zPxZas0N9dVfFiSAvjPW');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `active` varchar(10) NOT NULL,
  `featured` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image`, `active`, `featured`) VALUES
(1, 'Action Games', 'mobile-legend.png', 'true', 'true'),
(3, 'Sports Games', 'valorant.webp', 'true', 'false'),
(4, 'FPS', 'pubg.png', 'true', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `image` varchar(256) NOT NULL,
  `category_id` int NOT NULL,
  `total_sell` int NOT NULL,
  `active` varchar(10) NOT NULL,
  `exclusive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `price`, `image`, `category_id`, `total_sell`, `active`, `exclusive`) VALUES
(1, 'Valorant', 'Valorant for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond.', 2000, 'valorant.webp', 4, 2, 'true', ''),
(2, 'Call of Duty: MW', 'The iconic first-person shooter game is back! Cross play, free maps and modes, and new engine deliver the largest technical leap in Call of Duty history.', 1500, 'call-of-duty.jpeg', 4, 2, 'true', 'false'),
(3, 'PUBG', 'PUBG is a battle royal shooter that pits 100 players against each other in a struggle for survival. Its platforms and voice support and movements beyond gaming universe.', 1200, 'pubg.png', 4, 2, 'true', 'true'),
(11, 'Free Fire', 'Free Fire adalah game burik', 4999, 'free-fire-logo.jpg', 4, 0, 'true', 'false'),
(12, 'Battlefield V', 'Battlefield V adalah game fps', 5000, 'battlefieldV.jpg', 3, 0, 'true', 'false'),
(13, 'TEKKEN 8', 'TEKKEN 8 adalah game action', 1000, 'tekken8.png', 1, 0, 'true', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` int NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `game` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` int NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `game`, `order_date`, `total_price`, `status`) VALUES
(1, 'rock', 'rocky@gmail.com', 1999911111, 'dhaka dhaka', 'GTA 5', '2021-08-23', 2000, 'confirm'),
(2, 'star', 'rocky@gmail.com', 414141, 'dhaka dhaka', '0', '2021-08-23', 2000, 'confirm'),
(3, 'Gazi ', 'da@gmail.com', 414141, 'dhaka dhaka', 'GTA 5', '2021-08-23', 2000, 'confirm'),
(4, 'Gazi Tra', 'rm007@nomail.c', 414141, 'dhaka dhaka', 'GTA 5', '2021-08-23', 2000, 'confirm'),
(5, 'rajuuu', 'rajumai.@notmail.com', 183222222, 'CTG CTG', 'Call of Duty: MW', '2021-08-23', 1500, 'confirm'),
(6, 'rafio', 'rafio@gmail.com', 2147483647, 'CTG CTG', 'PUBG', '2021-08-23', 1200, 'confirm'),
(8, 'tushar', 'tushu@notmail.com', 3334552, '1/2/3 nowhere, dhaka', 'Call of Duty: MW ', '2021-08-24', 1500, 'confirm'),
(9, 'toni', 'toni@nomail.com', 2147483647, '1/A south poll', 'tik tak toe ', '2021-08-24', 500, 'confirm'),
(10, 'toni', 'toni@nomail.com', 122425345, '1/A south poll', 'PUBG ', '2021-08-27', 1200, 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
