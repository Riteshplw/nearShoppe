-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 04:35 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nearshopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `best_deal`
--

CREATE TABLE `best_deal` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `user_phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `best_deal`
--

INSERT INTO `best_deal` (`id`, `shop_id`, `user_phone`) VALUES
(0, 3, 9158110065),
(0, 3, 9158110065),
(0, 4, 9158110065);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_name`, `comment`, `shop_id`) VALUES
(1, 'Tejas', 'name hajk\r\n', 0),
(2, 'Tejaas', 'Tejas', 0),
(3, 'Tejaas', 'Baba', 0),
(4, 'Tejaas', 'baba', 0),
(5, 'Tejaas', 'baba', 0),
(6, 'Tejaas', 'tejasasas', 0),
(7, 'Tejaas', 'baba', 3),
(8, 'Tejaas', 'kese ho', 3),
(9, 'Tejaas', 'nice shop', 3),
(10, 'Tejaas', 'Watchs Are greate', 4),
(11, 'Tejaas', 'baba', 4),
(12, 'Tejaas', 'bhau cha dhukn mast aahe', 4);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(225) NOT NULL,
  `shop_address` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `rate` int(7) NOT NULL,
  `category` varchar(200) NOT NULL,
  `user_phone` varchar(225) NOT NULL,
  `image_link` varchar(225) NOT NULL DEFAULT 'shop.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `shop_address`, `city`, `phone_no`, `rate`, `category`, `user_phone`, `image_link`) VALUES
(4, 'Raja Times', 'Shivaji nager nandurbar', 'nandurbar', '9158110065', 5, '2', '9158110065', 'akshay.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone_number`, `password`) VALUES
(1, 'Tejaas', '9158110065', 'baba'),
(3, 'Ritesh', '9373731976', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
