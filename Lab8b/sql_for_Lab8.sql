-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2018 at 04:44 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DB185563R_Lab8`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `picture`, `description`, `price`, `status`) VALUES
(8, 'Sony - 1000X Wireless Noise Cancelling Headphones', 'Mobile', '8196009.jpg', 'Sony - 1000X Wireless Noise Cancelling Headphones - Black', '399', 1),
(9, 'Samsung Galaxy Note 4(32GB) 4G LTE', 'Mobile', '813312609.jpg', 'Samsung Galaxy Note 4(32GB) 4G LTE (UNLOCKED)[Refurbish]EXPORT SET', '130', 1),
(10, 'VERUS Samsung S8/S8 Plus Case Collection', 'Mobile', '825367595.jpg', 'VERUS Samsung S8/S8 Plus Case Collection By VRS Design 100% Authentic Local Delivery', '7', 1),
(11, '*SUPER SALES* PHILIPS 24inch', 'Home Appliances', '749031429.jpg', '*SUPER SALES* PHILIPS 24inch (24PHA4100) 32inch 32PHA4100 Slim LED TV', '159', 1),
(12, 'German Air Purifier', 'Home Appliances', '824314654.jpg', 'German Air Purifier/ Permanent filter/ Block Haze/ Deodorization/ Sterilization/ USB/ Car', '70', 1),
(13, '2017 NEW HUROM 2nd Generation', 'Home Appliances', '813341775.jpg', '2017 NEW HUROM 2nd Generation Premium Slow Juicer NEW HUROM SMART BPA-Free!', '369', 1),
(14, 'CHANEL Bleu De Chanel', 'Beauty', '826044348.jpg', '[CHANEL] Bleu De Chanel/ Allure Edp 100ml/ Allure Blance Tester Packaging', '99', 1),
(19, 'VitaRealm', 'Beauty', '823483726.jpg', 'PowerJoint 2X More Effective than Glucosamine', '55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('F','M') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `pass`, `age`, `gender`, `email`) VALUES
('David', 'david', 28, 'M', 'david@yahoo.com'),
('Richard', 'richard', 21, 'M', 'rc@nyp.com'),
('John', 'john', 0, NULL, NULL),
('Mary', 'mary', 0, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
