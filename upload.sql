-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 05:40 AM
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
('hahaha', 'hahaha', 'hahaha', 'jamiemariecainoy86@gmail.com', '123', '', 906584, 906584, 9213021039, ''),
('vincent', 'quiape', 'cent', 'vincentcordada15@gmail.com', '1234', '', 659841, 0, 9276184265, ''),
('', '', '', 'vincentquiape15@gmail.com', '1234', '', 613884, 613884, 0, ''),
('Harverex', 'Patilano', 'Vyrex', 'harverexp06@gmail.com', '123', '', 298808, 298808, 9554007003, '');

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

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`id`, `username`, `buyer_name`, `email`, `name`, `image`, `product_id`, `product_amount`, `product_description`, `product_size`, `quantity`, `total_price`, `contact_number`, `cancel_button_hide`) VALUES
(8, 'Vyrex', 'Harverex Patilano', 'harverexp06@gmail.com', '56 Mafia ', '65a1cad0571b9.jpg', 'product_id-65a1cad0571b0', 250, '  100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'L', 1, 250, 9554007003, 1),
(9, 'asdafa', 'asdsa asdas', 'shadowcainoy@gmail.com', 'nike', '65a1d157af29c.jpg', 'product_id-65a1d157af292', 350, '  Made with custom brushed terry  400GSM   Relaxed fit Elastic waistband with hidden adjustable drawstrings Cut & sew', 'M', 1, 350, 9050675778, 1),
(10, 'Vyrex', 'Harverex Patilano', 'harverexp06@gmail.com', '56 Mafia ', '65a1cad0571b9.jpg', 'product_id-65a1cad0571b0', 250, '  100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'L', 1, 250, 9554007003, 1);

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
(12, 'rhaven quintana', 9510116716, ' asdsa sada sada asda 0', '  sdasdsa', 1364924, 4, 'L', 'rhavenquintana2@gmail.com', '65a1a04dca1c8.jpg', 'goldtags-65a1a0608703a', '65a1a089e24d3.jpg', 'rhaven', 'product_id-65a1a04dca1bf'),
(13, 'hahaha hahaha', 9101641637, ' pag asa st  sta cruz iv San Jose Del Monte Bulacan BULACAN 3023', '  nike', 600, 3, 'L', 'jamiemariecainoy86@gmail.com', '65a1ac4a03600.png', 'goldtags-65a1ace15368e', '65a1ad93ef4c3.jpg', 'rhaven', 'product_id-65a1ac4a035f2'),
(14, 'asdsa asdas', 9050675778, ' 1 1 1 1 1', '  ADIDAS Big Logo ', 250, 1, 'XL', 'shadowcainoy@gmail.com', '65a1cbbb712cb.jpg', 'goldtags-65a1fe87e1374', '65a20d53da064.jpg', 'jamie', 'product_id-65a1cbbb712c2'),
(15, 'asdsa asdas', 9050675778, ' 1 1 1 1 1', '  ADIDAS', 200, 1, 'S', 'shadowcainoy@gmail.com', '65a1cc1a5eb16.jpg', 'goldtags-65a20d9a3fb3b', '65a20dc45a839.jpg', 'jamie', 'product_id-65a1cc1a5eb0d');

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
(71, 'sdasdsa', 'product_id-65a1a04dca1bf', 'rhaven quintana', 'rhavenquintana2@gmail.com', 341231, 4, 'L', 1364924, 'asdsa', 'sada', 'sada', 'asda', 0, '65a1a04dca1c8.jpg', 9510116716, '2024-01-12 20:26:08', 3, 'rhaven quintana', 'goldtags-65a1a0608703a'),
(73, 'nike', 'product_id-65a1ac4a035f2', 'hahaha hahaha', 'jamiemariecainoy86@gmail.com', 200, 3, 'L', 600, 'pag asa st ', 'sta cruz iv', 'San Jose Del Monte Bulacan', 'BULACAN', 3023, '65a1ac4a03600.png', 9101641637, '2024-01-12 21:19:29', 3, 'rhaven quintana', 'goldtags-65a1ace15368e'),
(74, 'Sailor Moon', 'product_id-65a1cd90ee8e1', 'asdsa asdas', 'shadowcainoy@gmail.com', 650, 7, 'L', 4550, '1111', '1', '1', '1', 1, '65a1cd90ee8ee.jpg', 9050675778, '2024-01-13 03:04:34', 2, '', 'goldtags-65a1fdc2b3889'),
(75, 'ADIDAS Big Logo ', 'product_id-65a1cbbb712c2', 'asdsa asdas', 'shadowcainoy@gmail.com', 250, 1, 'XL', 250, '1', '1', '1', '1', 1, '65a1cbbb712cb.jpg', 9050675778, '2024-01-13 03:07:51', 3, 'jamie cainoy', 'goldtags-65a1fe87e1374'),
(76, 'Tupac ', 'product_id-65a1cb382a5d6', 'asdsa asdas', 'shadowcainoy@gmail.com', 650, 2, 'M', 1300, '1', '1', '1', '1', 1, '65a1cb382a5de.jpg', 9050675778, '2024-01-13 04:07:21', 1, '', 'goldtags-65a20c79333f5'),
(77, 'Bape Big Logo ', 'product_id-65a1ca48c1d07', 'Harverex Patilano', 'harverexp06@gmail.com', 450, 1, 'M', 450, 'Blk 1 Lt 12', 'Kaypian', 'San Jose Del Monte', 'Bulacan', 3023, '65a1ca48c1d12.jpg', 9554007003, '2024-01-13 04:08:44', 1, '', 'goldtags-65a20cccead1a'),
(78, 'ADIDAS', 'product_id-65a1cc1a5eb0d', 'asdsa asdas', 'shadowcainoy@gmail.com', 200, 1, 'S', 200, '1', '1', '1', '1', 1, '65a1cc1a5eb16.jpg', 9050675778, '2024-01-13 04:12:10', 0, 'jamie cainoy', 'goldtags-65a20d9a3fb3b');

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

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`id`, `name`, `product_id`, `buyer_name`, `email`, `product_amount`, `quantity`, `product_size`, `total_price`, `address`, `baranggay`, `city`, `province`, `zip_code`, `image`, `contact_number`, `time_stamp`, `item_uid`) VALUES
(76, 'Tupac ', 'product_id-65a1cb382a5d6', 'asdsa asdas', 'shadowcainoy@gmail.com', 650, 2, 'M', 1300, '1', '1', '1', '1', 1, '65a1cb382a5de.jpg', 9050675778, '2024-01-13 04:07:21', 'goldtags-65a20c79333f5'),
(77, 'Bape Big Logo ', 'product_id-65a1ca48c1d07', 'Harverex Patilano', 'harverexp06@gmail.com', 450, 1, 'M', 450, 'Blk 1 Lt 12', 'Kaypian', 'San Jose Del Monte', 'Bulacan', 3023, '65a1ca48c1d12.jpg', 9554007003, '2024-01-13 04:08:44', 'goldtags-65a20cccead1a');

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
(8, '<br />\r\n<b>Warning</b>:  Undefined variable $username in <b>C:xampphtdocsGoldtags\rate.php</b> on line <b>93</b><br />\r\n', 'good quality', 'product_id-65a1cbbb712c2', '65a2105f789a8.jpg', 5),
(9, '<br />\r\n<b>Warning</b>:  Undefined variable $username in <b>C:xampphtdocsGoldtags\rate.php</b> on line <b>93</b><br />\r\n', 'nice', 'product_id-65a1cbbb712c2', '65a211e0632a9.jpg', 5),
(10, 'asdafa', 'good', 'product_id-65a1cbbb712c2', '65a2126f8633e.jpg', 2);

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
(43, 'product_id-65a1ca48c1d07', 'Bape Big Logo ', '450', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '19', '65a1ca48c1d12.jpg'),
(44, 'product_id-65a1cad0571b0', '56 Mafia ', '250', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '25', '65a1cad0571b9.jpg'),
(45, 'product_id-65a1cb382a5d6', 'Tupac ', '650', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '48', '65a1cb382a5de.jpg'),
(46, 'product_id-65a1cb7ab6639', 'Goldtags Fire Ball', '670', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '25', '65a1cb7ab6641.jpg'),
(47, 'product_id-65a1cbbb712c2', 'ADIDAS Big Logo ', '250', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '19', '65a1cbbb712cb.jpg'),
(48, 'product_id-65a1cc1a5eb0d', 'ADIDAS', '200', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '49', '65a1cc1a5eb16.jpg'),
(49, 'product_id-65a1cca13cda1', 'Goldtags Hustle ', '400', 'Made with custom brushed terry 400GSM Relaxed fit Elastic waistband with hidden adjustable drawstrings Cut & sew', 'short', '50', '65a1cca13cdab.jpg'),
(50, 'product_id-65a1ccc9a9dfa', 'Goldtags Blue ', '599 ', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '30', '65a1ccc9a9e03.jpg'),
(51, 'product_id-65a1ccf20e25b', 'Goldtags Rodman', '670', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '30', '65a1ccf20e268.jpg'),
(52, 'product_id-65a1cd35cfbfb', 'Tyga Version 1', '900', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '15', '65a1cd35cfc0b.jpg'),
(53, 'product_id-65a1cd90ee8e1', 'Sailor Moon', '650', 'Made with custom brushed terry 400GSM Relaxed fit Elastic waistband with hidden adjustable drawstrings Cut & sew', 'T-Shirt ', '30', '65a1cd90ee8ee.jpg'),
(54, 'product_id-65a1cdf4cac30', 'Dragon Ball', '550', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '20', '65a1cdf4cac3e.jpg'),
(55, 'product_id-65a1ce42cb72c', 'LTAM ', '800', 'Made with custom brushed terry 400GSM Relaxed fit Elastic waistband with hidden adjustable drawstrings Cut & sew', 'T-Shirt ', '15', '65a1ce42cb737.jpg'),
(56, 'product_id-65a1ce8b1f3de', 'Cargo Plain', '360', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'short', '25', '65a1ce8b1f3e7.jpg'),
(57, 'product_id-65a1d0492fb64', 'Morant ', '750', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-Shirt ', '15', '65a1d0492fb71.jpg'),
(58, 'product_id-65a1d08cd3ec1', 'NBA ', '650', '100% Heavyweight cotton 220gsm/6.5oz Custom fit True to size Cut & sew Pre-shrunk', 'T-shirt ', '25', '65a1d08cd3eca.jpg'),
(59, 'product_id-65a1d0ead4cde', 'Stussy Red ', '350', 'Made with custom brushed terry 400GSM Relaxed fit Elastic waistband with hidden adjustable drawstrings Cut & sew', 'mesh ', '35', '65a1d0ead4ce8.jpg'),
(61, 'product_id-65a1d131991a5', 'Nike 6 pocket', '250', 'Relaxed fit Elastic waistband with hidden adjustable drawstrings Cut & sew', 'cargo', '15', '65a1d131991af.jpg'),
(62, 'product_id-65a1d157af292', 'nike', '350', 'Made with custom brushed terry  400GSM   Relaxed fit Elastic waistband with hidden adjustable drawstrings Cut & sew', 'short', '20', '65a1d157af29c.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complete_transaction`
--
ALTER TABLE `complete_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer_pending`
--
ALTER TABLE `customer_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `for_delivery`
--
ALTER TABLE `for_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
