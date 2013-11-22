-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2013 at 10:04 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `influenceandco`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`) VALUES
(1, 'Bacon'),
(2, 'Eggs'),
(3, 'Cheese'),
(4, 'Hamburgers'),
(5, 'Omlet'),
(6, 'Marshmellow'),
(7, 'Orange'),
(8, 'Candy Cane'),
(9, 'Peanut'),
(10, 'Banana'),
(11, 'Pumpkin'),
(12, 'Bread');
