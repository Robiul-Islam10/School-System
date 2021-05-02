-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 01:25 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `aid` int(1) NOT NULL,
  `us` varchar(65000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aid`, `us`) VALUES
(0, 'We are here to provide education of the highest standards.');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sid` int(100) NOT NULL,
  `jan` int(100) NOT NULL,
  `feb` int(100) NOT NULL,
  `mar` int(100) NOT NULL,
  `apr` int(100) NOT NULL,
  `may` int(100) NOT NULL,
  `jun` int(100) NOT NULL,
  `jul` int(100) NOT NULL,
  `aug` int(100) NOT NULL,
  `sept` int(100) NOT NULL,
  `oct` int(100) NOT NULL,
  `nov` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sid`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sept`, `oct`, `nov`) VALUES
(1710, 20, 15, 21, 18, 17, 20, 19, 16, 17, 20, 18),
(1711, 16, 18, 21, 18, 17, 20, 19, 16, 17, 20, 18),
(1712, 17, 15, 21, 18, 17, 20, 19, 16, 17, 20, 18),
(1713, 20, 15, 21, 18, 17, 20, 19, 16, 17, 20, 18),
(1714, 20, 15, 21, 18, 17, 20, 19, 18, 17, 20, 18),
(1715, 21, 15, 21, 18, 17, 20, 19, 16, 17, 20, 18),
(1716, 20, 15, 21, 18, 20, 20, 19, 16, 17, 20, 18),
(1717, 22, 15, 21, 18, 17, 20, 19, 16, 17, 20, 18),
(1718, 19, 15, 21, 18, 17, 20, 19, 16, 17, 20, 18),
(1719, 20, 15, 19, 18, 17, 20, 19, 16, 17, 20, 18),
(1720, 15, 15, 21, 18, 17, 21, 19, 16, 17, 20, 18);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `conid` int(1) NOT NULL,
  `contact` varchar(65000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`conid`, `contact`) VALUES
(0, 'House#10, Road#06, Dhaka\r\nPhone= 019999999');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `sid` int(100) NOT NULL,
  `course1` varchar(100) NOT NULL,
  `course2` varchar(100) NOT NULL,
  `course3` varchar(100) NOT NULL,
  `course4` varchar(100) NOT NULL,
  `course5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`sid`, `course1`, `course2`, `course3`, `course4`, `course5`) VALUES
(1710, 'Mathematics', 'English', 'Biology', 'Chemistry', 'Physics'),
(1711, 'Bangla', 'English', 'Biology', 'Chemistry', 'Physics'),
(1712, 'History', 'English', 'Biology', 'Chemistry', 'Physics'),
(1713, 'Mathematics', 'English', 'Biology', 'Chemistry', 'Physics'),
(1714, 'Bangla', 'Business Studies', 'Biology', 'Chemistry', 'Physics'),
(1715, 'Bangla', 'English', 'Mathematics', 'Chemistry', 'Physics'),
(1716, 'Mathematics', 'English', 'Religion', 'Chemistry', 'Physics'),
(1717, 'Bangla', 'English', 'Mathematics', 'Chemistry', 'Physics'),
(1718, 'Bangla', 'Mathematics', 'Biology', 'Chemistry', 'Science'),
(1719, 'Bangla', 'Mathematics', 'Biology', 'Chemistry', 'Physics'),
(1720, 'Mathematics', 'English', 'Social science', 'Chemistry', 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `deleterequest`
--

CREATE TABLE `deleterequest` (
  `tid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `pid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleterequest`
--

