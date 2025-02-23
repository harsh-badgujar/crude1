-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 08:06 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `fName` varchar(45) NOT NULL,
  `lName` varchar(45) NOT NULL,
  `division` varchar(45) NOT NULL,
  `district` varchar(45) NOT NULL,
  `zipCode` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `fName`, `lName`, `division`, `district`, `zipCode`, `email`, `pass`) VALUES
(5, 'mmmmm', 'hhhhh', 'Rajshahi', 'Rajshahi', '1343', 'rabbi15-242@diu.edu.bd', '202cb962ac59075b964b07152d234b70'),
(6, 'aaa', 'bbb', 'Rajshahi', 'Natore', '1343', 'aaa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'hoimonti', 'opu', 'Rajshahi', 'Natore', '4444', 'opu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'G', 'o', 'Dhaka', 'Rajshahi', '222', 'g@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'xpp', 'xpp', 'Rajshahi', 'Rajshahi', '2345', 'xpp@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'Golam', 'Rabbi', 'Choose...', 'Choose...', '1343', 's@mail.com', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
