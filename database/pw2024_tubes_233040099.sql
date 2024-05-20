-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2024 at 11:08 AM
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
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `games` varchar(100) NOT NULL,
  `category` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `target` varchar(100) NOT NULL,
  `sort` int NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `check_status` enum('Y','N') NOT NULL,
  `check_code` varchar(55) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `subdescription` varchar(200) NOT NULL,
  `subimage` varchar(250) NOT NULL,
  `infoimage` varchar(250) NOT NULL,
  `code` varchar(55) NOT NULL,
  `provider` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `username` varchar(55) NOT NULL,
  `wa` varchar(250) NOT NULL,
  `product_id` int NOT NULL,
  `price` bigint NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `zone_id` varchar(250) NOT NULL,
  `nickname` varchar(250) NOT NULL,
  `method_id` int NOT NULL,
  `method` varchar(100) NOT NULL,
  `games` varchar(100) NOT NULL,
  `games_id` int NOT NULL,
  `status` enum('PENDING','PROCESSING','SUCCESS','CANCELED') NOT NULL,
  `ket` longtext NOT NULL,
  `payment_code` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `method_id` int NOT NULL,
  `price` bigint NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `games_id` int NOT NULL,
  `category_id` int NOT NULL,
  `product` varchar(250) NOT NULL,
  `price` bigint NOT NULL,
  `provider` varchar(250) NOT NULL,
  `sku` varchar(250) NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `sort` int NOT NULL,
  `check_status` enum('Y','N') NOT NULL,
  `check_code` varchar(55) NOT NULL,
  `image` varchar(250) NOT NULL,
  `min` int NOT NULL,
  `max` int NOT NULL,
  `raw_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `id` int NOT NULL,
  `topup_id` varchar(55) NOT NULL,
  `username` varchar(250) NOT NULL,
  `method_id` int NOT NULL,
  `method` varchar(250) NOT NULL,
  `amount` bigint NOT NULL,
  `status` enum('PENDING','SUCCESS','CANCELED') NOT NULL,
  `payment_code` varchar(500) NOT NULL,
  `date_create` datetime NOT NULL,
  `payment_type` varchar(200) NOT NULL,
  `method_code` varchar(100) NOT NULL,
  `payment_gateway` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` enum('On','Off') NOT NULL,
  `date_create` datetime NOT NULL,
  `ref` varchar(100) NOT NULL,
  `ref_by` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`games_id`),
  ADD KEY `user_id_2` (`user_id`,`games_id`),
  ADD KEY `games_id` (`games_id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_id` (`games_id`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
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
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`id`) REFERENCES `orders` (`games_id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id`) REFERENCES `price` (`product_id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
