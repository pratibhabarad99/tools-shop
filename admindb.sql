-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 05:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(4) NOT NULL,
  `Category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_id`, `Category_name`) VALUES
(1, 'Hand Tools'),
(2, 'Measurement Tools'),
(3, 'Power Tools'),
(4, 'Soldering Tools');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cmt_id` int(5) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `cmnt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cmt_id`, `email_id`, `user_name`, `cmnt`) VALUES
(1, 'barad@gmail.com', 'pari', 'its very amazing'),
(2, 'pari@gmail.com', 'pari', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `sid`, `image_id`, `image`) VALUES
(1, 1, 1, '101.jpg'),
(2, 1, 1, '102.jpg'),
(3, 1, 1, '103.jpg'),
(4, 1, 1, '104.jpg'),
(5, 1, 2, '201.jpg'),
(6, 1, 2, '202.jpg'),
(7, 1, 2, '203.jpg'),
(8, 1, 2, '204.jpg'),
(9, 1, 3, '301.jpg'),
(10, 1, 3, '302.jpg'),
(11, 1, 3, '303.jpg'),
(12, 1, 3, '304.jpg'),
(13, 1, 4, '401.jpg'),
(14, 1, 4, '402.jpg'),
(15, 1, 4, '403.jpg'),
(16, 1, 4, '404.jpg'),
(17, 2, 1, '111.jpg'),
(18, 2, 1, '112.jpg'),
(19, 2, 1, '113.jpg'),
(20, 2, 1, '114.jpg'),
(21, 2, 2, '121.jpg'),
(22, 2, 2, '122.jpg'),
(23, 2, 2, '123.jpg'),
(24, 2, 2, '124.jpg'),
(25, 2, 3, '131.jpg'),
(26, 2, 3, '132.jpg'),
(27, 2, 3, '133.jpg'),
(28, 2, 3, '134.jpg'),
(29, 2, 4, '141.jpg'),
(30, 2, 4, '142.jpg'),
(31, 2, 4, '143.jpg'),
(32, 2, 4, '144.jpg'),
(33, 3, 1, '211.jpg'),
(34, 3, 1, '212.jpg'),
(35, 3, 1, '213.jpg'),
(36, 3, 1, '214.jpg'),
(37, 3, 2, '221.jpg'),
(38, 3, 2, '222.jpg'),
(39, 3, 2, '223.jpg'),
(40, 3, 2, '224.jpg'),
(41, 3, 3, '231.jpg'),
(42, 3, 3, '232.jpg'),
(43, 3, 3, '233.jpg'),
(44, 3, 3, '234.jpg'),
(45, 3, 4, '241.jpg'),
(46, 3, 4, '242.jpg'),
(47, 3, 4, '243.jpg'),
(48, 3, 4, '244.jpg'),
(49, 4, 1, '311.jpg'),
(50, 4, 1, '312.jpg'),
(51, 4, 1, '313.jpg'),
(52, 4, 1, '314.jpg'),
(53, 4, 2, '321.jpg'),
(54, 4, 2, '322.jpg'),
(55, 4, 2, '323.jpg'),
(56, 4, 2, '324.jpg'),
(57, 4, 3, '331.jpg'),
(58, 4, 3, '332.jpg'),
(59, 4, 3, '333.jpg'),
(60, 4, 3, '334.jpg'),
(61, 5, 1, ''),
(62, 5, 1, ''),
(63, 5, 1, ''),
(64, 5, 1, ''),
(65, 5, 1, 'package.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Uname` varchar(15) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Uname`, `Password`) VALUES
('pratibha', 'pratibha'),
('raj', 'raj'),
('juli', 'juli');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(1) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `pro_id`, `name`, `contact_no`, `address`) VALUES
(1, 1, 'Pappubhai', 9876543210, 'Ghare ho'),
(2, 2, 'Babubhai', 123456789, 'Apde gher'),
(3, 3, 'abc', 98765421, 'gfd'),
(4, 4, 'def', 987456541232, 'bvc'),
(5, 5, 'hij', 9874563210, 'bvc'),
(6, 6, 'ghi', 98456123, 'asd'),
(8, 8, 'rtyyu', 4567754466, 'dfgufr'),
(9, 9, 'pratibha', 0, ''),
(10, 10, 'raj', 7685847684, 'rajkot,gujrat'),
(12, 34, 'khimabhai', 987463210, 'home');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(5) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(10) NOT NULL,
  `details` text NOT NULL,
  `Sub_Category_id` int(4) NOT NULL,
  `Category_id` int(4) NOT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT '0',
  `seller_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `image`, `price`, `quantity`, `details`, `Sub_Category_id`, `Category_id`, `approve`, `seller_id`) VALUES
