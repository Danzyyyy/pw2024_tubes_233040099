-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 01:03 AM
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
(15, 'XBOX', '6667843029529.png', 'true', 'false'),
(22, 'PC GAMES', '666783c22d1ae.png', 'true', 'false'),
(24, 'NINTENDO SWITCH', '66678e42889fa.png', 'true', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(256) NOT NULL,
  `category_id` int DEFAULT NULL,
  `total_sell` int NOT NULL,
  `active` varchar(10) NOT NULL,
  `exclusive` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `description`, `price`, `image`, `category_id`, `total_sell`, `active`, `exclusive`) VALUES
(30, 'Animal Crossing', 'Escape to a deserted island and create your own paradise as you explore, create, and customize in the Animal Crossing: New Horizons game. Your island getaway has a wealth of natural resources that can be used to craft everything from tools to creature comforts. You can hunt down insects at the crack of dawn, decorate your paradise throughout the day, or enjoy sunset on the beach while fishing in the ocean. The time of day and season match real life, so each day on your island is a chance to check in and find new surprises all year round.', '686000', '66678ea1993ca.jpg', 24, 0, 'true', 'true'),
(31, 'Luigi&#039;s Mansion 3', 'Luigi’s invited to the towering Last Resort hotel, but when Mario and friends go missing, our green-clad hero will have to conquer his fears to save them! Slam, blow away, and vacuum up ghosts with the all-new Poltergust G-00, and join forces with Gooigi to overcome the puzzling contraptions and mischievous boss on each themed floor. And that’s just the Last Resort. Enter the ScareScraper for 8-player local wireless** or online*** co-op gameplay.  See if you can defeat all the ghosts, rescue all the toads, or clear other objectives before time runs out…in the ScareScraper! And for more mini-game madness, compete on teams at the ScreamPark! Whether you play', '980000', '66678f18cd015.jpg', 24, 0, 'true', 'true'),
(32, 'Mario Kart 8 Deluxe', 'Burn rubber across Mushroom Kingdom raceways—underwater, in the sky, upside-down in zero-g, and past the finish—for the win! Get revved up for local multiplayer*, online** in-game tournaments, a revamped battle mode, and more!', '686000', '666797d949fc8.jpg', 24, 0, 'true', 'true'),
(33, 'Kirby Star Allies', 'When an evil threatens Planet Popstar, Kirby will need a little help from his...enemies?! By making friends out of foes, up to three** players can drop in or out of the adventure at any time. With expanded copy abilities, classic Kirby action is even deeper: combine abilities with elements such as ice or fire to create friend abilities!', '686000', '666798487fda3.jpg', 24, 0, 'true', 'true'),
(34, 'Moving Out', 'The Ultimate F.A.R.T. (Furniture Arrangement &amp; Relocation Technician) experience!  The Moving Out Bundle comes packed with both Moving Out 1 and 2 - with dozens of levels across Packmore and beyond!', '356000', '6667989beb2f3.jpg', 24, 0, 'true', 'true'),
(35, 'The Legend of Zelda™: Breath of the Wild', 'Forget everything you know about The Legend of Zelda games. Step into a world of discovery, exploration, and adventure in The Legend of Zelda: Breath of the Wild, a boundary-breaking new game in the acclaimed series. Travel across vast fields, through forests, and to mountain peaks as you discover what has become of the kingdom of Hyrule in this stunning Open-Air Adventure. Now on Nintendo Switch, your journey is freer and more open than ever. Take your system anywhere, and adventure as Link any way you like.', '686000', '6667999fe8222.jpg', 24, 0, 'true', 'true'),
(36, 'theHunter', 'theHunter ready on XBOX', '800000', '66679c6a911a1.jpg', 15, 0, 'true', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` char(12) NOT NULL,
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
(18, 'Danzyyy', 'tmw@gmail.com', '85156994409', 'sarijadi', 'Valorant', '2024-06-04', 5000, 'confirm'),
(19, 'fabregas', 'fabregas@gmail.com', '8777777', 'bekasi', 'Valorant', '2024-06-04', 5000, 'confirm'),
(20, 'chandra', 'chandra@gmail.com', '8111111', 'bandung', 'Battlefield V', '2024-06-05', 50000, 'confirm'),
(21, 'valdric', 'valdricabirama@gmail.com', '888888', 'bandung', 'Battlefield V', '2024-06-09', 50, 'confirm'),
(22, 'dzaki', 'dzaki@gmail.com', '876666', 'bandung', 'Valorant', '2024-06-10', 150, 'confirm'),
(23, 'murod', 'murod@gmail.com', '98766', 'secapa', 'Animal Crossing', '2024-06-10', 1000, 'confirm'),
(24, 'wildan', 'tmw@gmail.com', '897655', 'bandung', 'XBOX', '2024-06-10', 50, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `role`) VALUES
(6, 'tubagus', 'danz', '$2y$10$veWg/hxIMFnW2RJ4TqSCQ.RpTkFJjb.Fs91.w5t4eMLv20cUv2x7W', 'admin'),
(10, 'wildan', 'admin', '$2y$10$.deNZEYESEoq2k1O5apkjuARGuzAzYKnxVQZVsAh8fsy65AkNDJI.', 'admin'),
(17, '', 'Dan', '$2y$10$oTwT5uyPQU6B1e0YjCbgqesdWdX8VNt5eYksGsmFWlxtK/.DtJ2.W', 'user'),
(18, '', 'Dric', '$2y$10$xqCL9GkGoZjoMD5Ozmi5fupWOicgrQVd8h4OVO6DhuseBiucPzldW', 'user'),
(19, '', 'San', '$2y$10$WJt4gdKHy/5WHFiTjRCna.U08wC9tt.4Ormcja1fgayONlSqpYYce', 'user'),
(20, 'Dzaki', 'Dzak', '$2y$10$ZxPfWWJUeJotaGuHLBf9q.weugK0UibXfMJ/I9Ayrj77AhGRG8NT2', 'user'),
(21, 'Ikhsan', 'Sanztzy', '$2y$10$6S8IdkqNjIxpOZ2gjp3G8OVFzOTvxMFFQmIbST4M0X/KfUcwzIKzy', 'user');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
