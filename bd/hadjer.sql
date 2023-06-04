-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 07:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hadjer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` text NOT NULL,
  `name_admin` tinytext NOT NULL,
  `password_admin` tinytext NOT NULL,
  `profile_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `name_admin`, `password_admin`, `profile_admin`) VALUES
(1, 'hadjerbgt@gmail.com', 'admin hanine', 'admin123', 'admin.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `att`
--

CREATE TABLE `att` (
  `id_att` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `date` date NOT NULL,
  `state` tinytext NOT NULL,
  `intern_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `att`
--

INSERT INTO `att` (`id_att`, `id_student`, `date`, `state`, `intern_name`) VALUES
(80, 34, '2023-05-11', 'present', 'backend'),
(81, 36, '2023-05-11', 'present', 'backend'),
(82, 36, '2023-05-11', 'present', 'backend');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `image_company` varchar(200) NOT NULL,
  `name_company` tinytext NOT NULL,
  `location` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `image_company`, `name_company`, `location`, `email`, `phone`, `info`) VALUES
(1, 'mobilis.jpg', 'Mobilis', 'Algiers, Algeria', 'mobilis@gmail.com', '031761497', 'mch wa9tha'),
(2, 'djezzy.png', 'Djezzy', 'Algiers, Algeria', 'djezzy@gmail.com', '031761497', 'Mobile Telecommunications'),
(3, 'ooredoo.jpg', 'Ooredoo', 'Algiers, Algeria', 'ooredoo@gmail.com', '031761497', 'nothing'),
(4, 'aec.jpg', 'Algerian Energy\r\n', 'Oran,Algeria', 'aec@gmail.com', '031761497', ':3'),
(5, 'cnx.jpg', 'algerie telecom', 'mzalt ml7gtch hh', 'cnx@gmail.com', '031761497', ':3'),
(6, 'ustc.png', 'USTC', 'Middelfart,Denmark', 'ustc@gmail.com', '031761497', '11'),
(7, 'uber.png', 'UBER', 'idk', 'uber@gmail.com', '031761497', ':3');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id_grade` int(11) NOT NULL,
  `id_req` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `grade1` double DEFAULT NULL,
  `grade2` double DEFAULT NULL,
  `grade3` double DEFAULT NULL,
  `grade4` double DEFAULT NULL,
  `grade5` double DEFAULT NULL,
  `grade_finale` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id_grade`, `id_req`, `id_student`, `grade1`, `grade2`, `grade3`, `grade4`, `grade5`, `grade_finale`) VALUES
(6, 36, 34, 15, 20, 15, 20, 18, 17.6),
(8, 31, 36, 20, 20, 20, 20, 20, 20),
(9, 44, 34, 15, 15, 15, 20, 15, 16),
(12, 2, 36, 20, 0, 22, 15, 13, 14),
(13, 3, 34, 15, 16, 19, 18, 14, 16.4),
(14, 4, 34, 20, 20, 20, 20, 20, 20),
(15, 38, 34, 1.5, 2.5, 4, 3.5, 4, 14),
(16, 43, 34, 0, 0, 0, 0, 0, 0),
(17, 52, 36, 2.5, 3.75, 3.5, 3.5, 3.75, 17),
(18, 5, 36, 2, 2.95, 2.16, 3.56, 4, 13),
(19, 32, 34, 15, 16, 14, 5.5, 3.5, 19.5),
(20, 33, 34, 3, 3.5, 3.5, 2.75, 3, 15.75),
(21, 54, 36, 0, 0, 0, 0, 0, 0),
(22, 42, 36, 2.5, 1.2, 4, 4, 2.6, 14.3);

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `id_hod` int(11) NOT NULL,
  `firstname_hod` tinytext NOT NULL,
  `lastname_hod` tinytext NOT NULL,
  `email_hod` tinytext NOT NULL,
  `password_hod` tinytext NOT NULL,
  `profile_hod` tinytext NOT NULL DEFAULT 'head.png',
  `dep_hod` tinytext NOT NULL,
  `bd_hod` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`id_hod`, `firstname_hod`, `lastname_hod`, `email_hod`, `password_hod`, `profile_hod`, `dep_hod`, `bd_hod`) VALUES
(3, 'nouara', 'radouan', 'hadjerbgt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'nouara64693c23dbe497.55571005.png', 'IFA', '2023-05-26'),
(4, 'Bilale', 'Benlala', 'ilhemedjouablia57@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '6467b6e9b6aae2.64948927.jpg', 'TLSI', '2023-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `head_notif`
--

CREATE TABLE `head_notif` (
  `id_notif` int(11) NOT NULL,
  `id_head` int(11) NOT NULL,
  `id_req` int(11) NOT NULL,
  `link` tinytext NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `seen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head_notif`
--

INSERT INTO `head_notif` (`id_notif`, `id_head`, `id_req`, `link`, `message`, `time`, `seen`) VALUES
(1, 3, 3, 'request.php', 'i don\'t know', '2023-05-19 10:51:09', 1),
(2, 3, 32, 'request.php', 'A new request has been added.', '2023-05-19 11:06:01', 1),
(3, 3, 33, 'request.php', 'A new request has been added.', '2023-05-19 11:08:21', 1),
(4, 3, 34, 'request.php', 'A new request has been added.', '2023-05-19 17:24:39', 1),
(5, 3, 35, 'request.php', 'A new request has been added.', '2023-05-19 17:32:51', 1),
(6, 0, 36, 'request.php', 'A new request has been added.', '2023-05-19 17:48:35', 0),
(7, 4, 37, 'request.php', 'A new request has been added.', '2023-05-19 17:52:03', 1),
(8, 4, 38, 'request.php', 'A new request has been added.', '2023-05-19 17:53:15', 1),
(9, 3, 39, 'request.php', 'A new request has been added.', '2023-05-19 17:54:34', 1),
(10, 4, 43, 'request.php', 'A new request has been added.', '2023-05-20 02:09:45', 1),
(11, 4, 44, 'request.php', 'A new request has been added.', '2023-05-20 02:19:29', 1),
(12, 4, 45, 'request.php', 'A new request has been added.', '2023-05-20 02:20:17', 1),
(13, 3, 46, 'request.php', 'A new request has been added.', '2023-05-20 18:16:51', 1),
(14, 3, 48, 'request.php', 'A new request has been added.', '2023-05-23 17:48:50', 1),
(15, 3, 49, 'request.php', 'A new request has been added.', '2023-05-23 17:57:23', 1),
(16, 3, 50, 'request.php', 'A new request has been added.', '2023-05-23 18:26:42', 1),
(17, 3, 51, 'request.php', 'A new request has been added.', '2023-05-23 22:13:05', 1),
(18, 3, 53, 'request.php', 'A new request has been added.', '2023-05-24 02:06:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(11) NOT NULL,
  `name_manager` tinytext NOT NULL,
  `email_manager` tinytext NOT NULL,
  `password_manager` tinytext NOT NULL,
  `profile_manager` tinytext NOT NULL DEFAULT 'manager.jpg',
  `company_manager` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id_manager`, `name_manager`, `email_manager`, `password_manager`, `profile_manager`, `company_manager`) VALUES
(3, 'seghiri Akram', 'hadjerbgt@gmail.com', '7f82da4bfbf85b1aa591a19e5e9e9741', 'seghiri Akram646d3d89320c06.31172376.png', 'Mobilis'),
(4, 'wissam bouarouje', 'hanine.bouguettoucha@icloud.com', 'e10adc3949ba59abbe56e057f20f883e', 'wissam bouarouje6469f62645e1c7.35874526.png', 'ooredo'),
(6, 'ILHAME', 'ilyyilhem@gmail.com', '943b11cc94686b977ff96cd8821c4273', '6463e63522e9f2.65389682.jpg', 'USTC'),
(8, 'John Doe', ' hadjerbgt@gmail.com', 'c9f9e08aefdc11c71cf4faac02fa742b', 'manager.jpg', 'mobilis'),
(9, 'hadjer', 'ilhame.djouablia@univ-constantine2.dz', '124ecccd08484f197d6dbbe49b0512f2', 'manager.jpg', 'Mobilis'),
(10, 'hadjer', 'ilham@gmail.com', '9715215f10e1a3d4b11a20a78b1920f5', 'manager.jpg', 'Mobilis'),
(11, 'Daniel Thompson', ' danielthompson@pqr.com', '4cacb473aed9f2c6510b7c542e28cef5', 'manager.jpg', 'UBER');

-- --------------------------------------------------------

--
-- Table structure for table `manager_notif`
--

CREATE TABLE `manager_notif` (
  `id_notif` int(11) NOT NULL,
  `id_manager` int(11) NOT NULL,
  `id_req` int(11) NOT NULL,
  `link` tinytext NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `seen` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager_notif`
--

INSERT INTO `manager_notif` (`id_notif`, `id_manager`, `id_req`, `link`, `message`, `time`, `seen`) VALUES
(1, 3, 9, 'request.php', 'test test ', '2023-05-19 12:48:56', 1),
(2, 3, 41, 'request.php', 'test test ', '2023-05-19 12:48:56', 1),
(3, 3, 38, 'request.php', 'You have a new request accepted by the head of department.', '2023-05-19 20:55:58', 1),
(4, 4, 46, 'request.php', 'You have a new request accepted by the head of department.', '2023-05-20 11:18:31', 1),
(5, 4, 50, 'request.php', 'You have a new request accepted by the head of department.', '2023-05-23 11:27:01', 1),
(6, 4, 52, 'request.php', 'You have a new request accepted by the head of department.', '2023-05-23 15:14:49', 1),
(7, 3, 54, 'request.php', 'You have a new request accepted by the head of department.', '2023-05-23 21:05:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id_offer` int(11) NOT NULL,
  `p_comp` tinytext NOT NULL DEFAULT 'offer.jpg',
  `name_comp` tinytext NOT NULL,
  `add_comp` text NOT NULL,
  `phone_comp` int(11) NOT NULL,
  `email_comp` text NOT NULL,
  `manager` tinytext NOT NULL,
  `email_manager` text NOT NULL,
  `intern_name` text NOT NULL,
  `duration` int(11) NOT NULL,
  `str_date` date NOT NULL,
  `end_date` date NOT NULL,
  `work_plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id_offer`, `p_comp`, `name_comp`, `add_comp`, `phone_comp`, `email_comp`, `manager`, `email_manager`, `intern_name`, `duration`, `str_date`, `end_date`, `work_plan`) VALUES
(1, 'mobilis.jpg', 'mobilis', '123 Main Street, City', 555, 'info@acme.com', 'John Doe', 'hadjerbgt@gmail.com', 'Jane Smith', 3, '2023-06-01', '2023-08-31', 'Assigned to project X'),
(2, 'djezzy.png', 'djezzy', '456 Elm Street, City', 555, 'info@xyz.com', 'Jane Smith', 'hadjerbgt@gmail.com', 'John Doe', 6, '2023-07-15', '2024-01-15', 'Training and development program'),
(3, 'ooredoo.jpg', 'ooredoo', '789 Oak Street, City', 555, 'info@abc.com', 'Michael Johnson', 'hadjerbgt@gmail.com', 'Sarah Davis', 4, '2023-08-01', '2023-11-30', 'Assisting with data analysis'),
(4, 'aec.jpg', 'AEC', '321 Pine Street, City', 555, 'info@def.com', 'Jennifer Brown', 'hadjerbgt@gmail.com', 'Robert Johnson', 2, '2023-09-10', '2023-11-10', 'Designing user interfaces'),
(5, 'cnx.jpg', 'algerie telecom', '987 Maple Street, City', 555, 'info@ghi.com', 'Emily Wilson', 'hadjerbgt@gmail.com', 'David Smith', 3, '2023-10-01', '2023-12-31', 'Testing software applications'),
(7, 'ustc.png', 'USTC', '876 Walnut Street, City', 555, 'info@mno.com', 'Sophia Davis', 'hadjerbgt@gmail.com', 'Ethan Wilson', 4, '2023-12-01', '2024-03-31', 'Database management and optimization'),
(8, 'uber.png', 'UBER', '234 Oak Street, City', 555, 'info@pqr.com', 'Daniel Thompson', 'danielthompson@pqr.com', 'Sophia Davis', 3, '2024-01-10', '2024-04-10', 'Creating marketing campaigns'),
(9, 'mobilis.jpg', 'mobilis', '765 Pine Street, City', 555, 'info@stu.com', 'William Anderson', 'williamanderson@stu.com', 'Emily Wilson', 6, '2024-02-15', '2024-08-15', 'Assisting with data entry and analysis'),
(10, 'ustc.png', 'USTC', '876 Walnut Street, City', 555, 'info@mno.com', 'Sophia Davis', 'hadjerbgt@gmail.com', 'Ethan Wilson', 4, '2023-12-01', '2024-03-31', 'Database management and optimization');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_req` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `p_comp` tinytext NOT NULL DEFAULT 'company.jpg',
  `name_comp` tinytext NOT NULL,
  `add_comp` text NOT NULL,
  `phone_comp` int(11) NOT NULL,
  `email_comp` text NOT NULL,
  `manager` tinytext NOT NULL,
  `email_manager` text NOT NULL,
  `intern_name` text NOT NULL,
  `duration` int(11) NOT NULL,
  `str_date` date NOT NULL,
  `end_date` date NOT NULL,
  `work_plan` text NOT NULL,
  `state` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_req`, `id_student`, `p_comp`, `name_comp`, `add_comp`, `phone_comp`, `email_comp`, `manager`, `email_manager`, `intern_name`, `duration`, `str_date`, `end_date`, `work_plan`, `state`) VALUES
