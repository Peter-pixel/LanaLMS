-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 08:53 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `Username`, `Email`, `Password`) VALUES
(1, 'Trend', 'petertrend4798@gmail.com', 'Peter123'),
(2, 'Kennedy', 'kennedymutuma@gmail.com', 'Ken123');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `duedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `file`, `unit`, `duedate`) VALUES
(1, '60723-CAT__1__Nov___2021.pdf', 'Organisation management', '2022-01-12'),
(2, '28844-Assignment 3.pdf', 'Computer Security', '2022-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Created` varchar(255) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Name`, `Email`, `Created`, `Comment`) VALUES
(1, 'Peter Mwanzia', 'petermusau7669@gmail.com', '2022-01-04 11:22:40', 'It is a very good website'),
(2, 'Martin Mutua', 'operator-8@senstone.io', '2022-01-04 11:29:52', 'I am impressed'),
(3, 'kennedy mutuma', 'winstone@gmail.com', '2022-01-04 11:35:32', 'You are what I\'ve been looking for. This is great.');

-- --------------------------------------------------------

--
-- Table structure for table `comment_body`
--

CREATE TABLE `comment_body` (
  `id` int(255) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_body`
--

INSERT INTO `comment_body` (`id`, `content`) VALUES
(1, 'It is a very good website'),
(2, 'I am impressed'),
(3, 'You are what I\'ve been looking for. This is great.');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseId` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseId`, `Name`, `Code`) VALUES
(1, 'Organization Management', 'BCT2308'),
(2, 'BCT', 'VCGT:35687'),
(3, 'Simulation Modelling', 'JHHDG:345654');

-- --------------------------------------------------------

--
-- Table structure for table `grading`
--

CREATE TABLE `grading` (
  `id` int(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `learner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `InstructorId` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TelephoneNo` int(255) NOT NULL,
  `EmployeeNo` varchar(255) NOT NULL,
  `Unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`InstructorId`, `Name`, `Email`, `TelephoneNo`, `EmployeeNo`, `Unit`) VALUES
(4, 'kennedy mutuma', 'kennedymutuma@gmail.com', 786775432, 'SCM7688', 'Organisation management');

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE `learner` (
  `LearnerId` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TelephoneNo` int(255) NOT NULL,
  `RegistrationNo` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`LearnerId`, `Name`, `Email`, `TelephoneNo`, `RegistrationNo`, `Course`) VALUES
(1, 'Peter Mwanzia', 'petermusau7669@gmail', 797798449, '7669', 'BCT'),
(2, 'Martin Mutua', 'martowango@gmail.com', 767798894, 'Sct212', 'BCT');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `title` varchar(300) NOT NULL,
  `created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `created`) VALUES
(1, 'new banking tariffs', '2021-11-29 08:11:51'),
(2, 'The New Department chairman.', '2021-11-29 17:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `news_body`
--

CREATE TABLE `news_body` (
  `id` int(255) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_body`
--

INSERT INTO `news_body` (`id`, `body`) VALUES
(1, 'sweet christmas'),
(2, 'Dr. Martin Shikuku has been elected the new department chair starting January 2022. We hope for your cooperation during this new academic year.\r\nRegards Peter Mwanzia.');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `file`, `type`, `size`, `unit`) VALUES
(1, '93401-ExamCard-SCT212-0067_2017-01 Dec 2021.pdf', 'application/pdf', 58825, NULL),
(3, '68676-Final Report Seminar Presentations.pdf', 'application/pdf', 161085, 'Organisation management'),
(4, '31316-Concept of Human resource management.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 44902, 'Organisation management'),
(5, '75503-grasp.mp4', 'video/mp4', 3182337, 'Organisation management'),
(6, '588895-Lecture_4_transformation_Exercises.pdf', 'application/pdf', 774666, 'Computer Security'),
(7, '464087-Lecture 2 _ Project Appraisal.ppt', 'application/vnd.ms-powerpoint', 1308543, 'Computer Security');

-- --------------------------------------------------------

--
-- Table structure for table `submitassessment`
--

CREATE TABLE `submitassessment` (
  `id` int(11) NOT NULL,
  `learner` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submitassessment`
--

INSERT INTO `submitassessment` (`id`, `learner`, `file`, `unit`) VALUES
(1, 'Peter Mwanzia', '971908-CAT__1__Nov___2021.pdf', 'Organisation management'),
(2, 'Martin Muli', '196418-BCT 2409 Assignment 1.doc', 'Computer Security');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `UnitId` int(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Instructor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`UnitId`, `Name`, `Code`, `Course`, `Instructor`) VALUES
(1, 'Organisation management', 'BCT2308', 'BCT', 'kennedy mutuma'),
(2, 'Computer Security', 'BIT2231', 'Organization Management', 'kennedy mutuma'),
(3, 'Project Management', 'BCT2407', 'Organization Management', 'Catherine Kiilu'),
(4, 'Management Information Systems', 'BCT3456', 'BCT', 'Antony Mwangi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_body`
--
ALTER TABLE `comment_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseId`);

--
-- Indexes for table `grading`
--
ALTER TABLE `grading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`InstructorId`);

--
-- Indexes for table `learner`
--
ALTER TABLE `learner`
  ADD PRIMARY KEY (`LearnerId`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_body`
--
ALTER TABLE `news_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitassessment`
--
ALTER TABLE `submitassessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`UnitId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment_body`
--
ALTER TABLE `comment_body`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grading`
--
ALTER TABLE `grading`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `InstructorId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `learner`
--
ALTER TABLE `learner`
  MODIFY `LearnerId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_body`
--
ALTER TABLE `news_body`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submitassessment`
--
ALTER TABLE `submitassessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `UnitId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
