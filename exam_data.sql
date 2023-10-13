-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 08:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `attempt_paper`
--

CREATE TABLE `attempt_paper` (
  `id` int(11) NOT NULL,
  `question_set_id` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paper_set`
--

CREATE TABLE `paper_set` (
  `id` int(11) NOT NULL,
  `question_set_id` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_1` varchar(200) NOT NULL,
  `ans_2` varchar(200) NOT NULL,
  `ans_3` varchar(200) NOT NULL,
  `ans_4` varchar(200) NOT NULL,
  `correct_ans` varchar(200) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0= inactive, 1=active',
  `date` datetime(1) NOT NULL,
  `expiry` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper_set`
--

INSERT INTO `paper_set` (`id`, `question_set_id`, `question`, `ans_1`, `ans_2`, `ans_3`, `ans_4`, `correct_ans`, `subject_id`, `subject_name`, `status`, `date`, `expiry`, `created_at`, `updated_at`) VALUES
(1, '1000', 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'opt3', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-01', '2023-07-01 16:05:03', '2023-07-01 16:05:03'),
(2, '1000', 'is used to find and fix bugs in the Java programs.', 'JVM', 'JRE', 'JDK', 'JDB', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-01', '2023-07-01 16:05:03', '2023-07-01 16:05:03'),
(3, '1000', 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-01', '2023-07-01 16:05:03', '2023-07-01 16:05:03'),
(4, '1000', 'Which method of the Class.class is used to determine the name of a class represented by the class object as a String?', 'getClass()', 'intern()', 'getName()', 'toString()', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-01', '2023-07-01 16:05:03', '2023-07-01 16:05:03'),
(5, '1000', 'Which of the following is a reserved keyword in Java?', 'object', 'strictfp', 'main', 'system', 'opt2', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-01', '2023-07-01 16:05:03', '2023-07-01 16:05:03'),
(6, '1001', 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'opt3', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:06:50', '2023-07-01 16:06:50'),
(7, '1001', 'is used to find and fix bugs in the Java programs.', 'JVM', 'JRE', 'JDK', 'JDB', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:06:50', '2023-07-01 16:06:50'),
(8, '1001', 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:06:50', '2023-07-01 16:06:50'),
(9, '1001', 'Which method of the Class.class is used to determine the name of a class represented by the class object as a String?', 'getClass()', 'intern()', 'getName()', 'toString()', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:06:50', '2023-07-01 16:06:50'),
(10, '1001', 'Which of the following is a reserved keyword in Java?', 'object', 'strictfp', 'main', 'system', 'opt2', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:06:50', '2023-07-01 16:06:50'),
(11, '1002', 'Which of the following is not a Java features?', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented', 'opt3', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:07:04', '2023-07-01 16:07:04'),
(12, '1002', 'is used to find and fix bugs in the Java programs.', 'JVM', 'JRE', 'JDK', 'JDB', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:07:04', '2023-07-01 16:07:04'),
(13, '1002', 'Which of the following is a valid long literal?', 'ABH8097', 'L990023', '904423', '0xnf029L', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:07:04', '2023-07-01 16:07:04'),
(14, '1002', 'Which method of the Class.class is used to determine the name of a class represented by the class object as a String?', 'getClass()', 'intern()', 'getName()', 'toString()', 'opt4', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:07:04', '2023-07-01 16:07:04'),
(15, '1002', 'Which of the following is a reserved keyword in Java?', 'object', 'strictfp', 'main', 'system', 'opt2', '1', '1', 1, '2023-07-01 00:00:00.0', '2023-07-02', '2023-07-01 16:07:04', '2023-07-01 16:07:04'),
(16, '1003', 'Which of the following is not an example of DBMS?', 'MySQL', ' Microsoft Acess', ' IBM DB2', ' Google', 'opt4', '3', '3', 1, '2023-07-28 00:00:00.0', '2023-07-29', '2023-07-22 17:37:34', '2023-07-22 17:37:34'),
(17, '1003', 'What is the full form of DBMS?', 'Data of Binary Management System', ' Database Management System', ' Database Management Service', ' Data Backup Management System', 'opt2', '3', '3', 1, '2023-07-28 00:00:00.0', '2023-07-29', '2023-07-22 17:37:34', '2023-07-22 17:37:34'),
(18, '1003', 'What is DBMS?', 'DBMS is a collection of queries', ' DBMS is a high-level language', ' DBMS is a programming language', ' DBMS stores modifies and retrieves data', 'opt4', '3', '3', 1, '2023-07-28 00:00:00.0', '2023-07-29', '2023-07-22 17:37:34', '2023-07-22 17:37:34'),
(19, '1003', 'Who created the first DBMS?', ' Edgar Frank Codd', ' Charles Bachman', ' Charles Babbage', ' Sharon B. Codd', 'opt2', '3', '3', 1, '2023-07-28 00:00:00.0', '2023-07-29', '2023-07-22 17:37:34', '2023-07-22 17:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_attendance`
--

CREATE TABLE `tbl_mst_attendance` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `attendance_status` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mst_attendance`
--

INSERT INTO `tbl_mst_attendance` (`id`, `user_id`, `date`, `attendance_status`, `created_at`, `updated_at`) VALUES
(1, 'ADM_7291', '2023-06-1', 'Absent', '2023-05-29 20:33:44', '2023-06-29 20:33:44'),
(2, 'ADM_7291', '', 'Absent', '2023-05-28 20:33:44', '2023-06-29 20:33:44'),
(3, 'ADM_7291', '', 'Present', '2023-06-01 20:33:44', '2023-06-29 20:33:44'),
(4, 'ADM_7291', '', 'Present', '2023-05-26 20:33:44', '2023-06-29 20:33:44'),
(5, 'ADM_7291', '', 'Present', '2023-06-02 20:33:44', '2023-06-29 20:33:44'),
(6, 'ADM_7291', '', 'Absent', '2023-06-09 20:33:44', '2023-06-29 20:33:44'),
(7, 'ADM_7291', '', 'Absent', '2023-06-10 20:33:44', '2023-06-29 20:33:44'),
(8, 'ADM_7291', '', 'Present', '2023-06-12 20:33:44', '2023-06-29 20:33:44'),
(9, 'ADM_7291', '', 'Present', '2023-06-14 20:33:44', '2023-06-29 20:33:44'),
(10, 'ADM_7291', '', 'Absent', '2023-06-16 20:33:44', '2023-06-29 20:33:44'),
(11, 'TEA_1000', '', 'Present', '2023-06-20 20:33:44', '2023-06-29 20:33:44'),
(12, 'TEA_1000', '', 'Absent', '2023-06-29 20:33:44', '2023-06-29 20:33:44'),
(14, 'TEA_1000', '2023-06-30', 'Present', '2023-06-30 20:20:18', '2023-06-30 20:20:18'),
(15, 'ADM_7291', '2023-07-01', 'Present', '2023-07-01 12:48:13', '2023-07-01 12:48:13'),
(16, 'TEA_1000', '2023-07-01', 'Present', '2023-07-01 12:59:26', '2023-07-01 12:59:26'),
(17, 'ADM_7291', '2023-07-02', 'Present', '2023-07-02 14:32:32', '2023-07-02 14:32:32'),
(18, 'ADM_7291', '2023-07-04', 'Present', '2023-07-04 20:46:01', '2023-07-04 20:46:01'),
(19, 'STU_1100', '2023-07-06', 'Present', '2023-07-06 20:31:27', '2023-07-06 20:31:27'),
(20, 'ADM_7291', '2023-07-12', 'Present', '2023-07-12 22:27:58', '2023-07-12 22:27:58'),
(21, 'ADM_7291', '2023-07-14', 'Present', '2023-07-14 14:12:21', '2023-07-14 14:12:21'),
(22, 'ADM_7291', '2023-07-18', 'Present', '2023-07-18 12:19:30', '2023-07-18 12:19:30'),
(23, 'ADM_7291', '2023-09-02', 'Present', '2023-09-02 12:20:09', '2023-09-02 12:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_student`
--

CREATE TABLE `tbl_mst_student` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `student_address` text NOT NULL,
  `student_img` varchar(255) NOT NULL,
  `student_subjects` varchar(200) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mst_student`
--

INSERT INTO `tbl_mst_student` (`id`, `user_id`, `name`, `contact`, `email`, `student_address`, `student_img`, `student_subjects`, `teacher_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'STU_1100', 'Rohan', '7291979451', 'ro@gmail.com', 'Rohini', '300-30.jpg', '1', 'TEA_1000', 1, '2023-06-30 21:11:20', '2023-06-30 21:11:20'),
(2, 'STU_1101', 'Deepak', '7291979452', 'DP@gmail.com', 'Rithala', '300-3.jpg', '2', 'TEA_1001', 1, '2023-06-30 21:11:54', '2023-06-30 21:11:54'),
(3, 'STU_1102', 'Kunal', '7291949453', 'K@gmail.com', 'rohini', '300-7.jpg', '5', 'TEA_1006', 1, '2023-06-30 21:12:37', '2023-06-30 21:12:37'),
(4, 'STU_1103', 'Yash', '7291979454', 'Y@gmail.com', 'Mojpur', '300-23.jpg', '4', 'TEA_1005', 1, '2023-06-30 21:13:21', '2023-06-30 21:13:21'),
(5, 'STU_1104', 'pratiksha', '721945662', 'P@gmail.com', 'dwarka', '300-14.jpg', '6', 'TEA_1003', 0, '2023-06-30 21:13:54', '2023-06-30 21:13:54'),
(6, 'STU_1100', 'Rohan', '7291979451', 'ro@gmail.com', 'Rohini', '300-30.jpg', '1', 'TEA_1000', 0, '2023-07-13 21:48:36', '2023-07-13 21:48:36'),
(7, 'STU_1101', 'Deepak', '7291979452', 'DP@gmail.com', 'Rithala', '300-3.jpg', '2', 'TEA_1001', 0, '2023-07-13 21:48:36', '2023-07-13 21:48:36'),
(8, 'STU_1102', 'Kunal', '7291949453', 'K@gmail.com', 'rohini', '300-7.jpg', '5', 'TEA_1006', 0, '2023-07-13 21:48:36', '2023-07-13 21:48:36'),
(9, 'STU_1103', 'Yash', '7291979454', 'Y@gmail.com', 'Mojpur', '300-23.jpg', '4', 'TEA_1005', 0, '2023-07-13 21:48:36', '2023-07-13 21:48:36'),
(10, 'STU_1104', 'pratiksha', '721945662', 'P@gmail.com', 'dwarka', '300-14.jpg', '6', 'TEA_1003', 0, '2023-07-13 21:48:36', '2023-07-13 21:48:36'),
(11, 'STU_1100', 'Rohan', '7291979451', 'ro@gmail.com', 'Rohini', '300-30.jpg', '1', 'TEA_1000', 0, '2023-07-15 12:45:23', '2023-07-15 12:45:23'),
(12, 'STU_1101', 'Deepak', '7291979452', 'DP@gmail.com', 'Rithala', '300-3.jpg', '2', 'TEA_1001', 0, '2023-07-15 12:45:23', '2023-07-15 12:45:23'),
(13, 'STU_1102', 'Kunal', '7291949453', 'K@gmail.com', 'rohini', '300-7.jpg', '5', 'TEA_1006', 0, '2023-07-15 12:45:23', '2023-07-15 12:45:23'),
(14, 'STU_1103', 'Yash', '7291979454', 'Y@gmail.com', 'Mojpur', '300-23.jpg', '4', 'TEA_1005', 0, '2023-07-15 12:45:23', '2023-07-15 12:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mst_teacher`
--

CREATE TABLE `tbl_mst_teacher` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `teacher_address` text NOT NULL,
  `teacher_img` varchar(255) NOT NULL,
  `teacher_subject` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=Inactive, 1=Active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mst_teacher`
--

INSERT INTO `tbl_mst_teacher` (`id`, `user_id`, `name`, `contact`, `email`, `teacher_address`, `teacher_img`, `teacher_subject`, `status`, `created_at`, `updated_at`) VALUES
(4, 'TEA_1003', 'devesh', '859325471', 'dev@gmail.com', 'Rani Khet', '300-5.jpg', '3', 1, '2023-06-30 21:02:41', '2023-06-30 21:02:41'),
(5, 'TEA_1004', 'gargi', '2365952145', 'gr@gmail.com', 'Rohini', '300-4.jpg', '4', 1, '2023-06-30 21:03:11', '2023-06-30 21:03:11'),
(6, 'TEA_1005', 'Mehar', '859632548', 'MH@gmail.com', 'Rohini', '300-2.jpg', '6', 1, '2023-06-30 21:03:40', '2023-06-30 21:03:40'),
(7, 'TEA_1006', 'deepika', '785963254', 'd@gmail.com', 'karawal Nagar', '300-20.jpg', '4', 1, '2023-07-01 12:45:21', '2023-07-01 12:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_batch`
--

CREATE TABLE `tbl_student_batch` (
  `id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `teacher_id` varchar(200) NOT NULL,
  `subjects_id` varchar(200) NOT NULL,
  `teacher_login_id` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `teacher_id` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '0=inactive,1=active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`id`, `name`, `teacher_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'java', '', 1, '2023-06-30 20:14:16', '2023-06-30 20:14:16'),
(2, 'oops', '', 1, '2023-06-30 20:58:56', '2023-06-30 20:58:56'),
(3, 'Database', '', 1, '2023-06-30 20:59:07', '2023-06-30 20:59:07'),
(4, 'Python', '', 1, '2023-06-30 20:59:18', '2023-06-30 20:59:18'),
(5, 'PHP', '', 1, '2023-06-30 20:59:27', '2023-06-30 20:59:27'),
(6, 'Microprocessor', '', 1, '2023-06-30 21:00:12', '2023-06-30 21:00:12'),
(8, 'computer network', '', 1, '2023-07-14 14:29:54', '2023-07-14 14:29:54'),
(9, 'compiler', '', 1, '2023-07-17 10:28:50', '2023-07-17 10:28:50'),
(10, 'os', '', 1, '2023-07-17 22:22:08', '2023-07-17 22:22:08'),
(11, 'operating system', '', 1, '2023-07-17 22:22:31', '2023-07-17 22:22:31'),
(12, 'fg', '', 1, '2023-07-18 15:02:01', '2023-07-18 15:02:01'),
(14, 'ak', '', 1, '2023-07-18 15:04:30', '2023-07-18 15:04:30'),
(15, 'hello', '', 1, '2023-07-18 15:06:51', '2023-07-18 15:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_login`
--

CREATE TABLE `tbl_user_login` (
  `id` int(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` tinyint(1) DEFAULT NULL COMMENT '1=Student,2=Teacher,3=Principle',
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '0=inactive,1=active',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_login`
--

INSERT INTO `tbl_user_login` (`id`, `login_id`, `password`, `user_type`, `name`, `contact`, `email_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ADM_7291', 'e6e061838856bf47e1de730719fb2609', 3, 'admin', '7291979454', 'admin@gmail.com', 1, '2023-04-24 21:46:30', '2023-04-24 21:46:30'),
(18, 'TEA_1000', '8d788385431273d11e8b43bb78f3aa41', 2, 'deepak', '7291979456', 'deepak@gmail.com', 1, '2023-06-30 20:13:37', '2023-06-30 20:13:37'),
(19, 'STU_1100', 'cd73502828457d15655bbd7a63fb0bc8', 1, 'rajneesh', '729465623', 'rj@gmail.com', 1, '2023-06-30 20:55:16', '2023-06-30 20:55:16'),
(20, 'TEA_1001', '8d788385431273d11e8b43bb78f3aa41', 2, 'Rajnish', '8223546954', 'RJ@gmail.com', 1, '2023-06-30 21:01:22', '2023-06-30 21:01:22'),
(21, 'TEA_1002', '8d788385431273d11e8b43bb78f3aa41', 2, 'Saurav', '856963254', 'st@gmail.com', 1, '2023-06-30 21:02:03', '2023-06-30 21:02:03'),
(22, 'TEA_1003', '8d788385431273d11e8b43bb78f3aa41', 2, 'devesh', '859325471', 'dev@gmail.com', 1, '2023-06-30 21:02:41', '2023-06-30 21:02:41'),
(23, 'TEA_1004', '8d788385431273d11e8b43bb78f3aa41', 2, 'gargi', '2365952145', 'gr@gmail.com', 1, '2023-06-30 21:03:11', '2023-06-30 21:03:11'),
(24, 'TEA_1005', '8d788385431273d11e8b43bb78f3aa41', 2, 'Mehar', '859632548', 'MH@gmail.com', 1, '2023-06-30 21:03:40', '2023-06-30 21:03:40'),
(25, 'STU_1101', 'cd73502828457d15655bbd7a63fb0bc8', 1, 'Rohan', '72919749456', 'RO@gmail.com', 1, '2023-06-30 21:05:58', '2023-06-30 21:05:58'),
(26, 'STU_1100', 'cd73502828457d15655bbd7a63fb0bc8', 1, 'Rohan', '7291979451', '', 1, '2023-06-30 21:10:37', '2023-06-30 21:10:37'),
(27, 'STU_1100', 'cd73502828457d15655bbd7a63fb0bc8', 1, 'Rohan', '7291979451', 'ro@gmail.com', 1, '2023-06-30 21:11:20', '2023-06-30 21:11:20'),
(28, 'STU_1101', 'cd73502828457d15655bbd7a63fb0bc8', 1, 'Deepak', '7291979452', 'DP@gmail.com', 1, '2023-06-30 21:11:54', '2023-06-30 21:11:54'),
(29, 'STU_1102', 'cd73502828457d15655bbd7a63fb0bc8', 1, 'Kunal', '7291949453', 'K@gmail.com', 1, '2023-06-30 21:12:37', '2023-06-30 21:12:37'),
(30, 'STU_1103', 'cd73502828457d15655bbd7a63fb0bc8', 1, 'Yash', '7291979454', 'Y@gmail.com', 1, '2023-06-30 21:13:21', '2023-06-30 21:13:21'),
(31, 'STU_1104', 'cd73502828457d15655bbd7a63fb0bc8', 1, 'pratiksha', '721945662', 'P@gmail.com', 1, '2023-06-30 21:13:54', '2023-06-30 21:13:54'),
(32, 'TEA_1006', '8d788385431273d11e8b43bb78f3aa41', 2, 'deepika', '785963254', 'd@gmail.com', 1, '2023-07-01 12:45:21', '2023-07-01 12:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `contact`, `company`) VALUES
(1, 's', 's@gmail.com', '7287192', 'google'),
(2, 'saurav', 's@gmail.com', '8938432323', 'google');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attempt_paper`
--
ALTER TABLE `attempt_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper_set`
--
ALTER TABLE `paper_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mst_attendance`
--
ALTER TABLE `tbl_mst_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mst_student`
--
ALTER TABLE `tbl_mst_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mst_teacher`
--
ALTER TABLE `tbl_mst_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student_batch`
--
ALTER TABLE `tbl_student_batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_login`
--
ALTER TABLE `tbl_user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attempt_paper`
--
ALTER TABLE `attempt_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paper_set`
--
ALTER TABLE `paper_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_mst_attendance`
--
ALTER TABLE `tbl_mst_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_mst_student`
--
ALTER TABLE `tbl_mst_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_mst_teacher`
--
ALTER TABLE `tbl_mst_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_student_batch`
--
ALTER TABLE `tbl_student_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_user_login`
--
ALTER TABLE `tbl_user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
