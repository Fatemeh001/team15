-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 08, 2023 at 07:37 PM
-- Server version: 8.0.31
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
  `quantity` int NOT NULL,
  `likes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fatemeh_product`
--

INSERT INTO `fatemeh_product` (`id`, `name`, `description`, `inventory_id`, `price`, `created_at`, `modified_at`, `deleted_at`, `quantity`, `likes`) VALUES
(1, 'hoodie', 'good', 1, 60, '2023-02-15 00:16:58', '2023-02-18 22:13:02', '2023-02-15 00:16:58', 5, 1),
(2, 'sweater', '30% off', 2, 49, '2023-02-15 00:18:27', '2023-02-15 00:18:27', '2023-02-15 00:18:27', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fatemeh_product`
--
ALTER TABLE `fatemeh_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fatemeh_product`
--
ALTER TABLE `fatemeh_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
