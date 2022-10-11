-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 10:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bands`
--

-- --------------------------------------------------------

--
-- Table structure for table `bands_data`
--

CREATE TABLE `bands_data` (
  `band_id` int(11) NOT NULL,
  `band_name` varchar(25) NOT NULL,
  `no_members` int(15) NOT NULL,
  `no_albums` int(11) NOT NULL,
  `band_genre` int(11) DEFAULT NULL,
  `formed_in` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bands_data`
--

INSERT INTO `bands_data` (`band_id`, `band_name`, `no_members`, `no_albums`, `band_genre`, `formed_in`) VALUES
(1, 'Grimner', 6, 4, 4, 2008),
(2, 'Judas Priest', 5, 19, 1, 1970),
(3, 'Amon Amarth', 5, 12, 2, 1992),
(4, 'Finntroll', 7, 7, 4, 1997),
(5, 'Bathory', 3, 12, 3, 1983);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre`) VALUES
(1, 'Heavy Metal'),
(2, 'Death metal'),
(3, 'Black Metal'),
(4, 'Folk metal'),
(5, 'Power metal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@admin.com', '123456', 'admin'),
(2, 'user', 'user@user.com', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bands_data`
--
ALTER TABLE `bands_data`
  ADD PRIMARY KEY (`band_id`),
  ADD KEY `band_style` (`band_genre`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bands_data`
--
ALTER TABLE `bands_data`
  MODIFY `band_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bands_data`
--
ALTER TABLE `bands_data`
  ADD CONSTRAINT `bands_data_ibfk_1` FOREIGN KEY (`band_genre`) REFERENCES `genres` (`genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
