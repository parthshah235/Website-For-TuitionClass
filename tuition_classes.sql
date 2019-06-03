-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2019 at 11:09 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuition_classes`
--

-- --------------------------------------------------------

--
-- Table structure for table `download_material`
--

DROP TABLE IF EXISTS `download_material`;
CREATE TABLE IF NOT EXISTS `download_material` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `std` varchar(20) NOT NULL,
  `m_name` text NOT NULL,
  `m_url` varchar(50) NOT NULL,
  `m_type` varchar(15) NOT NULL,
  `sub_id` int(3) NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download_material`
--

INSERT INTO `download_material` (`m_id`, `std`, `m_name`, `m_url`, `m_type`, `sub_id`) VALUES
(9, '12th(Science)', 'Induction Motor', '14157-chap15.pdf', 'Subject Notes', 8),
(10, '12th(Science)', 'Organic Chemistry', '66588-final_nochange.pdf', 'Worksheet', 9),
(11, '12th(Science)', 'Integration', '34330-brochure_time.pdf', 'Formula List', 2),
(12, '12th(Commerce)', 'Leadership', '5060-screen-shot-2016-07-20-at-18.57.30.png', 'Subject Notes', 14),
(13, '5th Std', 'Profit and loss', '55594-brochure_time.pdf', 'Worksheet', 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

DROP TABLE IF EXISTS `faculty_details`;
CREATE TABLE IF NOT EXISTS `faculty_details` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `f_mobile` varchar(13) NOT NULL,
  `f_address` varchar(200) NOT NULL,
  `f_photo` varchar(100) NOT NULL,
  `f_qualification` text NOT NULL,
  `f_experience` tinyint(2) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`f_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`f_id`, `f_name`, `f_mobile`, `f_address`, `f_photo`, `f_qualification`, `f_experience`, `u_id`) VALUES
(4, 'Parth', '8980998289', 'Manjalpur', '94683-win_20150430_134538.jpg', 'Graduate', 5, 61),
(6, 'Parth', '8141985480', 'Manjalpur', '30112-win_20150311_124439.jpg', 'M.ED in Physics', 5, 63),
(7, 'Vatsal Patel', '8980998289', 'Manjalpur', '70906-img_7549.jpg', 'M.ED in Physics', 2, 64);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fdbk_id` int(11) NOT NULL AUTO_INCREMENT,
  `fdbk_description` varchar(500) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`fdbk_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(500) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `photo`) VALUES
(1, '45893-1743444_841646629266431_6876623277382951903_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

DROP TABLE IF EXISTS `inquiry`;
CREATE TABLE IF NOT EXISTS `inquiry` (
  `inq_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `inq_email` varchar(50) NOT NULL,
  `inq_subject` varchar(250) NOT NULL,
  `inq_description` varchar(300) NOT NULL,
  `inq_mobile` varchar(11) NOT NULL,
  PRIMARY KEY (`inq_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inq_id`, `name`, `inq_email`, `inq_subject`, `inq_description`, `inq_mobile`) VALUES
(9, 'Parth P Shah', 'jjjj@ggg.nn', 'personal', 'kkk', '8980998289');

-- --------------------------------------------------------

--
-- Table structure for table `parents_details`
--

DROP TABLE IF EXISTS `parents_details`;
CREATE TABLE IF NOT EXISTS `parents_details` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(30) NOT NULL,
  `p_mobile` varchar(11) NOT NULL,
  `p_landline` varchar(8) NOT NULL,
  `p_address` varchar(500) NOT NULL,
  `p_occupation` varchar(20) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents_details`
--

INSERT INTO `parents_details` (`p_id`, `p_name`, `p_mobile`, `p_landline`, `p_address`, `p_occupation`, `u_id`) VALUES
(22, 'Mahesh Rathod', '8200238056', '02652666', 'B504 Krishna appartments, Behind Saffron Complex, Bandra East,Mumbai', 'Service', 62);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `std` varchar(20) NOT NULL,
  `board` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `percentage` float(7,2) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`std`, `board`, `name`, `percentage`, `photo`) VALUES
('10th Std', 'GSEB', 'Parth Shah', 65.00, '74262-img_8404.jpg'),
('12th(Commerce)', '', 'Kellie', 76.00, '68449-78f07ec9891b321f1d8cd0c8171983b96f96c6ec.jpg'),
('12th(Science)', 'GSEB', 'Mohanish Shishangiya', 80.00, '47672-vlcsnap-2014-09-17-20h42m59s149.png');

-- --------------------------------------------------------

--
-- Table structure for table `sample_papers`
--

DROP TABLE IF EXISTS `sample_papers`;
CREATE TABLE IF NOT EXISTS `sample_papers` (
  `paper_id` int(11) NOT NULL AUTO_INCREMENT,
  `std` varchar(15) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `paper_url` varchar(250) NOT NULL,
  `sub_id` int(11) NOT NULL,
  PRIMARY KEY (`paper_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_papers`
--

INSERT INTO `sample_papers` (`paper_id`, `std`, `subject`, `paper_url`, `sub_id`) VALUES
(11, '12th(Science)', 'Physics', '69449-untitled-document.pdf', 8);

-- --------------------------------------------------------

--
-- Table structure for table `students_details`
--

DROP TABLE IF EXISTS `students_details`;
CREATE TABLE IF NOT EXISTS `students_details` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_rollno` varchar(7) NOT NULL,
  `s_firstname` varchar(30) NOT NULL,
  `s_lastname` varchar(30) NOT NULL,
  `s_bday` date NOT NULL,
  `s_std` varchar(30) NOT NULL,
  `s_school` varchar(50) NOT NULL,
  `s_board` varchar(7) NOT NULL,
  `s_mobile` varchar(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_details`
--

INSERT INTO `students_details` (`s_id`, `s_rollno`, `s_firstname`, `s_lastname`, `s_bday`, `s_std`, `s_school`, `s_board`, `s_mobile`, `u_id`) VALUES
(28, 'S001', 'Rishi', 'Rathod', '2001-01-23', '12th(Science)', 'Eklavya', 'ICSE', '8980998289', 62);

-- --------------------------------------------------------

--
-- Table structure for table `student_sub_details`
--

DROP TABLE IF EXISTS `student_sub_details`;
CREATE TABLE IF NOT EXISTS `student_sub_details` (
  `s_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_sub_details`
--

INSERT INTO `student_sub_details` (`s_id`, `sub_id`) VALUES
(28, 8),
(28, 9);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(30) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`) VALUES
(1, 'English'),
(2, 'Maths'),
(3, 'Science'),
(4, 'Social Science(SS)'),
(5, 'Gujarati'),
(6, 'Hindi'),
(7, 'Sanskrit'),
(8, 'Physics'),
(9, 'Chemistry'),
(10, 'Biology'),
(11, 'Accounts'),
(12, 'Statistics'),
(13, 'Economics'),
(14, 'Business Organisation');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_email` varchar(30) NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_type` varchar(10) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`u_id`, `u_email`, `u_password`, `u_type`) VALUES
(1, 'admin@class.com', '123', 'admin'),
(61, 'vinitasoni0811@gmail.com', 'Vinita08', 'faculty'),
(62, 'rathodmahesh@gmail.com', 'Mahesh11', 'student'),
(63, 'parthshah235@gmail.com', 'Parth23', 'faculty'),
(64, 'vatsalpatel@gmail.com', 'Parth23', 'faculty');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `download_material`
--
ALTER TABLE `download_material`
  ADD CONSTRAINT `download_material_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subjects` (`sub_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD CONSTRAINT `faculty_details_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_details` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_details` (`u_id`);

--
-- Constraints for table `parents_details`
--
ALTER TABLE `parents_details`
  ADD CONSTRAINT `parents_details_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_details` (`u_id`);

--
-- Constraints for table `students_details`
--
ALTER TABLE `students_details`
  ADD CONSTRAINT `students_details_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_details` (`u_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_sub_details`
--
ALTER TABLE `student_sub_details`
  ADD CONSTRAINT `student_sub_details_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subjects` (`sub_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
