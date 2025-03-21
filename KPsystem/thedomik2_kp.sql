-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2025 at 04:10 PM
-- Server version: 10.5.26-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thedomik2_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role`, `username`, `email`, `password`, `last_login`) VALUES
(1, 'Admin', 'admin', 'kpadmin@arketek.co.za', 'Ez8Hnm3#44hng', '2025-03-11 13:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `week_number` int(255) NOT NULL,
  `status` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `qa_upload` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `qa_notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `qa_userid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `qa_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `qa_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tl_notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tl_userid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tl_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tl_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `con_notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `con_userid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `con_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `con_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sen_notes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sen_userid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sen_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sen_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `qa_date` datetime NOT NULL,
  `tl_date` datetime DEFAULT NULL,
  `con_date` datetime DEFAULT NULL,
  `sen_date` datetime DEFAULT NULL,
  `escalated` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `date`, `week_number`, `status`, `qa_upload`, `qa_notes`, `qa_userid`, `qa_username`, `qa_email`, `tl_notes`, `tl_userid`, `tl_username`, `tl_email`, `con_notes`, `con_userid`, `con_username`, `con_email`, `sen_notes`, `sen_userid`, `sen_username`, `sen_email`, `qa_date`, `tl_date`, `con_date`, `sen_date`, `escalated`) VALUES
(117, '2023-02-11 10:53:05', 1, 'TL', '63e75771094df9.31918043.mp3', 'Hello there', '12', 'rocky', 'rocco@southsidegs.com', 'Hi how are you?', '14', 'teamleader', 'teamleader@southsidegs.com', '', '', '', '', '', '', '', '', '2023-02-11 10:53:05', '2023-02-11 10:55:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(118, '2023-10-11 15:44:12', 1, 'QA', '6526a6ac940756.90415518.mp3', 'Test', '28', 'rocks', 'rocco@beyondwebdesign.co.za', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-11 15:44:12', NULL, NULL, NULL, NULL),
(134, '2024-11-30 18:10:09', 1, 'Complete', '674b38e19a3e37.46139183.mp3', 'Last test', '29', 'test1', 'test1@gmail.com', 'tesing the waters aagain', '14', 'teamleader', 'teamleader@southsidegs.com', 'Something', '15', 'conusultant', 'consultant', 'This is the actual last message', '16', 'seniormanager', 'seniormanager@southsidegs.com', '2024-11-30 18:10:09', '2024-12-01 05:21:39', '2024-12-01 05:41:45', '2024-12-01 06:54:19', NULL),
(135, '2024-12-01 14:28:56', 1, 'TL', '674c5688342a53.96128093.mp3', 'test audio and grading', '30', 'zak@longneck.co.za', 'zak@longneck.co.za', 'SDVGWER', '30', 'zak@longneck.co.za', 'zak@longneck.co.za', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-01 14:28:56', '2024-12-01 14:57:50', NULL, NULL, NULL),
(136, '2024-12-01 14:28:57', 2, 'Complete', '674c5689616d12.65450417.mp3', 'test audio and grading', '30', 'zak@longneck.co.za', 'zak@longneck.co.za', 'yes', '14', 'teamleader', 'teamleader@arketek.com', 'send to senior for final approval', '15', 'consultant', 'consultant@arketek.com', NULL, NULL, NULL, NULL, '2024-12-01 14:28:57', '2024-12-01 14:42:41', '2024-12-01 14:45:11', NULL, NULL),
(137, '2024-12-01 14:52:58', 3, 'TL', '674c5c2af202d6.35137560.mp3', 'summary', '30', 'zak@longneck.co.za', 'zak@longneck.co.za', 'SUMMARY', '14', 'teamleader', 'teamleader@arketek.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-01 14:52:58', '2024-12-01 14:56:59', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grading_tool`
--

