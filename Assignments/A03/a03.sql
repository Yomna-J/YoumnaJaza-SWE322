-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 10:44 AM
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
(1, 'f4lc0nH3r3', 'f4lc0nH3r3@fal.fal', '$2y$10$vjhsMGV22/yfxfIPPJGCmOslnGIcX9Bkv5Vr1K7uS7n1hABCcPJay'),
(2, 'ohangur', 'ohangur@ohs.coms', '$2y$10$d6HwZWVMTY.2iK5oy9G5S.1q52jaiPx9./5iSwMX4SHVKctTMfM0K'),
(3, 'ad4mSto', 'ad4mSto@ad.cas', '$2y$10$ZwtUUTIo8XRRLCBeBJeAquDgBdcfTF05KlEnBJWRDkAI9dha2WyDS'),
(4, 'newTry', 'newTry@new.cnenew', '$2y$10$JCBs45wn05o/eKxOazmr8u7kZDemlQrGgKAl7YcBUYqOd6NzB83lC');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
