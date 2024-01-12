-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `verification_code` int(40) NOT NULL,
  `signup_verification` int(40) NOT NULL,
  `contact_number` bigint(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`firstName`, `lastName`, `userName`, `email`, `accountPass`, `account_type`, `verification_code`, `signup_verification`, `contact_number`, `profile_image`) VALUES
('Angelo ', 'Capa', 'Clips', 'Clips@gmail.com', '123', '', 0, 0, 0, ''),
('Angelo ', 'Capa', 'Clips', 'Clips@gmail.com', '123', '', 0, 0, 0, ''),
('123', '123', 'cute', 'cute@gmail.com', '123', '', 0, 0, 0, ''),
('ivan', 'policarpio', 'poli', 'ivanpolicarpio@gmail.com', '123', '', 0, 0, 9485905921, 'Capture2.PNG'),
('Rhaven', 'Quintana', 'killuah', 'rhaven@gmail.com', '123', 'rider', 0, 0, 0, ''),
('Jonathan', 'Aguirre', 'Jakol', 'Jakol@gmail.com', '123', 'rider', 0, 0, 0, ''),
('Ivan', 'Policarpio', 'Poli', 'ivanpolicarpio015@gmail.com', '123', 'rider', 0, 0, 0, ''),
('Admin', 'Admin', 'Admin', 'admin@gmail.com', '123', 'Admin', 0, 0, 9485905921, '');

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `cancel_button_hide` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_pending`
--

CREATE TABLE `customer_pending` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `total_quantity` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `baranggay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cancel_button_hide` int(255) NOT NULL,
  `rider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `for_delivery`
--

CREATE TABLE `for_delivery` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `rider` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `total_quantity` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `baranggay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact_number` bigint(20) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `product_id`, `name`, `product_price`, `product_description`, `product_type`, `product_amount`, `image`) VALUES
(34, 'product_id-659fb9bf505c5', 'Gold tag tshirt', ' 500', '  akjshd akjshd akjsd ha', ' tshirt', '66', '659fb9bf505ce.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_pending`
--
ALTER TABLE `customer_pending`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_pending`
--
ALTER TABLE `customer_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `for_delivery`
--
ALTER TABLE `for_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