(1, 36, 'mobilis.jpg', 'Mobilis', 'Algiers, Algeria', 14072001, 'hadjerbgt@gmail.com', 'seghiri', 'hanine.bouguettoucha@icloud.com', 'flutter', 7, '2023-05-01', '2023-05-08', 'start', 100),
(2, 36, 'company.jpg', 'Djezzy', 'Algiers, Algeria', 123456, 'hadjerbgt@gmail.com', 'seghiri', 'hadjerbgt@gmail.com', 'mobile', 7, '2023-05-01', '2023-05-08', 'hi', 100),
(3, 34, 'company.jpg', 'mobilis', 'Algeria,Algeria', 31761497, 'mobilis@gmail.com', 'seghiri', 'hanine.bouguettoucha@icloud.com', 'mobile Developpement', 7, '2023-05-01', '2023-05-08', 'start mobile Developpement with flutter cross platform framework', 100),
(4, 34, 'company.jpg', 'mobilis', 'Algeria,Algeria', 31761497, 'mobilis@gmail.com', 'wissam bouarouj', 'hanine.bouguettoucha@icloud.com', 'mobile Developpement', 7, '2023-05-01', '2023-05-08', 'start mobile Developpement with flutter cross platform framework', 100),
(5, 36, 'company.jpg', 'mobilis', 'Algeria,Algeria', 31761497, 'mobilis@gmail.com', 'wissam bouarouj', 'hanine.bouguettoucha@icloud.com', 'mobile Developpement', 7, '2023-05-01', '2023-05-08', 'start mobile Developpement with flutter cross platform framework', 100),
(6, 36, 'djezzy.png', 'Mobilis', 'Algiers, Algeria', 0, 'ilham@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'flutter', 2, '2023-05-24', '2023-05-19', 'good work plan', 100),
(31, 36, 'ooredoo.jpg', 'Ooredoo', 'Algiers, Algeria', 31761497, 'ooredoo@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'backend', 5, '2023-05-16', '2023-05-12', 'i dont know', 100),
(32, 34, 'uber.png', 'UBER', 'idk', 31761497, 'uber@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'flutter', 1, '2023-05-16', '2023-05-27', 'ya rabii tslah', 100),
(33, 34, 'djezzy.png', 'Djezzy', 'Algiers, Algeria', 31761497, 'djezzy@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'flutter', 1, '2023-05-25', '2023-05-31', 'ya rabii tslah', 100),
(36, 34, 'djezzy.png', 'Djezzy', 'Algiers, Algeria', 31761497, 'djezzy@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'backend', 1, '2023-05-29', '2023-05-12', 'ya rabii tslah', 100),
(37, 34, 'cnx.jpg', 'algerie telecom', 'mzalt ml7gtch hh', 31761497, 'cnx@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'flutter', 1, '2023-05-17', '2023-05-25', 'ya rabii tslah', 100),
(38, 34, 'company.jpg', 'after state', '1', 2147483647, 'hadjerbgt@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'mobile Developpement', 5, '2023-05-12', '2023-05-20', 'i dont know', 100),
(41, 36, 'company.jpg', 'Mobilis', 'Algiers,', 31761497, 'mobilis@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'flutter', 8, '2023-05-18', '2023-05-27', 'hello', 100),
(42, 36, 'aec.jpg', 'AEC', '321 Pine Street, City', 555, 'info@def.com', 'Jennifer Brown', 'hanine.bouguettoucha@icloud.com', 'backend', 2, '2023-09-10', '2023-11-10', 'Designing user interfaces', 100),
(43, 34, 'ooredoo.jpg', 'Ooredoo', 'Algiers, Algeria', 31761497, 'ooredoo@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'ilhame djoualia', 5, '2023-11-07', '2023-12-28', 'i dont know', 0),
(44, 34, 'uber.png', 'UBER', 'idk', 31761497, 'uber@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'mode js', 5, '2023-05-15', '2023-05-31', 'idk', 100),
(45, 34, 'cnx.jpg', 'algerie telecom', 'mzalt ml7gtch hh', 31761497, 'cnx@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'three js', 7, '2023-05-16', '2023-06-01', 'i dont know', 0),
(47, 36, 'mobilis.jpg', 'mobilis', '123 Main Street, City', 555, 'info@acme.com', 'John Doe', ' hadjerbgt@gmail.com', 'Jane Smith', 3, '2023-06-01', '2023-08-31', 'Assigned to project X', 0),
(48, 36, 'djezzy.png', 'Djezzy', 'Algiers, Algeria', 31761497, 'djezzy@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'bgtbgt Hadjer', 5, '2023-05-03', '2023-05-25', 'i dont know', 0),
(49, 36, 'ustc.png', 'USTC', 'Middelfart,Denmark', 31761497, 'ustc@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'Mobilis', 2, '2023-05-16', '2023-05-26', 'i dont know', 0),
(50, 36, 'djezzy.png', 'Djezzy', 'Algiers, Algeria', 31761497, 'djezzy@gmail.com', 'h', 'hanine.bouguettoucha@icloud.com', 'ilhame djoualia', 5, '2023-05-17', '2023-05-12', 'i dont know', 100),
(52, 36, 'mobilis.jpg', 'Mobilis', 'Algiers, Algeria', 31761497, 'mobilis@gmail.com', 'hadjer', 'hanine.bouguettoucha@icloud.com', 'Djezzy', 5, '2023-05-10', '2023-05-20', 'i dont know', 100),
(54, 36, 'company.jpg', 'Djezzy', 'Algiers,', 31761497, 'djezzy@gmail.com', 'hadjer', 'hadjerbgt@gmail.com', 'bgtbgt', 5, '2023-05-02', '2023-05-20', 'i', 100);

-- --------------------------------------------------------

--
-- Table structure for table `ryc`
--

CREATE TABLE `ryc` (
  `id_ryc` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `p_comp` tinytext NOT NULL DEFAULT '\'company.jpg\'',
  `name_comp` tinytext NOT NULL,
  `add_comp` text NOT NULL,
  `phone_comp` int(11) NOT NULL,
  `email_comp` text NOT NULL,
  `manager` tinytext NOT NULL,
  `email_manager` text NOT NULL,
  `intern_name` text NOT NULL,
  `duration` int(11) NOT NULL,
  `str_date` date NOT NULL,
  `end_date` date NOT NULL,
  `work_plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `firstname_student` tinytext NOT NULL,
  `lastname_student` tinytext NOT NULL,
  `email_student` text NOT NULL,
  `password_student` tinytext NOT NULL,
  `birthday_student` date DEFAULT NULL,
  `dep_student` tinytext NOT NULL DEFAULT 'MI',
  `speciality_student` tinytext NOT NULL DEFAULT 'MI',
  `level_student` tinytext NOT NULL DEFAULT 'L3',
  `semester_student` int(11) NOT NULL DEFAULT 5,
  `acyear_student` int(11) NOT NULL DEFAULT 2019,
  `profile_student` tinytext NOT NULL DEFAULT 'student.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_student`, `firstname_student`, `lastname_student`, `email_student`, `password_student`, `birthday_student`, `dep_student`, `speciality_student`, `level_student`, `semester_student`, `acyear_student`, `profile_student`) VALUES
(12, 'hanine', 'bgt', 'hadjerbgt@gmail.com', '5583413443164b56500def9a533c7c70', '2023-05-03', 'MI', 'MI', 'L3', 5, 2019, 'student.jpg'),
(34, 'ilhame', 'djoualia', 'ilhame.djouablia@univ-constantine2.dz', 'e10adc3949ba59abbe56e057f20f883e', '2002-08-09', 'TLSI', 'GL', 'M2', 6, 2023, '646d3867c7a7b9.99369598.png'),
(36, 'Hadjer ', 'Hanine', 'hadjer.bouguettoucha@univ-constantine2.dz', 'e10adc3949ba59abbe56e057f20f883e', '2001-07-13', 'IFA', 'SCI', 'L3', 6, 2020, '6467bc34910cc5.39603686.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_notif`
--

CREATE TABLE `student_notif` (
  `userid` int(11) NOT NULL,
  `idst` int(11) NOT NULL,
  `idreq` int(11) NOT NULL,
  `link` tinytext NOT NULL DEFAULT 'request.php',
  `message` text NOT NULL DEFAULT 'rana ma9blnakch :3',
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `seen_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_notif`
--

INSERT INTO `student_notif` (`userid`, `idst`, `idreq`, `link`, `message`, `time`, `seen_status`) VALUES
(13, 36, 1, 'request.php', 'rana ma9blnakch :3', '2023-05-19 01:25:43', 1),
(14, 34, 0, 'request.php', 'rana ma9blnakch :3', '2023-05-19 01:25:43', 1),
(15, 36, 2, 'request.php', 'rana ma9blnakch :3', '2023-05-19 01:25:43', 1),
(16, 34, 0, 'request.php', 'rana ma9blnakch :3', '2023-05-19 01:25:43', 1),
(17, 36, 5, 'request.php', 'rana ma9blnakch :3', '2023-05-19 01:25:43', 1),
(27, 36, 31, 'ref.php', '4-Insufficient duration or work plan', '2023-05-19 03:08:43', 1),
(28, 36, 30, 'ref.php', '1-Incomplete or inaccurate personal details', '2023-05-19 03:09:19', 1),
(29, 34, 22, 'ref.php', '7-Additional specific requirements or policies of the department', '2023-05-19 03:11:59', 1),
(30, 36, 19, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 03:19:58', 1),
(31, 36, 17, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 03:21:30', 1),
(32, 36, 16, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 03:26:12', 1),
(33, 36, 13, 'ref.php', '6-Unavailable or inappropriate starting/finishing dates', '2023-05-19 03:30:26', 1),
(34, 36, 13, 'ref.php', 'somthing is wrong', '2023-05-19 03:32:09', 1),
(35, 34, 8, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 03:32:56', 1),
(36, 36, 6, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 10:22:04', 1),
(37, 36, 42, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 12:21:54', 1),
(38, 36, 41, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 12:22:00', 1),
(39, 36, 1, 'ref.php', '1-Incomplete or inaccurate personal details', '2023-05-19 13:27:34', 1),
(40, 36, 15, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 14:29:06', 1),
(41, 36, 2, 'ref.php', 'nafhatli brk', '2023-05-19 14:29:53', 1),
(42, 36, 12, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 14:50:57', 1),
(43, 36, 11, 'ref.php', '1-Incomplete or inaccurate personal details', '2023-05-19 14:51:33', 1),
(44, 36, 5, 'acc.php', 'Your request has been accepted by the internship manager. Please note that the requests for that period have been directly refused.', '2023-05-19 19:07:39', 1),
(45, 34, 43, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 19:11:11', 1),
(46, 34, 43, 'acc.php', 'Your request has been accepted by the internship manager. Please note that the requests for that period have been directly refused.', '2023-05-19 19:12:21', 1),
(47, 34, 45, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 19:20:47', 1),
(48, 34, 44, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 19:20:52', 1),
(49, 34, 44, 'acc.php', 'Your request has been accepted by the internship manager. Please note that the requests for that period have been directly refused.', '2023-05-19 19:21:38', 1),
(50, 34, 38, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-19 20:55:58', 1),
(51, 34, 38, 'acc.php', 'Your request has been accepted by the internship manager. Please note that the requests for that period have been directly refused.', '2023-05-19 20:57:24', 1),
(52, 36, 46, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-20 11:18:31', 1),
(53, 36, 46, 'acc.php', 'Your request has been accepted by the internship manager. Please note that the requests for that period have been directly refused.', '2023-05-20 11:19:33', 1),
(54, 36, 47, 'ref.php', '1-Incomplete or inaccurate personal details', '2023-05-23 10:49:37', 1),
(55, 36, 48, 'ref.php', '<?=refused:?>5-Conflict with the establishment or internship manager', '2023-05-23 10:53:10', 1),
(56, 36, 49, 'ref.php', '<?php echo \"refused:\" . 3-Unsuitable academic year or semester; ?>', '2023-05-23 10:57:52', 1),
(57, 36, 50, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-23 11:27:01', 1),
(58, 36, 50, 'acc.php', 'Your request has been accepted by the internship manager. Please note that the requests for that period have been directly refused.', '2023-05-23 11:27:13', 1),
(59, 36, 52, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-23 15:14:49', 1),
(60, 36, 52, 'acc.php', 'Your request has been accepted by the internship manager. Please note that the requests for that period have been directly refused.', '2023-05-23 15:15:58', 1),
(61, 36, 54, 'acc.php', 'Your request has been accepted by the head of department.', '2023-05-23 21:05:31', 1),
(62, 36, 54, 'acc.php', 'Your request has been accepted by the internship manager. Please note that the requests for that period have been directly refused.', '2023-05-23 21:06:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verified`
--

CREATE TABLE `verified` (
  `id_ver` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `code` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verified`
--

INSERT INTO `verified` (`id_ver`, `email`, `code`) VALUES
(12, 'hadjerbgt@gmail.com', 0),
(23, 'hadjer.bouguettoucha@univ-constantine2.dz', 0),
(24, 'ilhame.djouablia@univ-constantine2.dz', 0),
(25, 'hadjerbgt@gmail.com', 0),
(26, 'hadjerbgt@gmail.com', 0),
(27, 'hanine.bouguettoucha@icloud.com', 0),
(29, 'ilyyilhem@gmail.com', 0),
(31, ' hadjerbgt@gmail.com', 0),
(32, 'ilhame.djouablia@univ-constantine2.dz', 0),
(33, 'ilham@gmail.com', 0),
(34, ' danielthompson@pqr.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `att`
--
ALTER TABLE `att`
  ADD PRIMARY KEY (`id_att`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id_grade`),
  ADD KEY `id_req` (`id_req`);

--
-- Indexes for table `head`
--
ALTER TABLE `head`
  ADD PRIMARY KEY (`id_hod`);

--
-- Indexes for table `head_notif`
--
ALTER TABLE `head_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`);

--
-- Indexes for table `manager_notif`
--
ALTER TABLE `manager_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id_offer`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_req`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `ryc`
--
ALTER TABLE `ryc`
  ADD PRIMARY KEY (`id_ryc`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `student_notif`
--
ALTER TABLE `student_notif`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `verified`
--
ALTER TABLE `verified`
  ADD PRIMARY KEY (`id_ver`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `att`
--
ALTER TABLE `att`
  MODIFY `id_att` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `head`
--
ALTER TABLE `head`
  MODIFY `id_hod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `head_notif`
--
ALTER TABLE `head_notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `manager_notif`
--
ALTER TABLE `manager_notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `ryc`
--
ALTER TABLE `ryc`
  MODIFY `id_ryc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `student_notif`
--
ALTER TABLE `student_notif`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `verified`
--
ALTER TABLE `verified`
  MODIFY `id_ver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `id_req` FOREIGN KEY (`id_req`) REFERENCES `request` (`id_req`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `id_student` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
