-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 04:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aurivlearningdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_learning_master`
--

CREATE TABLE `new_learning_master` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `subject_extracurricular_ctivity` varchar(255) NOT NULL,
  `language` varchar(11) NOT NULL,
  `tutor_grade` varchar(10) NOT NULL COMMENT '1 = Silver\r\n2 = Gold\r\n3 = Platinum',
  `tutor_gender` int(10) NOT NULL,
  `timing` varchar(10) NOT NULL COMMENT '1 = weekdays\r\n2 = weekends\r\n3 = All',
  `req_information` varchar(255) NOT NULL,
  `time_and_date` datetime NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_learning_master`
--

INSERT INTO `new_learning_master` (`id`, `user_id`, `fname`, `grade`, `subject_extracurricular_ctivity`, `language`, `tutor_grade`, `tutor_gender`, `timing`, `req_information`, `time_and_date`, `create_at`) VALUES
(6, 30, 'hgdhgfhgs', 5, 'gdgggdggdf', 'Hindi', '2', 2, '2', 'dfgfdfhfhh', '2021-09-29 00:00:00', '2021-09-30 12:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `support_master`
--

CREATE TABLE `support_master` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `utype` tinyint(4) NOT NULL COMMENT ' 	1 for studernt 2 for parent 3 for tutore ',
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support_master`
--

INSERT INTO `support_master` (`id`, `user_id`, `utype`, `fname`, `email`, `phone`, `message`, `create_at`) VALUES
(4, 30, 2, 'asdad', 'asd@gasdl.asd', '7894564', 'asdasdsa', '2021-09-30 09:31:18');

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
  `gender` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 for man 2 for lady 3 for any',
  `address` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `address2` varchar(70) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `zip` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `wportelegramno` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT 0,
  `ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_login` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `auth_provider` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `auth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_ip` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `parent_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school_college` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_of_school_college` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `utype` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 = admin\r\n1 = studernt\r\n2 = parent \r\n3 = tutore',
  `profileimg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flagforgotpwd` int(11) NOT NULL DEFAULT 0 COMMENT '1 for change pwd and 0 not',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_regusers`
--

INSERT INTO `tbl_regusers` (`user_id`, `username`, `password`, `email`, `fname`, `lname`, `gender`, `address`, `address2`, `city`, `country`, `zip`, `phone`, `wportelegramno`, `newsletter`, `ip`, `last_login`, `status`, `auth_provider`, `auth_uid`, `last_ip`, `parent_name`, `parent_email`, `location`, `school_college`, `location_of_school_college`, `utype`, `profileimg`, `flagforgotpwd`, `created_at`) VALUES
(29, 'admin@gmail.com', 'b714337aa8007c433329ef43c7b8252c', 't1@test.com', 'TName', '', 1, '', '', '', '', '', '6457893210', '9632587410', 0, '::1', NULL, 'inactive', '', '', '', '', '', '', '', '', 0, '', 0, '2021-09-20 13:26:52'),
(30, 'ronak@gmail.com', 'b714337aa8007c433329ef43c7b8252c', 'ronaktest@gmail.com', 'Ronak', '', 1, '', '', '', '', '', '9632587410', '9876541230', 0, '::1', '2021-10-04 12:01:30', 'active', '', '', '127.0.0.1', 'testing', 'father@gmail.com', 'porbander', 'GTU', 'vadodara', 0, '.', 0, '2021-09-21 05:58:32'),
(31, 'tutor@test.com', 'b714337aa8007c433329ef43c7b8252c', 'tutor@test.com', 'tutor', '', 1, '', '', '', '', '', '6543217890', '6398521472', 0, '::1', '2021-10-04 11:52:02', 'active', '', '', '127.0.0.1', '', '', '', '', '', 2, '', 0, '2021-09-21 11:03:29'),
(32, 'snehal.pxelperfect@gmail.com', 'b714337aa8007c433329ef43c7b8252c', 'snehal.pxelperfect@gmail.com', 'Snehal Pxelperfect', '', 1, '', '', '', '', '', '9876543210', '7894563210', 0, '203.192.200.74', '2021-09-21 12:05:36', 'active', '', '', '203.192.200.74', '', '', '', '', '', 1, '', 0, '2021-09-21 12:05:06'),
(33, 'hemal@pxelperfect.com', 'b714337aa8007c433329ef43c7b8252c', 'hemal@pxelperfect.com', 'Hemal', '', 1, '', '', '', '', '', '9876543210', '6938521470', 0, '203.192.200.74', '2021-09-23 10:02:19', 'active', '', '', '203.192.200.74', '', '', '', '', '', 3, '', 0, '2021-09-23 04:48:21'),
(34, 'aurivaivin@gmail.com', 'a026866c499b8c6aeff7259e014ae987', 'aurivaivin@gmail.com', 'Aivin Saji', '', 1, '', '', '', '', '', '9987442025', '9987442025', 0, '59.93.17.162', '2021-09-28 05:34:08', 'inactive', '', '', '59.93.17.162', '', '', '', '', '', 1, '', 0, '2021-09-28 05:33:59');

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
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stud_preference_details`
--

INSERT INTO `tbl_stud_preference_details` (`studpid`, `regid`, `grade`, `age`, `subject`, `syllabus`, `activity`, `language`, `aboutyourequirement`, `preferencelanguage`, `takendemominute`, `additionalinformation`, `preferredays`, `demotime`, `demodate`, `created_at`) VALUES
(1, 29, '1', '18', '1', '1', '2', 'EU', 'Test Requirement', 'IT', '10mint', 'Test additional Information', 1, '16:59', '2021-09-30', '2021-09-20 13:26:52'),
(2, 30, '1', '18', '2', '10', '2', 'GU', 'Test Requirement', 'English', '10Mints', 'NA', 1, '09:32', '2021-09-30', '2021-09-21 05:58:32'),
(3, 32, '1', '16', '2', '2', '2', 'TT', 'test Msg', 'HY', '15mints', 'NA', 2, '17:36', '2021-09-24', '2021-09-21 12:05:06'),
(4, 34, '1', '10', '', '1', '', 'EN', '', '', '', '', 1, '', '', '2021-09-28 05:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trackprogress`
--

CREATE TABLE `tbl_trackprogress` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `select_date` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `googledrive` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_trackprogress`
--

INSERT INTO `tbl_trackprogress` (`id`, `student_id`, `tutor_id`, `select_date`, `subject`, `score`, `googledrive`, `feedback`, `created_by`, `created_at`) VALUES
(1, 30, 33, '2021-10-12', 'maths', 8, 'https://www.google.com/search?q=join+more+than+two+tables+in+mysql&client=firefox-b-d&ei=ZjZYYd2oKv6O4-EPz8eBmAE&oq=join+more+than+two+tables+in+mysql&gs_lcp=Cgdnd3Mtd2l6EAMYATIFCAAQkQIyBQgAEJECMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIA', 'testing', 31, '2021-10-02 11:05:06'),
(2, 30, 33, '2021-10-12', 'asdasd', 8, 'http://localhost/aurivlearning/tutor/trackprocess.php', 'test feedback13', 31, '2021-10-02 13:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_form_master`
--

CREATE TABLE `tutor_form_master` (
  `id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `tutor_email` varchar(50) NOT NULL,
  `tutor_name` varchar(50) NOT NULL,
  `date_session` date NOT NULL,
  `totaltime_session` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `totalhours_session` varchar(50) NOT NULL,
  `taught_session` varchar(50) NOT NULL,
  `homework` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `videolink` varchar(255) NOT NULL,
  `googledrive_link` varchar(255) NOT NULL,
  `upcoming_class` varchar(50) NOT NULL,
  `next_scheduled` date NOT NULL,
  `time_next_scheduled` time NOT NULL,
  `general_assessment` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_form_master`
--

INSERT INTO `tutor_form_master` (`id`, `tutor_id`, `student_name`, `student_email`, `tutor_email`, `tutor_name`, `date_session`, `totaltime_session`, `totalhours_session`, `taught_session`, `homework`, `notes`, `videolink`, `googledrive_link`, `upcoming_class`, `next_scheduled`, `time_next_scheduled`, `general_assessment`, `create_at`) VALUES
(1, 31, 'asdsa', 'asdsd@asd.sd', 'asd@asd.sd', 'asdsad', '2021-10-05', '0000-00-00 00:00:00', 'asd', 'sd', 'asds', 'asda', 'http://localhost/aurivlearning/tutor/createform.ph', 'http://localhost/aurivlearning/tutor/createform.ph', 'asdsad', '2021-10-04', '12:02:00', 'asd', '2021-10-02 07:03:05'),
(2, 31, 'hjkh', 'asdsd@asd.sd', 'asd@asd.sd', 'asdsad', '2021-10-05', '2021-10-03 14:05:44', 'asd', 'sd', 'asds', 'asda', 'http://localhost/aurivlearning/tutor/createform.php', 'http://localhost/aurivlearning/tutor/createform.php', 'asdsad', '2021-10-04', '12:02:00', 'asd', '2021-10-02 07:03:05'),
(3, 31, 'Ronak', 'aasd@gmasd.asd', 'dfdhfghfg', 'asdasd', '2021-10-18', '2021-10-03 14:12:07', 'asdas', 'asdas', 'asdasd', 'asdasd', 'http://localhost/aurivlearning/tutor/createform.php', 'http://localhost/aurivlearning/tutor/createform.php', 'asdsad', '2021-10-11', '12:22:00', 'asdasd', '2021-10-02 07:03:05'),
(4, 31, 'hardik', 'asdasd@asds.sa', 'ghjhjkhuknbmbnm', 'asdasd', '2021-10-25', '2021-10-03 14:12:13', 'asdas', 'dasdasd', 'asdsa', 'asdasd', 'http://localhost/aurivlearning/tutor/createform.php', 'http://localhost/aurivlearning/tutor/createform.php', 'asdas', '2021-10-05', '12:12:00', 'asdsad', '2021-10-02 07:03:05'),
(5, 31, 'asd', 'asdasd@asd.sd', 'asd@asd.sd', 'asdsad', '2021-10-13', '0000-00-00 00:00:00', 'asda', 'sdsadsad', 'asdas', 'asdasd', 'http://localhost/aurivlearning/tutor/createform.php?msg=fail', 'http://localhost/aurivlearning/tutor/createform.php?msg=fail', 'asdsad', '2021-10-12', '12:21:00', 'asd', '2021-10-02 07:03:05'),
(6, 31, 'hhjbhhjbhj', 'dhhghh@gmail.com', 'gfgfgfgffg@gmail.com', 'ghdhgjdgj', '2021-10-11', '0000-00-00 00:00:00', 'fdgfdf', 'fdhdfhd', 'fhdhd', 'ghfgh', 'http://localhost/aurivlearning/tutor/createform.php', 'http://localhost/aurivlearning/tutor/createform.php', 'jhjghkhkk', '2021-10-12', '12:04:00', 'hnvmhgkghk', '2021-10-03 15:02:57'),
(7, 31, 'harsh', 'harsh@gmail.com', 'jayesh@gmail.com', 'jayesh', '2021-10-05', '0000-00-00 00:00:00', '12', 'efgdfgr', 'fhhfhfhh', 'hfgghhfgjyj', 'http://localhost/aurivlearning/tutor/createform.php', 'http://localhost/aurivlearning/tutor/createform.php', 'reyhetrhyh', '2021-10-12', '12:00:00', 'dgffhdh', '2021-10-04 04:39:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_learning_master`
--
ALTER TABLE `new_learning_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_master`
--
ALTER TABLE `support_master`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_trackprogress`
--
ALTER TABLE `tbl_trackprogress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_form_master`
--
ALTER TABLE `tutor_form_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_learning_master`
--
ALTER TABLE `new_learning_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `support_master`
--
ALTER TABLE `support_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- AUTO_INCREMENT for table `tbl_trackprogress`
--
ALTER TABLE `tbl_trackprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutor_form_master`
--
ALTER TABLE `tutor_form_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
