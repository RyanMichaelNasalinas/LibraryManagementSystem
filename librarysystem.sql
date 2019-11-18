-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 12:46 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarysystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_isssued`
--

CREATE TABLE `books_isssued` (
  `id` int(11) NOT NULL,
  `std_enrollment_num` int(11) NOT NULL,
  `std_num` varchar(256) NOT NULL,
  `std_sem` varchar(256) NOT NULL,
  `std_contact_num` int(11) NOT NULL,
  `book_name` varchar(256) NOT NULL,
  `book_issue_date` date NOT NULL,
  `book_returned_date` date NOT NULL,
  `std_usernmae` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books_lists`
--

CREATE TABLE `books_lists` (
  `id` int(11) NOT NULL,
  `book_name` varchar(256) NOT NULL,
  `book_authorname` varchar(256) NOT NULL,
  `book_publisher` varchar(256) NOT NULL,
  `book_purchaser_date` date NOT NULL,
  `book_price` varchar(256) NOT NULL,
  `book_qty` int(11) NOT NULL,
  `book_avail_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `contact` int(11) NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `firstname`, `lastname`, `gender`, `username`, `password`, `email`, `contact`, `user_level`) VALUES
(1, 'librarian', 'librarian', 'male', 'librarian', '$2y$10$i8JMyEUhc724IlZAi9FSLu1A1ddxZuDjEMOvATJoWBxAJ1bvxmEPi', 'librarian@email.com', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `contact` varchar(256) NOT NULL,
  `sem` int(11) NOT NULL,
  `enrollment_num` int(11) NOT NULL,
  `std_status` varchar(256) NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `gender`, `username`, `password`, `email`, `contact`, `sem`, `enrollment_num`, `std_status`, `user_level`) VALUES
(1, 'Admin', 'Admin', 'Male', 'Admin', '$2y$10$i8JMyEUhc724IlZAi9FSLu1A1ddxZuDjEMOvATJoWBxAJ1bvxmEPi', 'Admin@yahoo.com', '09123456789', 1, 1, 'active', 2),
(2, 'Ryan', 'Michaels', 'Male', 'MikeManticore', 'admin', 'MikeManticore@gmail.com', '09123456789', 2, 2, 'active', 1),
(27, 'asd', 'asd', '', '', '$2y$10$i499L/nL1bkoP9dcS7NrKu/uMEHpkJtFNE7afjJ69ajOZPvHGkrQm', '', '0', 0, 0, '', 0),
(28, 'asd', 'asd', '', '', '$2y$10$6UkLtR/YQ01DmyfK5UdLauXs1sGhVxEe9EZl0/xcrL1Pe5RtWQO1u', '', '0', 0, 0, '', 0),
(29, 'asd', 'sasd', '', '', '$2y$10$GCatt2NX4gvL1UA1eKiTFOknYDVGvwIcWohMc6vSnd7iaaWoNwARS', '', '0', 0, 0, '', 0),
(30, 'asd', 'asd', '', '', '$2y$10$e4KYQ6BeJgmZlm0a38URFO7U8Rvnb.GBTlytWyT2OaEH8VummKqQu', '', '0', 0, 0, '', 0),
(31, 'lkkl', 'lkkl', '', '', '$2y$10$zC6/c.6XIGXgOj6ev/YEOOkCKOL4Qrf2DsLXD.fZfBb1Kth73A2/O', '', '0', 0, 0, '', 0),
(32, 'qweweqew', 'qwewqeewq', '', '', '$2y$10$q5SwcpFcoCv8AVzP3vccSOaKPIpT5SocuJ4ZjA8H6cwnEK1ZATEVi', '', '0', 0, 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_isssued`
--
ALTER TABLE `books_isssued`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books_lists`
--
ALTER TABLE `books_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_isssued`
--
ALTER TABLE `books_isssued`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books_lists`
--
ALTER TABLE `books_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
