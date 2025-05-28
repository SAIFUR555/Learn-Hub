-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 07:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnhub`
--
-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(100) NOT NULL,
  `course_name` text DEFAULT NULL,
  `course_code` varchar(100) DEFAULT NULL,
  `course_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_code`, `course_description`) VALUES
(1, 'C++', 'CSE101', 'Introduction to programming with C++'),
(2, 'Java', 'CSE102', 'Object-oriented programming with Java'),
(3, 'Database', 'CSE201', 'Fundamentals of relational databases and SQL'),
(4, 'C#', 'CSE202', 'Windows application development with C#'),
(5, 'Web Tech', 'CSE301', 'Basic web development using HTML, CSS, and JavaScript'),
(6, 'Advanced Web Tech', 'CSE302', 'Advanced web frameworks and backend technologies'),
(7, 'Advance .NET', 'CSE303', 'Developing enterprise applications using .NET'),
(8, 'Programming in Python', 'CSE304', 'Scripting and automation using Python');

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

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `emergency_contact` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_phone` varchar(20) DEFAULT NULL,
  `student_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `password`, `name`, `dob`, `gender`, `nationality`, `email`, `phone`, `address`, `emergency_contact`, `department`, `education`, `guardian_name`, `guardian_phone`, `student_picture`) VALUES
('1', '123456', 'Saif', '2025-05-01', 'female', 'bangladeshi', 'saifurrahmans306@gmail.com', '01676212777', 'Thailand', '01676212777', 'cse', 'bcic', 'safi', '01676212777', '6831f5ec94299-May 21, 2025, 01_26_57 AM.png'),
('10', '123456', 'jon ', '2025-05-01', 'male', 'pakistani', 'j@gmail.com', '01676212777', 'DHaka', '01676212777', 'cse', 'China', 'Doae', '01989892801', ''),
('11', '123456', 'Sami', '2025-05-01', 'male', 'bangladeshi', 's@gmail.com', '01989892801', 'Ctg', '01989892801', 'cse', 'MUBC', 'Amir', '01989892801', ''),
('12', '123456', 'Muntaha', '2025-05-01', 'female', 'bangladeshi', 'm@gmail.com', '01676212777', 'Dhaka', '01676212777', 'cse', 'VIKI', 'tonny', '01676212777', ''),
('13', '123456', 'Asif', '2025-05-10', 'male', 'Bangladeshi', 'Asif@gmail.com', '01676212777', 'Dhaka', '01676212777', 'cse', 'MUBC', 'Ataur', '0154564156', 'student_13_1748366477.jpeg'),
('15', '654321', 'Sadia', '2025-05-09', 'female', 'bangladeshi', 's@gmail.com', '01654456554', 'Rajshahi', '01654456554', 'cse', 'VIKI', 'Hamim BHai', '01654456554', '6832bba8ec8d4-May 21, 2025, 01_26_57 AM.png'),
('17', '123456', 'Saif', '2023-05-02', 'other', 'Bangladeshi', 'saifurrahman306@gmail.com', '01676212777', 'rasta', '01676212777', 'cse', 'MUBC', 'Ataur', '01989892801', 'student_17_1748364784.png'),
('3', '123456', 'farin', '2025-05-01', 'female', 'bangladeshi', 'f@gmail.com', '0154564156', 'Dhaka', '0154564156', 'cse', 'Srcm', 'afrin', '0154564156', '68329ce5aabb0-screenshot-1746356849965.png'),
('4', '123456', 'joe', '2025-05-01', 'male', 'bangladeshi', 'j@gmail.com', '0154564156', 'Dhaka', '0154564156', 'cse', 'Srcm', 'afrin', '0154564156', ''),
('5', '123456', 'Don', '2025-05-01', 'male', 'chinese', 'D@gmail.com', '01654456554', 'Dhaka', '01654456554', 'eee', 'MUBC', 'Doae', '01654456554', ''),
('6', '654321', 'Don', '2025-05-01', 'male', 'chinese', 'D@gmail.com', '01654456554', 'Dhaka', '01654456554', 'eee', 'MUBC', 'Doae', '01654456554', ''),
('7', '654321', 'Don', '2025-05-01', 'male', 'bangladeshi', 'D@gmail.com', '0154564156', 'mirpur', '01654456554', 'cse', 'MUBC', 'Doae', '01654456554', ''),
('8', '123456', 'Afrin', '2025-05-01', 'female', 'bangladeshi', 'a@gmail.com', '01676212777', 'Uganda', '01676212777', 'cse', 'VIKI', 'Farin', '0154564156', ''),
('9', '123456', 'XYZ', '2025-05-16', 'male', 'bangladeshi', 'x@gmail.com', '01989892801', 'China', '01989892801', 'cse', 'China', 'YZX', '01989892801', '682d509875ff2-May 21, 2025, 01_26_57 AM.png');

-- --------------------------------------------------------

--
-- Table structure for table `student courses`
--

CREATE TABLE `student courses` (
  `id` int(11) NOT NULL,
  `student id` int(11) NOT NULL,
  `course id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student courses`
--

INSERT INTO `student courses` (`id`, `student id`, `course id`) VALUES
(22, 3, 2),
(23, 3, 1),
(29, 11, 1),
(35, 1, 3),
(36, 1, 5),
(37, 3, 8),
(38, 1, 1),
(40, 15, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student courses`
--
ALTER TABLE `student courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student courses`
--
ALTER TABLE `student courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
