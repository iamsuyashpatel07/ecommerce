-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 05:28 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinesale`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `message`) VALUES
('patelcode_123', 'sumrj@gmail.com', 'gcvvvvvvvvgx'),
('rexqw', 'rexqw@gmail.com', 'hello,how can i get your number');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `name`, `email`, `price`) VALUES
(1, 'hello', 'hdgfgvvx@gmail.com', 300),
(1, 'earphone', 'junior@yahoo.com', 900),
(1, 'earphone', 'junior@yahoo.com', 900),
(1, 'earphone', 'rocky@gmail.com', 900),
(1, 'earphone', 'yashrajpatel@gmail.com', 900),
(1, 'earphone', 'yashrajpatel@gmail.com', 900);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `contact` int(13) NOT NULL,
  `city` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'ram@gmail.com', 'ram@gmail.com', 'hellog7', 2147483647, 'Gorakhpur', '429f,Azad Nagar, Gorakhpur-273016, Uttar Pradesh,India'),
(2, 'hee@gmail.com', 'hee@gmail.com', 'hello007', 2147483647, 'Gorakhpur', '429f,Azad Nagar, Gorakhpur-273016, Uttar Pradesh,India'),
(3, 'junior@yahoo.com', 'junior@yahoo.com', 'junior@yahoo.co', 2147483647, 'Gorakhpur', '429f,Azad Nagar, Gorakhpur-273016, Uttar Pradesh,India'),
(4, 'hi@gmail.com', 'hi@gmail.com', 'hi@gmail.com', 2147483647, 'Gorakhpur', '429f,Azad Nagar, Gorakhpur-273016, Uttar Pradesh,India'),
(5, 'rex@gmail.com', 'rex@gmail.com', 'rex@gmail.com', 2147483647, 'Gorakhpur', '429f,Azad Nagar, Gorakhpur-273016, Uttar Pradesh,India'),
(6, 'rocky@gmail.com', 'rocky@gmail.com', 'rocky@gmail.com', 2147483647, 'Gorakhpur', '429f,Azad Nagar, Gorakhpur-273016, Uttar Pradesh,India'),
(7, 'YASHRAJ PATEL', 'yashrajpatel@gmail.com', 'yashrajpatel@gmail.com', 2147483647, 'Gorakhpur', '429f,Azad Nagar, Gorakhpur-273016, Uttar Pradesh,India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD KEY `hello` (`products_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
