-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2015 at 10:24 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isisqcpu`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessaccounts`
--

CREATE TABLE IF NOT EXISTS `accessaccounts` (
  `acc_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passsword` varchar(50) NOT NULL,
  `access_type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessaccounts`
--

INSERT INTO `accessaccounts` (`acc_id`, `username`, `passsword`, `access_type`) VALUES
(1, 'registrar', 'registrar', 'Registrar'),
(2, 'qcpumis', 'qcpumis', 'MIS');

-- --------------------------------------------------------

--
-- Table structure for table `accounting`
--

CREATE TABLE IF NOT EXISTS `accounting` (
  `id` int(11) NOT NULL,
  `stud_num` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `date_payment` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting`
--

INSERT INTO `accounting` (`id`, `stud_num`, `payment`, `date_payment`) VALUES
(1, '12-2351', '2758.00', '12-23-14'),
(2, '12-2351', '2200.70', '8-16-14');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `announce_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` varchar(500) NOT NULL,
  `datePosted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announce_id`, `title`, `body`, `datePosted`) VALUES
(1, 'Last Day of Dropping - August 3, 2015', 'Last Day of Dropping - August 3, 2015', '2015-10-22 15:46:36'),
(2, 'October 23, 2015', 'Happy Birthday', '2015-10-22 16:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `forum-admin`
--

CREATE TABLE IF NOT EXISTS `forum-admin` (
  `admin_id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `admin_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum-admin`
--

INSERT INTO `forum-admin` (`admin_id`, `user`, `pass`, `admin_name`) VALUES
(1, 'admin', '85c1691d7d7d1719b77d832c313e5379', 'admin_name');

-- --------------------------------------------------------

--
-- Table structure for table `forum-contents`
--

CREATE TABLE IF NOT EXISTS `forum-contents` (
  `content_id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `content_title` text NOT NULL,
  `last_post` text,
  `threads` int(11) NOT NULL,
  `posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum-discussion`
--

CREATE TABLE IF NOT EXISTS `forum-discussion` (
  `discussion_id` int(11) NOT NULL,
  `date_created` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `discussion_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum-replies`
--

CREATE TABLE IF NOT EXISTS `forum-replies` (
  `reply_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum-threads`
--

CREATE TABLE IF NOT EXISTS `forum-threads` (
  `thread_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `sticky` int(11) NOT NULL,
  `thread` int(11) NOT NULL,
  `last_post` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `preenlist`
--

CREATE TABLE IF NOT EXISTS `preenlist` (
  `preenlist_id` int(11) NOT NULL,
  `preenlist_num` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(11) NOT NULL,
  `room` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room`) VALUES
(1, 'IC101'),
(2, 'IC102'),
(3, 'IC103');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `sched_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(50) NOT NULL,
  `units` int(11) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `section_id` int(11) NOT NULL,
  `section` varchar(50) DEFAULT NULL,
  `year_level` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`section_id`, `section`, `year_level`) VALUES
(1, '11A', 'Grade 11'),
(2, '11B', 'Grade 11'),
(3, '12A', 'Grade 12'),
(4, '12B', 'Grade 12');

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE IF NOT EXISTS `stud_info` (
  `stud_id` int(11) NOT NULL,
  `stud_no` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `birthdate` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `mother_occupation` varchar(50) DEFAULT NULL,
  `mother_education` varchar(50) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `father_occupation` varchar(50) DEFAULT NULL,
  `father_education` varchar(50) DEFAULT NULL,
  `primary_education` varchar(50) NOT NULL,
  `year_graduated` varchar(50) DEFAULT NULL,
  `primary_honors` varchar(50) DEFAULT NULL,
  `secondary_education` varchar(50) NOT NULL,
  `year_graduatedsec` varchar(50) DEFAULT NULL,
  `secondary_honors` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`stud_id`, `stud_no`, `password`, `lastname`, `firstname`, `middlename`, `birthdate`, `gender`, `address`, `religion`, `mother_name`, `mother_occupation`, `mother_education`, `father_name`, `father_occupation`, `father_education`, `primary_education`, `year_graduated`, `primary_honors`, `secondary_education`, `year_graduatedsec`, `secondary_honors`) VALUES
(1, '12-2351', '638190bf025179ecebcc1b3d019a0230', 'Garma', 'Erwin', 'Bernal', 'Monday, July 05, 1993', 'Male', '615 Int C, BagBag Novaliches, Quezon City', 'Catholic', 'Brenda Garma', 'OFW', 'College Graduate', 'Edgar Garma', 'Soldier', 'College Graduate', 'Dingras FaithAcademy, Inc', '2004', 'none', 'DNHS', '2008', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_description` varchar(50) NOT NULL,
  `units` int(11) NOT NULL,
  `year_level` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_description`, `units`, `year_level`) VALUES
(1, 'SCI011', 'Chemistry', 2, 'Grade 11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessaccounts`
--
ALTER TABLE `accessaccounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `accounting`
--
ALTER TABLE `accounting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announce_id`);

--
-- Indexes for table `forum-admin`
--
ALTER TABLE `forum-admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `forum-contents`
--
ALTER TABLE `forum-contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `forum-discussion`
--
ALTER TABLE `forum-discussion`
  ADD PRIMARY KEY (`discussion_id`);

--
-- Indexes for table `forum-replies`
--
ALTER TABLE `forum-replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `forum-threads`
--
ALTER TABLE `forum-threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `preenlist`
--
ALTER TABLE `preenlist`
  ADD PRIMARY KEY (`preenlist_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sched_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessaccounts`
--
ALTER TABLE `accessaccounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `accounting`
--
ALTER TABLE `accounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announce_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `forum-admin`
--
ALTER TABLE `forum-admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forum-contents`
--
ALTER TABLE `forum-contents`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum-discussion`
--
ALTER TABLE `forum-discussion`
  MODIFY `discussion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum-replies`
--
ALTER TABLE `forum-replies`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum-threads`
--
ALTER TABLE `forum-threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `preenlist`
--
ALTER TABLE `preenlist`
  MODIFY `preenlist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sched_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
