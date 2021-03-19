-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 09:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparksusers`
--

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `name` varchar(100) NOT NULL,
  `account_no` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` bigint(100) NOT NULL,
  `current_balance` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`name`, `account_no`, `email`, `mob_no`, `current_balance`) VALUES
('Satyam Singh', 10000000001, 'satyams671@gmail.com', 1122334450, 101138),
('Jayant Gautam', 20000000002, 'gautamjayant@gmail.com', 2234403298, 136875),
('Harsh Kumar', 30000000003, 'kumarharsh@gmail.com', 3378209871, 16000),
('Vivek Rider', 40000000004, 'ridervivek@gmail.com', 4497309256, 18051),
('Jayanti Gautam', 50000000005, 'jayanti25@gmail.com', 5534401095, 19989),
('Saksham Kaindal', 60000000006, 'kaindalsaksham@gmail.com', 6689440123, 21989),
('Nishant Rathee', 80000000008, 'ratheenishant@gmail.com', 8835099210, 26000),
('Anupam Kumar', 90000000009, 'kumaranupam@gmail.com', 9947832191, 32348),
('Sonu Roy', 11000000011, 'roysonu@gmail.com', 1023445321, 30202),
('Ujjwal Kumar', 12000000012, 'kumarujjwal@gmail.com', 1199876431, 32000);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `name` varchar(20) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `transfer_to` varchar(10) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`name`, `amount`, `transfer_to`, `time`) VALUES
('Anupam kumar', 100, '9000000000', '2021-03-19 12:59:12'),
('Jayant Gautam', 2000, '2000000000', '2021-03-19 13:10:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
