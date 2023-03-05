-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 09:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgod`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `schoolId` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `schoolId`, `status`, `email`, `password`) VALUES
(1, 'rhea', 1901101252, 'student', 'cabuyaonrheamae1@gmail.com', 123456),
(2, 'Reanne', 1901101287, 'intern', 'wata@awat', 123),
(3, 'rea', 123, '123', '123@123', 123),
(4, 'hello', 1231, 'hello', '12324@asd', 0),
(5, 'rulyn', 1321313213, 'Head', 'head@rulyn', 123),
(6, 'Reanne Richard', 1901101287, 'Student', 'wata@wata', 54321),
(7, 'rea', 12321321, 'Student', 'rea@rea', 321),
(8, 'ea', 12312, 'Student', 'ea@ea', 1212),
(9, 'Mharian Dave Estopito', 123121424, 'Teacher', 'dave@dave', 123);

-- --------------------------------------------------------

--
-- Table structure for table `tree_locate`
--

CREATE TABLE `tree_locate` (
  `tree_id` int(11) NOT NULL,
  `tree_name` varchar(50) NOT NULL,
  `school` text NOT NULL,
  `location` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `planted` varchar(30) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tree_locate`
--

INSERT INTO `tree_locate` (`tree_id`, `tree_name`, `school`, `location`, `type`, `status`, `planted`, `longitude`, `latitude`) VALUES
(12, 'mahogany', '', '', 'mahogany', 'Alive', 'Yes', '123123', '131231232'),
(123, 'mahogany', '', '', 'tree', 'Alive', 'Yes', 'adase123', 'xcwdaadsa'),
(19, 'Mahogany', '', '', 'Tree', 'Status', '', 'sadasd', 'rqwewqe'),
(0, '', '', '', '', 'Status', '', '', ''),
(2, 'Gemelina', '', '', 'flower', 'Dead', '', 'dasdsadsa', 'asdsadsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
