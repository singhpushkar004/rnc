-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2024 at 06:34 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `email`, `password`, `dor`) VALUES
(1, 'admin@gmail.com', 'admin@123', '05/09/2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_committee`
--

DROP TABLE IF EXISTS `tbl_committee`;
CREATE TABLE IF NOT EXISTS `tbl_committee` (
  `ccid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `doc` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`ccid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_committee`
--

INSERT INTO `tbl_committee` (`ccid`, `name`, `doc`, `status`) VALUES
(1, 'Sports Committee', '2024-09-15', 'Y'),
(2, 'Placement/Career Counselling Cell', '2024-09-19', 'Y'),
(3, 'College Developement Committee', '2024-09-19', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_com_member`
--

DROP TABLE IF EXISTS `tbl_com_member`;
CREATE TABLE IF NOT EXISTS `tbl_com_member` (
  `cmid` int(11) NOT NULL AUTO_INCREMENT,
  `ccid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `doa` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`cmid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_com_member`
--

INSERT INTO `tbl_com_member` (`cmid`, `ccid`, `name`, `department`, `designation`, `doa`, `status`) VALUES
(1, 1, 'Kajal', 'Sport', 'English', '2024-09-15 15:43:33', 'Y'),
(2, 3, 'Akash', 'Hindi', 'Student', '2024-09-19 08:05:46', 'Y'),
(3, 2, 'Akash', 'Hindi', 'Student', '2024-09-19 08:07:47', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `coid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` varchar(13) NOT NULL,
  `messege` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL,
  `doc` varchar(10) NOT NULL,
  PRIMARY KEY (`coid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`coid`, `name`, `email`, `mobileno`, `messege`, `status`, `doc`) VALUES
(1, 'kajal', 'soni@gmail.com', '123456', 'asdfgh', 'Y', '2024-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

DROP TABLE IF EXISTS `tbl_course`;
CREATE TABLE IF NOT EXISTS `tbl_course` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `fees` varchar(30) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL,
  `doc` varchar(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`cid`, `name`, `duration`, `fees`, `seat`, `status`, `doc`) VALUES
(1, 'B.A', '3', '8000', '75', 'Y', '2024-09-19'),
(3, 'M.A', '3', '9000', '50', 'Y', '2024-09-19'),
(4, 'B.COM', '3', '10000', '50', 'Y', '2024-09-19'),
(5, 'B.SC', '3', '6000', '75', 'Y', '2024-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` varchar(13) NOT NULL,
  `message` varchar(200) NOT NULL,
  `dof` varchar(10) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fid`, `name`, `email`, `mobileno`, `message`, `dof`) VALUES
(1, 'kajal', 'soni@gmail.com', '1234567890', 'good', '2024-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

DROP TABLE IF EXISTS `tbl_gallery`;
CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `picname` varchar(100) NOT NULL,
  `dor` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gid`, `name`, `picname`, `dor`, `status`) VALUES
(1, 'Abhiyan', 'a1.jpg', '2024-09-14', 'Y'),
(2, 'rojgaj', 'a3.jpg', '2024-09-14', 'Y'),
(3, 'abhiyan', 'a6.jpg', '2024-09-15', 'Y'),
(4, 'gallery', 'a5.jpg', '2024-09-15', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mentor`
--

DROP TABLE IF EXISTS `tbl_mentor`;
CREATE TABLE IF NOT EXISTS `tbl_mentor` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `picname` varchar(100) NOT NULL,
  `department` varchar(60) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dom` varchar(10) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mentor`
--

INSERT INTO `tbl_mentor` (`mid`, `name`, `picname`, `department`, `status`, `dom`) VALUES
(1, 'Nitish kumar', 'cm_nitish_kumar.jpg', 'CM of Bihar', 'Y', '2024-09-17'),
(2, 'Dr. Arti ', 'arti.jpg', 'Hindi', 'Y', '2024-09-18'),
(3, 'Dr. S.K Chaudhary', 'vc_prof_sanjay_kumar_choudhary.jpg', 'hindi', 'Y', '2024-09-18'),
(4, 'Dr. Rajendra Arlekar', 'Rajendra_Arlekar.jpg', 'hindi', 'Y', '2024-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nonteacher`
--

DROP TABLE IF EXISTS `tbl_nonteacher`;
CREATE TABLE IF NOT EXISTS `tbl_nonteacher` (
  `ntid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `picname` varchar(100) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `mobileno` varchar(13) NOT NULL,
  `dor` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`ntid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nonteacher`
--

INSERT INTO `tbl_nonteacher` (`ntid`, `name`, `picname`, `designation`, `qualification`, `mobileno`, `dor`, `status`) VALUES
(2, 'Kuldip kumar jha', 'n1.jpg', 'UDC', 'M.A', '8210288985', '2024-09-13', 'Y'),
(3, 'Amar Nath Jha', 'n1.jpeg', 'Accountant', 'M.A', '6299536645', '2024-09-13', 'Y'),
(4, 'Jay Shankar Jha', 'n4.jpg', 'Routine clerk', 'M.A', '8092197765', '2024-09-13', 'Y'),
(5, 'Rajendra kamat', 'n5.jpg', 'Peon', 'Non-Metric', '9939821324', '2024-09-13', 'Y'),
(6, 'Yougeshwar Mandal', 'n6.jpg', 'Peon', '10th', '9199550076', '2024-09-13', 'Y'),
(7, 'Hoor Bano', 'n7.jpg', 'Peon', 'Non-Metric', '9523601332', '2024-09-13', 'Y'),
(8, 'Raju Kumar Mishra', 'n8.jpg', 'Peon', 'Non-Metric', '9708765870', '2024-09-13', 'Y'),
(9, 'Madan kumar chaudhary', 'n9.jpg', 'Peon', 'B.Com', '8544114001', '2024-09-13', 'Y'),
(10, 'Pawan Kumar Singh', 'n10.jpg', 'Peon', 'Non-metric', '9708943565', '2024-09-13', 'Y'),
(11, 'Chandra Shekhar bharti', 'n11.jpg', 'Peon', 'Non-Metric', '8935808689', '2024-09-13', 'Y'),
(12, 'Bodh kant Mishra', 'n12.jpg', 'Peon', 'B.A', '6206787235', '2024-09-13', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

DROP TABLE IF EXISTS `tbl_notification`;
CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(200) NOT NULL,
  `file` varchar(100) NOT NULL,
  `dor` varchar(10) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`nid`, `message`, `file`, `dor`) VALUES
(6, '   Regarding Graduation First Semester Session 2023 - 2027 Exam 2023', 'c712e0d96b17c1a3bb0f2b18f210b4a9.pdf', '2024-09-18'),
(4, '   à¤¡à¤®à¥€ à¤ªà¤‚à¤œà¥€à¤¯à¤¨ à¤ªà¥à¤°à¤ªà¤¤à¥à¤° à¤‘à¤¨à¤²à¤¾à¤‡à¤¨ à¤…à¤ªà¤²à¥‹à¤¡ à¤•à¤°à¤¨à¥‡ à¤•à¥‡ à¤¸à¤‚à¤¬à¤‚à¤§ à¤®à¥‡à¤‚ |', 'news3.pdf', '2024-09-18'),
(5, '   Regarding Graduation First Semester Session 2023 - 2027 Exam 2023', 'PFDFHI (1).pptx', '2024-09-18'),
(7, '   Regarding Graduation First Semester Session 2023 - 2027 Exam 2023', 'International Literacy Day.pdf', '2024-09-18'),
(8, '   Practical Examinations C.B.C.S-2024 Date.& College Notes.', '36801d72d4f0b71706e9b26a66886ce7.pdf', '2024-09-18'),
(9, '  Regarding Graduation First Semester Session 2023 - 2027 Exam 2023', '4cedb9f91436c14372384a175f50d244.pdf', '2024-09-18'),
(10, 'Picturs of khadi for Nation & Sardar Vallabh bhai Patel Jayanti on 31-10-2023 With R.N.College family.', 'lalitdb9f91436c14372384a175f50d244 (1).pdf', '2024-09-18'),
(11, '   Practical Examinations C.B.C.S-2024 Date.& College Notes.', '3aea946aa3ad8163a95d11afac082fc1.pdf', '2024-09-18'),
(12, '   Regarding Graduation First Semester Session 2023 - 2027 Exam 2023', '4cedb9f91436c14372384a175f50d244.pdf', '2024-09-18'),
(13, 'Picturs of khadi for Nation & Sardar Vallabh bhai Patel Jayanti on 31-10-2023 With R.N.College family.', '3aea946aa3ad8163a95d11afac082fc1.pdf', '2024-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `picname` varchar(200) NOT NULL,
  `status` varchar(1) NOT NULL,
  `dos` varchar(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`sid`, `picname`, `status`, `dos`) VALUES
(2, '01.jpg', 'Y', '2024-09-15'),
(3, '02.png', 'Y', '2024-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

DROP TABLE IF EXISTS `tbl_teacher`;
CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `picname` varchar(100) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` varchar(13) NOT NULL,
  `dor` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`tid`, `name`, `picname`, `designation`, `qualification`, `department`, `email`, `mobileno`, `dor`, `status`) VALUES
(1, 'Dr. Arti Prasad', 'arti.jpg', 'Professor In Charge', '	MA, M. Phil., Ph.D Hindi (DU)', 'Hindi', 'artiprasad1968@gmail.com', '9955839898', '2024-09-14', 'Y'),
(2, 'Dr Dipa kumari', 't3.jpg', '	Associate professor', 'Ph.D', 'Zoology', 'deepa.kumari1970@gmail.com', '9471652937', '2024-09-14', 'Y'),
(3, 'Dr. Shiva Nand Jha', 't4.jpeg', '	Associate professor', 'M.A,Ph.D', 'Psychology', 'jhashivanand@gmail.com', '9472800737', '2024-09-14', 'Y'),
(4, 'Girjesh Singh', 't5.jpg', '	Associate professor', 'M.A,BET', 'Political Science', 'girijesh14964@gmail.com', '9801727008', '2024-09-14', 'Y'),
(5, 'Dr. Meena Devi', 't6.jpg', 'Associate professor(GT)', 'Ph.D', 'Psychology', 'meena2s1966@gmail.com', '9934861784', '2024-09-14', 'Y'),
(6, 'Dr. Laxmi Kumari', 't7.jpg', 'Associate professor(GT)', 'M.A,Ph.D', 'Philosophy', 'laxmikumaridbg123@gmail.com', '6202079485', '2024-09-14', 'Y'),
(7, 'Dr. Chandan kumar choudhary', 't8.jpg', 'Associate professor(GT)', 'M.Sc,Ph.D', 'Chemistry', 'chnadankc@gmail.com', '9955724141', '2024-09-14', 'Y'),
(8, 'Dr. Kailash kumar choudhary', 't9.jpg', 'Associate professor(GT)', 'M.Com(Topper), Ph.D', '	Commerce', 'kailash78.kc@gmail.com', '9304111277', '2024-09-14', 'Y'),
(9, 'Dr. Santosh Kumar Singh', 't10.jpg', 'Associate professor(GT)', 'M.Com, Ph.D', '	Commerce', 'sksinghrajput724@gmail.com', '9304189301', '2024-09-14', 'Y'),
(10, 'Dr. Md. Monauwar Alam', 't11.jpg', 'Associate professor(GT)', 'M.A, Ph.D', 'Urdu', 'manauwar1965@gmail.com', '9934938380', '2024-09-14', 'Y'),
(11, 'Dr. Rajiv Ranjan', 't12.jpg', 'Associate professor(GT)', 'Ph.D.Economics', 'Economics', 'rajiv.sakri@gmail.com', '7979769482', '2024-09-14', 'Y'),
(12, 'Dr. Namita Kumari', 't13.jpg', 'Associate professor(GT)', 'M.Com, NET', '	Commerce', 'knamita98@gmail.com', '7991171388', '2024-09-14', 'Y'),
(13, 'Dr. Dilip Kumar Paswan', 't14.jpg', 'Associate professor(GT)', 'M.A,Ph.D', 'Political Science', 'dilippaswanrnc@gmail.com', '9955735159', '2024-09-14', 'Y'),
(14, 'Dr. Fauzia Haider', 't15.jpg', 'Associate professor(GT)', 'Ph.D', 'English', 'Fauzia.aiman@gmail.com', '8002813308', '2024-09-14', 'Y'),
(15, 'Dr. Shankar kumar jha', 't16.jpg', 'Associate professor(GT)', 'M.Sc,Ph.D', 'Physics', 'sjjha2542@gmail.com', '9473370183', '2024-09-14', 'Y');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
