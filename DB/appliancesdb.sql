-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2022 at 07:28 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `appliancesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Empid` varchar(100) NOT NULL,
  `Empname` varchar(100) NOT NULL,
  `Addr` varchar(100) NOT NULL,
  `Mob` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Empid`, `Empname`, `Addr`, `Mob`, `Email`) VALUES
('1', 'jeeva', '7th street', '9002342233', 'jeeva@gmail.com'),
('3', 'Ramya', 'cbe', '9001231231', 'ramya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Serviceid` int(4) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Electronics` varchar(100) NOT NULL,
  `Amount` varchar(100) NOT NULL,
  `Pdate` varchar(100) NOT NULL,
  `Cardno` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Serviceid`, `Uid`, `Electronics`, `Amount`, `Pdate`, `Cardno`) VALUES
(2, 5, 'harshitha', 'TV', '2000', '14/09/22', '21312321313');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE IF NOT EXISTS `servicerequest` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Uid` varchar(100) NOT NULL,
  `Electronics` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Problem` varchar(100) NOT NULL,
  `Rdate` varchar(100) NOT NULL,
  `Adate` varchar(100) NOT NULL,
  `Empid` varchar(100) NOT NULL,
  `Serviceeng` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`id`, `Uid`, `Electronics`, `Brand`, `Problem`, `Rdate`, `Adate`, `Empid`, `Serviceeng`, `Mobile`) VALUES
(5, 'harshitha', 'TV', 'samsung', 'picture tube', '14/09/2022', '09/14/2022', '3', 'Ramya', '9001231231');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Serviceid` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Electronics` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Sdate` varchar(100) NOT NULL,
  `Serviceeng` varchar(100) NOT NULL,
  `Amt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `Serviceid`, `Uid`, `Electronics`, `Brand`, `Status`, `Sdate`, `Serviceeng`, `Amt`) VALUES
(3, '5', 'harshitha', 'TV', 'samsung', 'clear', '09/14/2022', 'Ramya', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `tab_user`
--

CREATE TABLE IF NOT EXISTS `tab_user` (
  `fname` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_user`
--

INSERT INTO `tab_user` (`fname`, `Uid`, `password`, `email_id`, `address`, `mobile`) VALUES
('nanda', 'nanda', 'nanda', 'nanda@gmail.com', 'cbe', '9629595205'),
('ravi', 'ravi', 'ravi', 'ravi@gmail.com', 'cbe', '9003502338'),
('harshitha', 'harshitha', 'harshitha', 'harshitha@gmail.com', 'cbe', '9001231231');
