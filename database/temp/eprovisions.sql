-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2018 at 10:51 AM
-- Server version: 5.1.36-community
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eprovisions`
--
CREATE DATABASE IF NOT EXISTS `eprovisions` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eprovisions`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `vendor_uname` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`slno`, `vid`, `vendor_uname`, `item_name`, `item_image`, `cost`) VALUES
(3, 9, 'Anu', 'Toor dal', 'toordal.jpg', 180),
(4, 9, 'Anu', 'Moon dal', 'moondal.jpg', 180),
(5, 9, 'Anu', 'Broom', 'broom.jpg', 90);

-- --------------------------------------------------------

--
-- Table structure for table `newarrivals`
--

CREATE TABLE IF NOT EXISTS `newarrivals` (
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(100) NOT NULL,
  `imgname` varchar(200) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `newarrivals`
--

INSERT INTO `newarrivals` (`sino`, `caption`, `imgname`, `vendor_id`) VALUES
(1, 'Mens Collections', 'download.jpg', 9),
(2, 'Mens Collections', 'images (2).jpg', 9),
(6, 'Mens Collections', 'newarrivalsimages (1).jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(100) NOT NULL,
  `det` varchar(250) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `imgname` varchar(100) NOT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`sino`, `caption`, `det`, `vendor_id`, `imgname`) VALUES
(9, 'Ugadi sales', 'Get discount on all products', 9, 'offer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `customer_mobno` varchar(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`slno`, `vid`, `itemid`, `qty`, `cost`, `customer_mobno`, `order_date`, `order_id`, `status`) VALUES
(1, 9, 3, 2, 180, '7676193183', '2018-05-08', '9-17181-7676193183', 'ordered'),
(2, 9, 3, 1, 180, '7676193183', '2018-05-09', '9-17181-7676193183', 'ordered'),
(3, 9, 4, 1, 180, '7676193183', '2018-05-09', '9-17181-7676193183', 'ordered'),
(4, 9, 5, 1, 90, '7676193183', '2018-05-09', '9-17181-7676193183', 'ordered'),
(5, 9, 5, 1, 90, '7676193183', '2018-05-09', '9-17181-7676193183', 'ordered'),
(6, 9, 4, 1, 180, '7676193183', '2018-05-09', '9-17181-7676193183', 'ordered'),
(7, 9, 4, 1, 180, '7676193183', '2018-05-09', '9-17181-7676193183', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `review` varchar(500) NOT NULL,
  `rdate` date NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`sino`, `vendor_id`, `mobno`, `review`, `rdate`, `name`) VALUES
(1, 9, '9036062632', 'Nice experience\r\n', '2018-04-07', 'Sumukha');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `mobno` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`mobno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`mobno`, `name`, `pwd`) VALUES
('7676193183', 'Rajesh', '123456'),
('8147410654', 'Megha', '123456'),
('8317460066', 'Sumukha', '123456'),
('9036062632', 'Sumukha', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `t`
--

CREATE TABLE IF NOT EXISTS `t` (
  `tmp1` int(11) NOT NULL,
  `hum1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(100) NOT NULL,
  `bunsiness_name` varchar(250) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `contno` varchar(10) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`vendor_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `bunsiness_name`, `logo`, `contno`, `floor`, `user_name`, `pwd`, `about`) VALUES
(1, 'Ramesha', 'Panthaloon', 'panth.png', '984455252', '1-Floor', 'ramesh123', '123456', 'NIL'),
(2, 'Ranjitha', 'Puma', 'images.png', '9108180790', 'Ground-Floor', 'Ranju', 'ranju', 'NIL'),
(3, 'Anusha', 'Levis', 'WhatsApp Image 2018-02-08 at 5.41.36 AM.jpeg', '9972041285', 'Ground-Floor', 'Anusha', 'anusha', 'NIL'),
(4, 'Harshini', 'Fastrack', 'Fastrack-Stands-Up-Against-Counterfeits-with-DontFakeWithMe.jpg', '9206858121', '2-Floor', 'Harshini', 'harshini', 'NIL'),
(5, 'Madhan', 'Woodland', 'images-2.jpg', '7019130356', '1-Floor', 'Madhan', 'madhan', 'NIL'),
(6, 'Soujanya', 'Kfc', 'images-2.png', '9902307638', '2-Floor', 'Soujanya', 'soujanya', 'NIL'),
(7, 'Sunil', 'Coffee day', 'caf-coffee-day-project-2-638.jpg', '8792788903', '2-Floor', 'Sunil', 'sunil', 'NIL'),
(8, 'Rashmi', 'Biba', 'Biba.jpg', '7349585482', '3-Floor', 'Rashmi', 'rashmi', 'NIL'),
(9, 'Anu', 'Woodland', 'images-1.jpg', '7975455816', '3-Floor', 'Anu', 'anu', 'Customers'),
(10, 'Deepak', 'Adidas', 'images-3.jpg', '9535595929', '2-Floor', 'Deepu', 'deepu', 'NIL'),
(11, 'Vikas', 'Dominoz', 'dominoz.jpg', '9844557896', '2-Floor', 'vikas123', '123456', 'NIL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
