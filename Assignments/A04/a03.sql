-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 04:18 PM
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
-- Database: `a03`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `contact_phone` varchar(10) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `u_id`, `first_name`, `last_name`, `contact_phone`, `contact_email`, `city`, `country`) VALUES
(1, 1, 'Falcon', 'Hunter', '0500000000', 'f4lc0nH3r3@fal.fal', 'Tithonius Lacus', 'Mars'),
(10, 3, 'Adam', 'Stone', '0511111111', 'ad4mSto@ad.cas', 'Mare Imbrium\r\n', 'Moon'),
(11, 20, 'Agous', 'Marly', '0500000001', 'agosmar@agosmar.sk', 'Tir Planitia', 'Mercury');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `u_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`u_id`, `user_name`, `email`, `password`) VALUES
(1, 'f4lc0nH3r3', 'f4lc0nH3r3@fal.fal', '$2y$10$WbJNsUwQlPKmX/R5FqYIzu4961BmQm6fFlvs65.7zG3SFgnBF5kv6'),
(2, 'ohangur', 'ohangur@ohs.coms', '$2y$10$5jNywjbSdEcFovghE9YmLeZdklq4QaDupILnJMq2mrIAxAODmCY.i'),
(3, 'ad4mSto', 'ad4mSto@ad.cas', '$2y$10$ZwtUUTIo8XRRLCBeBJeAquDgBdcfTF05KlEnBJWRDkAI9dha2WyDS'),
(4, 'newTry', 'newTry@new.cnenew', '$2y$10$JCBs45wn05o/eKxOazmr8u7kZDemlQrGgKAl7YcBUYqOd6NzB83lC'),
(13, 'Aafd3', 'fdsfdf@fdsff.sdok', '$2y$10$Ig3NlNeqHflFgln2HWgIYe1MIyZcwxSstJ5dkJMFrEJgiL.k4YGyy'),
(14, 'Hab45sds', 'Hab45sds@saddf.caf', '$2y$10$0hd/R2mDt3r.dLPuNFhc8uHEDY10VbhktG9z1LWD5l3xrcGTPFk5S'),
(15, 'Hsiu494', 'Hsiu494@jdf.fsjk', '$2y$10$d4HP/0M5Zux6gI7Z1A7dKep/lJVOZ1Ntd81tHDlf728xkxBtxCSPC'),
(20, 'agosmar', 'agosmar@agosmar.sk', '$2y$10$zt4KpBzBgx5U/CcO0tjilO/ZqYl7IodU7LnxjhbOuuNReOTyoSxB2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `u_id` FOREIGN KEY (`u_id`) REFERENCES `user_accounts` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
