CREATE DATABASE `sips` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sips`;

CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `imgLink` varchar(100) NOT NULL,
  `imgAlt` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `cardsairline` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `logoLink` varchar(100) NOT NULL,
  `logoAlt` varchar(45) NOT NULL,
  `nbMembers` int(11) NOT NULL,
  `nbCountries` int(11) NOT NULL,
  `nbPassengers` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `sips`.`partners` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `imgLink` VARCHAR(100) NOT NULL,
  `imgAlt` VARCHAR(45) NOT NULL,
  `link` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));
