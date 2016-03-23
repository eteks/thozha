-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 07:44 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- Database: `thozha`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `created` varchar(250) DEFAULT '0000-00-00 00:00:00',
  `fullname` varchar(100) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL,
  `modified` varchar(250) DEFAULT NULL,
  `parent` varchar(50) DEFAULT NULL,
  `profile_picture_url` varchar(255) DEFAULT NULL,
  `upvote_count` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `content`, `created`, `fullname`, `id`, `modified`, `parent`, `profile_picture_url`, `upvote_count`) VALUES
(23, 'Hi', '2016-03-20T15:34:01.114Z', '', 'c1', '2016-03-20T15:34:01.114Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(24, 'Choooo sweet nagajuna', '2016-03-20T15:36:38.083Z', '', 'c2', '2016-03-20T15:36:38.083Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(25, 'The trailer seems to be awesome', '2016-03-20T15:54:29.815Z', '', 'c3', '2016-03-20T15:54:29.815Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(26, 'Nice pic', '2016-03-20T16:01:25.018Z', '', 'c4', '2016-03-20T16:01:25.018Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(27, 'nice images\n', '2016-03-20T16:42:30.257Z', '', 'c5', '2016-03-20T16:42:30.257Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(28, 'One good movie to watch\n', '2016-03-21T04:48:11.386Z', '', 'c6', '2016-03-21T04:48:11.386Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(29, 'watched the trailer .. semms to be more centimental.... different try from karthikÂ ', '2016-03-21T06:05:18.834Z', '', 'c7', '2016-03-21T06:05:18.834Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(30, 'Waiting for the show\n', '2016-03-21T12:42:12.626Z', '', 'c8', '2016-03-21T12:42:12.626Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(31, 'After a longtime ,great telugu legand nagarjuna back to tamil cinema , So we expect a lot in this movie , So I m Waitng', '2016-03-21T12:47:27.154Z', '', 'c9', '2016-03-21T12:47:27.154Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(32, 'Hope for a grand success', '2016-03-21T14:40:18.408Z', '', 'c10', '2016-03-21T14:40:18.408Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(33, 'selfie pulaÂ ', '2016-03-22T06:40:47.154Z', '', 'c11', '2016-03-22T06:40:47.154Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(34, 'Looks to be a promising movie', '2016-03-22T11:37:11.892Z', '', 'c12', '2016-03-22T11:37:11.892Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0),
(35, 'puvi', '2016-03-22T15:18:11.883Z', '', 'c13', '2016-03-22T15:18:11.883Z', '', 'https://app.viima.com/static/media/user_profiles/user-icon.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `contest_id` int(10) NOT NULL,
  `contest_name` varchar(50) NOT NULL,
  `contest_email` varchar(250) NOT NULL,
  `contest_mobile` bigint(22) NOT NULL,
  `contest_comment` varchar(250) NOT NULL,
  `contest_image` varchar(250) NOT NULL,
  `contest_status` tinyint(1) NOT NULL,
  `contest_create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`contest_id`, `contest_name`, `contest_email`, `contest_mobile`, `contest_comment`, `contest_image`, `contest_status`, `contest_create_date`) VALUES
(2, 'adudeepak', 'deepak@gmail.com', 1234567890, 'deepak', 'uploads/original/22.jpg', 1, '2016-03-20 03:28:42'),
(3, 'jagf;ggg', 'deepak1@gmail.com', 1234909869, 'kjdgphdggsg', 'uploads/original/22.jpg', 1, '2016-03-20 03:31:42'),
(4, 'asdfsadfsdafsa', 'sfasdf@sdgd.com', 5655433453, '', 'uploads/original/9_t.jpg', 1, '2016-03-20 07:22:00'),
(5, 'Rfggh', 'Ghjhf@gmail.com', 5666445677, 'Fghjncg', 'uploads/original/FB_IMG_1457119271731.jpg', 1, '2016-03-20 08:21:47'),
(6, 'SSH fgvd', 'Dee@gmail.com', 3335566777, 'Dxcsvdvx', 'uploads/original/IMG_20160307_224308.jpg', 1, '2016-03-20 08:24:23'),
(7, 'pondy', 'devi123@atomicka.com', 9600880221, 'test', 'uploads/original/2.jpg', 1, '2016-03-20 10:23:28'),
(8, 'Pondy', 'Mtvinu106@gmail.com', 8940400938, 'I need', 'uploads/original/arton304-cc832.jpg', 1, '2016-03-20 10:38:35'),
(9, 'Chennai', 'Puvi123@gmail.com', 7299294978, '', 'uploads/original/image.jpg', 1, '2016-03-20 10:48:22'),
(10, 'Pondicherry', 'r.vassu@gmail.com', 9524884678, 'Trailer Nice', 'uploads/original/IMG_20160103_155720.jpg', 1, '2016-03-21 04:26:08'),
(11, 'Puducherry', 'vassu_ziczac@hotmail.com', 9941677722, 'Trailer nice', 'uploads/original/145855436871931752962.jpg', 1, '2016-03-21 04:36:31'),
(12, 'Pondicherry', 'asai.lh.vicky@gmail.com', 960066258, 'Supreeee', 'uploads/original/IMG_20160321_174332.jpg', 1, '2016-03-21 07:00:22'),
(13, 'pondicherry', 'agnespreethy@gmail.com', 8870349337, 'amazing ', 'uploads/original/BestMe_20160321165325.jpg', 1, '2016-03-21 07:42:10'),
(14, 'pondicherry', 'kayalvizhi615@gmail.com', 8220201417, 'Wow Fantastic!!!!!!!!!!!!!!!!!!\r\nLol', 'uploads/original/BestMe_20160321165314.jpg', 1, '2016-03-21 07:44:39'),
(15, 'Pondicherry', 'bavani@atomicka.com', 9994214014, 'Eagerly Waiting. . . .!!!!! Thozha will hit blockbuster movie in this 2016. . . ðŸ™Œ', 'uploads/original/BestMe_20160321165347.jpg', 1, '2016-03-21 08:44:44'),
(16, 'Pondicherry', 'bhavii92@gmail.com', 9629553947, 'Wooow. . wat a group form . . . nagarjuna,karthi,thamana, prakashrajðŸ‘ðŸ˜. . super dooper movie. . !!!!', 'uploads/original/BestMe_20160321165717.jpg', 1, '2016-03-21 08:53:33'),
(17, 'Pondy', 'Test@atomicka.com', 1134567654, 'Really nice', 'uploads/original/image.jpeg', 1, '2016-03-21 11:17:17'),
(18, 'Chennai ', 'Info@atomicka.com', 8765934562, 'The movie is expected to be really gud', 'uploads/original/image.jpeg', 1, '2016-03-21 11:20:19'),
(19, 'Pondy', 'Thozha@atomicka.com', 7646735641, 'Karthi is really gud', 'uploads/original/image.jpeg', 1, '2016-03-21 11:22:51'),
(20, 'Pondy', 'Family@atomicka.com', 7685674631, 'Friendship as family', 'uploads/original/image.jpeg', 1, '2016-03-21 11:24:55'),
(21, 'puducherry', 'pg_samy70@yahoo.com', 9442067779, 'Pray god for its success and for the prosperity of da people behind the screen', 'uploads/original/20151129_133942.jpg', 1, '2016-03-21 11:38:00'),
(22, 'PONDICHERRY', 'bibin.t.joy@gmail.com', 9480237223, '', 'uploads/original/WP_20150606_015.jpg', 1, '2016-03-22 05:11:39'),
(23, 'puducherry', 'saisasthaa@gmail.com', 9786243201, 'please find me in the photo', 'uploads/original/selfiee.jpg', 1, '2016-03-22 08:21:40'),
(24, 'Pondy', 'Dee@1.com', 1233456678, 'Pondy', 'uploads/original/14586571514791870438541.jpg', 1, '2016-03-22 09:03:26'),
(25, 'chennai/tamilnadu', 'bipinb1991@gmail.com', 8939812147, 'Puvi ', 'uploads/original/IMG_20160206_183912.jpg', 1, '2016-03-22 09:48:55'),
(26, 'Chennai/tamilnadu', 'arunk900@gmail.com', 9940154058, 'Puvi', 'uploads/original/FB_IMG_1458660060687.jpg', 1, '2016-03-22 09:52:22'),
(27, 'chennai,tamilnadu', 'jayagopal.1977@gmail.com', 9841722228, 'i saw the trailer it was awesome and it is a great oppurtunity offered and thanks . - puvi', 'uploads/original/14586604947751872470492.jpg', 1, '2016-03-22 09:58:45'),
(28, 'chennai,tamilnadu', 'jayagopal.1977@gmail.com', 9841722228, 'i saw the trailer it was awesome and it is a great oppurtunity offered and thanks . - puvi', 'uploads/original/14586604947751872470492.jpg', 1, '2016-03-22 09:59:04'),
(29, 'chennai,tamilnadu', 'mohangpl2003@gmail.com', 9841722228, 'i saw the trailer it was awesome and it is a great oppurtunity to offer free tickets and thwnks-puvi', 'uploads/original/14586608481621516780225.jpg', 1, '2016-03-22 10:06:57'),
(30, 'Chennai/Tamil Nadu', 'Vels043@gmail.com', 9566055906, 'Super trailer bha ', 'uploads/original/IMG_20150426_144812.jpg', 1, '2016-03-22 11:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `related_image`
--

CREATE TABLE `related_image` (
  `related_image_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_image`
--

INSERT INTO `related_image` (`related_image_id`, `category_id`, `image`, `status`, `created_date`) VALUES
(1, 0, '983791.jpg', 1, '2016-03-20 03:24:26'),
(2, 0, '843302.jpg', 1, '2016-03-20 03:24:26'),
(3, 0, '872563.jpg', 1, '2016-03-20 03:24:26'),
(4, 0, '598834.jpg', 1, '2016-03-20 03:25:26'),
(5, 0, '233695.jpg', 1, '2016-03-20 03:25:26'),
(6, 0, '308716.jpg', 1, '2016-03-20 03:25:26'),
(7, 0, '51837.jpg', 1, '2016-03-20 03:26:38'),
(8, 0, '517078.jpg', 1, '2016-03-20 03:26:38'),
(9, 0, '731209.jpg', 1, '2016-03-20 03:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `related_video`
--

CREATE TABLE `related_video` (
  `related_video_id` int(10) NOT NULL,
  `video_url` varchar(1000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_video`
--

INSERT INTO `related_video` (`related_video_id`, `video_url`, `status`, `created_date`) VALUES
(9, 'SvmARaZhA8M', 1, '2016-03-20 03:19:35'),
(10, 'zZ56bTZtKlA', 1, '2016-03-20 03:19:47'),
(11, 'EaxHnDbsfws', 1, '2016-03-20 03:20:00');

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `related_image`
--
ALTER TABLE `related_image`
  ADD PRIMARY KEY (`related_image_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `related_video`
--
ALTER TABLE `related_video`
  ADD PRIMARY KEY (`related_video_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `contest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `related_image`
--
ALTER TABLE `related_image`
  MODIFY `related_image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `related_video`
--
ALTER TABLE `related_video`
  MODIFY `related_video_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
