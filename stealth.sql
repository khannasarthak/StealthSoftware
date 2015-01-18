-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2015 at 02:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stealth`
--
CREATE DATABASE IF NOT EXISTS `stealth` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `stealth`;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL,
  KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `log`
--

TRUNCATE TABLE `log`;
--
-- Dumping data for table `log`
--

INSERT INTO `log` (`time`, `user`, `action`) VALUES
('2015-01-18 08:31:19', '9655985000', 'log out from system 5');

-- --------------------------------------------------------

--
-- Table structure for table `loggedon`
--

DROP TABLE IF EXISTS `loggedon`;
CREATE TABLE IF NOT EXISTS `loggedon` (
  `user` varchar(30) NOT NULL,
  `system` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `user` (`user`),
  KEY `system` (`system`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `loggedon`
--

TRUNCATE TABLE `loggedon`;
--
-- Dumping data for table `loggedon`
--

INSERT INTO `loggedon` (`user`, `system`, `time`) VALUES
('9655985000', 3, '2015-01-18 09:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `pricingmodels`
--

DROP TABLE IF EXISTS `pricingmodels`;
CREATE TABLE IF NOT EXISTS `pricingmodels` (
  `code` varchar(6) NOT NULL,
  `amount` int(11) NOT NULL,
  `cycle` varchar(10) NOT NULL,
  `timevalue` int(11) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `pricingmodels`
--

TRUNCATE TABLE `pricingmodels`;
--
-- Dumping data for table `pricingmodels`
--

INSERT INTO `pricingmodels` (`code`, `amount`, `cycle`, `timevalue`) VALUES
('400M1', 400, 'month', 1),
('50H1', 50, 'hour', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pricingplan`
--

DROP TABLE IF EXISTS `pricingplan`;
CREATE TABLE IF NOT EXISTS `pricingplan` (
  `plan` varchar(6) NOT NULL,
  `user` varchar(30) NOT NULL,
  KEY `user` (`user`),
  KEY `plan` (`plan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `pricingplan`
--

TRUNCATE TABLE `pricingplan`;
--
-- Dumping data for table `pricingplan`
--

INSERT INTO `pricingplan` (`plan`, `user`) VALUES
('50H1', '9655985000');

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

DROP TABLE IF EXISTS `systems`;
CREATE TABLE IF NOT EXISTS `systems` (
  `loggedIn` tinyint(4) NOT NULL DEFAULT '0',
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(10) NOT NULL,
  `sysNo` int(11) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Truncate table before insert `systems`
--

TRUNCATE TABLE `systems`;
--
-- Dumping data for table `systems`
--

INSERT INTO `systems` (`loggedIn`, `number`, `group`, `sysNo`) VALUES
(0, 1, 'XBOX', 1),
(1, 2, 'XBOX', 2),
(0, 3, 'PC', 1),
(0, 4, 'PC', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `contact` varchar(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`contact`, `uname`, `password`, `level`, `joindate`) VALUES
('9655985000', 'prateek', '5f4dcc3b5aa765d61d8327deb882cf99', 3, '2015-01-16 13:35:52');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`contact`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `loggedon`
--
ALTER TABLE `loggedon`
  ADD CONSTRAINT `loggedon_ibfk_5` FOREIGN KEY (`user`) REFERENCES `users` (`contact`),
  ADD CONSTRAINT `loggedon_ibfk_6` FOREIGN KEY (`system`) REFERENCES `systems` (`number`) ON UPDATE CASCADE;

--
-- Constraints for table `pricingplan`
--
ALTER TABLE `pricingplan`
  ADD CONSTRAINT `pricingplan_ibfk_4` FOREIGN KEY (`plan`) REFERENCES `pricingmodels` (`code`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pricingplan_ibfk_3` FOREIGN KEY (`user`) REFERENCES `users` (`contact`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
