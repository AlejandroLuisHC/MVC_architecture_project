-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 02:56 PM
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
  `band_style` int(11) NOT NULL,
  `formed_in` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bands_data`
--

INSERT INTO `bands_data` (`band_id`, `band_name`, `no_members`, `no_albums`, `band_style`, `formed_in`) VALUES
(1, 'Grimner', 6, 4, 4, 2008),
(2, 'Judas Priest', 5, 19, 1, 1970),
(3, 'Amon Amarth', 5, 12, 2, 1992),
(4, 'Finntroll', 7, 7, 4, 1997),
(5, 'Bathory', 3, 12, 3, 1983);

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `style_id` int(11) NOT NULL,
  `style` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`style_id`, `style`) VALUES
(1, 'Heavy metal'),
(2, 'Death metal'),
(3, 'Black Metal'),
(4, 'Folk metal'),
(5, 'Power metal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bands_data`
--
ALTER TABLE `bands_data`
  ADD PRIMARY KEY (`band_id`),
  ADD KEY `band_style` (`band_style`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`style_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bands_data`
--
ALTER TABLE `bands_data`
  MODIFY `band_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `style_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bands_data`
--
ALTER TABLE `bands_data`
  ADD CONSTRAINT `bands_data_ibfk_1` FOREIGN KEY (`band_style`) REFERENCES `styles` (`style_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;