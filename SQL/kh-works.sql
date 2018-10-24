-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 06:55 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kh-works`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl1_hr_employee`
--

CREATE TABLE `tbl1_hr_employee` (
  `emp_number` int(7) NOT NULL DEFAULT '0',
  `employee_id` varchar(50) DEFAULT NULL,
  `emp_lastname` varchar(100) NOT NULL DEFAULT '',
  `emp_firstname` varchar(100) NOT NULL DEFAULT '',
  `emp_middle_name` varchar(100) NOT NULL DEFAULT '',
  `emp_nick_name` varchar(100) DEFAULT '',
  `emp_smoker` smallint(6) DEFAULT '0',
  `ethnic_race_code` varchar(13) DEFAULT NULL,
  `emp_birthday` date DEFAULT NULL,
  `nation_code` int(4) DEFAULT NULL,
  `emp_gender` smallint(6) DEFAULT NULL,
  `emp_marital_status` varchar(20) DEFAULT NULL,
  `emp_ssn_num` varchar(100) CHARACTER SET latin1 DEFAULT '',
  `emp_sin_num` varchar(100) DEFAULT '',
  `emp_other_id` varchar(100) DEFAULT '',
  `emp_dri_lice_num` varchar(100) DEFAULT '',
  `emp_dri_lice_exp_date` date DEFAULT NULL,
  `emp_military_service` varchar(100) DEFAULT '',
  `emp_status` int(13) DEFAULT NULL,
  `job_title_code` int(7) DEFAULT NULL,
  `eeo_cat_code` int(11) DEFAULT NULL,
  `work_station` int(6) DEFAULT NULL,
  `emp_street1` varchar(100) DEFAULT '',
  `emp_street2` varchar(100) DEFAULT '',
  `city_code` varchar(100) DEFAULT '',
  `coun_code` varchar(100) DEFAULT '',
  `provin_code` varchar(100) DEFAULT '',
  `emp_zipcode` varchar(20) DEFAULT NULL,
  `emp_hm_telephone` varchar(50) DEFAULT NULL,
  `emp_mobile` varchar(50) DEFAULT NULL,
  `emp_work_telephone` varchar(50) DEFAULT NULL,
  `emp_work_email` varchar(50) DEFAULT NULL,
  `sal_grd_code` varchar(13) DEFAULT NULL,
  `joined_date` date DEFAULT NULL,
  `emp_oth_email` varchar(50) DEFAULT NULL,
  `termination_id` int(4) DEFAULT NULL,
  `custom1` varchar(250) DEFAULT NULL,
  `custom2` varchar(250) DEFAULT NULL,
  `custom3` varchar(250) DEFAULT NULL,
  `custom4` varchar(250) DEFAULT NULL,
  `custom5` varchar(250) DEFAULT NULL,
  `custom6` varchar(250) DEFAULT NULL,
  `custom7` varchar(250) DEFAULT NULL,
  `custom8` varchar(250) DEFAULT NULL,
  `custom9` varchar(250) DEFAULT NULL,
  `custom10` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cvs`
--

CREATE TABLE `tbl_cvs` (
  `id` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 NOT NULL,
  `image` longblob NOT NULL,
  `type` varchar(32) CHARACTER SET utf8 NOT NULL,
  `size` varchar(32) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `exper_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cvs`
--

INSERT INTO `tbl_cvs` (`id`, `name`, `image`, `type`, `size`, `user_id`, `exper_id`, `date`, `description`) VALUES
(1, 'Cvs Tittle', 0x62756e73696e2e6a7067, 'image/jpeg', '85635', 3, NULL, NULL, 'Cvs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE `tbl_jobs` (
  `Id` int(11) NOT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `ContactName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `postingDate` datetime DEFAULT NULL,
  `ClosingDate` datetime DEFAULT NULL,
  `JobResponsible` longtext,
  `jobdesc` longtext,
  `jobreqired` longtext,
  `city` varchar(255) DEFAULT NULL,
  `main_biz` varchar(255) DEFAULT NULL,
  `compro` longtext,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `date_upload` datetime DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `job_type_full` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_candidate`
--

CREATE TABLE `tbl_job_candidate` (
  `id` int(13) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(30) DEFAULT NULL,
  `status` int(4) NOT NULL,
  `comment` text,
  `mode_of_application` int(4) DEFAULT NULL,
  `date_of_application` date NOT NULL,
  `cv_file_id` int(13) DEFAULT NULL,
  `cv_text_version` text,
  `keywords` varchar(255) DEFAULT NULL,
  `added_person` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_candidate`
--

INSERT INTO `tbl_job_candidate` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `status`, `comment`, `mode_of_application`, `date_of_application`, `cv_file_id`, `cv_text_version`, `keywords`, `added_person`) VALUES
(4, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(5, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(6, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(7, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(8, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(9, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(10, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(11, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(12, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL),
(13, 'PisethRos', NULL, 'PisethRos', 'Piseth.Ros@gmail.com', '0983445566', 1, NULL, 1, '2018-10-19', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_candidate_attachment`
--

CREATE TABLE `tbl_job_candidate_attachment` (
  `id` int(13) NOT NULL,
  `candidate_id` int(13) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `file_size` int(11) NOT NULL,
  `file_content` mediumblob,
  `attachment_type` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_candidate_attachment`
--

INSERT INTO `tbl_job_candidate_attachment` (`id`, `candidate_id`, `file_name`, `file_type`, `file_size`, `file_content`, `attachment_type`) VALUES
(4, 4, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(5, 5, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(6, 6, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(7, 7, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(8, 8, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(9, 9, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(10, 10, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(11, 11, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(12, 12, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL),
(13, 13, 'bunsin.jpg', 'image/jpeg', 85635, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_candidate_history`
--

CREATE TABLE `tbl_job_candidate_history` (
  `id` int(13) NOT NULL,
  `candidate_id` int(13) NOT NULL,
  `vacancy_id` int(13) DEFAULT NULL,
  `candidate_vacancy_name` varchar(255) DEFAULT NULL,
  `interview_id` int(13) DEFAULT NULL,
  `action` int(4) NOT NULL,
  `performed_by` int(13) DEFAULT NULL,
  `performed_date` datetime NOT NULL,
  `note` text,
  `interviewers` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_candidate_vacancy`
--

CREATE TABLE `tbl_job_candidate_vacancy` (
  `id` int(13) NOT NULL,
  `candidate_id` int(13) NOT NULL,
  `vacancy_id` int(13) NOT NULL,
  `status` varchar(100) NOT NULL,
  `applied_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_candidate_vacancy`
--

INSERT INTO `tbl_job_candidate_vacancy` (`id`, `candidate_id`, `vacancy_id`, `status`, `applied_date`) VALUES
(13, 4, 20, '1', '2018-10-19'),
(14, 7, 20, '1', '2018-10-19'),
(15, 8, 20, '1', '2018-10-19'),
(16, 9, 20, '1', '2018-10-19'),
(17, 10, 20, '1', '2018-10-19'),
(18, 11, 20, '1', '2018-10-19'),
(19, 12, 20, '1', '2018-10-19'),
(20, 13, 20, '1', '2018-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_category`
--

CREATE TABLE `tbl_job_category` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_category`
--

INSERT INTO `tbl_job_category` (`id`, `name`) VALUES
(1, 'Accounting'),
(2, 'Administration'),
(3, 'Architecture/Engineering'),
(4, 'Assistant/Secretary'),
(5, 'Audit/Taxation'),
(6, 'Bank/Insurance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_interview`
--

CREATE TABLE `tbl_job_interview` (
  `id` int(13) NOT NULL,
  `candidate_vacancy_id` int(13) DEFAULT NULL,
  `candidate_id` int(13) DEFAULT NULL,
  `interview_name` varchar(100) NOT NULL,
  `interview_date` date DEFAULT NULL,
  `interview_time` time DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_interview_attachment`
--

CREATE TABLE `tbl_job_interview_attachment` (
  `id` int(13) NOT NULL,
  `interview_id` int(13) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `file_size` int(11) NOT NULL,
  `file_content` mediumblob,
  `attachment_type` int(4) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_interview_interviewer`
--

CREATE TABLE `tbl_job_interview_interviewer` (
  `interview_id` int(13) NOT NULL,
  `interviewer_id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_specification_attachment`
--

CREATE TABLE `tbl_job_specification_attachment` (
  `id` int(13) NOT NULL,
  `job_title_id` int(13) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `file_size` int(11) NOT NULL,
  `file_content` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_title`
--

CREATE TABLE `tbl_job_title` (
  `id` int(13) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_description` varchar(400) DEFAULT NULL,
  `note` varchar(400) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_title`
--

INSERT INTO `tbl_job_title` (`id`, `job_title`, `job_description`, `note`, `is_deleted`) VALUES
(2, 'Senior Administrator ', 'testing something new', 'xd i\'m still me 2008', 1),
(3, 'Key Account Executive\'Speak Chinese', '•	Drive the sales to achieve the individual sales target in own area and track ongoing results to ensure that objectives in terms of customers, revenue, sales growth, availability, visibility and customer price of products are achieved within the area.\r\n•	Manage the implementation of brand, trade and sales area programs and the localized activities.\r\n•	Manage the area’s key trade partner performan', 'new job available now', 0),
(4, 'Senior Account (Urgent)', ' Sk Planation(Cambodia) Pte.Ltd is foreign company, established in the Year 2010, the company is involve into major projects of agriculture crops located in Konmom and Veounsai distric, Ratanakiri province and also company imported cooking oil products from Malaysia. ', '- Ensure transactions are properly recorded timely.\r\n- Closing monthly financial statement report\r\n- Managing all account\r\n- Coaching and leading team performance & productivities\r\n- Managing Accounting system (Quickbook)\r\n- Must have good knowledge of taxation\r\n- Other tasks assigned by owner', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_vacancy`
--

CREATE TABLE `tbl_job_vacancy` (
  `id` int(13) NOT NULL,
  `job_title_code` int(4) NOT NULL,
  `hiring_manager_id` int(13) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  `no_of_positions` int(13) DEFAULT NULL,
  `status` int(4) NOT NULL,
  `published_in_feed` tinyint(1) NOT NULL DEFAULT '0',
  `defined_time` datetime NOT NULL,
  `updated_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_vacancy`
--

INSERT INTO `tbl_job_vacancy` (`id`, `job_title_code`, `hiring_manager_id`, `name`, `description`, `no_of_positions`, `status`, `published_in_feed`, `defined_time`, `updated_time`) VALUES
(20, 2, 1, 'abc', 'fdfsdf', 1, 1, 1, '2018-10-04 00:00:00', '2018-10-04 00:00:00'),
(21, 3, 1, 'Reamea', 'dfdfsd', 1, 1, 1, '2018-10-04 00:00:00', '2018-10-04 00:00:00'),
(22, 1, 1, 'reamea', 'test', 1, 1, 1, '2018-10-04 00:00:00', '2018-10-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_vacancy_attachment`
--

CREATE TABLE `tbl_job_vacancy_attachment` (
  `id` int(13) NOT NULL,
  `vacancy_id` int(13) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `file_type` varchar(200) DEFAULT NULL,
  `file_size` int(11) NOT NULL,
  `file_content` mediumblob,
  `attachment_type` int(4) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization_gen_info`
--

CREATE TABLE `tbl_organization_gen_info` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tax_id` varchar(30) DEFAULT NULL,
  `registration_number` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `province` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `zip_code` varchar(30) DEFAULT NULL,
  `street1` varchar(100) DEFAULT NULL,
  `street2` varchar(100) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `postal_address` varchar(220) NOT NULL,
  `website` varchar(220) NOT NULL,
  `pwd` varchar(220) NOT NULL,
  `mobile` varchar(220) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_organization_gen_info`
--

INSERT INTO `tbl_organization_gen_info` (`id`, `name`, `tax_id`, `registration_number`, `phone`, `fax`, `email`, `country`, `province`, `city`, `zip_code`, `street1`, `street2`, `note`, `postal_address`, `website`, `pwd`, `mobile`, `status`) VALUES
(5, 'reamea', NULL, NULL, '033333', NULL, 'reamea@gmail.com', NULL, NULL, '3333', NULL, NULL, NULL, 'Company Profiles', 'Postal code', 'http://localhost:8000/ui/registers/create', '$2y$10$6gF01BHoEmPBVMKkEHqCdOkUDYrqpFr6iz9vMUxDVhxqj413ezDcm', '33333', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `md5_id` varchar(200) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `full_name` tinytext CHARACTER SET utf8,
  `user_name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sex` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_email` varchar(220) CHARACTER SET utf8 DEFAULT '',
  `user_level` tinyint(3) DEFAULT '1',
  `pwd` varchar(220) CHARACTER SET utf8 DEFAULT '',
  `address` text CHARACTER SET utf8,
  `country` varchar(200) CHARACTER SET utf8 DEFAULT '',
  `tel` varchar(200) CHARACTER SET utf8 DEFAULT '',
  `mobile` varchar(200) CHARACTER SET utf8 DEFAULT '',
  `website` text CHARACTER SET utf8,
  `users_ip` varchar(200) CHARACTER SET utf8 DEFAULT '',
  `approved` int(1) DEFAULT '0',
  `activation_code` varchar(200) CHARACTER SET utf8 DEFAULT '0',
  `emailme_act` int(1) DEFAULT '0',
  `ckey` varchar(220) CHARACTER SET utf8 DEFAULT '',
  `ctime` varchar(220) CHARACTER SET utf8 DEFAULT '',
  `city` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `photo` blob,
  `experiences` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `md5_id`, `full_name`, `user_name`, `status`, `sex`, `user_email`, `user_level`, `pwd`, `address`, `country`, `tel`, `mobile`, `website`, `users_ip`, `approved`, `activation_code`, `emailme_act`, `ckey`, `ctime`, `city`, `photo`, `experiences`, `dob`, `date`) VALUES
(3, '', 'PisethRos', NULL, '1', NULL, 'Piseth.Ros@gmail.com', 1, '$2y$10$O7aq2D0sudqcISCZ6efr5uXtLgdcnNnUVC7y1AOiafGjFWrttRB9.', 'Postal Code', '', '09833333', '0983445566', 'http://localhost:8000/ui/registers/create', '', 0, '0', 0, '', '', '', NULL, NULL, NULL, '2018-10-19 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl1_hr_employee`
--
ALTER TABLE `tbl1_hr_employee`
  ADD PRIMARY KEY (`emp_number`),
  ADD KEY `work_station` (`work_station`),
  ADD KEY `nation_code` (`nation_code`),
  ADD KEY `job_title_code` (`job_title_code`),
  ADD KEY `emp_status` (`emp_status`),
  ADD KEY `eeo_cat_code` (`eeo_cat_code`),
  ADD KEY `termination_id` (`termination_id`);

--
-- Indexes for table `tbl_cvs`
--
ALTER TABLE `tbl_cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_job_candidate`
--
ALTER TABLE `tbl_job_candidate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_person` (`added_person`);

--
-- Indexes for table `tbl_job_candidate_attachment`
--
ALTER TABLE `tbl_job_candidate_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `tbl_job_candidate_history`
--
ALTER TABLE `tbl_job_candidate_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_id` (`candidate_id`),
  ADD KEY `vacancy_id` (`vacancy_id`),
  ADD KEY `interview_id` (`interview_id`),
  ADD KEY `performed_by` (`performed_by`);

--
-- Indexes for table `tbl_job_candidate_vacancy`
--
ALTER TABLE `tbl_job_candidate_vacancy`
  ADD PRIMARY KEY (`candidate_id`,`vacancy_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `vacancy_id` (`vacancy_id`);

--
-- Indexes for table `tbl_job_category`
--
ALTER TABLE `tbl_job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_interview`
--
ALTER TABLE `tbl_job_interview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_vacancy_id` (`candidate_vacancy_id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `tbl_job_interview_attachment`
--
ALTER TABLE `tbl_job_interview_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interview_id` (`interview_id`);

--
-- Indexes for table `tbl_job_interview_interviewer`
--
ALTER TABLE `tbl_job_interview_interviewer`
  ADD PRIMARY KEY (`interview_id`,`interviewer_id`),
  ADD KEY `interviewer_id` (`interviewer_id`);

--
-- Indexes for table `tbl_job_specification_attachment`
--
ALTER TABLE `tbl_job_specification_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_title_id` (`job_title_id`);

--
-- Indexes for table `tbl_job_title`
--
ALTER TABLE `tbl_job_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_vacancy`
--
ALTER TABLE `tbl_job_vacancy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_title_code` (`job_title_code`),
  ADD KEY `hiring_manager_id` (`hiring_manager_id`);

--
-- Indexes for table `tbl_job_vacancy_attachment`
--
ALTER TABLE `tbl_job_vacancy_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vacancy_id` (`vacancy_id`);

--
-- Indexes for table `tbl_organization_gen_info`
--
ALTER TABLE `tbl_organization_gen_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users` ADD FULLTEXT KEY `idx_search` (`full_name`,`address`,`user_email`,`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cvs`
--
ALTER TABLE `tbl_cvs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_candidate`
--
ALTER TABLE `tbl_job_candidate`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_job_candidate_attachment`
--
ALTER TABLE `tbl_job_candidate_attachment`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_job_candidate_history`
--
ALTER TABLE `tbl_job_candidate_history`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_candidate_vacancy`
--
ALTER TABLE `tbl_job_candidate_vacancy`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_job_category`
--
ALTER TABLE `tbl_job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_job_interview`
--
ALTER TABLE `tbl_job_interview`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_interview_attachment`
--
ALTER TABLE `tbl_job_interview_attachment`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_specification_attachment`
--
ALTER TABLE `tbl_job_specification_attachment`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_title`
--
ALTER TABLE `tbl_job_title`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_job_vacancy`
--
ALTER TABLE `tbl_job_vacancy`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_job_vacancy_attachment`
--
ALTER TABLE `tbl_job_vacancy_attachment`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_organization_gen_info`
--
ALTER TABLE `tbl_organization_gen_info`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_job_specification_attachment`
--
ALTER TABLE `tbl_job_specification_attachment`
  ADD CONSTRAINT `tbl_job_specification_attachment_ibfk_1` FOREIGN KEY (`job_title_id`) REFERENCES `tbl_job_title` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
