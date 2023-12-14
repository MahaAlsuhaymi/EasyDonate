-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 11:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `don_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `type`, `org_name`, `address`, `contact`, `don_date`, `user_id`, `user_name`) VALUES
(14, 'blood', 'ethar', 'KSAa', '5555', '2023-12-12', 0, ''),
(15, 'clothes', 'Kaswa', 'Jedah', '5555', '2023-12-12', 0, ''),
(16, 'books', 'Tadweer', 'jedah', '7777', '2023-12-12', 0, 'sammer'),
(17, 'books', 'Tadweer', 'Makah', '788552', '2023-12-12', 6, 'ahmed'),
(18, 'food', 'Saudi_Food_Bank', 'Ksa', '44487', '2023-12-12', 0, 'ali'),
(19, 'food', 'Saudi_Food_Bank', 'KSA', '44442', '2023-12-12', 0, 'ali'),
(20, 'food', 'Saudi_Food_Bank', 'Jedah', '74741', '2023-12-12', 0, 'samy'),
(21, 'clothes', 'Lebas', 'KSA', '4145', '2023-12-12', 6, 'ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `status`) VALUES
(2, 'ٍsara', 'sara@gmail.com', '7f17f3786af548af4e2abff1f19849a3', 0),
(3, 'Admin', 'admin@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 1),
(5, 'sam', 'sam@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 0),
(6, 'ahmed', 'ahmed@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
