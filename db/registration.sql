-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 09:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `ApplicantId` int(11) NOT NULL,
  `ApplicantName` varchar(250) NOT NULL,
  `EmailAddress` varchar(250) NOT NULL,
  `DivisionID` int(11) DEFAULT NULL,
  `DistrictId` int(11) DEFAULT NULL,
  `UpazilaId` int(11) DEFAULT NULL,
  `AddressDetails` varchar(250) NOT NULL,
  `Language` varchar(250) NOT NULL,
  `Photo` varchar(250) NOT NULL,
  `Attachment` varchar(250) NOT NULL,
  `CreatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applicanteducation`
--

CREATE TABLE `applicanteducation` (
  `EducationId` int(11) NOT NULL,
  `ExamId` int(11) DEFAULT NULL,
  `Universityid` int(11) DEFAULT NULL,
  `BoardId` int(11) DEFAULT NULL,
  `ApplicantId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applicanttraining`
--

CREATE TABLE `applicanttraining` (
  `TrainingId` int(11) NOT NULL,
  `TrainingName` varchar(250) NOT NULL,
  `TrainingDetails` varchar(250) NOT NULL,
  `ApplicantId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `BoardId` int(11) NOT NULL,
  `BoardName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`BoardId`, `BoardName`) VALUES
(1, 'Dhaka'),
(2, 'Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DistrictId` int(11) NOT NULL,
  `DistrictName` varchar(255) NOT NULL,
  `DivisionID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistrictId`, `DistrictName`, `DivisionID`) VALUES
(1, 'Narsingdi', 1),
(2, 'Kisoregonj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `DivisionID` int(11) NOT NULL,
  `DivisionName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`DivisionID`, `DivisionName`) VALUES
(1, 'Dhaka'),
(2, 'Cummila');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ExamId` int(11) NOT NULL,
  `ExamName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ExamId`, `ExamName`) VALUES
(1, 'S.S.C'),
(2, 'H.S.C'),
(3, 'B.B.S'),
(4, 'M.B.S');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `UniversityId` int(11) NOT NULL,
  `UniversityName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`UniversityId`, `UniversityName`) VALUES
(1, 'Dhaka University'),
(2, 'Khulna University');

-- --------------------------------------------------------

--
-- Table structure for table `upazila`
--

CREATE TABLE `upazila` (
  `UpazilaId` int(11) NOT NULL,
  `UpazilaName` varchar(255) NOT NULL,
  `DistrictId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upazila`
--

INSERT INTO `upazila` (`UpazilaId`, `UpazilaName`, `DistrictId`) VALUES
(1, 'Shibpur', 1),
(2, 'Monohordi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`ApplicantId`),
  ADD KEY `DivisionID` (`DivisionID`),
  ADD KEY `DistrictId` (`DistrictId`),
  ADD KEY `UpazilaId` (`UpazilaId`);

--
-- Indexes for table `applicanteducation`
--
ALTER TABLE `applicanteducation`
  ADD PRIMARY KEY (`EducationId`),
  ADD KEY `ExamId` (`ExamId`),
  ADD KEY `Universityid` (`Universityid`),
  ADD KEY `BoardId` (`BoardId`),
  ADD KEY `ApplicantId` (`ApplicantId`);

--
-- Indexes for table `applicanttraining`
--
ALTER TABLE `applicanttraining`
  ADD PRIMARY KEY (`TrainingId`),
  ADD KEY `ApplicantId` (`ApplicantId`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`BoardId`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DistrictId`),
  ADD KEY `DivisionID` (`DivisionID`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`DivisionID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ExamId`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`UniversityId`);

--
-- Indexes for table `upazila`
--
ALTER TABLE `upazila`
  ADD PRIMARY KEY (`UpazilaId`),
  ADD KEY `DistrictId` (`DistrictId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `ApplicantId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicanteducation`
--
ALTER TABLE `applicanteducation`
  MODIFY `EducationId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicanttraining`
--
ALTER TABLE `applicanttraining`
  MODIFY `TrainingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `BoardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DistrictId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `DivisionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `ExamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `UniversityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upazila`
--
ALTER TABLE `upazila`
  MODIFY `UpazilaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`DivisionID`) REFERENCES `division` (`DivisionID`),
  ADD CONSTRAINT `applicant_ibfk_2` FOREIGN KEY (`DistrictId`) REFERENCES `district` (`DistrictId`),
  ADD CONSTRAINT `applicant_ibfk_3` FOREIGN KEY (`UpazilaId`) REFERENCES `upazila` (`UpazilaId`);

--
-- Constraints for table `applicanteducation`
--
ALTER TABLE `applicanteducation`
  ADD CONSTRAINT `applicanteducation_ibfk_1` FOREIGN KEY (`ExamId`) REFERENCES `exam` (`ExamId`),
  ADD CONSTRAINT `applicanteducation_ibfk_2` FOREIGN KEY (`Universityid`) REFERENCES `university` (`Universityid`),
  ADD CONSTRAINT `applicanteducation_ibfk_3` FOREIGN KEY (`BoardId`) REFERENCES `board` (`BoardId`),
  ADD CONSTRAINT `applicanteducation_ibfk_4` FOREIGN KEY (`ApplicantId`) REFERENCES `applicant` (`ApplicantId`);

--
-- Constraints for table `applicanttraining`
--
ALTER TABLE `applicanttraining`
  ADD CONSTRAINT `applicanttraining_ibfk_1` FOREIGN KEY (`ApplicantId`) REFERENCES `applicant` (`ApplicantId`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`DivisionID`) REFERENCES `division` (`DivisionID`);

--
-- Constraints for table `upazila`
--
ALTER TABLE `upazila`
  ADD CONSTRAINT `upazila_ibfk_1` FOREIGN KEY (`DistrictId`) REFERENCES `district` (`DistrictId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
