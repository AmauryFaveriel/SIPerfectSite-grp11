CREATE DATABASE `sips` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sips`;

CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `imgLink` varchar(100) NOT NULL,
  `imgAlt` varchar(45) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE `cards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `note` int(2) NOT NULL,
  `imgLink` varchar(100) NOT NULL,
  `imgAlt` varchar(45) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `opening` varchar(5) NOT NULL,
  `closing` varchar(5) NOT NULL,
  `link` varchar(100) NOT NULL,
  `nbTel` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imgLink` varchar(100) NOT NULL,
  `imgAlt` varchar(45) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE `twitter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `countname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;