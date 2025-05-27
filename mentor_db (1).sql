-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 10:32 PM
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
-- Database: `mentor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `code`, `title`) VALUES
(1, 'CSE101', 'C++'),
(2, 'CSE102', 'Java'),
(3, 'CSE201', 'Database'),
(4, 'CSE202', 'C#'),
(5, 'CSE301', 'Web Tech'),
(6, 'CSE302', 'Advanced Web Tech'),
(7, 'CSE303', 'Advance .NET'),
(8, 'CSE304', 'Programming in Python');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `connected_email` varchar(255) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `present_address` text DEFAULT NULL,
  `permanent_address` text DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `university_degree` varchar(255) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `degree_year` int(11) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `organization` text DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `days` text DEFAULT NULL,
  `time_from` time DEFAULT NULL,
  `time_to` time DEFAULT NULL,
  `offline_teaching` varchar(5) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `username`, `password`, `connected_email`, `fname`, `lname`, `dob`, `age`, `gender`, `present_address`, `permanent_address`, `phone`, `email`, `linkedin`, `github`, `university_degree`, `institute`, `degree_year`, `school`, `college`, `organization`, `designation`, `duration`, `days`, `time_from`, `time_to`, `offline_teaching`, `photo`, `cv`) VALUES
(8, 'delowar', '$2y$10$.MDb8FeX5VKol7/iy0z1M.N9GruEIi5pcuamyAl9U1KOdeLWcaWP6', 'adad@gmail.com', 'Delowar', 'Saidi', '2025-05-07', 19, 'male', 'xdcfs', 'ewrw', '01775533541', 'faririi@gmail.com', 'https://farinsararabbani-portfolio.netlify.app/', 'https://github.com/Faririi', 'EEE', 'AIUB', 2078, 'Samsul Haque Khan School And College', 'DMRC', 'sss', 'sds', 'sdd', 'wednesday,friday', '13:13:00', '15:13:00', 'no', 'Reference codes for lab 6.pdf', 'Mid Point Circle Drawing Algorithm Derivation.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_course`
--

CREATE TABLE `mentor_course` (
  `mentor_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentor_course`
--

INSERT INTO `mentor_course` (`mentor_id`, `course_id`) VALUES
(8, 5),
(8, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor_course`
--
ALTER TABLE `mentor_course`
  ADD PRIMARY KEY (`mentor_id`,`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mentor_course`
--
ALTER TABLE `mentor_course`
  ADD CONSTRAINT `mentor_course_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `mentors` (`id`),
  ADD CONSTRAINT `mentor_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
