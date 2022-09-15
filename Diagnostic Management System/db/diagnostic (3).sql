-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2019 at 05:56 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnostic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `pswd`) VALUES
('admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `name` text NOT NULL,
  `age` int(10) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `desease` varchar(100) NOT NULL,
  `tests` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Unpaid',
  `schedule` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `pid`, `name`, `age`, `gen`, `mobile`, `email`, `address`, `desease`, `tests`, `date`, `amount`, `status`, `schedule`) VALUES
(7, 3, 'ramu', 28, 'Male', 939399823, 'ram@gmail.com', '		ramu	', '		klxsklskl', 'X-Ray,UltraSound,BloodTest,CityScan', '19-Oct-2019', '4100', 'Unpaid', 1),
(5, 3, 'ramu', 28, 'Male', 939399823, 'ram@gmail.com', '		ramu	', '		accident', 'X-Ray,ECG,MRI,CityScan', '18-Oct-2019', '5700', 'Unpaid', 1),
(6, 3, 'ramu', 28, '', 939399823, 'ram@gmail.com', '		ramu	', '		accident', 'X-Ray,MRI,CityScan', '18-Oct-2019', '4500', 'Unpaid', 1),
(8, 3, 'ramu', 28, '', 939399823, 'ram@gmail.com', '		ramu	', '		dkkjdkj', 'X-Ray,UltraSound,BloodTest', '19-Oct-2019', '1600', 'Unpaid', 0),
(9, 4, 'hari', 29, 'Male', 9044249848, 'dulara9044@gmail.com', '		jankipuram	', '		swelling', 'X-Ray,CityScan', '31-Oct-2019', '3000', 'Unpaid', 0),
(10, 5, 'anand', 24, 'Male', 9876543210, 'anand@gmail.com', '		kalyanpur	', '		swelling', 'X-Ray,CityScan', '31-Oct-2019', '3000', 'paid', 1),
(11, 6, 'priya', 22, 'Female', 8081867790, 'priya@gmail.com', '		daliganj 	', '		neck pain', 'X-Ray,CityScan', '02-Nov-2019', '3000', 'paid', 1),
(12, 7, 'adil', 23, 'Male', 12344555657, 'adil@gmail.com', '		kjdjkvfkj	', '		fkjfkjd', 'X-Ray,UltraSound,BloodTest', '07-Nov-2019', '1600', 'paid', 1),
(13, 7, 'adil', 23, '', 12344555657, 'adil@gmail.com', '		kjdjkvfkj	', '		', 'BloodTest,UrineTest', '19-Nov-2019', '1000', 'paid', 0),
(14, 9, 'shubham', 24, 'Male', 8234567890, 'shu@gmail.com', '		ffdbfgngf	', '		accident', 'X-Ray,MRI,CityScan', '25-Nov-2019', '4500', 'paid', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `did` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `qly` varchar(40) NOT NULL,
  `exp` varchar(40) NOT NULL,
  `pswd` varchar(20) NOT NULL DEFAULT '12345',
  PRIMARY KEY (`did`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `email`, `mob`, `qly`, `exp`, `pswd`) VALUES
(2, 'ram', 'ram@gmail.com', '39394949', 'md', '2', '123'),
(3, 'mohan', 'mohan@gmail.com', '39394949', 'md', '2', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `age` int(10) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pswd` varchar(25) NOT NULL,
  PRIMARY KEY (`pid`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `name`, `age`, `gen`, `mobile`, `email`, `address`, `pswd`) VALUES
(1, 'abc', 25, 'Male', 230403404, 'abc@gmail.com', '1234', 'jankipuram lucknow'),
(2, 'abc', 25, 'Male', 230403404, 'abc@gmail.com', '', 'jankipuram lucknow'),
(3, 'ramu', 28, 'Male', 939399823, 'ram@gmail.com', '		ram	', '321'),
(4, 'hari', 29, 'Male', 9044249848, 'dulara9044@gmail.com', 'jankipuram', '12345'),
(5, 'anand', 24, 'Male', 9876543210, 'anand@gmail.com', 'kalyanpur', '54321'),
(6, 'priya', 22, 'Female', 8081867790, 'priya@gmail.com', 'daliganj ', '123456'),
(7, 'adil', 23, 'Male', 12344555657, 'adil@gmail.com', 'kjdjkvfkj', '12345'),
(8, 'adil', 23, 'Male', 1234567890, 'adil@gmail.com', 'lko', '12345'),
(9, 'shubham', 24, 'Male', 8234567890, 'shu@gmail.com', 'ffdbfgngf', '123');

-- --------------------------------------------------------

--
-- Table structure for table `p_login`
--

DROP TABLE IF EXISTS `p_login`;
CREATE TABLE IF NOT EXISTS `p_login` (
  `pid` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `pswd` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_login`
--

INSERT INTO `p_login` (`pid`, `email`, `mob`, `pswd`, `status`) VALUES
(1, 'abc@gmail.com', '0230403404', '', 'active'),
(2, 'ram@gmail.com', '9393998398', '321', 'active'),
(3, 'dulara9044@gmail.com', '9044249848', '12345', 'active'),
(4, 'anand@gmail.com', '9876543210', '54321', 'active'),
(5, 'priya@gmail.com', '8081867790', '123456', 'active'),
(6, 'adil@gmail.com', '1234567890', '12345', 'active'),
(7, 'shu@gmail.com', '8234567890', '123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE IF NOT EXISTS `reception` (
  `rid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `qly` varchar(40) NOT NULL,
  `exp` varchar(40) NOT NULL,
  `pswd` varchar(20) NOT NULL DEFAULT '12345',
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`rid`, `name`, `email`, `mob`, `qly`, `exp`, `pswd`) VALUES
(1, 'abc', 'abc@gmail.com', '23455454', 'bcom', '1', '321');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `tokenid` int(8) NOT NULL AUTO_INCREMENT,
  `bookingid` int(8) NOT NULL,
  `pid` int(8) NOT NULL,
  `did` int(8) NOT NULL,
  `datetime` varchar(40) NOT NULL,
  `sstatus` varchar(20) NOT NULL DEFAULT 'untested',
  PRIMARY KEY (`tokenid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`tokenid`, `bookingid`, `pid`, `did`, `datetime`, `sstatus`) VALUES
(1, 7, 3, 2, '2019-10-22T00:34', 'tested'),
(2, 6, 3, 2, '2019-10-31T00:20', 'tested'),
(3, 10, 5, 3, '2019-11-21T12:23', 'tested'),
(4, 11, 6, 2, '2019-11-03T12:01', 'tested'),
(5, 12, 7, 3, '2019-11-13T12:34', 'tested'),
(6, 5, 3, 2, '2019-11-26T12:23', 'tested'),
(7, 14, 9, 2, '2019-11-26T12:34', 'tested');

-- --------------------------------------------------------

--
-- Table structure for table `tested`
--

DROP TABLE IF EXISTS `tested`;
CREATE TABLE IF NOT EXISTS `tested` (
  `reportid` int(8) NOT NULL AUTO_INCREMENT,
  `tokenid` int(8) NOT NULL,
  `bookingid` int(8) NOT NULL,
  `pid` int(8) NOT NULL,
  `did` int(8) NOT NULL,
  `datetime` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `tests` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL DEFAULT 'report',
  `dstatus` varchar(20) NOT NULL DEFAULT 'undelivered',
  PRIMARY KEY (`reportid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tested`
--

INSERT INTO `tested` (`reportid`, `tokenid`, `bookingid`, `pid`, `did`, `datetime`, `name`, `email`, `mob`, `tests`, `report`, `dstatus`) VALUES
(2, 1, 7, 3, 2, '2019-10-22T00:34', 'ramu', 'ram@gmail.com', '939399823', 'X-Ray,UltraSound,BloodTest,CityScan', 'Class_12_Organic_Name_Reactions.pdf', 'uploaded'),
(5, 7, 14, 9, 2, '2019-11-26T12:34', 'shubham', 'shu@gmail.com', '8234567890', 'X-Ray,MRI,CityScan', '123.pdf', 'uploaded');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `billid` int(8) NOT NULL AUTO_INCREMENT,
  `bookingid` int(8) NOT NULL,
  `pid` int(8) NOT NULL,
  `ctype` varchar(20) NOT NULL,
  `cno` varchar(20) NOT NULL,
  `amount` varchar(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `expiry` varchar(40) NOT NULL,
  `cvv` int(3) NOT NULL,
  PRIMARY KEY (`billid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`billid`, `bookingid`, `pid`, `ctype`, `cno`, `amount`, `name`, `expiry`, `cvv`) VALUES
(2, 10, 5, 'credit', '9876543223454567', '3186', 'anand gupta', '5/2025', 321),
(3, 11, 6, '', '1234123412341234', '3186', 'priya', '3/2024', 321),
(4, 11, 6, 'credit', '1234123412341234', '3186', 'priya', '11/2027', 321),
(5, 12, 7, 'credit', '982298398894', '1699.2', 'adil', '9/2028', 321),
(6, 13, 7, 'credit', '1234123443212345', '1062', 'adil khan', '6/2020', 321),
(7, 14, 9, 'credit', '123123412341234', '4779', 'shubham', '4/2028', 321);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
