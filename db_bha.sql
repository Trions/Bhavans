-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2013 at 09:34 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bha`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_caserecord_special`
--

CREATE TABLE IF NOT EXISTS `tbl_caserecord_special` (
  `s_name` varchar(30) NOT NULL,
  `school` varchar(20) NOT NULL,
  `clas` varchar(20) NOT NULL,
  `info_provider` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_age` int(3) NOT NULL,
  `m_education` varchar(30) NOT NULL,
  `m_occupation` varchar(30) NOT NULL,
  `m_mobile` varchar(15) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_age` int(3) NOT NULL,
  `f_education` varchar(30) NOT NULL,
  `f_occupation` varchar(10) NOT NULL,
  `f_mobile` varchar(15) NOT NULL,
  `guardian` varchar(30) NOT NULL,
  `g_age` int(3) NOT NULL,
  `g_education` varchar(30) NOT NULL,
  `g_occupation` varchar(30) NOT NULL,
  `g_mobile` varchar(15) NOT NULL,
  `mstatus` varchar(10) NOT NULL,
  `mtounge` varchar(30) NOT NULL,
  `present_problem` varchar(1000) NOT NULL,
  `sensory_communication` varchar(10) NOT NULL,
  `socialbehaviour` varchar(10) NOT NULL,
  `date_noticed` varchar(100) NOT NULL,
  `past_exp` varchar(10) NOT NULL,
  `present_exp` varchar(10) NOT NULL,
  `med_history` varchar(1000) NOT NULL,
  `school_info` varchar(150) NOT NULL,
  `other_info` varchar(1000) NOT NULL,
  `class_support` varchar(1000) NOT NULL,
  `daily_report` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_caserecord_special`
--

INSERT INTO `tbl_caserecord_special` (`s_name`, `school`, `clas`, `info_provider`, `m_name`, `m_age`, `m_education`, `m_occupation`, `m_mobile`, `f_name`, `f_age`, `f_education`, `f_occupation`, `f_mobile`, `guardian`, `g_age`, `g_education`, `g_occupation`, `g_mobile`, `mstatus`, `mtounge`, `present_problem`, `sensory_communication`, `socialbehaviour`, `date_noticed`, `past_exp`, `present_exp`, `med_history`, `school_info`, `other_info`, `class_support`, `daily_report`) VALUES
('jhg', 'vidyalaya ekm', 'aef', 'hljg', 'jhgjkhg', 12, 'khgkjgk', 'gkug', 'kugkuyg', 'kuygkuygkuygk', 34, 'uygugt', 'kuug', 'yufkgk', 'gkuyg', 23, 'fgugf', 'kuygkuyku', 'kuglhlkjuh', 'hj', 'kgkugy', 'kg', 'ugkuyg', 'kuygu', 'gkuyfku', 'fkugf', 'kufgku', 'yfuyf', 'kuyfkf', 'kufku', 'fykuyf', 'kufy'),
('fy', 'st. 123', 'aef', 'hljg', 'jhgjkhg', 0, 'khgkjgk', 'gkug', 'kugkuyg', 'kuygkuygkuygk', 0, 'uygugt', 'kuug', 'yufkgk', 'gkuyg', 0, 'fgugf', 'kuygkuyku', 'kuglhlkjuh', '0', 'kgkugy', 'kg', 'ugkuyg', 'kuygu', 'gkuyfku', 'fkugf', 'kufgku', 'yfuyf', 'kuyfkf', 'kufku', 'fykuyf', 'kufy'),
('ytiy', 'baha ernakulam', 'aef', 'hljg', 'jhgjkhg', 0, 'khgkjgk', 'gkug', 'kugkuyg', 'kuygkuygkuygk', 0, 'uygugt', 'kuug', 'yufkgk', 'gkuyg', 0, 'fgugf', 'kuygkuyku', 'kuglhlkjuh', '0', 'kgkugy', 'kg', 'ugkuyg', 'kuygu', 'gkuyfku', 'fkugf', 'kufgku', 'yfuyf', 'kuyfkf', 'kufku', 'fykuyf', 'kufy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coun_cls_supp_rem`
--

CREATE TABLE IF NOT EXISTS `tbl_coun_cls_supp_rem` (
  `stu_id` int(10) NOT NULL,
  `cls_rm_supp` varchar(500) NOT NULL,
  `dly_rep` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coun_inst_obj_act`
--

CREATE TABLE IF NOT EXISTS `tbl_coun_inst_obj_act` (
  `stu_id` int(10) NOT NULL,
  `reading` varchar(300) DEFAULT NULL,
  `reading_compre` varchar(300) DEFAULT NULL,
  `spelling` varchar(300) DEFAULT NULL,
  `handwriting` varchar(300) DEFAULT NULL,
  `writen_exp` varchar(300) DEFAULT NULL,
  `arith_math` varchar(300) DEFAULT NULL,
  `sub_content` varchar(300) DEFAULT NULL,
  `remarks` varchar(300) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coun_obser_repo`
--

CREATE TABLE IF NOT EXISTS `tbl_coun_obser_repo` (
  `stu_id` int(10) NOT NULL,
  `co_oper` varchar(300) DEFAULT NULL,
  `peer_int` varchar(300) NOT NULL,
  `cls_parti` varchar(300) NOT NULL,
  `fol_o_ins` varchar(300) NOT NULL,
  `atten_nd_concen` varchar(300) NOT NULL,
  `stength` varchar(300) NOT NULL,
  `any_othr_rmrk` varchar(300) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coun_yr_end_summ`
--

CREATE TABLE IF NOT EXISTS `tbl_coun_yr_end_summ` (
  `stu_id` int(11) NOT NULL,
  `sum_rem_stf_prg` varchar(500) NOT NULL,
  `sugges` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guardian`
--

CREATE TABLE IF NOT EXISTS `tbl_guardian` (
  `guar_id` int(10) NOT NULL AUTO_INCREMENT,
  `guar_name` varchar(40) NOT NULL,
  `guar_occu` varchar(20) NOT NULL,
  `guar_age` int(3) NOT NULL,
  `guar_con_add` varchar(100) NOT NULL,
  `guar_per_add` varchar(100) NOT NULL,
  `guar_mob_ph` int(15) NOT NULL,
  `guar_res_ph` int(11) NOT NULL,
  `guar_pin` int(11) NOT NULL,
  `guar_office_ph` int(11) NOT NULL,
  PRIMARY KEY (`guar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `lgin_name` varchar(50) NOT NULL,
  `lgin_pass` varchar(50) NOT NULL,
  `lgin_cat` int(3) NOT NULL,
  `lgin_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`lgin_name`, `lgin_pass`, `lgin_cat`, `lgin_id`) VALUES
('eldho', 'eldho', 1, 0),
('eldho', 'pass', 1, 0),
('kevin', 'p', 2, 17),
('jobm', 'password', 2, 0),
('kamalaj', 'password', 2, 22),
('claram', 'password', 2, 23),
('dateck', 'password', 2, 24),
('gkg75', 'password', 2, 25),
('gkg75', 'password', 2, 26),
('ytyt5765', 'password', 2, 27),
('', 'password', 2, 28),
('jgyuyyghk', 'password', 2, 29),
('hg6t', 'password', 2, 30),
('uygu76', 'password', 2, 31),
('uygu76', 'password', 2, 32),
('uygu76', 'password', 2, 33),
('uygu76', 'password', 2, 34),
('', 'password', 2, 35),
('', 'password', 2, 36),
('', 'password', 2, 37),
('', 'password', 2, 38),
('', 'password', 2, 39),
('', 'password', 2, 40),
('', 'password', 2, 41),
('', 'password', 2, 42),
('', 'password', 2, 43),
('', 'password', 2, 44),
('', 'password', 2, 45),
('', 'password', 2, 46),
('', 'password', 2, 47),
('', 'password', 2, 48),
('', 'password', 2, 49),
('', 'password', 2, 50),
('', 'password', 2, 51),
('', 'password', 2, 52),
('', 'password', 2, 53),
('', 'password', 2, 54),
('', 'password', 2, 55),
('', 'password', 2, 56),
('', 'password', 2, 57),
('', 'password', 2, 58),
('', 'password', 2, 59),
('', 'password', 2, 60),
('', 'password', 2, 61);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_principal`
--

CREATE TABLE IF NOT EXISTS `tbl_principal` (
  `prin_id` int(10) NOT NULL AUTO_INCREMENT,
  `pri_name` varchar(40) NOT NULL,
  `scl_id` int(10) NOT NULL COMMENT 'foreign key',
  `pri_ph` int(15) NOT NULL,
  `pri_add` varchar(100) NOT NULL,
  PRIMARY KEY (`prin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rem_referral`
--

CREATE TABLE IF NOT EXISTS `tbl_rem_referral` (
  `sl_no` int(10) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `school` varchar(80) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `reason_for_referring` varchar(300) NOT NULL,
  `fscr` tinyint(1) NOT NULL,
  `fd` tinyint(1) NOT NULL,
  `cpc` tinyint(1) NOT NULL,
  `la` tinyint(1) NOT NULL,
  `pca` tinyint(1) NOT NULL,
  `wwdo` tinyint(1) NOT NULL,
  `cwat` tinyint(1) NOT NULL,
  `cha` tinyint(1) NOT NULL,
  `sebw` tinyint(1) NOT NULL,
  `wco` tinyint(1) NOT NULL,
  `tcpp` tinyint(1) NOT NULL,
  `tcsp` tinyint(1) NOT NULL,
  `roc` tinyint(1) NOT NULL,
  `psc` tinyint(1) NOT NULL,
  `ra` tinyint(1) NOT NULL,
  `bapg` tinyint(1) NOT NULL,
  `baccar` tinyint(1) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `academic` varchar(300) NOT NULL,
  `student_strengths` varchar(300) NOT NULL,
  `view_about_parents` varchar(300) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_rem_referral`
--

INSERT INTO `tbl_rem_referral` (`sl_no`, `student_name`, `grade`, `school`, `teacher_id`, `reason_for_referring`, `fscr`, `fd`, `cpc`, `la`, `pca`, `wwdo`, `cwat`, `cha`, `sebw`, `wco`, `tcpp`, `tcsp`, `roc`, `psc`, `ra`, `bapg`, `baccar`, `remarks`, `academic`, `student_strengths`, `view_about_parents`) VALUES
(3, 'kokk', 'afd', 'sfs', 43, ' sdafsa', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ' ', ' ', ' ', ' '),
(4, 'kaka', 'sdf3', 'asldfd', 444, ' adf asdfl', 1, 2, 2, 2, 2, 1, 2, 0, 0, 2, 1, 2, 0, 1, 0, 2, 0, ' sdfs', ' fd', ' sfdsa', ' fddsg'),
(5, 'kjuikugf', 'yhgjk', 'kjhsa', 543, ' sfsa', 1, 2, 1, 0, 0, 0, 2, 2, 0, 0, 0, 1, 1, 1, 2, 2, 1, ' asdfsafasf', ' saf', ' sada', ' sfdkjuikugf'),
(7, 'eeee', 'e', 'ghgh', 17, ' ererrw\nrt\ne', 1, 2, 1, 0, 1, 1, 2, 0, 1, 0, 1, 2, 0, 0, 0, 0, 1, 'sadfsdf\nsdafsa ', ' sadfsdgf\nsfdg\nsg', ' sdfsda\ngfsfdgsa', ' sadfsfd\nsdagsa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school`
--

CREATE TABLE IF NOT EXISTS `tbl_school` (
  `scl_id` int(10) NOT NULL AUTO_INCREMENT,
  `scl_name` varchar(80) NOT NULL,
  `scl_ph` int(15) NOT NULL,
  `scl_add` varchar(200) NOT NULL,
  PRIMARY KEY (`scl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=334 ;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`scl_id`, `scl_name`, `scl_ph`, `scl_add`) VALUES
(111, 'st. 123', 876543, 'jhfk\nhgd '),
(124, 'baha ernakulam', 98765678, 'lahpa\nasjf \nernakulam '),
(333, 'vidyalaya ekm', 2147483647, 'dsfdsf\ndsagf\nsdgf ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_iden`
--

CREATE TABLE IF NOT EXISTS `tbl_student_iden` (
  `stu_id` int(10) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(50) NOT NULL,
  `stu_grade` varchar(5) NOT NULL,
  `stu_div` varchar(5) NOT NULL,
  `stu_acdyear` date NOT NULL COMMENT 'check if its b/w two years or just one year',
  `stu_dob` date NOT NULL,
  `stu_gender` char(10) NOT NULL,
  `stu_hphone` varchar(15) NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_student_registration` (
  `stu_id` int(10) NOT NULL AUTO_INCREMENT,
  `stu_rollno` text NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `stu_grade` varchar(10) NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_gender` varchar(10) NOT NULL,
  `stu_father_name` varchar(50) NOT NULL,
  `stu_mother_name` varchar(50) NOT NULL,
  `stu_address` varchar(500) NOT NULL,
  `stu_ph_res` varchar(12) NOT NULL,
  `stu_ph_off` varchar(12) DEFAULT NULL,
  `stu_ph_mob` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbl_student_registration`
--

INSERT INTO `tbl_student_registration` (`stu_id`, `stu_rollno`, `stu_name`, `stu_grade`, `stu_dob`, `stu_gender`, `stu_father_name`, `stu_mother_name`, `stu_address`, `stu_ph_res`, `stu_ph_off`, `stu_ph_mob`) VALUES
(1, 'yf', 'fy', 'yf', '0000-00-00', 'diu', 'du', 'du', 'ud', 'du', 'du', 'du'),
(7, '345', 'mona', 'e', '1997-08-03', '0', 'sfsf', 'yebhi', 'fsaf\nsdfa\nsdf', '4324', '454345', '453453'),
(8, 'gfu5', 'adsf', 'fu', '1989-08-23', '1', 'mhguy', 'yuy', 'jf]jy\nhfyt   ', '4567', '4567', '4567'),
(9, '333', 'jango', 'd', '1980-08-03', '1', 'ddd', 'dsaf', 'das\ndfd\ndsd ', '987654678', '098567895', '098765456'),
(10, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(11, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(12, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(13, '87', 'jhg', 't6hf', '2013-01-01', '0', 'gf', 'fhgf', 'fghf ', 'hgfj', 'hfhgf', 'fhgfh'),
(14, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(15, '87', 'jhg', 't6hf', '2013-01-01', '0', 'gf', 'fhgf', 'fghf ', 'hgfj', 'hfhgf', 'fhgfh'),
(16, '676', 'ytiy', 'yfyf', '2013-01-01', '0', 'tyf', 'tff', 'tyf ', 'tft', 'tf', 'ytf'),
(17, '676', 'ytiy', 'yfyf', '2013-01-01', '0', 'tyf', 'tff', 'tyf ', 'tft', 'tf', 'ytf'),
(18, '6', 'tyy', '765t', '2013-01-01', '0', '', 'ff', 'fytf ', 'f', 'tff', 't'),
(19, '6', 'tyy', '765t', '2013-01-01', '0', '', 'ff', 'fytf ', 'f', 'tff', 't'),
(20, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(21, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(22, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(23, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(24, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(25, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(26, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(27, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(28, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(29, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(30, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(31, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(32, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(33, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(34, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(35, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(36, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', ''),
(37, '', '', '', '2013-01-01', '0', '', '', ' ', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_acdmic_perfo`
--

CREATE TABLE IF NOT EXISTS `tbl_stu_acdmic_perfo` (
  `stu_id` int(10) NOT NULL,
  `eng` int(3) NOT NULL,
  `hin` int(3) NOT NULL,
  `mal_san` int(3) NOT NULL,
  `math` int(3) NOT NULL,
  `scinece` int(3) NOT NULL,
  `gk` int(3) NOT NULL,
  `fa` varchar(4) NOT NULL,
  `term` int(2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_assessment_info`
--

CREATE TABLE IF NOT EXISTS `tbl_stu_assessment_info` (
  `stu_id` int(10) NOT NULL,
  `assess_info` varchar(200) NOT NULL,
  `time_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_class_tt`
--

CREATE TABLE IF NOT EXISTS `tbl_stu_class_tt` (
  `stu_id` int(10) NOT NULL,
  `tt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_coun_tt`
--

CREATE TABLE IF NOT EXISTS `tbl_stu_coun_tt` (
  `stu_id` int(10) NOT NULL,
  `tt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_hlth`
--

CREATE TABLE IF NOT EXISTS `tbl_stu_hlth` (
  `stu_id` int(10) NOT NULL,
  `vision` varchar(100) NOT NULL,
  `hearing` varchar(100) NOT NULL,
  `physical` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `medication` varchar(100) NOT NULL,
  `doc_name` varchar(40) NOT NULL,
  `hos_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ph_num` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_res_tt`
--

CREATE TABLE IF NOT EXISTS `tbl_stu_res_tt` (
  `stu_id` int(10) NOT NULL,
  `tt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_sib`
--

CREATE TABLE IF NOT EXISTS `tbl_stu_sib` (
  `stu_id` int(10) NOT NULL COMMENT 'foreign key',
  `name` varchar(40) NOT NULL COMMENT 'name of the sibling'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_subject_detail` (
  `subject_id` int(10) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(40) NOT NULL,
  `subject_totalmark` int(4) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_subject_detail`
--

INSERT INTO `tbl_subject_detail` (`subject_id`, `subject_name`, `subject_totalmark`) VALUES
(1, 'KAKAKAKA', 90);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `teacher_id` int(10) NOT NULL AUTO_INCREMENT,
  `teacher_first_name` varchar(50) NOT NULL,
  `teacher_last_name` varchar(50) NOT NULL,
  `teacher_gender` tinyint(1) NOT NULL,
  `teacher_school` int(10) NOT NULL,
  `teacher_dob` date NOT NULL,
  `teacher_address` varchar(200) NOT NULL,
  `teacher_nationality` varchar(20) NOT NULL,
  `teacher_photo` blob NOT NULL,
  `teacher_phone` varchar(12) NOT NULL,
  `teacher_email` varchar(20) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `teacher_first_name`, `teacher_last_name`, `teacher_gender`, `teacher_school`, `teacher_dob`, `teacher_address`, `teacher_nationality`, `teacher_photo`, `teacher_phone`, `teacher_email`) VALUES
(14, 'Kannan', 'Srak', 1, 0, '0000-00-00', 'This ', 'Indian', 0x3630323034335f31303135313538343535383838313535345f313532303439313030345f6e2e6a7067, '34556676', 'ddsdfdf'),
(15, 'Eldhose', 'jo', 1, 0, '0000-00-00', 'dkfjdk ', 'dkfjd', 0x3630323034335f31303135313538343535383838313535345f313532303439313030345f6e2e6a7067, 'fesf', 'fggfd'),
(17, 'kevi', 'n', 1, 0, '0000-00-00', 'dkfjdk ', 'dkfjd', 0x3630323034335f31303135313538343535383838313535345f313532303439313030345f6e2e6a7067, 'fesf', 'fggfd'),
(19, 'dsg', 'sdfs', 0, 0, '0000-00-00', ' sdfdss', 'dfdssfd', '', 'sdfdssdgfs', 'sdgs'),
(20, 'job', 'd', 1, 111, '0000-00-00', ' sdfsdf\nwsfs\nswf ', 'indian', 0x30, '876543234', 'dsgfdst'),
(22, 'kamala', 'j', 0, 0, '0000-00-00', ' adsaf\nsdfa\nsdf\nsd', 'in', '', '456', 'rtyrgh'),
(23, 'clara', 'm', 0, 24343, '0000-00-00', ' akfkf\nasjfk\nfa', 'sadf', '', '54234', 'dgd'),
(24, 'date', 'ck', 0, 124, '1997-08-03', ' fddsfa\nsadf\nsdagf', 'sdf', '', '6543245', 'rsfggfrr'),
(25, 'gkg', '75', 0, 111, '0000-00-00', 'tff ', 'tyf', 0x30, '', 'tf'),
(26, 'gkg', '75', 0, 111, '0000-00-00', 'tff ', 'tyf', 0x30, '', 'tf'),
(27, 'ytyt', '5765', 0, 111, '0000-00-00', 'gff ', 'jfg', 0x30, 'gfg', 'gfj'),
(28, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(29, 'jgyuy', 'yghk', 0, 111, '0000-00-00', 'f ', 'fyt', 0x30, 'fyt', 'ytfy'),
(30, 'hg', '6t', 0, 111, '0000-00-13', 'yu ', 'y', 0x30, 'tf', 'yft'),
(31, 'uygu', '76', 0, 111, '0000-00-00', 'yguy ', 'gy', 0x30, '', 'y'),
(32, 'uygu', '76', 0, 111, '0000-00-00', 'yguy ', 'gy', 0x30, '', 'y'),
(33, 'uygu', '76', 0, 111, '0000-00-00', 'yguy ', 'gy', 0x30, '', 'y'),
(34, 'uygu', '76', 0, 111, '0000-00-00', 'yguy ', 'gy', 0x30, '', 'y'),
(35, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(36, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(37, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(38, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(39, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(40, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(41, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(42, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(43, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(44, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(45, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(46, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(47, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(48, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(49, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(50, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(51, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(52, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(53, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(54, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(55, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(56, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(57, '', '', 0, 0, '0000-00-00', ' ', '', 0x30, '', ''),
(58, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(59, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(60, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', ''),
(61, '', '', 0, 111, '0000-00-00', ' ', '', 0x30, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_eval_record`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_eval_record` (
  `eval_record_id` int(10) NOT NULL,
  `eval_stu_id` int(10) NOT NULL,
  `eval_teach_id` int(10) NOT NULL,
  `eval_date` date NOT NULL,
  PRIMARY KEY (`eval_record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_report`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_report` (
  `sl_no` int(10) NOT NULL,
  `teach_id` int(10) NOT NULL,
  `teach_subject` varchar(20) NOT NULL,
  `teach_view_o_stu_parnt` varchar(500) NOT NULL,
  `cmt_on_addi_info` varchar(500) NOT NULL,
  `new_stu_name` varchar(40) NOT NULL,
  `new_stu_grade` varchar(5) NOT NULL,
  `cls_rm_beha` varchar(200) NOT NULL,
  `peer_inte` varchar(200) NOT NULL,
  `cls_parti` varchar(200) NOT NULL,
  `ablty_to_flw_inst` varchar(200) NOT NULL,
  `attn_nd_concen` varchar(200) NOT NULL,
  `acd_perfo` varchar(200) NOT NULL,
  `strengths` varchar(200) NOT NULL,
  `perfo_lst_yr` varchar(200) NOT NULL,
  `ny_rmrks` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher_report`
--

INSERT INTO `tbl_teacher_report` (`sl_no`, `teach_id`, `teach_subject`, `teach_view_o_stu_parnt`, `cmt_on_addi_info`, `new_stu_name`, `new_stu_grade`, `cls_rm_beha`, `peer_inte`, `cls_parti`, `ablty_to_flw_inst`, `attn_nd_concen`, `acd_perfo`, `strengths`, `perfo_lst_yr`, `ny_rmrks`, `date`) VALUES
(2, 0, 'sdd', 'sdfgs\nsfd', 'sa\nfsdaf\ns', 'fdsaf', 'sdf', ' df', 'khy ', 'tufoti\ngfyu ', 'yturo ', 'yiytt ', 'yutyur ', 'yririyutr ', 'ytiutri ', 'ytiur ', '2011-04-21 00:00:00'),
(4, 234, 'fwdf', 'sahdf\nasdf', 'asdfsadf\nsadfsafd', 'kaka', 'sdf', ' sdfdfsdc', 'uyguygb\niiu ', ' sadsasdfsd', 'sdf', 'kihbi ', 'ihbi ', 'oio\njoij ', 'oijoij\njiu ', 'lknyrde5 ', '2012-12-01 00:00:00'),
(5, 3456, 'bkjh', '', '', 'kjuikugf', 'fytfy', 'dftgyh\\fg ', 'fhgf\n\\fgh\nku ', 'sdfgh\ndfg\n ', 'dfghj\ncvg ', 'gfghjkfg ', 'fgthydfg\n ', 'dfgherty\nfgh ', 'ertydfg\nfg ', 'ertyfg\nghj ', '0002-02-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_student`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_student` (
  `teach_id` int(10) NOT NULL,
  `stu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
