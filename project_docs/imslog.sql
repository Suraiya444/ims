-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 07:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `email`, `contact`, `photo`, `username`, `password`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, NULL, 'kamal@gmail.com', NULL, NULL, 'kamal', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, '2024-06-14 20:06:58', NULL, NULL, NULL, NULL),
(2, NULL, '', NULL, NULL, 'suraiya', 'cba3802d0d10dd128a8e065c2a48a78d94ed40ab', NULL, '2024-06-27 05:19:12', NULL, NULL, NULL, NULL),
(3, NULL, '', NULL, NULL, 'suraiya', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, '2024-06-27 05:19:31', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Eight', '2024-06-16 20:45:29', 1, NULL, NULL, NULL),
(2, 'Seven', '2024-06-18 07:54:54', 1, NULL, NULL, NULL),
(3, 'Six', '2024-06-18 07:55:02', 1, NULL, NULL, NULL),
(4, 'ten', '2024-06-19 08:56:47', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_fees_setting`
--

CREATE TABLE `class_fees_setting` (
  `id` int(11) NOT NULL,
  `fees_id` varchar(255) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `id` int(11) NOT NULL,
  `subject_name` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `day_name` int(11) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`id`, `subject_name`, `teacher_id`, `day_name`, `period`, `class_id`, `section_id`, `session_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 3, 1, 0, 0, 1, 2, 1, '2024-06-29 07:50:22', 1, NULL, NULL, NULL),
(2, 4, 1, 0, 1, 1, 2, 1, '2024-06-29 07:50:22', 1, NULL, NULL, NULL),
(3, 5, 1, 0, 2, 1, 2, 1, '2024-06-29 07:50:22', 1, NULL, NULL, NULL),
(4, 3, 1, 0, 3, 1, 2, 1, '2024-06-29 07:50:22', 1, NULL, NULL, NULL),
(5, 4, 1, 0, 4, 1, 2, 1, '2024-06-29 07:50:22', 1, NULL, NULL, NULL),
(6, 3, 1, 0, 5, 1, 2, 1, '2024-06-29 07:50:22', 1, NULL, NULL, NULL),
(7, 4, 1, 0, 6, 1, 2, 1, '2024-06-29 07:50:22', 1, NULL, NULL, NULL),
(8, 5, 1, 0, 7, 1, 2, 1, '2024-06-29 07:50:22', 1, NULL, NULL, NULL),
(9, 4, 1, 2, 0, 1, 2, 1, '2024-06-29 07:51:24', 1, NULL, NULL, NULL),
(10, 3, 1, 2, 1, 1, 2, 1, '2024-06-29 07:51:24', 1, NULL, NULL, NULL),
(11, 4, 1, 2, 2, 1, 2, 1, '2024-06-29 07:51:24', 1, NULL, NULL, NULL),
(12, 5, 1, 2, 3, 1, 2, 1, '2024-06-29 07:51:24', 1, NULL, NULL, NULL),
(13, 3, 1, 2, 4, 1, 2, 1, '2024-06-29 07:51:24', 1, NULL, NULL, NULL),
(14, 4, 1, 2, 5, 1, 2, 1, '2024-06-29 07:51:24', 1, NULL, NULL, NULL),
(15, 5, 1, 2, 6, 1, 2, 1, '2024-06-29 07:51:24', 1, NULL, NULL, NULL),
(16, 4, 1, 2, 7, 1, 2, 1, '2024-06-29 07:51:24', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `id` int(11) NOT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `sub` decimal(5,2) DEFAULT NULL,
  `obj` decimal(5,2) DEFAULT NULL,
  `prac` decimal(5,2) DEFAULT NULL,
  `pass_marks` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`id`, `subject_id`, `class_id`, `group_id`, `session_id`, `sub`, `obj`, `prac`, `pass_marks`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '3', 4, 1, 1, '50.00', '50.00', '50.00', '50.00', '2024-06-19 21:14:16', 1, NULL, 1, '2024-06-19 22:01:36'),
(2, '3', 1, 2, 1, '50.00', '50.00', '50.00', '50.00', '2024-06-19 21:32:08', 1, NULL, 1, '2024-06-19 22:01:27'),
(3, '3', 2, 4, 3, '50.00', '50.00', '50.00', '50.00', '2024-06-19 21:59:40', 1, NULL, 1, '2024-06-20 10:25:47'),
(4, '3', 1, 2, 3, '50.00', '50.00', '50.00', '50.00', '2024-06-19 22:01:14', 1, NULL, 1, '2024-06-19 22:06:20'),
(5, '3', 4, 2, 3, '50.00', '50.00', '50.00', '50.00', '2024-06-19 22:15:40', 1, '2024-06-19 22:17:15', 1, '2024-06-19 22:17:25'),
(6, '3', 2, 2, 1, '0.00', '0.00', '0.00', '0.00', '2024-06-19 22:27:13', 1, '2024-06-19 22:27:55', 1, '2024-06-20 09:00:09'),
(7, '3', 1, 2, 3, '50.00', '50.00', '50.00', '50.00', '2024-06-20 08:57:52', 0, NULL, 1, '2024-06-20 09:00:05'),
(8, '3', 2, 2, 1, '50.00', '50.00', '50.00', '50.00', '2024-06-20 09:06:57', 0, NULL, 1, '2024-06-20 09:44:03'),
(9, '3', 3, 2, 1, '0.00', '0.00', '0.00', '0.00', '2024-06-20 09:31:10', 0, NULL, NULL, NULL),
(10, '3', 1, 2, 1, '50.00', '0.00', '50.00', '0.00', '2024-06-20 09:39:41', 0, NULL, 1, '2024-06-20 09:41:13'),
(11, '3', 1, 2, 1, '0.00', '0.00', '0.00', '0.00', '2024-06-20 09:54:43', 0, NULL, 1, '2024-06-20 10:25:44'),
(12, '3', 3, 4, 1, '0.00', '0.00', '0.00', '0.00', '2024-06-20 09:56:24', 0, NULL, 1, '2024-06-20 10:29:36'),
(13, '3', 4, 2, 1, '0.00', '50.00', '0.00', '0.00', '2024-06-20 10:30:00', 0, NULL, 1, '2024-06-20 10:43:10'),
(14, '4', 2, 2, 1, '0.00', '0.00', '0.00', '0.00', '2024-06-20 13:00:47', 0, NULL, 1, '2024-06-20 17:34:24'),
(15, '4', 1, 1, 1, '50.00', '50.00', '0.00', '50.00', '2024-06-20 17:39:41', 0, NULL, NULL, NULL),
(16, '5', 1, 1, 1, '50.00', '50.00', '0.00', '50.00', '2024-06-20 19:02:55', 0, NULL, 1, '2024-06-20 19:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `day_name`
--

CREATE TABLE `day_name` (
  `id` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `day_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day_name`
--

INSERT INTO `day_name` (`id`, `sl`, `day_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 0, 'Saturday', '2024-06-27 07:11:52', 1, NULL, NULL, NULL),
(2, 1, 'Sunday', '2024-06-27 07:11:52', 1, NULL, NULL, NULL),
(3, 2, 'Monday', '2024-06-27 07:11:52', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'math', '2024-06-26 17:29:19', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `designation`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Assitant teacher', '2024-06-26 17:29:43', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_category`
--

CREATE TABLE `fees_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `group` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `group`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'None', '2024-06-14 21:30:27', 1, NULL, NULL, NULL),
(2, 'Science', '2024-06-14 21:36:08', 1, NULL, NULL, NULL),
(3, 'C', '2024-06-14 21:43:37', 1, '2024-06-14 21:46:10', 1, '2024-06-14 21:46:18'),
(4, 'C', '2024-06-19 21:12:34', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `period_name` varchar(255) DEFAULT NULL,
  `period_time` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`id`, `class_id`, `section_id`, `sl`, `period_name`, `period_time`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 1, 2, 0, '1st', '08:00 - 08:45', '2024-06-29 07:13:47', 1, NULL, NULL, NULL),
(2, 1, 2, 1, '2nd', '08:45 - 09:30', '2024-06-29 07:17:13', 1, NULL, NULL, NULL),
(3, 1, 2, 2, '3rd', '09:30 - 10:15', '2024-06-29 07:17:27', 1, NULL, NULL, NULL),
(4, 1, 2, 3, '4th', '10:15 - 11:00', '2024-06-29 07:18:00', 1, NULL, NULL, NULL),
(5, 1, 2, 4, 'Tiffin', '11:00 - 11:20', '2024-06-29 07:18:21', 1, NULL, NULL, NULL),
(6, 1, 2, 5, '5th', '11:20 - 12:05', '2024-06-29 07:18:47', 1, NULL, NULL, NULL),
(7, 1, 2, 6, '6th', '12:05 - 12:50', '2024-06-29 07:19:25', 1, NULL, NULL, NULL),
(8, 1, 2, 7, '7th', '12:50 - 01:30', '2024-06-29 07:19:49', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Green', '2024-06-14 20:19:08', 1, '2024-06-14 20:21:11', 1, '2024-06-14 20:21:51'),
(2, 'Black', '2024-06-15 07:44:47', 1, '2024-06-15 07:45:02', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '2024', '2024-06-15 07:54:51', 1, NULL, NULL, NULL),
(2, '2301', '2024-06-15 07:56:09', 1, '2024-06-15 07:59:20', 1, '2024-06-15 07:59:32'),
(3, '2030', '2024-06-15 08:01:05', 1, '2024-06-15 08:02:52', 1, NULL),
(4, '2024', '2024-06-19 21:12:45', 1, NULL, 1, '2024-06-19 21:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `mother_name`, `email`, `contact`, `photo`, `username`, `password`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(0, '', '', '', '', '', '', '', '454613', '2024-06-16 17:33:02', 1, '2024-06-16 17:40:23', 1, '2024-06-16 17:40:40'),
(101, 'Kamal', 'Jamal', 'Minu', 'kamal@gmail.com', '1281542', 'World.jpg', 'kamal', '1234', '2024-06-16 16:20:32', 1, NULL, 1, '2024-06-16 17:25:05'),
(451, 'Priya', 'Jamal', 'Minu', 'rukiyapriya@gmail.com', '1531554', 'image5.jpg', 'priya', '48484', '2024-06-16 17:41:30', 1, NULL, 1, '2024-06-20 10:17:33'),
(454, 'Umma Rukiya', 'Jamal', 'Minu', 'priyontika111@gmail.com', '523563', 'carosel4.jpg', 'Rukiya', '156565+', '2024-06-16 17:36:39', 1, NULL, 1, '2024-06-17 18:49:13'),
(3895, '', 'Pamal', '', 'priyontika@gmail.com', '', 'image4.jpg', '', '', '2024-06-16 20:44:33', 1, NULL, 1, '2024-06-18 18:17:43'),
(3896, '', '', '', '', '', '', '', '', '2024-06-17 18:32:19', 1, '2024-06-17 18:35:20', 1, '2024-06-17 18:49:10'),
(3897, 'Umma Rukiya', 'Pamal', 'Lilo', 'priyontika1@gmail.com', '5698486155', '', 'Rukiya', '6578623123', '2024-06-17 18:38:04', 1, NULL, 1, '2024-06-19 21:41:37'),
(3898, 'Computer', 'Jamal', '', 'priyonti1@gmail.com', '', '', 'ka', '', '2024-06-17 18:49:03', 1, NULL, 1, '2024-06-17 18:49:07'),
(3899, 'Kamal', 'Pamal', 'Lilo', 'kamal@gmail.com', '1281542', '', 'kamal ', '15464654', '2024-06-20 10:42:49', 1, NULL, 1, '2024-06-20 10:42:56'),
(3900, 'Kamal', 'Jamal', 'Minu', 'priyontika@gmail.com', '15455999', '', 'priya', '54646', '2024-06-20 11:57:19', 1, NULL, NULL, NULL),
(3901, 'suraiya', '', '', '', '', NULL, '', '', '2024-06-26 17:17:13', 1, NULL, NULL, NULL),
(3902, 'suraiya', '', '', '', '', NULL, '', '', '2024-06-26 17:27:34', 1, NULL, NULL, NULL),
(3903, 'maksuda', ' mack', 'jun', 'kamal@gmail.com', '45654646', '17194584161566.jpg', 'kamal', '1223', '2024-06-27 05:20:16', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `att_date` date DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `student_id`, `att_date`, `in_time`, `out_time`, `note`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 4444, '2024-06-18', '09:24:51', '14:30:51', '', '2024-06-18 22:29:15', 0, NULL, 1, '2024-06-19 07:19:58'),
(2, 4, '2024-06-18', '09:24:55', '14:30:55', 'Late', '2024-06-18 22:32:46', 0, NULL, NULL, NULL),
(3, 3902, '2024-06-26', '17:27:53', '00:00:00', 'P', '2024-06-26 17:27:56', 0, NULL, 1, '2024-06-26 17:28:01'),
(4, 3902, '2024-06-26', '17:28:12', '02:00:00', 'Late', '2024-06-26 17:28:15', 0, '2024-06-26 17:28:36', 1, NULL),
(5, 3902, '2024-06-28', '18:32:23', '00:00:00', 'P', '2024-06-28 18:32:26', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_id`, `class_id`, `section_id`, `session_id`, `roll`, `group_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '4889', 1, 2, NULL, 458, 2, '2024-06-17 20:22:21', 1, NULL, 1, '2024-06-19 08:02:28'),
(2, '4888', 1, 2, NULL, 4444, 1, '2024-06-17 20:32:16', 1, NULL, 1, '2024-06-19 11:29:36'),
(3, '4877', 1, 2, NULL, 455, 2, '2024-06-17 20:50:33', 1, '2024-06-19 07:54:25', 1, '2024-06-19 08:02:40'),
(4, '123', 2, 2, NULL, 458, 1, '2024-06-18 07:55:44', 0, NULL, 1, '2024-06-19 08:02:34'),
(5, '4444', 3, 2, NULL, 4444, 2, '2024-06-18 08:04:39', 0, '2024-06-18 10:20:38', 1, '2024-06-20 09:54:21'),
(6, '123', 3, 2, NULL, 4, 2, '2024-06-18 18:39:09', 0, NULL, 1, '2024-06-20 10:15:40'),
(7, '6', 1, 2, NULL, 12, 2, '2024-06-19 08:07:47', 0, NULL, 1, '2024-06-20 10:15:37'),
(8, '7', 2, 2, NULL, 5, 2, '2024-06-19 08:54:16', 0, NULL, 1, '2024-06-20 10:15:31'),
(9, '3900', 2, 2, NULL, 458, 2, '2024-06-20 11:57:44', 0, NULL, 1, '2024-06-20 13:02:27'),
(10, '123', 1, 2, NULL, 123, 1, '2024-06-20 13:05:42', 0, NULL, 1, '2024-06-20 13:07:38'),
(11, '123', 1, 2, NULL, 123, 1, '2024-06-20 17:38:34', 0, NULL, NULL, NULL),
(12, '3902', 1, 2, 1, 1, 1, '2024-06-26 17:27:34', 1, NULL, NULL, NULL),
(13, '3903', 1, 2, 1, 12, 1, '2024-06-27 05:20:16', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `fees_date` date DEFAULT NULL,
  `due` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_fees_details`
--

CREATE TABLE `student_fees_details` (
  `id` int(11) NOT NULL,
  `student_fees_id` int(11) DEFAULT NULL,
  `fees_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `fees_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` int(11) NOT NULL,
  `subject_id` varchar(255) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `total_marks` decimal(5,2) DEFAULT NULL,
  `pass_marks` decimal(5,2) DEFAULT NULL,
  `sub` decimal(5,2) DEFAULT NULL,
  `obj` decimal(5,2) DEFAULT NULL,
  `prac` decimal(5,2) DEFAULT NULL,
  `gp` decimal(5,2) DEFAULT NULL,
  `gpl` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `subject_id`, `student_id`, `class_id`, `section_id`, `group_id`, `session_id`, `total_marks`, `pass_marks`, `sub`, `obj`, `prac`, `gp`, `gpl`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '4', 11, 1, 2, 1, 1, '150.00', '15.00', '0.00', '50.00', '0.00', '0.00', '', '2024-06-20 17:40:35', 0, NULL, NULL, NULL),
(2, '4', 11, 1, 2, 2, 3, '150.00', '15.00', '50.00', '30.00', '0.00', '4.00', '', '2024-06-20 17:57:41', 0, '2024-06-20 18:00:36', 1, '2024-06-20 18:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `subject_type` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `subject_type`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Bangla', '', '2024-06-15 07:29:16', 1, '2024-06-15 07:34:19', 1, '2024-06-15 07:34:25'),
(2, 'Bangla', '', '2024-06-15 07:40:02', 1, '2024-06-15 07:40:39', 1, '2024-06-15 07:40:44'),
(3, 'Bangla', '1', '2024-06-19 21:12:07', 1, '2024-06-20 19:01:57', 1, NULL),
(4, 'English', '0', '2024-06-20 13:00:31', 1, '2024-06-20 19:01:50', 1, NULL),
(5, 'Mathematics', '0', '2024-06-20 19:01:30', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `assigned_class` int(11) DEFAULT NULL,
  `joining` date DEFAULT NULL,
  `resign` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `father_name`, `mother_name`, `email`, `contact`, `photo`, `qualification`, `assigned_class`, `joining`, `resign`, `designation_id`, `department_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'suraiya', 'sogir', '', '', '', '', 'Bba', 0, '0000-00-00', '0000-00-00', 0, 1, '2024-06-26 17:30:39', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendance`
--

CREATE TABLE `teacher_attendance` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `att_date` date DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_fees_setting`
--
ALTER TABLE `class_fees_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_name`
--
ALTER TABLE `day_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_category`
--
ALTER TABLE `fees_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fees_details`
--
ALTER TABLE `student_fees_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_fees_setting`
--
ALTER TABLE `class_fees_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_routine`
--
ALTER TABLE `class_routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `class_subject`
--
ALTER TABLE `class_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `day_name`
--
ALTER TABLE `day_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees_category`
--
ALTER TABLE `fees_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3904;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_fees_details`
--
ALTER TABLE `student_fees_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
