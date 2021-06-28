-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2021 at 09:39 PM
-- Server version: 8.0.15
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `aimset`
--

DROP TABLE IF EXISTS `aimset`;
CREATE TABLE IF NOT EXISTS `aimset` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ami_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ff_timestamp` longtext COLLATE utf8mb4_general_ci,
  `Date_from` date DEFAULT NULL,
  `Date_to` date DEFAULT NULL,
  `remarks_aim` longtext COLLATE utf8mb4_general_ci,
  `self_percentage` int(20) NOT NULL,
  `current_status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `post_owner` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aimset`
--

INSERT INTO `aimset` (`id`, `ami_name`, `ff_timestamp`, `Date_from`, `Date_to`, `remarks_aim`, `self_percentage`, `current_status`, `post_owner`) VALUES
(1, 'IFTRI', '2021-06-28 18:25:34', '2021-06-28', '2021-06-30', 'Please do it these two days', 2, 'under', 'Manish');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

DROP TABLE IF EXISTS `expences`;
CREATE TABLE IF NOT EXISTS `expences` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `time_stamp_expences` longtext COLLATE utf8mb4_general_ci,
  `expense_date` date DEFAULT NULL,
  `AmountSpend` decimal(10,2) NOT NULL,
  `Spend_mode` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `progressive_spend` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `spend_planning` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `remarks_spend` longtext COLLATE utf8mb4_general_ci,
  `post_owner` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`id`, `time_stamp_expences`, `expense_date`, `AmountSpend`, `Spend_mode`, `progressive_spend`, `spend_planning`, `remarks_spend`, `post_owner`) VALUES
(1, '2021-06-28T21:17', '2021-06-28', '250.00', 'Cash', 'NO Will not create Money', 'Fuel', 'Only for fuel dtd 28 Indian Oil petrol Pump', 'Manish');

-- --------------------------------------------------------

--
-- Table structure for table `finance_received`
--

DROP TABLE IF EXISTS `finance_received`;
CREATE TABLE IF NOT EXISTS `finance_received` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ff_timestamp` longtext COLLATE utf8mb4_general_ci,
  `receive_date` date DEFAULT NULL,
  `amount_received` decimal(10,2) NOT NULL,
  `mode_receive` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Planned_for` longtext COLLATE utf8mb4_general_ci,
  `remarks` longtext COLLATE utf8mb4_general_ci,
  `post_owner` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finance_received`
--

INSERT INTO `finance_received` (`id`, `ff_timestamp`, `receive_date`, `amount_received`, `mode_receive`, `Planned_for`, `remarks`, `post_owner`) VALUES
(1, '2021-06-28T21:16', '2021-06-28', '2500.50', 'Cash', 'Fuel', 'Fuel for 10 days', 'Manish');

-- --------------------------------------------------------

--
-- Table structure for table `habbit`
--

DROP TABLE IF EXISTS `habbit`;
CREATE TABLE IF NOT EXISTS `habbit` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `habbit_timestamp` longtext COLLATE utf8mb4_general_ci,
  `control_start_date` date DEFAULT NULL,
  `control_end_date` date DEFAULT NULL,
  `status_date` date DEFAULT NULL,
  `self_progress` int(20) NOT NULL,
  `remarks_habbit` longtext COLLATE utf8mb4_general_ci,
  `next_estimation_date` date DEFAULT NULL,
  `make_public` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `post_owner` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `habbit`
--

INSERT INTO `habbit` (`id`, `habbit_timestamp`, `control_start_date`, `control_end_date`, `status_date`, `self_progress`, `remarks_habbit`, `next_estimation_date`, `make_public`, `post_owner`) VALUES
(1, '2021-06-28T21:19', '2021-06-28', '2021-06-28', '2021-06-28', 30, 'I am trying to get rid of this', '2021-06-29', 'Public', 'Manish'),
(2, '2021-06-29T02:25', '2021-06-29', '2021-06-22', '2021-06-15', 20, 'Sleepy at night', '2021-06-29', 'Public', 'Dhawal');

-- --------------------------------------------------------

--
-- Table structure for table `habbit_friends_remarks`
--

DROP TABLE IF EXISTS `habbit_friends_remarks`;
CREATE TABLE IF NOT EXISTS `habbit_friends_remarks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `time_stamp_habbit` longtext COLLATE utf8mb4_general_ci,
  `control_start_date` date DEFAULT NULL,
  `control_end_date` date DEFAULT NULL,
  `status_date` date DEFAULT NULL,
  `self_progress` int(20) NOT NULL,
  `remarks_habbit` longtext COLLATE utf8mb4_general_ci,
  `next_estimation_date` date DEFAULT NULL,
  `remarks_by_friend_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `remarks_by_friend` longtext COLLATE utf8mb4_general_ci,
  `post_owner` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `habbit_friends_remarks`
--

INSERT INTO `habbit_friends_remarks` (`id`, `time_stamp_habbit`, `control_start_date`, `control_end_date`, `status_date`, `self_progress`, `remarks_habbit`, `next_estimation_date`, `remarks_by_friend_name`, `remarks_by_friend`, `post_owner`) VALUES
(1, '2021-06-28T21:19', '2021-06-28', '2021-06-28', '2021-06-28', 30, 'I am trying to get rid of this', '2021-06-29', 'Manish', 'xcxcxcxcjjjj', 'Manish'),
(2, '2021-06-28T21:19', '2021-06-28', '2021-06-28', '2021-06-28', 30, 'I am trying to get rid of this', '2021-06-29', 'Manish', 'now this is great', 'Manish'),
(3, '2021-06-29T02:25', '2021-06-29', '2021-06-22', '2021-06-15', 20, 'Sleepy at night', '2021-06-29', 'Manish', 'Good Dhawal Keep Sleeping', 'Dhawal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
