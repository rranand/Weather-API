-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 10:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weatherproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`username`, `password`) VALUES
('admin', 'rt212665');

-- --------------------------------------------------------

--
-- Table structure for table `api_data`
--

CREATE TABLE `api_data` (
  `username` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `calls` int(11) NOT NULL DEFAULT 60,
  `total_calls` int(11) NOT NULL DEFAULT 0,
  `purchased` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_data`
--

INSERT INTO `api_data` (`username`, `token`, `type`, `calls`, `total_calls`, `purchased`) VALUES
('rra', '8CRglNfY1tCGkTyKhTm6rwBPcAvlEGsBqwQzSBia7TFFU9J7rETAQWE7aOIxBaBPkdazTuR7evhzDtbakRam7bUCmmjVCBWjdqqe', 0, 60, 0, '0000-00-00 00:00:00'),
('rradw', 'aDrA9YsYc6yGxsiTFK6eLoqgdZ7K7SkJttRJiw3TfW6jPYevp21NsWmthmL33KTRwMpkCmMzytXfUGT7MFLPkDsdyxtHXmaNgimj', 0, 60, 0, '2020-11-10 15:09:10'),
('rranan', '9g9ceV5IvIhArve5IbJzeuNJRnIRFKFdFwIjjE76OtBlb9R84FF7ob7BubPzqqOfU2v9HC8ddkycl1WeRGSOYbIgG7Kib5J6kviQ', 1, 45, 16, '2020-11-10 15:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`name`, `email`, `subject`, `message`) VALUES
('Rohit Anand', 'rranand@mitaoe.ac.in', 'ADafaio', 'infoesnfoiesnfoiens'),
('Rohit Anand', 'rrananad@mitaoe.ac.in', 'oinfoienoi', 'noinsonoseingf');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`username`, `email`, `name`, `password`) VALUES
('rra', 'admin@admin.com', 'Sfnoe', 'rt212665'),
('rradw', 'admindw@admin.com', 'Sfnoedw', 'rt212665'),
('rranan', 'rranand@mitaoe.ac.in', 'Anand Rohit', 'rt212665');

-- --------------------------------------------------------

--
-- Table structure for table `weather_data`
--

CREATE TABLE `weather_data` (
  `city` varchar(50) NOT NULL,
  `precipation` int(11) NOT NULL,
  `humidity` varchar(50) NOT NULL,
  `pressure` int(11) NOT NULL,
  `temperature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weather_data`
--

INSERT INTO `weather_data` (`city`, `precipation`, `humidity`, `pressure`, `temperature`) VALUES
('Kolkata', 13, 'LOW', 15, 35),
('Patna', 90, 'HIGH', 20, 29),
('Pune', 59, 'LOW', 98, 26);

-- --------------------------------------------------------

--
-- Table structure for table `weather_data_pre`
--

CREATE TABLE `weather_data_pre` (
  `city` varchar(50) NOT NULL,
  `precipation` int(11) NOT NULL,
  `humidity` varchar(50) NOT NULL,
  `pressure` int(11) NOT NULL,
  `temperature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weather_data_pre`
--

INSERT INTO `weather_data_pre` (`city`, `precipation`, `humidity`, `pressure`, `temperature`) VALUES
('Patna', 90, 'HIGH', 20, 29),
('Patna', 80, 'LOW', 20, 29),
('Patna', 90, 'HIGH', 29, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `api_data`
--
ALTER TABLE `api_data`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `weather_data`
--
ALTER TABLE `weather_data`
  ADD PRIMARY KEY (`city`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
