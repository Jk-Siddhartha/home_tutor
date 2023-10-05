-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306
-- Generation Time: Oct 05, 2023 at 04:00 PM
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
-- Database: `home_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `certificate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `user_id`, `certificate`) VALUES
(1, 4, 'certificate 1st'),
(2, 4, 'certificate 2nd'),
(3, 4, 'certificate 3rd');

-- --------------------------------------------------------

--
-- Table structure for table `educational_qualification`
--

CREATE TABLE `educational_qualification` (
  `id` int(11) NOT NULL,
  `highest_qualification` text NOT NULL,
  `highest_qualification_college` text NOT NULL,
  `highest_qualification_percentage` double NOT NULL,
  `highest_qualification_year` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_qualification`
--

INSERT INTO `educational_qualification` (`id`, `highest_qualification`, `highest_qualification_college`, `highest_qualification_percentage`, `highest_qualification_year`, `user_id`) VALUES
(1, 'Post Graduation', 'Apna College', 80, 2006, 4);

-- --------------------------------------------------------

--
-- Table structure for table `other_details`
--

CREATE TABLE `other_details` (
  `id` int(11) NOT NULL,
  `languages_known` text NOT NULL,
  `no_of_hours` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_details`
--

INSERT INTO `other_details` (`id`, `languages_known`, `no_of_hours`, `user_id`) VALUES
(1, 'both', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `address` text NOT NULL,
  `pincode` text NOT NULL,
  `profile_pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `user_id`, `gender`, `dob`, `address`, `pincode`, `profile_pic`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `student_name` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `student_name`, `student_id`, `teacher_id`, `status`) VALUES
(21, 'Sid', 7, 4, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_classes`
--

CREATE TABLE `schedule_classes` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `date` text NOT NULL,
  `stiming` text NOT NULL,
  `etiming` text NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` text NOT NULL,
  `no_of_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_classes`
--

INSERT INTO `schedule_classes` (`id`, `subject`, `date`, `stiming`, `etiming`, `teacher_id`, `teacher_name`, `no_of_students`) VALUES
(1, 'Mathematics', '2023-10-05', '19:00', '20:30', 4, 'Amit Tyagi', 20),
(2, 'PHP', '2023-10-05', '17:00', '17:30', 4, 'Amit Tyagi', 20),
(3, 'Physics', '2023-10-04', '18:00', '20:00', 4, 'Amit Tyagi', 20),
(4, 'Chemistry', '2023-10-03', '18:50', '19:50', 4, 'Amit Tyagi', 20),
(5, 'Geography', '2023-10-04', '15:30', '17:00', 4, 'Amit Tyagi', 20),
(7, 'DSA', '2023-10-14', '09:00', '10:00', 4, 'Amit Tyagi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `user_id`, `subject`, `price`) VALUES
(2, 4, 'maths', 250),
(3, 4, 'physics', 250);

-- --------------------------------------------------------

--
-- Table structure for table `tuition_details`
--

CREATE TABLE `tuition_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `year_experience` text NOT NULL,
  `month_experience` int(11) NOT NULL,
  `mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuition_details`
--

INSERT INTO `tuition_details` (`id`, `user_id`, `year_experience`, `month_experience`, `mode`) VALUES
(2, 4, '10', 6, 'any');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userType` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `userType`, `password`) VALUES
(4, 'Amit Tyagi', 9876543210, 'amit.tyagi@gmail.com', 'tutor', 'L@GNbBuv'),
(5, 'Atul Kumar', 7418529630, 'atulkumar@gmail.com', 'tutor', 'D<Z_KTic'),
(6, 'Kaushal Kumar', 8529637410, 'kaushal.kumar@gmail.com', 'tutor', 'aa)jjIZO'),
(7, 'Sid', 9987654321, 'sid@gmail.com', 'student', '=!PC*lhs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_qualification`
--
ALTER TABLE `educational_qualification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `other_details`
--
ALTER TABLE `other_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `schedule_classes`
--
ALTER TABLE `schedule_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuition_details`
--
ALTER TABLE `tuition_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educational_qualification`
--
ALTER TABLE `educational_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_details`
--
ALTER TABLE `other_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `schedule_classes`
--
ALTER TABLE `schedule_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tuition_details`
--
ALTER TABLE `tuition_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;