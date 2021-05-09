-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 05:46 PM
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
-- Table structure for table `book_venue`
--

CREATE TABLE `book_venue` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `transaction_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_venue`
--

INSERT INTO `book_venue` (`book_id`, `venue_id`, `event_name`, `user_id`, `booking_date`, `payment`, `transaction_id`) VALUES
(3, 9, 'vitthal Mangalam', 1, '2020-03-11', '', 0),
(4, 9, 'vitthal Mangalam', 2, '2020-03-11', '', 0),
(5, 14, 'ww', 2, '20-03-2019', 'Yes', 0);

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `holder_id` int(11) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `holder_id`, `album_name`, `image_name`, `location`, `created_at`, `likes`) VALUES
(1, 2, 'Sonam', 'image10.jpg', 'http://localhost/venuefinder/controller/uploads/image10.jpg', '2020-03-03 09:26:15', 0),
(2, 2, 'Bhagi', 'image1.jpg', 'http://localhost/venuefinder/controller/uploads/image1.jpg', '2020-03-03 10:52:25', 0),
(3, 2, 'Bhagi', 'image2.jpeg', 'http://localhost/venuefinder/controller/uploads/image2.jpeg', '2020-03-03 10:52:25', 0),
(4, 2, 'Bhagi', 'image3.jpg', 'http://localhost/venuefinder/controller/uploads/image3.jpg', '2020-03-03 10:52:25', 0),
(5, 2, 'Bhagi', 'image4.jpeg', 'http://localhost/venuefinder/controller/uploads/image4.jpeg', '2020-03-03 10:52:25', 0),
(6, 2, 'Bhagi', 'image5.jpg', 'http://localhost/venuefinder/controller/uploads/image5.jpg', '2020-03-03 10:52:25', 0),
(7, 2, 'Bhagi', 'image6.jpeg', 'http://localhost/venuefinder/controller/uploads/image6.jpeg', '2020-03-03 10:52:25', 0),
(8, 2, 'Sonam', 'image7.jpg', 'http://localhost/venuefinder/controller/uploads/image7.jpg', '2020-03-03 10:52:25', 0),
(9, 2, 'Sonam', 'image8.jpg', 'http://localhost/venuefinder/controller/uploads/image8.jpg', '2020-03-03 10:52:25', 0),
(10, 2, 'sona', 'image1.jpg', 'http://localhost/venuefinder/controller/uploads/i', '2020-03-04 05:43:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`user_id`, `user_name`, `mobile`, `address`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Bhagyashree', '7219743775', 'satara', '202cb962ac59075b964b07152d234b70', '', '2020-03-21 03:38:22', '0000-00-00'),
(2, 'Sonam', '8380905672', 'satara', '202cb962ac59075b964b07152d234b70', '', '2020-03-21 03:38:22', '0000-00-00'),
(3, 'Shruti', '7485968574', 'satara', 'fcea920f7412b5da7be0cf42b8c93759', '', '2020-03-21 03:38:22', '0000-00-00');

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
  `views` int(10) NOT NULL,
  `ip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_venue`
--

