-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 06:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttms`
--

-- --------------------------------------------------------

--
-- Table structure for table `a203`
--

CREATE TABLE `a203` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a203`
--

INSERT INTO `a203` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `b376`
--

CREATE TABLE `b376` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `croom_no` varchar(30) NOT NULL,
  `c_strength` int(50) NOT NULL,
  `pp_no` int(50) NOT NULL,
  `projector` varchar(20) NOT NULL,
  `smart_class` varchar(20) NOT NULL,
  `speaker` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`croom_no`, `c_strength`, `pp_no`, `projector`, `smart_class`, `speaker`) VALUES
('F375', 50, 2, 'Yes', 'Yes', 'Yes'),
('LB', 64, 2, 'Yes', 'Yes', 'Yes'),
('A203', 60, 5, 'Yes', 'No', 'Yes'),
('B376', 50, 2, 'No', 'Yes', 'Yes'),
('F862', 53, 5, 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `csea`
--

CREATE TABLE `csea` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csea`
--

INSERT INTO `csea` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `f375`
--

CREATE TABLE `f375` (
  `dayid` varchar(10) NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `f862`
--

CREATE TABLE `f862` (
  `dayid` varchar(10) NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f862`
--

INSERT INTO `f862` (`dayid`, `day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('0', 'monday', '', '', '', '', '', ''),
('1', 'tuesday', '', '', '', '', '', ''),
('2', 'wednesday', '', '', '', '', '', ''),
('3', 'thursday', '', '', '', '', '', ''),
('4', 'friday', '', '', '', '', '', ''),
('5', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lb`
--

CREATE TABLE `lb` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `sec_name` varchar(50) NOT NULL,
  `sec_strength` int(50) NOT NULL,
  `alot_classroom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`sec_name`, `sec_strength`, `alot_classroom`) VALUES
('CSEA', 69, '');

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', 'AM261<br>', 'CO206<br>NA', '-<br>-', 'EL211<br>MS', '-<br>-', '-<br>-, -, -'),
('tuesday', 'CO203<br>SI', 'CO207<br>AMA', 'EL211<br>MS', 'AM261<br>', '-<br>-', 'CO292<br>AMA, MHK, FA'),
('wednesday', 'CO206<br>NA', 'CO207<br>AMA', 'AM261<br>', '-<br>-', '-<br>-', '-<br>-, -, -'),
('thursday', 'CO203<br>SI', 'EL211<br>MS', 'CO207<br>AMA', '-<br>-', '-<br>-', 'CO293<br>SI, , '),
('friday', 'CO206<br>NA', 'AM261<br>', 'CO203<br>SI', '-<br>-', '-<br>-', 'CO292<br>AMA, MHK, FA'),
('saturday', 'EL211<br>MS', 'CO207<br>AMA', 'CO203<br>SI', 'CO206<br>NA', '-<br>-', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester5`
--

INSERT INTO `semester5` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', 'ME340<br>FT', 'CO309<br>', 'CO308<br>', 'CO310<br>FA', '-<br>-', 'CO393<br>AMA, FA, RA'),
('tuesday', 'EL340<br>MS', 'CO310<br>FA', 'ME340<br>FT', '-<br>-', '-<br>-', '-<br>-, -, -'),
('wednesday', 'CO309<br>', 'CO308<br>', 'ME340<br>FT', '-<br>-', '-<br>-', 'CO394<br>RA, , AMA'),
('thursday', 'EL340<br>MS', 'CO310<br>FA', '-<br>-', 'CO309<br>', '-<br>-', 'CO393<br>AMA, FA, RA'),
('friday', 'CO308<br>', 'ME340<br>FT', 'CO309<br>', 'EL340<br>MS', '-<br>-', '-<br>-, -, -'),
('saturday', 'CO310<br>FA', 'EL340<br>MS', 'CO308<br>', '-<br>-', '-<br>-', '-<br>-, -, -');

-- --------------------------------------------------------

--
-- Table structure for table `semester7`
--

CREATE TABLE `semester7` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL,
  `period5` varchar(30) NOT NULL,
  `period6` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester7`
--

INSERT INTO `semester7` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', 'CO445<br>MHK', 'CO431<br>RA', 'CO460<br>', '-<br>-', '-<br>-', 'CO494<br>, MSU, SB'),
('tuesday', 'CO451<br>AMA', 'CO448<br>', 'CO406<br>AMA', 'CO445<br>MHK', '-<br>-', 'CO493<br>NA, , '),
('wednesday', 'CO431<br>RA', 'CO460<br>', 'CO445<br>MHK', 'CO451<br>AMA', 'CO448<br>', '-<br>-, -, -'),
('thursday', 'CO406<br>AMA', 'CO451<br>AMA', 'CO448<br>', 'CO431<br>RA', 'CO460<br>', '-<br>-, -, -'),
('friday', 'CO445<br>MHK', 'CO431<br>RA', 'CO460<br>', 'CO406<br>AMA', '-<br>-', 'CO494<br>, MSU, SB'),
('saturday', 'CO451<br>AMA', 'CO448<br>', 'CO406<br>AMA', '-<br>-', '-<br>-', 'CO493<br>NA, , ');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `sid` int(10) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `snumber` int(50) NOT NULL,
  `sroll` varchar(50) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `spassword` varchar(50) NOT NULL,
  `saddr` varchar(200) NOT NULL,
  `sdob` varchar(50) NOT NULL,
  `sbranch` varchar(50) NOT NULL,
  `ssem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`sid`, `sname`, `snumber`, `sroll`, `semail`, `spassword`, `saddr`, `sdob`, `sbranch`, `ssem`) VALUES
(2, 'vijay jonathan', 2147483647, 'cb.en.u4cse17031', 'vijayjonathan143@gmail.com', 'vijayjonathan', 'H.NO 43/253J-10A ', '1999-04-12', 'CSE', 'SEM4');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_code` varchar(10) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `course_type` varchar(15) NOT NULL,
  `semester` int(1) NOT NULL,
  `department` varchar(50) NOT NULL,
  `isAlloted` int(1) NOT NULL,
  `allotedto` text NOT NULL,
  `allotedto2` text NOT NULL,
  `allotedto3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `subject_name`, `course_type`, `semester`, `department`, `isAlloted`, `allotedto`, `allotedto2`, `allotedto3`) VALUES
