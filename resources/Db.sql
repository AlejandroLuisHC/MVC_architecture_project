-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 02:29 PM
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
(2, 'Judas Priest', 5, 18, 1, 1970),
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
-- Table structure for table `grimner_albums`
--

CREATE TABLE `grimner_albums` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(50) NOT NULL,
  `album_img` varchar(999) NOT NULL,
  `spotify` varchar(999) NOT NULL,
  `album_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grimner_albums`
--

INSERT INTO `grimner_albums` (`album_id`, `album_name`, `album_img`, `spotify`, `album_year`) VALUES
(1, 'Färd', 'assets/img/grimner/fard.jpg', 'https://open.spotify.com/album/53SgOo5FH0CreBtKbaAudM', 2012),
(2, 'Blodshymner', 'assets/img/grimner/blodshymner.jpg', 'https://open.spotify.com/album/2rzCZOc76f0NcfNCrshTAV', 2014),
(3, 'Frost Mot Eld', 'assets/img/grimner/frostmoteld.jpg', 'https://open.spotify.com/track/1xxKctSp8p7kGN2dNqGjyI', 2016),
(4, 'Vanadrottning', 'assets/img/grimner/vanadrottning.jpg', 'https://open.spotify.com/track/4QVq7U72NIKhNxlhN6ewA9', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `judas_priest_albums`
--

CREATE TABLE `judas_priest_albums` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(50) NOT NULL,
  `album_img` varchar(999) NOT NULL,
  `spotify` varchar(999) NOT NULL,
  `album_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `judas_priest_albums`
--

INSERT INTO `judas_priest_albums` (`album_id`, `album_name`, `album_img`, `spotify`, `album_year`) VALUES
(1, 'Rocka Rolla', 'assets/img/judas_priest/rockarolla.jpg', 'https://open.spotify.com/album/7G2yBPbPAgSKucJQui2JT3', 1974),
(2, 'Sad Wings of Destiny', 'assets/img/judas_priest/sadwingsofdestiny.jpg', 'https://open.spotify.com/album/5k3WFIHmmuHrUWSj5McaAe', 1976),
(3, 'Sin After Sin', 'assets/img/judas_priest/sinaftersin.jpg', 'https://open.spotify.com/album/2GXeHOkRouW0LnKBMUnVtv', 1977),
(4, 'Stained Class', 'assets/img/judas_priest/stainedclass.jpg', 'https://open.spotify.com/album/0v6FGuCgvRotTNL1KoX297', 1978),
(5, 'Killing Machine', 'assets/img/judas_priest/killingmachine.jpg', 'https://open.spotify.com/album/5Ud4v6Y2UC3uNeTdVssXj0', 1978),
(6, 'British Steel', 'assets/img/judas_priest/britishsteel.jpg', 'https://open.spotify.com/album/5bqtZRbUZUxUps8mrO9tGY', 1980),
(7, 'Point of Entry', 'assets/img/judas_priest/pointofentry.jpg', 'https://open.spotify.com/album/02mDd1vg3xHPOxpNYkZIGP', 1981),
(8, 'Screaming for Vengeance', 'assets/img/judas_priest/screamingforvengeance.jpg', 'https://open.spotify.com/album/0V7mTTzioHiYIjfM8ATZBI', 1982),
(9, 'Defenders of the Faith', 'assets/img/judas_priest/defendersofthefaith.jpg', 'https://open.spotify.com/album/3o0mPpetAFCOIFkUaw1egl', 1984),
(10, 'Turbo', 'assets/img/judas_priest/turbo.jpg', 'https://open.spotify.com/album/1X3Cs1RNEUyxHN8tO0SFX0', 1986),
(11, 'Ram It Down', 'assets/img/judas_priest/ramitdown.jpg', 'https://open.spotify.com/album/1t2M4YmH8x9Tplcxq08H5l', 1988),
(12, 'Painkiller', 'assets/img/judas_priest/painkiller.jpg', 'https://open.spotify.com/album/7LgrhuKnAXpNEv8qzcVd2t', 1990),
(13, 'Jugulator', 'assets/img/judas_priest/jugulator.jpg', 'https://open.spotify.com/album/0ZavxbwwUN0s1ftGFbeZEG', 1997),
(14, 'Demolition', 'assets/img/judas_priest/demolition.jpg', 'https://open.spotify.com/album/29uDJyt4sV3iM5cfxGosOz', 2001),
(15, 'Angel of Retribution', 'assets/img/judas_priest/angelofretribution.jpg', 'https://open.spotify.com/album/12rTdEhRhwPpV0XJvZW9u1', 2005),
(16, 'Nostradamus', 'assets/img/judas_priest/nostradamus.jpg', 'https://open.spotify.com/album/2k2m2GaoRsa0aDxo6Z2lEQ', 2008),
(17, 'Redeemer of Souls', 'assets/img/judas_priest/redeemerofsouls.jpg', 'https://open.spotify.com/album/3zMWoczT6jWiuyQf3RPFn9', 2014),
(18, 'Firepower', 'assets/img/judas_priest/firepower.jpg', 'https://open.spotify.com/album/7p3G0OCxtlWyJcPE1FxnyB', 2018);

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
-- Indexes for table `grimner_albums`
--
ALTER TABLE `grimner_albums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `judas_priest_albums`
--
ALTER TABLE `judas_priest_albums`
  ADD PRIMARY KEY (`album_id`);

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
  MODIFY `band_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `grimner_albums`
--
ALTER TABLE `grimner_albums`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `judas_priest_albums`
--
ALTER TABLE `judas_priest_albums`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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