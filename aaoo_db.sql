-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2021 at 03:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaoo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `admin_email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `admin_pass` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'admin', 'admin123@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` text COLLATE utf8_bin,
  `course_desc` text COLLATE utf8_bin,
  `course_author` text COLLATE utf8_bin,
  `course_img` text COLLATE utf8_bin,
  `course_duration` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `course_price` int(11) DEFAULT NULL,
  `course_original_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(24, 'PHP', 'PHP is a popular general-purpose scripting language that is especially suited to web development.', 'karan', '../image/courseimg/1340336.jpg', '90 days', 3000, 5000),
(23, 'CSS', ' CSS is the language we use to style an HTML document. CSS describes how HTML elements should be displayed.', 'karan', '../image/courseimg/2987485.png', '30 days', 1000, 2000),
(22, 'HTML', 'The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser.', 'karan', '../image/courseimg/4868351.jpg', '30 days', 1500, 3000),
(25, 'JAVA', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', 'karan', '../image/courseimg/4711352.jpg', '90 days', 4000, 5000),
(26, 'Java Script', 'JavaScript (js) is a light-weight object-oriented programming language which is used by several websites for scripting the webpages. ', 'Karan', '../image/courseimg/1555163.jpg', '50 days', 2500, 4000),
(27, 'Angular', 'AngularJS is a toolset for building the framework most suited to your application development.', 'karan', '../image/courseimg/3910937.png', '60 days', 4000, 5000),
(28, 'Laravel', 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications.', 'karan', '../image/courseimg/1567483.jpg', '60 days', 5000, 6000),
(29, 'Mysql', 'MySQL Database Service is a fully managed database service to deploy cloud-â€‹native applications.', 'karan', '../image/courseimg/2134493.jpg', '30 days', 1000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

DROP TABLE IF EXISTS `courseorder`;
CREATE TABLE IF NOT EXISTS `courseorder` (
  `cs_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stu_email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` text COLLATE utf8_bin,
  `order_date` text COLLATE utf8_bin,
  `order_time` text COLLATE utf8_bin,
  PRIMARY KEY (`cs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `courseorder`
--

INSERT INTO `courseorder` (`cs_id`, `order_id`, `stu_email`, `course_id`, `amount`, `status`, `order_date`, `order_time`) VALUES
(1, 'ORDS92811350', 'suraj@gmail.com', 23, 1000, 'SUCCESS', '2021-06-20', '11:06:03am'),
(2, 'ORDS3545553', 'bontydas@gmail.com', 24, 3000, 'SUCCESS', '2021-06-20', '11:22:39am'),
(3, 'ORDS73884563', 'bontydas@gmail.com', 23, 1000, 'SUCCESS', '2021-06-20', '11:30:14am'),
(4, 'ORDS30976393', 'bontydas@gmail.com', 23, 1000, 'SUCCESS', '2021-06-20', '11:30:16am'),
(5, 'ORDS19214481', 'bontydas@gmail.com', 23, 1000, 'SUCCESS', '2021-06-20', '11:30:18am'),
(6, 'ORDS18099388', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '11:33:13am'),
(7, 'ORDS17704337', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '11:34:18am'),
(8, 'ORDS49743341', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '11:37:32am'),
(9, 'ORDS98892955', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '11:38:44am'),
(10, 'ORDS74832510', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '11:39:22am'),
(11, 'ORDS97159345', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '11:40:42am'),
(12, 'ORDS24352471', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '12:01:33pm'),
(13, 'ORDS24352471', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '12:01:33pm'),
(14, 'ORDS23040536', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '12:02:07pm'),
(15, 'ORDS49390570', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '12:02:09pm'),
(16, 'ORDS54245248', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '12:02:10pm'),
(17, 'ORDS36230226', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '12:02:42pm'),
(18, 'ORDS36230226', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '12:02:42pm'),
(19, 'ORDS10873192', 'bontydas@gmail.com', 23, 1000, 'SUCCESS', '2021-06-20', '12:15:39pm'),
(20, 'ORDS43134480', 'bontydas@gmail.com', 24, 3000, 'SUCCESS', '2021-06-20', '12:28:41pm'),
(21, 'ORDS69016522', 'suraj@gmail.com', 24, 3000, 'SUCCESS', '2021-06-20', '12:58:36pm'),
(22, 'ORDS92415051', 'suraj@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '01:01:32pm'),
(23, 'ORDS96933247', 'suraj@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '01:02:45pm'),
(24, 'ORDS84898377', 'bontydas@gmail.com', 22, 1500, 'SUCCESS', '2021-06-20', '12:53:37pm');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` text COLLATE utf8_bin,
  `stu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fed_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fed_id`, `feedback`, `stu_id`) VALUES
(5, 'thanks', 15),
(2, 'thank you', 1),
(6, 'bonty\r\n', 15),
(7, 'harapriya', 15);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `lesson_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lesson_name` text COLLATE utf8_bin,
  `lesson_desc` text COLLATE utf8_bin,
  `lesson_link` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `course_name` text COLLATE utf8_bin,
  PRIMARY KEY (`lesson_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(18, 'how to define variable', 'how to define variable', '../lesson_vid/2.OOP PHP _ Why we create Class _ _2(720P_HD).mp4', 24, 'PHP'),
(17, 'introduction of php', 'introduction of php', '../lesson_vid/1.OOP PHP _ What is OOP _ Why we need OOP _ _1(720P_HD).mp4', 24, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stu_email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stu_pass` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stu_occ` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `stu_img` text COLLATE utf8_bin,
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'Karan Kumar Gorai', 'karangorai@gmail.com', '22222', 'Web Developer', '../image/student/DSC_3098.JPG (2).jpg'),
(14, 'Debasmita', 'debasmita@gmail.com', 'debasmita', 'bca', NULL),
(13, 'Rajesh Barik', 'rajesh@gmail.com', 'rajesh', 'Babar', NULL),
(18, 'Suraj', 'suraj@gmail.com', 'suraj', NULL, NULL),
(17, 'Reshma', 'reshma@gmail.com', 'reshma', NULL, NULL),
(16, 'Somya Ranjan Mohanta', 'somyaranjan@gmail.com', 'somya', 'BCA', '../image/student/soumya.jpg'),
(15, 'Bunty Das', 'bontydas@gmail.com', 'bonty', 'Web Developer', '../image/student/bonty.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
