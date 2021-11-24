-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2021 at 09:03 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medicomart`
--
CREATE DATABASE IF NOT EXISTS `medicomart` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medicomart`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`slno`, `vid`, `vendor_uname`, `item_name`, `item_image`, `cost`) VALUES
(3, 9, 'Anu', 'Toor dal', 'toordal.jpg', 180),
(4, 9, 'Anu', 'Moon dal', 'moondal.jpg', 180),
(5, 9, 'Anu', 'Broom', 'broom.jpg', 90),
(6, 2, 'nithin', 'nicip mr', '32327-Nicip-MR-Nimesulide-Paracetamol-Chlorzoxazone-Tablets-Back.jpg', 80),
(8, 2, 'nithin', 'Dolo 650', 'Dolo-650-tablets.jpg', 30),
(9, 3, 'manoj ', 'dcold total', 'D_CO0009_L.jpg', 60),
(10, 3, 'manoj ', 'Dolo 650', 'Dolo-650-tablets.jpg', 35),
(11, 4, 'kiran', 'dcold total', 'D_CO0009_L.jpg', 50),
(12, 4, 'kiran', 'nicip mr', '32327-Nicip-MR-Nimesulide-Paracetamol-Chlorzoxazone-Tablets-Back.jpg', 60);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`slno`, `vid`, `itemid`, `qty`, `cost`, `customer_mobno`, `order_date`, `order_id`, `status`) VALUES
(1, 3, 9, 1, 60, '8123334923', '2021-08-24', '3-15378-8123334923', 'ordered'),
(3, 2, 8, 2, 30, '9535469047', '2021-08-24', '2-14880-9535469047', 'delivered'),
(4, 4, 11, 20, 50, '8123334923', '2021-08-25', '4-10486-8123334923', 'delivered'),
(5, 4, 11, 2, 50, '8123334923', '2021-08-25', '4-13543-8123334923', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE IF NOT EXISTS `prescriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobno` varchar(10) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `cdate` date NOT NULL,
  `ctime` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `mobno`, `filename`, `cdate`, `ctime`, `status`, `vendor`) VALUES
(1, '8123334923', 'IMG-20210822-WA0006.jpg', '2021-08-25', '14:26:57', 'scheduled', 'kiran'),
(2, '8123334923', 'IMG-20210822-WA0005.jpg', '2021-08-25', '14:28:47', 'not avilable', 'nithin');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `repid` int(11) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `sender` varchar(300) NOT NULL,
  `vendorid` varchar(50) NOT NULL,
  `ctime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `repid`, `mobno`, `message`, `sender`, `vendorid`, `ctime`) VALUES
(1, 1, '8123334923', 'The product is available,it will be packed soon', 'Health first', 'kiran', '14:27:13'),
(2, 1, '8123334923', 'i will pick the order on 2021-08-25,at 14:27', 'Akash', 'kiran', '00:00:00'),
(3, 2, '8123334923', 'The product is available,it will be packed soon', 'medshop', 'nithin', '14:29:01'),
(4, 2, '8123334923', 'The product is available,it will be packed soon', 'Health first', 'kiran', '14:29:04'),
(5, 2, '8123334923', 'i will pick the order on 2021-08-25,at 16:29', 'Akash', 'kiran', '00:00:00'),
(6, 2, '8123334923', 'The product is available,it will be packed soon', 'medshop', 'nithin', '14:29:54'),
(7, 2, '8123334923', 'Sorry, the products you are requesting are not avilable', 'medshop', 'nithin', '14:30:40');

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
  `addr` varchar(500) NOT NULL,
  `sque` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`mobno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`mobno`, `name`, `pwd`, `addr`, `sque`, `answer`) VALUES
('7676193183', 'sumukha', '123456', 'vidyanagar,dvg', 'your favt color ?', 'blue'),
('8123334923', 'Akash', 'qwerty', 'Vidyanagar Davanagere ', 'your nick name ?', 'Nature '),
('9535469047', 'Nikhil', 'nikhil', 'Abcd xyz Davanagere ', 'your nick name ?', 'Nanu');

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
  `floor` varchar(200) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`vendor_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `bunsiness_name`, `logo`, `contno`, `floor`, `user_name`, `pwd`, `about`) VALUES
(1, 'kbraj', 'Medicare', 'medi-care-logo-designmedical-260nw-1953881128 (2).jpg', '7676193183', 'vidyanagara\r\nDavange', 'raj123', '123456', 'NIL'),
(2, 'nithin', 'medshop', '558651e7ac3e44447daa07e8e9fe151c.png', '9353086946', 'bihe road davangere ', 'nithin', 'nithin', 'NIL'),
(3, 'manoj', 'Drug store', 'Pharmacy-Logo-Maker-Red.png', '8123334923', 'biet road davangere ', 'manoj ', 'manoj', 'NIL'),
(4, 'kiran', 'Health first', 'abstract-figure-merged-with-red-cross-for-medical-association-8960ld.png', '9743443596', 'athani college road ', 'kiran', 'kiran', 'NIL'),
(6, 'suresh', 'zstore', 'medi-care-logo-designmedical-260nw-1953881128 (2).jpg', '9874561230', 'https://goo.gl/maps/PZirxvfF8Ld7kiHg8', 'suri', 'suresh', 'NIL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
