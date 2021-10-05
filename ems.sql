-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 04:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ID` int(11) NOT NULL,
  `empId` varchar(255) NOT NULL,
  `empName` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `currentAddress` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `maritalStatus` varchar(255) NOT NULL,
  `familyMember` varchar(255) NOT NULL,
  `permanentAddress` varchar(255) NOT NULL,
  `emContactPerson` varchar(255) NOT NULL,
  `emRelation` varchar(255) NOT NULL,
  `emContact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`ID`, `empId`, `empName`, `designation`, `department`, `contact`, `eMail`, `currentAddress`, `dateOfBirth`, `gender`, `maritalStatus`, `familyMember`, `permanentAddress`, `emContactPerson`, `emRelation`, `emContact`) VALUES
(18, 'EM0254', 'Abhinay Narayan Singh', 'CEO, Director', 'Top Management', '879 567 5599', 'abhinaysingh@gmail.com', 'Aashirvad Niketan, Seer Goverdhanpur, Varanasi - 221011', '2001-06-22', 'MALE', 'Not_Married', 'Sanjay Singh', 'Aashirvad Niketan, Seer Goverdhanpur, Varanasi - 221011', 'Sanjay Singh', 'Father', '9305196252'),
(27, 'ADIX910', 'Aditya Raj singh', 'HR,Manager', 'HR', '9594925206', 'Aityarj2004@gmail.com', ' Seer Goverdhanpur, Varanasi - 221011', '2004-03-18', 'MALE', 'unfortunately single', 'MR singh', ' Seer Goverdhanpur, Varanasi-221005', 'DIL valo do ek', 'GIrlfriend', 'DIL valo do ek');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `nameF` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `nameF`, `email`, `rating`, `timeStamp`) VALUES
(4, 'Abhinay Singh', 'abhi8795675599@gmail.com', 5, '2021-07-17 17:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `userName`, `pwd`) VALUES
(2, 'Abhinay', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
