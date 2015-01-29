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
('9655985000',	-2266.15);

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
(9,	'2015-01-19',	'9655985000',	2.44,	1.200),
(10,	'2015-01-19',	'9655985000',	21.56,	0.431),
(11,	'2015-01-19',	'9655985000',	0.22,	0.004),
(12,	'2015-01-19',	'9655985000',	2.08,	0.042),
(13,	'2015-01-19',	'9655985000',	1.49,	0.030),
(14,	'2015-01-19',	'9655985000',	1.89,	0.038),
(15,	'2015-01-19',	'9655985000',	0.18,	0.004),
(16,	'2015-01-19',	'9655985000',	2.60,	0.052),
(17,	'2015-01-21',	'9655985000',	999.99,	21.568),
(18,	'2015-01-21',	'9655985000',	2.28,	0.046),
(19,	'2015-01-21',	'9655985000',	9.56,	0.191),
(20,	'2015-01-21',	'9655985000',	0.65,	0.013),
(21,	'2015-01-26',	'9655985000',	0.69,	0.014),
(22,	'2015-01-27',	'9655985000',	981.38,	19.628),
(23,	'2015-01-27',	'9655985000',	0.97,	0.019),
(24,	'2015-01-28',	'7639050900',	0.00,	0.000),
(25,	'2015-01-28',	'9655985000',	0.78,	0.016),
(26,	'2015-01-28',	'9655985000',	28.89,	0.578),
(27,	'2015-01-28',	'9655985000',	1.83,	0.037),
(28,	'2015-01-29',	'9655985000',	79.26,	1.585),
(29,	'2015-01-29',	'9655985000',	143.88,	2.878),
(30,	'2015-01-29',	'9655985000',	335.65,	6.713);

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
(30,	'2015-01-19 00:18:20',	'9655985000',	'LoggedIn',	3),
(31,	'2015-01-19 00:44:12',	'9655985000',	'LoggedOut',	3),
(32,	'2015-01-18 18:30:00',	'9655985000',	'billed 21.555555555556',	3),
(33,	'2015-01-19 00:44:49',	'9655985000',	'LoggedIn',	3),
(34,	'2015-01-19 00:45:05',	'9655985000',	'LoggedOut',	3),
(35,	'2015-01-18 18:30:00',	'9655985000',	'billed 0.22222222222222',	3),
(36,	'2015-01-19 00:48:12',	'9655985000',	'LoggedIn',	3),
(37,	'2015-01-19 00:50:42',	'9655985000',	'LoggedOut',	3),
(38,	'2015-01-18 18:30:00',	'9655985000',	'billed 2.0833333333333',	3),
(39,	'2015-01-19 00:50:49',	'9655985000',	'LoggedIn',	3),
(40,	'2015-01-19 00:52:36',	'9655985000',	'LoggedOut',	3),
(41,	'2015-01-18 18:30:00',	'9655985000',	'billed 1.4861111111111',	3),
(42,	'2015-01-19 00:52:44',	'9655985000',	'LoggedIn',	3),
(43,	'2015-01-19 00:55:00',	'9655985000',	'LoggedOut',	3),
(44,	'2015-01-18 18:30:00',	'9655985000',	'billed 1.8888888888889',	3),
(45,	'2015-01-19 00:55:07',	'9655985000',	'LoggedIn',	3),
(46,	'2015-01-19 00:55:20',	'9655985000',	'LoggedOut',	3),
(47,	'2015-01-18 18:30:00',	'9655985000',	'billed 0.18055555555556',	3),
(48,	'2015-01-19 00:55:28',	'9655985000',	'LoggedIn',	3),
(49,	'2015-01-19 00:58:35',	'9655985000',	'LoggedOut',	3),
(50,	'2015-01-18 18:30:00',	'9655985000',	'billed 2.5972222222222',	3),
(51,	'2015-01-20 18:13:36',	'9655985000',	'LoggedIn',	3),
(52,	'2015-01-21 15:47:40',	'9655985000',	'LoggedOut',	3),
(53,	'2015-01-20 18:30:00',	'9655985000',	'billed 1078.3888888889',	3),
(54,	'2015-01-21 15:48:41',	'9655985000',	'LoggedIn',	3),
(55,	'2015-01-21 15:51:25',	'9655985000',	'LoggedOut',	3),
(56,	'2015-01-20 18:30:00',	'9655985000',	'billed 2.2777777777778',	3),
(57,	'2015-01-21 16:03:50',	'9655985000',	'LoggedIn',	3),
(58,	'2015-01-21 16:15:18',	'9655985000',	'LoggedOut',	3),
(59,	'2015-01-20 18:30:00',	'9655985000',	'billed 9.5555555555556',	3),
(60,	'2015-01-21 16:15:40',	'9655985000',	'LoggedIn',	3),
(61,	'2015-01-21 16:16:27',	'9655985000',	'LoggedOut',	3),
(62,	'2015-01-20 18:30:00',	'9655985000',	'billed 0.65277777777778',	3),
(63,	'2015-01-22 09:16:25',	'9655985000',	'LoggedIn',	3),
(64,	'2015-01-26 14:25:59',	'9655985000',	'LoggedIn',	3),
(65,	'2015-01-26 14:26:49',	'9655985000',	'LoggedOut',	3),
(66,	'2015-01-25 18:30:00',	'9655985000',	'billed 0.69444444444444',	3),
(67,	'2015-01-26 14:27:04',	'9655985000',	'LoggedIn',	3),
(68,	'2015-01-27 10:04:43',	'9655985000',	'LoggedOut',	3),
(69,	'2015-01-26 18:30:00',	'9655985000',	'billed 981.375',	3),
(70,	'2015-01-27 10:04:54',	'9655985000',	'LoggedIn',	3),
(71,	'2015-01-27 10:06:04',	'9655985000',	'LoggedOut',	3),
(72,	'2015-01-26 18:30:00',	'9655985000',	'billed 0.97222222222222',	3),
(73,	'2015-01-27 10:06:14',	'7639050900',	'LoggedIn',	3),
(74,	'2015-01-27 22:23:46',	'7639050900',	'LoggedOut',	3),
(75,	'2015-01-27 18:30:00',	'7639050900',	'billed 0',	3),
(76,	'2015-01-27 22:23:55',	'9655985000',	'LoggedIn',	3),
(77,	'2015-01-27 22:24:51',	'9655985000',	'LoggedOut',	3),
(78,	'2015-01-27 18:30:00',	'9655985000',	'billed 0.77777777777778',	3),
(79,	'2015-01-27 22:24:59',	'9655985000',	'LoggedIn',	3),
(80,	'2015-01-27 22:59:39',	'9655985000',	'LoggedOut',	3),
(81,	'2015-01-27 18:30:00',	'9655985000',	'billed 28.888888888889',	3),
(82,	'2015-01-27 22:59:48',	'9655985000',	'LoggedIn',	3),
(83,	'2015-01-28 16:50:28',	'9655985000',	'LoggedIn',	3),
(84,	'2015-01-28 16:52:40',	'9655985000',	'LoggedOut',	3),
(85,	'2015-01-27 18:30:00',	'9655985000',	'billed 1.8333333333333',	3),
(86,	'2015-01-28 16:52:53',	'9655985000',	'LoggedIn',	3),
(87,	'2015-01-28 19:41:23',	'9655985000',	'LoggedIn',	3),
(88,	'2015-01-28 21:16:30',	'9655985000',	'LoggedOut',	3),
(89,	'2015-01-28 18:30:00',	'9655985000',	'billed 79.263888888889',	3),
(90,	'2015-01-28 21:18:16',	'9655985000',	'LoggedIn',	3),
(91,	'2015-01-29 00:10:55',	'9655985000',	'LoggedOut',	3),
(92,	'2015-01-28 18:30:00',	'9655985000',	'billed 143.875',	3),
(93,	'2015-01-29 09:46:30',	'9655985000',	'LoggedIn',	3),
(94,	'2015-01-29 16:29:17',	'9655985000',	'LoggedOut',	3),
(95,	'2015-01-28 18:30:00',	'9655985000',	'billed 335.65277777778',	3),
(96,	'2015-01-29 16:29:32',	'9655985000',	'LoggedIn',	3);

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
('9655985000',	3,	'2015-01-29 16:29:32');

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
  CONSTRAINT `pricingplan_ibfk_3` FOREIGN KEY (`user`) REFERENCES `users` (`contact`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pricingplan_ibfk_4` FOREIGN KEY (`plan`) REFERENCES `pricingmodels` (`code`) ON UPDATE CASCADE
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
('7639050900',	'sarthak',	'5f4dcc3b5aa765d61d8327deb882cf99',	2,	'2015-01-27'),
('7876565456',	'lama',	'5f4dcc3b5aa765d61d8327deb882cf99',	3,	'2015-01-26'),
('7876765456',	'lama',	'5f4dcc3b5aa765d61d8327deb882cf99',	3,	'curdate()'),
('8876676567',	'neo',	'cc3460fbdf75c9693566146e53f5c922',	3,	'2015-01-19'),
('8975647865',	'aasfwefwef',	'a10fc0bea0cf8d8533c88fb3313dda76',	2,	'2015-01-27'),
('8987890945',	'prateek',	'5f4dcc3b5aa765d61d8327deb882cf99',	3,	''),
('9655985000',	'prateek',	'5f4dcc3b5aa765d61d8327deb882cf99',	3,	'2015-01-16'),
('9655985001',	'Prateek',	'5f4dcc3b5aa765d61d8327deb882cf99',	1,	'2015-01-27'),
('9655985002',	'Prateek',	'5f4dcc3b5aa765d61d8327deb882cf99',	1,	'2015-01-27'),
('9876543212',	'yguyfufufy',	'445f869f44dde347c1052d055dc69669',	2,	'2015-01-27');

-- 2015-01-29 18:13:33
