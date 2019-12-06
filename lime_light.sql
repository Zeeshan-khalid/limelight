-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 09:58 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lime_light`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'ZEESHAN KHALID', 'roadside16@gmail.com', '123456'),
(2, 'ZEESHAN KHALID', 'roadside16@gmail.com', '123456'),
(3, 'ZEESHAN KHALID', 'roadside16@gmail.com', '1212121'),
(4, 'sddfds', 'sfdsfs@gmail.com', 'fdfsdfds'),
(7, 'Ali', 'zkhalid@fsc.com', '12345'),
(8, 'admin', 'roadside16@gmail.com', 'admin'),
(13, 'ZEESHAN KHALID', 'sjamshaid@fsc.com', 'dsdsds'),
(14, 'ZEESHAN KHALID', 'sjamshaid@fsc.com', 'dsdsds'),
(15, 'ZEESHAN KHALID', 'roadside16@gmail.com', '121212'),
(16, 'ZEESHAN KHALID', 'roadside16@gmail.com', 'fsfdsf'),
(17, 'ZEESHAN KHALID', 'roadside16@gmail.com', 'asdsada'),
(18, 'ZEESHAN KHALID', 'roadside16@gmail.com', 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `opport`
--

CREATE TABLE `opport` (
  `id` int(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opport`
--

INSERT INTO `opport` (`id`, `title`, `description`, `image`) VALUES
(6, 'Zeeshan here', 'Hello my name is zeeshan khalid', 'e20ca76b611e9bf7fe5f362153f60151.png'),
(7, 'Umer here', 'fdshfsdkhflksfjksjkf', 'f3210264c16285eeda840f1ad3140db1.jpg'),
(8, '4) Required plumbers', 'We need plumbers for our new dubai company urgenty please visit our office for more details', '2da25281a4bf45f8dd92b53c85dc7e9b.png'),
(9, 'Umer here', 'Hello my name is zeeshan khalid', '92867ebe5fac9ff2462922eb8f5e0aa0.png'),
(10, 'Zeeshan here', 'Hello my name is zeeshan khalid', '494b4bab6fe3db6bd02c2f618dfd54c3.jpg'),
(11, 'Zeeshan here', 'Hello my name is zeeshan khalid', '639b4385f45180e7e61a043330797c7f.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opport`
--
ALTER TABLE `opport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `opport`
--
ALTER TABLE `opport`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
