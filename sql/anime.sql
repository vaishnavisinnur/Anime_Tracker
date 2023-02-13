-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 09:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime1`
--

CREATE TABLE `anime1` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `anime` varchar(50) NOT NULL,
  `episode` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime1`
--

INSERT INTO `anime1` (`id`, `user_id`, `anime`, `episode`, `status`) VALUES
(15, 11, 'Attack On Titan', 71, 'WATCHING'),
(36, 19, 'Darling in the Franxx', 26, 'COMPLETED'),
(41, 21, 'Shingeki No Kyojin', 71, 'WATCHING'),
(42, 21, 'Devil Man Crybaby', 0, 'PLANNING'),
(43, 21, 'One piece', 1000, 'WATCHING'),
(45, 21, 'Naruto', 720, 'COMPLETED'),
(46, 21, 'Bleach', 366, 'COMPLETED'),
(47, 21, 'Steins Gate', 48, 'COMPLETED'),
(48, 21, 'Kimetsu No Yaiba', 47, 'WATCHING'),
(49, 21, 'Sono bisque Doll Wa Koi wo suru', 0, 'PLANNING'),
(50, 21, 'Aharen san Wa Hakaranai', 0, 'PLANNING'),
(51, 21, 'Dragon Ball', 804, 'COMPLETED'),
(52, 21, 'Jojo No Kimyono Bouken', 164, 'WATCHING'),
(53, 21, 'Full Metal Panic', 0, 'PLANNING');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `chapter` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`id`, `user_id`, `name`, `chapter`, `status`) VALUES
(7, 11, 'One Piece', 1034, 'READING'),
(14, 11, 'komi san wa komyushou desu', 333, 'READING'),
(15, 11, '5-toubun no hanauome', 122, 'COMPLETED'),
(21, 21, 'One Piece', 1034, 'READING'),
(22, 21, 'Kimetsu No Yaiba', 208, 'COMPLETED'),
(23, 21, 'Jujutsu Kaisen', 0, 'PLANNING');

-- --------------------------------------------------------

--
-- Table structure for table `manhua`
--

CREATE TABLE `manhua` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `chapter` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manhua`
--

INSERT INTO `manhua` (`id`, `user_id`, `name`, `chapter`, `status`) VALUES
(8, 11, 'Martial Peak', 1780, 'READING'),
(9, 21, 'Martial Peak', 1780, 'READING'),
(10, 21, 'Tales Of Demons And Gods', 500, 'COMPLETED'),
(11, 21, 'Apotheosis', 0, 'PLANNING');

-- --------------------------------------------------------

--
-- Table structure for table `manhwa`
--

CREATE TABLE `manhwa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `chapter` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manhwa`
--

INSERT INTO `manhwa` (`id`, `user_id`, `name`, `chapter`, `status`) VALUES
(3, 11, 'Solo Leveling', 180, 'READING'),
(17, 21, 'Gosu', 233, 'COMPLETED'),
(18, 21, 'Viral Hit', 0, 'PLANNING'),
(19, 21, 'Solo Leveling', 180, 'READING');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mno` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email_id`, `mno`, `password`) VALUES
(10, 'manoj', 'abc@gmail.com', '11203456789', 'qwerty'),
(11, 'Srivathsa', 'hello@gmail.com', '6754891230', 'qwerty'),
(19, 'Deepika', 'zoro@gmail.com', '9741843734', 'abcde'),
(20, 'Deepthi', 'Dee@gmail.com', '9761313131', 'qwerty'),
(21, 'Gintoki', 'gintama@gmail.com', '9480084124', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime1`
--
ALTER TABLE `anime1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test` (`user_id`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `manhua`
--
ALTER TABLE `manhua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `manhwa`
--
ALTER TABLE `manhwa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime1`
--
ALTER TABLE `anime1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `manhua`
--
ALTER TABLE `manhua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `manhwa`
--
ALTER TABLE `manhwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anime1`
--
ALTER TABLE `anime1`
  ADD CONSTRAINT `Test` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manga`
--
ALTER TABLE `manga`
  ADD CONSTRAINT `manga_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manhua`
--
ALTER TABLE `manhua`
  ADD CONSTRAINT `manhua_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manhwa`
--
ALTER TABLE `manhwa`
  ADD CONSTRAINT `manhwa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
