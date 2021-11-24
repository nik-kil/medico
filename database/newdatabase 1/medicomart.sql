-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2021 at 09:37 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`slno`, `vid`, `vendor_uname`, `item_name`, `item_image`, `cost`) VALUES
(6, 6, 'nithin', 'detol soap', '61m4t+ysZlL._SL1000_.jpg', 30),
(7, 6, 'nithin', 'lactogen 1', '71k1IHYUKvL._SY450_.jpg', 200),
(8, 6, 'nithin', 'cerelac stage 6', '81+jQkH+zgL._SL1500_.jpg', 210),
(9, 8, 'kiran', 'lifeboy soap', '100-56-soap-lifebuoy-original-imafbehs5bfbmhhy.jpeg', 25),
(10, 8, 'kiran', 'horlicks lite', '714TJB6ko1S._SY450_.jpg', 230),
(12, 8, 'kiran', 'dettol disinfectent sprey', '0172131_en.jpg', 180),
(13, 10, 'manoj ', 'boost', 'boost-health-drink-500x500.jpg', 210),
(14, 10, 'manoj ', 'dettol liquid', 'dettol_antiseptic_liquid_60_ml_0_1.jpg', 80),
(15, 10, 'manoj ', 'dettol handwash', 'dettol-500x500.jpg', 110),
(16, 12, 'adithya', 'dettol cool handwash', 'dettol-cool-liquid-hand-wash-500x500.jpg', 130),
(17, 12, 'adithya', 'maggie', 'download (1)dstyfg.jfif', 20),
(18, 12, 'adithya', 'horlicks regular', 'download.jfif', 190),
(19, 14, 'ramesh', 'D protien', 'h89rmrkucsmvt6i6nado.png', 230),
(21, 14, 'ramesh', 'horlicks protein plus', 'horlicks_protein_plus_powder_vanilla_flavour_400_gm_pet_jar_0.jpg', 250),
(23, 14, 'ramesh', 'dettol handwash with refill pack', 'Ue400e1c7276a4721819036438aa0ca81U.png', 120),
(24, 15, 'suresh', 'lifeboy handwash', 'Lifebuoy Handwash Total Pump 200 ML P.jfif', 60),
(27, 15, 'suresh', 'lifeboy handwash refill pack', 'images.jfif', 50),
(28, 15, 'suresh', 'pediasure', 'Pediasure-Chocolate-Jar-Powder-1561966139-10004324-1.jpg', 450);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `newarrivals`
--

