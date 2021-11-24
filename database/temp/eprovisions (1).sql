-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2020 at 07:40 AM
-- Server version: 5.6.12-log
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `mobno` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `addr` varchar(500) NOT NULL,
  PRIMARY KEY (`mobno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`mobno`, `name`, `pwd`, `addr`) VALUES
('7848961339', 'Arpitha', 'arpitha', '#3525 Vidya Nagar davangere'),
('8095128321', 'Veena', '1234', 'Ring road'),
('8618875524', 'Shreya', '1234', 'Davan college near');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `catg` varchar(100) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `catg`, `vendor_name`, `bunsiness_name`, `logo`, `contno`, `floor`, `user_name`, `pwd`, `about`) VALUES
(1, 'Texttiles', 'preethi', 'Raviteja', 'mainimage_itextiles.jpg', '7337761842', 'NIL', 'preethi u', '1234', 'NIL'),
(2, 'Food', 'usha', 'Hotel Taj', 'is (1).jpg', '7259976594', 'NIL', 'usha', '1234', 'NIL'),
(4, 'Furnitures', 'hamsa', 'hamsa furniturs', 'is.jpg', '9148348670', 'NIL', 'hamsa', '1234', 'NIL'),
(6, 'Chats', 'shreya', 'ice-land', 'MyWay.html', '8618875524', 'NIL', 'shreya', '1234', 'NIL'),
(8, 'Groceries', 'prathibha', 'prathi provision ', 'NEW-functional-makeup-bag-Travel-Storage-makeup.jpg_350x350.jpg', '8722464703', 'NIL', 'prathibha', '1234', 'NIL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
