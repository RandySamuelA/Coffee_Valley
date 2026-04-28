-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2026 at 10:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_valley`
--

-- --------------------------------------------------------

--
-- Table structure for table `beans`
--

CREATE TABLE `beans` (
  `id` int(11) NOT NULL,
  `bean_name` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beans`
--

INSERT INTO `beans` (`id`, `bean_name`, `description`, `price`) VALUES
(1, 'Arabica', 'Smooth and sweet coffee with hints of chocolate', 10.5),
(2, 'Robusta', 'Strong and bitter coffee with high caffeine', 8),
(3, 'Liberica', 'Fruity and floral aroma coffee', 12);

-- --------------------------------------------------------

--
-- Table structure for table `daily_bean`
--

CREATE TABLE `daily_bean` (
  `id` int(11) NOT NULL,
  `bean_id` int(11) NOT NULL,
  `sale_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daily_bean`
--

INSERT INTO `daily_bean` (`id`, `bean_id`, `sale_price`) VALUES
(1, 1, 9.5),
(2, 2, 7.5),
(3, 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(11) NOT NULL,
  `name` varchar(5000) NOT NULL,
  `city` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `name`, `city`) VALUES
(1, 'Coffee Supply Co', 'Jakarta'),
(2, 'Bean Distributors', 'Bandung'),
(3, 'Java Coffee Export', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user_id` varchar(5000) NOT NULL,
  `password` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `user_id`, `password`) VALUES
(1, 'admin', '123'),
(2, 'user', '123');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `file` varchar(5000) NOT NULL,
  `author` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `title`, `file`, `author`) VALUES
(1, 'Coffee Guide', 'guide.pdf', 'Admin'),
(2, 'Bean Catalog', 'catalog.pdf', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beans`
--
ALTER TABLE `beans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_bean`
--
ALTER TABLE `daily_bean`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bean` (`bean_id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beans`
--
ALTER TABLE `beans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daily_bean`
--
ALTER TABLE `daily_bean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daily_bean`
--
ALTER TABLE `daily_bean`
  ADD CONSTRAINT `fk_bean` FOREIGN KEY (`bean_id`) REFERENCES `beans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
