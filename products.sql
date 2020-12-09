-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 04:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scandiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `size` text DEFAULT NULL,
  `height` text DEFAULT NULL,
  `width` text DEFAULT NULL,
  `length` text DEFAULT NULL,
  `weight` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `price`, `size`, `height`, `width`, `length`, `weight`) VALUES
(28, 'JVC200123', 'Acme DISC', '1.00 $', '700 MB', '', '', '', ''),
(29, 'JVC200123', 'Acme DISC', '1.00 $', '700 MB', '', '', '', ''),
(30, 'JVC200123', 'Acme DISC', '1.00 $', '700 MB', '', '', '', ''),
(31, 'JVC200123', 'Acme DISC', '1.00 $', '700 MB', '', '', '', ''),
(34, 'GGWP0007', 'War and Peace', '20.00 $', '', '', '', '', '2 KG'),
(35, 'GGWP0007', 'War and Peace', '20.00 $', '', '', '', '', '2 KG'),
(36, 'GGWP0007', 'War and Peace', '20.00 $', '', '', '', '', ' 2 KG'),
(37, 'GGWP0007', 'War and Peace', '20.00 $', '', '', '', '', ' 2 KG'),
(39, 'new', 'new', '2', '', '100', '200', '300', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
