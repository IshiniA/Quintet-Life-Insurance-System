-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:03 PM
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
-- Table structure for table `claimdetails`
--

CREATE TABLE `claimdetails` (
  `Claim_ID` int(100) NOT NULL,
  `PolicyHolder_Fullname` varchar(100) NOT NULL,
  `PolicyHolder_Name` varchar(50) NOT NULL,
  `PolicyHolder_DOB` date NOT NULL,
  `PolicyHolder_Number` int(10) NOT NULL,
  `PolicyHolder_address` varchar(200) NOT NULL,
  `PolicyHolder_Email` varchar(100) NOT NULL,
  `PolicyHolder_Gender` varchar(20) NOT NULL,
  `PolicyHolder_NIC` int(12) NOT NULL,
  `Policy_Number` int(10) NOT NULL,
  `Policy_Type` varchar(50) NOT NULL,
  `Policy_date` date NOT NULL,
  `Date_death` date NOT NULL,
  `Cause_death` varchar(200) NOT NULL,
  `Benificiary_Fullname` varchar(100) NOT NULL,
  `Beneficiary_Name` varchar(50) NOT NULL,
  `Beneficiary_Address` varchar(200) NOT NULL,
  `Beneficiary_Number` int(10) NOT NULL,
  `Beneficiary_Gender` varchar(20) NOT NULL,
  `Relationship_to_Deceased` varchar(50) NOT NULL,
  `Date_Submission` date NOT NULL,
  `Customer_Feedback` varchar(200) NOT NULL,
  `User_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `claimdetails`
--

INSERT INTO `claimdetails` (`Claim_ID`, `PolicyHolder_Fullname`, `PolicyHolder_Name`, `PolicyHolder_DOB`, `PolicyHolder_Number`, `PolicyHolder_address`, `PolicyHolder_Email`, `PolicyHolder_Gender`, `PolicyHolder_NIC`, `Policy_Number`, `Policy_Type`, `Policy_date`, `Date_death`, `Cause_death`, `Benificiary_Fullname`, `Beneficiary_Name`, `Beneficiary_Address`, `Beneficiary_Number`, `Beneficiary_Gender`, `Relationship_to_Deceased`, `Date_Submission`, `Customer_Feedback`, `User_ID`) VALUES
(12, 'Navithu Sriyananda', 'Sriyananda N', '1996-03-23', 715487961, '25A, Flower Road, Kandy', 'navithusriya@gmail.com', 'Male', 964518184, 10001, 'Term Life Insurance', '2020-03-16', '2023-05-03', 'Accident', 'ishani Aponso', 'Aponso I', '131/1D ,maguruwila road', 716201676, 'Male', 'Joint life assured', '2023-04-13', 'Excelent service', 36),
(13, 'Nirmani Umasha', 'Umasha N', '1999-05-23', 714598632, '158/2B, Salmal Uyana, Malabe', 'nirmaniumasha@gmail.com', 'Female', 994365488, 10005, 'Permanent Life Insurance', '2018-02-18', '2023-06-10', 'natural disaster', 'chalana ranwala', 'Ranwala C', '243/a,gothatuw,angoda', 0, 'Female', 'Child', '2023-06-11', '  Thank you for your services. ', 41);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `claimdetails`
--
ALTER TABLE `claimdetails`
  ADD PRIMARY KEY (`Claim_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `claimdetails`
--
ALTER TABLE `claimdetails`
  MODIFY `Claim_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
