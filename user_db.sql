-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 04:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `double_room`
--

CREATE TABLE `double_room` (
  `id` int(3) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `chi` varchar(20) NOT NULL,
  `cho` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exclusive_room`
--

CREATE TABLE `exclusive_room` (
  `id` int(3) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `chi` varchar(20) NOT NULL,
  `cho` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `family_room`
--

CREATE TABLE `family_room` (
  `id` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `chi` varchar(20) NOT NULL,
  `cho` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `id` int(3) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `rate` int(1) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(16, 'john', 'jo@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `single_room`
--

CREATE TABLE `single_room` (
  `id` int(3) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `chi` varchar(20) NOT NULL,
  `cho` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_room`
--

INSERT INTO `single_room` (`id`, `fullname`, `email`, `phone`, `roomtype`, `chi`, `cho`) VALUES
(15, 'Yohannes Dejene', 'dejeneyohannes72@gma', 2147483647, 'SINGLE ROOM', '2023-07-03T09:20:10+', '2023-07-03T09:20:10+');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_form`
--

CREATE TABLE `subscribe_form` (
  `id` int(3) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe_form`
--

INSERT INTO `subscribe_form` (`id`, `fullname`, `email`) VALUES
(1, 'edrf', 'tttttt@gmail.com'),
(2, 'wdrfgtg', 'temesgennage@20222gm'),
(3, 'temesgen wokuma', 'temesgennage2022@gma'),
(4, 'temesgen wokuma', 'sinte@gmail.com'),
(5, 'temesgen wokuma', 'temesgennage2022@gma'),
(6, 'temesgen wokuma', ''),
(7, 'temesgen wokuma', 'temesgennage2022@gma'),
(8, 'jo', 'jo@gmail.com'),
(9, 'zinu', 'zinashtayaben2@gmail'),
(10, 'shdhs', 'fadf@s'),
(11, 'debela', 'deba@gmail.com'),
(12, 'Yohannes Dejene', 'dejeneyohannes72@gma');

-- --------------------------------------------------------

--
-- Table structure for table `suit_room`
--

CREATE TABLE `suit_room` (
  `id` int(3) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `chi` varchar(20) NOT NULL,
  `cho` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suit_room`
--

INSERT INTO `suit_room` (`id`, `fullname`, `email`, `phone`, `roomtype`, `chi`, `cho`) VALUES
(5, 'Yohannes Dejene', 'dejeneyohannes72@gma', 2147483647, 'SUIT ROOM', '2023-07-03T09:10:09+', '2023-07-03T09:10:09+'),
(6, 'ds', 'belayketema@gmail.co', 2147483647, 'SUIT ROOM', '2023-07-03T09:46:46+', '2023-07-03T09:46:46+'),
(7, 'Yohannes Dejene', 'dejeneyohannes72@gma', 2147483647, 'SUIT ROOM', '2023-07-03T10:11:10+', '2023-07-03T10:11:10+'),
(8, 'Yohannes Dejene', 'dejeneyohannes7@gmai', 2147483647, 'SUIT ROOM', '2023-07-03T10:14:32+', '2023-07-03T10:14:32+'),
(9, 'Yohann Dejene', 'dejeneyohannes72@gma', 2147483647, 'SUIT ROOM', '2023-07-03T10:15:46+', '2023-07-03T10:15:46+'),
(10, 'yy', 'yy@gmail.com', 941435132, 'SUIT ROOM', '2023-07-03T10:18:57+', '2023-07-03T10:18:57+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `double_room`
--
ALTER TABLE `double_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exclusive_room`
--
ALTER TABLE `exclusive_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_room`
--
ALTER TABLE `family_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_room`
--
ALTER TABLE `single_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe_form`
--
ALTER TABLE `subscribe_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suit_room`
--
ALTER TABLE `suit_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `double_room`
--
ALTER TABLE `double_room`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exclusive_room`
--
ALTER TABLE `exclusive_room`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `family_room`
--
ALTER TABLE `family_room`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `single_room`
--
ALTER TABLE `single_room`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscribe_form`
--
ALTER TABLE `subscribe_form`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suit_room`
--
ALTER TABLE `suit_room`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
