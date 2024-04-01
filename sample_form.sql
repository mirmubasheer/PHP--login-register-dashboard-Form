-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 06:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `myform`
--

CREATE TABLE `myform` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myform`
--

INSERT INTO `myform` (`id`, `firstname`, `lastname`, `age`, `email`, `password`, `dt`) VALUES
(13, 'brother', 'khan', 56, 'brother@gmail.com', '1234567890', '2024-03-29 02:36:34'),
(14, 'brother', 'khan', 56, 'brother@gmail.com', '1234567890', '2024-03-29 02:38:17'),
(15, 'brother', 'khan', 56, 'brother@gmail.com', '1234567890', '2024-03-29 02:40:01'),
(16, 'go ', 'to', 58, 'new@gmail.com', '1234567890', '2024-03-29 22:07:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myform`
--
ALTER TABLE `myform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myform`
--
ALTER TABLE `myform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
