-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 07:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venuefinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'bhagyashree', 'b18shinde@gmail.com', '7485968574', 'Good', '2020-02-06 12:18:37'),
(2, 'w', 'w@GMAIL.COM', '1W', 'W', '2020-02-07 04:37:18'),
(3, 'ajit', 'ajit@gmail.com', '7485968574', 'Good', '2020-02-07 04:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_desc` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`event_id`, `event_name`, `event_desc`, `created_at`, `updated_at`) VALUES
(1, 'Social Event', 'social event', '2020-02-11 07:07:12', '0000-00-00 00:00:00'),
(2, 'Informal Event', 'informal event', '2020-02-11 07:08:21', '0000-00-00 00:00:00'),
(3, 'a', 'a', '2020-02-11 07:13:45', '0000-00-00 00:00:00'),
(4, 's', 'S', '2020-02-11 07:15:39', '0000-00-00 00:00:00'),
(5, 'sonam', 'sonam', '2020-02-11 07:16:48', '0000-00-00 00:00:00'),
(6, 'sonam', 'sonam', '2020-02-11 07:17:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `holder_id` int(11) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_details`
--

CREATE TABLE `price_details` (
  `rate_id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` int(10) NOT NULL,
  `eventid` int(10) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `user_id` int(20) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`user_id`, `user_name`, `mobile`, `address`, `password`) VALUES
(1, 'Bhagyashree', '7219743775', 'satara', '202cb962ac59075b964b07152d234b70'),
(2, 'Sonam', '8380905672', 'satara', '202cb962ac59075b964b07152d234b70'),
(3, 'Shruti', '7485968574', 'satara', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `register_venue`
--

CREATE TABLE `register_venue` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `venue_name` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL DEFAULT 'Satara',
  `mobile` varchar(10) NOT NULL,
  `land_line` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ac_type` varchar(20) NOT NULL DEFAULT 'Owner',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Deactive',
  `logo` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_venue`
--

INSERT INTO `register_venue` (`user_id`, `user_name`, `venue_name`, `city`, `mobile`, `land_line`, `address`, `pincode`, `password`, `ac_type`, `created_at`, `updated_at`, `status`, `logo`, `banner_image`) VALUES
(1, 'Admin', 'Venue Finder', 'Satara', '8380905672', 216326406, '1', 415502, '12345', 'Admin', '2020-01-31 16:28:22', NULL, 'Active', '', ''),
(2, 'sonam', 'sonam', 'Satara', '123456789', 1234567890, 'sataar', 123456, '', 'Owner', '2020-02-01 03:14:16', NULL, 'Active', 'Signature.jpg', ''),
(3, 'Bhagyahsree', 'Yashoda', 'Satara', '1234554321', 123, 'Satara', 123, '', 'Owner', '2020-02-01 05:25:43', NULL, 'Active', 'No image', ''),
(4, 'Sonam', 'Yashoda', 'Satara', '1234554321', 1111111, 'Satara', 415501, 'fcea920f7412b5da7be0cf42b8c93759', 'Owner', '2020-02-08 14:46:08', NULL, 'Deactive', 'Photo.jpg', ''),
(5, 'Sonam', 'Yashoda', 'Satara', '1234554321', 1111111, 'Satara', 415501, 'adbc91a43e988a3b5b745b8529a90b61', 'Owner', '2020-02-08 14:47:20', NULL, 'Active', '', ''),
(6, 'Sai', 'YSPM', 'Satara', '1111111111', 123456, '12sd', 123456, 'fcea920f7412b5da7be0cf42b8c93759', 'Owner', '2020-02-08 14:50:30', NULL, 'Active', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subevent_master`
--

CREATE TABLE `subevent_master` (
  `subevent_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` int(10) NOT NULL,
  `subevent_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subevent_master`
--

INSERT INTO `subevent_master` (`subevent_id`, `event_id`, `subevent_name`, `created_at`) VALUES
(1, 1, 'sonam', '2020-02-11 08:49:53'),
(2, 2, 's', '2020-02-12 09:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `venue_details`
--

CREATE TABLE `venue_details` (
  `venue_id` int(10) NOT NULL,
  `venue_info` varchar(300) NOT NULL,
  `chair` int(10) NOT NULL,
  `seating_capacity` int(10) NOT NULL,
  `parking` varchar(10) NOT NULL,
  `drink_water` varchar(10) NOT NULL,
  `catering` varchar(10) NOT NULL,
  `decoration` varchar(10) NOT NULL,
  `sound_system` varchar(10) NOT NULL,
  `ac_fan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue_services`
--

CREATE TABLE `venue_services` (
  `venueid` int(11) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `venuestyle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue_style`
--

CREATE TABLE `venue_style` (
  `style_id` bigint(20) UNSIGNED NOT NULL,
  `style_name` varchar(100) NOT NULL,
  `created-at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_style`
--

INSERT INTO `venue_style` (`style_id`, `style_name`, `created-at`, `updated_at`) VALUES
(1, 'Nice s', '2020-02-11 09:23:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `holder_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `location` varchar(500) NOT NULL,
  `likes` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `holder_id`, `name`, `description`, `extension`, `location`, `likes`, `created_at`) VALUES
(1, 0, 'Countdown - 7374.mp4', 'CountDown Video', 'mp4', 'http://localhost/venuefinder/videos/Countdown - 7374.mp4', 5, '2020-02-06 14:38:39'),
(2, 0, 'Laravel QR Code generator and login.mp4', 'sonam', 'mp4', 'http://localhost/venuefinder/videos/Laravel QR Code generator and login.mp4', 0, '2020-02-06 15:17:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `image_id` (`image_id`);

--
-- Indexes for table `price_details`
--
ALTER TABLE `price_details`
  ADD UNIQUE KEY `rate_id` (`rate_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `register_venue`
--
ALTER TABLE `register_venue`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `subevent_master`
--
ALTER TABLE `subevent_master`
  ADD UNIQUE KEY `subevent_id` (`subevent_id`);

--
-- Indexes for table `venue_style`
--
ALTER TABLE `venue_style`
  ADD UNIQUE KEY `style_id` (`style_id`),
  ADD UNIQUE KEY `style_id_2` (`style_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price_details`
--
ALTER TABLE `price_details`
  MODIFY `rate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `user_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_venue`
--
ALTER TABLE `register_venue`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subevent_master`
--
ALTER TABLE `subevent_master`
  MODIFY `subevent_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venue_style`
--
ALTER TABLE `venue_style`
  MODIFY `style_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
