-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 12:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `class_id`, `user_id`) VALUES
(1, 4, 8),
(2, 4, 3),
(3, 5, 8),
(4, 5, 2),
(5, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(10) NOT NULL,
  `class_name` varchar(35) NOT NULL,
  `trainer_name` varchar(50) NOT NULL,
  `class_date` date NOT NULL,
  `number_of_trainees` int(5) NOT NULL,
  `max_num_of_trainees` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `trainer_name`, `class_date`, `number_of_trainees`, `max_num_of_trainees`) VALUES
(1, 'Cardio Class', 'Vun Numas', '2021-03-05', 0, 5),
(2, 'Water aerobics class', 'Constantine Juzlla', '2022-01-07', 0, 10),
(3, 'Yoga Class', 'Camilla John', '2021-05-21', 0, 5),
(4, 'Zumba Class', 'Chloe Smith', '2021-05-23', 3, 12),
(5, 'Boxing Class', 'Carlisa Evalyn', '2021-07-01', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'f4lc0nH3r3', 'f4lc0nH3r3@fal.fal', '$2y$10$WbJNsUwQlPKmX/R5FqYIzu4961BmQm6fFlvs65.7zG3SFgnBF5kv6'),
(2, 'Lamia_22', 'Lamia@lamia.la', '$2y$10$iyfSqBVr4V0UETgUvhze1eVBUjydw2uZiHpLB/CxaIMdRgxp2YGfi'),
(3, 'Hal_3246', 'Halah@h.ha', '$2y$10$gLKbQdw4ICH/mn/jifTge.1qlhWZ4OZQfmX6kVkGehS6JnX1FVBbe'),
(4, 'Yo_43', 'Yo@dsaj.dl', '$2y$10$iyfSqBVr4V0UETgUvhze1eVBUjydw2uZiHpLB/CxaIMdRgxp2YGfi'),
(5, 'Test', 'Test_last@gmail.sdf', '$2y$10$Qu8EXTTb97HeNuHJcyet4uKzn5Hy5aFhnzDEfDzeO2xA8WtliVReW'),
(7, 'Br4ve', 'Br4ve@fdgsdf.cxfld', '$2y$10$hA7S7XoWfcG/mBhraImnSurngvTWwFOxXtM3XTU4mGqe9AuQhS3cS'),
(8, 'J0lly', 'J0lly@sdjkfds.dsjlk', '$2y$10$F6EDbRh9tS9U1yDn0C70dOFAMaQ6yLF520Rly1J55sQE5QfGk7ej.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `class_id` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
