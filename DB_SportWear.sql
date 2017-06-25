-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2017 at 12:12 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DB_SportWear`
--
CREATE DATABASE IF NOT EXISTS `DB_SportWear` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `DB_SportWear`;
-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `CategoryName` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `Discount` float(10) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `description` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `quantity` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `cost` float(10),
  `categID` int(11) DEFAULT NULL,
  `customID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `NameUser` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `passwd` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `Role` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD KEY `CategID` (`CategID`),
  ADD KEY `CustomID` (`CustomID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `Products_ibfk_1` FOREIGN KEY (`CategID`) REFERENCES `Category` (`CategoryID`),
  ADD CONSTRAINT `Products_ibfk_2` FOREIGN KEY (`CustomID`) REFERENCES `Users` (`CustomerID`);


--
-- Base Categories for table `Category``
--
INSERT INTO `Category`(`CategoryName`, `Discount`) VALUES("T-Shirt", 0);
INSERT INTO `Category`(`CategoryName`, `Discount`) VALUES("Pants", 0);
INSERT INTO `Category`(`CategoryName`, `Discount`) VALUES("Runners", 0);
INSERT INTO `Category`(`CategoryName`, `Discount`) VALUES("Accesories", 0);
INSERT INTO `Category`(`CategoryName`, `Discount`) VALUES("Protectors", 0);

--
-- CreatE INSERT `Products`
--
INSERT INTO `products` (`productID`, `name`, `description`, `quantity`, `cost`, `categID`, `customID`) VALUES ('1', 'Asiscs 56h', NULL, NULL, NULL, '1', NULL),
('2', 'Polo 98kk', NULL, NULL, NULL, '1', NULL),
('3', 'Nike x45', NULL, NULL, NULL, '1', NULL),
('4', 'Diesel', NULL, NULL, NULL, '2', NULL),
('5', 'Marithe Francois Girbaud', NULL, NULL, NULL, '2', NULL),
('6', 'Adidas', NULL, NULL, NULL, '3', NULL),
('7', 'Apple watch', NULL, NULL, NULL, '4', NULL),
('8', 'Cap Under Armor', NULL, NULL, NULL, '4', NULL),
('9', 'under clothes', NULL, NULL, NULL, '4', NULL),
('10', 'Mp3', NULL, NULL, NULL, '4', NULL),
('11', 'SunBlock', NULL, NULL, NULL, '5', NULL),
('12', 'swimsuit', NULL, NULL, NULL, '5', NULL),
('13', 'hairband', NULL, NULL, NULL, '5', NULL),
('14', 'hat', NULL, NULL, NULL, '5', NULL);
--
-- Creation of table `Sales``
--
CREATE TABLE `Sales` ( 
  `Month` VARCHAR(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL , 
  `Earnings` DECIMAL(15) NOT NULL 
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_spanish_ci;

--
-- Data for `Sales` table, to make the graphic.
--
INSERT INTO `Sales`(`Month`, `Earnings`) VALUES("January", 1000000);
INSERT INTO `Sales`(`Month`, `Earnings`) VALUES("February", 5000000);
INSERT INTO `Sales`(`Month`, `Earnings`) VALUES("March", 20000000);
INSERT INTO `Sales`(`Month`, `Earnings`) VALUES("April", 900000);
INSERT INTO `Sales`(`Month`, `Earnings`) VALUES("May", 1500000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
