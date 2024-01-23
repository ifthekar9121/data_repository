-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 03:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_repository`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasets`
--

CREATE TABLE `datasets` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `summery` varchar(255) DEFAULT NULL,
  `characteristics` text DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `task` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `uploadDate` date DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `visibility` int(11) NOT NULL COMMENT '1=public, 2=private',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=rejected, 1=pending, 2=approved\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datasets`
--

INSERT INTO `datasets` (`id`, `title`, `summery`, `characteristics`, `subject`, `task`, `type`, `file`, `uploadDate`, `userID`, `visibility`, `status`) VALUES
(8, 'tfgy', 'fgvc bn', 'tabular', 'business', 'regression', 'categorical', NULL, '2024-01-22', 68, 1, 2),
(9, 'tfgy', 'jhyk,', 'sequential', 'computer', 'clustering, other', 'integer', NULL, '2024-01-22', 68, 1, 2),
(10, 'asdf', 'asdfa', 'multivariate', 'engineering', 'other', 'categorical', NULL, '2024-01-22', 68, 1, 2),
(11, 'adf', 'asdfa', 'multivariate', 'games', 'other', 'categorical', NULL, '2024-01-22', 68, 1, 2),
(12, 'asdf', 'asdfa', 'image', 'business', 'classification', 'categorical', NULL, '2024-01-22', 68, 1, 2),
(13, 'asdf', 'asdf', 'tabular', 'health', 'other', 'categorical', NULL, '2024-01-22', 68, 1, 2),
(14, 'asdf', 'sdfg', 'time-series', 'engineering', 'regression', 'integer', NULL, '2024-01-22', 68, 1, 2),
(15, 'asf', 'asdf', 'multivariate', 'business', 'regression', 'integer', NULL, '2024-01-22', 68, 1, 2),
(16, 'sfg', 'sdfg', 'spatiotemporal', 'computer', 'classification', 'integer', NULL, '2024-01-22', 68, 1, 2),
(17, 'af', 'adfs', 'tabular', 'biology', 'other', 'integer', NULL, '2024-01-22', 68, 1, 2),
(18, 'af', 'cvzxcv', 'multivariate', 'law', 'other', 'integer', NULL, '2024-01-22', 68, 1, 2),
(19, 'asf', 'xfgsxg', 'tabular', 'biology', 'other', 'categorical', NULL, '2024-01-22', 68, 1, 2),
(20, 'test', 'test description', 'tabular, image', 'biology', 'classification', 'real', NULL, '2024-01-22', 68, 1, 2),
(21, 'test 2', 'fddddddddddddddddddddddddddddddddddddddddddg', 'tabular, image', 'biology', 'classification', 'categorical', NULL, '2024-01-23', 68, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `userRole` int(11) NOT NULL DEFAULT 2 COMMENT '1=admin, 2=user',
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userRole`, `userName`, `password`, `phone`, `institution`) VALUES
(64, 'Ifthekar Alam', 1, 'admin@gmail.com', '$2y$10$nM7A5eWqb7.Jy361oyVlkOWLsRr.tenNcmxm4hDV7ppIaEw4BTRFa', '', ''),
(65, 'Badhon', 2, 'bad@gmail.com', '$2y$10$hgI.LabV.fU3Gqt7DlZeKOqFm3zKkitMH3/UW.1e6l9r0GXBhukqy', '01756273593', 'UIU'),
(66, 'Hasib', 2, 'hasib@gmail.com', '$2y$10$g/0C22C6wjlx7r3ArBD5quCUgnQAbRXV7Uk3VtfeiI6LvpsH2MK.u', '01710358907', 'UIU'),
(67, 'Proshanta Kumer', 2, 'pro@gmail.com', '$2y$10$nKaVpTaHLoNoqoRL1EyM8Oa2l9W3.ORrr7YUAyF9sQG6jq4pHopv6', '01515619994', 'UIU'),
(68, 'Sina', 2, 'sina@gmail.com', '$2y$10$CrG79vVMRg8EwPZvUyr8ye/Lf6cBsEc1JFXkA49zNIp/vwZ.mzrR2', '01837159130', 'UIU'),
(69, 'fggfh', 2, 'a@m.k', '$2y$10$rsyoe6w9IaDhy5nyEAHmeu2ar6Slm28dg12OYzbAR0X.O5jORzO2i', '0175745', 'uiu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasets`
--
ALTER TABLE `datasets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasets`
--
ALTER TABLE `datasets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
