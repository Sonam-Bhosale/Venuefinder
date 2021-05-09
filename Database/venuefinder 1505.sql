-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 01:28 PM
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
  `book_id` varchar(20) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `session` varchar(30) NOT NULL,
  `advance_payment` int(10) NOT NULL,
  `remain_payment` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `event_status` varchar(20) NOT NULL DEFAULT 'Reserved',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_venue`
--

INSERT INTO `book_venue` (`book_id`, `venue_id`, `user_id`, `event_name`, `booking_date`, `session`, `advance_payment`, `remain_payment`, `total`, `transaction_id`, `event_status`, `created_at`, `reason`) VALUES
('BID13848', 5, 2, 'Birthday Party', '12-05-2020', 'evening', 1000, 5000, 0, '20200509111212800110168237001521056', 'Confirmed', '2020-05-09 14:30:37', ''),
('BID17277', 2, 3, 'Wedding Ceremony', '12-04-2020', 'fullday', 8000, 72000, 0, '20200312111212800110168332201517089', 'Completed', '2020-03-12 00:41:01', ''),
('BID17477', 2, 1, 'Engagement Ceremony', '30-01-2020', 'morning', 3500, 31500, 0, '20200110111212800110168114801509060', 'Completed', '2020-01-10 06:32:57', ''),
('BID17657', 9, 6, 'Wedding', '28-05-2020', 'fullday', 6000, 54000, 0, '20200430111212800110168510501729639', 'Confirmed', '2020-04-30 00:20:08', ''),
('BID18467', 2, 6, 'Wedding Ceremony', '09-04-2020', 'fullday', 8000, 72000, 0, '20200313111212800110168514901730842', 'Completed', '2020-03-13 02:21:25', ''),
('BID19911', 2, 7, 'Wedding Ceremony', '22-05-2020', 'fullday', 8000, 72000, 0, '20200425111212800110168169801537375', 'Canceled', '2020-04-25 08:01:56', 'Postpone date'),
('BID22581', 4, 5, 'Wedding', '02-05-2020', 'fullday', 6000, 0, 0, '6764', 'Reserved', '2020-04-08 01:41:47', ''),
('BID2353', 5, 5, 'Wedding', '10-06-2020', 'fullday', 6500, 54000, 0, '20200509111212800110168803001523564', 'Canceled', '2020-05-09 08:42:56', 'Family Problem'),
('BID23710', 4, 5, 'Wedding', '02-05-2020', 'fullday', 6000, 0, 0, '15065', 'Reserved', '2020-04-08 01:41:47', ''),
('BID26649', 10, 7, 'Wedding', '25-06-2020', 'fullday', 6000, 54000, 0, '20200520111212800110168509401510555', 'Confirmed', '2020-05-19 23:55:52', ''),
('BID26669', 7, 4, 'Wedding', '16-04-2020', 'fullday', 5000, 45000, 0, '20200310111212800110168888601519942', 'Completed', '2020-03-10 06:35:23', ''),
('BID26811', 4, 5, 'Wedding', '02-05-2020', 'fullday', 6000, 54000, 0, '20200408111212800110168299301529126', 'Completed', '2020-04-08 01:41:47', ''),
('BID26896', 2, 4, 'Wedding', '17-05-2020', 'fullday', 8000, 72000, 0, '20200417111212800110168765801521666', 'Confirmed', '2020-04-17 01:35:23', ''),
('BID27043', 7, 1, 'Engagement', '13-06-2020', 'morning', 5000, 5000, 0, '20200505111212800110168316701543918', 'Confirmed', '2020-05-04 21:56:21', ''),
('BID29317', 2, 5, 'Wedding Ceremony', '29-05-2020', 'fullday', 28000, 52000, 0, '20200507111212800110168557101508340', 'Confirmed', '2020-05-07 16:28:08', ''),
('BID31299', 5, 1, 'Wedding', '05-03-2020', 'fullday', 6500, 0, 0, '25586', 'Reserved', '2020-02-01 01:39:00', ''),
('BID31757', 4, 3, 'Wedding', '27-03-2020', 'fullday', 6000, 0, 0, '1700', 'Reserved', '2020-02-26 02:26:14', ''),
('BID5919', 3, 2, 'Engagement', '30-04-2020', 'morning', 1000, 8000, 0, '20200410111212800110168013901516264', 'Completed', '2020-04-10 00:04:56', ''),
('BID6013', 2, 2, 'Wedding Ceremony', '25-03-2020', 'fullday', 8000, 72000, 0, '20200210111212800110168371201545169', 'Completed', '2020-02-10 08:56:36', ''),
('BID6103', 2, 8, 'Engagement Ceremony', '16-06-2020', 'morning', 3500, 31500, 0, '20200508111212800110168677301514717', 'Confirmed', '2020-05-08 07:27:44', ''),
('BID6264', 2, 9, 'Reception  ', '16-06-2020', 'evening', 2500, 22500, 0, '20200508111212800110168157501527014', 'Confirmed', '2020-05-08 07:22:07', ''),
('BID6808', 8, 3, 'Wedding', '27-05-2020', 'fullday', 7000, 63000, 0, '20200430111212800110168999201517144', 'Confirmed', '2020-04-30 03:58:41', ''),
('BID7210', 2, 2, 'Birthday Party', '19-03-2020', 'evening', 2000, 18000, 0, '20200305111212800110168470001514787', 'Completed', '2020-03-05 14:40:19', ''),
('BID7849', 4, 3, 'Wedding', '20-03-2020', 'fullday', 6000, 54000, 0, '20200226111212800110168159101525297', 'Completed', '2020-02-26 02:26:14', ''),
('BID8353', 5, 1, 'Wedding', '05-03-2020', 'fullday', 6500, 58500, 0, '20200201111212800110168261501519457', 'Canceled', '2020-02-01 01:39:00', '');

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
(1, 'Aishwarya Shamrao Bhise', 'aishwarya1995@gmail.com', '9820700935', 'Thank you!! You provides nice platform to users who wants to search a hall. But i request you to add more browsing cities.', '2020-03-03 10:52:47'),
(2, 'Anuradha Patil', 'anuradha19@gmail.com', '8380905672', 'Nice!! ', '2020-03-12 10:58:15'),
(3, 'Renuka Bhosale', 'renuka123@gmail.com', '8934567845', 'Your website is outstanding.', '2020-04-13 11:01:09'),
(4, 'Vikas Kate', 'vikas12@gmail.com', '8989562310', 'Thanks to provide the vendor facility on website.', '2020-04-25 11:03:51'),
(5, 'Ankita Nevase', 'ankita15@gmail.com', '8805006732', 'Nice website.please pagination adds to show venues.', '2020-04-27 11:10:00'),
(6, 'Shruti Pawar', 'shrutip26@gmail.com', '9034567278', 'Nice!!', '2020-05-01 11:11:06'),
(7, 'Amar Pawar', 'amar1995pawar@gmail.com', '8149534439', 'I like your website. Thank u !!  I have booked  venue from these website .', '2020-05-01 11:13:43'),
(8, 'Mansi Kumbhar', 'mansik34@gmail.com', '9870433433', 'No any question ! i like your website. Nice!!', '2020-05-02 11:18:20'),
(9, 'Ajay Nikam', 'ajay1995@gmail.com', '8585903456', 'Outstanding platform.....', '2020-06-03 11:21:02'),
(10, 'Vedika Ajit Mane', 'veduamane@gmail.com', '8380905672', 'You provides up-to date details of venue. Thank u!!', '2020-07-03 11:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` int(4) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `price` int(7) NOT NULL,
  `advance` int(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_master`
--

INSERT INTO `event_master` (`id`, `venue_id`, `event_name`, `price`, `advance`, `created`, `updated`) VALUES
(1, 2, 'Corporate Event', 25000, 10, '2020-05-07 08:41:05', '2020-05-07'),
(2, 2, 'Birthday Party', 20000, 10, '2020-05-07 08:41:20', '2020-05-07'),
(3, 2, 'Reception  ', 25000, 10, '2020-05-07 08:52:54', '2020-05-07'),
(4, 2, 'Engagement Ceremony', 35000, 10, '2020-05-07 08:50:22', '2020-05-07'),
(5, 2, 'Wedding Ceremony', 80000, 10, '2020-05-07 08:40:06', '2020-05-07');

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
  `views` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `holder_id`, `album_name`, `image_name`, `location`, `created_at`, `views`) VALUES
(1, 2, 'Visiting Card', 'banner_logo.jpg', 'http://localhost/venuefinder/controller/uploads/album/banner_logo.jpg', '2020-03-25 07:14:49', 20),
(2, 2, 'Visiting Card', 'card.jpg', 'http://localhost/venuefinder/controller/uploads/album/card.jpg', '2020-03-25 07:14:49', 20),
(3, 2, 'Decoration', 'dec.jpg', 'http://localhost/venuefinder/controller/uploads/album/dec.jpg', '2020-03-30 07:17:48', 20),
(4, 2, 'Decoration', 'deco1.jpg', 'http://localhost/venuefinder/controller/uploads/album/deco1.jpg', '2020-03-30 07:17:48', 20),
(5, 2, 'Decoration', 'download.jpg', 'http://localhost/venuefinder/controller/uploads/album/download.jpg', '2020-03-30 07:17:48', 20),
(6, 2, 'Decoration', 'images.jpg', 'http://localhost/venuefinder/controller/uploads/album/images.jpg', '2020-03-30 07:17:48', 20),
(7, 2, 'Catering', 'catering.jpg', 'http://localhost/venuefinder/controller/uploads/album/catering.jpg', '2020-04-01 07:18:14', 20),
(8, 2, 'Catering', 'catering2.jpg', 'http://localhost/venuefinder/controller/uploads/album/catering2.jpg', '2020-04-01 07:18:14', 20),
(9, 2, 'Catering', 'catering3.jpg', 'http://localhost/venuefinder/controller/uploads/album/catering3.jpg', '2020-04-01 07:18:14', 20),
(10, 2, 'Conference', 'conf.jpg', 'http://localhost/venuefinder/controller/uploads/album/conf.jpg', '2020-04-01 07:18:14', 20),
(11, 2, 'Conference', 'room.jpg', 'http://localhost/venuefinder/controller/uploads/album/room.jpg', '2020-04-01 07:18:14', 20),
(12, 2, 'Night View', 'night4.jpg', 'http://localhost/venuefinder/controller/uploads/album/night4.jpg', '2020-04-03 07:19:22', 20),
(13, 2, 'Parking', 'parking.jpg', 'http://localhost/venuefinder/controller/uploads/album/parking.jpg', '2020-04-03 07:19:22', 20),
(14, 2, 'Wedding Photos', 'm1.jpg', 'http://localhost/venuefinder/controller/uploads/album/m1.jpg', '2020-05-07 07:20:37', 20),
(15, 2, 'Wedding Photos', 'm2.jpg', 'http://localhost/venuefinder/controller/uploads/album/m2.jpg', '2020-05-07 07:20:37', 20),
(16, 2, 'Wedding Photos', 'm3.jpg', 'http://localhost/venuefinder/controller/uploads/album/m3.jpg', '2020-05-07 07:20:37', 20),
(17, 2, 'Wedding Photos', 'm4.jpg', 'http://localhost/venuefinder/controller/uploads/album/m4.jpg', '2020-05-07 07:20:37', 20),
(18, 2, 'Wedding Photos', 'm5.jpg', 'http://localhost/venuefinder/controller/uploads/album/m5.jpg', '2020-05-07 07:20:37', 20),
(19, 2, 'Wedding Photos', 'm6.jpg', 'http://localhost/venuefinder/controller/uploads/album/m6.jpg', '2020-05-07 07:20:37', 20),
(20, 2, 'Wedding Photos', 'rupali and sushant.jpg', 'http://localhost/venuefinder/controller/uploads/album/rupali and sushant.jpg', '2020-05-07 07:20:37', 20),
(21, 2, 'Wedding Photos', 'shree vs deepa.jpg', 'http://localhost/venuefinder/controller/uploads/album/shree vs deepa.jpg', '2020-05-07 07:20:37', 20),
(22, 2, 'Seating System', 'cate.jpg', 'http://localhost/venuefinder/controller/uploads/album/cate.jpg', '2020-05-07 07:21:51', 20),
(23, 2, 'Seating System', 'deco1.jpg', 'http://localhost/venuefinder/controller/uploads/album/deco1.jpg', '2020-05-07 07:21:51', 20),
(24, 2, 'Seating System', 'seating.jpg', 'http://localhost/venuefinder/controller/uploads/album/seating.jpg', '2020-05-07 07:21:51', 20),
(25, 2, 'Seating System', 'seating1.jpg', 'http://localhost/venuefinder/controller/uploads/album/seating1.jpg', '2020-05-07 07:21:51', 20),
(26, 2, 'Night View', 'night1.jpg', 'http://localhost/venuefinder/controller/uploads/album/night1.jpg', '2020-04-03 07:19:22', 20),
(27, 2, 'Night View', 'night2.jpg', 'http://localhost/venuefinder/controller/uploads/album/night2.jpg', '2020-04-03 07:19:22', 20);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `id`, `notification`, `created_at`) VALUES
(1, '3', 'User', '2020-05-05 14:02:36'),
(2, '4', 'User', '2020-05-05 14:02:41'),
(3, '3', 'Venue', '2020-05-05 14:02:46'),
(4, '4', 'Venue', '2020-05-05 14:02:50'),
(5, '1', 'User', '2020-05-05 14:02:54'),
(6, '2', 'User', '2020-05-05 14:03:04'),
(7, '5', 'Venue', '2020-05-05 14:03:10'),
(8, '6', 'Venue', '2020-05-05 14:03:19'),
(9, '7', 'Venue', '2020-05-02 14:03:25'),
(10, '8', 'Venue', '2020-05-02 14:03:30'),
(11, '9', 'Venue', '2020-05-05 14:03:40'),
(12, '5', 'User', '2020-05-05 11:28:15'),
(13, '6', 'User', '2020-03-26 09:59:11'),
(14, '10', 'Venue', '2020-05-06 08:06:11'),
(15, '7', 'User', '2020-03-05 09:59:11'),
(16, '8', 'User', '2020-04-15 09:59:11'),
(17, '9', 'User', '2020-05-05 09:59:11'),
(18, 'BID29317', 'Book', '2020-05-07 16:55:16'),
(19, 'BID17477', 'Book', '2020-05-08 12:16:42'),
(20, 'BID13848', 'Book', '2020-05-09 14:30:37'),
(21, 'BID17277', 'Book', '2020-03-12 00:41:01'),
(22, 'BID17477', 'Book', '2020-01-10 06:32:57'),
(23, 'BID17657', 'Book', '2020-04-30 00:20:08'),
(24, 'BID18467', 'Book', '2020-03-13 02:21:25'),
(25, 'BID19911', 'Book', '2020-04-25 08:01:56'),
(26, 'BID2353', 'Book', '2020-05-09 08:42:56'),
(27, 'BID26649', 'Book', '2020-05-19 23:55:52'),
(28, 'BID26669', 'Book', '2020-03-10 06:35:23'),
(29, 'BID26811', 'Book', '2020-04-08 01:41:47'),
(30, 'BID26896', 'Book', '2020-04-17 01:35:23'),
(31, 'BID27043', 'Book', '2020-05-04 21:56:21'),
(32, 'BID29317', 'Book', '2020-05-07 16:28:08'),
(33, 'BID5919', 'Book', '2020-04-10 00:04:56'),
(34, 'BID6013', 'Book', '2020-02-10 08:56:36'),
(35, 'BID6103', 'Book', '2020-05-08 07:27:44'),
(36, 'BID6264', 'Book', '2020-05-08 07:22:07'),
(37, 'BID6808', 'Book', '2020-04-30 03:58:41'),
(38, 'BID7210', 'Book', '2020-03-05 14:40:19'),
(39, 'BID7849', 'Book', '2020-02-26 02:26:14'),
(40, 'BID8353', 'Book', '2020-02-01 01:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `bookid` varchar(10) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_amount` int(10) NOT NULL,
  `payment_currency` varchar(255) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `bookid`, `payment_status`, `payment_amount`, `payment_currency`, `txn_id`, `create_at`, `payment_mode`) VALUES
