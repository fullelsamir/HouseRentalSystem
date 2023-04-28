-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 09:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roomrental_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(3, 'ram', 'ram@gmail.com', 'hello i am from butwal'),
(4, 'Samir Fullel', 'fullelsamir@gmail.com', 'hello'),
(5, 'Hari', 'hari@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `type` varchar(50) NOT NULL,
  `provience` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `longitude` varchar(40) NOT NULL,
  `latitude` varchar(40) NOT NULL,
  `price` varchar(7) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `type`, `provience`, `district`, `city`, `street`, `longitude`, `latitude`, `price`, `phone`, `description`, `file`) VALUES
(1, 'ram', 'Room', 'province5', 'Rupandehi', 'Butwal', 'Milanchowk , Street-2', '83.4750137', '27.6893645', '4000', '9812345678', 'This room is located just beside the Galaxy Cafe. 24hrs water supply is available and 24hrs electricity facility is available. There is a Proper parking facility is available.', '1.jpg'),
(2, 'ram', 'Room', 'province5', 'Rupandehi', 'Butwal', 'Sukkhanagar , Street-2', '83.4750137', '27.6893645', '4000', '9812345678', 'This room is located just beside the Bhatbhateni super market. 24hrs water supply is available and 24hrs electricity facility is available. There is a Proper parking facility is available.', '2.jpg'),
(3, 'Hari', 'Room', 'province5', 'Rupandehi', 'Butwal', 'Chauraha , Street-5', '83.4750137', '27.6893645', '5000', '9812345678', '24hrs water supply is available and 24hrs electricity facility is available. There is a Proper parking facility is available.', '3.jpg'),
(4, 'Hari', 'Room', 'province5', 'Rupandehi', 'Butwal', 'Goalpark , Street-5', '83.4750137', '27.6893645', '6000', '9812345678', '24hrs water supply is available and 24hrs electricity facility is available. There is a Proper parking facility is available.', '4.jpg'),
(5, 'Hari', 'Room', 'province5', 'Rupandehi', 'Butwal', 'Traffic Chowk , Street-5', '83.4750137', '27.6893645', '4000', '9812345678', '24hrs water supply is available and 24hrs electricity facility is available. There is a Proper parking facility is available.', 'bedroom.jpg'),
(6, 'Shyam', 'Room', 'province5', 'Rupandehi', 'Butwal', 'Purano Buspark , Street-5', '83.4750137', '27.6893645', '5000', '9812345678', '24hrs water supply is available and 24hrs electricity facility is available. There is a Proper parking facility is available.', '6.jpg'),
(8, 'Sita', 'Flat', 'province5', 'Rupandehi', 'Butwal', 'Chandbari ,Ghumti Path', '83.4750137', '27.6893645', '15000', '9812345678', '24hrs water and electricity facility is available and there is proper space of parking available.', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'ram', 'ram@gmail.com', 'ram123'),
(4, 'shyam', 'shyam@gmail.com', 'shyam123'),
(5, 'hari', 'hari@gmail.com', 'hari123'),
(6, 'nabin', 'nabin@gmail.com', 'nabin123'),
(7, 'ram', 'ram@gmail.com', 'ram@123'),
(8, 'ram', 'ram@gmail.com', 'ram@123'),
(9, 'hari', 'hari@gmail.com', 'hari@123'),
(10, 'ram', 'ram@gmail.com', 'ram123'),
(11, 'ram', 'ram@gmail.com', 'Ram@1234'),
(12, 'ram', 'ram@gmail.com', 'Ram@1234'),
(13, 'shyam', 'shyam@gmail.com', 'Shyam@123'),
(14, 'bhuban', 'bhuban@gmail.com', 'Bhuban@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
