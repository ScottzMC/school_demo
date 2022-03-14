-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 12:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `school_id` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `school_id`, `fullname`, `email`, `created_at`) VALUES
(1, 15, 'Mike Archard', 'mike275@gmail.com', '2022-03-13 21:45:00'),
(2, 17, 'Terry Tiger', 'terry@gmail.com', '2022-03-13 22:02:30'),
(3, 15, 'Carlos Aguilera', 'carlos@gmail.com', '2022-03-13 22:03:38'),
(7, 17, 'Scott Nnaghor', 'scottphenix24@gmail.com', '2022-03-14 12:25:41'),
(8, 21, 'Sarah henderson', 'sarah@email.com', '2022-03-14 12:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `county` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `registered_at` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school_name`, `address`, `county`, `city`, `postcode`, `registered_at`, `created_at`) VALUES
(15, 'Grange', '36 Manser road', 'Rainham', 'Essex', 'RM13 8NL', '2022-03-13', '2022-03-13 20:06:44'),
(17, 'West High school', '36 Oxford circus', 'London', 'London', 'EC1 2RY', '2022-03-07', '2022-03-13 21:43:20'),
(18, 'Avicenna', 'Stratford Old road', 'Angel', 'London', 'N1 G11', '2022-03-12', '2022-03-13 21:44:22'),
(21, 'Forest highgate', '93 Wilmington Gardens', 'Barking', 'London', 'IG119TR', '2022-03-14', '2022-03-14 18:57:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
