-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2020 at 10:29 AM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yihan_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `date_create` datetime(6) NOT NULL,
  `date_modify` datetime(6) NOT NULL,
  `category` varchar(32) NOT NULL,
  `title` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL,
  `main_image` varchar(1000) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `amount` int(10) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `material` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `category`, `title`, `images`, `main_image`, `price`, `description`, `amount`, `total`, `material`) VALUES
(52, '2020-05-17 00:00:00.000000', '2020-05-16 00:00:00.000000', 'merchandise', 'Broadway Boogie Woogie Phone Case', 'phonecase1.png', 'phonecase1.png', '10.99', 'This phone case is inspiedy by Piet Mondrian\'s artwork Broadway Boogie Woogie.', 1, '0', 'ceramic'),
(2, '2020-05-03 00:00:00.000000', '0000-00-00 00:00:00.000000', 'merchandise', 'Spring Bracelet', 'bracelet1-2.png,bracelet1.jpg,bracelet.gif', 'bracelet1-2.png', '10.99', 'Tote bag inspired by the artwork Broadway Boogie Woogie', 0, '0', ''),
(5, '2020-05-16 00:00:00.000000', '0000-00-00 00:00:00.000000', 'merchandise', 'Broadway Boogie Woogie Pillow', 'pillow2.png', 'pillow2.png', '20.99', 'Tote bag inspired by Frida Kahlo\'s Blue House', 1, '0', ''),
(6, '2020-05-18 00:00:00.000000', '0000-00-00 00:00:00.000000', 'merchandise', 'Yi Store Notebook', 'YiStoreNotebook.png,YiStoreNotebook1.png,YiStoreNotebook2.png', 'YiStoreNotebook.png', '3.99', 'Umbrella inspired by Piet Mondrian\'s artwork artwork Composition with Red Blue and Yellow', 1, '0', ''),
(70, '2020-05-17 00:00:00.000000', '2020-05-17 00:00:00.000000', 'merchandise', 'Crane Pillow', 'pillow3.png', 'pillow3.png', '12.50', 'This Pillow was inspired by the artwork of a great artist named Ji Zhao in Song Period in ancient China.', 1, '1', ''),
(71, '2020-05-19 04:24:02.000000', '2020-05-19 04:24:02.000000', 'merchandise', 'Pen (matte)', 'pen1.png', 'pen1.png', '109.99', 'Handmade Bag with fine pattern.', 1, '0', ''),
(11, '2020-05-06 00:00:00.000000', '0000-00-00 00:00:00.000000', 'merchandise', 'Phone Case', 'phonecase4.png', 'phonecase4.png', '6.99', 'The inspiration of this phone is the sky.', 1, '0', ''),
(12, '2020-05-08 00:00:00.000000', '0000-00-00 00:00:00.000000', 'merchandise', 'Broadway Boogie Woogie Notebook', 'Notebook.png', 'Notebook.png', '3.99', 'The notebook is inspired by the artwork Broadway Boogie Woogie', 0, '0', ''),
(51, '2020-05-01 00:00:00.000000', '2020-05-17 00:00:00.000000', 'handmade object', 'Yixing Clay Teapot', 'teapot2.png,teapot1.png', 'teapot2.png', '119.99', 'The teapot is made by the the skilled craftman in Yixing, using the most legendary Yixing clay.', 0, '1', 'Yixing clay'),
(50, '2020-04-01 00:00:00.000000', '0000-00-00 00:00:00.000000', 'handmade object', 'Lake Bracelet', 'Lake Bracelet.jpg', 'Lake Bracelet.jpg', '30.99', 'Bracelet inspired by the color of the lake!', 1, '0', ''),
(53, '2020-05-18 00:00:00.000000', '2020-05-16 00:00:00.000000', 'merchandise', 'Yi store Phone Case', 'phonecase2.png', 'phonecase2.png', '10.99', 'This phone case is a merchandise of the store.', 1, '0', 'ceramic'),
(55, '2020-05-17 00:00:00.000000', '2020-05-03 00:00:00.000000', 'merchandise', 'Pen (shiny)', 'pen2.png', 'pen2.png', '109.99', 'This pen is inspired by the Ru ceramic in Song period. The mainly materials are Ceramic and shiny silver.', 1, '1', 'Ceramic'),
(58, '2020-05-17 00:00:00.000000', '2020-05-17 00:00:00.000000', 'handmade object', 'Handmade Bag', 'bag1.jpg,bag1-1.png,bag1-2.png', 'bag1.jpg', '49.99', 'The color of  this handmade bag will become more and more saturated when time flies.', 1, '1', ''),
(59, '2020-05-16 00:00:00.000000', '2020-05-17 00:00:00.000000', 'handmade object', 'Handmade Bag with Pattern', 'bag2.png,bag2-1.png,bag2-2.png', 'bag2.png', '59.99', 'The pattern was carved by hand. And the color of  this handmade bag will become more and more saturated when time flies.', 1, '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
