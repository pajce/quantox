-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 10:52 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `school_board` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `grade_1` int(11) DEFAULT NULL,
  `grade_2` int(11) DEFAULT NULL,
  `grade_3` int(11) DEFAULT NULL,
  `grade_4` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `school_board`, `grade_1`, `grade_2`, `grade_3`, `grade_4`) VALUES
(1, 'Petar', 'CSM', 6, 7, 8, 9),
(2, 'Marko', 'CSM', 8, 7, 8, NULL),
(3, 'Janko', 'CSMB', 9, 8, 8, 8),
(4, 'Tijana', 'CSMB', 8, 7, 9, NULL),
(5, 'Jovana', 'CSMB', 6, NULL, NULL, NULL),
(6, 'Mirko', 'CSM', 7, 6, 6, 7),
(7, 'Dragana', 'CSMB', 8, 8, 8, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
