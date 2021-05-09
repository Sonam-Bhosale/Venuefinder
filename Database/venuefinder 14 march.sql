-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 08:56 AM
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

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `holder_id`, `album_name`, `image_name`, `location`, `created_at`) VALUES
(1, 2, 'Sonam', 'image10.jpg', 'http://localhost/venuefinder/controller/uploads/image10.jpg', '2020-03-03 09:26:15'),
(2, 2, 'Bhagi', 'image1.jpg', 'http://localhost/venuefinder/controller/uploads/image1.jpg', '2020-03-03 10:52:25'),
(3, 2, 'Bhagi', 'image2.jpeg', 'http://localhost/venuefinder/controller/uploads/image2.jpeg', '2020-03-03 10:52:25'),
(4, 2, 'Bhagi', 'image3.jpg', 'http://localhost/venuefinder/controller/uploads/image3.jpg', '2020-03-03 10:52:25'),
(5, 2, 'Bhagi', 'image4.jpeg', 'http://localhost/venuefinder/controller/uploads/image4.jpeg', '2020-03-03 10:52:25'),
(6, 2, 'Bhagi', 'image5.jpg', 'http://localhost/venuefinder/controller/uploads/image5.jpg', '2020-03-03 10:52:25'),
(7, 2, 'Bhagi', 'image6.jpeg', 'http://localhost/venuefinder/controller/uploads/image6.jpeg', '2020-03-03 10:52:25'),
(8, 2, 'Sonam', 'image7.jpg', 'http://localhost/venuefinder/controller/uploads/image7.jpg', '2020-03-03 10:52:25'),
(9, 2, 'Sonam', 'image8.jpg', 'http://localhost/venuefinder/controller/uploads/image8.jpg', '2020-03-03 10:52:25'),
(10, 2, 'sona', 'image1.jpg', 'http://localhost/venuefinder/controller/uploads/i', '2020-03-04 05:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(10) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_details`
--

CREATE TABLE `price_details` (
  `rate_id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` int(10) NOT NULL,
  `eventid` int(10) NOT NULL,
  `subevent_id` int(10) NOT NULL,
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
  `booking_amt` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ac_type` varchar(20) NOT NULL DEFAULT 'Owner',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Deactive',
  `logo` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `views` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_venue`
--

INSERT INTO `register_venue` (`user_id`, `user_name`, `venue_name`, `city`, `mobile`, `booking_amt`, `email`, `address`, `pincode`, `password`, `ac_type`, `created_at`, `updated_at`, `status`, `logo`, `banner_image`, `views`) VALUES
(1, 'Admin', 'Venue Finder', 'Satara', '4444444444', 0, '216326406', '1', 415502, '202cb962ac59075b964b07152d234b70', 'Admin', '2020-01-31 16:28:22', '2020-03-11 04:39:21', 'Active', 'Photo.jpg', 'Photo.jpg', 0),
(14, 'Sonam  Ankush Bhosale', 'Priyanka Multipurpose Hall ', 'Satara', '9820700951', 65000, 'sonam1@gmail.com', 'Near to Narayan Barge Hospital ,MIDC Koragoan ', 415501, '22773e915dbf2fdc9b742e7e1d52b31f', 'Owner', '2020-03-10 03:07:35', '2020-03-09 23:05:53', 'Active', 'image1.jpg', 'image1.jpg', 10);

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
(1, 1, 'sonam', '2020-02-11 08:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plan`
--

CREATE TABLE `subscription_plan` (
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(30) NOT NULL,
  `plan_rate` int(10) NOT NULL,
  `subscription_type` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription_plan`
--

INSERT INTO `subscription_plan` (`plan_id`, `plan_name`, `plan_rate`, `subscription_type`, `created_at`, `updated_at`) VALUES
(1, 'Silver', 100, 'Monthly', '2020-02-22 13:11:17', '0000-00-00 00:00:00'),
(2, 'Gold', 100, 'Monthly', '2020-02-22 13:13:01', '0000-00-00 00:00:00'),
(3, 'Platinum', 100, 'Monthly', '2020-02-22 13:13:01', '0000-00-00 00:00:00'),
(4, 'Silver', 1200, 'Yearly', '2020-02-22 13:11:17', '0000-00-00 00:00:00'),
(5, 'Gold', 1200, 'Yearly', '2020-02-22 13:13:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `venue_details`
--

CREATE TABLE `venue_details` (
  `venue_id` int(10) NOT NULL,
  `venue_info` varchar(300) NOT NULL,
  `chair` int(10) NOT NULL,
  `seating_capacity` int(10) NOT NULL,
  `room` int(10) NOT NULL,
  `parking` varchar(10) NOT NULL,
  `drink_water` varchar(10) NOT NULL,
  `catering` varchar(10) NOT NULL,
  `decoration` varchar(10) NOT NULL,
  `sound_system` varchar(10) NOT NULL,
  `ac_fan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_details`
--

INSERT INTO `venue_details` (`venue_id`, `venue_info`, `chair`, `seating_capacity`, `room`, `parking`, `drink_water`, `catering`, `decoration`, `sound_system`, `ac_fan`) VALUES
(2, 'sonam', 10, 10, 3, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(14, 'This is well done.', 1000, 1000, 5, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `venue_services`
--

CREATE TABLE `venue_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venueid` int(11) NOT NULL,
  `event_id` int(10) NOT NULL,
  `subevent_id` int(10) NOT NULL,
  `venuestyle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_services`
--

INSERT INTO `venue_services` (`id`, `venueid`, `event_id`, `subevent_id`, `venuestyle`) VALUES
(1, 0, 1, 1, ''),
(2, 2, 1, 1, ''),
(3, 2, 2, 2, ''),
(4, 0, 1, 1, ''),
(5, 0, 2, 2, '');

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
(1, 'Nice sonam', '2020-02-11 09:23:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `venue_subscription`
--

CREATE TABLE `venue_subscription` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` int(10) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `payment` varchar(10) NOT NULL DEFAULT 'No',
  `price` int(10) NOT NULL,
  `trans_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_subscription`
--

INSERT INTO `venue_subscription` (`id`, `venue_id`, `plan_id`, `created_at`, `end_date`, `payment`, `price`, `trans_id`) VALUES
(1, 2, 1, '2020-03-04 05:34:21', '2020-03-30 21:29:45', 'Yes', 100, 123);

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
(1, 2, 'Countdown - 7374.mp4', 'CountDown Video', 'mp4', 'http://localhost/venuefinder/videos/Countdown - 7374.mp4', 5, '2020-02-06 14:38:39'),
(3, 5, 'healthy.mp4', 's', 'mp4', 'http://localhost/venuefinder/videos/healthy.mp4', 2, '2020-02-26 06:05:32'),
(4, 2, 'healthy.mp4', 'New Latest Video', 'mp4', 'http://localhost/venuefinder/videos/healthy.mp4', 2, '2020-03-03 11:37:16');

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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

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
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `subevent_master`
--
ALTER TABLE `subevent_master`
  ADD UNIQUE KEY `subevent_id` (`subevent_id`);

--
-- Indexes for table `subscription_plan`
--
ALTER TABLE `subscription_plan`
  ADD UNIQUE KEY `plan_id` (`plan_id`);

--
-- Indexes for table `venue_details`
--
ALTER TABLE `venue_details`
  ADD UNIQUE KEY `venue_id` (`venue_id`);

--
-- Indexes for table `venue_services`
--
ALTER TABLE `venue_services`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `venue_style`
--
ALTER TABLE `venue_style`
  ADD UNIQUE KEY `style_id` (`style_id`),
  ADD UNIQUE KEY `style_id_2` (`style_id`);

--
-- Indexes for table `venue_subscription`
--
ALTER TABLE `venue_subscription`
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subevent_master`
--
ALTER TABLE `subevent_master`
  MODIFY `subevent_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription_plan`
--
ALTER TABLE `subscription_plan`
  MODIFY `plan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venue_services`
--
ALTER TABLE `venue_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venue_style`
--
ALTER TABLE `venue_style`
  MODIFY `style_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venue_subscription`
--
ALTER TABLE `venue_subscription`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