CREATE TABLE `grading_tool` (
  `id` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `week_number` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `weekly_sales_target` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `wrap_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `connected_talk_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `calls` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `average_call_length` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `attendance` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `actual_weekly_sales_target` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `actual_wrap_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `actual_connected_talk_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `actual_calls` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `actual_call_length` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `actual_attendance` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `grading_tool`
--

INSERT INTO `grading_tool` (`id`, `status`, `user_id`, `username`, `email`, `week_number`, `weekly_sales_target`, `wrap_time`, `connected_talk_time`, `calls`, `average_call_length`, `attendance`, `actual_weekly_sales_target`, `actual_wrap_time`, `actual_connected_talk_time`, `actual_calls`, `actual_call_length`, `actual_attendance`, `date`) VALUES
(23, '', '12', 'rocky', 'rocco@southsidegs.com', '1', '12', '12', '8', '500', '5', '100', '20', '16:35:28', '19:36:30', '500', '00:02:20', '60', '2023-03-01 15:16:22'),
(25, 'Active', '29', 'test1', 'test1@gmail.com', '2', '12', '12', '4', '100', '7', '80', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-01 07:00:15'),
(26, 'Active', '30', 'zak@longneck.co.za', 'zak@longneck.co.za', '0', '10', '15', '11', '20', '15min', '98', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-01 00:30:22'),
(27, 'Active', '30', 'zak@longneck.co.za', 'zak@longneck.co.za', '2', '10', '15', '11', '20', '15min', '10', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-01 00:53:57'),
(28, 'Active', '30', 'zak@longneck.co.za', 'zak@longneck.co.za', '3', '10', '15', '11', '20', '15min', '98', NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-01 01:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `userid`, `username`, `email`, `date`) VALUES
(25, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-01 10:09:12'),
(26, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-07 05:49:22'),
(27, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-07 05:53:13'),
(28, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-07 05:53:31'),
(29, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-07 05:54:09'),
(30, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-07 06:02:12'),
(31, '16', 'seniormanager', 'seniormanager@southsidegs.com', '2023-03-07 06:30:37'),
(32, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-07 06:31:16'),
(33, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-07 06:31:43'),
(34, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-07 06:50:11'),
(35, '14', 'teamleader', 'teamleader@southsidegs.com', '2023-03-07 06:51:04'),
(36, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:15:34'),
(37, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:16:42'),
(38, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:22:12'),
(39, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:30:17'),
(40, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:38:10'),
(41, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:38:19'),
(42, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:39:05'),
(43, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:41:39'),
(44, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:43:37'),
(45, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:43:54'),
(46, '12', 'rocky', 'rocco@southsidegs.com', '2023-03-10 08:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `week_number` int(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `email`, `password`, `week_number`, `last_login`, `register_date`) VALUES
(12, 'QA', 'rocky', 'rocco@southsidegs.com', 'rocco123', 1, '2023-02-11 08:53:05', '2023-01-25 10:11:13'),
(14, 'Team Leader', 'teamleader', 'teamleader@arketek.com', 'arketek123', 0, '2024-12-01 07:11:48', '2023-01-25 10:11:13'),
(15, 'Consultant', 'consultant', 'consultant@arketek.com', 'arketek123', 0, '2024-12-01 07:11:48', '2023-01-25 10:11:13'),
(16, 'Senior Manager', 'seniormanager', 'seniormanager@arketek.com', 'arketek123', 0, '2024-12-01 07:12:37', '2023-01-25 10:11:13'),
(17, 'Senior Manager', 'Yakeen', 'yakeensadiq@gmail.com', 'chillies', 0, '2023-02-11 08:58:16', '2023-02-10 11:34:27'),
(18, 'QA', 'Fazlin Valley ', 'fuzzyvk@gmail.com', 'yak2012', 0, '2023-02-10 21:42:07', '2023-02-10 11:42:07'),
(19, 'QA', 'Fazlin', 'fuzzyvs@gmail.com', 'chillies', 0, '2023-02-11 08:31:44', '2023-02-11 10:31:44'),
(20, 'QA', 'Zaakir Adams', 'zaakiradams6@gmail.com', 'Fahiem1952', 0, '2023-03-10 07:22:45', '2023-03-10 09:22:45'),
(21, 'QA', 'rockstar', 'support@beyondwebdesign.co.za', 'ROCKY123', 0, '2023-09-30 16:18:32', '2023-09-30 18:18:32'),
(24, 'QA', 'rockybalboa', 'bronwyn@beyondwebdesign.co.za', 'rocks123', 0, '2023-09-30 16:22:38', '2023-09-30 18:22:38'),
(25, 'QA', 'Zaakir Frizbo', 'Zaakir@frizbo.co.za', 'test2019', 0, '2023-09-30 17:28:49', '2023-09-30 19:28:49'),
(26, 'QA', 'Zaakir@arketek.co.za', 'Zaakir@arketek.co.za', '2019', 0, '2023-09-30 17:30:28', '2023-09-30 19:30:28'),
(27, 'QA', 'YakeenSadiq', 'Yakeen@therockstar.co.za', 'chillies', 0, '2023-10-02 13:45:25', '2023-10-02 15:45:25'),
(28, 'QA', 'rocks', 'rocco@beyondwebdesign.co.za', 'rocks123', 1, '2023-10-11 13:44:12', '2023-10-11 14:48:49'),
(29, 'QA', 'test1', 'test1@gmail.com', 'test1', 2, '2024-12-01 04:54:19', '2024-11-30 16:36:21'),
(30, 'QA', 'zak@longneck.co.za', 'zak@longneck.co.za', 'arketek123', 3, '2024-12-01 12:52:58', '2024-12-01 14:27:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grading_tool`
--
ALTER TABLE `grading_tool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `grading_tool`
--
ALTER TABLE `grading_tool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