(1, 'BID29317', 'TXN_SUCCESS', 8000, 'INR', '20200507111212800110168557101508340', '2020-05-07 16:57:20', 'PPI'),
(2, 'BID17477', 'TXN_SUCCESS', 3500, 'INR', '20200110111212800110168114801509060', '2020-01-10 06:32:57', 'PPI'),
(3, 'BID31299', 'TXN_FAILURE', 6500, 'INR', '20200102111212800110168739601532487', '2020-02-01 01:39:00', ''),
(4, 'BID8353', 'TXN_SUCCESS', 6500, 'INR', '20200201111212800110168261501519457', '2020-02-01 01:39:00', 'PPI'),
(5, 'BID27043', 'TXN_SUCCESS', 5000, 'INR', '20200505111212800110168316701543918', '2020-05-05 05:52:38', 'PPI'),
(6, 'BID6013', 'TXN_SUCCESS', 8000, 'INR', '20200210111212800110168371201545169', '2020-02-10 08:56:36', 'PPI'),
(7, 'BID5919', 'TXN_SUCCESS', 1000, 'INR', '20200410111212800110168013901516264', '2020-04-10 00:04:56', 'PPI'),
(8, 'BID17277', 'TXN_SUCCESS', 8000, 'INR', '20200312111212800110168332201517089', '2020-03-12 00:41:01', 'PPI'),
(9, 'BID6808', 'TXN_SUCCESS', 6000, 'INR', '20200430111212800110168999201517144', '2020-05-09 16:55:05', 'PPI'),
(10, 'BID31757', 'TXN_FAILURE', 6000, 'INR', '20200509111212800110168944401514685', '2020-02-26 02:26:14', ''),
(11, 'BID7849', 'TXN_SUCCESS', 6000, 'INR', '20200226111212800110168159101525297', '2020-02-26 02:26:14', 'PPI'),
(12, 'BID26896', 'TXN_SUCCESS', 7500, 'INR', '20200417111212800110168765801521666', '2020-04-17 01:35:23', 'PPI'),
(13, 'BID26669', 'TXN_SUCCESS', 5000, 'INR', '20200310111212800110168888601519942', '2020-03-10 06:35:23', 'PPI'),
(14, 'BID6264', 'TXN_SUCCESS', 2500, 'INR', '20200508111212800110168157501527014', '2020-05-08 07:23:33', 'PPI'),
(15, 'BID6103', 'TXN_SUCCESS', 3500, 'INR', '20200508111212800110168677301514717', '2020-05-08 07:37:05', 'PPI'),
(16, 'BID19911', 'TXN_SUCCESS', 8000, 'INR', '20200425111212800110168169801537375', '2020-04-25 07:53:29', 'PPI'),
(17, 'BID26649', 'TXN_SUCCESS', 6000, 'INR', '20200520111212800110168509401510555', '2020-05-19 23:55:52', 'PPI'),
(18, 'BID17657', 'TXN_SUCCESS', 6000, 'INR', '20200430111212800110168510501729639', '2020-04-30 00:20:08', 'PPI'),
(19, 'BID18467', 'TXN_SUCCESS', 8000, 'INR', '20200313111212800110168514901730842', '2020-03-13 02:21:25', 'PPI'),
(20, 'BID23710', 'TXN_FAILURE', 6000, 'INR', '20200509111212800110168644201532228', '2020-05-09 08:51:09', ''),
(21, 'BID23710', 'TXN_FAILURE', 6000, 'INR', '', '2020-05-09 08:51:21', ''),
(22, 'BID26811', 'TXN_SUCCESS', 6000, 'INR', '20200408111212800110168299301529126', '2020-04-08 01:41:47', 'PPI'),
(23, 'BID2353', 'TXN_SUCCESS', 6500, 'INR', '20200509111212800110168803001523564', '2020-05-09 08:50:27', 'PPI'),
(24, 'BID13848', 'TXN_SUCCESS', 1000, 'INR', '20200509111212800110168237001521056', '2020-05-09 14:39:01', 'PPI'),
(25, 'BID7210', 'TXN_SUCCESS', 2000, 'INR', '20200305111212800110168470001514787', '2020-05-09 16:46:57', 'PPI');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `quality` int(10) NOT NULL,
  `response` int(10) NOT NULL,
  `value` int(10) NOT NULL,
  `recommend` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `venue_id`, `quality`, `response`, `value`, `recommend`, `title`, `description`, `amount`, `photo`, `name`, `created_at`, `likes`) VALUES
