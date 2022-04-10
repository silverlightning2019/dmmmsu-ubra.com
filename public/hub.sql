-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 10:31 AM
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
-- Table structure for table `application_tbl`
--

CREATE TABLE `application_tbl` (
  `app_id` int(11) NOT NULL,
  `app_jobid` varchar(255) NOT NULL,
  `app_jobname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_tbl`
--

INSERT INTO `application_tbl` (`app_id`, `app_jobid`, `app_jobname`) VALUES
(1, '9', 'SUPER IDOL'),
(2, '9', 'SUPER IDOL'),
(3, '4', 'Aeroplane Mechanic'),
(4, '9', 'SUPER IDOL'),
(5, '6', 'Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `employer_tbl`
--

CREATE TABLE `employer_tbl` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_department` varchar(255) NOT NULL,
  `emp_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_tbl`
--

INSERT INTO `employer_tbl` (`emp_id`, `emp_name`, `emp_department`, `emp_img`) VALUES
(1, 'DMMMSU-MLUC', 'Human Resource Management', 'dmmmsu - Copy.jpg'),
(2, 'San Fernando Airport', 'Aircraft Maintenance', 'default.jpg'),
(3, 'EyeQuest IMA', 'Engineering', 'default.jpg'),
(4, 'PC4Me', 'Computer Operations', 'default.jpg'),
(5, 'ITRMC', 'Emergency Department', 'default.jpg'),
(6, 'TaskUs', 'Systems Management', 'default.jpg'),
(7, 'Chinese Central TV', 'Social Entertainment', 'super-idol.gif'),
(8, 'Confederate Gigachad', 'GIGA Security', 'gigachad.gif');

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
  `j_img` varchar(255) NOT NULL,
  `j_category` varchar(255) NOT NULL,
  `j_featured` varchar(255) NOT NULL,
  `j_stats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_tbl`
--

INSERT INTO `job_tbl` (`j_id`, `j_name`, `j_area`, `j_specialization`, `j_location`, `j_organization`, `j_count`, `j_description`, `j_img`, `j_category`, `j_featured`, `j_stats`) VALUES
(1, 'Civil Engineer', 'Local', 'Structural Engineering', 'City of San Fernando, La Union', 'DMMMSU-MLUC', 3, 'Lorem Ipsom asmogus susgus beef amomogus abigus asmolgus.', 'Engineers.jpg', 'Structures', 'Yes', 'Not Filled'),
(2, 'Info Systems Admin', 'Local', 'Systems Analyst', 'City of San Fernando, La Union', 'DMMMSU-MLUC', 1, 'Lorem Ipsom asmogus susgus beef amomogus abigus asmolgus.', 'Engineers.jpg', 'IT Solutions', 'Yes', 'Not Filled'),
(3, 'Guidance Counselor', 'Local', 'Career/Lifestyle', 'City of San Fernando, La Union', 'DMMMSU-MLUC', 1, 'Lorem Ipsom asmogus susgus beef amomogus abigus asmolgus.', 'Engineers.jpg', 'Counseling', 'Yes', 'Not Filled'),
(4, 'Aeroplane Mechanic', 'Local', 'Aircraft Systems', 'City of San Fernando, La Union', 'San Fernando Airport', 2, 'Lorem Ipsom asmogus susgus beef amomogus abigus asmolgus.', 'Engineers.jpg', 'Mechanical Systems', 'No', 'Filled'),
(5, 'IDL Engineer', 'Overseas', 'Semicondoctors', 'Taipei, Taiwan', 'EyeQuest IMA', 150, 'Salary NT$ 26,500 + OT', 'Engineers.jpg', 'Technology', 'Yes', 'Not Filled'),
(6, 'Programmer', 'Local', 'Web Development', 'City of San Fernando, La Union', 'PC4Me', 2, 'Preferable with 1-2 years of work experience', 'programming.jpg', 'IT Solutions', 'No', 'Filled'),
(7, 'Nurse', 'Local', 'ER Nurse', 'City of San Fernando, La Union', 'ITRMC', 10, 'Must have ADN', 'Engineers.jpg', 'Health Care', 'No', 'Not Filled'),
(8, 'Programmer', 'Local', 'Data Analysis', 'City of San Fernando, La Union', 'TaskUs', 2, 'Preferable with 1-2 years of work experience', 'programming.jpg', 'IT Solutions', 'No', 'Filled'),
(9, 'SUPER IDOL', 'Overseas', 'Social Credit', 'Beijing, China', 'Chinese Central TV', 105, 'Must know Red Sun in the Sky', 'super-idol.gif', 'Entertainment', 'Yes', 'Not Filled'),
(10, 'GIGACHAD', 'Overseas', 'Anti-Karen', 'New York, USA', 'Confederate Gigachad', 7, 'The Ultimate Man, the Chad to out Chad all Chads, the Alpha Male of the Alpha Males. If a woman were to look in his direction she would immediately orgasm. His jawline is a perfect 116 degrees.', 'gigachad.gif', 'Educational', 'Yes', 'Not Filled');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psword` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `uname`, `email`, `psword`, `type`) VALUES
(1, 'root', 'root', 'adminroot', 'admin'),
(2, 'user1', 'user1', 'user1', 'user'),
(3, 'user2', 'user2', 'user2', 'employer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_tbl`
--
ALTER TABLE `application_tbl`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `employer_tbl`
--
ALTER TABLE `employer_tbl`
  ADD PRIMARY KEY (`emp_id`);

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
-- AUTO_INCREMENT for table `application_tbl`
--
ALTER TABLE `application_tbl`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employer_tbl`
--
ALTER TABLE `employer_tbl`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_tbl`
--
ALTER TABLE `job_tbl`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
