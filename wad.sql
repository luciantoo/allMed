-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2014 at 02:44 PM
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
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `dr_uid` int(11) NOT NULL,
  `p_uid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `notes` varchar(100) NOT NULL,
  `p_notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`dr_uid`, `p_uid`, `date`, `notes`, `p_notes`) VALUES
(2, 3, '2014-11-04 13:00:00', 'New pacient.', ''),
(2, 3, '2014-11-26 11:30:00', 'Unidentified issues regarding a specific organ and whatnot. Might be a common non-issue or terminal.', 'Do not eat any mangos at least 7 hours before the appointment.'),
(2, 3, '2014-11-28 15:15:00', 'Follow-up on previous consultation.', '');

-- --------------------------------------------------------

--
-- Table structure for table `user-info`
--

CREATE TABLE IF NOT EXISTS `user-info` (
`uid` int(11) NOT NULL,
  `active` int(11) DEFAULT '0',
  `usertype` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `doctor` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user-info`
--

INSERT INTO `user-info` (`uid`, `active`, `usertype`, `email`, `firstname`, `lastname`, `city`, `address`, `doctor`) VALUES
(1, 1, 'admin', 'vladvidac@gmail.com', 'Vlad', 'Vidac', '', '', ''),
(2, 1, 'doctor', 'thedoctor@email.com', 'Perry', 'Cox', '', '', ''),
(3, 1, 'pacient', 'thepacient@email.com', 'John', 'Smith', 'Timisoara', 'Blvd. 1 Decembrie 201', 'Perry Cox');

-- --------------------------------------------------------

--
-- Table structure for table `user-login`
--

CREATE TABLE IF NOT EXISTS `user-login` (
`uid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user-login`
--

INSERT INTO `user-login` (`uid`, `email`, `password`) VALUES
(1, '2f0d064289facc3ca8fc620070b52513', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'b4ef7cf18a95299dea834de1dec9cd47', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, '61118274bcae72d1816a80569adcfaaf', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
 ADD UNIQUE KEY `date` (`date`);

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
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user-login`
--
ALTER TABLE `user-login`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
