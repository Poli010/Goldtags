-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 12:53 PM
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
  `account_type` varchar(150) NOT NULL,
  `verification_code` int(40) NOT NULL,
  `signup_verification` int(40) NOT NULL,
  `contact_number` bigint(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `address` varchar(255) NOT NULL,
  `baranggay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel_button_hide` int(255) NOT NULL,
  `rider` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_pending`
--

INSERT INTO `customer_pending` (`id`, `name`, `product_id`, `buyer_name`, `email`, `product_price`, `quantity`, `product_size`, `address`, `baranggay`, `city`, `province`, `zip_code`, `image`, `contact_number`, `time_stamp`, `cancel_button_hide`, `rider`) VALUES
(55, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'S', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 10:56:52', 0, 'Ivan Policarpio'),
(56, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'S', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:07:20', 0, 'Ivan Policarpio'),
(57, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'XL', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:08:38', 2, ''),
(59, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'Ivan Policarpio', 'ivanpolicarpio@gmail.com', 500, 2, 'L', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:08:59', 0, 'Rhaven Quintana'),
(60, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'M', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:14:03', 0, 'Jonathan Aguirre'),
(61, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'S', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:16:13', 0, 'Ivan Policarpio'),
(62, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'S', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:19:33', 0, 'Ivan Policarpio'),
(63, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'S', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:34:31', 0, 'Ivan Policarpio'),
(64, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'S', 'asd', 'asd', 'asd', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:38:39', 0, 'Ivan Policarpio'),
(65, 'Gold tag tshirt', 'product_id-659fb9bf505c5', 'ivan policarpio', 'ivanpolicarpio@gmail.com', 500, 1, 'M', 'asd', 'asd', 'as', 'asd', 0, '659fb9bf505ce.jpg', 9485905921, '2024-01-11 11:39:42', 0, 'Jonathan Aguirre');

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
  `image` varchar(255) NOT NULL,
  `rider_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `for_delivery`
--

INSERT INTO `for_delivery` (`id`, `buyer_name`, `email`, `contact_number`, `address`, `product_name`, `product_id`, `product_price`, `quantity`, `size`, `rider`, `image`, `rider_email`) VALUES
(36, 'ivan policarpio', 'ivanpolicarpio@gmail.com', 9485905921, 'asd asd asd asd 0', 'Gold tag tshirt', 'product_id-659fb9bf505c5', 500, 1, 'S', 'Ivan Policarpio', '659fb9bf505ce.jpg', ' ivanpolicarpio015@gmail.com'),
(37, 'ivan policarpio', 'ivanpolicarpio@gmail.com', 9485905921, 'asd asd as asd 0', 'Gold tag tshirt', 'product_id-659fb9bf505c5', 500, 1, 'M', 'Jonathan Aguirre', '659fb9bf505ce.jpg', ' Jakol@gmail.com');

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
  `address` varchar(255) NOT NULL,
  `baranggay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact_number` bigint(20) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(34, 'product_id-659fb9bf505c5', 'Gold tag tshirt', ' 500', '  akjshd akjshd akjsd ha', ' tshirt', '73', '659fb9bf505ce.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer_pending`
--
ALTER TABLE `customer_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `for_delivery`
--
ALTER TABLE `for_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
