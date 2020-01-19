-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 08:17 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` time(6) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
('Dentist', 1, 1, 500, '2016-12-31', '09:25:00.000000', '2016-12-31 13:29:02', 1, 0, ''),
('Homeopath', 4, 5, 700, '2017-01-11', '14:10:00.000000', '2017-01-06 21:02:58', 0, 1, ''),
('Ayurveda', 8, 6, 600, '2019-06-29', '09:15:00.000000', '2019-06-23 07:31:28', 1, 1, ''),
('General Physician', 3, 0, 1200, '541', '00:03:51.000000', '2019-11-10 03:24:26', 1, 1, ''),
('General Physician', 3, 0, 1200, '541', '00:03:51.000000', '2019-11-10 03:24:52', 1, 1, ''),
('General Physician', 3, 0, 1200, '145', '00:54:13.000000', '2019-11-10 03:25:05', 1, 1, ''),
('General Physician', 3, 0, 1200, '145', '00:54:13.000000', '2019-11-10 03:27:34', 1, 1, ''),
('General Physician', 3, 0, 1200, '11-11-2019', '10:00:00.000000', '2019-11-10 03:31:51', 1, 1, ''),
('General Physician', 3, 0, 1200, '11-11-2019', '10:00:00.000000', '2019-11-10 03:33:27', 1, 1, ''),
('General Physician', 3, 0, 1200, '2019-11-06', '10:00:00.000000', '2019-11-10 03:33:44', 1, 1, ''),
('Homeopath', 2, 0, 600, '2019-11-13', '02:00:00.000000', '2019-11-11 13:47:12', 1, 1, ''),
('Homeopath', 2, 0, 600, '2019-11-13', '02:00:00.000000', '2019-11-11 13:50:58', 1, 1, ''),
('Ayurveda', 5, 0, 8050, '2019-11-13', '14:07:00.000000', '2019-11-11 13:51:26', 1, 1, ''),
('General Physician', 3, 0, 1200, '2019-11-06', '03:57:00.000000', '2019-11-12 17:36:40', 1, 1, ''),
('Ayurveda', 8, 0, 600, '2019-11-06', '20:01:00.000000', '2019-11-13 09:20:02', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Dentist', 'Anuj', 'New Delhi', '500', 8285703354, 'anuj.lpu1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-28 19:25:37', '2019-06-30 01:11:05'),
(2, 'Homeopath', 'Sarita Pandey', 'Varanasi', '600', 2147483647, 'sarita@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2016-12-28 19:51:51', '0000-00-00 00:00:00'),
(3, 'General Physician', 'Nitesh Kumar', 'Ghaziabad', '1200', 8523699999, 'nitesh@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 20:43:35', '0000-00-00 00:00:00'),
(4, 'Homeopath', 'Vijay Verma', 'New Delhi', '700', 25668888, 'vijay@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 20:45:09', '0000-00-00 00:00:00'),
(5, 'Ayurveda', 'Sanjeev', 'Gurugram', '8050', 442166644646, 'sanjeev@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 20:47:07', '0000-00-00 00:00:00'),
(6, 'General Physician', 'Amrita', 'New Delhi India', '2500', 45497964, 'amrita@test.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 20:52:50', '0000-00-00 00:00:00'),
(7, 'Demo test', 'abc ', 'New Delhi India', '200', 852888888, 'test@demo.com', 'f925916e2754e5e03f75dd58a5733251', '2017-01-06 21:08:58', '2019-06-23 07:17:25'),
(8, 'Ayurveda', 'Test Doctor', 'Xyz Abc New Delhi', '600', 1234567890, 'test@test.com', '202cb962ac59075b964b07152d234b70', '2019-06-23 06:57:43', '2019-06-23 07:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2016-12-27 19:37:25', '0000-00-00 00:00:00'),
(2, 'General Physician', '2016-12-27 19:38:12', '0000-00-00 00:00:00'),
(3, 'Dermatologist', '2016-12-27 19:38:48', '0000-00-00 00:00:00'),
(4, 'Homeopath', '2016-12-27 19:39:26', '0000-00-00 00:00:00'),
(5, 'Ayurveda', '2016-12-27 19:39:51', '0000-00-00 00:00:00'),
(6, 'Dentist', '2016-12-27 19:40:08', '0000-00-00 00:00:00'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-27 19:41:18', '0000-00-00 00:00:00'),
(9, 'Demo test', '2016-12-27 20:37:39', '0000-00-00 00:00:00'),
(10, 'Bones Specialist demo', '2017-01-06 21:07:53', '0000-00-00 00:00:00'),
(11, 'Test', '2019-06-23 06:51:06', '2019-06-23 06:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `name`) VALUES
(1, 'Cardiology'),
(2, 'Neurology'),
(3, 'Anesthetics'),
(5, 'General Surgery'),
(6, 'Haematology'),
(7, 'Nephrology'),
(9, 'Orthopaedics'),
(10, 'Chaplaincy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(5, 'admin', 'admin@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'user', 'user@gmail.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
