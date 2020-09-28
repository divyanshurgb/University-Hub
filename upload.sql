-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 07:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `size` int(250) NOT NULL,
  `file_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `type`, `subject`, `topic`, `email`, `file_name`, `size`, `file_type`) VALUES
(1, 'Notes', 'maths', 'a', 'mak', '12-Physics-CBSE-Exam-Papers-2018-Set-1.pdf', 0, ''),
(2, 'Question paper', 'maths', 'b', 'AOI', '12-Physics-CBSE-Exam-Papers-2018-Set-1-Marking-Scheme.pdf', 0, ''),
(3, 'Question paper', 'matha', 'c', 'cdh', '12-Physics-CBSE-Sample-Papers-2019.pdf', 0, ''),
(4, '', '', '', '', '12-Physics-CBSE-Sample-Papers-2019.pdf', 0, ''),
(5, 'Notes', 'wlfi', 'lkjefwln', 'efwlk', 'Chapter3-Control-Unit.pdf', 0, ''),
(6, 'Ebook', 'ediho', 'oih', 'ldknfc', 'zonal-tech-fest-2019_plK4AROWJJstMCZmIAxp.pdf', 0, ''),
(7, 'Ebook', 'ediho', 'oih', 'ldknfc', 'coa unit3.pdf', 10, ''),
(9, 'Ebook', 'ediho', 'oih', 'ldknfc', 'dstl st2.pdf', 59, 'application/pdf'),
(10, 'Ebook', 'lh', 'hfy', 'jyg', 'dstl st2_2.pdf', 59, 'application/pdf'),
(11, 'Ebook', 'lh', 'hfy', 'jyg', 'dstl st2_2.pdf', 59, 'application/pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