(1, 2, 4, 4, 5, '1', 'Amazing venue!', 'I truly loved the venue.It was a very nice experience with this venue and it was worth hosting the functions here. The food, decor and arrangements, all was pretty amazing.', 80, 'image6.jpeg', 'Sonam Bhosale', '2020-01-24 14:10:14', 5),
(2, 2, 5, 5, 5, '1', 'Outstanding Venue !', 'It was a very nice experience with this venue and it was worth hosting the functions here. The food, decor and arrangements, all was pretty amazing.\r\n\r\n', 0, 'm3.jpg', 'Nilam More', '2020-03-05 14:29:23', 3),
(3, 2, 4, 3, 3, '1', 'Stunning and Flawless Venue!', 'I truly loved the venue. The staffs were so good, they were best at hospitality and services. The venue was very beautiful, the decor was superbly done. Food could not have been better. In all praises for them. Loved the experience!', 60, 'm5.jpg', 'Tejas Pawar', '2020-03-31 14:35:30', 3),
(4, 3, 4, 4, 5, '1', 'Amazing venue!', 'I truly loved the venue.It was a very nice experience with this venue and it was worth hosting the functions here. The food, decor and arrangements, all was pretty amazing.', 80, 'image6.jpeg', 'Sonam Bhosale', '2020-05-03 08:40:14', 5),
(5, 4, 5, 5, 5, '1', 'Outstanding Venue !', 'It was a very nice experience with this venue and it was worth hosting the functions here. The food, decor and arrangements, all was pretty amazing.\r\n\r\n', 0, 'image11.jpg', 'Nilam More', '2020-05-03 08:59:23', 1),
(6, 5, 4, 3, 3, '1', 'Stunning and Flawless Venue!', 'I truly loved the venue. The staffs were so good, they were best at hospitality and services. The venue was very beautiful, the decor was superbly done. Food could not have been better. In all praises for them. Loved the experience!', 60, 'll.jpg', 'Tejas Pawar', '2020-05-03 09:05:30', 3),
(7, 5, 5, 5, 5, '1', 'Outstanding Venue !', 'It was a very nice experience with this venue and it was worth hosting the functions here. The food, decor and arrangements, all was pretty amazing.\r\n\r\n', 0, 'image11.jpg', 'Nilam More', '2020-05-03 08:59:23', 1),
(8, 8, 4, 3, 3, '1', 'Stunning and Flawless Venue!', 'I truly loved the venue. The staffs were so good, they were best at hospitality and services. The venue was very beautiful, the decor was superbly done. Food could not have been better. In all praises for them. Loved the experience!', 60, 'll.jpg', 'Tejas Pawar', '2020-05-03 09:05:30', 3),
(9, 2, 5, 5, 5, '1', 'Good management and staff. Well experience', 'Itâ€™s a nice place for a comfortable stay. Having a beautiful view of mountain. Fresh air. N nice quality food and clean. Luxury rooms', 90, 'sharad_mane.jpg', 'Sharad Mane', '2020-04-08 14:07:40', 0),
(10, 2, 4, 4, 3, '1', 'Very good location wedding party', 'Good experience overall.Location is beautiful. View is awesome.\r\nRestaurant and lawn food very good and service excellent..', 0, 'login.jpeg', 'Dhiraj Manthalakar', '2020-04-20 14:09:32', 0),
(11, 2, 4, 5, 4, '1', 'Marriage party and Dinner', 'Lovely place in mid of nature. Great location, great service and wonderful food. Staff and managemwnt is very cooperative.', 0, 'm2.jpg', 'Rohit Bhosale', '2020-04-20 14:11:58', 1),
(12, 2, 3, 3, 4, '1', 'Testy food mind blowing location', 'Delicious food with good quality and such a nice mountain view good supportive staff and great venue for destinations weeding... I loved it', 0, 'deco1.jpg', 'Vijay Chavan', '2020-04-27 14:13:23', 2),
(13, 2, 3, 3, 3, '1', 'Best location celebrate a event party etc', 'Location is awesome and the food was so tasty.\r\nThe staff was courteous and very humble.', 0, 'deco.jpg', 'Sneha Raut', '2020-04-30 14:14:24', 2),
(14, 2, 3, 3, 3, '1', 'Nice experience', 'Nice experience, quality food , helpful staff, they cares for you.', 0, 'm1.jpg', 'Sameer Shelake', '2020-05-01 14:16:46', 2),
(15, 2, 5, 4, 4, '1', 'Perfect location for wedding memoriesðŸ˜', 'Professional and supportive staff. Food is tasty serving with love.... Will recommend Swaraj Bhavan to my family and friends. ðŸ˜Šâ˜ºï¸', 0, 'm4.jpg', 'Rekha Tate', '2020-05-05 14:19:37', 5),
(16, 2, 4, 4, 4, '1', 'Nice Place', 'I like all arrangements. supportive staff. ', 0, 'm2.jpg', 'Shrutika Gaikwad', '2020-05-10 01:12:16', 1),
(17, 2, 3, 3, 3, '1', 'Amazing Venue', 'I like place,food,decoration.helping staff. nice to meet you again', 0, 'image6.jpeg', 'Vrushali Shinde', '2020-05-10 01:20:18', 4);

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `user_id` int(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`user_id`, `name`, `user_name`, `mobile`, `address`, `password`, `email`, `ip`, `created_at`, `updated_at`) VALUES
(1, 'Varsha Pawar', 'Varsha25', '8380905673', 'Opp.to D.P.Bhosale College, Near Parvati Niwas,Koregaon,415501', '2252c0811be2ea4e8fe02b2d25d80236', 'varsha9635@gmail.com', '::1', '2020-01-08 09:59:11', '0000-00-00'),
(2, 'Bhagyashsree Shinde', 'Bhagi1812', '8805006723', 'Limb,Satara-415001', 'c077b156eaf6d625a979cf742f5e6b28', 'bhagi18shinde@gmail.com', '::1', '2020-01-30 10:01:35', '0000-00-00'),
(3, 'Poonam Kate', 'Poonam0110', '9594957760', 'A/P Kanherkhed,Koregoan,Satara-415501', 'df96d71fa56d4a29fbf4e069877cfb10', 'poonamkate@gmail.com', '::1', '2020-02-05 10:06:42', '0000-00-00'),
(4, 'Vijay Patil', 'VijayP12', '9870433433', 'A/P Kanherkhed,Koregoan,Satara-415501', '53e5e577c8feeefa611f37c28feca612', 'vijaykate@gmail.com', '::1', '2020-02-10 10:08:00', '0000-00-00'),
(5, 'Sona Bhosale', 'Sona25', '8380905672', 'Near to New Stand,Koregaon', '4104f939fdc98f9823a53edee1355caa', 'sonambhosale9635@gmail.com', '::1', '2020-03-03 11:28:15', '2020-05-01'),
(6, 'Gauri Jadhav', 'GauriJ62', '8108355936', 'Sangam Nagar ,Satara', 'de44704d6efbe5a79b627c305e50d5c8', 'gaurij63@gmail.com', '::1', '2020-03-03 14:10:11', '0000-00-00'),
(7, 'Ashwini Shinde', 'Ashu89', '8678896745', 'Near to Arjun hospital,Wai.', 'b78070c17a3f1d7bd4265f2e2d466eaf', 'ashwini35shinde@gmail.com', '::1', '2020-04-11 14:47:19', '0000-00-00'),
(8, 'Prajkta Bobade', 'Pranj12', '8678896746', 'A/P Ekambe, Koregoan', 'e680d3a4a88747619acb04704bf7ed96', 'p12bobade@gmail.com', '::1', '2020-04-15 15:52:34', '0000-00-00'),
(9, 'Nitish Kadam', 'NitishK', '8888567324', 'At -Velang Post- Kanherkhed ,Koregoan', '971b0426a5f66d959515eb6440d89d96', 'kadamnitish@gmail.com', '::1', '2020-05-05 15:56:06', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `register_venue`
--

CREATE TABLE `register_venue` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `venue_name` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL DEFAULT 'Satara',
  `landline` varchar(12) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL,
  `booking_amt` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
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

INSERT INTO `register_venue` (`user_id`, `user_name`, `venue_name`, `city`, `landline`, `mobile`, `booking_amt`, `email`, `address`, `pincode`, `password`, `ac_type`, `created_at`, `updated_at`, `status`, `logo`, `banner_image`, `views`, `ip`) VALUES
(1, 'Admin', 'Venufinder', 'Satara', NULL, '9820700675', 0, 'sonambhosale@gmail.com', '', 0, 'e10adc3949ba59abbe56e057f20f883e', 'Admin', '2019-12-31 05:25:30', '2020-05-10 05:38:53', 'Active', '', '', 0, ''),
(2, 'Pravin Pawar', 'Swaraj Sanskrutik Bhavan', 'Satara', '2162244648', '8380905672', 80000, 'swarajbhavan@outlook.com', '44B, Sahakarnagar, Koregaon Road,Satara', 415001, '80c437aee2e961144b1929ed1b788468', 'Owner', '2020-01-01 15:08:17', '2020-05-05 04:55:07', 'Active', 'Swaraj-logo.jpg', 'yash_banner.jpg', 65, '::1'),
(3, 'Nariman Pawar', 'Nariman Hall', 'Satara', '216123088', '9820700953', 75000, 'sonambhosale9635@gmail.com', 'Plot No 505, Sadar Bazar,Satara', 415001, 'b52bdfc97da1440f6b8a6a7b121f2940', 'Owner', '2020-01-09 08:32:59', NULL, 'Active', 'nir_logo.png', 'nir_banner.jpg', 52, '::1'),
(4, 'Devyani Shinde', 'Devayani Multipurpose Hall', 'Satara', '216223087', '8805006723', 60000, 'devyani123@gmail.com', 'Survey No.165-166, Kondawa-Satara Medha Road, Molyacha Oodha,Satara', 415001, '91d542da7964da3a0f1dda58c1ce565b', 'Owner', '2020-01-15 09:07:54', NULL, 'Active', 'dev_logo.png', 'dev_banner.jpg', 21, '::1'),
(5, 'Nitin Ghadge', 'Kanishk Multipurpose Hall', 'Satara', NULL, '9594957760', 65000, 'kanishk@gmail.com', '449/D, In front of Sumitraraje Bhosale Garden, Sadar Bazar, Satara', 415002, '826f630d0842802133f3f3594f4e19ca', 'Owner', '2020-02-01 13:38:28', '2020-05-03 03:50:05', 'Active', 'kanishk_logo.jpg', 'kanishk_banner.jpg', 37, '::1'),
(7, 'Yash Mohite', 'Yashraj Multipurpose Hall', 'Satara', NULL, '9552549034', 50000, 'yashraj@gmail.com', 'Daulatnagar near k s d shanbhag school ,behind bhu Vikas bank ,Satara', 415002, '860597464b31f718bc28e3994d28d0f0', 'Owner', '2020-03-01 13:49:06', '2020-05-03 03:54:33', 'Active', 'yash_logo.jpg', 'yash_banner.jpg', 8, '::1'),
(8, 'Vedant Patil', 'Vedbhavan Mangal Karyalaya ', 'Satara', NULL, '9870500853', 70000, 'vedhabhavn@co.in', 'Shrinagar Colony, Satara Koregoan Road, Sangamnagar Satara', 415003, '860597464b31f718bc28e3994d28d0f0', 'Owner', '2020-04-01 13:54:36', '2020-05-03 05:27:37', 'Active', 'ved_logo.jpg', 'ved_banner.jpg', 35, '::1'),
(9, 'Samrat Shinde', 'Sai Samrat Mangal Karyalay ', 'Satara', '0', '8149953899', 60000, 'sai@gmail.com', 'Sai Samrat, Satara Rahmatpur Road, Satara MIDC, Kodoli, Satara ', 415004, '873441d4ff7411690a531bbe2896e21f', 'Owner', '2020-04-22 14:18:54', '2020-05-03 05:28:27', 'Active', 'sai_logo.jpg', 'sai_banner.jpg', 12, '::1'),
(10, 'Pushkar More', 'Pushkar Mangal Karyalay', 'Satara', '02162234296', '8950895090', 60000, 'pushkar@123gmail.com', 'Satara Koregon Road, Near Bombay Restaurant, Satara', 415002, '28e194c453600d099b3c9de42d5c60dd', 'Owner', '2020-05-05 08:06:11', NULL, 'Active', 'pushkar_logo.jpg', 'pushkar_banner.jpg', 0, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plan`
--

CREATE TABLE `subscription_plan` (
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(30) NOT NULL,
  `monthly` int(10) NOT NULL,
  `yearly` int(10) NOT NULL,
  `images` varchar(10) NOT NULL DEFAULT 'No',
  `video` varchar(10) NOT NULL DEFAULT 'No',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription_plan`
--

INSERT INTO `subscription_plan` (`plan_id`, `plan_name`, `monthly`, `yearly`, `images`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Premium', 300, 1200, 'Yes', 'No', '2020-04-15 12:23:03', '0000-00-00 00:00:00'),
(2, 'Top', 400, 1500, 'Yes', 'Yes', '2020-04-15 12:23:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(4) NOT NULL,
  `venue_id` int(4) NOT NULL,
  `website` varchar(50) NOT NULL,
  `opening_date` date NOT NULL,
  `events` varchar(300) NOT NULL,
  `helpers` int(4) NOT NULL,
  `info` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `venue_id`, `website`, `opening_date`, `events`, `helpers`, `info`, `created_at`) VALUES
(1, 2, 'www.swarajbhavan.com', '2006-12-05', 'weddings, receptions and all kinds of cultural events.conferences, meetings and corporate events.', 11, 'Swaraj Sanskrutik Bhavan was established in December 2006 to provide Satara and nearby districts with a quality venue for weddings, receptions and all kinds of cultural events. The Marriage hall is among the best available halls and with 7500 sq.ft of space. It has four rooms adjacent to the hall for any pre-event arrangements. \r\nAdditional Available Facilities:PA system,TV,LCD projector on hire,White board and Markers\r\n,parking is available.,Generator Backup / DG backup.\r\n,Solar water heating s', '2020-05-05 08:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `venue_id` int(4) NOT NULL,
  `f1` varchar(100) NOT NULL,
  `f2` varchar(100) NOT NULL,
  `f3` varchar(100) NOT NULL,
  `f4` varchar(10) NOT NULL,
  `f5` varchar(100) NOT NULL,
  `f6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `venue_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`) VALUES
(1, 2, 'Yes, We can have more than one event-space at time. We can arrange 2 events at time.', '800', '1000', '10', 'Yes, We have paid advance amount.', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `venue_details`
--

CREATE TABLE `venue_details` (
  `venue_id` int(10) NOT NULL,
  `venue_info` varchar(1000) NOT NULL,
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
(2, 'Swaraj Sanskrutik Bhavan was established in December 2006 to provide Satara and nearby districts with a quality venue for weddings, receptions and all kinds of cultural events. This is also an equally suitable place for organising conferences, meetings and corporate events.Swaraj is well designed to suit large events and provide good infrastructure along with good and timely service. Located just on the outskirts of Satara, the surroundings are peaceful and ideal for events. It has an easy access from the city convenient access for people coming from Pune, Kolhapur and Mahabaleshwar. We are proud to be considered as one of the premium wedding halls and an ultimate venue for events and occasions in Satara.The Marriage hall is among the best available halls and with 7500 sq.ft of space. It has four rooms adjacent to the hall for any pre-event arrangements. ', 400, 500, 11, 'Yes', 'Yes', 'No', 'No', 'Yes', 'Yes', '2020-05-02 15:22:35', '2020-05-02 05:44:52');

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
  `requirement` varchar(500) NOT NULL,
  `token` varchar(10) NOT NULL,
  `quotation_rate` int(11) NOT NULL,
  `reply` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_enquires`
--

INSERT INTO `venue_enquires` (`id`, `user_id`, `venue_id`, `event_name`, `booking_date`, `requirement`, `token`, `quotation_rate`, `reply`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Wedding', '2020-02-14', 'I want half and full day your venue.Please as soon as possible sent pricing details. Also provide better service.', 'pD0l9dNqfB', 95000, '', '2020-01-15 13:23:14', '2020-01-16'),
(2, 3, 2, 'Birthday Party', '2020-03-05', 'I want to book venue for birthday party with 200 guest.', 'u8pc6HFPPw', 21000, '', '2020-02-28 13:29:32', '2020-02-28'),
(3, 4, 2, 'Sangeet Function', '2020-04-12', 'Please well decoration provide. I send you the decoration photos. As soon as possible send the pricing for these function.', 'F9ikKCAlKd', 20000, '', '2020-03-11 13:33:03', '2020-03-15'),
(4, 6, 2, 'Conference', '2020-03-30', 'Need a peaceful rooms with proper arrangement of projector.', '9bafbOgWb6', 10000, '', '2020-03-03 14:50:10', '2020-03-08'),
(5, 5, 2, 'Wedding Event', '2020-04-25', 'I see your booking amount.but I want to add LED,projector system with beautiful decoration.Drinking water and i can take other drinks  other than water.', 'Zv9UVUoDkv', 80000, 'No extra amount to pay. Yes, You allowed to take any drink.', '2020-04-01 11:16:23', '2020-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `venue_plan`
--

CREATE TABLE `venue_plan` (
  `id` varchar(20) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expire_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `payment_status` varchar(20) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `trans_id` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_plan`
--

INSERT INTO `venue_plan` (`id`, `venue_id`, `plan_id`, `price`, `status`, `start_date`, `expire_date`, `payment_status`, `payment_mode`, `trans_id`, `create_at`) VALUES
('PID14247', 3, 1, 300, 'Deactive', '2020-01-07 08:00:00', '2020-02-06 18:30:00', 'TXN_SUCCESS', 'PPI', '20200107111212400110168875501507451', '2020-01-07 08:00:00'),
('PID14858', 4, 1, 300, 'Deactive', '2020-01-23 00:05:16', '2020-02-22 18:30:00', 'TXN_SUCCESS', 'PPI', '20191231111212400110168875501507430', '2020-01-23 00:05:16'),
('PID16837', 5, 1, 300, 'Active', '2020-05-06 09:07:20', '2020-06-05 18:30:00', 'TXN_SUCCESS', 'PPI', '20200506111212400110168875501507443', '2020-05-06 09:03:10'),
('PID23729', 2, 2, 400, 'Deactive', '2020-03-25 06:54:57', '2020-04-24 18:30:00', 'TXN_SUCCESS', 'PPI', '20200325111212400110168875501507445', '2020-03-25 06:54:57'),
('PID24161', 4, 2, 400, 'Active', '2020-04-16 02:46:13', '2020-05-15 18:30:00', 'TXN_SUCCESS', 'PPI', '20200416111212800120168875501507433', '2020-04-16 02:46:13'),
('PID26763', 3, 2, 1500, 'Active', '2020-02-19 05:50:45', '2021-02-18 18:30:00', 'TXN_SUCCESS', 'PPI', '20200219111212800120168875501507439', '2020-02-19 05:50:45'),
('PID27661', 10, 2, 1500, 'Deactive', '2020-05-09 13:29:56', '2021-05-06 18:30:00', 'TXN_SUCCESS', 'PPI', '20200416111212800110168875501507432', '2020-05-07 01:52:55'),
('PID4489', 9, 2, 400, 'Deactive', '2020-04-25 07:44:50', '2020-05-24 18:30:00', 'TXN_SUCCESS', 'PPI', '20200318111212800110168875501507435', '2020-04-25 07:44:50'),
('PID7913', 8, 1, 300, 'Active', '2020-04-18 05:19:43', '2020-05-17 18:30:00', 'TXN_SUCCESS', 'PPI', '20200102111212800110168875501507436', '2020-04-18 05:19:43'),
('PID8051', 2, 1, 300, 'Active', '2020-05-06 01:34:49', '2020-06-05 18:30:00', 'TXN_SUCCESS', 'PPI', '20200506111212800110168875501507431', '2020-05-06 01:34:49');

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
(1, 4, 'devyani_hall.mp4', 'Amazing Hall View', 'mp4', 'http://localhost/venuefinder/videos/devyani_hall.mp4', 0, '2020-04-20 04:22:04'),
(2, 4, 'pre_shoot.mp4', 'Pre-Shoot Video', 'mp4', 'http://localhost/venuefinder/videos/pre_shoot.mp4', 0, '2020-04-27 04:24:45'),
(3, 4, 'Wedding.mp4', 'Wedding Video', 'mp4', 'http://localhost/venuefinder/videos/Wedding.mp4', 0, '2020-05-05 04:26:52'),
(4, 2, 'devyani_hall.mp4', 'Amazing Hall View', 'mp4', 'http://localhost/venuefinder/videos/devyani_hall.mp4', 0, '2020-03-26 04:22:04'),
(5, 2, 'pre_shoot.mp4', 'Pre-Shoot Video', 'mp4', 'http://localhost/venuefinder/videos/pre_shoot.mp4', 0, '2020-04-07 04:24:45'),
(6, 2, 'Wedding_ceremony.mp4', 'Wedding Ceremony Video', 'mp4', 'http://localhost/venuefinder/videos/Wedding_ceremony.mp4', 0, '2020-04-08 04:24:45'),
(7, 2, 'Mehandi.mp4', 'Mehandi Ceremony Video', 'mp4', 'http://localhost/venuefinder/videos/Mehandi.mp4', 0, '2020-04-08 04:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(4) NOT NULL,
  `venue_id` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `removed_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userid`, `venue_id`, `created_at`, `removed_at`) VALUES
(1, 5, 7, '2020-05-07 12:36:47', '0000-00-00'),
(2, 5, 4, '2020-05-07 12:37:06', '0000-00-00'),
(3, 5, 2, '2020-03-31 12:37:16', '0000-00-00'),
(4, 5, 3, '2020-05-07 12:38:09', '0000-00-00'),
(6, 1, 2, '2020-01-10 12:37:16', '0000-00-00'),
(7, 2, 2, '2020-02-01 12:37:16', '0000-00-00'),
(8, 3, 2, '2020-02-13 12:37:16', '0000-00-00'),
(9, 4, 2, '2020-02-15 12:37:16', '0000-00-00'),
(10, 6, 2, '2020-03-05 12:37:16', '0000-00-00'),
(11, 7, 2, '2020-04-15 05:37:16', '0000-00-00'),
(12, 8, 2, '2020-05-02 12:37:16', '0000-00-00'),
(13, 1, 7, '2020-05-09 05:50:36', '0000-00-00');

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
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

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
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD UNIQUE KEY `id` (`id`);

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `user_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register_venue`
--
ALTER TABLE `register_venue`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscription_plan`
--
ALTER TABLE `subscription_plan`
  MODIFY `plan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `venue_enquires`
--
ALTER TABLE `venue_enquires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
