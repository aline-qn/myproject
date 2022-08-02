-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 04:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `password`, `comment`) VALUES
(0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `p_number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `names`, `p_number`, `email`, `password`) VALUES
(2, 'Alleng', 784964814, 'kimtifah2@gmail.com', '243'),
(3, 'ANGEP', 789595959, 'ang3@gmail.com', '25233'),
(4, 'Yannick', 789484848, 'kimtifah2@gmail.com', 'hsdhd');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `id` int(11) NOT NULL,
  `names` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `names`, `email`, `password`, `comment`) VALUES
(1, 'Aline', 'alinenyiranizeyimana@gmail.com', 'lann', 'computer issues'),
(2, 'Solange', 'soso@gmail.com', 'asd', 'trouble'),
(4, 'Alius', 'al@gmail.com', 'slsl', 'broken'),
(5, 'Erias', 'er@gmail.com', '2324', 'screen not working'),
(6, 'Emima', 'niyo@gmail.com', 'ere', 'computer'),
(10, 'Akimana Latifah', 'kimtif2@gmail.com', '33', 'ok'),
(27, 'charry', 'charry2@gmail.com', 'sgd', 'computer'),
(28, 'paccy', 'p@gmail.com', '242', '123'),
(30, 'paccy', 'p@gmail.com', '242', '123'),
(33, 'fiona', 'f@gmail.com', 'wsjds', 'computer'),
(37, 'delpha', 'kimtih2@gmail.com', 'jfhf', 'comp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
