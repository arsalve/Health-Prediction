-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 04:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthanalysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Did` int(5) NOT NULL,
  `dName` varchar(25) NOT NULL,
  `dadd` int(11) NOT NULL,
  `dPhone` int(11) NOT NULL,
  `dQal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Username`, `Email`, `Password`, `Did`, `dName`, `dadd`, `dPhone`, `dQal`) VALUES
('Ashish', 'a.r.salve@gmail.com', '250cf8b51c773f3f8dc8', 1, 'Ashish', 123, 123, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `ehr`
--

CREATE TABLE `ehr` (
  `sr` int(2) NOT NULL,
  `CreatedBy` varchar(20) NOT NULL,
  `CreatedAt` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `FName` varchar(40) NOT NULL,
  `Uid` int(16) NOT NULL,
  `Addre` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Dob` date NOT NULL,
  `Mt` varchar(10) NOT NULL,
  `birPla` varchar(25) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `emrName` varchar(40) NOT NULL,
  `emrRel` varchar(10) NOT NULL,
  `emrAdd` varchar(50) NOT NULL,
  `emrPhone` int(11) NOT NULL,
  `insNo` varchar(25) NOT NULL,
  `expPoDate` date NOT NULL,
  `poPro` varchar(25) NOT NULL,
  `insPhone` int(11) NOT NULL,
  `BG` varchar(15) NOT NULL,
  `Alg` varchar(50) NOT NULL,
  `did` int(5) NOT NULL,
  `dName` varchar(25) NOT NULL,
  `dQal` varchar(5) NOT NULL,
  `dPhone` int(11) NOT NULL,
  `dadd` varchar(50) NOT NULL,
  `Hei` int(5) NOT NULL,
  `Wei` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ehr`
--

INSERT INTO `ehr` (`sr`, `CreatedBy`, `CreatedAt`, `FName`, `Uid`, `Addre`, `Phone`, `Dob`, `Mt`, `birPla`, `Gender`, `emrName`, `emrRel`, `emrAdd`, `emrPhone`, `insNo`, `expPoDate`, `poPro`, `insPhone`, `BG`, `Alg`, `did`, `dName`, `dQal`, `dPhone`, `dadd`, `Hei`, `Wei`) VALUES
(4, 'Ashish', '2019-02-10 12:21:51.071036', 'Ashish R Salve', 2147483647, 'Badlapur', 2147483647, '1996-01-06', 'Unmarrid', 'Pandharpur', 'Male', 'abc', 'mother', 'Badlapur', 2147483647, 'NA', '0000-00-00', 'NA', 0, 'O Positive', 'NA', 1, 'abc', 'MBBS', 321654855, 'NULL', 186, 85),
(7, 'Ashish', '2019-02-10 12:21:56.731446', 'test', 111233455, 'test', 112144, '2019-02-02', 'Marid', '', 'Male', 'test', 'test', 'test', 123, 'test', '2019-02-03', 'test', 22, 'A Positive', 'test', 2, 'test', 'test', 1223, 'NULL', 155, 147);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `Sr` int(8) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`Sr`, `name`) VALUES
(1, '12'),
(2, '12'),
(3, '12'),
(4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Sr` bigint(20) UNSIGNED NOT NULL,
  `Username` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sr`, `Username`, `Email`, `Password`) VALUES
(14, 'admin', '123@123.com', '202cb962ac59075b964b07152d234b70'),
(10, 'Ashish', 'a.r.salve@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `ehr`
--
ALTER TABLE `ehr`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Sr` (`Sr`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Did` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ehr`
--
ALTER TABLE `ehr`
  MODIFY `sr` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `Sr` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Sr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
