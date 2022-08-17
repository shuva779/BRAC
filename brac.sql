-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 04:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brac`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(25) UNSIGNED NOT NULL,
  `user_fullName` varchar(35) NOT NULL,
  `user_userName` varchar(35) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_gender` varchar(10) DEFAULT NULL,
  `user_dob` timestamp NULL DEFAULT NULL,
  `user_qualification` varchar(20) DEFAULT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `user_div` varchar(20) DEFAULT NULL,
  `user_dis` varchar(20) DEFAULT NULL,
  `user_upa` varchar(20) DEFAULT NULL,
  `user_fullAddress` varchar(50) NOT NULL,
  `user_workexp` varchar(50) DEFAULT NULL,
  `user_pin` varchar(11) DEFAULT NULL,
  `user_designation` varchar(20) DEFAULT NULL,
  `user_empType` varchar(20) DEFAULT NULL,
  `user_joinDate` timestamp NULL DEFAULT NULL,
  `user_branchName` varchar(20) DEFAULT NULL,
  `user_rm` varchar(20) DEFAULT NULL,
  `user_dm` varchar(20) DEFAULT NULL,
  `user_am` varchar(20) DEFAULT NULL,
  `user_projectName` varchar(30) DEFAULT NULL,
  `user_pdiv` varchar(20) DEFAULT NULL,
  `user_pdis` varchar(20) DEFAULT NULL,
  `user_pupa` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullName`, `user_userName`, `user_email`, `user_gender`, `user_dob`, `user_qualification`, `user_phone`, `user_password`, `user_div`, `user_dis`, `user_upa`, `user_fullAddress`, `user_workexp`, `user_pin`, `user_designation`, `user_empType`, `user_joinDate`, `user_branchName`, `user_rm`, `user_dm`, `user_am`, `user_projectName`, `user_pdiv`, `user_pdis`, `user_pupa`) VALUES
(8, 'Shuva Chowdhury', 'shuva123', 'shuva@gmail.com', 'male', '2015-08-04 18:00:00', 'HSC/SSC/JSC', '01711111113', 'password123', 'Dhaka', 'Dhaka', 'Bashabo', '90/c, Bashabo', 'SDP', '12345', 'Internahip', 'A+', '2022-08-02 18:00:00', 'Khulna', 'Mr. XX', 'Mr. YY', 'Mr. ZZ', 'SDP-2001-2022', 'Rajshahi', 'Rajshahi', 'Golipba'),
(26, 'Rakib Chowdhury', 'rakib123', 'rakib@gmail.com', 'male', '2022-08-02 18:00:00', 'HSC', '01912987645', 'rakib123', 'Khulna', 'Magura', 'Lopaila', '83-d/kanchon road, Dhaka', 'Fresher', '09873', 'Manager', 'A-', '2022-08-15 18:00:00', 'Khulna', 'Mr. X', 'Mr. Y', 'Mr. Z', 'STAR-9018', 'Khulna', 'Magura', 'Lopalpoa'),
(27, 'Fahima Chowdhury', 'fahima123', 'fahima@gmail.com', 'male', '2022-08-02 18:00:00', 'SSC/HSC', '01911188183', 'fahima123', 'Chittagong', 'Feni', 'abc', 'iu', 'Intern', '1234', 'Manager', 'A-', '2022-08-17 18:00:00', 'Dhaka', 'X', 'Y', 'Z', 'STAR', 'Rajshahi', 'Chapainawabganj', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
