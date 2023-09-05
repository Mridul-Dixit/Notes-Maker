-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 12:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes_maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `SNo.` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`SNo.`, `uid`, `title`, `notes`) VALUES
(70, 1, 'Dummy Note 1', 'HI, THIS IS RUHAN SHIKHAWAAT.'),
(71, 1, 'Dummy Note 2', 'HI, THIS IS ROHIT RAI.'),
(72, 2, 'MRIDUL DUMMY NOTE 1', 'HI, THIS IS MRIDUL NOTE 1.');

-- --------------------------------------------------------

--
-- Table structure for table `signupdetails`
--

CREATE TABLE `signupdetails` (
  `uid` int(11) NOT NULL,
  `fname` varchar(33) NOT NULL,
  `lname` varchar(33) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signupdetails`
--

INSERT INTO `signupdetails` (`uid`, `fname`, `lname`, `regno`, `password`) VALUES
(1, 'Rohit', 'Rai', '22mcmc06', 'rohit@123'),
(2, 'Mridul', 'Dixit', '22MCMC28', 'mridul@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`SNo.`);

--
-- Indexes for table `signupdetails`
--
ALTER TABLE `signupdetails`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `SNo.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `signupdetails`
--
ALTER TABLE `signupdetails`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
