-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 04:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `feeinformation1`
--

CREATE TABLE `feeinformation1` (
  `id` int(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `RegistrationNo` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `receiptNo1` varchar(255) NOT NULL,
  `Date2` varchar(255) NOT NULL,
  `TutionFee1` int(255) NOT NULL,
  `StudentFund1` int(255) NOT NULL,
  `SecurityAmount` int(255) NOT NULL,
  `PDc` int(255) NOT NULL,
  `HostelCharges1` int(255) NOT NULL,
  `TotalAmount19` int(255) NOT NULL,
  `receiptNo2` varchar(255) NOT NULL,
  `Date29` varchar(255) NOT NULL,
  `TutionFee` int(255) NOT NULL,
  `TotalAmount234` int(255) NOT NULL,
  `TotalAmount1` int(255) NOT NULL,
  `receiptNo3` varchar(255) NOT NULL,
  `Date21` varchar(255) NOT NULL,
  `TutionFee11` int(255) NOT NULL,
  `StudentFund11` int(255) NOT NULL,
  `HostelCharges11` int(255) NOT NULL,
  `TotalAmount25` int(255) NOT NULL,
  `receiptNo4` varchar(255) NOT NULL,
  `Date28` varchar(255) NOT NULL,
  `TutionFee2` int(255) NOT NULL,
  `TotalAmount890` int(255) NOT NULL,
  `TotalAmount11` int(255) NOT NULL,
  `receiptNo5` varchar(255) NOT NULL,
  `Date31` varchar(255) NOT NULL,
  `TutionFee31` int(255) NOT NULL,
  `StudentFund31` int(255) NOT NULL,
  `HostelCharges31` int(255) NOT NULL,
  `TotalAmount31` int(255) NOT NULL,
  `receiptNo6` varchar(255) NOT NULL,
  `Date32` varchar(255) NOT NULL,
  `TutionFee3` int(255) NOT NULL,
  `TotalAmount120` int(255) NOT NULL,
  `TotalAmount345` int(255) NOT NULL,
  `grand` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feeinformation1`
--

INSERT INTO `feeinformation1` (`id`, `Year`, `StudentName`, `FatherName`, `RegistrationNo`, `Branch`, `receiptNo1`, `Date2`, `TutionFee1`, `StudentFund1`, `SecurityAmount`, `PDc`, `HostelCharges1`, `TotalAmount19`, `receiptNo2`, `Date29`, `TutionFee`, `TotalAmount234`, `TotalAmount1`, `receiptNo3`, `Date21`, `TutionFee11`, `StudentFund11`, `HostelCharges11`, `TotalAmount25`, `receiptNo4`, `Date28`, `TutionFee2`, `TotalAmount890`, `TotalAmount11`, `receiptNo5`, `Date31`, `TutionFee31`, `StudentFund31`, `HostelCharges31`, `TotalAmount31`, `receiptNo6`, `Date32`, `TutionFee3`, `TotalAmount120`, `TotalAmount345`, `grand`) VALUES
(40, '2021-22', 'SANDEEP   SINGH', 'arjun singh', '0010', 'Diploma in Mechanical Engineering', '00236', '2021-10-07', 12500, 0, 2000, 6000, 0, 20500, '00407', '2022-02-11', 12500, 12500, 33000, '', '', 0, 0, 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `SNo` int(255) NOT NULL,
  `Year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`SNo`, `Year`) VALUES
(1, '20'),
(2, '21'),
(3, '22'),
(4, '23'),
(5, '24'),
(6, '25'),
(7, '26'),
(8, '27'),
(9, '28'),
(10, '29'),
(11, '30'),
(12, '31'),
(13, '32'),
(12, '31'),
(13, '32'),
(14, '33'),
(15, '34'),
(16, '35'),
(17, '36'),
(18, '37'),
(19, '38'),
(20, '39'),
(21, '40'),
(20, '39'),
(21, '40'),
(22, '41'),
(23, '42'),
(24, '43'),
(25, '44'),
(26, '45'),
(27, '46'),
(28, '47'),
(29, '48'),
(30, '49'),
(31, '50');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `FromYear` int(255) NOT NULL,
  `ToYear` int(255) NOT NULL,
  `AdmissionNo1` varchar(255) NOT NULL,
  `AdmissionNo2` varchar(255) NOT NULL,
  `RegNo` varchar(255) NOT NULL,
  `JeepRank` int(255) NOT NULL,
  `JeepRollNo` int(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `TypeofEntry` varchar(255) NOT NULL,
  `TFW` varchar(255) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Middle Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Name in Hindi` varchar(255) NOT NULL,
  `Father Name` varchar(255) NOT NULL,
  `Father Name in Hindi` varchar(255) NOT NULL,
  `Mother Name` varchar(255) NOT NULL,
  `Mother Name in Hindi` varchar(255) NOT NULL,
  `Parents Mobile No` varchar(255) NOT NULL,
  `Date Of Birth` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Land Line No` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Marital Status` varchar(255) NOT NULL,
  `Blood Group` varchar(255) NOT NULL,
  `Type of Address` varchar(255) NOT NULL,
  `Physical Handicapped` varchar(255) NOT NULL,
  `Physical Handicapped Type` varchar(255) NOT NULL,
  `Identification Mark` varchar(255) NOT NULL,
  `Employment Detail` varchar(255) NOT NULL,
  `Family Annual Income` varchar(255) NOT NULL,
  `Aadhaar No` varchar(255) NOT NULL,
  `Correspondence City` varchar(255) NOT NULL,
  `Correspondence Street` varchar(255) NOT NULL,
  `Correspondence State` varchar(255) NOT NULL,
  `Correspondence District` varchar(255) NOT NULL,
  `Correspondence pincode` varchar(255) NOT NULL,
  `Permanent City` varchar(255) NOT NULL,
  `Permanent Street` varchar(255) NOT NULL,
  `Permanent State` varchar(255) NOT NULL,
  `Permanent District` varchar(255) NOT NULL,
  `Permanent Pincode` varchar(255) NOT NULL,
  `Bank Account Number` varchar(255) NOT NULL,
  `IFSC Code` varchar(255) NOT NULL,
  `Bank Name` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `School Name` varchar(255) NOT NULL,
  `Board` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Year of Passing` varchar(255) NOT NULL,
  `Type of Mark` varchar(255) NOT NULL,
  `Total Marks` int(255) NOT NULL,
  `Obtain Marks or CGPA` varchar(255) NOT NULL,
  `Percentage` int(255) NOT NULL,
  `DeclarationDate` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Profile Picture` varchar(255) NOT NULL,
  `Aadhaar Card Picture` varchar(255) NOT NULL,
  `HighSchoolMarksheetPicture` varchar(255) NOT NULL,
  `High School Certificate Picture` varchar(255) NOT NULL,
  `IntermediateMarksheetPicture` varchar(255) NOT NULL,
  `Intermediate Certificate Picture` varchar(255) NOT NULL,
  `Cast or EWS Certificate Picture` varchar(255) NOT NULL,
  `DomicileCertificate` varchar(255) NOT NULL,
  `TransferCertificate` varchar(255) NOT NULL,
  `Physical Disability Certificate Picture` varchar(255) NOT NULL,
  `Income Certificate Picture` varchar(255) NOT NULL,
  `CandidateSignature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`FromYear`, `ToYear`, `AdmissionNo1`, `AdmissionNo2`, `RegNo`, `JeepRank`, `JeepRollNo`, `Course`, `Semester`, `TypeofEntry`, `TFW`, `First Name`, `Middle Name`, `Last Name`, `Name in Hindi`, `Father Name`, `Father Name in Hindi`, `Mother Name`, `Mother Name in Hindi`, `Parents Mobile No`, `Date Of Birth`, `Email`, `Land Line No`, `Gender`, `Category`, `Marital Status`, `Blood Group`, `Type of Address`, `Physical Handicapped`, `Physical Handicapped Type`, `Identification Mark`, `Employment Detail`, `Family Annual Income`, `Aadhaar No`, `Correspondence City`, `Correspondence Street`, `Correspondence State`, `Correspondence District`, `Correspondence pincode`, `Permanent City`, `Permanent Street`, `Permanent State`, `Permanent District`, `Permanent Pincode`, `Bank Account Number`, `IFSC Code`, `Bank Name`, `Education`, `School Name`, `Board`, `Subject`, `Year of Passing`, `Type of Mark`, `Total Marks`, `Obtain Marks or CGPA`, `Percentage`, `DeclarationDate`, `username`, `Profile Picture`, `Aadhaar Card Picture`, `HighSchoolMarksheetPicture`, `High School Certificate Picture`, `IntermediateMarksheetPicture`, `Intermediate Certificate Picture`, `Cast or EWS Certificate Picture`, `DomicileCertificate`, `TransferCertificate`, `Physical Disability Certificate Picture`, `Income Certificate Picture`, `CandidateSignature`) VALUES
(21, 22, '2021-22', 'M', '0010', 0, 0, 'Diploma in Mechanical Engineering', 'Sem1', 'Direct Entry', '', 'SANDEEP ', '', 'SINGH', 'संदीप सिंह', 'arjun singh', 'अर्जुन सिंह', 'deepa devi', 'दीपा देवी', '9719638469', '2004-07-17', '', '9045072141', 'Male', 'GENERAL', 'Unmarried', '************* select blood status ***************', 'URBAN', 'NO', '', '', '', '24000', '510466476145', 'bhupenderpur,po lokmaniour', 'kotdwar', 'Uttarakhand', 'pauri garhwal', '246149', 'bhupenderpur,po lokmaniour', 'kotdwar', 'Uttarakhand', 'pauri garhwal', '246149', '', '', '', 'HighSchool', 'm k vidya niketan kanva ghati garhwal pauri ', 'cbse', 'hindi course-a, english comm. mathematics science social science', '2019', 'percent', 500, '242', 48, '2021-08-23', 'SATISH CHANDRA KANDPAL', 'upload/ProfilePicture/', 'upload/AadhaarCard/', 'upload/HighSchoolMarksheet/', 'upload/HighSchoolCertificate/', 'upload/IntermediateMarksheet/', 'upload/IntermediateCertificate/', 'upload/CastCertificate/', 'upload/DomicileCertificate/', 'upload/TransferCertificate/', 'upload/PhysicalDisabilityCertificate/', 'upload/IncomeCertificate/', 'upload/CandidateSignature/');

-- --------------------------------------------------------

--
-- Table structure for table `record1`
--

CREATE TABLE `record1` (
  `id` int(255) NOT NULL,
  `FromYear` int(255) NOT NULL,
  `ToYear` int(255) NOT NULL,
  `AdmissionNo1` varchar(255) NOT NULL,
  `AdmissionNo2` varchar(255) NOT NULL,
  `RegNo` varchar(255) NOT NULL,
  `Year` int(255) NOT NULL,
  `JeepRank` int(255) NOT NULL,
  `JeepRollNo` int(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `TypeofEntry` varchar(255) NOT NULL,
  `TFW` varchar(255) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Middle Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Name in Hindi` varchar(255) NOT NULL,
  `Father Name` varchar(255) NOT NULL,
  `Father Name in Hindi` varchar(255) NOT NULL,
  `Mother Name` varchar(255) NOT NULL,
  `Mother Name in Hindi` varchar(255) NOT NULL,
  `Parents Mobile No` varchar(255) NOT NULL,
  `Date Of Birth` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Land Line No` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Marital Status` varchar(255) NOT NULL,
  `Blood Group` varchar(255) NOT NULL,
  `Type of Address` varchar(255) NOT NULL,
  `Physical Handicapped` varchar(255) NOT NULL,
  `Physical Handicapped Type` varchar(255) NOT NULL,
  `Identification Mark` varchar(255) NOT NULL,
  `Employment Detail` varchar(255) NOT NULL,
  `Family Annual Income` varchar(255) NOT NULL,
  `Aadhaar No` varchar(255) NOT NULL,
  `Correspondence City` varchar(255) NOT NULL,
  `Correspondence Street` varchar(255) NOT NULL,
  `Correspondence State` varchar(255) NOT NULL,
  `Correspondence District` varchar(255) NOT NULL,
  `Correspondence pincode` varchar(255) NOT NULL,
  `Permanent City` varchar(255) NOT NULL,
  `Permanent Street` varchar(255) NOT NULL,
  `Permanent State` varchar(255) NOT NULL,
  `Permanent District` varchar(255) NOT NULL,
  `Permanent Pincode` varchar(255) NOT NULL,
  `Bank Account Number` varchar(255) NOT NULL,
  `IFSC Code` varchar(255) NOT NULL,
  `Bank Name` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `School Name` varchar(255) NOT NULL,
  `Board` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Year of Passing` varchar(255) NOT NULL,
  `Type of Mark` varchar(255) NOT NULL,
  `Total Marks` varchar(255) NOT NULL,
  `Obtain Marks or CGPA` varchar(255) NOT NULL,
  `Percentage` int(255) NOT NULL,
  `DeclarationDate` varchar(255) NOT NULL,
  `Admit Card Picture` varchar(255) NOT NULL,
  `AllotmentLetterPicture` varchar(255) NOT NULL,
  `Other Qualification Picture` varchar(255) NOT NULL,
  `Gap Affidavit Picture` varchar(255) NOT NULL,
  `Medical Certificate Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record1`
--

INSERT INTO `record1` (`id`, `FromYear`, `ToYear`, `AdmissionNo1`, `AdmissionNo2`, `RegNo`, `Year`, `JeepRank`, `JeepRollNo`, `Course`, `Semester`, `TypeofEntry`, `TFW`, `First Name`, `Middle Name`, `Last Name`, `Name in Hindi`, `Father Name`, `Father Name in Hindi`, `Mother Name`, `Mother Name in Hindi`, `Parents Mobile No`, `Date Of Birth`, `Email`, `Land Line No`, `Gender`, `Category`, `Marital Status`, `Blood Group`, `Type of Address`, `Physical Handicapped`, `Physical Handicapped Type`, `Identification Mark`, `Employment Detail`, `Family Annual Income`, `Aadhaar No`, `Correspondence City`, `Correspondence Street`, `Correspondence State`, `Correspondence District`, `Correspondence pincode`, `Permanent City`, `Permanent Street`, `Permanent State`, `Permanent District`, `Permanent Pincode`, `Bank Account Number`, `IFSC Code`, `Bank Name`, `Education`, `School Name`, `Board`, `Subject`, `Year of Passing`, `Type of Mark`, `Total Marks`, `Obtain Marks or CGPA`, `Percentage`, `DeclarationDate`, `Admit Card Picture`, `AllotmentLetterPicture`, `Other Qualification Picture`, `Gap Affidavit Picture`, `Medical Certificate Picture`) VALUES
(43, 21, 22, '2021-22', 'M', '0010', 1, 0, 0, 'Diploma in Mechanical Engineering', 'Sem1', 'Direct Entry', '', 'SANDEEP ', '', 'SINGH', 'संदीप सिंह', 'ARJUN SINGH', 'अर्जुन सिंह', 'DEEPA DEVI', 'दीपा देवी', '9719638469', '2004-07-17', '', '9045072141', 'Male', 'GENERAL', 'Unmarried', '************* select blood status ***************', 'URBAN', 'NO', '', '', '', '24000', '510466476145', 'bhupenderpur,po lokmaniour', 'kotdwar', 'Uttarakhand', 'pauri garhwal', '246149', 'bhupenderpur,po lokmaniour', 'kotdwar', 'Uttarakhand', 'pauri garhwal', '246149', '', '', '', 'HighSchool', 'm k vidya niketan kanva ghati garhwal pauri ', 'cbse', 'hindi course-a, english comm. mathematics science social science', '2019', 'percent', '500', '242', 48, '', 'upload/AdmitCard/', 'upload/AllotmentLetter/', 'upload/OtherQualification/', 'upload/GapAffidavit/', 'upload/MedicalCertificate/');

-- --------------------------------------------------------

--
-- Table structure for table `record2`
--

CREATE TABLE `record2` (
  `id` int(11) NOT NULL,
  `FromYear` int(255) NOT NULL,
  `ToYear` int(255) NOT NULL,
  `AdmissionNo1` varchar(255) NOT NULL,
  `AdmissionNo2` varchar(255) NOT NULL,
  `RegNo` varchar(255) NOT NULL,
  `Year` int(255) NOT NULL,
  `JeepRank` int(255) NOT NULL,
  `JeepRollNo` int(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `TypeofEntry` varchar(255) NOT NULL,
  `TFW` varchar(255) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Middle Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Name in Hindi` varchar(255) NOT NULL,
  `Father Name` varchar(255) NOT NULL,
  `Father Name in Hindi` varchar(255) NOT NULL,
  `Mother Name` varchar(255) NOT NULL,
  `Mother Name in Hindi` varchar(255) NOT NULL,
  `Parents Mobile No` varchar(255) NOT NULL,
  `Date Of Birth` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Land Line No` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Marital Status` varchar(255) NOT NULL,
  `Blood Group` varchar(255) NOT NULL,
  `Type of Address` varchar(255) NOT NULL,
  `Physical Handicapped` varchar(255) NOT NULL,
  `Physical Handicapped Type` varchar(255) NOT NULL,
  `Identification Mark` varchar(255) NOT NULL,
  `Employment Detail` varchar(255) NOT NULL,
  `Family Annual Income` varchar(255) NOT NULL,
  `Aadhaar No` varchar(255) NOT NULL,
  `Correspondence City` varchar(255) NOT NULL,
  `Correspondence Street` varchar(255) NOT NULL,
  `Correspondence State` varchar(255) NOT NULL,
  `Correspondence District` varchar(255) NOT NULL,
  `Correspondence pincode` varchar(255) NOT NULL,
  `Permanent City` varchar(255) NOT NULL,
  `Permanent Street` varchar(255) NOT NULL,
  `Permanent State` varchar(255) NOT NULL,
  `Permanent District` varchar(255) NOT NULL,
  `Permanent Pincode` varchar(255) NOT NULL,
  `Bank Account Number` varchar(255) NOT NULL,
  `IFSC Code` varchar(255) NOT NULL,
  `Bank Name` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `School Name` varchar(255) NOT NULL,
  `Board` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Year of Passing` varchar(255) NOT NULL,
  `Type of Mark` varchar(255) NOT NULL,
  `Total Marks` varchar(255) NOT NULL,
  `Obtain Marks or CGPA` varchar(255) NOT NULL,
  `Percentage` int(255) NOT NULL,
  `DeclarationDate` varchar(255) NOT NULL,
  `Admit Card Picture` varchar(255) NOT NULL,
  `Allotment Letter Picture` varchar(255) NOT NULL,
  `Other Qualification Picture` varchar(255) NOT NULL,
  `Gap Affidavit Picture` varchar(255) NOT NULL,
  `Medical Certificate Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `record3`
--

CREATE TABLE `record3` (
  `id` int(11) NOT NULL,
  `FromYear` int(255) NOT NULL,
  `ToYear` int(255) NOT NULL,
  `AdmissionNo1` varchar(255) NOT NULL,
  `AdmissionNo2` varchar(255) NOT NULL,
  `RegNo` varchar(255) NOT NULL,
  `Year` int(255) NOT NULL,
  `JeepRank` int(255) NOT NULL,
  `JeepRollNo` int(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `TypeofEntry` varchar(255) NOT NULL,
  `TFW` varchar(255) NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Middle Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Name in Hindi` varchar(255) NOT NULL,
  `Father Name` varchar(255) NOT NULL,
  `Father Name in Hindi` varchar(255) NOT NULL,
  `Mother Name` varchar(255) NOT NULL,
  `Mother Name in Hindi` varchar(255) NOT NULL,
  `Parents Mobile No` varchar(255) NOT NULL,
  `Date Of Birth` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Land Line No` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Marital Status` varchar(255) NOT NULL,
  `Blood Group` varchar(255) NOT NULL,
  `Type of Address` varchar(255) NOT NULL,
  `Physical Handicapped` varchar(255) NOT NULL,
  `Physical Handicapped Type` varchar(255) NOT NULL,
  `Identification Mark` varchar(255) NOT NULL,
  `Employment Detail` varchar(255) NOT NULL,
  `Family Annual Income` varchar(255) NOT NULL,
  `Aadhaar No` varchar(255) NOT NULL,
  `Correspondence City` varchar(255) NOT NULL,
  `Correspondence Street` varchar(255) NOT NULL,
  `Correspondence State` varchar(255) NOT NULL,
  `Correspondence District` varchar(255) NOT NULL,
  `Correspondence pincode` varchar(255) NOT NULL,
  `Permanent City` varchar(255) NOT NULL,
  `Permanent Street` varchar(255) NOT NULL,
  `Permanent State` varchar(255) NOT NULL,
  `Permanent District` varchar(255) NOT NULL,
  `Permanent Pincode` varchar(255) NOT NULL,
  `Bank Account Number` varchar(255) NOT NULL,
  `IFSC Code` varchar(255) NOT NULL,
  `Bank Name` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `School Name` varchar(255) NOT NULL,
  `Board` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Year of Passing` varchar(255) NOT NULL,
  `Type of Mark` varchar(255) NOT NULL,
  `Total Marks` varchar(255) NOT NULL,
  `Obtain Marks or CGPA` varchar(255) NOT NULL,
  `Percentage` int(255) NOT NULL,
  `DeclarationDate` varchar(255) NOT NULL,
  `Admit Card Picture` varchar(255) NOT NULL,
  `Allotment Letter Picture` varchar(255) NOT NULL,
  `Other Qualification Picture` varchar(255) NOT NULL,
  `Gap Affidavit Picture` varchar(255) NOT NULL,
  `Medical Certificate Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `StudentName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `RegistrationNo` varchar(255) NOT NULL,
  `RollNo` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `max1` int(255) NOT NULL,
  `obtained1` int(255) NOT NULL,
  `max11` int(255) NOT NULL,
  `obtained11` int(255) NOT NULL,
  `total12` int(255) NOT NULL,
  `max2` int(255) NOT NULL,
  `obtained2` int(255) NOT NULL,
  `max21` int(255) NOT NULL,
  `obtained21` int(255) NOT NULL,
  `total22` int(255) NOT NULL,
  `max3` int(255) NOT NULL,
  `obtained3` int(255) NOT NULL,
  `max31` int(255) NOT NULL,
  `obtained32` int(255) NOT NULL,
  `total33` int(255) NOT NULL,
  `max4` int(255) NOT NULL,
  `obtained4` int(255) NOT NULL,
  `max41` int(255) NOT NULL,
  `obtained42` int(255) NOT NULL,
  `total43` int(255) NOT NULL,
  `max5` int(255) NOT NULL,
  `obtained5` int(255) NOT NULL,
  `max51` int(255) NOT NULL,
  `obtained52` int(255) NOT NULL,
  `total53` int(255) NOT NULL,
  `max6` int(255) NOT NULL,
  `obtained6` int(255) NOT NULL,
  `max61` int(255) NOT NULL,
  `obtained62` int(255) NOT NULL,
  `total63` int(255) NOT NULL,
  `max7` int(255) NOT NULL,
  `obtained7` int(255) NOT NULL,
  `max71` int(255) NOT NULL,
  `obtained72` int(255) NOT NULL,
  `total73` int(255) NOT NULL,
  `max8` int(255) NOT NULL,
  `obtained8` int(255) NOT NULL,
  `max81` int(255) NOT NULL,
  `obtained82` int(255) NOT NULL,
  `total83` int(255) NOT NULL,
  `max9` int(255) NOT NULL,
  `obtained9` int(255) NOT NULL,
  `max91` int(255) NOT NULL,
  `obtained92` int(255) NOT NULL,
  `total93` int(255) NOT NULL,
  `grandtotal` int(255) NOT NULL,
  `percentage112` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem1m`
--

CREATE TABLE `sem1m` (
  `StudentName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `RegistrationNo` varchar(255) NOT NULL,
  `RollNo` int(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `max1m` int(255) NOT NULL,
  `obtained1m` int(255) NOT NULL,
  `max11m` int(255) NOT NULL,
  `obtained11m` int(255) NOT NULL,
  `total12m` int(255) NOT NULL,
  `max2m` int(11) NOT NULL,
  `obtained2m` int(255) NOT NULL,
  `max21m` int(255) NOT NULL,
  `obtained21m` int(255) NOT NULL,
  `total22m` int(255) NOT NULL,
  `max3m` int(255) NOT NULL,
  `obtained3m` int(255) NOT NULL,
  `max31m` int(255) NOT NULL,
  `obtained32m` int(255) NOT NULL,
  `total33m` int(255) NOT NULL,
  `max4m` int(255) NOT NULL,
  `obtained4m` int(255) NOT NULL,
  `max41m` int(255) NOT NULL,
  `obtained42m` int(255) NOT NULL,
  `total43m` int(255) NOT NULL,
  `max5m` int(255) NOT NULL,
  `obtained5m` int(11) NOT NULL,
  `max51m` int(255) NOT NULL,
  `obtained52m` int(255) NOT NULL,
  `total53m` int(255) NOT NULL,
  `max6m` int(255) NOT NULL,
  `obtained6m` int(255) NOT NULL,
  `max61m` int(255) NOT NULL,
  `obtained62m` int(255) NOT NULL,
  `total63m` int(255) NOT NULL,
  `max7m` int(255) NOT NULL,
  `obtained7m` int(255) NOT NULL,
  `max71m` int(255) NOT NULL,
  `obtained72m` int(255) NOT NULL,
  `total73m` int(255) NOT NULL,
  `max8m` int(255) NOT NULL,
  `obtained8m` int(255) NOT NULL,
  `max81m` int(255) NOT NULL,
  `obtained82m` int(255) NOT NULL,
  `total83m` int(255) NOT NULL,
  `max9m` int(255) NOT NULL,
  `obtained9m` int(255) NOT NULL,
  `max91m` int(255) NOT NULL,
  `obtained92m` int(255) NOT NULL,
  `total93m` int(255) NOT NULL,
  `grandtotalm` int(255) NOT NULL,
  `percentage112m` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `StudentName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `RegistrationNo` varchar(255) NOT NULL,
  `RollNo` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `max11` int(255) NOT NULL,
  `obtained11` int(255) NOT NULL,
  `max111` int(255) NOT NULL,
  `obtained111` int(255) NOT NULL,
  `total121` int(255) NOT NULL,
  `max21` int(255) NOT NULL,
  `obtained21` int(255) NOT NULL,
  `max211` int(255) NOT NULL,
  `obtained211` int(255) NOT NULL,
  `total221` int(255) NOT NULL,
  `max31` int(11) NOT NULL,
  `obtained31` int(255) NOT NULL,
  `max311` int(255) NOT NULL,
  `obtained321` int(255) NOT NULL,
  `total331` int(255) NOT NULL,
  `max41` int(255) NOT NULL,
  `obtained41` int(255) NOT NULL,
  `max411` int(255) NOT NULL,
  `obtained421` int(255) NOT NULL,
  `total431` int(255) NOT NULL,
  `max51` int(255) NOT NULL,
  `obtained51` int(255) NOT NULL,
  `max511` int(255) NOT NULL,
  `obtained521` int(255) NOT NULL,
  `total531` int(255) NOT NULL,
  `max61` int(255) NOT NULL,
  `obtained61` int(11) NOT NULL,
  `max611` int(255) NOT NULL,
  `obtained621` int(255) NOT NULL,
  `total631` int(255) NOT NULL,
  `max71` int(255) NOT NULL,
  `obtained71` int(255) NOT NULL,
  `max711` int(255) NOT NULL,
  `obtained721` int(255) NOT NULL,
  `total731` int(11) NOT NULL,
  `max81` int(255) NOT NULL,
  `obtained81` int(255) NOT NULL,
  `max811` int(255) NOT NULL,
  `obtained821` int(255) NOT NULL,
  `total831` int(255) NOT NULL,
  `max91` int(255) NOT NULL,
  `obtained91` int(255) NOT NULL,
  `max911` int(11) NOT NULL,
  `obtained921` int(255) NOT NULL,
  `total931` int(255) NOT NULL,
  `grandtotal1` int(255) NOT NULL,
  `percentage1121` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem2m`
--

CREATE TABLE `sem2m` (
  `StudentName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `RegistrationNo` varchar(255) NOT NULL,
  `RollNo` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `max11m` int(255) NOT NULL,
  `obtained11m` int(255) NOT NULL,
  `max111m` int(255) NOT NULL,
  `obtained111m` int(255) NOT NULL,
  `total121m` int(255) NOT NULL,
  `max21m` int(255) NOT NULL,
  `obtained21m` int(255) NOT NULL,
  `max211m` int(255) NOT NULL,
  `obtained211m` int(255) NOT NULL,
  `total221m` int(255) NOT NULL,
  `max31m` int(255) NOT NULL,
  `obtained31m` int(255) NOT NULL,
  `max311m` int(255) NOT NULL,
  `obtained321m` int(255) NOT NULL,
  `total331m` int(255) NOT NULL,
  `max41m` int(255) NOT NULL,
  `obtained41m` int(255) NOT NULL,
  `max411m` int(255) NOT NULL,
  `obtained421m` int(255) NOT NULL,
  `total431m` int(255) NOT NULL,
  `max51m` int(255) NOT NULL,
  `obtained51m` int(255) NOT NULL,
  `max511m` int(255) NOT NULL,
  `obtained521m` int(255) NOT NULL,
  `total531m` int(255) NOT NULL,
  `max61m` int(255) NOT NULL,
  `obtained61m` int(255) NOT NULL,
  `max611m` int(255) NOT NULL,
  `obtained621m` int(255) NOT NULL,
  `total631m` int(255) NOT NULL,
  `max71m` int(255) NOT NULL,
  `obtained71m` int(255) NOT NULL,
  `max711m` int(255) NOT NULL,
  `obtained721m` int(255) NOT NULL,
  `total731m` int(255) NOT NULL,
  `max81m` int(255) NOT NULL,
  `obtained81m` int(255) NOT NULL,
  `max811m` int(255) NOT NULL,
  `obtained821m` int(255) NOT NULL,
  `total831m` int(255) NOT NULL,
  `max91m` int(255) NOT NULL,
  `obtained91m` int(255) NOT NULL,
  `max911m` int(255) NOT NULL,
  `obtained921m` int(255) NOT NULL,
  `total931m` int(255) NOT NULL,
  `grandtotal1m` int(255) NOT NULL,
  `percentage1121m` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `StudentName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `RegistrationNo` varchar(255) NOT NULL,
  `RollNo` int(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `max11` int(255) NOT NULL,
  `obtained11` int(255) NOT NULL,
  `max111` int(255) NOT NULL,
  `obtained111` int(255) NOT NULL,
  `total121` int(255) NOT NULL,
  `max21` int(255) NOT NULL,
  `obtained21` int(255) NOT NULL,
  `max211` int(255) NOT NULL,
  `obtained211` int(255) NOT NULL,
  `total221` int(255) NOT NULL,
  `max31` int(255) NOT NULL,
  `obtained31` int(255) NOT NULL,
  `max311` int(255) NOT NULL,
  `obtained321` int(255) NOT NULL,
  `total331` int(255) NOT NULL,
  `max41` int(255) NOT NULL,
  `obtained41` int(255) NOT NULL,
  `max411` int(255) NOT NULL,
  `obtained421` int(255) NOT NULL,
  `total431` int(255) NOT NULL,
  `max51` int(255) NOT NULL,
  `obtained51` int(255) NOT NULL,
  `max511` int(255) NOT NULL,
  `obtained521` int(255) NOT NULL,
  `total531` int(255) NOT NULL,
  `max61` int(255) NOT NULL,
  `obtained61` int(255) NOT NULL,
  `max611` int(255) NOT NULL,
  `obtained621` int(255) NOT NULL,
  `total631` int(255) NOT NULL,
  `max71` int(255) NOT NULL,
  `obtained71` int(255) NOT NULL,
  `max711` int(255) NOT NULL,
  `obtained721` int(255) NOT NULL,
  `total731` int(255) NOT NULL,
  `max91` int(255) NOT NULL,
  `obtained91` int(255) NOT NULL,
  `max911` int(11) NOT NULL,
  `obtained921` int(255) NOT NULL,
  `total931` int(255) NOT NULL,
  `grandtotal1` int(255) NOT NULL,
  `percentage1121` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem3m`
--

CREATE TABLE `sem3m` (
  `StudentName` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `RegistrationNo` varchar(255) NOT NULL,
  `RollNo` int(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `max11m` int(255) NOT NULL,
  `obtained11m` int(255) NOT NULL,
  `max111m` int(255) NOT NULL,
  `obtained111m` int(255) NOT NULL,
  `total121m` int(255) NOT NULL,
  `max21m` int(255) NOT NULL,
  `obtained21m` int(255) NOT NULL,
  `max211m` int(255) NOT NULL,
  `obtained211m` int(255) NOT NULL,
  `total221m` int(255) NOT NULL,
  `max31m` int(255) NOT NULL,
  `obtained31m` int(255) NOT NULL,
  `max311m` int(255) NOT NULL,
  `obtained321m` int(255) NOT NULL,
  `total331m` int(255) NOT NULL,
  `max41m` int(255) NOT NULL,
  `obtained41m` int(255) NOT NULL,
  `max411m` int(255) NOT NULL,
  `obtained421m` int(255) NOT NULL,
  `total431m` int(255) NOT NULL,
  `max51m` int(255) NOT NULL,
  `obtained51m` int(255) NOT NULL,
  `max511m` int(255) NOT NULL,
  `obtained521m` int(255) NOT NULL,
  `total531m` int(255) NOT NULL,
  `max61m` int(255) NOT NULL,
  `obtained61m` int(255) NOT NULL,
  `max611m` int(255) NOT NULL,
  `obtained621m` int(255) NOT NULL,
  `total631m` int(255) NOT NULL,
  `max81m` int(255) NOT NULL,
  `obtained81m` int(255) NOT NULL,
  `max811m` int(255) NOT NULL,
  `obtained821m` int(255) NOT NULL,
  `total831m` int(255) NOT NULL,
  `grandtotal1m` int(255) NOT NULL,
  `percentage1121m` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userregis`
--

CREATE TABLE `userregis` (
  `ID` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregis`
--

INSERT INTO `userregis` (`ID`, `firstname`, `email`, `password`) VALUES
(3, 'SATISH CHANDRA KANDPAL', 'estc.satish@gmail.com', 'Anushri@123');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `S.No` int(11) NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`S.No`, `Year`) VALUES
(1, 1990),
(2, 1991),
(3, 1992),
(4, 1993),
(5, 1994),
(6, 1995),
(7, 1996),
(8, 1997),
(9, 1998),
(10, 1999),
(11, 2000),
(12, 2001),
(13, 2002),
(14, 2003),
(15, 2004),
(16, 2005),
(17, 2006),
(18, 2007),
(19, 2008),
(20, 2009),
(21, 2010),
(22, 2011),
(23, 2012),
(24, 2013),
(25, 2014),
(26, 2015),
(27, 2016),
(28, 2017),
(29, 2018),
(30, 2019),
(31, 2020),
(32, 2021),
(33, 2022),
(34, 2023),
(35, 2024),
(36, 2025),
(37, 2026),
(38, 2027),
(39, 2028),
(40, 2029),
(41, 2030),
(42, 2031),
(43, 2032),
(44, 2033),
(45, 2034),
(46, 2035),
(47, 2036),
(48, 2037),
(49, 2038),
(50, 2039),
(51, 2040),
(52, 2041),
(53, 2042),
(54, 2043),
(55, 2044),
(56, 2045),
(57, 2046),
(58, 2047),
(59, 2048),
(60, 2049),
(61, 2050);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feeinformation1`
--
ALTER TABLE `feeinformation1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record1`
--
ALTER TABLE `record1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record2`
--
ALTER TABLE `record2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record3`
--
ALTER TABLE `record3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregis`
--
ALTER TABLE `userregis`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feeinformation1`
--
ALTER TABLE `feeinformation1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `record1`
--
ALTER TABLE `record1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `record2`
--
ALTER TABLE `record2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `record3`
--
ALTER TABLE `record3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userregis`
--
ALTER TABLE `userregis`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
