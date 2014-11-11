-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2014 at 06:19 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wad`
--

-- --------------------------------------------------------

--
-- Table structure for table `user-info`
--

CREATE TABLE IF NOT EXISTS `user-info` (
`uid` int(11) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user-info`
--

INSERT INTO `user-info` (`uid`, `usertype`, `email`, `firstname`, `lastname`, `city`, `address`) VALUES
(1, 'admin', 'vladvidac@gmail.com', 'Vlad', 'Vidac', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user-login`
--

CREATE TABLE IF NOT EXISTS `user-login` (
`uid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user-login`
--

INSERT INTO `user-login` (`uid`, `email`, `password`) VALUES
(1, '2f0d064289facc3ca8fc620070b52513', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user-info`
--
ALTER TABLE `user-info`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user-login`
--
ALTER TABLE `user-login`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user-info`
--
ALTER TABLE `user-info`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user-login`
--
ALTER TABLE `user-login`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