INSERT INTO `register_venue` (`user_id`, `user_name`, `venue_name`, `city`, `mobile`, `booking_amt`, `email`, `address`, `pincode`, `password`, `ac_type`, `created_at`, `updated_at`, `status`, `logo`, `banner_image`, `views`, `ip`) VALUES
(1, 'Admin', 'Venue Finder', 'Satara', '4444444444', 0, '216326406', '1', 415502, '202cb962ac59075b964b07152d234b70', 'Admin', '2020-01-31 16:28:22', '2020-03-11 04:39:21', 'Active', 'Photo.jpg', 'Photo.jpg', 0, ''),
(14, 'Sonam  Ankush Bhosale', 'Priyanka Multipurpose Hall ', 'Satara', '1111111111', 65000, 'sonam1@gmail.com', 'Near to Narayan Barge Hospital ,MIDC Koragoan ', 415501, '22773e915dbf2fdc9b742e7e1d52b31f', 'Owner', '2020-03-10 03:07:35', '2020-03-18 22:30:47', 'Active', 'image2.jpeg', 'image1.jpg', 10, ''),
(15, 'sonam', 'Fulai Mangal ', 'Satara', '1234567890', 20000, 'sonam@gmail.com', 'adsfsf', 415501, '22773e915dbf2fdc9b742e7e1d52b31f', 'Owner', '2020-03-14 16:51:37', NULL, 'Deactive', 'image1.jpg', 'image2.jpeg', 0, ''),
(27, 'v', 'v', 'Satara', '1234565434', 1234, 'sonam23@gmail.com', 's', 123256, '22773e915dbf2fdc9b742e7e1d52b31f', 'Owner', '2020-03-15 07:16:12', NULL, 'Deactive', 'image1.jpg', 'image2.jpeg', 0, '::1'),
(28, 'sona', 'sona', 'Satara', '1236789098', 12345, 'sp@gmail.com', 'Satara', 415501, '22773e915dbf2fdc9b742e7e1d52b31f', 'Owner', '2020-03-15 07:20:32', NULL, 'Deactive', 'image1.jpg', 'image2.jpeg', 0, '::1');

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
  `ac_fan` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_details`
--

INSERT INTO `venue_details` (`venue_id`, `venue_info`, `chair`, `seating_capacity`, `room`, `parking`, `drink_water`, `catering`, `decoration`, `sound_system`, `ac_fan`, `created_at`, `updated_at`) VALUES
(2, 'sonam', 10, 10, 3, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '2020-03-15 05:40:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `venue_enquires`
--

CREATE TABLE `venue_enquires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `booking_date` varchar(11) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `token` varchar(10) NOT NULL,
  `quotation_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_enquires`
--

INSERT INTO `venue_enquires` (`id`, `user_id`, `venue_id`, `event_name`, `booking_date`, `requirement`, `token`, `quotation_rate`) VALUES
(19, 1, 12, '', '2020-03-25', 'wedding hall with all facilities', 'G271paZs1b', 50000),
(22, 2, 12, '', '2020-03-25', 'wedding hall with all facilities', 'G271paZs1b', 50000),
(23, 2, 14, '', '2020-03-25', 'wedding hall with all facilities', 'G271paZs1b', 50000),
(24, 1, 14, '', '2020-03-25', 'wedding hall with all facilities', 'G271paZs1b', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `venue_plan`
--

CREATE TABLE `venue_plan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_plan`
--

INSERT INTO `venue_plan` (`id`, `venue_id`, `plan_id`, `payment`, `status`, `start`, `end`) VALUES
(1, 9, 1, 100, 'Active', '2020-03-09 02:51:47', '0000-00-00 00:00:00'),
(2, 10, 2, 50, 'Active', '2020-03-09 03:03:40', '0000-00-00 00:00:00'),
(3, 11, 2, 50, 'Active', '2020-03-09 03:03:40', '0000-00-00 00:00:00'),
(4, 12, 1, 100, 'Active', '2020-03-09 03:03:40', '0000-00-00 00:00:00');

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
-- Indexes for table `book_venue`
--
ALTER TABLE `book_venue`
  ADD UNIQUE KEY `id` (`book_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `register_venue`
--
ALTER TABLE `register_venue`
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

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
-- Indexes for table `venue_enquires`
--
ALTER TABLE `venue_enquires`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `venue_plan`
--
ALTER TABLE `venue_plan`
  ADD UNIQUE KEY `book_id` (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_venue`
--
ALTER TABLE `book_venue`
  MODIFY `book_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `user_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_venue`
--
ALTER TABLE `register_venue`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subscription_plan`
--
ALTER TABLE `subscription_plan`
  MODIFY `plan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `venue_enquires`
--
ALTER TABLE `venue_enquires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `venue_plan`
--
ALTER TABLE `venue_plan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
