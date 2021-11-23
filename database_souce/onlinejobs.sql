-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 11:49 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinejobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `job_description` text NOT NULL,
  `job_field` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jId`, `username`, `company_name`, `job_description`, `job_field`, `notes`, `status`) VALUES
(3, 'e', 'ddd', 'IOS Development', 'ddd', 'ddd', 1),
(4, 'e', 'ggg', 'Full Stack Web', 'ff', 'fff', 1),
(5, 'f', 'f', 'f', 'f', 'f', 1),
(6, 'e', 'h', 'Android Development', 'h', 'h', 1),
(7, 'e', 'j', 'Networks', 'j', 'j', 1),
(8, 'e', 'k', 'Networks', 'k', 'k', 1),
(9, 'e', 'l', 'Android Development', 'l', 'l', 1),
(11, 'mostafa', 'o', 'Full Stack Web', 'o', 'o', 1),
(12, 'mostafa', 'y', 'Networks', 'y', 'y', 1),
(13, 'de', 'google', 'Android Development', 'qw', 'qw', 1),
(14, 'de', 'twitter', 'Android Development', 'gh', 'gh', 1),
(15, 'de', 'xnxx', 'Android Development', 'we', 'we', 1),
(16, 'eeee', 'eeeeeeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'Network', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 1),
(17, 'e', 'Facebook', 'Full Stack Web', 'full stack', 'ihhhhhhhhhhhhhhhdfnsnnbfjsbnjrgfjdjan,ma;jnjdaNJBGJNFJBDGHBDGJBFDNJNDJSnJDANJSFNJSFJNGDJGBJDNAGJGNJGNJDGNJDG', 1),
(18, 'teha', 'xnxx', 'Big Data', 'df', 'df', 1),
(19, 'teha', 'xnxx', 'Big Data', 'df', 'df', 1),
(20, 'de', 'asp.net developer', 'Full Stack Web', 'this is asp', 'this is notes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upplied_jobs`
--

CREATE TABLE `upplied_jobs` (
  `uJId` int(11) NOT NULL,
  `jId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upplied_jobs`
--

INSERT INTO `upplied_jobs` (`uJId`, `jId`, `username`, `status`) VALUES
(13, 5, 'pp', 0),
(14, 16, 'pp', 0),
(16, 4, 'pp', 0),
(17, 3, 'pp', 0),
(18, 6, 'pp', 0),
(19, 8, 'pp', 1),
(20, 11, 'pp', 0),
(21, 17, 'pp', 0),
(22, 19, 'pp', 0),
(23, 14, 'pp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `type`, `status`) VALUES
(27, 'ali', 's', 's', 'admin', 1),
(29, 'pp', 'pp', 'pp', 'user', 1),
(30, 'eee', 'e', 'e', 'work_owner', 1),
(31, 'sondos', 'sondos', 'sondos', 'admin', 1),
(32, 'de', 'de', 'de', 'work_owner', 1),
(33, 'tt', 'tt', 'tt', 'user', 0),
(34, 'teha', 'teha', 'teha', 'work_owner', 1),
(35, 'rrrr', 'rrrr', 'rr', 'user', 0),
(36, 'yu', 'yu', 'yu', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jId`);

--
-- Indexes for table `upplied_jobs`
--
ALTER TABLE `upplied_jobs`
  ADD PRIMARY KEY (`uJId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `upplied_jobs`
--
ALTER TABLE `upplied_jobs`
  MODIFY `uJId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
