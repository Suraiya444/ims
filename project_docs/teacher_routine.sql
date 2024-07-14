-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 08:40 AM
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
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher_routine`
--

CREATE TABLE `teacher_routine` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `day_name` int(11) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_routine`
--

INSERT INTO `teacher_routine` (`id`, `subject_name`, `teacher_id`, `day_name`, `period`, `class_id`, `section_id`, `group_id`, `session_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '', 0, 0, 0, 0, 0, NULL, 1, '2024-07-06 06:40:45', 1, NULL, NULL, NULL),
(2, '', 0, 0, 1, 0, 0, NULL, 1, '2024-07-06 06:40:45', 1, NULL, NULL, NULL),
(3, '', 0, 0, 2, 0, 0, NULL, 1, '2024-07-06 06:40:45', 1, NULL, NULL, NULL),
(4, '', 0, 0, 3, 0, 0, NULL, 1, '2024-07-06 06:40:45', 1, NULL, NULL, NULL),
(5, '', 0, 0, 4, 0, 0, NULL, 1, '2024-07-06 06:40:45', 1, NULL, NULL, NULL),
(6, '', 0, 0, 5, 0, 0, NULL, 1, '2024-07-06 06:40:45', 1, NULL, NULL, NULL),
(7, '', 0, 0, 6, 0, 0, NULL, 1, '2024-07-06 06:40:45', 1, NULL, NULL, NULL),
(8, '', 0, 0, 7, 0, 0, NULL, 1, '2024-07-06 06:40:45', 1, NULL, NULL, NULL),
(9, '', 0, 0, 0, 0, 0, NULL, 0, '2024-07-09 09:39:52', 1, NULL, NULL, NULL),
(10, '', 0, 0, 1, 0, 0, NULL, 0, '2024-07-09 09:39:53', 1, NULL, NULL, NULL),
(11, '', 0, 0, 2, 0, 0, NULL, 0, '2024-07-09 09:39:53', 1, NULL, NULL, NULL),
(12, '', 0, 0, 3, 0, 0, NULL, 0, '2024-07-09 09:39:53', 1, NULL, NULL, NULL),
(13, '', 0, 0, 4, 0, 0, NULL, 0, '2024-07-09 09:39:53', 1, NULL, NULL, NULL),
(14, '', 0, 0, 5, 0, 0, NULL, 0, '2024-07-09 09:39:53', 1, NULL, NULL, NULL),
(15, '', 0, 0, 6, 0, 0, NULL, 0, '2024-07-09 09:39:53', 1, NULL, NULL, NULL),
(16, '', 0, 0, 7, 0, 0, NULL, 0, '2024-07-09 09:39:53', 1, NULL, NULL, NULL),
(17, '', 0, 0, 0, 0, 0, NULL, 1, '2024-07-09 09:43:40', 1, NULL, NULL, NULL),
(18, '', 0, 0, 1, 0, 0, NULL, 1, '2024-07-09 09:43:40', 1, NULL, NULL, NULL),
(19, '', 0, 0, 2, 0, 0, NULL, 1, '2024-07-09 09:43:40', 1, NULL, NULL, NULL),
(20, '', 0, 0, 3, 0, 0, NULL, 1, '2024-07-09 09:43:40', 1, NULL, NULL, NULL),
(21, '', 0, 0, 4, 0, 0, NULL, 1, '2024-07-09 09:43:40', 1, NULL, NULL, NULL),
(22, '', 0, 0, 5, 0, 0, NULL, 1, '2024-07-09 09:43:40', 1, NULL, NULL, NULL),
(23, '', 0, 0, 6, 0, 0, NULL, 1, '2024-07-09 09:43:40', 1, NULL, NULL, NULL),
(24, '', 0, 0, 7, 0, 0, NULL, 1, '2024-07-09 09:43:40', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher_routine`
--
ALTER TABLE `teacher_routine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher_routine`
--
ALTER TABLE `teacher_routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
