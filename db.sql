-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2013 at 12:29 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `NEO`
--

-- --------------------------------------------------------

--
-- Table structure for table `NEOdata`
--

CREATE TABLE `NEOdata` (
  `TempDesign` varchar(100) NOT NULL,
  `Score` int(11) NOT NULL DEFAULT '0',
  `Discovery` varchar(100) NOT NULL,
  `R.A` varchar(100) NOT NULL,
  `Decl.` varchar(100) NOT NULL,
  `V` varchar(100) NOT NULL,
  `Updated` varchar(100) NOT NULL,
  `NObs` int(11) NOT NULL,
  `Arc` varchar(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `countUp` int(11) NOT NULL DEFAULT '0',
  `countDown` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`TempDesign`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NEOdata`
--

INSERT INTO `NEOdata` (`TempDesign`, `Score`, `Discovery`, `R.A`, `Decl.`, `V`, `Updated`, `NObs`, `Arc`, `userId`, `countUp`, `countDown`) VALUES
('34IA228', 0, '2013-04-19.1', '15.1312', '+16.9331', '18.4', 'Updated!2013-04-20.51-UT', 34, '1.22', 'me@gmail.com', 0, 0),
('P106RLL', 0, '2013-04-17.5', '15.3614', '-0.5926', '20.5', 'Updated!2013-04-20.52-UT', 14, '2.89', 'me@gmail.com', 0, 0),
('P106RLm', 0, '2013-04-17.5', '14.1093', '-6.4999', '19.9', 'Updated!2013-04-20.38-UT', 33, '2.59', 'me@gmail.com', 0, 0),
('P106RLn', 0, '2013-04-17.5', '14.2626', '-9.5790', '20.3', 'Updated!2013-04-20.50-UT', 20, '2.80', 'me@gmail.com', 0, 0),
('P106RLs', 0, '2013-04-17.5', '15.3110', '+0.2990', '20.5', 'Updated!2013-04-20.25-UT', 29, '2.73', 'me@gmail.com', 0, 0),
('P106RLv', 0, '2013-04-17.5', '14.4020', '+1.2555', '20.9', 'Updated!2013-04-20.26-UT', 12, '2.75', 'me@gmail.com', 0, 0),
('P106TBU', 0, '2013-04-19.3', '12.6762', '+54.1124', '20.4', 'Updated!2013-04-20.52-UT', 11, '0.89', 'me@gmail.com', 0, 0),
('P106TpA', 0, '2013-04-19.4', '12.4496', '-1.4621', '19.3', 'Updated!2013-04-20.48-UT', 15, '0.93', 'me@gmail.com', 0, 0),
('P106TpB', 0, '2013-04-19.4', '12.7965', '-8.7007', '21.2', 'Updated!2013-04-20.03-UT', 6, '0.06', 'me@gmail.com', 0, 0),
('P106TpV', 0, '2013-04-19.3', '12.7486', '+42.9270', '20.4', 'Updated!2013-04-20.38-UT', 5, '1.05', 'me@gmail.com', 0, 0),
('P106Tq0', 0, '2013-04-19.3', '12.4539', '+38.9511', '20.4', 'Updated!2013-04-20.52-UT', 9, '1.05', 'me@gmail.com', 0, 0),
('P106Tqt', 0, '2013-04-19.4', '12.0094', '-6.0184', '20.7', 'Updated!2013-04-20.32-UT', 9, '0.81', 'me@gmail.com', 0, 0),
('P106TZb', 0, '2013-04-19.5', '15.6299', '-5.5112', '21.3', 'Updated!2013-04-20.53-UT', 9, '0.91', 'me@gmail.com', 0, 0),
('P106TZc', 0, '2013-04-19.5', '16.0969', '-1.6334', '20.1', 'Updated!2013-04-20.52-UT', 15, '0.92', 'me@gmail.com', 0, 0),
('P106TZh', 0, '2013-04-19.5', '16.0631', '-2.9439', '20.8', 'Updated!2013-04-20.32-UT', 7, '0.80', 'me@gmail.com', 0, 0),
('P106TZy', 0, '2013-04-19.5', '15.6386', '-3.9466', '20.4', 'Updated!2013-04-20.43-UT', 7, '0.89', 'me@gmail.com', 0, 0),
('PTFu45', 0, '2013-04-18.1', '11.9277', '+57.9325', '20.8', 'Updated!2013-04-19.99-UT', 5, '1.80', 'me@gmail.com', 0, 0),
('PTFu47', 0, '2013-04-18.1', '12.4686', '+17.2882', '20.2', 'Updated!2013-04-20.22-UT', 9, '2.02', 'me@gmail.com', 0, 0),
('PTFu89', 0, '2013-04-18.2', '12.2800', '+23.2349', '20.3', 'Updated!2013-04-20.22-UT', 15, '1.72', 'me@gmail.com', 0, 0),
('SW40oj', 0, '2013-04-20.2', '15.0681', '-4.2779', '20.8', 'Updated!2013-04-20.40-UT', 6, '0.12', 'me@gmail.com', 0, 0),
('UH0066F', 0, '2013-04-16.3', '18.6416', '+48.0342', '20.3', 'Updated!2013-04-20.10-UT', 15, '3.69', 'me@gmail.com', 0, 0),
('UH008B2', 0, '2013-04-19.2', '9.1927', '-21.9827', '17.6', 'Updated!2013-04-19.28-UT', 5, '0.04', 'me@gmail.com', 0, 0),
('UH00A3D', 0, '2013-04-19.2', '11.8489', '-15.9342', '18.7', 'Updated!2013-04-20.39-UT', 23, '1.04', 'me@gmail.com', 0, 0),
('UH01B8C', 0, '2013-04-20.2', '13.6005', '+20.0221', '18.8', 'Updated!2013-04-20.32-UT', 6, '0.05', 'me@gmail.com', 0, 0),
('UH941CC', 0, '2013-04-18.2', '14.0760', '+3.4940', '20.7', 'Updated!2013-04-20.50-UT', 20, '1.99', 'me@gmail.com', 0, 0),
('UH944E7', 0, '2013-04-18.3', '14.2175', '+10.7650', '21.2', 'Updated!2013-04-20.52-UT', 9, '2.00', 'me@gmail.com', 0, 0),
('UH94D7E', 0, '2013-04-19.2', '11.9195', '-13.4550', '19.2', 'Added!2013-04-19.28-UT', 4, '0.00', 'me@gmail.com', 0, 0),
('UH94F83', 0, '2013-04-19.2', '13.7204', '+4.1215', '20.2', 'Updated!2013-04-20.07-UT', 13, '0.79', 'me@gmail.com', 0, 0),
('UH951A3', 0, '2013-04-19.3', '14.9887', '+26.0848', '20.6', 'Updated!2013-04-20.52-UT', 18, '1.02', 'me@gmail.com', 0, 0),
('UH95AAD', 0, '2013-04-20.2', '14.0843', '+10.5363', '19.7', 'Updated!2013-04-20.38-UT', 8, '0.07', 'me@gmail.com', 0, 0),
('UH95AF2', 0, '2013-04-20.2', '13.8803', '+11.3877', '20.5', 'Updated!2013-04-20.42-UT', 8, '0.11', 'me@gmail.com', 0, 0),
('UH95B9D', 0, '2013-04-20.2', '13.7755', '+11.0920', '19.9', 'Updated!2013-04-20.50-UT', 8, '0.11', 'me@gmail.com', 0, 0),
('UH95C6D', 0, '2013-04-20.3', '13.8513', '+14.6344', '20.0', 'Updated!2013-04-20.47-UT', 7, '0.12', 'me@gmail.com', 0, 0),
('UH95C77', 0, '2013-04-20.3', '14.0201', '+11.9707', '19.8', 'Updated!2013-04-20.47-UT', 7, '0.12', 'me@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `emailId` varchar(100) NOT NULL,
  `fullName` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `backGround` varchar(100) NOT NULL,
  PRIMARY KEY (`emailId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