(1, 'Hammer', '101.jpg', 250, 4, '', 1, 1, 1, 1),
(2, 'Hammer', '102.jpg', 350, 4, '', 2, 0, 0, 0),
(3, 'Hammer', '103.jpg', 200, 4, '', 3, 0, 1, 0),
(4, 'Hammer', '104.jpg', 250, 4, '', 4, 0, 0, 0),
(5, 'Screwdriver', '201.jpg', 150, 4, '', 5, 0, 0, 0),
(6, 'Screwdriver', '202.jpg', 100, 4, '', 6, 0, 0, 0),
(7, 'Screwdriver', '203.jpg', 150, 4, '', 7, 0, 0, 0),
(8, 'Screwdriver', '204.jpg', 200, 4, '', 8, 0, 0, 0),
(9, 'Measurement Tape', '301.jpg', 280, 4, '', 9, 0, 0, 0),
(10, 'Measurement Tape', '302.jpg', 250, 4, '', 10, 0, 0, 0),
(11, 'Measurement Tape', '303.jpg', 300, 4, '', 11, 0, 0, 0),
(12, 'Measurement Tape', '304.jpg', 300, 4, '', 12, 0, 0, 0),
(13, 'Wrenches', '401.jpg', 180, 4, '', 13, 0, 0, 0),
(14, 'Wrenches', '402.jpg', 200, 4, '', 14, 0, 0, 0),
(15, 'Wrenches', '403.jpg', 250, 4, '', 15, 0, 0, 0),
(16, 'Wrenches', '404.jpg', 280, 4, '', 16, 0, 0, 0),
(17, 'ICR Meter', '111.jpg', 15500, 4, '', 17, 0, 0, 0),
(18, 'ICR Meter', '112.jpg', 15000, 4, '', 18, 0, 0, 0),
(19, 'ICR Meter', '113.jpg', 16500, 4, '', 19, 0, 0, 0),
(20, 'ICR Meter', '114.jpg', 15250, 4, '', 20, 0, 0, 0),
(21, 'Multimeter', '121.jpg', 500, 4, '', 21, 0, 0, 0),
(22, 'Multimeter', '122.jpg', 550, 4, '', 22, 0, 0, 0),
(23, 'Multimeter', '123.jpg', 565, 4, '', 23, 0, 0, 0),
(24, 'Multimeter', '124.jpg', 535, 4, '', 24, 0, 0, 0),
(25, 'Oscilloscope', '131.jpg', 8200, 4, '', 25, 0, 0, 0),
(26, 'Oscilloscope', '132.jpg', 8750, 4, '', 26, 0, 0, 0),
(27, 'Oscilloscope', '133.jpg', 8500, 4, '', 27, 0, 0, 0),
(28, 'Oscilloscope', '134.jpg', 8000, 4, '', 28, 0, 0, 0),
(29, 'Signal Generator', '141.jpg', 4500, 4, '', 29, 0, 0, 0),
(30, 'Signal Generator', '142.jpg', 6000, 4, '', 30, 0, 0, 0),
(31, 'Signal Generator', '143.jpg', 5500, 4, '', 31, 0, 0, 0),
(32, 'Signal Generator', '144.jpg', 5200, 4, '', 32, 0, 0, 0),
(33, 'Drills', '211.jpg', 1400, 4, '', 33, 0, 0, 0),
(34, 'Drills', '212.jpg', 1850, 4, '', 34, 0, 0, 0),
(35, 'Drills', '213.jpg', 1200, 4, '', 35, 0, 0, 0),
(36, 'Drills', '214.jpg', 1999, 4, '', 36, 0, 0, 0),
(37, 'Grinder', '221.jpg', 1400, 4, '', 37, 0, 0, 0),
(38, 'Grinder', '222.jpg', 1850, 4, '', 38, 0, 0, 0),
(39, 'Grinder', '223.jpg', 1600, 4, '', 39, 0, 0, 0),
(40, 'Grinder', '224.jpg', 2000, 4, '', 40, 0, 0, 0),
(41, 'Heat Guns', '231.jpg', 900, 4, '', 41, 0, 0, 0),
(42, 'Heat Guns', '232.jpg', 1200, 4, '', 42, 0, 0, 0),
(43, 'Heat Guns', '233.jpg', 1350, 4, '', 43, 0, 0, 0),
(44, 'Heat Guns', '234.jpg', 1500, 4, '', 44, 0, 0, 0),
(45, 'Power Screwdriver', '241.jpg', 2100, 4, '', 45, 0, 0, 0),
(46, 'Power Screwdriver', '242.jpg', 1900, 4, '', 46, 0, 0, 0),
(47, 'Power Screwdriver', '243.jpg', 2400, 4, '', 47, 0, 0, 0),
(48, 'Power Screwdriver', '244.jpg', 1900, 4, '', 48, 0, 0, 0),
(49, 'Desoldering Tool', '311.jpg', 220, 4, '', 49, 0, 0, 0),
(50, 'Desoldering Tool', '312.jpg', 260, 4, '', 50, 0, 0, 0),
(51, 'Desoldering Tool', '313.jpg', 250, 4, '', 51, 0, 0, 0),
(52, 'Desoldering Tool', '314.jpg', 300, 4, '', 52, 0, 0, 0),
(53, 'Soldering Iron', '321.jpg', 360, 4, '', 53, 0, 0, 0),
(54, 'Soldering Iron', '322.jpg', 320, 4, '', 54, 0, 0, 0),
(55, 'Soldering Iron', '323.jpg', 400, 4, '', 55, 0, 0, 0),
(56, 'Soldering Iron', '324.jpg', 360, 4, '', 56, 0, 0, 0),
(57, 'Soldering Station', '331.jpg', 3200, 4, '', 57, 0, 0, 0),
(58, 'Soldering Station', '332.jpg', 2999, 4, '', 58, 0, 0, 0),
(59, 'Soldering Station', '333.jpg', 3100, 4, '', 59, 0, 0, 0),
(60, 'Soldering Station', '334.jpg', 3500, 4, '', 60, 0, 0, 0),
(66, 'tool', '', 200, 1, '...', 0, 0, 0, 0),
(67, 'tool', '', 200, 1, '...', 0, 0, 0, 0),
(68, 'tool', '', 200, 1, '...', 0, 0, 0, 0),
(69, 'tool', '', 200, 1, '...', 0, 0, 0, 0),
(70, '', 'package.png', 0, 0, '', 0, 0, 0, 0),
(71, 'hammer5', '5.JPG', 200, 5, 'this is new hammer', 1, 1, 0, 0),
(72, '', '21.JPG', 0, 0, '', 1, 1, 0, 0),
(73, '', '14.JPG', 0, 0, '', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(5) NOT NULL,
  `seller_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `email_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `seller_name`, `user_name`, `password`, `email_id`) VALUES
(1, 'abc', 'abc', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `cust_id` int(11) NOT NULL,
  `u_name` varchar(10) NOT NULL,
  `pass` text NOT NULL,
  `e_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`cust_id`, `u_name`, `pass`, `e_id`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `Category_id` int(4) NOT NULL,
  `Sub_Category_id` int(4) NOT NULL,
  `Sub_Category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`Category_id`, `Sub_Category_id`, `Sub_Category_name`) VALUES
(1, 1, 'Hammer'),
(1, 2, 'Screwdriver'),
(1, 3, 'Measurement Tape'),
(1, 4, 'Wrenches'),
(2, 5, 'ICR Meter'),
(2, 6, 'Multimeter'),
(2, 7, 'Oscilloscope'),
(2, 8, 'Signal Generator'),
(3, 9, 'Drills'),
(3, 10, 'Grinder'),
(3, 11, 'Heat Guns'),
(3, 12, 'Power Screwdriver'),
(4, 13, 'Desoldering Tool'),
(4, 14, 'Soldering Iron'),
(4, 15, 'Soldering Station');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`Sub_Category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cmt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `Sub_Category_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
