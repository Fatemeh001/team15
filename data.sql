-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 07, 2023 at 12:44 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team15`
--

-- --------------------------------------------------------

--
-- Table structure for table `evgeny_cart_list`
--

CREATE TABLE `evgeny_cart_list` (
  `user_id` int NOT NULL,
  `in_the_clist` tinyint(1) NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fatemeh-likes`
--

CREATE TABLE `fatemeh-likes` (
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fatemeh_order`
--

CREATE TABLE `fatemeh_order` (
  `order_nmb` int NOT NULL,
  `USER_ID` int NOT NULL,
  `prodact_id` int NOT NULL,
  `time` timestamp NOT NULL,
  `adrdress` varchar(50) NOT NULL,
  `quanity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fatemeh_product`
--

CREATE TABLE `fatemeh_product` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `inventory_id` int NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `modified_at` timestamp NOT NULL,
  `deleted_at` timestamp NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fatemeh_product`
--

INSERT INTO `fatemeh_product` (`id`, `name`, `description`, `inventory_id`, `price`, `created_at`, `modified_at`, `deleted_at`, `quantity`) VALUES
(1, 'hoodie', 'good', 1, 60, '2023-02-15 00:16:58', '2023-02-18 22:13:02', '2023-02-15 00:16:58', 5),
(2, 'sweater', '30% off', 2, 49, '2023-02-15 00:18:27', '2023-02-15 00:18:27', '2023-02-15 00:18:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `konsta_user`
--

CREATE TABLE `konsta_user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marika_feedback`
--

CREATE TABLE `marika_feedback` (
  `email` varchar(50) NOT NULL,
  `rating` int NOT NULL,
  `feedbackText` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `marika_feedback`
--

INSERT INTO `marika_feedback` (`email`, `rating`, `feedbackText`) VALUES
('awdaw@gmail.com', 5, 'Text'),
('knsefn@mail.com', 4, 'Good!!!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evgeny_cart_list`
--
ALTER TABLE `evgeny_cart_list`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `fatemeh-likes`
--
ALTER TABLE `fatemeh-likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fatemeh-likes`
--
ALTER TABLE `fatemeh-likes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
