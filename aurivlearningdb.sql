-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 02:49 PM
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
  `tutor_gender` int(10) NOT NULL COMMENT '1 = MALE\r\n2 = FEMALE\r\n3 = OTHER',
  `timing` varchar(10) NOT NULL COMMENT '1 = weekdays\r\n2 = weekends\r\n3 = All',
  `req_information` varchar(255) NOT NULL,
  `time_and_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_master`
--

CREATE TABLE `tbl_payment_master` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 => Approval\r\n2 => Rejected/cancel\r\n3 => Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment_master`
--

INSERT INTO `tbl_payment_master` (`id`, `student_id`, `amount`, `payment_mode`, `description`, `status`, `created_at`, `update_at`) VALUES
(3, 12, 200, 'paypal', 'Registration Fee', 3, '2021-10-10 12:48:15', '2021-10-10 12:48:15');

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
(9, 'hardikstudent@gmail.com', 'd93a5def7511da3d0f2d171d9c344e91', 'hardikstudent@gmail.com', 'hardikstudent', '', 1, '', '', '', '', '', '9904841361', '9904841361', 0, '::1', '2021-10-10 14:28:58', 'active', '', '', '127.0.0.1', '', '', '', '', '', 1, '', 0, '2021-10-10 14:12:58'),
(8, 'testtutor@gmail.com', 'd93a5def7511da3d0f2d171d9c344e91', 'testtutor@gmail.com', 'testtutor', '', 1, '', '', '', '', '', '9632587410', '9632587410', 0, '127.0.0.1', '2021-10-10 10:26:04', 'active', '', '', '::1', '', '', '', '', '', 0, '', 0, '2021-10-10 07:33:49'),
(5, 'hardiktutor@gmail.com', 'd93a5def7511da3d0f2d171d9c344e91', 'hardiktutor@gmail.com', 'HardikTutor', '', 1, '', '', '', '', '', '9904841361', '9904841361', 0, '127.0.0.1', '2021-10-10 10:06:05', 'active', '', '', '127.0.0.1', '', '', '', '', '', 1, '', 0, '2021-10-10 07:20:28'),
(6, 'ronaktutor@gmail.com', 'd93a5def7511da3d0f2d171d9c344e91', 'ronaktutor@gmail.com', 'RonakTutor', '', 1, '', '', '', '', '', '9727803554', '9727803556', 0, '127.0.0.1', NULL, 'active', '', '', '', '', '', '', '', '', 3, '', 0, '2021-10-10 07:27:14'),
(7, 'develpoertutor@gmail.com', 'd93a5def7511da3d0f2d171d9c344e91', 'develpoertutor@gmail.com', 'Developertutor', '', 1, '', '', '', '', '', '9876543210', '987456310', 0, '127.0.0.1', '2021-10-10 09:32:23', 'active', '', '', '127.0.0.1', '', '', '', '', '', 3, '', 0, '2021-10-10 07:29:45'),
(10, 'ronakstudent@gmail.com', 'd93a5def7511da3d0f2d171d9c344e91', 'ronakstudent@gmail.com', 'ronakstudent', '', 1, '', '', '', '', '', '9727803554', '9727803554', 0, '127.0.0.1', NULL, 'inactive', '', '', '', '', '', '', '', '', 1, '', 0, '2021-10-10 14:43:01'),
(11, 'admin@gmail.com', 'd93a5def7511da3d0f2d171d9c344e91', 'admin@gmail.com', 'Admin', '', 1, '', '', '', '', '', '9904841361', '9904841361', 0, '127.0.0.1', '2021-10-10 14:46:59', 'active', '', '', '::1', '', '', '', '', '', 0, '', 0, '2021-10-10 14:44:17'),
(12, 'hiteshstudent@gmail.om', 'd93a5def7511da3d0f2d171d9c344e91', 'hiteshstudent@gmail.om', 'hiteshstudent', '', 2, '', '', '', '', '', '9876543212', '9876543212', 0, '127.0.0.1', NULL, 'inactive', '', '', '', '', '', '', '', '', 1, '', 0, '2021-10-10 14:48:15');

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
(2, 9, '1', '15', '1', '1', '1', 'ID', 'testing', 'NL', 'what need ti be take during the demo', 'special requirest', 2, '12:12', '2021-10-26', '2021-10-10 14:12:58'),
(3, 10, '1', '11', '1', '1', '1', 'HI', 'Description', '', '', '', 1, '', '', '2021-10-10 14:43:01'),
(4, 11, '1', '10', '1', '1', '1', 'AF', 'admin', 'HI', 'What needs to be taken during the demo. Demo is', 'Special Request or Additional Information', 1, '12:12', '2021-10-19', '2021-10-10 14:44:17'),
(5, 12, '1', '11', '1', '2', '1', 'HR', 'My description', 'DA', 'What needs to be taken during the demo. Dem', 'Special Request or Additio', 1, '12:12', '2021-10-25', '2021-10-10 14:48:15');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tutor_preference_details`
--

CREATE TABLE `tbl_tutor_preference_details` (
  `tutopid` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `language_known` varchar(100) NOT NULL,
  `identification_type` varchar(100) NOT NULL,
  `identification_number` int(11) NOT NULL,
  `Highest qualification` varchar(100) NOT NULL,
  `teaching_experience` varchar(100) NOT NULL,
  `subject_preference` varchar(100) NOT NULL,
  `extra_curricular_activity_preference` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `status` int(11) DEFAULT 1 COMMENT '1 => Active\r\n0 => Removed',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor_form_master`
--

INSERT INTO `tutor_form_master` (`id`, `tutor_id`, `student_name`, `student_email`, `tutor_email`, `tutor_name`, `date_session`, `totaltime_session`, `totalhours_session`, `taught_session`, `homework`, `notes`, `videolink`, `googledrive_link`, `upcoming_class`, `next_scheduled`, `time_next_scheduled`, `general_assessment`, `status`, `create_at`) VALUES
(7, 5, 'hhhhhhh', 'ggggg@sdf.sdf', 'asdsad@asd.sa', '3weasda', '2021-09-28', '2021-10-10 09:41:28', 'asda', 'asdsadsa', 'asdasd', 'asdasd', 'http://localhost/aurivlearning/tutor/createform.php', 'http://localhost/aurivlearning/tutor/createform.php', 'hhhhh', '2021-11-02', '16:51:00', 'asdsadsad', 1, '2021-10-10 09:02:26');

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
-- Indexes for table `tbl_payment_master`
--
ALTER TABLE `tbl_payment_master`
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
-- Indexes for table `tbl_tutor_preference_details`
--
ALTER TABLE `tbl_tutor_preference_details`
  ADD PRIMARY KEY (`tutopid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `support_master`
--
ALTER TABLE `support_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_payment_master`
--
ALTER TABLE `tbl_payment_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_regusers`
--
ALTER TABLE `tbl_regusers`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_stud_preference_details`
--
ALTER TABLE `tbl_stud_preference_details`
  MODIFY `studpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_trackprogress`
--
ALTER TABLE `tbl_trackprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tutor_preference_details`
--
ALTER TABLE `tbl_tutor_preference_details`
  MODIFY `tutopid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutor_form_master`
--
ALTER TABLE `tutor_form_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
