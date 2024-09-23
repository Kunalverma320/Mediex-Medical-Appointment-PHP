-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 11:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `phone`, `dob`, `gender`, `address`, `logo`, `status`, `createdAt`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'kunal1235', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'kunal123', 'ca94aa55199b6b4a96f0b2611f71aa38', 'Kunal', 'verma', 'k@gmail.com', '65455659965', '2014-02-03', 'Male', 'Raipur', NULL, NULL, NULL),
(4, 'kulvinder123', 'kulvinder123', 'kulvinder', '', '', '', '0000-00-00', 'Male', '', NULL, 1, NULL),
(5, 'neeraj123', '38d82011f2fbc5dd83a47d0372ca4612', 'neeraj', '', 'tbs.neeraj@gmail.com', '9256545474', '2024-02-14', 'Male', 'fghj', '1694940421392.jpg', 1, '2024-02-14 11:49:30'),
(6, 'jone123', 'a36d98d943ef4d91764d052841a6f611', '', '', '', '', '0000-00-00', 'Male', '', 'Admin-Profile-Vector-PNG-Image.png', 1, '2024-02-15 04:02:09'),
(7, 'sam123', '56fafa8964024efa410773781a5f9e93', 'sam', 'Verma', 'sam@gmail.com', '9165454247', '2004-06-29', 'Male', 'Station Road\r\nf', '20694473.jpg', 1, '2024-02-24 06:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `doctors` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '101',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `phone`, `date`, `time`, `department`, `doctors`, `message`, `status`, `created_at`) VALUES
(1, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', '2001-02-24', '00:51:00', '101', '4', 'sadfghj', '101', NULL),
(10, 'sdsf', 'kunal.iugofi@gmail.com', '9165454247', '2012-02-24', '12:37:00', '102', '1', 'fghj', '101', NULL),
(11, 'admintest', 'kunal@gmail.com', '9165454247', '2001-02-24', '12:36:00', '102', '4', 'dfghm', '101', NULL),
(12, 'sdfg', 'kunal.iugofi@gmail.com', '9165454247', '2001-02-24', '12:39:00', '103', '1', 'dfg', '101', NULL),
(13, 'sdfg', 'kunal.iugofi@gmail.com', '9165454247', '2001-02-24', '12:39:00', '103', '1', 'dfg', '101', NULL),
(14, 'sdfg', 'kunal.iugofi@gmail.com', '9165454247', '2001-02-24', '12:39:00', '103', '1', 'dfg', '101', NULL),
(15, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', '2001-02-24', '12:40:00', '101', '4', '', '101', NULL),
(16, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-19', '13:33:00', '102', '1', 'yhjkk', '101', NULL),
(20, 'kunal', '', '9165454247', '2024-02-19', '17:24:00', '103', '2', 'wse', '101', '2024-02-19 11:54:34'),
(21, 'admintest', '', '9165454247', '2024-02-19', '17:30:00', '102', '4', 'bnm,.', '101', '2024-02-19 12:00:16'),
(22, 'admintest', '', '9165454247', '2024-02-19', '17:41:00', '104', '2', 'bnk,', '101', '2024-02-19 12:11:39'),
(23, 'admintest', '', '9165454247', '2024-02-19', '17:45:00', '101', '4', 'gfhjk', '101', '2024-02-19 12:15:11'),
(24, 'kunal', '', '9165454247', '2024-02-19', '18:13:00', '102', '1', 'fghjmk', '101', '2024-02-19 12:43:38'),
(25, 'admintest', '', '9165454247', '2024-02-19', '18:23:00', '101', '4', 'hhgjkm', '101', '2024-02-19 12:53:51'),
(26, 'kunal', '', '9165454247', '2024-02-20', '09:08:00', '101', '4', 'Test Mail', '101', '2024-02-20 03:39:18'),
(27, 'kunal', '', '9165454247', '2024-02-20', '09:39:00', '101', '4', 'tEST mAIL', '101', '2024-02-20 04:09:37'),
(28, 'kunal', '', '9165454247', '2024-02-20', '09:49:00', '102', '4', 'fghjkl;', '101', '2024-02-20 04:19:53'),
(29, 'kunal', '', '9165454247', '2024-02-20', '09:56:00', '101', '4', 'sdfgh', '101', '2024-02-20 04:26:40'),
(30, 'admintest', '', '9165454247', '2024-02-20', '10:00:00', '102', '4', 'sdvf', '101', '2024-02-20 04:30:56'),
(31, 'Neeraj', 'tbs.neeraj@gmail.com', '9165454247', '2024-02-21', '11:06:00', '101', '4', 'Test', '101', '2024-02-20 04:35:15'),
(32, 'kunal', 'vanshikaverma9527@gmail.com', '9256545474', '2024-02-20', '10:08:00', '102', '4', 'vbnkm,,l', '101', '2024-02-20 04:40:05'),
(33, 'vanshika', 'vanshikaverma9527@gmail.com', '9256545474', '2024-02-20', '10:17:00', '101', '4', 'dfgj', '101', '2024-02-20 04:47:18'),
(34, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '10:20:00', '101', '4', 'sdfgh', '101', '2024-02-20 04:50:17'),
(35, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '10:21:00', '101', '4', 'sdf', '101', '2024-02-20 04:51:10'),
(36, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-21', '10:24:00', '101', '4', 'dfghj', '101', '2024-02-20 04:54:35'),
(37, 'kulvinder', 'iugofi.kulvinder@gmail.com', '9256545474', '2024-02-21', '00:30:00', '101', '4', 'Test', '101', '2024-02-20 04:59:40'),
(38, 'kunal', 'iugofi.kulvinder@gmail.com', '9165454247', '2024-02-21', '10:32:00', '101', '4', 'sdfghjkl;', '101', '2024-02-20 05:03:00'),
(39, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-21', '10:34:00', '101', '4', 'jk', '101', '2024-02-20 05:04:35'),
(40, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-21', '10:38:00', '101', '4', 'fghj', '101', '2024-02-20 05:08:40'),
(41, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-21', '10:41:00', '101', '4', 'gh', '101', '2024-02-20 05:11:06'),
(42, 'vanshika', 'vanshikaverma9527@gmail.com', '9165454247', '2024-02-21', '10:42:00', '101', '4', 'sddfghj', '101', '2024-02-20 05:12:47'),
(43, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-21', '10:44:00', '101', '4', 'dfghj', '101', '2024-02-20 05:15:05'),
(44, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:01:00', '101', '4', 'dfg', '101', '2024-02-20 05:31:28'),
(45, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:07:00', '101', '4', 'gjhgh', '101', '2024-02-20 05:37:35'),
(46, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:09:00', '101', '4', 'gh', '101', '2024-02-20 05:40:04'),
(47, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:13:00', '101', '4', 'ytug', '101', '2024-02-20 05:43:30'),
(48, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:15:00', '101', '4', 'f', '101', '2024-02-20 05:45:11'),
(49, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:16:00', '101', '4', 'fgjh', '101', '2024-02-20 05:46:13'),
(50, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:17:00', '101', '4', 'gh', '101', '2024-02-20 05:47:12'),
(51, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:18:00', '101', '4', 'gh', '101', '2024-02-20 05:48:36'),
(52, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', '2024-02-20', '11:25:00', '102', '4', 'jhk', '101', '2024-02-20 05:54:11'),
(53, 'kulvinder', 'iugofi.kulvinder@gmail.com', '9165454247', '2024-02-21', '17:29:00', '101', '4', 'sadfd', '101', '2024-02-20 12:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_as`
--

CREATE TABLE `contact_as` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_customers`
--

CREATE TABLE `contact_customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `backmessage` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '101',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_customers`
--

INSERT INTO `contact_customers` (`id`, `name`, `email`, `phone`, `subject`, `message`, `backmessage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admintest', 'kunalverma320@gmail.com', '9165542525', 'Make Appointment', 'jhjh', '<p>DFGHJH</p>', '102', NULL, '2024-02-21 07:27:16'),
(2, 'admintest', 'kulvinderpathania29@gmail.com', '9165542525', 'General Inquiry', 'adfghjk', '<p>Test</p>', '102', NULL, '2024-02-21 07:03:46'),
(3, 'SQLyogTunnel.php', 'kunal.iugofi@admin.com', '9165542525', 'General Inquiry', 'dfvbn', '<p>gjh</p>', '102', NULL, '2024-02-21 07:43:41'),
(4, 'admintest', 'kunal@gmail.com', '9165542525', 'Make Appointment', 'sdf', NULL, '101', NULL, '2024-02-21 07:02:12'),
(5, 'admintest', 'kunal.iugofi@gmail.com', '9165542525', 'Make Appointment', 'fghj', '<p>vgnjhg</p>', '102', NULL, '2024-02-21 07:48:18'),
(8, 'admintest', 'kunal.iugofi@gmail.com', '9165542525', '', '', NULL, '101', NULL, '2024-02-21 07:03:24'),
(11, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', 'Make Appointment', 'vfbn', NULL, '101', NULL, '2024-02-21 05:47:28'),
(12, 'admintest', '', '9165454247', 'Make Appointment', 'sdfghjkl;', NULL, '101', NULL, '2024-02-21 05:47:28'),
(13, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', 'Make Appointment', 's', NULL, '101', NULL, '2024-02-21 05:47:28'),
(14, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', 'Make Appointment', 'sxd', NULL, '101', NULL, '2024-02-21 05:47:28'),
(15, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', 'Make Appointment', 'sd', NULL, '101', NULL, '2024-02-21 05:47:28'),
(16, '', 'kunal.iugofi@gmail.com', '9165454247', 'Make Appointment', 'd', NULL, '101', NULL, '2024-02-21 05:47:28'),
(17, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', 'Make Appointment', 'dfg', NULL, '101', NULL, '2024-02-21 05:47:28'),
(18, 'admintest', 'kunal.iugofi@gmail.com', '9165454247', 'Make Appointment', 'SS', NULL, '101', NULL, '2024-02-21 05:47:28'),
(19, 'kunal', 'kunal.iugofi@gmail.com', '9165454247', 'Make Appointment', 'GJHGJH', NULL, '101', NULL, '2024-02-21 05:47:28'),
(20, 'admintest', 'iugofi.kulvinder@gmail.com', '9165454247', 'Make Appointment', 'test', '<p>Test Mail</p>', '102', NULL, '2024-02-21 06:22:58'),
(21, 'jj comunication', 'kunal.iugofi@gmail.com', '9165454247', 'General Inquiry', 'dfgh', NULL, '101', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `fathername` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `Introduction` mediumtext DEFAULT NULL,
  `educational_info` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fname`, `department`, `gender`, `dob`, `fathername`, `email`, `phone`, `address`, `facebook`, `twitter`, `linkedin`, `whatsapp`, `Introduction`, `educational_info`, `image`, `status`, `created_at`) VALUES
(1, 'Dr. Malcolm Function', '110', '101', '2001-05-26', '', 'dr.malcolm@gmail.com', '163-6547 8974', '12546 LK Road, United States', 'https://www.facebook.com/kunal.9809672/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fkunalrverma', 'https://in.linkedin.com/in/kunal-verma-75a810176', '9165454247', '			<p class=\"mb-20\">Dr. Malcolm Function Lyphe is a private individual or a professional who gained\r\n                            prominence in a specific field after January 2022, I recommend checking recent and credible\r\n                            online sources, such as professional profiles, healthcare directories, or the official\r\n                            website of the relevant institution or clinic where this person works. Social media\r\n                            platforms or professional networking sites may also provide up-to-date information.</p>\r\n                        <p class=\"mb-20\">Your health and well-being are our top priorities. We take the time to listen\r\n                            to your concerns, answer your questions, and involve you in the decision-making process for\r\n                            your healthcare. We believe in empowering our patients to make informed choices about their\r\n                            health.</p>\r\n                        <h4 class=\"sec-title mb-4 mt-40\">Specialties</h4>\r\n                        <p class=\"mb-4\">Our clinic is equipped with modern facilities and advanced medical technology to\r\n                            ensure accurate diagnoses and effective treatments. This enables us to provide you with the\r\n                            highest standard of care.</p>', '', 'team_1_1.jpg', 1, '2024-02-24 00:54:46'),
(2, 'Dr. Douglas Lyphe', '112', '102', '2001-05-26', '', 'dr.douglas@gmail.com', '163-6547 8975', '12547 LK Road, United States', 'https://www.facebook.com/kunal.9809672/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fkunalrverma', 'https://in.linkedin.com/in/kunal-verma-75a810176', '9165454247', '			<p class=\"mb-20\">Dr. Douglas Lyphe is a private individual or a professional who gained\r\n                            prominence in a specific field after January 2022, I recommend checking recent and credible\r\n                            online sources, such as professional profiles, healthcare directories, or the official\r\n                            website of the relevant institution or clinic where this person works. Social media\r\n                            platforms or professional networking sites may also provide up-to-date information.</p>\r\n                        <p class=\"mb-20\">Your health and well-being are our top priorities. We take the time to listen\r\n                            to your concerns, answer your questions, and involve you in the decision-making process for\r\n                            your healthcare. We believe in empowering our patients to make informed choices about their\r\n                            health.</p>\r\n                        <h4 class=\"sec-title mb-4 mt-40\">Specialties</h4>\r\n                        <p class=\"mb-4\">Our clinic is equipped with modern facilities and advanced medical technology to\r\n                            ensure accurate diagnoses and effective treatments. This enables us to provide you with the\r\n                            highest standard of care.</p>', '', 'team_1_2.jpg', 1, '2024-02-24 00:54:46'),
(3, 'Dr. Wisteria Ravenc', '110', '101', '2001-05-26', '', 'dr.wisteria@gmail.com', '163-6547 8976', '12548 LK Road, United States', 'https://www.facebook.com/kunal.9809672/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fkunalrverma', 'https://in.linkedin.com/in/kunal-verma-75a810176', '9165454247', '			<p class=\"mb-20\">Dr. Wisteria Ravenc Lyphe is a private individual or a professional who gained\r\n                            prominence in a specific field after January 2022, I recommend checking recent and credible\r\n                            online sources, such as professional profiles, healthcare directories, or the official\r\n                            website of the relevant institution or clinic where this person works. Social media\r\n                            platforms or professional networking sites may also provide up-to-date information.</p>\r\n                        <p class=\"mb-20\">Your health and well-being are our top priorities. We take the time to listen\r\n                            to your concerns, answer your questions, and involve you in the decision-making process for\r\n                            your healthcare. We believe in empowering our patients to make informed choices about their\r\n                            health.</p>\r\n                        <h4 class=\"sec-title mb-4 mt-40\">Specialties</h4>\r\n                        <p class=\"mb-4\">Our clinic is equipped with modern facilities and advanced medical technology to\r\n                            ensure accurate diagnoses and effective treatments. This enables us to provide you with the\r\n                            highest standard of care.</p>', '', 'team_1_3.jpg', 1, '2024-02-24 00:54:46'),
(4, 'Dr. Benjamin Evalent', '111', '102', '2001-05-26', '', 'dr.benjamin@gmail.com', '163-6547 8977', '12549 LK Road, United States', 'https://www.facebook.com/kunal.9809672/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fkunalrverma', 'https://in.linkedin.com/in/kunal-verma-75a810176', '9165454247', '			<p class=\"mb-20\">Dr. Benjamin Evalent Lyphe is a private individual or a professional who gained\r\n                            prominence in a specific field after January 2022, I recommend checking recent and credible\r\n                            online sources, such as professional profiles, healthcare directories, or the official\r\n                            website of the relevant institution or clinic where this person works. Social media\r\n                            platforms or professional networking sites may also provide up-to-date information.</p>\r\n                        <p class=\"mb-20\">Your health and well-being are our top priorities. We take the time to listen\r\n                            to your concerns, answer your questions, and involve you in the decision-making process for\r\n                            your healthcare. We believe in empowering our patients to make informed choices about their\r\n                            health.</p>\r\n                        <h4 class=\"sec-title mb-4 mt-40\">Specialties</h4>\r\n                        <p class=\"mb-4\">Our clinic is equipped with modern facilities and advanced medical technology to\r\n                            ensure accurate diagnoses and effective treatments. This enables us to provide you with the\r\n                            highest standard of care.</p>', '', 'team_1_4.jpg', 1, '2024-02-24 00:54:46'),
(5, 'Dr. Rishita Rosei', '110', '102', '2001-05-26', '', 'dr.rishita@gmail.com', '163-6547 8978', '12550 LK Road, United States', 'https://www.facebook.com/kunal.9809672/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fkunalrverma', 'https://in.linkedin.com/in/kunal-verma-75a810176', '9165454247', '			<p class=\"mb-20\">Dr. Rishita Rosei Lyphe is a private individual or a professional who gained\r\n                            prominence in a specific field after January 2022, I recommend checking recent and credible\r\n                            online sources, such as professional profiles, healthcare directories, or the official\r\n                            website of the relevant institution or clinic where this person works. Social media\r\n                            platforms or professional networking sites may also provide up-to-date information.</p>\r\n                        <p class=\"mb-20\">Your health and well-being are our top priorities. We take the time to listen\r\n                            to your concerns, answer your questions, and involve you in the decision-making process for\r\n                            your healthcare. We believe in empowering our patients to make informed choices about their\r\n                            health.</p>\r\n                        <h4 class=\"sec-title mb-4 mt-40\">Specialties</h4>\r\n                        <p class=\"mb-4\">Our clinic is equipped with modern facilities and advanced medical technology to\r\n                            ensure accurate diagnoses and effective treatments. This enables us to provide you with the\r\n                            highest standard of care.</p>', '', 'team_1_5.jpg', 1, '2024-02-24 00:54:46'),
(6, 'Dr. Emanuyel Mac', '112', '101', '2001-05-26', '', 'dr.emanuyel@gmail.com', '163-6547 8979', '12551 LK Road, United States', 'https://www.facebook.com/kunal.9809672/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fkunalrverma', 'https://in.linkedin.com/in/kunal-verma-75a810176', '9165454247', '			<p class=\"mb-20\">Dr. Emanuyel Mac Lyphe is a private individual or a professional who gained\r\n                            prominence in a specific field after January 2022, I recommend checking recent and credible\r\n                            online sources, such as professional profiles, healthcare directories, or the official\r\n                            website of the relevant institution or clinic where this person works. Social media\r\n                            platforms or professional networking sites may also provide up-to-date information.</p>\r\n                        <p class=\"mb-20\">Your health and well-being are our top priorities. We take the time to listen\r\n                            to your concerns, answer your questions, and involve you in the decision-making process for\r\n                            your healthcare. We believe in empowering our patients to make informed choices about their\r\n                            health.</p>\r\n                        <h4 class=\"sec-title mb-4 mt-40\">Specialties</h4>\r\n                        <p class=\"mb-4\">Our clinic is equipped with modern facilities and advanced medical technology to\r\n                            ensure accurate diagnoses and effective treatments. This enables us to provide you with the\r\n                            highest standard of care.</p>', '', 'team_1_6.jpg', 1, '2024-02-24 00:54:46'),
(7, 'Dr. Wilium Lily', '101', '102', '2001-05-26', '', 'dr.wilium@gmail.com', '163-6547 8980', '12552 LK Road, United States', 'https://www.facebook.com/kunal.9809672/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fkunalrverma', 'https://in.linkedin.com/in/kunal-verma-75a810176', '9165454247', '			<p class=\"mb-20\">Dr. Wilium Lily Lyphe is a private individual or a professional who gained\r\n                            prominence in a specific field after January 2022, I recommend checking recent and credible\r\n                            online sources, such as professional profiles, healthcare directories, or the official\r\n                            website of the relevant institution or clinic where this person works. Social media\r\n                            platforms or professional networking sites may also provide up-to-date information.</p>\r\n                        <p class=\"mb-20\">Your health and well-being are our top priorities. We take the time to listen\r\n                            to your concerns, answer your questions, and involve you in the decision-making process for\r\n                            your healthcare. We believe in empowering our patients to make informed choices about their\r\n                            health.</p>\r\n                        <h4 class=\"sec-title mb-4 mt-40\">Specialties</h4>\r\n                        <p class=\"mb-4\">Our clinic is equipped with modern facilities and advanced medical technology to\r\n                            ensure accurate diagnoses and effective treatments. This enables us to provide you with the\r\n                            highest standard of care.</p>', '', 'team_1_7.jpg', 1, '2024-02-24 00:54:46'),
(8, 'Dr. Esabel Macran', '111', '101', '2001-05-26', '', 'dr.esabel@gmail.com', '163-6547 8981', '12553 LK Road, United States', 'https://www.facebook.com/kunal.9809672/', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fkunalrverma', 'https://in.linkedin.com/in/kunal-verma-75a810176', '9165454247', '			<p class=\"mb-20\">Dr. Esabel Macran Lyphe is a private individual or a professional who gained\r\n                            prominence in a specific field after January 2022, I recommend checking recent and credible\r\n                            online sources, such as professional profiles, healthcare directories, or the official\r\n                            website of the relevant institution or clinic where this person works. Social media\r\n                            platforms or professional networking sites may also provide up-to-date information.</p>\r\n                        <p class=\"mb-20\">Your health and well-being are our top priorities. We take the time to listen\r\n                            to your concerns, answer your questions, and involve you in the decision-making process for\r\n                            your healthcare. We believe in empowering our patients to make informed choices about their\r\n                            health.</p>\r\n                        <h4 class=\"sec-title mb-4 mt-40\">Specialties</h4>\r\n                        <p class=\"mb-4\">Our clinic is equipped with modern facilities and advanced medical technology to\r\n                            ensure accurate diagnoses and effective treatments. This enables us to provide you with the\r\n                            highest standard of care.</p>', '', 'team_1_8.jpg', 1, '2024-02-24 00:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `Categories_id` varchar(255) DEFAULT NULL,
  `Icon` varchar(255) DEFAULT NULL,
  `service-card_image` varchar(255) DEFAULT NULL,
  `box-icon_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `storepick`
--

CREATE TABLE `storepick` (
  `id` int(11) NOT NULL,
  `STORE_ID` varchar(255) DEFAULT NULL,
  `STORE_TYPE` int(11) DEFAULT 1,
  `PICK_TEXT` varchar(255) DEFAULT NULL,
  `PICK_ID` int(11) DEFAULT NULL,
  `STORE_INDEX_SEQUENCE` int(11) DEFAULT NULL,
  `PICK_TEXT_EXTEND` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storepick`
--

INSERT INTO `storepick` (`id`, `STORE_ID`, `STORE_TYPE`, `PICK_TEXT`, `PICK_ID`, `STORE_INDEX_SEQUENCE`, `PICK_TEXT_EXTEND`) VALUES
(1, 'professional_skills', 1, 'Surgery', 101, 1, NULL),
(2, 'professional_skills', 1, 'Medical Research', 102, 2, NULL),
(3, 'professional_skills', 1, 'Professionalism', 103, 3, NULL),
(4, 'Categories', 1, 'Cardiologist', 101, 1, NULL),
(5, 'Categories', 1, 'Dermatology', 102, 2, NULL),
(6, 'Categories', 1, 'Family Medicine', 103, 3, NULL),
(7, 'Categories', 1, 'Obstetrics & Gynecology', 104, 4, NULL),
(8, 'Categories', 1, 'Oncology', 105, 5, NULL),
(9, 'Categories', 1, 'Orthopedic Surgery', 106, 6, NULL),
(12, 'subject_inquiry', 1, 'Make Appointment', 101, 1, NULL),
(13, 'subject_inquiry', 1, 'General Inquiry', 102, 2, NULL),
(14, 'subject_inquiry', 1, 'Medicine Help', 103, 3, NULL),
(15, 'subject_inquiry', 1, 'Consultation', 104, 4, NULL),
(16, 'subject_inquiry', 1, 'Other', 105, 5, NULL),
(17, 'Categories', 1, 'Gastroenterologist', 107, 7, NULL),
(18, 'Categories', 1, 'Ophthalmology', 108, 8, NULL),
(19, 'Categories', 1, 'Orthopedics', 109, 9, NULL),
(20, 'Categories', 1, 'Neurologist', 110, 10, NULL),
(22, 'Categories', 1, 'Internal Medicine', 111, 11, NULL),
(23, 'Categories', 1, 'Urology Care', 112, 12, NULL),
(24, 'Categories', 1, 'Gynecologists', 113, 13, NULL),
(25, 'Categories', 1, 'Cardiology', 114, 14, NULL),
(26, 'Categories', 1, 'Hematology', 115, 15, NULL),
(27, NULL, 1, 'Surgery Center', NULL, NULL, NULL),
(28, NULL, 1, 'Pulmonology', NULL, NULL, NULL),
(29, NULL, 1, 'Audiology Care', NULL, NULL, NULL),
(30, 'Gender', 1, 'Male', 101, 1, NULL),
(31, 'Gender', 1, 'Female', 102, 2, NULL),
(32, 'Gender', 1, 'Other', 103, 3, NULL),
(34, 'Status', 1, 'Active', 101, 1, NULL),
(35, 'Status', 1, 'Inactive', 102, 2, NULL),
(36, 'Categories', 1, 'Dentist', 116, 16, NULL),
(37, 'Categories', 1, 'Physiotherapist', 117, 17, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '101',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `status`, `created_at`) VALUES
(1, 'kunal.iugofi@gmail.com', '101', '2024-02-21 11:29:17'),
(2, 'genpact@gmail.com', '101', '2024-02-21 11:29:17'),
(4, 'kunalverma320@gmail.com', '101', '2024-02-21 11:29:17'),
(5, 'kunal@gmail.com', '101', '2024-02-21 11:29:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_as`
--
ALTER TABLE `contact_as`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_customers`
--
ALTER TABLE `contact_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storepick`
--
ALTER TABLE `storepick`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `contact_as`
--
ALTER TABLE `contact_as`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_customers`
--
ALTER TABLE `contact_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storepick`
--
ALTER TABLE `storepick`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
