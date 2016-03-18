-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 09:15 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thozha`
--

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `contest_id` int(10) NOT NULL,
  `contest_name` varchar(50) NOT NULL,
  `contest_email` varchar(250) NOT NULL,
  `contest_mobile` int(11) NOT NULL,
  `contest_comment` varchar(250) NOT NULL,
  `contest_image` varchar(250) NOT NULL,
  `contest_status` tinyint(1) NOT NULL,
  `contest_create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`contest_id`, `contest_name`, `contest_email`, `contest_mobile`, `contest_comment`, `contest_image`, `contest_status`, `contest_create_date`) VALUES
(12, '', 'test@gmail.com', 2147483647, 'teststestest', 'uploads/Desert.jpg', 1, '2016-03-18 08:16:25'),
(13, '', 'test@gmail.com', 2147483647, 'teststestest', 'uploads/Desert.jpg', 1, '2016-03-18 08:17:15'),
(14, '', 'asdfasdf@sgfsa.com', 2147483647, 'asdfasdfa sdfgasdfasdf', 'uploads/Penguins.jpg', 1, '2016-03-18 08:27:38'),
(15, '', 'asdfkjkasjdflksj@gmail.com', 2147483647, 'asdfasdfasdfasdf', 'uploads/Koala.jpg', 1, '2016-03-18 08:32:32'),
(16, '', 'testtest@gmail.com', 2147483647, 'qerqwerqwre', 'uploads/Hydrangeas.jpg', 1, '2016-03-18 08:34:33'),
(17, '', 'sfgas@fasdf.com', 0, 'asdfasdf', 'uploads/Lighthouse.jpg', 1, '2016-03-18 09:09:11'),
(18, '', 'asdfasd@dfgsg.com', 2147483647, 'asdxczvcxzv', 'uploads/Tulips.jpg', 1, '2016-03-18 09:09:27'),
(19, '', 'asdfasdfwe@sdfgfsd.com', 0, 'werwerwer', 'uploads/Chrysanthemum.jpg', 1, '2016-03-18 09:09:43'),
(20, '', 'dfgsfg@sdfsdf.com', 2147483647, 'asdfasdfdasfas', 'uploads/Desert.jpg', 1, '2016-03-18 09:10:41'),
(21, '', 'asdfasdf@sfgsdf.com', 2147483647, 'asdfasdfasd', 'uploads/Koala.jpg', 1, '2016-03-18 09:10:55'),
(22, '', 'xsdfgasdfga@dfgdsfg.com', 0, 'asdfasdf', 'uploads/Hydrangeas.jpg', 1, '2016-03-18 09:11:31'),
(23, '', 'test@gmail.com', 2147483647, 'test', 'uploads/Tulips.jpg', 1, '2016-03-18 11:29:54'),
(24, '', 'asdfasdf@sgfsa.com', 2147483647, 'asdfasdf', 'uploads/Penguins.jpg', 1, '2016-03-18 15:13:21'),
(25, 'ewrawr', 'testtest@test.com', 2147483647, 'asdfasdfasd', 'uploads/Desert.jpg', 1, '2016-03-18 19:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone_number` bigint(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `region` varchar(60) NOT NULL,
  `city` varchar(100) NOT NULL,
  `activation` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `classes` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `username`, `password`, `firstname`, `lastname`, `phone_number`, `email`, `photo`, `description`, `gender`, `region`, `city`, `activation`, `created_date`, `status`, `classes`) VALUES
(21, 'admin', 'admin', 'admin', 'admin', 'admin', 9786243201, 'admin@gmail.com', '', '', 1, 'WS', '10', '0', '2016-03-18 07:55:29', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `contest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
