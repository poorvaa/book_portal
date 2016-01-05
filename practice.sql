-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2015 at 06:53 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`book_id` int(10) NOT NULL,
  `issn` int(10) NOT NULL,
  `genre` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `no_books` int(10) NOT NULL,
  `author` text NOT NULL,
  `publication` varchar(25) NOT NULL,
  `edition` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `issn`, `genre`, `name`, `no_books`, `author`, `publication`, `edition`) VALUES
(100, 0, 'Suspense', 'abc', 2, 'abc', 'abc', '1'),
(101, 1000, 'Romance', 'abc', 2, 'ahhklh', 'addad', 'adaddadd');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`category`) VALUES
('Suspense'),
('Romance'),
('Fiction'),
('Academics');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`, `gender`, `dob`) VALUES
('sahil', 'chopra', 'abc@gmail.com', '123456', 'male', '2015-02-02'),
('aaa', 'aa', 'abc@gmail.com', '123456', 'male', '2015-02-01'),
('fa', 'fas', 'aaa@gmail.com', '123456', 'female', '2015-02-02'),
('sdfas', 'asfa', 'abc@gmail.com', '789456', 'male', '2015-02-02'),
('fdsaf', 'sdgds', 'abc@gmail.com', '123456', 'male', '2015-02-03'),
('dsas', 'af', 'sahilchopra111@yahoo.com', 'aaaaaaa', 'male', '2015-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
