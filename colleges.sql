-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 06:59 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colleges`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `email`, `password`) VALUES
(2, 'Pankaj', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admissiondates`
--

CREATE TABLE IF NOT EXISTS `admissiondates` (
  `id` int(10) NOT NULL,
  `start` date NOT NULL,
  `cut` date NOT NULL,
  `end` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissiondates`
--

INSERT INTO `admissiondates` (`id`, `start`, `cut`, `end`, `type`, `admin_id`, `created`) VALUES
(1, '2017-05-01', '2017-05-05', '2017-05-10', '', '', '0000-00-00 00:00:00'),
(4, '2017-05-22', '2017-05-29', '2017-05-31', '1', '2', '2017-05-27 18:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `studid` varchar(100) DEFAULT NULL,
  `bankreferenceno` varchar(100) DEFAULT NULL,
  `challan` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `CourseCat` int(1) NOT NULL,
  `CourseType` int(1) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `available_seats` varchar(10) NOT NULL,
  `subjectmodifiable` varchar(30) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `coursedate` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `CourseCat`, `CourseType`, `coursename`, `available_seats`, `subjectmodifiable`, `duration`, `coursedate`) VALUES
(42, 0, 1, 'BSc with computer Science', '120', '0', '6', '18-05-17'),
(43, 0, 2, 'BA', '', '0', '6', '18-05-17'),
(44, 0, 1, 'BSc Life Sciences', '120', '0', '6', '18-05-17'),
(31, 0, 2, 'B.Com', '240', '0', '6', '11-05-17'),
(40, 0, 1, 'BSc Physical Science', '120', '0', '6', '18-05-17'),
(46, 0, 2, 'testertest', '50', '', '10', '19-05-17'),
(47, 0, 2, 'testertest', '40', '', '10', '19-05-17'),
(48, 0, 2, 'testertest', '10', '0', '6', '19-05-17'),
(49, 0, 1, 'bsc crime', '20', '', '10', '19-05-17'),
(50, 0, 1, 'test1223', '40', '0', '7', '19-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `coursecat`
--

CREATE TABLE IF NOT EXISTS `coursecat` (
  `Id` int(10) NOT NULL,
  `TermID` varchar(30) NOT NULL,
  `CourseTerm` varchar(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursecat`
--

INSERT INTO `coursecat` (`Id`, `TermID`, `CourseTerm`) VALUES
(1, 'Core Subjects', '1'),
(2, 'Skill Enhancement Course', '2'),
(3, 'IEC', '3');

-- --------------------------------------------------------

--
-- Table structure for table `coursetype`
--

CREATE TABLE IF NOT EXISTS `coursetype` (
  `Id` int(10) NOT NULL,
  `TermID` varchar(30) NOT NULL,
  `CourseTerm` varchar(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `id` int(10) NOT NULL,
  `course` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `fee` varchar(25) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `created` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_fee`
--

INSERT INTO `course_fee` (`id`, `course`, `semester`, `fee`, `course_id`, `created`) VALUES
(12, '43', '', '11111', '', '19-05-17'),
(11, '33', '', '1854', '', '11-05-17'),
(13, '43', '', '554', '', '19-05-17'),
(14, '31', '6', '64656', '', '19-05-17'),
(15, '31', '3', '5455', '', '19-05-17'),
(16, '43', '3', '', '', '20-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `fee_sturture`
--

CREATE TABLE IF NOT EXISTS `fee_sturture` (
  `ids` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
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
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_sturture`
--

INSERT INTO `fee_sturture` (`ids`, `course`, `semester`, `admission`, `tution`, `librarysecurity`, `houseexam`, `medical`, `campuedevelop`, `bookreplacement`, `furniturereplacement`, `identitycard`, `magazine`, `ncc`, `studentaid`, `cultural`, `computer&internet`, `activity`, `spordsfund`, `bf`, `security`, `date`) VALUES
(10, '44', '2', '4324234', '23423', '23423', '234234', '234324', '23432', '234234', '234324', '234234', '234234', '234234', '234234', '32423', '2', '23423', '234', '234234444444444444444444444', '2342', '18-05-2017 13:02:05'),
(8, '31', '1', '10123', '10123123', '103123', '0121321', '1012312', '1312312', '11123', '1312312', '13123123', '13123', '1312321', '11123123', '1123123', '112312', '1312312', '13213123', '12312', '1123123', '18-05-2017 02:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `masteradmissionterm`
--

CREATE TABLE IF NOT EXISTS `masteradmissionterm` (
  `Id` int(10) NOT NULL,
  `TermId` int(1) NOT NULL,
  `AdmissionTerm` varchar(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masteradmissionterm`
--

INSERT INTO `masteradmissionterm` (`Id`, `TermId`, `AdmissionTerm`) VALUES
(1, 1, 'First Term'),
(2, 2, 'Second Term');

-- --------------------------------------------------------

--
-- Table structure for table `mastersubjectmodifiable`
--

CREATE TABLE IF NOT EXISTS `mastersubjectmodifiable` (
  `int` int(10) NOT NULL,
  `SubjectModifiable` varchar(1) NOT NULL,
  `value` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastersubjectmodifiable`
--

INSERT INTO `mastersubjectmodifiable` (`int`, `SubjectModifiable`, `value`) VALUES
(1, '1', 'True'),
(2, '0', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL,
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
  `culturalquotaperson` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fathername`, `mothername`, `gender`, `occupation`, `annualsalary`, `address`, `country`, `state`, `city`, `district`, `tehsil`, `pincode`, `address2`, `country2`, `state2`, `city2`, `district2`, `tehsil2`, `pincode2`, `dob`, `categorey`, `irdp`, `sports`, `ncc`, `nss`, `bonafideofup`, `nationality`, `mobileno`, `fatherno`, `landlineno`, `marriedstatus`, `studid`, `date`, `sportdquotaperson`, `singlegirlperson`, `culturalquotaperson`) VALUES
(8, 'fathername lastname', 'mothername motherlname', 'male', 'occupation', '2342342342', '                        asd                        ', 'country', 'state', 'asd', 'district', 'tesh', '123123', '                        asd                        ', 'country', 'state', 'asd', 'district', 'tesh', '123123', '1989-09-12', '2', '1', '1', '1', '1', '1', '1', '2222222222', '2222222222', '2222222222', '1', 5, '2017-05-27 18:25:37', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `restrict_subject`
--

CREATE TABLE IF NOT EXISTS `restrict_subject` (
  `id` int(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `res_sub` varchar(30) NOT NULL,
  `subject1` varchar(30) NOT NULL,
  `subject2` varchar(30) NOT NULL,
  `created` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restrict_subject`
--

INSERT INTO `restrict_subject` (`id`, `course`, `semester`, `res_sub`, `subject1`, `subject2`, `created`) VALUES
(44, '43', '2', '', '33', '38', '1494474477'),
(43, '43', '2', '', '53', '56', '1494474477');

-- --------------------------------------------------------

--
-- Table structure for table `studcourse`
--

CREATE TABLE IF NOT EXISTS `studcourse` (
  `id` int(11) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `stud_choice_course` varchar(100) NOT NULL,
  `stud_semester` varchar(100) NOT NULL,
  `studdate` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studcourse`
--

INSERT INTO `studcourse` (`id`, `stud_id`, `stud_choice_course`, `stud_semester`, `studdate`) VALUES
(1, '1', '42', '1', '20-05-2017 23:14:05 '),
(2, '5', '43', '2', '21-05-2017 23:54:05 ');

-- --------------------------------------------------------

--
-- Table structure for table `studdocument`
--

CREATE TABLE IF NOT EXISTS `studdocument` (
  `stud_docid` int(11) NOT NULL,
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
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studentemail` varchar(100) NOT NULL,
  `studentuidno` varchar(100) NOT NULL,
  `studentpassword` varchar(100) NOT NULL,
  `studentdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL,
  `migrate` varchar(100) NOT NULL,
  `terminate` varchar(100) NOT NULL,
  `isactive` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `studentname`, `studentemail`, `studentuidno`, `studentpassword`, `studentdate`, `status`, `migrate`, `terminate`, `isactive`) VALUES
(5, 'student', 'asd@asd.com', '111111111111', 'f5b3b9b303f5a0594272f99d191bbf45', '2017-05-22 20:56:42', '1', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `stud_message`
--

CREATE TABLE IF NOT EXISTS `stud_message` (
  `id` int(11) NOT NULL,
  `stud_regid` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_migrate`
--

CREATE TABLE IF NOT EXISTS `stud_migrate` (
  `id` int(11) NOT NULL,
  `stud_regid` varchar(100) NOT NULL,
  `migration` longtext NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_terminate`
--

CREATE TABLE IF NOT EXISTS `stud_terminate` (
  `id` int(11) NOT NULL,
  `stud_regid` varchar(100) NOT NULL,
  `terminate_message` varchar(100) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `tbl_subjectmodifiable` bit(1) NOT NULL DEFAULT b'0',
  `course` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `created` varchar(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `type`, `subject`, `tbl_subjectmodifiable`, `course`, `semester`, `created`) VALUES
(1, '1', 'eng', b'0', '34', '4', 'aa'),
(4, '1', 'ncc', b'1', '34', '4', '08-05-17'),
(5, '2', 'gnm', b'0', '33', '5', '08-05-17'),
(6, '2', 'sss', b'0', '34', '1', '08-05-17'),
(7, '2', 'dg', b'0', '33', '3', '08-05-17'),
(8, '3', 'fbfbfb', b'0', '30', '4', '09-05-17'),
(9, '2', 'fgfg', b'0', '30', '4', '08-05-17'),
(10, '2', 'fbfbhffffffff', b'0', '32', '3', '08-05-17'),
(11, '1', 'MECHANICAL', b'0', '32', '4', '08-05-17'),
(12, '1', 'CSE', b'0', '32', '4', '08-05-17'),
(20, '3', 'comm2', b'1', '31', '4', '18-05-17'),
(19, '3', 'comm1', b'1', '31', '4', '18-05-17'),
(21, '2', 'phys sci1', b'1', '40', '3', '18-05-17'),
(22, '2', 'phys sci2', b'1', '40', '3', '18-05-17'),
(23, '2', 'phys sci1', b'1', '40', '6', '18-05-17'),
(24, '2', 'phys sci1', b'1', '40', '6', '18-05-17'),
(26, '1', 'CSE2', b'1', '42', '4', '18-05-17'),
(27, '2', 'ff', b'1', '42', '3', '18-05-17'),
(28, '2', 'ss', b'1', '42', '3', '18-05-17'),
(29, '2', 'ttt', b'1', '42', '3', '18-05-17'),
(30, '2', 'may19_1', b'1', '42', '', '19-05-17'),
(31, '2', 'may19_2', b'1', '42', '', '19-05-17'),
(32, '1', 'aa', b'0', '43', '2', '19-05-17'),
(33, '1', 'one', b'1', '43', '2', '19-05-17'),
(37, '1', 'bb', b'0', '43', '2', '19-05-17'),
(38, '1', 'two', b'1', '43', '2', '19-05-17'),
(42, '1', 'ccc', b'0', '43', '2', '19-05-17'),
(43, '1', 'three', b'1', '43', '2', '19-05-17'),
(48, '1', 'dd', b'0', '43', '2', '19-05-17'),
(49, '1', 'four', b'1', '43', '2', '19-05-17'),
(53, '1', 'five', b'1', '43', '2', '19-05-17'),
(56, '1', 'six', b'1', '43', '2', '19-05-17'),
(57, '2', 'we', b'1', '43', '2', '19-05-17'),
(58, '2', 'we', b'1', '43', '2', '19-05-17'),
(59, '2', 'we', b'1', '43', '2', '19-05-17'),
(60, '2', 'we', b'1', '43', '2', '19-05-17'),
(61, '2', 'we', b'1', '43', '2', '19-05-17'),
(62, '2', 'we', b'1', '43', '2', '19-05-17'),
(63, '2', 'we', b'1', '43', '2', '19-05-17'),
(64, '2', 'we', b'1', '43', '2', '19-05-17'),
(65, '2', 'we', b'1', '43', '2', '19-05-17'),
(66, '2', 'we', b'1', '43', '2', '19-05-17'),
(67, '2', 'arew', b'1', '43', '2', '19-05-17'),
(68, '2', 'arew', b'1', '43', '2', '19-05-17'),
(69, '2', 'arew', b'1', '43', '2', '19-05-17'),
(70, '2', 'arew', b'1', '43', '2', '19-05-17'),
(71, '2', 'arew', b'1', '43', '2', '19-05-17'),
(72, '2', 'gjgfj', b'1', '43', '2', '19-05-17'),
(73, '2', 'gjgfj', b'1', '43', '2', '19-05-17'),
(74, '2', 'gjgfj', b'1', '43', '2', '19-05-17'),
(75, '2', 'gjgfj', b'1', '43', '2', '19-05-17'),
(76, '2', 'gjgfj', b'1', '43', '2', '19-05-17'),
(77, '2', 'cf', b'1', '43', '2', '19-05-17'),
(78, '2', 'cf', b'1', '43', '2', '19-05-17'),
(79, '2', 'cf', b'1', '43', '2', '19-05-17'),
(80, '2', 'cf', b'1', '43', '2', '19-05-17'),
(81, '2', 'cf', b'1', '43', '2', '19-05-17'),
(82, '2', 'fhgfdh', b'1', '43', '2', '19-05-17'),
(83, '2', 'fhgfdh', b'1', '43', '2', '19-05-17'),
(84, '2', 'fhgfdh', b'1', '43', '2', '19-05-17'),
(85, '2', 'fhgfdh', b'1', '43', '2', '19-05-17'),
(86, '2', 'fhgfdh', b'1', '43', '2', '19-05-17'),
(87, '2', 'we', b'1', '43', '2', '19-05-17'),
(88, '2', 'we', b'1', '43', '2', '19-05-17'),
(89, '2', 'we', b'1', '43', '2', '19-05-17'),
(90, '2', 'we', b'1', '43', '2', '19-05-17'),
(91, '2', 'we', b'1', '43', '2', '19-05-17'),
(92, '2', 'we', b'1', '43', '2', '19-05-17'),
(93, '2', 'we', b'1', '43', '2', '19-05-17'),
(94, '2', 'we', b'1', '43', '2', '19-05-17'),
(95, '2', 'we', b'1', '43', '2', '19-05-17'),
(96, '2', 'we', b'1', '43', '2', '19-05-17'),
(97, '2', 'we', b'1', '43', '2', '19-05-17'),
(98, '2', 'we', b'1', '43', '2', '19-05-17'),
(99, '2', 'we', b'1', '43', '2', '19-05-17'),
(100, '2', 'we', b'1', '43', '2', '19-05-17'),
(101, '2', 'we', b'1', '43', '2', '19-05-17'),
(102, '2', 'we', b'1', '43', '2', '19-05-17'),
(103, '2', 'we', b'1', '43', '2', '19-05-17'),
(104, '2', 'we', b'1', '43', '2', '19-05-17'),
(105, '2', 'we', b'1', '43', '2', '19-05-17'),
(106, '2', 'we', b'1', '43', '2', '19-05-17'),
(107, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(108, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(109, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(110, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(111, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(112, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(113, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(114, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(115, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(116, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(117, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(118, '3', 'bsc_1', b'1', '44', '3', '19-05-17'),
(119, '3', 'phys sci12', b'1', '44', '3', '19-05-17'),
(120, '3', 'phys sci12', b'1', '44', '3', '19-05-17'),
(121, '3', 'phys sci12', b'1', '44', '3', '19-05-17'),
(122, '3', 'phys sci12', b'1', '44', '3', '19-05-17'),
(123, '3', 'phys sci12', b'1', '44', '3', '19-05-17'),
(124, '3', 'phys sci12', b'1', '44', '3', '19-05-17'),
(125, '2', 'lifescience1', b'0', '44', '4', '19-05-17'),
(126, '2', 'lifescience2', b'0', '44', '4', '19-05-17'),
(127, '2', 'lifescience3', b'0', '44', '4', '19-05-17'),
(128, '2', 'lifescience4', b'0', '44', '4', '19-05-17'),
(129, '2', 'lifescience5', b'0', '44', '4', '19-05-17'),
(130, '2', 'lifescience6', b'0', '44', '4', '19-05-17'),
(131, '2', 'lifescience7', b'0', '44', '4', '19-05-17'),
(132, '2', 'lifescience1', b'0', '44', '4', '19-05-17'),
(133, '2', 'lifescience2', b'0', '44', '4', '19-05-17'),
(134, '2', 'lifescience3', b'0', '44', '4', '19-05-17'),
(135, '2', 'lifescience4', b'0', '44', '4', '19-05-17'),
(136, '2', 'lifescience5', b'0', '44', '4', '19-05-17'),
(137, '2', 'lifescience6', b'0', '44', '4', '19-05-17'),
(138, '2', 'lifescience7', b'0', '44', '4', '19-05-17'),
(139, '2', 'lifescience1', b'1', '44', '3', '19-05-17'),
(140, '2', 'lifescience2', b'1', '44', '3', '19-05-17'),
(141, '2', 'lifescience3', b'1', '44', '3', '19-05-17'),
(142, '2', 'lifescience4', b'1', '44', '3', '19-05-17'),
(143, '2', 'lifescience5', b'1', '44', '3', '19-05-17'),
(144, '2', 'lifescience6', b'1', '44', '3', '19-05-17'),
(145, '2', 'lifescience7', b'1', '44', '3', '19-05-17'),
(146, '2', 'lifescience1', b'1', '44', '3', '19-05-17'),
(147, '2', 'lifescience2', b'1', '44', '3', '19-05-17'),
(148, '2', 'lifescience3', b'1', '44', '3', '19-05-17'),
(149, '2', 'lifescience1', b'1', '44', '3', '19-05-17'),
(150, '2', 'lifescience2', b'1', '44', '3', '19-05-17'),
(151, '2', 'lifescience3', b'1', '44', '3', '19-05-17'),
(152, '2', 'lifescience4', b'1', '44', '3', '19-05-17'),
(153, '2', 'lifescience5', b'1', '44', '3', '19-05-17'),
(154, '2', 'lifescience6', b'1', '44', '3', '19-05-17'),
(155, '2', 'lifescience7', b'1', '44', '3', '19-05-17'),
(156, '2', 'lifescience2', b'0', '44', '3', '19-05-17'),
(157, '2', 'lifescience2', b'0', '44', '3', '19-05-17'),
(158, '2', 'lifescience4', b'0', '44', '3', '19-05-17'),
(159, '2', 'lifescience2', b'0', '44', '3', '19-05-17'),
(160, '2', 'lifescience2', b'0', '44', '3', '19-05-17'),
(161, '2', 'lifescience2', b'0', '44', '3', '19-05-17'),
(162, '2', 'lifescience2', b'1', '44', '3', '19-05-17'),
(163, '2', 'lifescience4', b'1', '44', '3', '19-05-17'),
(164, '2', 'phys sci2', b'1', '44', '3', '19-05-17'),
(165, '2', 'lifescience3', b'1', '44', '3', '19-05-17'),
(166, '2', 'lifescience4', b'1', '44', '3', '19-05-17'),
(167, '2', 'crime1', b'1', '49', '1', '19-05-17'),
(168, '2', 'crime2', b'1', '49', '1', '19-05-17'),
(169, '2', 'crime3', b'1', '49', '1', '19-05-17'),
(170, '2', 'crime4', b'1', '49', '1', '19-05-17'),
(171, '2', 'crime5', b'1', '49', '1', '19-05-17'),
(172, '2', 'crime1', b'0', '49', '6', '19-05-17'),
(173, '2', 'crime1', b'0', '49', '6', '19-05-17'),
(174, '2', 'crime1', b'0', '49', '6', '19-05-17'),
(175, '2', 'crime1', b'0', '49', '3', '19-05-17'),
(176, '2', 'crime2', b'0', '49', '3', '19-05-17'),
(177, '2', 'crime3', b'0', '49', '3', '19-05-17'),
(178, '2', 'crime1', b'1', '49', '1', '19-05-17'),
(179, '2', 'crime2', b'1', '49', '1', '19-05-17'),
(180, '2', 'crime1', b'1', '49', '2', '19-05-17'),
(181, '2', 'crime3', b'1', '49', '2', '19-05-17'),
(182, '2', 'crime2', b'1', '49', '3', '19-05-17'),
(183, '2', 'crime3', b'1', '49', '3', '19-05-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissiondates`
--
ALTER TABLE `admissiondates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `challan`
--
ALTER TABLE `challan`
  ADD UNIQUE KEY `tbl_id` (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecat`
--
ALTER TABLE `coursecat`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `coursetype`
--
ALTER TABLE `coursetype`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `course_fee`
--
ALTER TABLE `course_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_sturture`
--
ALTER TABLE `fee_sturture`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `masteradmissionterm`
--
ALTER TABLE `masteradmissionterm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mastersubjectmodifiable`
--
ALTER TABLE `mastersubjectmodifiable`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restrict_subject`
--
ALTER TABLE `restrict_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studcourse`
--
ALTER TABLE `studcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studdocument`
--
ALTER TABLE `studdocument`
  ADD PRIMARY KEY (`stud_docid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `stud_message`
--
ALTER TABLE `stud_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_migrate`
--
ALTER TABLE `stud_migrate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_terminate`
--
ALTER TABLE `stud_terminate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admissiondates`
--
ALTER TABLE `admissiondates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `challan`
--
ALTER TABLE `challan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `coursecat`
--
ALTER TABLE `coursecat`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `coursetype`
--
ALTER TABLE `coursetype`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course_fee`
--
ALTER TABLE `course_fee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `fee_sturture`
--
ALTER TABLE `fee_sturture`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `masteradmissionterm`
--
ALTER TABLE `masteradmissionterm`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mastersubjectmodifiable`
--
ALTER TABLE `mastersubjectmodifiable`
  MODIFY `int` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `restrict_subject`
--
ALTER TABLE `restrict_subject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `studcourse`
--
ALTER TABLE `studcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studdocument`
--
ALTER TABLE `studdocument`
  MODIFY `stud_docid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `stud_message`
--
ALTER TABLE `stud_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stud_migrate`
--
ALTER TABLE `stud_migrate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stud_terminate`
--
ALTER TABLE `stud_terminate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=184;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
