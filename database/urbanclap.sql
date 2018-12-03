-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 02:01 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanclap`
--

-- --------------------------------------------------------

--
-- Table structure for table `1image`
--

CREATE TABLE `1image` (
  `id` int(11) NOT NULL,
  `file1` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1image`
--

INSERT INTO `1image` (`id`, `file1`, `name`) VALUES
(2, '10.jpg', 'XYZ'),
(3, '14.jpg', 'ASD');

-- --------------------------------------------------------

--
-- Table structure for table `2image`
--

CREATE TABLE `2image` (
  `id` int(11) NOT NULL,
  `file1` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2image`
--

INSERT INTO `2image` (`id`, `file1`, `name`) VALUES
(1, 'post1.jpg', 'ankita'),
(2, 'w3.jpeg', 'Megha'),
(3, 'w10.jpg', 'Mecha'),
(4, 'w10.jpg', 'Mecha');

-- --------------------------------------------------------

--
-- Table structure for table `3image`
--

CREATE TABLE `3image` (
  `id` int(11) NOT NULL,
  `file1` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3image`
--

INSERT INTO `3image` (`id`, `file1`, `name`) VALUES
(1, 'sh3.jpg', 'ABC'),
(2, 'sh5.jpg', 'XYZ'),
(3, 'sh1.jpg', 'ASD');

-- --------------------------------------------------------

--
-- Table structure for table `4image`
--

CREATE TABLE `4image` (
  `id` int(11) NOT NULL,
  `file1` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4image`
--

INSERT INTO `4image` (`id`, `file1`, `name`) VALUES
(1, 'c1.jpg', 'ABC'),
(2, 'c2.jpg', 'xca'),
(3, 'c5.jpg', 'ASD'),
(4, 'c6.jpg', 'QWE'),
(6, 'c10.jpg', 'LKJ');

-- --------------------------------------------------------

--
-- Table structure for table `5image`
--

CREATE TABLE `5image` (
  `id` int(11) NOT NULL,
  `file1` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5image`
--

INSERT INTO `5image` (`id`, `file1`, `name`) VALUES
(1, 'download (1).jpg', 'ABC'),
(2, 'download (2).jpg', 'xca'),
(3, 'download (4).jpg', 'ASD'),
(4, 'download.jpg', 'QWER'),
(5, 'images.jpg', 'ASDFG'),
(6, 'download (3).jpg', 'ZXCV'),
(7, 'images.jpg', 'XCVB');

-- --------------------------------------------------------

--
-- Table structure for table `6image`
--

CREATE TABLE `6image` (
  `id` int(11) NOT NULL,
  `file1` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6image`
--

INSERT INTO `6image` (`id`, `file1`, `name`) VALUES
(2, 'm5.jpg', 'xca'),
(3, 'm12.jpg', 'ASD'),
(4, 'm4.jpg', 'ASDFGH'),
(5, 'm1.jpg', 'FGHJ'),
(6, 'm2.jpg', 'DCFGVBH');

-- --------------------------------------------------------

--
-- Table structure for table `ababylocation`
--

CREATE TABLE `ababylocation` (
  `lname` varchar(30) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ababylocation`
--

INSERT INTO `ababylocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `acarlocation`
--

CREATE TABLE `acarlocation` (
  `lname` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acarlocation`
--

INSERT INTO `acarlocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `acityguidlocation`
--

CREATE TABLE `acityguidlocation` (
  `lname` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acityguidlocation`
--

INSERT INTO `acityguidlocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ahomeshiftlocation`
--

CREATE TABLE `ahomeshiftlocation` (
  `lname` varchar(30) NOT NULL,
  `id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahomeshiftlocation`
--

INSERT INTO `ahomeshiftlocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ahometutionlocation`
--

CREATE TABLE `ahometutionlocation` (
  `lname` varchar(30) NOT NULL,
  `id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahometutionlocation`
--

INSERT INTO `ahometutionlocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3),
('Banglore', 4),
('Banglore', 5),
('Banglore', 6),
('Banglore', 7);

-- --------------------------------------------------------

--
-- Table structure for table `alocation`
--

CREATE TABLE `alocation` (
  `lname` varchar(100) NOT NULL,
  `id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alocation`
--

INSERT INTO `alocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3),
('Banglore', 4),
('Banglore', 5),
('Banglore', 6),
('Hassan', 7),
('Mysuru', 8);

-- --------------------------------------------------------

--
-- Table structure for table `amedicallocation`
--

CREATE TABLE `amedicallocation` (
  `lname` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amedicallocation`
--

INSERT INTO `amedicallocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `apaintlocation`
--

CREATE TABLE `apaintlocation` (
  `lname` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apaintlocation`
--

INSERT INTO `apaintlocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `awdjni`
--

CREATE TABLE `awdjni` (
  `cname` varchar(30) NOT NULL,
  `image` varchar(55) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awdjni`
--

INSERT INTO `awdjni` (`cname`, `image`, `id`) VALUES
('AB', 'ÿØÿà\0JFIF\0\0H\0H\0\0ÿâXICC_PROFILE\0\0\0HLino\0\0mntrR', 1),
('abc', 'ÿØÿà\0JFIF\0\0H\0H\0\0ÿâXICC_PROFILE\0\0\0HLino\0\0mntrR', 2),
('sdfghj', 'img/dj.jpg', 3),
('sdfgh', 'img/dj1.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `awprelocation`
--

CREATE TABLE `awprelocation` (
  `lname` varchar(30) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awprelocation`
--

INSERT INTO `awprelocation` (`lname`, `id`) VALUES
('Banglore', 1),
('Hassan', 2),
('Mysuru', 3);

-- --------------------------------------------------------

--
-- Table structure for table `babycare`
--

CREATE TABLE `babycare` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` int(55) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `babycare`
--

INSERT INTO `babycare` (`id`, `drop1`, `drop2`, `drop3`, `drop4`, `date`, `phone`, `name`) VALUES
(1, 'Home', '3hours', '5 months', 'Rs.5,00 - 1,000 for 3 hours', '2018-10-29', 98765432, ''),
(2, 'Home', '3hours', '5 months', 'Rs.5,00 - 1,000 for 3 hours', '2018-10-29', 98765432, ''),
(3, 'Home', '3hours', '5 months', 'Rs.5,00 - 1,000 for 3 hours', '2018-10-29', 98765432, ''),
(4, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-03', 1234567890, ''),
(5, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-17', 2147483647, 'Home'),
(6, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-24', 2147483647, 'Home'),
(7, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-02', 1234567890, 'Home'),
(8, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-31', 1111111111, 'Home'),
(9, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-15', 2147483647, 'Home'),
(11, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-02', 1010101010, 'Home'),
(12, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-02', 1010101010, 'Home'),
(13, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-04', 2147483647, 'ABC'),
(14, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-04', 2147483647, 'XYZ'),
(15, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-18', 2147483647, 'XYZ'),
(16, 'Home', '3hours', '5 months', 'Rs.500 - 1000 for 3 hours', '2018-10-18', 2147483647, 'XYZ');

-- --------------------------------------------------------

--
-- Table structure for table `bridalmakeup`
--

CREATE TABLE `bridalmakeup` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bridalmakeup`
--

INSERT INTO `bridalmakeup` (`id`, `drop1`, `drop2`, `drop3`, `date`, `phone`) VALUES
(1, 'Hairstyling + Draping', 'Traditional products', '1 person Rs. 5,000', '2018-10-23', 23456789);

-- --------------------------------------------------------

--
-- Table structure for table `engagementplanner`
--

CREATE TABLE `engagementplanner` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engagementplanner`
--

INSERT INTO `engagementplanner` (`id`, `drop1`, `drop2`, `date`, `drop3`, `drop4`, `phone`) VALUES
(1, 'bangalore', '100-200', '2018-10-31', 'Basic Rs.5,00,000-10,00,000', 'Bangalore', 9876543),
(2, 'bangalore', '100-200', '2018-10-31', 'Basic Rs.5,00,000-10,00,000', 'Bangalore', 234567890),
(3, 'Destination Wedding', '600-1000', '2018-11-03', 'Standard Rs.20,00,000-30,00,000', '250-500 people', 98765432);

-- --------------------------------------------------------

--
-- Table structure for table `homeshifting`
--

CREATE TABLE `homeshifting` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `drop6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeshifting`
--

INSERT INTO `homeshifting` (`id`, `drop1`, `drop2`, `date`, `drop3`, `drop4`, `name`, `phone`, `drop6`) VALUES
(1, 'Outside of Delhi/NCR', 'Outside the city', '2018-11-03', 'Home', 'Bangalore', '3BHK(INR 54,000-INR 58,000)', '234567890', ''),
(2, 'Within Delhi/NCR', '', '2018-10-29', 'Home', 'Bangalore', 'Rs.5,000 - 10,000', '98765432', ''),
(3, 'Within Delhi/NCR', 'Within city', '2018-10-25', 'Home', 'Bangalore', 'Home', '1111111111', '1BHK(INR 26,000-INR 30,000)'),
(4, 'Within Delhi/NCR', 'Within city', '2018-10-18', 'Home', 'Bangalore', 'Home', '2147483647', '1BHK(INR 26,000-INR 30,000)'),
(5, 'Within Delhi/NCR', 'Within city', '2018-10-02', 'Home', 'Bangalore', 'Home', '1111111111', '1BHK(INR 26,000-INR 30,000)'),
(6, 'Within Delhi/NCR', 'Within city', '2018-10-03', 'Home', 'Bangalore', 'Home', '2147483647', '1BHK(INR 26,000-INR 30,000)'),
(7, 'Within Delhi/NCR', 'Within city', '2018-10-24', 'Home', 'Bangalore', 'Home', '2147483647', '1BHK(INR 26,000-INR 30,000)'),
(8, 'Within Delhi/NCR', 'Within city', '2018-10-24', 'Home', 'Bangalore', 'Home', '2147483647', '1BHK(INR 26,000-INR 30,000)'),
(9, 'Within Delhi/NCR', 'Within city', '2018-10-02', 'Home', 'Bangalore', 'Home', '9916266958', '1BHK(INR 26,000-INR 30,000)'),
(10, 'Within Delhi/NCR', 'Within city', '2018-10-24', 'Home', 'Bangalore', 'Home', '9972654844', '1BHK(INR 26,000-INR 30,000)'),
(11, 'Within Delhi/NCR', 'Within city', '2018-10-18', 'Home', 'Bangalore', 'Home', '1111111111', '1BHK(INR 26,000-INR 30,000)'),
(12, 'Within Delhi/NCR', 'Within city', '2018-10-18', 'Home', 'Bangalore', 'Home', '1111111111', '1BHK(INR 26,000-INR 30,000)'),
(13, 'Within Delhi/NCR', 'Within city', '2018-10-25', 'Home', 'Bangalore', 'Home', '1111111111', '1BHK(INR 26,000-INR 30,000)'),
(14, 'Within Delhi/NCR', 'Within city', '2018-10-25', 'Home', 'Bangalore', 'Home', '1111111111', '1BHK(INR 26,000-INR 30,000)'),
(15, 'Within Delhi/NCR', 'Within city', '2018-10-25', 'Home', 'Bangalore', 'Home', '8277355507', '1BHK(INR 26,000-INR 30,000)'),
(16, 'Within Delhi/NCR', 'Within city', '2018-10-17', 'Home + Vehicles', 'Bangalore', 'Home', '8277355507', '1BHK(INR 26,000-INR 30,000)'),
(17, 'Within Delhi/NCR', 'Within city', '2018-10-17', 'Home', 'Bangalore', 'ASD', '25874369', '1BHK(INR 26,000-INR 30,000)'),
(18, 'Within Delhi/NCR', 'Within city', '2018-10-30', 'Home', 'Bangalore', '', '2222222222222222', '1BHK(INR 26,000-INR 30,000)');

-- --------------------------------------------------------

--
-- Table structure for table `hometutors`
--

CREATE TABLE `hometutors` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(55) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hometutors`
--

INSERT INTO `hometutors` (`id`, `drop1`, `drop2`, `drop3`, `date`, `phone`, `name`) VALUES
(1, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-23', '234567890', ''),
(2, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-02', '1111111111', 'Home'),
(3, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-02', '1111111111', 'Home'),
(4, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-24', '2147483647', 'Home'),
(5, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-02', '1234567890', 'Home'),
(6, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-03', '2147483647', 'Home'),
(7, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-02', '2147483647', 'Home'),
(8, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-01', '2147483647', 'Home'),
(9, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-17', '2147483647', 'Home'),
(10, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-19', '1312121212', 'Home'),
(11, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-11', '997265484', 'ABC'),
(12, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-11', '997265484', 'ABC'),
(13, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-11', '997265484', 'ABC'),
(14, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-11', '997265484', 'ABC'),
(15, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-11', '997265484', 'ABC'),
(16, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-03', '9972654', 'ABC'),
(18, 'Home', 'Social', 'Rs.500 - 1000 for 3 hours', '2018-10-11', '9480239900', 'xca');

-- --------------------------------------------------------

--
-- Table structure for table `housepainting`
--

CREATE TABLE `housepainting` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `drop6` varchar(55) NOT NULL,
  `drop7` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housepainting`
--

INSERT INTO `housepainting` (`id`, `drop1`, `drop2`, `drop3`, `drop4`, `name`, `drop6`, `drop7`, `date`, `phone`) VALUES
(1, 'Interiors', 'Residential/Home', 'Full House', '1BHK', 'New property or never painted', 'Exterior area painting required', 'Within a week', '2018-10-31', '34567890'),
(5, 'Exteriors', 'Commercial/Office', 'Only a few rooms', 'Premium 4BHK + or Bungalow/Villa', 'New property or never painted', 'POP work required', 'Within a month', '2018-10-30', '34567890'),
(6, 'Interiors', 'Residential/Home', 'Full House', 'New property or never painted', '', 'Exterior area painting required', 'Within a week', '2018-10-04', '2222222222'),
(7, 'Interiors', 'Residential/Home', 'Full House', 'New property or never painted', '', 'Exterior area painting required', 'Within a week', '2018-10-04', '2222222222'),
(8, 'Interiors', 'Residential/Home', 'Full House', 'New property or never painted', '', 'Exterior area painting required', 'Within a week', '2018-10-17', '8277355507'),
(9, 'Interiors', 'Residential/Home', 'Full House', 'New property or never painted', '', 'Exterior area painting required', 'Within a week', '2018-10-17', '8277355507'),
(10, 'Interiors', 'Residential/Home', 'Full House', 'New property or never painted', 'Home', 'Exterior area painting required', 'Within a week', '2018-10-23', '5555555555');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file1` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `file1`, `name`) VALUES
(12, '1w.jpg', 'ABC'),
(14, 'w15.jpg', 'ASD'),
(15, 'w6.jpg', 'xca'),
(16, 'w15.jpg', 'ssdfg');

-- --------------------------------------------------------

--
-- Table structure for table `localguide`
--

CREATE TABLE `localguide` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `localguide`
--

INSERT INTO `localguide` (`id`, `drop1`, `drop2`, `drop3`, `drop4`, `date`, `phone`) VALUES
(1, 'Within Delhi/NCR', 'Home', 'Bangalore', 'Rs.5,000 - 10,000', '2018-11-03', 34567890),
(3, 'Outside of Bangalore', 'Popular places in city', 'Bangalore', 'Rs.3,000 - 7,000', '2018-11-03', 234567890),
(4, 'Outside of Bangalore', 'Popular places in city', 'Bangalore', 'Rs.3,000 - 7,000', '2018-11-03', 234567890),
(5, 'Outside of Bangalore', 'Popular places in city', 'Bangalore', 'Rs.3,000 - 7,000', '2018-11-03', 234567890);

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `age` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(55) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`id`, `drop1`, `drop2`, `age`, `drop3`, `date`, `phone`, `name`) VALUES
(1, 'Home', '1 member', '5', 'Depends on the service', '2018-10-29', '9876543', ''),
(2, 'Home', '1 member', '24', 'Depends on the service', '2018-10-04', '2147483647', 'Home'),
(3, 'Home', '1 member', '24', 'Depends on the service', '2018-10-25', '2147483647', 'Home'),
(4, 'Home', '1 member', '24', 'Depends on the service', '2018-10-25', '2147483647', 'Home'),
(5, 'Home', '1 member', '24', 'Depends on the service', '2018-10-25', '2147483647', 'Home'),
(6, 'Home', '1 member', '0', 'Depends on the service', '2018-10-18', '8277355507', 'Home'),
(8, 'Home', '1 member', '99', 'Depends on the service', '2018-10-29', '8888888888888888888888', ''),
(9, 'Home', '1 member', '0', 'Depends on the service', '2018-10-03', '997265484', ''),
(10, 'Home', '1 member', '567887777777', 'Depends on the service', '2018-10-04', '234522212', ''),
(11, 'Home', '1 member', '35', 'Depends on the service', '2018-10-10', '2222222222', ''),
(12, 'Home', '1 member', 'ww', 'Depends on the service', '2018-10-10', '22222222222222222222222222', ''),
(13, 'Home', '1 member', '24', 'Depends on the service', '2018-10-28', '9972654844', '');

-- --------------------------------------------------------

--
-- Table structure for table `mehendhi`
--

CREATE TABLE `mehendhi` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mehendhi`
--

INSERT INTO `mehendhi` (`id`, `drop1`, `drop2`, `date`, `phone`) VALUES
(1, 'Wedding/Wedding Related Function', 'Traditional Designs (Rs 200-400/person)', '2018-10-30', 34567890);

-- --------------------------------------------------------

--
-- Table structure for table `mwplan`
--

CREATE TABLE `mwplan` (
  `name` varchar(60) NOT NULL,
  `drop1` varchar(50) NOT NULL,
  `drop2` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mwplan`
--

INSERT INTO `mwplan` (`name`, `drop1`, `drop2`, `date`, `phone`, `id`) VALUES
('xyz', '100-200', 'BudgetRs.13,000 - 23,000', '1211-12-12', '8880131222', 1),
('A', '100-200', 'BudgetRs.13,000 - 23,000', '4444-04-04', '8880131222', 2),
('B', '100-200', 'BudgetRs.13,000 - 23,000', '5555-05-05', '1212121212', 3),
('A', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-24', '1234567890', 4),
('A', '100-200', 'Basic Rs.5,00,000-10,00,000', '0000-00-00', '1234567891', 5),
('A', '100-200', 'Basic Rs.5,00,000-10,00,000', '0000-00-00', '1234567890', 6),
('A', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-17', '2345666623', 7),
('A', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-25', '1234567890', 8),
('A', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-09', '1234567890', 9),
('', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-25', '1111111111', 10),
('ASD', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-25', '1111111111', 11),
('', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-17', '2222222222', 12),
('', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-31', '5555555555', 13),
('', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-24', '1234567890', 14),
('ABC', '200-400', 'Basic Rs.5,00,000-10,00,000', '2018-10-25', '5555555555', 16),
('xca', '100-200', 'Basic Rs.5,00,000-10,00,000', '0000-00-00', '1111111111', 17),
('ASD', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-17', '1312121212', 18),
('ASD', '100-200', 'Basic Rs.5,00,000-10,00,000', '2018-10-03', '2222222222', 19);

-- --------------------------------------------------------

--
-- Table structure for table `plques`
--

CREATE TABLE `plques` (
  `guest` varchar(30) NOT NULL,
  `budget` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plques`
--

INSERT INTO `plques` (`guest`, `budget`, `id`) VALUES
('100-200', 'Basic Rs.5,00,000-10,00,000', 3),
('200-400', 'Budget Rs.10,00,000-20,00,000', 4),
('400-600', 'Standard Rs.20,00,000-30,00,00', 5),
('600-1000 ', 'Premium >Rs.30,00,000', 6);

-- --------------------------------------------------------

--
-- Table structure for table `postwedding`
--

CREATE TABLE `postwedding` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `drop5` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postwedding`
--

INSERT INTO `postwedding` (`id`, `drop1`, `drop2`, `drop3`, `drop4`, `drop5`, `date`, `phone`) VALUES
(1, 'Someone I Know', 'Photos+Video', 'Photo Album', 'Within 1 month', '', '2018-11-03', 9876543),
(2, 'I am', 'Photos+Video', 'Photo Album', 'Within 2 weeks', '', '2018-11-03', 234567890),
(3, 'Someone I Know', 'Photos', 'None', 'Within 1 week', '', '2018-11-26', 2345678);

-- --------------------------------------------------------

--
-- Table structure for table `prewedding`
--

CREATE TABLE `prewedding` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `drop5` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prewedding`
--

INSERT INTO `prewedding` (`id`, `drop1`, `drop2`, `drop3`, `drop4`, `drop5`, `date`, `phone`) VALUES
(1, 'Basic Rs.5,000-9,000', '', 'Props/Accessories', '', '', '2018-10-31', 3456789),
(2, 'Destination Wedding', 'Photos+Video', 'Basic Rs.5,000-9,000', 'Within 1 week', 'Props/Accessories', '2018-10-26', 876543),
(3, 'I am', 'Photos', 'Basic Rs.5,000-9,000', 'Within 1 week', 'Props/Accessories', '2018-10-30', 9876543);

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`name`, `email`, `pwd`) VALUES
('', '', ''),
('meghachandu', 'meghacm95@gmail.com', '1'),
('sdf', 'vhjk@bnm', '1'),
('sdf', 'vhjk@bnm', '1'),
('sdfe', 'vhjk@bnm', 'l'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('megha', 'meghasrgowda043@gmail.com', '12'),
('sdf', 'sf@fv', 's'),
('sd', 'sf@fv', 'a'),
('sdf', 'vhjk@bnm', 'a'),
('sdf', 'vhjk@bnm', 'a'),
('ankita', 'a@gmail.com', '123'),
('ankita', 'a@gmail.com', '123'),
('ankita', 'a@gmail.com', 'js');

-- --------------------------------------------------------

--
-- Table structure for table `weddingcators`
--

CREATE TABLE `weddingcators` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weddingcators`
--

INSERT INTO `weddingcators` (`id`, `drop1`, `drop2`, `drop3`, `drop4`, `date`, `phone`) VALUES
(1, 'Wedding day', 'Pure Veg', '100 - 150', 'BudgetRs.13,000 - 23,000', '2018-10-30', 234567890);

-- --------------------------------------------------------

--
-- Table structure for table `weddingdj`
--

CREATE TABLE `weddingdj` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weddingdj`
--

INSERT INTO `weddingdj` (`id`, `drop1`, `drop2`, `drop3`, `drop4`, `date`, `phone`) VALUES
(6, ' Other', 'Not sure yet', 'PremiumRs.35,000 - 55,000', 'Rock', '2018-10-30', 3456789);

-- --------------------------------------------------------

--
-- Table structure for table `weddingphotographer`
--

CREATE TABLE `weddingphotographer` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `drop5` varchar(55) NOT NULL,
  `drop6` varchar(55) NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weddingphotographer`
--

INSERT INTO `weddingphotographer` (`id`, `drop1`, `date`, `drop2`, `drop3`, `drop4`, `drop5`, `drop6`, `phone`) VALUES
(1, 'I am', '2018-10-25', 'Reception', 'Basic Rs.8,000-20,000', 'Yes(Starts at Rs. 15000 for 1 day)', '200-250 people', '200-250 people', 987609876);

-- --------------------------------------------------------

--
-- Table structure for table `weddingplanner`
--

CREATE TABLE `weddingplanner` (
  `id` int(55) NOT NULL,
  `drop1` varchar(55) NOT NULL,
  `drop2` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `drop3` varchar(55) NOT NULL,
  `drop4` varchar(55) NOT NULL,
  `phone` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weddingplanner`
--

INSERT INTO `weddingplanner` (`id`, `drop1`, `drop2`, `date`, `drop3`, `drop4`, `phone`) VALUES
(1, 'Bangalore', '100-200', '2018-10-31', 'Basic Rs.5,00,000-10,00,000', 'Bangalore', 98765432);

-- --------------------------------------------------------

--
-- Table structure for table `wplan`
--

CREATE TABLE `wplan` (
  `drop1` varchar(60) NOT NULL,
  `drop2` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `drop5` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wplan`
--

INSERT INTO `wplan` (`drop1`, `drop2`, `date`, `phone`, `drop5`) VALUES
(' 200-400', 'PremiumRs.35,000 - 55,000', '1021-12-12', '8880131222', ''),
(' 200-400', 'PremiumRs.35,000 - 55,000', '1021-12-12', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1212-12-12', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1211-12-12', '4555', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1211-12-12', '4555', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1212-12-12', '4555', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1212-12-12', '4555', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1212-12-12', '4555', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2018-11-22', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2018-11-22', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2018-11-22', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2018-11-22', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2018-11-22', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1454-12-12', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1454-12-12', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1211-12-12', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1211-12-12', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1211-12-12', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '0000-00-00', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '0000-00-00', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '0000-00-00', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2121-12-12', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2121-12-12', '3316266958', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2012-12-15', '1212121212', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2012-12-12', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '2012-12-12', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '0000-00-00', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '0000-00-00', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '0000-00-00', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '0000-00-00', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '0000-00-00', '8880131222', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1212-12-12', '9972654844', ''),
('100-200', 'BudgetRs.13,000 - 23,000', '1212-12-12', '9972654844', ''),
('400-1000', 'PremiumRs.35,000 - 55,000', '2012-05-05', '9686476872', 'BC'),
('100-200', 'BudgetRs.13,000 - 23,000', '1212-12-12', '9972654848', 'BC'),
('100-200', 'BudgetRs.13,000 - 23,000', '5555-05-05', '1212121212', 'MC'),
('100-200', 'BudgetRs.13,000 - 23,000', '5555-05-05', '1212121212', 'MC'),
('100-200', 'BudgetRs.13,000 - 23,000', '1111-11-11', '3316266958', 'MC'),
('100-200', 'BudgetRs.13,000 - 23,000', '2222-02-22', '1212121212', 'ABC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1image`
--
ALTER TABLE `1image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2image`
--
ALTER TABLE `2image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3image`
--
ALTER TABLE `3image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4image`
--
ALTER TABLE `4image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `5image`
--
ALTER TABLE `5image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `6image`
--
ALTER TABLE `6image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ababylocation`
--
ALTER TABLE `ababylocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acarlocation`
--
ALTER TABLE `acarlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acityguidlocation`
--
ALTER TABLE `acityguidlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ahomeshiftlocation`
--
ALTER TABLE `ahomeshiftlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ahometutionlocation`
--
ALTER TABLE `ahometutionlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alocation`
--
ALTER TABLE `alocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amedicallocation`
--
ALTER TABLE `amedicallocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apaintlocation`
--
ALTER TABLE `apaintlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awdjni`
--
ALTER TABLE `awdjni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awprelocation`
--
ALTER TABLE `awprelocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `babycare`
--
ALTER TABLE `babycare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bridalmakeup`
--
ALTER TABLE `bridalmakeup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engagementplanner`
--
ALTER TABLE `engagementplanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeshifting`
--
ALTER TABLE `homeshifting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hometutors`
--
ALTER TABLE `hometutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `housepainting`
--
ALTER TABLE `housepainting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localguide`
--
ALTER TABLE `localguide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mehendhi`
--
ALTER TABLE `mehendhi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mwplan`
--
ALTER TABLE `mwplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plques`
--
ALTER TABLE `plques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postwedding`
--
ALTER TABLE `postwedding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prewedding`
--
ALTER TABLE `prewedding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddingcators`
--
ALTER TABLE `weddingcators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddingdj`
--
ALTER TABLE `weddingdj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddingphotographer`
--
ALTER TABLE `weddingphotographer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weddingplanner`
--
ALTER TABLE `weddingplanner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1image`
--
ALTER TABLE `1image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `2image`
--
ALTER TABLE `2image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `3image`
--
ALTER TABLE `3image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `4image`
--
ALTER TABLE `4image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `5image`
--
ALTER TABLE `5image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `6image`
--
ALTER TABLE `6image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ababylocation`
--
ALTER TABLE `ababylocation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `acarlocation`
--
ALTER TABLE `acarlocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `acityguidlocation`
--
ALTER TABLE `acityguidlocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ahomeshiftlocation`
--
ALTER TABLE `ahomeshiftlocation`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ahometutionlocation`
--
ALTER TABLE `ahometutionlocation`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alocation`
--
ALTER TABLE `alocation`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `amedicallocation`
--
ALTER TABLE `amedicallocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apaintlocation`
--
ALTER TABLE `apaintlocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `awdjni`
--
ALTER TABLE `awdjni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `awprelocation`
--
ALTER TABLE `awprelocation`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `babycare`
--
ALTER TABLE `babycare`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bridalmakeup`
--
ALTER TABLE `bridalmakeup`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `engagementplanner`
--
ALTER TABLE `engagementplanner`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homeshifting`
--
ALTER TABLE `homeshifting`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hometutors`
--
ALTER TABLE `hometutors`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `housepainting`
--
ALTER TABLE `housepainting`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `localguide`
--
ALTER TABLE `localguide`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mehendhi`
--
ALTER TABLE `mehendhi`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mwplan`
--
ALTER TABLE `mwplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `plques`
--
ALTER TABLE `plques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `postwedding`
--
ALTER TABLE `postwedding`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prewedding`
--
ALTER TABLE `prewedding`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `weddingcators`
--
ALTER TABLE `weddingcators`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weddingdj`
--
ALTER TABLE `weddingdj`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `weddingphotographer`
--
ALTER TABLE `weddingphotographer`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weddingplanner`
--
ALTER TABLE `weddingplanner`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
