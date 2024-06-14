-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `renewpolicy`
--

CREATE TABLE `renewpolicy` (
  `RenewPolicyID` int(100) NOT NULL,
  `pFullname` varchar(100) NOT NULL,
  `pinitials` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nic` int(30) NOT NULL,
  `policynumber` int(10) NOT NULL,
  `policytype` varchar(50) NOT NULL,
  `policydate` date NOT NULL,
  `renewaldate` date NOT NULL,
  `benfullname` varchar(100) NOT NULL,
  `benInitials` varchar(50) NOT NULL,
  `BenDoB` date NOT NULL,
  `benphoneNumber` int(10) NOT NULL,
  `Benaddress` varchar(200) NOT NULL,
  `Benemail` varchar(100) NOT NULL,
  `rgender` varchar(20) NOT NULL,
  `Bennic` varchar(30) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `meddoc` varchar(150) NOT NULL,
  `polexreq` varchar(50) NOT NULL,
  `prepay` varchar(50) NOT NULL,
  `sign` varchar(150) NOT NULL,
  `ddate` date NOT NULL,
  `User_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renewpolicy`
--

INSERT INTO `renewpolicy` (`RenewPolicyID`, `pFullname`, `pinitials`, `date`, `phoneNumber`, `address`, `email`, `gender`, `nic`, `policynumber`, `policytype`, `policydate`, `renewaldate`, `benfullname`, `benInitials`, `BenDoB`, `benphoneNumber`, `Benaddress`, `Benemail`, `rgender`, `Bennic`, `relationship`, `meddoc`, `polexreq`, `prepay`, `sign`, `ddate`, `User_ID`) VALUES
(2, 'Navithu Sriyananda', 'Sriyananda N', '2023-06-08', 761244355, '243 A, Gothatuwa, Angoda', 'navithusriya@gmail.com', 'male', 726090793, 10001, 'Term Life Insurance', '2023-06-22', '2023-06-29', 'Nethmini Dilshara', 'Dilshara N', '2023-09-28', 761244355, '243 A, Gothatuwa, Angoda', 'neth123@gmail.com', 'eFemale', '200344477789', 'Daughter', '', 'Extend Policy Term for 8 years', 'Quarterly', '', '2023-04-25', 36),
(3, 'Kusal Janith', 'K Janith', '2023-07-01', 761244355, '12/Park Street, Colombo', 'chagyqgdiala@gmail.com', 'male', 2147483647, 10002, 'Permenant Life Insurance', '2023-07-26', '2034-07-13', 'Demini Sarah', 'D S Ranwala', '2023-06-29', 761244355, '12/Park Street, Colombo', 'neth123@gmail.com', 'eFemale', '200344477789', 'Daughter', '', 'Extend Policy Term for 10 years', 'Monthly', '', '2023-06-01', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `renewpolicy`
--
ALTER TABLE `renewpolicy`
  ADD PRIMARY KEY (`RenewPolicyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `renewpolicy`
--
ALTER TABLE `renewpolicy`
  MODIFY `RenewPolicyID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
