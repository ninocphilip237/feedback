-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 06:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_details`
--

CREATE TABLE `add_details` (
  `id` int(100) NOT NULL,
  `name` varchar(70) NOT NULL,
  `duration` varchar(70) NOT NULL,
  `date` text DEFAULT NULL,
  `venue` varchar(60) NOT NULL,
  `fac_type` text NOT NULL,
  `faculty` varchar(60) NOT NULL,
  `fac_id` text DEFAULT NULL,
  `course` varchar(150) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(100) NOT NULL,
  `date` text NOT NULL,
  `duration` float NOT NULL DEFAULT 0,
  `user_id` text NOT NULL,
  `admin_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(30) NOT NULL,
  `fac_id` text NOT NULL,
  `faculty` text NOT NULL,
  `admin_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(250) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` text DEFAULT NULL,
  `faculty_knw` text DEFAULT NULL,
  `communi_skill` text DEFAULT NULL,
  `commitment` text DEFAULT NULL,
  `general_view` text DEFAULT NULL,
  `weakness` text DEFAULT NULL,
  `strenth` text DEFAULT NULL,
  `addition` text DEFAULT NULL,
  `deletion` text DEFAULT NULL,
  `met_obj` text DEFAULT NULL,
  `admin_id` int(10) NOT NULL,
  `f_duration` text DEFAULT NULL,
  `f_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_effectiveness`
--

CREATE TABLE `feedback_effectiveness` (
  `id` int(250) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` text DEFAULT NULL,
  `learning_tp` text DEFAULT NULL,
  `app_learn` text DEFAULT NULL,
  `att_change` text DEFAULT NULL,
  `knw_dev` text DEFAULT NULL,
  `skill_dev` text DEFAULT NULL,
  `overall_rating` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `admin_id` int(10) NOT NULL,
  `f_duration` text DEFAULT NULL,
  `f_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_trainer`
--

CREATE TABLE `feedback_trainer` (
  `id` int(250) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` text DEFAULT NULL,
  `audience_pre` text DEFAULT NULL,
  `commitment` text DEFAULT NULL,
  `arrangement` text DEFAULT NULL,
  `general_view` text DEFAULT NULL,
  `c_objective` text DEFAULT NULL,
  `weakness` text DEFAULT NULL,
  `strenth` text DEFAULT NULL,
  `addition` text DEFAULT NULL,
  `deletion` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `questions` text DEFAULT NULL,
  `admin_id` int(10) NOT NULL,
  `f_duration` text DEFAULT NULL,
  `f_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_details`
--
ALTER TABLE `add_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_effectiveness`
--
ALTER TABLE `feedback_effectiveness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_trainer`
--
ALTER TABLE `feedback_trainer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_details`
--
ALTER TABLE `add_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_effectiveness`
--
ALTER TABLE `feedback_effectiveness`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_trainer`
--
ALTER TABLE `feedback_trainer`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
