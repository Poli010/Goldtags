-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2024 at 10:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `firstName` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `accountPass` varchar(150) NOT NULL,
  `account_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`firstName`, `lastName`, `userName`, `email`, `accountPass`, `account_type`) VALUES
('Angelo ', 'Capa', 'Clips', 'Clips@gmail.com', '123', ''),
('Angelo ', 'Capa', 'Clips', 'Clips@gmail.com', '123', ''),
('123', '123', 'cute', 'cute@gmail.com', '123', ''),
('ivan', 'policarpio', 'poli', 'ivanpolicarpio@gmail.com', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `baranggay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact_number` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `name`, `product_price`, `quantity`, `product_size`, `address`, `baranggay`, `city`, `province`, `zip_code`, `image`, `contact_number`) VALUES
(48, 'Gold Tag Short', 500, 1, 'XS', '204 ', 'Dulong Bayan', 'San Jose Del Monte', 'Bulacan', 3023, '6598cf70182f7.jpg', 0),
(49, 'Gold Tags Tshirt', 400, 5, 'M', 'asd', 'asda', 'asd', 'asd', 3023, '6598cf900b439.jpg', 0),
(50, 'Gold Tags Tshirt', 400, 1, 'XS', '204 blk 15 julio leang st', 'binugbog', 'remedios T. Romualdez', 'agusan del norte', 1010, '6598cf900b439.jpg', 0),
(51, 'Gold Tags Tshirt', 400, 1, 'XS', 'asd', 'asd', 'asd', 'asd', 0, '6598cf900b439.jpg', 0),
(52, 'Gold Tag Short', 500, 1, 'XS', 'asd', 'asd', 'asd', 'asd', 12, '6598cf70182f7.jpg', 0),
(53, 'Gold Tag Short', 500, 1, 'XS', 'asd', 'asd', 'asd', 'asd', 12, '6598cf70182f7.jpg', 0),
(54, 'Gold Tag Short', 500, 1, 'XS', 'asd', 'asd', 'asd', 'as', 0, '6598cf70182f7.jpg', 0),
(55, 'Gold Tag Short', 500, 1, 'XS', '204 sitio Libis', 'Dulong Bayan ', 'City of San Jose Del Monte', 'Bulacan', 3023, '6598cf70182f7.jpg', 2147483647),
(56, 'Gold Tag Short', 500, 1, 'XS', 'asd', 'asd', 'asd', 'asd', 12, '6598cf70182f7.jpg', 2147483647),
(57, 'Gold Tag Short', 500, 1, 'XS', 'asd', 'asd', 'asd', 'asd', 12, '6598cf70182f7.jpg', 948590521),
(58, 'Gold Tag Short', 500, 1, 'XS', 'asd', 'asd', 'asd', 'asd', 0, '6598cf70182f7.jpg', 2147483647),
(59, 'Gold Tag Short', 500, 1, 'XS', 'aaa', 'aa', 'aa', 'aa', 0, '6598cf70182f7.jpg', 2147483647),
(60, 'Gold Tag Short', 500, 1, 'XS', 'aSDA', 'ASD', 'ASD', 'ASD', 0, '6598cf70182f7.jpg', 2147483647),
(61, 'Gold Tag Short', 500, 1, 'XS', 'ASD', 'ASD', 'ASD', 'ASD', 0, '6598cf70182f7.jpg', 0),
(62, 'Gold Tag Short', 500, 1, 'XS', 'AJSDHU', 'AJKHSD', 'KASHD', 'AKJSHD', 0, '6598cf70182f7.jpg', 2147483647),
(63, 'Gold Tag Short', 500, 1, 'XS', 'ASD', 'ASD', 'ASD', 'ASD', 3123, '6598cf70182f7.jpg', 2147483647),
(64, 'Gold Tag Short', 500, 1, 'XS', 'ASD', 'ASD', 'ASDA', 'ASD', 0, '6598cf70182f7.jpg', 9485905921),
(65, 'Gold Tag Short', 500, 1, 'XS', 'ASD', 'ASD', 'ASD', 'ASD', 2123, '6598cf70182f7.jpg', 639485905921),
(66, 'asdasdasd', 12, 2, 'XL', 'asd', 'asd', 'asd', 'asd', 0, '65991ffe8a934.png', 9102930910);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_amount` varchar(255) NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `product_id`, `name`, `product_price`, `product_description`, `product_type`, `product_amount`, `image`) VALUES
(23, 'product_id-65991ff0a0824', 'asd', ' 12', '  asd', ' asd', ' 12', '65991ff0a082b.jpg'),
(24, 'product_id-65991ffe8a92c', 'asdasdasd', ' 12', '  12', ' asd', ' 12', '65991ffe8a934.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
