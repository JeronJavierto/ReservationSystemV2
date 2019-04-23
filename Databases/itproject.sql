-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 02:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `userID` int(11) NOT NULL,
  `User_type` varchar(100) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Office` varchar(100) NOT NULL,
  `Organization` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`userID`, `User_type`, `First_name`, `Last_name`, `email`, `Office`, `Organization`, `Position`, `Password`) VALUES
(24, 'admin', 'admin', 'admin', 'admin@email.com', 'admin', '', '', 'e64b78fc3bc91bcbc7dc232ba8ec59e0'),
(25, 'client', 'user', 'user', 'user@email.com', '', 'ICON', 'President', '5a30c9609b52fe348fb6925896e061de'),
(26, 'client', 'user2', 'user2', 'user2@email.com', '', 'JPIA', 'Vice', '777dd9eca1d6506e618db45f6984b601'),
(27, 'client', 'user3', 'user3', 'user3@email.com', '', 'PESO', 'President', 'dd49464d76a41223cf717122a9de610b'),
(28, 'client', 'user4', 'user4', 'user4@email.com', '', 'PESO', 'President', 'e3c051e942952896da19a682ccb565b8');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `classID` int(100) NOT NULL,
  `roomName` varchar(50) NOT NULL,
  `schoolYear` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `days` varchar(11) NOT NULL,
  `time` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `hours` decimal(3,1) NOT NULL,
  `weekly` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`classID`, `roomName`, `schoolYear`, `semester`, `days`, `time`, `subject`, `hours`, `weekly`) VALUES
(1, 'D422', '2015-2016', '1st', 'MWF', '8:00-9:30', 'IT 422', '1.5', NULL),
(2, 'D421', '2015-2016', '1st', 'MWF', '8:00-9:30', 'IT 421', '1.5', NULL),
(4, 'D422', '2015-2016', '1st', 'MTh', '1:00-2:30', 'IT 325', '1.5', NULL),
(7, 'D422', '2015-2016', '1st', 'MWF', '9:00-10:00', 'ITF 001', '1.0', NULL),
(8, 'D422', '2016-2017', '1st', 'MWF', '8:00-9:00', 'IT 422', '1.0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `EquipID` int(11) NOT NULL,
  `equipName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `FacID` int(255) NOT NULL,
  `Level` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `roomType` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `Reservation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`FacID`, `Level`, `room`, `roomType`, `description`, `capacity`, `Reservation`) VALUES
(1, 'First Basement', 'Plaza\r\n', 'others', 'Devesse Plaza', 1000, ''),
(2, 'Amphitheatre', 'Amphitheatre', 'Stage Area', 'Amphitheatre', 1000, '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `resID` int(100) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Venue` varchar(100) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`resID`, `user_ID`, `title`, `Venue`, `start_event`, `end_event`, `status`) VALUES
(21, 26, 'Ballers', '', '2019-04-19 00:00:00', '2019-04-20 00:00:00', 'Approved'),
(24, 0, 'Mass', '', '2019-04-19 00:00:00', '2019-04-20 00:00:00', 'Approved'),
(26, 25, 'No class', '', '2019-04-19 00:00:00', '2019-04-21 00:00:00', 'Approved'),
(32, 25, 'Party', '', '2019-04-23 12:00:00', '2019-04-23 14:00:00', 'Approved'),
(34, 25, 'party party', '', '2019-04-24 12:30:00', '2019-04-24 14:30:00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serID` int(10) NOT NULL,
  `typeOfService` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serID`, `typeOfService`) VALUES
(1, 'Janitor'),
(2, 'Security Guard'),
(3, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`classID`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`EquipID`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`FacID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`resID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `classroom`
--
ALTER TABLE `classroom`
  MODIFY `classID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `EquipID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `FacID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `resID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
