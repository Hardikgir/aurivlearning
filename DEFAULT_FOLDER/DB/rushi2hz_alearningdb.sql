-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2021 at 01:19 PM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rushi2hz_alearningdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regusers`
--

CREATE TABLE `tbl_regusers` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(70) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fname` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `lname` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gender` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 for man 2 for lady 3 for any',
  `address` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `address2` varchar(70) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `zip` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `wportelegramno` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_login` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `auth_provider` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `auth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `utype` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 for studernt 2 for parent 3 for tutore',
  `flagforgotpwd` int(11) NOT NULL DEFAULT '0' COMMENT '1 for change pwd and 0 not',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_regusers`
--

INSERT INTO `tbl_regusers` (`user_id`, `username`, `password`, `email`, `fname`, `lname`, `gender`, `address`, `address2`, `city`, `country`, `zip`, `phone`, `wportelegramno`, `newsletter`, `ip`, `last_login`, `status`, `auth_provider`, `auth_uid`, `last_ip`, `utype`, `flagforgotpwd`, `created_at`) VALUES
(29, 't1@test.com', 'b714337aa8007c433329ef43c7b8252c', 't1@test.com', 'TName', '', 1, '', '', '', '', '', '6457893210', '9632587410', 0, '::1', NULL, 'active', '', '', '', 2, 0, '2021-09-20 13:26:52'),
(30, 'sm@test.com', 'b714337aa8007c433329ef43c7b8252c', 'sm@test.com', 'First Name', '', 1, '', '', '', '', '', '6547893210', '9632587410', 0, '::1', '2021-09-28 12:49:42', 'active', '', '', '103.39.128.5', 2, 0, '2021-09-21 05:58:32'),
(31, 'tutor@test.com', 'b714337aa8007c433329ef43c7b8252c', 'tutor@test.com', 'tutor', '', 1, '', '', '', '', '', '6543217890', '6398521472', 0, '::1', '2021-09-28 12:50:07', 'active', '', '', '103.39.128.5', 3, 0, '2021-09-21 11:03:29'),
(32, 'snehal.pxelperfect@gmail.com', 'b714337aa8007c433329ef43c7b8252c', 'snehal.pxelperfect@gmail.com', 'Snehal Pxelperfect', '', 1, '', '', '', '', '', '9876543210', '7894563210', 0, '203.192.200.74', '2021-09-21 12:05:36', 'active', '', '', '203.192.200.74', 1, 0, '2021-09-21 12:05:06'),
(33, 'hemal@pxelperfect.com', 'b714337aa8007c433329ef43c7b8252c', 'hemal@pxelperfect.com', 'Hemal', '', 1, '', '', '', '', '', '9876543210', '6938521470', 0, '203.192.200.74', '2021-09-23 10:02:19', 'active', '', '', '203.192.200.74', 3, 0, '2021-09-23 04:48:21'),
(34, 'aurivaivin@gmail.com', 'a026866c499b8c6aeff7259e014ae987', 'aurivaivin@gmail.com', 'Aivin Saji', '', 1, '', '', '', '', '', '9987442025', '9987442025', 0, '59.93.17.162', '2021-09-28 05:34:08', 'active', '', '', '59.93.17.162', 1, 0, '2021-09-28 05:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stud_preference_details`
--

CREATE TABLE `tbl_stud_preference_details` (
  `studpid` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `syllabus` varchar(50) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `language` varchar(10) NOT NULL,
  `aboutyourequirement` text NOT NULL,
  `preferencelanguage` varchar(10) NOT NULL,
  `takendemominute` varchar(50) NOT NULL,
  `additionalinformation` text NOT NULL,
  `preferredays` tinyint(4) NOT NULL COMMENT '1 for weekdays 2 for weekends 3 for any',
  `demotime` varchar(20) NOT NULL,
  `demodate` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stud_preference_details`
--

INSERT INTO `tbl_stud_preference_details` (`studpid`, `regid`, `grade`, `age`, `subject`, `syllabus`, `activity`, `language`, `aboutyourequirement`, `preferencelanguage`, `takendemominute`, `additionalinformation`, `preferredays`, `demotime`, `demodate`, `created_at`) VALUES
(1, 29, '1', '18', '1', '1', '2', 'EU', 'Test Requirement', 'IT', '10mint', 'Test additional Information', 1, '16:59', '2021-09-30', '2021-09-20 13:26:52'),
(2, 30, '1', '18', '2', '2', '2', 'GU', 'Test Requirement', 'HI', '10Mints', 'NA', 1, '09:32', '2021-09-30', '2021-09-21 05:58:32'),
(3, 32, '1', '16', '2', '2', '2', 'TT', 'test Msg', 'HY', '15mints', 'NA', 2, '17:36', '2021-09-24', '2021-09-21 12:05:06'),
(4, 34, '1', '10', '', '1', '', 'EN', '', '', '', '', 1, '', '', '2021-09-28 05:33:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_regusers`
--
ALTER TABLE `tbl_regusers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_stud_preference_details`
--
ALTER TABLE `tbl_stud_preference_details`
  ADD PRIMARY KEY (`studpid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_regusers`
--
ALTER TABLE `tbl_regusers`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_stud_preference_details`
--
ALTER TABLE `tbl_stud_preference_details`
  MODIFY `studpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