INSERT INTO `deleterequest` (`tid`, `sid`, `pid`) VALUES
(1704, NULL, 0),
(1702, 0, 0),
(1702, 1701, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `lastDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `balance`, `lastDate`) VALUES
(1710, 30000, '21-08-2019'),
(1711, 45000, '11-08-2019'),
(1712, 15000, '21-08-2019'),
(1713, 75000, '25-08-2019'),
(1714, 63000, '24-08-2019'),
(1715, 14523, '26-08-2019'),
(1716, 45600, '28-08-2019'),
(1717, 25000, '23-08-2019'),
(1718, 32000, '22-08-2019'),
(1719, 55000, '29-08-2019'),
(1720, 35000, '30-08-2019');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `pid` int(4) NOT NULL,
  `isRespond` int(1) NOT NULL,
  `msg` varchar(10000) NOT NULL,
  `response` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`pid`, `isRespond`, `msg`, `response`) VALUES
(1709, 0, 'uygug uygu y ygug', 'y'),
(1719, 0, 'bbbb bbbb bbbb', 'y'),
(4, 0, 'asd', ''),
(4, 0, 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noid` int(4) NOT NULL,
  `type` varchar(2) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `status` varchar(2) NOT NULL,
  `date/time` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noid`, `type`, `title`, `content`, `status`, `date/time`) VALUES
(1, 'a', 'sdasdsa', 'ad asnn nd sal d', 'c', 'NULL'),
(2, 'a', 'asdnknasn', 'asdnan asjkdnsak', 'c', 'NULL'),
(3, 'a', 'vjbjbj,b', 'vvvjvv  mh', 'c', 'NULL'),
(4, 'e', 'asdssad', 'xx asdsad', 'c', '12 12 2019'),
(5, 'a', 'vacation', 'closed', 'c', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sid` int(100) NOT NULL,
  `course1` varchar(100) NOT NULL,
  `course2` varchar(100) NOT NULL,
  `course3` varchar(100) NOT NULL,
  `course4` varchar(100) NOT NULL,
  `course5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sid`, `course1`, `course2`, `course3`, `course4`, `course5`) VALUES
(1710, 'Bangla (A+)', 'English (A)', 'Math (A+)', 'Religion (A+)', 'Science (A+)'),
(1711, 'Bangla (A+)', 'English (A-)', 'Math (A+)', 'Religion (A)', 'Science (A-)'),
(1712, 'Bangla (A+)', 'English (A+)', 'Math (A+)', 'Religion (A+)', 'Science (A+)'),
(1713, 'Bangla (A+)', 'English (A)', 'Math (A+)', 'Religion (A)', 'Science (A-)'),
(1714, 'Bangla (A+)', 'English (A-)', 'Math (A+)', 'Religion (A+)', 'Science (A-)'),
(1715, 'Bangla (A+)', 'English (A+)', 'Math (A+)', 'Religion (A)', 'Science (A-)'),
(1716, 'Bangla (A+)', 'English (B)', 'Math (A+)', 'Religion (A+)', 'Science (A+)'),
(1717, 'Bangla (A+)', 'English (F)', 'Math (A+)', 'Religion (A)', 'Science (A-)'),
(1718, 'Bangla (A+)', 'English (C)', 'Math (A+)', 'Religion (A+)', 'Science (A-)'),
(1719, 'Bangla (A+)', 'English (B+)', 'Math (A+)', 'Religion (A)', 'Science (A-)'),
(1720, 'Bangla (A+)', 'English (A-)', 'Math (A+)', 'Religion (A+)', 'Science (A-)');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(4) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tcontact` varchar(11) NOT NULL,
  `tgender` varchar(11) NOT NULL,
  `education` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `tphoto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tname`, `tcontact`, `tgender`, `education`, `subject`, `tphoto`) VALUES
(1704, 'teach', '0199999', 'Male', 'Bachelors', 'Bangla', '../upload/1704.JPG'),
(1709, 'teach1', '0199999', 'Male', 'Bachelors', 'Bangla', '../upload/1709.JPG'),
(1710, 'teach2', '0199999', 'Male', 'Bachelors', 'Bangla', '../upload/1710.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `gender`) VALUES
(4, 'lina', '1234', 'lina@gmail.com', 'female'),
(5, 'robi007', '895781', 'robi@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
