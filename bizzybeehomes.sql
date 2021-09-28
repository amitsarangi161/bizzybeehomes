-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2021 at 10:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizzybeehomes`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `shortdescription` longtext DEFAULT NULL,
  `longdescription` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `companyname` varchar(200) DEFAULT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `gstno` varchar(200) DEFAULT NULL,
  `panno` varchar(255) DEFAULT NULL,
  `regno` varchar(200) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobile` varchar(500) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `supportmobile` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `mondaytofridaytiming` varchar(200) DEFAULT NULL,
  `saturdaytiming` varchar(200) DEFAULT NULL,
  `sundaytiming` varchar(200) DEFAULT NULL,
  `fblink` varchar(200) DEFAULT NULL,
  `twitterlink` varchar(200) DEFAULT NULL,
  `instalink` varchar(200) DEFAULT NULL,
  `projectdone` varchar(255) DEFAULT NULL,
  `noofclients` varchar(200) DEFAULT NULL,
  `noofawards` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `companyname`, `tagline`, `gstno`, `panno`, `regno`, `email`, `mobile`, `about`, `address`, `supportmobile`, `logo`, `mondaytofridaytiming`, `saturdaytiming`, `sundaytiming`, `fblink`, `twitterlink`, `instalink`, `projectdone`, `noofclients`, `noofawards`, `created_at`, `updated_at`) VALUES
(1, 'BizzybeeHomes', 'Bizzybeehomes lead the construction business<br>We know how to build a perfect dream project.', 'ERY737373773733', 'EYVPS5353U', '5353535353535353535', 'bizzybeehomes@gmail.com,info@bizzybeehomes.com', '+91 9938071931,+91 8637226675', NULL, 'PLOT NO. B-9, I.D. MARKET IRC VILLAGE BHUBANESWAR Khordha OR 751015 IN', '+91 9938071931', '1632638318.logo(1).png', '10am to 6pm', '10am to 3pm', 'Closed', '#', '#', '#', '10', '20', '3', '2021-09-26 01:02:00', '2021-09-26 02:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `is_completed` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `subject`, `phone`, `email`, `msg`, `is_completed`, `created_at`, `updated_at`) VALUES
(1, 'Amit Kumar Sarangi', 'Hello', '8474747', 'ficijav650@eyeremind.com', 'Hello', 1, '2021-09-26 02:49:58', '2021-09-26 03:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'amitsarangissp@gmail.com', '2021-09-26 03:51:50', '2021-09-26 03:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `termsandconditions`
--

CREATE TABLE `termsandconditions` (
  `id` int(11) NOT NULL,
  `termsandconditions` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termsandconditions`
--

INSERT INTO `termsandconditions` (`id`, `termsandconditions`, `created_at`, `updated_at`) VALUES
(1, '<blockquote>\r\n<p>This is a Terms and Conditions Example</p>\r\n</blockquote>', '2021-09-26 04:17:45', '2021-09-26 04:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `usertype`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$10$goJXazIc8UTnRubopJob1.JP2avGCv2CE2w600yBcOBX7zbI92p8e', 'UQAHgaUGqA0mIKfgGFOK4PsuTny40uxKG30YpUNkcgLAoCgo0shfqES7nQ0K', '2021-04-16 06:47:50', '2021-04-16 06:47:50'),
(2, 'Saibal', 'er.saibal.c@gmail.com', '5554443333', 'INTERVIEWER', '$2y$10$jZ9T0LRROzkJ3jCzNLCOCe3BdoJIADeuUlO4GR3yFgqLi7N3HNboe', NULL, '2021-09-02 12:56:03', '2021-09-02 12:56:03'),
(3, 'Amit', 'amitsarangi161@gmail.com', '8899885544', 'INTERVIEWER', '$2y$10$QtI0sbNYwdj5nQBU1gZHx./ypue/x/1v75uZJbntJDayz7WJhjWXC', NULL, '2021-09-02 13:06:21', '2021-09-02 13:06:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termsandconditions`
--
ALTER TABLE `termsandconditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `termsandconditions`
--
ALTER TABLE `termsandconditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
