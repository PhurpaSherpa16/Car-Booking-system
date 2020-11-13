-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 05:22 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sasincar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookcar`
--

CREATE TABLE `bookcar` (
  `bookid` int(20) NOT NULL,
  `userid` int(20) NOT NULL,
  `carid` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addresss` varchar(50) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookcar`
--

INSERT INTO `bookcar` (`bookid`, `userid`, `carid`, `email`, `addresss`, `mobileno`, `date`) VALUES
(14, 9, 16, 'hari@gmail.com', '2563', 'ktm', '2018-01-09'),
(15, 9, 13, 'hari@gmail.com', '21144555', 'dharan', '2018-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `cid` int(11) NOT NULL,
  `brandName` varchar(50) NOT NULL,
  `carName` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `mile` varchar(50) NOT NULL,
  `acc` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `catogery` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`cid`, `brandName`, `carName`, `price`, `mile`, `acc`, `year`, `catogery`, `description`, `image`) VALUES
(10, 'ferrari', 'F-40', '85000000', '395', '3.5', '2017', 'sport', '  2.5 ltr diesel/km', 'f40.jpg'),
(11, 'lamborgini', 'Huracan green', '3500000', '400', '3.4', '2016', 'morden', '  1.5 ltr diesel/km', 'Lamborgini Huracan green.jpg'),
(13, 'aston', 'Aston Martin Vanquish Blue', '150300', '300', '5.5', '2017', 'classic', 'good fule efficiency \r\n3.5 ltr/km', 'Aston Martin Vanquish Blue.jpg'),
(16, 'lamborgini', 'Lambo Yellow Van', '3560223', '350', '9.5', '2015', 'morden', '5.5 ltr/km', 'Lambo Yellow Van.png'),
(19, 'tata', 'Tango', '65', '290', '9.5', '2015', 'morden', '6ltrs/km', 'Tango.jpg'),
(20, 'honda', 'H66 Deo', '77', '280', '8.1', '2016', 'morden', '8 ltrs/km', 'H66 Deo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `aks` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `uid`, `question`, `aks`, `date`) VALUES
(1, 9, 'Is there Delivery system?', '', '2018-01-09'),
(2, 9, 'Where is your store?', '', '2018-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `uname`, `email`, `password`, `dob`, `gender`, `utype`) VALUES
(1, 'Ram', 'Sharma', 'ram123', 'ram@gmail.com', 'ramsharma', '1990-02-14', 'male', 'admin'),
(9, 'Hari', 'Raj', 'Hari123', 'hari@gmail.com', 'hari123', '1955-02-10', 'male', 'normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookcar`
--
ALTER TABLE `bookcar`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `bookcar_ibfk_1` (`carid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcar`
--
ALTER TABLE `bookcar`
  MODIFY `bookid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookcar`
--
ALTER TABLE `bookcar`
  ADD CONSTRAINT `bookcar_ibfk_1` FOREIGN KEY (`carid`) REFERENCES `car` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookcar_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `queries_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
