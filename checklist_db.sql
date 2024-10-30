-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 26, 2024 at 12:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checklist_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `firstyr_1stsem`
--

CREATE TABLE `firstyr_1stsem` (
  `id` int(50) NOT NULL,
  `firstyr_1stsem_id` int(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit_unit` int(50) NOT NULL,
  `contact_hrs` int(50) NOT NULL,
  `pre_quisite` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `finalgrade` varchar(50) NOT NULL,
  `firstyr_1stsem_prof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firstyr_1stsem`
--

INSERT INTO `firstyr_1stsem` (`id`, `firstyr_1stsem_id`, `course_code`, `course_name`, `credit_unit`, `contact_hrs`, `pre_quisite`, `semester`, `finalgrade`, `firstyr_1stsem_prof`) VALUES
(1, 202211800, 'GNED 02', 'Ethics', 3, 3, '', '1st Sem', '1.25', 'Frederick H. Agunod'),
(2, 202211800, 'GNED 05', 'Purposive Communication', 3, 3, '', '1st Sem', '1.75', 'Ronald B. Torres'),
(3, 202211800, 'GNED 11', 'Kontesktwalisadong Komunikasyon sa Filipino', 3, 3, '', '1st Sem', '1.25', 'Castillo'),
(4, 202211800, 'COSC 50', 'Discrete Structures 1', 3, 3, '', '1st Sem', '2.00', 'Aida Penson'),
(5, 202211800, 'DCIT 21', 'Introduction to Computing', 3, 8, '', '1st Sem', '2.00', 'Jhon Joebert Rosal'),
(6, 202211800, 'DCIT 22', 'Computer Programming 1', 3, 4, '', '1st Sem', '2.00', 'Edan A. Belgica'),
(7, 202211800, 'FITT 1', 'Movement Enhancement', 3, 3, '', '1st Sem', '1.75', 'Romel John Jamito'),
(8, 202211800, 'NSTP 1', 'National Service Training Program 1', 2, 2, '', '1st Sem', '1.75', 'Mildred Valdepena'),
(9, 202211800, 'CVSU 101', 'Institutional Orientation', 1, 1, '', '1st Sem', 'S', '');

-- --------------------------------------------------------

--
-- Table structure for table `firstyr_2ndsem`
--

CREATE TABLE `firstyr_2ndsem` (
  `id` int(50) NOT NULL,
  `firstyr_2ndsem_id` int(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `credit_unit` int(50) NOT NULL,
  `contact_hrs` int(50) NOT NULL,
  `pre_quisite` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `finalgrade` text NOT NULL,
  `firstyr_2ndsem_prof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firstyr_2ndsem`
--

INSERT INTO `firstyr_2ndsem` (`id`, `firstyr_2ndsem_id`, `course_code`, `course_name`, `credit_unit`, `contact_hrs`, `pre_quisite`, `semester`, `finalgrade`, `firstyr_2ndsem_prof`) VALUES
(9, 202211800, 'GNED 01', 'Art Appreciation', 3, 3, '', '2nd Sem', '1.75', 'Perlado'),
(10, 202211800, 'GNED 03', 'Mathematics in the Modern World', 3, 3, '', '2nd Sem', '2.25', 'Manozo'),
(11, 202211800, 'GNED 06', 'Science, Technology and Society', 3, 3, '', '2nd Sem', '1.50', 'Paul Montejar'),
(12, 202211800, 'GNED 12', 'Dalumat Ng/Sa Filipino', 3, 3, 'GNED 11', '2nd Sem', '1.25', 'Castillo'),
(13, 202211800, 'DCIT 23', 'Computer Programming II', 3, 7, 'DCIT 22', '2nd Sem', '1.75', 'Ryan E. Roy'),
(14, 202211800, 'ITEC 50', 'Web Systems and Technologies', 3, 5, 'DCIT 21', '2nd Sem', '1.25', 'Castillo'),
(15, 202211800, 'FITT 2', 'Fitness Exercises', 2, 2, 'FITT 1', '2nd Sem', '1.50', 'Jove Ann Tatad'),
(16, 202211800, 'NSTP 2', 'National Service Training Program 2', 3, 3, 'NSTP 1', '2nd Sem', '', 'Zannie');

-- --------------------------------------------------------

--
-- Table structure for table `secondyr_1stsem`
--

CREATE TABLE `secondyr_1stsem` (
  `id` int(50) NOT NULL,
  `secondyr_1stsem_id` int(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `credit_unit` int(50) NOT NULL,
  `contact_hrs` int(50) NOT NULL,
  `pre_quisite` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `finalgrade` varchar(50) NOT NULL,
  `secondyr_1stsem_prof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secondyr_1stsem`
--

INSERT INTO `secondyr_1stsem` (`id`, `secondyr_1stsem_id`, `course_code`, `course_name`, `credit_unit`, `contact_hrs`, `pre_quisite`, `semester`, `finalgrade`, `secondyr_1stsem_prof`) VALUES
(17, 202211800, 'GNED 04', 'Mga Babasahin Hinggil sa Kasaysayan ng Pilipino', 3, 3, '', '1st Sem', '1.75', 'Sambrano'),
(18, 202211800, 'MATH 1', 'Analytic Geometry', 3, 3, 'GNED 03', '1st Sem', '2.00', 'Castillo'),
(19, 202211800, 'COSC 55', 'Discrete Structures II', 3, 3, 'COSC 50', '1st Sem', '2,00', 'Manozo'),
(20, 202211800, 'COSC 60', 'Digital Logic Design', 3, 3, 'COSC 50, DCIT 23', '1st Sem', '1.50', 'Nati'),
(21, 202211800, 'DCIT 50', 'Object Oriented Programming', 3, 5, 'DCIT 23', '1st Sem', '2.25', 'Edan Belgica'),
(22, 202211800, 'DCIT 24', 'Information Management', 3, 5, 'DCIT 23', '1st Sem', '1.75', 'Redem Decipulo'),
(23, 202211800, 'INSY 50', 'Fundamentals of Information Systems', 3, 3, 'DCIT 21', '1st Sem', '2.00', 'Rosete'),
(24, 202211800, 'FITT 3', 'Physical Activities towards Health and Fitness 1', 2, 2, 'FITT 1', '1st Sem', '1.25', 'Jamito');

-- --------------------------------------------------------

--
-- Table structure for table `secondyr_2ndsem`
--

CREATE TABLE `secondyr_2ndsem` (
  `id` int(50) NOT NULL,
  `secondyr_2ndsem_id` int(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `credit_unit` int(50) NOT NULL,
  `contact_hrs` int(50) NOT NULL,
  `pre_quisite` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `finalgrade` varchar(50) NOT NULL,
  `secondyr_2ndsem_prof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secondyr_2ndsem`
--

INSERT INTO `secondyr_2ndsem` (`id`, `secondyr_2ndsem_id`, `course_code`, `course_name`, `credit_unit`, `contact_hrs`, `pre_quisite`, `semester`, `finalgrade`, `secondyr_2ndsem_prof`) VALUES
(17, 202211800, 'GNED 08', 'Understanding the Self', 3, 3, '', '2nd Sem', '', 'Castillo J.'),
(18, 202211800, 'GNED 14', 'Panitikang Panlipunan', 3, 3, '', '2nd Sem', '', 'Ramallosa'),
(19, 202211800, 'MATH 2', 'Calculus', 3, 3, 'MATH 1', '2nd Sem', '', 'Castillo M.'),
(20, 202211800, 'COSC 65', 'Architecture and Organization', 3, 5, 'COSC 60, DCIT 23', '2nd Sem', '', 'Tacata'),
(21, 202211800, 'COSC 70', 'Software Engineering 1', 3, 3, 'DCIT 50 & 24', '2nd Sem', '', 'Rostrollo'),
(22, 202211800, 'DCIT 25', 'Data Structures and Algorithms', 3, 5, 'DCIT 23', '2nd Sem', '', 'Dela Cruz'),
(23, 202211800, 'DCIT 55', 'Advanced Database Management System', 3, 5, 'DCIT 24', '2nd Sem', '', 'Belgica'),
(24, 202211800, 'FITT 4', 'Physical Activities towards Health and Fitness 2', 2, 2, 'FITT 1', '2nd Sem', '', 'Gabionza');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_info_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_of_add` varchar(100) NOT NULL,
  `contact_num` int(50) NOT NULL,
  `name_of_adviser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_info_id`, `student_id`, `student_name`, `address`, `date_of_add`, `contact_num`, `name_of_adviser`) VALUES
(1, 202211800, 'Magaling, Jehn Alyssa V', 'Blk2 Lot14 Molino 3, Bacoor City Cavite', '-', 2147483647, 'Edan Belgica'),
(2, 2022117883, 'Johnwill Sean V. Magaling', 'Molino 3', '2022', 2147483647, 'Pablo');

-- --------------------------------------------------------

--
-- Table structure for table `thirdyr_1stsem`
--

CREATE TABLE `thirdyr_1stsem` (
  `student_id` int(11) NOT NULL,
  `thirdyr_1stsem_id` int(50) NOT NULL,
  `thirdyr_1stsem_finalgrade` varchar(50) NOT NULL,
  `thirdyr_1stsem_prof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firstyr_1stsem`
--
ALTER TABLE `firstyr_1stsem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firstyr_2ndsem`
--
ALTER TABLE `firstyr_2ndsem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondyr_1stsem`
--
ALTER TABLE `secondyr_1stsem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondyr_2ndsem`
--
ALTER TABLE `secondyr_2ndsem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_info_id`);

--
-- Indexes for table `thirdyr_1stsem`
--
ALTER TABLE `thirdyr_1stsem`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firstyr_1stsem`
--
ALTER TABLE `firstyr_1stsem`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `firstyr_2ndsem`
--
ALTER TABLE `firstyr_2ndsem`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `secondyr_1stsem`
--
ALTER TABLE `secondyr_1stsem`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `secondyr_2ndsem`
--
ALTER TABLE `secondyr_2ndsem`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `student_info_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thirdyr_1stsem`
--
ALTER TABLE `thirdyr_1stsem`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
