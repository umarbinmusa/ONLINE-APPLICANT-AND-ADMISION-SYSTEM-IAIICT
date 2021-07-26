-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2021 at 01:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iaiict`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'faizanayubi@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admittedstud`
--

CREATE TABLE `admittedstud` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admittedstud`
--

INSERT INTO `admittedstud` (`id`, `email`, `status`) VALUES
(1, 'musa@musa.com', 1),
(2, 'ndbhalerao91@gmail.com', 1),
(3, 'ummusulaim.ahmad2021@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'faizan', 'faizanayubi@yahoo.com', 'hi admin'),
(2, 'xdv', 'nkn', 'jk;;kl');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `menu_name`, `content`) VALUES
(10, 'ADMISSION! ADMISSION!! ADMISSION!!!', 'ADMISSION ARE NOW ON SALE!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fee` int(10) NOT NULL,
  `description` text NOT NULL,
  `num_semester` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `eligibility` text NOT NULL,
  `max_duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `type`, `code`, `name`, `fee`, `description`, `num_semester`, `duration`, `eligibility`, `max_duration`) VALUES
(1, 'Diploma', 'DIP (SCI)', 'Diploma in Computer Science', 50000, 'Taking into consideration the fact that Institute of ICT has been the preferred destination of the west for information technology outsourcing, we have ensured that quality and experience are the two priority parameters for taking students into the Diploma Program.', '4', '2', 'At least five (5) Credits in O-Level including Mathematics, English and any other science subjects. ', '3 Year'),
(2, 'Diploma', 'DIP (COMP-', 'Diploma in Computer Engineering', 50000, 'In the first year the students are provided exposure to core institute courses. Overall, in the two academic years students are provided enough industry experience.', '4', '2', 'At least five (5) Credits in O-Level including Mathematics, English and any other science subjects. ', '3 Year'),
(3, 'Certificate', 'CISCO 101', 'IT ESSENTIALS', 15000, 'IT ESSENTIAL IN NETWORKING & FUNDAMENTALS OF COMPUTER', '2', '1', 'NIL', '2');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `program` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mstatus` varchar(30) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `lg` varchar(30) NOT NULL,
  `phone` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `program`, `country`, `gender`, `mstatus`, `bloodgroup`, `firstname`, `lastname`, `middlename`, `email`, `address`, `state`, `lg`, `phone`) VALUES
(3, 'dansadau', 'dansadau', 'Diploma in Computer Science', 'Nigeria', 'male', 'Single', 'A+', 'firstname', 'Yakubu', 'Salihu', 'ndbhalerao91@gmail.com', 'No 28 Daddau Road, T/Wada Zaria', 'Adamawa', 'Zaria', -5),
(4, 'MUsa ', 'aliyu', 'Diploma in Computer Science', 'Nigeria', 'male', 'Single', 'A+', 'firstname', 'Mus', 'musaaa', 'musa@musa.com', 'no 43oifn', 'Kaduna', 'xcnjzdi', 69424),
(8, 'ummusulaim', 'ahmad', 'Diploma in Computer Science', 'Nigeria', 'female', 'Single', 'O+', 'firstname', 'Ahmad', 'Saeed', 'ummusulaim.ahmad2021@gmail.com', 'Tudun Wada Zaria', 'Kaduna', 'Zaria', 808543872367),
(9, 'ummusulaim', 'ahmad', 'Diploma in Computer Science', 'Nigeria', 'female', 'Single', 'O+', 'firstname', 'Ahmad', 'Saeed', 'ummusulaim.ahmad2021@gmail.com', 'Tudun Wada Zaria', 'Kaduna', 'Zaria', 808543872367);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admittedstud`
--
ALTER TABLE `admittedstud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admittedstud`
--
ALTER TABLE `admittedstud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
