-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2013 at 08:15 AM
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
-- Table structure for table `tbl_class_details`
--

CREATE TABLE IF NOT EXISTS `tbl_class_details` (
  `class_id` int(10) NOT NULL,
  `class_div` varchar(2) NOT NULL,
  `teach_id` int(10) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class_subjects`
--

CREATE TABLE IF NOT EXISTS `tbl_class_subjects` (
  `class_id` int(10) NOT NULL,
  `subjet_id` int(10) NOT NULL,
  `teach_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `lgin_cat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`lgin_name`, `lgin_pass`, `lgin_cat`) VALUES
('eldho', 'eldho', 1),
('eldho', 'pass', 1);

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
-- Table structure for table `tbl_school`
--

CREATE TABLE IF NOT EXISTS `tbl_school` (
  `scl_id` int(10) NOT NULL AUTO_INCREMENT,
  `scl_name` varchar(80) NOT NULL,
  `scl_ph` int(15) NOT NULL,
  `scl_add` varchar(200) NOT NULL,
  PRIMARY KEY (`scl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `tbl_student_mark`
--

CREATE TABLE IF NOT EXISTS `tbl_student_mark` (
  `stu_id` int(10) NOT NULL,
  `subjet_id` int(10) NOT NULL,
  `mark_obtain` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_student_registration` (
  `stu_id` int(10) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `tbl_stu_acdmic_perfo`
--

INSERT INTO `tbl_stu_acdmic_perfo` (`stu_id`, `eng`, `hin`, `mal_san`, `math`, `scinece`, `gk`, `fa`, `term`, `date`) VALUES
(100, 22, 24, 26, 20, 19, 19, 'c', 1, '2009-12-20 00:00:00'),
(101, 29, 23, 20, 35, 51, 44, 'b', 1, '2010-12-20 00:00:00'),
(100, 29, 26, 26, 33, 55, 44, 'b', 2, '2010-12-20 00:00:00');

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
-- Table structure for table `tbl_subjet_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_subjet_detail` (
  `subjet_id` int(10) NOT NULL,
  `subjet_name` varchar(40) NOT NULL,
  `subjet_totalmark` int(4) NOT NULL,
  PRIMARY KEY (`subjet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `teach_id` int(10) NOT NULL AUTO_INCREMENT,
  `teach_name` varchar(40) NOT NULL,
  `teach_add` varchar(100) NOT NULL,
  `teach_ph` int(15) NOT NULL,
  `scl_id` int(10) NOT NULL,
  `teach_rem` tinyint(1) NOT NULL,
  PRIMARY KEY (`teach_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_report_1`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_report_1` (
  `teach_id` int(10) NOT NULL,
  `new_stu_name` varchar(40) NOT NULL,
  `new_stu_grade` varchar(5) NOT NULL,
  `rsn_fr_referrig` text NOT NULL,
  `who_refered_it` varchar(40) NOT NULL,
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
  `ny_o_cmts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_student`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher_student` (
  `teach_id` int(10) NOT NULL,
  `stu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teaching_class`
--

CREATE TABLE IF NOT EXISTS `tbl_teaching_class` (
  `teach_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
