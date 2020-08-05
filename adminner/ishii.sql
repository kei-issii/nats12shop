-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `ishii_sample` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ishii_sample`;

DROP TABLE IF EXISTS `ishii`;
CREATE TABLE `ishii` (
  `マスター` int(29) NOT NULL,
  PRIMARY KEY (`マスター`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ishii` (`マスター`) VALUES
(30);

-- 2020-07-21 11:16:50
