-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 10:28 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starchild`
--

-- --------------------------------------------------------

--
-- Table structure for table `asteroidsquiz`
--

CREATE TABLE `asteroidsquiz` (
  `id` int(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `userans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asteroidsquiz`
--

INSERT INTO `asteroidsquiz` (`id`, `que`, `option_1`, `option_2`, `option_3`, `option_4`, `ans`, `userans`) VALUES
(1, 'niaje', '4 billion years', 'heat', 'hot particles', 'flare', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `cometsquiz`
--

CREATE TABLE `cometsquiz` (
  `id` int(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `userans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cometsquiz`
--

INSERT INTO `cometsquiz` (`id`, `que`, `option_1`, `option_2`, `option_3`, `option_4`, `ans`, `userans`) VALUES
(1, 'niaje', 'mtu', 'nuclear reaction', 'bomb', 'none of the above', 'aurora', '');

-- --------------------------------------------------------

--
-- Table structure for table `meteoritesquiz`
--

CREATE TABLE `meteoritesquiz` (
  `id` int(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `userans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meteoritesquiz`
--

INSERT INTO `meteoritesquiz` (`id`, `que`, `option_1`, `option_2`, `option_3`, `option_4`, `ans`, `userans`) VALUES
(1, 'what is the name of the process that gives the sun its energy?', 'mtu', 'heat', 'sun spots', 'none of the above', 'sun spots', ''),
(2, 'what is the name of the process that gives the sun its energy?', 'mtu', 'heat', 'sun spots', 'none of the above', 'sun spots', ''),
(3, 'niaje', 'mtu', 'heat', 'buda', 'none of the above', 'solar flares', '');

-- --------------------------------------------------------

--
-- Table structure for table `moonquiz`
--

CREATE TABLE `moonquiz` (
  `id` int(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `userans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moonquiz`
--

INSERT INTO `moonquiz` (`id`, `que`, `option_1`, `option_2`, `option_3`, `option_4`, `ans`, `userans`) VALUES
(1, 'what is the name given to the storms seen on the surface of the sun?', 'nuclear fusion', 'heat', 'hot particles', 'none of the above', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `planetsquiz`
--

CREATE TABLE `planetsquiz` (
  `id` int(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `userans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sunquiz`
--

CREATE TABLE `sunquiz` (
  `id` int(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `userans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sunquiz`
--

INSERT INTO `sunquiz` (`id`, `que`, `option_1`, `option_2`, `option_3`, `option_4`, `ans`, `userans`) VALUES
(1, 'How old is the sun?', '4 billion years', '3 million years', '7 billion years', '1 billion years', '4 billion years', 'solar flares'),
(2, 'what is the name of the process that gives the sun its energy?', 'nuclear fusion', 'nuclear reaction', 'chain reaction', 'none of the above', 'nuclear fusion', 'nuclear fusion'),
(3, 'what is the name given to the big explosions of energy produced by the sun? ', 'solar flares', 'dots', 'hot particles', 'flare', 'aurora', 'solar flares'),
(4, 'what is the name given to the particles from the sun that hit the earth?', 'solar flares', 'big boom', 'chain reaction', 'flare', 'solar flares', 'solar flares'),
(5, 'what is the name given to the storms seen on the surface of the sun?', 'solar flares', 'heat', 'hot particles', '1 billion years', 'solar flares', 'solar flares');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fullnames` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullnames`, `username`, `email`, `password`, `permissions`) VALUES
(1, 'thomas mwangi', 'mwangit', '', 'tomas', ''),
(2, 'thomas mwangi', 'mwangit', '', 'tomas', ''),
(3, 'hild msu', 'garder', 'thomasmwangi96@gmail.com', '1234', ''),
(4, 'ule msee', 'msee', 'msee@gmail.com', '1234', 'admin'),
(5, 'shannon', 'shan', 'shan@gmail', '1234', ''),
(6, 'megan', 'meg', 'meg@gmail', '1234', ''),
(7, 'thomas', 'mwangi', 'thomasmwangi96@gmail.com', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asteroidsquiz`
--
ALTER TABLE `asteroidsquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cometsquiz`
--
ALTER TABLE `cometsquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meteoritesquiz`
--
ALTER TABLE `meteoritesquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moonquiz`
--
ALTER TABLE `moonquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planetsquiz`
--
ALTER TABLE `planetsquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunquiz`
--
ALTER TABLE `sunquiz`
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
-- AUTO_INCREMENT for table `asteroidsquiz`
--
ALTER TABLE `asteroidsquiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cometsquiz`
--
ALTER TABLE `cometsquiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meteoritesquiz`
--
ALTER TABLE `meteoritesquiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `moonquiz`
--
ALTER TABLE `moonquiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planetsquiz`
--
ALTER TABLE `planetsquiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sunquiz`
--
ALTER TABLE `sunquiz`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
