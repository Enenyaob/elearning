-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 10:28 PM
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
-- Database: `db_noun2`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `exercise_id` int(11) NOT NULL,
  `lecture_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `due_date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`exercise_id`, `lecture_id`, `title`, `description`, `due_date`, `created_at`) VALUES
(1, 1, '10 Marks', 'What are the four main principles of Object-Oriented Programming?\r\nWhat is a class in OOP?\r\nWhat is the difference between a class and an object?\r\nWhat is inheritance in OOP and why is it useful?', '0000-00-00 00:00:00', '2024-08-04 00:18:13'),
(3, 2, '15 Marks', 'What is the difference between software engineering and programming?  What are the phases of the software development lifecycle (SDLC)', '0000-00-00 00:00:00', '2024-08-04 00:59:03'),
(5, 3, '10 Marks', 'What is an operating system and what are its primary functions?\r\nWhat is the difference between a process and a thread?\r\nWhat is process scheduling, and what are some common scheduling algorithms?', '2024-08-28 00:00:00', '2024-08-04 01:08:45'),
(6, 2, 'Test 5 Marks', 'Write about code resusability', '2024-08-29 00:00:00', '2024-08-04 19:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `exercise_submissions`
--

CREATE TABLE `exercise_submissions` (
  `submission_id` int(11) NOT NULL,
  `exercise_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercise_submissions`
--

INSERT INTO `exercise_submissions` (`submission_id`, `exercise_id`, `student_id`, `file_url`, `submitted_at`) VALUES
(1, 1, 2, '66afa54e5431e4.40204029.pdf', '2024-08-04 15:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `lecture_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`lecture_id`, `title`, `description`, `video_url`, `created_at`) VALUES
(1, 'Object Oriented Programming', 'Object Oriented Programming is an important concept in software development. In this complete tutorial, you will learn all about OOP and how to implement it using Python.', 'https://youtu.be/Ej_02ICOIgs?si=Le9HD8AYyonXNRvE', '2024-08-03 14:56:26'),
(2, 'Software Engineering', 'Today, we’re going to talk about how HUGE programs with millions of lines of code like Microsoft Office are built. Programs like these are way too complicated for a single person, but instead require teams of programmers using the tools and best practices that form the discipline of Software Engineering. We&#039;ll talk about how large programs are typically broken up into into function units that are nested into objects known as Object Oriented Programming, as well as how programmers write and debug their code efficiently, document and share their code with others, and also how code repositories are used to allow programmers to make changes while mitigating risk.', 'https://youtu.be/O753uuutqH8?si=vS55AmS0B2yzmtTe', '2024-08-03 23:05:28'),
(3, 'Operating Systems', 'This course covers the fundamentals of Operating Systems (OS), which manage computer hardware and software resources.', 'https://youtu.be/RozoeWzT7IM?si=TfTxnMr7i3xo8rJO', '2024-08-03 23:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `mobile_no` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `state_origin` varchar(50) DEFAULT NULL,
  `local_government` varchar(50) DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `matric_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `address`, `mobile_no`, `email`, `middle_name`, `department`, `gender`, `state_origin`, `local_government`, `faculty`, `dob`, `matric_number`) VALUES
(1, 'JOHN', 'DOE', '27 BABATUDE ALLEN, EJIGBO', '07031234567', 'xyz@me.com', 'MASTER', 'COMPUTER SCIENCE', 'MALE', 'DELTA', 'NDOKWA-EAST', 'SCIENCE', '2020-07-30', 'NOUN/COM/23/24/44422'),
(2, 'PELUMI', 'OGUNSEKIN', 'ORI OKE', '07056789057', 'peko@baller.com', 'PEKO', 'COMPUTER SCIENCE', 'MALE', 'OGUN', 'IJEBU-ODE', 'SCIENCE', '2024-05-29', 'NOUN/COM/23/24/95881'),
(3, 'BOBO', 'CHINEDU', '2, ALABI OYO STREET OFF AILEGUN, EJIGBO LAGOS', '08031234567', 'bobo@mama.com', 'PICKER', 'ENGLISH', 'MALE', 'LAGOS', 'MUSHIN', 'ARTS', '2007-12-12', 'NOUN/STAFF/23/24/451');

-- --------------------------------------------------------

--
-- Table structure for table `user_pass`
--

CREATE TABLE `user_pass` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `secure_pass` varchar(60) NOT NULL,
  `user_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_pass`
--

INSERT INTO `user_pass` (`user_id`, `user_name`, `email`, `secure_pass`, `user_role`) VALUES
(1, 'obi', 'xyz@me.com', '$2y$10$kt0bPvos2cuoJNdQncCIsOCWdwb9ohgAhuXiFFZusPtx5H6tADNBy', 'ADMIN'),
(2, 'PELUMI', 'peko@baller.com', '$2y$10$18rpEsJDytCuD5j7ZJ93FewtPtGVAQT.Gv/QNhC9ItnJc/NcffK8i', 'STUDENT'),
(3, 'BOBO', 'bobo@mama.com', '$2y$10$GtEkpkniwTOlWYw.30hhxOvvYlANNWxlNhvrzUV4OPmcs23TVSNWa', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`exercise_id`);

--
-- Indexes for table `exercise_submissions`
--
ALTER TABLE `exercise_submissions`
  ADD PRIMARY KEY (`submission_id`),
  ADD KEY `exercise_id` (`exercise_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `matric_number` (`matric_number`);

--
-- Indexes for table `user_pass`
--
ALTER TABLE `user_pass`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `exercise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exercise_submissions`
--
ALTER TABLE `exercise_submissions`
  MODIFY `submission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `lecture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_pass`
--
ALTER TABLE `user_pass`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exercise_submissions`
--
ALTER TABLE `exercise_submissions`
  ADD CONSTRAINT `exercise_submissions_ibfk_1` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`exercise_id`),
  ADD CONSTRAINT `exercise_submissions_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_pass` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
