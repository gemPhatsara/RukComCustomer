-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 05:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `id` int(3) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`id`, `firstname`, `lastname`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(5, 'Steve', 'Rogers', 'steve@avenger.com', '022222222', '2022-02-26', '2022-02-26'),
(6, 'Tony', 'Stark', 'tony@avenger.com', '0000000001', '2022-02-26', '2022-02-26'),
(7, 'Thor', 'Odinson', 'thor@avenger.com', '0000000002', '2022-02-26', '2022-02-26'),
(8, 'Loki', 'Odinson', 'loki@asgard.com', '0000000003', '2022-02-26', '2022-02-26'),
(9, 'Clint', 'Barton', 'clint@avenger.com', '0000000004', '2022-02-26', '2022-02-26'),
(10, 'Natacha', 'Romanoff', 'natt@avenger.com', '0000000005', '2022-02-26', '2022-02-26'),
(11, 'Bruce', 'Banner', 'bruce@avenger.com', '0000000006', '2022-02-26', '2022-02-26'),
(12, 'Peter', 'Parker', 'peter@avenger.com', '0000000007', '2022-02-26', '2022-02-26'),
(13, 'Dr.Stephen', 'Strange', 'stephen@avenger.com', '0000000008', '2022-02-26', '2022-02-26'),
(14, 'T\'Challa', 'Boseman', 'tchalla@avenger.com', '0000000007', '2022-02-26', '2022-02-26'),
(15, 'Scott', 'Lang', 'scott@avenger.com', '0000000009', '2022-02-26', '2022-02-26'),
(16, 'Hope', 'Vandyne', 'hope@avenger.com', '0000000010', '2022-02-26', '2022-02-26'),
(17, 'Nicolas Joseph', 'Fury', 'nick@avenger.com', '0000000011', '2022-02-26', '2022-02-26'),
(18, 'Carol', 'Danvers', 'carol@avenger.com', '0000000012', '2022-02-26', '2022-02-26'),
(19, 'Sam', 'Willson', 'sam@avenger.com', '0000000013', '2022-02-26', '2022-02-26'),
(21, 'Jame Buchanan', 'Barnes', 'bucky@avenger.com', '0000000014', '2022-02-26', '2022-02-26'),
(22, 'Wanda', 'Maximoff', 'wanda@avenger.com', '0000000015', '2022-02-26', '2022-02-26'),
(23, 'Pietro', 'Maximoff', 'quicksilver@avenger.com', '0000000015', '2022-02-26', '2022-02-26'),
(24, 'Vision', 'Maximoff', 'jarvis@avenger.com', '0000000016', '2022-02-26', '2022-02-26'),
(25, 'Stan', 'Lee', 'stanlee@avenger.com', '0000000017', '2022-02-26', '2022-02-26'),
(26, 'James', 'Rhodes', 'jame@avenger.com', '0000000018', '2022-02-26', '2022-02-26'),
(27, 'Hank', 'Pym', 'hank@avenger.com', '0000000017', '2022-02-26', '2022-02-26'),
(28, 'Yelena', 'Belova', 'yelena@avenger.com', '0000000018', '2022-02-26', '2022-02-26'),
(30, 'Peter', 'Quill', 'starlord@avenger.com', '0000000019', '2022-02-26', '2022-02-26'),
(31, 'Rocket', 'Raccoon', 'rocket@avenger.com', '0000000020', '2022-02-26', '2022-02-26'),
(32, 'Gamora', 'GOTG', 'gamora@avenger.com', '0000000021', '2022-02-26', '2022-02-26'),
(33, 'Groot', 'I am Groot', 'groot@avenger.com', '0000000022', '2022-02-26', '2022-02-26'),
(34, 'Drax', 'The Destroyer', 'drax@avenger.com', '0000000023', '2022-02-26', '2022-02-26'),
(35, 'Mantis', 'GOTG', 'mantis@avenger.com', '0000000024', '2022-02-26', '2022-02-26'),
(36, 'Nebula', 'GOTG', 'nebula@avenger.com', '0000000025', '2022-02-26', '2022-02-26'),
(37, 'Ebony', 'Maw', 'ebony@blackorder.com', '0000000026', '2022-02-26', '2022-02-26'),
(38, 'Cull', 'Obsidian', 'cull@blackorder.com', '0000000027', '2022-02-26', '2022-02-26'),
(39, 'Proxima', 'Midnight', 'proxima@blackorder.com', '0000000028', '2022-02-26', '2022-02-26'),
(40, 'Corvus', 'Glaive', 'corvus@blackorder.com', '0000000029', '2022-02-26', '2022-02-26'),
(41, 'Thanos', 'I am Inevitable', 'thanos@example.com', '0341234567', '2022-02-26', '2022-02-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
