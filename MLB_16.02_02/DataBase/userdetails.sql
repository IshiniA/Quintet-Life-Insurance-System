-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 09:36 PM
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
-- Database: `iwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `User_ID` int(10) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Marital_Status` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`User_ID`, `User_Name`, `Email`, `First_Name`, `Last_Name`, `DOB`, `Gender`, `Marital_Status`, `Address`, `Phone_No`, `Status`, `Password`, `image`) VALUES
(36, 'Navithu', 'navithusriya@gmail.com', 'Navithu', 'Sriyananda', '1996-03-23', 'Male', 'Married', '25A, Flower Road, Kandy', 715487961, 'Active', 'Navithu@123', 'userP.png'),
(37, 'sachini97', 'sachiniiaponso@gmail.com', 'Sachini', 'Poornima', '1997-09-03', 'Female', 'Married', '128/6, Hiripitiya Road, Pannipitiya', 771234567, 'Active', 'Sachi#P97', '5698.jpg'),
(38, 'sandaruwan', '82sandaruwan@gmail.com', 'Chaminda', 'Sandaruwan', '1982-04-15', 'Male', 'Married', '6B, Highlevel Road, Maharagama', 778954763, 'Active', 'SanABC!123', '158kjl.jpg'),
(39, 'DulanJ', 'dulanjay90@gmail.com', 'Dulan', 'Jayasooriya', '1973-11-05', 'Male', 'Single', '15/2, Temple Road, Kadawatha', 757465982, 'Active', 'Dj*73115*', 'userP.png'),
(40, 'RajithaPerera', 'rajithaperera86@gmail.com', 'Rajitha', 'Perera', '1971-08-06', 'Male', 'Divorced', '18C, Park Avenue, Colombo', 726985412, 'Active', 'RajP#123', 'pic45.jpg'),
(41, 'Nirmani', 'nirmaniumasha@gmail.com', 'Nirmani', 'Umasha', '1999-05-23', 'Female', 'Single', '158/2B, Salmal Uyana, Malabe', 714598632, 'Active', 'Umasha%2001', 'd8af8y9.jpg'),
(42, 'Samin', 'samincmb@gmail.com', 'Samin', 'De Silva ', '1983-10-05', 'Male', 'Married', '23/C, Dewananda Rd, Piliyandala', 758496321, 'Active', 'Samin@123ABc', 'sdasfgrd.jpg'),
(43, 'IreshaP', 'iresha998priya@gmail.com', 'Iresha', 'Priyadarshani', '1996-05-01', 'Female', 'Married', '46/2, Wijemangalarama Rd, Nugegoda', 765481235, 'Active', 'Ipriya$456', 'userP.png'),
(44, 'Dilrukshi', '456dil.shali@gmail.com', 'Shalika', 'Dilrukshi', '1989-08-12', 'Female', 'Married', '205, Salmal Uyana, Kandy', 724859632, 'Active', 'Dil@9873', 'userP.png'),
(45, 'Kusal', '88jayasooriya@gmail.com', 'Kusal', 'Jayasooriya', '1990-07-16', 'Male', 'Married', '10/A/C, High level Rd, Awissawella', 778965412, 'Active', 'KusalJaye@56', 'asdfgert.jpg'),
(46, 'RathnasiriK', 'rathnasiri.2016@gmail.com', 'Rathnasiri', 'Kariyawasam', '1971-05-02', 'Male', 'Married', '45, Samagi Mawatha, Kalutara', 718459633, 'Active', 'Rathna#!23', 'sdbgv.jpg'),
(47, 'Dinushaa', '2000dinusha.ranasinghe@gmail.com', 'Dinusha', 'Ranasinghe', '2000-01-29', 'Female', 'Single', '52/B, Newliyanka Rd, Matara', 705589644, 'Active', '2000Dinu$', 'userP.png'),
(48, 'ChandralathaVineetha', 'vinee123@gmail.com', 'Vineetha', 'Chandralatha', '1972-02-14', 'Female', 'Married', '28/C/1, Malwatta Rd, Trinco', 785412369, 'Active', 'VeChan&55', 'userP.png'),
(49, 'Ayesha', 'ayesha980@gmail.com', 'Ayesha', 'Fernando', '1995-10-02', 'Female', 'Single', '58, High level Rd, Ratnapura', 758412367, 'Active', 'Ayesha##88*', 'sdfdg56.jpg'),
(50, 'Nevil', 'nevilcolombo5656@gmail.com', 'Nevil', 'De Silva', '1998-07-26', 'Male', 'Single', '23/D/2, Anderson Rd, Negambo', 772584136, 'Active', 'Nevi$90DD', 'userP.png'),
(51, 'ChathuriP', 'chathuri234.peris@gmail.com', 'Chathurika', 'Peris', '1980-04-13', 'Female', 'Widowed', '34/F , Samanala Lake Rd,  Meegaswela , Palmadulla', 768945123, 'Active', 'Chathu%#689', 'userP.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
