-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 10:00 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krispydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_title` varchar(50) NOT NULL,
  `cart_img` text NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_ip` text NOT NULL,
  `created_on` text NOT NULL,
  `modified_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `product_id`, `cart_title`, `cart_img`, `cart_qty`, `cart_price`, `user_id`, `user_ip`, `created_on`, `modified_on`) VALUES
(2, 1, 'Broast', 'png', 1, 39, 'anwar.warsi@ymail.com', '', '', ''),
(12, 1, 'Broast with drinks', '2.png', 1, 59, 'anvaarbaig@outlook.com', '::1', '31/10/2017 08:55:25', '31/10/2017 08:55:25'),
(13, 1, 'Broast with drinks', '2.png', 1, 59, 'anvaarbaig@outlook.com', '::1', '31/10/2017 08:55:31', '31/10/2017 08:55:31'),
(14, 1, 'Broast with drinks', '2.png', 1, 59, 'anvaarbaig@outlook.com', '::1', '31/10/2017 09:05:48', '31/10/2017 09:05:48'),
(15, 1, 'Broast with drinks', '2.png', 1, 59, 'anvaarbaig@outlook.com', '::1', '31/10/2017 09:06:38', '31/10/2017 09:06:38'),
(16, 1, 'Broast with drinks', '2.png', 1, 59, 'anvaarbaig@outlook.com', '::1', '31/10/2017 09:07:47', '31/10/2017 09:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `created_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_ip` text NOT NULL,
  `created_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `fullname`, `phone`, `email`, `message`, `user_ip`, `created_on`) VALUES
(1, 'Anwar', 123456789, 'anvaarbaig@outlook.com', 'adasd', '::1', '21/10/2017'),
(2, 'anwar', 2147483647, 'anvaarbaig@outlook.com', 'asdadasd', '::1', '21/10/2017'),
(3, 'Anwar', 123456789, 'anvaarbaig@outlook.com', 'adadasdasd', '::1', '21/10/2017 22:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `id` int(11) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_img` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ip` text NOT NULL,
  `created_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `created_on` text NOT NULL,
  `modified_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`id`, `title`, `price`, `image`, `description`, `category`, `user_id`, `created_on`, `modified_on`) VALUES
(1, 'Broast with drinks', 59, '2.png', 'test description', 'broast', 'anvaarbaig@outlook.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_address_tbl`
--

CREATE TABLE `user_address_tbl` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `title` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `user_ip` text NOT NULL,
  `created_on` text NOT NULL,
  `modified_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address_tbl`
--

INSERT INTO `user_address_tbl` (`id`, `user_id`, `title`, `type`, `city`, `address`, `contact_no`, `user_ip`, `created_on`, `modified_on`) VALUES
(3, 'anvaarbaig@outlook.com', 'Home3', 'office', 'Karachi', 'Karachi', '123345', '::1', '27/10/2017 08:18:53', '27/10/2017 08:18:53'),
(4, 'anvaarbaig@outlook.com', 'Office change 35', 'home', 'Lahore', 'plot 12 C . street 7', '12345', '::1', '27/10/2017 08:21:10', '29/10/2017 19:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `modified_on` text NOT NULL,
  `created_on` text NOT NULL,
  `user_ip` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `verify` varchar(20) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `name`, `gender`, `phone`, `email`, `password`, `address`, `modified_on`, `created_on`, `user_ip`, `status`, `verify`, `token`) VALUES
(20, 'Anwar', '', '', 'anvaarbaig@outlook.com', '321', 'address check', '29/10/2017 20:20:29', '25/10/2017 23:06:16', '::1', 'active', 'verified', '66368270ffd51418ec58bd793f2d9b1b'),
(21, 'Anwar warsi', '', '', 'anwar.warsi@ymail.com', '123', '', '31/10/2017 07:22:14', '31/10/2017 07:22:14', '::1', 'active', 'verified', '99bcfcd754a98ce89cb86f73acc04645');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address_tbl`
--
ALTER TABLE `user_address_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_address_tbl`
--
ALTER TABLE `user_address_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
