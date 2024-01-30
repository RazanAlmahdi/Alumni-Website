-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 07:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnidatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `SID` varchar(9) NOT NULL,
  `type` varchar(10) NOT NULL,
  `activityID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dateBegin` date NOT NULL,
  `dateEnd` date NOT NULL,
  `location` varchar(20) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`SID`, `type`, `activityID`, `title`, `dateBegin`, `dateEnd`, `location`, `content`) VALUES
('S20106649', 'experience', 1, 'Lab Assistant', '2022-12-01', '2022-12-22', 'Effat University', 'Dr. Akila Lab Assistant'),
('S12102022', 'community', 2, 'Volunteer at Riyadh Season', '2022-12-01', '2022-12-08', 'Riyadh', 'Event Organization');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `CID` int(11) NOT NULL,
  `SID` varchar(9) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `agreement` tinyint(1) NOT NULL,
  `graduationyear` year(4) NOT NULL,
  `thesistitle` varchar(150) NOT NULL,
  `supervisor` varchar(50) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `country` varchar(20) NOT NULL,
  `job` varchar(50) NOT NULL,
  `postgrad` tinyint(1) NOT NULL,
  `community` tinyint(1) NOT NULL,
  `research` tinyint(1) NOT NULL,
  `effatemail` varchar(50) NOT NULL,
  `personalemail` varchar(50) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`CID`, `SID`, `firstname`, `lastname`, `phone`, `college`, `department`, `method`, `agreement`, `graduationyear`, `thesistitle`, `supervisor`, `published`, `country`, `job`, `postgrad`, `community`, `research`, `effatemail`, `personalemail`, `verified`, `comment`) VALUES
(1, 'S20106355', 'Layal', 'Ghiryani', '0532218219', 'College of Business', 'Marketing', 'come to university', 1, 2012, 'Finding dissemination via electronic word of mouth message for effective marketing communication ', 'Dr. AbdulAzziz Maktoum', 1, 'Saudi Arabia', 'Marketing agent at P&G', 0, 0, 0, 'l@effat.sa', 'layal@gmail.com', 0, ''),
(2, 'S20106649', 'Aicha', 'Sidiya', '0532760290', 'College of Engineering', 'Computer Science', 'online', 1, 2017, 'Artificial Intelligence and Reduced SMEs’ Business Risks. A Dynamic Capabilities Analysis During the COVID-19 Pandemic', 'Dr. Akila Sarirete', 1, 'France', 'None', 1, 0, 1, 'as@effat.sa', 'aicha@gmail.com', 0, ''),
(4, 'S12102022', 'Fatma', 'Sidiya', '0553210221', 'English and Translation', 'English and Translation', 'uni', 1, 2006, 'Writting', 'Dr. Khoudrou', 1, 'Bahrain', 'Working', 1, 1, 0, 'f@effat.sa', 'fatma@gmail.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `SID` char(9) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `effatemail` varchar(20) NOT NULL,
  `personalEmail` varchar(50) DEFAULT NULL,
  `graduationYear` year(4) DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `about` mediumtext DEFAULT NULL,
  `accType` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`SID`, `pass`, `firstName`, `lastName`, `phone`, `effatemail`, `personalEmail`, `graduationYear`, `college`, `department`, `about`, `accType`) VALUES
('@2052', '50ba9916ab3b54f93012e6a2acb48230', 'Amani', 'Ghandour', '0562341122', 'a@effat.sa', NULL, NULL, NULL, 'Student Affairs', NULL, 'admin'),
('S12102022', '38ab93488e52710515c3095a83a92bcf', 'Fatma', 'Sidiya', '0553210221', 'f@effat.sa', 'fatma@gmail.com', 2006, 'CollegeofHumanity', 'English', 'Work at Saudi Gazette', NULL),
('S20106355', 'c0df91798f282b534031e03eaceebe55', 'Layal', 'Ghiryani', '0532218219', 'l@effat.sa', 'layal@gmail.com', 2012, 'College of Business', 'Marketing', 'Experienced growth marketer with a background in sales and 5+ years experience growing conversion rates for a San Francisco mobile carrier. Seeking to leverage leadership excellence to raise KPIs for Symantec.', NULL),
('S20106649', 'a3b364443475e768f55fc7944b185749', 'Aicha', 'Sidiya', '0532760290', 'as@effat.sa', 'aicha@gmail.com', 2017, 'College of Engineering', 'Computer Science', 'Computer scientists interested in artificial intelligence, and research.', NULL),
('S20109223', '020e897d70679422c837bba4f3723793', 'Hanin', 'Alzaher', '0532760291', 'hanin@effat.sa', 'hanin@gmail.com', 2012, 'College of Architecture and Design', 'Architecture', 'Seeking position as design architect with AECOM. Designed 25+ multi-million dollar jobs for DDG. Received 15 client commendations.', NULL),
('S20109662', '360062f5a2874b4226a14006ef223124', 'Razan', 'AlMahdi', '0532765322', 'r@effat.sa', 'razan@gmail.com', 2009, 'College of Architecture and Design', 'Cinematic Art', 'Passionate Senior Producer experienced in Documentary and Independent Filmmaking. Adept in overseeing all aspects of production and effectively guiding production teams during the film process.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `phone`, `message`) VALUES
('Aicha Sidiya', 'aicha@gmail.com', '0553210221', 'Amazing Website!'),
('Razan', 'razan@gmail.com', '0532211901', 'Inspiring Alumni!'),
('Aicha Sidiya', 'aicha@gmail.com', '0553210221', 'Great Website!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `pass` (`pass`),
  ADD UNIQUE KEY `email` (`effatemail`),
  ADD UNIQUE KEY `personalEmail` (`personalEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
