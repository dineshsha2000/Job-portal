-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 03:40 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ph` int(10) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `dob`, `email`, `ph`, `addr`, `about`, `pass`, `qualification`) VALUES
(1, 'DINESH SHA A Arshit', 'jelfj', 'diness@gmail.com', 908039643, 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 'dinesh', '0'),
(3, 'DINESH SHA A Arshit', '3u4ouou4', 'dineshshas@gmail.com', 2147483647, 'railway road Kancheepuram, Kanchipuram', 'fld;kjlf', 'dinesh@1', '0'),
(4, 'Srikanth', '07/02/1994', 'a@a.com', 1111111111, 'railway road Kancheepuram, Kanchipuram', 'aa', 'qwert', '0');

-- --------------------------------------------------------

--
-- Table structure for table `eventdetails`
--

CREATE TABLE `eventdetails` (
  `id` int(255) NOT NULL,
  `eventname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `dur` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventdetails`
--

INSERT INTO `eventdetails` (`id`, `eventname`, `role`, `salary`, `dur`, `des`) VALUES
(1, 'Job Offering', 'Web Developer', 4000, '43', 'asndans'),
(1, 'Baby Sitting', 'Baby sitter', 400, '2', 'For two days'),
(2, 'baby', 'Baby sitter', 243, '2', 'fkljelfe'),
(2, 'baby', 'Baby sitter', 243, '2', 'fkljelfe'),
(2, 'hackathon', 'software', 150000, '24', 'jflkjeljfje');

-- --------------------------------------------------------

--
-- Table structure for table `expdetails`
--

CREATE TABLE `expdetails` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobgivers`
--

CREATE TABLE `jobgivers` (
  `id` int(255) NOT NULL,
  `empname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobgivers`
--

INSERT INTO `jobgivers` (`id`, `empname`, `email`, `password`) VALUES
(1, 'dinesh', 'dineshsha@gmail.com', 'dinesh'),
(2, 'deepak', 'deepak@gmail.com', 'deepak'),
(3, 'jothish', 'jothish@gmail.com', 'jothish'),
(5, 'jothish', 'jothish1@gmail.com', 'jothish'),
(7, 'jothish', 'jothishsha@gmail.com', 'jothish'),
(8, 'dakshin', 'dakshin@gmail.com', 'dakshin'),
(12, 'akash', 'akash@gmail.com', 'akash'),
(15, 'suriya', 'suriya@gmail.com', 'suriya@123'),
(17, 'jothish', 'jothishshah@gmail.com', 'jothish'),
(18, 'jothishsha', 'jothishshahs@gmail.com', 'jothish');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `autoid` int(255) NOT NULL,
  `giverid` int(255) NOT NULL,
  `empid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT '0',
  `result` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`autoid`, `giverid`, `empid`, `name`, `email`, `ph`, `addr`, `about`, `status`, `result`) VALUES
(1, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 2, 'REJECTED'),
(2, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 1, 'ACCEPTED'),
(3, 2, 0, '', '', '', '', '', 0, NULL),
(4, 2, 0, '', '', '', '', '', 0, NULL),
(5, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 1, 'ACCEPTED'),
(6, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 1, 'ACCEPTED'),
(7, 2, 0, '', '', '', '', '', 0, NULL),
(8, 2, 0, '', '', '', '', '', 0, NULL),
(9, 2, 0, '', '', '', '', '', 0, NULL),
(10, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 0, NULL),
(11, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 0, NULL),
(12, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 0, NULL),
(13, 2, 0, '', '', '', '', '', 0, NULL),
(14, 2, 0, '', '', '', '', '', 0, NULL),
(15, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 0, NULL),
(16, 1, 1, 'DINESH SHA A Arshit', 'diness@gmail.com', '908039643', 'railway road Kancheepuram, Kanchipuram', 'dfjl;kej', 0, NULL),
(17, 1, 0, '', '', '', '', '', 0, NULL),
(18, 1, 0, '', '', '', '', '', 0, NULL),
(19, 1, 3, 'DINESH SHA A Arshit', 'dineshshas@gmail.com', '2147483647', 'railway road Kancheepuram, Kanchipuram', 'fld;kjlf', 0, NULL),
(20, 1, 3, 'DINESH SHA A Arshit', 'dineshshas@gmail.com', '2147483647', 'railway road Kancheepuram, Kanchipuram', 'fld;kjlf', 0, NULL),
(21, 2, 3, 'DINESH SHA A Arshit', 'dineshshas@gmail.com', '2147483647', 'railway road Kancheepuram, Kanchipuram', 'fld;kjlf', 0, NULL),
(22, 2, 3, 'DINESH SHA A Arshit', 'dineshshas@gmail.com', '2147483647', 'railway road Kancheepuram, Kanchipuram', 'fld;kjlf', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ph` (`ph`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `eventdetails`
--
ALTER TABLE `eventdetails`
  ADD KEY `id` (`id`);

--
-- Indexes for table `expdetails`
--
ALTER TABLE `expdetails`
  ADD KEY `id` (`id`);

--
-- Indexes for table `jobgivers`
--
ALTER TABLE `jobgivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`autoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobgivers`
--
ALTER TABLE `jobgivers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `autoid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventdetails`
--
ALTER TABLE `eventdetails`
  ADD CONSTRAINT `eventdetails_ibfk_1` FOREIGN KEY (`id`) REFERENCES `jobgivers` (`id`);

--
-- Constraints for table `expdetails`
--
ALTER TABLE `expdetails`
  ADD CONSTRAINT `expdetails_ibfk_1` FOREIGN KEY (`id`) REFERENCES `emp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