INSERT INTO `newarrivals` (`sino`, `caption`, `imgname`, `vendor_id`) VALUES
(7, 'lactogen 1', 'newarrivals71k1IHYUKvL._SY450_.jpg', 6),
(8, 'dettol disinfectent sprey', 'newarrivals0172131_en.jpg', 8),
(9, 'dettol liquid', 'newarrivalsdettol_antiseptic_liquid_60_ml_0_1.jpg', 10),
(11, 'dettol cool handwash', 'newarrivalsdettol-cool-liquid-hand-wash-500x500.jpg', 12),
(12, 'horlicks protein plus', 'newarrivalshorlicks_protein_plus_powder_vanilla_flavour_400_gm_pet_jar_0.jpg', 14);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`sino`, `caption`, `det`, `vendor_id`, `imgname`) VALUES
(13, 'cerelac stage 6', '10% off , the price dropped from 231 to 210', 6, '81+jQkH+zgL._SL1500_.jpg'),
(14, 'horlicks lite', '30rs off , droped from 260 to 230', 8, '714TJB6ko1S._SY450_.jpg'),
(16, 'boost', '15% off , prize dropped from 241 to 210', 10, 'boost-health-drink-500x500.jpg'),
(18, 'horlicks regular', '20rs off, prize dropped from 210 to 190', 12, 'download.jfif'),
(19, 'dettol handwash', 'refill pack free worth 80rs', 14, 'Ue400e1c7276a4721819036438aa0ca81U.png'),
(20, 'pediasure', '10% off , prize dropped from 495 to 450', 15, 'Pediasure-Chocolate-Jar-Powder-1561966139-10004324-1.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`slno`, `vid`, `itemid`, `qty`, `cost`, `customer_mobno`, `order_date`, `order_id`, `status`) VALUES
(1, 6, 7, 2, 200, '9353086946', '2021-09-02', '6-17287-9353086946', 'ordered'),
(2, 6, 6, 2, 30, '9353086946', '2021-09-02', '6-18485-9353086946', 'ordered'),
(3, 6, 6, 2, 30, '9353086946', '2021-09-02', '6-17015-9353086946', 'ordered');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `mobno`, `filename`, `cdate`, `ctime`, `status`, `vendor`) VALUES
(1, '9353086946', 'image.jpg', '2021-09-12', '14:59:02', 'scheduled', 'manoj ');

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
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `repid`, `mobno`, `message`, `sender`, `vendorid`, `ctime`, `status`) VALUES
(1, 1, '9353086946', 'Sorry, the products you are requesting are not avilable', 'medshop', 'nithin', '14:59:32', 'not avilable'),
(2, 1, '9353086946', 'The product is available,it will be packed soon', 'Health first', 'kiran', '14:59:49', 'avilable'),
(3, 1, '9353086946', 'Sorry, the products you are requesting are not avilable', 'Drug store', 'manoj ', '15:00:46', 'not avilable'),
(4, 1, '9353086946', 'i will pick the order on 2021-09-11,at 15:01', 'nitish', 'manoj', '00:00:00', '');

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
  `sque` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`mobno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`mobno`, `name`, `pwd`, `addr`, `sque`, `answer`) VALUES
('9353086946', 'nitish', 'nitish', 'bt layout davangere', 'your favt color ?', 'black');

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
  `approved` int(11) NOT NULL,
  `lic` varchar(200) NOT NULL,
  PRIMARY KEY (`vendor_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `bunsiness_name`, `logo`, `contno`, `floor`, `user_name`, `pwd`, `about`, `approved`, `lic`) VALUES
(6, 'nithin', 'medshop', '558651e7ac3e44447daa07e8e9fe151c.png', '9686136354', 'https://goo.gl/maps/', 'nithin', 'nithin', 'NIL', 1, 'kuldeeppathak_drug-licence-500x500.jpg'),
(8, 'kiran', 'Health first', 'abstract-figure-merged-with-red-cross-for-medical-association-8960ld.png', '9686136354', 'https://goo.gl/maps/', 'kiran', 'kiran', 'NIL', 1, 'kuldeeppathak_drug-licence-500x500.jpg'),
(10, 'manoj', 'Drug store', 'Pharmacy-Logo-Maker-Red.png', '9686136354', 'https://goo.gl/maps/', 'manoj ', 'manoj', 'NIL', 1, 'kuldeeppathak_drug-licence-500x500.jpg'),
(12, 'adithya', 'medicare', 'medi-care-logo-designmedical-260nw-1953881128 (2).jpg', '9686136354', 'https://goo.gl/maps/', 'adithya', 'adithya', 'NIL', 1, 'kuldeeppathak_drug-licence-500x500.jpg'),
(14, 'ramesh', 'pharmacy plus', 'pharmacy-drugstore-logo-with-heart-vector-22419120.jpg', '9686136354', 'https://goo.gl/maps/', 'ramesh', 'ramesh', 'NIL', 1, 'kuldeeppathak_drug-licence-500x500.jpg'),
(15, 'suresh', 'wellness pharmacy', '618905_15168504_2768864_e39478dd_image (2).jpg', '9686136354', 'https://goo.gl/maps/', 'suresh', 'suresh', 'NIL', 1, 'kuldeeppathak_drug-licence-500x500.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
