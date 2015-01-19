-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `stealth`;
CREATE DATABASE `stealth` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `stealth`;

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `user` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  KEY `user` (`user`),
  CONSTRAINT `account_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`contact`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `account`;
INSERT INTO `account` (`user`, `amount`) VALUES
('9655985000',	428.08);

DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `amount` decimal(5,2) NOT NULL,
  `billedUnits` decimal(10,3) NOT NULL,
  PRIMARY KEY (`sno`),
  KEY `user` (`user`),
  CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`contact`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `bills`;
INSERT INTO `bills` (`sno`, `time`, `user`, `amount`, `billedUnits`) VALUES
(1,	'0000-00-00 ',	'9655985000',	2.19,	0.439),
(2,	'0000-00-00 ',	'9655985000',	2.19,	0.044),
(3,	'2015-01-19 ',	'9655985000',	2.19,	0.044),
(4,	'2015-01-19 ',	'9655985000',	29.79,	0.596),
(5,	'2015-01-19 ',	'9655985000',	30.21,	0.604),
(6,	'2015-01-19 ',	'9655985000',	0.03,	0.001),
(7,	'2015-01-19 ',	'9655985000',	0.08,	0.002),
(8,	'2015-01-19 ',	'9655985000',	0.07,	0.001),
(9,	'2015-01-19',	'9655985000',	2.44,	1.200);

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL,
  `system` int(11) DEFAULT NULL,
  PRIMARY KEY (`sno`),
  KEY `user` (`user`),
  CONSTRAINT `log_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`contact`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `log`;
INSERT INTO `log` (`sno`, `time`, `user`, `action`, `system`) VALUES
(1,	'2015-01-18 19:10:01',	'9655985000',	'LoggedIn',	3),
(2,	'2015-01-18 20:18:54',	'9655985000',	'LoggedOut',	3),
(3,	'2015-01-18 20:51:43',	'9655985000',	'LoggedIn',	3),
(4,	'2015-01-18 20:51:45',	'9655985000',	'LoggedOut',	3),
(5,	'2015-01-18 20:56:06',	'9655985000',	'LoggedOut',	3),
(6,	'2015-01-18 20:59:17',	'9655985000',	'LoggedOut',	3),
(7,	'2015-01-18 20:59:39',	'9655985000',	'LoggedOut',	3),
(8,	'2015-01-18 21:45:18',	'9655985000',	'LoggedIn',	3),
(9,	'2015-01-18 21:45:20',	'9655985000',	'LoggedOut',	3),
(10,	'2015-01-18 21:46:29',	'9655985000',	'LoggedOut',	3),
(11,	'2015-01-18 21:47:06',	'9655985000',	'LoggedOut',	3),
(12,	'2015-01-18 21:47:56',	'9655985000',	'LoggedOut',	3),
(13,	'2015-01-18 22:27:10',	'9655985000',	'LoggedIn',	3),
(14,	'2015-01-18 22:27:43',	'9655985000',	'LoggedOut',	3),
(15,	'2015-01-18 22:29:21',	'9655985000',	'LoggedOut',	3),
(16,	'2015-01-18 23:01:50',	'9655985000',	'billed 2.4',	NULL),
(17,	'2015-01-18 23:02:55',	'9655985000',	'LoggedOut',	3),
(18,	'2015-01-18 23:02:55',	'9655985000',	'billed 29.791666666667',	3),
(19,	'2015-01-18 23:03:25',	'9655985000',	'LoggedOut',	3),
(20,	'2015-01-18 23:03:25',	'9655985000',	'billed 30.208333333333',	3),
(21,	'2015-01-18 23:36:41',	'9655985000',	'LoggedIn',	3),
(22,	'2015-01-18 23:36:43',	'9655985000',	'LoggedOut',	3),
(23,	'2015-01-18 18:30:00',	'9655985000',	'billed 0.027777777777778',	3),
(24,	'2015-01-18 23:39:16',	'9655985000',	'LoggedIn',	3),
(25,	'2015-01-18 23:39:22',	'9655985000',	'LoggedOut',	3),
(26,	'2015-01-18 18:30:00',	'9655985000',	'billed 0.083333333333333',	3),
(27,	'2015-01-18 23:40:20',	'9655985000',	'LoggedIn',	3),
(28,	'2015-01-18 23:40:25',	'9655985000',	'LoggedOut',	3),
(29,	'2015-01-18 18:30:00',	'9655985000',	'billed 0.069444444444444',	3),
(30,	'2015-01-19 00:18:20',	'9655985000',	'LoggedIn',	3);

DROP TABLE IF EXISTS `loggedon`;
CREATE TABLE `loggedon` (
  `user` varchar(30) NOT NULL,
  `system` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `user` (`user`),
  KEY `system` (`system`),
  CONSTRAINT `loggedon_ibfk_5` FOREIGN KEY (`user`) REFERENCES `users` (`contact`),
  CONSTRAINT `loggedon_ibfk_6` FOREIGN KEY (`system`) REFERENCES `systems` (`number`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `loggedon`;
INSERT INTO `loggedon` (`user`, `system`, `time`) VALUES
('9655985000',	3,	'2015-01-19 00:18:20');

DROP TABLE IF EXISTS `pricingmodels`;
CREATE TABLE `pricingmodels` (
  `code` varchar(6) NOT NULL,
  `amount` int(11) NOT NULL,
  `cycle` varchar(10) NOT NULL,
  `timevalue` int(11) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `pricingmodels`;
INSERT INTO `pricingmodels` (`code`, `amount`, `cycle`, `timevalue`) VALUES
('400M1',	400,	'month',	1),
('50H1',	50,	'hour',	1);

DROP TABLE IF EXISTS `pricingplan`;
CREATE TABLE `pricingplan` (
  `plan` varchar(6) NOT NULL,
  `user` varchar(30) NOT NULL,
  KEY `user` (`user`),
  KEY `plan` (`plan`),
  CONSTRAINT `pricingplan_ibfk_4` FOREIGN KEY (`plan`) REFERENCES `pricingmodels` (`code`) ON UPDATE CASCADE,
  CONSTRAINT `pricingplan_ibfk_3` FOREIGN KEY (`user`) REFERENCES `users` (`contact`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `pricingplan`;
INSERT INTO `pricingplan` (`plan`, `user`) VALUES
('50H1',	'9655985000');

DROP TABLE IF EXISTS `systems`;
CREATE TABLE `systems` (
  `loggedIn` tinyint(4) NOT NULL DEFAULT '0',
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(10) NOT NULL,
  `sysNo` int(11) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `systems`;
INSERT INTO `systems` (`loggedIn`, `number`, `group`, `sysNo`) VALUES
(0,	1,	'XBOX',	1),
(1,	2,	'XBOX',	2),
(0,	3,	'PC',	1),
(0,	4,	'PC',	2);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `contact` varchar(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `joindate` varchar(10) NOT NULL,
  PRIMARY KEY (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `users`;
INSERT INTO `users` (`contact`, `uname`, `password`, `level`, `joindate`) VALUES
('8876676567',	'neo',	'cc3460fbdf75c9693566146e53f5c922',	3,	'2015-01-19'),
('9655985000',	'prateek',	'5f4dcc3b5aa765d61d8327deb882cf99',	3,	'2015-01-16');

-- 2015-01-19 00:38:16
