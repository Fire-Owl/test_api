-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2022 at 12:22 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currencyID` int(11) NOT NULL,
  `currencyName` longtext NOT NULL,
  `currencyRate` decimal(6,5) NOT NULL,
  `currencyDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currencyID`, `currencyName`, `currencyRate`, `currencyDate`) VALUES
(1, 'EURUSD', '1.13137', '2022-01-05'),
(2, 'EURUSD', '1.13137', '2022-01-05'),
(3, 'EURUSD', '1.13237', '2022-01-05'),
(4, 'EURUSD', '1.13237', '2022-01-05'),
(5, 'EURUSD', '1.13037', '2022-01-05'),
(6, 'EURUSD', '1.14037', '2022-01-05'),
(7, 'EURUSD', '1.13337', '2022-01-06'),
(8, 'EURUSD', '1.13537', '2022-01-06'),
(9, 'EURUSD', '1.13137', '2022-01-06'),
(10, 'EURUSD', '1.13237', '2022-01-06'),
(11, 'EURUSD', '1.13237', '2022-01-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currencyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currencyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