('CO445', 'Network Security', 'THEORY', 7, 'Computer Engg. Dept.', 1, 'T012', '', ''),
('CO451', 'Computer Network Design', 'THEORY', 7, 'Computer Engg. Dept.', 1, 'T003', '', ''),
('CO494', 'Embedded  Systems Lab', 'LAB', 7, 'Computer Engg. Dept.', 1, 'T008', 'T001', 'T004'),
('CO493', 'Networking Lab', 'LAB', 7, 'Computer Engg. Dept.', 1, 'T002', 'T007', 'T011'),
('CO394', 'Minor Project', 'LAB', 5, 'Computer Engg. Dept.', 1, 'T005', 'T007', 'T003'),
('CO393', 'Software Lab I', 'LAB', 5, 'Computer Engg. Dept.', 1, 'T003', 'T013', 'T005'),
('CO292', ' Data Structures Lab', 'LAB', 3, 'Computer Engg. Dept.', 1, 'T003', 'T012', 'T013'),
('CO293', 'Programming Lab', 'LAB', 3, 'Computer Engg. Dept.', 1, 'T006', 'T009', 'T008'),
('CO431', 'Internet Tools', 'THEORY', 7, 'Computer Engg. Dept.', 1, 'T005', '', ''),
('CO406', 'Compiler Design', 'THEORY', 7, 'Computer Engg. Dept.', 1, 'T003', '', ''),
('CO206', 'Logic Theory & Computer Organisation', 'THEORY', 3, 'Computer Engg. Dept.', 1, 'T002', '', ''),
('EL211', 'Electronic Devices & Circuits', 'THEORY', 3, 'Electronics Engg. Dept.', 1, 'T014', '', ''),
('AM261', 'Higher Mathematics', 'THEORY', 3, 'Applied Mathematics Dept.', 1, 'T016', '', ''),
('CO207', 'Data Structures & Algorithm', 'THEORY', 3, 'Computer Engg. Dept.', 1, 'T003', '', ''),
('CO309', 'Microprocessor Theory & Applications', 'THEORY', 5, 'Computer Engg. Dept.', 1, 'T011', '', ''),
('EL340', 'Communication Engineering', 'THEORY', 5, 'Electronics Engg. Dept.', 1, 'T014', '', ''),
('CO308', 'Digital Electronics', 'THEORY', 5, 'Computer Engg. Dept.', 1, 'T008', '', ''),
('CO310', 'Operating Systems', 'THEORY', 5, 'Mechanical Engg. Dept.', 1, 'T013', '', ''),
('ME340', 'Economics & Management', 'THEORY', 5, 'Computer Engg. Dept.', 1, 'T015', '', ''),
('CO448', 'Embedded Systems', 'THEORY', 7, 'Computer Engg. Dept.', 1, 'T010', '', ''),
('CO460', 'Computer Architecture', 'THEORY', 7, 'Computer Engg. Dept.', 1, 'T009', '', ''),
('CO203', 'Object Oriented Programming', 'THEORY', 3, 'Computer Engg. Dept.', 1, 'T006', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t006`
--

CREATE TABLE `t006` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t006`
--

INSERT INTO `t006` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', 'CO203<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', 'CO203<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO293'),
('friday', '-<br>-', '-<br>-', 'CO203<br>', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', 'CO203<br>', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t012`
--

CREATE TABLE `t012` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t012`
--

INSERT INTO `t012` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', 'CO445<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', 'CO445<br>', '-<br>-', 'CO292'),
('wednesday', '-<br>-', '-<br>-', 'CO445<br>', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('friday', 'CO445<br>', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO292'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t013`
--

CREATE TABLE `t013` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t013`
--

INSERT INTO `t013` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', '-<br>-', '-<br>-', '-<br>-', 'CO310<br>ML11', '-<br>-', 'CO393'),
('tuesday', '-<br>-', 'CO310<br>ML11', '-<br>-', '-<br>-', '-<br>-', 'CO292'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', 'CO310<br>ML11', '-<br>-', '-<br>-', '-<br>-', 'CO393'),
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', 'CO292'),
('saturday', 'CO310<br>ML11', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t014`
--

CREATE TABLE `t014` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t014`
--

INSERT INTO `t014` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', 'AM261<br>', '-<br>-', 'CO308<br>ML11', 'EL211<br>', '-<br>-', '-'),
('tuesday', 'EL340<br>ML11', '-<br>-', 'EL211<br>', 'AM261<br>', '-<br>-', '-'),
('wednesday', '-<br>-', 'CO308<br>ML11', 'AM261<br>', '-<br>-', '-<br>-', '-'),
('thursday', 'EL340<br>ML11', 'EL211<br>', '-<br>-', '-<br>-', '-<br>-', '-'),
('friday', 'CO308<br>ML11', 'AM261<br>', '-<br>-', 'EL340<br>ML11', '-<br>-', '-'),
('saturday', 'EL211<br>', 'EL340<br>ML11', 'CO308<br>ML11', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `t015`
--

CREATE TABLE `t015` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t015`
--

INSERT INTO `t015` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('monday', 'ME340<br>ML11', '-<br>-', 'CO460<br>', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', 'CO448<br>', 'ME340<br>ML11', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', 'CO460<br>', 'ME340<br>ML11', '-<br>-', 'CO448<br>', '-'),
('thursday', '-<br>-', '-<br>-', 'CO448<br>', '-<br>-', 'CO460<br>', '-'),
('friday', '-<br>-', 'ME340<br>ML11', 'CO460<br>', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', 'CO448<br>', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `faculty_number` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `alias` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`faculty_number`, `name`, `alias`, `designation`, `contact_number`, `emailid`, `password`, `address`) VALUES
('T015', 'Dr. Faisal Talib', 'FT', 'Associate Professor', '12345678', 'faisaltalib@gmail.com', '123456', ''),
('T014', 'Dr. Mohd. Sharique', 'MS', 'Assistant Professor', '12345678', 'mohdsharique@gmail.com', '123456', ''),
('T013', 'Mr. Faisal Alam', 'FA', 'Assistant Professor', '12345678', 'faisalalam@gmail.com', '123456', ''),
('T012', 'Mr. Muneeb Hasan Khan', 'MHK', 'Assistant Professor', '12345678', 'muneebhasankhan@gmail.com', '123456', ''),
('T006', 'Dr. Saiful Islam', 'SI', 'Associate Professor', '12345678', 'saifulislam@gmail.com', '123456', ''),
('TTT2', 'flrfhvoblfdhbvo', 'kL', 'Professor', 'nvjdovub', 'hdub@gmail.com', '64856484685', 'bvdovbodj'),
('T07654', 'tetgdka', 'JNT', 'Professor', '123456789', 'xyz@gmail.com', '978646831143', 'hno43/253j-10q,amrita university kurnool');

-- --------------------------------------------------------

--
-- Table structure for table `ttt2`
--

CREATE TABLE `ttt2` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ttt2`
--

INSERT INTO `ttt2` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '', '', '', '', '', ''),
('monday', '', '', '', '', '', ''),
('saturday', '', '', '', '', '', ''),
('thursday', '', '', '', '', '', ''),
('tuesday', '', '', '', '', '', ''),
('wednesday', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a203`
--
ALTER TABLE `a203`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `b376`
--
ALTER TABLE `b376`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD UNIQUE KEY `croom_no` (`croom_no`) USING BTREE;

--
-- Indexes for table `csea`
--
ALTER TABLE `csea`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `f375`
--
ALTER TABLE `f375`
  ADD PRIMARY KEY (`dayid`);

--
-- Indexes for table `f862`
--
ALTER TABLE `f862`
  ADD PRIMARY KEY (`dayid`);

--
-- Indexes for table `lb`
--
ALTER TABLE `lb`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester5`
--
ALTER TABLE `semester5`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester7`
--
ALTER TABLE `semester7`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `t006`
--
ALTER TABLE `t006`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t012`
--
ALTER TABLE `t012`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t013`
--
ALTER TABLE `t013`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t014`
--
ALTER TABLE `t014`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `t015`
--
ALTER TABLE `t015`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`faculty_number`);

--
-- Indexes for table `ttt2`
--
ALTER TABLE `ttt2`
  ADD PRIMARY KEY (`day`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
