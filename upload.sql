-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2024 at 08:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `account_type` varchar(150) NOT NULL,
  `contact_number` bigint(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`firstName`, `lastName`, `userName`, `email`, `accountPass`, `account_type`, `contact_number`, `profile_image`) VALUES
('Angelo ', 'Capa', 'Clips', 'Clips@gmail.com', '123', '', 0, ''),
('Angelo ', 'Capa', 'Clips', 'Clips@gmail.com', '123', '', 0, ''),
('123', '123', 'cute', 'cute@gmail.com', '123', '', 0, ''),
('ivan', 'policarpio', 'poli', 'ivanpolicarpio@gmail.com', '123', '', 0, ''),
('Rhaven', 'Quintana', 'killuah', 'rhaven@gmail.com', '123', 'rider', 0, ''),
('Jonathan', 'Aguirre', 'Jakol', 'Jakol@gmail.com', '123', 'rider', 0, ''),
('Ivan', 'Policarpio', 'Poli', 'ivanpolicarpio015@gmail.com', '123', 'rider', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`id`, `username`, `name`, `image`, `product_id`, `product_price`, `product_description`, `product_size`, `quantity`) VALUES
(5, 'cute', 'asdasdasd', '65991ffe8a934.png', 'product_id-65991ffe8a92c', 12, '    12', 'L', 6);

-- --------------------------------------------------------

--
-- Table structure for table `for_delivery`
--

CREATE TABLE `for_delivery` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `rider` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `for_delivery`
--

INSERT INTO `for_delivery` (`id`, `buyer_name`, `contact_number`, `address`, `product_name`, `product_price`, `quantity`, `size`, `rider`, `image`) VALUES
(5, 'asd', 9232182312, 'asd  asd asd asd 12093', 'Nike', 24, 5, 'M', 'Ivan Policarpio', ''),
(6, 'asd', 12312312312, 'asd asd asd asd 3123', 'Austine', 300, 50, 'M', 'Ivan Policarpio', '659ce7125dc72.jpg');

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
(6, 'Nike', 5000, 2, 'M', 'asd', 'asd', 'asd', 'asd', 123, '659c9b68b2d78.jpg', 12312312312),
(7, 'Nike', 5000, 2, 'M', 'asd', 'asd', 'asd', 'asd', 123, '659c9b68b2d78.jpg', 12312312312),
(8, 'Nike', 5000, 2, 'M', 'asd', 'asd', 'asd', 'asd', 123, '659c9b68b2d78.jpg', 12312312312),
(9, 'Nike', 5000, 2, 'M', 'asd', 'asd', 'asd', 'asd', 123, '659c9b68b2d78.jpg', 12312312312),
(10, 'Nike', 5000, 2, 'M', 'asd', 'asd', 'asd', 'asd', 1234, '659c9b68b2d78.jpg', 11231231231),
(11, 'Nike', 5000, 5, 'S', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 11234, '659c9b68b2d78.jpg', 12312313123),
(12, 'Nike', 5000, 5, 'M', 'asd', 'asd', 'asd', 'asd', 3023, '659c9b68b2d78.jpg', 9120390192);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `username`, `comments`, `product_id`, `image`, `rating`) VALUES
(2, '', 'asd', 'product_id-65991ffe8a92c', '659c95ce97dfb.png', 4),
(3, 'poli', 'asd', 'product_id-659c9b68b2d6e', '659ca397a6420.jpg', 4),
(4, 'cute', 'asdasdasd', 'product_id-659c9b68b2d6e', '659ca3f28ae9e.jpg', 3);

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
(26, 'product_id-659c9b68b2d6e', 'Nike', ' 5000', '  akjhsd', ' Short', '0', '659c9b68b2d78.jpg'),
(27, 'product_id-659ce7125dc68', 'Austine', '300', 'AJsd ajsdak jaksdjakjs kajdsha', 'Short', '100', '659ce7125dc72.jpg'),
(28, 'product_id-659cf7de8938b', 'asd', ' 12', '  asduh akjdhsasjdh', ' Tshirt', ' 123', '659cf7de89396.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_delivery`
--
ALTER TABLE `for_delivery`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `for_delivery`
--
ALTER TABLE `for_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
