-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 05:46 PM
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
-- Database: `qcu_eservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_eval`
--

CREATE TABLE `account_eval` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `reason_of_refusal` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `department` int(10) NOT NULL,
  `contact` bigint(64) NOT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `lname`, `fname`, `mname`, `email`, `department`, `contact`, `street`, `city`, `state`, `zip`) VALUES
(1298001, 'Queva', 'John', NULL, 'test1admin@gmail.com', 1, 912345678, 'Lili St.', 'Quezon City', 'Metro Manila', 1116),
(1298002, 'Bonayon', 'Jerick', NULL, 'testa@gmail.com', 2, 9123456789, 'Rizal Sy.', 'Quezon City', 'Metro Manila', 1112),
(1298003, 'Fernando', 'Jerry', 'Quizon', 'test3admin@gmail.com', 3, 9123456789, 'Roxas St.', 'Quezon City', 'Metro Manila', 1113),
(1298004, 'Prada', 'Roy', NULL, 'test4@gmail.com', 4, 9123456789, 'Mimic St.', 'Quezon City', 'Metro Manila', 1233);

-- --------------------------------------------------------

--
-- Table structure for table `blacklisted`
--

CREATE TABLE `blacklisted` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `reason` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laptop_borrowing_request`
--

CREATE TABLE `laptop_borrowing_request` (
  `id` int(20) NOT NULL,
  `stud_id` int(20) NOT NULL,
  `createdAt` date NOT NULL,
  `dateToGo` date NOT NULL,
  `timeToGo` varchar(200) NOT NULL,
  `type` int(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) DEFAULT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` int(20) NOT NULL,
  `course` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL,
  `year` int(3) NOT NULL,
  `contact` int(20) NOT NULL,
  `qc_resident` int(3) NOT NULL,
  `type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `lname`, `fname`, `mname`, `street`, `city`, `state`, `zip`, `course`, `section`, `year`, `contact`, `qc_resident`, `type`) VALUES
(190830, 'lemuelso091@gmail.com', 'Bernardo', 'Marc', '', 'Sampaguita St.', 'Quezon City', 'Metro Manila', 9, 'bsit', '4I', 3, 2147483647, 1, 1),
(190833, 'lemuelso002@gmail.com', 'Sangalang', 'Angelo', '', 'Makulimlim St.', 'Quezon City', 'Metro Manila', 10, 'bsit', '4I', 4, 2147483647, 1, 1),
(190836, 'lemuelso001@gmail.com', 'Bernardo', 'Marc', '', 'Sampaguita St.', 'Quezon City', 'Metro Manila', 9, 'bsit', '4L', 4, 2147483647, 1, 1),
(190837, 'lemuel.k.costuna.so@gmail.com', 'So', 'Lemuel', 'Costuna', '#8 Roxas St.', 'Quezon City', 'Metro Manila', 1116, 'bsit', '4l', 4, 912345678, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL DEFAULT 'student',
  `pic` varchar(200) NOT NULL,
  `approve` smallint(1) NOT NULL DEFAULT 0,
  `block` smallint(1) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pass`, `email`, `type`, `pic`, `approve`, `block`, `createdAt`) VALUES
(190830, '$2y$10$jLyDb2RghdFBLFsAdQ3ZXOukDPpwAgwAX6UMNbOldOaZ53sGXQXbK', 'lemuelso091@gmail.com', 'student', '', 0, 0, '2022-11-28 14:15:57'),
(190833, '$2y$10$JBmQn4T9id3zmaBf/LCPyOG1nEVuUEqKlOEqFsx9QOm21.oMP86Tu', 'lemuelso002@gmail.com', 'student', '', 0, 0, '2022-11-26 20:50:40'),
(190836, '$2y$10$NSAlHwF/vuSrYMMLAbG.PewBe3KTcja2TnwxhBPtyFYJy8cu05k8O', 'lemuelso001@gmail.com', 'student', '', 0, 0, '2022-11-26 20:56:17'),
(190837, '$2y$10$NSAlHwF/vuSrYMMLAbG.PewBe3KTcja2TnwxhBPtyFYJy8cu05k8O', 'lemuel.k.costuna.so@gmail.com', 'student', '/public/assets/img/uploads/test.jpg', 1, 0, '2022-11-24 23:45:54'),
(1298001, '$2y$10$NSAlHwF/vuSrYMMLAbG.PewBe3KTcja2TnwxhBPtyFYJy8cu05k8O', 'test1admin@gmail.com', 'osas', '/public/assets/img/uploads/channels4_profile.jpg', 1, 0, '2022-11-27 11:42:56'),
(1298002, '$2y$10$NSAlHwF/vuSrYMMLAbG.PewBe3KTcja2TnwxhBPtyFYJy8cu05k8O', 'test2@gmail.com', 'registrar', '', 1, 0, '2022-11-27 11:42:56'),
(1298003, '$2y$10$NSAlHwF/vuSrYMMLAbG.PewBe3KTcja2TnwxhBPtyFYJy8cu05k8O', 'test3admin@gmail.com', 'guidance', '', 1, 0, '2022-11-27 11:44:37'),
(1298004, '$2y$10$NSAlHwF/vuSrYMMLAbG.PewBe3KTcja2TnwxhBPtyFYJy8cu05k8O', 'test4@gmail.com', 'finance', '', 1, 0, '2022-11-27 11:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_eval`
--
ALTER TABLE `account_eval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blacklisted`
--
ALTER TABLE `blacklisted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop_borrowing_request`
--
ALTER TABLE `laptop_borrowing_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `laptop_borrowing_request`
--
ALTER TABLE `laptop_borrowing_request`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
