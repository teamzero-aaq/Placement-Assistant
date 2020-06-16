-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ac_ec`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_course`
--

CREATE TABLE `audit_course` (
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `currently_active` tinyint(4) NOT NULL DEFAULT 0,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `no_of_allocated` int(11) NOT NULL DEFAULT 0,
  `email_id` varchar(50) NOT NULL,
  `timestamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_course`
--

INSERT INTO `audit_course` (`cid`, `sem`, `year`, `cname`, `dept_id`, `currently_active`, `min`, `max`, `no_of_allocated`, `email_id`, `timestamp`) VALUES
('UCEC1254', 3, '2020-21', 'Python for Data Science', 1, 0, 30, 40, 0, 'IC@somaiya.edu', '2020-05-13 18:51:41'),
('UCEC2103', 4, '2019-20', 'GHI', 2, 1, 50, 30, 0, '', ''),
('UCEC4544', 4, '2019-20', 'Basic Of Python', 1, 1, 20, 40, 0, 'IC@somaiya.edu', '2020-05-09 20:05:50'),
('UCEC4582', 5, '2020-21', 'Flutter ', 2, 0, 50, 40, 0, 'IC@somaiya.edu', '2020-05-13 23:52:35'),
('UCEC4896', 4, '2019-20', 'Flutter ', 1, 1, 30, 50, 0, 'facco_comp@somaiya.edu', '2020-04-03 19:14:00'),
('UCEC5852', 5, '2020-21', 'Introduction to Blockchain', 2, 0, 50, 70, 0, 'IC@somaiya.edu', '2020-05-13 23:59:53'),
('UCEC6739', 4, '2019-20', 'Python for Data Science', 2, 1, 40, 80, 0, 'IC@somaiya.edu', '2020-05-04 18:35:52'),
('UCEC7636', 4, '2019-20', 'DBMS', 1, 1, 30, 80, 0, 'IC@somaiya.edu', '2020-03-31 01:07:27'),
('UCEC7637', 4, '2019-20', 'BCT', 2, 1, 30, 40, 0, 'IC@somaiya.edu', '2020-03-31 01:08:42'),
('UCEC76385', 5, '2019-20', 'Business Analysis', 1, 1, 20, 30, 0, 'IC@somaiya.edu', '2020-03-31 01:09:36'),
('UCEC78452', 4, '2019-20', 'DC', 1, 1, 30, 50, 0, 'IC@somaiya.edu', '2020-05-09 19:19:50'),
('UCEC78624', 3, '2020-21', 'Machine Learning ', 1, 0, 30, 40, 0, 'IC@somaiya.edu', '2020-05-13 20:19:42'),
('UCEC871', 4, '2019-20', 'XYZ', 1, 1, 60, 30, 0, '', ''),
('UCEC8752', 5, '2020-21', 'Introduction to Python', 1, 0, 40, 70, 0, 'IC@somaiya.edu', '2020-05-14 19:11:21'),
('UCEC8756', 3, '2020-21', 'Blockchain Technology', 2, 0, 20, 30, 0, 'IC@somaiya.edu', '2020-05-13 19:45:47'),
('UCEC895', 3, '2020-21', 'Python for Data Science', 1, 0, 30, 50, 0, 'IC@somaiya.edu', '2020-05-13 19:00:39'),
('UCEC8950', 4, '2019-20', 'Python for Data Science', 1, 1, 30, 40, 0, 'IC@somaiya.edu', '2020-03-24 01:01:25'),
('UCEC89620', 5, '2020-21', 'Database Systems', 1, 0, 30, 80, 0, 'IC@somaiya.edu', '2020-05-14 00:06:10'),
('UCEC9874', 4, '2019-20', 'Machine Learning ', 3, 1, 30, 40, 0, 'IC@somaiya.edu', '2020-03-24 03:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `audit_course_applicable_dept`
--

CREATE TABLE `audit_course_applicable_dept` (
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_course_applicable_dept`
--

INSERT INTO `audit_course_applicable_dept` (`cid`, `sem`, `year`, `dept_id`) VALUES
('UCEC1254', 3, '2020-21', 1),
('UCEC1254', 3, '2020-21', 2),
('UCEC1254', 3, '2020-21', 3),
('UCEC1254', 3, '2020-21', 4),
('UCEC1254', 3, '2020-21', 5),
('UCEC2103', 4, '2019-20', 1),
('UCEC2103', 4, '2019-20', 3),
('UCEC2103', 4, '2019-20', 4),
('UCEC4544', 4, '2019-20', 1),
('UCEC4544', 4, '2019-20', 2),
('UCEC4544', 4, '2019-20', 3),
('UCEC4544', 4, '2019-20', 4),
('UCEC4544', 4, '2019-20', 5),
('UCEC4582', 5, '2020-21', 1),
('UCEC4582', 5, '2020-21', 2),
('UCEC4582', 5, '2020-21', 3),
('UCEC4582', 5, '2020-21', 4),
('UCEC4582', 5, '2020-21', 5),
('UCEC4896', 4, '2019-20', 1),
('UCEC4896', 4, '2019-20', 2),
('UCEC4896', 4, '2019-20', 3),
('UCEC4896', 4, '2019-20', 4),
('UCEC4896', 4, '2019-20', 5),
('UCEC5852', 5, '2020-21', 1),
('UCEC5852', 5, '2020-21', 2),
('UCEC5852', 5, '2020-21', 3),
('UCEC5852', 5, '2020-21', 4),
('UCEC5852', 5, '2020-21', 5),
('UCEC6739', 4, '2019-20', 1),
('UCEC6739', 4, '2019-20', 2),
('UCEC6739', 4, '2019-20', 3),
('UCEC6739', 4, '2019-20', 4),
('UCEC6739', 4, '2019-20', 5),
('UCEC7636', 4, '2019-20', 1),
('UCEC7636', 4, '2019-20', 2),
('UCEC7636', 4, '2019-20', 3),
('UCEC7636', 4, '2019-20', 4),
('UCEC7636', 4, '2019-20', 5),
('UCEC7637', 4, '2019-20', 1),
('UCEC7637', 4, '2019-20', 2),
('UCEC7637', 4, '2019-20', 3),
('UCEC7637', 4, '2019-20', 4),
('UCEC7637', 4, '2019-20', 5),
('UCEC76385', 5, '2019-20', 1),
('UCEC76385', 5, '2019-20', 2),
('UCEC76385', 5, '2019-20', 3),
('UCEC76385', 5, '2019-20', 5),
('UCEC78452', 4, '2019-20', 1),
('UCEC78452', 4, '2019-20', 2),
('UCEC78452', 4, '2019-20', 3),
('UCEC78452', 4, '2019-20', 4),
('UCEC78452', 4, '2019-20', 5),
('UCEC78624', 3, '2020-21', 1),
('UCEC78624', 3, '2020-21', 2),
('UCEC78624', 3, '2020-21', 3),
('UCEC78624', 3, '2020-21', 4),
('UCEC78624', 3, '2020-21', 5),
('UCEC871', 4, '2019-20', 1),
('UCEC871', 4, '2019-20', 2),
('UCEC871', 4, '2019-20', 3),
('UCEC8752', 5, '2020-21', 1),
('UCEC8752', 5, '2020-21', 2),
('UCEC8752', 5, '2020-21', 3),
('UCEC8752', 5, '2020-21', 4),
('UCEC8752', 5, '2020-21', 5),
('UCEC8756', 3, '2020-21', 1),
('UCEC8756', 3, '2020-21', 2),
('UCEC8756', 3, '2020-21', 3),
('UCEC8756', 3, '2020-21', 4),
('UCEC895', 3, '2020-21', 1),
('UCEC895', 3, '2020-21', 2),
('UCEC895', 3, '2020-21', 3),
('UCEC895', 3, '2020-21', 4),
('UCEC895', 3, '2020-21', 5),
('UCEC8950', 4, '2019-20', 1),
('UCEC8950', 4, '2019-20', 2),
('UCEC89620', 5, '2020-21', 1),
('UCEC89620', 5, '2020-21', 2),
('UCEC89620', 5, '2020-21', 3),
('UCEC89620', 5, '2020-21', 4),
('UCEC89620', 5, '2020-21', 5),
('UCEC9874', 4, '2019-20', 1),
('UCEC9874', 4, '2019-20', 2),
('UCEC9874', 4, '2019-20', 3),
('UCEC9874', 4, '2019-20', 4),
('UCEC9874', 4, '2019-20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `audit_course_applicable_dept_log`
--

CREATE TABLE `audit_course_applicable_dept_log` (
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `audit_course_log`
--

CREATE TABLE `audit_course_log` (
  `cid` varchar(15) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `no_of_allocated` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `timestamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_course_log`
--

INSERT INTO `audit_course_log` (`cid`, `sem`, `year`, `cname`, `dept_id`, `min`, `max`, `no_of_allocated`, `email_id`, `timestamp`) VALUES
('UCEC123', 5, '2018-19', 'Python', 1, 45, 60, 25, 'IC@somaiya.edu', '4545'),
('UCEC878', 3, '2018-19', 'ABC2', 1, 30, 40, 35, 'IC@somaiya.edu', '454545');

-- --------------------------------------------------------

--
-- Table structure for table `audit_map`
--

CREATE TABLE `audit_map` (
  `newcid` varchar(15) NOT NULL,
  `newsem` int(11) NOT NULL,
  `newyear` varchar(8) NOT NULL,
  `oldcid` varchar(15) NOT NULL,
  `oldsem` int(11) NOT NULL,
  `oldyear` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_map`
--

INSERT INTO `audit_map` (`newcid`, `newsem`, `newyear`, `oldcid`, `oldsem`, `oldyear`) VALUES
('UCEC4544', 4, '2019-20', 'UCEC21212', 3, '2018-19'),
('UCEC4544', 4, '2019-20', 'UCEC7845', 4, '2018-19'),
('UCEC4582', 5, '2020-21', 'UCEC4896', 4, '2019-20'),
('UCEC5852', 5, '2020-21', 'UCEC7637', 4, '2019-20'),
('UCEC8752', 5, '2020-21', 'UCEC4544', 4, '2019-20');

-- --------------------------------------------------------

--
-- Table structure for table `closed_elective_dept_form`
--

CREATE TABLE `closed_elective_dept_form` (
  `sem` int(11) NOT NULL,
  `year` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `form_type` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `no` int(11) NOT NULL DEFAULT 0,
  `dept_id` int(11) NOT NULL,
  `curr_sem` int(11) NOT NULL,
  `start_timestamp` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `end_timestamp` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `timestamp_created` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `email_id` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `no_of_preferences` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `closed_elective_dept_form`
--

INSERT INTO `closed_elective_dept_form` (`sem`, `year`, `form_type`, `no`, `dept_id`, `curr_sem`, `start_timestamp`, `end_timestamp`, `timestamp_created`, `email_id`, `no_of_preferences`) VALUES
(4, '2017-18', 'closed ele', 1, 1, 5, '2020-03-30 14:35', '2020-04-03 03:59', '2020-04-01 23:19:52', 'facco@somaiya.edu', 6);

-- --------------------------------------------------------

--
-- Table structure for table `current_sem_info`
--

CREATE TABLE `current_sem_info` (
  `sem_type` varchar(5) NOT NULL,
  `academic_year` varchar(10) NOT NULL,
  `started_on` varchar(30) NOT NULL DEFAULT current_timestamp(),
  `ended_on` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `currently_active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `current_sem_info`
--

INSERT INTO `current_sem_info` (`sem_type`, `academic_year`, `started_on`, `ended_on`, `email_id`, `currently_active`) VALUES
('EVEN', '2019-20', '2020-01-08 11:05:00', '', 'IC@somaiya.edu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'Comp'),
(2, 'IT'),
(3, 'EXTC'),
(4, 'ETRX'),
(5, 'MECH');

-- --------------------------------------------------------

--
-- Table structure for table `external_faculty`
--

CREATE TABLE `external_faculty` (
  `username` varchar(20) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `date_of_joining` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `external_faculty_certification`
--

CREATE TABLE `external_faculty_certification` (
  `username` varchar(20) NOT NULL,
  `course_certified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `email_id` varchar(50) NOT NULL,
  `faculty_code` varchar(15) NOT NULL DEFAULT 'Aa',
  `employee_id` varchar(30) NOT NULL DEFAULT '2112',
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `post` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `timestamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`email_id`, `faculty_code`, `employee_id`, `fname`, `mname`, `lname`, `dept_id`, `post`, `username`, `added_by`, `timestamp`) VALUES
('abc@somaiya.edu', 'AE', '2', 'ABC', 'EFG', '', 1, 'Asst Prof', '', '', ''),
('fac3@somaiya.edu', 'PR', '9', 'PQR', '', '', 2, 'Prof', '', 'IC@somaiya.edu', '2020-05-11 03:29:35'),
('faculty1@somaiya.edu', 'fac', '4', 'faculty', '', '', 1, 'Asst Prof', 'faculty', '', ''),
('faculty2@somaiya.edu', 'fac2', '6', 'faculty2', '', '', 1, 'Prof', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_audit`
--

CREATE TABLE `faculty_audit` (
  `email_id` varchar(50) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_audit_log`
--

CREATE TABLE `faculty_audit_log` (
  `email_id` varchar(50) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_certification`
--

CREATE TABLE `faculty_certification` (
  `email_id` varchar(50) NOT NULL,
  `course_certified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_certification`
--

INSERT INTO `faculty_certification` (`email_id`, `course_certified`) VALUES
('abc@somaiya.edu', 'PHD'),
('faculty1@somaiya.edu', 'PHD'),
('faculty2@somaiya.edu', 'PHD');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_coordinator`
--

CREATE TABLE `faculty_coordinator` (
  `email_id` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `start_date` varchar(15) NOT NULL,
  `end_date` varchar(15) NOT NULL,
  `hod_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_coordinator`
--

INSERT INTO `faculty_coordinator` (`email_id`, `dept_id`, `start_date`, `end_date`, `hod_id`) VALUES
('facco_comp@somaiya.edu', 1, '2019-05-03', '2021-04-02', 'hodcomp@somaiya.edu');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_idc`
--

CREATE TABLE `faculty_idc` (
  `email_id` varchar(50) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_idc_log`
--

CREATE TABLE `faculty_idc_log` (
  `email_id` varchar(50) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `no` int(11) NOT NULL DEFAULT 0,
  `form_type` varchar(10) NOT NULL,
  `curr_sem` int(11) NOT NULL,
  `start_timestamp` varchar(30) NOT NULL,
  `end_timestamp` varchar(30) NOT NULL,
  `timestamp_created` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `no_of_preferences` int(11) NOT NULL,
  `allocate_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`sem`, `year`, `no`, `form_type`, `curr_sem`, `start_timestamp`, `end_timestamp`, `timestamp_created`, `email_id`, `no_of_preferences`, `allocate_status`) VALUES
(5, '2019-20', 0, 'audit', 4, '2020-05-07 15:01', '2020-05-13 01:00', '2020-05-11 16:21:25', 'IC@somaiya.edu', 5, 0),
(5, '2019-20', 0, 'idc', 4, '2020-03-30 02:00', '2020-04-04 00:02', '2020-03-31 16:14:32', 'IC@somaiya.edu', 3, 0),
(6, '2019-20', 0, 'audit', 5, '2020-05-07 02:00', '2020-05-10 13:00', '2020-05-06 14:32:15', 'IC@somaiya.edu', 6, 0),
(7, '2019-20', 0, 'audit', 6, '2020-05-01 02:00', '2020-05-03 13:00', '2020-05-06 14:49:36', 'IC@somaiya.edu', 3, 0),
(7, '2019-20', 0, 'idc', 6, '2020-04-09 04:00', '2020-04-16 11:00', '2020-04-06 21:55:50', 'IC@somaiya.edu', 6, 0),
(8, '2019-20', 0, 'audit', 7, '2020-05-02 01:00', '2020-05-04 13:00', '2020-05-05 19:52:20', 'IC@somaiya.edu', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hide_student_audit_course`
--

CREATE TABLE `hide_student_audit_course` (
  `email_id` varchar(50) NOT NULL,
  `cid` varchar(15) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hide_student_audit_course`
--

INSERT INTO `hide_student_audit_course` (`email_id`, `cid`, `sem`, `year`, `cname`) VALUES
('student@somaiya.edu', 'UCEC4544', 4, '2019-20', 'Basic Of Python');

-- --------------------------------------------------------

--
-- Table structure for table `hide_student_idc`
--

CREATE TABLE `hide_student_idc` (
  `email_id` varchar(50) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `email_id` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `start_date` varchar(15) NOT NULL,
  `end_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`email_id`, `dept_id`, `start_date`, `end_date`) VALUES
('hodcomp@somaiya.edu', 1, '12-12-2019', '04-04-2022');

-- --------------------------------------------------------

--
-- Table structure for table `idc`
--

CREATE TABLE `idc` (
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `max` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `no_of_allocated` int(11) NOT NULL,
  `timestamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idc`
--

INSERT INTO `idc` (`cid`, `sem`, `year`, `cname`, `dept_id`, `email_id`, `max`, `min`, `no_of_allocated`, `timestamp`) VALUES
('UCEC321', 5, '2019-20', 'Blockchain Technology', 2, 'IC@somaiya.edu', 70, 40, 0, '2020-03-24 14:08:46'),
('UCEC3547', 5, '2019-20', 'Cyber Security Awareness', 2, 'IC@somaiya.edu', 60, 40, 0, '2020-03-31 16:36:35'),
('UCEC3645', 5, '2019-20', 'Microprocessor', 1, 'IC@somaiya.edu', 80, 40, 0, '2020-03-24 15:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `idc_applicable_dept`
--

CREATE TABLE `idc_applicable_dept` (
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idc_applicable_dept`
--

INSERT INTO `idc_applicable_dept` (`cid`, `sem`, `year`, `dept_id`) VALUES
('UCEC321', 5, '2019-20', 1),
('UCEC321', 5, '2019-20', 2),
('UCEC321', 5, '2019-20', 3),
('UCEC3547', 5, '2019-20', 1),
('UCEC3547', 5, '2019-20', 2),
('UCEC3547', 5, '2019-20', 3),
('UCEC3547', 5, '2019-20', 4),
('UCEC3645', 5, '2019-20', 2),
('UCEC3645', 5, '2019-20', 4),
('UCEC3645', 5, '2019-20', 5);

-- --------------------------------------------------------

--
-- Table structure for table `idc_applicable_dept_log`
--

CREATE TABLE `idc_applicable_dept_log` (
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `idc_log`
--

CREATE TABLE `idc_log` (
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `max` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `no_of_allocated` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instituitional_coordinator`
--

CREATE TABLE `instituitional_coordinator` (
  `email_id` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `start_date` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `end_date` varchar(15) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_role`
--

CREATE TABLE `login_role` (
  `username` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password_set` tinyint(4) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_role`
--

INSERT INTO `login_role` (`username`, `email_id`, `password`, `password_set`, `role`) VALUES
('facco_comp', 'facco_comp@somaiya.edu', 'facco_comp', 1, 'faculty_co'),
('faculty', 'faculty@somaiya.edu', 'faculty', 1, 'faculty'),
('hodcomp', 'hodcomp@somaiya.edu', 'hodcomp', 1, 'hod'),
('IC', 'IC@somaiya.edu', 'IC', 1, 'inst_coor'),
('student2', 'student2@somaiya.edu', 'student2', 1, 'student'),
('student3', 'student3@somaiya.edu', 'student3', 1, 'student'),
('student', 'student@somaiya.edu', 'student', 1, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email_id` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `year_of_admission` varchar(8) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `current_sem` int(11) NOT NULL,
  `form_filled` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email_id`, `rollno`, `fname`, `mname`, `lname`, `year_of_admission`, `dept_id`, `current_sem`, `form_filled`) VALUES
('abdul.quadir@somaiya.edu', '1711893', 'Abdul', 'Y', 'Quadir', '2017', 4, 5, 0),
('dev.c@somaiya.edu', '2733928', 'dev', 'Q', 'Chaurasia', '2019', 2, 5, 0),
('Harbhajan@somaiya.edu', '1977973', 'Harbhajan', 'H', 'Singh', '2019', 2, 5, 0),
('hardik@somaiya.edu', '1744464', 'Hardik', 'J', 'Pandya', '2019', 5, 2, 0),
('harsh.gokhru@somaiya.edu', '1344613', 'harsh', 'S', 'Gokhru', '2017', 5, 6, 0),
('harsh.vg@somaiya.edu', '1711018', 'Harsh', 'V', 'Gupta', '2018', 2, 6, 0),
('Jasprit@somaiya.edu', '1677616', 'Jasprir', 'JG', 'Bumrah', '2017', 4, 3, 0),
('krunal@somaiya.edu', '1822852', 'krunal', 'N', 'Dabhi', '2015', 1, 2, 0),
('Lasith@somaiya.ed', '1611121', 'Lasith', 'H', 'Malinga', '2015', 1, 1, 0),
('meet.rb@somaiya.edu', '1611245', 'meet', 'G', 'Bhanushali', '2018', 5, 3, 0),
('mohammad.athania@somaiya.edu', '1711002', 'Mohammed', 'M', 'Athania', '2017', 1, 5, 0),
('Mohammed@somaiya.edu', '1811062', 'Mohammed', 'H', 'Shami', '2014', 3, 4, 0),
('msd@somaiya.edu', '1711046', 'Mahendra', 'W', 'Dhoni', '2018', 5, 3, 0),
('naman.doshi@somaiya.edu', '1711012', 'Naman', 'P', 'Doshi', '2016', 3, 1, 0),
('parth.seth@somaiya.edu', '1711085', 'parth', 'K', 'Seth', '2019', 3, 4, 0),
('rohit.s@somaiya.edu', '7844695', 'rohit', 'F', 'Sharma', '2016', 5, 4, 0),
('rp@somaiya.edu', '1363363', 'RP', 'G', 'Singh', '2016', 1, 6, 0),
('sagar.d@somaiya.edu', '5466454', 'sagar', 'G', 'Dama', '2016', 4, 6, 0),
('student2@somaiya.edu', '1711007', 'student2', 'student2', 'student2', '	2017', 1, 5, 0),
('student3@somaiya.edu', '1712003', 'Student3', 'student3', 'student3', '2017', 2, 4, 0),
('student@somaiya.edu', '1711006', 'student', 'student', 'student', '2017', 1, 4, 0),
('virat.k@somaiya.edu', '4343353', 'virat', 'D', 'Kohli', '2019', 4, 3, 0),
('yuvraj@somaiya.edu', '1411362', 'yuvraj', 'G', 'Singh', '2015', 5, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_audit`
--

CREATE TABLE `student_audit` (
  `email_id` varchar(50) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `currently_active` tinyint(4) NOT NULL DEFAULT 0,
  `complete_status` tinyint(4) NOT NULL DEFAULT 0,
  `student_attendance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_audit_log`
--

CREATE TABLE `student_audit_log` (
  `email_id` varchar(50) NOT NULL,
  `cid` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `complete_status` tinyint(4) NOT NULL,
  `student_attendence` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_audit_log`
--

INSERT INTO `student_audit_log` (`email_id`, `cid`, `sem`, `year`, `complete_status`, `student_attendence`) VALUES
('student@somaiya.edu', 'UCEC878', 3, '2018-19', 1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `student_form`
--

CREATE TABLE `student_form` (
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `no` int(11) NOT NULL,
  `form_type` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `timestamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_preference_audit`
--

CREATE TABLE `student_preference_audit` (
  `email_id` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  `allocate_status` tinyint(4) NOT NULL DEFAULT 0,
  `no_of_valid_preferences` int(11) NOT NULL,
  `pref1` varchar(15) NOT NULL,
  `pref2` varchar(15) NOT NULL,
  `pref3` varchar(15) NOT NULL,
  `pref4` varchar(15) NOT NULL,
  `pref5` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_preference_audit`
--

INSERT INTO `student_preference_audit` (`email_id`, `sem`, `year`, `rollno`, `timestamp`, `allocate_status`, `no_of_valid_preferences`, `pref1`, `pref2`, `pref3`, `pref4`, `pref5`) VALUES
('abdul.quadir@somaiya.edu', 5, '2019-20', '1711893', '2020-01-15 15:49:00', 0, 5, 'UCEC89557', 'UCEC8950', 'UCEC89557', 'UCEC454', 'UCEC454'),
('dev.c@somaiya.edu', 5, '2019-20', '2733928', '2020-10-15 15:49:00', 0, 5, 'UCEC8950', 'UCEC6739', 'UCEC7636', 'UCEC89557', 'UCEC9874'),
('Harbhajan@somaiya.edu', 5, '2019-20', '1977973', '2017-05-12 15:49:00', 0, 5, 'UCEC895', 'UCEC6739', 'UCEC454', 'UCEC89557', 'UCEC6739'),
('hardik@somaiya.edu', 5, '2019-20', '1744464', '2021-04-02 15:49:00', 0, 5, 'UCEC6739', 'UCEC895', 'UCEC89557', 'UCEC6739', 'UCEC89557'),
('harsh.gokhru@somaiya.edu', 5, '2019-20', '1344613', '2020-01-15 15:49:00', 0, 5, 'UCEC454', 'UCEC89557', 'UCEC89557', 'UCEC89557', 'UCEC454'),
('harsh.vg@somaiya.edu', 5, '2019-20', '1711018', '2017-03-18 15:49:00', 0, 5, 'UCEC895', 'UCEC6739', 'UCEC89557', 'UCEC89557', 'UCEC454'),
('Jasprit@somaiya.edu', 5, '2019-20', '1677616', '2017-04-06 15:49:00', 0, 5, 'UCEC6739', 'UCEC454', 'UCEC454', 'UCEC89557', 'UCEC8950'),
('krunal@somaiya.edu', 5, '2019-20', '1822852', '2019-09-09 15:49:00', 0, 5, 'UCEC7636', 'UCEC6739', 'UCEC89557', 'UCEC8950', 'UCEC9874'),
('Lasith@somaiya.ed', 5, '2019-20', '1611121', '2019-03-31 15:49:00', 0, 5, 'UCEC6739', 'UCEC454', 'UCEC8950', 'UCEC6739', 'UCEC6737'),
('meet.rb@somaiya.edu', 5, '2019-20', '1611245', '2020-05-07 15:49:00', 0, 5, 'UCEC895', 'UCEC6739', 'UCEC8950', 'UCEC89557', 'UCEC454'),
('mohammad.athania@somaiya.edu', 5, '2019-20', '1711002', '2020-03-31 15:49:27', 0, 5, 'UCEC6739', 'UCEC9874', 'UCEC8950', 'UCEC89557', 'UCEC454'),
('Mohammed@somaiya.edu', 5, '2019-20', '1811062', '2021-03-27 15:49:00', 0, 5, 'UCEC895', 'UCEC6739', 'UCEC8950', 'UCEC6739', 'UCEC89557'),
('msd@somaiya.edu', 5, '2019-20', '1711046', '2018-03-31 15:49:00', 0, 5, 'UCEC7636', 'UCEC6739', 'UCEC89557', 'UCEC8950', 'UCEC9874'),
('naman.doshi@somaiya.edu', 5, '2019-20', '1711012', '2019-04-19 15:49:00', 0, 5, 'UCEC454', 'UCEC6739', 'UCEC89557', 'UCEC89557', 'UCEC89557'),
('parth.seth@somaiya.edu', 5, '2019-20', '1711085', '2021-03-31 15:49:00', 0, 5, 'UCEC9874', 'UCEC89557', 'UCEC89557', 'UCEC89557', 'UCEC454'),
('rohit.s@somaiya.edu', 5, '2019-20', '7844695', '2020-07-09 15:49:00', 0, 5, 'UCEC89557', 'UCEC89557', 'UCEC8950', 'UCEC89557', 'UCEC454'),
('rp@somaiya.edu', 5, '2019-20', '1363363', '2015-07-10 15:49:00', 0, 5, 'UCEC895', 'UCEC6739', 'UCEC89557', 'UCEC89557', 'UCEC454'),
('sagar.d@somaiya.edu', 5, '2019-20', '5466454', '2016-03-31 15:49:00', 0, 5, 'UCEC6739', 'UCEC895', 'UCEC89557', 'UCEC9874', 'UCEC89557'),
('virat.k@somaiya.edu', 5, '2019-20', '172324322', '2020-04-03 15:49:00', 0, 5, 'UCEC8950', 'UCEC6739', 'UCEC8950', 'UCEC454', 'UCEC89557'),
('yuvraj@somaiya.edu', 5, '2019-20', '1411362', '2019-11-12 15:49:00', 0, 5, 'UCEC6739', 'UCEC8950', 'UCEC8950', 'UCEC454', 'UCEC89557');

-- --------------------------------------------------------

--
-- Table structure for table `student_preference_idc`
--

CREATE TABLE `student_preference_idc` (
  `email_id` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` varchar(8) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  `allocate_status` tinyint(11) NOT NULL DEFAULT 0,
  `no_of_valid_preferences` int(11) NOT NULL,
  `pref1` varchar(30) NOT NULL,
  `pref2` varchar(30) NOT NULL,
  `pref3` varchar(30) NOT NULL,
  `pref4` varchar(30) NOT NULL,
  `pref5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_course`
--
ALTER TABLE `audit_course`
  ADD PRIMARY KEY (`cid`,`sem`,`year`),
  ADD KEY `audit_course_dept` (`dept_id`);

--
-- Indexes for table `audit_course_applicable_dept`
--
ALTER TABLE `audit_course_applicable_dept`
  ADD PRIMARY KEY (`cid`,`sem`,`year`,`dept_id`),
  ADD KEY `dept_audit_course_applicable` (`dept_id`);

--
-- Indexes for table `audit_course_applicable_dept_log`
--
ALTER TABLE `audit_course_applicable_dept_log`
  ADD PRIMARY KEY (`sem`,`year`,`dept_id`,`cid`),
  ADD KEY `audit_course_applicable_audit_course_log` (`cid`,`sem`,`year`),
  ADD KEY `audit_course_applicable_dept` (`dept_id`);

--
-- Indexes for table `audit_course_log`
--
ALTER TABLE `audit_course_log`
  ADD PRIMARY KEY (`cid`,`sem`,`year`);

--
-- Indexes for table `audit_map`
--
ALTER TABLE `audit_map`
  ADD PRIMARY KEY (`newcid`,`newsem`,`newyear`,`oldcid`,`oldsem`,`oldyear`);

--
-- Indexes for table `current_sem_info`
--
ALTER TABLE `current_sem_info`
  ADD PRIMARY KEY (`sem_type`,`academic_year`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `external_faculty`
--
ALTER TABLE `external_faculty`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `external_faculty_certification`
--
ALTER TABLE `external_faculty_certification`
  ADD PRIMARY KEY (`username`,`course_certified`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `faculty_code` (`faculty_code`,`employee_id`),
  ADD KEY `faculty_department` (`dept_id`);

--
-- Indexes for table `faculty_audit`
--
ALTER TABLE `faculty_audit`
  ADD PRIMARY KEY (`email_id`,`cid`,`sem`,`year`),
  ADD KEY `faculty_audit_audit_course` (`cid`,`sem`,`year`);

--
-- Indexes for table `faculty_audit_log`
--
ALTER TABLE `faculty_audit_log`
  ADD PRIMARY KEY (`email_id`,`cid`,`sem`,`year`),
  ADD KEY `faculty_audit_log_audit_log` (`cid`,`sem`,`year`);

--
-- Indexes for table `faculty_certification`
--
ALTER TABLE `faculty_certification`
  ADD PRIMARY KEY (`email_id`,`course_certified`);

--
-- Indexes for table `faculty_coordinator`
--
ALTER TABLE `faculty_coordinator`
  ADD PRIMARY KEY (`email_id`,`start_date`,`end_date`),
  ADD KEY `faculty_coordinator_hod` (`hod_id`),
  ADD KEY `faculty_coordinator_department` (`dept_id`);

--
-- Indexes for table `faculty_idc`
--
ALTER TABLE `faculty_idc`
  ADD PRIMARY KEY (`sem`,`cid`,`year`,`email_id`) USING BTREE,
  ADD KEY `faculty_idc_faculty` (`email_id`),
  ADD KEY `faculty_idc_idc` (`cid`,`sem`,`year`);

--
-- Indexes for table `faculty_idc_log`
--
ALTER TABLE `faculty_idc_log`
  ADD PRIMARY KEY (`email_id`,`cid`,`sem`,`year`),
  ADD KEY `faculty_idc_log_idc_log` (`cid`,`sem`,`year`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`sem`,`no`,`year`,`form_type`) USING BTREE;

--
-- Indexes for table `hide_student_audit_course`
--
ALTER TABLE `hide_student_audit_course`
  ADD PRIMARY KEY (`email_id`,`cid`,`sem`,`year`),
  ADD KEY `hide_student_audit_course_audit_course` (`cid`,`sem`,`year`);

--
-- Indexes for table `hide_student_idc`
--
ALTER TABLE `hide_student_idc`
  ADD PRIMARY KEY (`email_id`,`cid`,`sem`,`year`),
  ADD KEY `hide_student_idc_idc` (`cid`,`sem`,`year`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`email_id`,`start_date`,`end_date`);

--
-- Indexes for table `idc`
--
ALTER TABLE `idc`
  ADD PRIMARY KEY (`cid`,`sem`,`year`),
  ADD KEY `idc_department` (`dept_id`);

--
-- Indexes for table `idc_applicable_dept`
--
ALTER TABLE `idc_applicable_dept`
  ADD PRIMARY KEY (`cid`,`sem`,`year`,`dept_id`),
  ADD KEY `idc_applicable_dept_dept` (`dept_id`);

--
-- Indexes for table `idc_applicable_dept_log`
--
ALTER TABLE `idc_applicable_dept_log`
  ADD PRIMARY KEY (`cid`,`sem`,`year`,`dept_id`),
  ADD KEY `idc_applicable_department_dept_log` (`dept_id`);

--
-- Indexes for table `idc_log`
--
ALTER TABLE `idc_log`
  ADD PRIMARY KEY (`cid`,`sem`,`year`),
  ADD KEY `idc_log_department` (`dept_id`);

--
-- Indexes for table `login_role`
--
ALTER TABLE `login_role`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `rollno` (`rollno`),
  ADD KEY `student_department` (`dept_id`);

--
-- Indexes for table `student_audit`
--
ALTER TABLE `student_audit`
  ADD PRIMARY KEY (`email_id`,`sem`,`year`),
  ADD KEY `student_audit_audit_course` (`cid`,`sem`,`year`);

--
-- Indexes for table `student_audit_log`
--
ALTER TABLE `student_audit_log`
  ADD PRIMARY KEY (`email_id`,`sem`,`year`),
  ADD KEY `student_audit_log_ibfk_1` (`cid`,`sem`,`year`);

--
-- Indexes for table `student_form`
--
ALTER TABLE `student_form`
  ADD PRIMARY KEY (`year`,`no`,`form_type`,`email_id`,`sem`) USING BTREE,
  ADD KEY `student_form_student` (`email_id`);

--
-- Indexes for table `student_preference_audit`
--
ALTER TABLE `student_preference_audit`
  ADD PRIMARY KEY (`email_id`,`sem`,`year`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `student_preference_idc`
--
ALTER TABLE `student_preference_idc`
  ADD PRIMARY KEY (`email_id`,`sem`,`year`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audit_course`
--
ALTER TABLE `audit_course`
  ADD CONSTRAINT `audit_course_dept` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `audit_course_applicable_dept`
--
ALTER TABLE `audit_course_applicable_dept`
  ADD CONSTRAINT `audit_course_audit_course_applicable` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `audit_course` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dept_audit_course_applicable` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `audit_course_applicable_dept_log`
--
ALTER TABLE `audit_course_applicable_dept_log`
  ADD CONSTRAINT `audit_course_applicable_audit_course_log` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `audit_course_log` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `audit_course_applicable_dept` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `audit_map`
--
ALTER TABLE `audit_map`
  ADD CONSTRAINT `audit_map_audit_course` FOREIGN KEY (`newcid`,`newsem`,`newyear`) REFERENCES `audit_course` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `external_faculty_certification`
--
ALTER TABLE `external_faculty_certification`
  ADD CONSTRAINT `external_faculty_certification_external_faculty_username` FOREIGN KEY (`username`) REFERENCES `external_faculty` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_department` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `faculty_audit`
--
ALTER TABLE `faculty_audit`
  ADD CONSTRAINT `faculty_audit_audit_course` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `audit_course` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facuty_audit_faculty` FOREIGN KEY (`email_id`) REFERENCES `faculty` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_audit_log`
--
ALTER TABLE `faculty_audit_log`
  ADD CONSTRAINT `faculty_audit_log_audit_log` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `audit_course_log` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_audit_log_faculty` FOREIGN KEY (`email_id`) REFERENCES `faculty` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_certification`
--
ALTER TABLE `faculty_certification`
  ADD CONSTRAINT `faculty_certification_faculty` FOREIGN KEY (`email_id`) REFERENCES `faculty` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_coordinator`
--
ALTER TABLE `faculty_coordinator`
  ADD CONSTRAINT `faculty_coordinator_department` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_coordinator_hod` FOREIGN KEY (`hod_id`) REFERENCES `hod` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_idc`
--
ALTER TABLE `faculty_idc`
  ADD CONSTRAINT `faculty_idc_faculty` FOREIGN KEY (`email_id`) REFERENCES `faculty` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_idc_idc` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `idc` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_idc_log`
--
ALTER TABLE `faculty_idc_log`
  ADD CONSTRAINT `faculty_idc_log_faculty` FOREIGN KEY (`email_id`) REFERENCES `faculty` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_idc_log_idc_log` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `idc_log` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hide_student_audit_course`
--
ALTER TABLE `hide_student_audit_course`
  ADD CONSTRAINT `hide_student_audit_course_audit_course` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `audit_course` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hide_student_audit_course_student` FOREIGN KEY (`email_id`) REFERENCES `student` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hide_student_idc`
--
ALTER TABLE `hide_student_idc`
  ADD CONSTRAINT `hide_student_idc_idc` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `idc` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hide_student_idc_student` FOREIGN KEY (`email_id`) REFERENCES `student` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `idc`
--
ALTER TABLE `idc`
  ADD CONSTRAINT `idc_department` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `idc_applicable_dept`
--
ALTER TABLE `idc_applicable_dept`
  ADD CONSTRAINT `idc_applicable_dept_dept` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idc_applicable_dept_idc` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `idc` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `idc_applicable_dept_log`
--
ALTER TABLE `idc_applicable_dept_log`
  ADD CONSTRAINT `idc_applicable_department_dept_log` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idc_applicable_idc_log` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `idc_log` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `idc_log`
--
ALTER TABLE `idc_log`
  ADD CONSTRAINT `idc_log_department` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_department` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_audit`
--
ALTER TABLE `student_audit`
  ADD CONSTRAINT `student_audit_audit_course` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `audit_course` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_audit_student` FOREIGN KEY (`email_id`) REFERENCES `student` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_audit_log`
--
ALTER TABLE `student_audit_log`
  ADD CONSTRAINT `student_audit_log_ibfk_1` FOREIGN KEY (`cid`,`sem`,`year`) REFERENCES `audit_course_log` (`cid`, `sem`, `year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_form`
--
ALTER TABLE `student_form`
  ADD CONSTRAINT `student_form_student` FOREIGN KEY (`email_id`) REFERENCES `student` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_preference_audit`
--
ALTER TABLE `student_preference_audit`
  ADD CONSTRAINT `student_preference_audit_student` FOREIGN KEY (`email_id`) REFERENCES `student` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_preference_idc`
--
ALTER TABLE `student_preference_idc`
  ADD CONSTRAINT `student_preference_idc_student` FOREIGN KEY (`email_id`) REFERENCES `student` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
