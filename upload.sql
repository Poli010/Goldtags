-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 09:41 PM
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
('admin', 'admin', 'admin', 'admin@gmail.com', 'admin', 'Admin', 113344, 113344, 9050675778, ''),
('jamie', 'cainoy', 'jiji', 'jhian.cainoy7@gmail.com', 'rider', 'rider', 112255, 112255, 9166739039, ''),
('rhaven', 'quintana', 'rhaven', 'rhavenquintana2@gmail.com', 'rider', 'rider', 331155, 331155, 9510116716, ''),
('janna', 'quintana', 'janna', 'jannaquinta47@gmail.com', 'rider', 'rider', 663311, 663311, 9123456789, ''),
('asdsa', 'asdas', 'asdafa', 'shadowcainoy@gmail.com', '123', '', 787987, 787987, 9050675778, ''),
('hahaha', 'hahaha', 'hahaha', 'jamiemariecainoy86@gmail.com', '123', '', 906584, 906584, 9213021039, '');

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
  `product_amount` int(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `cancel_button_hide` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complete_transaction`
--

CREATE TABLE `complete_transaction` (
  `id` int(11) NOT NULL,
  `buyer_name` varchar(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `item_uid` varchar(255) NOT NULL,
  `proof` varchar(255) NOT NULL,
  `rider` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complete_transaction`
--

INSERT INTO `complete_transaction` (`id`, `buyer_name`, `contact_number`, `address`, `product_name`, `total_price`, `quantity`, `product_size`, `email`, `image`, `item_uid`, `proof`, `rider`, `product_id`) VALUES
(10, 'rhaven quintana', 9510116716, ' asdsa sadas sadas sadas 0', '  asdsad', 300, 3, 'M', 'rhavenquintana2@gmail.com', '65a18b262f232.jpg', 'goldtags-65a19edbcf6f1', '65a19effc8fb5.jpg', 'rhaven', 'product_id-65a18b262f228'),
(11, 'rhaven quintana', 9510116716, ' asdsa sadas sadas sada 2321', '  asdsad', 500, 5, 'M', 'rhavenquintana2@gmail.com', '65a18b262f232.jpg', 'goldtags-65a19f169bf0f', '65a19f38c2cd7.jpg', 'rhaven', 'product_id-65a18b262f228'),
(12, 'rhaven quintana', 9510116716, ' asdsa sada sada asda 0', '  sdasdsa', 1364924, 4, 'L', 'rhavenquintana2@gmail.com', '65a1a04dca1c8.jpg', 'goldtags-65a1a0608703a', '65a1a089e24d3.jpg', 'rhaven', 'product_id-65a1a04dca1bf');

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
  `product_amount` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `baranggay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `cancel_button_hide` int(255) NOT NULL,
  `rider` varchar(255) NOT NULL,
  `item_uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_pending`
--

INSERT INTO `customer_pending` (`id`, `name`, `product_id`, `buyer_name`, `email`, `product_amount`, `quantity`, `product_size`, `total_price`, `address`, `baranggay`, `city`, `province`, `zip_code`, `image`, `contact_number`, `time_stamp`, `cancel_button_hide`, `rider`, `item_uid`) VALUES
(65, 'nike', 'product_id-65a18b262f228', 'asdsa asdas', 'shadowcainoy@gmail.com', 200, 4, 'M', 800, 'asdasd', 'asdas', 'sadada', 'asdas', 2322, '65a18b262f232.jpg', 9050675778, '2024-01-12 18:56:06', 3, 'rhaven quintana', 'goldtags-65a18b46d8776'),
(66, 'nike', 'product_id-65a18b262f228', 'asdsa asdas', 'shadowcainoy@gmail.com', 200, 3, 'M', 600, 'edwqwq', 'sadadas', 'sadasd', 'asdas', 0, '65a18b262f232.jpg', 9050675778, '2024-01-12 19:58:57', 3, 'jamie cainoy', 'goldtags-65a19a01115b3'),
(68, 'nike', 'product_id-65a18b262f228', 'asdsa asdas', 'shadowcainoy@gmail.com', 200, 13, 'M', 2600, 'dasas', 'asdas', 'asdasd', 'dasdasd', 0, '65a18b262f232.jpg', 9050675778, '2024-01-12 20:12:54', 3, 'rhaven quintana', 'goldtags-65a19d4616d11'),
(69, 'asdsad', 'product_id-65a18b262f228', 'rhaven quintana', 'rhavenquintana2@gmail.com', 100, 3, 'M', 300, 'asdsa', 'sadas', 'sadas', 'sadas', 0, '65a18b262f232.jpg', 9510116716, '2024-01-12 20:19:39', 3, 'rhaven quintana', 'goldtags-65a19edbcf6f1'),
(70, 'asdsad', 'product_id-65a18b262f228', 'rhaven quintana', 'rhavenquintana2@gmail.com', 100, 5, 'M', 500, 'asdsa', 'sadas', 'sadas', 'sada', 2321, '65a18b262f232.jpg', 9510116716, '2024-01-12 20:20:38', 3, 'rhaven quintana', 'goldtags-65a19f169bf0f'),
(71, 'sdasdsa', 'product_id-65a1a04dca1bf', 'rhaven quintana', 'rhavenquintana2@gmail.com', 341231, 4, 'L', 1364924, 'asdsa', 'sada', 'sada', 'asda', 0, '65a1a04dca1c8.jpg', 9510116716, '2024-01-12 20:26:08', 3, 'rhaven quintana', 'goldtags-65a1a0608703a');

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
  `total_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `rider` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `item_uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
  `product_amount` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `baranggay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip_code` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contact_number` bigint(20) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `item_uid` varchar(255) NOT NULL
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
(40, 'product_id-65a18b262f228', 'asdsad', '100', 'cotton', 'asdasda', '42', '65a18b262f232.jpg'),
(41, 'product_id-65a1a04dca1bf', 'sdasdsa', ' 341231', '  asdas', ' dsadsa', '3119', '65a1a04dca1c8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complete_transaction`
--
ALTER TABLE `complete_transaction`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `complete_transaction`
--
ALTER TABLE `complete_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer_pending`
--
ALTER TABLE `customer_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `for_delivery`
--
ALTER TABLE `for_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
