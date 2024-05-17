-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 10:20 AM
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `pic` varchar(111) NOT NULL,
  `details` varchar(333) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `pic`, `details`, `date`) VALUES
(1, 'Capsule', 'capsule.png', 'these are capsules whisd some k dsfksd', '2017-11-03 04:58:57'),
(2, 'Tablets', 'tablets.png', 'some of the pic to be modii dfs tablet', '2017-11-03 04:58:57'),
(3, 'Syrup', 'syrup.png', 'these are capsules whisd some k dsfksd', '2017-11-03 04:59:24'),
(4, 'Cream', 'creams.jpg', 'some of the pic to be modii dfs tablet', '2017-11-03 04:59:24'),
(5, 'Lotion', 'lotions.jpg', 'these are capsules whisd some k dsfksd', '2017-11-03 04:59:59'),
(6, 'Syringes', 'syringes.jpg', 'some of the pic to be modii dfs tablet', '2017-11-03 04:59:59'),
(8, 'Other', 'Masks.jpg', 'some of the pic to be modii dfs tablet', '2017-11-03 05:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `inventeries`
--

CREATE TABLE `inventeries` (
  `id` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `supplier` varchar(222) NOT NULL,
  `name` text NOT NULL,
  `unit` text NOT NULL,
  `price` text NOT NULL,
  `pic` text NOT NULL,
  `description` text NOT NULL,
  `company` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inventeries`
--

INSERT INTO `inventeries` (`id`, `catId`, `supplier`, `name`, `unit`, `price`, `pic`, `description`, `company`, `date`) VALUES
(5, 2, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', 'fasdf', '2017-11-03 06:10:37'),
(6, 2, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', 'sdfas', '2017-11-03 06:10:40'),
(7, 2, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:10:43'),
(9, 2, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:10:48'),
(10, 3, 'Arif Khan', 'Disprin', '6mg', '6', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:11:36'),
(11, 3, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:11:43'),
(12, 4, 'Arif Khan', 'Disprin', '6mg', '8', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:11:50'),
(13, 4, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:11:53'),
(14, 4, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:11:56'),
(15, 5, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:12:03'),
(16, 6, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:12:09'),
(17, 6, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:12:14'),
(18, 6, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:12:17'),
(19, 6, 'Arif Khan', 'Disprin', '6mg', '7', 'fk.jpg', 'these are 2mg disprin for the cure of some thing extera', '0', '2017-11-03 06:12:21'),
(20, 1, 'Asif Khan', 'Panadol', '100mg', '12', '', 'there is no askdfas dfsakdfkas', 'atalfa', '2017-11-17 16:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `title`, `name`) VALUES
(1, 'Medserve', 'Medserve');

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `discount` varchar(222) NOT NULL,
  `item` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`id`, `name`, `contact`, `discount`, `item`, `amount`, `userId`, `date`) VALUES
(6, 'Shubhraneel Chakraborty', '9073337500', '0', '2', '21', 2, '2024-05-13 12:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pic` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `cnic` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `pic`, `number`, `address`, `cnic`, `date`) VALUES
(1, 'faisal khan', 'fk.jpg', '2432342342', 'adfasdfasfdasdf', '2342342342423423', '2017-11-03 07:23:49'),
(2, 'faisal khan', 'fk.jpg', '2432342342', 'adfasdfasfdasdf', '2342342342423423', '2017-11-03 07:23:53'),
(3, 'faisal khan', 'fk.jpg', '2432342342', 'adfasdfasfdasdf', '2342342342423423', '2017-11-03 07:23:56'),
(4, 'faisal khan', 'fk.jpg', '2432342342', 'adfasdfasfdasdf', '2342342342423423', '2017-11-03 07:23:59'),
(5, 'faisal khan', 'fk.jpg', '2432342342', 'adfasdfasfdasdf', '2342342342423423', '2017-11-03 07:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `pic` varchar(222) NOT NULL,
  `number` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `pic`, `number`, `date`) VALUES
(2, 'chakrabortyshubhraneel@gmail.com', 'Shubhra04', 'Shubhraneel Chakraborty', 'ABC.jpg', '9073337500', '2024-05-13 04:47:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventeries`
--
ALTER TABLE `inventeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inventeries`
--
ALTER TABLE `inventeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
