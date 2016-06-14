-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 12:11 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE IF NOT EXISTS `names` (
  `names` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`names`) VALUES
('bhawesh'),
('ankit'),
('radhika'),
('ramesh'),
('amanda'),
('saksham'),
('disha'),
('chindi'),
('raavishu'),
('pranav');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(200) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `securityque` varchar(15) NOT NULL,
  `securityans` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `gender`, `dob`, `password`, `securityque`, `securityans`) VALUES
(21, 'Bhawesh', 'Bhansali', 'bhansalibhawesh@yahoo.com', 'male', '1996-02-16', 'password2', 'birthplace', 'howrah'),
(22, 'Chetna ', 'Bhansali', 'chetnarbhansali@yahoo.com', 'female', '2001-07-31', 'password', 'birthplace', 'nagpur'),
(23, 'Tony', 'Stark', 'tonystark@ironman.com', 'male', '1994-09-06', 'password', 'color', 'red'),
(25, 'Saksham', 'Pandey', 'sakshampandey@gmail.com', 'male', '1996-06-12', 'password', 'birthplace', 'vadodra'),
(26, 'Disha', 'Parwani', 'dishaparwani@gmail.com', 'female', '1996-08-18', 'password', 'birthplace', 'hyderabad'),
(28, 'Amit', 'Vyas', 'amitvyas@live.com', 'male', '1993-02-01', 'password', 'color', 'black'),
(29, 'Raavishu', 'Sanghvi', 'raavsanghvi@yahoo.com', 'male', '1997-12-08', 'password', 'birthplace', 'dhanbad'),
(30, 'Bhumi', 'Kinariwala', 'bhumikinariwala@gmail.com', 'female', '2002-07-23', 'password', 'birthplace', 'nagpur'),
(31, 'Pranav', 'Walia', 'pranav@walia.com', 'male', '1996-07-29', 'password', 'birthplace', 'delhi'),
(32, 'Sharanya', 'Reddy', 'sharanyareddy@yahoo.com', 'female', '1996-05-07', 'password', 'birthplace', 'hyderabad'),
(33, 'Hamsa', 'Bharathi', 'hamsa@gmail.com', 'female', '1998-03-03', 'password', 'birthplace', 'manipal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
