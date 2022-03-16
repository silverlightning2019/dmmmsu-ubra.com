-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 02:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_tbl`
--

CREATE TABLE `job_tbl` (
  `j_id` int(11) NOT NULL,
  `j_name` varchar(255) NOT NULL,
  `j_area` varchar(255) NOT NULL,
  `j_specialization` varchar(255) NOT NULL,
  `j_location` varchar(255) NOT NULL,
  `j_organization` varchar(255) NOT NULL,
  `j_count` int(11) NOT NULL,
  `j_description` varchar(255) NOT NULL,
  `j_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_tbl`
--

INSERT INTO `job_tbl` (`j_id`, `j_name`, `j_area`, `j_specialization`, `j_location`, `j_organization`, `j_count`, `j_description`, `j_img`) VALUES
(1, 'Civil Engineer', 'Local', 'Structural Engineering', 'City of San Fernando, La Union', 'DMMMSU-MLUC', 3, 'Lorem Ipsom asmogus susgus beef amomogus abigus asmolgus.', 'Engineers.jpg'),
(2, 'Info Systems Admin', 'Local', 'Systems Analyst', 'City of San Fernando, La Union', 'DMMMSU-MLUC', 1, 'Lorem Ipsom asmogus susgus beef amomogus abigus asmolgus.', 'Engineers.jpg'),
(3, 'Guidance Counselor', 'Local', 'Career/Lifestyle', 'City of San Fernando, La Union', 'DMMMSU-MLUC', 1, 'Lorem Ipsom asmogus susgus beef amomogus abigus asmolgus.', 'Engineers.jpg'),
(4, 'Aeroplane Mechanic', 'Local', 'Aircraft Systems', 'City of San Fernando, La Union', 'San Fernando Airport', 2, 'Lorem Ipsom asmogus susgus beef amomogus abigus asmolgus.', 'Engineers.jpg'),
(5, 'IDL Engineer', 'Overseas', 'Semicondoctors', 'Taiwan', 'EyeQuest International Manpower Agency', 150, 'Salary NT$ 26,500 + OT', 'Engineers.jpg'),
(6, 'Programmer', 'Local', 'Web Development', 'City of San Fernando, La Union', 'PC4Me', 2, 'Preferable with 1-2 years of work experience', 'Engineers.jpg'),
(7, 'Nurse', 'Local', 'ER Nurse', 'City of San Fernando, La Union', 'ITRMC', 10, 'Must have ADN', 'Engineers.jpg'),
(8, 'Programmer', 'Local', 'Data Analysis', 'City of San Fernando, La Union', 'TaskUs', 2, 'Preferable with 1-2 years of work experience', 'Engineers.jpg'),
(9, 'SUPER IDOL', 'Overseas', 'Social Credit', 'Beijing, China', 'Chinese Central TV', 105, 'Must know Red Sun in the Sky', 'super-idol.gif');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `uname`, `email`, `psword`) VALUES
(1, 'root', '', ''),
(2, '', '', ''),
(3, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_tbl`
--
ALTER TABLE `job_tbl`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_tbl`
--
ALTER TABLE `job_tbl`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
