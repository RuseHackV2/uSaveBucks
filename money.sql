-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2015 at 02:43 PM
-- Server version: 5.6.27-0ubuntu1
-- PHP Version: 5.6.14-1+deb.sury.org~wily+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `money`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE IF NOT EXISTS `budgets` (
  `budget_id` int(11) NOT NULL,
  `master_id` int(11) NOT NULL,
  `link` varchar(22) NOT NULL,
  `description` varchar(48) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`budget_id`, `master_id`, `link`, `description`) VALUES
(9, 0, 'pesho', 'Личен бльяаоь'),
(8, 1, 'familybudget', 'сем. Стойчеви'),
(13, 0, 'test', 'testov'),
(21, 1, 'asda1231', 'asdadasd'),
(22, 1, 'asda', 'asdadasd');

-- --------------------------------------------------------

--
-- Table structure for table `budget_members`
--

CREATE TABLE IF NOT EXISTS `budget_members` (
  `family_id` int(11) NOT NULL,
  `budget_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budget_members`
--

INSERT INTO `budget_members` (`family_id`, `budget_id`, `user_id`, `money`) VALUES
(1, 9, 3, 158),
(2, 8, 3, 555),
(3, 8, 1, 1215),
(7, 21, 1, 0),
(8, 22, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE IF NOT EXISTS `money` (
  `money_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(32) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`money_id`, `user_id`, `bank_name`, `value`) VALUES
(1, 1, 'PayPal', 658),
(2, 1, 'OBB', 311),
(3, 3, 'EasyCash', 1000),
(4, 3, 'CodeBank', 2235),
(6, 3, 'ProCredit', 667),
(13, 3, 'cash', 50),
(14, 1, 'cash', 1789),
(15, 1, 'ДДК', 8855),
(16, 1, 'OPP', 123141),
(17, 1, 'Test', 123),
(18, 1, 'TestBAnk', 22134124);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `sess_id` int(11) NOT NULL,
  `sess_data` text NOT NULL,
  `valid_until` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`sess_id`, `sess_data`, `valid_until`) VALUES
(66, 'a:7:{s:7:"user_id";s:1:"1";s:8:"username";s:6:"Velian";s:5:"email";s:15:"velian99@abv.bg";s:6:"salary";s:4:"5000";s:4:"wage";s:1:"0";s:4:"food";s:3:"350";s:9:"household";s:4:"1300";}', 1446990187);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(42) NOT NULL,
  `salary` int(11) NOT NULL,
  `wage` int(11) NOT NULL,
  `food` int(11) NOT NULL,
  `household` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `pass`, `email`, `salary`, `wage`, `food`, `household`) VALUES
(1, 'Velian', 'qwerty', 'velian99@abv.bg', 5000, 0, 350, 1300),
(3, 'dimitar', 'qwerty', 'tomov.email@gmail.com', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`budget_id`),
  ADD UNIQUE KEY `link` (`link`);

--
-- Indexes for table `budget_members`
--
ALTER TABLE `budget_members`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`money_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sess_id` (`sess_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `budget_members`
--
ALTER TABLE `budget_members`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `money_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
