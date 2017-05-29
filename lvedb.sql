-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 29, 2017 at 02:34 PM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `colleges`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `super_admin` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `email`, `password`, `super_admin`, `created_at`) VALUES
(2, 'Pankaj', 'admin@gmail.com', '123', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admissiondates`
--

CREATE TABLE IF NOT EXISTS `admissiondates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `start` date NOT NULL,
  `cut` date NOT NULL,
  `end` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `admissiondates`
--

INSERT INTO `admissiondates` (`id`, `start`, `cut`, `end`, `type`, `admin_id`, `created`) VALUES
(12, '2017-05-29', '2017-05-30', '2017-05-31', '2', '2', '2017-05-29 02:48:24'),
(10, '2017-05-29', '2017-05-30', '2017-05-31', '2', '2', '2017-05-29 02:42:06'),
(11, '2017-05-29', '2017-05-30', '2017-05-31', '2', '2', '2017-05-29 02:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `date`) VALUES
(1, 'General', '13-05-2017 17:41:05'),
(2, 'OBC', '13-05-2017 17:41:05'),
(3, 'ST', '13-05-2017 17:42:05'),
(4, '', '13-05-2017 17:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `challan`
--

CREATE TABLE IF NOT EXISTS `challan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studid` varchar(100) DEFAULT NULL,
  `bankreferenceno` varchar(100) DEFAULT NULL,
  `challan` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  UNIQUE KEY `tbl_id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `challan`
--

INSERT INTO `challan` (`id`, `studid`, `bankreferenceno`, `challan`, `date`) VALUES
(1, '".$txtidss."', '".$txtbankreferenceno."', '".$challan."', '".$dat."'),
(2, '".$txtidss."', '".$txtbankreferenceno."', '".$challan."', '".$dat."'),
(3, '18', 'hahdhd', 'temp.pdf', '09-05-2017 18:31:05'),
(4, '18', 'DDASDA', 'temp.pdf', '09-05-2017 19:01:05'),
(5, '18', 'dasdasd', 'temp.pdf', '09-05-2017 19:17:05'),
(6, '18', 'asdasdsad', 'ckstaff testing comments 29-11-2016.pdf', '10-05-2017 00:25:05'),
(7, '18', '213123123', 'ckstaff testing comments 29-11-2016.pdf', '10-05-2017 01:14:05'),
(8, '".$txtidss."', '".$txtbankreferenceno."', '".$matricsheet."', '".$dat."'),
(9, '18', '23123123', 'ck.pdf', '10-05-2017 08:08:05'),
(10, '18', '15151', 'temp.pdf', '10-05-2017 11:14:05'),
(11, '18', '234324234234', 'demoform1.pdf', '10-05-2017 23:04:05'),
(12, '23', '34234234234', 'ck.pdf', '13-05-2017 01:05:05'),
(13, '', '23123', 'ck.pdf', '13-05-2017 02:23:05'),
(14, '23', '156456151', 'cks.pdf', '18-05-2017 18:25:05'),
(15, '23', '23423432', 'cks.pdf', '18-05-2017 18:30:05'),
(16, '23', '15616165', 'abc', '18-05-2017 19:33:05'),
(17, '23', '234234', 'cks.pdf', '18-05-2017 19:36:05'),
(18, '23', '15616165', 'cks.pdf', '18-05-2017 19:40:05'),
(19, '23', '15616516516', 'abc', '18-05-2017 20:01:05'),
(20, '23', '15481512', 'HPU232017BA002', '19-05-2017 12:52:05'),
(21, '44', '422312321', 'HPU442017BA002', '19-05-2017 18:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CourseCat` int(1) NOT NULL,
  `CourseType` int(1) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `available_seats` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `coursedate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `CourseCat`, `CourseType`, `coursename`, `available_seats`, `duration`, `coursedate`) VALUES
(42, 0, 1, 'BSc with computer Science', '120', '6', '18-05-17'),
(43, 0, 2, 'BA', '', '6', '18-05-17'),
(44, 0, 1, 'BSc Life Sciences', '120', '6', '18-05-17'),
(31, 0, 2, 'B.Com', '240', '6', '11-05-17'),
(40, 0, 1, 'BSc Physical Science', '120', '6', '18-05-17'),
(46, 0, 2, 'testertest', '50', '10', '19-05-17'),
(47, 0, 2, 'testertest', '40', '10', '19-05-17'),
(48, 0, 2, 'testertest', '10', '6', '19-05-17'),
(49, 0, 1, 'bsc crime', '20', '10', '19-05-17'),
(50, 0, 1, 'test1223', '40', '7', '19-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `coursecat`
--

CREATE TABLE IF NOT EXISTS `coursecat` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `TermID` varchar(30) NOT NULL,
  `CourseTerm` varchar(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `coursecat`
--

INSERT INTO `coursecat` (`Id`, `TermID`, `CourseTerm`) VALUES
(1, 'Core Subjects', '1'),
(2, 'Skill Enhancement Course', '2'),
(3, 'Ability ', '3');

-- --------------------------------------------------------

--
-- Table structure for table `coursetype`
--

CREATE TABLE IF NOT EXISTS `coursetype` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `TermID` varchar(30) NOT NULL,
  `CourseTerm` varchar(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `coursetype`
--

INSERT INTO `coursetype` (`Id`, `TermID`, `CourseTerm`) VALUES
(1, 'Merit', '1'),
(2, 'Non Merit', '2');

-- --------------------------------------------------------

--
-- Table structure for table `course_fee`
--

CREATE TABLE IF NOT EXISTS `course_fee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `course` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `fee` varchar(25) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `subject_type` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `course_fee`
--

INSERT INTO `course_fee` (`id`, `course`, `semester`, `fee`, `course_id`, `subject_type`, `subject`, `created`) VALUES
(12, '43', '', '11111', '', 0, 0, '2019-05-17 00:00:00'),
(11, '33', '', '1854', '', 0, 0, '2011-05-17 00:00:00'),
(13, '43', '', '554', '', 0, 0, '2019-05-17 00:00:00'),
(14, '31', '6', '64656', '', 0, 0, '2019-05-17 00:00:00'),
(15, '31', '3', '5455', '', 0, 0, '2019-05-17 00:00:00'),
(16, '43', '3', '', '', 0, 0, '2020-05-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_semester`
--

CREATE TABLE IF NOT EXISTS `course_semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `semester_seats` int(11) NOT NULL,
  `semester_min_core_subjects` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fee_sturture`
--

CREATE TABLE IF NOT EXISTS `fee_sturture` (
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `course` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `admission` varchar(100) NOT NULL,
  `tution` varchar(100) NOT NULL,
  `librarysecurity` varchar(100) NOT NULL,
  `houseexam` varchar(100) NOT NULL,
  `medical` varchar(100) NOT NULL,
  `campuedevelop` varchar(100) NOT NULL,
  `bookreplacement` varchar(100) NOT NULL,
  `furniturereplacement` varchar(100) NOT NULL,
  `identitycard` varchar(100) NOT NULL,
  `magazine` varchar(100) NOT NULL,
  `ncc` varchar(100) NOT NULL,
  `studentaid` varchar(100) NOT NULL,
  `cultural` varchar(100) NOT NULL,
  `computer&internet` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `spordsfund` varchar(100) NOT NULL,
  `bf` varchar(100) NOT NULL,
  `security` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `rover_ranger` decimal(10,0) NOT NULL,
  `unit_development_fund` decimal(10,0) NOT NULL,
  `hpu_registraion` decimal(10,0) NOT NULL,
  `hpu_registraion_non_hp` decimal(10,0) NOT NULL,
  `hpu_continuation` decimal(10,0) NOT NULL,
  `hpu_sports` decimal(10,0) NOT NULL,
  `hpu_youth_welfare_fund` decimal(10,0) NOT NULL,
  `hpu_holiday_home` decimal(10,0) NOT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fee_sturture`
--

INSERT INTO `fee_sturture` (`ids`, `course`, `semester`, `admission`, `tution`, `librarysecurity`, `houseexam`, `medical`, `campuedevelop`, `bookreplacement`, `furniturereplacement`, `identitycard`, `magazine`, `ncc`, `studentaid`, `cultural`, `computer&internet`, `activity`, `spordsfund`, `bf`, `security`, `date`, `rover_ranger`, `unit_development_fund`, `hpu_registraion`, `hpu_registraion_non_hp`, `hpu_continuation`, `hpu_sports`, `hpu_youth_welfare_fund`, `hpu_holiday_home`) VALUES
(10, 44, 2, '4324234', '23423', '23423', '234234', '234324', '23432', '234234', '234324', '234234', '234234', '234234', '234234', '32423', '2', '23423', '234', '234234444444444444444444444', '2342', '0000-00-00 00:00:00', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, 31, 1, '10123', '10123123', '103123', '0121321', '1012312', '1312312', '11123', '1312312', '13123123', '13123', '1312321', '11123123', '1123123', '112312', '1312312', '13213123', '12312', '1123123', '0000-00-00 00:00:00', '0', '0', '0', '0', '0', '0', '0', '0'),
(11, 42, 1, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '0000-00-00 00:00:00', '19', '20', '23', '22', '26', '23', '24', '25');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `annualsalary` varchar(100) NOT NULL,
  `address` longtext NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `tehsil` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `address2` longtext NOT NULL,
  `country2` varchar(100) NOT NULL,
  `state2` varchar(100) NOT NULL,
  `city2` varchar(100) NOT NULL,
  `district2` varchar(100) NOT NULL,
  `tehsil2` varchar(100) NOT NULL,
  `pincode2` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `categorey` varchar(100) NOT NULL,
  `irdp` varchar(100) NOT NULL,
  `sports` varchar(100) NOT NULL,
  `ncc` varchar(100) NOT NULL,
  `nss` varchar(100) NOT NULL,
  `bonafideofup` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `fatherno` varchar(100) NOT NULL,
  `landlineno` varchar(100) NOT NULL,
  `marriedstatus` varchar(100) NOT NULL,
  `studid` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sportdquotaperson` varchar(100) DEFAULT NULL,
  `singlegirlperson` varchar(100) DEFAULT NULL,
  `culturalquotaperson` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fathername`, `mothername`, `gender`, `occupation`, `annualsalary`, `address`, `country`, `state`, `city`, `district`, `tehsil`, `pincode`, `address2`, `country2`, `state2`, `city2`, `district2`, `tehsil2`, `pincode2`, `dob`, `categorey`, `irdp`, `sports`, `ncc`, `nss`, `bonafideofup`, `nationality`, `mobileno`, `fatherno`, `landlineno`, `marriedstatus`, `studid`, `date`, `sportdquotaperson`, `singlegirlperson`, `culturalquotaperson`) VALUES
(5, 'asd asasd', 'asd asd', 'male', 'asd', '2222222', 'sadad', 'cxxzc', 'wwwwwwwwww', 'asd', 'xzczx', 'zxcxzc', '222222', 'sadad', 'cxxzc', 'wwwwwwwwww', 'asd', 'xzczx', 'zxcxzc', '222222', '2017-05-11', '1', '0', '0', '0', '0', '0', '1', '2222222222', '2222222222', '2222222222', '0', 5, '2017-05-23 22:06:19', '0', '0', '0'),
(6, 'BANSI LAL', 'KRISHNA DEVI', 'male', 'RETD', '250000', 'VPO LALHARI TEH HAROLI DISTT UNA', 'INDIA', 'HP', 'UNA', 'UNA', 'HAROLI', '174301', 'VPO LALHARI TEH HAROLI DISTT UNA', 'INDIA', 'HP', 'UNA', 'UNA', 'HAROLI', '174301', '1985-02-06', '1', '0', '1', '0', '1', '1', '1', '9816803823', '9817254161', '', '0', 14, '2017-05-24 09:15:07', '0', '0', '0'),
(7, 'Avinash Chander Sharma', 'Raj  Sharma', 'male', 'Anganwadi worker', '111111111', '                V.P.O. Santokhgarh Teh. & Distt. Una Himachal Pradesh, Pin Code: 174301                ', 'India', 'Himachal Pradesh', 'Una', 'Una', 'Una', '174301', '                V.P.O. Santokhgarh Teh. & Distt. Una Himachal Pradesh, Pin Code: 174301                ', 'India', 'Himachal Pradesh', 'Una', 'Una', 'Una', '174301', '1990-01-07', '1', '1', '1', '1', '1', '1', '1', '7406582031', '9805273817', '', '0', 12, '2017-05-28 08:31:03', '1', '1', '0'),
(8, 'Avinash Sharma', 'Raj Sharma', '', 'Teacher', '50000', '                                ', 'india', 'himachal', 'santokhgarh', 'una', 'una', '174301', '                                ', 'india', 'himachal', 'santokhgarh', 'una', 'una', '174301', '1994-02-01', '1', '0', '0', '0', '0', '0', '0', '4444444', '444444', '', '0', 17, '2017-05-25 06:05:53', '0', '0', '0'),
(9, 'Ram Lal', 'Seeta Devi', 'male', 'farmer', '16464461', 'kharar', 'indian', 'punjab', 'mohali', 'mohali', 'mohali', '160055', 'kharar', 'indian', 'punjab', 'mohali', 'mohali', 'mohali', '160055', '12-06-2017', '3', '1', '1', '1', '0', '0', '0', '9417869953', '9417869953', '0172468224', '0', 18, '2017-05-26 10:53:13', '1', '1', '1'),
(10, 'Satish  Sharma', 'Neelam Sharma', 'male', 'Retd', '333333', '                                                                                                        Village-Sunehra                                                                                        ', 'india', 'Himachal', 'una', 'una', 'una', '174303', '                                                                                                        Village-Sunehra                                                                                        ', 'india', 'Himachal', 'una', 'una', 'una', '174303', '30/03/1981', '1', '0', '0', '0', '0', '1', '1', '9318804818', '9318727375', '', '1', 19, '2017-05-28 10:04:35', '0', '0', '0'),
(11, 'Ravinder Sharma', 'Veena Sharma', 'male', 'Govt Job', '300000', '                                House No 123, Ward No : 5                ', 'India', 'Himachal Pradesh', 'Santokhgarh', 'Una', 'Una', '174301', '                                House No 123, Ward No : 5                ', 'India', 'Himachal Pradesh', 'Santokhgarh', 'Una', 'Una', '174301', '1985-01-06', '1', '0', '0', '0', '0', '0', '0', '9736204600', '9318036057', '', '1', 20, '2017-05-28 06:36:08', '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `studcourse`
--

CREATE TABLE IF NOT EXISTS `studcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(100) NOT NULL,
  `stud_choice_course` varchar(100) NOT NULL,
  `stud_semester` varchar(100) NOT NULL,
  `studdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `studcourse`
--

INSERT INTO `studcourse` (`id`, `stud_id`, `stud_choice_course`, `stud_semester`, `studdate`) VALUES
(1, '5', '43', '3', '24-05-2017 03:53:05 '),
(2, '14', '33', '1', '24-05-2017 14:45:05 '),
(3, '12', '40', '4', '24-05-2017 15:06:05 '),
(4, '11', '44', '2', '25-05-2017 02:03:05 '),
(5, '17', '42', '5', '25-05-2017 11:39:05 '),
(6, '18', '31', '3', '26-05-2017 16:23:05 '),
(7, '19', '40', '1', '28-05-2017 15:42:05 ');

-- --------------------------------------------------------

--
-- Table structure for table `studdocument`
--

CREATE TABLE IF NOT EXISTS `studdocument` (
  `stud_docid` int(11) NOT NULL AUTO_INCREMENT,
  `matricboard` varchar(100) NOT NULL,
  `matricyear` varchar(100) NOT NULL,
  `matricredit` varchar(100) NOT NULL,
  `matricgetmarks` float NOT NULL,
  `matrictotalmarks` varchar(100) NOT NULL,
  `matricpercentage` float NOT NULL,
  `matricrollno` varchar(100) NOT NULL,
  `matricfile` varchar(100) NOT NULL,
  `2board` varchar(100) NOT NULL,
  `2year` varchar(100) NOT NULL,
  `2credit` varchar(100) NOT NULL,
  `2getmarks` float NOT NULL,
  `2totalmarks` varchar(100) NOT NULL,
  `2percentage` float NOT NULL,
  `2rollno` varchar(100) NOT NULL,
  `2file` varchar(100) NOT NULL,
  `gruad` varchar(100) NOT NULL,
  `gruadpass` varchar(100) NOT NULL,
  `gruadboard` varchar(100) NOT NULL,
  `gruadyear` varchar(100) NOT NULL,
  `gruadcredit` varchar(100) NOT NULL,
  `gruadgetmarks` float NOT NULL,
  `gruadtotalmarks` varchar(100) NOT NULL,
  `gruadpercentage` float NOT NULL,
  `gruadrollno` varchar(100) NOT NULL,
  `gruadfile` varchar(100) NOT NULL,
  `regingrate` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `signature` varchar(100) NOT NULL,
  `character` varchar(100) NOT NULL,
  `castcertificate` varchar(100) NOT NULL,
  `singlegirlcertificate` varchar(100) NOT NULL,
  `sportslcertificate` varchar(100) NOT NULL,
  `culturalcertificate` varchar(100) NOT NULL,
  `studid` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`stud_docid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `studdocument`
--

INSERT INTO `studdocument` (`stud_docid`, `matricboard`, `matricyear`, `matricredit`, `matricgetmarks`, `matrictotalmarks`, `matricpercentage`, `matricrollno`, `matricfile`, `2board`, `2year`, `2credit`, `2getmarks`, `2totalmarks`, `2percentage`, `2rollno`, `2file`, `gruad`, `gruadpass`, `gruadboard`, `gruadyear`, `gruadcredit`, `gruadgetmarks`, `gruadtotalmarks`, `gruadpercentage`, `gruadrollno`, `gruadfile`, `regingrate`, `photo`, `signature`, `character`, `castcertificate`, `singlegirlcertificate`, `sportslcertificate`, `culturalcertificate`, `studid`, `date`, `status`) VALUES
(3, 'HP BOARD', '2007', '', 455, '700', 65, '2222', 'Index.pdf', 'HP BOARD', '2016', '', 222, '500', 44.4, '3333', 'Index.pdf', '', 'Not_Applicable', '', '', '', 0, '', 0, '', '', 'No', '1387.jpg', '1618.jpg', 'Index.pdf', '', '', '', '', '14', '2017-05-24 09:18:39', '0'),
(4, 'sadasd', '1987', '', 150, ' 450', 33.3333, '1515411', 'demoform1.pdf', 'wqeqwe', '1988', '', 450, '650', 69.2308, '45151', 'demoform1.pdf', '44', 'Passed', ' sadwedasds', '1989', '', 1541, ' 2500', 61.64, '485484', 'demoform1.pdf', 'No', 'demoform1.pdf', 'demoform1.pdf', 'demoform1.pdf', '', '', '', '', '18', '2017-05-26 10:55:13', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentid` int(11) NOT NULL AUTO_INCREMENT,
  `studentname` varchar(100) NOT NULL,
  `studentemail` varchar(100) NOT NULL,
  `studentuidno` varchar(100) NOT NULL,
  `studentpassword` varchar(100) NOT NULL,
  `studentdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `migrate` varchar(100) NOT NULL,
  `terminate` varchar(100) NOT NULL,
  `isactive` varchar(100) NOT NULL,
  `rollnumber` varchar(50) NOT NULL,
  `regnumber` varchar(50) NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `studentname`, `studentemail`, `studentuidno`, `studentpassword`, `studentdate`, `status`, `migrate`, `terminate`, `isactive`, `rollnumber`, `regnumber`) VALUES
(5, 'student', 'asd@asd.com', '111111111111', 'f5b3b9b303f5a0594272f99d191bbf45', '2017-05-29 19:32:22', '1', '', '1', '0', '', ''),
(11, 'pkapila', 'prashantkapila6@gmail.com', '111122222221', '213ee683360d88249109c2f92789dbc3', '2017-05-24 21:34:54', '1', '', '', '0', '', ''),
(12, 'Pankaj Sharma', 'erpnkjsharma@gmail.com', '232323322222', '9b6b249ca27284311db1df1aae014ea8', '2017-05-24 08:27:23', '1', '', '', '0', '', ''),
(13, 'Pankaj Sharma', 'er.pnkjsharma@gmail.com', '123333333333', '9b6b249ca27284311db1df1aae014ea8', '2017-05-24 08:29:43', '0', '', '', '0', '', ''),
(14, 'Achhar', 'bagga.achhar@gmail.com', '444444444444', 'e10adc3949ba59abbe56e057f20f883e', '2017-05-24 09:09:43', '1', '', '', '0', '', ''),
(15, 'hhhhhh', 'e.rpnkjsharma@gmail.com', '123456789111', '38945f926270561d770cd9796ca1e0a3', '2017-05-25 04:14:38', '0', '', '', '0', '', ''),
(16, '12vqdy213-d/', 'DFSDF@FDSF.COM', '121233423412', '6324818e8f4f49837ae0283b9c9c6fdc', '2017-05-25 05:20:46', '0', '', '', '0', '', ''),
(17, 'aaaaa', 'shubhamsharma.lpp@gmail.com', '123456789123', '8cacfecf715626c5b1e39394d46d1e13', '2017-05-25 05:27:30', '1', '', '', '0', '', ''),
(18, 'harjidner', 'mcaharjinder@gmail.com', '848794454511', 'd56c1bdd5ad93ff1cce292c9a0a84ae2', '2017-05-26 10:50:27', '1', '', '', '0', '', ''),
(19, 'Sumit Sharma', 'sumitphysics@gmail.com', '222222333333', 'd4aebee46e8120b233d6f020d02d7bd4', '2017-05-28 04:41:41', '1', '', '', '0', '', ''),
(20, 'Gaurav Sharma', 'g.gauravsh@gmail.com', '123456789', '71f18aea5d376a94c94141b7828d7c8d', '2017-05-28 06:24:07', '1', '', '', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_document_satus`
--

CREATE TABLE IF NOT EXISTS `student_document_satus` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `doc_type` varchar(100) NOT NULL,
  `document` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(100) NOT NULL COMMENT '"Accept" OR "Deny"',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_message`
--

CREATE TABLE IF NOT EXISTS `stud_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_regid` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stud_migrate`
--

CREATE TABLE IF NOT EXISTS `stud_migrate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_regid` varchar(100) NOT NULL,
  `migration` longtext NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stud_terminate`
--

CREATE TABLE IF NOT EXISTS `stud_terminate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_regid` varchar(100) NOT NULL,
  `terminate_message` varchar(100) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stud_terminate`
--

INSERT INTO `stud_terminate` (`id`, `stud_regid`, `terminate_message`, `admin_id`, `date`) VALUES
(1, '5', '', '2', '2017-05-29 19:32:22'),
(2, '5', '', '2', '2017-05-29 19:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `subjectmodifiable` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=196 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `type`, `subject`, `course`, `semester`, `subjectmodifiable`, `created`) VALUES
(1, 'aa', 'aa', 'aa', 'aa', 0, '0000-00-00 00:00:00'),
(4, 'Skill Enhancement Course(SEC)', 'bb', '34', '3', 0, '2008-05-17 00:00:00'),
(5, 'Skill Enhancement Course(SEC)', 'gnm', '33', '5', 0, '2008-05-17 00:00:00'),
(6, 'Skill Enhancement Course(SEC)', 'sss', '34', '1', 0, '2008-05-17 00:00:00'),
(7, 'Skill Enhancement Course(SEC)', 'dg', '33', '3', 0, '2008-05-17 00:00:00'),
(8, 'IEC', 'fbfbfb', '30', '4', 0, '2009-05-17 00:00:00'),
(9, 'Skill Enhancement Course(SEC)', 'fgfg', '30', '4', 0, '2008-05-17 00:00:00'),
(10, 'Skill Enhancement Course(SEC)', 'fbfbhffffffff', '32', '3', 0, '2008-05-17 00:00:00'),
(11, 'Core Subjects', 'MECHANICAL', '32', '4', 0, '2008-05-17 00:00:00'),
(12, 'Core Subjects', 'CSE', '32', '4', 0, '2008-05-17 00:00:00'),
(13, '', 'CSE', '42', '4', 0, '2019-05-17 00:00:00'),
(14, '', 'basubject25555', '43', '2', 0, '2019-05-17 00:00:00'),
(15, 'Select', 'CSE77', '42', '4', 0, '2018-05-17 00:00:00'),
(16, '', 'TESTING2', '43', '1', 0, '2019-05-17 00:00:00'),
(20, 'IEC', 'comm2', '31', '4', 0, '2018-05-17 00:00:00'),
(19, 'IEC', 'comm1', '31', '4', 0, '2018-05-17 00:00:00'),
(21, 'Skill Enhancement Course(SEC)', 'phys sci1', '40', '3', 0, '2018-05-17 00:00:00'),
(22, 'Skill Enhancement Course(SEC)', 'phys sci2', '40', '3', 0, '2018-05-17 00:00:00'),
(23, 'Skill Enhancement Course(SEC)', 'phys sci1', '40', '6', 0, '2018-05-17 00:00:00'),
(24, 'Skill Enhancement Course(SEC)', 'phys sci1', '40', '6', 0, '2018-05-17 00:00:00'),
(25, 'Select', 'CSE77', '42', '4', 0, '2018-05-17 00:00:00'),
(26, 'Core Subjects', 'CSE2', '42', '4', 0, '2018-05-17 00:00:00'),
(27, '2', 'ff', '42', '3', 0, '2018-05-17 00:00:00'),
(28, '2', 'ss', '42', '3', 0, '2018-05-17 00:00:00'),
(29, '2', 'ttt', '42', '3', 0, '2018-05-17 00:00:00'),
(30, '2', 'may19_1', '42', '', 0, '2019-05-17 00:00:00'),
(31, '2', 'may19_2', '42', '', 0, '2019-05-17 00:00:00'),
(194, '1', '222', '43', '2', 1, '2017-05-29 11:09:48'),
(193, '1', '111', '43', '2', 1, '2017-05-29 11:10:13'),
(57, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(58, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(59, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(60, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(61, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(62, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(63, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(64, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(65, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(66, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(67, '2', 'arew', '43', '2', 0, '2019-05-17 00:00:00'),
(68, '2', 'arew', '43', '2', 0, '2019-05-17 00:00:00'),
(69, '2', 'arew', '43', '2', 0, '2019-05-17 00:00:00'),
(70, '2', 'arew', '43', '2', 0, '2019-05-17 00:00:00'),
(71, '2', 'arew', '43', '2', 0, '2019-05-17 00:00:00'),
(72, '2', 'gjgfj', '43', '2', 0, '2019-05-17 00:00:00'),
(73, '2', 'gjgfj', '43', '2', 0, '2019-05-17 00:00:00'),
(74, '2', 'gjgfj', '43', '2', 0, '2019-05-17 00:00:00'),
(75, '2', 'gjgfj', '43', '2', 0, '2019-05-17 00:00:00'),
(76, '2', 'gjgfj', '43', '2', 0, '2019-05-17 00:00:00'),
(77, '2', 'cf', '43', '2', 0, '2019-05-17 00:00:00'),
(78, '2', 'cf', '43', '2', 0, '2019-05-17 00:00:00'),
(79, '2', 'cf', '43', '2', 0, '2019-05-17 00:00:00'),
(80, '2', 'cf', '43', '2', 0, '2019-05-17 00:00:00'),
(81, '2', 'cf', '43', '2', 0, '2019-05-17 00:00:00'),
(82, '2', 'fhgfdh', '43', '2', 0, '2019-05-17 00:00:00'),
(83, '2', 'fhgfdh', '43', '2', 0, '2019-05-17 00:00:00'),
(84, '2', 'fhgfdh', '43', '2', 0, '2019-05-17 00:00:00'),
(85, '2', 'fhgfdh', '43', '2', 0, '2019-05-17 00:00:00'),
(86, '2', 'fhgfdh', '43', '2', 0, '2019-05-17 00:00:00'),
(87, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(88, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(89, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(90, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(91, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(92, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(93, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(94, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(95, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(96, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(97, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(98, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(99, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(100, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(101, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(102, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(103, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(104, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(105, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(106, '2', 'we', '43', '2', 0, '2019-05-17 00:00:00'),
(107, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(108, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(109, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(110, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(111, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(112, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(113, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(114, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(115, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(116, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(117, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(118, '3', 'bsc_1', '44', '3', 0, '2019-05-17 00:00:00'),
(119, '3', 'phys sci12', '44', '3', 0, '2019-05-17 00:00:00'),
(120, '3', 'phys sci12', '44', '3', 0, '2019-05-17 00:00:00'),
(121, '3', 'phys sci12', '44', '3', 0, '2019-05-17 00:00:00'),
(122, '3', 'phys sci12', '44', '3', 0, '2019-05-17 00:00:00'),
(123, '3', 'phys sci12', '44', '3', 0, '2019-05-17 00:00:00'),
(124, '3', 'phys sci12', '44', '3', 0, '2019-05-17 00:00:00'),
(125, '2', 'lifescience1', '44', '4', 0, '2019-05-17 00:00:00'),
(126, '2', 'lifescience2', '44', '4', 0, '2019-05-17 00:00:00'),
(127, '2', 'lifescience3', '44', '4', 0, '2019-05-17 00:00:00'),
(128, '2', 'lifescience4', '44', '4', 0, '2019-05-17 00:00:00'),
(129, '2', 'lifescience5', '44', '4', 0, '2019-05-17 00:00:00'),
(130, '2', 'lifescience6', '44', '4', 0, '2019-05-17 00:00:00'),
(131, '2', 'lifescience7', '44', '4', 0, '2019-05-17 00:00:00'),
(132, 'Skill Enhancement Course(SEC)', 'lifescience1', '44', '4', 0, '2019-05-17 00:00:00'),
(133, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '4', 0, '2019-05-17 00:00:00'),
(134, 'Skill Enhancement Course(SEC)', 'lifescience3', '44', '4', 0, '2019-05-17 00:00:00'),
(135, 'Skill Enhancement Course(SEC)', 'lifescience4', '44', '4', 0, '2019-05-17 00:00:00'),
(136, 'Skill Enhancement Course(SEC)', 'lifescience5', '44', '4', 0, '2019-05-17 00:00:00'),
(137, 'Skill Enhancement Course(SEC)', 'lifescience6', '44', '4', 0, '2019-05-17 00:00:00'),
(138, 'Skill Enhancement Course(SEC)', 'lifescience7', '44', '4', 0, '2019-05-17 00:00:00'),
(139, 'Skill Enhancement Course(SEC)', 'lifescience1', '44', '3', 0, '2019-05-17 00:00:00'),
(140, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(141, 'Skill Enhancement Course(SEC)', 'lifescience3', '44', '3', 0, '2019-05-17 00:00:00'),
(142, 'Skill Enhancement Course(SEC)', 'lifescience4', '44', '3', 0, '2019-05-17 00:00:00'),
(143, 'Skill Enhancement Course(SEC)', 'lifescience5', '44', '3', 0, '2019-05-17 00:00:00'),
(144, 'Skill Enhancement Course(SEC)', 'lifescience6', '44', '3', 0, '2019-05-17 00:00:00'),
(145, 'Skill Enhancement Course(SEC)', 'lifescience7', '44', '3', 0, '2019-05-17 00:00:00'),
(146, 'Skill Enhancement Course(SEC)', 'lifescience1', '44', '3', 0, '2019-05-17 00:00:00'),
(147, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(148, 'Skill Enhancement Course(SEC)', 'lifescience3', '44', '3', 0, '2019-05-17 00:00:00'),
(149, 'Skill Enhancement Course(SEC)', 'lifescience1', '44', '3', 0, '2019-05-17 00:00:00'),
(150, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(151, 'Skill Enhancement Course(SEC)', 'lifescience3', '44', '3', 0, '2019-05-17 00:00:00'),
(152, 'Skill Enhancement Course(SEC)', 'lifescience4', '44', '3', 0, '2019-05-17 00:00:00'),
(153, 'Skill Enhancement Course(SEC)', 'lifescience5', '44', '3', 0, '2019-05-17 00:00:00'),
(154, 'Skill Enhancement Course(SEC)', 'lifescience6', '44', '3', 0, '2019-05-17 00:00:00'),
(155, 'Skill Enhancement Course(SEC)', 'lifescience7', '44', '3', 0, '2019-05-17 00:00:00'),
(156, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(157, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(158, 'Skill Enhancement Course(SEC)', 'lifescience4', '44', '3', 0, '2019-05-17 00:00:00'),
(159, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(160, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(161, 'Skill Enhancement Course(SEC)', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(162, '2', 'lifescience2', '44', '3', 0, '2019-05-17 00:00:00'),
(163, '2', 'lifescience4', '44', '3', 0, '2019-05-17 00:00:00'),
(164, '2', 'phys sci2', '44', '3', 0, '2019-05-17 00:00:00'),
(165, '2', 'lifescience3', '44', '3', 0, '2019-05-17 00:00:00'),
(166, '2', 'lifescience4', '44', '3', 0, '2019-05-17 00:00:00'),
(167, '2', 'crime1', '49', '1', 0, '2019-05-17 00:00:00'),
(168, '2', 'crime2', '49', '1', 0, '2019-05-17 00:00:00'),
(169, '2', 'crime3', '49', '1', 0, '2019-05-17 00:00:00'),
(170, '2', 'crime4', '49', '1', 0, '2019-05-17 00:00:00'),
(171, '2', 'crime5', '49', '1', 0, '2019-05-17 00:00:00'),
(172, 'Skill Enhancement Course(SEC)', 'crime1', '49', '6', 0, '2019-05-17 00:00:00'),
(173, 'Skill Enhancement Course(SEC)', 'crime1', '49', '6', 0, '2019-05-17 00:00:00'),
(174, 'Skill Enhancement Course(SEC)', 'crime1', '49', '6', 0, '2019-05-17 00:00:00'),
(175, 'Skill Enhancement Course(SEC)', 'crime1', '49', '3', 0, '2019-05-17 00:00:00'),
(176, 'Skill Enhancement Course(SEC)', 'crime2', '49', '3', 0, '2019-05-17 00:00:00'),
(177, 'Skill Enhancement Course(SEC)', 'crime3', '49', '3', 0, '2019-05-17 00:00:00'),
(178, 'Skill Enhancement Course(SEC)', 'crime1', '49', '1', 0, '2019-05-17 00:00:00'),
(179, 'Skill Enhancement Course(SEC)', 'crime2', '49', '1', 0, '2019-05-17 00:00:00'),
(180, '2', 'crime1', '49', '2', 0, '2019-05-17 00:00:00'),
(181, '2', 'crime3', '49', '2', 0, '2019-05-17 00:00:00'),
(182, '2', 'crime2', '49', '3', 0, '2019-05-17 00:00:00'),
(183, '2', 'crime3', '49', '3', 0, '2019-05-17 00:00:00'),
(184, '1', '123', '43', '3', 1, '2017-05-28 12:21:04'),
(185, '2', '345', '43', '3', 0, '2017-05-27 19:37:26'),
(186, '3', '5666', '43', '3', 0, '2017-05-27 19:37:26'),
(188, '2', 'www', '50', '7', 1, '2017-05-27 19:39:57'),
(191, '1', 'Mathematics', '40', '1', 0, '2017-05-28 09:10:12'),
(192, '1', 'Chemistry', '40', '1', 1, '2017-05-28 09:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `subject_restrict`
--

CREATE TABLE IF NOT EXISTS `subject_restrict` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `course` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `subject1` varchar(30) NOT NULL,
  `subject2` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subject_restrict`
--

INSERT INTO `subject_restrict` (`id`, `course`, `semester`, `subject1`, `subject2`, `created`) VALUES
(1, '42', '3', '27', '28', '2017-05-29 02:56:02'),
(2, '42', '3', '27', '29', '2017-05-29 02:56:02'),
(3, '42', '3', '28', '27', '2017-05-29 02:56:02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
