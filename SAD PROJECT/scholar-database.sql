-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 09:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholar`
--

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `last_name`, `first_name`, `age`, `gender`, `username`, `email`, `pwd`) VALUES
(1, 'a', 'a', 1, 'Male', 'a', 'a@gmail.com', '$2y$10$rkbwnXX/vnAbr/d9CzXokuRKAAj1PhyF3Y87UtVSgNYQtpNN5lc/2'),
(2, 'z', 'z', 11, 'Male', 'z', 'z@gmail.com', '$2y$10$sDXdmckDIbgVCKrsR31ikeO6yIDEL8n.xqsSLq5iy/sxM263OG2aS'),
(3, 'Impact', 'Jean ', 20, 'Female', 'c6jean', 'jean@gmail.com', '$2y$10$i4SHiWvf00RsGF99IvmXMuxWIrj5r61racIpI1zyJwdLYwWV9Pjo6');

-- --------------------------------------------------------

--
-- Table structure for table `scholars`
--

CREATE TABLE `scholars` (
  `scholarsId` int(11) NOT NULL,
  `scholarsLast` varchar(128) NOT NULL,
  `scholarsFirst` varchar(128) NOT NULL,
  `scholarsMI` varchar(128) NOT NULL,
  `scholarsAge` int(3) NOT NULL,
  `scholarsGender` varchar(7) NOT NULL,
  `scholarsAddress` varchar(128) NOT NULL,
  `scholarsBarrangay` varchar(128) NOT NULL,
  `scholarsCity` varchar(128) NOT NULL,
  `scholarsUid` varchar(128) NOT NULL,
  `scholarsEmail` varchar(128) NOT NULL,
  `status` int(2) NOT NULL,
  `scholarspwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholars`
--

INSERT INTO `scholars` (`scholarsId`, `scholarsLast`, `scholarsFirst`, `scholarsMI`, `scholarsAge`, `scholarsGender`, `scholarsAddress`, `scholarsBarrangay`, `scholarsCity`, `scholarsUid`, `scholarsEmail`, `status`, `scholarspwd`) VALUES
(9, 'nakpil', 'alvin', 'n', 20, 'Male', 'Halcon', 'Teresita', 'QC', 'jayvin', 'nakpil@gmail.com', 1, '$2y$10$oEyF7siCexRUqrWGvUVRWuP9qka3F7BjtRwbtm9qOB5cVoy380mHO'),
(10, 'Impact', 'Diluct', 'G', 20, 'Male', 'Dawn Winery', 'Windwail Highland', 'Mondstadt', 'c6diluc', 'diluc@gmail.com', 1, '$2y$10$gFnUgUDziyTVikUIPM56vudQ8kCaaMx1mN2NFTUOzSxDUL4HJQcQu'),
(11, 'Britannia', 'Lelouch', 'Z', 18, 'Male', 'Knightmare', 'Shinkirō', 'NO.11', 'Zero', 'lelouch@gmail.com', 0, '$2y$10$x1xTzFD/e6C8eliCqMP1d.FY0UNpYQyPyWozJyibq0NOdyV.qOIQ6'),
(12, 'Yeager', 'Eren ', 'AOT', 18, 'Male', 'sina', 'Wall Maria', 'paradis', 'Attackform', 'eren@gmail.com', 0, '$2y$10$zRMnguxust8Q7AAvvPLnzOOkeXwYdjrp36JcNBQGUNVu8eO9x2Npa'),
(13, 'Stadtfeld', 'Kallen ', 'G', 18, 'Female', 'section1', 'Ashford Academy', 'No.11', 'redhair', 'kallen@gmail.com', 0, '$2y$10$zeI7juwAjBldzZYTKUHQNeTVcLpH8f1IEkTSOaeT8.avc7XZgduKW'),
(14, 'Fenette', 'Shirley ', 'G', 19, 'Female', 'section1', 'Ashford Academy', 'No.11', 'yellowhair', 'shirley@gmail.com', 0, '$2y$10$0dejoa9goCF8NcpK2q6qcOH9Nk2PJA8z/mjDOA/NWTS7w.g4Uej/.'),
(15, 'Reptile', 'Terminator', 'AI', 41, 'Male', '19', 'Ruined', 'Arena', 'mamamoreptile', 'termi@gmail.com', 0, '$2y$10$k.Ux/3.c74VTvAYjcAQlPeYsApJc22Et8ABrKnPS3Pi6q/Q2AiszS'),
(16, 'Agent', 'Jett', 'V', 26, 'Female', 'RUSH B', 'Ascent ', 'Valorant', 'jettmain', 'jett@gmail.com', 0, '$2y$10$aB0ugoQ2ReQFje8noqKi..hhguxFUcUKTt8Co34ZrzlZlleN4tiSW'),
(17, 'AGENT', 'Reyna', 'V', 28, 'Female', 'RUSH A', 'SPLIT', 'Valorant', 'reynalang', 'reyna@gmail.com', 0, '$2y$10$GGIu3mmJ69Xj1evAwTlzgOy1FufSFy42BqWiw937am0/9MioQYmU2'),
(18, 'example1', 'example1', 'ex', 21, 'Male', 'ex', 'ex', 'ex', 'ex1', 'ex@gmail.com', 0, '$2y$10$FKVNFnXTvXlq4xjL5JLYAOLnY9593AF5fgcNYK6ib5akTmzgIYs0i'),
(19, 'ex2', 'ex2', 'ex', 22, 'Female', 'ex2', 'ex2', 'ex2', 'ex2', 'ex2@gmail.com', 0, '$2y$10$/ADG2YoVjutNSeWYQzqkvOqpao8vlFljMJaQE3qsUX3uJlQpq2JGy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholars`
--
ALTER TABLE `scholars`
  ADD PRIMARY KEY (`scholarsId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scholars`
--
ALTER TABLE `scholars`
  MODIFY `scholarsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
