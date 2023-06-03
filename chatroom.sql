-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 10:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `abort`
--

CREATE TABLE `abort` (
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abort`
--

INSERT INTO `abort` (`msg`) VALUES
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1'),
('1');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `ip` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp(),
  `uname` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`ip`, `msg`, `stime`, `uname`, `room`) VALUES
('', 'hi', '0000-00-00 00:00:00', 'abc', 'reh'),
('::1', 'hi', '0000-00-00 00:00:00', 'abc', 'reh'),
('::1', 'hi', '0000-00-00 00:00:00', 'abc', 'reh'),
('::1', 'hi', '0000-00-00 00:00:00', 'abc', 'reh'),
('::1', 'hi', '0000-00-00 00:00:00', 'abc', 'reh'),
('::1', 'hi', '0000-00-00 00:00:00', 'abc', 'reh'),
('::1', 'hi', '0000-00-00 00:00:00', 'abc', 'reh'),
('::1', 'hi', '0000-00-00 00:00:00', 'abc', 'reh'),
('::1', 'hi', '0000-00-00 00:00:00', 'u2', '123'),
('::1', 'hi', '0000-00-00 00:00:00', 'u2', '123'),
('::1', 'hi', '2023-05-29 23:21:18', 'u2', '123'),
('::1', 'hi', '2023-05-29 23:23:40', 'abc', '123'),
('::1', 'hi', '2023-05-29 23:32:00', 'abc', '123'),
('::1', 'hi', '2023-05-29 23:33:57', '566', '123'),
('::1', 'hi', '2023-05-29 23:35:38', 'udit1', '123'),
('::1', 'hi', '2023-05-29 23:36:14', 'udit1', '123'),
('::1', 'hi', '2023-05-29 23:36:27', 'udit1', '123'),
('::1', 'hi', '2023-05-29 23:36:33', '123', '123'),
('::1', 'hi', '2023-05-29 23:37:16', '1231', '123'),
('::1', '', '2023-05-29 23:39:24', '1231', '123'),
('::1', 'hi', '2023-05-29 23:39:30', '1231', '123'),
('::1', 'hi', '2023-05-29 23:40:07', 'udit1', '123'),
('::1', 'hi', '2023-05-29 23:49:55', 'udit12', '123'),
('::1', 'hi', '2023-05-29 23:52:48', 'udit12', '123'),
('::1', 'hi', '2023-05-30 00:02:01', 'udit1', '0'),
('::1', 'hi', '2023-05-30 00:02:22', 'udit', '0'),
('::1', 'hi', '2023-05-30 00:02:23', 'udit', '0'),
('::1', 'hi', '2023-05-30 00:02:24', 'udit', '0'),
('::1', 'hi', '2023-05-30 00:02:25', 'udit', '0'),
('::1', 'hi', '2023-05-30 00:03:33', 'udit', '0'),
('::1', 'hi1', '2023-05-30 00:03:44', 'udit', '0'),
('::1', 'hi', '2023-05-30 00:04:23', 'udit', '0'),
('::1', 'hi1', '2023-05-30 00:04:35', 'udit', '0'),
('::1', 'hi', '2023-05-30 00:06:28', 'u2', '0'),
('::1', 'hi', '2023-05-30 00:06:38', 'u2', '0'),
('::1', 'hi12', '2023-05-30 00:06:43', 'u2', '0'),
('::1', 'thhnth', '2023-05-30 00:22:38', '32', '0'),
('::1', '', '2023-05-30 00:23:20', '32', '0'),
('::1', '', '2023-05-30 00:23:23', '32', '0'),
('::1', '', '2023-05-30 00:24:02', '32', '0'),
('::1', '', '2023-05-30 00:24:06', '32', '0'),
('::1', '', '2023-05-30 00:26:44', '32', '0'),
('::1', '', '2023-05-30 00:26:44', '32', '0'),
('::1', '', '2023-05-30 00:27:32', 'udit98', '0'),
('::1', '', '2023-05-30 00:27:40', 'udit98', '0'),
('::1', 'huk', '2023-05-30 00:28:32', '32', '0'),
('::1', '', '2023-05-30 00:28:37', '32', '0'),
('::1', '', '2023-05-30 00:29:10', '32', '0'),
('::1', '', '2023-05-30 00:29:15', '32', '0'),
('::1', '', '2023-05-30 00:29:18', '32', '0'),
('::1', '', '2023-05-30 00:29:40', '32', '0'),
('::1', '', '2023-05-30 00:29:44', '32', '0'),
('::1', '', '2023-05-30 00:30:28', '32', '0'),
('::1', '', '2023-05-30 00:30:32', '32', '0'),
('::1', '', '2023-05-30 00:31:34', '32', '0'),
('::1', 'hi', '2023-05-30 00:34:20', '32', '0'),
('::1', 'trjryrj', '2023-05-30 00:34:38', '32', '0'),
('::1', 'hi', '2023-05-30 14:42:20', 'udit1', '1234'),
('::1', 'hi', '2023-05-30 14:42:56', 'udit1', '1234'),
('::1', 'ryjyny', '2023-05-30 16:23:52', 'udit', '1234'),
('::1', 'hi', '2023-05-30 16:24:38', 'qwd', '1234'),
('::1', 'hi', '2023-05-30 16:24:52', 'qwd', '1234'),
('::1', 'rgregeg', '2023-05-30 16:24:56', 'qwd', '1234'),
('::1', 'ergerggederg3', '2023-05-30 16:25:02', 'qwd', '1234'),
('::1', 'hi', '2023-05-30 16:25:10', 'qwd', '1234'),
('::1', 'egevv', '2023-05-30 16:26:36', 'udit12', '1234'),
('::1', 'regvv', '2023-05-30 16:26:48', 'udit12', '1234'),
('::1', 'rve4v', '2023-05-30 16:27:07', 'udit12', '1234'),
('::1', 'gvwvwsgveberr', '2023-05-30 16:28:52', 'udit12', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `owner_name` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`owner_name`, `room_name`, `password`) VALUES
('udit', '0', '$2y$10$uaMz3c50JXMh0WUZgTNx3Om3fw3ZT/sl1lV0MFr0OpegAofwtuA3.'),
('abc', '12', '$2y$10$xUOevlSVgcGvUi5ATrhO0.7HEoqlCat4GSMnvXx6A6h'),
('abc', '123', '$2y$10$rUQ3HIvi2tiZNJQROK4GmeEvApuKZG1Zf18bVZIdCQd3qstar7RMK'),
('udit', '1234', '$2y$10$8IB5qeTWTGu52oG2NdzWS.8UfP8PoyQQJyCa5jictGr74nl54yzKS'),
('abc', 'reh', '$2y$10$Iqvl96QyURudtXjLonnCAuYyakyK4P6.YTk0uvnt/7S'),
('uditgoyal', 'udit', '$2y$10$Gs.aMdp6izEqEIa.DTwCJuxxn/g/NkpjncRuqQteE/q');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `room_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `last_login` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`room_id`, `username`, `last_login`) VALUES
('udit', 'uditgoyal', ''),
('reh', 'abc', ''),
('12', 'abc', ''),
('123', 'abc', ''),
('123', 'u2', ''),
('123', '32', '1685383352'),
('123', '123', '1685383520'),
('123', '1231', '1685383818'),
('0', 'udit', '1685385265'),
('0', 'u2', '1685385384'),
('0', '32', '1685387257'),
('0', 'udit123', '1685386197'),
('0', 'udit98', '1685387648'),
('0', 'udit13', '1685388023'),
('0', 'qwd21', '1685388019'),
('1234', 'udit', '1685444498'),
('1234', 'qwd', '1685444196');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`room_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
