-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 08:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactionhistory`
--

CREATE TABLE `transactionhistory` (
  `id` int(100) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionhistory`
--

INSERT INTO `transactionhistory` (`id`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(11, 'Vineet Krishna Gupta', 'Arun Pratap', '1000', '2022-07-14 16:51:27'),
(12, 'Arun Pratap', 'Vineet Krishna Gupta', '5000', '2022-07-14 16:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Amount` varchar(50) NOT NULL DEFAULT '10000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `Amount`) VALUES
(22, 'Vineet Krishna Gupta', 'vineetkrishnagupta@outlook.com', '24000'),
(23, 'Adtya Gupta', 'adtya@gmail.com', '2000'),
(24, 'Ankit Kumar ', 'ankit@gmail.com', '200000'),
(25, 'Himanshu', 'himanshu@gmail.com', '3000'),
(26, 'Arun Pratap', 'arun@gmail.com', '396000'),
(27, 'Ishaan', 'ishaan@gmail.com', '3400'),
(28, 'Rohan', 'rohan@gmail.com', '20000'),
(29, 'Viraj', 'viraj@gmail.com', '30000'),
(30, 'Arjun', 'arjun@gamil.com', '4000'),
(31, 'Dhruv', 'Dhruv@gmail.com', '3000'),
(32, 'Lakshan', 'lakshan@gmail.com', '3000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactionhistory`
--
ALTER TABLE `transactionhistory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
