-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 01:26 PM
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
-- Table structure for table `purchase_policy`
--

CREATE TABLE `purchase_policy` (
  `Purchase_policy_ID` int(10) NOT NULL,
  `Name_with_initials` varchar(100) NOT NULL,
  `Full_name` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Natioanality` varchar(20) NOT NULL,
  `Occupation` varchar(150) NOT NULL,
  `Contact_number` int(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Policy_type` varchar(50) NOT NULL,
  `Policy_name` varchar(100) NOT NULL,
  `Policy_term` varchar(50) NOT NULL,
  `Medical_conditions` varchar(10) NOT NULL,
  `Smoker` varchar(10) NOT NULL,
  `Policy_cancellations` varchar(10) NOT NULL,
  `Benificiary_FullName` varchar(150) NOT NULL,
  `Relationship` varchar(50) NOT NULL,
  `Benificiary_ContactNumber` int(10) NOT NULL,
  `Benificiary_Address` varchar(200) NOT NULL,
  `Benificiary_Email` varchar(150) NOT NULL,
  `CommentsAndQuestions` varchar(300) NOT NULL,
  `Submission_date` date NOT NULL,
  `User_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_policy`
--

INSERT INTO `purchase_policy` (`Purchase_policy_ID`, `Name_with_initials`, `Full_name`, `DOB`, `Gender`, `Natioanality`, `Occupation`, `Contact_number`, `Address`, `Email`, `Policy_type`, `Policy_name`, `Policy_term`, `Medical_conditions`, `Smoker`, `Policy_cancellations`, `Benificiary_FullName`, `Relationship`, `Benificiary_ContactNumber`, `Benificiary_Address`, `Benificiary_Email`, `CommentsAndQuestions`, `Submission_date`, `User_ID`) VALUES
(26, 'Sriyananda N.', 'Navithu Sriyananada', '1996-03-23', 'male', 'sinhala', 'Technical officer', 715487961, '25A, Flower Road, Kandy', 'navithusriya@gmail.com', 'Term Life Insurance', 'Decreasing Term Life Insurance', '10 years', 'No', 'no', 'no', 'Nethmini Dilshara', 'Wife', 703381950, '25A, Flower Road, Kandy', 'neth123@gmail.com', 'Thank you  for your great service ', '2020-06-15', 36),
(27, 'Poornima S.', 'Sachini Poornima', '1997-09-03', 'female', 'sinhala', 'Teacher', 771234567, '128/6, Hiripitiya Road, Pannipitiya', 'sachiniiaponso@gmail.com', 'Term Life Insurance', 'Convertible Term Life Insurance', '20 years', 'No', 'no', 'no', 'Manoj Ranasinghe', 'Husband', 703381959, '128/6, Hiripitiya Road, Pannipitiya', 'manoj456@gmail.com', '', '2021-10-05', 37),
(28, 'Sandaruwan C.', 'Chaminda sandaruwan', '1982-12-04', 'male', 'sinhala', 'Engineer', 778954763, '6B, Highlevel Road, Maharagama', '82sandaruwan@gmail.com', 'Permenant Life Insurance', 'Whole Life Insurance', 'Until specified age', 'No', 'no', 'yes', 'Indrani Mallika', 'Wife', 714936895, '6B, Highlevel Road, Maharagama', 'mallika89@gmail.com', 'thank you', '2016-07-12', 38),
(29, 'Jayasooriya D.', 'Dulan Jayasooriya', '1973-11-05', 'male', 'sinhala', 'Buisnessman', 757465982, '15/2, Temple Road, Kadawatha', 'dulanjay90@gmail.com', 'Term Life Insurance', 'Convertible Term Life Insurance', '30 years', 'Yes', 'no', 'no', 'Thushani Kavindya', 'Sister', 703386724, '24/C, Salmal Uyana, Kadawatha', 'thusha234@gmail.com', 'No questions', '2022-05-24', 39),
(30, 'Perera R.', 'Rajitha Perera', '1971-08-06', 'male', 'sinhala', 'Cleark', 715656234, '18C, Park Avenue, Colombo', 'rajithaperera86@gmail.com', 'Term Life Insurance', 'Renewable Term Life Insurance', '30 years', 'No', 'yes', 'no', 'Lakshika Chamodi', 'Daughter', 716309888, '18C, Park Avenue, Colombo', 'chamodi988@gmail.com', 'Good services', '2022-12-01', 40),
(31, 'Umasha N.', 'Nirmani Umasha', '1999-05-23', 'female', 'sinhala', 'Nurse', 772345656, '158/2B, Salmal Uyana, Malabe', 'nirmaniumasha@gmail.com', 'Term Life Insurance', 'Renewable Term Life Insurance', '30 years', 'No', 'no', 'no', 'Mayura Ramanayake', 'Husband', 765437895, '158/2B, Salmal Uyana, Malabe', 'nirmaniumasha@gmail.com', 'thank you for your service', '2010-05-02', 41),
(32, 'De Silva S.', 'Samin De Silva', '1983-10-05', 'male', 'sinhala', 'Web Designer', 727835765, '23/C, Dewananda Rd, Piliyandala', 'samincmb@gmail.com', 'Permenant Life Insurance', 'Variable Universal Life Insurance(VUL)', 'Until specified age', 'No', 'no', 'no', 'Nishmi Shaveema', 'Wife', 786545324, 'samincmb@gmail.com', 'nishmi678@gmail.com', 'I havent questions thnk u', '2013-06-10', 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase_policy`
--
ALTER TABLE `purchase_policy`
  ADD PRIMARY KEY (`Purchase_policy_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_policy`
--
ALTER TABLE `purchase_policy`
  MODIFY `Purchase_policy_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
